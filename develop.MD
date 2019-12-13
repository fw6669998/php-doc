###文档制作过程

数据来源

       php文档: https://www.php.net/docs.php
       phpstorm默认php文档: https://github.com/JetBrains/phpstorm-stubs       

处理程序

    99%程序处理
    
        handler.php     文档处理文件
            修改文档样式
            清楚多余内容
            处理衔接, 方法可直接跳转, 其他衔接为外链(到php.net)
            文件保存到temp目录,供下一步使用
            
        attacher.php    文档附加文件
            将处理后的内容替换现有的jetbrain英文文档
        
    1%手动处理
        将temp目录的下处理过的内容手动附加到jetbrain英文文档上
        操全局变量: superglobals/_superglobals.php
        特殊方法:   standard/_types.php   //empty(),exit()等
        魔术变量:   standard/basic.php
        
    如需制作其他文档语言文档, 可从php.net下载相应语言的文档,步骤同上
    
 ###Documentation process
 
data source

    php doument data: https://www.php.net/docs.php
    phpstorm default php document: https://github.com/JetBrains/phpstorm-stubs
    
Processing program  
    
    99% program processing.
        Handler.php document processing file. 
            Modify document styl. 
            Be aware of the superfluous content. 
            To deal with cohesion, the method can jump directly, and the other cohesion is outside the chain (to php.net). 
            Save the file to the temp directory for use in the next step.
             
        Attacher.php document attach Fil. 
            Replace the processed content with the existing jetbrain English document.
            
    1% manual processing. 
            Manually attach the processed content under the temp directory to the jetbrain English document. 
            Fuck global variables: superglobals/_superglobals.php. 
            Special methods: standard/_types.php / / empty (), exit (), etc. 
            
    To create documents in other documentation languages, you can download the documents in the corresponding language from php.net. The steps are the same as above.