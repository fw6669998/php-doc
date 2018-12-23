###介绍
适用于phpstorm的php中文文档

###使用
    下载文档
        /document/out.zip, 解压
    设置文档目录
        File -> Settings -> Languages&Framworks -> PHP -> PHP Runtime -> Default stubs path -> 选择文档目录
    查看文档
        在方法上按 Ctrl+Q 
    
###数据来源
    php中文文档,  http://hk1.php.net/distributions/manual/php_manual_zh.tar.gz
    phpstorm的原php程序文档, https://codeload.github.com/JetBrains/phpstorm-stubs/zip/2018.1.2

###文档制作
    99%程序处理
        handler.php     将下载的中文文档进行处理
            清楚多余内容
            处理衔接, 方法可直接跳转, 其他衔接为外链(到php.net)
        attacher.php    将处理后的内容替换现有的jetbrain英文文档
        
    1%手动处理
        操全局变量, superglobals/_superglobals.php
        
    如需制作其他文档语言文档, 可从php.net下载相应语言的文档,步骤同上
