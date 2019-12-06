<?php

// Start of libxml v.

/**
*<div id="class.libxmlerror" class="reference">  <h1 class="title">The libXMLError class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="libxmlerror.intro">    <h2 class="title">简介</h2>    <p class="para">     Contains various information about errors thrown by libxml. The error codes     are described within the official      <a href="http://www.xmlsoft.org/html/libxml-xmlerror.html" class="link external">&raquo;&nbsp;xmlError API documentation</a>.    </p>    </div>      <div class="section" id="libxmlerror.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">libXMLError</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.level">$<var class="varname">level</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.code">$<var class="varname">code</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.column">$<var class="varname">column</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.message">$<var class="varname">message</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.file">$<var class="varname">file</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.line">$<var class="varname">line</var></a></var>     ;</div>     }</div>    </div>      <div class="section" id="libxmlerror.props">    <h2 class="title">属性</h2>    <dl>            <dt id="libxmlerror.props.level"><var class="varname"><var class="varname">level</var></var></dt>       <dd>        <p class="para">        the severity of the error (one of the following constants:        <strong><span>LIBXML_ERR_WARNING</span></strong>,        <strong><span>LIBXML_ERR_ERROR</span></strong> or        <strong><span>LIBXML_ERR_FATAL</span></strong>)       </p>      </dd>                 <dt id="libxmlerror.props.code"><var class="varname"><var class="varname">code</var></var></dt>       <dd>        <p class="para">        The error&#039;s code.       </p>      </dd>                 <dt id="libxmlerror.props.column"><var class="varname"><var class="varname">column</var></var></dt>       <dd>        <p class="para">        The column where the error occurred.       </p>       <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:         <p class="para">         This property isn&#039;t entirely implemented in libxml and therefore         <em>0</em> is often returned.        </p>       </p></blockquote>      </dd>                 <dt id="libxmlerror.props.message"><var class="varname"><var class="varname">message</var></var></dt>       <dd>        <p class="para">        The error message, if any.       </p>      </dd>                 <dt id="libxmlerror.props.file"><var class="varname"><var class="varname">file</var></var></dt>       <dd>        <p class="para">The filename, or empty if the XML was loaded from a string.</p>      </dd>                 <dt id="libxmlerror.props.line"><var class="varname"><var class="varname">line</var></var></dt>       <dd>        <p class="para">        The line where the error occurred.       </p>      </dd>          </dl>    </div>     </div>   <div class="up"><a href="http://php.net/manual/zh/book.libxml.php">libxml</a></div></div>
*/
class LibXMLError  {
	/**
	 * <p style="margin-top:0;">
	 * the severity of the error (one of the following constants:
	 * <b><code>LIBXML_ERR_WARNING</code></b>,
	 * <b><code>LIBXML_ERR_ERROR</code></b> or
	 * <b><code>LIBXML_ERR_FATAL</code></b>)
	 * </p>
	 * @var int
	 */
	public $level;
	/**
	 * <p style="margin-top:0;">
	 * The error's code.
	 * </p>
	 * @var int
	 */
	public $code;
	/**
	 * <p style="margin-top:0;">
	 * The column where the error occurred.
	 * </p>
	 * <p><b>Note</b>:
	 * </p><p>
	 * This property isn't entirely implemented in libxml and therefore
	 * 0 is often returned.
	 * </p>
	 * @var int
	 */
	public $column;
	/**
	 * <p style="margin-top:0;">
	 * The error message, if any.
	 * </p>
	 * @var string
	 */
	public $message;
	/**
	 * <p style="margin-top:0;">The filename, or empty if the XML was loaded from a string.</p>
	 * @var string
	 */
	public $file;
	/**
	 * <p style="margin-top:0;">
	 * The line where the error occurred.
	 * </p>
	 * @var int
	 */
	public $line;

}

/**
*<div id="function.libxml-set-streams-context" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_set_streams_context</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_set_streams_context</span> &mdash; <span class="dc-title">    Set the streams context for the next libxml document load or write   </span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-set-streams-context-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span> <span class="methodname" style="color:#CC7832"><strong>libxml_set_streams_context</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$streams_context</span></span>    )</div>    <p class="para rdfs-comment">    Sets the streams context for the next libxml document load or write.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.libxml-set-streams-context-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">streams_context</span></dt>        <dd>         <p class="para">         The stream context resource (created with         <span class="function">{@link stream_context_create()}</span>)        </p>       </dd>           </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-set-streams-context-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    没有返回值。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.libxml-set-streams-context-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6504">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">libxml_set_streams_context()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$opts&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'http'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'user_agent'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'PHP&nbsp;libxml&nbsp;agent'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;)<br />);<br /><br /></span><span style="color: #9876AA">$context&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">stream_context_create</span><span style="color: #007700">(</span><span style="color: #9876AA">$opts</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">libxml_set_streams_context</span><span style="color: #007700">(</span><span style="color: #9876AA">$context</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;request&nbsp;a&nbsp;file&nbsp;through&nbsp;HTTP<br /></span><span style="color: #9876AA">$doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">::</span><span style="color: #9876AA">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/file.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-set-streams-context-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link stream_context_create()} - 创建资源流上下文</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return void No value is returned.*/
function libxml_set_streams_context ($streams_context) {}

/**
*<div id="function.libxml-use-internal-errors" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_use_internal_errors</h1>   <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_use_internal_errors</span> &mdash; <span class="dc-title">    Disable libxml errors and allow user to fetch error information as needed   </span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-use-internal-errors-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>libxml_use_internal_errors</strong></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$use_errors</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">libxml_use_internal_errors()</strong></span> allows you to disable    standard libxml errors and enable user error handling.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.libxml-use-internal-errors-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">use_errors</span></dt>        <dd>         <p class="para">         Enable (<strong><span>TRUE</span></strong>) user error handling or disable (<strong><span>FALSE</span></strong>) user error handling. Disabling will also clear any existing libxml errors.        </p>       </dd>           </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-use-internal-errors-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    This function returns the previous value of    <span class="parameter" style="color:#2EACF9">use_errors</span>.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.libxml-use-internal-errors-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6505">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">libxml_use_internal_errors()</strong></span> example</strong></p>     <div class="example-contents"><p>      This example demonstrates the basic usage of libxml errors and the value      returned by this function.     </p></div>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #FF8000">//&nbsp;enable&nbsp;user&nbsp;error&nbsp;handling<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">libxml_use_internal_errors</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;load&nbsp;the&nbsp;document<br /></span><span style="color: #9876AA">$doc&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">;<br /><br />if&nbsp;(!</span><span style="color: #9876AA">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'file.xml'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #9876AA">libxml_get_errors</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;handle&nbsp;errors&nbsp;here<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">libxml_clear_errors</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> bool(false) </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-use-internal-errors-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link libxml_clear_errors()} - Clear libxml error buffer</span></li>     <li class="member"><span class="function">{@link libxml_get_errors()} - Retrieve array of errors</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return bool This function returns the previous value of*/
function libxml_use_internal_errors ($use_errors = false) {}

/**
*<div id="function.libxml-get-last-error" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_get_last_error</h1>   <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_get_last_error</span> &mdash; <span class="dc-title">    Retrieve last error from libxml   </span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-get-last-error-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.libxmlerror.php" class="type LibXMLError" style="color:#EAB766">LibXMLError</a></span> <span class="methodname" style="color:#CC7832"><strong>libxml_get_last_error</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Retrieve last error from libxml.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-get-last-error-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.libxmlerror.php" class="type LibXMLError" style="color:#EAB766">LibXMLError</a></span> object if there is any error in the    buffer, <strong><span>FALSE</span></strong> otherwise.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-get-last-error-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link libxml_get_errors()} - Retrieve array of errors</span></li>     <li class="member"><span class="function">{@link libxml_clear_errors()} - Clear libxml error buffer</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return LibXMLError a LibXMLError object if there is any error in the*/
function libxml_get_last_error () {}

/**
*<div id="function.libxml-clear-errors" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_clear_errors</h1>   <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_clear_errors</span> &mdash; <span class="dc-title">    Clear libxml error buffer   </span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-clear-errors-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span> <span class="methodname" style="color:#CC7832"><strong>libxml_clear_errors</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">libxml_clear_errors()</strong></span> clears the libxml error buffer.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-clear-errors-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    没有返回值。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-clear-errors-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link libxml_get_errors()} - Retrieve array of errors</span></li>     <li class="member"><span class="function">{@link libxml_get_last_error()} - Retrieve last error from libxml</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return void No value is returned.*/
function libxml_clear_errors () {}

/**
*<div id="function.libxml-get-errors" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_get_errors</h1>   <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_get_errors</span> &mdash; <span class="dc-title">    Retrieve array of errors   </span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-get-errors-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>libxml_get_errors</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Retrieve array of errors.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-get-errors-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns an array with <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.libxmlerror.php" class="type LibXMLError" style="color:#EAB766">LibXMLError</a></span> objects if there are any    errors in the buffer, or an empty array otherwise.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.libxml-get-errors-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6502">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">libxml_get_errors()</strong></span> example</strong></p>     <div class="example-contents"><p>      This example demonstrates how to build a simple libxml error handler.     </p></div>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />libxml_use_internal_errors</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$xmlstr&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;&nbsp;XML<br /></span><span style="color: #DD0000">&lt;?xml&nbsp;version='1.0'&nbsp;standalone='yes'?&gt;<br />&lt;movies&gt;<br />&nbsp;&lt;movie&gt;<br />&nbsp;&nbsp;&lt;titles&gt;PHP:&nbsp;Behind&nbsp;the&nbsp;Parser&lt;/title&gt;<br />&nbsp;&lt;/movie&gt;<br />&lt;/movies&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #9876AA">$doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$xmlstr</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$xmlstr</span><span style="color: #007700">);<br /><br />if&nbsp;(</span><span style="color: #9876AA">$doc&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #9876AA">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$errors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">libxml_get_errors</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #9876AA">$errors&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">display_xml_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$error</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$xml</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">libxml_clear_errors</span><span style="color: #007700">();<br />}<br /><br /><br />function&nbsp;</span><span style="color: #9876AA">display_xml_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$error</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$xml</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$xml</span><span style="color: #007700">[</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">line&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #9876AA">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">column</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"^\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">level</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #9876AA">LIBXML_ERR_WARNING</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Warning&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">code</span><span style="color: #DD0000">:&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #9876AA">LIBXML_ERR_ERROR</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Error&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">code</span><span style="color: #DD0000">:&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #9876AA">LIBXML_ERR_FATAL</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Fatal&nbsp;Error&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">code</span><span style="color: #DD0000">:&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #9876AA">trim</span><span style="color: #007700">(</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">message</span><span style="color: #007700">)&nbsp;.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"\n&nbsp;&nbsp;Line:&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">line</span><span style="color: #DD0000">"&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"\n&nbsp;&nbsp;Column:&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">column</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">file</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$return&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\n&nbsp;&nbsp;File:&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">file</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"</span><span style="color: #9876AA">$return</span><span style="color: #DD0000">\n\n--------------------------------------------\n\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span>   &lt;titles&gt;PHP: Behind the Parser&lt;/title&gt; ----------------------------------------------^ Fatal Error 76: Opening and ending tag mismatch: titles line 4 and title   Line: 4   Column: 46  -------------------------------------------- </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-get-errors-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link libxml_get_last_error()} - Retrieve last error from libxml</span></li>     <li class="member"><span class="function">{@link libxml_clear_errors()} - Clear libxml error buffer</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return array an array with LibXMLError objects if there are any*/
function libxml_get_errors () {}

/**
*<div id="function.libxml-disable-entity-loader" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_disable_entity_loader</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.11, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_disable_entity_loader</span> &mdash; <span class="dc-title">Disable the ability to load external entities</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-disable-entity-loader-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>libxml_disable_entity_loader</strong></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$disable</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ] )</div>    <p class="para rdfs-comment">    Disable/enable the ability to load external entities.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.libxml-disable-entity-loader-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">disable</span></dt>       <dd>        <p class="para">        Disable (<strong><span>TRUE</span></strong>) or enable (<strong><span>FALSE</span></strong>) libxml extensions (such as        <a href="http://php.net/manual/zh/book.dom.php" class="xref">DOM</a>, <a href="http://php.net/manual/zh/book.xmlwriter.php" class="xref">XMLWriter</a>        and <a href="http://php.net/manual/zh/book.xmlreader.php" class="xref">XMLReader</a>) to load external entities.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-disable-entity-loader-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the previous value.   </p>  </div>        <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-disable-entity-loader-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link libxml_use_internal_errors()} - Disable libxml errors and allow user to fetch error information as needed</span></li>     <li class="member"><a href="http://php.net/manual/zh/libxml.constants.php" class="link">The <strong><span>LIBXML_NONET</span></strong> constant</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return bool the previous value.*/
function libxml_disable_entity_loader ($disable = true) {}

/**
*<div id="function.libxml-set-external-entity-loader" class="refentry">  <div class="refnamediv">   <h1 class="refname">libxml_set_external_entity_loader</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">libxml_set_external_entity_loader</span> &mdash; <span class="dc-title">Changes the default external entity loader</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.libxml-set-external-entity-loader-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>libxml_set_external_entity_loader</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#2EACF9">$resolver_function</span></span>    )</div>    <p class="para rdfs-comment">    Changes the default external entity loader.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.libxml-set-external-entity-loader-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <span class="parameter" style="color:#2EACF9">resolver_function</span></dt>      <dd>       <span>       A <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> that takes three arguments. Two strings, a public id       and system id, and a context (an array with four keys) as the third argument.       This callback should return a resource, a string from which a resource can be       opened, or <strong><span>NULL</span></strong>.      </span>     </dd>        </dl>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.libxml-set-external-entity-loader-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.libxml-set-external-entity-loader-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6503">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">libxml_set_external_entity_loader()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$xml&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;!DOCTYPE&nbsp;foo&nbsp;PUBLIC&nbsp;"-//FOO/BAR"&nbsp;"http://example.com/foobar"&gt;<br />&lt;foo&gt;bar&lt;/foo&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #9876AA">$dtd&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;DTD<br /></span><span style="color: #DD0000">&lt;!ELEMENT&nbsp;foo&nbsp;(#PCDATA)&gt;<br /></span><span style="color: #007700">DTD;<br /><br /></span><span style="color: #9876AA">libxml_set_external_entity_loader</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;(</span><span style="color: #9876AA">$public</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$system</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$context</span><span style="color: #007700">)&nbsp;use(</span><span style="color: #9876AA">$dtd</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$public</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$system</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$context</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$f&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://temp"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"r+"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$f</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$dtd</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$f</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">$f</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />);<br /><br /></span><span style="color: #9876AA">$dd&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$r&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$dd</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">loadXML</span><span style="color: #007700">(</span><span style="color: #9876AA">$xml</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$dd</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">validate</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> string(10) &quot;-//FOO/BAR&quot; string(25) &quot;http://example.com/foobar&quot; array(4) {     [&quot;directory&quot;]    =&gt; NULL     [&quot;intSubName&quot;]   =&gt; NULL     [&quot;extSubURI&quot;]    =&gt; NULL     [&quot;extSubSystem&quot;] =&gt; NULL } bool(true) </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.libxml-set-external-entity-loader-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link libxml_disable_entity_loader()} - Disable the ability to load external entities</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.libxml.php">libxml 函数</a></div></div>
 * @return void No value is returned.*/
function libxml_set_external_entity_loader (callable $resolver_function) {}


/**
*      libxml version like 20605 or 20617     
*/
define ('LIBXML_VERSION', 20901);

/**
*      libxml version like 2.6.5 or 2.6.17     
*/
define ('LIBXML_DOTTED_VERSION', "2.9.1");
define ('LIBXML_LOADED_VERSION', 20901);

/**
*      Substitute entities     
*/
define ('LIBXML_NOENT', 2);

/**
*      Load the external subset     
*/
define ('LIBXML_DTDLOAD', 4);

/**
*      Default DTD attributes     
*/
define ('LIBXML_DTDATTR', 8);

/**
*      Validate with the DTD     
*/
define ('LIBXML_DTDVALID', 16);

/**
*      Suppress error reports     
*/
define ('LIBXML_NOERROR', 32);

/**
*      Suppress warning reports     
*/
define ('LIBXML_NOWARNING', 64);

/**
*      Remove blank nodes     
*/
define ('LIBXML_NOBLANKS', 256);

/**
*      Implement XInclude substitution     
*/
define ('LIBXML_XINCLUDE', 1024);

/**
*      Remove redundant namespace declarations     
*/
define ('LIBXML_NSCLEAN', 8192);

/**
*      Merge CDATA as text nodes     
*/
define ('LIBXML_NOCDATA', 16384);

/**
*      Disable network access when loading documents     
*/
define ('LIBXML_NONET', 2048);

/**
*      Sets XML_PARSE_PEDANTIC flag, which enables pedantic error reporting.     
*/
define ('LIBXML_PEDANTIC', 128);

/**
*      Activate small nodes allocation optimization. This may speed up your      application without needing to change the code.     
*/
define ('LIBXML_COMPACT', 65536);

/**
*      Allows line numbers greater than 65535 to be reported correctly.     
*/
define ('LIBXML_BIGLINES', 65535);


/**
*      Drop the XML declaration when saving a document     
*/
define ('LIBXML_NOXMLDECL', 2);

/**
*      Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects       limits like maximum depth of a document or the entity recursion, as well as limits of the       size of text nodes.     
*/
define ('LIBXML_PARSEHUGE', 524288);

/**
*      Expand empty tags (e.g. <em>&lt;br/&gt;</em> to      <em>&lt;br&gt;&lt;/br&gt;</em>)     
*/
define ('LIBXML_NOEMPTYTAG', 4);

/**
*      Create default/fixed value nodes during XSD schema validation     
*/
define ('LIBXML_SCHEMA_CREATE', 1);

/**
*      Sets HTML_PARSE_NOIMPLIED flag, which turns off the      automatic adding of implied html/body... elements.     
*/
define ('LIBXML_HTML_NOIMPLIED', 8192);

/**
*      Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype      being added when one is not found.     
*/
define ('LIBXML_HTML_NODEFDTD', 4);

/**
*      No errors     
*/
define ('LIBXML_ERR_NONE', 0);

/**
*      A simple warning     
*/
define ('LIBXML_ERR_WARNING', 1);

/**
*      A recoverable error     
*/
define ('LIBXML_ERR_ERROR', 2);

/**
*      A fatal error     
*/
define ('LIBXML_ERR_FATAL', 3);

// End of libxml v.
