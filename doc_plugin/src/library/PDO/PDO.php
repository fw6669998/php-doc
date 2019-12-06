<?php

// Start of PDO v.1.0.4dev

/**
*<div id="class.pdoexception" class="reference">  <h1 class="title"> PDOException 异常类 </h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="pdoexception.intro">    <h2 class="title">简介</h2>    <p class="para">      代表一个由 PDO 产生的错误。在自己的代码不应抛出一个 <strong class="classname">PDOException</strong> 异常。关于 PHP 异常的更多信息请参见 <a href="http://php.net/manual/zh/language.exceptions.php" class="link">异常</a> 。    </p>   </div>      <div class="section" id="pdoexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">PDOException</strong>      </span>        <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.runtimeexception.php" class="classname">RuntimeException</a>      </span>        {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">array</span>       <var class="varname"><a href="http://php.net/manual/zh/class.pdoexception.php#pdoexception.props.errorinfo">$<var class="varname">errorInfo</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.pdoexception.php#pdoexception.props.message">$<var class="varname">message</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.pdoexception.php#pdoexception.props.code">$<var class="varname">code</var></a></var>     ;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">Throwable</span> <span class="methodname" style="color:#CC7832">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span>  <span class="methodname" style="color:#CC7832">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>       }</div>      </div>      <div class="section" id="pdoexception.props">    <h2 class="title">属性</h2>    <dl>            <dt id="pdoexception.props.errorinfo"><var class="varname"><var class="varname">errorInfo</var></var></dt>       <dd>        <p class="para">        相当于<span class="function">{@link PDO::errorInfo()}</span> 或 <span class="function">{@link PDOStatement::errorInfo()}</span>       </p>      </dd>                 <dt id="pdoexception.props.message"><var class="varname"><var class="varname">message</var></var></dt>       <dd>        <p class="para">        文本错误信息。用 <span class="function">{@link Exception::getMessage()}</span> 来访问。       </p>      </dd>                 <dt id="pdoexception.props.code"><var class="varname"><var class="varname">code</var></var></dt>       <dd>        <p class="para">        <em>SQLSTATE</em> 错误码。用<span class="function">{@link Exception::getCode()}</span> 来访问。       </p>      </dd>          </dl>    </div>     </div>   <div class="up"><a href="http://php.net/manual/zh/book.pdo.php">PDO</a></div></div>
*/
class PDOException extends RuntimeException  {
	public $errorInfo;
}

/**
*<div id="class.pdo" class="reference">  <h1 class="title"> PDO 类</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)</p>      <div class="section" id="pdo.intro">    <h2 class="title">简介</h2>    <p class="para">    代表 PHP 和数据库服务之间的一个连接    </p>   </div>      <div class="section" id="pdo.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">PDO</strong>      </span>      {</div>        <div class="constructorsynopsis dc-description">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dsn</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$username</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$password</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$driver_options</span></span>   ]]] )</div>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.begintransaction.php" class="methodname" style="color:#CC7832">beginTransaction</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.commit.php" class="methodname" style="color:#CC7832">commit</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.errorcode.php" class="methodname" style="color:#CC7832">errorCode</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.errorinfo.php" class="methodname" style="color:#CC7832">errorInfo</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.exec.php" class="methodname" style="color:#CC7832">exec</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$statement</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.getattribute.php" class="methodname" style="color:#CC7832">getAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$attribute</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span>  <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.getavailabledrivers.php" class="methodname" style="color:#CC7832">getAvailableDrivers</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.intransaction.php" class="methodname" style="color:#CC7832">inTransaction</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.lastinsertid.php" class="methodname" style="color:#CC7832">lastInsertId</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span><span class="initializer"> = <strong><span>NULL</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">PDOStatement</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.prepare.php" class="methodname" style="color:#CC7832">prepare</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$statement</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$driver_options</span><span class="initializer"> = array()</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">PDOStatement</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.query.php" class="methodname" style="color:#CC7832">query</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$statement</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.quote.php" class="methodname" style="color:#CC7832">quote</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$string</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$parameter_type</span><span class="initializer"> = PDO::PARAM_STR</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.rollback.php" class="methodname" style="color:#CC7832">rollBack</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdo.setattribute.php" class="methodname" style="color:#CC7832">setAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$attribute</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div>        }</div>   </div>    </div>                                                                                                                                      <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link PDO::beginTransaction} — 启动一个事务</li><li>{@link PDO::commit} — 提交一个事务</li><li>{@link PDO::__construct} — 创建一个表示数据库连接的 PDO 实例</li><li>{@link PDO::errorCode} — 获取跟数据库句柄上一次操作相关的 SQLSTATE</li><li>{@link PDO::errorInfo} — Fetch extended error information associated with the last operation on the database handle</li><li>{@link PDO::exec} — 执行一条 SQL 语句，并返回受影响的行数</li><li>{@link PDO::getAttribute} — 取回一个数据库连接的属性</li><li>{@link PDO::getAvailableDrivers} — 返回一个可用驱动的数组</li><li>{@link PDO::inTransaction} — 检查是否在一个事务内</li><li>{@link PDO::lastInsertId} — 返回最后插入行的ID或序列值</li><li>{@link PDO::prepare} — 准备要执行的语句，并返回语句对象</li><li>{@link PDO::query} — 执行 SQL 语句，以 PDOStatement 对象形式返回结果集</li><li>{@link PDO::quote} — 为 SQL 查询里的字符串添加引号</li><li>{@link PDO::rollBack} — 回滚一个事务</li><li>{@link PDO::setAttribute} — 设置属性</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.pdo.php">PDO</a></div></div>
*/
class PDO  {

	/**
	 * Represents a boolean data type.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-bool
	 */
	const PARAM_BOOL = 5;

	/**
	 * Represents the SQL NULL data type.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-null
	 */
	const PARAM_NULL = 0;

	/**
	 * Represents the SQL INTEGER data type.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-int
	 */
	const PARAM_INT = 1;

	/**
	 * Represents the SQL CHAR, VARCHAR, or other string data type.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-str
	 */
	const PARAM_STR = 2;

	/**
	 * Flag to denote a string uses the national character set.
	 * @since 7.2
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-str-natl
	 */
	const PARAM_STR_NATL = 1073741824;

	/**
	 * Flag to denote a string uses the regular character set.
	 * @since 7.2
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-str-char
	 */
	const PARAM_STR_CHAR = 536870912;

	/**
	 * Sets the default string parameter type, this can be one of PDO::PARAM_STR_NATL and PDO::PARAM_STR_CHAR.
	 * @since 7.2
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-default-str-param
	 */
	const ATTR_DEFAULT_STR_PARAM = 21;

	/**
	 * Specifies that a function created with PDO::sqliteCreateFunction() is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement.
	 * @since 7.1.4
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.sqlite-deterministic
	 */
	const SQLITE_DETERMINISTIC = 2048;

	/**
	 * Represents the SQL large object data type.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-lob
	 */
	const PARAM_LOB = 3;

	/**
	 * Represents a recordset type. Not currently supported by any drivers.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-stmt
	 */
	const PARAM_STMT = 4;

	/**
	 * Specifies that the parameter is an INOUT parameter for a stored
	 * procedure. You must bitwise-OR this value with an explicit
	 * PDO::PARAM_* data type.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-input-output
	 */
	const PARAM_INPUT_OUTPUT = 2147483648;

	/**
	 * Allocation event
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-alloc
	 */
	const PARAM_EVT_ALLOC = 0;

	/**
	 * Deallocation event
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-free
	 */
	const PARAM_EVT_FREE = 1;

	/**
	 * Event triggered prior to execution of a prepared statement.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-exec-pre
	 */
	const PARAM_EVT_EXEC_PRE = 2;

	/**
	 * Event triggered subsequent to execution of a prepared statement.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-exec-post
	 */
	const PARAM_EVT_EXEC_POST = 3;

	/**
	 * Event triggered prior to fetching a result from a resultset.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-fetch-pre
	 */
	const PARAM_EVT_FETCH_PRE = 4;

	/**
	 * Event triggered subsequent to fetching a result from a resultset.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-fetch-post
	 */
	const PARAM_EVT_FETCH_POST = 5;

	/**
	 * Event triggered during bound parameter registration
	 * allowing the driver to normalize the parameter name.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-normalize
	 */
	const PARAM_EVT_NORMALIZE = 6;

	/**
	 * Specifies that the fetch method shall return each row as an object with
	 * variable names that correspond to the column names returned in the result
	 * set. <b>PDO::FETCH_LAZY</b> creates the object variable names as they are accessed.
	 * Not valid inside <b>PDOStatement::fetchAll</b>.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-lazy
	 */
	const FETCH_LAZY = 1;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by column name as returned in the corresponding result set. If the result
	 * set contains multiple columns with the same name,
	 * <b>PDO::FETCH_ASSOC</b> returns
	 * only a single value per column name.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-assoc
	 */
	const FETCH_ASSOC = 2;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by column number as returned in the corresponding result set, starting at
	 * column 0.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-num
	 */
	const FETCH_NUM = 3;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by both column name and number as returned in the corresponding result set,
	 * starting at column 0.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-both
	 */
	const FETCH_BOTH = 4;

	/**
	 * Specifies that the fetch method shall return each row as an object with
	 * property names that correspond to the column names returned in the result
	 * set.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-obj
	 */
	const FETCH_OBJ = 5;

	/**
	 * Specifies that the fetch method shall return TRUE and assign the values of
	 * the columns in the result set to the PHP variables to which they were
	 * bound with the <b>PDOStatement::bindParam</b> or
	 * <b>PDOStatement::bindColumn</b> methods.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-bound
	 */
	const FETCH_BOUND = 6;

	/**
	 * Specifies that the fetch method shall return only a single requested
	 * column from the next row in the result set.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-column
	 */
	const FETCH_COLUMN = 7;

	/**
	 * Specifies that the fetch method shall return a new instance of the
	 * requested class, mapping the columns to named properties in the class.
	 * The magic
	 * <b>__set</b>
	 * method is called if the property doesn't exist in the requested class
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-class
	 */
	const FETCH_CLASS = 8;

	/**
	 * Specifies that the fetch method shall update an existing instance of the
	 * requested class, mapping the columns to named properties in the class.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-into
	 */
	const FETCH_INTO = 9;

	/**
	 * Allows completely customize the way data is treated on the fly (only
	 * valid inside <b>PDOStatement::fetchAll</b>).
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-func
	 */
	const FETCH_FUNC = 10;

	/**
	 * Group return by values. Usually combined with
	 * <b>PDO::FETCH_COLUMN</b> or
	 * <b>PDO::FETCH_KEY_PAIR</b>.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-group
	 */
	const FETCH_GROUP = 65536;

	/**
	 * Fetch only the unique values.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-unique
	 */
	const FETCH_UNIQUE = 196608;

	/**
	 * Fetch a two-column result into an array where the first column is a key and the second column
	 * is the value.
	 * @since 5.2.3
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-key-pair
	 */
	const FETCH_KEY_PAIR = 12;

	/**
	 * Determine the class name from the value of first column.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-classtype
	 */
	const FETCH_CLASSTYPE = 262144;

	/**
	 * As <b>PDO::FETCH_INTO</b> but object is provided as a serialized string.
	 * Available since PHP 5.1.0. Since PHP 5.3.0 the class constructor is never called if this
	 * flag is set.
	 * @since 5.1 Available
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-serialize
	 */
	const FETCH_SERIALIZE = 524288;

	/**
	 * Call the constructor before setting properties.
	 * @since 5.2.0
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-props-late
	 */
	const FETCH_PROPS_LATE = 1048576;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by column name as returned in the corresponding result set. If the result
	 * set contains multiple columns with the same name,
	 * <b>PDO::FETCH_NAMED</b> returns
	 * an array of values per column name.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-named
	 */
	const FETCH_NAMED = 11;

	/**
	 * If this value is <b>FALSE</b>, PDO attempts to disable autocommit so that the
	 * connection begins a transaction.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-autocommit
	 */
	const ATTR_AUTOCOMMIT = 0;

	/**
	 * Setting the prefetch size allows you to balance speed against memory
	 * usage for your application. Not all database/driver combinations support
	 * setting of the prefetch size. A larger prefetch size results in
	 * increased performance at the cost of higher memory usage.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-prefetch
	 */
	const ATTR_PREFETCH = 1;

	/**
	 * Sets the timeout value in seconds for communications with the database.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-timeout
	 */
	const ATTR_TIMEOUT = 2;

	/**
	 * @see http://php.net/manual/en/pdo.error-handling.php Errors and error handling
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-errmode
	 */
	const ATTR_ERRMODE = 3;

	/**
	 * This is a read only attribute; it will return information about the
	 * version of the database server to which PDO is connected.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-
	 */
	const ATTR_SERVER_VERSION = 4;

	/**
	 * This is a read only attribute; it will return information about the
	 * version of the client libraries that the PDO driver is using.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-client-version
	 */
	const ATTR_CLIENT_VERSION = 5;

	/**
	 * This is a read only attribute; it will return some meta information about the
	 * database server to which PDO is connected.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-server-info
	 */
	const ATTR_SERVER_INFO = 6;
	const ATTR_CONNECTION_STATUS = 7;

	/**
	 * Force column names to a specific case specified by the PDO::CASE_*
	 * constants.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-case
	 */
	const ATTR_CASE = 8;

	/**
	 * Get or set the name to use for a cursor. Most useful when using
	 * scrollable cursors and positioned updates.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-cursor-name
	 */
	const ATTR_CURSOR_NAME = 9;

	/**
	 * Selects the cursor type. PDO currently supports either
	 * <b>PDO::CURSOR_FWDONLY</b> and
	 * <b>PDO::CURSOR_SCROLL</b>. Stick with
	 * <b>PDO::CURSOR_FWDONLY</b> unless you know that you need a
	 * scrollable cursor.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-cursor
	 */
	const ATTR_CURSOR = 10;

	/**
	 * Convert empty strings to SQL NULL values on data fetches.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-oracle-nulls
	 */
	const ATTR_ORACLE_NULLS = 11;

	/**
	 * Request a persistent connection, rather than creating a new connection.
	 * @see http://php.net/manual/en/pdo.connections.php Connections and Connection Management
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-persistent
	 */
	const ATTR_PERSISTENT = 12;

	/**
	 * Sets the class name of which statements are returned as.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-statement-class
	 */
	const ATTR_STATEMENT_CLASS = 13;

	/**
	 * Prepend the containing table name to each column name returned in the
	 * result set. The table name and column name are separated by a decimal (.)
	 * character. Support of this attribute is at the driver level; it may not
	 * be supported by your driver.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-fetch-table-names
	 */
	const ATTR_FETCH_TABLE_NAMES = 14;

	/**
	 * Prepend the containing catalog name to each column name returned in the
	 * result set. The catalog name and column name are separated by a decimal
	 * (.) character. Support of this attribute is at the driver level; it may
	 * not be supported by your driver.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-fetch-catalog-names
	 */
	const ATTR_FETCH_CATALOG_NAMES = 15;

	/**
	 * Returns the name of the driver.
	 * <p>
	 * using <b>PDO::ATTR_DRIVER_NAME</b>
	 * <code>
	 * if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	 * echo "Running on mysql; doing something mysql specific here\n";
	 * }
	 * </code>
	 * </p>
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-driver-name
	 */
	const ATTR_DRIVER_NAME = 16;

	/**
	 * Forces all values fetched to be treated as strings.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-stringify-fetches
	 */
	const ATTR_STRINGIFY_FETCHES = 17;

	/**
	 * Sets the maximum column name length.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-max-column-len
	 */
	const ATTR_MAX_COLUMN_LEN = 18;

	/**
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-emulate-prepares
	 * @since 5.1.3
	 */
	const ATTR_EMULATE_PREPARES = 20;

	/**
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.attr-default-fetch-mode
	 * @since 5.2.0
	 */
	const ATTR_DEFAULT_FETCH_MODE = 19;

	/**
	 * Do not raise an error or exception if an error occurs. The developer is
	 * expected to explicitly check for errors. This is the default mode.
	 * @see http://php.net/manual/en/pdo.error-handling.php  Errors and Error Handling
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.errmode-silent
	 */
	const ERRMODE_SILENT = 0;

	/**
	 * Issue a PHP <b>E_WARNING</b> message if an error occurs.
	 * @see http://php.net/manual/en/pdo.error-handling.php  Errors and Error Handling
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.errmode-warning
	 */
	const ERRMODE_WARNING = 1;

	/**
	 * Throw a <b>PDOException</b> if an error occurs.
	 * @see http://php.net/manual/en/pdo.error-handling.php  Errors and Error Handling
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.errmode-exception
	 */
	const ERRMODE_EXCEPTION = 2;

	/**
	 * Leave column names as returned by the database driver.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.case-natural
	 */
	const CASE_NATURAL = 0;

	/**
	 * Force column names to lower case.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.case-lower
	 */
	const CASE_LOWER = 2;

	/**
	 * Force column names to upper case.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.case-upper
	 */
	const CASE_UPPER = 1;

	/**
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.null-natural
	 */
	const NULL_NATURAL = 0;

	/**
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.null-empty-string
	 */
	const NULL_EMPTY_STRING = 1;

	/**
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.null-to-string
	 */
	const NULL_TO_STRING = 2;

	/**
	 * Corresponds to SQLSTATE '00000', meaning that the SQL statement was
	 * successfully issued with no errors or warnings. This constant is for
	 * your convenience when checking <b>PDO::errorCode</b> or
	 * <b>PDOStatement::errorCode</b> to determine if an error
	 * occurred. You will usually know if this is the case by examining the
	 * return code from the method that raised the error condition anyway.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.err-none
	 */
	const ERR_NONE = 00000;

	/**
	 * Fetch the next row in the result set. Valid only for scrollable cursors.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-next
	 */
	const FETCH_ORI_NEXT = 0;

	/**
	 * Fetch the previous row in the result set. Valid only for scrollable
	 * cursors.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-prior
	 */
	const FETCH_ORI_PRIOR = 1;

	/**
	 * Fetch the first row in the result set. Valid only for scrollable cursors.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-first
	 */
	const FETCH_ORI_FIRST = 2;

	/**
	 * Fetch the last row in the result set. Valid only for scrollable cursors.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-last
	 */
	const FETCH_ORI_LAST = 3;

	/**
	 * Fetch the requested row by row number from the result set. Valid only
	 * for scrollable cursors.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-abs
	 */
	const FETCH_ORI_ABS = 4;

	/**
	 * Fetch the requested row by relative position from the current position
	 * of the cursor in the result set. Valid only for scrollable cursors.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-rel
	 */
	const FETCH_ORI_REL = 5;

	/**
	 * Create a <b>PDOStatement</b> object with a forward-only cursor. This is the
	 * default cursor choice, as it is the fastest and most common data access
	 * pattern in PHP.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.cursor-fwdonly
	 */
	const CURSOR_FWDONLY = 0;

	/**
	 * Create a <b>PDOStatement</b> object with a scrollable cursor. Pass the
	 * PDO::FETCH_ORI_* constants to control the rows fetched from the result set.
	 * @link http://php.net/manual/en/pdo.constants.php#pdo.constants.cursor-scroll
	 */
	const CURSOR_SCROLL = 1;

	/**
	 * If this attribute is set to <b>TRUE</b> on a
	 * <b>PDOStatement</b>, the MySQL driver will use the
	 * buffered versions of the MySQL API. If you're writing portable code, you
	 * should use <b>PDOStatement::fetchAll</b> instead.
	 * <p>
	 * Forcing queries to be buffered in mysql
	 * <code>
	 * if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	 * $stmt = $db->prepare('select * from foo',
	 * array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
	 * } else {
	 * die("my application only works with mysql; I should use \$stmt->fetchAll() instead");
	 * }
	 * </code>
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-use-buffered-query
	 */
	const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;

	/**
	 * <p>
	 * Enable LOAD LOCAL INFILE.
	 * </p>
	 * <p>
	 * Note, this constant can only be used in the <i>driver_options</i>
	 * array when constructing a new database handle.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-local-infile
	 */
	const MYSQL_ATTR_LOCAL_INFILE = 1001;

	/**
	 * <p>
	 * Command to execute when connecting to the MySQL server. Will
	 * automatically be re-executed when reconnecting.
	 * </p>
	 * <p>
	 * Note, this constant can only be used in the <i>driver_options</i>
	 * array when constructing a new database handle.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-init-command
	 */
	const MYSQL_ATTR_INIT_COMMAND = 1002;

	/**
	 * <p>
	 * Maximum buffer size. Defaults to 1 MiB. This constant is not supported when
	 * compiled against mysqlnd.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-max-buffer-size
	 */
	const MYSQL_ATTR_MAX_BUFFER_SIZE = 1005;

	/**
	 * <p>
	 * Read options from the named option file instead of from
	 * my.cnf. This option is not available if
	 * mysqlnd is used, because mysqlnd does not read the mysql
	 * configuration files.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-read-default-file
	 */
	const MYSQL_ATTR_READ_DEFAULT_FILE = 1003;

	/**
	 * <p>
	 * Read options from the named group from my.cnf or the
	 * file specified with <b>MYSQL_READ_DEFAULT_FILE</b>. This option
	 * is not available if mysqlnd is used, because mysqlnd does not read the mysql
	 * configuration files.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-read-default-group
	 */
	const MYSQL_ATTR_READ_DEFAULT_GROUP = 1004;

	/**
	 * <p>
	 * Enable network communication compression. This is not supported when
	 * compiled against mysqlnd.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-compress
	 */
	const MYSQL_ATTR_COMPRESS = 1006;

	/**
	 * <p>
	 * Perform direct queries, don't use prepared statements.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-direct-query
	 */
	const MYSQL_ATTR_DIRECT_QUERY = 1007;

	/**
	 * <p>
	 * Return the number of found (matched) rows, not the
	 * number of changed rows.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-found-rows
	 */
	const MYSQL_ATTR_FOUND_ROWS = 1008;

	/**
	 * <p>
	 * Permit spaces after function names. Makes all functions
	 * names reserved words.
	 * </p>
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ignore-space
	 */
	const MYSQL_ATTR_IGNORE_SPACE = 1009;

	/**
	 * <p>
	 * The file path to the SSL key.
	 * </p>
	 * @since 5.3.7
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-key
	 */
	const MYSQL_ATTR_SSL_KEY = 1010;

	/**
	 * <p>
	 * The file path to the SSL certificate.
	 * </p>
	 * @since 5.3.7
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-cert
	 */
	const MYSQL_ATTR_SSL_CERT = 1011;

	/**
	 * <p>
	 * The file path to the SSL certificate authority.
	 * </p>
	 * @since 5.3.7
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-ca
	 */
	const MYSQL_ATTR_SSL_CA = 1012;

	/**
	 * <p>
	 * The file path to the directory that contains the trusted SSL
	 * CA certificates, which are stored in PEM format.
	 * </p>
	 * @since 5.3.7
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-capath
	 */
	const MYSQL_ATTR_SSL_CAPATH = 1013;

	/**
	 * <p>
	 * A list of one or more permissible ciphers to use for SSL encryption,
	 * in a format understood by OpenSSL.
	 * For example: DHE-RSA-AES256-SHA:AES128-SHA
	 * </p>
	 * @since 5.3.7
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-cipher
	 */
	const MYSQL_ATTR_SSL_CIPHER = 1014;

	/**
	 * <p>
	 * Disables multi query execution in both {@see PDO::prepare()} and {@see PDO::query()} when set to FALSE.
	 * </p>
	 * <p>
	 * Note, this constant can only be used in the driver_options array when constructing a new database handle.
	 * </p>
	 * @since 5.5.21 and 5.6.5
	 * @link http://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-multi-statements
	 */
	const MYSQL_ATTR_MULTI_STATEMENTS = 1015;

	/**
	 * @deprecated 5.6.0 Use PDO::ATTR_EMULATE_PREPARES instead.
	 */
	const PGSQL_ASSOC = 1;
	const PGSQL_ATTR_DISABLE_NATIVE_PREPARED_STATEMENT = 1000;
	const PGSQL_BAD_RESPONSE = 5;
	const PGSQL_BOTH = 3;
	const PGSQL_TRANSACTION_IDLE = 0;
	const PGSQL_TRANSACTION_ACTIVE = 1;
	const PGSQL_TRANSACTION_INTRANS = 2;
	const PGSQL_TRANSACTION_INERROR = 3;
	const PGSQL_TRANSACTION_UNKNOWN = 4;

	const PGSQL_CONNECT_ASYNC = 4;
	const PGSQL_CONNECT_FORCE_NEW = 2;
	const PGSQL_CONNECTION_AUTH_OK = 5;
	const PGSQL_CONNECTION_AWAITING_RESPONSE = 4;
	const PGSQL_CONNECTION_BAD = 1;
	const PGSQL_CONNECTION_OK = 0;
	const PGSQL_CONNECTION_MADE = 3;
	const PGSQL_CONNECTION_SETENV = 6;
	const PGSQL_CONNECTION_SSL_STARTUP = 7;
	const PGSQL_CONNECTION_STARTED = 2;
	const PGSQL_COMMAND_OK = 1;
	const PGSQL_CONV_FORCE_NULL = 4;
	const PGSQL_CONV_IGNORE_DEFAULT = 2;
	const PGSQL_CONV_IGNORE_NOT_NULL = 8;
	const PGSQL_COPY_IN = 4;
	const PGSQL_COPY_OUT = 3;
	const PGSQL_DIAG_CONTEXT = 87;
	const PGSQL_DIAG_INTERNAL_POSITION = 112;
	const PGSQL_DIAG_INTERNAL_QUERY = 113;
	const PGSQL_DIAG_MESSAGE_DETAIL = 68;
	const PGSQL_DIAG_MESSAGE_HINT = 72;
	const PGSQL_DIAG_MESSAGE_PRIMARY = 77;
	const PGSQL_DIAG_SEVERITY = 83;
	const PGSQL_DIAG_SOURCE_FILE = 70;
	const PGSQL_DIAG_SOURCE_FUNCTION = 82;
	const PGSQL_DIAG_SOURCE_LINE = 76;
	const PGSQL_DIAG_SQLSTATE = 67;
	const PGSQL_DIAG_STATEMENT_POSITION = 80;
	const PGSQL_DML_ASYNC = 1024;
	const PGSQL_DML_EXEC = 512;
	const PGSQL_DML_NO_CONV = 256;
	const PGSQL_DML_STRING = 2048;
	const PGSQL_DML_ESCAPE = 4096;
	const PGSQL_EMPTY_QUERY = 0;
	const PGSQL_ERRORS_DEFAULT = 1;
	const PGSQL_ERRORS_TERSE = 0;
	const PGSQL_ERRORS_VERBOSE = 2;
	const PGSQL_FATAL_ERROR = 7;
	const PGSQL_NONFATAL_ERROR = 6;
	const PGSQL_NOTICE_ALL = 2;
	const PGSQL_NOTICE_CLEAR = 3;
	const PGSQL_NOTICE_LAST = 1;
	const PGSQL_NUM = 2;
	const PGSQL_POLLING_ACTIVE = 4;
	const PGSQL_POLLING_FAILED = 0;
	const PGSQL_POLLING_OK = 3;
	const PGSQL_POLLING_READING = 1;
	const PGSQL_POLLING_WRITING = 2;
	const PGSQL_SEEK_CUR = 1;
	const PGSQL_SEEK_END = 2;
	const PGSQL_SEEK_SET = 0;
	const PGSQL_STATUS_LONG = 1;
	const PGSQL_STATUS_STRING = 2;
	const PGSQL_TUPLES_OK = 2;
	const SQLSRV_TXN_READ_UNCOMMITTED = "READ_UNCOMMITTED";
	const SQLSRV_TXN_READ_COMMITTED = "READ_COMMITTED";
	const SQLSRV_TXN_REPEATABLE_READ = "REPEATABLE_READ";
	const SQLSRV_TXN_SNAPSHOT = "SNAPSHOT";
	const SQLSRV_TXN_SERIALIZABLE = "SERIALIZABLE";
	const SQLSRV_ENCODING_BINARY = 2;
	const SQLSRV_ENCODING_SYSTEM = 3;
	const SQLSRV_ENCODING_UTF8 = 65001;
	const SQLSRV_ENCODING_DEFAULT = 1;
	const SQLSRV_ATTR_QUERY_TIMEOUT = 1001;
	const SQLSRV_ATTR_DIRECT_QUERY = 1002;

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Creates a PDO instance representing a connection to a database
	 * @link http://php.net/manual/en/pdo.construct.php
	 * @param string $dsn
	 * @param string $username [optional]
	 * @param string $passwd [optional]
	 * @param array $options [optional]
	 */
	public function __construct ($dsn, $username, $passwd, $options) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Prepares a statement for execution and returns a statement object
	 * @link http://php.net/manual/en/pdo.prepare.php
	 * @param string $statement <p>
	 * This must be a valid SQL statement for the target database server.
	 * </p>
	 * @param array $driver_options [optional] <p>
	 * This array holds one or more key=&gt;value pairs to set
	 * attribute values for the <b>PDOStatement</b> object that this method
	 * returns. You would most commonly use this to set the
	 * <b>PDO::ATTR_CURSOR</b> value to
	 * <b>PDO::CURSOR_SCROLL</b> to request a scrollable cursor.
	 * Some drivers have driver specific options that may be set at
	 * prepare-time.
	 * </p>
	 * @return PDOStatement|bool If the database server successfully prepares the statement,
	 * <b>PDO::prepare</b> returns a
	 * <b>PDOStatement</b> object.
	 * If the database server cannot successfully prepare the statement,
	 * <b>PDO::prepare</b> returns <b>FALSE</b> or emits
	 * <b>PDOException</b> (depending on error handling).
	 * </p>
	 * <p>
	 * Emulated prepared statements does not communicate with the database server
	 * so <b>PDO::prepare</b> does not check the statement.
	 */
	public function prepare ($statement, array $driver_options = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Initiates a transaction
	 * <p>
	 * Turns off autocommit mode. While autocommit mode is turned off,
	 * changes made to the database via the PDO object instance are not committed
	 * until you end the transaction by calling {@link PDO::commit()}.
	 * Calling {@link PDO::rollBack()} will roll back all changes to the database and
	 * return the connection to autocommit mode.
	 * </p>
	 * <p>
	 * Some databases, including MySQL, automatically issue an implicit COMMIT
	 * when a database definition language (DDL) statement
	 * such as DROP TABLE or CREATE TABLE is issued within a transaction.
	 * The implicit COMMIT will prevent you from rolling back any other changes
	 * within the transaction boundary.
	 * </p>
	 * @link http://php.net/manual/en/pdo.begintransaction.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @throws PDOException If there is already a transaction started or
	 * the driver does not support transactions <br/>
	 * <b>Note</b>: An exception is raised even when the <b>PDO::ATTR_ERRMODE</b>
	 * attribute is not <b>PDO::ERRMODE_EXCEPTION</b>.
	 */
	public function beginTransaction () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Commits a transaction
	 * @link http://php.net/manual/en/pdo.commit.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function commit () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Rolls back a transaction
	 * @link http://php.net/manual/en/pdo.rollback.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function rollBack () {}

	/**
	 * (PHP 5 &gt;= 5.3.3, Bundled pdo_pgsql, PHP 7)<br/>
	 * Checks if inside a transaction
	 * @link http://php.net/manual/en/pdo.intransaction.php
	 * @return bool <b>TRUE</b> if a transaction is currently active, and <b>FALSE</b> if not.
	 */
	public function inTransaction () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Set an attribute
	 * @link http://php.net/manual/en/pdo.setattribute.php
	 * @param int $attribute
	 * @param mixed $value
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setAttribute ($attribute, $value) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Execute an SQL statement and return the number of affected rows
	 * @link http://php.net/manual/en/pdo.exec.php
	 * @param string $statement <p>
	 * The SQL statement to prepare and execute.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @return int <b>PDO::exec</b> returns the number of rows that were modified
	 * or deleted by the SQL statement you issued. If no rows were affected,
	 * <b>PDO::exec</b> returns 0.
	 * </p>
	 * This function may
	 * return Boolean <b>FALSE</b>, but may also return a non-Boolean value which
	 * evaluates to <b>FALSE</b>. Please read the section on Booleans for more
	 * information. Use the ===
	 * operator for testing the return value of this
	 * function.
	 * <p>
	 * The following example incorrectly relies on the return value of
	 * <b>PDO::exec</b>, wherein a statement that affected 0 rows
	 * results in a call to <b>die</b>:
	 * <code>
	 * $db->exec() or die(print_r($db->errorInfo(), true));
	 * </code>
	 */
/**
*<div id="function.exec" class="refentry">  <div class="refnamediv">   <h1 class="refname">exec</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">exec</span> &mdash; <span class="dc-title">执行一个外部程序</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.exec-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>exec</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$command</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$output</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">&$return_var</span></span>   ]] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">exec()</strong></span> 执行    <span class="parameter" style="color:#2EACF9">command</span> 参数所指定的命令。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.exec-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">command</span></dt>       <dd>        <p class="para">        要执行的命令。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">output</span></dt>       <dd>        <p class="para">         如果提供了 <span class="parameter" style="color:#2EACF9">output</span> 参数，         那么会用命令执行的输出填充此数组，         每行输出填充数组中的一个元素。         数组中的数据不包含行尾的空白字符，例如 <em>\n</em> 字符。         请注意，如果数组中已经包含了部分元素，<span class="function"><strong style="color:#CC7832">exec()</strong></span>         函数会在数组末尾追加内容。如果你不想在数组末尾进行追加，         请在传入 <span class="function"><strong style="color:#CC7832">exec()</strong></span> 函数之前         对数组使用 <span class="function">{@link unset()}</span> 函数进行重置。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">return_var</span></dt>       <dd>        <p class="para">         如果同时提供          <span class="parameter" style="color:#2EACF9">output</span>  和          <span class="parameter" style="color:#2EACF9">return_var</span> 参数，         命令执行后的返回状态会被写入到此变量。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.exec-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     命令执行结果的最后一行内容。     如果你需要获取未经处理的全部输出数据，     请使用 <span class="function">{@link passthru()}</span> 函数。   </p>   <p class="para">     如果想要获取命令的输出内容，     请确保使用 <span class="parameter" style="color:#2EACF9">output</span> 参数。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.exec-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-4355">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">exec()</strong></span> 例程</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;输出运行中的&nbsp;php/httpd&nbsp;进程的创建者用户名<br />//&nbsp;（在可以执行&nbsp;"whoami"&nbsp;命令的系统上）<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'whoami'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.exec-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong><p class="para">当用户提供的数据传入此函数，使用 <span class="function">{@link escapeshellarg()}</span> 或 <span class="function">{@link escapeshellcmd()}</span> 来确保用户欺骗系统从而执行任意命令。</p></div>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <p class="para">如何程序使用此函数启动，为了能保持在后台运行，此程序必须将输出重定向到文件或其它输出流。否则会导致 PHP 挂起，直至程序执行结束。</p></p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <p class="para">On Windows <span class="function"><strong style="color:#CC7832">exec()</strong></span> will first start cmd.exe to launch the command. If you want to start an external program without starting cmd.exe use <span class="function">{@link proc_open()}</span> with the <span class="parameter" style="color:#2EACF9">bypass_shell</span> option set.</p></p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <span class="simpara"><a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 启用时，可仅可用 <a href="http://php.net/manual/zh/ini.sect.safe-mode.php#ini.safe-mode-exec-dir" class="link">safe_mode_exec_dir</a> 执行文件。实际上，现在不允许在到可执行的路径中存在 <em>..</em> 组件。</span></p></blockquote>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara"><a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 启用时，命令字符串会被 <span class="function">{@link escapeshellcmd()}</span> 转换。因此，<em>echo y | echo x</em> 会变成 <em>echo y \| echo x</em>。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.exec-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link system()} - 执行外部程序，并且显示输出</span></li>     <li class="member"><span class="function">{@link passthru()} - 执行外部程序并且显示原始输出</span></li>     <li class="member"><span class="function">{@link escapeshellcmd()} - shell 元字符转义</span></li>     <li class="member"><span class="function">{@link pcntl_exec()} - 在当前进程空间执行指定程序</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.operators.execution.php" class="link">执行运算符</a></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.exec.php">程序执行函数</a></div></div>
*/
	public function exec ($statement) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Executes an SQL statement, returning a result set as a PDOStatement object
	 * @link http://php.net/manual/en/pdo.query.php
	 * @param string $statement <p>
	 * The SQL statement to prepare and execute.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @param int $mode <p>
	 * The fetch mode must be one of the PDO::FETCH_* constants.
	 * </p>
	 * @param mixed $arg3 <p>
	 * The second and following parameters are the same as the parameters for PDOStatement::setFetchMode.
	 * </p>
	 * @param array $ctorargs [optional] <p>
	 * Arguments of custom class constructor when the <i>mode</i>
	 * parameter is set to <b>PDO::FETCH_CLASS</b>.
	 * </p>
	 * @return PDOStatement|bool <b>PDO::query</b> returns a PDOStatement object, or <b>FALSE</b>
	 * on failure.
	 * @see PDOStatement::setFetchMode For a full description of the second and following parameters.
	 */
	public function query ($statement, $mode = PDO::ATTR_DEFAULT_FETCH_MODE, $arg3 = null, array $ctorargs = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Returns the ID of the last inserted row or sequence value
	 * @link http://php.net/manual/en/pdo.lastinsertid.php
	 * @param string $name [optional] <p>
	 * Name of the sequence object from which the ID should be returned.
	 * </p>
	 * @return string If a sequence name was not specified for the <i>name</i>
	 * parameter, <b>PDO::lastInsertId</b> returns a
	 * string representing the row ID of the last row that was inserted into
	 * the database.
	 * </p>
	 * <p>
	 * If a sequence name was specified for the <i>name</i>
	 * parameter, <b>PDO::lastInsertId</b> returns a
	 * string representing the last value retrieved from the specified sequence
	 * object.
	 * </p>
	 * <p>
	 * If the PDO driver does not support this capability,
	 * <b>PDO::lastInsertId</b> triggers an
	 * IM001 SQLSTATE.
	 */
	public function lastInsertId ($name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch the SQLSTATE associated with the last operation on the database handle
	 * @link http://php.net/manual/en/pdo.errorcode.php
	 * @return mixed an SQLSTATE, a five characters alphanumeric identifier defined in
	 * the ANSI SQL-92 standard. Briefly, an SQLSTATE consists of a
	 * two characters class value followed by a three characters subclass value. A
	 * class value of 01 indicates a warning and is accompanied by a return code
	 * of SQL_SUCCESS_WITH_INFO. Class values other than '01', except for the
	 * class 'IM', indicate an error. The class 'IM' is specific to warnings
	 * and errors that derive from the implementation of PDO (or perhaps ODBC,
	 * if you're using the ODBC driver) itself. The subclass value '000' in any
	 * class indicates that there is no subclass for that SQLSTATE.
	 * </p>
	 * <p>
	 * <b>PDO::errorCode</b> only retrieves error codes for operations
	 * performed directly on the database handle. If you create a PDOStatement
	 * object through <b>PDO::prepare</b> or
	 * <b>PDO::query</b> and invoke an error on the statement
	 * handle, <b>PDO::errorCode</b> will not reflect that error.
	 * You must call <b>PDOStatement::errorCode</b> to return the error
	 * code for an operation performed on a particular statement handle.
	 * </p>
	 * <p>
	 * Returns <b>NULL</b> if no operation has been run on the database handle.
	 */
	public function errorCode () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch extended error information associated with the last operation on the database handle
	 * @link http://php.net/manual/en/pdo.errorinfo.php
	 * @return array <b>PDO::errorInfo</b> returns an array of error information
	 * about the last operation performed by this database handle. The array
	 * consists of the following fields:
	 * <tr valign="top">
	 * <td>Element</td>
	 * <td>Information</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>SQLSTATE error code (a five characters alphanumeric identifier defined
	 * in the ANSI SQL standard).</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>Driver-specific error code.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>Driver-specific error message.</td>
	 * </tr>
	 * </p>
	 * <p>
	 * If the SQLSTATE error code is not set or there is no driver-specific
	 * error, the elements following element 0 will be set to <b>NULL</b>.
	 * </p>
	 * <p>
	 * <b>PDO::errorInfo</b> only retrieves error information for
	 * operations performed directly on the database handle. If you create a
	 * PDOStatement object through <b>PDO::prepare</b> or
	 * <b>PDO::query</b> and invoke an error on the statement
	 * handle, <b>PDO::errorInfo</b> will not reflect the error
	 * from the statement handle. You must call
	 * <b>PDOStatement::errorInfo</b> to return the error
	 * information for an operation performed on a particular statement handle.
	 */
	public function errorInfo () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Retrieve a database connection attribute
	 * @link http://php.net/manual/en/pdo.getattribute.php
	 * @param int $attribute <p>
	 * One of the PDO::ATTR_* constants. The constants that
	 * apply to database connections are as follows:
	 * PDO::ATTR_AUTOCOMMIT
	 * PDO::ATTR_CASE
	 * PDO::ATTR_CLIENT_VERSION
	 * PDO::ATTR_CONNECTION_STATUS
	 * PDO::ATTR_DRIVER_NAME
	 * PDO::ATTR_ERRMODE
	 * PDO::ATTR_ORACLE_NULLS
	 * PDO::ATTR_PERSISTENT
	 * PDO::ATTR_PREFETCH
	 * PDO::ATTR_SERVER_INFO
	 * PDO::ATTR_SERVER_VERSION
	 * PDO::ATTR_TIMEOUT
	 * </p>
	 * @return mixed A successful call returns the value of the requested PDO attribute.
	 * An unsuccessful call returns null.
	 */
	public function getAttribute ($attribute) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.1)<br/>
	 * Quotes a string for use in a query.
	 * @link http://php.net/manual/en/pdo.quote.php
	 * @param string $string <p>
	 * The string to be quoted.
	 * </p>
	 * @param int $parameter_type [optional] <p>
	 * Provides a data type hint for drivers that have alternate quoting styles.
	 * </p>
	 * @return string a quoted string that is theoretically safe to pass into an
	 * SQL statement. Returns <b>FALSE</b> if the driver does not support quoting in
	 * this way.
	 */
	public function quote ($string, $parameter_type = PDO::PARAM_STR) {}

	final public function __wakeup () {}

	final public function __sleep () {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7, PECL pdo &gt;= 1.0.3)<br/>
	 * Return an array of available PDO drivers
	 * @link http://php.net/manual/en/pdo.getavailabledrivers.php
	 * @return array <b>PDO::getAvailableDrivers</b> returns an array of PDO driver names. If
	 * no drivers are available, it returns an empty array.
	 */
	public static function getAvailableDrivers () {}

}

/**
*<div id="class.pdostatement" class="reference">  <h1 class="title"> PDOStatement 类</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 1.0.0)</p>      <div class="section" id="pdostatement.intro">    <h2 class="title">简介</h2>    <p class="para">     代表一条预处理语句，并在该语句被执行后代表一个相关的结果集。    </p>   </div>      <div class="section" id="pdostatement.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">PDOStatement</strong>      </span>        <span class="oointerface">implements        <span class="interfacename"><strong class="interfacename">Traversable</strong></span>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis"><span class="modifier">readonly</span> <span class="type" style="color:#EAB766">string</span> <var class="varname"><a href="http://php.net/manual/zh/class.pdostatement.php#pdostatement.props.querystring">$<var class="varname">queryString</var></a></var>;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">     <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.bindcolumn.php" class="methodname" style="color:#CC7832">bindColumn</a></span>      ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$column</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$param</span></span>     [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span></span>     [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$maxlen</span></span>     [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$driverdata</span></span>    ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.bindparam.php" class="methodname" style="color:#CC7832">bindParam</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$parameter</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$variable</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$data_type</span><span class="initializer"> = PDO::PARAM_STR</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$length</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$driver_options</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.bindvalue.php" class="methodname" style="color:#CC7832">bindValue</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$parameter</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$data_type</span><span class="initializer"> = PDO::PARAM_STR</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.closecursor.php" class="methodname" style="color:#CC7832">closeCursor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.columncount.php" class="methodname" style="color:#CC7832">columnCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.debugdumpparams.php" class="methodname" style="color:#CC7832">debugDumpParams</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.errorcode.php" class="methodname" style="color:#CC7832">errorCode</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.errorinfo.php" class="methodname" style="color:#CC7832">errorInfo</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.execute.php" class="methodname" style="color:#CC7832">execute</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$input_parameters</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.fetch.php" class="methodname" style="color:#CC7832">fetch</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fetch_style</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$cursor_orientation</span><span class="initializer"> = PDO::FETCH_ORI_NEXT</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$cursor_offset</span><span class="initializer"> = 0</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.fetchall.php" class="methodname" style="color:#CC7832">fetchAll</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fetch_style</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$fetch_argument</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$ctor_args</span><span class="initializer"> = array()</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.fetchcolumn.php" class="methodname" style="color:#CC7832">fetchColumn</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$column_number</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.fetchobject.php" class="methodname" style="color:#CC7832">fetchObject</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$class_name</span><span class="initializer"> = &quot;stdClass&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$ctor_args</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.getattribute.php" class="methodname" style="color:#CC7832">getAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$attribute</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.getcolumnmeta.php" class="methodname" style="color:#CC7832">getColumnMeta</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$column</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.nextrowset.php" class="methodname" style="color:#CC7832">nextRowset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.rowcount.php" class="methodname" style="color:#CC7832">rowCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.setattribute.php" class="methodname" style="color:#CC7832">setAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$attribute</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/pdostatement.setfetchmode.php" class="methodname" style="color:#CC7832">setFetchMode</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    )</div>       }</div>    </div>     <div class="section" id="pdostatement.props">    <h2 class="title">属性</h2>    <dl>            <dt id="pdostatement.props.querystring"><var class="varname"><var class="varname">queryString</var></var></dt>       <dd>        <p class="para">        所用的查询字符串       </p>      </dd>          </dl>   </div>    </div>                                                                                                                                                                                  <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link PDOStatement::bindColumn} — 绑定一列到一个 PHP 变量</li><li>{@link PDOStatement::bindParam} — 绑定一个参数到指定的变量名</li><li>{@link PDOStatement::bindValue} — 把一个值绑定到一个参数</li><li>{@link PDOStatement::closeCursor} — 关闭游标，使语句能再次被执行。</li><li>{@link PDOStatement::columnCount} — 返回结果集中的列数</li><li>{@link PDOStatement::debugDumpParams} — 打印一条 SQL 预处理命令</li><li>{@link PDOStatement::errorCode} — 获取跟上一次语句句柄操作相关的 SQLSTATE</li><li>{@link PDOStatement::errorInfo} — 获取跟上一次语句句柄操作相关的扩展错误信息</li><li>{@link PDOStatement::execute} — 执行一条预处理语句</li><li>{@link PDOStatement::fetch} — 从结果集中获取下一行</li><li>{@link PDOStatement::fetchAll} — 返回一个包含结果集中所有行的数组</li><li>{@link PDOStatement::fetchColumn} — 从结果集中的下一行返回单独的一列。</li><li>{@link PDOStatement::fetchObject} — 获取下一行并作为一个对象返回。</li><li>{@link PDOStatement::getAttribute} — 检索一个语句属性</li><li>{@link PDOStatement::getColumnMeta} — 返回结果集中一列的元数据</li><li>{@link PDOStatement::nextRowset} — 在一个多行集语句句柄中推进到下一个行集</li><li>{@link PDOStatement::rowCount} — 返回受上一个 SQL 语句影响的行数</li><li>{@link PDOStatement::setAttribute} — 设置一个语句属性</li><li>{@link PDOStatement::setFetchMode} — 为语句设置默认的获取模式。</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.pdo.php">PDO</a></div></div>
*/
class PDOStatement implements Traversable {
	/**
	 * @var string
	 */
	public $queryString;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Executes a prepared statement
	 * @link http://php.net/manual/en/pdostatement.execute.php
	 * @param array $input_parameters [optional] <p>
	 * An array of values with as many elements as there are bound
	 * parameters in the SQL statement being executed.
	 * All values are treated as <b>PDO::PARAM_STR</b>.
	 * </p>
	 * <p>
	 * You cannot bind multiple values to a single parameter; for example,
	 * you cannot bind two values to a single named parameter in an IN()
	 * clause.
	 * </p>
	 * <p>
	 * You cannot bind more values than specified; if more keys exist in
	 * <i>input_parameters</i> than in the SQL specified
	 * in the <b>PDO::prepare</b>, then the statement will
	 * fail and an error is emitted.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function execute ($input_parameters = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetches the next row from a result set
	 * @link http://php.net/manual/en/pdostatement.fetch.php
	 * @param int $fetch_style [optional] <p>
	 * Controls how the next row will be returned to the caller. This value
	 * must be one of the PDO::FETCH_* constants,
	 * defaulting to value of PDO::ATTR_DEFAULT_FETCH_MODE
	 * (which defaults to PDO::FETCH_BOTH).
	 * <p>
	 * PDO::FETCH_ASSOC: returns an array indexed by column
	 * name as returned in your result set
	 * </p>
	 * @param int $cursor_orientation [optional] <p>
	 * For a PDOStatement object representing a scrollable cursor, this
	 * value determines which row will be returned to the caller. This value
	 * must be one of the PDO::FETCH_ORI_* constants,
	 * defaulting to PDO::FETCH_ORI_NEXT. To request a
	 * scrollable cursor for your PDOStatement object, you must set the
	 * PDO::ATTR_CURSOR attribute to
	 * PDO::CURSOR_SCROLL when you prepare the SQL
	 * statement with <b>PDO::prepare</b>.
	 * </p>
	 * @param int $cursor_offset [optional]
	 * @return mixed The return value of this function on success depends on the fetch type. In
	 * all cases, <b>FALSE</b> is returned on failure.
	 */
	public function fetch ($fetch_style = null, $cursor_orientation = PDO::FETCH_ORI_NEXT, $cursor_offset = 0) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Binds a parameter to the specified variable name
	 * @link http://php.net/manual/en/pdostatement.bindparam.php
	 * @param mixed $parameter <p>
	 * Parameter identifier. For a prepared statement using named
	 * placeholders, this will be a parameter name of the form
	 * :name. For a prepared statement using
	 * question mark placeholders, this will be the 1-indexed position of
	 * the parameter.
	 * </p>
	 * @param mixed $variable <p>
	 * Name of the PHP variable to bind to the SQL statement parameter.
	 * </p>
	 * @param int $data_type [optional] <p>
	 * Explicit data type for the parameter using the PDO::PARAM_*
	 * constants.
	 * To return an INOUT parameter from a stored procedure,
	 * use the bitwise OR operator to set the PDO::PARAM_INPUT_OUTPUT bits
	 * for the <i>data_type</i> parameter.
	 * </p>
	 * @param int $length [optional] <p>
	 * Length of the data type. To indicate that a parameter is an OUT
	 * parameter from a stored procedure, you must explicitly set the
	 * length.
	 * </p>
	 * @param mixed $driver_options [optional] <p>
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function bindParam ($parameter, &$variable, $data_type = PDO::PARAM_STR, $length = null, $driver_options = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Bind a column to a PHP variable
	 * @link http://php.net/manual/en/pdostatement.bindcolumn.php
	 * @param mixed $column <p>
	 * Number of the column (1-indexed) or name of the column in the result set.
	 * If using the column name, be aware that the name should match the
	 * case of the column, as returned by the driver.
	 * </p>
	 * @param mixed $param <p>
	 * Name of the PHP variable to which the column will be bound.
	 * </p>
	 * @param int $type [optional] <p>
	 * Data type of the parameter, specified by the PDO::PARAM_* constants.
	 * </p>
	 * @param int $maxlen [optional] <p>
	 * A hint for pre-allocation.
	 * </p>
	 * @param mixed $driverdata [optional] <p>
	 * Optional parameter(s) for the driver.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function bindColumn ($column, &$param, $type = null, $maxlen = null, $driverdata = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 1.0.0)<br/>
	 * Binds a value to a parameter
	 * @link http://php.net/manual/en/pdostatement.bindvalue.php
	 * @param mixed $parameter <p>
	 * Parameter identifier. For a prepared statement using named
	 * placeholders, this will be a parameter name of the form
	 * :name. For a prepared statement using
	 * question mark placeholders, this will be the 1-indexed position of
	 * the parameter.
	 * </p>
	 * @param mixed $value <p>
	 * The value to bind to the parameter.
	 * </p>
	 * @param int $data_type [optional] <p>
	 * Explicit data type for the parameter using the PDO::PARAM_*
	 * constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function bindValue ($parameter, $value, $data_type = PDO::PARAM_STR) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Returns the number of rows affected by the last SQL statement
	 * @link http://php.net/manual/en/pdostatement.rowcount.php
	 * @return int the number of rows.
	 */
	public function rowCount () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * Returns a single column from the next row of a result set
	 * @link http://php.net/manual/en/pdostatement.fetchcolumn.php
	 * @param int $column_number [optional] <p>
	 * 0-indexed number of the column you wish to retrieve from the row. If
	 * no value is supplied, <b>PDOStatement::fetchColumn</b>
	 * fetches the first column.
	 * </p>
	 * @return mixed Returns a single column from the next row of a result
	 * set or FALSE if there are no more rows.
	 * </p>
	 * <p>
	 * There is no way to return another column from the same row if you
	 * use <b>PDOStatement::fetchColumn</b> to retrieve data.
	 */
	public function fetchColumn ($column_number = 0) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Returns an array containing all of the result set rows
	 * @link http://php.net/manual/en/pdostatement.fetchall.php
	 * @param int $fetch_style [optional] <p>
	 * Controls the contents of the returned array as documented in
	 * <b>PDOStatement::fetch</b>.
	 * Defaults to value of <b>PDO::ATTR_DEFAULT_FETCH_MODE</b>
	 * (which defaults to <b>PDO::FETCH_BOTH</b>)
	 * </p>
	 * <p>
	 * To return an array consisting of all values of a single column from
	 * the result set, specify <b>PDO::FETCH_COLUMN</b>. You
	 * can specify which column you want with the
	 * <i>column-index</i> parameter.
	 * </p>
	 * <p>
	 * To fetch only the unique values of a single column from the result set,
	 * bitwise-OR <b>PDO::FETCH_COLUMN</b> with
	 * <b>PDO::FETCH_UNIQUE</b>.
	 * </p>
	 * <p>
	 * To return an associative array grouped by the values of a specified
	 * column, bitwise-OR <b>PDO::FETCH_COLUMN</b> with
	 * <b>PDO::FETCH_GROUP</b>.
	 * </p>
	 * @param mixed $fetch_argument [optional] <p>
	 * This argument have a different meaning depending on the value of
	 * the <i>fetch_style</i> parameter:
	 * <p>
	 * <b>PDO::FETCH_COLUMN</b>: Returns the indicated 0-indexed
	 * column.
	 * </p>
	 * @param array $ctor_args [optional] <p>
	 * Arguments of custom class constructor when the <i>fetch_style</i>
	 * parameter is <b>PDO::FETCH_CLASS</b>.
	 * </p>
	 * @return array <b>PDOStatement::fetchAll</b> returns an array containing
	 * all of the remaining rows in the result set. The array represents each
	 * row as either an array of column values or an object with properties
	 * corresponding to each column name.
	 * </p>
	 * <p>
	 * Using this method to fetch large result sets will result in a heavy
	 * demand on system and possibly network resources. Rather than retrieving
	 * all of the data and manipulating it in PHP, consider using the database
	 * server to manipulate the result sets. For example, use the WHERE and
	 * ORDER BY clauses in SQL to restrict results before retrieving and
	 * processing them with PHP.
	 */
	public function fetchAll ($fetch_style = null, $fetch_argument = null, array $ctor_args = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.4)<br/>
	 * Fetches the next row and returns it as an object.
	 * @link http://php.net/manual/en/pdostatement.fetchobject.php
	 * @param string $class_name [optional] <p>
	 * Name of the created class.
	 * </p>
	 * @param array $ctor_args [optional] <p>
	 * Elements of this array are passed to the constructor.
	 * </p>
	 * @return mixed an instance of the required class with property names that
	 * correspond to the column names or <b>FALSE</b> on failure.
	 */
	public function fetchObject ($class_name = "stdClass", array $ctor_args = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch the SQLSTATE associated with the last operation on the statement handle
	 * @link http://php.net/manual/en/pdostatement.errorcode.php
	 * @return string Identical to <b>PDO::errorCode</b>, except that
	 * <b>PDOStatement::errorCode</b> only retrieves error codes
	 * for operations performed with PDOStatement objects.
	 */
	public function errorCode () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch extended error information associated with the last operation on the statement handle
	 * @link http://php.net/manual/en/pdostatement.errorinfo.php
	 * @return array <b>PDOStatement::errorInfo</b> returns an array of
	 * error information about the last operation performed by this
	 * statement handle. The array consists of the following fields:
	 * <tr valign="top">
	 * <td>Element</td>
	 * <td>Information</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>SQLSTATE error code (a five characters alphanumeric identifier defined
	 * in the ANSI SQL standard).</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>Driver specific error code.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>Driver specific error message.</td>
	 * </tr>
	 */
	public function errorInfo () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Set a statement attribute
	 * @link http://php.net/manual/en/pdostatement.setattribute.php
	 * @param int $attribute
	 * @param mixed $value
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setAttribute ($attribute, $value) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Retrieve a statement attribute
	 * @link http://php.net/manual/en/pdostatement.getattribute.php
	 * @param int $attribute
	 * @return mixed the attribute value.
	 */
	public function getAttribute ($attribute) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Returns the number of columns in the result set
	 * @link http://php.net/manual/en/pdostatement.columncount.php
	 * @return int the number of columns in the result set represented by the
	 * PDOStatement object. If there is no result set,
	 * <b>PDOStatement::columnCount</b> returns 0.
	 */
	public function columnCount () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Returns metadata for a column in a result set
	 * @link http://php.net/manual/en/pdostatement.getcolumnmeta.php
	 * @param int $column <p>
	 * The 0-indexed column in the result set.
	 * </p>
	 * @return array an associative array containing the following values representing
	 * the metadata for a single column:
	 * </p>
	 * <table>
	 * Column metadata
	 * <tr valign="top">
	 * <td>Name</td>
	 * <td>Value</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>native_type</td>
	 * <td>The PHP native type used to represent the column value.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>driver:decl_type</td>
	 * <td>The SQL type used to represent the column value in the database.
	 * If the column in the result set is the result of a function, this value
	 * is not returned by <b>PDOStatement::getColumnMeta</b>.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>Any flags set for this column.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>The name of this column as returned by the database.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>The name of this column's table as returned by the database.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>len</td>
	 * <td>The length of this column. Normally -1 for
	 * types other than floating point decimals.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>precision</td>
	 * <td>The numeric precision of this column. Normally
	 * 0 for types other than floating point
	 * decimals.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>pdo_type</td>
	 * <td>The type of this column as represented by the
	 * PDO::PARAM_* constants.</td>
	 * </tr>
	 * </table>
	 * <p>
	 * Returns <b>FALSE</b> if the requested column does not exist in the result set,
	 * or if no result set exists.
	 */
	public function getColumnMeta ($column) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Set the default fetch mode for this statement
	 * @link http://php.net/manual/en/pdostatement.setfetchmode.php
	 * @param int $mode <p>
	 * The fetch mode must be one of the PDO::FETCH_* constants.
	 * </p>
	 * @param string|object $classNameObject [optional] <p>
	 * Class name or object
	 * </p>
	 * @param array $ctorarfg [optional] <p> Constructor arguments. </p>
	 * @return bool 1 on success or <b>FALSE</b> on failure.
	 */
	public function setFetchMode ($mode, $classNameObject, array $ctorarfg) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Advances to the next rowset in a multi-rowset statement handle
	 * @link http://php.net/manual/en/pdostatement.nextrowset.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function nextRowset () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * Closes the cursor, enabling the statement to be executed again.
	 * @link http://php.net/manual/en/pdostatement.closecursor.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function closeCursor () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * Dump an SQL prepared command
	 * @link http://php.net/manual/en/pdostatement.debugdumpparams.php
	 * @return bool No value is returned.
	 */
	public function debugDumpParams () {}

	final public function __wakeup () {}

	final public function __sleep () {}

}

final class PDORow  {
}

/**
 * (PHP 5 &gt;= 5.1.3, PHP 7, PECL pdo &gt;= 1.0.3)<br/>
 * Return an array of available PDO drivers
 * @link http://php.net/manual/en/pdo.getavailabledrivers.php
 * @return array <b>PDO::getAvailableDrivers</b> returns an array of PDO driver names. If
 * no drivers are available, it returns an empty array.
 */
function pdo_drivers () {}

// End of PDO v.1.0.4dev
?>
