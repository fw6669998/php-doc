<?php

// Start of sqlite3 v.0.7-dev

/**
*<div id="class.sqlite3" class="reference">  <h1 class="title">SQLite3 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p>     <div class="section" id="sqlite3.intro">    <h2 class="title">简介</h2>    <p class="para">     实现与 SQLite 3 数据库对接的类。    </p>   </div>     <div class="section" id="sqlite3.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SQLite3</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.busytimeout.php" class="methodname">busyTimeout</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$msecs</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.changes.php" class="methodname">changes</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.close.php" class="methodname">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code><span class="initializer"> = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</span></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encryption_key</code><span class="initializer"> = <strong><code>NULL</code></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.createaggregate.php" class="methodname">createAggregate</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$step_callback</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$final_callback</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$argument_count</code><span class="initializer"> = -1</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.createcollation.php" class="methodname">createCollation</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link createFunction}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$callback</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$argument_count</code><span class="initializer"> = -1</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.enableexceptions.php" class="methodname">enableExceptions</a></span>     ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$enableExceptions</code><span class="initializer"> = <strong><code>FALSE</code></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.escapestring.php" class="methodname">escapeString</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.exec.php" class="methodname">exec</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$query</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.lasterrorcode.php" class="methodname">lastErrorCode</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.lasterrormsg.php" class="methodname">lastErrorMsg</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.lastinsertrowid.php" class="methodname">lastInsertRowID</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.loadextension.php" class="methodname">loadExtension</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$shared_library</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.open.php" class="methodname">open</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code><span class="initializer"> = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</span></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encryption_key</code><span class="initializer"> = <strong><code>NULL</code></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">resource</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.openblob.php" class="methodname">openBlob</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$table</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$column</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$rowid</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$dbname</code><span class="initializer"> = &quot;main&quot;</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$flags</code><span class="initializer"> = SQLITE3_OPEN_READONLY</span></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SQLite3Stmt</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.prepare.php" class="methodname">prepare</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$query</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SQLite3Result</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.query.php" class="methodname">query</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$query</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.querysingle.php" class="methodname">querySingle</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$query</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$entire_row</code><span class="initializer"> = <strong><code>FALSE</code></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3.version.php" class="methodname">version</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>   </div>                                                                                                                                                <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SQLite3::busyTimeout} — Sets the busy connection handler</li><li>{@link SQLite3::changes} — Returns the number of database rows that were changed (or inserted or    deleted) by the most recent SQL statement</li><li>{@link SQLite3::close} — Closes the database connection</li><li>{@link SQLite3::__construct} — Instantiates an SQLite3 object and opens an SQLite 3 database</li><li>{@link SQLite3::createAggregate} — Registers a PHP function for use as an SQL aggregate function</li><li>{@link SQLite3::createCollation} — Registers a PHP function for use as an SQL collating function</li><li>{@link SQLite3::createFunction} — Registers a PHP function for use as an SQL scalar function</li><li>{@link SQLite3::enableExceptions} — Enable throwing exceptions</li><li>{@link SQLite3::escapeString} — Returns a string that has been properly escaped</li><li>{@link SQLite3::exec} — Executes a result-less query against a given database</li><li>{@link SQLite3::lastErrorCode} — Returns the numeric result code of the most recent failed SQLite request</li><li>{@link SQLite3::lastErrorMsg} — Returns English text describing the most recent failed SQLite request</li><li>{@link SQLite3::lastInsertRowID} — Returns the row ID of the most recent INSERT into the database</li><li>{@link SQLite3::loadExtension} — Attempts to load an SQLite extension library</li><li>{@link SQLite3::open} — Opens an SQLite database</li><li>{@link SQLite3::openBlob} — Opens a stream resource to read a BLOB</li><li>{@link SQLite3::prepare} — Prepares an SQL statement for execution</li><li>{@link SQLite3::query} — Executes an SQL query</li><li>{@link SQLite3::querySingle} — Executes a query and returns a single result</li><li>{@link SQLite3::version} — Returns the SQLite3 library version as a string constant and as a number</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.sqlite3.php">SQLite3</a></div></div>
*/
class SQLite3  {

	/**
	 * Opens an SQLite database
	 * @link http://php.net/manual/en/sqlite3.open.php
	 * @param string $filename <p>
	 * Path to the SQLite database, or :memory: to use in-memory database.
	 * </p>
	 * @param int $flags [optional] <p>
	 * Optional flags used to determine how to open the SQLite database. By
	 * default, open uses SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE.
	 * <p>
	 * SQLITE3_OPEN_READONLY: Open the database for
	 * reading only.
	 * </p>
	 * @param string $encryption_key [optional] <p>
	 * An optional encryption key used when encrypting and decrypting an
	 * SQLite database.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
	public function open ($filename, $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, $encryption_key = null) {}

	/**
	 * Closes the database connection
	 * @link http://php.net/manual/en/sqlite3.close.php
	 * @return bool <b>TRUE</b> on success, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function close () {}

	/**
	 * Executes a result-less query against a given database
	 * @link http://php.net/manual/en/sqlite3.exec.php
	 * @param string $query <p>
	 * The SQL query to execute (typically an INSERT, UPDATE, or DELETE
	 * query).
	 * </p>
	 * @return bool <b>TRUE</b> if the query succeeded, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
/**
*<div id="function.exec" class="refentry">  <div class="refnamediv">   <h1 class="refname">exec</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">exec</span> &mdash; <span class="dc-title">执行一个外部程序</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.exec-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>exec</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$command</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$output</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$return_var</code></span>   ]] )</div>    <p class="para rdfs-comment">    <span class="function"><strong>exec()</strong></span> 执行    <code class="parameter">command</code> 参数所指定的命令。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.exec-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">command</code></dt>       <dd>        <p class="para">        要执行的命令。       </p>      </dd>                 <dt> <code class="parameter">output</code></dt>       <dd>        <p class="para">         如果提供了 <code class="parameter">output</code> 参数，         那么会用命令执行的输出填充此数组，         每行输出填充数组中的一个元素。         数组中的数据不包含行尾的空白字符，例如 <em>\n</em> 字符。         请注意，如果数组中已经包含了部分元素，<span class="function"><strong>exec()</strong></span>         函数会在数组末尾追加内容。如果你不想在数组末尾进行追加，         请在传入 <span class="function"><strong>exec()</strong></span> 函数之前         对数组使用 <span class="function">{@link unset()}</span> 函数进行重置。       </p>      </dd>                 <dt> <code class="parameter">return_var</code></dt>       <dd>        <p class="para">         如果同时提供          <code class="parameter">output</code>  和          <code class="parameter">return_var</code> 参数，         命令执行后的返回状态会被写入到此变量。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.exec-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     命令执行结果的最后一行内容。     如果你需要获取未经处理的全部输出数据，     请使用 <span class="function">{@link passthru()}</span> 函数。   </p>   <p class="para">     如果想要获取命令的输出内容，     请确保使用 <code class="parameter">output</code> 参数。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.exec-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4355">     <p><strong>Example #1 <span class="function"><strong>exec()</strong></span> 例程</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;输出运行中的&nbsp;php/httpd&nbsp;进程的创建者用户名<br />//&nbsp;（在可以执行&nbsp;"whoami"&nbsp;命令的系统上）<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'whoami'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.exec-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong><p class="para">当用户提供的数据传入此函数，使用 <span class="function">{@link escapeshellarg()}</span> 或 <span class="function">{@link escapeshellcmd()}</span> 来确保用户欺骗系统从而执行任意命令。</p></div>   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">如何程序使用此函数启动，为了能保持在后台运行，此程序必须将输出重定向到文件或其它输出流。否则会导致 PHP 挂起，直至程序执行结束。</p></p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">On Windows <span class="function"><strong>exec()</strong></span> will first start cmd.exe to launch the command. If you want to start an external program without starting cmd.exe use <span class="function">{@link proc_open()}</span> with the <code class="parameter">bypass_shell</code> option set.</p></p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara"><a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 启用时，可仅可用 <a href="http://php.net/manual/zh/ini.sect.safe-mode.php#ini.safe-mode-exec-dir" class="link">safe_mode_exec_dir</a> 执行文件。实际上，现在不允许在到可执行的路径中存在 <em>..</em> 组件。</span></p></blockquote>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara"><a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 启用时，命令字符串会被 <span class="function">{@link escapeshellcmd()}</span> 转换。因此，<em>echo y | echo x</em> 会变成 <em>echo y \| echo x</em>。</p></div>  </div>    <div class="refsect1 seealso" id="refsect1-function.exec-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link system()} - 执行外部程序，并且显示输出</span></li>     <li class="member"><span class="function">{@link passthru()} - 执行外部程序并且显示原始输出</span></li>     <li class="member"><span class="function">{@link escapeshellcmd()} - shell 元字符转义</span></li>     <li class="member"><span class="function">{@link pcntl_exec()} - 在当前进程空间执行指定程序</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.operators.execution.php" class="link">执行运算符</a></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.exec.php">程序执行函数</a></div></div>
*/
	public function exec ($query) {}

	/**
	 * Returns the SQLite3 library version as a string constant and as a number
	 * @link http://php.net/manual/en/sqlite3.version.php
	 * @return array an associative array with the keys "versionString" and
	 * "versionNumber".
	 * @since 5.3.0
	 */
	public static function version () {}

	/**
	 * Returns the row ID of the most recent INSERT into the database
	 * @link http://php.net/manual/en/sqlite3.lastinsertrowid.php
	 * @return int the row ID of the most recent INSERT into the database
	 * @since 5.3.0
	 */
	public function lastInsertRowID () {}

	/**
	 * Returns the numeric result code of the most recent failed SQLite request
	 * @link http://php.net/manual/en/sqlite3.lasterrorcode.php
	 * @return int an integer value representing the numeric result code of the most
	 * recent failed SQLite request.
	 * @since 5.3.0
	 */
	public function lastErrorCode () {}

	/**
	 * Returns English text describing the most recent failed SQLite request
	 * @link http://php.net/manual/en/sqlite3.lasterrormsg.php
	 * @return string an English string describing the most recent failed SQLite request.
	 * @since 5.3.0
	 */
	public function lastErrorMsg () {}

	/**
	 * Sets the busy connection handler
	 * @link http://php.net/manual/en/sqlite3.busytimeout.php
	 * @param int $msecs <p>
	 * The milliseconds to sleep. Setting this value to a value less than
	 * or equal to zero, will turn off an already set timeout handler.
	 * </p>
	 * @return bool <b>TRUE</b> on success, <b>FALSE</b> on failure.
	 * @since 5.3.3
	 */
	public function busyTimeout ($msecs) {}

	/**
	 * Attempts to load an SQLite extension library
	 * @link http://php.net/manual/en/sqlite3.loadextension.php
	 * @param string $shared_library <p>
	 * The name of the library to load. The library must be located in the
	 * directory specified in the configure option sqlite3.extension_dir.
	 * </p>
	 * @return bool <b>TRUE</b> if the extension is successfully loaded, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function loadExtension ($shared_library) {}

	/**
	 * Returns the number of database rows that were changed (or inserted or
	 * deleted) by the most recent SQL statement
	 * @since 5.3.0
	 * @link http://php.net/manual/en/sqlite3.changes.php
	 * @return int an integer value corresponding to the number of
	 * database rows changed (or inserted or deleted) by the most recent SQL
	 * statement.
	 */
	public function changes () {}

	/**
	 * Returns a string that has been properly escaped
	 * @link http://php.net/manual/en/sqlite3.escapestring.php
	 * @param string $value <p>
	 * The string to be escaped.
	 * </p>
	 * @return string a properly escaped string that may be used safely in an SQL
	 * statement.
	 * @since 5.3.0
	 */
	public static function escapeString ($value) {}

	/**
	 * Prepares an SQL statement for execution
	 * @link http://php.net/manual/en/sqlite3.prepare.php
	 * @param string $query <p>
	 * The SQL query to prepare.
	 * </p>
	 * @return SQLite3Stmt an <b>SQLite3Stmt</b> object on success or <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function prepare ($query) {}

	/**
	 * Executes an SQL query
	 * @link http://php.net/manual/en/sqlite3.query.php
	 * @param string $query <p>
	 * The SQL query to execute.
	 * </p>
	 * @return SQLite3Result an <b>SQLite3Result</b> object if the query returns results. Otherwise,
	 * returns <b>TRUE</b> if the query succeeded, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function query ($query) {}

	/**
	 * Executes a query and returns a single result
	 * @link http://php.net/manual/en/sqlite3.querysingle.php
	 * @param string $query <p>
	 * The SQL query to execute.
	 * </p>
	 * @param bool $entire_row [optional] <p>
	 * By default, <b>querySingle</b> returns the value of the
	 * first column returned by the query. If
	 * <i>entire_row</i> is <b>TRUE</b>, then it returns an array
	 * of the entire first row.
	 * </p>
	 * @return mixed the value of the first column of results or an array of the entire
	 * first row (if <i>entire_row</i> is <b>TRUE</b>).
	 * </p>
	 * <p>
	 * If the query is valid but no results are returned, then <b>NULL</b> will be
	 * returned if <i>entire_row</i> is <b>FALSE</b>, otherwise an
	 * empty array is returned.
	 * </p>
	 * <p>
	 * Invalid or failing queries will return <b>FALSE</b>.
	 * @since 5.3.0
	 */
	public function querySingle ($query, $entire_row = false) {}

	/**
	 * Registers a PHP function for use as an SQL scalar function
	 * @link http://php.net/manual/en/sqlite3.createfunction.php
	 * @param string $name <p>
	 * Name of the SQL function to be created or redefined.
	 * </p>
	 * @param mixed $callback <p>
	 * The name of a PHP function or user-defined function to apply as a
	 * callback, defining the behavior of the SQL function.
	 * </p>
	 * @param int $argument_count [optional] <p>
	 * The number of arguments that the SQL function takes. If
	 * this parameter is negative, then the SQL function may take
	 * any number of arguments.
	 * </p>
	 * @param int $flags [optional]
	 * <p>A bitwise conjunction of flags.
	 * Currently, only <b>SQLITE3_DETERMINISTIC</b> is supported, which specifies that the function always returns
	 * the same result given the same inputs within a single SQL statement.</p>
	 * @return bool <b>TRUE</b> upon successful creation of the function, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function createFunction ($name, $callback, $argument_count = -1, int $flags = 0) {}

	/**
	 * Registers a PHP function for use as an SQL aggregate function
	 * @link http://php.net/manual/en/sqlite3.createaggregate.php
	 * @param string $name <p>
	 * Name of the SQL aggregate to be created or redefined.
	 * </p>
	 * @param mixed $step_callback <p>
	 * The name of a PHP function or user-defined function to apply as a
	 * callback for every item in the aggregate.
	 * </p>
	 * @param mixed $final_callback <p>
	 * The name of a PHP function or user-defined function to apply as a
	 * callback at the end of the aggregate data.
	 * </p>
	 * @param int $argument_count [optional] <p>
	 * The number of arguments that the SQL aggregate takes. If
	 * this parameter is negative, then the SQL aggregate may take
	 * any number of arguments.
	 * </p>
	 * @return bool <b>TRUE</b> upon successful creation of the aggregate, <b>FALSE</b> on
	 * failure.
	 * @since 5.3.0
	 */
	public function createAggregate ($name, $step_callback, $final_callback, $argument_count = -1) {}

	/**
	 * Registers a PHP function for use as an SQL collating function
	 * @link http://php.net/manual/en/sqlite3.createcollation.php
	 * @param string $name <p>
	 * Name of the SQL collating function to be created or redefined
	 * </p>
	 * @param callable $callback <p>
	 * The name of a PHP function or user-defined function to apply as a
	 * callback, defining the behavior of the collation. It should accept two
	 * strings and return as <b>strcmp</b> does, i.e. it should
	 * return -1, 1, or 0 if the first string sorts before, sorts after, or is
	 * equal to the second.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.3.11
	 */
	public function createCollation ($name, callable $callback) {}

	/**
	 * Opens a stream resource to read a BLOB
	 * @link http://php.net/manual/en/sqlite3.openblob.php
	 * @param $table <p>The table name.</p>
	 * @param $column <p>The column name.</p>
	 * @param $rowid <p>The row ID.</p>
	 * @param $dbname [optional] <p>The symbolic name of the DB</p>
	 * @param int $flags [optional]
	 * <p>Either <b>SQLITE3_OPEN_READONLY</b> or <b>SQLITE3_OPEN_READWRITE</b> to open the stream for reading only, or for reading and writing, respectively.</p?
	 * @return resource|bool Returns a stream resource, or FALSE on failure.
	 */
	public function openBlob ($table, $column, $rowid, $dbname, int $flags = SQLITE3_OPEN_READONLY) {}

	/**
	 * @param $enableExceptions
	 */
	public function enableExceptions ($enableExceptions) {}

	/**
	 * Instantiates an SQLite3 object and opens an SQLite 3 database
	 * @link http://php.net/manual/en/sqlite3.construct.php
	 * @param string $filename <p>
	 * Path to the SQLite database, or :memory: to use in-memory database.
	 * </p>
	 * @param int $flags [optional] <p>
	 * Optional flags used to determine how to open the SQLite database. By
	 * default, open uses SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE.
	 * <p>
	 * SQLITE3_OPEN_READONLY: Open the database for
	 * reading only.
	 * </p>
	 * @param string $encryption_key [optional] <p>
	 * An optional encryption key used when encrypting and decrypting an
	 * SQLite database.
	 * </p>
	 * @since 5.3.0
	 */
	public function __construct ($filename, $flags = null, $encryption_key = null) {}

}

/**
*<div id="class.sqlite3stmt" class="reference">  <h1 class="title">SQLite3Stmt 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p>     <div class="section" id="sqlite3stmt.intro">    <h2 class="title">简介</h2>    <p class="para">     处理 SQLite 3 扩展语句模板的类。    </p>   </div>     <div class="section" id="sqlite3stmt.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SQLite3Stmt</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.bindparam.php" class="methodname">bindParam</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$sql_param</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter reference">&$param</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$type</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.bindvalue.php" class="methodname">bindValue</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$sql_param</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$type</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.clear.php" class="methodname">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.close.php" class="methodname">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SQLite3Result</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.execute.php" class="methodname">execute</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.getsql.php" class="methodname">getSQL</a></span>     ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$expanded</code><span class="initializer"> = <strong><code>FALSE</code></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.paramcount.php" class="methodname">paramCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.readonly.php" class="methodname">readOnly</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3stmt.reset.php" class="methodname">reset</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>   </div>                                                                    <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SQLite3Stmt::bindParam} — Binds a parameter to a statement variable</li><li>{@link SQLite3Stmt::bindValue} — Binds the value of a parameter to a statement variable</li><li>{@link SQLite3Stmt::clear} — Clears all current bound parameters</li><li>{@link SQLite3Stmt::close} — Closes the prepared statement</li><li>{@link SQLite3Stmt::execute} — Executes a prepared statement and returns a result set object</li><li>{@link SQLite3Stmt::getSQL} — Get the SQL of the statement</li><li>{@link SQLite3Stmt::paramCount} — Returns the number of parameters within the prepared statement</li><li>{@link SQLite3Stmt::readOnly} — Returns whether a statement is definitely read only</li><li>{@link SQLite3Stmt::reset} — Resets the prepared statement</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.sqlite3.php">SQLite3</a></div></div>
*/
class SQLite3Stmt  {

	/**
	 * Returns the number of parameters within the prepared statement
	 * @link http://php.net/manual/en/sqlite3stmt.paramcount.php
	 * @return int the number of parameters within the prepared statement.
	 * @since 5.3.0
	 */
	public function paramCount () {}

	/**
	 * Closes the prepared statement
	 * @link http://php.net/manual/en/sqlite3stmt.close.php
	 * @return bool <b>TRUE</b>
	 * @since 5.3.0
	 */
	public function close () {}

	/**
	 * Resets the prepared statement
	 * @link http://php.net/manual/en/sqlite3stmt.reset.php
	 * @return bool <b>TRUE</b> if the statement is successfully reset, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>reset()</strong></span> 将 <code class="parameter">array</code>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset () {}

	/**
	 * Clears all current bound parameters
	 * @link http://php.net/manual/en/sqlite3stmt.clear.php
	 * @return bool <b>TRUE</b> on successful clearing of bound parameters, <b>FALSE</b> on
	 * failure.
	 * @since 5.3.0
	 */
	public function clear () {}

	/**
	 * Executes a prepared statement and returns a result set object
	 * @link http://php.net/manual/en/sqlite3stmt.execute.php
	 * @return SQLite3Result an <b>SQLite3Result</b> object on successful execution of the prepared
	 * statement, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function execute () {}

	/**
	 * Binds a parameter to a statement variable
	 * @link http://php.net/manual/en/sqlite3stmt.bindparam.php
	 * @param string $sql_param <p>
	 * An string identifying the statement variable to which the
	 * parameter should be bound.
	 * </p>
	 * @param mixed $param <p>
	 * The parameter to bind to a statement variable.
	 * </p>
	 * @param int $type [optional] <p>
	 * The data type of the parameter to bind.
	 * <p>
	 * SQLITE3_INTEGER: The value is a signed integer,
	 * stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of
	 * the value.
	 * </p>
	 * @return bool <b>TRUE</b> if the parameter is bound to the statement variable, <b>FALSE</b>
	 * on failure.
	 * @since 5.3.0
	 */
	public function bindParam ($sql_param, &$param, $type = null) {}

	/**
	 * Binds the value of a parameter to a statement variable
	 * @link http://php.net/manual/en/sqlite3stmt.bindvalue.php
	 * @param string $sql_param <p>
	 * An string identifying the statement variable to which the
	 * value should be bound.
	 * </p>
	 * @param mixed $value <p>
	 * The value to bind to a statement variable.
	 * </p>
	 * @param int $type [optional] <p>
	 * The data type of the value to bind.
	 * <p>
	 * SQLITE3_INTEGER: The value is a signed integer,
	 * stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of
	 * the value.
	 * </p>
	 * @return bool <b>TRUE</b> if the value is bound to the statement variable, <b>FALSE</b>
	 * on failure.
	 * @since 5.3.0
	 */
	public function bindValue ($sql_param, $value, $type = null) {}

	public function readOnly () {}

	/**
	 * @param $sqlite3
	 */
	private function __construct ($sqlite3) {}

}

/**
*<div id="class.sqlite3result" class="reference">  <h1 class="title">SQLite3Result 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p>     <div class="section" id="sqlite3result.intro">    <h2 class="title">简介</h2>    <p class="para">     处理 SQLite 3 扩展返回结果集的类。    </p>   </div>     <div class="section" id="sqlite3result.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SQLite3Result</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3result.columnname.php" class="methodname">columnName</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$column_number</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3result.columntype.php" class="methodname">columnType</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$column_number</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3result.fetcharray.php" class="methodname">fetchArray</a></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$mode</code><span class="initializer"> = SQLITE3_BOTH</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3result.finalize.php" class="methodname">finalize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3result.numcolumns.php" class="methodname">numColumns</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sqlite3result.reset.php" class="methodname">reset</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>   </div>                                               <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SQLite3Result::columnName} — Returns the name of the nth column</li><li>{@link SQLite3Result::columnType} — Returns the type of the nth column</li><li>{@link SQLite3Result::fetchArray} — Fetches a result row as an associative or numerically indexed array or both</li><li>{@link SQLite3Result::finalize} — Closes the result set</li><li>{@link SQLite3Result::numColumns} — Returns the number of columns in the result set</li><li>{@link SQLite3Result::reset} — Resets the result set back to the first row</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.sqlite3.php">SQLite3</a></div></div>
*/
class SQLite3Result  {

	/**
	 * Returns the number of columns in the result set
	 * @link http://php.net/manual/en/sqlite3result.numcolumns.php
	 * @return int the number of columns in the result set.
	 * @since 5.3.0
	 */
	public function numColumns () {}

	/**
	 * Returns the name of the nth column
	 * @link http://php.net/manual/en/sqlite3result.columnname.php
	 * @param int $column_number <p>
	 * The numeric zero-based index of the column.
	 * </p>
	 * @return string the string name of the column identified by
	 * <i>column_number</i>.
	 * @since 5.3.0
	 */
	public function columnName ($column_number) {}

	/**
	 * Returns the type of the nth column
	 * @link http://php.net/manual/en/sqlite3result.columntype.php
	 * @param int $column_number <p>
	 * The numeric zero-based index of the column.
	 * </p>
	 * @return int the data type index of the column identified by
	 * <i>column_number</i> (one of
	 * <b>SQLITE3_INTEGER</b>, <b>SQLITE3_FLOAT</b>,
	 * <b>SQLITE3_TEXT</b>, <b>SQLITE3_BLOB</b>, or
	 * <b>SQLITE3_NULL</b>).
	 * @since 5.3.0
	 */
	public function columnType ($column_number) {}

	/**
	 * Fetches a result row as an associative or numerically indexed array or both
	 * @link http://php.net/manual/en/sqlite3result.fetcharray.php
	 * @param int $mode [optional] <p>
	 * Controls how the next row will be returned to the caller. This value
	 * must be one of either SQLITE3_ASSOC,
	 * SQLITE3_NUM, or SQLITE3_BOTH.
	 * <p>
	 * SQLITE3_ASSOC: returns an array indexed by column
	 * name as returned in the corresponding result set
	 * </p>
	 * @return array a result row as an associatively or numerically indexed array or
	 * both. Alternately will return <b>FALSE</b> if there are no more rows.
	 * @since 5.3.0
	 */
	public function fetchArray ($mode = SQLITE3_BOTH) {}

	/**
	 * Resets the result set back to the first row
	 * @link http://php.net/manual/en/sqlite3result.reset.php
	 * @return bool <b>TRUE</b> if the result set is successfully reset
	 * back to the first row, <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>reset()</strong></span> 将 <code class="parameter">array</code>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset () {}

	/**
	 * Closes the result set
	 * @link http://php.net/manual/en/sqlite3result.finalize.php
	 * @return bool <b>TRUE</b>.
	 * @since 5.3.0
	 */
	public function finalize () {}

	private function __construct () {}

}

/**
*       指定 <span class="methodname">{@link Sqlite3Result::fetchArray()}</span>       方法返回按列名称索引的数组，其中列名即相应结果集返回的列名。      
*/
define ('SQLITE3_ASSOC', 1);

/**
*       指定 <span class="methodname">{@link Sqlite3Result::fetchArray()}</span>       方法返回按列序号索引的数组，其中列号即相应结果集返回的列号，从第 0 列开始计数。      
*/
define ('SQLITE3_NUM', 2);

/**
*       指定 <span class="methodname">{@link Sqlite3Result::fetchArray()}</span>       方法返回同时按列名称与列序号索引的数组，其中列名即相应结果集返回的列名，列号即相应结果集返回的列号，从第 0 列开始计数。      
*/
define ('SQLITE3_BOTH', 3);

/**
*       表示 SQLite3 INTEGER (整型) 存储类。      
*/
define ('SQLITE3_INTEGER', 1);

/**
*       表示 SQLite3 REAL (FLOAT) (实型) 存储类。      
*/
define ('SQLITE3_FLOAT', 2);

/**
*       表示 SQLite3 TEXT (文本) 存储类。      
*/
define ('SQLITE3_TEXT', 3);

/**
*       表示 SQLite3 BLOB (二进制对象) 存储类。      
*/
define ('SQLITE3_BLOB', 4);

/**
*       表示 SQLite3 NULL 存储类。      
*/
define ('SQLITE3_NULL', 5);

/**
*       指定 SQLite3 数据库以只读模式打开。      
*/
define ('SQLITE3_OPEN_READONLY', 1);

/**
*       指定 SQLite3 数据库以读写模式打开。      
*/
define ('SQLITE3_OPEN_READWRITE', 2);

/**
*       指定 SQLite3 数据库若不存在，则创建并打开。      
*/
define ('SQLITE3_OPEN_CREATE', 4);

// End of sqlite3 v.0.7-dev
?>
