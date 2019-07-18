<?php

// Start of wddx v.

/**
*<div id="function.wddx-serialize-value" class="refentry">  <div class="refnamediv">   <h1 class="refname">wddx_serialize_value</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">wddx_serialize_value</span> &mdash; <span class="dc-title">Serialize a single value into a WDDX packet</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.wddx-serialize-value-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>wddx_serialize_value</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$comment</code></span>   ] )</div>    <p class="para rdfs-comment">    Creates a WDDX packet from a single given value.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.wddx-serialize-value-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">var</code></dt>       <dd>        <p class="para">        The value to be serialized       </p>      </dd>                 <dt> <code class="parameter">comment</code></dt>       <dd>        <p class="para">        An optional comment string that appears in the packet header.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.wddx-serialize-value-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the WDDX packet, or <strong><code>FALSE</code></strong> on error.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.wddx.php">WDDX 函数</a></div></div>
 * @return string the WDDX packet, or <b>FALSE</b> on error.*/
function wddx_serialize_value ($var, $comment = null) {}

/**
*<div id="function.wddx-serialize-vars" class="refentry">  <div class="refnamediv">   <h1 class="refname">wddx_serialize_vars</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">wddx_serialize_vars</span> &mdash; <span class="dc-title">Serialize variables into a WDDX packet</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.wddx-serialize-vars-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>wddx_serialize_vars</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$var_name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ] )</div>    <p class="para rdfs-comment">    Creates a WDDX packet with a structure that contains the serialized    representation of the passed variables.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.wddx-serialize-vars-parameters">   <h3 class="title">参数</h3>   <p class="para">    This function takes a variable number of parameters.    <dl>            <dt> <code class="parameter">var_name</code></dt>       <dd>        <p class="para">        Can be either a string naming a variable or an array containing        strings naming the variables or another array, etc.       </p>      </dd>                 <dt> <code class="parameter">...</code></dt>       <dd>        <p class="para">       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.wddx-serialize-vars-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the WDDX packet, or <strong><code>FALSE</code></strong> on error.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.wddx-serialize-vars-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6588">     <p><strong>Example #1 <span class="function"><strong>wddx_serialize_vars()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$a&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">5.5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$c&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"blue"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"violet"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$d&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"colors"</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">$clvars&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"c"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"d"</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">wddx_serialize_vars</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"b"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$clvars</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> &lt;wddxPacket version=&#039;1.0&#039;&gt;&lt;header/&gt;&lt;data&gt;&lt;struct&gt;&lt;var name=&#039;a&#039;&gt;&lt;number&gt;1&lt;/number&gt;&lt;/var&gt; &lt;var name=&#039;b&#039;&gt;&lt;number&gt;5.5&lt;/number&gt;&lt;/var&gt;&lt;var name=&#039;c&#039;&gt;&lt;array length=&#039;3&#039;&gt; &lt;string&gt;blue&lt;/string&gt;&lt;string&gt;orange&lt;/string&gt;&lt;string&gt;violet&lt;/string&gt;&lt;/array&gt;&lt;/var&gt; &lt;var name=&#039;d&#039;&gt;&lt;string&gt;colors&lt;/string&gt;&lt;/var&gt;&lt;/struct&gt;&lt;/data&gt;&lt;/wddxPacket&gt; </pre></div>     </div>    </div>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.wddx.php">WDDX 函数</a></div></div>
 * @return string the WDDX packet, or <b>FALSE</b> on error.*/
function wddx_serialize_vars ($var_name, $_ = null) {}

/**
*<div id="function.wddx-packet-start" class="refentry">  <div class="refnamediv">   <h1 class="refname">wddx_packet_start</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">wddx_packet_start</span> &mdash; <span class="dc-title">Starts a new WDDX packet with structure inside it</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.wddx-packet-start-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">resource</span> <span class="methodname"><strong>wddx_packet_start</strong></span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$comment</code></span>   ] )</div>    <p class="para rdfs-comment">    Start a new WDDX packet for incremental addition of variables.    It automatically creates a structure definition inside the packet to    contain the variables.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.wddx-packet-start-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">comment</code></dt>       <dd>        <p class="para">        An optional comment string.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.wddx-packet-start-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a packet ID for use in later functions, or <strong><code>FALSE</code></strong> on error.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.wddx.php">WDDX 函数</a></div></div>
 * @return resource a packet ID for use in later functions, or <b>FALSE</b> on error.*/
function wddx_packet_start ($comment = null) {}

/**
*<div id="function.wddx-packet-end" class="refentry">  <div class="refnamediv">   <h1 class="refname">wddx_packet_end</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">wddx_packet_end</span> &mdash; <span class="dc-title">Ends a WDDX packet with the specified ID</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.wddx-packet-end-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>wddx_packet_end</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$packet_id</code></span>    )</div>    <p class="para rdfs-comment">    Ends and returns the given WDDX packet.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.wddx-packet-end-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">packet_id</code></dt>       <dd>        <p class="para">        A WDDX packet, returned by <span class="function">{@link wddx_packet_start()}</span>.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.wddx-packet-end-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the string containing the WDDX packet.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.wddx.php">WDDX 函数</a></div></div>
 * @return string the string containing the WDDX packet.*/
function wddx_packet_end ($packet_id) {}

/**
*<div id="function.wddx-add-vars" class="refentry">  <div class="refnamediv">   <h1 class="refname">wddx_add_vars</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">wddx_add_vars</span> &mdash; <span class="dc-title">Add variables to a WDDX packet with the specified ID</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.wddx-add-vars-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>wddx_add_vars</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$packet_id</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$var_name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ] )</div>    <p class="para rdfs-comment">    Serializes the passed variables and add the result to the given packet.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.wddx-add-vars-parameters">   <h3 class="title">参数</h3>   <p class="para">    This function takes a variable number of parameters.    <dl>            <dt> <code class="parameter">packet_id</code></dt>       <dd>        <p class="para">        A WDDX packet, returned by <span class="function">{@link wddx_packet_start()}</span>.       </p>      </dd>                 <dt> <code class="parameter">var_name</code></dt>       <dd>        <p class="para">        Can be either a string naming a variable or an array containing        strings naming the variables or another array, etc.       </p>      </dd>                 <dt> <code class="parameter">...</code></dt>       <dd>        <p class="para">       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.wddx-add-vars-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.wddx.php">WDDX 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function wddx_add_vars ($packet_id, $var_name, $_ = null) {}

/**
*<div id="function.wddx-deserialize" class="refentry">  <div class="refnamediv">   <h1 class="refname">wddx_deserialize</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">wddx_deserialize</span> &mdash; <span class="dc-title">Unserializes a WDDX packet</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.wddx-deserialize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>wddx_deserialize</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$packet</code></span>    )</div>    <p class="para rdfs-comment">    Unserializes a WDDX <code class="parameter">packet</code>.   </p>   <div class="warning"><strong class="warning">Warning</strong>    <p class="para">     Do not pass untrusted user input to <span class="function"><strong>wddx_deserialize()</strong></span>.     Unserialization can result in code being loaded and executed due to object     instantiation and autoloading, and a malicious user may be able to exploit     this. Use a safe, standard data interchange format such as JSON (via     <span class="function">{@link json_decode()}</span> and <span class="function">{@link json_encode()}</span>) if     you need to pass serialized data to the user.    </p>   </div>  </div>    <div class="refsect1 parameters" id="refsect1-function.wddx-deserialize-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">packet</code></dt>       <dd>        <p class="para">        A WDDX packet, as a string or stream.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.wddx-deserialize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the deserialized value which can be a string, a number or an    array. Note that structures are deserialized into associative arrays.   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.wddx.php">WDDX 函数</a></div></div>
 * @return mixed the deserialized value which can be a string, a number or an*/
function wddx_deserialize ($packet) {}

// End of wddx v.
?>