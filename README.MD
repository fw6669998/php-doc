### 介绍

适用于phpstorm的php中文文档

### 使用

    下载文档
        https://github.com/fw6669998/php-doc/blob/master/document/out.zip
    设置文档目录
        File -> Settings -> Languages&Framworks -> PHP -> PHP Runtime -> Advanced settings -> Default stubs path -> 选择文档目录
        // 新建项目会改回原来的英文文档, 每个项目都使用该文档,还需要在 File->Default Setting中再设置下
    查看文档
        在方法上按 Ctrl+Q
        //快捷键可能会不起作用, 需要在File -> Setting -> Keymap中搜索quick documentation, 重新设置为其他快捷键
![img](https://github.com/fw6669998/php-doc/blob/master/example.png) 
    
### 数据来源

    php中文文档,  http://hk1.php.net/distributions/manual/php_manual_zh.tar.gz
    phpstorm的原php程序文档, https://codeload.github.com/JetBrains/phpstorm-stubs/zip/2018.1.2

### 文档制作

    99%程序处理
        handler.php     将下载的中文文档进行处理
            清楚多余内容
            处理衔接, 方法可直接跳转, 其他衔接为外链(到php.net)
        attacher.php    将处理后的内容替换现有的jetbrain英文文档
    1%手动处理
        操全局变量, superglobals/_superglobals.php
        array,list,empty等函数,部分格式出现错误的函数
    如需制作其他文档语言文档, 可从php.net下载相应语言的文档,步骤同上

### English introduction

    PHP Chinese Documents for phpstorm
    The use of
    Download documents
    /document/out.zip, decompression
    Setting Document Catalog
    File - > Settings - > Languages & Framworks - > PHP - > PHP Runtime - > Default stubs path - > Select document directory
    View documents
    In method, press Ctrl+Q
    
    Data Source
    PHP Chinese document, http://hk1.php.net/distributions/manual/php_manual_zh.tar.gz
    The original PHP program document of phpstorm, https://codeload.github.com/JetBrains/phpstorm-stubs/zip/2018.1.2
    
    Document Making
    99% Processing
    Handler.php will process the downloaded Chinese documents
    Clear the redundancy
    Processing links, methods can jump directly, other links are external chains (to php. net)
    Attacher. PHP replaces the processed content with the existing jetbrain English document
    1% Manual Processing
    Operate global variables, superglobals/_superglobals.php
    If you need to make documents in other document languages, you can download documents in the corresponding language from php. net. The steps are the same as above.
    
