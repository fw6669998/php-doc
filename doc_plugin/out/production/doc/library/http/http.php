<?php

// Start of http v.1.6.6

class HttpException extends Exception  {
	public $innerException;
}
class HttpRuntimeException extends HttpException  {
}
class HttpInvalidParamException extends HttpException  {
}
class HttpHeaderException extends HttpException  {
}
class HttpMalformedHeadersException extends HttpException  {
}
class HttpRequestMethodException extends HttpException  {
}
class HttpMessageTypeException extends HttpException  {
}
class HttpEncodingException extends HttpException  {
}
class HttpRequestException extends HttpException  {
}
class HttpRequestPoolException extends HttpException  {
}
class HttpSocketException extends HttpException  {
}
class HttpResponseException extends HttpException  {
}
class HttpUrlException extends HttpException  {
}
class HttpQueryStringException extends HttpException  {
}

/**
 * @link http://php.net/manual/en/class.httpdeflatestream.php
 */
class HttpDeflateStream  {
	const TYPE_GZIP = 16;
	const TYPE_ZLIB = 0;
	const TYPE_RAW = 32;
	const LEVEL_DEF = 0;
	const LEVEL_MIN = 1;
	const LEVEL_MAX = 9;
	const STRATEGY_DEF = 0;
	const STRATEGY_FILT = 256;
	const STRATEGY_HUFF = 512;
	const STRATEGY_RLE = 768;
	const STRATEGY_FIXED = 1024;
	const FLUSH_NONE = 0;
	const FLUSH_SYNC = 1048576;
	const FLUSH_FULL = 2097152;


	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * HttpDeflateStream class constructor
	 * @link http://php.net/manual/en/function.httpdeflatestream-construct.php
	 * @param int $flags [optional] <p>
	 * initialization flags
	 * </p>
	 * @return void 
	 */
	public function __construct ($flags = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Update deflate stream
	 * @link http://php.net/manual/en/function.httpdeflatestream-update.php
	 * @param string $data <p>
	 * data to deflate
	 * </p>
	 * @return string deflated data on success or false on failure.
	 */
	public function update ($data) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Flush deflate stream
	 * @link http://php.net/manual/en/function.httpdeflatestream-flush.php
	 * @param string $data [optional] <p>
	 * more data to deflate
	 * </p>
	 * @return string some deflated data as string on success or false on failure.
	 */
/**
*<div id="function.flush" class="refentry">    <div class="refnamediv">     <h1 class="refname">flush</h1>      <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">flush</span> &mdash; <span class="dc-title">刷新输出缓冲</span></p>     </div>    <div class="refsect1 unknown-seealsp" id="refsect1-function.flush-unknown-seealsp">     <h3 class="title">说明</h3>      <div class="methodsynopsis dc-description">       <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>flush</strong></span>        ( <span class="methodparam">void</span>       )</div>      <p class="simpara">      刷新PHP程序的缓冲，而不论PHP执行在何种情况下（CGI ，web服务器等等）。该函数将当前为止程序的所有输出发送到用户的浏览器。     </p>     <p class="para">      <span class="function"><strong>flush()</strong></span> 函数不会对服务器或客户端浏览器的缓存模式产生影响。因此，必须同时使用 <span class="function">{@link ob_flush()}</span> 和<span class="function"><strong>flush()</strong></span> 函数来刷新输出缓冲。     </p>     <p class="para">      个别web服务器程序，特别是Win32下的web服务器程序，在发送结果到浏览器之前，仍然会缓存脚本的输出，直到程序结束为止。     </p>     <p class="para">      有些Apache的模块，比如mod_gzip，可能自己进行输出缓存，这将导致<span class="function"><strong>flush()</strong></span>函数产生的结果不会立即被发送到客户端浏览器。     </p>     <p class="para">      甚至浏览器也会在显示之前，缓存接收到的内容。例如 Netscape 浏览器会在接受到换行或 html 标记的开头之前缓存内容，并且在接受到 &lt;/table&gt; 标记之前，不会显示出整个表格。     </p>     <p class="para">      一些版本的 Microsoft Internet Explorer 只有当接受到的256个字节以后才开始显示该页面，所以必须发送一些额外的空格来让这些浏览器显示页面内容。     </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.outcontrol.php">Output Control 函数</a></div></div>
*/
	public function flush ($data = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Finalize deflate stream
	 * @link http://php.net/manual/en/function.httpdeflatestream-finish.php
	 * @param string $data [optional] <p>
	 * data to deflate
	 * </p>
	 * @return string the final part of deflated data.
	 */
	public function finish ($data = null) {}

	/**
	 * (PECL pecl_http &gt;= 1.4.0)<br/>
	 * HttpDeflateStream class factory
	 * @link http://php.net/manual/en/function.httpdeflatestream-factory.php
	 * @param int $flags [optional] <p>
	 * initialization flags
	 * </p>
	 * @param string $class_name [optional] <p>
	 * name of a subclass of HttpDeflateStream
	 * </p>
	 * @return HttpDeflateStream 
	 */
	public static function factory ($flags = null, $class_name = null) {}

}

/**
 * @link http://php.net/manual/en/class.httpinflatestream.php
 */
class HttpInflateStream  {
	const FLUSH_NONE = 0;
	const FLUSH_SYNC = 1048576;
	const FLUSH_FULL = 2097152;


	/**
	 * (PECL pecl_http &gt;= 1.0.0)<br/>
	 * HttpInflateStream class constructor
	 * @link http://php.net/manual/en/function.httpinflatestream-construct.php
	 * @param int $flags [optional] <p>
	 * initialization flags
	 * </p>
	 * @return void 
	 */
	public function __construct ($flags = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Update inflate stream
	 * @link http://php.net/manual/en/function.httpinflatestream-update.php
	 * @param string $data <p>
	 * data to inflate
	 * </p>
	 * @return string inflated data on success or false on failure.
	 */
	public function update ($data) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Flush inflate stream
	 * @link http://php.net/manual/en/function.httpinflatestream-flush.php
	 * @param string $data [optional] <p>
	 * more data to inflate
	 * </p>
	 * @return string some inflated data as string on success or false on failure.
	 */
/**
*<div id="function.flush" class="refentry">    <div class="refnamediv">     <h1 class="refname">flush</h1>      <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">flush</span> &mdash; <span class="dc-title">刷新输出缓冲</span></p>     </div>    <div class="refsect1 unknown-seealsp" id="refsect1-function.flush-unknown-seealsp">     <h3 class="title">说明</h3>      <div class="methodsynopsis dc-description">       <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>flush</strong></span>        ( <span class="methodparam">void</span>       )</div>      <p class="simpara">      刷新PHP程序的缓冲，而不论PHP执行在何种情况下（CGI ，web服务器等等）。该函数将当前为止程序的所有输出发送到用户的浏览器。     </p>     <p class="para">      <span class="function"><strong>flush()</strong></span> 函数不会对服务器或客户端浏览器的缓存模式产生影响。因此，必须同时使用 <span class="function">{@link ob_flush()}</span> 和<span class="function"><strong>flush()</strong></span> 函数来刷新输出缓冲。     </p>     <p class="para">      个别web服务器程序，特别是Win32下的web服务器程序，在发送结果到浏览器之前，仍然会缓存脚本的输出，直到程序结束为止。     </p>     <p class="para">      有些Apache的模块，比如mod_gzip，可能自己进行输出缓存，这将导致<span class="function"><strong>flush()</strong></span>函数产生的结果不会立即被发送到客户端浏览器。     </p>     <p class="para">      甚至浏览器也会在显示之前，缓存接收到的内容。例如 Netscape 浏览器会在接受到换行或 html 标记的开头之前缓存内容，并且在接受到 &lt;/table&gt; 标记之前，不会显示出整个表格。     </p>     <p class="para">      一些版本的 Microsoft Internet Explorer 只有当接受到的256个字节以后才开始显示该页面，所以必须发送一些额外的空格来让这些浏览器显示页面内容。     </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.outcontrol.php">Output Control 函数</a></div></div>
*/
	public function flush ($data = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Finalize inflate stream
	 * @link http://php.net/manual/en/function.httpinflatestream-finish.php
	 * @param string $data [optional] <p>
	 * data to inflate
	 * </p>
	 * @return string the final part of inflated data.
	 */
	public function finish ($data = null) {}

	/**
	 * (PECL pecl_http &gt;= 1.4.0)<br/>
	 * HttpInflateStream class factory
	 * @link http://php.net/manual/en/function.httpinflatestream-factory.php
	 * @param int $flags [optional] <p>
	 * initialization flags
	 * </p>
	 * @param string $class_name [optional] <p>
	 * name of a subclass of HttpInflateStream
	 * </p>
	 * @return HttpInflateStream 
	 */
	public static function factory ($flags = null, $class_name = null) {}

}

/**
 * @link http://php.net/manual/en/class.httpmessage.php
 */
class HttpMessage implements Countable, Serializable, Iterator {
	const TYPE_NONE = 0;
	const TYPE_REQUEST = 1;
	const TYPE_RESPONSE = 2;

	protected $type;
	protected $body;
	protected $requestMethod;
	protected $requestUrl;
	protected $responseStatus;
	protected $responseCode;
	protected $httpVersion;
	protected $headers;
	protected $parentMessage;


	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * HttpMessage constructor
	 * @link http://php.net/manual/en/function.httpmessage-construct.php
	 * @param string $message [optional] <p>
	 * a single or several consecutive HTTP messages
	 * </p>
	 * @return void 
	 */
	public function __construct ($message = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get message body
	 * @link http://php.net/manual/en/function.httpmessage-getbody.php
	 * @return string the message body as string.
	 */
	public function getBody () {}

	/**
	 * (PECL pecl_http &gt;= 0.14.0)<br/>
	 * Set message body
	 * @link http://php.net/manual/en/function.httpmessage-setbody.php
	 * @param string $body <p>
	 * the new body of the message
	 * </p>
	 * @return void 
	 */
	public function setBody ($body) {}

	/**
	 * (PECL pecl_http &gt;= 1.1.0)<br/>
	 * Get header
	 * @link http://php.net/manual/en/function.httpmessage-getheader.php
	 * @param string $header <p>
	 * header name
	 * </p>
	 * @return string the header value on success or NULL if the header does not exist.
	 */
	public function getHeader ($header) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get message headers
	 * @link http://php.net/manual/en/function.httpmessage-getheaders.php
	 * @return array an associative array containing the messages HTTP headers.
	 */
	public function getHeaders () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set headers
	 * @link http://php.net/manual/en/function.httpmessage-setheaders.php
	 * @param array $headers <p>
	 * associative array containing the new HTTP headers, which will replace all previous HTTP headers of the message
	 * </p>
	 * @return void 
	 */
	public function setHeaders (sarray $header) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Add headers
	 * @link http://php.net/manual/en/function.httpmessage-addheaders.php
	 * @param array $headers <p>
	 * associative array containing the additional HTTP headers to add to the messages existing headers
	 * </p>
	 * @param bool $append [optional] <p>
	 * if true, and a header with the same name of one to add exists already, this respective
	 * header will be converted to an array containing both header values, otherwise
	 * it will be overwritten with the new header value
	 * </p>
	 * @return void true on success or false on failure.
	 */
	public function addHeaders (array $headers, $append = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get message type
	 * @link http://php.net/manual/en/function.httpmessage-gettype.php
	 * @return int the HttpMessage::TYPE.
	 */
/**
*<div id="function.gettype" class="refentry">    <div class="refnamediv">     <h1 class="refname">gettype</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">gettype</span> &mdash; <span class="dc-title">获取变量的类型</span></p>     </div>    <div class="refsect1 unknown-unknown-unknown-unknown-seealss" id="refsect1-function.gettype-unknown-unknown-unknown-unknown-seealss">     <h3 class="title">描述</h3>      <div class="methodsynopsis dc-description">       <span class="type">string</span> <span class="methodname"><strong>gettype</strong></span>        ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>       )</div>      <p class="para rdfs-comment">      返回 PHP 变量的类型      <code class="parameter">var</code>.     </p>     <div class="warning"><strong class="warning">Warning</strong>      <p class="simpara">       不要使用 <span class="function"><strong>gettype()</strong></span>       来测试某种类型，因为其返回的字符串在未来的版本中可能需要改变。此外，由于包含了字符串的比较，它的运行也是较慢的。             </p>      <p class="simpara">       使用 <em>is_*</em> 函数代替。      </p>     </div>     <p class="para">      返回的字符串的可能值为：      <ul class="itemizedlist">       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span>”（从 PHP 4 起）</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type double">double</a></span>”（由于历史原因，如果是 <span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type float">float</a></span> 则返回“double”，而不是“float”）</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>”（从 PHP 4 起）</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.null.php" class="type NULL">NULL</a></span>”（从 PHP 4 起）</span>       </li>       <li class="listitem">        <span class="simpara">“user function”（只用于 PHP 3，现已停用）</span>       </li>       <li class="listitem">        <span class="simpara">“unknown type”</span>       </li>      </ul>     </p>     <p class="para">      对于 PHP 4，你应该使用 <span class="function">{@link function_exists()}</span>      和 <span class="function">{@link method_exists()}</span>      取代先前将 <span class="function"><strong>gettype()</strong></span>      作用于函数的用法。     </p>     <p class="para">      参见      <span class="function">{@link settype()}</span>、<span class="function">{@link is_array()}</span>、<span class="function">{@link is_bool()}</span>、<span class="function">{@link is_float()}</span>、<span class="function">{@link is_integer()}</span>、<span class="function">{@link is_null()}</span>、<span class="function">{@link is_numeric()}</span>、<span class="function">{@link is_object()}</span>、<span class="function">{@link is_resource()}</span>、<span class="function">{@link is_scalar()}</span>      和 <span class="function">{@link is_string()}</span>。     </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function getType () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set message type
	 * @link http://php.net/manual/en/function.httpmessage-settype.php
	 * @param int $type <p>
	 * the HttpMessage::TYPE
	 * </p>
	 * @return void 
	 */
/**
*<div id="function.settype" class="refentry">    <div class="refnamediv">     <h1 class="refname">settype</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">settype</span> &mdash; <span class="dc-title">设置变量的类型</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.settype-description">   <h3 class="title">说明</h3>      <div class="methodsynopsis dc-description">       <span class="type">bool</span> <span class="methodname"><strong>settype</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>       , <span class="methodparam"><span class="type">string</span> <code class="parameter">$type</code></span>       )</div>      <p class="para rdfs-comment">      将变量 <code class="parameter">var</code> 的类型设置成      <code class="parameter">type</code>。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.settype-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">var</code></dt>       <dd>        <p class="para">        要转换的变量。       </p>      </dd>                 <dt> <code class="parameter">type</code></dt>       <dd>        <p class="para">        <code class="parameter">type</code> 的可能值为：        <ul class="itemizedlist">         <li class="listitem">          <span class="simpara">         “boolean” （或为“bool”，从 PHP 4.2.0 起）          </span>         </li>         <li class="listitem">          <span class="simpara">         “integer” （或为“int”，从 PHP 4.2.0 起）          </span>         </li>         <li class="listitem">          <span class="simpara">         “float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）          </span>         </li>         <li class="listitem">          <span class="simpara">           &quot;string&quot;          </span>         </li>         <li class="listitem">          <span class="simpara">           &quot;array&quot;          </span>         </li>         <li class="listitem">          <span class="simpara">           &quot;object&quot;          </span>         </li>         <li class="listitem">          <span class="simpara">         “null” （从 PHP 4.2.0 起）          </span>         </li>        </ul>       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.settype-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.settype-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6363">     <p><strong>Example #1 <span class="function"><strong>settype()</strong></span> 示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$foo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"5bar"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;string<br /></span><span style="color: #9876AA">$bar&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;boolean<br /><br /></span><span style="color: #9876AA">settype</span><span style="color: #007700">(</span><span style="color: #9876AA">$foo</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"integer"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$foo&nbsp;现在是&nbsp;5&nbsp;&nbsp;&nbsp;(integer)<br /></span><span style="color: #9876AA">settype</span><span style="color: #007700">(</span><span style="color: #9876AA">$bar</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"string"</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$bar&nbsp;现在是&nbsp;"1"&nbsp;(string)<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.settype-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     Maximum value for &quot;int&quot; is <strong><code>PHP_INT_MAX</code></strong>.    </p>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.settype-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link gettype()} - 获取变量的类型</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.types.type-juggling.php#language.types.typecasting" class="link">类型转换</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.types.type-juggling.php" class="link">类型戏法</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function setType ($type) {}

	public function getInfo () {}

	/**
	 * @param $http_info
	 */
	public function setInfo ($http_info) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response code
	 * @link http://php.net/manual/en/function.httpmessage-getresponsecode.php
	 * @return int the HTTP response code if the message is of type HttpMessage::TYPE_RESPONSE, else FALSE.
	 */
	public function getResponseCode () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set response code
	 * @link http://php.net/manual/en/function.httpmessage-setresponsecode.php
	 * @param int $code <p>
	 * HTTP response code
	 * </p>
	 * @return bool TRUE on success, or FALSE if the message is not of type
	 * HttpMessage::TYPE_RESPONSE or the response code is out of range (100-510).
	 */
	public function setResponseCode ($code) {}

	/**
	 * (PECL pecl_http &gt;= 0.23.0)<br/>
	 * Get response status
	 * @link http://php.net/manual/en/function.httpmessage-getresponsestatus.php
	 * @return string the HTTP response status string if the message is of type 
	 * HttpMessage::TYPE_RESPONSE, else FALSE.
	 */
	public function getResponseStatus () {}

	/**
	 * (PECL pecl_http &gt;= 0.23.0)<br/>
	 * Set response status
	 * @link http://php.net/manual/en/function.httpmessage-setresponsestatus.php
	 * @param string $status <p>
	 * the response status text
	 * </p>
	 * @return bool TRUE on success or FALSE if the message is not of type
	 * HttpMessage::TYPE_RESPONSE.
	 */
	public function setResponseStatus ($status) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get request method
	 * @link http://php.net/manual/en/function.httpmessage-getrequestmethod.php
	 * @return string the request method name on success, or FALSE if the message is
	 * not of type HttpMessage::TYPE_REQUEST.
	 */
	public function getRequestMethod () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set request method
	 * @link http://php.net/manual/en/function.httpmessage-setrequestmethod.php
	 * @param string $method <p>
	 * the request method name
	 * </p>
	 * @return bool TRUE on success, or FALSE if the message is not of type
	 * HttpMessage::TYPE_REQUEST or an invalid request method was supplied.
	 */
	public function setRequestMethod ($method) {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Get request URL
	 * @link http://php.net/manual/en/function.httpmessage-getrequesturl.php
	 * @return string the request URL as string on success, or FALSE if the message
	 * is not of type HttpMessage::TYPE_REQUEST.
	 */
	public function getRequestUrl () {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Set request URL
	 * @link http://php.net/manual/en/function.httpmessage-setrequesturl.php
	 * @param string $url <p>
	 * the request URL
	 * </p>
	 * @return bool TRUE on success, or FALSE if the message is not of type
	 * HttpMessage::TYPE_REQUEST or supplied URL was empty.
	 */
	public function setRequestUrl ($url) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get HTTP version
	 * @link http://php.net/manual/en/function.httpmessage-gethttpversion.php
	 * @return string the HTTP protocol version as string.
	 */
	public function getHttpVersion () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set HTTP version
	 * @link http://php.net/manual/en/function.httpmessage-sethttpversion.php
	 * @param string $version <p>
	 * the HTTP protocol version
	 * </p>
	 * @return bool TRUE on success, or FALSE if supplied version is out of range (1.0/1.1).
	 */
	public function setHttpVersion ($version) {}

	/**
	 * (PECL pecl_http &gt;= 1.0.0)<br/>
	 * Guess content type
	 * @link http://php.net/manual/en/function.httpmessage-guesscontenttype.php
	 * @param string $magic_file <p>
	 * the magic.mime database to use
	 * </p>
	 * @param int $magic_mode [optional] <p>
	 * flags for libmagic
	 * </p>
	 * @return string the guessed content type on success or false on failure.
	 */
	public function guessContentType ($magic_file, $magic_mode = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get parent message
	 * @link http://php.net/manual/en/function.httpmessage-getparentmessage.php
	 * @return HttpMessage the parent HttpMessage object.
	 */
	public function getParentMessage () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Send message
	 * @link http://php.net/manual/en/function.httpmessage-send.php
	 * @return bool true on success or false on failure.
	 */
	public function send () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get string representation
	 * @link http://php.net/manual/en/function.httpmessage-tostring.php
	 * @param bool $include_parent [optional] <p>
	 * specifies whether the returned string should also contain any parent messages
	 * </p>
	 * @return string the message as string.
	 */
	public function toString ($include_parent = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Create HTTP object regarding message type
	 * @link http://php.net/manual/en/function.httpmessage-tomessagetypeobject.php
	 * @return HttpRequest|HttpResponse either an HttpRequest or HttpResponse object on success, or NULL on failure.
	 */
	public function toMessageTypeObject () {}

/**
*<div id="function.count" class="refentry">    <div class="refnamediv">     <h1 class="refname">count</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">count</span> &mdash; <span class="dc-title">计算数组中的单元数目，或对象中的属性个数</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$array_or_countable</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$mode</code><span class="initializer"> = COUNT_NORMAL</span></span>   ] )</div>    <p class="para rdfs-comment">    统计出数组里的所有元素的数量，或者对象里的东西。   </p>     <p class="para">      对于对象，如果安装了 <a href="http://php.net/manual/zh/ref.spl.php" class="link">SPL</a>，可以通过实现      <em>Countable</em> 接口对 <span class="function"><strong>count()</strong></span>挂钩（hook）      。该接口只有一个方法      <span class="methodname">{@link Countable::count()}</span>，此方法为 <span class="function"><strong>count()</strong></span>      函数返回值。     </p>     <p class="para">      关于 PHP 中如何实现和使用数组可以参考手册中<a href="http://php.net/manual/zh/language.types.array.php" class="link">数组</a>章节中的详细描述。   </p>  </div>      <div class="refsect1 parameters" id="refsect1-function.count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array_or_countable</code></dt>       <dd>        <p class="para">        数组或者 <a href="http://php.net/manual/zh/class.countable.php" class="classname">Countable</a>  对象。       </p>      </dd>                 <dt> <code class="parameter">mode</code></dt>       <dd>        <p class="para">        如果可选的 <code class="parameter">mode</code> 参数设为      <strong><code>COUNT_RECURSIVE</code></strong>（或 1），<span class="function"><strong>count()</strong></span>      将递归地对数组计数。对计算多维数组的所有单元尤其有用。       </p>       <div class="caution"><strong class="caution">Caution</strong>        <p class="para">         <span class="function"><strong>count()</strong></span> 能检测递归来避免无限循环，但每次出现时会产生 <strong><code>E_WARNING</code></strong> 错误         （如果 array 不止一次包含了自身）并返回大于预期的统计数字。        </p>       </div>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回 <code class="parameter">array_or_countable</code> 中的单元数目。        如果参数既不是数组，也不是实现      <em>Countable</em> 接口的对象，将返回      <em>1</em>。    有个例外：如果      <code class="parameter">array_or_countable</code> 是 <strong><code>NULL</code></strong> 则结果是 <em>0</em>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6085">     <p><strong>Example #1 <span class="function"><strong>count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$a</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$a</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">false</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> int(3) int(3)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 12 // PHP 7.2 起 int(0)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 14 // PHP 7.2 起 int(1) </pre></div>     </div>    </div>   </p>   <p class="para">    <div class="example" id="example-6086">     <p><strong>Example #2 递归 <span class="function"><strong>count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$food&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'fruits'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'veggie'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'collard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pea'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;recursive&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">COUNT_RECURSIVE</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;8<br /><br />//&nbsp;normal&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;2<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.count-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        当无效的 countable 类型传递给 <code class="parameter">array_or_countable</code> 参数时，<span class="function"><strong>count()</strong></span> 会产生警告。       </td>      </tr>      </tbody>       </table>   </div>      <div class="refsect1 seealso" id="refsect1-function.count-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link is_array()} - 检测变量是否是数组</span></li>     <li class="member"><span class="function">{@link isset()} - 检测变量是否已设置并且非 NULL</span></li>     <li class="member"><span class="function">{@link empty()} - 检查一个变量是否为空</span></li>     <li class="member"><span class="function">{@link strlen()} - 获取字符串长度</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function count () {}

/**
*<div id="function.serialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">serialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">serialize</span> &mdash; <span class="dc-title">      产生一个可存储的值的表示     </span></p>     </div>    <div class="refsect1 unknown-seealsp" id="refsect1-function.serialize-unknown-seealsp">     <h3 class="title">描述</h3>      <div class="methodsynopsis dc-description">       <span class="type">string</span> <span class="methodname"><strong>serialize</strong></span>        ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>       )</div>      <p class="simpara">      <span class="function"><strong>serialize()</strong></span> 返回字符串，此字符串包含了表示       <code class="parameter">value</code> 的字节流，可以存储于任何地方。     </p>     <p class="simpara">      这有利于存储或传递 PHP 的值，同时不丢失其类型和结构。     </p>    <p class="simpara">     想要将已序列化的字符串变回 PHP 的值，可使用     <span class="function">{@link unserialize()}</span>。<span class="function"><strong>serialize()</strong></span>     可处理除了 <span class="type"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>      之外的任何类型。甚至可以 <span class="function"><strong>serialize()</strong></span> 那些包含了指向其自身引用的数组。你正      <span class="function"><strong>serialize()</strong></span>  的数组／对象中的引用也将被存储。    </p>    <p class="simpara">    当序列化对象时，PHP 将试图在序列动作之前调用该对象的成员函数    <span class="function"><strong>__sleep()</strong></span>。这样就允许对象在被序列化之前做任何清除操作。类似的，当使用     <span class="function">{@link unserialize()}</span> 恢复对象时， 将调用    <span class="function"><strong>__wakeup()</strong></span> 成员函数。    </p>        <blockquote class="note"><p><strong class="note">Note</strong>:      <p class="para">      在 PHP 3 中，对象属性将被序列化，但是方法则会丢失。PHP 4       打破了此限制，可以同时存储属性和方法。请参见<a href="http://php.net/manual/zh/language.oop5.php" class="link">类与对象</a>中的<a href="http://php.net/manual/zh/language.oop5.serialization.php" class="link">序列化对象</a>部分获取更多信息。     </p>    </p></blockquote>     <p class="para">      <div class="example" id="example-6362">       <p><strong>Example #1 <span class="function"><strong>serialize()</strong></span> 示例</strong></p>       <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;$session_data&nbsp;是包含了当前用户&nbsp;session&nbsp;信息的多维数组。<br />//&nbsp;我们使用&nbsp;serialize()&nbsp;在请求结束之前将其存储到数据库中。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect&nbsp;</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"UPDATE&nbsp;sessions&nbsp;SET&nbsp;data&nbsp;=&nbsp;?&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array&nbsp;(</span><span style="color: #9876AA">serialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">$PHP_AUTH_USER</span><span style="color: #007700">);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;sessions&nbsp;(id,&nbsp;data)&nbsp;VALUES(?,&nbsp;?)"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>       </div>       </div>     </p>    <p class="para">     参见：<span class="function">{@link unserialize()}</span>。    </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function serialize () {}

	/**
	 * @param $serialized
	 */
/**
*<div id="function.unserialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">unserialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">unserialize</span> &mdash; <span class="dc-title">      从已存储的表示中创建 PHP 的值     </span></p>     </div>      <div class="refsect1 description" id="refsect1-function.unserialize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>unserialize</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$str</code></span>    )</div>      <p class="simpara">      <span class="function"><strong>unserialize()</strong></span> 对单一的已序列化的变量进行操作，将其转换回       PHP 的值。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.unserialize-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">str</code></dt>       <dd>        <p class="para">        序列化后的字符串。       </p>       <p class="para">        若被解序列化的变量是一个对象，在成功地重新构造对象之后，PHP      会自动地试图去调用 <a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>      成员函数（如果存在的话）。       </p>       <p class="para">        <blockquote class="note"><p><strong class="note">Note</strong>:          <strong>unserialize_callback_func 指令</strong><br />         <p class="para">         如果在解序列化的时候需要实例化一个未定义类，则可以设置回调函数以供调用（以免得到的是不完整的       <span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span> “__PHP_Incomplete_Class”）。可通过       <var class="filename">php.ini</var>、<span class="function">{@link ini_set()}</span> 或 <var class="filename">.htaccess</var>        定义‘unserialize_callback_func’。每次实例化一个未定义类时它都会被调用。若要禁止这个特性，只需置空此设定。         </p>        </p></blockquote>       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.unserialize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回的是转换之后的值，可为       <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type float">float</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>      或 <span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span>。      </p>   <p class="para">    如果传递的字符串不可解序列化，则返回 <strong><code>FALSE</code></strong>，并产生一个 <strong><code>E_NOTICE</code></strong>。   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.unserialize-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>4.2.0</td>        <td>         添加了 unserialize_callback_func 指令。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.unserialize-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6364">     <p><strong>Example #1 <span class="function"><strong>unserialize()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;这里，我们使用&nbsp;unserialize()&nbsp;装载来自数据库的&nbsp;$session_data&nbsp;数组中的会话数据。<br />//&nbsp;此例是描述&nbsp;serialize()&nbsp;的那个例子的补充。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;data&nbsp;FROM&nbsp;sessions&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #9876AA">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">]);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #9876AA">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;如果执行出错或返回错误，则初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;现在我们需要的是&nbsp;$tmp[0]&nbsp;中已序列化的数据。<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">unserialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错，初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    <div class="example" id="example-6365">     <p><strong>Example #2 unserialize_callback_func 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$serialized_object</span><span style="color: #007700">=</span><span style="color: #DD0000">'O:1:"a":1:{s:5:"value";s:3:"100";}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;unserialize_callback_func&nbsp;从&nbsp;PHP&nbsp;4.2.0&nbsp;起可用<br /></span><span style="color: #9876AA">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'unserialize_callback_func'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mycallback'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;设置您的回调函数<br /><br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">mycallback</span><span style="color: #007700">(</span><span style="color: #9876AA">$classname</span><span style="color: #007700">)&nbsp;<br />{<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;只需包含含有类定义的文件<br />&nbsp;&nbsp;&nbsp;//&nbsp;$classname&nbsp;指出需要的是哪一个类<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.unserialize-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong>    <p class="para">     如果反序列化了 <strong><code>FALSE</code></strong> 的值，或者在过程中发生了错误，都会返回 <strong><code>FALSE</code></strong>。     可以通过 <code class="parameter">str</code> 和 <em>serialize(false)</em> 进行比较，或者捕捉 <strong><code>E_NOTICE</code></strong> 错误来判断这种特殊情况。    </p>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.unserialize-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link serialize()} - 产生一个可存储的值的表示</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.autoload.php" class="link">自动加载对象</a></li>     <li class="member"><a href="http://php.net/manual/zh/var.configuration.php#unserialize-callback-func" class="link">unserialize_callback_func</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function unserialize ($serialized) {}

/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$handle</code></span>    )</div>    <p class="para rdfs-comment">    将 <code class="parameter">handle</code> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">handle</code></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong>rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> Foolly long sentence. </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind () {}

	public function valid () {}

/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>current</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong>current()</strong></span>      返回 <strong><code>FALSE</code></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong>current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span> <strong><code>FALSE</code></strong> 的单元则本函数在碰到这个单元时也返回        <strong><code>FALSE</code></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </p>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current () {}

/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>key</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$array</code></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong>key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong>key()</strong></span> 会返回 <strong><code>NULL</code></strong>。   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <code class="parameter">array</code> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </p>  </div>   <div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong>key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </pre></div>     </div>    </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key () {}

/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>next</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong>next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        受影响的 <span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span> 。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><code>FALSE</code></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong>next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span> <strong><code>FALSE</code></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

	/**
	 * @return string
	 */
	public function __toString () {}

	/**
	 * (PECL pecl_http &gt;= 1.4.0)<br/>
	 * Create HttpMessage from string
	 * @link http://php.net/manual/en/function.httpmessage-factory.php
	 * @param string $raw_message [optional] <p>
	 * a single or several consecutive HTTP messages
	 * </p>
	 * @param string $class_name [optional] <p>
	 * a class extending HttpMessage
	 * </p>
	 * @return HttpMessage an HttpMessage object on success or NULL on failure.
	 */
	public static function factory ($raw_message = null, $class_name = null) {}

	/**
	 * (PECL pecl_http 0.10.0-1.3.3)<br/>
	 * Create HttpMessage from string
	 * @link http://php.net/manual/en/function.httpmessage-fromstring.php
	 * @param string $raw_message [optional] <p>
	 * a single or several consecutive HTTP messages
	 * </p>
	 * @param string $class_name [optional] <p>
	 * a class extending HttpMessage
	 * </p>
	 * @return HttpMessage an HttpMessage object on success or NULL on failure.
	 */
	public static function fromString ($raw_message = null, $class_name = null) {}

	/**
	 * (PECL pecl_http &gt;= 1.5.0)<br/>
	 * Create HttpMessage from environment
	 * @link http://php.net/manual/en/function.httpmessage-fromenv.php
	 * @param int $message_type <p>
	 * The message type. See HttpMessage type constants.
	 * </p>
	 * @param string $class_name [optional] <p>
	 * a class extending HttpMessage
	 * </p>
	 * @return HttpMessage an HttpMessage object on success or NULL on failure.
	 */
	public static function fromEnv ($message_type, $class_name = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Detach HttpMessage
	 * @link http://php.net/manual/en/function.httpmessage-detach.php
	 * @return HttpMessage detached HttpMessage object copy.
	 */
	public function detach () {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Prepend message(s)
	 * @link http://php.net/manual/en/function.httpmessage-prepend.php
	 * @param HttpMessage $message <p>
	 * HttpMessage object to prepend
	 * </p>
	 * @param bool $top [optional] <p>
	 * whether to prepend to the top most or right this message
	 * </p>
	 * @return void 
	 */
	public function prepend (HttpMessage $message, $top = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.23.0)<br/>
	 * Reverse message chain
	 * @link http://php.net/manual/en/function.httpmessage-reverse.php
	 * @return HttpMessage the most parent HttpMessage object.
	 */
	public function reverse () {}

}

/**
 * @link http://php.net/manual/en/class.httpquerystring.php
 */
class HttpQueryString implements Serializable, ArrayAccess {
	const TYPE_BOOL = 3;
	const TYPE_INT = 1;
	const TYPE_FLOAT = 2;
	const TYPE_STRING = 6;
	const TYPE_ARRAY = 4;
	const TYPE_OBJECT = 5;

	private static $instance;
	private $queryArray;
	private $queryString;


	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * HttpQueryString constructor
	 * @link http://php.net/manual/en/function.httpquerystring-construct.php
	 * @param bool $global [optional] <p>
	 * whether to operate on $_GET and
	 * $_SERVER['QUERY_STRING']
	 * </p>
	 * @param mixed $add [optional] <p>
	 * additional/initial query string parameters
	 * </p>
	 */
	final public function __construct ($global = null, $add = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Get query string as array
	 * @link http://php.net/manual/en/function.httpquerystring-toarray.php
	 * @return array the array representation of the query string.
	 */
	public function toArray () {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Get query string
	 * @link http://php.net/manual/en/function.httpquerystring-tostring.php
	 * @return string the string representation of the query string.
	 */
	public function toString () {}

	/**
	 * @return string
	 */
	public function __toString () {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Get (part of) query string
	 * @link http://php.net/manual/en/function.httpquerystring-get.php
	 * @param string $key [optional] <p>
	 * key of the query string param to retrieve
	 * </p>
	 * @param mixed $type [optional] <p>
	 * which variable type to enforce
	 * </p>
	 * @param mixed $defval [optional] <p>
	 * default value if key does not exist
	 * </p>
	 * @param bool $delete [optional] <p>
	 * whether to remove the key/value pair from the query string
	 * </p>
	 * @return mixed the value of the query string param or the whole query string if no key was specified on success or defval if key does not exist.
	 */
	public function get ($key = null, $type = null, $defval = null, $delete = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.22.0)<br/>
	 * Set query string params
	 * @link http://php.net/manual/en/function.httpquerystring-set.php
	 * @param mixed $params <p>
	 * query string params to add
	 * </p>
	 * @return string the current query string.
	 */
	public function set ($params) {}

	/**
	 * (PECL pecl_http &gt;= 1.1.0)<br/>
	 * Modifiy query string copy
	 * @link http://php.net/manual/en/function.httpquerystring-mod.php
	 * @param mixed $params <p>
	 * query string params to add
	 * </p>
	 * @return HttpQueryString a new HttpQueryString object
	 */
	public function mod ($params) {}

	/**
	 * @param $name
	 * @param $defval [optional]
	 * @param $delete [optional]
	 */
	public function getBool ($name, $defval, $delete) {}

	/**
	 * @param $name
	 * @param $defval [optional]
	 * @param $delete [optional]
	 */
	public function getInt ($name, $defval, $delete) {}

	/**
	 * @param $name
	 * @param $defval [optional]
	 * @param $delete [optional]
	 */
	public function getFloat ($name, $defval, $delete) {}

	/**
	 * @param $name
	 * @param $defval [optional]
	 * @param $delete [optional]
	 */
	public function getString ($name, $defval, $delete) {}

	/**
	 * @param $name
	 * @param $defval [optional]
	 * @param $delete [optional]
	 */
	public function getArray ($name, $defval, $delete) {}

	/**
	 * @param $name
	 * @param $defval [optional]
	 * @param $delete [optional]
	 */
	public function getObject ($name, $defval, $delete) {}

	/**
	 * @param $global [optional]
	 * @param $params [optional]
	 * @param $class_name [optional]
	 */
	public static function factory ($global, $params, $class_name) {}

	/**
	 * (PECL pecl_http &gt;= 0.25.0)<br/>
	 * HttpQueryString singleton
	 * @link http://php.net/manual/en/function.httpquerystring-singleton.php
	 * @param bool $global [optional] <p>
	 * whether to operate on $_GET and
	 * $_SERVER['QUERY_STRING']
	 * </p>
	 * @return HttpQueryString always the same HttpQueryString instance regarding the global setting.
	 */
	public static function singleton ($global = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.25.0)<br/>
	 * Change query strings charset
	 * @link http://php.net/manual/en/function.httpquerystring-xlate.php
	 * @param string $ie <p>
	 * input encoding
	 * </p>
	 * @param string $oe <p>
	 * output encoding
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function xlate ($ie, $oe) {}

	/**
	 * String representation of object
	 * @link http://php.net/manual/en/serializable.serialize.php
	 * @return string the string representation of the object or null
	 * @since 5.1.0
	 */
/**
*<div id="function.serialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">serialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">serialize</span> &mdash; <span class="dc-title">      产生一个可存储的值的表示     </span></p>     </div>    <div class="refsect1 unknown-seealsp" id="refsect1-function.serialize-unknown-seealsp">     <h3 class="title">描述</h3>      <div class="methodsynopsis dc-description">       <span class="type">string</span> <span class="methodname"><strong>serialize</strong></span>        ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>       )</div>      <p class="simpara">      <span class="function"><strong>serialize()</strong></span> 返回字符串，此字符串包含了表示       <code class="parameter">value</code> 的字节流，可以存储于任何地方。     </p>     <p class="simpara">      这有利于存储或传递 PHP 的值，同时不丢失其类型和结构。     </p>    <p class="simpara">     想要将已序列化的字符串变回 PHP 的值，可使用     <span class="function">{@link unserialize()}</span>。<span class="function"><strong>serialize()</strong></span>     可处理除了 <span class="type"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>      之外的任何类型。甚至可以 <span class="function"><strong>serialize()</strong></span> 那些包含了指向其自身引用的数组。你正      <span class="function"><strong>serialize()</strong></span>  的数组／对象中的引用也将被存储。    </p>    <p class="simpara">    当序列化对象时，PHP 将试图在序列动作之前调用该对象的成员函数    <span class="function"><strong>__sleep()</strong></span>。这样就允许对象在被序列化之前做任何清除操作。类似的，当使用     <span class="function">{@link unserialize()}</span> 恢复对象时， 将调用    <span class="function"><strong>__wakeup()</strong></span> 成员函数。    </p>        <blockquote class="note"><p><strong class="note">Note</strong>:      <p class="para">      在 PHP 3 中，对象属性将被序列化，但是方法则会丢失。PHP 4       打破了此限制，可以同时存储属性和方法。请参见<a href="http://php.net/manual/zh/language.oop5.php" class="link">类与对象</a>中的<a href="http://php.net/manual/zh/language.oop5.serialization.php" class="link">序列化对象</a>部分获取更多信息。     </p>    </p></blockquote>     <p class="para">      <div class="example" id="example-6362">       <p><strong>Example #1 <span class="function"><strong>serialize()</strong></span> 示例</strong></p>       <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;$session_data&nbsp;是包含了当前用户&nbsp;session&nbsp;信息的多维数组。<br />//&nbsp;我们使用&nbsp;serialize()&nbsp;在请求结束之前将其存储到数据库中。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect&nbsp;</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"UPDATE&nbsp;sessions&nbsp;SET&nbsp;data&nbsp;=&nbsp;?&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array&nbsp;(</span><span style="color: #9876AA">serialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">$PHP_AUTH_USER</span><span style="color: #007700">);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;sessions&nbsp;(id,&nbsp;data)&nbsp;VALUES(?,&nbsp;?)"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>       </div>       </div>     </p>    <p class="para">     参见：<span class="function">{@link unserialize()}</span>。    </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function serialize()
	{}

	/**
	 * Offset to retrieve
	 * @link http://php.net/manual/en/arrayaccess.offsetget.php
	 * @param mixed $offset <p>
	 * The offset to retrieve.
	 * </p>
	 * @return mixed Can return all value types.
	 * @since 5.0.0
	 */
	public function offsetGet($offset)
	{}

	/**
	 * Constructs the object
	 * @link http://php.net/manual/en/serializable.unserialize.php
	 * @param string $serialized <p>
	 * The string representation of the object.
	 * </p>
	 * @return void
	 * @since 5.1.0
	 */
/**
*<div id="function.unserialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">unserialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">unserialize</span> &mdash; <span class="dc-title">      从已存储的表示中创建 PHP 的值     </span></p>     </div>      <div class="refsect1 description" id="refsect1-function.unserialize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>unserialize</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$str</code></span>    )</div>      <p class="simpara">      <span class="function"><strong>unserialize()</strong></span> 对单一的已序列化的变量进行操作，将其转换回       PHP 的值。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.unserialize-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">str</code></dt>       <dd>        <p class="para">        序列化后的字符串。       </p>       <p class="para">        若被解序列化的变量是一个对象，在成功地重新构造对象之后，PHP      会自动地试图去调用 <a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>      成员函数（如果存在的话）。       </p>       <p class="para">        <blockquote class="note"><p><strong class="note">Note</strong>:          <strong>unserialize_callback_func 指令</strong><br />         <p class="para">         如果在解序列化的时候需要实例化一个未定义类，则可以设置回调函数以供调用（以免得到的是不完整的       <span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span> “__PHP_Incomplete_Class”）。可通过       <var class="filename">php.ini</var>、<span class="function">{@link ini_set()}</span> 或 <var class="filename">.htaccess</var>        定义‘unserialize_callback_func’。每次实例化一个未定义类时它都会被调用。若要禁止这个特性，只需置空此设定。         </p>        </p></blockquote>       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.unserialize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回的是转换之后的值，可为       <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type float">float</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>      或 <span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span>。      </p>   <p class="para">    如果传递的字符串不可解序列化，则返回 <strong><code>FALSE</code></strong>，并产生一个 <strong><code>E_NOTICE</code></strong>。   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.unserialize-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>4.2.0</td>        <td>         添加了 unserialize_callback_func 指令。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.unserialize-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6364">     <p><strong>Example #1 <span class="function"><strong>unserialize()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;这里，我们使用&nbsp;unserialize()&nbsp;装载来自数据库的&nbsp;$session_data&nbsp;数组中的会话数据。<br />//&nbsp;此例是描述&nbsp;serialize()&nbsp;的那个例子的补充。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;data&nbsp;FROM&nbsp;sessions&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #9876AA">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">]);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #9876AA">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;如果执行出错或返回错误，则初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;现在我们需要的是&nbsp;$tmp[0]&nbsp;中已序列化的数据。<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">unserialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错，初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    <div class="example" id="example-6365">     <p><strong>Example #2 unserialize_callback_func 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$serialized_object</span><span style="color: #007700">=</span><span style="color: #DD0000">'O:1:"a":1:{s:5:"value";s:3:"100";}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;unserialize_callback_func&nbsp;从&nbsp;PHP&nbsp;4.2.0&nbsp;起可用<br /></span><span style="color: #9876AA">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'unserialize_callback_func'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mycallback'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;设置您的回调函数<br /><br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">mycallback</span><span style="color: #007700">(</span><span style="color: #9876AA">$classname</span><span style="color: #007700">)&nbsp;<br />{<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;只需包含含有类定义的文件<br />&nbsp;&nbsp;&nbsp;//&nbsp;$classname&nbsp;指出需要的是哪一个类<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.unserialize-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong>    <p class="para">     如果反序列化了 <strong><code>FALSE</code></strong> 的值，或者在过程中发生了错误，都会返回 <strong><code>FALSE</code></strong>。     可以通过 <code class="parameter">str</code> 和 <em>serialize(false)</em> 进行比较，或者捕捉 <strong><code>E_NOTICE</code></strong> 错误来判断这种特殊情况。    </p>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.unserialize-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link serialize()} - 产生一个可存储的值的表示</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.autoload.php" class="link">自动加载对象</a></li>     <li class="member"><a href="http://php.net/manual/zh/var.configuration.php#unserialize-callback-func" class="link">unserialize_callback_func</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function unserialize($serialized)
	{}

	/**
	 * Whether a offset exists
	 * @link http://php.net/manual/en/arrayaccess.offsetexists.php
	 * @param mixed $offset <p>
	 * An offset to check for.
	 * </p>
	 * @return boolean true on success or false on failure.
	 * </p>
	 * <p>
	 * The return value will be casted to boolean if non-boolean was returned.
	 * @since 5.0.0
	 */
	public function offsetExists($offset)
	{}

	/**
	 * Offset to set
	 * @link http://php.net/manual/en/arrayaccess.offsetset.php
	 * @param mixed $offset <p>
	 * The offset to assign the value to.
	 * </p>
	 * @param mixed $value <p>
	 * The value to set.
	 * </p>
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetSet($offset, $value)
	{}

	/**
	 * Offset to unset
	 * @link http://php.net/manual/en/arrayaccess.offsetunset.php
	 * @param mixed $offset <p>
	 * The offset to unset.
	 * </p>
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetUnset($offset)
	{}
}

/**
 * @link http://php.net/manual/en/class.httprequest.php
 */
class HttpRequest  {
	const METH_GET = 1;
	const METH_HEAD = 2;
	const METH_POST = 3;
	const METH_PUT = 4;
	const METH_DELETE = 5;
	const METH_OPTIONS = 6;
	const METH_TRACE = 7;
	const METH_CONNECT = 8;
	const METH_PROPFIND = 9;
	const METH_PROPPATCH = 10;
	const METH_MKCOL = 11;
	const METH_COPY = 12;
	const METH_MOVE = 13;
	const METH_LOCK = 14;
	const METH_UNLOCK = 15;
	const METH_VERSION_CONTROL = 16;
	const METH_REPORT = 17;
	const METH_CHECKOUT = 18;
	const METH_CHECKIN = 19;
	const METH_UNCHECKOUT = 20;
	const METH_MKWORKSPACE = 21;
	const METH_UPDATE = 22;
	const METH_LABEL = 23;
	const METH_MERGE = 24;
	const METH_BASELINE_CONTROL = 25;
	const METH_MKACTIVITY = 26;
	const METH_ACL = 27;
	const VERSION_1_0 = 1;
	const VERSION_1_1 = 2;
	const VERSION_NONE = 0;
	const VERSION_ANY = 0;
	const SSL_VERSION_TLSv1 = 1;
	const SSL_VERSION_SSLv2 = 2;
	const SSL_VERSION_SSLv3 = 3;
	const SSL_VERSION_ANY = 0;
	const IPRESOLVE_V4 = 1;
	const IPRESOLVE_V6 = 2;
	const IPRESOLVE_ANY = 0;
	const AUTH_BASIC = 1;
	const AUTH_DIGEST = 2;
	const AUTH_NTLM = 8;
	const AUTH_GSSNEG = 4;
	const AUTH_ANY = -1;
	const PROXY_SOCKS4 = 4;
	const PROXY_SOCKS5 = 5;
	const PROXY_HTTP = 0;

	private $options;
	private $postFields;
	private $postFiles;
	private $responseInfo;
	private $responseMessage;
	private $responseCode;
	private $responseStatus;
	private $method;
	private $url;
	private $contentType;
	private $requestBody;
	private $queryData;
	private $putFile;
	private $putData;
	private $history;
	public $recordHistory;


	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * HttpRequest constructor
	 * @link http://php.net/manual/en/function.httprequest-construct.php
	 * @param string $url [optional] <p>
	 * the target request url
	 * </p>
	 * @param int $request_method [optional] <p>
	 * the request method to use
	 * </p>
	 * @param array $options [optional] <p>
	 * an associative array with request options
	 * </p>
	 * @return void 
	 */
	public function __construct ($url = null, $request_method = null, array $options = null ) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set options
	 * @link http://php.net/manual/en/function.httprequest-setoptions.php
	 * @param array $options [optional] <p>
	 * an associative array, which values will overwrite the 
	 * currently set request options;
	 * if empty or omitted, the options of the HttpRequest object will be reset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setOptions (array $options = null ) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get options
	 * @link http://php.net/manual/en/function.httprequest-getoptions.php
	 * @return array an associative array containing currently set options.
	 */
	public function getOptions () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set ssl options
	 * @link http://php.net/manual/en/function.httprequest-setssloptions.php
	 * @param array $options [optional] <p>
	 * an associative array containing any SSL specific options;
	 * if empty or omitted, the SSL options will be reset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setSslOptions (array $options = null ) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get ssl options
	 * @link http://php.net/manual/en/function.httprequest-getssloptions.php
	 * @return array an associative array containing any previously set SSL options.
	 */
	public function getSslOptions () {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Add ssl options
	 * @link http://php.net/manual/en/function.httprequest-addssloptions.php
	 * @param array $options <p>
	 * an associative array as parameter containing additional SSL specific options
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addSslOptions (sarray $option) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Add headers
	 * @link http://php.net/manual/en/function.httprequest-addheaders.php
	 * @param array $headers <p>
	 * an associative array as parameter containing additional header name/value pairs
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addHeaders (array $headers) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get headers
	 * @link http://php.net/manual/en/function.httprequest-getheaders.php
	 * @return array an associative array containing all currently set headers.
	 */
	public function getHeaders () {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Set headers
	 * @link http://php.net/manual/en/function.httprequest-setheaders.php
	 * @param array $headers [optional] <p>
	 * an associative array as parameter containing header name/value pairs;
	 * if empty or omitted, all previously set headers will be unset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setHeaders ( array $headers = null ) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Add cookies
	 * @link http://php.net/manual/en/function.httprequest-addcookies.php
	 * @param array $cookies <p>
	 * an associative array containing any cookie name/value pairs to add
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addCookies (array $cookies) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get cookies
	 * @link http://php.net/manual/en/function.httprequest-getcookies.php
	 * @return array an associative array containing any previously set cookies.
	 */
	public function getCookies () {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Set cookies
	 * @link http://php.net/manual/en/function.httprequest-setcookies.php
	 * @param array $cookies [optional] <p>
	 * an associative array as parameter containing cookie name/value pairs;
	 * if empty or omitted, all previously set cookies will be unset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setCookies ( array $cookies = null ) {}

	/**
	 * (PECL pecl_http &gt;= 1.0.0)<br/>
	 * Enable cookies
	 * @link http://php.net/manual/en/function.httprequest-enablecookies.php
	 * @return bool true on success or false on failure.
	 */
	public function enableCookies () {}

	/**
	 * (PECL pecl_http &gt;= 1.0.0)<br/>
	 * Reset cookies
	 * @link http://php.net/manual/en/function.httprequest-resetcookies.php
	 * @param bool $session_only [optional] <p>
	 * whether only session cookies should be reset (needs libcurl >= v7.15.4, else libcurl >= v7.14.1)
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function resetCookies ($session_only = null) {}

	public function flushCookies () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set method
	 * @link http://php.net/manual/en/function.httprequest-setmethod.php
	 * @param int $request_method <p>
	 * the request method to use
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setMethod ($request_method) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get method
	 * @link http://php.net/manual/en/function.httprequest-getmethod.php
	 * @return int the currently set request method.
	 */
	public function getMethod () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set URL
	 * @link http://php.net/manual/en/function.httprequest-seturl.php
	 * @param string $url <p>
	 * the request url
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setUrl ($url) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get url
	 * @link http://php.net/manual/en/function.httprequest-geturl.php
	 * @return string the currently set request url as string.
	 */
	public function getUrl () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set content type
	 * @link http://php.net/manual/en/function.httprequest-setcontenttype.php
	 * @param string $content_type <p>
	 * the content type of the request (primary/secondary)
	 * </p>
	 * @return bool TRUE on success, or FALSE if the content type does not seem to
	 * contain a primary and a secondary part.
	 */
	public function setContentType ($content_type) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get content type
	 * @link http://php.net/manual/en/function.httprequest-getcontenttype.php
	 * @return string the previously set content type as string.
	 */
	public function getContentType () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set query data
	 * @link http://php.net/manual/en/function.httprequest-setquerydata.php
	 * @param mixed $query_data <p>
	 * a string or associative array parameter containing the pre-encoded 
	 * query string or to be encoded query fields;
	 * if empty, the query data will be unset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setQueryData ($query_data) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get query data
	 * @link http://php.net/manual/en/function.httprequest-getquerydata.php
	 * @return string a string containing the urlencoded query.
	 */
	public function getQueryData () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Add query data
	 * @link http://php.net/manual/en/function.httprequest-addquerydata.php
	 * @param array $query_params <p>
	 * an associative array as parameter containing the query fields to add
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addQueryData (array $query_params) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set post fields
	 * @link http://php.net/manual/en/function.httprequest-setpostfields.php
	 * @param array $post_data <p>
	 * an associative array containing the post fields;
	 * if empty, the post data will be unset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setPostFields (array $post_data) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get post fields
	 * @link http://php.net/manual/en/function.httprequest-getpostfields.php
	 * @return array the currently set post fields as associative array.
	 */
	public function getPostFields () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Add post fields
	 * @link http://php.net/manual/en/function.httprequest-addpostfields.php
	 * @param array $post_data <p>
	 * an associative array as parameter containing the post fields
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addPostFields (array $post_data) {}

	/**
	 * @param $request_body_data [optional]
	 */
	public function setBody ($request_body_data) {}

	public function getBody () {}

	/**
	 * @param $request_body_data
	 */
	public function addBody ($request_body_data) {}

	/**
	 * (PECL pecl_http 0.14.0-1.4.1)<br/>
	 * Set raw post data
	 * @link http://php.net/manual/en/function.httprequest-setrawpostdata.php
	 * @param string $raw_post_data [optional] <p>
	 * raw post data
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setRawPostData ($raw_post_data = null) {}

	/**
	 * (PECL pecl_http 0.14.0-1.4.1)<br/>
	 * Get raw post data
	 * @link http://php.net/manual/en/function.httprequest-getrawpostdata.php
	 * @return string a string containing the currently set raw post data.
	 */
	public function getRawPostData () {}

	/**
	 * (PECL pecl_http 0.14.0-1.4.1)<br/>
	 * Add raw post data
	 * @link http://php.net/manual/en/function.httprequest-addrawpostdata.php
	 * @param string $raw_post_data <p>
	 * the raw post data to concatenate
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addRawPostData ($raw_post_data) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set post files
	 * @link http://php.net/manual/en/function.httprequest-setpostfiles.php
	 * @param array $post_files <p>
	 * an array containing the files to post;
	 * if empty, the post files will be unset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setPostFiles (array $post_files) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Add post file
	 * @link http://php.net/manual/en/function.httprequest-addpostfile.php
	 * @param string $name <p>
	 * the form element name
	 * </p>
	 * @param string $file <p>
	 * the path to the file
	 * </p>
	 * @param string $content_type [optional] <p>
	 * the content type of the file
	 * </p>
	 * @return bool TRUE on success, or FALSE if the content type seems not to contain a 
	 * primary and a secondary content type part.
	 */
	public function addPostFile ($name, $file, $content_type = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get post files
	 * @link http://php.net/manual/en/function.httprequest-getpostfiles.php
	 * @return array an array containing currently set post files.
	 */
	public function getPostFiles () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set put file
	 * @link http://php.net/manual/en/function.httprequest-setputfile.php
	 * @param string $file [optional] <p>
	 * the path to the file to send;
	 * if empty or omitted the put file will be unset
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setPutFile ($file = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get put file
	 * @link http://php.net/manual/en/function.httprequest-getputfile.php
	 * @return string a string containing the path to the currently set put file.
	 */
	public function getPutFile () {}

	/**
	 * (PECL pecl_http &gt;= 0.25.0)<br/>
	 * Set put data
	 * @link http://php.net/manual/en/function.httprequest-setputdata.php
	 * @param string $put_data [optional] <p>
	 * the data to upload
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function setPutData ($put_data = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.25.0)<br/>
	 * Get put data
	 * @link http://php.net/manual/en/function.httprequest-getputdata.php
	 * @return string a string containing the currently set PUT data.
	 */
	public function getPutData () {}

	/**
	 * (PECL pecl_http &gt;= 0.25.0)<br/>
	 * Add put data
	 * @link http://php.net/manual/en/function.httprequest-addputdata.php
	 * @param string $put_data <p>
	 * the data to concatenate
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function addPutData ($put_data) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Send request
	 * @link http://php.net/manual/en/function.httprequest-send.php
	 * @return HttpMessage the received response as HttpMessage object.
	 */
	public function send () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response data
	 * @link http://php.net/manual/en/function.httprequest-getresponsedata.php
	 * @return array an associative array with the key "headers" containing an associative
	 * array holding all response headers, as well as the key "body" containing a
	 * string with the response body.
	 */
	public function getResponseData () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response header(s)
	 * @link http://php.net/manual/en/function.httprequest-getresponseheader.php
	 * @param string $name [optional] <p>
	 * header to read; if empty, all response headers will be returned
	 * </p>
	 * @return mixed either a string with the value of the header matching name if requested, 
	 * FALSE on failure, or an associative array containing all response headers.
	 */
	public function getResponseHeader ($name = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.23.0)<br/>
	 * Get response cookie(s)
	 * @link http://php.net/manual/en/function.httprequest-getresponsecookies.php
	 * @param int $flags [optional] <p>
	 * http_parse_cookie flags
	 * </p>
	 * @param array $allowed_extras [optional] <p>
	 * allowed keys treated as extra information instead of cookie names
	 * </p>
	 * @return stdClass[] an array of stdClass objects like http_parse_cookie would return.
	 */
	public function getResponseCookies ($flags = null,  array $allowed_extras = null ) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response code
	 * @link http://php.net/manual/en/function.httprequest-getresponsecode.php
	 * @return int an int representing the response code.
	 */
	public function getResponseCode () {}

	/**
	 * (PECL pecl_http &gt;= 0.23.0)<br/>
	 * Get response status
	 * @link http://php.net/manual/en/function.httprequest-getresponsestatus.php
	 * @return string a string containing the response status text.
	 */
	public function getResponseStatus () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response body
	 * @link http://php.net/manual/en/function.httprequest-getresponsebody.php
	 * @return string a string containing the response body.
	 */
	public function getResponseBody () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response info
	 * @link http://php.net/manual/en/function.httprequest-getresponseinfo.php
	 * @param string $name [optional] <p>
	 * the info to read; if empty or omitted, an associative array containing
	 * all available info will be returned
	 * </p>
	 * @return mixed either a scalar containing the value of the info matching name if
	 * requested, FALSE on failure, or an associative array containing all
	 * available info.
	 */
	public function getResponseInfo ($name = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get response message
	 * @link http://php.net/manual/en/function.httprequest-getresponsemessage.php
	 * @return HttpMessage an HttpMessage object of the response.
	 */
	public function getResponseMessage () {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Get raw response message
	 * @link http://php.net/manual/en/function.httprequest-getrawresponsemessage.php
	 * @return string the complete web server response, including the headers in a form of a string.
	 */
	public function getRawResponseMessage () {}

	/**
	 * (PECL pecl_http &gt;= 0.11.0)<br/>
	 * Get request message
	 * @link http://php.net/manual/en/function.httprequest-getrequestmessage.php
	 * @return HttpMessage an HttpMessage object representing the sent request.
	 */
	public function getRequestMessage () {}

	/**
	 * (PECL pecl_http &gt;= 0.21.0)<br/>
	 * Get raw request message
	 * @link http://php.net/manual/en/function.httprequest-getrawrequestmessage.php
	 * @return string an HttpMessage in a form of a string.
	 */
	public function getRawRequestMessage () {}

	/**
	 * (PECL pecl_http &gt;= 0.15.0)<br/>
	 * Get history
	 * @link http://php.net/manual/en/function.httprequest-gethistory.php
	 * @return HttpMessage an HttpMessage object representing the complete request/response history.
	 */
	public function getHistory () {}

	/**
	 * (PECL pecl_http &gt;= 0.15.0)<br/>
	 * Clear history
	 * @link http://php.net/manual/en/function.httprequest-clearhistory.php
	 * @return void 
	 */
	public function clearHistory () {}

	/**
	 * @param $url [optional]
	 * @param $method [optional]
	 * @param $options [optional]
	 * @param $class_name [optional]
	 */
	public static function factory ($url, $method, $options, $class_name) {}

	/**
	 * @param $url
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function get ($url, $options, &$info) {}

	/**
	 * @param $url
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function head ($url, $options, &$info) {}

	/**
	 * @param $url
	 * @param $data
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function postData ($url, $data, $options, &$info) {}

	/**
	 * @param $url
	 * @param $data
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function postFields ($url, $data, $options, &$info) {}

	/**
	 * @param $url
	 * @param $data
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function putData ($url, $data, $options, &$info) {}

	/**
	 * @param $url
	 * @param $file
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function putFile ($url, $file, $options, &$info) {}

	/**
	 * @param $url
	 * @param $stream
	 * @param $options [optional]
	 * @param $info [optional]
	 */
	public static function putStream ($url, $stream, $options, &$info) {}

	/**
	 * @param $method_name
	 */
	public static function methodRegister ($method_name) {}

	/**
	 * @param $method
	 */
	public static function methodUnregister ($method) {}

	/**
	 * @param $method_id
	 */
	public static function methodName ($method_id) {}

	/**
	 * @param $method
	 */
	public static function methodExists ($method) {}

	/**
	 * @param $fields
	 * @param $files
	 */
	public static function encodeBody ($fields, $files) {}

}

class HttpRequestDataShare implements Countable {
	private static $instance;
	public $cookie;
	public $dns;
	public $ssl;
	public $connect;


	public function __destruct () {}

/**
*<div id="function.count" class="refentry">    <div class="refnamediv">     <h1 class="refname">count</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">count</span> &mdash; <span class="dc-title">计算数组中的单元数目，或对象中的属性个数</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$array_or_countable</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$mode</code><span class="initializer"> = COUNT_NORMAL</span></span>   ] )</div>    <p class="para rdfs-comment">    统计出数组里的所有元素的数量，或者对象里的东西。   </p>     <p class="para">      对于对象，如果安装了 <a href="http://php.net/manual/zh/ref.spl.php" class="link">SPL</a>，可以通过实现      <em>Countable</em> 接口对 <span class="function"><strong>count()</strong></span>挂钩（hook）      。该接口只有一个方法      <span class="methodname">{@link Countable::count()}</span>，此方法为 <span class="function"><strong>count()</strong></span>      函数返回值。     </p>     <p class="para">      关于 PHP 中如何实现和使用数组可以参考手册中<a href="http://php.net/manual/zh/language.types.array.php" class="link">数组</a>章节中的详细描述。   </p>  </div>      <div class="refsect1 parameters" id="refsect1-function.count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array_or_countable</code></dt>       <dd>        <p class="para">        数组或者 <a href="http://php.net/manual/zh/class.countable.php" class="classname">Countable</a>  对象。       </p>      </dd>                 <dt> <code class="parameter">mode</code></dt>       <dd>        <p class="para">        如果可选的 <code class="parameter">mode</code> 参数设为      <strong><code>COUNT_RECURSIVE</code></strong>（或 1），<span class="function"><strong>count()</strong></span>      将递归地对数组计数。对计算多维数组的所有单元尤其有用。       </p>       <div class="caution"><strong class="caution">Caution</strong>        <p class="para">         <span class="function"><strong>count()</strong></span> 能检测递归来避免无限循环，但每次出现时会产生 <strong><code>E_WARNING</code></strong> 错误         （如果 array 不止一次包含了自身）并返回大于预期的统计数字。        </p>       </div>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回 <code class="parameter">array_or_countable</code> 中的单元数目。        如果参数既不是数组，也不是实现      <em>Countable</em> 接口的对象，将返回      <em>1</em>。    有个例外：如果      <code class="parameter">array_or_countable</code> 是 <strong><code>NULL</code></strong> 则结果是 <em>0</em>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6085">     <p><strong>Example #1 <span class="function"><strong>count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$a</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$a</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">false</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> int(3) int(3)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 12 // PHP 7.2 起 int(0)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 14 // PHP 7.2 起 int(1) </pre></div>     </div>    </div>   </p>   <p class="para">    <div class="example" id="example-6086">     <p><strong>Example #2 递归 <span class="function"><strong>count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$food&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'fruits'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'veggie'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'collard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pea'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;recursive&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">COUNT_RECURSIVE</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;8<br /><br />//&nbsp;normal&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;2<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.count-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        当无效的 countable 类型传递给 <code class="parameter">array_or_countable</code> 参数时，<span class="function"><strong>count()</strong></span> 会产生警告。       </td>      </tr>      </tbody>       </table>   </div>      <div class="refsect1 seealso" id="refsect1-function.count-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link is_array()} - 检测变量是否是数组</span></li>     <li class="member"><span class="function">{@link isset()} - 检测变量是否已设置并且非 NULL</span></li>     <li class="member"><span class="function">{@link empty()} - 检查一个变量是否为空</span></li>     <li class="member"><span class="function">{@link strlen()} - 获取字符串长度</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function count () {}

	/**
	 * @param HttpRequest $request
	 */
	public function attach (HttpRequest $request) {}

	/**
	 * @param HttpRequest $request
	 */
	public function detach (HttpRequest $request) {}

/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>reset()</strong></span> 将 <code class="parameter">array</code>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset () {}

	/**
	 * @param $global [optional]
	 * @param $class_name [optional]
	 */
	public static function factory ($global, $class_name) {}

	/**
	 * @param $global [optional]
	 */
	public static function singleton ($global) {}

}

/**
 * @link http://php.net/manual/en/class.httprequestpool.php
 */
class HttpRequestPool implements Countable, Iterator {

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * HttpRequestPool constructor
	 * @link http://php.net/manual/en/function.httprequestpool-construct.php
	 * @param HttpRequest $request [optional] <p>
	 * HttpRequest object to attach
	 * </p>
	 */
	public function __construct ( HttpRequest $request = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * HttpRequestPool destructor
	 * @link http://php.net/manual/en/function.httprequestpool-destruct.php
	 * @return void 
	 */
	public function __destruct () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Attach HttpRequest
	 * @link http://php.net/manual/en/function.httprequestpool-attach.php
	 * @param HttpRequest $request <p>
	 * an HttpRequest object not already attached to any HttpRequestPool object
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function attach ( HttpRequest $request) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Detach HttpRequest
	 * @link http://php.net/manual/en/function.httprequestpool-detach.php
	 * @param HttpRequest $request <p>
	 * an HttpRequest object attached to this HttpRequestPool object
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function detach ( HttpRequest $request ) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Send all requests
	 * @link http://php.net/manual/en/function.httprequestpool-send.php
	 * @return bool true on success or false on failure.
	 */
	public function send () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Reset request pool
	 * @link http://php.net/manual/en/function.httprequestpool-reset.php
	 * @return void 
	 */
/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>reset()</strong></span> 将 <code class="parameter">array</code>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset () {}

	/**
	 * (PECL pecl_http &gt;= 0.15.0)<br/>
	 * Perform socket actions
	 * @link http://php.net/manual/en/function.httprequestpool-socketperform.php
	 * @return bool TRUE until each request has finished its transaction.
	 */
	protected function socketPerform () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Perform socket select
	 * @link http://php.net/manual/en/function.httprequestpool-socketselect.php
	 * @return bool true on success or false on failure.
	 */
	protected function socketSelect () {}

	public function valid () {}

/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>current</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong>current()</strong></span>      返回 <strong><code>FALSE</code></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong>current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span> <strong><code>FALSE</code></strong> 的单元则本函数在碰到这个单元时也返回        <strong><code>FALSE</code></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </p>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current () {}

/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>key</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$array</code></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong>key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong>key()</strong></span> 会返回 <strong><code>NULL</code></strong>。   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <code class="parameter">array</code> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </p>  </div>   <div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong>key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </pre></div>     </div>    </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key () {}

/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>next</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong>next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        受影响的 <span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span> 。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><code>FALSE</code></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong>next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span> <strong><code>FALSE</code></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$handle</code></span>    )</div>    <p class="para rdfs-comment">    将 <code class="parameter">handle</code> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">handle</code></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong>rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> Foolly long sentence. </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind () {}

/**
*<div id="function.count" class="refentry">    <div class="refnamediv">     <h1 class="refname">count</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">count</span> &mdash; <span class="dc-title">计算数组中的单元数目，或对象中的属性个数</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$array_or_countable</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$mode</code><span class="initializer"> = COUNT_NORMAL</span></span>   ] )</div>    <p class="para rdfs-comment">    统计出数组里的所有元素的数量，或者对象里的东西。   </p>     <p class="para">      对于对象，如果安装了 <a href="http://php.net/manual/zh/ref.spl.php" class="link">SPL</a>，可以通过实现      <em>Countable</em> 接口对 <span class="function"><strong>count()</strong></span>挂钩（hook）      。该接口只有一个方法      <span class="methodname">{@link Countable::count()}</span>，此方法为 <span class="function"><strong>count()</strong></span>      函数返回值。     </p>     <p class="para">      关于 PHP 中如何实现和使用数组可以参考手册中<a href="http://php.net/manual/zh/language.types.array.php" class="link">数组</a>章节中的详细描述。   </p>  </div>      <div class="refsect1 parameters" id="refsect1-function.count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array_or_countable</code></dt>       <dd>        <p class="para">        数组或者 <a href="http://php.net/manual/zh/class.countable.php" class="classname">Countable</a>  对象。       </p>      </dd>                 <dt> <code class="parameter">mode</code></dt>       <dd>        <p class="para">        如果可选的 <code class="parameter">mode</code> 参数设为      <strong><code>COUNT_RECURSIVE</code></strong>（或 1），<span class="function"><strong>count()</strong></span>      将递归地对数组计数。对计算多维数组的所有单元尤其有用。       </p>       <div class="caution"><strong class="caution">Caution</strong>        <p class="para">         <span class="function"><strong>count()</strong></span> 能检测递归来避免无限循环，但每次出现时会产生 <strong><code>E_WARNING</code></strong> 错误         （如果 array 不止一次包含了自身）并返回大于预期的统计数字。        </p>       </div>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回 <code class="parameter">array_or_countable</code> 中的单元数目。        如果参数既不是数组，也不是实现      <em>Countable</em> 接口的对象，将返回      <em>1</em>。    有个例外：如果      <code class="parameter">array_or_countable</code> 是 <strong><code>NULL</code></strong> 则结果是 <em>0</em>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6085">     <p><strong>Example #1 <span class="function"><strong>count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$a</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$a</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">false</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> int(3) int(3)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 12 // PHP 7.2 起 int(0)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 14 // PHP 7.2 起 int(1) </pre></div>     </div>    </div>   </p>   <p class="para">    <div class="example" id="example-6086">     <p><strong>Example #2 递归 <span class="function"><strong>count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$food&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'fruits'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'veggie'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'collard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pea'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;recursive&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">COUNT_RECURSIVE</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;8<br /><br />//&nbsp;normal&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;2<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.count-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        当无效的 countable 类型传递给 <code class="parameter">array_or_countable</code> 参数时，<span class="function"><strong>count()</strong></span> 会产生警告。       </td>      </tr>      </tbody>       </table>   </div>      <div class="refsect1 seealso" id="refsect1-function.count-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link is_array()} - 检测变量是否是数组</span></li>     <li class="member"><span class="function">{@link isset()} - 检测变量是否已设置并且非 NULL</span></li>     <li class="member"><span class="function">{@link empty()} - 检查一个变量是否为空</span></li>     <li class="member"><span class="function">{@link strlen()} - 获取字符串长度</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function count () {}

	/**
	 * (PECL pecl_http &gt;= 0.16.0)<br/>
	 * Get attached requests
	 * @link http://php.net/manual/en/function.httprequestpool-getattachedrequests.php
	 * @return array an array containing all currently attached HttpRequest objects.
	 */
	public function getAttachedRequests () {}

	/**
	 * (PECL pecl_http &gt;= 0.16.0)<br/>
	 * Get finished requests
	 * @link http://php.net/manual/en/function.httprequestpool-getfinishedrequests.php
	 * @return array an array containing all attached HttpRequest objects that already have finished their work.
	 */
	public function getFinishedRequests () {}

	/**
	 * @param $enable [optional]
	 */
	public function enablePipelining ($enable) {}

	/**
	 * @param $enable [optional]
	 */
	public function enableEvents ($enable) {}

}

/**
 * @link http://php.net/manual/en/class.httpresponse.php
 */
class HttpResponse  {
	const REDIRECT = 0;
	const REDIRECT_PERM = 301;
	const REDIRECT_FOUND = 302;
	const REDIRECT_POST = 303;
	const REDIRECT_PROXY = 305;
	const REDIRECT_TEMP = 307;

	private static $sent;
	private static $catch;
	private static $mode;
	private static $stream;
	private static $file;
	private static $data;
	protected static $cache;
	protected static $gzip;
	protected static $eTag;
	protected static $lastModified;
	protected static $cacheControl;
	protected static $contentType;
	protected static $contentDisposition;
	protected static $bufferSize;
	protected static $throttleDelay;


	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Set header
	 * @link http://php.net/manual/en/function.httpresponse-setheader.php
	 * @param string $name <p>
	 * the name of the header
	 * </p>
	 * @param mixed $value [optional] <p>
	 * the value of the header;
	 * if not set, no header with this name will be sent
	 * </p>
	 * @param bool $replace [optional] <p>
	 * whether an existing header should be replaced
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setHeader ($name, $value = null, $replace = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Get header
	 * @link http://php.net/manual/en/function.httpresponse-getheader.php
	 * @param string $name [optional] <p>
	 * specifies the name of the header to read;
	 * if empty or omitted, an associative array with all headers will be returned
	 * </p>
	 * @return mixed either a string containing the value of the header matching name,
	 * false on failure, or an associative array with all headers.
	 */
	public static function getHeader ($name = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set ETag
	 * @link http://php.net/manual/en/function.httpresponse-setetag.php
	 * @param string $etag <p>
	 * unquoted string as parameter containing the ETag
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setETag ($etag) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get ETag
	 * @link http://php.net/manual/en/function.httpresponse-getetag.php
	 * @return string the calculated or previously set ETag as unquoted string.
	 */
	public static function getETag () {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Set last modified
	 * @link http://php.net/manual/en/function.httpresponse-setlastmodified.php
	 * @param int $timestamp <p>
	 * Unix timestamp representing the last modification time of the sent entity
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setLastModified ($timestamp) {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Get last modified
	 * @link http://php.net/manual/en/function.httpresponse-getlastmodified.php
	 * @return int the calculated or previously set Unix timestamp.
	 */
	public static function getLastModified () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set content disposition
	 * @link http://php.net/manual/en/function.httpresponse-setcontentdisposition.php
	 * @param string $filename <p>
	 * the file name the &quot;Save as...&quot; dialog should display
	 * </p>
	 * @param bool $inline [optional] <p>
	 * if set to true and the user agent knows how to handle the content type,
	 * it will probably not cause the popup window to be shown
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setContentDisposition ($filename, $inline = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get content disposition
	 * @link http://php.net/manual/en/function.httpresponse-getcontentdisposition.php
	 * @return string the current content disposition as string like sent in a header.
	 */
	public static function getContentDisposition () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set content type
	 * @link http://php.net/manual/en/function.httpresponse-setcontenttype.php
	 * @param string $content_type <p>
	 * the content type of the sent entity (primary/secondary)
	 * </p>
	 * @return bool true on success, or false if the content type does not seem to
	 * contain a primary and secondary content type part.
	 */
	public static function setContentType ($content_type) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get content type
	 * @link http://php.net/manual/en/function.httpresponse-getcontenttype.php
	 * @return string the currently set content type as string.
	 */
	public static function getContentType () {}

	/**
	 * (PECL pecl_http &gt;= 0.13.0)<br/>
	 * Guess content type
	 * @link http://php.net/manual/en/function.httpresponse-guesscontenttype.php
	 * @param string $magic_file <p>
	 * specifies the magic.mime database to use
	 * </p>
	 * @param int $magic_mode [optional] <p>
	 * flags for libmagic
	 * </p>
	 * @return string the guessed content type on success or false on failure.
	 */
	public static function guessContentType ($magic_file, $magic_mode = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set cache
	 * @link http://php.net/manual/en/function.httpresponse-setcache.php
	 * @param bool $cache <p>
	 * whether caching should be attempted
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setCache ($cache) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get cache
	 * @link http://php.net/manual/en/function.httpresponse-getcache.php
	 * @return bool true if caching should be attempted, else false.
	 */
	public static function getCache () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set cache control
	 * @link http://php.net/manual/en/function.httpresponse-setcachecontrol.php
	 * @param string $control <p>
	 * the primary cache control setting
	 * </p>
	 * @param int $max_age [optional] <p>
	 * the max-age in seconds, suggesting how long the cache entry is valid on the client side
	 * </p>
	 * @param bool $must_revalidate [optional] <p>
	 * whether the cached entity should be revalidated by the client for every request
	 * </p>
	 * @return bool true on success, or false if control does not match one of public, private or no-cache.
	 */
	public static function setCacheControl ($control, $max_age = null, $must_revalidate = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get cache control
	 * @link http://php.net/manual/en/function.httpresponse-getcachecontrol.php
	 * @return string the current cache control setting as a string like sent in a header.
	 */
	public static function getCacheControl () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set gzip
	 * @link http://php.net/manual/en/function.httpresponse-setgzip.php
	 * @param bool $gzip <p>
	 * whether GZip compression should be enabled
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setGzip ($gzip) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get gzip
	 * @link http://php.net/manual/en/function.httpresponse-getgzip.php
	 * @return bool true if GZip compression is enabled, else false.
	 */
	public static function getGzip () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set throttle delay
	 * @link http://php.net/manual/en/function.httpresponse-setthrottledelay.php
	 * @param float $seconds <p>
	 * seconds to sleep after each chunk sent
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setThrottleDelay ($seconds) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get throttle delay
	 * @link http://php.net/manual/en/function.httpresponse-getthrottledelay.php
	 * @return double a double representing the throttle delay in seconds.
	 */
	public static function getThrottleDelay () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set buffer size
	 * @link http://php.net/manual/en/function.httpresponse-setbuffersize.php
	 * @param int $bytes <p>
	 * the chunk size in bytes
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setBufferSize ($bytes) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get buffer size
	 * @link http://php.net/manual/en/function.httpresponse-getbuffersize.php
	 * @return int an int representing the current buffer size in bytes.
	 */
	public static function getBufferSize () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set data
	 * @link http://php.net/manual/en/function.httpresponse-setdata.php
	 * @param mixed $data <p>
	 * data to send
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setData ($data) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get data
	 * @link http://php.net/manual/en/function.httpresponse-getdata.php
	 * @return string a string containing the previously set data to send.
	 */
	public static function getData () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set file
	 * @link http://php.net/manual/en/function.httpresponse-setfile.php
	 * @param string $file <p>
	 * the path to the file to send
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setFile ($file) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get file
	 * @link http://php.net/manual/en/function.httpresponse-getfile.php
	 * @return string the previously set path to the file to send as string.
	 */
	public static function getFile () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Set stream
	 * @link http://php.net/manual/en/function.httpresponse-setstream.php
	 * @param resource $stream <p>
	 * already opened stream from which the data to send will be read
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function setStream ($stream) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get Stream
	 * @link http://php.net/manual/en/function.httpresponse-getstream.php
	 * @return resource the previously set resource.
	 */
	public static function getStream () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Send response
	 * @link http://php.net/manual/en/function.httpresponse-send.php
	 * @param bool $clean_ob [optional] <p>
	 * whether to destroy all previously started output handlers and their buffers
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public static function send ($clean_ob = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Capture script output
	 * @link http://php.net/manual/en/function.httpresponse-capture.php
	 * @return void 
	 */
	public static function capture () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Redirect
	 * @link http://php.net/manual/en/function.httpresponse-redirect.php
	 * @param string $url [optional] 
	 * @param array $params [optional] 
	 * @param bool $session [optional] 
	 * @param int $status [optional] 
	 * @return void 
	 */
	public static function redirect ($url = null,  array $params = null , $session = null, $status = null) {}

	/**
	 * (PECL pecl_http &gt;= 0.12.0)<br/>
	 * Send HTTP response status
	 * @link http://php.net/manual/en/function.httpresponse-status.php
	 * @param int $status 
	 * @return bool 
	 */
	public static function status ($status) {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get request headers
	 * @link http://php.net/manual/en/function.httpresponse-getrequestheaders.php
	 * @return array 
	 */
	public static function getRequestHeaders () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get request body
	 * @link http://php.net/manual/en/function.httpresponse-getrequestbody.php
	 * @return string 
	 */
	public static function getRequestBody () {}

	/**
	 * (PECL pecl_http &gt;= 0.10.0)<br/>
	 * Get request body stream
	 * @link http://php.net/manual/en/function.httpresponse-getrequestbodystream.php
	 * @return resource 
	 */
	public static function getRequestBodyStream () {}

}

class HttpUtil  {

	/**
	 * @param $timestamp [optional]
	 */
/**
*<div id="function.date" class="refentry">  <div class="refnamediv">   <h1 class="refname">date</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">date</span> &mdash; <span class="dc-title">格式化一个本地时间／日期</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.date-description">   <h3 class="title">说明</h3>    <div class="methodsynopsis dc-description">     <span class="type">string</span> <span class="methodname"><strong>date</strong></span>      ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$format</code></span>     [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$timestamp</code></span>    ] )</div>    <p class="para rdfs-comment">    返回将整数 <code class="parameter">timestamp</code>    按照给定的格式字串而产生的字符串。如果没有给出时间戳则使用本地当前时间。换句话说，<code class="parameter">timestamp</code>    是可选的，默认值为 <span class="function">{@link time()}</span>。   </p>   <div class="tip"><strong class="tip">Tip</strong>    <p class="para">     自 PHP 5.1.1 起有几个有用的<a href="http://php.net/manual/zh/datetime.constants.php" class="link">常量</a>可用作标准的日期／时间格式来指定     <code class="parameter">format</code> 参数。    </p>   </div>   <div class="tip"><strong class="tip">Tip</strong>    <p class="para">     自 PHP 5.1 起在 <var class="varname"><var class="varname"><a href="http://php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER['REQUEST_TIME']</a></var></var>     中保存了发起该请求时刻的时间戳。    </p>   </div>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     有效的时间戳典型范围是格林威治时间 1901 年 12 月 13 日 20:45:54     到 2038 年 1 月 19 日 03:14:07。（此范围符合 32     位有符号整数的最小值和最大值）。不过在 PHP 5.1 之前此范围在某些系统（如     Windows）中限制为从 1970 年 1 月 1 日到 2038 年 1 月 19 日。    </p>   </p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     要将字符串表达的时间转换成时间戳，应该使用     <span class="function">{@link strtotime()}</span>。此外一些数据库有一些函数将其时间格式转换成时间戳（例如     MySQL 的 <a href="http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html" class="link external">&raquo;&nbsp;UNIX_TIMESTAMP</a> 函数）。    </p>   </p></blockquote>   <p class="para">    <table class="doctable table">     <caption><strong>格式字串可以识别以下 <code class="parameter">format</code> 参数的字符串</strong></caption>           <thead>       <tr>        <th><code class="parameter">format</code> 字符</th>        <th>说明</th>        <th>返回值例子</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td style="text-align: center;"><em class="emphasis">日</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>d</em></td>        <td>月份中的第几天，有前导零的 2 位数字</td>        <td><em>01</em> 到 <em>31</em></td>       </tr>        <tr>        <td><em>D</em></td>        <td>星期中的第几天，文本表示，3 个字母</td>        <td><em>Mon</em> 到 <em>Sun</em></td>       </tr>        <tr>        <td><em>j</em></td>        <td>月份中的第几天，没有前导零</td>        <td><em>1</em> 到 <em>31</em></td>       </tr>        <tr>        <td><em>l</em>（“L”的小写字母）</td>        <td>星期几，完整的文本格式</td>        <td><em>Sunday</em> 到 <em>Saturday</em></td>       </tr>        <tr>        <td><em>N</em></td>        <td>ISO-8601 格式数字表示的星期中的第几天（PHP 5.1.0 新加）</td>        <td><em>1</em>（表示星期一）到 <em>7</em>（表示星期天）</td>       </tr>        <tr>        <td><em>S</em></td>        <td>每月天数后面的英文后缀，2 个字符</td>        <td><em>st</em>，<em>nd</em>，<em>rd</em>         或者 <em>th</em>。可以和 <em>j</em> 一起用</td>       </tr>        <tr>        <td><em>w</em></td>        <td>星期中的第几天，数字表示</td>        <td><em>0</em>（表示星期天）到 <em>6</em>（表示星期六）</td>       </tr>        <tr>        <td><em>z</em></td>        <td>年份中的第几天</td>        <td><em>0</em> 到 <em>365</em></td>       </tr>        <tr>        <td style="text-align: center;"><em class="emphasis">星期</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>W</em></td>        <td>ISO-8601 格式年份中的第几周，每周从星期一开始（PHP 4.1.0 新加的）</td>        <td>例如：<em>42</em>（当年的第 42 周）</td>       </tr>        <tr>        <td style="text-align: center;"><em class="emphasis">月</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>F</em></td>        <td>月份，完整的文本格式，例如 January 或者 March</td>        <td><em>January</em> 到 <em>December</em></td>       </tr>        <tr>        <td><em>m</em></td>        <td>数字表示的月份，有前导零</td>        <td><em>01</em> 到 <em>12</em></td>       </tr>        <tr>        <td><em>M</em></td>        <td>三个字母缩写表示的月份</td>        <td><em>Jan</em> 到 <em>Dec</em></td>       </tr>        <tr>        <td><em>n</em></td>        <td>数字表示的月份，没有前导零</td>        <td><em>1</em> 到 <em>12</em></td>       </tr>        <tr>        <td><em>t</em></td>        <td>指定的月份有几天</td>        <td><em>28</em> 到 <em>31</em></td>       </tr>        <tr>        <td style="text-align: center;"><em class="emphasis">年</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>L</em></td>        <td>是否为闰年</td>        <td>如果是闰年为 <em>1</em>，否则为 <em>0</em></td>       </tr>        <tr>        <td><em>o</em></td>        <td>ISO-8601 格式年份数字。这和         <em>Y</em> 的值相同，只除了如果 ISO         的星期数（<em>W</em>）属于前一年或下一年，则用那一年。（PHP 5.1.0 新加）</td>        <td>Examples: <em>1999</em> or <em>2003</em></td>       </tr>        <tr>        <td><em>Y</em></td>        <td>4 位数字完整表示的年份</td>        <td>例如：<em>1999</em> 或 <em>2003</em></td>       </tr>        <tr>        <td><em>y</em></td>        <td>2 位数字表示的年份</td>        <td>例如：<em>99</em> 或 <em>03</em></td>       </tr>        <tr>        <td style="text-align: center;"><em class="emphasis">时间</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>a</em></td>        <td>小写的上午和下午值</td>        <td><em>am</em> 或 <em>pm</em></td>       </tr>        <tr>        <td><em>A</em></td>        <td>大写的上午和下午值</td>        <td><em>AM</em> 或 <em>PM</em></td>       </tr>        <tr>        <td><em>B</em></td>        <td>Swatch Internet 标准时</td>        <td><em>000</em> 到 <em>999</em></td>       </tr>        <tr>        <td><em>g</em></td>        <td>小时，12 小时格式，没有前导零</td>        <td><em>1</em> 到 <em>12</em></td>       </tr>        <tr>        <td><em>G</em></td>        <td>小时，24 小时格式，没有前导零</td>        <td><em>0</em> 到 <em>23</em></td>       </tr>        <tr>        <td><em>h</em></td>        <td>小时，12 小时格式，有前导零</td>        <td><em>01</em> 到 <em>12</em></td>       </tr>        <tr>        <td><em>H</em></td>        <td>小时，24 小时格式，有前导零</td>        <td><em>00</em> 到 <em>23</em></td>       </tr>        <tr>        <td><em>i</em></td>        <td>有前导零的分钟数</td>        <td><em>00</em> 到 <em>59</em>&gt;</td>       </tr>        <tr>        <td><em>s</em></td>        <td>秒数，有前导零</td>        <td><em>00</em> 到 <em>59</em>&gt;</td>       </tr>        <tr>            <td><em>u</em></td>            <td>             毫秒 （PHP 5.2.2 新加）。需要注意的是             <span class="function"><strong>date()</strong></span> 函数总是返回             <em>000000</em> 因为它只接受 <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>             参数， 而 <span class="methodname">{@link DateTime::format()}</span> 才支持毫秒。            </td>            <td>示例: <em>654321</em></td>           </tr>        <tr>        <td style="text-align: center;"><em class="emphasis">时区</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>e</em></td>        <td>时区标识（PHP 5.1.0 新加）</td>        <td>例如：<em>UTC</em>，<em>GMT</em>，<em>Atlantic/Azores</em></td>       </tr>        <tr>        <td><em>I</em></td>        <td>是否为夏令时</td>        <td>如果是夏令时为 <em>1</em>，否则为 <em>0</em></td>       </tr>        <tr>        <td><em>O</em></td>        <td>与格林威治时间相差的小时数</td>        <td>例如：<em>+0200</em></td>       </tr>        <tr>        <td><em>P</em></td>        <td>与格林威治时间（GMT）的差别，小时和分钟之间有冒号分隔（PHP 5.1.3 新加）</td>        <td>例如：<em>+02:00</em></td>       </tr>        <tr>        <td><em>T</em></td>        <td>本机所在的时区</td>        <td>例如：<em>EST</em>，<em>MDT</em>（【译者注】在 Windows        下为完整文本格式，例如“Eastern Standard Time”，中文版会显示“中国标准时间”）。</td>       </tr>        <tr>        <td><em>Z</em></td>        <td>时差偏移量的秒数。UTC 西边的时区偏移量总是负的，UTC 东边的时区偏移量总是正的。</td>        <td><em>-43200</em> 到 <em>43200</em></td>       </tr>        <tr>        <td style="text-align: center;"><em class="emphasis">完整的日期／时间</em></td>        <td>---</td>        <td>---</td>       </tr>        <tr>        <td><em>c</em></td>        <td>ISO 8601 格式的日期（PHP 5 新加）</td>        <td>2004-02-12T15:19:21+00:00</td>       </tr>        <tr>        <td><em>r</em></td>        <td>RFC 822 格式的日期</td>        <td>例如：<em>Thu, 21 Dec 2000 16:01:07 +0200</em></td>       </tr>        <tr>        <td><em>U</em></td>        <td>从 Unix 纪元（January 1 1970 00:00:00 GMT）开始至今的秒数</td>        <td>参见 <span class="function">{@link time()}</span></td>       </tr>       </tbody>         </table>    </p>   <p class="para">    格式字串中不能被识别的字符将原样显示。<em>Z</em> 格式在使用    <span class="function">{@link gmdate()}</span> 时总是返回 <em>0</em>。   </p>   <p class="para">    <div class="example" id="example-2708">     <p><strong>Example #1 <span class="function"><strong>date()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;设定要用的默认时区。自&nbsp;PHP&nbsp;5.1&nbsp;可用<br /></span><span style="color: #9876AA">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTC'</span><span style="color: #007700">);<br /><br /><br /></span><span style="color: #FF8000">//&nbsp;输出类似：Monday<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;输出类似：Monday&nbsp;15th&nbsp;of&nbsp;August&nbsp;2005&nbsp;03:12:46&nbsp;PM<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l&nbsp;dS&nbsp;\of&nbsp;F&nbsp;Y&nbsp;h:i:s&nbsp;A'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;输出：July&nbsp;1,&nbsp;2000&nbsp;is&nbsp;on&nbsp;a&nbsp;Saturday<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"July&nbsp;1,&nbsp;2000&nbsp;is&nbsp;on&nbsp;a&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;在格式参数中使用常量&nbsp;<br />//&nbsp;输出类似：Wed,&nbsp;25&nbsp;Sep&nbsp;2013&nbsp;15:28:57&nbsp;-0700<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #9876AA">DATE_RFC2822</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;输出类似：2000-07-01T00:00:00+00:00<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #9876AA">DATE_ATOM</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    在格式字串中的字符前加上反斜线来转义可以避免它被按照上表解释。如果加上反斜线后的字符本身就是一个特殊序列，那还要转义反斜线。    <div class="example" id="example-2709">     <p><strong>Example #2 在 <span class="function"><strong>date()</strong></span> 中转义字符</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;prints&nbsp;something&nbsp;like:&nbsp;Wednesday&nbsp;the&nbsp;15th<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l&nbsp;\\t\h\e&nbsp;jS"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    可以把 <span class="function"><strong>date()</strong></span> 和    <span class="function">{@link mktime()}</span> 函数结合使用来得到未来或过去的日期。    <div class="example" id="example-2710">     <p><strong>Example #3 <span class="function"><strong>date()</strong></span> 和 <span class="function">{@link mktime()}</span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$tomorrow&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)&nbsp;&nbsp;,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">)+</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$lastmonth&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)-</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$nextyear&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">),&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">)+</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>    <blockquote class="note"><p><strong class="note">Note</strong>:      <p class="para">      由于夏令时的缘故，这种方法比简单地在时间戳上加减一天或者一个月的秒数更可靠。     </p>    </p></blockquote>   </p>   <p class="para">    一些使用 <span class="function"><strong>date()</strong></span>    格式化日期的例子。注意要转义所有其它的字符，因为目前有特殊含义的字符会产生不需要的结果，而其余字符在    PHP 将来的版本中可能会被用上。当转义时，注意用单引号以避免类似 \n 的字符变成了换行符。    <div class="example" id="example-2711">     <p><strong>Example #4 <span class="function"><strong>date()</strong></span> 格式举例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;假定今天是：March&nbsp;10th,&nbsp;2001,&nbsp;5:16:18&nbsp;pm<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"F&nbsp;j,&nbsp;Y,&nbsp;g:i&nbsp;a"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;March&nbsp;10,&nbsp;2001,&nbsp;5:16&nbsp;pm<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m.d.y"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;03.10.01<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"j,&nbsp;n,&nbsp;Y"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;10,&nbsp;3,&nbsp;2001<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Ymd"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;20010310<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'h-i-s,&nbsp;j-m-y,&nbsp;it&nbsp;is&nbsp;w&nbsp;Day&nbsp;z&nbsp;'</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;05-16-17,&nbsp;10-03-01,&nbsp;1631&nbsp;1618&nbsp;6&nbsp;Fripm01<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'\i\t&nbsp;\i\s&nbsp;\t\h\e&nbsp;jS&nbsp;\d\a\y.'</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;It&nbsp;is&nbsp;the&nbsp;10th&nbsp;day.<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D&nbsp;M&nbsp;j&nbsp;G:i:s&nbsp;T&nbsp;Y"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Sat&nbsp;Mar&nbsp;10&nbsp;15:16:08&nbsp;MST&nbsp;2001<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:m:s&nbsp;\m&nbsp;\i\s\&nbsp;\m\o\n\t\h'</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;17:03:17&nbsp;m&nbsp;is&nbsp;month<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"H:i:s"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;17:16:17<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y-m-d&nbsp;H:i:s"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;2001-03-10&nbsp;17:16:18&nbsp;（MySQL&nbsp;DATETIME&nbsp;格式）<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    要格式化其它语种的日期，应该用 <span class="function">{@link setlocale()}</span> 和    <span class="function">{@link strftime()}</span> 函数来代替 <span class="function"><strong>date()</strong></span>。   </p>   <p class="para">    参见 <span class="function">{@link getlastmod()}</span>，<span class="function">{@link gmdate()}</span>，<span class="function">{@link mktime()}</span>，<span class="function">{@link strftime()}</span>    和 <span class="function">{@link time()}</span>。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.date-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">format</code></dt>       <dd>        <p class="para">        输出的日期 <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> 格式。 参见下文中的        格式化选项。 同时，还可以使用        <a href="http://php.net/manual/zh/class.datetimeinterface.php#datetime.constants.types" class="link">预定义日期常量</a>        ，例如：常量 <strong><code>DATE_RSS</code></strong>        表示格式化字符串 <em>&#039;D, d M Y H:i:s&#039;</em>。       </p>       <p class="para">        <table class="doctable table">         <caption><strong>         <code class="parameter">format</code> 参数字符串中可识别下列字符</strong></caption>                   <thead>           <tr>            <th><code class="parameter">format</code> 字符</th>            <th>描述</th>            <th>返回值示例</th>           </tr>           </thead>           <tbody class="tbody">           <tr>            <td style="text-align: center;"><em class="emphasis">天</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>d</em></td>            <td>一个月中的第几天，有前导 0 的 2 位数字</td>            <td>从 <em>01</em> 到 <em>31</em></td>           </tr>            <tr>            <td><em>D</em></td>            <td>3 个字符表示的星期几</td>            <td>从 <em>Mon</em> 到 <em>Sun</em></td>           </tr>            <tr>            <td><em>j</em></td>            <td>一个月中的第几天，无前导 0</td>            <td>从 <em>1</em> 到 <em>31</em></td>           </tr>            <tr>            <td><em>l</em> (lowercase &#039;L&#039;)</td>            <td>星期几，英文全称</td>            <td>从 <em>Sunday</em> 到 <em>Saturday</em></td>           </tr>            <tr>            <td><em>N</em></td>            <td>ISO-8601 规定的数字表示的星期几（PHP 5.1.0              新加             ）</td>            <td>从 <em>1</em> （表示星期一）到 <em>7</em> （表示星期日）</td>           </tr>            <tr>            <td><em>S</em></td>            <td>一个月中的第几天，带有 2 个字符表示的英语序数词。</td>            <td>             <em>st</em>， <em>nd</em>， <em>rd</em> 或者             <em>th</em>。  可以和 <em>j</em> 联合使用。            </td>           </tr>            <tr>            <td><em>w</em></td>            <td>数字表示的星期几</td>            <td>从 <em>0</em> （星期日） 到 <em>6</em> （星期六）</td>           </tr>            <tr>            <td><em>z</em></td>            <td>一年中的第几天，从 0 开始计数</td>            <td>从 <em>0</em> 到 <em>365</em></td>           </tr>            <tr>            <td style="text-align: center;"><em class="emphasis">周</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>W</em></td>            <td>ISO-8601 规范的一年中的第几周，周一视为一周开始。（PHP 4.1.0 新加）</td>            <td>示例： <em>42</em> （本年第42周）</td>           </tr>            <tr>            <td style="text-align: center;"><em class="emphasis">月</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>F</em></td>            <td>月份英文全拼，例如：January 或 March</td>            <td>从 <em>January</em> 到 <em>December</em></td>           </tr>            <tr>            <td><em>m</em></td>            <td>带有 0 前导的数字表示的月份</td>            <td>从 <em>01</em> 到 <em>12</em></td>           </tr>            <tr>            <td><em>M</em></td>            <td>3 个字符表示的月份的英文简拼</td>            <td>从 <em>Jan</em> 到 <em>Dec</em></td>           </tr>            <tr>            <td><em>n</em></td>            <td>月份的数字表示，无前导 0 </td>            <td><em>1</em> through <em>12</em></td>           </tr>            <tr>            <td><em>t</em></td>            <td>给定月份中包含多少天</td>            <td>从 <em>28</em> 到 <em>31</em></td>           </tr>            <tr>            <td style="text-align: center;"><em class="emphasis">年</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>L</em></td>            <td>是否为闰年</td>            <td>如果是闰年，则返回 <em>1</em>，反之返回 <em>0</em>。</td>           </tr>            <tr>            <td><em>o</em></td>            <td>ISO-8601 规范的年份，同             <em>Y</em> 格式。有一种情况除外：当 ISO 的周数（<em>W</em>）属于前一年或者后一年时，会返回前一年或者后一年的年份数字表达。             属于前一年或者后一年时，会返回前一年或者后一年的年份数字表达。             （PHP 5.1.0 新加）</td>            <td>示例：<em>1999</em> 或 <em>2003</em></td>           </tr>            <tr>            <td><em>Y</em></td>            <td>4 位数字的年份</td>            <td>示例：<em>1999</em> 或 <em>2003</em></td>           </tr>            <tr>            <td><em>y</em></td>            <td>2 位数字的年份</td>            <td>示例： <em>99</em> 或 <em>03</em></td>           </tr>            <tr>            <td style="text-align: center;"><em class="emphasis">时间</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>a</em></td>            <td>上午还是下午，2 位小写字符</td>            <td><em>am</em> 或 <em>pm</em></td>           </tr>            <tr>            <td><em>A</em></td>            <td>上午还是下午，2 位大写字符</td>            <td><em>AM</em> 或 <em>PM</em></td>           </tr>            <tr>            <td><em>B</em></td>            <td>斯沃琪因特网时间</td>            <td>从 <em>000</em> 到 <em>999</em></td>           </tr>            <tr>            <td><em>g</em></td>            <td>小时，12时制，无前导 0 </td>            <td>从 <em>1</em> 到 <em>12</em></td>           </tr>            <tr>            <td><em>G</em></td>            <td>小时，24时制，无前导 0 </td>            <td>从 <em>0</em> 到 <em>23</em></td>           </tr>            <tr>            <td><em>h</em></td>            <td>小时，12时制，有前导 0 的 2 位数字</td>            <td>从 <em>01</em> 到 <em>12</em></td>           </tr>            <tr>            <td><em>H</em></td>            <td>小时，24时制，有前导 0 的 2 位数字</td>            <td><em>00</em> through <em>23</em></td>           </tr>            <tr>            <td><em>i</em></td>            <td>分钟，有前导 0 的 2 位数字</td>            <td>从 <em>00</em> 到 <em>59</em></td>           </tr>            <tr>            <td><em>s</em></td>            <td>秒，有前导 0 的 2 位数字</td>            <td>从 <em>00</em> 到 <em>59</em></td>           </tr>            <tr>            <td><em>u</em></td>            <td>毫秒 （PHP 5.2.2 新加）</td>            <td>示例： <em>654321</em></td>           </tr>            <tr>            <td style="text-align: center;"><em class="emphasis">时区</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>e</em></td>            <td>时区标识（PHP 5.1.0 新加）</td>            <td>示例: <em>UTC</em>, <em>GMT</em>, <em>Atlantic/Azores</em></td>           </tr>            <tr>            <td><em>I</em> （大写字母 i）</td>            <td>是否夏令时</td>            <td>如果是夏令时则返回 <em>1</em>，反之返回 <em>0</em>。</td>           </tr>            <tr>            <td><em>O</em></td>            <td>和格林威治时间（GMT）的时差，以小时为单位</td>            <td>示例： <em>+0200</em></td>           </tr>            <tr>            <td><em>P</em></td>            <td>和格林威治时间（GMT）的时差，包括小时和分钟，小时和分钟之间使用冒号（:）分隔（PHP 5.1.3 新加）</td>            <td>示例： <em>+02:00</em></td>           </tr>            <tr>            <td><em>T</em></td>            <td>时区缩写</td>            <td>示例：<em>EST</em>, <em>MDT</em> ...</td>           </tr>            <tr>            <td><em>Z</em></td>            <td>以秒为单位的时区偏移量。UTC 以西的时区返回负数，UTC 以东的时区返回正数。</td>            <td>从 <em>-43200</em> 到 <em>50400</em></td>           </tr>            <tr>            <td style="text-align: center;"><em class="emphasis">完整的日期/时间</em></td>            <td>---</td>            <td>---</td>           </tr>            <tr>            <td><em>c</em></td>            <td>ISO 8601 日期及时间（PHP 5 新加）</td>            <td>2004-02-12T15:19:21+00:00</td>           </tr>            <tr>            <td><em>r</em></td>            <td><a href="http://www.faqs.org/rfcs/rfc2822" class="link external">&raquo;&nbsp;RFC 2822</a> 格式的日期和时间</td>            <td>示例：<em>Thu, 21 Dec 2000 16:01:07 +0200</em></td>           </tr>            <tr>            <td><em>U</em></td>            <td>自 1970 年 1 月 1 日 0 时 0 分 0 秒（GMT 时间）以来的时间，以秒为单位</td>            <td>参见<span class="function">{@link time()}</span></td>           </tr>           </tbody>                 </table>        </p>       <p class="para">        格式化字符串中的不可识别字符将原样输出。        当使用 <span class="function">{@link gmdate()}</span> 函数时， <em>Z</em> 格式永远返回 <em>0</em>。       </p>              <blockquote class="note"><p><strong class="note">Note</strong>:         <p class="para">         由于本函数仅接受 <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span> 类型的时间戳参数，所以         <em>u</em> 格式仅在使用 <span class="function">{@link date_format()}</span> 函数并且使用         <span class="function">{@link date_create()}</span> 函数创建时间戳时才是有用的。        </p>       </p></blockquote>      </dd>                <dt> <code class="parameter">timestamp</code></dt> <dd> <p class="para"> 可选的 <code class="parameter">timestamp</code> 参数是一个 <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span> 的 Unix 时间戳，如未指定，参数值默认为当前本地时间。也就是说，其值默认为 <span class="function">{@link time()}</span> 的返回值。</p></dd>         </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.date-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回格式化后的日期时间的字符串表达。    如果 <code class="parameter">timestamp</code> 参数不是一个有效数值，则返回 <strong><code>FALSE</code></strong>     并引发 <strong><code>E_WARNING</code></strong> 级别的错误。   </p>  </div>    <div class="refsect1 errors" id="refsect1-function.date-errors">   <h3 class="title">错误／异常</h3>        <p class="para"> 在每 次调用日期/时间函数时，如果时区无效则会引发 <strong><code>E_NOTICE</code></strong> 错误，如果使用系统设定值或 <var class="varname"><var class="varname">TZ</var></var> 环境变量，则会引发 <strong><code>E_STRICT</code></strong> 或 <strong><code>E_WARNING</code></strong> 消息。参见 <span class="function">{@link date_default_timezone_set()}</span>。</p>    </div>    <div class="refsect1 changelog" id="refsect1-function.date-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.1.0</td>        <td>         时间戳的有效取值范围为 GMT 时间的 1901 年 12 月 13 日至 GMT 时间的 2038 年 1 月 19 日。         （32 位有符号整数的取值范围）。         但是，在 PHP 5.1.0 之前的版本，在某些系统（例如 Windows）上有效取值范围为 1970 年 1 月 1 日至 2038 年 1 月 19 日。        </td>       </tr>               <tr><td>5.1.0</td><td><p class="para"> 现在发布 <strong><code>E_STRICT</code></strong> 和 <strong><code>E_NOTICE</code></strong> 时区错误。</p></td></tr>         <tr>        <td>5.1.1</td>        <td>         <code class="parameter">format</code> 参数标准的可用日期/时间格式常量见： <a href="http://php.net/manual/zh/datetime.constants.php" class="link">常量</a>         </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.date-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2712">     <p><strong>Example #5 <span class="function"><strong>date()</strong></span> 函数示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;设置默认时区。PHP&nbsp;5.1&nbsp;之后版本可用<br /></span><span style="color: #9876AA">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTC'</span><span style="color: #007700">);<br /><br /><br /></span><span style="color: #FF8000">//&nbsp;输出类似：&nbsp;Monday<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;输出类似：Monday&nbsp;8th&nbsp;of&nbsp;August&nbsp;2005&nbsp;03:12:46&nbsp;PM<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l&nbsp;jS&nbsp;\of&nbsp;F&nbsp;Y&nbsp;h:i:s&nbsp;A'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;输出：July&nbsp;1,&nbsp;2000&nbsp;is&nbsp;on&nbsp;a&nbsp;Saturday<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"July&nbsp;1,&nbsp;2000&nbsp;is&nbsp;on&nbsp;a&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;使用格式常量&nbsp;<br />//&nbsp;输出类似：&nbsp;Mon,&nbsp;15&nbsp;Aug&nbsp;2005&nbsp;15:12:46&nbsp;UTC<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #9876AA">DATE_RFC822</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;输出类似：2000-07-01T00:00:00+00:00<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #9876AA">DATE_ATOM</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    可以使用反斜线进行转义来阻止函数解析格式字符串中的可识别字符。    如果反斜线和要转义的字符连在一起依然是一个有效的字符序列，那么需要对    反斜线再次进行转义。    <div class="example" id="example-2713">     <p><strong>Example #6 对 <span class="function"><strong>date()</strong></span> 函数中的格式字符串进行转义</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;输出类似：&nbsp;Wednesday&nbsp;the&nbsp;15th<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l&nbsp;\t\h\e&nbsp;jS'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    可以联合使用 <span class="function"><strong>date()</strong></span>     和 <span class="function">{@link mktime()}</span> 函数    来构造之前或者之后的日期时间。    <div class="example" id="example-2714">     <p><strong>Example #7 <span class="function"><strong>date()</strong></span> 和 <span class="function">{@link mktime()}</span> 联合使用示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$tomorrow&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)&nbsp;&nbsp;,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">)+</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$lastmonth&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)-</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$nextyear&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">),&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">)+</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>    <blockquote class="note"><p><strong class="note">Note</strong>:      <p class="para">      由于存在夏令时时间，      所以此方案相对于直接在时间戳上加/减秒数      要更加可靠。     </p>    </p></blockquote>   </p>   <p class="para">    <span class="function"><strong>date()</strong></span> 函数格式化的一些示例。    需要注意的是，即使是对于当前来说并不具有特殊含义的字符，    也要像对待具有特殊含义的字符那样进行转义，以避免函数返回非预期的值。    因为可能在将来的 PHP 版本中，这些字符会被赋予特殊的含义。    进行转义的时候，请确保使用单引号，以避免 \n 被解释为换行符号。    <div class="example" id="example-2715">     <p><strong>Example #8 <span class="function"><strong>date()</strong></span> 函数格式化</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;假设今天是&nbsp;2001&nbsp;年&nbsp;3&nbsp;月&nbsp;10&nbsp;日下午&nbsp;5&nbsp;点&nbsp;16&nbsp;分&nbsp;18&nbsp;秒，<br />//&nbsp;并且位于山区标准时间（MST）时区<br /><br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"F&nbsp;j,&nbsp;Y,&nbsp;g:i&nbsp;a"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;March&nbsp;10,&nbsp;2001,&nbsp;5:16&nbsp;pm<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m.d.y"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;03.10.01<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"j,&nbsp;n,&nbsp;Y"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;10,&nbsp;3,&nbsp;2001<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Ymd"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;20010310<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'h-i-s,&nbsp;j-m-y,&nbsp;it&nbsp;is&nbsp;w&nbsp;Day'</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;05-16-18,&nbsp;10-03-01,&nbsp;1631&nbsp;1618&nbsp;6&nbsp;Satpm01<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'\i\t&nbsp;\i\s&nbsp;\t\h\e&nbsp;jS&nbsp;\d\a\y.'</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;it&nbsp;is&nbsp;the&nbsp;10th&nbsp;day.<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D&nbsp;M&nbsp;j&nbsp;G:i:s&nbsp;T&nbsp;Y"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Sat&nbsp;Mar&nbsp;10&nbsp;17:16:18&nbsp;MST&nbsp;2001<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:m:s&nbsp;\m&nbsp;\i\s\&nbsp;\m\o\n\t\h'</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;17:03:18&nbsp;m&nbsp;is&nbsp;month<br /></span><span style="color: #9876AA">$today&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"H:i:s"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;17:16:18<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    如果需要将日期时间格式化为其他语言，你应该使用    <span class="function">{@link setlocale()}</span> 和 <span class="function">{@link strftime()}</span> 函数    来替代 <span class="function"><strong>date()</strong></span> 函数。   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.date-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     使用 <span class="function">{@link strtotime()}</span> 函数将一个字符串表达的日期时间转换为时间戳。     另外，一些数据库产品也提供了将日期时间格式转换为时间戳的函数。     （例如 MySQL 中的     <a href="http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html" class="link external">&raquo;&nbsp;UNIX_TIMESTAMP</a> 函数）。    </p>   </p></blockquote>   <div class="tip"><strong class="tip">Tip</strong>    <p class="para">     从 PHP 5.1 版本开始，请求的开始时间可以从变量     <var class="varname"><var class="varname"><a href="http://php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER['REQUEST_TIME']</a></var></var> 中获取。    </p>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.date-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link gmdate()} - 格式化一个 GMT/UTC 日期／时间</span></li>     <li class="member"><span class="function">{@link idate()} - 将本地时间日期格式化为整数</span></li>     <li class="member"><span class="function">{@link getdate()} - 取得日期／时间信息</span></li>     <li class="member"><span class="function">{@link getlastmod()} - 获取页面最后修改的时间</span></li>     <li class="member"><span class="function">{@link mktime()} - 取得一个日期的 Unix 时间戳</span></li>     <li class="member"><span class="function">{@link strftime()} - 根据区域设置格式化本地时间／日期</span></li>     <li class="member"><span class="function">{@link time()} - 返回当前的 Unix 时间戳</span></li>     <li class="member"><span class="function">{@link strtotime()} - 将任何字符串的日期时间描述解析为 Unix 时间戳</span></li>     <li class="member"><a href="http://php.net/manual/zh/class.datetimeinterface.php#datetime.constants.types" class="link">预定义的日期时间常量</a></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.datetime.php">Date/Time 函数</a></div></div>
*/
	public static function date ($timestamp) {}

	/**
	 * @param $url
	 * @param $parts [optional]
	 * @param $flags [optional]
	 * @param $composed [optional]
	 */
	public static function buildUrl ($url, $parts, $flags, &$composed) {}

	/**
	 * @param $query
	 * @param $prefix [optional]
	 * @param $arg_sep [optional]
	 */
	public static function buildStr ($query, $prefix, $arg_sep) {}

	/**
	 * @param $supported
	 * @param $result [optional]
	 */
	public static function negotiateLanguage ($supported, &$result) {}

	/**
	 * @param $supported
	 * @param $result [optional]
	 */
	public static function negotiateCharset ($supported, &$result) {}

	/**
	 * @param $supported
	 * @param $result [optional]
	 */
	public static function negotiateContentType ($supported, &$result) {}

	/**
	 * @param $last_modified
	 * @param $for_range [optional]
	 */
	public static function matchModified ($last_modified, $for_range) {}

	/**
	 * @param $plain_etag
	 * @param $for_range [optional]
	 */
	public static function matchEtag ($plain_etag, $for_range) {}

	/**
	 * @param $header_name
	 * @param $header_value
	 * @param $case_sensitive [optional]
	 */
	public static function matchRequestHeader ($header_name, $header_value, $case_sensitive) {}

	/**
	 * @param $message_string
	 */
	public static function parseMessage ($message_string) {}

	/**
	 * @param $headers_string
	 */
	public static function parseHeaders ($headers_string) {}

	/**
	 * @param $cookie_string
	 */
	public static function parseCookie ($cookie_string) {}

	/**
	 * @param $cookie_array
	 */
	public static function buildCookie ($cookie_array) {}

	/**
	 * @param $param_string
	 * @param $flags [optional]
	 */
	public static function parseParams ($param_string, $flags) {}

	/**
	 * @param $encoded_string
	 */
	public static function chunkedDecode ($encoded_string) {}

	/**
	 * @param $plain
	 * @param $flags [optional]
	 */
	public static function deflate ($plain, $flags) {}

	/**
	 * @param $encoded
	 */
	public static function inflate ($encoded) {}

	/**
	 * @param $feature [optional]
	 */
	public static function support ($feature) {}

}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Compose HTTP RFC compliant date
 * @link http://php.net/manual/en/function.http-date.php
 * @param int $timestamp [optional] <p>
 * Unix timestamp; current time if omitted
 * </p>
 * @return string the HTTP date as string.
 */
function http_date ($timestamp = null) {}

/**
 * (PECL pecl_http &gt;= 0.21.0)<br/>
 * Build an URL
 * @link http://php.net/manual/en/function.http-build-url.php
 * @param mixed $url [optional] <p>
 * (part(s) of) an URL in form of a string or associative array like parse_url returns
 * </p>
 * @param mixed $parts [optional] <p>
 * same as the first argument
 * </p>
 * @param int $flags [optional] <p>
 * a bitmask of binary or'ed HTTP_URL constants;
 * HTTP_URL_REPLACE is the default
 * </p>
 * @param array $new_url [optional] <p>
 * if set, it will be filled with the parts of the composed url like parse_url would return
 * </p>
 * @return string the new URL as string on success or false on failure.
 */
function http_build_url ($url = null, $parts = null, $flags = null,  array &$new_url = null ) {}

/**
 * (PECL pecl_http &gt;= 0.23.0)<br/>
 * Build query string
 * @link http://php.net/manual/en/function.http-build-str.php
 * @param array $query <p>
 * associative array of query string parameters
 * </p>
 * @param string $prefix [optional] <p>
 * top level prefix
 * </p>
 * @param string $arg_separator [optional] <p>
 * argument separator to use (by default the INI setting arg_separator.output will be used, or &quot;&amp;&quot; if neither is set
 * </p>
 * @return string the built query as string on success or false on failure.
 */
function http_build_str (array $query, $prefix = null, $arg_separator = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Negotiate clients preferred language
 * @link http://php.net/manual/en/function.http-negotiate-language.php
 * @param array $supported <p>
 * array containing the supported languages as values
 * </p>
 * @param array $result [optional] <p>
 * will be filled with an array containing the negotiation results
 * </p>
 * @return string the negotiated language or the default language (i.e. first array entry) if none match.
 */
function http_negotiate_language (array $supported,  array &$result = null ) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Negotiate clients preferred character set
 * @link http://php.net/manual/en/function.http-negotiate-charset.php
 * @param array $supported <p>
 * array containing the supported charsets as values
 * </p>
 * @param array $result [optional] <p>
 * will be filled with an array containing the negotiation results
 * </p>
 * @return string the negotiated charset or the default charset (i.e. first array entry) if none match.
 */
function http_negotiate_charset (array $supported,  array &$result = null ) {}

/**
 * (PECL pecl_http &gt;= 0.19.0)<br/>
 * Negotiate clients preferred content type
 * @link http://php.net/manual/en/function.http-negotiate-content-type.php
 * @param array $supported <p>
 * array containing the supported content types as values
 * </p>
 * @param array $result [optional] <p>
 * will be filled with an array containing the negotiation results
 * </p>
 * @return string the negotiated content type or the default content type (i.e. first array entry) if none match.
 */
function http_negotiate_content_type (array $supported,  array &$result = null ) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Issue HTTP redirect
 * @link http://php.net/manual/en/function.http-redirect.php
 * @param string $url [optional] <p>
 * the URL to redirect to
 * </p>
 * @param array $params [optional] <p>
 * associative array of query parameters
 * </p>
 * @param bool $session [optional] <p>
 * whether to append session information
 * </p>
 * @param int $status [optional] <p>
 * custom response status code
 * </p>
 * @return void &returns.http.false.orexits; with the specified redirection status code.
 * &see.http.configuration.force_exit;
 */
function http_redirect ($url = null,  array $params = null , $session = null, $status = null) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * HTTP throttling
 * @link http://php.net/manual/en/function.http-throttle.php
 * @param float $sec [optional] <p>
 * seconds to sleep after each chunk sent
 * </p>
 * @param int $bytes [optional] <p>
 * the chunk size in bytes
 * </p>
 * @return void 
 */
function http_throttle ($sec = null, $bytes = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Send HTTP response status
 * @link http://php.net/manual/en/function.http-send-status.php
 * @param int $status <p>
 * HTTP status code (100-599)
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_status ($status) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Send Last-Modified
 * @link http://php.net/manual/en/function.http-send-last-modified.php
 * @param int $timestamp [optional] <p>
 * a Unix timestamp, converted to a valid HTTP date;
 * if omitted, the current time will be sent
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_last_modified ($timestamp = null) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Send Content-Type
 * @link http://php.net/manual/en/function.http-send-content-type.php
 * @param string $content_type [optional] <p>
 * the desired content type (primary/secondary)
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_content_type ($content_type = null) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Send Content-Disposition
 * @link http://php.net/manual/en/function.http-send-content-disposition.php
 * @param string $filename <p>
 * the file name the &quot;Save as...&quot; dialog should display
 * </p>
 * @param bool $inline [optional] <p>
 * if set to true and the user agent knows how to handle the content type,
 * it will probably not cause the popup window to be shown
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_content_disposition ($filename, $inline = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Match last modification
 * @link http://php.net/manual/en/function.http-match-modified.php
 * @param int $timestamp [optional] <p>
 * Unix timestamp; current time, if omitted
 * </p>
 * @param bool $for_range [optional] <p>
 * if set to true, the header usually used to validate HTTP ranges will be checked
 * </p>
 * @return bool true if timestamp represents an earlier date than the header, else false.
 */
function http_match_modified ($timestamp = null, $for_range = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Match ETag
 * @link http://php.net/manual/en/function.http-match-etag.php
 * @param string $etag <p>
 * the ETag to match
 * </p>
 * @param bool $for_range [optional] <p>
 * if set to true, the header usually used to validate HTTP ranges will be checked
 * </p>
 * @return bool true if ETag matches or the header contained the asterisk (&quot;*&quot;), else false.
 */
function http_match_etag ($etag, $for_range = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Caching by last modification
 * @link http://php.net/manual/en/function.http-cache-last-modified.php
 * @param int $timestamp_or_expires [optional] <p>
 * Unix timestamp
 * </p>
 * @return bool &returns.http.false.orexits; with 304 Not Modified if the entity is cached.
 * &see.http.configuration.force_exit;
 */
function http_cache_last_modified ($timestamp_or_expires = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Caching by ETag
 * @link http://php.net/manual/en/function.http-cache-etag.php
 * @param string $etag [optional] <p>
 * custom ETag
 * </p>
 * @return bool &returns.http.false.orexits; with 304 Not Modified if the entity is cached.
 * &see.http.configuration.force_exit;
 */
function http_cache_etag ($etag = null) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Send arbitrary data
 * @link http://php.net/manual/en/function.http-send-data.php
 * @param string $data <p>
 * data to send
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_data ($data) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Send file
 * @link http://php.net/manual/en/function.http-send-file.php
 * @param string $file <p>
 * the file to send
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_file ($file) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Send stream
 * @link http://php.net/manual/en/function.http-send-stream.php
 * @param resource $stream <p>
 * stream to read from (must be seekable)
 * </p>
 * @return bool true on success or false on failure.
 */
function http_send_stream ($stream) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Decode chunked-encoded data
 * @link http://php.net/manual/en/function.http-chunked-decode.php
 * @param string $encoded <p>
 * chunked encoded string
 * </p>
 * @return string the decoded string on success or false on failure.
 */
function http_chunked_decode ($encoded) {}

/**
 * (PECL pecl_http &gt;= 0.12.0)<br/>
 * Parse HTTP messages
 * @link http://php.net/manual/en/function.http-parse-message.php
 * @param string $message <p>
 * string containing a single HTTP message or several consecutive HTTP messages
 * </p>
 * @return object a hierarchical object structure of the parsed messages.
 */
function http_parse_message ($message) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Parse HTTP headers
 * @link http://php.net/manual/en/function.http-parse-headers.php
 * @param string $header <p>
 * string containing HTTP headers
 * </p>
 * @return array an array on success or false on failure.
 */
function http_parse_headers ($header) {}

/**
 * (PECL pecl_http &gt;= 0.20.0)<br/>
 * Parse HTTP cookie
 * @link http://php.net/manual/en/function.http-parse-cookie.php
 * @param string $cookie <p>
 * string containing the value of a Set-Cookie response header
 * </p>
 * @param int $flags [optional] <p>
 * parse flags (HTTP_COOKIE_PARSE_RAW)
 * </p>
 * @param array $allowed_extras [optional] <p>
 * array containing recognized extra keys;
 * by default all unknown keys will be treated as cookie names
 * </p>
 * @return stdClass|object a stdClass object on success or false on failure.
 */
function http_parse_cookie ($cookie, $flags = null,  array $allowed_extras = null ) {}

/**
 * (PECL pecl_http &gt;= 1.2.0)<br/>
 * Build cookie string
 * @link http://php.net/manual/en/function.http-build-cookie.php
 * @param array $cookie <p>
 * a cookie list like returned from http_parse_cookie
 * </p>
 * @return string the cookie(s) as string.
 */
function http_build_cookie (array $cookie) {}

/**
 * (PECL pecl_http &gt;= 1.0.0)<br/>
 * Parse parameter list
 * @link http://php.net/manual/en/function.http-parse-params.php
 * @param string $param <p>
 * Parameters
 * </p>
 * @param int $flags [optional] <p>
 * Parse flags
 * </p>
 * @return stdClass|object parameter list as stdClass object.
 */
function http_parse_params ($param, $flags = null) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Get request headers as array
 * @link http://php.net/manual/en/function.http-get-request-headers.php
 * @return array an associative array of incoming request headers.
 */
function http_get_request_headers () {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Get request body as string
 * @link http://php.net/manual/en/function.http-get-request-body.php
 * @return string the raw request body as string on success or NULL on failure.
 */
function http_get_request_body () {}

/**
 * (PECL pecl_http &gt;= 0.22.0)<br/>
 * Get request body as stream
 * @link http://php.net/manual/en/function.http-get-request-body-stream.php
 * @return resource the raw request body as stream on success or NULL on failure.
 */
function http_get_request_body_stream () {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Match any header
 * @link http://php.net/manual/en/function.http-match-request-header.php
 * @param string $header <p>
 * the header name (case-insensitive)
 * </p>
 * @param string $value <p>
 * the header value that should be compared
 * </p>
 * @param bool $match_case [optional] <p>
 * whether the value should be compared case sensitively
 * </p>
 * @return bool true if header value matches, else false.
 */
function http_match_request_header ($header, $value, $match_case = null) {}

/**
 * (PECL pecl_http &gt;= 1.5.0)<br/>
 * Stat persistent handles
 * @link http://php.net/manual/en/function.http-persistent-handles-count.php
 * @return stdClass|object persistent handles statistics as stdClass object on success or false on failure.
 */
function http_persistent_handles_count () {}

/**
 * (PECL pecl_http &gt;= 1.5.0)<br/>
 * Clean up persistent handles
 * @link http://php.net/manual/en/function.http-persistent-handles-clean.php
 * @param string $ident [optional] 
 * @return string 
 */
function http_persistent_handles_clean ($ident = null) {}

/**
 * (PECL pecl_http &gt;= 1.5.0)<br/>
 * Get/set ident of persistent handles
 * @link http://php.net/manual/en/function.http-persistent-handles-ident.php
 * @param string $ident <p>
 * the identification string
 * </p>
 * @return string the prior ident as string on success or false on failure.
 */
function http_persistent_handles_ident ($ident) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Perform GET request
 * @link http://php.net/manual/en/function.http-get.php
 * @param string $url <p>
 * URL
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * Will be filled with request/response information
 * </p>
 * @return string &returns.http.response;
 */
function http_get ($url, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Perform HEAD request
 * @link http://php.net/manual/en/function.http-head.php
 * @param string $url [optional] <p>
 * URL
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_head ($url = null, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 0.1.0)<br/>
 * Perform POST request with pre-encoded data
 * @link http://php.net/manual/en/function.http-post-data.php
 * @param string $url <p>
 * URL
 * </p>
 * @param string $data [optional] <p>
 * String containing the pre-encoded post data
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_post_data ($url, $data = null, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Perform POST request with data to be encoded
 * @link http://php.net/manual/en/function.http-post-fields.php
 * @param string $url <p>
 * URL
 * </p>
 * @param array $data [optional] <p>
 * Associative array of POST values
 * </p>
 * @param array $files [optional] <p>
 * Array of files to post
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_post_fields ($url,  array $data = null ,  array $files = null , array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 0.25.0)<br/>
 * Perform PUT request with data
 * @link http://php.net/manual/en/function.http-put-data.php
 * @param string $url <p>
 * URL
 * </p>
 * @param string $data [optional] <p>
 * PUT request body
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_put_data ($url, $data = null, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Perform PUT request with file
 * @link http://php.net/manual/en/function.http-put-file.php
 * @param string $url <p>
 * URL
 * </p>
 * @param string $file [optional] <p>
 * The file to put
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_put_file ($url, $file = null, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Perform PUT request with stream
 * @link http://php.net/manual/en/function.http-put-stream.php
 * @param string $url <p>
 * URL
 * </p>
 * @param resource $stream [optional] <p>
 * The stream to read the PUT request body from
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_put_stream ($url, $stream = null, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 1.0.0)<br/>
 * Perform custom request
 * @link http://php.net/manual/en/function.http-request.php
 * @param int $method <p>
 * Request method
 * </p>
 * @param string $url [optional] <p>
 * URL
 * </p>
 * @param string $body [optional] <p>
 * Request body
 * </p>
 * @param array $options [optional] <p>
 * &link.http.request.options;
 * </p>
 * @param array $info [optional] <p>
 * &link.http.request.info;
 * </p>
 * @return string &returns.http.response;
 */
function http_request ($method, $url = null, $body = null, array $options = null ,  array &$info = null ) {}

/**
 * (PECL pecl_http &gt;= 1.0.0)<br/>
 * Encode request body
 * @link http://php.net/manual/en/function.http-request-body-encode.php
 * @param array $fields <p>
 * POST fields
 * </p>
 * @param array $files <p>
 * POST files
 * </p>
 * @return string encoded string on success or false on failure.
 */
function http_request_body_encode (array $fields, array $files) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Register request method
 * @link http://php.net/manual/en/function.http-request-method-register.php
 * @param string $method <p>
 * the request method name to register
 * </p>
 * @return int the ID of the request method on success or false on failure.
 */
function http_request_method_register ($method) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Unregister request method
 * @link http://php.net/manual/en/function.http-request-method-unregister.php
 * @param mixed $method <p>
 * The request method name or ID
 * </p>
 * @return bool true on success or false on failure.
 */
function http_request_method_unregister ($method) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Check whether request method exists
 * @link http://php.net/manual/en/function.http-request-method-exists.php
 * @param mixed $method <p>
 * request method name or ID
 * </p>
 * @return int true if the request method is known, else false.
 */
function http_request_method_exists ($method) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * Get request method name
 * @link http://php.net/manual/en/function.http-request-method-name.php
 * @param int $method <p>
 * request method ID
 * </p>
 * @return string the request method name as string on success or false on failure.
 */
function http_request_method_name ($method) {}

/**
 * (PECL pecl_http &gt;= 0.10.0)<br/>
 * ETag output handler
 * @link http://php.net/manual/en/function.ob-etaghandler.php
 * @param string $data 
 * @param int $mode 
 * @return string 
 */
function ob_etaghandler ($data, $mode) {}

/**
 * (PECL pecl_http &gt;= 0.15.0)<br/>
 * Deflate data
 * @link http://php.net/manual/en/function.http-deflate.php
 * @param string $data <p>
 * String containing the data that should be encoded
 * </p>
 * @param int $flags [optional] <p>
 * deflate options
 * </p>
 * @return string the encoded string on success, or NULL on failure.
 */
function http_deflate ($data, $flags = null) {}

/**
 * (PECL pecl_http &gt;= 0.15.0)<br/>
 * Inflate data
 * @link http://php.net/manual/en/function.http-inflate.php
 * @param string $data <p>
 * string containing the compressed data
 * </p>
 * @return string the decoded string on success, or NULL on failure.
 */
function http_inflate ($data) {}

/**
 * (PECL pecl_http &gt;= 0.21.0)<br/>
 * Deflate output handler
 * @link http://php.net/manual/en/function.ob-deflatehandler.php
 * @param string $data 
 * @param int $mode 
 * @return string 
 */
function ob_deflatehandler ($data, $mode) {}

/**
 * (PECL pecl_http &gt;= 0.21.0)<br/>
 * Inflate output handler
 * @link http://php.net/manual/en/function.ob-inflatehandler.php
 * @param string $data 
 * @param int $mode 
 * @return string 
 */
function ob_inflatehandler ($data, $mode) {}

/**
 * (PECL pecl_http &gt;= 0.15.0)<br/>
 * Check built-in HTTP support
 * @link http://php.net/manual/en/function.http-support.php
 * @param int $feature [optional] <p>
 * feature to probe for
 * </p>
 * @return int integer, whether requested feature is supported,
 * or a bitmask with all supported features if feature was omitted.
 */
function http_support ($feature = null) {}


/**
 * don't urldecode values
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_COOKIE_PARSE_RAW', 1);

/**
 * whether &quot;secure&quot; was found in the cookie's parameters list
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_COOKIE_SECURE', 16);

/**
 * whether &quot;httpOnly&quot; was found in the cookie's parameter list
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_COOKIE_HTTPONLY', 32);
define ('HTTP_DEFLATE_LEVEL_DEF', 0);
define ('HTTP_DEFLATE_LEVEL_MIN', 1);
define ('HTTP_DEFLATE_LEVEL_MAX', 9);
define ('HTTP_DEFLATE_TYPE_ZLIB', 0);
define ('HTTP_DEFLATE_TYPE_GZIP', 16);
define ('HTTP_DEFLATE_TYPE_RAW', 32);
define ('HTTP_DEFLATE_STRATEGY_DEF', 0);
define ('HTTP_DEFLATE_STRATEGY_FILT', 256);
define ('HTTP_DEFLATE_STRATEGY_HUFF', 512);
define ('HTTP_DEFLATE_STRATEGY_RLE', 768);
define ('HTTP_DEFLATE_STRATEGY_FIXED', 1024);

/**
 * don't flush
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_ENCODING_STREAM_FLUSH_NONE', 0);

/**
 * synchronized flush only
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_ENCODING_STREAM_FLUSH_SYNC', 1048576);

/**
 * full data flush
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_ENCODING_STREAM_FLUSH_FULL', 2097152);

/**
 * use &quot;basic&quot; authentication
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_AUTH_BASIC', 1);

/**
 * use &quot;digest&quot; authentication
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_AUTH_DIGEST', 2);

/**
 * use &quot;NTLM&quot; authentication
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_AUTH_NTLM', 8);

/**
 * use &quot;GSS-NEGOTIATE&quot; authentication
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_AUTH_GSSNEG', 4);

/**
 * try any authentication scheme
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_AUTH_ANY', -1);
define ('HTTP_VERSION_NONE', 0);

/**
 * HTTP version 1.0
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_VERSION_1_0', 1);

/**
 * HTTP version 1.1
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_VERSION_1_1', 2);

/**
 * no specific HTTP protocol version
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_VERSION_ANY', 0);

/**
 * use TLSv1 only
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SSL_VERSION_TLSv1', 1);

/**
 * use SSLv2 only
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SSL_VERSION_SSLv2', 2);

/**
 * use SSLv3 only
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SSL_VERSION_SSLv3', 3);

/**
 * no specific SSL protocol version
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SSL_VERSION_ANY', 0);

/**
 * use IPv4 only for name lookups
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_IPRESOLVE_V4', 1);

/**
 * use IPv6 only for name lookups
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_IPRESOLVE_V6', 2);

/**
 * use any IP mechanism only for name lookups
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_IPRESOLVE_ANY', 0);

/**
 * the proxy is a SOCKS4 type proxy
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PROXY_SOCKS4', 4);

/**
 * the proxy is a SOCKS5 type proxy
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PROXY_SOCKS5', 5);

/**
 * standard HTTP proxy
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PROXY_HTTP', 0);
define ('HTTP_METH_GET', 1);
define ('HTTP_METH_HEAD', 2);
define ('HTTP_METH_POST', 3);
define ('HTTP_METH_PUT', 4);
define ('HTTP_METH_DELETE', 5);
define ('HTTP_METH_OPTIONS', 6);
define ('HTTP_METH_TRACE', 7);
define ('HTTP_METH_CONNECT', 8);
define ('HTTP_METH_PROPFIND', 9);
define ('HTTP_METH_PROPPATCH', 10);
define ('HTTP_METH_MKCOL', 11);
define ('HTTP_METH_COPY', 12);
define ('HTTP_METH_MOVE', 13);
define ('HTTP_METH_LOCK', 14);
define ('HTTP_METH_UNLOCK', 15);
define ('HTTP_METH_VERSION_CONTROL', 16);
define ('HTTP_METH_REPORT', 17);
define ('HTTP_METH_CHECKOUT', 18);
define ('HTTP_METH_CHECKIN', 19);
define ('HTTP_METH_UNCHECKOUT', 20);
define ('HTTP_METH_MKWORKSPACE', 21);
define ('HTTP_METH_UPDATE', 22);
define ('HTTP_METH_LABEL', 23);
define ('HTTP_METH_MERGE', 24);
define ('HTTP_METH_BASELINE_CONTROL', 25);
define ('HTTP_METH_MKACTIVITY', 26);
define ('HTTP_METH_ACL', 27);

/**
 * guess applicable redirect method
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_REDIRECT', 0);

/**
 * permanent redirect (301 Moved permanently)
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_REDIRECT_PERM', 301);

/**
 * standard redirect (302 Found)
 * RFC 1945 and RFC 2068 specify that the client is not allowed
 * to change the method on the redirected request. However, most
 * existing user agent implementations treat 302 as if it were a 303
 * response, performing a GET on the Location field-value regardless
 * of the original request method. The status codes 303 and 307 have
 * been added for servers that wish to make unambiguously clear which
 * kind of reaction is expected of the client.
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_REDIRECT_FOUND', 302);

/**
 * redirect applicable to POST requests (303 See other)
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_REDIRECT_POST', 303);

/**
 * proxy redirect (305 Use proxy)
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_REDIRECT_PROXY', 305);

/**
 * temporary redirect (307 Temporary Redirect)
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_REDIRECT_TEMP', 307);

/**
 * querying for this constant will always return true
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SUPPORT', 1);

/**
 * whether support to issue HTTP requests is given, ie. libcurl support was compiled in
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SUPPORT_REQUESTS', 2);

/**
 * whether support to guess the Content-Type of HTTP messages is given, ie. libmagic support was compiled in
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SUPPORT_MAGICMIME', 4);

/**
 * whether support for zlib encodings is given, ie. libz support was compiled in
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SUPPORT_ENCODINGS', 8);

/**
 * whether support to issue HTTP requests over SSL is given, ie. linked libcurl was built with SSL support
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_SUPPORT_SSLREQUESTS', 32);
define ('HTTP_SUPPORT_EVENTS', 128);

/**
 * allow commands additionally to semicolons as separator
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PARAMS_ALLOW_COMMA', 1);

/**
 * continue parsing after an error occurred
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PARAMS_ALLOW_FAILURE', 2);

/**
 * raise PHP warnings on parse errors
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PARAMS_RAISE_ERROR', 4);

/**
 * all three values above, bitwise or'ed
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_PARAMS_DEFAULT', 7);

/**
 * replace every part of the first URL when there's one of the second URL
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_REPLACE', 0);

/**
 * join relative paths
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_JOIN_PATH', 1);

/**
 * join query strings
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_JOIN_QUERY', 2);

/**
 * strip any user authentication information
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_USER', 4);

/**
 * strip any password authentication information
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_PASS', 8);

/**
 * strip any authentication information
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_AUTH', 12);

/**
 * strip explicit port numbers
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_PORT', 32);

/**
 * strip complete path
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_PATH', 64);

/**
 * strip query string
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_QUERY', 128);

/**
 * strip any fragments (#identifier)
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_FRAGMENT', 256);

/**
 * strip anything but scheme and host
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_URL_STRIP_ALL', 492);
define ('HTTP_URL_FROM_ENV', 4096);

/**
 * runtime error
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_RUNTIME', 1);

/**
 * an invalid parameter was passed
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_INVALID_PARAM', 2);

/**
 * header() or similar operation failed
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_HEADER', 3);

/**
 * HTTP header parse error
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_MALFORMED_HEADERS', 4);

/**
 * unknown/invalid request method
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_REQUEST_METHOD', 5);

/**
 * with operation incompatible message type
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_MESSAGE_TYPE', 6);

/**
 * encoding/decoding error
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_ENCODING', 7);

/**
 * request failure
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_REQUEST', 8);

/**
 * request pool failure
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_REQUEST_POOL', 9);

/**
 * socket exception
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_SOCKET', 10);

/**
 * response failure
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_RESPONSE', 11);

/**
 * invalid URL
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_URL', 12);

/**
 * querystring operation failure
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_E_QUERYSTRING', 13);

/**
 * the message is of no specific type
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_MSG_NONE', 0);

/**
 * request style message
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_MSG_REQUEST', 1);

/**
 * response style message
 * @link http://php.net/manual/en/http.constants.php
 */
define ('HTTP_MSG_RESPONSE', 2);
define ('HTTP_QUERYSTRING_TYPE_BOOL', 3);
define ('HTTP_QUERYSTRING_TYPE_INT', 1);
define ('HTTP_QUERYSTRING_TYPE_FLOAT', 2);
define ('HTTP_QUERYSTRING_TYPE_STRING', 6);
define ('HTTP_QUERYSTRING_TYPE_ARRAY', 4);
define ('HTTP_QUERYSTRING_TYPE_OBJECT', 5);
