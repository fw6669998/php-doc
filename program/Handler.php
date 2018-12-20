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
const website = 'http://php.net/manual/zh/';
const root = 'D:\temp\php-chunked-xhtml\\';

/**
 * 加载文本内容
 * @param $name
 * @return bool|string
 */
function loadStr($name)
{
    $path = root . $name . '.html';
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
        //echo $links[$i]->outertext."\r\n";
        $a = $links[$i];
        $href = $a->href;
        if (strstr($href, 'http://')) {    //不处理外链
            continue;
        }
        $known = 0;
        foreach (['function.', '::'] as $item) {
            if (strstr($href, $item)) {
                $known = 1;
                break;
            }
            if (strstr($href, $item)) {
                //TODO 收集类
            }
        }
        if ($known) {   //已知类型, 方法,类静态方法..
            $href = '{@link ' . $a->innertext . '}';
            $a->outertext = $href;
        } else {        //如果未匹配到任何类型, 改成官网外链
            $href = str_replace('.html', '.php', $href);    //去掉html
            $a->href = website . $href;
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
 * 处理单个函数
 */
function handle($name='')
{
    $name = 'function.date';
    $content = loadStr($name);
    $selector = str_get_html($content);
    $dom = $selector->find("div[id='$name']", 0);
    modifyUrl($dom);
    $html = $dom->outertext;
    $html = modifyStr($html);
    date('xxx');
    echo $html;
}

handle();
