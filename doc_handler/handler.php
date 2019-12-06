<?php
/**
 * Created by PhpStorm.
 * User: f
 * Date: 2018/12/20
 * Time: 17:28
 * 处理html
 */
include('./simple_html_dom.php');

const line = "\r\n";
const site = 'http://php.net/manual/zh/';    //外链站点 //也可设为本地衔接 例: file:///D:/Temp/php-chunked-xhtml/
define('in', __DIR__ . '\..\raw\php-chunked-xhtml\\');
define('temp', __DIR__ . '\..\raw\temp\\');

/**
 * 加载文本内容
 * @param $name
 * @return bool|string
 */
function loadStr($name)
{
    $path = in . $name;
    $content = file_get_contents($path) or die("Unable to open file!");
    return $content;
}

/**
 * 修改衔接
 * @param simple_html_dom $dom
 */
function modifyUrl($dom)
{
    $links = $dom->find('a');
    for ($i = 0; $i < count($links); $i++) {
        $a = $links[$i];
        $href = $a->href;
        if (strstr($href, 'http://')) {    //不处理外链
            continue;
        }

        $known = 0;
        if (strstr($href, 'function.')) {
            $known = 1;
        } else if (strstr($a->innertext, '::')) {
            $known = 1;
        }

        if ($known) {   //已知类型, 方法,类静态方法..
            $href = '{@link ' . $a->innertext . '}';
            $a->outertext = $href;
        } else {        //如果未匹配到任何类型, 改成官网外链
            $href = str_replace('.html', '.php', $href);    //网站外链为php 本地为html
            $a->href = site . $href;
        }
    }
}

/**
 * 修改文本
 */
function modifyStr($html)
{
    //防止注释异常终止
    $html = str_replace('/*', '//', $html);
    $html = str_replace('*/', '', $html);
    //重设代码颜色以便在黑色主题下查看
    $html = str_replace('#0000BB', '#9876AA', $html);
    return $html;
}

function modifyAttr($dom,$selector,$value,$attr='style'){
    $subs=$dom->find($selector);
    foreach ($subs as $sub){
        $sub->setAttribute($attr,$value);
    }
}

function modifyTag($dom, $selector,$outside, $pre, $after,$one=false){
    $subs=$dom->find($selector);
    foreach ($subs as $sub){
        if($outside)
            $sub->outertext=$pre.$sub->outertext().$after;
        else
            $sub->outertext=$pre.$sub->innertext().$after;
        if($one)
            break;
    }
}

function handleStyle($dom){
    //方法颜色
    modifyAttr($dom,'.methodname','color:#CC7832');
    modifyAttr($dom,'.function strong','color:#CC7832');
//类型颜色
    modifyAttr($dom,'.type','color:#EAB766');
//参数颜色
//modifyAttr($dom,'.parameter','color:#9070A1');
//方法描述背景
    modifyAttr($dom,'.methodsynopsis','border:1px gray;padding-left:5px;background:#232525');
//添加分隔符
//modifyAttr($dom,"div[class='refsect1']","BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px");
//note
    modifyAttr($dom,".note","border:1px gray solid");
//php代码
    modifyAttr($dom,".phpcode","border-color:gray;background:#232525");
//output
    modifyAttr($dom,".screen","background:black;padding-left:5px;");

//pre
    modifyTag($dom,"pre",false,'<span>','</span>');
//code
    modifyTag($dom,"code",false,'<span>','</span>');
//参数标签, 9070A1 编辑器紫, EE82EE 鲜艳紫, 00B5FF 鲜艳蓝,4285F4 一般蓝, 19A1FA 3A95FF ok蓝
    modifyTag($dom,'.parameter',false,'<span class="parameter" style="color:#2EACF9">','</span>');
//去除换行:参数,示例
    modifyTag($dom,".parameters .para",false,'<span>','</span>',true);
    modifyTag($dom,".examples .para",false,'<span>','</span>',true);
    modifyTag($dom,".seealso .para",false,'<span>','</span>',true);
    modifyTag($dom,".changelog .para",false,'<span>','</span>',true);
//添加分隔符,换行标签
    modifyTag($dom,"div[class='refsect1']",true,'<br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div>','');
//modifyTag($dom,"div[class='refsect1']",true,'<br></br><hr></hr>','');
    return $dom;
}

function handleConst($file = 'filesystem.consts.html')
{
    $content = loadStr($file);
    $selector = str_get_html($content);
    $name = substr($file, 0, strlen($file) - 5);

    $doms = $selector->find('strong code');
    foreach ($doms as $dom) {
//        $name = $dom->find('strong code', 0);
        if (!$dom) continue;
        $outFile = 'constant.' . $dom->innertext . '.html';
        $parent = $dom->parentNode()->parentNode();
        /** @var simple_html_dom_node $test */
        $next = $parent->nextSibling();
        if (!$next) continue;
        $next = $next->children(0);
        if (!$next) continue;
        modifyUrl($next);
        $html = $next->innertext;
        if (!$html) continue;
        if (trim($html) == '') continue;
        $html = modifyStr($html);
        if (strpos($outFile, '::')) continue;
        echo $outFile . line;
        file_put_contents(temp . '\\' . $outFile, $html);
    }
}

function getClass()
{
    $clses = [];
    if (@$handle = opendir(in)) {
        while (($file = readdir($handle)) !== false) {
            $pre = 'class.';
            if ((substr($file, 0, strlen($pre)) === $pre)) {
                $clsName = substr($file, strlen($pre), strlen($file) - strlen($pre) - 5);
                $clses[$clsName] = 1;
            }
        }
    }
    return $clses;
}

/**
 * 处理函数
 */
function handle($file = 'function.date.html')
{
    $content = loadStr($file);
    $selector = str_get_html($content);
    $name = substr($file, 0, strlen($file) - 5);
    $dom = $selector->find("div[id='$name']", 0);
    $ref = $selector->find("div[class='up']", 0);  //参考衔接
    modifyUrl($dom);
    modifyUrl($ref);
    $dom->appendChild($ref);
    handleStyle($dom);

    $html = $dom->outertext;
    $html = modifyStr($html);

    file_put_contents(temp . '\\' . $file, $html);
    echo $file . line;
}

function handleAll()
{
    $clses = getClass();
    $clses['function'] = 1;
    $clses['class'] = 1;
    $clses['reserved'] = 1;

    if (@$handle = opendir(in)) {
        while (($file = readdir($handle)) !== false) {
            $tokens = explode('.', $file);
            $prefix = $tokens[0];
            if (@$clses[$prefix]) {
                handle($file);
            }
            if ($tokens[count($tokens) - 2] == 'constants') {  //收集常量
                handleConst($file);
            }
        }
    }
}

//handle('function.substr.html');
handleAll();