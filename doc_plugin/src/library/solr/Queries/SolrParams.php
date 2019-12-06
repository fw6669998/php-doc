<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrparams" class="reference">   <h1 class="title">The SolrParams class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrparams.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a collection of name-value pairs sent to the Solr server during a request.    </p>   </div>     <div class="section" id="solrparams.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">abstract</span>       <strong class="classname">SolrParams</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><strong class="interfacename">Serializable</strong></span>      </span>      {</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrParams</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.add.php" class="methodname" style="color:#CC7832">add</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrParams</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.addparam.php" class="methodname" style="color:#CC7832">addParam</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.get.php" class="methodname" style="color:#CC7832">get</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$param_name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.getparam.php" class="methodname" style="color:#CC7832">getParam</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$param_name</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.getparams.php" class="methodname" style="color:#CC7832">getParams</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.getpreparedparams.php" class="methodname" style="color:#CC7832">getPreparedParams</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.serialize.php" class="methodname" style="color:#CC7832">serialize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.set.php" class="methodname" style="color:#CC7832">set</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrParams</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.setparam.php" class="methodname" style="color:#CC7832">setParam</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.tostring.php" class="methodname" style="color:#CC7832">toString</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$url_encode</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrparams.unserialize.php" class="methodname" style="color:#CC7832">unserialize</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$serialized</span></span>    )</div>     }</div>     </div>   </div>                                                                                  <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrParams::add} — This is an alias for SolrParams::addParam</li><li>{@link SolrParams::addParam} — Adds a parameter to the object</li><li>{@link SolrParams::get} — This is an alias for SolrParams::getParam</li><li>{@link SolrParams::getParam} — Returns a parameter value</li><li>{@link SolrParams::getParams} — Returns an array of non URL-encoded parameters</li><li>{@link SolrParams::getPreparedParams} — Returns an array of URL-encoded parameters</li><li>{@link SolrParams::serialize} — Used for custom serialization</li><li>{@link SolrParams::set} — An alias of SolrParams::setParam</li><li>{@link SolrParams::setParam} — Sets the parameter to the specified value</li><li>{@link SolrParams::toString} — Returns all the name-value pair parameters in the object</li><li>{@link SolrParams::unserialize} — Used for custom serialization</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
abstract class SolrParams implements Serializable {

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * This is an alias for SolrParams::addParam
	 * @link http://php.net/manual/en/solrparams.add.php
	 * @param string $name <p>
	 * The name of the parameter
	 * </p>
	 * @param string $value <p>
	 * The value of the parameter
	 * </p>
	 * @return SolrParams <p>
	 * Returns a SolrParams instance on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function add($name, $value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a parameter to the object
	 * @link http://php.net/manual/en/solrparams.addparam.php
	 * @param string $name <p>
	 * The name of the parameter
	 * </p>
	 * @param string $value <p>
	 * The value of the parameter
	 * </p>
	 * @return SolrParams <p>
	 * Returns a SolrParams instance on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function addParam($name ,$value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * This is an alias for SolrParams::getParam
	 * @link http://php.net/manual/en/solrparams.get.php
	 * @param string $param_name <p>
	 * The name of the parameter
	 * </p>
	 * @return mixed <p>
	 * Returns an array or string depending on the type of parameter
	 * </p>
	 */
	final public function get($param_name) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns a parameter value
	 * @link http://php.net/manual/en/solrparams.getparam.php
	 * @param string $param_name <p>
	 * The name of the parameter
	 * </p>
	 * @return mixed <p>
	 * Returns an array or string depending on the type of parameter
	 * </p>
	 */
	final public function getParam($param_name) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array of non URL-encoded parameters
	 * @link http://php.net/manual/en/solrparams.getparams.php
	 * @return array <p>
	 * Returns an array of non URL-encoded parameters
	 * </p>
	 */
	final public function getParams() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array of URL-encoded parameters
	 * @link http://php.net/manual/en/solrparams.getpreparedparams.php
	 * @return array <p>
	 * Returns an array of URL-encoded parameters
	 * </p>
	 */
	final public function getPreparedParams() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Used for custom serialization
	 * @link http://php.net/manual/en/solrparams.serialize.php
	 * @return string <p>
	 * Used for custom serialization
	 * </p>
	 */
/**
*<div id="function.serialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">serialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">serialize</span> &mdash; <span class="dc-title">      产生一个可存储的值的表示     </span></p>     </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 unknown-seealsp" id="refsect1-function.serialize-unknown-seealsp">     <h3 class="title">描述</h3>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">       <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>serialize</strong></span>        ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>       )</div>      <p class="simpara">      <span class="function"><strong style="color:#CC7832">serialize()</strong></span> 返回字符串，此字符串包含了表示       <span class="parameter" style="color:#2EACF9">value</span> 的字节流，可以存储于任何地方。     </p>     <p class="simpara">      这有利于存储或传递 PHP 的值，同时不丢失其类型和结构。     </p>    <p class="simpara">     想要将已序列化的字符串变回 PHP 的值，可使用     <span class="function">{@link unserialize()}</span>。<span class="function"><strong style="color:#CC7832">serialize()</strong></span>     可处理除了 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>      之外的任何类型。甚至可以 <span class="function"><strong style="color:#CC7832">serialize()</strong></span> 那些包含了指向其自身引用的数组。你正      <span class="function"><strong style="color:#CC7832">serialize()</strong></span>  的数组／对象中的引用也将被存储。    </p>    <p class="simpara">    当序列化对象时，PHP 将试图在序列动作之前调用该对象的成员函数    <span class="function"><strong style="color:#CC7832">__sleep()</strong></span>。这样就允许对象在被序列化之前做任何清除操作。类似的，当使用     <span class="function">{@link unserialize()}</span> 恢复对象时， 将调用    <span class="function"><strong style="color:#CC7832">__wakeup()</strong></span> 成员函数。    </p>        <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:      <p class="para">      在 PHP 3 中，对象属性将被序列化，但是方法则会丢失。PHP 4       打破了此限制，可以同时存储属性和方法。请参见<a href="http://php.net/manual/zh/language.oop5.php" class="link">类与对象</a>中的<a href="http://php.net/manual/zh/language.oop5.serialization.php" class="link">序列化对象</a>部分获取更多信息。     </p>    </p></blockquote>     <p class="para">      <div class="example" id="example-6362">       <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">serialize()</strong></span> 示例</strong></p>       <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;$session_data&nbsp;是包含了当前用户&nbsp;session&nbsp;信息的多维数组。<br />//&nbsp;我们使用&nbsp;serialize()&nbsp;在请求结束之前将其存储到数据库中。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect&nbsp;</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"UPDATE&nbsp;sessions&nbsp;SET&nbsp;data&nbsp;=&nbsp;?&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array&nbsp;(</span><span style="color: #9876AA">serialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">$PHP_AUTH_USER</span><span style="color: #007700">);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;sessions&nbsp;(id,&nbsp;data)&nbsp;VALUES(?,&nbsp;?)"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>       </div>       </div>     </p>    <p class="para">     参见：<span class="function">{@link unserialize()}</span>。    </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	final public function serialize() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * An alias of SolrParams::setParam
	 * @link http://php.net/manual/en/solrparams.set.php
	 * @param string $name <p>
	 * The name of the parameter
	 * </p>
	 * @param $value <p>
	 * The parameter value
	 * </p>
	 * @return SolrParams <p>
	 * Returns a SolrParams instance on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	final public function set($name, $value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the parameter to the specified value
	 * @link http://php.net/manual/en/solrparams.setparam.php
	 * @param string $name <p>
	 * The name of the parameter
	 * </p>
	 * @param $value <p>
	 * The parameter value
	 * </p>
	 * @return SolrParams <p>
	 * Returns a SolrParams instance on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function setParam($name, $value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the name-value pair parameters in the object
	 * @link http://php.net/manual/en/solrparams.tostring.php
	 * @param bool $url_encode <p>
	 * Whether to return URL-encoded values
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	final public function toString($url_encode = false) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Used for custom serialization
	 * @link http://php.net/manual/en/solrparams.unserialize.php
	 * @param string $serialized <p>
	 * The serialized representation of the object
	 * </p>
	 */
/**
*<div id="function.unserialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">unserialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">unserialize</span> &mdash; <span class="dc-title">      从已存储的表示中创建 PHP 的值     </span></p>     </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.unserialize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>unserialize</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$str</span></span>    )</div>      <p class="simpara">      <span class="function"><strong style="color:#CC7832">unserialize()</strong></span> 对单一的已序列化的变量进行操作，将其转换回       PHP 的值。     </p>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.unserialize-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">str</span></dt>       <dd>        <p class="para">        序列化后的字符串。       </p>       <p class="para">        若被解序列化的变量是一个对象，在成功地重新构造对象之后，PHP      会自动地试图去调用 <a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>      成员函数（如果存在的话）。       </p>       <p class="para">        <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:          <strong>unserialize_callback_func 指令</strong><br />         <p class="para">         如果在解序列化的时候需要实例化一个未定义类，则可以设置回调函数以供调用（以免得到的是不完整的       <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span> “__PHP_Incomplete_Class”）。可通过       <var class="filename">php.ini</var>、<span class="function">{@link ini_set()}</span> 或 <var class="filename">.htaccess</var>        定义‘unserialize_callback_func’。每次实例化一个未定义类时它都会被调用。若要禁止这个特性，只需置空此设定。         </p>        </p></blockquote>       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.unserialize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回的是转换之后的值，可为       <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer" style="color:#EAB766">integer</a></span>、<span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>、<span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>、<span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>      或 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span>。      </p>   <p class="para">    如果传递的字符串不可解序列化，则返回 <strong><span>FALSE</span></strong>，并产生一个 <strong><span>E_NOTICE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.unserialize-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>4.2.0</td>        <td>         添加了 unserialize_callback_func 指令。        </td>       </tr>       </tbody>         </table>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.unserialize-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6364">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">unserialize()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;这里，我们使用&nbsp;unserialize()&nbsp;装载来自数据库的&nbsp;$session_data&nbsp;数组中的会话数据。<br />//&nbsp;此例是描述&nbsp;serialize()&nbsp;的那个例子的补充。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;data&nbsp;FROM&nbsp;sessions&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #9876AA">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">]);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #9876AA">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;如果执行出错或返回错误，则初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;现在我们需要的是&nbsp;$tmp[0]&nbsp;中已序列化的数据。<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">unserialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错，初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>   <p class="para">    <div class="example" id="example-6365">     <p><strong>Example #2 unserialize_callback_func 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$serialized_object</span><span style="color: #007700">=</span><span style="color: #DD0000">'O:1:"a":1:{s:5:"value";s:3:"100";}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;unserialize_callback_func&nbsp;从&nbsp;PHP&nbsp;4.2.0&nbsp;起可用<br /></span><span style="color: #9876AA">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'unserialize_callback_func'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mycallback'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;设置您的回调函数<br /><br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">mycallback</span><span style="color: #007700">(</span><span style="color: #9876AA">$classname</span><span style="color: #007700">)&nbsp;<br />{<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;只需包含含有类定义的文件<br />&nbsp;&nbsp;&nbsp;//&nbsp;$classname&nbsp;指出需要的是哪一个类<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.unserialize-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong>    <p class="para">     如果反序列化了 <strong><span>FALSE</span></strong> 的值，或者在过程中发生了错误，都会返回 <strong><span>FALSE</span></strong>。     可以通过 <span class="parameter" style="color:#2EACF9">str</span> 和 <em>serialize(false)</em> 进行比较，或者捕捉 <strong><span>E_NOTICE</span></strong> 错误来判断这种特殊情况。    </p>   </div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.unserialize-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link serialize()} - 产生一个可存储的值的表示</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.autoload.php" class="link">自动加载对象</a></li>     <li class="member"><a href="http://php.net/manual/zh/var.configuration.php#unserialize-callback-func" class="link">unserialize_callback_func</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	final public function unserialize($serialized) {}

}