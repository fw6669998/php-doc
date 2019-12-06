<?php
/**
*<div id="class.mysqli-sql-exception" class="reference">   <h1 class="title">mysqli异常类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>    <div class="section" id="mysqli-sql-exception.intro">    <h2 class="title">简介</h2>    <p class="para">     mysqli异常类    </p>   </div>    <div class="section" id="mysqli-sql-exception.synopsis">    <h2 class="title">类摘要</h2>    <div class="classsynopsis">     <div class="ooclass"></div>     <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">mysqli_sql_exception</strong>      </span>      <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.runtimeexception.php" class="classname">RuntimeException</a>      </span>      {</div>     <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-sql-exception.php#mysqli-sql-exception.props.sqlstate">$<var class="varname">sqlstate</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>      }</div>   </div>    <div class="section" id="mysqli-sql-exception.props">    <h2 class="title">属性</h2>    <dl>            <dt id="mysqli-sql-exception.props.sqlstate"><var class="varname"><var class="varname">sqlstate</var></var></dt>       <dd>        <p class="para">        出现错误的sql状态       </p>      </dd>          </dl>    </div>   </div>  <div class="up"><a href="http://php.net/manual/zh/book.mysqli.php">Mysqli</a></div></div>
*/
class mysqli_sql_exception extends RuntimeException  {
	/**
	 * The sql state with the error.
	 */
	protected $sqlstate;
}

/**
*<div id="class.mysqli-driver" class="reference">  <h1 class="title">MySQLi_Driver类</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="mysqli-driver.intro">    <h2 class="title">简介</h2>    <p class="para">     MySQLi 驱动.    </p>   </div>      <div class="section" id="mysqli-driver.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">MySQLi_Driver</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="modifier">readonly</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-driver.php#mysqli-driver.props.client-info">$<var class="varname">client_info</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="modifier">readonly</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-driver.php#mysqli-driver.props.client-version">$<var class="varname">client_version</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="modifier">readonly</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-driver.php#mysqli-driver.props.driver-version">$<var class="varname">driver_version</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="modifier">readonly</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-driver.php#mysqli-driver.props.embedded">$<var class="varname">embedded</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">bool</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-driver.php#mysqli-driver.props.reconnect">$<var class="varname">reconnect</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-driver.php#mysqli-driver.props.report-mode">$<var class="varname">report_mode</var></a></var>     ;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link mysqli_driver::embedded_server_end}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link mysqli_driver::embedded_server_start}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$start</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$arguments</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$groups</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_report</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>    )</div>     }</div>      </div>    <div class="section" id="mysqli-driver.props">    <h2 class="title">属性</h2>    <dl>            <dt id="mysqli-driver.props.client-info"><var class="varname"><var class="varname">client_info</var></var></dt>       <dd>        <p class="para">客户端API头版本（比如：(string)&quot;5.1.49&quot;）</p>      </dd>                 <dt id="mysqli-driver.props.client-version"><var class="varname"><var class="varname">client_version</var></var></dt>       <dd>        <p class="para">客户端版本（比如：(int)50149）</p>      </dd>                 <dt id="mysqli-driver.props.driver-version"><var class="varname"><var class="varname">driver_version</var></var></dt>       <dd>        <p class="para">Mysqli驱动版本（比如：(int)101009）</p>      </dd>                 <dt id="mysqli-driver.props.embedded"><var class="varname"><var class="varname">embedded</var></var></dt>       <dd>        <p class="para">是否开启了MySQLi嵌入式支持。</p>      </dd>                 <dt id="mysqli-driver.props.reconnect"><var class="varname"><var class="varname">reconnect</var></var></dt>       <dd>        <p class="para">允许或阻止重连接（查看INI指令中的mysqli.reconnect）</p>      </dd>                 <dt id="mysqli-driver.props.report-mode"><var class="varname"><var class="varname">report_mode</var></var></dt>       <dd>        <p class="para">        设置为<strong><span>MYSQLI_REPORT_OFF</span></strong>,        <strong><span>MYSQLI_REPORT_ALL</span></strong>或者        <strong><span>MYSQLI_REPORT_STRICT</span></strong> （为错误抛出异常，译注：需要和MYSQLI_REPORT_ERROR联合使用）,        <strong><span>MYSQLI_REPORT_ERROR</span></strong> (报告MYSQL错误)和        <strong><span>MYSQLI_REPORT_INDEX</span></strong> (报告索引相关的错误)的任意组合。        参阅<span class="function">{@link mysqli_report()}</span>.       </p>      </dd>          </dl>    </div>      </div>                        <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link mysqli_driver::embedded_server_end} — Stop embedded server</li><li>{@link mysqli_driver::embedded_server_start} — Initialize and start embedded server</li><li>{@link mysqli_driver::$report_mode} — Enables or disables internal report functions</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.mysqli.php">Mysqli</a></div></div>
*/
final class mysqli_driver  {
	/**
	 * @var string
	 */
	public $client_info;
	/**
	 * @var string
	 */
	public $client_version;
	/**
	 * @var string
	 */
	public $driver_version;
	/**
	 * @var string
	 */
	public $embedded;
	/**
	 * @var bool
	 */
	public $reconnect;
	/**
	 * @var int
	 */
	public $report_mode;

}

/**
*<div id="class.mysqli" class="reference">  <h1 class="title">MySQLi类</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="mysqli.intro">    <h2 class="title">简介</h2>    <p class="para">    代表PHP和Mysql数据库之间的一个连接。    </p>   </div>      <div class="section" id="mysqli.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">mysqli</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.affected-rows.php">$<var class="varname">affected_rows</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.connect-errno.php">$<var class="varname">connect_errno</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.connect-error.php">$<var class="varname">connect_error</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname">$<var class="varname">errno</var></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">array</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.error-list.php">$<var class="varname">error_list</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.error.php">$<var class="varname">error</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.field-count.php">$<var class="varname">field_count</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.get-client-info.php">$<var class="varname">client_info</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.get-client-version.php">$<var class="varname">client_version</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.get-host-info.php">$<var class="varname">host_info</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.get-proto-info.php">$<var class="varname">protocol_version</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.get-server-info.php">$<var class="varname">server_info</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.get-server-version.php">$<var class="varname">server_version</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.info.php">$<var class="varname">info</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.insert-id.php">$<var class="varname">insert_id</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.sqlstate.php">$<var class="varname">sqlstate</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.thread-id.php">$<var class="varname">thread_id</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli.warning-count.php">$<var class="varname">warning_count</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_affected_rows</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.autocommit.php" class="methodname" style="color:#CC7832">autocommit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.begin-transaction.php" class="methodname" style="color:#CC7832">begin_transaction</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.change-user.php" class="methodname" style="color:#CC7832">change_user</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$user</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$password</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$database</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.character-set-name.php" class="methodname" style="color:#CC7832">character_set_name</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.close.php" class="methodname" style="color:#CC7832">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.commit.php" class="methodname" style="color:#CC7832">commit</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_connect_errno</strong></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_connect_error</strong></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link connect}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$host</span><span class="initializer"> = ini_get(&quot;mysqli.default_host&quot;)</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$username</span><span class="initializer"> = ini_get(&quot;mysqli.default_user&quot;)</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$passwd</span><span class="initializer"> = ini_get(&quot;mysqli.default_pw&quot;)</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dbname</span><span class="initializer"> = &quot;&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$port</span><span class="initializer"> = ini_get(&quot;mysqli.default_port&quot;)</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$socket</span><span class="initializer"> = ini_get(&quot;mysqli.default_socket&quot;)</span></span>   ]]]]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.debug.php" class="methodname" style="color:#CC7832">debug</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$message</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.dump-debug-info.php" class="methodname" style="color:#CC7832">dump_debug_info</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_errno</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_error_list</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_error</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_field_count</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.get-charset.php" class="methodname" style="color:#CC7832">get_charset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.get-client-info.php" class="methodname" style="color:#CC7832">get_client_info</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_client_version</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.get-connection-stats.php" class="methodname" style="color:#CC7832">get_connection_stats</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_host_info</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_proto_info</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_server_info</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_server_version</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_warning</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.get-warnings.php" class="methodname" style="color:#CC7832">get_warnings</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_info</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.init.php" class="methodname" style="color:#CC7832">init</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_insert_id</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.kill.php" class="methodname" style="color:#CC7832">kill</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$processid</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.more-results.php" class="methodname" style="color:#CC7832">more_results</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.multi-query.php" class="methodname" style="color:#CC7832">multi_query</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.next-result.php" class="methodname" style="color:#CC7832">next_result</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.options.php" class="methodname" style="color:#CC7832">options</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$option</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.ping.php" class="methodname" style="color:#CC7832">ping</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.poll.php" class="methodname" style="color:#CC7832">poll</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$read</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$error</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$reject</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$sec</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$usec</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_stmt</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.prepare.php" class="methodname" style="color:#CC7832">prepare</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.query.php" class="methodname" style="color:#CC7832">query</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$resultmode</span><span class="initializer"> = MYSQLI_STORE_RESULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.real-connect.php" class="methodname" style="color:#CC7832">real_connect</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$host</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$username</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$passwd</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dbname</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$port</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$socket</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>   ]]]]]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link escape_string}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$escapestr</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">     <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.real-query.php" class="methodname" style="color:#CC7832">real_query</a></span>      ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>     )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mysqli_result</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.reap-async-query.php" class="methodname" style="color:#CC7832">reap_async_query</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.refresh.php" class="methodname" style="color:#CC7832">refresh</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$options</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.release-savepoint.php" class="methodname" style="color:#CC7832">release_savepoint</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>     )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.rollback.php" class="methodname" style="color:#CC7832">rollback</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.rpl-query-type.php" class="methodname" style="color:#CC7832">rpl_query_type</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.savepoint.php" class="methodname" style="color:#CC7832">savepoint</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>     )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.select-db.php" class="methodname" style="color:#CC7832">select_db</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dbname</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.send-query.php" class="methodname" style="color:#CC7832">send_query</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.set-charset.php" class="methodname" style="color:#CC7832">set_charset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$charset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_set_local_infile_default</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.set-local-infile-handler.php" class="methodname" style="color:#CC7832">set_local_infile_handler</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#2EACF9">$read_func</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_sqlstate</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.ssl-set.php" class="methodname" style="color:#CC7832">ssl_set</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$cert</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$ca</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$capath</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$cipher</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.stat.php" class="methodname" style="color:#CC7832">stat</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_stmt</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.stmt-init.php" class="methodname" style="color:#CC7832">stmt_init</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_result</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.store-result.php" class="methodname" style="color:#CC7832">store_result</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$option</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_thread_id</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_thread_safe</strong></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_result</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli.use-result.php" class="methodname" style="color:#CC7832">use_result</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_warning_count</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    )</div>     }</div>      </div>    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link mysqli::$affected_rows} — Gets the number of affected rows in a previous MySQL operation</li><li>{@link mysqli::autocommit} — 打开或关闭本次数据库连接的自动命令提交事务模式</li><li>{@link mysqli::begin_transaction} — Starts a transaction</li><li>{@link mysqli::change_user} — Changes the user of the specified database connection</li><li>{@link mysqli::character_set_name} — 返回当前数据库连接的默认字符编码</li><li>{@link mysqli::close} — 关闭先前打开的数据库连接</li><li>{@link mysqli::commit} — 提交一个事务</li><li>{@link mysqli::$connect_errno} — Returns the error code from last connect call</li><li>{@link mysqli::$connect_error} — Returns a string description of the last connect error</li><li>{@link mysqli::__construct} — Open a new connection to the MySQL server</li><li>{@link mysqli::debug} — Performs debugging operations</li><li>{@link mysqli::dump_debug_info} — 将调试信息输出到日志</li><li>{@link mysqli::errno} — 返回最近函数调用的错误代码</li><li>{@link mysqli::$error_list} — Returns a list of errors from the last command executed</li><li>{@link mysqli::$error} — Returns a string description of the last error</li><li>{@link mysqli::$field_count} — Returns the number of columns for the most recent query</li><li>{@link mysqli::get_charset} — Returns a character set object</li><li>{@link mysqli::$client_info} — 获取 MySQL 客户端信息</li><li><a href="http://php.net/manual/zh/mysqli.get-client-version.php">mysqli_get_client_version</a> — 作为一个整数返回MySQL客户端的版本</li><li>{@link mysqli::get_connection_stats} — 返回客户端连接的统计数据</li><li>{@link mysqli::$host_info} — 返回一个表述使用的连接类型的字符串</li><li>{@link mysqli::$protocol_version} — 返回MySQL使用的协议版本号</li><li>{@link mysqli::$server_info} — 返回MySQL服务器的版本号</li><li>{@link mysqli::$server_version} — 作为一个整数返回MySQL服务器的版本</li><li>{@link mysqli::get_warnings} — Get result of SHOW WARNINGS</li><li>{@link mysqli::$info} — 返回最近执行的 SQL 语句的信息</li><li>{@link mysqli::init} — 初始化 MySQLi 并返回一个资源类型的值，这个值可以作为 mysqli_real_connect() 函数的传入参数</li><li>{@link mysqli::$insert_id} — 返回最后一条插入语句产生的自增 ID</li><li>{@link mysqli::kill} — 让服务器杀掉一个 MySQL 线程</li><li>{@link mysqli::more_results} — 检查批量查询中是否还有查询结果</li><li>{@link mysqli::multi_query} — 执行查询</li><li>{@link mysqli::next_result} — 为读取 multi_query 执行之后的下一个结果集做准备</li><li>{@link mysqli::options} — 设置选项</li><li>{@link mysqli::ping} — ping 一个连接，或者如果连接处于断开状态，重新连接</li><li>{@link mysqli::poll} — 轮询连接</li><li>{@link mysqli::prepare} — 准备执行一个 SQL 语句</li><li>{@link mysqli::query} — 对数据库执行一次查询</li><li>{@link mysqli::real_connect} — 建立一个 MySQL 服务器连接</li><li>{@link mysqli::real_escape_string} — 根据当前连接的字符集，对于 SQL 语句中的特殊字符进行转义</li><li>{@link mysqli::real_query} — 执行一个mysql查询</li><li>{@link mysqli::reap_async_query} — 获取异步查询的结果</li><li>{@link mysqli::refresh} — 刷新</li><li>{@link mysqli::release_savepoint} — 从当前事务的保存点中移除一个命名保存点</li><li>{@link mysqli::rollback} — 回退当前事务</li><li>{@link mysqli::rpl_query_type} — 返回 RPL 查询类型</li><li>{@link mysqli::savepoint} — 在当前事务中增加一个命名保存点</li><li>{@link mysqli::select_db} — 选择用于数据库查询的默认数据库</li><li>{@link mysqli::send_query} — 发送请求并返回结果</li><li>{@link mysqli::set_charset} — 设置默认字符编码</li><li>{@link mysqli::set_local_infile_default} — 取消用户指定的回调函数</li><li>{@link mysqli::set_local_infile_handler} — 设置 LOAD DATA LOCAL INFILE 命令的回调函数</li><li>{@link mysqli::$sqlstate} — 返回上一次 SQL 操作的 SQLSTATE 错误信息</li><li>{@link mysqli::ssl_set} — 使用 SSL 建立到数据库之间的安全连接</li><li>{@link mysqli::stat} — 获取当前系统状态信息</li><li>{@link mysqli::stmt_init} — 初始化一条语句并返回一个用于mysqli_stmt_prepare(调用)的对象</li><li>{@link mysqli::store_result} — 转移上一次查询返回的结果集</li><li>{@link mysqli::$thread_id} — 返回当前连接的线程 ID</li><li>{@link mysqli::thread_safe} — 返回是否是线程安全的</li><li>{@link mysqli::use_result} — Initiate a result set retrieval</li><li>{@link mysqli::$warning_count} — Returns the number of warnings from the last query for the given link</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.mysqli.php">Mysqli</a></div></div>
*/
class mysqli  {
	/**
	 * @var int
	 */
	public $affected_rows;
	/**
	 * @var string
	 */
	public $client_info;
	/**
	 * @var int
	 */
	public $client_version;
	/**
	 * @var string
	 */
	public $connect_errno;
	/**
	 * @var string
	 */
	public $connect_error;
	/**
	 * @var int
	 */
	public $errno;
	/**
	 * @var string
	 */
	public $error;
	/**
	 * @var int
	 */
	public $field_count;
	/**
	 * @var string
	 */
	public $host_info;
	/**
	 * @var string
	 */
	public $info;
	/**
	 * @var mixed
	 */
	public $insert_id;
	/**
	 * @var string
	 */
	public $server_info;
	/**
	 * @var int
	 */
	public $server_version;
	/**
	 * @var string
	 */
	public $sqlstate;
	/**
	 * @var string
	 */
	public $protocol_version;
	/**
	 * @var int
	 */
	public $thread_id;
	/**
	 * @var int
	 */
	public $warning_count;

    /**
     * @var array A list of errors, each as an associative array containing the errno, error, and sqlstate.
     * @link http://www.php.net/manual/en/mysqli.error-list.php
     */
    public $error_list;


	/**
	 * Open a new connection to the MySQL server
	 * </p>
	 * @param string $host [optional] Can be either a host name or an IP address. Passing the NULL value or the string "localhost" to this parameter, the local host is assumed. When possible, pipes will be used instead of the TCP/IP protocol. Prepending host by p: opens a persistent connection. mysqli_change_user() is automatically called on connections opened from the connection pool. Defaults to ini_get("mysqli.default_host")
	 * @param string $username [optional] The MySQL user name. Defaults to ini_get("mysqli.default_user")
	 * @param string $passwd [optional] If not provided or NULL, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password as provided or not). Defaults to ini_get("mysqli.default_pw")
	 * @param string $dbname [optional] If provided will specify the default database to be used when performing queries. Defaults to ""
	 * @param int $port [optional] Specifies the port number to attempt to connect to the MySQL server. Defaults to ini_get("mysqli.default_port")
	 * @param string $socket [optional] Specifies the socket or named pipe that should be used. Defaults to ini_get("mysqli.default_socket")
	 * @since 5.0
	 */
	public function __construct (
		$host,
		$username,
		$passwd,
		$dbname,
		$port,
		$socket
	) {}

	/**
	 * Turns on or off auto-commiting database modifications
	 * @link http://php.net/manual/en/mysqli.autocommit.php
	 * @param bool $mode <p>
	 * Whether to turn on auto-commit or not.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function autocommit ($mode) {}

/**
*<div id="mysqli.begin-transaction" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli::begin_transaction</h1>   <h1 class="refname">mysqli_begin_transaction</h1>   <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli::begin_transaction</span> -- <span class="refname">mysqli_begin_transaction</span> &mdash; <span class="dc-title">Starts a transaction</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-mysqli.begin-transaction-description">   <h3 class="title">说明</h3>   <p class="para">面向对象风格 (method):</p>    <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli::begin_transaction</strong></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    ]] )</div>    <p class="para rdfs-comment">过程化风格:</p>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_begin_transaction</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>   ]] )</div>    <p class="para rdfs-comment">    Begins a transaction. Requires the InnoDB     engine (it is enabled by default). For additional details about how MySQL transactions    work, see <a href="http://dev.mysql.com/doc/mysql/en/commit.html" class="link external">&raquo;&nbsp;http://dev.mysql.com/doc/mysql/en/commit.html</a>.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-mysqli.begin-transaction-parameters">   <h3 class="title">参数</h3>   <span>    <dl>      <dt> <span class="parameter" style="color:#2EACF9"> link</span></dt> <dd> <p class="para">仅以过程化样式：由<span class="function">{@link mysqli_connect()}</span> 或 <span class="function"><a href="http://php.net/manual/zh/mysqli.init.php" class="function">mysqli_init()</a></span> 返回的链接标识。</p></dd>            <dt> <span class="parameter" style="color:#2EACF9">flags</span></dt>       <dd>        <p class="para">        Valid flags are:       </p>       <ul class="itemizedlist">        <li class="listitem">         <p class="para">          <strong><span>MYSQLI_TRANS_START_READ_ONLY</span></strong>:           Start the transaction as &quot;START TRANSACTION READ ONLY&quot;.          Requires MySQL 5.6 and above.         </p>        </li>        <li class="listitem">         <p class="para">          <strong><span>MYSQLI_TRANS_START_READ_WRITE</span></strong>:           Start the transaction as &quot;START TRANSACTION READ WRITE&quot;.          Requires MySQL 5.6 and above.         </p>        </li>        <li class="listitem">          <p class="para">          <strong><span>MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT</span></strong>:           Start the transaction as &quot;START TRANSACTION WITH CONSISTENT SNAPSHOT&quot;.         </p>        </li>       </ul>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">name</span></dt>       <dd>        <p class="para">        Savepoint name for the transaction.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-mysqli.begin-transaction-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-mysqli.begin-transaction-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-1814">    <p><strong>Example #1 <span class="methodname" style="color:#CC7832"><strong>$mysqli->begin_transaction()</strong></span> example</strong></p>    <div class="example-contents"><p>面向对象风格</p></div>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$mysqli&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"sakila"</span><span style="color: #007700">);<br /><br />if&nbsp;(</span><span style="color: #9876AA">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">connect_errno</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect&nbsp;failed:&nbsp;%s\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">connect_error</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;exit();<br />}<br /><br /></span><span style="color: #9876AA">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">begin_transaction</span><span style="color: #007700">(</span><span style="color: #9876AA">MYSQLI_TRANS_START_READ_ONLY</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT&nbsp;first_name,&nbsp;last_name&nbsp;FROM&nbsp;actor"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">commit</span><span style="color: #007700">();<br /><br /></span><span style="color: #9876AA">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">close</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>    </div>     <div class="example-contents"><p>过程化风格</p></div>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$link&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"sakila"</span><span style="color: #007700">);<br /><br />if&nbsp;(</span><span style="color: #9876AA">mysqli_connect_errno</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect&nbsp;failed:&nbsp;%s\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">mysqli_connect_error</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;exit();<br />}<br /><br /></span><span style="color: #9876AA">mysqli_begin_transaction</span><span style="color: #007700">(</span><span style="color: #9876AA">$link</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">MYSQLI_TRANS_START_READ_ONLY</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">mysqli_query</span><span style="color: #007700">(</span><span style="color: #9876AA">$link</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;first_name,&nbsp;last_name&nbsp;FROM&nbsp;actor&nbsp;LIMIT&nbsp;1"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">mysqli_commit</span><span style="color: #007700">(</span><span style="color: #9876AA">$link</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">mysqli_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$link</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>    </div>    </div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-mysqli.begin-transaction-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli.autocommit.php" class="function" rel="rdfs-seeAlso">mysqli_autocommit()</a> - 打开或关闭本次数据库连接的自动命令提交事务模式</span></li>     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli.commit.php" class="function" rel="rdfs-seeAlso">mysqli_commit()</a> - 提交一个事务</span></li>     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli.rollback.php" class="function" rel="rdfs-seeAlso">mysqli_rollback()</a> - 回退当前事务</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.mysqli.php">MySQLi</a></div></div>
     * @return bool true on success or false on failure.*/
    public function begin_transaction ($flags = 0, $name = null) {}

    /**
	 * Changes the user of the specified database connection
	 * @link http://php.net/manual/en/mysqli.change-user.php
	 * @param string $user <p>
	 * The MySQL user name.
	 * </p>
	 * @param string $password <p>
	 * The MySQL password.
	 * </p>
	 * @param string $database <p>
	 * The database to change to.
	 * </p>
	 * <p>
	 * If desired, the null value may be passed resulting in only changing
	 * the user and not selecting a database. To select a database in this
	 * case use the <b>mysqli_select_db</b> function.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function change_user ($user, $password, $database) {}

	/**
	 * Returns the default character set for the database connection
	 * @link http://php.net/manual/en/mysqli.character-set-name.php
	 * @return string The default character set for the current connection
	 * @since 5.0
	 */
	public function character_set_name () {}

	/**
	 * @deprecated 5.3 This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
	 */
	public function client_encoding () {}

	/**
	 * Closes a previously opened database connection
	 * @link http://php.net/manual/en/mysqli.close.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function close () {}

	/**
	 * Commits the current transaction
	 * @link http://php.net/manual/en/mysqli.commit.php
	 * @param int $flags A bitmask of MYSQLI_TRANS_COR_* constants.
	 * @param string $name If provided then COMMIT $name is executed.
	 * @return bool true on success or false on failure.
	 * @since 5.5 Added flags and name parameters.
	 * @since 5.0
	 */
	public function commit ($flags = null, $name = null) {}

	/**
	 * @param $host [optional]
	 * @param $user [optional]
	 * @param $password [optional]
	 * @param $database [optional]
	 * @param $port [optional]
	 * @param $socket [optional]
	 */
	public function connect ($host, $user, $password, $database, $port, $socket) {}

	/**
	 * Dump debugging information into the log
	 * @link http://php.net/manual/en/mysqli.dump-debug-info.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function dump_debug_info () {}

	/**
	 * Performs debugging operations
	 * @link http://php.net/manual/en/mysqli.debug.php
	 * @param string $message <p>
	 * A string representing the debugging operation to perform
	 * </p>
	 * @return bool true.
	 * @since 5.0
	 */
	public function debug ($message) {}

	/**
	 * Returns a character set object
	 * @link http://php.net/manual/en/mysqli.get-charset.php
	 * @return object The function returns a character set object with the following properties:
	 * <i>charset</i>
	 * <p>Character set name</p>
	 * <i>collation</i>
	 * <p>Collation name</p>
	 * <i>dir</i>
	 * <p>Directory the charset description was fetched from (?) or "" for built-in character sets</p>
	 * <i>min_length</i>
	 * <p>Minimum character length in bytes</p>
	 * <i>max_length</i>
	 * <p>Maximum character length in bytes</p>
	 * <i>number</i>
	 * <p>Internal character set number</p>
	 * <i>state</i>
	 * <p>Character set status (?)</p>
	 * @since 5.1.0
	 */
	public function get_charset () {}

	/**
	 * Returns the MySQL client version as a string
	 * @link http://php.net/manual/en/mysqli.get-client-info.php
	 * @return string A string that represents the MySQL client library version
	 * @since 5.0
	 */
	public function get_client_info () {}

	/**
	 * Returns statistics about the client connection
	 * @link http://php.net/manual/en/mysqli.get-connection-stats.php
	 * @return bool an array with connection stats if success, false otherwise.
	 * @since 5.3.0
	 */
	public function get_connection_stats () {}

	/**
	 * An undocumented function equivalent to the $server_info property
	 * @link http://php.net/manual/en/mysqli.get-server-info.php
	 * @return string A character string representing the server version.
 	 */
	public function get_server_info () {}

	/**
	 * Get result of SHOW WARNINGS
	 * @link http://php.net/manual/en/mysqli.get-warnings.php
	 * @return mysqli_warning
	 * @since 5.1.0
	 */
	public function get_warnings () {}

	/**
	 * Initializes MySQLi and returns a resource for use with mysqli_real_connect()
	 * @link http://php.net/manual/en/mysqli.init.php
	 * @return mysqli an object.
	 * @since 5.0
	 */
	public function init () {}

	/**
	 * Asks the server to kill a MySQL thread
	 * @link http://php.net/manual/en/mysqli.kill.php
	 * @param int $processid
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function kill ($processid) {}

	/**
	 * Performs a query on the database
	 * @link http://php.net/manual/en/mysqli.multi-query.php
	 * @param string $query <p>
	 * The query, as a string.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @return bool false if the first statement failed.
	 * To retrieve subsequent errors from other statements you have to call
	 * <b>mysqli_next_result</b> first.
	 * @since 5.0
	 */
	public function multi_query ($query) {}

	/**
	 * @param $host [optional]
	 * @param $user [optional]
	 * @param $password [optional]
	 * @param $database [optional]
	 * @param $port [optional]
	 * @param $socket [optional]
	 */
	public function mysqli ($host, $user, $password, $database, $port, $socket) {}

	/**
	 * Check if there are any more query results from a multi query
	 * @link http://php.net/manual/en/mysqli.more-results.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function more_results () {}

	/**
	 * Prepare next result from multi_query
	 * @link http://php.net/manual/en/mysqli.next-result.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function next_result () {}

	/**
	 * Set options
	 * @link http://php.net/manual/en/mysqli.options.php
	 * @param int $option <p>
	 * The option that you want to set. It can be one of the following values:
	 * <table>
	 * Valid options
	 * <tr valign="top">
	 * <td>Name</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_CONNECT_TIMEOUT</b></td>
	 * <td>connection timeout in seconds (supported on Windows with TCP/IP since PHP 5.3.1)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_LOCAL_INFILE</b></td>
	 * <td>enable/disable use of LOAD LOCAL INFILE</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_INIT_COMMAND</b></td>
	 * <td>command to execute after when connecting to MySQL server</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_READ_DEFAULT_FILE</b></td>
	 * <td>
	 * Read options from named option file instead of my.cnf
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_READ_DEFAULT_GROUP</b></td>
	 * <td>
	 * Read options from the named group from my.cnf
	 * or the file specified with <b>MYSQL_READ_DEFAULT_FILE</b>
	 * </td>
	 * </tr>
     * <tr valign="top">
     * <td><b>MYSQLI_SERVER_PUBLIC_KEY</b></td>
     * <td>
     * RSA public key file used with the SHA-256 based authentication.
     * </td>
     * </tr>
	 * </table>
	 * </p>
	 * @param mixed $value <p>
	 * The value for the option.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function options ($option, $value) {}

	/**
	 * Pings a server connection, or tries to reconnect if the connection has gone down
	 * @link http://php.net/manual/en/mysqli.ping.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function ping () {}

	/**
	 * Prepare an SQL statement for execution
	 * @link http://php.net/manual/en/mysqli.prepare.php
	 * @param string $query <p>
	 * The query, as a string.
	 * </p>
	 * <p>
	 * You should not add a terminating semicolon or \g
	 * to the statement.
	 * </p>
	 * <p>
	 * This parameter can include one or more parameter markers in the SQL
	 * statement by embedding question mark (?) characters
	 * at the appropriate positions.
	 * </p>
	 * <p>
	 * The markers are legal only in certain places in SQL statements.
	 * For example, they are allowed in the VALUES()
	 * list of an INSERT statement (to specify column
	 * values for a row), or in a comparison with a column in a
	 * WHERE clause to specify a comparison value.
	 * </p>
	 * <p>
	 * However, they are not allowed for identifiers (such as table or
	 * column names), in the select list that names the columns to be
	 * returned by a SELECT statement, or to specify both
	 * operands of a binary operator such as the = equal
	 * sign. The latter restriction is necessary because it would be
	 * impossible to determine the parameter type. It's not allowed to
	 * compare marker with NULL by
	 * ? IS NULL too. In general, parameters are legal
	 * only in Data Manipulation Language (DML) statements, and not in Data
	 * Definition Language (DDL) statements.
	 * </p>
	 * @return mysqli_stmt <b>mysqli_prepare</b> returns a statement object or false if an error occurred.
	 * @since 5.0
	 */
	public function prepare ($query) {}

	/**
	 * Performs a query on the database
	 * @link http://php.net/manual/en/mysqli.query.php
	 * @param string $query <p>
	 * The query string.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @param int $resultmode [optional] <p>
	 * Either the constant <b>MYSQLI_USE_RESULT</b> or
	 * <b>MYSQLI_STORE_RESULT</b> depending on the desired
	 * behavior. By default, <b>MYSQLI_STORE_RESULT</b> is used.
	 * </p>
	 * <p>
	 * If you use <b>MYSQLI_USE_RESULT</b> all subsequent calls
	 * will return error Commands out of sync unless you
	 * call <b>mysqli_free_result</b>
	 * </p>
	 * <p>
	 * With <b>MYSQLI_ASYNC</b> (available with mysqlnd), it is
	 * possible to perform query asynchronously.
	 * <b>mysqli_poll</b> is then used to get results from such
	 * queries.
	 * </p>
	 * @return mysqli_result|boolean For successful SELECT, SHOW, DESCRIBE or
	 * EXPLAIN queries <b>mysqli_query</b> will return
	 * a <b>mysqli_result</b> object.For other successful queries <b>mysqli_query</b> will
	 * return true and false on failure.
	 * @since 5.0
	 */
	public function query ($query, $resultmode = MYSQLI_STORE_RESULT) {}

	/**
	 * Opens a connection to a mysql server
	 * @link http://php.net/manual/en/mysqli.real-connect.php
	 * @param string $host [optional] <p>
	 * Can be either a host name or an IP address. Passing the null value
	 * or the string "localhost" to this parameter, the local host is
	 * assumed. When possible, pipes will be used instead of the TCP/IP
	 * protocol.
	 * </p>
	 * @param string $username [optional] <p>
	 * The MySQL user name.
	 * </p>
	 * @param string $passwd [optional] <p>
	 * If provided or null, the MySQL server will attempt to authenticate
	 * the user against those user records which have no password only. This
	 * allows one username to be used with different permissions (depending
	 * on if a password as provided or not).
	 * </p>
	 * @param string $dbname [optional] <p>
	 * If provided will specify the default database to be used when
	 * performing queries.
	 * </p>
	 * @param int $port [optional] <p>
	 * Specifies the port number to attempt to connect to the MySQL server.
	 * </p>
	 * @param string $socket [optional] <p>
	 * Specifies the socket or named pipe that should be used.
	 * </p>
	 * <p>
	 * Specifying the <i>socket</i> parameter will not
	 * explicitly determine the type of connection to be used when
	 * connecting to the MySQL server. How the connection is made to the
	 * MySQL database is determined by the <i>host</i>
	 * parameter.
	 * </p>
	 * @param int $flags [optional] <p>
	 * With the parameter <i>flags</i> you can set different
	 * connection options:
	 * </p>
	 * <table>
	 * Supported flags
	 * <tr valign="top">
	 * <td>Name</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_COMPRESS</b></td>
	 * <td>Use compression protocol</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_FOUND_ROWS</b></td>
	 * <td>return number of matched rows, not the number of affected rows</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_IGNORE_SPACE</b></td>
	 * <td>Allow spaces after function names. Makes all function names reserved words.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_INTERACTIVE</b></td>
	 * <td>
	 * Allow interactive_timeout seconds (instead of
	 * wait_timeout seconds) of inactivity before closing the connection
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_SSL</b></td>
	 * <td>Use SSL (encryption)</td>
	 * </tr>
	 * </table>
	 * <p>
	 * For security reasons the <b>MULTI_STATEMENT</b> flag is
	 * not supported in PHP. If you want to execute multiple queries use the
	 * <b>mysqli_multi_query</b> function.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function real_connect ($host = null, $username = null, $passwd = null, $dbname = null, $port = null, $socket = null, $flags = null) {}

	/**
	 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
	 * @link http://php.net/manual/en/mysqli.real-escape-string.php
	 * @param string $escapestr <p>
	 * The string to be escaped.
	 * </p>
	 * <p>
	 * Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and
	 * Control-Z.
	 * </p>
	 * @return string an escaped string.
	 * @since 5.0
	 */
	public function real_escape_string ($escapestr) {}

	/**
	 * Poll connections
	 * @link http://php.net/manual/en/mysqli.poll.php
	 * @param array $read <p>
	 * </p>
	 * @param array $error <p>
	 * </p>
	 * @param array $reject <p>
	 * </p>
	 * @param int $sec <p>
	 * Number of seconds to wait, must be non-negative.
	 * </p>
	 * @param int $usec [optional] <p>
	 * Number of microseconds to wait, must be non-negative.
	 * </p>
	 * @return int number of ready connections in success, false otherwise.
	 * @since 5.3.0
	 */
	public function poll (array &$read , array &$error , array &$reject , $sec, $usec = null) {}

	/**
	 * Get result from async query
	 * @link http://php.net/manual/en/mysqli.reap-async-query.php
	 * @return mysqli_result mysqli_result in success, false otherwise.
	 * @since 5.3.0
	 */
	public function reap_async_query () {}

	/**
	 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
	 * @param string $escapestr The string to be escaped.
	 * Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
	 * @return string
	 * @link http://www.php.net/manual/en/mysqli.real-escape-string.php
	 */
	public function escape_string ($escapestr) {}

	/**
	 * Execute an SQL query
	 * @link http://php.net/manual/en/mysqli.real-query.php
	 * @param string $query <p>
	 * The query, as a string.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function real_query ($query) {}

/**
*<div id="mysqli.release-savepoint" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli::release_savepoint</h1>   <h1 class="refname">mysqli_release_savepoint</h1>   <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli::release_savepoint</span> -- <span class="refname">mysqli_release_savepoint</span> &mdash; <span class="dc-title">从当前事务的保存点中移除一个命名保存点</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-mysqli.release-savepoint-description">   <h3 class="title">说明</h3>   <p class="para">面向对象风格 (method):</p>    <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli::release_savepoint</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>     )</div>    <p class="para rdfs-comment">过程化风格:</p>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_release_savepoint</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div>    <p class="para rdfs-comment">    </p>      <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-mysqli.release-savepoint-parameters">   <h3 class="title">参数</h3>   <span>    <dl>      <dt> <span class="parameter" style="color:#2EACF9"> link</span></dt> <dd> <p class="para">仅以过程化样式：由<span class="function">{@link mysqli_connect()}</span> 或 <span class="function"><a href="http://php.net/manual/zh/mysqli.init.php" class="function">mysqli_init()</a></span> 返回的链接标识。</p></dd>            <dt> <span class="parameter" style="color:#2EACF9">name</span></dt>       <dd>        <p class="para">               </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-mysqli.release-savepoint-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-mysqli.release-savepoint-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli.rollback.php" class="function" rel="rdfs-seeAlso">mysqli_rollback()</a> - 回退当前事务</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.mysqli.php">MySQLi</a></div></div>
     * @return bool Returns TRUE on success or FALSE on failure.*/
    public function release_savepoint ($name) {}

	/**
	 * Rolls back current transaction
	 * @link http://php.net/manual/en/mysqli.rollback.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function rollback () {}

/**
*<div id="mysqli.savepoint" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli::savepoint</h1>   <h1 class="refname">mysqli_savepoint</h1>   <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli::savepoint</span> -- <span class="refname">mysqli_savepoint</span> &mdash; <span class="dc-title">在当前事务中增加一个命名保存点</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-mysqli.savepoint-description">   <h3 class="title">说明</h3>   <p class="para">面向对象风格 (method):</p>    <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli::savepoint</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>     )</div>    <p class="para rdfs-comment">过程化风格:</p>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_savepoint</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli.php" class="type mysqli" style="color:#EAB766">mysqli</a></span> <span class="parameter" style="color:#2EACF9">$link</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div>    <p class="para rdfs-comment">    </p>      <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-mysqli.savepoint-parameters">   <h3 class="title">参数</h3>   <span>    <dl>      <dt> <span class="parameter" style="color:#2EACF9"> link</span></dt> <dd> <p class="para">仅以过程化样式：由<span class="function">{@link mysqli_connect()}</span> 或 <span class="function"><a href="http://php.net/manual/zh/mysqli.init.php" class="function">mysqli_init()</a></span> 返回的链接标识。</p></dd>            <dt> <span class="parameter" style="color:#2EACF9">name</span></dt>       <dd>        <p class="para">               </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-mysqli.savepoint-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-mysqli.savepoint-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli.commit.php" class="function" rel="rdfs-seeAlso">mysqli_commit()</a> - 提交一个事务</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.mysqli.php">MySQLi</a></div></div>
     * @return bool Returns TRUE on success or FALSE on failure.*/
    public function savepoint ($name) {}

	/**
	 * Selects the default database for database queries
	 * @link http://php.net/manual/en/mysqli.select-db.php
	 * @param string $dbname <p>
	 * The database name.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function select_db ($dbname) {}

	/**
	 * Sets the default client character set
	 * @link http://php.net/manual/en/mysqli.set-charset.php
	 * @param string $charset <p>
	 * The charset to be set as default.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0.5
	 */
	public function set_charset ($charset) {}

	/**
	 * @param $option
	 * @param $value
	 */
	public function set_opt ($option, $value) {}


	/**
	 * Used for establishing secure connections using SSL
	 * @link http://www.php.net/manual/en/mysqli.ssl-set.php
	 * @param $key <p>
	 * The path name to the key file.
	 * </p>
	 * @param $cert <p>
	 * The path name to the certificate file.
	 * </p>
	 * @param $ca <p>
	 * The path name to the certificate authority file.
	 * </p>
	 * @param $capath <p>
	 * The pathname to a directory that contains trusted SSL CA certificates in PEM format.
	 * </p>
	 * @param $cipher <p>
	 * A list of allowable ciphers to use for SSL encryption.
	 * </p>
	 * @return bool This function always returns TRUE value.
	 * @since 5.0
	 */
	public function ssl_set($key , $cert , $ca , $capath , $cipher) {}

	/**
	 * Gets the current system status
	 * @link http://php.net/manual/en/mysqli.stat.php
	 * @return string A string describing the server status. false if an error occurred.
	 * @since 5.0
	 */
/**
*<div id="function.stat" class="refentry">  <div class="refnamediv">   <h1 class="refname">stat</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">stat</span> &mdash; <span class="dc-title">给出文件的信息</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.stat-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>stat</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div>    <p class="para rdfs-comment">    获取由 <span class="parameter" style="color:#2EACF9">filename</span> 指定的文件的统计信息。如果    <span class="parameter" style="color:#2EACF9">filename</span>    是符号连接，则统计信息是关于被连接文件本身的，而不是符号连接。   </p>   <p class="para">    <span class="function">{@link lstat()}</span>    和 <span class="function"><strong style="color:#CC7832">stat()</strong></span> 相同，只除了它会返回符号连接的状态。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.stat-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">filename</span></dt>       <dd>        <p class="para">        文件的路径。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.stat-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <table class="doctable table">     <caption><strong><span class="function"><strong style="color:#CC7832">stat()</strong></span> 和 <span class="function">{@link fstat()}</span> 返回格式</strong></caption>           <thead>       <tr>        <th>数字下标</th>        <th>关联键名（自 PHP 4.0.6）</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0</td>        <td>dev</td>        <td>device number - 设备名</td>       </tr>        <tr>        <td>1</td>        <td>ino</td>        <td>inode number - inode 号码</td>       </tr>        <tr>        <td>2</td>        <td>mode</td>        <td>inode protection mode - inode 保护模式</td>       </tr>        <tr>        <td>3</td>        <td>nlink</td>        <td>number of links - 被连接数目</td>       </tr>        <tr>        <td>4</td>        <td>uid</td>        <td>userid of owner - 所有者的用户 id</td>       </tr>        <tr>        <td>5</td>        <td>gid</td>        <td>groupid of owner- 所有者的组 id</td>       </tr>        <tr>        <td>6</td>        <td>rdev</td>        <td>device type, if inode device * - 设备类型，如果是 inode 设备的话</td>       </tr>        <tr>        <td>7</td>        <td>size</td>        <td>size in bytes - 文件大小的字节数</td>       </tr>        <tr>        <td>8</td>        <td>atime</td>        <td>time of last access (unix timestamp) - 上次访问时间（Unix 时间戳）</td>       </tr>        <tr>        <td>9</td>        <td>mtime</td>        <td>time of last modification (unix timestamp) - 上次修改时间（Unix 时间戳）</td>       </tr>        <tr>        <td>10</td>        <td>ctime</td>        <td>time of last change (unix timestamp) - 上次改变时间（Unix 时间戳）</td>       </tr>        <tr>        <td>11</td>        <td>blksize</td>        <td>blocksize of filesystem IO * - 文件系统 IO 的块大小</td>       </tr>        <tr>        <td>12</td>        <td>blocks</td>        <td>number of blocks allocated - 所占据块的数目</td>       </tr>       </tbody>         </table>     * Windows 下总是 0。   </p>   <p class="para">       * - 仅在支持 st_blksize 类型的系统下有效。其它系统（如 Windows）返回 -1。   </p>   <p class="para">    如果出错，<span class="function"><strong style="color:#CC7832">stat()</strong></span> 返回 <strong><span>FALSE</span></strong>。   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <span class="simpara"> 因为 PHP 的整数类型是有符号整型而且很多平台使用 32 位整型，对 2GB 以上的文件，一些文件系统函数可能返回无法预期的结果 。</span></p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 errors" id="refsect1-function.stat-errors">   <h3 class="title">错误／异常</h3>   <p class="para">    错误时会产生 <strong><span>E_WARNING</span></strong> 级别的错误。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.stat-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>4.0.6</td>        <td>         返回一个数组包含有文件的统计信息，该数组具有以下列出的单元，数组下标从零开始。除了数字索引之外自还可以通过关联索引来访问。        </td>       </tr>       </tbody>         </table>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.stat-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2840">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">stat()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Get&nbsp;file&nbsp;stat&nbsp;<br /></span><span style="color: #9876AA">$stat&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">stat</span><span style="color: #007700">(</span><span style="color: #DD0000">'C:\php\php.exe'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//<br />&nbsp;*&nbsp;Print&nbsp;file&nbsp;access&nbsp;time,&nbsp;this&nbsp;is&nbsp;the&nbsp;same&nbsp;<br />&nbsp;*&nbsp;as&nbsp;calling&nbsp;fileatime()<br />&nbsp;<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'Access&nbsp;time:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'atime'</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">//<br />&nbsp;*&nbsp;Print&nbsp;file&nbsp;modification&nbsp;time,&nbsp;this&nbsp;is&nbsp;the&nbsp;<br />&nbsp;*&nbsp;same&nbsp;as&nbsp;calling&nbsp;filemtime()<br />&nbsp;<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'Modification&nbsp;time:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'mtime'</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">//&nbsp;Print&nbsp;the&nbsp;device&nbsp;number&nbsp;<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'Device&nbsp;number:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'dev'</span><span style="color: #007700">];<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>   <p class="para">    <div class="example" id="example-2841">     <p><strong>Example #2 Using <span class="function"><strong style="color:#CC7832">stat()</strong></span> information together with <span class="function">{@link touch()}</span></strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Get&nbsp;file&nbsp;stat&nbsp;<br /></span><span style="color: #9876AA">$stat&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">stat</span><span style="color: #007700">(</span><span style="color: #DD0000">'C:\php\php.exe'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Did&nbsp;we&nbsp;failed&nbsp;to&nbsp;get&nbsp;stat&nbsp;information?&nbsp;<br /></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">$stat</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'stat()&nbsp;call&nbsp;failed...'</span><span style="color: #007700">;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;We&nbsp;want&nbsp;the&nbsp;access&nbsp;time&nbsp;to&nbsp;be&nbsp;1&nbsp;week&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;after&nbsp;the&nbsp;current&nbsp;access&nbsp;time.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$atime&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'atime'</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #9876AA">604800</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Touch&nbsp;the&nbsp;file&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">touch</span><span style="color: #007700">(</span><span style="color: #DD0000">'some_file.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">time</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">$atime</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;touch&nbsp;file...'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'touch()&nbsp;returned&nbsp;success...'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.stat-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <p class="para">注意：不同文件系统对时间的判断方法可能是不相同的。</p></p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <span class="simpara">此函数的结果会被缓存。参见 <span class="function">{@link clearstatcache()}</span> 以获得更多细节。</span></p></blockquote>   <div class="tip"><strong class="tip">Tip</strong><p class="simpara">自 PHP 5.0.0 起, 此函数也用于<em class="emphasis">某些</em> URL 包装器。请参见 <a href="http://php.net/manual/zh/wrappers.php" class="xref">支持的协议和封装协议</a>以获得支持 <span class="function"><strong style="color:#CC7832">stat()</strong></span> 系列函数功能的包装器列表。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.stat-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link lstat()} - 给出一个文件或符号连接的信息</span></li>     <li class="member"><span class="function">{@link fstat()} - 通过已打开的文件指针取得文件信息</span></li>     <li class="member"><span class="function">{@link filemtime()} - 取得文件修改时间</span></li>     <li class="member"><span class="function">{@link filegroup()} - 取得文件的组</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function stat () {}

	/**
	 * Initializes a statement and returns an object for use with mysqli_stmt_prepare
	 * @link http://php.net/manual/en/mysqli.stmt-init.php
	 * @return mysqli_stmt an object.
	 * @since 5.0
	 */
	public function stmt_init () {}

	/**
	 * Transfers a result set from the last query
	 * @link http://php.net/manual/en/mysqli.store-result.php
	 * @return mysqli_result a buffered result object or false if an error occurred.
	 * </p>
	 * <p>
	 * <b>mysqli_store_result</b> returns false in case the query
	 * didn't return a result set (if the query was, for example an INSERT
	 * statement). This function also returns false if the reading of the
	 * result set failed. You can check if you have got an error by checking
	 * if <b>mysqli_error</b> doesn't return an empty string, if
	 * <b>mysqli_errno</b> returns a non zero value, or if
	 * <b>mysqli_field_count</b> returns a non zero value.
	 * Also possible reason for this function returning false after
	 * successful call to <b>mysqli_query</b> can be too large
	 * result set (memory for it cannot be allocated). If
	 * <b>mysqli_field_count</b> returns a non-zero value, the
	 * statement should have produced a non-empty result set.
	 * @since 5.0
	 */
	public function store_result () {}

	/**
	 * Returns whether thread safety is given or not
	 * @link http://php.net/manual/en/mysqli.thread-safe.php
	 * @return bool true if the client library is thread-safe, otherwise false.
	 * @since 5.0
	 */
	public function thread_safe () {}

	/**
	 * Initiate a result set retrieval
	 * @link http://php.net/manual/en/mysqli.use-result.php
	 * @return mysqli_result an unbuffered result object or false if an error occurred.
	 * @since 5.0
	 */
	public function use_result () {}

	/**
	 * @param $options
	 */
	public function refresh ($options) {}

}

/**
*<div id="class.mysqli-warning" class="reference">  <h1 class="title">MySQLi_Warning类</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="mysqli-warning.intro">    <h2 class="title">简介</h2>    <p class="para">    表示一个 MySQL 警告。    </p>   </div>      <div class="section" id="mysqli-warning.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">mysqli_warning</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-warning.php#mysqli-warning.props.message">$<var class="varname">message</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-warning.php#mysqli-warning.props.sqlstate">$<var class="varname">sqlstate</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.mysqli-warning.php#mysqli-warning.props.errno">$<var class="varname">errno</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">protected</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-warning.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-warning.next.php" class="methodname" style="color:#CC7832">next</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="mysqli-warning.props">    <h2 class="title">属性</h2>    <dl>            <dt id="mysqli-warning.props.message"><var class="varname"><var class="varname">message</var></var></dt>       <dd>        <p class="para">消息字符串</p>      </dd>                 <dt id="mysqli-warning.props.sqlstate"><var class="varname"><var class="varname">sqlstate</var></var></dt>       <dd>        <p class="para">SQL状态</p>      </dd>                 <dt id="mysqli-warning.props.errno"><var class="varname"><var class="varname">errno</var></var></dt>       <dd>        <p class="para">错误编号</p>      </dd>          </dl>    </div>     </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link mysqli_warning::__construct} — The __construct purpose</li><li>{@link mysqli_warning::next} — The next purpose</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.mysqli.php">Mysqli</a></div></div>
*/
final class mysqli_warning  {
	/**
	 * @var string
	 */
	public $message;
	/**
	 * @var string
	 */
	public $sqlstate;
	/**
	 * @var int
	 */
	public $errno;


	/**
	 * The __construct purpose
	 * @link http://php.net/manual/en/mysqli-warning.construct.php
	 */
	protected function __construct () {}

	/**
	 * Move to the next warning
	 * @link http://php.net/manual/en/mysqli-warning.next.php
	 * @return bool True if it successfully moved to the next warning
	 */
/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>next</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        受影响的 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong style="color:#CC7832">next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

}

/**
*<div id="class.mysqli-result" class="reference">  <h1 class="title">mysqli_result类</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="mysqli-result.intro">    <h2 class="title">简介</h2>    <p class="para">    代表从一个数据库查询中获取的结果集。    </p>     <p class="para">     <em class="emphasis">更新日志</em>    </p>     <table class="doctable table">     <caption><strong>更新日志</strong></caption>           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.4.0</td>        <td>         <strong class="classname">Iterator</strong> support was added, as <strong class="classname">mysqli_result</strong>         now implements <strong class="classname">Traversable</strong>.        </td>       </tr>       </tbody>         </table>       </div>      <div class="section" id="mysqli-result.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">mysqli_result</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">    <span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-result.current-field.php">$<var class="varname">current_field</var></a></var>   ;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-result.field-count.php">$<var class="varname">field_count</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">array</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-result.lengths.php">$<var class="varname">lengths</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-result.num-rows.php">$<var class="varname">num_rows</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_field_tell</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-result.php" class="type mysqli_result" style="color:#EAB766">mysqli_result</a></span> <span class="parameter" style="color:#2EACF9">$result</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.data-seek.php" class="methodname" style="color:#CC7832">data_seek</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-all.php" class="methodname" style="color:#CC7832">fetch_all</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$resulttype</span><span class="initializer"> = MYSQLI_NUM</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-array.php" class="methodname" style="color:#CC7832">fetch_array</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$resulttype</span><span class="initializer"> = MYSQLI_BOTH</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-assoc.php" class="methodname" style="color:#CC7832">fetch_assoc</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-field-direct.php" class="methodname" style="color:#CC7832">fetch_field_direct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fieldnr</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-field.php" class="methodname" style="color:#CC7832">fetch_field</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-fields.php" class="methodname" style="color:#CC7832">fetch_fields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-object.php" class="methodname" style="color:#CC7832">fetch_object</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$class_name</span><span class="initializer"> = &quot;stdClass&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$params</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.fetch-row.php" class="methodname" style="color:#CC7832">fetch_row</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_num_fields</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-result.php" class="type mysqli_result" style="color:#EAB766">mysqli_result</a></span> <span class="parameter" style="color:#2EACF9">$result</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.field-seek.php" class="methodname" style="color:#CC7832">field_seek</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fieldnr</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-result.free.php" class="methodname" style="color:#CC7832">free</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_fetch_lengths</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-result.php" class="type mysqli_result" style="color:#EAB766">mysqli_result</a></span> <span class="parameter" style="color:#2EACF9">$result</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_num_rows</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-result.php" class="type mysqli_result" style="color:#EAB766">mysqli_result</a></span> <span class="parameter" style="color:#2EACF9">$result</span></span>    )</div>     }</div>      </div>    </div>                                                                                                <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link mysqli_result::$current_field} — Get current field offset of a result pointer</li><li>{@link mysqli_result::data_seek} — Adjusts the result pointer to an arbitrary row in the result</li><li>{@link mysqli_result::fetch_all} — Fetches all result rows as an associative array, a numeric array, or both</li><li>{@link mysqli_result::fetch_array} — Fetch a result row as an associative, a numeric array, or both</li><li>{@link mysqli_result::fetch_assoc} — Fetch a result row as an associative array</li><li>{@link mysqli_result::fetch_field_direct} — Fetch meta-data for a single field</li><li>{@link mysqli_result::fetch_field} — Returns the next field in the result set</li><li>{@link mysqli_result::fetch_fields} — Returns an array of objects representing the fields in a result set</li><li>{@link mysqli_result::fetch_object} — Returns the current row of a result set as an object</li><li>{@link mysqli_result::fetch_row} — Get a result row as an enumerated array</li><li>{@link mysqli_result::$field_count} — Get the number of fields in a result</li><li>{@link mysqli_result::field_seek} — Set result pointer to a specified field offset</li><li>{@link mysqli_result::free} — Frees the memory associated with a result</li><li>{@link mysqli_result::$lengths} — Returns the lengths of the columns of the current row in the result set</li><li>{@link mysqli_result::$num_rows} — Gets the number of rows in a result</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.mysqli.php">Mysqli</a></div></div>
*/
class mysqli_result implements Traversable  {
	/**
	 * @var int
	 */
	public $current_field;
	/**
	 * @var int
	 */
	public $field_count;
	/**
	 * @var array
	 */
	public $lengths;
	/**
	 * @var int
	 */
	public $num_rows;
	/**
	 * @var mixed
	 */
	public $type;

	/**
	 * Constructor (no docs available)
	 */
	public function __construct () {}

	/**
	 * Close (no docs available)
 	 */
	public function close () {}

	/**
	 * Frees the memory associated with a result
	 * @link http://php.net/manual/en/mysqli-result.free.php
	 * @return void
	 * @since 5.0
	 */
	public function free () {}

	/**
	 * Adjusts the result pointer to an arbitary row in the result
	 * @link http://php.net/manual/en/mysqli-result.data-seek.php
	 * @param int $offset <p>
	 * The field offset. Must be between zero and the total number of rows
	 * minus one (0..<b>mysqli_num_rows</b> - 1).
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function data_seek ($offset) {}

	/**
	 * Returns the next field in the result set
	 * @link http://php.net/manual/en/mysqli-result.fetch-field.php
	 * @return object an object which contains field definition information or false
	 * if no field information is available.
	 * </p>
	 * <p>
	 * <table>
	 * Object properties
	 * <tr valign="top">
	 * <td>Property</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>The name of the column</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgname</td>
	 * <td>Original column name if an alias was specified</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>The name of the table this field belongs to (if not calculated)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgtable</td>
	 * <td>Original table name if an alias was specified</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>def</td>
	 * <td>Reserved for default value, currently always ""</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>db</td>
	 * <td>Database (since PHP 5.3.6)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>catalog</td>
	 * <td>The catalog name, always "def" (since PHP 5.3.6)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>max_length</td>
	 * <td>The maximum width of the field for the result set.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>length</td>
	 * <td>The width of the field, as specified in the table definition.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>charsetnr</td>
	 * <td>The character set number for the field.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>An integer representing the bit-flags for the field.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>type</td>
	 * <td>The data type used for this field</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>decimals</td>
	 * <td>The number of decimals used (for integer fields)</td>
	 * </tr>
	 * </table>
	 * @since 5.0
	 */
	public function fetch_field () {}

	/**
	 * Returns an array of objects representing the fields in a result set
	 * @link http://php.net/manual/en/mysqli-result.fetch-fields.php
	 * @return array an array of objects which contains field definition information or
	 * false if no field information is available.
	 * </p>
	 * <p>
	 * <table>
	 * Object properties
	 * <tr valign="top">
	 * <td>Property</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>The name of the column</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgname</td>
	 * <td>Original column name if an alias was specified</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>The name of the table this field belongs to (if not calculated)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgtable</td>
	 * <td>Original table name if an alias was specified</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>def</td>
	 * <td>The default value for this field, represented as a string</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>max_length</td>
	 * <td>The maximum width of the field for the result set.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>length</td>
	 * <td>The width of the field, as specified in the table definition.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>charsetnr</td>
	 * <td>The character set number for the field.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>An integer representing the bit-flags for the field.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>type</td>
	 * <td>The data type used for this field</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>decimals</td>
	 * <td>The number of decimals used (for integer fields)</td>
	 * </tr>
	 * </table>
	 * @since 5.0
	 */
	public function fetch_fields () {}

	/**
	 * Fetch meta-data for a single field
	 * @link http://php.net/manual/en/mysqli-result.fetch-field-direct.php
	 * @param int $fieldnr <p>
	 * The field number. This value must be in the range from
	 * 0 to number of fields - 1.
	 * </p>
	 * @return object an object which contains field definition information or false
	 * if no field information for specified fieldnr is
	 * available.
	 * </p>
	 * <p>
	 * <table>
	 * Object attributes
	 * <tr valign="top">
	 * <td>Attribute</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>The name of the column</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgname</td>
	 * <td>Original column name if an alias was specified</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>The name of the table this field belongs to (if not calculated)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgtable</td>
	 * <td>Original table name if an alias was specified</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>def</td>
	 * <td>The default value for this field, represented as a string</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>max_length</td>
	 * <td>The maximum width of the field for the result set.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>length</td>
	 * <td>The width of the field, as specified in the table definition.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>charsetnr</td>
	 * <td>The character set number for the field.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>An integer representing the bit-flags for the field.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>type</td>
	 * <td>The data type used for this field</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>decimals</td>
	 * <td>The number of decimals used (for integer fields)</td>
	 * </tr>
	 * </table>
	 * @since 5.0
	 */
	public function fetch_field_direct ($fieldnr) {}

	/**
	 * Fetches all result rows as an associative array, a numeric array, or both
	 * @link http://php.net/manual/en/mysqli-result.fetch-all.php
	 * @param int $resulttype [optional] <p>
	 * This optional parameter is a constant indicating what type of array
	 * should be produced from the current row data. The possible values for
	 * this parameter are the constants MYSQLI_ASSOC,
	 * MYSQLI_NUM, or MYSQLI_BOTH.
	 * </p>
	 * @return mixed an array of associative or numeric arrays holding result rows.
	 * @since 5.3.0
	 */
	public function fetch_all ($resulttype = null) {}

	/**
	 * Fetch a result row as an associative, a numeric array, or both
	 * @link http://php.net/manual/en/mysqli-result.fetch-array.php
	 * @param int $resulttype [optional] <p>
	 * This optional parameter is a constant indicating what type of array
	 * should be produced from the current row data. The possible values for
	 * this parameter are the constants <b>MYSQLI_ASSOC</b>,
	 * <b>MYSQLI_NUM</b>, or <b>MYSQLI_BOTH</b>.
	 * </p>
	 * <p>
	 * By using the <b>MYSQLI_ASSOC</b> constant this function
	 * will behave identically to the <b>mysqli_fetch_assoc</b>,
	 * while <b>MYSQLI_NUM</b> will behave identically to the
	 * <b>mysqli_fetch_row</b> function. The final option
	 * <b>MYSQLI_BOTH</b> will create a single array with the
	 * attributes of both.
	 * </p>
	 * @return mixed an array of strings that corresponds to the fetched row or null if there
	 * are no more rows in resultset.
	 * @since 5.0
	 */
	public function fetch_array ($resulttype = MYSQLI_BOTH) {}

	/**
	 * Fetch a result row as an associative array
	 * @link http://php.net/manual/en/mysqli-result.fetch-assoc.php
	 * @return array an associative array of strings representing the fetched row in the result
	 * set, where each key in the array represents the name of one of the result
	 * set's columns or null if there are no more rows in resultset.
	 * </p>
	 * <p>
	 * If two or more columns of the result have the same field names, the last
	 * column will take precedence. To access the other column(s) of the same
	 * name, you either need to access the result with numeric indices by using
	 * <b>mysqli_fetch_row</b> or add alias names.
	 * @since 5.0
	 */
	public function fetch_assoc () {}

	/**
	 * Returns the current row of a result set as an object
	 * @link http://php.net/manual/en/mysqli-result.fetch-object.php
	 * @param string $class_name [optional] <p>
	 * The name of the class to instantiate, set the properties of and return.
	 * If not specified, a <b>stdClass</b> object is returned.
	 * </p>
	 * @param array $params [optional] <p>
	 * An optional array of parameters to pass to the constructor
	 * for <i>class_name</i> objects.
	 * </p>
	 * @return stdClass|object an object with string properties that corresponds to the fetched
	 * row or null if there are no more rows in resultset.
	 * @since 5.0
	 */
	public function fetch_object ($class_name = 'stdClass', array $params = null) {}

	/**
	 * Get a result row as an enumerated array
	 * @link http://php.net/manual/en/mysqli-result.fetch-row.php
	 * @return mixed mysqli_fetch_row returns an array of strings that corresponds to the fetched row
	 * or &null; if there are no more rows in result set.
	 * @since 5.0
	 */
	public function fetch_row () {}

	/**
	 * Set result pointer to a specified field offset
	 * @link http://php.net/manual/en/mysqli-result.field-seek.php
	 * @param int $fieldnr <p>
	 * The field number. This value must be in the range from
	 * 0 to number of fields - 1.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function field_seek ($fieldnr) {}

	/**
	 * Free a result set (No docs available)
	 */
	public function free_result () {}

}

/**
*<div id="class.mysqli-stmt" class="reference">  <h1 class="title">MySQLi_STMT类</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="mysqli-stmt.intro">    <h2 class="title">简介</h2>    <p class="para">    代表一个预编译 SQL 语句。    </p>   </div>      <div class="section" id="mysqli-stmt.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">mysqli_stmt</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.affected-rows.php">$<var class="varname">affected_rows</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.errno.php">$<var class="varname">errno</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">array</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.error-list.php">$<var class="varname">error_list</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.error.php">$<var class="varname">error</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.field-count.php">$<var class="varname">field_count</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.insert-id.php">$<var class="varname">insert_id</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.num-rows.php">$<var class="varname">num_rows</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">int</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.param-count.php">$<var class="varname">param_count</var></a></var>;</div> <div class="fieldsynopsis"><span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/mysqli-stmt.sqlstate.php">$<var class="varname">sqlstate</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_affected_rows</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.attr-get.php" class="methodname" style="color:#CC7832">attr_get</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$attr</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.attr-set.php" class="methodname" style="color:#CC7832">attr_set</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$attr</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.bind-param.php" class="methodname" style="color:#CC7832">bind_param</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$types</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$var1</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$...</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.bind-result.php" class="methodname" style="color:#CC7832">bind_result</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$var1</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$...</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.close.php" class="methodname" style="color:#CC7832">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.data-seek.php" class="methodname" style="color:#CC7832">data_seek</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_errno</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_error_list</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_error</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.execute.php" class="methodname" style="color:#CC7832">execute</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.fetch.php" class="methodname" style="color:#CC7832">fetch</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_field_count</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.free-result.php" class="methodname" style="color:#CC7832">free_result</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_result</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.get-result.php" class="methodname" style="color:#CC7832">get_result</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">object</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.get-warnings.php" class="methodname" style="color:#CC7832">get_warnings</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_insert_id</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.more-results.php" class="methodname" style="color:#CC7832">more_results</a></span>     ( <span class="methodparam">void</span>     )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.next-result.php" class="methodname" style="color:#CC7832">next_result</a></span>     ( <span class="methodparam">void</span>     )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.num-rows.php" class="methodname" style="color:#CC7832">num_rows</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_param_count</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.prepare.php" class="methodname" style="color:#CC7832">prepare</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.reset.php" class="methodname" style="color:#CC7832">reset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mysqli_result</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.result-metadata.php" class="methodname" style="color:#CC7832">result_metadata</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.send-long-data.php" class="methodname" style="color:#CC7832">send_long_data</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$param_nr</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$data</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_stmt_sqlstate</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.mysqli-stmt.php" class="type mysqli_stmt" style="color:#EAB766">mysqli_stmt</a></span> <span class="parameter" style="color:#2EACF9">$stmt</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/mysqli-stmt.store-result.php" class="methodname" style="color:#CC7832">store_result</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>      </div>    </div>                                                                                                                                                                                      <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link mysqli_stmt::$affected_rows} — Returns the total number of rows changed, deleted, or   inserted by the last executed statement</li><li>{@link mysqli_stmt::attr_get} — Used to get the current value of a statement attribute</li><li>{@link mysqli_stmt::attr_set} — Used to modify the behavior of a prepared statement</li><li>{@link mysqli_stmt::bind_param} — Binds variables to a prepared statement as parameters</li><li>{@link mysqli_stmt::bind_result} — Binds variables to a prepared statement for result storage</li><li>{@link mysqli_stmt::close} — Closes a prepared statement</li><li>{@link mysqli_stmt::__construct} — Constructs a new mysqli_stmt object</li><li>{@link mysqli_stmt::data_seek} — Seeks to an arbitrary row in statement result set</li><li>{@link mysqli_stmt::$errno} — Returns the error code for the most recent statement call</li><li>{@link mysqli_stmt::$error_list} — Returns a list of errors from the last statement executed</li><li>{@link mysqli_stmt::$error} — Returns a string description for last statement error</li><li>{@link mysqli_stmt::execute} — Executes a prepared Query</li><li>{@link mysqli_stmt::fetch} — Fetch results from a prepared statement into the bound variables</li><li>{@link mysqli_stmt::$field_count} — Returns the number of field in the given statement</li><li>{@link mysqli_stmt::free_result} — Frees stored result memory for the given statement handle</li><li>{@link mysqli_stmt::get_result} — Gets a result set from a prepared statement</li><li>{@link mysqli_stmt::get_warnings} — Get result of SHOW WARNINGS</li><li>{@link mysqli_stmt::$insert_id} — Get the ID generated from the previous INSERT operation</li><li>{@link mysqli_stmt::more_results} — Check if there are more query results from a multiple query</li><li>{@link mysqli_stmt::next_result} — Reads the next result from a multiple query</li><li>{@link mysqli_stmt::$num_rows} — Return the number of rows in statements result set</li><li>{@link mysqli_stmt::$param_count} — Returns the number of parameter for the given statement</li><li>{@link mysqli_stmt::prepare} — Prepare an SQL statement for execution</li><li>{@link mysqli_stmt::reset} — Resets a prepared statement</li><li>{@link mysqli_stmt::result_metadata} — Returns result set metadata from a prepared statement</li><li>{@link mysqli_stmt::send_long_data} — Send data in blocks</li><li>{@link mysqli_stmt::$sqlstate} — Returns SQLSTATE error from previous statement operation</li><li>{@link mysqli_stmt::store_result} — Transfers a result set from a prepared statement</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.mysqli.php">Mysqli</a></div></div>
*/
class mysqli_stmt  {
	/**
	 * @var int
	 */
	public $affected_rows;
	/**
	 * @var int
	 */
	public $insert_id;
	/**
	 * @var int
	 */
	public $num_rows;
	/**
	 * @var int
	 */
	public $param_count;
	/**
	 * @var int
	 */
	public $field_count;
	/**
	 * @var int
	 */
	public $errno;
	/**
	 * @var string
	 */
	public $error;
	/**
	 * @var array
	 */
	public $error_list;
	/**
	 * @var string
	 */
	public $sqlstate;
	/**
	 * @var string
	 */
	public $id;

	/**
	 * mysqli_stmt constructor
	 * @param mysqli $link
	 * @param string $query
	 */
	public function __construct ($link, $query) {}

	/**
	 * Used to get the current value of a statement attribute
	 * @link http://php.net/manual/en/mysqli-stmt.attr-get.php
	 * @param int $attr <p>
	 * The attribute that you want to get.
	 * </p>
	 * @return int false if the attribute is not found, otherwise returns the value of the attribute.
	 * @since 5.0
	 */
	public function attr_get ($attr) {}

	/**
	 * Used to modify the behavior of a prepared statement
	 * @link http://php.net/manual/en/mysqli-stmt.attr-set.php
	 * @param int $attr <p>
	 * The attribute that you want to set. It can have one of the following values:
	 * <table>
	 * Attribute values
	 * <tr valign="top">
	 * <td>Character</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</td>
	 * <td>
	 * If set to 1, causes <b>mysqli_stmt_store_result</b> to
	 * update the metadata MYSQL_FIELD->max_length value.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>MYSQLI_STMT_ATTR_CURSOR_TYPE</td>
	 * <td>
	 * Type of cursor to open for statement when <b>mysqli_stmt_execute</b>
	 * is invoked. <i>mode</i> can be MYSQLI_CURSOR_TYPE_NO_CURSOR
	 * (the default) or MYSQLI_CURSOR_TYPE_READ_ONLY.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>MYSQLI_STMT_ATTR_PREFETCH_ROWS</td>
	 * <td>
	 * Number of rows to fetch from server at a time when using a cursor.
	 * <i>mode</i> can be in the range from 1 to the maximum
	 * value of unsigned long. The default is 1.
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * <p>
	 * If you use the MYSQLI_STMT_ATTR_CURSOR_TYPE option with
	 * MYSQLI_CURSOR_TYPE_READ_ONLY, a cursor is opened for the
	 * statement when you invoke <b>mysqli_stmt_execute</b>. If there
	 * is already an open cursor from a previous <b>mysqli_stmt_execute</b> call,
	 * it closes the cursor before opening a new one. <b>mysqli_stmt_reset</b>
	 * also closes any open cursor before preparing the statement for re-execution.
	 * <b>mysqli_stmt_free_result</b> closes any open cursor.
	 * </p>
	 * <p>
	 * If you open a cursor for a prepared statement, <b>mysqli_stmt_store_result</b>
	 * is unnecessary.
	 * </p>
	 * @param int $mode <p>The value to assign to the attribute.</p>
	 * @return bool
	 * @since 5.0
	 */
	public function attr_set ($attr, $mode) {}

	/**
	 * Binds variables to a prepared statement as parameters
	 * @link http://php.net/manual/en/mysqli-stmt.bind-param.php
	 * @param string $types <p>
	 * A string that contains one or more characters which specify the types
	 * for the corresponding bind variables:
	 * <table>
	 * Type specification chars
	 * <tr valign="top">
	 * <td>Character</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>i</td>
	 * <td>corresponding variable has type integer</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>d</td>
	 * <td>corresponding variable has type double</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>s</td>
	 * <td>corresponding variable has type string</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>b</td>
	 * <td>corresponding variable is a blob and will be sent in packets</td>
	 * </tr>
	 * </table>
	 * </p>
	 * @param mixed $var1 <p>
	 * The number of variables and length of string
	 * types must match the parameters in the statement.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function bind_param ($types, &$var1, &...$_) {}

	/**
	 * Binds variables to a prepared statement for result storage
	 * @link http://php.net/manual/en/mysqli-stmt.bind-result.php
	 * @param mixed $var1 The variable to be bound.
	 * @param mixed ...$_ The variables to be bound.
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function bind_result (&$var1, &...$_) {}

	/**
	 * Closes a prepared statement
	 * @link http://php.net/manual/en/mysqli-stmt.close.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function close () {}

	/**
	 * Seeks to an arbitrary row in statement result set
	 * @link http://php.net/manual/en/mysqli-stmt.data-seek.php
	 * @param int $offset <p>
	 * Must be between zero and the total number of rows minus one (0..
	 * <b>mysqli_stmt_num_rows</b> - 1).
	 * </p>
	 * @return void
	 * @since 5.0
	 */
	public function data_seek ($offset) {}

	/**
	 * Executes a prepared Query
	 * @link http://php.net/manual/en/mysqli-stmt.execute.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function execute () {}

	/**
	 * Fetch results from a prepared statement into the bound variables
	 * @link http://php.net/manual/en/mysqli-stmt.fetch.php
	 * @return bool
	 * @since 5.0
	 */
	public function fetch () {}

	/**
	 * Get result of SHOW WARNINGS
	 * @link http://php.net/manual/en/mysqli-stmt.get-warnings.php
	 * @param mysqli_stmt $stmt
	 * @return object
	 * @since 5.1.0
	 */
	public function get_warnings (mysqli_stmt $stmt) {}

	/**
	 * Returns result set metadata from a prepared statement
	 * @link http://php.net/manual/en/mysqli-stmt.result-metadata.php
	 * @return mysqli_result a result object or false if an error occurred.
	 * @since 5.0
	 */
	public function result_metadata () {}

	/**
	 * Check if there are more query results from a multiple query
	 * @link http://php.net/manual/en/mysqli-stmt.more-results.php
	 * @return bool
	 */
	public function more_results () {}

	/**
	 * Reads the next result from a multiple query
	 * @link http://php.net/manual/en/mysqli-stmt.next-result.php
	 * @return bool
	 */
	public function next_result () {}

	/**
	 * Return the number of rows in statements result set
	 * @link http://php.net/manual/en/mysqli-stmt.num-rows.php
	 * @param mysqli_stmt $stmt
	 * @return int An integer representing the number of rows in result set.
	 * @since 5.0
	 */
	public function num_rows (mysqli_stmt $stmt) {}

	/**
	 * Send data in blocks
	 * @link http://php.net/manual/en/mysqli-stmt.send-long-data.php
	 * @param int $param_nr <p>
	 * Indicates which parameter to associate the data with. Parameters are
	 * numbered beginning with 0.
	 * </p>
	 * @param string $data <p>
	 * A string containing data to be sent.
	 * </p>
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function send_long_data ($param_nr, $data) {}

	/**
	 * No documentation available
	 * @deprecated 5.3 This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
	 */
	public function stmt () {}

	/**
	 * Frees stored result memory for the given statement handle
	 * @link http://php.net/manual/en/mysqli-stmt.free-result.php
	 * @return void
	 * @since 5.0
	 */
	public function free_result () {}

	/**
	 * Resets a prepared statement
	 * @link http://php.net/manual/en/mysqli-stmt.reset.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">reset()</strong></span> 将 <span class="parameter" style="color:#2EACF9">array</span>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><span>FALSE</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset () {}

	/**
	 * Prepare an SQL statement for execution
	 * @link http://php.net/manual/en/mysqli-stmt.prepare.php
	 * @param string $query <p>
	 * The query, as a string. It must consist of a single SQL statement.
	 * </p>
	 * <p>
	 * You can include one or more parameter markers in the SQL statement by
	 * embedding question mark (?) characters at the
	 * appropriate positions.
	 * </p>
	 * <p>
	 * You should not add a terminating semicolon or \g
	 * to the statement.
	 * </p>
	 * <p>
	 * The markers are legal only in certain places in SQL statements.
	 * For example, they are allowed in the VALUES() list of an INSERT statement
	 * (to specify column values for a row), or in a comparison with a column in
	 * a WHERE clause to specify a comparison value.
	 * </p>
	 * <p>
	 * However, they are not allowed for identifiers (such as table or column names),
	 * in the select list that names the columns to be returned by a SELECT statement),
	 * or to specify both operands of a binary operator such as the =
	 * equal sign. The latter restriction is necessary because it would be impossible
	 * to determine the parameter type. In general, parameters are legal only in Data
	 * Manipulation Language (DML) statements, and not in Data Definition Language
	 * (DDL) statements.
	 * </p>
	 * @return mixed true on success or false on failure.
	 * @since 5.0
	 */
	public function prepare ($query) {}

	/**
	 * Transfers a result set from a prepared statement
	 * @link http://php.net/manual/en/mysqli-stmt.store-result.php
	 * @return bool true on success or false on failure.
	 * @since 5.0
	 */
	public function store_result () {}

	/**
	 * Gets a result set from a prepared statement
	 * @link http://php.net/manual/en/mysqli-stmt.get-result.php
	 * @return mysqli_result|bool Returns a resultset or FALSE on failure
 	 */
	public function get_result () {}

}

/**
 * (PHP 5)<p>
 * Gets the number of affected rows in a previous MySQL operation
 * @link http://www.php.net/manual/en/mysqli.affected-rows.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int An integer greater than zero indicates the number of rows affected or retrieved.
 * Zero indicates that no records where updated for an UPDATE statement,
 * no rows matched the WHERE clause in the query or that no query has yet been executed. -1 indicates that the query returned an error.
 */
function mysqli_affected_rows ($link) {}

/**
 * Turns on or off auto-committing database modifications
 * @link http://www.php.net/manual/en/mysqli.autocommit.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param bool $mode Whether to turn on auto-commit or not.
 * @return bool
 */
function mysqli_autocommit ($link, $mode) {}

/**
 * Starts a transaction
 * @link http://www.php.net/manual/en/mysqli.begin-transaction.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param int $flags [optional]
 * @param string $name [optional]
 * @return bool true on success or false on failure.
 * @since 5.5.0
 */
function mysqli_begin_transaction ($link, $flags = 0, $name = null) {}

/**
 * Changes the user of the specified database connection
 * @link http://php.net/manual/en/mysqli.change-user.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $user The MySQL user name.
 * @param string $password The MySQL password.
 * @param string|null $database The database to change to. If desired, the NULL value may be passed resulting in only changing the user and not selecting a database.
 * @return bool
 */
function mysqli_change_user ($link, $user, $password, $database) {}

/**
 * Returns the default character set for the database connection
 * @link http://php.net/manual/en/mysqli.character-set-name.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string The default character set for the current connection
 */
function mysqli_character_set_name ($link) {}

/**
 * Closes a previously opened database connection
 * @link http://php.net/manual/en/mysqli.close.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_close ($link) {}

/**
 * Commits the current transaction
 * @link http://php.net/manual/en/mysqli.commit.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_commit ($link) {}

/**
*<div id="function.mysqli-connect" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_connect</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_connect</span> &mdash; <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link mysqli::__construct()}</span></span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-connect-description">   <h3 class="title">说明</h3>   <p class="para">    此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link mysqli::__construct()}</span>   </p>   <p class="para">    虽然说在 <span class="methodname" style="color:#CC7832">{@link mysqli::__construct()}</span> 的文档    对 <span class="function"><strong style="color:#CC7832">mysqli_connect()</strong></span> 函数也进行了详细的说明，    这里依然给出一个简单的示例：   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.mysqli-connect-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-1915">    <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">mysqli_connect()</strong></span> 例程</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$link&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"my_db"</span><span style="color: #007700">);<br /><br />if&nbsp;(!</span><span style="color: #9876AA">$link</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Error:&nbsp;Unable&nbsp;to&nbsp;connect&nbsp;to&nbsp;MySQL."&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Debugging&nbsp;errno:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">mysqli_connect_errno</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Debugging&nbsp;error:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">mysqli_connect_error</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;exit;<br />}<br /><br />echo&nbsp;</span><span style="color: #DD0000">"Success:&nbsp;A&nbsp;proper&nbsp;connection&nbsp;to&nbsp;MySQL&nbsp;was&nbsp;made!&nbsp;The&nbsp;my_db&nbsp;database&nbsp;is&nbsp;great."&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #DD0000">"Host&nbsp;information:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">mysqli_get_host_info</span><span style="color: #007700">(</span><span style="color: #9876AA">$link</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">mysqli_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$link</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Success: A proper connection to MySQL was made! The my_db database is great. Host information: localhost via TCP/IP </span></div>    </div>   </div>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return mysqli object which represents the connection to a MySQL Server.*/
function mysqli_connect ($host = '', $user = '', $password = '', $database = '', $port = '', $socket = '') {}

/**
 * Returns the error code from last connect call
 * @link http://php.net/manual/en/mysqli.connect-errno.php
 * @return int Last error code number from the last call to mysqli_connect(). Zero means no error occurred.
 */
function mysqli_connect_errno () {}

/**
 * Returns a string description of the last connect error
 * @link http://php.net/manual/en/mysqli.connect-error.php
 * @return string Last error message string from the last call to mysqli_connect().
 */
function mysqli_connect_error () {}

/**
 * Adjusts the result pointer to an arbitrary row in the result
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @param int $offset
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function mysqli_data_seek ($result, $offset) {}

/**
 * Dump debugging information into the log
 * @link http://php.net/manual/en/mysqli.dump-debug-info.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_dump_debug_info ($link) {}

/**
 * Performs debugging operations using the Fred Fish debugging library.
 * @link http://php.net/manual/en/mysqli.debug.php
 * @param string $message
 * @return bool
 */
function mysqli_debug ($message) {}

/**
 * Returns the error code for the most recent function call
 * @link http://php.net/manual/en/mysqli.errno.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int An error code value for the last call, if it failed. zero means no error occurred.
 */
function mysqli_errno ($link) {}

/**
 * Returns a list of errors from the last command executed
 * PHP > 5.4.0 </br>
 * @link http://php.net/manual/en/mysqli.error-list.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return array A list of errors, each as an associative array containing the errno, error, and sqlstate.
 */
function mysqli_error_list ($link) {}

/**
 * Returns a list of errors from the last statement executed
 * PHP > 5.4.0 </br>
 * @link http://docs.php.net/manual/da/mysqli-stmt.error-list.php
 * @param mysqli_stmt $stmt A statement identifier returned by mysqli_stmt_init().
 * @return array A list of errors, each as an associative array containing the errno, error, and sqlstate.
 */
function mysqli_stmt_error_list ($stmt) {}

/**
 * Returns a string description of the last error
 * @link http://docs.php.net/manual/da/mysqli.error.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string
 */
function mysqli_error ($link) {}

/**
 * Executes a prepared Query
 * @link http://php.net/manual/en/mysqli-stmt.execute.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_execute ($stmt) {}

/**
*<div id="function.mysqli-execute" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_execute</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_execute</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.execute.php" class="function">mysqli_stmt_execute()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-execute-description">   <h3 class="title">说明</h3>   <p class="para">     这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.execute.php" class="function">mysqli_stmt_execute()</a></span> 的一个别名。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.mysqli-execute-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     <span class="function"><strong style="color:#CC7832">mysqli_execute()</strong></span> 已经被废弃并且将会被移除。    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-execute-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.execute.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_execute()</a> - Executes a prepared Query</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
*/
function mysqli_execute ($stmt) {}

/**
 * Returns the next field in the result set
 * @link http://fr2.php.net/manual/en/mysqli-result.fetch-field.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return object|bool Returns an object which contains field definition information or FALSE if no field information is available.
 */
function mysqli_fetch_field ($result) {}

/**
 * Returns an array of objects representing the fields in a result set
 * @link http://fr2.php.net/manual/en/mysqli-result.fetch-fields.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return array|bool Returns an array of objects which contains field definition information or FALSE if no field information is available.
 */
function mysqli_fetch_fields ($result) {}

/**
 * Fetch meta-data for a single field
 * @link http://fr2.php.net/manual/en/mysqli-result.fetch-field-direct.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @param int $fieldnr The field number. This value must be in the range from 0 to number of fields - 1.
 * @return object|bool Returns an object which contains field definition information or FALSE if no field information for specified fieldnr is available.
 */
function mysqli_fetch_field_direct ($result, $fieldnr) {}

/**
 * Returns the lengths of the columns of the current row in the result set
 * @link http://php.net/manual/en/mysqli-result.lengths.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return array|bool An array of integers representing the size of each column (not including any terminating null characters). FALSE if an error occurred.
 */
function mysqli_fetch_lengths ($result) {}

/**
 * Fetches all result rows as an associative array, a numeric array, or both.
 * Available only with mysqlnd.
 * @link http://php.net/manual/en/mysqli-result.fetch-all.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @param int $resulttype
 * @return array|null Returns an array of associative or numeric arrays holding result rows.
 */
function mysqli_fetch_all ($result, $resulttype = MYSQLI_NUM) {}

/**
 * Fetch a result row as an associative, a numeric array, or both.
 * @link http://php.net/manual/en/mysqli-result.fetch-array.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @param int $resulttype
 * @return array|null
 */
function mysqli_fetch_array ($result, $resulttype = MYSQLI_BOTH) {}

/**
 * Fetch a result row as an associative array
 * @link http://php.net/manual/en/mysqli-result.fetch-assoc.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return array|null Returns an associative array of strings representing the fetched row in the result set,
 * where each key in the array represents the name of one of the result set's columns or NULL if there are no more rows in resultset.
 * If two or more columns of the result have the same field names, the last column will take precedence.
 * To access the other column(s) of the same name,
 * you either need to access the result with numeric indices by using mysqli_fetch_row() or add alias names.
 */
function mysqli_fetch_assoc ($result) {}

/**
 * Returns the current row of a result set as an object.
 * @link http://php.net/manual/en/mysqli-result.fetch-object.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @param string $class_name The name of the class to instantiate, set the properties of and return. If not specified, a stdClass object is returned.
 * @param array|null $params An optional array of parameters to pass to the constructor for class_name objects.
 * @return object|null Returns an object with string properties that corresponds to the fetched row or NULL if there are no more rows in resultset.
 * If two or more columns of the result have the same field names, the last column will take precedence.
 * To access the other column(s) of the same name,
 * you either need to access the result with numeric indices by using mysqli_fetch_row() or add alias names.
 */
function mysqli_fetch_object ($result, $class_name = 'stdClass', $params = null) {}

/**
 * Get a result row as an enumerated array
 * @link http://php.net/manual/en/mysqli-result.fetch-row.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @link http://php.net/manual/en/mysqli-result.fetch-row.php
 * @return array|null mysqli_fetch_row returns an array of strings that corresponds to the fetched row
 * or &null; if there are no more rows in result set.
 */
function mysqli_fetch_row ($result) {}

/**
 * Returns the number of columns for the most recent query
 * @link http://php.net/manual/en/mysqli.field-count.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int An integer representing the number of fields in a result set.
 */
function mysqli_field_count ($link) {}

/**
 * Set result pointer to a specified field offset
 * @link http://php.net/manual/en/mysqli-result.field-seek.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @param int $fieldnr The field number. This value must be in the range from 0 to number of fields - 1.
 * @return bool
 */
function mysqli_field_seek ($result, $fieldnr) {}

/**
 * Get current field offset of a result pointer
 * @link http://php.net/manual/en/mysqli-result.current-field.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return int
 */
function mysqli_field_tell ($result) {}

/**
 * Frees the memory associated with a result
 * @link http://php.net/manual/en/mysqli-result.free.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return void
 */
function mysqli_free_result ($result) {}

/**
*<div id="function.mysqli-get-cache-stats" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_get_cache_stats</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0 and &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_get_cache_stats</span> &mdash; <span class="dc-title">返回客户端Zval缓存统计信息</span></p>   </div>  <div id="function.mysqli-get-cache-stats-refsynopsisdiv">   <div class="warning"><strong class="warning">Warning</strong>    <p class="simpara">从 PHP 5.4.0 开始，此函数被 <em class="emphasis">移除</em>。</p>   </div>  </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-get-cache-stats-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_cache_stats</strong></span>     ( <span class="methodparam">void</span>    )</div>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   <p class="para">    返回一个空数组。    仅可用于 <a href="http://php.net/manual/zh/book.mysqlnd.php" class="link">mysqlnd</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.mysqli-get-cache-stats-parameters">   <h3 class="title">参数</h3>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.mysqli-get-cache-stats-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果成功返回一个空数组，其他情况下返回 <strong><span>FALSE</span></strong>。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.mysqli-get-cache-stats-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.4.0</td>        <td>         The <span class="function"><strong style="color:#CC7832">mysqli_get_cache_stats()</strong></span> 被移除。        </td>       </tr>        <tr>        <td>5.3.0</td>        <td>         加入 <span class="function"><strong style="color:#CC7832">mysqli_get_cache_stats()</strong></span>。        </td>       </tr>       </tbody>         </table>    </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return array|bool an array with client Zval cache stats if success, false otherwise.*/
function mysqli_get_cache_stats ($link) {}

/**
 * Returns statistics about the client connection
 * @link http://php.net/manual/en/mysqli.get-connection-stats.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return array|bool Returns an array with connection stats if successful, FALSE otherwise.
 */
function mysqli_get_connection_stats ($link) {}

/**
*<div id="function.mysqli-get-client-stats" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_get_client_stats</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_get_client_stats</span> &mdash; <span class="dc-title">返回客户端进程统计信息</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-get-client-stats-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_client_stats</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    返回客户端进程统计信息    仅可用于 <a href="http://php.net/manual/zh/book.mysqlnd.php" class="link">mysqlnd</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.mysqli-get-client-stats-parameters">   <h3 class="title">参数</h3>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.mysqli-get-client-stats-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果成功，则返回一个数组包含客户端进程的统计信息，否则返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.mysqli-get-client-stats-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-1916">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">mysqli_get_client_stats()</strong></span> 例程</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$link&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mysqli_connect</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">mysqli_get_client_stats</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Array (     [bytes_sent] =&gt; 43     [bytes_received] =&gt; 80     [packets_sent] =&gt; 1     [packets_received] =&gt; 2     [protocol_overhead_in] =&gt; 8     [protocol_overhead_out] =&gt; 4     [bytes_received_ok_packet] =&gt; 11     [bytes_received_eof_packet] =&gt; 0     [bytes_received_rset_header_packet] =&gt; 0     [bytes_received_rset_field_meta_packet] =&gt; 0     [bytes_received_rset_row_packet] =&gt; 0     [bytes_received_prepare_response_packet] =&gt; 0     [bytes_received_change_user_packet] =&gt; 0     [packets_sent_command] =&gt; 0     [packets_received_ok] =&gt; 1     [packets_received_eof] =&gt; 0     [packets_received_rset_header] =&gt; 0     [packets_received_rset_field_meta] =&gt; 0     [packets_received_rset_row] =&gt; 0     [packets_received_prepare_response] =&gt; 0     [packets_received_change_user] =&gt; 0     [result_set_queries] =&gt; 0     [non_result_set_queries] =&gt; 0     [no_index_used] =&gt; 0     [bad_index_used] =&gt; 0     [slow_queries] =&gt; 0     [buffered_sets] =&gt; 0     [unbuffered_sets] =&gt; 0     [ps_buffered_sets] =&gt; 0     [ps_unbuffered_sets] =&gt; 0     [flushed_normal_sets] =&gt; 0     [flushed_ps_sets] =&gt; 0     [ps_prepared_never_executed] =&gt; 0     [ps_prepared_once_executed] =&gt; 0     [rows_fetched_from_server_normal] =&gt; 0     [rows_fetched_from_server_ps] =&gt; 0     [rows_buffered_from_client_normal] =&gt; 0     [rows_buffered_from_client_ps] =&gt; 0     [rows_fetched_from_client_normal_buffered] =&gt; 0     [rows_fetched_from_client_normal_unbuffered] =&gt; 0     [rows_fetched_from_client_ps_buffered] =&gt; 0     [rows_fetched_from_client_ps_unbuffered] =&gt; 0     [rows_fetched_from_client_ps_cursor] =&gt; 0     [rows_skipped_normal] =&gt; 0     [rows_skipped_ps] =&gt; 0     [copy_on_write_saved] =&gt; 0     [copy_on_write_performed] =&gt; 0     [command_buffer_too_small] =&gt; 0     [connect_success] =&gt; 1     [connect_failure] =&gt; 0     [connection_reused] =&gt; 0     [reconnect] =&gt; 0     [pconnect_success] =&gt; 0     [active_connections] =&gt; 1     [active_persistent_connections] =&gt; 0     [explicit_close] =&gt; 0     [implicit_close] =&gt; 0     [disconnect_close] =&gt; 0     [in_middle_of_command_close] =&gt; 0     [explicit_free_result] =&gt; 0     [implicit_free_result] =&gt; 0     [explicit_stmt_close] =&gt; 0     [implicit_stmt_close] =&gt; 0     [mem_emalloc_count] =&gt; 0     [mem_emalloc_ammount] =&gt; 0     [mem_ecalloc_count] =&gt; 0     [mem_ecalloc_ammount] =&gt; 0     [mem_erealloc_count] =&gt; 0     [mem_erealloc_ammount] =&gt; 0     [mem_efree_count] =&gt; 0     [mem_malloc_count] =&gt; 0     [mem_malloc_ammount] =&gt; 0     [mem_calloc_count] =&gt; 0     [mem_calloc_ammount] =&gt; 0     [mem_realloc_count] =&gt; 0     [mem_realloc_ammount] =&gt; 0     [mem_free_count] =&gt; 0     [proto_text_fetched_null] =&gt; 0     [proto_text_fetched_bit] =&gt; 0     [proto_text_fetched_tinyint] =&gt; 0     [proto_text_fetched_short] =&gt; 0     [proto_text_fetched_int24] =&gt; 0     [proto_text_fetched_int] =&gt; 0     [proto_text_fetched_bigint] =&gt; 0     [proto_text_fetched_decimal] =&gt; 0     [proto_text_fetched_float] =&gt; 0     [proto_text_fetched_double] =&gt; 0     [proto_text_fetched_date] =&gt; 0     [proto_text_fetched_year] =&gt; 0     [proto_text_fetched_time] =&gt; 0     [proto_text_fetched_datetime] =&gt; 0     [proto_text_fetched_timestamp] =&gt; 0     [proto_text_fetched_string] =&gt; 0     [proto_text_fetched_blob] =&gt; 0     [proto_text_fetched_enum] =&gt; 0     [proto_text_fetched_set] =&gt; 0     [proto_text_fetched_geometry] =&gt; 0     [proto_text_fetched_other] =&gt; 0     [proto_binary_fetched_null] =&gt; 0     [proto_binary_fetched_bit] =&gt; 0     [proto_binary_fetched_tinyint] =&gt; 0     [proto_binary_fetched_short] =&gt; 0     [proto_binary_fetched_int24] =&gt; 0     [proto_binary_fetched_int] =&gt; 0     [proto_binary_fetched_bigint] =&gt; 0     [proto_binary_fetched_decimal] =&gt; 0     [proto_binary_fetched_float] =&gt; 0     [proto_binary_fetched_double] =&gt; 0     [proto_binary_fetched_date] =&gt; 0     [proto_binary_fetched_year] =&gt; 0     [proto_binary_fetched_time] =&gt; 0     [proto_binary_fetched_datetime] =&gt; 0     [proto_binary_fetched_timestamp] =&gt; 0     [proto_binary_fetched_string] =&gt; 0     [proto_binary_fetched_blob] =&gt; 0     [proto_binary_fetched_enum] =&gt; 0     [proto_binary_fetched_set] =&gt; 0     [proto_binary_fetched_geometry] =&gt; 0     [proto_binary_fetched_other] =&gt; 0 ) </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-get-client-stats-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><a href="http://php.net/manual/zh/mysqlnd.stats.php" class="link">统计信息描述</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return array|bool an array with client stats if success, false otherwise.*/
function mysqli_get_client_stats () {}

/**
 * Returns a character set object
 * @link http://php.net/manual/en/mysqli.get-charset.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return object
 */
function mysqli_get_charset ($link) {}

/**
 * Get MySQL client info
 * @link http://php.net/manual/en/mysqli.get-client-info.php
 * @return string A string that represents the MySQL client library version
 */
function mysqli_get_client_info () {}

/**
 * Returns the MySQL client version as a string
 * @link http://php.net/manual/en/mysqli.get-client-version.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string
 */
function mysqli_get_client_version ($link) {}

/**
 * Returns a string representing the type of connection used
 * @link http://php.net/manual/en/mysqli.get-host-info.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string A character string representing the server hostname and the connection type.
 */
function mysqli_get_host_info ($link) {}

/**
*<div id="function.mysqli-get-links-stats" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_get_links_stats</h1>   <p class="verinfo">(PHP 5 &gt;= 5.6.0, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_get_links_stats</span> &mdash; <span class="dc-title">返回打开和缓存的链接相关信息</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-get-links-stats-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>mysqli_get_links_stats</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">mysqli_get_links_stats()</strong></span> 返回已经打开和缓存的MySQL链接的相关信息。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.mysqli-get-links-stats-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.mysqli-get-links-stats-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">mysqli_get_links_stats()</strong></span> 返回一个有三个元素的关联数组, 键如下:    <dl>            <dt> <span class="parameter" style="color:#2EACF9">total</span></dt>       <dd>        <p class="para">        类型 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer" style="color:#EAB766">integer</a></span> 所有状态链接的总数       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">active_plinks</span></dt>       <dd>        <p class="para">        类型 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer" style="color:#EAB766">integer</a></span> 不活跃的持久链接数       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">cached_plinks</span></dt>       <dd>        <p class="para">        类型 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer" style="color:#EAB766">integer</a></span> 不活跃的持久链接数       </p>      </dd>          </dl>    </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return array mysqli_get_links_stats() returns an associative array with three elements, keyed as follows:*/
function mysqli_get_links_stats() {}

/**
 * Returns the version of the MySQL protocol used
 * @link http://php.net/manual/en/mysqli.get-proto-info.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int Returns an integer representing the protocol version
 */
function mysqli_get_proto_info ($link) {}

/**
 * Returns the version of the MySQL server
 * @link http://php.net/manual/en/mysqli.get-server-info.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string A character string representing the server version.
 */
function mysqli_get_server_info ($link) {}

/**
 * Returns the version of the MySQL server as an integer
 * @link http://php.net/manual/en/mysqli.get-server-version.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string An integer representing the server version.
 * The form of this version number is main_version * 10000 + minor_version * 100 + sub_version (i.e. version 4.1.0 is 40100).
 */
function mysqli_get_server_version ($link) {}

/**
 * Get result of SHOW WARNINGS
 * @link http://php.net/manual/en/mysqli.get-warnings.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return mysqli_warning
 */
function mysqli_get_warnings ($link) {}

/**
 * Initializes MySQLi and returns a resource for use with mysqli_real_connect()
 * @link http://php.net/manual/en/mysqli.init.php
 * @return mysqli
 * @see mysqli_real_connect()
 */
function mysqli_init () {}

/**
 * Retrieves information about the most recently executed query
 * @link http://php.net/manual/en/mysqli.info.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string A character string representing additional information about the most recently executed query.
 */
function mysqli_info ($link) {}

/**
 * Returns the auto generated id used in the last query
 * @link http://php.net/manual/en/mysqli.insert-id.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int|string The value of the AUTO_INCREMENT field that was updated by the previous query. Returns zero if there was no previous query on the connection or if the query did not update an AUTO_INCREMENT value.
 * If the number is greater than maximal int value, mysqli_insert_id() will return a string.
 */
function mysqli_insert_id ($link) {}

/**
 * Asks the server to kill a MySQL thread
 * @link http://php.net/manual/en/mysqli.kill.php
 * @see mysqli_thread_id()
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param int $processid
 * @return bool
 */
function mysqli_kill ($link, $processid) {}

/**
 * Unsets user defined handler for load local infile command
 * @link http://php.net/manual/en/mysqli.set-local-infile-default.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return void
 */
function mysqli_set_local_infile_default ($link) {}

/**
 * Set callback function for LOAD DATA LOCAL INFILE command
 * @link http://php.net/manual/en/mysqli.set-local-infile-handler.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param callable $read_func
 * @return bool
 */
function mysqli_set_local_infile_handler ($link, $read_func) {}

/**
 * Check if there are any more query results from a multi query
 * @link http://php.net/manual/en/mysqli.more-results.php
 * @see mysqli_multi_query()
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_more_results ($link) {}

/**
 * Performs a query on the database
 * @link http://php.net/manual/en/mysqli.multi-query.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $query One or more queries which are separated by semicolons.
 * @return bool Returns FALSE if the first statement failed. To retrieve subsequent errors from other statements you have to call mysqli_next_result() first.
 */
function mysqli_multi_query ($link, $query) {}

/**
 * Prepare next result from multi_query
 * @link http://php.net/manual/en/mysqli.next-result.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_next_result ($link) {}

/**
 * Get the number of fields in a result
 * @link http://php.net/manual/en/mysqli-result.field-count.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return int
 */
function mysqli_num_fields ($result) {}

/**
 * Gets the number of rows in a result
 * @link http://php.net/manual/en/mysqli-result.num-rows.php
 * @param mysqli_result $result A result set identifier returned by mysqli_query(),
 * mysqli_store_result() or mysqli_use_result().
 * @return int Returns number of rows in the result set.
 */
function mysqli_num_rows ($result) {}

/**
 * Set options
 * @link http://php.net/manual/en/mysqli.options.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param int $option
 * @param mixed $value
 * @return bool
 */
function mysqli_options ($link, $option, $value) {}

/**
 * Pings a server connection, or tries to reconnect if the connection has gone down
 * @link http://php.net/manual/en/mysqli.ping.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_ping ($link) {}

/**
 * Poll connections
 * @link http://php.net/manual/en/mysqli.poll.php
 * @param array $read
 * @param array $error
 * @param array $reject
 * @param int $sec
 * @param int $usec
 * @return int|bool Returns number of ready connections upon success, FALSE otherwise.
 */
function mysqli_poll (array &$read = null, array &$error = null, &$reject = null, $sec, $usec = 0) {}

/**
 * Prepare an SQL statement for execution
 * @link http://php.net/manual/en/mysqli.prepare.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $query
 * @return mysqli_stmt|bool A statement object or FALSE if an error occurred.
 */
function mysqli_prepare ($link, $query) {}

/**
*<div id="function.mysqli-report" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_report</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_report</span> &mdash; <span class="dc-title">别名 <a href="http://php.net/manual/zh/mysqli-driver.report-mode.php" class="link">mysqli_driver-&gt;report_mode</a></span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-report-description">   <h3 class="title">说明</h3>   <p class="para">     此函数是该函数的别名： <a href="http://php.net/manual/zh/mysqli-driver.report-mode.php" class="link">mysqli_driver-&gt;report_mode</a>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return bool*/
function mysqli_report ($flags) {}

/**
 * Performs a query on the database
 * @link http://php.net/manual/en/mysqli.query.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $query An SQL query
 * @param int $resultmode
 * @return mysqli_result|bool
 * For successful SELECT, SHOW, DESCRIBE or EXPLAIN queries, mysqli_query() will return a mysqli_result object.
 * For other successful queries mysqli_query() will return TRUE.
 * Returns FALSE on failure.
 */
function mysqli_query ($link, $query, $resultmode = MYSQLI_STORE_RESULT) {}

/**
 * Opens a connection to a mysql server
 * @link http://php.net/manual/en/mysqli.real-connect.php
 * @see mysqli_connect()
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $host
 * @param string $user
 * @param string $password
 * @param string $database
 * @param string $port
 * @param string $socket
 * @param int $flags
 * @return bool
 */
function mysqli_real_connect ($link, $host = '', $user = '', $password = '', $database = '', $port = '', $socket = '', $flags = null) {}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 * @link http://php.net/manual/en/mysqli.real-escape-string.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $escapestr The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
 * @return string
 */
function mysqli_real_escape_string ($link, $escapestr) {}

/**
 * Execute an SQL query
 * @link http://php.net/manual/en/mysqli.real-query.php
 * @see mysqli_field_count()
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $query
 * @return bool
 */
function mysqli_real_query ($link, $query) {}

/**
 * Get result from async query
 * Available only with mysqlnd.
 * @link http://php.net/manual/en/mysqli.reap-async-query.php
 * @see mysqli_poll()
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return mysqli_result|bool Returns mysqli_result in success, FALSE otherwise.
 */
function mysqli_reap_async_query ($link) {}

/**
 * Set a named transaction savepoint
 * @link http://www.php.net/manual/en/mysqli.release-savepoint.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $name
 * @return bool Returns TRUE on success or FALSE on failure.
 * @since 5.5.0
 */
function mysqli_release_savepoint ($link ,$name) {}

/**
 * Rolls back current transaction
 * @link http://php.net/manual/en/mysqli.rollback.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return bool
 */
function mysqli_rollback ($link) {}

/**
 * Set a named transaction savepoint
 * @link http://www.php.net/manual/en/mysqli.savepoint.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $name
 * @return bool Returns TRUE on success or FALSE on failure.
 * @since 5.5.0
 */
function mysqli_savepoint ($link ,$name) {}

/**
 * Selects the default database for database queries
 * @link http://php.net/manual/en/mysqli.select-db.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $dbname
 * @return bool
 */
function mysqli_select_db ($link, $dbname) {}

/**
 * Sets the default client character set
 * @link http://php.net/manual/en/mysqli.set-charset.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $charset
 * @return bool
 */
function mysqli_set_charset ($link, $charset) {}

/**
 * Returns the total number of rows changed, deleted, or inserted by the last executed statement
 * @link http://php.net/manual/en/mysqli-stmt.affected-rows.php
 * @param mysqli_stmt $stmt
 * @return int|string If the number of affected rows is greater than maximal PHP int value, the number of affected rows will be returned as a string value.
 */
function mysqli_stmt_affected_rows ($stmt) {}

/**
 * Get the current value of a statement attribute
 * @link http://php.net/manual/en/mysqli-stmt.attr-get.php
 * @param mysqli_stmt $stmt
 * @param int $attr
 * @return int|bool Returns FALSE if the attribute is not found, otherwise returns the value of the attribute.
 */
function mysqli_stmt_attr_get ($stmt, $attr) {}

/**
 * Modify the behavior of a prepared statement
 * @link http://php.net/manual/en/mysqli-stmt.attr-set.php
 * @param mysqli_stmt $stmt
 * @param int $attr
 * @param int $mode
 * @return bool
 */
function mysqli_stmt_attr_set ($stmt, $attr, $mode) {}

/**
 * Returns the number of fields in the given statement
 * @link http://php.net/manual/en/mysqli-stmt.field-count.php
 * @param mysqli_stmt $stmt
 * @return int
 */
function mysqli_stmt_field_count ($stmt) {}

/**
 * Initializes a statement and returns an object for use with mysqli_stmt_prepare
 * @link http://fr2.php.net/manual/en/mysqli.stmt-init.php
 * @return mysqli_stmt
 */
function mysqli_stmt_init () {}

/**
 * Prepare an SQL statement for execution
 * @link http://php.net/manual/en/mysqli-stmt.prepare.php
 * @param mysqli_stmt $stmt
 * @param string $query
 * @return bool
 */
function mysqli_stmt_prepare ($stmt, $query) {}

/**
 * Returns result set metadata from a prepared statement
 * @link http://php.net/manual/en/mysqli-stmt.result-metadata.php
 * @param mysqli_stmt $stmt
 * @return mysqli_result|bool Returns a result object or FALSE if an error occurred
 */
function mysqli_stmt_result_metadata ($stmt) {}

/**
 * Send data in blocks
 * @link http://php.net/manual/en/mysqli-stmt.send-long-data.php
 * @param mysqli_stmt $stmt
 * @param int $param_nr
 * @param string $data
 * @return bool
 */
function mysqli_stmt_send_long_data ($stmt, $param_nr, $data) {}

/**
 * Binds variables to a prepared statement as parameters
 * @link http://php.net/manual/en/mysqli-stmt.bind-param.php
 * @param mysqli_stmt $stmt A statement identifier returned by mysqli_stmt_init()
 * @param string $types <p>
 * A string that contains one or more characters which specify the types
 * for the corresponding bind variables:
 * <table>
 * Type specification chars
 * <tr valign="top">
 * <td>Character</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>corresponding variable has type integer</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>corresponding variable has type double</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>corresponding variable has type string</td>
 * </tr>
 * <tr valign="top">
 * <td>b</td>
 * <td>corresponding variable is a blob and will be sent in packets</td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $var1 <p>
 * The number of variables and length of string
 * types must match the parameters in the statement.
 * </p>
 * @param mixed $_ [optional]
 * @return bool true on success or false on failure.
 */
function mysqli_stmt_bind_param ($stmt, $types, &$var1, &...$_) {}

/**
 * Binds variables to a prepared statement for result storage
 * @link http://php.net/manual/en/mysqli-stmt.bind-result.php
 * @param mysqli_stmt $stmt Statement
 * @param mixed $var1 The variable to be bound.
 * @param mixed ...$_ The variables to be bound.
 * @return bool
 */
function mysqli_stmt_bind_result ($stmt, &$var1, &...$_) {}

/**
 * Fetch results from a prepared statement into the bound variables
 * @link http://php.net/manual/en/mysqli-stmt.fetch.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_fetch ($stmt) {}

/**
 * Frees stored result memory for the given statement handle
 * @link http://php.net/manual/en/mysqli-stmt.free-result.php
 * @param mysqli_stmt $stmt
 * @return void
 */
function mysqli_stmt_free_result ($stmt) {}

/**
 * Gets a result set from a prepared statement
 * @link http://php.net/manual/en/mysqli-stmt.get-result.php
 * @param mysqli_stmt $stmt
 * @return mysqli_result|bool Returns a resultset or FALSE on failure.
 */
function mysqli_stmt_get_result ($stmt) {}

/**
 * Get result of SHOW WARNINGS
 * @link http://php.net/manual/en/mysqli-stmt.get-warnings.php
 * @param mysqli_stmt $stmt
 * @return object (not documented, but it's probably a mysqli_warning object)
 */
function mysqli_stmt_get_warnings ($stmt) {}

/**
 * Get the ID generated from the previous INSERT operation
 * @link http://php.net/manual/en/mysqli-stmt.insert-id.php
 * @param mysqli_stmt $stmt
 * @return mixed
 */
function mysqli_stmt_insert_id ($stmt) {}

/**
 * Resets a prepared statement
 * @link http://php.net/manual/en/mysqli-stmt.reset.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_reset ($stmt) {}

/**
 * Returns the number of parameter for the given statement
 * @link http://php.net/manual/en/mysqli-stmt.param-count.php
 * @param mysqli_stmt $stmt
 * @return int
 */
function mysqli_stmt_param_count ($stmt) {}

/**
 * Returns the SQLSTATE error from previous MySQL operation
 * @link http://php.net/manual/en/mysqli.sqlstate.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. '00000' means no error.
 */
function mysqli_sqlstate ($link) {}

/**
 * Gets the current system status
 * @link http://php.net/manual/en/mysqli.stat.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return string|bool A string describing the server status. FALSE if an error occurred.
 */
function mysqli_stat ($link) {}

/**
 * Used for establishing secure connections using SSL
 * @link http://www.php.net/manual/en/mysqli.ssl-set.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param string $key The path name to the key file
 * @param string $cert The path name to the certificate file
 * @param string $ca The path name to the certificate authority file
 * @param string $capath The pathname to a directory that contains trusted SSL CA certificates in PEM format
 * @param string $cipher A list of allowable ciphers to use for SSL encryption
 * @return bool This function always returns TRUE value.
 * @since 5.0
 */
function mysqli_ssl_set($link, $key , $cert , $ca , $capath , $cipher) {}

/**
 * Closes a prepared statement
 * @link http://php.net/manual/en/mysqli-stmt.close.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_close ($stmt) {}

/**
 * Seeks to an arbitrary row in statement result set
 * @link http://php.net/manual/en/mysqli-stmt.data-seek.php
 * @param mysqli_stmt $stmt
 * @param int $offset
 * @return void
 */
function mysqli_stmt_data_seek ($stmt, $offset) {}

/**
 * Returns the error code for the most recent statement call
 * @link http://php.net/manual/en/mysqli-stmt.errno.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_errno ($stmt) {}

/**
 * Returns a string description for last statement error
 * @link http://php.net/manual/en/mysqli-stmt.error.php
 * @param mysqli_stmt $stmt
 * @return string
 */
function mysqli_stmt_error ($stmt) {}

/**
 * Check if there are more query results from a multiple query
 * @link http://php.net/manual/en/mysqli-stmt.more-results.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_more_results ($stmt) {}

/**
 * Reads the next result from a multiple query
 * @link http://php.net/manual/en/mysqli-stmt.next-result.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_next_result ($stmt) {}

/**
 * Return the number of rows in statements result set
 * @link http://php.net/manual/en/mysqli-stmt.num-rows.php
 * @param mysqli_stmt $stmt
 * @return int
 */
function mysqli_stmt_num_rows ($stmt) {}

/**
 * Returns SQLSTATE error from previous statement operation
 * @link http://php.net/manual/en/mysqli-stmt.sqlstate.php
 * @param mysqli_stmt $stmt
 * @return string Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. '00000' means no error.
 */
function mysqli_stmt_sqlstate ($stmt) {}

/**
 * Transfers a result set from a prepared statement
 * @link http://php.net/manual/en/mysqli-stmt.store-result.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_store_result ($stmt) {}

/**
 * Transfers a result set from the last query
 * @link http://php.net/manual/en/mysqli.store-result.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return mysqli_result|bool
 */
function mysqli_store_result ($link) {}

/**
 * Returns the thread ID for the current connection
 * @link http://php.net/manual/en/mysqli.thread-id.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int Returns the Thread ID for the current connection.
 */
function mysqli_thread_id ($link) {}

/**
 * Returns whether thread safety is given or not
 * @link http://php.net/manual/en/mysqli.thread-safe.php
 * @return bool
 */
function mysqli_thread_safe () {}

/**
 * Initiate a result set retrieval
 * @link http://php.net/manual/en/mysqli.use-result.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return mysqli_result|bool
 */
function mysqli_use_result ($link) {}

/**
 * Returns the number of warnings from the last query for the given link
 * @link http://php.net/manual/en/mysqli.warning-count.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @return int
 */
function mysqli_warning_count ($link) {}

/**
 * Flushes tables or caches, or resets the replication server information
 * @link http://php.net/manual/en/mysqli.refresh.php
 * @param mysqli $link A link identifier returned by mysqli_connect() or mysqli_init()
 * @param int $options
 * @return bool
 */
function mysqli_refresh ($link, $options) {}

/**
*<div id="function.mysqli-bind-param" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_bind_param</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_bind_param</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.bind-param.php" class="function">mysqli_stmt_bind_param()</a></span> 的别名</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-bind-param-description">   <h3 class="title">说明</h3>   <p class="para">    这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.bind-param.php" class="function">mysqli_stmt_bind_param()</a></span> 的一个别名。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-bind-param-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.bind-param.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_param()</a> - Binds variables to a prepared statement as parameters</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
*/
function mysqli_bind_param ($stmt, $types) {}

/**
*<div id="function.mysqli-bind-result" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_bind_result</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_bind_result</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.bind-result.php" class="function">mysqli_stmt_bind_result()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-bind-result-description">   <h3 class="title">说明</h3>   <p class="para">    此函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.bind-result.php" class="function">mysqli_stmt_bind_result()</a></span> 的一个别名。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数已自 PHP 5.3.0 起<em class="emphasis">废弃</em>并将自 PHP 5.4.0 起<em class="emphasis">移除</em>。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-bind-result-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.bind-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_result()</a> - Binds variables to a prepared statement for result storage</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
*/
function mysqli_bind_result ($stmt, $types, &$var1) {}

/**
*<div id="function.mysqli-client-encoding" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_client_encoding</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_client_encoding</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli.character-set-name.php" class="function">mysqli_character_set_name()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-client-encoding-description">   <h3 class="title">说明</h3>   <p class="para">    这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli.character-set-name.php" class="function">mysqli_character_set_name()</a></span> 的一个别名。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-client-encoding-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli.real-escape-string.php" class="function" rel="rdfs-seeAlso">mysqli_real_escape_string()</a> - 根据当前连接的字符集，对于 SQL 语句中的特殊字符进行转义</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return string*/
function mysqli_client_encoding ($link) {}

/**
*<div id="function.mysqli-escape-string" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_escape_string</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_escape_string</span> &mdash; <span class="dc-title">别名 <span class="function"><a href="http://php.net/manual/zh/mysqli.real-escape-string.php" class="function">mysqli_real_escape_string()</a></span></span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-escape-string-description">   <h3 class="title">说明</h3>   <p class="para">    此函数是该函数的别名： <span class="function"><a href="http://php.net/manual/zh/mysqli.real-escape-string.php" class="function">mysqli_real_escape_string()</a></span>.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return string*/
function mysqli_escape_string ($link, $query) {}

/**
*<div id="function.mysqli-fetch" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_fetch</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_fetch</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span> 的别名。</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-fetch-description">   <h3 class="title">说明</h3>   <p class="para">     这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span> 的一个别名。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-fetch-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return bool*/
function mysqli_fetch ($stmt) {}

/**
*<div id="function.mysqli-param-count" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_param_count</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_param_count</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.param-count.php" class="function">mysqli_stmt_param_count()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-param-count-description">   <h3 class="title">说明</h3>   <p class="para">    这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.param-count.php" class="function">mysqli_stmt_param_count()</a></span> 的一个别名。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-param-count-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.param-count.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_param_count()</a> - Returns the number of parameter for the given statement</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return int*/
function mysqli_param_count ($stmt) {}

/**
*<div id="function.mysqli-get-metadata" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_get_metadata</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_get_metadata</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.result-metadata.php" class="function">mysqli_stmt_result_metadata()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-get-metadata-description">   <h3 class="title">说明</h3>   <p class="para">    这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.result-metadata.php" class="function">mysqli_stmt_result_metadata()</a></span> 的一个别名。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数已自 PHP 5.3.0 起<em class="emphasis">废弃</em>并将自 PHP 5.4.0 起<em class="emphasis">移除</em>。</p></div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-get-metadata-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.result-metadata.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_result_metadata()</a> - Returns result set metadata from a prepared statement</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return mysqli_result|bool Returns a result object or FALSE if an error occurred*/
function mysqli_get_metadata ($stmt) {}

/**
*<div id="function.mysqli-send-long-data" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_send_long_data</h1>   <p class="verinfo">(PHP 5 &lt; 5.4.0)</p><p class="refpurpose"><span class="refname">mysqli_send_long_data</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.send-long-data.php" class="function">mysqli_stmt_send_long_data()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-send-long-data-description">   <h3 class="title">说明</h3>   <p class="para">    这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.send-long-data.php" class="function">mysqli_stmt_send_long_data()</a></span> 的一个别名。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.mysqli-send-long-data-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function"><a href="http://php.net/manual/zh/mysqli-stmt.send-long-data.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_send_long_data()</a> - Send data in blocks</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return bool*/
function mysqli_send_long_data ($stmt, $param_nr, $data) {}

/**
*<div id="function.mysqli-set-opt" class="refentry">  <div class="refnamediv">   <h1 class="refname">mysqli_set_opt</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">mysqli_set_opt</span> &mdash; <span class="dc-title"><span class="function"><a href="http://php.net/manual/zh/mysqli.options.php" class="function">mysqli_options()</a></span> 的别名</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.mysqli-set-opt-description">   <h3 class="title">说明</h3>   <p class="para">    这个函数是 <span class="function"><a href="http://php.net/manual/zh/mysqli.options.php" class="function">mysqli_options()</a></span> 的一个别名。   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.mysqli.php">别名和过时的 Mysqli 函数</a></div></div>
 * @return bool*/
function mysqli_set_opt ($link, $option, $value) {}


/**
*       Read options from the named group from <var class="filename">my.cnf</var>       or the file specified with <strong><code>MYSQLI_READ_DEFAULT_FILE</code></strong>      
*/
define ('MYSQLI_READ_DEFAULT_GROUP', 5);

/**
*       Read options from the named option file instead of from <var class="filename">my.cnf</var>      
*/
define ('MYSQLI_READ_DEFAULT_FILE', 4);

/**
*       Connect timeout in seconds      
*/
define ('MYSQLI_OPT_CONNECT_TIMEOUT', 0);

/**
*       Enables command <em>LOAD LOCAL INFILE</em>      
*/
define ('MYSQLI_OPT_LOCAL_INFILE', 8);

/**
 * <p>
 * RSA public key file used with the SHA-256 based authentication.
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_SERVER_PUBLIC_KEY', 27);

/**
*       Command to execute when connecting to MySQL server. Will automatically be re-executed when reconnecting.      
*/
define ('MYSQLI_INIT_COMMAND', 3);
define ('MYSQLI_OPT_NET_CMD_BUFFER_SIZE', 202);
define ('MYSQLI_OPT_NET_READ_BUFFER_SIZE', 203);
define ('MYSQLI_OPT_INT_AND_FLOAT_NATIVE', 201);

/**
*       Use SSL (encrypted protocol). This option should not be set by application programs;        it is set internally in the MySQL client library      
*/
define ('MYSQLI_CLIENT_SSL', 2048);

/**
*       Use compression protocol      
*/
define ('MYSQLI_CLIENT_COMPRESS', 32);

/**
*       Allow <em>interactive_timeout</em> seconds       (instead of <em>wait_timeout</em> seconds) of inactivity before       closing the connection.  The client&#039;s session       <em>wait_timeout</em> variable will be set to       the value of the session <em>interactive_timeout</em> variable.       
*/
define ('MYSQLI_CLIENT_INTERACTIVE', 1024);

/**
*       Allow spaces after function names. Makes all functions names reserved words.       
*/
define ('MYSQLI_CLIENT_IGNORE_SPACE', 256);

/**
*       Don&#039;t allow the <em>db_name.tbl_name.col_name</em> syntax.      
*/
define ('MYSQLI_CLIENT_NO_SCHEMA', 16);
define ('MYSQLI_CLIENT_FOUND_ROWS', 2);

/**
*       For using buffered resultsets      
*/
define ('MYSQLI_STORE_RESULT', 0);

/**
*       For using unbuffered resultsets      
*/
define ('MYSQLI_USE_RESULT', 1);
define ('MYSQLI_ASYNC', 8);

/**
*       Columns are returned into the array having the fieldname as the array index.      
*/
define ('MYSQLI_ASSOC', 1);

/**
*       Columns are returned into the array having an enumerated index.      
*/
define ('MYSQLI_NUM', 2);

/**
*       Columns are returned into the array having both a numerical index and the fieldname as the associative index.       
*/
define ('MYSQLI_BOTH', 3);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH', 0);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_STMT_ATTR_CURSOR_TYPE', 1);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_NO_CURSOR', 0);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_READ_ONLY', 1);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_FOR_UPDATE', 2);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_SCROLLABLE', 4);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_STMT_ATTR_PREFETCH_ROWS', 2);

/**
*       Indicates that a field is defined as <em>NOT NULL</em>      
*/
define ('MYSQLI_NOT_NULL_FLAG', 1);

/**
*       Field is part of a primary index      
*/
define ('MYSQLI_PRI_KEY_FLAG', 2);

/**
*       Field is part of a unique index.      
*/
define ('MYSQLI_UNIQUE_KEY_FLAG', 4);

/**
*       Field is part of an index.      
*/
define ('MYSQLI_MULTIPLE_KEY_FLAG', 8);

/**
*       Field is defined as <em>BLOB</em>      
*/
define ('MYSQLI_BLOB_FLAG', 16);

/**
*       Field is defined as <em>UNSIGNED</em>      
*/
define ('MYSQLI_UNSIGNED_FLAG', 32);

/**
*       Field is defined as <em>ZEROFILL</em>      
*/
define ('MYSQLI_ZEROFILL_FLAG', 64);

/**
*       Field is defined as <em>AUTO_INCREMENT</em>      
*/
define ('MYSQLI_AUTO_INCREMENT_FLAG', 512);

/**
*       Field is defined as <em>TIMESTAMP</em>      
*/
define ('MYSQLI_TIMESTAMP_FLAG', 1024);

/**
*       Field is defined as <em>SET</em>      
*/
define ('MYSQLI_SET_FLAG', 2048);

/**
*       Field is defined as <em>NUMERIC</em>      
*/
define ('MYSQLI_NUM_FLAG', 32768);

/**
*       Field is part of an multi-index      
*/
define ('MYSQLI_PART_KEY_FLAG', 16384);

/**
*       Field is part of <em>GROUP BY</em>      
*/
define ('MYSQLI_GROUP_FLAG', 32768);

/**
*      Field is defined as <em>ENUM</em>. Available since PHP 5.3.0.      
*/
define ('MYSQLI_ENUM_FLAG', 256);
define ('MYSQLI_BINARY_FLAG', 128);
define ('MYSQLI_NO_DEFAULT_VALUE_FLAG', 4096);
define ('MYSQLI_ON_UPDATE_NOW_FLAG', 8192);

define('MYSQLI_TRANS_START_READ_ONLY', 4);
define('MYSQLI_TRANS_START_READ_WRITE', 2);
define('MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT', 1);
/**
*       Field is defined as <em>DECIMAL</em>      
*/
define ('MYSQLI_TYPE_DECIMAL', 0);

/**
*       Field is defined as <em>TINYINT</em>      
*/
define ('MYSQLI_TYPE_TINY', 1);

/**
*       Field is defined as <em>SMALLINT</em>      
*/
define ('MYSQLI_TYPE_SHORT', 2);

/**
*       Field is defined as <em>INT</em>      
*/
define ('MYSQLI_TYPE_LONG', 3);

/**
*       Field is defined as <em>FLOAT</em>      
*/
define ('MYSQLI_TYPE_FLOAT', 4);

/**
*       Field is defined as <em>DOUBLE</em>      
*/
define ('MYSQLI_TYPE_DOUBLE', 5);

/**
*       Field is defined as <em>DEFAULT NULL</em>      
*/
define ('MYSQLI_TYPE_NULL', 6);

/**
*       Field is defined as <em>TIMESTAMP</em>      
*/
define ('MYSQLI_TYPE_TIMESTAMP', 7);

/**
*       Field is defined as <em>BIGINT</em>      
*/
define ('MYSQLI_TYPE_LONGLONG', 8);

/**
*       Field is defined as <em>MEDIUMINT</em>      
*/
define ('MYSQLI_TYPE_INT24', 9);

/**
*       Field is defined as <em>DATE</em>      
*/
define ('MYSQLI_TYPE_DATE', 10);

/**
*       Field is defined as <em>TIME</em>      
*/
define ('MYSQLI_TYPE_TIME', 11);

/**
*       Field is defined as <em>DATETIME</em>      
*/
define ('MYSQLI_TYPE_DATETIME', 12);

/**
*       Field is defined as <em>YEAR</em>      
*/
define ('MYSQLI_TYPE_YEAR', 13);

/**
*       Field is defined as <em>DATE</em>      
*/
define ('MYSQLI_TYPE_NEWDATE', 14);

/**
*       Field is defined as <em>ENUM</em>      
*/
define ('MYSQLI_TYPE_ENUM', 247);

/**
*       Field is defined as <em>SET</em>      
*/
define ('MYSQLI_TYPE_SET', 248);

/**
*       Field is defined as <em>TINYBLOB</em>      
*/
define ('MYSQLI_TYPE_TINY_BLOB', 249);

/**
*       Field is defined as <em>MEDIUMBLOB</em>      
*/
define ('MYSQLI_TYPE_MEDIUM_BLOB', 250);

/**
*       Field is defined as <em>LONGBLOB</em>      
*/
define ('MYSQLI_TYPE_LONG_BLOB', 251);

/**
*       Field is defined as <em>BLOB</em>      
*/
define ('MYSQLI_TYPE_BLOB', 252);

/**
*       Field is defined as <em>VARCHAR</em>      
*/
define ('MYSQLI_TYPE_VAR_STRING', 253);

/**
*       Field is defined as <em>STRING</em>      
*/
define ('MYSQLI_TYPE_STRING', 254);

/**
*       Field is defined as <em>CHAR</em>      
*/
define ('MYSQLI_TYPE_CHAR', 1);

/**
*       Field is defined as <em>INTERVAL</em>      
*/
define ('MYSQLI_TYPE_INTERVAL', 247);

/**
*       Field is defined as <em>GEOMETRY</em>      
*/
define ('MYSQLI_TYPE_GEOMETRY', 255);

/**
*       Precision math <em>DECIMAL</em> or <em>NUMERIC</em> field (MySQL 5.0.3 and up)      
*/
define ('MYSQLI_TYPE_NEWDECIMAL', 246);

/**
*       Field is defined as <em>BIT</em> (MySQL 5.0.3 and up)      
*/
define ('MYSQLI_TYPE_BIT', 16);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_SET_CHARSET_NAME', 7);

/**
*       No more data available for bind variable      
*/
define ('MYSQLI_NO_DATA', 100);

/**
*       Data truncation occurred. Available since PHP 5.1.0 and MySQL 5.0.5.      
*/
define ('MYSQLI_DATA_TRUNCATED', 101);

/**
*       Report if no index or bad index was used in a query.      
*/
define ('MYSQLI_REPORT_INDEX', 4);

/**
*       Report errors from mysqli function calls.      
*/
define ('MYSQLI_REPORT_ERROR', 1);

/**
*       Throw a <em>mysqli_sql_exception</em> for errors instead of warnings.      
*/
define ('MYSQLI_REPORT_STRICT', 2);

/**
*       Set all options on (report all).      
*/
define ('MYSQLI_REPORT_ALL', 255);

/**
*       Turns reporting off.      
*/
define ('MYSQLI_REPORT_OFF', 0);

/**
*       Is set to 1 if <span class="function"><a href="http://php.net/manual/zh/mysqli.debug.php" class="function">mysqli_debug()</a></span> functionality is enabled.      
*/
define ('MYSQLI_DEBUG_TRACE_ENABLED', 1);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED', 16);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/en/mysqli.constants.php
 */
define ('MYSQLI_SERVER_QUERY_NO_INDEX_USED', 32);

/**
*       Refreshes the grant tables.      
*/
define ('MYSQLI_REFRESH_GRANT', 1);

/**
*       Flushes the logs, like executing the       <em>FLUSH LOGS</em> <acronym>SQL</acronym> statement.      
*/
define ('MYSQLI_REFRESH_LOG', 2);

/**
*       Flushes the table cache, like executing the       <em>FLUSH TABLES</em> <acronym>SQL</acronym> statement.      
*/
define ('MYSQLI_REFRESH_TABLES', 4);

/**
*       Flushes the host cache, like executing the       <em>FLUSH HOSTS</em> <acronym>SQL</acronym> statement.      
*/
define ('MYSQLI_REFRESH_HOSTS', 8);

/**
*       Reset the status variables, like executing the       <em>FLUSH STATUS</em> <acronym>SQL</acronym> statement.      
*/
define ('MYSQLI_REFRESH_STATUS', 16);

/**
*       Flushes the thread cache.      
*/
define ('MYSQLI_REFRESH_THREADS', 32);

/**
*       On a slave replication server: resets the master server information, and        restarts the slave. Like executing the <em>RESET SLAVE</em>       <acronym>SQL</acronym> statement.      
*/
define ('MYSQLI_REFRESH_SLAVE', 64);

/**
*       On a master replication server: removes the binary log files listed in the       binary log index, and truncates the index file. Like executing the       <em>RESET MASTER</em> <acronym>SQL</acronym> statement.      
*/
define ('MYSQLI_REFRESH_MASTER', 128);


define ('MYSQLI_SERVER_QUERY_WAS_SLOW', 1024);
define ('MYSQLI_REFRESH_BACKUP_LOG', 2097152);

// End of mysqli v.0.1


/** @link http://php.net/manual/en/mysqli.constants.php */
define('MYSQLI_OPT_SSL_VERIFY_SERVER_CERT', 21);
/** @link http://php.net/manual/en/mysqli.constants.php */
define('MYSQLI_SET_CHARSET_DIR', 6);
/** @link http://php.net/manual/en/mysqli.constants.php */
define('MYSQLI_SERVER_PS_OUT_PARAMS', 4096);

define('MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT', 1073741824);

define('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT', 64);
define('MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS', 4194304);
define('MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS', 29);
define('MYSQLI_STORE_RESULT_COPY_DATA', 16);
define('MYSQLI_TYPE_JSON', 245);
define('MYSQLI_TRANS_COR_AND_CHAIN', 1);
define('MYSQLI_TRANS_COR_AND_NO_CHAIN', 2);
define('MYSQLI_TRANS_COR_RELEASE', 4);
define('MYSQLI_TRANS_COR_NO_RELEASE', 8);
