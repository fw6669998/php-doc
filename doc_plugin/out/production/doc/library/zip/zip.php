<?php

// Start of zip v.1.11.0

/**
*<div id="class.ziparchive" class="reference">  <h1 class="title"> <a href="http://php.net/manual/zh/class.ziparchive.php" class="classname">ZipArchive</a> 类</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)</p>         <div class="section" id="ziparchive.intro">    <h2 class="title">简介</h2>    <p class="para">     一个用 Zip 压缩的文件存档。    </p>   </div>         <div class="section" id="ziparchive.synopsis">    <h2 class="title">类摘要</h2>            <div class="classsynopsis">     <div class="ooclass"></div>               <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ZipArchive</strong>      </span>      {</div>          <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>               <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.addemptydir.php" class="methodname">addEmptyDir</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$dirname</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.addfile.php" class="methodname">addFile</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$localname</code><span class="initializer"> = <strong><code>NULL</code></strong></span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$start</code><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = 0</span></span>   ]]] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.addfromstring.php" class="methodname">addFromString</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$localname</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$contents</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.addglob.php" class="methodname">addGlob</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$pattern</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code><span class="initializer"> = array()</span></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.addpattern.php" class="methodname">addPattern</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$pattern</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$path</code><span class="initializer"> = &quot;.&quot;</span></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code><span class="initializer"> = array()</span></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.close.php" class="methodname">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.count.php" class="methodname">count</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.deleteindex.php" class="methodname">deleteIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.deletename.php" class="methodname">deleteName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.extractto.php" class="methodname">extractTo</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$destination</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$entries</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getarchivecomment.php" class="methodname">getArchiveComment</a></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getcommentindex.php" class="methodname">getCommentIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getcommentname.php" class="methodname">getCommentName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getexternalattributesindex.php" class="methodname">GetExternalAttributesIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$opsys</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$attr</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getexternalattributesname.php" class="methodname">getExternalAttributesName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$opsys</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$attr</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getfromindex.php" class="methodname">getFromIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getfromname.php" class="methodname">getFromName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getnameindex.php" class="methodname">getNameIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getstatusstring.php" class="methodname">getStatusString</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">resource</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.getstream.php" class="methodname">getStream</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.locatename.php" class="methodname">locateName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.open.php" class="methodname">open</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.renameindex.php" class="methodname">renameIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$newname</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.renamename.php" class="methodname">renameName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$newname</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setarchivecomment.php" class="methodname">setArchiveComment</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$comment</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setcommentindex.php" class="methodname">setCommentIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$comment</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setcommentname.php" class="methodname">setCommentName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$comment</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setcompressionindex.php" class="methodname">setCompressionIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$comp_method</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$comp_flags</code><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setcompressionname.php" class="methodname">setCompressionName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$comp_method</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$comp_flags</code><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setencryptionindex.php" class="methodname">setEncryptionIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$method</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setencryptionname.php" class="methodname">setEncryptionName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$method</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setexternalattributesindex.php" class="methodname">setExternalAttributesIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$opsys</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$attr</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setexternalattributesname.php" class="methodname">setExternalAttributesName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$opsys</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$attr</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.setpassword.php" class="methodname">setPassword</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.statindex.php" class="methodname">statIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.statname.php" class="methodname">statName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.unchangeall.php" class="methodname">unchangeAll</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.unchangearchive.php" class="methodname">unchangeArchive</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.unchangeindex.php" class="methodname">unchangeIndex</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/ziparchive.unchangename.php" class="methodname">unchangeName</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div>          }</div>           </div>         <div class="section" id="ziparchive.props">    <h2 class="title">属性</h2>    <dl>            <dt id="ziparchive.props.status"><var class="varname"><var class="varname">status</var></var></dt>       <dd>        <p class="para"> Zip Archive 的状态</p>      </dd>                 <dt id="ziparchive.props.statussys"><var class="varname"><var class="varname">statusSys</var></var></dt>       <dd>        <p class="para">Zip Archive 的系统状态</p>      </dd>                 <dt id="ziparchive.props.numfiles"><var class="varname"><var class="varname">numFiles</var></var></dt>       <dd>        <p class="para">压缩包里的文件数</p>      </dd>                 <dt id="ziparchive.props.filename"><var class="varname"><var class="varname">filename</var></var></dt>       <dd>        <p class="para">在文件系统里的文件名</p>      </dd>                 <dt id="ziparchive.props.comment"><var class="varname"><var class="varname">comment</var></var></dt>       <dd>        <p class="para">压缩包的注释</p>      </dd>          </dl>    </div>     </div>                                                                                                                                                                                                                                                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ZipArchive::addEmptyDir} — Add a new directory</li><li>{@link ZipArchive::addFile} — Adds a file to a ZIP archive from the given path</li><li>{@link ZipArchive::addFromString} — Add a file to a ZIP archive using its contents</li><li>{@link ZipArchive::addGlob} — Add files from a directory by glob pattern</li><li>{@link ZipArchive::addPattern} — Add files from a directory by PCRE pattern</li><li>{@link ZipArchive::close} — Close the active archive (opened or newly created)</li><li>{@link ZipArchive::count} — Counts the number of files in the achive</li><li>{@link ZipArchive::deleteIndex} — Delete an entry in the archive using its index</li><li>{@link ZipArchive::deleteName} — Delete an entry in the archive using its name</li><li>{@link ZipArchive::extractTo} — 解压缩文件</li><li>{@link ZipArchive::getArchiveComment} — Returns the Zip archive comment</li><li>{@link ZipArchive::getCommentIndex} — Returns the comment of an entry using the entry index</li><li>{@link ZipArchive::getCommentName} — Returns the comment of an entry using the entry name</li><li>{@link ZipArchive::getExternalAttributesIndex} — Retrieve the external attributes of an entry defined by its index</li><li>{@link ZipArchive::getExternalAttributesName} — Retrieve the external attributes of an entry defined by its name</li><li>{@link ZipArchive::getFromIndex} — Returns the entry contents using its index</li><li>{@link ZipArchive::getFromName} — Returns the entry contents using its name</li><li>{@link ZipArchive::getNameIndex} — Returns the name of an entry using its index</li><li>{@link ZipArchive::getStatusString} — Returns the status error message, system and/or zip messages</li><li>{@link ZipArchive::getStream} — Get a file handler to the entry defined by its name (read only)</li><li>{@link ZipArchive::locateName} — Returns the index of the entry in the archive</li><li>{@link ZipArchive::open} — Open a ZIP file archive</li><li>{@link ZipArchive::renameIndex} — Renames an entry defined by its index</li><li>{@link ZipArchive::renameName} — Renames an entry defined by its name</li><li>{@link ZipArchive::setArchiveComment} — Set the comment of a ZIP archive</li><li>{@link ZipArchive::setCommentIndex} — Set the comment of an entry defined by its index</li><li>{@link ZipArchive::setCommentName} — Set the comment of an entry defined by its name</li><li>{@link ZipArchive::setCompressionIndex} — Set the compression method of an entry defined by its index</li><li>{@link ZipArchive::setCompressionName} — Set the compression method of an entry defined by its name</li><li>{@link ZipArchive::setEncryptionIndex} — Set the encryption method of an entry defined by its index</li><li>{@link ZipArchive::setEncryptionName} — Set the encryption method of an entry defined by its name</li><li>{@link ZipArchive::setExternalAttributesIndex} — Set the external attributes of an entry defined by its index</li><li>{@link ZipArchive::setExternalAttributesName} — Set the external attributes of an entry defined by its name</li><li>{@link ZipArchive::setPassword} — Set the password for the active archive</li><li>{@link ZipArchive::statIndex} — Get the details of an entry defined by its index</li><li>{@link ZipArchive::statName} — Get the details of an entry defined by its name</li><li>{@link ZipArchive::unchangeAll} — Undo all changes done in the archive</li><li>{@link ZipArchive::unchangeArchive} — Revert all global changes done in the archive</li><li>{@link ZipArchive::unchangeIndex} — Revert all changes done to an entry at the given index</li><li>{@link ZipArchive::unchangeName} — Revert all changes done to an entry with the given name</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.zip.php">Zip</a></div></div>
*/
class ZipArchive  {

	/**
	 * Create the archive if it does not exist.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CREATE = 1;

	/**
	 * Error if archive already exists.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const EXCL = 2;

	/**
	 * Perform additional consistency checks on the archive, and error if they fail.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CHECKCONS = 4;

	/**
	 * Always start a new archive, this mode will overwrite the file if
	 * it already exists.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const OVERWRITE = 8;

	/**
	 * Ignore case on name lookup
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const FL_NOCASE = 1;

	/**
	 * Ignore directory component
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const FL_NODIR = 2;

	/**
	 * Read compressed data
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const FL_COMPRESSED = 4;

	/**
	 * Use original data, ignoring changes.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const FL_UNCHANGED = 8;

	/**
	 * better of deflate or store.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_DEFAULT = -1;

	/**
	 * stored (uncompressed).
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_STORE = 0;

	/**
	 * shrunk
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_SHRINK = 1;

	/**
	 * reduced with factor 1
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_REDUCE_1 = 2;

	/**
	 * reduced with factor 2
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_REDUCE_2 = 3;

	/**
	 * reduced with factor 3
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_REDUCE_3 = 4;

	/**
	 * reduced with factor 4
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_REDUCE_4 = 5;

	/**
	 * imploded
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_IMPLODE = 6;

	/**
	 * deflated
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_DEFLATE = 8;

	/**
	 * deflate64
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_DEFLATE64 = 9;

	/**
	 * PKWARE imploding
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_PKWARE_IMPLODE = 10;

	/**
	 * BZIP2 algorithm
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const CM_BZIP2 = 12;
	const CM_LZMA = 14;
	const CM_TERSE = 18;
	const CM_LZ77 = 19;
	const CM_WAVPACK = 97;
	const CM_PPMD = 98;

	/**
	 * No error.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_OK = 0;

	/**
	 * Multi-disk zip archives not supported.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_MULTIDISK = 1;

	/**
	 * Renaming temporary file failed.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_RENAME = 2;

	/**
	 * Closing zip archive failed
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_CLOSE = 3;

	/**
	 * Seek error
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_SEEK = 4;

	/**
	 * Read error
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_READ = 5;

	/**
	 * Write error
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_WRITE = 6;

	/**
	 * CRC error
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_CRC = 7;

	/**
	 * Containing zip archive was closed
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_ZIPCLOSED = 8;

	/**
	 * No such file.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_NOENT = 9;

	/**
	 * File already exists
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_EXISTS = 10;

	/**
	 * Can't open file
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_OPEN = 11;

	/**
	 * Failure to create temporary file.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_TMPOPEN = 12;

	/**
	 * Zlib error
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_ZLIB = 13;

	/**
	 * Memory allocation failure
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_MEMORY = 14;

	/**
	 * Entry has been changed
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_CHANGED = 15;

	/**
	 * Compression method not supported.
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_COMPNOTSUPP = 16;

	/**
	 * Premature EOF
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_EOF = 17;

	/**
	 * Invalid argument
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_INVAL = 18;

	/**
	 * Not a zip archive
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_NOZIP = 19;

	/**
	 * Internal error
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_INTERNAL = 20;

	/**
	 * Zip archive inconsistent
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_INCONS = 21;

	/**
	 * Can't remove file
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_REMOVE = 22;

	/**
	 * Entry has been deleted
	 * @link http://php.net/manual/en/zip.constants.php
	 */
	const ER_DELETED = 23;

    /**
     * Status of the Zip Archive
     */
    public $status;
    /**
     * System status of the Zip Archive
     */
    public $statusSys;
    /**
     * Number of files in archive
     */
    public $numFiles;
    /**
     * File name in the file system
     */
    public $filename;
    /**
     * Comment for the archive
     */
    public $comment;

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Open a ZIP file archive
	 * @link http://php.net/manual/en/ziparchive.open.php
	 * @param string $filename <p>
	 * The file name of the ZIP archive to open.
	 * </p>
	 * @param int $flags [optional] <p>
	 * The mode to use to open the archive.
	 * <p>
	 * <b>ZipArchive::OVERWRITE</b>
	 * </p>
	 * @return mixed <i>Error codes</i>
	 * <p>
	 * Returns <b>TRUE</b> on success or the error code.
	 * <p>
	 * <b>ZipArchive::ER_EXISTS</b>
	 * </p>
	 * <p>
	 * File already exists.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_INCONS</b>
	 * </p>
	 * <p>
	 * Zip archive inconsistent.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_INVAL</b>
	 * </p>
	 * <p>
	 * Invalid argument.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_MEMORY</b>
	 * </p>
	 * <p>
	 * Malloc failure.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_NOENT</b>
	 * </p>
	 * <p>
	 * No such file.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_NOZIP</b>
	 * </p>
	 * <p>
	 * Not a zip archive.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_OPEN</b>
	 * </p>
	 * <p>
	 * Can't open file.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_READ</b>
	 * </p>
	 * <p>
	 * Read error.
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_SEEK</b>
	 * </p>
	 * <p>
	 * Seek error.
	 * </p>
	 * </p>
	 */
	public function open ($filename, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Close the active archive (opened or newly created)
	 * @link http://php.net/manual/en/ziparchive.close.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function close () {}

	/**
	 * Returns the status error message, system and/or zip messages
	 * @link http://php.net/manual/en/ziparchive.getstatusstring.php
	 * @return string a string with the status message on success or <b>FALSE</b> on failure.
	 * @since 5.2.7
	 */
	public function getStatusString () {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.8.0)<br/>
	 * Add a new directory
	 * @link http://php.net/manual/en/ziparchive.addemptydir.php
	 * @param string $dirname <p>
	 * The directory to add.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addEmptyDir ($dirname) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Add a file to a ZIP archive using its contents
	 * @link http://php.net/manual/en/ziparchive.addfromstring.php
	 * @param string $localname <p>
	 * The name of the entry to create.
	 * </p>
	 * @param string $contents <p>
	 * The contents to use to create the entry. It is used in a binary
	 * safe mode.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addFromString ($localname, $contents) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Adds a file to a ZIP archive from the given path
	 * @link http://php.net/manual/en/ziparchive.addfile.php
	 * @param string $filename <p>
	 * The path to the file to add.
	 * </p>
	 * @param string $localname [optional] <p>
	 * If supplied, this is the local name inside the ZIP archive that will override the <i>filename</i>.
	 * </p>
	 * @param int $start [optional] <p>
	 * This parameter is not used but is required to extend <b>ZipArchive</b>.
	 * </p>
	 * @param int $length [optional] <p>
	 * This parameter is not used but is required to extend <b>ZipArchive</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addFile ($filename, $localname = null, $start = 0, $length = 0) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PECL zip &gt;= 1.9.0)<br/>
	 * Add files from a directory by glob pattern
	 * @link http://php.net/manual/en/ziparchive.addglob.php
	 * @param string $pattern <p>
	 * A <b>glob</b> pattern against which files will be matched.
	 * </p>
	 * @param int $flags [optional] <p>
	 * A bit mask of glob() flags.
	 * </p>
	 * @param array $options [optional] <p>
	 * An associative array of options. Available options are:
	 * <p>
	 * "add_path"
	 * </p>
	 * <p>
	 * Prefix to prepend when translating to the local path of the file within
	 * the archive. This is applied after any remove operations defined by the
	 * "remove_path" or "remove_all_path"
	 * options.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addGlob ($pattern, $flags = 0, array $options = array()) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PECL zip &gt;= 1.9.0)<br/>
	 * Add files from a directory by PCRE pattern
	 * @link http://php.net/manual/en/ziparchive.addpattern.php
	 * @param string $pattern <p>
	 * A PCRE pattern against which files will be matched.
	 * </p>
	 * @param string $path [optional] <p>
	 * The directory that will be scanned. Defaults to the current working directory.
	 * </p>
	 * @param array $options [optional] <p>
	 * An associative array of options accepted by <b>ZipArchive::addGlob</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addPattern ($pattern, $path = '.', array $options = array()) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * Renames an entry defined by its index
	 * @link http://php.net/manual/en/ziparchive.renameindex.php
	 * @param int $index <p>
	 * Index of the entry to rename.
	 * </p>
	 * @param string $newname <p>
	 * New name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function renameIndex ($index, $newname) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * Renames an entry defined by its name
	 * @link http://php.net/manual/en/ziparchive.renamename.php
	 * @param string $name <p>
	 * Name of the entry to rename.
	 * </p>
	 * @param string $newname <p>
	 * New name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function renameName ($name, $newname) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
	 * Set the comment of a ZIP archive
	 * @link http://php.net/manual/en/ziparchive.setarchivecomment.php
	 * @param string $comment <p>
	 * The contents of the comment.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setArchiveComment ($comment) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Returns the Zip archive comment
	 * @link http://php.net/manual/en/ziparchive.getarchivecomment.php
	 * @param int $flags [optional] <p>
	 * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
	 * comment is returned.
	 * </p>
	 * @return string the Zip archive comment or <b>FALSE</b> on failure.
	 */
	public function getArchiveComment ($flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
	 * Set the comment of an entry defined by its index
	 * @link http://php.net/manual/en/ziparchive.setcommentindex.php
	 * @param int $index <p>
	 * Index of the entry.
	 * </p>
	 * @param string $comment <p>
	 * The contents of the comment.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setCommentIndex ($index, $comment) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
	 * Set the comment of an entry defined by its name
	 * @link http://php.net/manual/en/ziparchive.setcommentname.php
	 * @param string $name <p>
	 * Name of the entry.
	 * </p>
	 * @param string $comment <p>
	 * The contents of the comment.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setCommentName ($name, $comment) {}

	/**
	 * Set the compression method of an entry defined by its index
	 * @link http://php.net/manual/en/ziparchive.setcompressionindex.php
	 * @param int $index Index of the entry.
	 * @param int $comp_method The compression method. Either ZipArchive::CM_DEFAULT, ZipArchive::CM_STORE or ZipArchive::CM_DEFLATE.
	 * @param int $comp_flags [optional] Compression flags. Currently unused.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 * @since 7.0
	 */
	public function setCompressionIndex ($index, $comp_method, $comp_flags = 0) {}

	/**
	 * Set the compression method of an entry defined by its name
	 * http://php.net/manual/en/ziparchive.setcompressionname.php
	 * @param string $name Name of the entry.
	 * @param int $comp_method The compression method. Either ZipArchive::CM_DEFAULT, ZipArchive::CM_STORE or ZipArchive::CM_DEFLATE.
	 * @param int $comp_flags [optional] Compression flags. Currently unused.
	 * @return bool Returns TRUE on success or FALSE on failure.
	 * @since 7.0
	 */
	public function setCompressionName ($name, $comp_method, $comp_flags = 0){}

/**
*<div id="ziparchive.setencryptionindex" class="refentry">  <div class="refnamediv">   <h1 class="refname">ZipArchive::setEncryptionIndex</h1>   <p class="verinfo">(PHP &gt;= 7.2.0, PECL zip &gt;= 1.14.0)</p><p class="refpurpose"><span class="refname">ZipArchive::setEncryptionIndex</span> &mdash; <span class="dc-title">Set the encryption method of an entry defined by its index</span></p>   </div>  <div class="refsect1 description" id="refsect1-ziparchive.setencryptionindex-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><strong>ZipArchive::setEncryptionIndex</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$index</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$method</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>   ] )</div>    <p class="para rdfs-comment">    Set the encryption method of an entry defined by its index.   </p>  </div>   <div class="refsect1 parameters" id="refsect1-ziparchive.setencryptionindex-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">index</code></dt>       <dd>        <p class="para">        Index of the entry.       </p>      </dd>                 <dt> <code class="parameter">method</code></dt>       <dd>        <p class="para">        The encryption method defined by one of the ZipArchive::EM_ constants.       </p>      </dd>                 <dt> <code class="parameter">password</code></dt>       <dd>        <p class="para">        Optional password, default used when missing.       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-ziparchive.setencryptionindex-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-ziparchive.setencryptionindex-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="methodname">{@link ZipArchive::setPassword()} - Set the password for the active archive</span></li>     <li class="member"><span class="methodname">{@link ZipArchive::setEncryptionName()} - Set the encryption method of an entry defined by its name</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.ziparchive.php">ZipArchive</a></div></div>
     * @return bool Returns TRUE on success or FALSE on failure.*/
    public function setEncryptionIndex ($index, $method, $password = null) {}

/**
*<div id="ziparchive.setencryptionname" class="refentry">  <div class="refnamediv">   <h1 class="refname">ZipArchive::setEncryptionName</h1>   <p class="verinfo">(PHP &gt;= 7.2.0, PECL zip &gt;= 1.14.0)</p><p class="refpurpose"><span class="refname">ZipArchive::setEncryptionName</span> &mdash; <span class="dc-title">Set the encryption method of an entry defined by its name</span></p>   </div>  <div class="refsect1 description" id="refsect1-ziparchive.setencryptionname-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><strong>ZipArchive::setEncryptionName</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$method</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>   ] )</div>    <p class="para rdfs-comment">    Set the encryption method of an entry defined by its name.   </p>  </div>   <div class="refsect1 parameters" id="refsect1-ziparchive.setencryptionname-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">name</code></dt>       <dd>        <p class="para">        Name of the entry.       </p>      </dd>                 <dt> <code class="parameter">method</code></dt>       <dd>        <p class="para">        The encryption method defined by one of the ZipArchive::EM_ constants.       </p>      </dd>                 <dt> <code class="parameter">password</code></dt>       <dd>        <p class="para">        Optional password, default used when missing.       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-ziparchive.setencryptionname-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-ziparchive.setencryptionname-examples">   <h3 class="title">范例</h3>     <p class="para">      This example creates a ZIP file archive      <var class="filename">test.zip</var> and add      the file <var class="filename">test.txt</var>      encrypted using the AES 256 method.     </p>     <div class="example" id="example-860">      <p><strong>Example #1 Archive and encrypt a file</strong></p>      <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$zip&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">ZipArchive</span><span style="color: #007700">();<br />if&nbsp;(</span><span style="color: #9876AA">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.zip'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">ZipArchive</span><span style="color: #007700">::</span><span style="color: #9876AA">CREATE</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #9876AA">TRUE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setPassword</span><span style="color: #007700">(</span><span style="color: #DD0000">'secret'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">addFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'text.txt'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setEncryptionName</span><span style="color: #007700">(</span><span style="color: #DD0000">'text.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">ZipArchive</span><span style="color: #007700">::</span><span style="color: #9876AA">EM_AES_256</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">close</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Ok\n"</span><span style="color: #007700">;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"KO\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>      </div>      </div>  </div>    <div class="refsect1 seealso" id="refsect1-ziparchive.setencryptionname-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="methodname">{@link ZipArchive::setPassword()} - Set the password for the active archive</span></li>     <li class="member"><span class="methodname">{@link ZipArchive::setEncryptionIndex()} - Set the encryption method of an entry defined by its index</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.ziparchive.php">ZipArchive</a></div></div>
     * @return bool Returns TRUE on success or FALSE on failure.*/
    public function setEncryptionName ($name, $method, $password = null) {}

/**
*<div id="ziparchive.setpassword" class="refentry">  <div class="refnamediv">   <h1 class="refname">ZipArchive::setPassword</h1>   <p class="verinfo">(PHP 5 &gt;= 5.6.0, PHP 7, PECL zip &gt;= 1.12.4)</p><p class="refpurpose"><span class="refname">ZipArchive::setPassword</span> &mdash; <span class="dc-title">Set the password for the active archive</span></p>   </div>   <div class="refsect1 description" id="refsect1-ziparchive.setpassword-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>ZipArchive::setPassword</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    )</div>    <p class="para rdfs-comment">    Sets the password for the active archive.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-ziparchive.setpassword-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">       The password to be used for the archive.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-ziparchive.setpassword-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>     <div class="refsect1 notes" id="refsect1-ziparchive.setpassword-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     As of PHP 7.2.0 and libzip 1.2.0 the password is used to decompress the archive,     and is also the default password for <span class="methodname">{@link ZipArchive::setEncryptionName()}</span>     and <span class="methodname">{@link ZipArchive::setEncryptionIndex()}</span>.     Formerly, this function only set the password to be used to decompress the archive;     it did not turn a non-password-protected <a href="http://php.net/manual/zh/class.ziparchive.php" class="classname">ZipArchive</a>     into a password-protected <a href="http://php.net/manual/zh/class.ziparchive.php" class="classname">ZipArchive</a>.    </p>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-ziparchive.setpassword-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="methodname">{@link ZipArchive::setEncryptionIndex()} - Set the encryption method of an entry defined by its index</span></li>     <li class="member"><span class="methodname">{@link ZipArchive::setEncryptionName()} - Set the encryption method of an entry defined by its name</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.ziparchive.php">ZipArchive</a></div></div>
     * @return boolean*/
    public function setPassword($password) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
	 * Returns the comment of an entry using the entry index
	 * @link http://php.net/manual/en/ziparchive.getcommentindex.php
	 * @param int $index <p>
	 * Index of the entry
	 * </p>
	 * @param int $flags [optional] <p>
	 * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
	 * comment is returned.
	 * </p>
	 * @return string the comment on success or <b>FALSE</b> on failure.
	 */
	public function getCommentIndex ($index, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
	 * Returns the comment of an entry using the entry name
	 * @link http://php.net/manual/en/ziparchive.getcommentname.php
	 * @param string $name <p>
	 * Name of the entry
	 * </p>
	 * @param int $flags [optional] <p>
	 * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
	 * comment is returned.
	 * </p>
	 * @return string the comment on success or <b>FALSE</b> on failure.
	 */
	public function getCommentName ($name, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * delete an entry in the archive using its index
	 * @link http://php.net/manual/en/ziparchive.deleteindex.php
	 * @param int $index <p>
	 * Index of the entry to delete.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function deleteIndex ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * delete an entry in the archive using its name
	 * @link http://php.net/manual/en/ziparchive.deletename.php
	 * @param string $name <p>
	 * Name of the entry to delete.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function deleteName ($name) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * Get the details of an entry defined by its name.
	 * @link http://php.net/manual/en/ziparchive.statname.php
	 * @param string $name <p>
	 * Name of the entry
	 * </p>
	 * @param int $flags [optional] <p>
	 * The flags argument specifies how the name lookup should be done.
	 * Also, <b>ZipArchive::FL_UNCHANGED</b> may be ORed to it to request
	 * information about the original file in the archive,
	 * ignoring any changes made.
	 * <p>
	 * <b>ZipArchive::FL_NOCASE</b>
	 * </p>
	 * @return array an array containing the entry details or <b>FALSE</b> on failure.
	 */
	public function statName ($name, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Get the details of an entry defined by its index.
	 * @link http://php.net/manual/en/ziparchive.statindex.php
	 * @param int $index <p>
	 * Index of the entry
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ZipArchive::FL_UNCHANGED</b> may be ORed to it to request
	 * information about the original file in the archive,
	 * ignoring any changes made.
	 * </p>
	 * @return array an array containing the entry details or <b>FALSE</b> on failure.
	 */
	public function statIndex ($index, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * Returns the index of the entry in the archive
	 * @link http://php.net/manual/en/ziparchive.locatename.php
	 * @param string $name <p>
	 * The name of the entry to look up
	 * </p>
	 * @param int $flags [optional] <p>
	 * The flags are specified by ORing the following values,
	 * or 0 for none of them.
	 * <p>
	 * <b>ZipArchive::FL_NOCASE</b>
	 * </p>
	 * @return int the index of the entry on success or <b>FALSE</b> on failure.
	 */
	public function locateName ($name, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * Returns the name of an entry using its index
	 * @link http://php.net/manual/en/ziparchive.getnameindex.php
	 * @param int $index <p>
	 * Index of the entry.
	 * </p>
	 * @param int $flags [optional] <p>
	 * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
	 * name is returned.
	 * </p>
	 * @return string the name on success or <b>FALSE</b> on failure.
	 */
	public function getNameIndex ($index, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Revert all global changes done in the archive.
	 * @link http://php.net/manual/en/ziparchive.unchangearchive.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function unchangeArchive () {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Undo all changes done in the archive
	 * @link http://php.net/manual/en/ziparchive.unchangeall.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function unchangeAll () {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Revert all changes done to an entry at the given index
	 * @link http://php.net/manual/en/ziparchive.unchangeindex.php
	 * @param int $index <p>
	 * Index of the entry.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function unchangeIndex ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
	 * Revert all changes done to an entry with the given name.
	 * @link http://php.net/manual/en/ziparchive.unchangename.php
	 * @param string $name <p>
	 * Name of the entry.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function unchangeName ($name) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Extract the archive contents
	 * @link http://php.net/manual/en/ziparchive.extractto.php
	 * @param string $destination <p>
	 * Location where to extract the files.
	 * </p>
	 * @param mixed $entries [optional] <p>
	 * The entries to extract. It accepts either a single entry name or
	 * an array of names.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function extractTo ($destination, $entries = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Returns the entry contents using its name
	 * @link http://php.net/manual/en/ziparchive.getfromname.php
	 * @param string $name <p>
	 * Name of the entry
	 * </p>
	 * @param int $length [optional] <p>
	 * The length to be read from the entry. If 0, then the
	 * entire entry is read.
	 * </p>
	 * @param int $flags [optional] <p>
	 * The flags to use to open the archive. the following values may
	 * be ORed to it.
	 * <p>
	 * <b>ZipArchive::FL_UNCHANGED</b>
	 * </p>
	 * @return string the contents of the entry on success or <b>FALSE</b> on failure.
	 */
	public function getFromName ($name, $length = 0, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.3.0)<br/>
	 * Returns the entry contents using its index
	 * @link http://php.net/manual/en/ziparchive.getfromindex.php
	 * @param int $index <p>
	 * Index of the entry
	 * </p>
	 * @param int $length [optional] <p>
	 * The length to be read from the entry. If 0, then the
	 * entire entry is read.
	 * </p>
	 * @param int $flags [optional] <p>
	 * The flags to use to open the archive. the following values may
	 * be ORed to it.
	 * <p>
	 * <b>ZipArchive::FL_UNCHANGED</b>
	 * </p>
	 * @return string the contents of the entry on success or <b>FALSE</b> on failure.
	 */
	public function getFromIndex ($index, $length = 0, $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
	 * Get a file handler to the entry defined by its name (read only).
	 * @link http://php.net/manual/en/ziparchive.getstream.php
	 * @param string $name <p>
	 * The name of the entry to use.
	 * </p>
	 * @return resource a file pointer (resource) on success or <b>FALSE</b> on failure.
	 */
	public function getStream ($name) {}

}

/**
*<div id="function.zip-open" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_open</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_open</span> &mdash; <span class="dc-title">打开ZIP存档文件</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-open-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">resource</span> <span class="methodname"><strong>zip_open</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    )</div>    <p class="para rdfs-comment">    打开一个新的ZIP归档文件进行读取。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-open-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">filename</code></dt>       <dd>        <p class="para">        待打开ZIP归档的文件名。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-open-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功的时候返回一个资源句柄供函数<span class="function">{@link zip_read()}</span> 和 <span class="function">{@link zip_close()}</span>后续使用;    如果<code class="parameter">filename</code> 文件不存在或者出现其他错误，则会返回相应的错误码。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-open-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_read()} - 读取ZIP存档文件中下一项</span></li>     <li class="member"><span class="function">{@link zip_close()} - 关闭一个ZIP档案文件</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return resource a resource handle for later use with*/
function zip_open ($filename) {}

/**
*<div id="function.zip-close" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_close</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_close</span> &mdash; <span class="dc-title">关闭一个ZIP档案文件</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-close-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>zip_close</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip</code></span>    )</div>    <p class="para rdfs-comment">    关闭一个指定的ZIP档案文件。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-close-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip</code></dt>       <dd>        <p class="para">        一个由<span class="function">{@link zip_open()}</span>打开的ZIP文件资源。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-close-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    没有返回值。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-close-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_open()} - 打开ZIP存档文件</span></li>     <li class="member"><span class="function">{@link zip_read()} - 读取ZIP存档文件中下一项</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return void No value is returned.*/
function zip_close ($zip) {}

/**
*<div id="function.zip-read" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_read</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_read</span> &mdash; <span class="dc-title">读取ZIP存档文件中下一项</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-read-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">resource</span> <span class="methodname"><strong>zip_read</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip</code></span>    )</div>    <p class="para rdfs-comment">    读取ZIP存档文件中下一项。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-read-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip</code></dt>       <dd>        <p class="para">         一个ZIP压缩文件,该ZIP归档文件之前应由函数 <span class="function">{@link zip_open()}</span> 打开。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-read-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功的时候返回该当前实体资源供<em>zip_entry_...</em> 系列函数后续使用;     如果没有更多的读取项，则会返回 <strong><code>FALSE</code></strong>    如果遇到错误则会返回相应的错误码。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-read-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_open()} - 打开ZIP存档文件</span></li>     <li class="member"><span class="function">{@link zip_close()} - 关闭一个ZIP档案文件</span></li>     <li class="member"><span class="function">{@link zip_entry_open()} - 打开用于读取的目录实体</span></li>     <li class="member"><span class="function">{@link zip_entry_read()} - 读取一个打开了的压缩目录实体</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return resource a directory entry resource for later use with the*/
function zip_read ($zip) {}

/**
*<div id="function.zip-entry-open" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_open</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_open</span> &mdash; <span class="dc-title">打开用于读取的目录实体</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-open-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>zip_entry_open</strong></span>           ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip</code></span>    , <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$mode</code></span>   ] )</div>    <p class="para rdfs-comment">    打开ZIP文件中的目录实体以便后续读取。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-open-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_open()}</span>返回的有效的资源句柄。       </p>      </dd>                 <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_read()}</span>返回的目录实体。       </p>      </dd>                 <dt> <code class="parameter">mode</code></dt>       <dd>        <p class="para">        任何在<span class="function">{@link fopen()}</span>处理文档中指定的模式。       </p>       <blockquote class="note"><p><strong class="note">Note</strong>:         <p class="para">         由于ZIP在PHP中只支持读取模式，所以<code class="parameter">mode</code>          实际上总是被设置为<em>&quot;rb&quot;</em>(其他模式会被忽略)。        </p>       </p></blockquote>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-open-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     与<span class="function">{@link fopen()}</span>和其他类似的方法不同，<span class="function"><strong>zip_entry_open()</strong></span>     的返回值只用于标示该操作结果，不需要读取或关闭该目录实体。    </p>   </p></blockquote>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-open-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_entry_close()} - 关闭目录项</span></li>     <li class="member"><span class="function">{@link zip_entry_read()} - 读取一个打开了的压缩目录实体</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function zip_entry_open ($zip, $zip_entry, $mode = null) {}

/**
*<div id="function.zip-entry-close" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_close</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_close</span> &mdash; <span class="dc-title">关闭目录项</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-close-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>zip_entry_close</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    )</div>    <p class="para rdfs-comment">    关闭指定的目录项。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-close-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        一个由<span class="function">{@link zip_entry_open()}</span>打开的项目。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-close-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-close-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_entry_open()} - 打开用于读取的目录实体</span></li>     <li class="member"><span class="function">{@link zip_entry_read()} - 读取一个打开了的压缩目录实体</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function zip_entry_close ($zip_entry) {}

/**
*<div id="function.zip-entry-read" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_read</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_read</span> &mdash; <span class="dc-title">读取一个打开了的压缩目录实体</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-read-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>zip_entry_read</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = 1024</span></span>   ] )</div>    <p class="para rdfs-comment">       读取一个打开了的压缩目录实体。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-read-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_read()}</span> 返回的目录实体。       </p>      </dd>                 <dt> <code class="parameter">length</code></dt>       <dd>        <p class="para">        需要返回的字节数。       </p>       <blockquote class="note"><p><strong class="note">Note</strong>:         <p class="para">         这字节数应该是你所要读取的未压缩的字节数。        </p>       </p></blockquote>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-read-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功的时候返回读取到的数据；到达文件末尾的时候返回一个空的字符串；    读取出错的时候则会返回<strong><code>FALSE</code></strong>    </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-read-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_entry_open()} - 打开用于读取的目录实体</span></li>     <li class="member"><span class="function">{@link zip_entry_close()} - 关闭目录项</span></li>     <li class="member"><span class="function">{@link zip_entry_filesize()} - 检索目录实体的实际大小</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return string the data read, empty string on end of a file, or <b>FALSE</b> on error.*/
function zip_entry_read ($zip_entry, $length = 1024) {}

/**
*<div id="function.zip-entry-filesize" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_filesize</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_filesize</span> &mdash; <span class="dc-title">检索目录实体的实际大小</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-filesize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>zip_entry_filesize</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    )</div>    <p class="para rdfs-comment">    返回指定目录实体的实际大小。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-filesize-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_read()}</span> 返回的目录实体。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-filesize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回该目录实体的大小。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-filesize-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_open()} - 打开ZIP存档文件</span></li>     <li class="member"><span class="function">{@link zip_read()} - 读取ZIP存档文件中下一项</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return int The size of the directory entry.*/
function zip_entry_filesize ($zip_entry) {}

/**
*<div id="function.zip-entry-name" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_name</h1>                    <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_name</span> &mdash; <span class="dc-title">检索目录项的名称</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-name-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>zip_entry_name</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    )</div>    <p class="para rdfs-comment">    返回指定目录项的名称。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-name-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_read()}</span> 返回的目录项。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-name-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    目录项的名称。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-name-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_open()} - 打开ZIP存档文件</span></li>     <li class="member"><span class="function">{@link zip_read()} - 读取ZIP存档文件中下一项</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return string The name of the directory entry.*/
function zip_entry_name ($zip_entry) {}

/**
*<div id="function.zip-entry-compressedsize" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_compressedsize</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_compressedsize</span> &mdash; <span class="dc-title">检索目录项压缩过后的大小</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-compressedsize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>zip_entry_compressedsize</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    )</div>    <p class="para rdfs-comment">    返回指定目录项压缩过后的大小。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-compressedsize-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_read()}</span> 返回的目录项。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-compressedsize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    压缩后的大小。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-compressedsize-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_open()} - 打开ZIP存档文件</span></li>     <li class="member"><span class="function">{@link zip_read()} - 读取ZIP存档文件中下一项</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return int The compressed size.*/
function zip_entry_compressedsize ($zip_entry) {}

/**
*<div id="function.zip-entry-compressionmethod" class="refentry">  <div class="refnamediv">   <h1 class="refname">zip_entry_compressionmethod</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_compressionmethod</span> &mdash; <span class="dc-title">检索目录实体的压缩方法</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.zip-entry-compressionmethod-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>zip_entry_compressionmethod</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$zip_entry</code></span>    )</div>    <p class="para rdfs-comment">    返回由函数<code class="parameter">zip_entry</code>确定的目录实体的压缩方法。    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.zip-entry-compressionmethod-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">zip_entry</code></dt>       <dd>        <p class="para">        由函数<span class="function">{@link zip_read()}</span> 返回的目录实体。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-compressionmethod-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    压缩方法。   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.zip-entry-compressionmethod-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link zip_open()} - 打开ZIP存档文件</span></li>     <li class="member"><span class="function">{@link zip_read()} - 读取ZIP存档文件中下一项</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.zip.php">Zip 函数</a></div></div>
 * @return string The compression method.*/
function zip_entry_compressionmethod ($zip_entry) {}

// End of zip v.1.11.0
?>
