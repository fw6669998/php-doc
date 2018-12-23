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
const in = 'D:\temp\php-chunked-xhtml\\';
const out = 'D:\temp\data\\';

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
    modifyUrl($ref);
    modifyUrl($dom);
    $dom->appendChild($ref);

    $html = $dom->outertext;
    $html = modifyStr($html);

    file_put_contents(out . '\\' . $file, $html);
    echo $file . line;
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
        if (trim($html)=='') continue;
        $html = modifyStr($html);
        if (strpos($outFile, '::')) continue;
        echo $outFile . line;
        file_put_contents(out . '\\' . $outFile, $html);
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
//    print_r($clses);
    return $clses;
}

function handleAll()
{
    $clses = getClass();
    $clses['function'] = 1;
    $clses['class'] = 1;
    $clses['reserved.variables'] = 1;

    if (@$handle = opendir(in)) {
        while (($file = readdir($handle)) !== false) {
            $tokens = explode('.', $file);
            $prefix = $tokens[0];
            if (@$clses[$prefix]) {
                handle($file);
            }
//            if ($tokens[count($tokens) - 2] == 'constants') {  //收集常量
//                handleConst($file);
//            }
        }
    }
}

//date('y');
//handle('function.date-timezone-set.html');
//$cls = getClass();
//print_r($cls);
handleAll();