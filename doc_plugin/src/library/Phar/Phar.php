<?php
// Start of Phar v.2.0.1

/**
*<div id="class.pharexception" class="reference">  <h1 class="title">The PharException class</h1>      <div class="partintro"><p class="verinfo">(Unknown)</p>      <div class="section" id="pharexception.intro">    <h2 class="title">简介</h2>    <p class="para">     The PharException class provides a phar-specific exception class     for try/catch blocks.    </p>   </div>       <div class="section" id="pharexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">PharException</strong>      </span>        <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a>      </span>        {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">Throwable</span> <span class="methodname" style="color:#CC7832">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span>  <span class="methodname" style="color:#CC7832">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>      </div>    </div>   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="http://php.net/manual/zh/pharexception.intro.unused.php">PharException</a> — The PharException class provides a phar-specific exception class     for try/catch blocks</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.phar.php">Phar</a></div></div>
*/
class PharException extends Exception  {
}

/**
*<div id="class.phar" class="reference">  <h1 class="title">The Phar class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PECL phar &gt;= 1.0.0)</p>      <div class="section" id="phar.intro">    <h2 class="title">简介</h2>    <p class="para">     The Phar class provides a high-level interface to accessing and creating     phar archives.    </p>   </div>      <div class="section" id="phar.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">Phar</strong>      </span>        <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.recursivedirectoryiterator.php" class="classname">RecursiveDirectoryIterator</a>      </span>        <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span>      </span>      <span class="oointerface">,        <span class="interfacename"><strong class="interfacename">ArrayAccess</strong></span>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// Inherited constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_AS_PATHNAME</var>}</var>      <span class="initializer"> = 32</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_AS_FILEINFO</var>}</var>      <span class="initializer"> = 0</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_AS_SELF</var>}</var>      <span class="initializer"> = 16</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_MODE_MASK</var>}</var>      <span class="initializer"> = 240</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::KEY_AS_PATHNAME</var>}</var>      <span class="initializer"> = 0</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::KEY_AS_FILENAME</var>}</var>      <span class="initializer"> = 256</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::FOLLOW_SYMLINKS</var>}</var>      <span class="initializer"> = 512</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::KEY_MODE_MASK</var>}</var>      <span class="initializer"> = 3840</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::NEW_CURRENT_AND_KEY</var>}</var>      <span class="initializer"> = 256</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::SKIP_DOTS</var>}</var>      <span class="initializer"> = 4096</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::UNIX_PATHS</var>}</var>      <span class="initializer"> = 8192</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.addemptydir.php" class="methodname" style="color:#CC7832">addEmptyDir</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dirname</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.addfile.php" class="methodname" style="color:#CC7832">addFile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$file</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.addfromstring.php" class="methodname" style="color:#CC7832">addFromString</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$contents</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.apiversion.php" class="methodname" style="color:#CC7832">apiVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.buildfromdirectory.php" class="methodname" style="color:#CC7832">buildFromDirectory</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$base_dir</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$regex</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.buildfromiterator.php" class="methodname" style="color:#CC7832">buildFromIterator</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.iterator.php" class="type Iterator" style="color:#EAB766">Iterator</a></span> <span class="parameter" style="color:#2EACF9">$iter</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$base_directory</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.cancompress.php" class="methodname" style="color:#CC7832">canCompress</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.canwrite.php" class="methodname" style="color:#CC7832">canWrite</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.compress.php" class="methodname" style="color:#CC7832">compress</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.compressallfilesbzip2.php" class="methodname" style="color:#CC7832">compressAllFilesBZIP2</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.compressallfilesgz.php" class="methodname" style="color:#CC7832">compressAllFilesGZ</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.compressfiles.php" class="methodname" style="color:#CC7832">compressFiles</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fname</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">PharData</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.converttodata.php" class="methodname" style="color:#CC7832">convertToData</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">Phar</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.converttoexecutable.php" class="methodname" style="color:#CC7832">convertToExecutable</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.copy.php" class="methodname" style="color:#CC7832">copy</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$oldfile</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$newfile</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.count.php" class="methodname" style="color:#CC7832">count</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.createdefaultstub.php" class="methodname" style="color:#CC7832">createDefaultStub</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$indexfile</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$webindexfile</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.decompress.php" class="methodname" style="color:#CC7832">decompress</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.decompressfiles.php" class="methodname" style="color:#CC7832">decompressFiles</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.delmetadata.php" class="methodname" style="color:#CC7832">delMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.delete.php" class="methodname" style="color:#CC7832">delete</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$entry</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.extractto.php" class="methodname" style="color:#CC7832">extractTo</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pathto</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type string|array" style="color:#EAB766">string|array</span></span> <span class="parameter" style="color:#2EACF9">$files</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$overwrite</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getalias.php" class="methodname" style="color:#CC7832">getAlias</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getmetadata.php" class="methodname" style="color:#CC7832">getMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getmodified.php" class="methodname" style="color:#CC7832">getModified</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getpath.php" class="methodname" style="color:#CC7832">getPath</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getsignature.php" class="methodname" style="color:#CC7832">getSignature</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getstub.php" class="methodname" style="color:#CC7832">getStub</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getsupportedcompression.php" class="methodname" style="color:#CC7832">getSupportedCompression</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getsupportedsignatures.php" class="methodname" style="color:#CC7832">getSupportedSignatures</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.getversion.php" class="methodname" style="color:#CC7832">getVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.hasmetadata.php" class="methodname" style="color:#CC7832">hasMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.interceptfilefuncs.php" class="methodname" style="color:#CC7832">interceptFileFuncs</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.isbuffering.php" class="methodname" style="color:#CC7832">isBuffering</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.iscompressed.php" class="methodname" style="color:#CC7832">isCompressed</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.isfileformat.php" class="methodname" style="color:#CC7832">isFileFormat</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.isvalidpharfilename.php" class="methodname" style="color:#CC7832">isValidPharFilename</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$executable</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.iswritable.php" class="methodname" style="color:#CC7832">isWritable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.loadphar.php" class="methodname" style="color:#CC7832">loadPhar</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.mapphar.php" class="methodname" style="color:#CC7832">mapPhar</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$dataoffset</span><span class="initializer"> = 0</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.mount.php" class="methodname" style="color:#CC7832">mount</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pharpath</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$externalpath</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.mungserver.php" class="methodname" style="color:#CC7832">mungServer</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$munglist</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.offsetexists.php" class="methodname" style="color:#CC7832">offsetExists</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.offsetget.php" class="methodname" style="color:#CC7832">offsetGet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.offsetset.php" class="methodname" style="color:#CC7832">offsetSet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.offsetunset.php" class="methodname" style="color:#CC7832">offsetUnset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.running.php" class="methodname" style="color:#CC7832">running</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$retphar</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.setalias.php" class="methodname" style="color:#CC7832">setAlias</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.setdefaultstub.php" class="methodname" style="color:#CC7832">setDefaultStub</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$webindex</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.setmetadata.php" class="methodname" style="color:#CC7832">setMetadata</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$metadata</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.setsignaturealgorithm.php" class="methodname" style="color:#CC7832">setSignatureAlgorithm</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$sigtype</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$privatekey</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.setstub.php" class="methodname" style="color:#CC7832">setStub</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$stub</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$len</span><span class="initializer"> = -1</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.startbuffering.php" class="methodname" style="color:#CC7832">startBuffering</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.stopbuffering.php" class="methodname" style="color:#CC7832">stopBuffering</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.uncompressallfiles.php" class="methodname" style="color:#CC7832">uncompressAllFiles</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.unlinkarchive.php" class="methodname" style="color:#CC7832">unlinkArchive</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$archive</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phar.webphar.php" class="methodname" style="color:#CC7832">webPhar</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$index</span><span class="initializer"> = &quot;index.php&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$f404</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$mimetypes</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#2EACF9">$rewrites</span></span>   ]]]]] )</div>        }</div>      </div>    </div>                                                                                                                                                                                                                                                                                                                                                                                 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link Phar::addEmptyDir} — 添加一个空目录到 phar 档案</li><li>{@link Phar::addFile} — 将一个文件从文件系统添加到 phar 档案中</li><li>{@link Phar::addFromString} — 以字符串的形式添加一个文件到 phar 档案</li><li>{@link Phar::apiVersion} — Returns the api version</li><li>{@link Phar::buildFromDirectory} — Construct a phar archive from the files within a directory</li><li>{@link Phar::buildFromIterator} — Construct a phar archive from an iterator</li><li>{@link Phar::canCompress} — Returns whether phar extension supports compression using either zlib or bzip2</li><li>{@link Phar::canWrite} — Returns whether phar extension supports writing and creating phars</li><li>{@link Phar::compress} — Compresses the entire Phar archive using Gzip or Bzip2 compression</li><li>{@link Phar::compressAllFilesBZIP2} — Compresses all files in the current Phar archive using Bzip2 compression</li><li>{@link Phar::compressAllFilesGZ} — Compresses all files in the current Phar archive using Gzip compression</li><li>{@link Phar::compressFiles} — Compresses all files in the current Phar archive</li><li>{@link Phar::__construct} — Construct a Phar archive object</li><li>{@link Phar::convertToData} — Convert a phar archive to a non-executable tar or zip file</li><li>{@link Phar::convertToExecutable} — Convert a phar archive to another executable phar archive file format</li><li>{@link Phar::copy} — Copy a file internal to the phar archive to another new file within the phar</li><li>{@link Phar::count} — Returns the number of entries (files) in the Phar archive</li><li>{@link Phar::createDefaultStub} — Create a phar-file format specific stub</li><li>{@link Phar::decompress} — Decompresses the entire Phar archive</li><li>{@link Phar::decompressFiles} — Decompresses all files in the current Phar archive</li><li>{@link Phar::delMetadata} — Deletes the global metadata of the phar</li><li>{@link Phar::delete} — 删除 phar 档案中的一个文件</li><li>{@link Phar::extractTo} — Extract the contents of a phar archive to a directory</li><li>{@link Phar::getAlias} — Get the alias for Phar</li><li>{@link Phar::getMetadata} — Returns phar archive meta-data</li><li>{@link Phar::getModified} — Return whether phar was modified</li><li>{@link Phar::getPath} — Get the real path to the Phar archive on disk</li><li>{@link Phar::getSignature} — Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive</li><li>{@link Phar::getStub} — Return the PHP loader or bootstrap stub of a Phar archive</li><li>{@link Phar::getSupportedCompression} — Return array of supported compression algorithms</li><li>{@link Phar::getSupportedSignatures} — Return array of supported signature types</li><li>{@link Phar::getVersion} — Return version info of Phar archive</li><li>{@link Phar::hasMetadata} — Returns whether phar has global meta-data</li><li>{@link Phar::interceptFileFuncs} — Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions</li><li>{@link Phar::isBuffering} — Used to determine whether Phar write operations are being buffered, or are flushing directly to disk</li><li>{@link Phar::isCompressed} — Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)</li><li>{@link Phar::isFileFormat} — Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter</li><li>{@link Phar::isValidPharFilename} — Returns whether the given filename is a valid phar filename</li><li>{@link Phar::isWritable} — Returns true if the phar archive can be modified</li><li>{@link Phar::loadPhar} — Loads any phar archive with an alias</li><li>{@link Phar::mapPhar} — Reads the currently executed file (a phar) and registers its manifest</li><li>{@link Phar::mount} — Mount an external path or file to a virtual location within the phar archive</li><li>{@link Phar::mungServer} — Defines a list of up to 4 $_SERVER variables that should be modified for execution</li><li>{@link Phar::offsetExists} — Determines whether a file exists in the phar</li><li>{@link Phar::offsetGet} — Gets a PharFileInfo object for a specific file</li><li>{@link Phar::offsetSet} — Set the contents of an internal file to those of an external file</li><li>{@link Phar::offsetUnset} — Remove a file from a phar</li><li>{@link Phar::running} — Returns the full path on disk or full phar URL to the currently executing Phar archive</li><li>{@link Phar::setAlias} — Set the alias for the Phar archive</li><li>{@link Phar::setDefaultStub} — Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader</li><li>{@link Phar::setMetadata} — Sets phar archive meta-data</li><li>{@link Phar::setSignatureAlgorithm} — Set the signature algorithm for a phar and apply it</li><li>{@link Phar::setStub} — Used to set the PHP loader or bootstrap stub of a Phar archive</li><li>{@link Phar::startBuffering} — Start buffering Phar write operations, do not modify the Phar object on disk</li><li>{@link Phar::stopBuffering} — Stop buffering write requests to the Phar archive, and save changes to disk</li><li>{@link Phar::uncompressAllFiles} — Uncompresses all files in the current Phar archive</li><li>{@link Phar::unlinkArchive} — Completely remove a phar archive from disk and from memory</li><li>{@link Phar::webPhar} — mapPhar for web-based phars. front controller for web applications</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.phar.php">Phar</a></div></div>
*/
class Phar extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Countable, ArrayAccess {
	const BZ2 = 8192;
	const GZ = 4096;
	const NONE = 0;
	const PHAR = 1;
	const TAR = 2;
	const ZIP = 3;
	const COMPRESSED = 61440;
	const PHP = 0;
	const PHPS = 1;
	const MD5 = 1;
	const OPENSSL = 16;
	const SHA1 = 2;
	const SHA256 = 3;
	const SHA512 = 4;


	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Construct a Phar archive object
	 * @link http://php.net/manual/en/phar.construct.php
	 * @param string $fname <p>
	 * Path to an existing Phar archive or to-be-created archive. The file name's
	 * extension must contain .phar.
	 * </p>
	 * @param int $flags [optional] <p>
	 * Flags to pass to parent class <b>RecursiveDirectoryIterator</b>.
	 * </p>
	 * @param string $alias [optional] <p>
	 * Alias with which this Phar archive should be referred to in calls to stream
	 * functionality.
	 * </p>
     * @throws BadMethodCallException If called twice.
     * @throws UnexpectedValueException If the phar archive can't be opened.
	 */
	public function __construct ($fname, $flags = null, $alias = null) {}

	public function __destruct () {}

	/**
	 * (Unknown)<br/>
	 * Add an empty directory to the phar archive
	 * @link http://php.net/manual/en/phar.addemptydir.php
	 * @param string $dirname <p>
	 * The name of the empty directory to create in the phar archive
	 * </p>
	 * @return void no return value, exception is thrown on failure.
	 */
	public function addEmptyDir ($dirname) {}

	/**
	 * (Unknown)<br/>
	 * Add a file from the filesystem to the phar archive
	 * @link http://php.net/manual/en/phar.addfile.php
	 * @param string $file <p>
	 * Full or relative path to a file on disk to be added
	 * to the phar archive.
	 * </p>
	 * @param string $localname [optional] <p>
	 * Path that the file will be stored in the archive.
	 * </p>
	 * @return void no return value, exception is thrown on failure.
	 */
	public function addFile ($file, $localname = null) {}

	/**
	 * (Unknown)<br/>
	 * Add a file from the filesystem to the phar archive
	 * @link http://php.net/manual/en/phar.addfromstring.php
	 * @param string $localname <p>
	 * Path that the file will be stored in the archive.
	 * </p>
	 * @param string $contents <p>
	 * The file contents to store
	 * </p>
	 * @return void no return value, exception is thrown on failure.
	 */
	public function addFromString ($localname, $contents) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Construct a phar archive from the files within a directory.
	 * @link http://php.net/manual/en/phar.buildfromdirectory.php
	 * @param string $base_dir <p>
	 * The full or relative path to the directory that contains all files
	 * to add to the archive.
	 * </p>
	 * @param string $regex [optional] <p>
	 * An optional pcre regular expression that is used to filter the
	 * list of files. Only file paths matching the regular expression
	 * will be included in the archive.
	 * </p>
	 * @return array <b>Phar::buildFromDirectory</b> returns an associative array
	 * mapping internal path of file to the full path of the file on the
	 * filesystem.
	 */
	public function buildFromDirectory ($base_dir, $regex = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Construct a phar archive from an iterator.
	 * @link http://php.net/manual/en/phar.buildfromiterator.php
	 * @param Iterator $iter <p>
	 * Any iterator that either associatively maps phar file to location or
	 * returns SplFileInfo objects
	 * </p>
	 * @param string $base_directory [optional] <p>
	 * For iterators that return SplFileInfo objects, the portion of each
	 * file's full path to remove when adding to the phar archive
	 * </p>
	 * @return array <b>Phar::buildFromIterator</b> returns an associative array
	 * mapping internal path of file to the full path of the file on the
	 * filesystem.
	 */
	public function buildFromIterator (Iterator $iter, $base_directory = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Compresses all files in the current Phar archive
	 * @link http://php.net/manual/en/phar.compressfiles.php
	 * @param int $compression <p>
	 * Compression must be one of Phar::GZ,
	 * Phar::BZ2 to add compression, or Phar::NONE
	 * to remove compression.
	 * </p>
	 * @return void No value is returned.
	 */
	public function compressFiles ($compression) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Decompresses all files in the current Phar archive
	 * @link http://php.net/manual/en/phar.decompressfiles.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function decompressFiles () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Compresses the entire Phar archive using Gzip or Bzip2 compression
	 * @link http://php.net/manual/en/phar.compress.php
	 * @param int $compression <p>
	 * Compression must be one of Phar::GZ,
	 * Phar::BZ2 to add compression, or Phar::NONE
	 * to remove compression.
	 * </p>
	 * @param string $extension [optional] <p>
	 * By default, the extension is .phar.gz
	 * or .phar.bz2 for compressing phar archives, and
	 * .phar.tar.gz or .phar.tar.bz2 for
	 * compressing tar archives. For decompressing, the default file extensions
	 * are .phar and .phar.tar.
	 * </p>
	 * @return object a <b>Phar</b> object.
	 */
	public function compress ($compression, $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Decompresses the entire Phar archive
	 * @link http://php.net/manual/en/phar.decompress.php
	 * @param string $extension [optional] <p>
	 * For decompressing, the default file extensions
	 * are .phar and .phar.tar.
	 * Use this parameter to specify another file extension. Be aware
	 * that all executable phar archives must contain .phar
	 * in their filename.
	 * </p>
	 * @return object A <b>Phar</b> object is returned.
	 */
	public function decompress ($extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Convert a phar archive to another executable phar archive file format
	 * @link http://php.net/manual/en/phar.converttoexecutable.php
	 * @param int $format [optional] <p>
	 * This should be one of Phar::PHAR, Phar::TAR,
	 * or Phar::ZIP. If set to <b>NULL</b>, the existing file format
	 * will be preserved.
	 * </p>
	 * @param int $compression [optional] <p>
	 * This should be one of Phar::NONE for no whole-archive
	 * compression, Phar::GZ for zlib-based compression, and
	 * Phar::BZ2 for bzip-based compression.
	 * </p>
	 * @param string $extension [optional] <p>
	 * This parameter is used to override the default file extension for a
	 * converted archive. Note that all zip- and tar-based phar archives must contain
	 * .phar in their file extension in order to be processed as a
	 * phar archive.
	 * </p>
	 * <p>
	 * If converting to a phar-based archive, the default extensions are
	 * .phar, .phar.gz, or .phar.bz2
	 * depending on the specified compression. For tar-based phar archives, the
	 * default extensions are .phar.tar, .phar.tar.gz,
	 * and .phar.tar.bz2. For zip-based phar archives, the
	 * default extension is .phar.zip.
	 * </p>
	 * @return Phar The method returns a <b>Phar</b> object on success and throws an
	 * exception on failure.
	 */
	public function convertToExecutable ($format = 9021976, $compression = 9021976, $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Convert a phar archive to a non-executable tar or zip file
	 * @link http://php.net/manual/en/phar.converttodata.php
	 * @param int $format [optional] <p>
	 * This should be one of Phar::TAR
	 * or Phar::ZIP. If set to <b>NULL</b>, the existing file format
	 * will be preserved.
	 * </p>
	 * @param int $compression [optional] <p>
	 * This should be one of Phar::NONE for no whole-archive
	 * compression, Phar::GZ for zlib-based compression, and
	 * Phar::BZ2 for bzip-based compression.
	 * </p>
	 * @param string $extension [optional] <p>
	 * This parameter is used to override the default file extension for a
	 * converted archive. Note that .phar cannot be used
	 * anywhere in the filename for a non-executable tar or zip archive.
	 * </p>
	 * <p>
	 * If converting to a tar-based phar archive, the
	 * default extensions are .tar, .tar.gz,
	 * and .tar.bz2 depending on specified compression.
	 * For zip-based archives, the
	 * default extension is .zip.
	 * </p>
	 * @return PharData The method returns a <b>PharData</b> object on success and throws an
	 * exception on failure.
	 */
	public function convertToData ($format = 9021976, $compression = 9021976, $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Copy a file internal to the phar archive to another new file within the phar
	 * @link http://php.net/manual/en/phar.copy.php
	 * @param string $oldfile
	 * @param string $newfile
	 * @return bool returns <b>TRUE</b> on success, but it is safer to encase method call in a
	 * try/catch block and assume success if no exception is thrown.
	 */
/**
*<div id="function.copy" class="refentry">  <div class="refnamediv">   <h1 class="refname">copy</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">copy</span> &mdash; <span class="dc-title">拷贝文件</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.copy-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>copy</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$source</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dest</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$context</span></span>   ] )</div>    <p class="para rdfs-comment">    将文件从 <span class="parameter" style="color:#2EACF9">source</span> 拷贝到 <span class="parameter" style="color:#2EACF9">dest</span>。   </p>   <p class="para">    如果要移动文件的话，请使用 <span class="function">{@link rename()}</span> 函数。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.copy-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">source</span></dt>       <dd>        <p class="para">        源文件路径。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">dest</span></dt>       <dd>        <p class="para">        目标路径。如果 <span class="parameter" style="color:#2EACF9">dest</span> 是一个 URL，则如果封装协议不支持覆盖已有的文件时拷贝操作会失败。       </p>       <div class="warning"><strong class="warning">Warning</strong>        <p class="para">        如果目标文件已存在，将会被覆盖。        </p>       </div>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">context</span></dt>       <dd>        <p class="para">        A valid context resource created with         <span class="function">{@link stream_context_create()}</span>.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.copy-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.copy-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.3.0</td>        <td>         增加了对 context 的支持。        </td>       </tr>        <tr>        <td>4.3.0</td>        <td>         如果启用了“fopen wrappers”的话，<span class="parameter" style="color:#2EACF9">source</span> 和     <span class="parameter" style="color:#2EACF9">dest</span> 都可以是 URL。更多细节见 <span class="function">{@link fopen()}</span>。        </td>       </tr>       </tbody>         </table>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.copy-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2761">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">copy()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'example.txt'</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$newfile&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'example.txt.bak'</span><span style="color: #007700">;<br /><br />if&nbsp;(!</span><span style="color: #9876AA">copy</span><span style="color: #007700">(</span><span style="color: #9876AA">$file</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$newfile</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"failed&nbsp;to&nbsp;copy&nbsp;</span><span style="color: #9876AA">$file</span><span style="color: #DD0000">...\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.copy-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link move_uploaded_file()} - 将上传的文件移动到新位置</span></li>     <li class="member"><span class="function">{@link rename()} - 重命名一个文件或目录</span></li>     <li class="member">The section of the manual about <a href="http://php.net/manual/zh/features.file-upload.php" class="link">handling file uploads</a></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function copy ($oldfile, $newfile) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns the number of entries (files) in the Phar archive
	 * @link http://php.net/manual/en/phar.count.php
	 * @return int The number of files contained within this phar, or 0 (the number zero)
	 * if none.
	 */
/**
*<div id="function.count" class="refentry">    <div class="refnamediv">     <h1 class="refname">count</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">count</span> &mdash; <span class="dc-title">计算数组中的单元数目，或对象中的属性个数</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>count</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$array_or_countable</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span><span class="initializer"> = COUNT_NORMAL</span></span>   ] )</div>    <p class="para rdfs-comment">    统计出数组里的所有元素的数量，或者对象里的东西。   </p>     <p class="para">      对于对象，如果安装了 <a href="http://php.net/manual/zh/ref.spl.php" class="link">SPL</a>，可以通过实现      <em>Countable</em> 接口对 <span class="function"><strong style="color:#CC7832">count()</strong></span>挂钩（hook）      。该接口只有一个方法      <span class="methodname" style="color:#CC7832">{@link Countable::count()}</span>，此方法为 <span class="function"><strong style="color:#CC7832">count()</strong></span>      函数返回值。     </p>     <p class="para">      关于 PHP 中如何实现和使用数组可以参考手册中<a href="http://php.net/manual/zh/language.types.array.php" class="link">数组</a>章节中的详细描述。   </p>  </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.count-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array_or_countable</span></dt>       <dd>        <p class="para">        数组或者 <a href="http://php.net/manual/zh/class.countable.php" class="classname">Countable</a>  对象。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">mode</span></dt>       <dd>        <p class="para">        如果可选的 <span class="parameter" style="color:#2EACF9">mode</span> 参数设为      <strong><span>COUNT_RECURSIVE</span></strong>（或 1），<span class="function"><strong style="color:#CC7832">count()</strong></span>      将递归地对数组计数。对计算多维数组的所有单元尤其有用。       </p>       <div class="caution"><strong class="caution">Caution</strong>        <p class="para">         <span class="function"><strong style="color:#CC7832">count()</strong></span> 能检测递归来避免无限循环，但每次出现时会产生 <strong><span>E_WARNING</span></strong> 错误         （如果 array 不止一次包含了自身）并返回大于预期的统计数字。        </p>       </div>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回 <span class="parameter" style="color:#2EACF9">array_or_countable</span> 中的单元数目。        如果参数既不是数组，也不是实现      <em>Countable</em> 接口的对象，将返回      <em>1</em>。    有个例外：如果      <span class="parameter" style="color:#2EACF9">array_or_countable</span> 是 <strong><span>NULL</span></strong> 则结果是 <em>0</em>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.count-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6085">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$a</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$a</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">false</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> int(3) int(3)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 12 // PHP 7.2 起 int(0)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 14 // PHP 7.2 起 int(1) </span></div>     </div>    </div>   </span>   <p class="para">    <div class="example" id="example-6086">     <p><strong>Example #2 递归 <span class="function"><strong style="color:#CC7832">count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$food&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'fruits'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'veggie'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'collard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pea'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;recursive&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">COUNT_RECURSIVE</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;8<br /><br />//&nbsp;normal&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;2<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.count-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        当无效的 countable 类型传递给 <span class="parameter" style="color:#2EACF9">array_or_countable</span> 参数时，<span class="function"><strong style="color:#CC7832">count()</strong></span> 会产生警告。       </td>      </tr>      </tbody>       </table>   </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.count-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link is_array()} - 检测变量是否是数组</span></li>     <li class="member"><span class="function">{@link isset()} - 检测变量是否已设置并且非 NULL</span></li>     <li class="member"><span class="function">{@link empty()} - 检查一个变量是否为空</span></li>     <li class="member"><span class="function">{@link strlen()} - 获取字符串长度</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function count () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Delete a file within a phar archive
	 * @link http://php.net/manual/en/phar.delete.php
	 * @param string $entry <p>
	 * Path within an archive to the file to delete.
	 * </p>
	 * @return bool returns <b>TRUE</b> on success, but it is better to check for thrown exception,
	 * and assume success if none is thrown.
	 */
/**
*<div id="function.delete" class="refentry">  <div class="refnamediv">   <h1 class="refname">delete</h1>   <p class="verinfo">(None)</p><p class="refpurpose"><span class="refname">delete</span> &mdash; <span class="dc-title">参见 <span class="function">{@link unlink()}</span> 或 <span class="function">{@link unset()}</span></span></p>   </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.delete-description">   <h3 class="title">说明</h3>   <p class="para">    这是个虚构的手册条目来给那些本来是找 <span class="function">{@link unlink()}</span> 或者    <span class="function">{@link unset()}</span> 的人提供一些有用的信息。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.delete-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link unlink()} - 删除文件</span></li>     <li class="member"><span class="function">{@link unset()} - 释放给定的变量</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function delete ($entry) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * Deletes the global metadata of the phar
	 * @link http://php.net/manual/en/phar.delmetadata.php
	 * @return bool returns <b>TRUE</b> on success, but it is better to check for thrown exception,
	 * and assume success if none is thrown.
	 */
	public function delMetadata () {}

	/**
	 * (Unknown)<br/>
	 * Extract the contents of a phar archive to a directory
	 * @link http://php.net/manual/en/phar.extractto.php
	 * @param string $pathto <p>
	 * Path within an archive to the file to delete.
	 * </p>
	 * @param string|array $files [optional] <p>
	 * The name of a file or directory to extract, or an array of files/directories to extract
	 * </p>
	 * @param bool $overwrite [optional] <p>
	 * Set to <b>TRUE</b> to enable overwriting existing files
	 * </p>
	 * @return bool returns <b>TRUE</b> on success, but it is better to check for thrown exception,
	 * and assume success if none is thrown.
	 */
	public function extractTo ($pathto, $files = null, $overwrite = false) {}

        /**
         * @see setAlias
         * @return string
         */
        public function getAlias () {}


	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns phar archive meta-data
	 * @link http://php.net/manual/en/phar.getmetadata.php
	 * @return mixed any PHP variable that can be serialized and is stored as meta-data for the Phar archive,
	 * or <b>NULL</b> if no meta-data is stored.
	 */
	public function getMetadata () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Return whether phar was modified
	 * @link http://php.net/manual/en/phar.getmodified.php
	 * @return bool <b>TRUE</b> if the phar has been modified since opened, <b>FALSE</b> if not.
	 */
	public function getModified () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
	 * @link http://php.net/manual/en/phar.getsignature.php
	 * @return array Array with the opened archive's signature in hash key and MD5,
	 * SHA-1,
	 * SHA-256, SHA-512, or OpenSSL
	 * in hash_type. This signature is a hash calculated on the
	 * entire phar's contents, and may be used to verify the integrity of the archive.
	 * A valid signature is absolutely required of all executable phar archives if the
	 * phar.require_hash INI variable
	 * is set to true.
	 */
	public function getSignature () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Return the PHP loader or bootstrap stub of a Phar archive
	 * @link http://php.net/manual/en/phar.getstub.php
	 * @return string a string containing the contents of the bootstrap loader (stub) of
	 * the current Phar archive.
	 */
	public function getStub () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Return version info of Phar archive
	 * @link http://php.net/manual/en/phar.getversion.php
	 * @return string The opened archive's API version. This is not to be confused with
	 * the API version that the loaded phar extension will use to create
	 * new phars. Each Phar archive has the API version hard-coded into
	 * its manifest. See Phar file format
	 * documentation for more information.
	 */
	public function getVersion () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * Returns whether phar has global meta-data
	 * @link http://php.net/manual/en/phar.hasmetadata.php
	 * @return bool <b>TRUE</b> if meta-data has been set, and <b>FALSE</b> if not.
	 */
	public function hasMetadata () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
	 * @link http://php.net/manual/en/phar.isbuffering.php
	 * @return bool <b>TRUE</b> if the write operations are being buffer, <b>FALSE</b> otherwise.
	 */
	public function isBuffering () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
	 * @link http://php.net/manual/en/phar.iscompressed.php
	 * @return mixed Phar::GZ, Phar::BZ2 or <b>FALSE</b>
	 */
	public function isCompressed () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
	 * @link http://php.net/manual/en/phar.isfileformat.php
	 * @param int $format <p>
	 * Either Phar::PHAR, Phar::TAR, or
	 * Phar::ZIP to test for the format of the archive.
	 * </p>
	 * @return bool <b>TRUE</b> if the phar archive matches the file format requested by the parameter
	 */
	public function isFileFormat ($format) {}

	/**
	 * (Unknown)<br/>
	 * Returns true if the phar archive can be modified
	 * @link http://php.net/manual/en/phar.iswritable.php
	 * @return bool <b>TRUE</b> if the phar archive can be modified
	 */
	public function isWritable () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * determines whether a file exists in the phar
	 * @link http://php.net/manual/en/phar.offsetexists.php
	 * @param string $offset <p>
	 * The filename (relative path) to look for in a Phar.
	 * </p>
	 * @return bool <b>TRUE</b> if the file exists within the phar, or <b>FALSE</b> if not.
	 */
	public function offsetExists ($offset) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Gets a <b>PharFileInfo</b> object for a specific file
	 * @link http://php.net/manual/en/phar.offsetget.php
	 * @param string $offset <p>
	 * The filename (relative path) to look for in a Phar.
	 * </p>
	 * @return int A <b>PharFileInfo</b> object is returned that can be used to
	 * iterate over a file's contents or to retrieve information about the current file.
	 */
	public function offsetGet ($offset) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * set the contents of an internal file to those of an external file
	 * @link http://php.net/manual/en/phar.offsetset.php
	 * @param string $offset <p>
	 * The filename (relative path) to modify in a Phar.
	 * </p>
	 * @param string $value <p>
	 * Content of the file.
	 * </p>
	 * @return void No return values.
	 */
	public function offsetSet ($offset, $value) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * remove a file from a phar
	 * @link http://php.net/manual/en/phar.offsetunset.php
	 * @param string $offset <p>
	 * The filename (relative path) to modify in a Phar.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function offsetUnset ($offset) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.1)<br/>
	 * Set the alias for the Phar archive
	 * @link http://php.net/manual/en/phar.setalias.php
	 * @param string $alias <p>
	 * A shorthand string that this archive can be referred to in phar
	 * stream wrapper access.
	 * </p>
	 * @return bool
	 */
	public function setAlias ($alias) {}

	/**
	 * (Unknown)<br/>
	 * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
	 * @link http://php.net/manual/en/phar.setdefaultstub.php
	 * @param string $index [optional] <p>
	 * Relative path within the phar archive to run if accessed on the command-line
	 * </p>
	 * @param string $webindex [optional] <p>
	 * Relative path within the phar archive to run if accessed through a web browser
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setDefaultStub ($index = null, $webindex = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Sets phar archive meta-data
	 * @link http://php.net/manual/en/phar.setmetadata.php
	 * @param mixed $metadata <p>
	 * Any PHP variable containing information to store that describes the phar archive
	 * </p>
	 * @return void No value is returned.
	 */
	public function setMetadata ($metadata) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.1.0)<br/>
	 * set the signature algorithm for a phar and apply it.
	 * @link http://php.net/manual/en/phar.setsignaturealgorithm.php
	 * @param int $sigtype <p>
	 * One of Phar::MD5,
	 * Phar::SHA1, Phar::SHA256,
	 * Phar::SHA512, or Phar::OPENSSL
	 * </p>
	 * @param string $privatekey [optional] <p>
	 * The contents of an OpenSSL private key, as extracted from a certificate or
	 * OpenSSL key file:
	 * <code>
	 * $private = openssl_get_privatekey(file_get_contents('private.pem'));
	 * $pkey = '';
	 * openssl_pkey_export($private, $pkey);
	 * $p->setSignatureAlgorithm(Phar::OPENSSL, $pkey);
	 * </code>
	 * See phar introduction for instructions on
	 * naming and placement of the public key file.
	 * </p>
	 * @return void No value is returned.
	 */
	public function setSignatureAlgorithm ($sigtype, $privatekey = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Used to set the PHP loader or bootstrap stub of a Phar archive
	 * @link http://php.net/manual/en/phar.setstub.php
	 * @param string $stub <p>
	 * A string or an open stream handle to use as the executable stub for this
	 * phar archive.
	 * </p>
	 * @param int $len [optional] <p>
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setStub ($stub, $len = -1) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Start buffering Phar write operations, do not modify the Phar object on disk
	 * @link http://php.net/manual/en/phar.startbuffering.php
	 * @return void No value is returned.
	 */
	public function startBuffering () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Stop buffering write requests to the Phar archive, and save changes to disk
	 * @link http://php.net/manual/en/phar.stopbuffering.php
	 * @return void No value is returned.
	 */
	public function stopBuffering () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns the api version
	 * @link http://php.net/manual/en/phar.apiversion.php
	 * @return string The API version string as in &#x00022;1.0.0&#x00022;.
	 */
	final public static function apiVersion () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns whether phar extension supports compression using either zlib or bzip2
	 * @link http://php.net/manual/en/phar.cancompress.php
	 * @param int $type [optional] <p>
	 * Either Phar::GZ or Phar::BZ2 can be
	 * used to test whether compression is possible with a specific compression
	 * algorithm (zlib or bzip2).
	 * </p>
	 * @return bool <b>TRUE</b> if compression/decompression is available, <b>FALSE</b> if not.
	 */
	final public static function canCompress ($type = 0) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns whether phar extension supports writing and creating phars
	 * @link http://php.net/manual/en/phar.canwrite.php
	 * @return bool <b>TRUE</b> if write access is enabled, <b>FALSE</b> if it is disabled.
	 */
	final public static function canWrite () {}

	/**
	 * (Unknown)<br/>
	 * Create a phar-file format specific stub
	 * @link http://php.net/manual/en/phar.createdefaultstub.php
	 * @param string $indexfile [optional]
	 * @param string $webindexfile [optional]
	 * @return string a string containing the contents of a customized bootstrap loader (stub)
	 * that allows the created Phar archive to work with or without the Phar extension
	 * enabled.
	 */
	final public static function createDefaultStub ($indexfile = null, $webindexfile = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * Return array of supported compression algorithms
	 * @link http://php.net/manual/en/phar.getsupportedcompression.php
	 * @return array an array containing any of Phar::GZ or
	 * Phar::BZ2, depending on the availability of
	 * the zlib extension or the
	 * bz2 extension.
	 */
	final public static function getSupportedCompression () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.1.0)<br/>
	 * Return array of supported signature types
	 * @link http://php.net/manual/en/phar.getsupportedsignatures.php
	 * @return array an array containing any of MD5, SHA-1,
	 * SHA-256, SHA-512, or OpenSSL.
	 */
	final public static function getSupportedSignatures () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
	 * @link http://php.net/manual/en/phar.interceptfilefuncs.php
	 * @return void
	 */
	final public static function interceptFileFuncs () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * Returns whether the given filename is a valid phar filename
	 * @link http://php.net/manual/en/phar.isvalidpharfilename.php
	 * @param string $filename <p>
	 * The name or full path to a phar archive not yet created
	 * </p>
	 * @param bool $executable [optional] <p>
	 * This parameter determines whether the filename should be treated as
	 * a phar executable archive, or a data non-executable archive
	 * </p>
	 * @return bool <b>TRUE</b> if the filename is valid, <b>FALSE</b> if not.
	 */
	final public static function isValidPharFilename ($filename, $executable = true) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Loads any phar archive with an alias
	 * @link http://php.net/manual/en/phar.loadphar.php
	 * @param string $filename <p>
	 * the full or relative path to the phar archive to open
	 * </p>
	 * @param string $alias [optional] <p>
	 * The alias that may be used to refer to the phar archive. Note
	 * that many phar archives specify an explicit alias inside the
	 * phar archive, and a <b>PharException</b> will be thrown if
	 * a new alias is specified in this case.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	final public static function loadPhar ($filename, $alias = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Reads the currently executed file (a phar) and registers its manifest
	 * @link http://php.net/manual/en/phar.mapphar.php
	 * @param string $alias [optional] <p>
	 * The alias that can be used in phar:// URLs to
	 * refer to this archive, rather than its full path.
	 * </p>
	 * @param int $dataoffset [optional] <p>
	 * Unused variable, here for compatibility with PEAR's PHP_Archive.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	final public static function mapPhar ($alias = null, $dataoffset = 0) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Returns the full path on disk or full phar URL to the currently executing Phar archive
	 * @link http://php.net/manual/en/phar.running.php
	 * @param bool $retphar [optional] <p>
	 * If <b>FALSE</b>, the full path on disk to the phar
	 * archive is returned. If <b>TRUE</b>, a full phar URL is returned.
	 * </p>
	 * @return string the filename if valid, empty string otherwise.
	 */
	final public static function running ($retphar = true) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Mount an external path or file to a virtual location within the phar archive
	 * @link http://php.net/manual/en/phar.mount.php
	 * @param string $pharpath <p>
	 * The internal path within the phar archive to use as the mounted path location.
	 * This must be a relative path within the phar archive, and must not already exist.
	 * </p>
	 * @param string $externalpath <p>
	 * A path or URL to an external file or directory to mount within the phar archive
	 * </p>
	 * @return void No return. <b>PharException</b> is thrown on failure.
	 */
	final public static function mount ($pharpath, $externalpath) {}

	/**
	 * (Unknown)<br/>
	 * Defines a list of up to 4 $_SERVER variables that should be modified for execution
	 * @link http://php.net/manual/en/phar.mungserver.php
	 * @param array $munglist <p>
	 * an array containing as string indices any of
	 * REQUEST_URI, PHP_SELF,
	 * SCRIPT_NAME and SCRIPT_FILENAME.
	 * Other values trigger an exception, and <b>Phar::mungServer</b>
	 * is case-sensitive.
	 * </p>
	 * @return void No return.
	 */
	final public static function mungServer (array $munglist) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Completely remove a phar archive from disk and from memory
	 * @link http://php.net/manual/en/phar.unlinkarchive.php
	 * @param string $archive <p>
	 * The path on disk to the phar archive.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	final public static function unlinkArchive ($archive) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * mapPhar for web-based phars. front controller for web applications
	 * @link http://php.net/manual/en/phar.webphar.php
	 * @param string $alias [optional] <p>
	 * The alias that can be used in phar:// URLs to
	 * refer to this archive, rather than its full path.
	 * </p>
	 * @param string $index [optional] <p>
	 * The location within the phar of the directory index.
	 * </p>
	 * @param string $f404 [optional] <p>
	 * The location of the script to run when a file is not found. This
	 * script should output the proper HTTP 404 headers.
	 * </p>
	 * @param array $mimetypes [optional] <p>
	 * An array mapping additional file extensions to MIME type.
	 * If the default mapping is sufficient, pass an empty array.
	 * By default, these extensions are mapped to these MIME types:
	 * <code>
	 * $mimes = array(
	 * 'phps' => Phar::PHPS, // pass to highlight_file()
	 * 'c' => 'text/plain',
	 * 'cc' => 'text/plain',
	 * 'cpp' => 'text/plain',
	 * 'c++' => 'text/plain',
	 * 'dtd' => 'text/plain',
	 * 'h' => 'text/plain',
	 * 'log' => 'text/plain',
	 * 'rng' => 'text/plain',
	 * 'txt' => 'text/plain',
	 * 'xsd' => 'text/plain',
	 * 'php' => Phar::PHP, // parse as PHP
	 * 'inc' => Phar::PHP, // parse as PHP
	 * 'avi' => 'video/avi',
	 * 'bmp' => 'image/bmp',
	 * 'css' => 'text/css',
	 * 'gif' => 'image/gif',
	 * 'htm' => 'text/html',
	 * 'html' => 'text/html',
	 * 'htmls' => 'text/html',
	 * 'ico' => 'image/x-ico',
	 * 'jpe' => 'image/jpeg',
	 * 'jpg' => 'image/jpeg',
	 * 'jpeg' => 'image/jpeg',
	 * 'js' => 'application/x-javascript',
	 * 'midi' => 'audio/midi',
	 * 'mid' => 'audio/midi',
	 * 'mod' => 'audio/mod',
	 * 'mov' => 'movie/quicktime',
	 * 'mp3' => 'audio/mp3',
	 * 'mpg' => 'video/mpeg',
	 * 'mpeg' => 'video/mpeg',
	 * 'pdf' => 'application/pdf',
	 * 'png' => 'image/png',
	 * 'swf' => 'application/shockwave-flash',
	 * 'tif' => 'image/tiff',
	 * 'tiff' => 'image/tiff',
	 * 'wav' => 'audio/wav',
	 * 'xbm' => 'image/xbm',
	 * 'xml' => 'text/xml',
	 * );
	 * </code>
	 * </p>
	 * @param callable $rewrites [optional] <p>
	 * The rewrites function is passed a string as its only parameter and must return a string or <b>FALSE</b>.
	 * </p>
	 * <p>
	 * If you are using fast-cgi or cgi then the parameter passed to the function is the value of the
	 * $_SERVER['PATH_INFO'] variable. Otherwise, the parameter passed to the function is the value
	 * of the $_SERVER['REQUEST_URI'] variable.
	 * </p>
	 * <p>
	 * If a string is returned it is used as the internal file path. If <b>FALSE</b> is returned then webPhar() will
	 * send a HTTP 403 Denied Code.
	 * </p>
	 * @return void No value is returned.
	 */
	final public static function webPhar ($alias = null, $index = "index.php", $f404 = null, array $mimetypes = null, callable $rewrites = null) {}

	/**
	 * Returns whether current entry is a directory and not '.' or '..'
	 * @link http://php.net/manual/en/recursivedirectoryiterator.haschildren.php
	 * @param bool $allow_links [optional] <p>
	 * </p>
	 * @return bool whether the current entry is a directory, but not '.' or '..'
	 * @since 5.0
	 */
	public function hasChildren ($allow_links = false) {}

	/**
	 * Returns an iterator for the current entry if it is a directory
	 * @link http://php.net/manual/en/recursivedirectoryiterator.getchildren.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator
	 * constants.
	 * @since 5.1.0
	 */
	public function getChildren () {}

	/**
	 * Rewinds back to the beginning
	 * @link http://php.net/manual/en/filesystemiterator.rewind.php
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$handle</span></span>    )</div>    <p class="para rdfs-comment">    将 <span class="parameter" style="color:#2EACF9">handle</span> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">handle</span></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Foolly long sentence. </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind () {}

	/**
	 * Move to the next file
	 * @link http://php.net/manual/en/filesystemiterator.next.php
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>next</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        受影响的 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong style="color:#CC7832">next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

	/**
	 * Retrieve the key for the current file
	 * @link http://php.net/manual/en/filesystemiterator.key.php
	 * @return string the pathname or filename depending on the set flags.
	 * See the FilesystemIterator constants.
	 * @since 5.3.0
	 */
/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>key</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$array</span></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong style="color:#CC7832">key()</strong></span> 会返回 <strong><span>NULL</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <span class="parameter" style="color:#2EACF9">array</span> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </span></div>     </div>    </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key () {}

	/**
	 * The current file
	 * @link http://php.net/manual/en/filesystemiterator.current.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator constants.
	 * @since 5.3.0
	 */
/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>current</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong style="color:#CC7832">current()</strong></span>      返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong style="color:#CC7832">current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 的单元则本函数在碰到这个单元时也返回        <strong><span>FALSE</span></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </span>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current () {}

	/**
	 * Check whether current DirectoryIterator position is a valid file
	 * @link http://php.net/manual/en/directoryiterator.valid.php
	 * @return bool <b>TRUE</b> if the position is valid, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function valid () {}

	/**
	 * Seek to a DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.seek.php
	 * @param int $position <p>
	 * The zero-based numeric position to seek to.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
	public function seek ($position) {}

    public function _bad_state_ex (){}

}

/**
*<div id="class.phardata" class="reference">  <h1 class="title">The PharData class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PECL phar &gt;= 2.0.0)</p>      <div class="section" id="phardata.intro">    <h2 class="title">简介</h2>    <p class="para">     The PharData class provides a high-level interface to accessing and creating     non-executable tar and zip archives.  Because these archives do not contain     a stub and cannot be executed by the phar extension, it is possible to create     and manipulate regular zip and tar files using the PharData class even if     <em>phar.readonly</em> php.ini setting is <em>1</em>.    </p>   </div>      <div class="section" id="phardata.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">PharData</strong>      </span>        <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.recursivedirectoryiterator.php" class="classname">RecursiveDirectoryIterator</a>      </span>       {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// Inherited constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_AS_PATHNAME</var>}</var>      <span class="initializer"> = 32</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_AS_FILEINFO</var>}</var>      <span class="initializer"> = 0</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_AS_SELF</var>}</var>      <span class="initializer"> = 16</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::CURRENT_MODE_MASK</var>}</var>      <span class="initializer"> = 240</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::KEY_AS_PATHNAME</var>}</var>      <span class="initializer"> = 0</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::KEY_AS_FILENAME</var>}</var>      <span class="initializer"> = 256</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::FOLLOW_SYMLINKS</var>}</var>      <span class="initializer"> = 512</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::KEY_MODE_MASK</var>}</var>      <span class="initializer"> = 3840</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::NEW_CURRENT_AND_KEY</var>}</var>      <span class="initializer"> = 256</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::SKIP_DOTS</var>}</var>      <span class="initializer"> = 4096</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">FilesystemIterator::UNIX_PATHS</var>}</var>      <span class="initializer"> = 8192</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.addemptydir.php" class="methodname" style="color:#CC7832">addEmptyDir</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dirname</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::addFile}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$file</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.addfromstring.php" class="methodname" style="color:#CC7832">addFromString</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$contents</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Phar::buildFromDirectory}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$base_dir</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$regex</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.buildfromiterator.php" class="methodname" style="color:#CC7832">buildFromIterator</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.iterator.php" class="type Iterator" style="color:#EAB766">Iterator</a></span> <span class="parameter" style="color:#2EACF9">$iter</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$base_directory</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.compress.php" class="methodname" style="color:#CC7832">compress</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.compressfiles.php" class="methodname" style="color:#CC7832">compressFiles</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fname</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span><span class="initializer"> = <strong><span>Phar::TAR</span></strong></span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">PharData</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.converttodata.php" class="methodname" style="color:#CC7832">convertToData</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Phar</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.converttoexecutable.php" class="methodname" style="color:#CC7832">convertToExecutable</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.copy.php" class="methodname" style="color:#CC7832">copy</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$oldfile</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$newfile</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.decompress.php" class="methodname" style="color:#CC7832">decompress</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.decompressfiles.php" class="methodname" style="color:#CC7832">decompressFiles</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.delmetadata.php" class="methodname" style="color:#CC7832">delMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.delete.php" class="methodname" style="color:#CC7832">delete</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$entry</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.extractto.php" class="methodname" style="color:#CC7832">extractTo</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pathto</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type string|array" style="color:#EAB766">string|array</span></span> <span class="parameter" style="color:#2EACF9">$files</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$overwrite</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.iswritable.php" class="methodname" style="color:#CC7832">isWritable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.offsetset.php" class="methodname" style="color:#CC7832">offsetSet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.offsetunset.php" class="methodname" style="color:#CC7832">offsetUnset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.setalias.php" class="methodname" style="color:#CC7832">setAlias</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.setdefaultstub.php" class="methodname" style="color:#CC7832">setDefaultStub</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$webindex</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::setMetadata}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$metadata</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::setSignatureAlgorithm}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$sigtype</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/phardata.setstub.php" class="methodname" style="color:#CC7832">setStub</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$stub</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$len</span><span class="initializer"> = -1</span></span>   ] )</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>          <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::addEmptyDir}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dirname</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::addFile}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$file</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::addFromString}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$contents</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::apiVersion}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Phar::buildFromDirectory}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$base_dir</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$regex</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Phar::buildFromIterator}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.iterator.php" class="type Iterator" style="color:#EAB766">Iterator</a></span> <span class="parameter" style="color:#2EACF9">$iter</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$base_directory</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::canCompress}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::canWrite}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832">{@link Phar::compress}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::compressAllFilesBZIP2}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::compressAllFilesGZ}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::compressFiles}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Phar::__construct}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fname</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">PharData</span> <span class="methodname" style="color:#CC7832">{@link Phar::convertToData}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">Phar</span> <span class="methodname" style="color:#CC7832">{@link Phar::convertToExecutable}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span><span class="initializer"> = 9021976</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::copy}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$oldfile</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$newfile</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Phar::count}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::createDefaultStub}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$indexfile</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$webindexfile</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832">{@link Phar::decompress}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::decompressFiles}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::delMetadata}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::delete}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$entry</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::extractTo}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pathto</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type string|array" style="color:#EAB766">string|array</span></span> <span class="parameter" style="color:#2EACF9">$files</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$overwrite</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::getAlias}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832">{@link Phar::getMetadata}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::getModified}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::getPath}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Phar::getSignature}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::getStub}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Phar::getSupportedCompression}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Phar::getSupportedSignatures}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::getVersion}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::hasMetadata}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::interceptFileFuncs}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::isBuffering}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832">{@link Phar::isCompressed}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::isFileFormat}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$format</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::isValidPharFilename}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$executable</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::isWritable}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::loadPhar}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::mapPhar}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$dataoffset</span><span class="initializer"> = 0</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::mount}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pharpath</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$externalpath</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::mungServer}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$munglist</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::offsetExists}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Phar::offsetGet}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::offsetSet}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::offsetUnset}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Phar::running}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$retphar</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::setAlias}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::setDefaultStub}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$webindex</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::setMetadata}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$metadata</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::setSignatureAlgorithm}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$sigtype</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$privatekey</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::setStub}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$stub</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$len</span><span class="initializer"> = -1</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::startBuffering}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::stopBuffering}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::uncompressAllFiles}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link Phar::unlinkArchive}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$archive</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Phar::webPhar}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$alias</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$index</span><span class="initializer"> = &quot;index.php&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$f404</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$mimetypes</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#2EACF9">$rewrites</span></span>   ]]]]] )</div>      }</div>      </div>    </div>                                                                                                                                                       <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link PharData::addEmptyDir} — Add an empty directory to the tar/zip archive</li><li>{@link PharData::addFile} — Add a file from the filesystem to the tar/zip archive</li><li>{@link PharData::addFromString} — Add a file from the filesystem to the tar/zip archive</li><li>{@link PharData::buildFromDirectory} — Construct a tar/zip archive from the files within a directory</li><li>{@link PharData::buildFromIterator} — Construct a tar or zip archive from an iterator</li><li>{@link PharData::compress} — Compresses the entire tar/zip archive using Gzip or Bzip2 compression</li><li>{@link PharData::compressFiles} — Compresses all files in the current tar/zip archive</li><li>{@link PharData::__construct} — Construct a non-executable tar or zip archive object</li><li>{@link PharData::convertToData} — Convert a phar archive to a non-executable tar or zip file</li><li>{@link PharData::convertToExecutable} — Convert a non-executable tar/zip archive to an executable phar archive</li><li>{@link PharData::copy} — Copy a file internal to the phar archive to another new file within the phar</li><li>{@link PharData::decompress} — Decompresses the entire Phar archive</li><li>{@link PharData::decompressFiles} — Decompresses all files in the current zip archive</li><li>{@link PharData::delMetadata} — Deletes the global metadata of a zip archive</li><li>{@link PharData::delete} — Delete a file within a tar/zip archive</li><li>{@link PharData::extractTo} — Extract the contents of a tar/zip archive to a directory</li><li>{@link PharData::isWritable} — Returns true if the tar/zip archive can be modified</li><li>{@link PharData::offsetSet} — Set the contents of a file within the tar/zip to those of an external file or string</li><li>{@link PharData::offsetUnset} — Remove a file from a tar/zip archive</li><li>{@link PharData::setAlias} — Dummy function (Phar::setAlias is not valid for PharData)</li><li>{@link PharData::setDefaultStub} — Dummy function (Phar::setDefaultStub is not valid for PharData)</li><li>{@link Phar::setMetadata} — Sets phar archive meta-data</li><li>{@link Phar::setSignatureAlgorithm} — Set the signature algorithm for a phar and apply it</li><li>{@link PharData::setStub} — Dummy function (Phar::setStub is not valid for PharData)</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.phar.php">Phar</a></div></div>
*/
class PharData extends Phar {

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Construct a non-executable tar or zip archive object
	 * @link http://php.net/manual/en/phardata.construct.php
	 * @param string $fname <p>
	 * Path to an existing tar/zip archive or to-be-created archive
	 * </p>
	 * @param int $flags [optional] <p>
	 * Flags to pass to <b>Phar</b> parent class
	 * <b>RecursiveDirectoryIterator</b>.
	 * </p>
	 * @param string $alias [optional] <p>
	 * Alias with which this Phar archive should be referred to in calls to stream
	 * functionality.
	 * </p>
	 * @param int $format [optional] <p>
	 * One of the
	 * file format constants
	 * available within the <b>Phar</b> class.
	 * </p>
	 */
	public function __construct ($fname, $flags = null, $alias = null, $format = Phar::TAR) {}

	public function offsetExists ($entry) {}

	public function offsetGet ($entry) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * set the contents of a file within the tar/zip to those of an external file or string
	 * @link http://php.net/manual/en/phardata.offsetset.php
	 * @param string $offset <p>
	 * The filename (relative path) to modify in a tar or zip archive.
	 * </p>
	 * @param string $value <p>
	 * Content of the file.
	 * </p>
	 * @return void No return values.
	 */
	public function offsetSet ($offset, $value) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * remove a file from a tar/zip archive
	 * @link http://php.net/manual/en/phardata.offsetunset.php
	 * @param string $offset <p>
	 * The filename (relative path) to modify in the tar/zip archive.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function offsetUnset ($offset) {}


	/**
	 * Returns whether current entry is a directory and not '.' or '..'
	 * @link http://php.net/manual/en/recursivedirectoryiterator.haschildren.php
	 * @param bool $allow_links [optional] <p>
	 * </p>
	 * @return bool whether the current entry is a directory, but not '.' or '..'
	 * @since 5.0
	 */
	public function hasChildren ($allow_links = false) {}

	/**
	 * Returns an iterator for the current entry if it is a directory
	 * @link http://php.net/manual/en/recursivedirectoryiterator.getchildren.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator
	 * constants.
	 * @since 5.1.0
	 */
	public function getChildren () {}


	/**
	 * Rewinds back to the beginning
	 * @link http://php.net/manual/en/filesystemiterator.rewind.php
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$handle</span></span>    )</div>    <p class="para rdfs-comment">    将 <span class="parameter" style="color:#2EACF9">handle</span> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">handle</span></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Foolly long sentence. </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind () {}

	/**
	 * Move to the next file
	 * @link http://php.net/manual/en/filesystemiterator.next.php
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>next</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        受影响的 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong style="color:#CC7832">next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

	/**
	 * Retrieve the key for the current file
	 * @link http://php.net/manual/en/filesystemiterator.key.php
	 * @return string the pathname or filename depending on the set flags.
	 * See the FilesystemIterator constants.
	 * @since 5.3.0
	 */
/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>key</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$array</span></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong style="color:#CC7832">key()</strong></span> 会返回 <strong><span>NULL</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <span class="parameter" style="color:#2EACF9">array</span> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </span></div>     </div>    </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key () {}

	/**
	 * The current file
	 * @link http://php.net/manual/en/filesystemiterator.current.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator constants.
	 * @since 5.3.0
	 */
/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>current</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong style="color:#CC7832">current()</strong></span>      返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong style="color:#CC7832">current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 的单元则本函数在碰到这个单元时也返回        <strong><span>FALSE</span></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </span>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current () {}



	/**
	 * Check whether current DirectoryIterator position is a valid file
	 * @link http://php.net/manual/en/directoryiterator.valid.php
	 * @return bool <b>TRUE</b> if the position is valid, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function valid () {}

	/**
	 * Seek to a DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.seek.php
	 * @param int $position <p>
	 * The zero-based numeric position to seek to.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
	public function seek ($position) {}


}

/**
*<div id="class.pharfileinfo" class="reference">  <h1 class="title">The PharFileInfo class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PECL phar &gt;= 1.0.0)</p>      <div class="section" id="pharfileinfo.intro">    <h2 class="title">简介</h2>    <p class="para">     The PharFileInfo class provides a high-level interface to the contents     and attributes of a single file within a phar archive.    </p>   </div>       <div class="section" id="pharfileinfo.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">PharFileInfo</strong>      </span>        <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.splfileinfo.php" class="classname">SplFileInfo</a>      </span>        {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.chmod.php" class="methodname" style="color:#CC7832">chmod</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$permissions</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.compress.php" class="methodname" style="color:#CC7832">compress</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$entry</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.decompress.php" class="methodname" style="color:#CC7832">decompress</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.delmetadata.php" class="methodname" style="color:#CC7832">delMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.getcrc32.php" class="methodname" style="color:#CC7832">getCRC32</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.getcompressedsize.php" class="methodname" style="color:#CC7832">getCompressedSize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.getcontent.php" class="methodname" style="color:#CC7832">getContent</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.getmetadata.php" class="methodname" style="color:#CC7832">getMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.getpharflags.php" class="methodname" style="color:#CC7832">getPharFlags</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.hasmetadata.php" class="methodname" style="color:#CC7832">hasMetadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.iscrcchecked.php" class="methodname" style="color:#CC7832">isCRCChecked</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.iscompressed.php" class="methodname" style="color:#CC7832">isCompressed</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression_type</span><span class="initializer"> = 9021976</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.iscompressedbzip2.php" class="methodname" style="color:#CC7832">isCompressedBZIP2</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.iscompressedgz.php" class="methodname" style="color:#CC7832">isCompressedGZ</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.setcompressedbzip2.php" class="methodname" style="color:#CC7832">setCompressedBZIP2</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.setcompressedgz.php" class="methodname" style="color:#CC7832">setCompressedGZ</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.setmetadata.php" class="methodname" style="color:#CC7832">setMetadata</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$metadata</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pharfileinfo.setuncompressed.php" class="methodname" style="color:#CC7832">setUncompressed</a></span>     ( <span class="methodparam">void</span>    )</div>        }</div>      </div>    </div>                                                                                                                          <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link PharFileInfo::chmod} — Sets file-specific permission bits</li><li>{@link PharFileInfo::compress} — Compresses the current Phar entry with either zlib or bzip2 compression</li><li>{@link PharFileInfo::__construct} — Construct a Phar entry object</li><li>{@link PharFileInfo::decompress} — Decompresses the current Phar entry within the phar</li><li>{@link PharFileInfo::delMetadata} — Deletes the metadata of the entry</li><li>{@link PharFileInfo::getCRC32} — Returns CRC32 code or throws an exception if CRC has not been verified</li><li>{@link PharFileInfo::getCompressedSize} — Returns the actual size of the file (with compression) inside the Phar archive</li><li>{@link PharFileInfo::getContent} — Get the complete file contents of the entry</li><li>{@link PharFileInfo::getMetadata} — Returns file-specific meta-data saved with a file</li><li>{@link PharFileInfo::getPharFlags} — Returns the Phar file entry flags</li><li>{@link PharFileInfo::hasMetadata} — Returns the metadata of the entry</li><li>{@link PharFileInfo::isCRCChecked} — Returns whether file entry has had its CRC verified</li><li>{@link PharFileInfo::isCompressed} — Returns whether the entry is compressed</li><li>{@link PharFileInfo::isCompressedBZIP2} — Returns whether the entry is compressed using bzip2</li><li>{@link PharFileInfo::isCompressedGZ} — Returns whether the entry is compressed using gz</li><li>{@link PharFileInfo::setCompressedBZIP2} — Compresses the current Phar entry within the phar using Bzip2 compression</li><li>{@link PharFileInfo::setCompressedGZ} — Compresses the current Phar entry within the phar using gz compression</li><li>{@link PharFileInfo::setMetadata} — Sets file-specific meta-data saved with a file</li><li>{@link PharFileInfo::setUncompressed} — Uncompresses the current Phar entry within the phar, if it is compressed</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.phar.php">Phar</a></div></div>
*/
class PharFileInfo extends SplFileInfo  {

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Construct a Phar entry object
	 * @link http://php.net/manual/en/pharfileinfo.construct.php
	 * @param string $entry <p>
	 * The full url to retrieve a file. If you wish to retrieve the information
	 * for the file my/file.php from the phar boo.phar,
	 * the entry should be phar://boo.phar/my/file.php.
	 * </p>
	 */
	public function __construct ($entry) {}

	public function __destruct () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Sets file-specific permission bits
	 * @link http://php.net/manual/en/pharfileinfo.chmod.php
	 * @param int $permissions <p>
	 * permissions (see <b>chmod</b>)
	 * </p>
	 * @return void No value is returned.
	 */
/**
*<div id="function.chmod" class="refentry">  <div class="refnamediv">   <h1 class="refname">chmod</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">chmod</span> &mdash; <span class="dc-title">改变文件模式</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.chmod-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>chmod</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    )</div>    <p class="para rdfs-comment">    尝试将 <span class="parameter" style="color:#2EACF9">filename</span> 所指定文件的模式改成    <span class="parameter" style="color:#2EACF9">mode</span> 所给定的。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.chmod-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">filename</span></dt>       <dd>        <p class="para">        文件的路径。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">mode</span></dt>       <dd>        <p class="para">    注意 <span class="parameter" style="color:#2EACF9">mode</span> 不会被自动当成八进制数值，而且也不能用字符串（例如 &quot;g+w&quot;）。要确保正确操作，需要给    <span class="parameter" style="color:#2EACF9">mode</span> 前面加上 0：       </p>       <p class="para">        <div class="informalexample">         <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">755</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;十进制数，可能不对<br /></span><span style="color: #9876AA">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"u+rwx,go+rx"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;字符串，不对<br /></span><span style="color: #9876AA">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0755</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;八进制数，正确的&nbsp;mode&nbsp;值<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>         </div>         </div>       </p>       <p class="para">        <span class="parameter" style="color:#2EACF9">mode</span> 参数包含三个八进制数按顺序分别指定了所有者、所有者所在的组以及所有人的访问限制。每一部分都可以通过加入所需的权限来计算出所要的权限。数字 1    表示使文件可执行，数字 2 表示使文件可写，数字 4    表示使文件可读。加入这些数字来制定所需要的权限。有关 UNIX 系统的文件权限可以阅读手册“<strong class="command">man 1    chmod</strong>”和“<strong class="command">man 2 chmod</strong>”。       </p>       <p class="para">        <div class="informalexample">         <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Read&nbsp;and&nbsp;write&nbsp;for&nbsp;owner,&nbsp;nothing&nbsp;for&nbsp;everybody&nbsp;else<br /></span><span style="color: #9876AA">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0600</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Read&nbsp;and&nbsp;write&nbsp;for&nbsp;owner,&nbsp;read&nbsp;for&nbsp;everybody&nbsp;else<br /></span><span style="color: #9876AA">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0644</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Everything&nbsp;for&nbsp;owner,&nbsp;read&nbsp;and&nbsp;execute&nbsp;for&nbsp;others<br /></span><span style="color: #9876AA">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0755</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Everything&nbsp;for&nbsp;owner,&nbsp;read&nbsp;and&nbsp;execute&nbsp;for&nbsp;owner's&nbsp;group<br /></span><span style="color: #9876AA">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0750</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>         </div>         </div>       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.chmod-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.chmod-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     当前用户指的是执行 PHP 的用户。很可能和通常的 shell 或者 FTP     用户不是同一个。在大多数系统下文件模式只能被文件所有者的用户改变。    </p>   </p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <span class="simpara">此函数不能作用于<a href="http://php.net/manual/zh/features.remote-files.php" class="link">远程文件</a>，被检查的文件必须是可通过服务器的文件系统访问的。</span></p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     当<a href="http://php.net/manual/zh/ini.sect.safe-mode.php#ini.safe-mode" class="link">安全模式</a>打开的时候，PHP 会检查所操作的文件是否和正在执行的脚本具有相同的     UID （所有者）。要注意的是，不能修改 SUID，SGID 和 sticky bits。    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.chmod-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link chown()} - 改变文件的所有者</span></li>     <li class="member"><span class="function">{@link chgrp()} - 改变文件所属的组</span></li>     <li class="member"><span class="function">{@link fileperms()} - 取得文件的权限</span></li>     <li class="member"><span class="function">{@link stat()} - 给出文件的信息</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function chmod ($permissions) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Compresses the current Phar entry with either zlib or bzip2 compression
	 * @link http://php.net/manual/en/pharfileinfo.compress.php
	 * @param int $compression
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function compress ($compression) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Decompresses the current Phar entry within the phar
	 * @link http://php.net/manual/en/pharfileinfo.decompress.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function decompress () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * Deletes the metadata of the entry
	 * @link http://php.net/manual/en/pharfileinfo.delmetadata.php
	 * @return bool <b>TRUE</b> if successful, <b>FALSE</b> if the entry had no metadata.
	 * As with all functionality that modifies the contents of
	 * a phar, the phar.readonly INI variable
	 * must be off in order to succeed if the file is within a <b>Phar</b>
	 * archive. Files within <b>PharData</b> archives do not have
	 * this restriction.
	 */
	public function delMetadata () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns the actual size of the file (with compression) inside the Phar archive
	 * @link http://php.net/manual/en/pharfileinfo.getcompressedsize.php
	 * @return int The size in bytes of the file within the Phar archive on disk.
	 */
	public function getCompressedSize () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns CRC32 code or throws an exception if CRC has not been verified
	 * @link http://php.net/manual/en/pharfileinfo.getcrc32.php
	 * @return int The <b>crc32</b> checksum of the file within the Phar archive.
	 */
	public function getCRC32 () {}

	public function getContent () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns file-specific meta-data saved with a file
	 * @link http://php.net/manual/en/pharfileinfo.getmetadata.php
	 * @return mixed any PHP variable that can be serialized and is stored as meta-data for the file,
	 * or <b>NULL</b> if no meta-data is stored.
	 */
	public function getMetadata () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns the Phar file entry flags
	 * @link http://php.net/manual/en/pharfileinfo.getpharflags.php
	 * @return int The Phar flags (always 0 in the current implementation)
	 */
	public function getPharFlags () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * Returns the metadata of the entry
	 * @link http://php.net/manual/en/pharfileinfo.hasmetadata.php
	 * @return bool <b>FALSE</b> if no metadata is set or is <b>NULL</b>, <b>TRUE</b> if metadata is not <b>NULL</b>
	 */
	public function hasMetadata () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns whether the entry is compressed
	 * @link http://php.net/manual/en/pharfileinfo.iscompressed.php
	 * @param int $compression_type [optional] <p>
	 * One of <b>Phar::GZ</b> or <b>Phar::BZ2</b>,
	 * defaults to any compression.
	 * </p>
	 * @return bool <b>TRUE</b> if the file is compressed within the Phar archive, <b>FALSE</b> if not.
	 */
	public function isCompressed ($compression_type = 9021976) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Returns whether file entry has had its CRC verified
	 * @link http://php.net/manual/en/pharfileinfo.iscrcchecked.php
	 * @return bool <b>TRUE</b> if the file has had its CRC verified, <b>FALSE</b> if not.
	 */
	public function isCRCChecked () {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Sets file-specific meta-data saved with a file
	 * @link http://php.net/manual/en/pharfileinfo.setmetadata.php
	 * @param mixed $metadata <p>
	 * Any PHP variable containing information to store alongside a file
	 * </p>
	 * @return void No value is returned.
	 */
	public function setMetadata ($metadata) {}

}
// End of Phar v.2.0.1
?>
