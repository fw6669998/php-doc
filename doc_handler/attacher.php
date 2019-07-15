<?php
/**
 * Created by PhpStorm.
 * User: fw
 * Date: 2018/12/21
 * Time: 20:47
 */

const docIn = 'D:\Temp\data\\';
const docOut = 'D:\Temp\out';
const line = "\n";
const dataArr = [
    'AMQPBasicProperties.getContentType' => 'test comment',
    'AMQP_NOPARAM' => 'test const',
    'class.AMQPBasicProperties' => 'test class',
];

function my_dir($dir, $parent = '', &$files = [])
{
    if (@$handle = opendir($dir)) { //注意这里要加一个@，不然会有warning错误提示：）
        while (($file = readdir($handle)) !== false) {
            if ($file != ".." && $file != ".") { //排除根目录
                if (is_dir($dir . "/" . $file)) { //如果是子文件夹，就进行递归
                    my_dir($dir . "/" . $file, $parent . '/' . $file, $files);
                } else { //不然就将文件的名字存入数组
                    $files[] = $parent . '/' . $file;
                }
            }
        }
        closedir($handle);
        return $files;
    }
}

function isComment($line)
{
    foreach (['/*', '*', '*/'] as $item) {
        if (strpos($line, $item) === 0) {
            return true;
        }
    }
    return false;
}

function getComment($token, $oldComment)
{
    if (strpos($token, 'constant.') !== 0)  //不是常量替换下划线
        $token = str_replace('_', '-', $token);
    $file = docIn . $token . '.html';
    $return='';
    if (file_exists($file)) {
        if ($oldComment) {  //保留return行
            $olds = explode("\n", $oldComment);
            foreach ($olds as $old) {
                $old2 = trim($old);
                if (strpos($old2, '* @return')===0){
                    $return = $old;
                    break;
                }
            }
        }
        $comment = file_get_contents($file);
        $comment = '/**' . line . '*' . $comment . line . $return . '*/' . line;
        return $comment;
    } else {
        return $oldComment;
    }
}

function isElement($line, $type)
{
    $tokens = explode(' ', $line);
    for ($i = 0; $i < count($tokens); $i++) {
        if ($tokens[$i] == $type) {
            $name = $tokens[$i + 1];
            $name = trim($name);
            if (strpos($name, '(')) {
                $name = substr($name, 0, strpos($name, '('));
            }
            return $name;
        }
    }
    return false;
}

function isClass($line)
{
    return isElement($line, 'class');
}

function isFunction($line)
{
    return isElement($line, 'function');
}

function isConst($line)
{
//    define('AMQP_EX_TYPE_HEADERS', 'headers');
    $line = str_replace(' ', '', $line);
    $pre = "define('";
    if (strpos($line, $pre) === 0) {
        $line = str_replace($pre, '', $line);
        $const = explode("'", $line)[0];
        return $const;
    }
    return false;
}

function handle($name)
{
    $file = docOut . $name;
    $newContent = '';
    $handle = fopen($file, "r");//以只读方式打开一个文件
    $i = 0;
    $comment = '';
    $class = '';
    while (!feof($handle)) {//函数检测是否已到达文件末尾
        if ($line = fgets($handle)) {// 从文件指针中读取一行
            $line1 = str_replace(' ', '', $line);

            //注释
            if (isComment($line1)) {
                $comment .= $line;
                continue;
            }

            //类
            if ($clsName = isClass($line)) {
                $class = $clsName;

                $newComment = getComment('class.' . $class, $comment);
                $newContent .= $newComment;
                $comment = '';    //注释已使用
            }

            //函数方法
            if ($function = isFunction($line)) {
                $blankPre = strpos($line, ' ') === 0;    //前面空白是类方法的特征
                $function = $class && $blankPre ? $class . '.' . $function : 'function.' . $function;

                $newComment = getComment($function, $comment);
                $newContent .= $newComment;
                $comment = '';    //注释已使用
            }

            //常量
            if ($const = isConst($line)) {
                $newComment = getComment('constant.' . $const, $comment);
                $newContent .= $newComment;
                $comment = '';    //注释已使用
            }

            //没有匹配到任何类型内容
            if ($comment) {
                $newContent .= $comment;
                $comment = '';
            }
            $newContent .= $line;
        };
    }
    file_put_contents(docOut . $name, $newContent);
}

function handleAll()
{
    $files = [];
    my_dir(docOut, '', $files);
    foreach ($files as $file) {
        $suffix = substr(strrchr($file, '.'), 1);
        if ($suffix == 'php') {
            handle($file);
            echo $file . line;
//            break;  //test
        }
    }
}

handleAll();