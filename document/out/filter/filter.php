<?php

// Start of filter v.0.11.0

/**
*<div id="function.filter-input" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_input</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_input</span> &mdash; <span class="dc-title">通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-input-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>filter_input</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$type</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$variable_name</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$filter</code><span class="initializer"> = FILTER_DEFAULT</span></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$options</code></span>   ]] )</div>    </div>   <div class="refsect1 parameters" id="refsect1-function.filter-input-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">type</code></dt>       <dd>        <p class="para">        <strong><code>INPUT_GET</code></strong>, <strong><code>INPUT_POST</code></strong>,        <strong><code>INPUT_COOKIE</code></strong>, <strong><code>INPUT_SERVER</code></strong>或        <strong><code>INPUT_ENV</code></strong>之一。       </p>      </dd>                 <dt> <code class="parameter">variable_name</code></dt>       <dd>        <p class="para">        待获取的变量名。       </p>      </dd>                <dt> <code class="parameter">filter</code></dt>    <dd>     <p class="para">     The ID of the filter to apply. The <a href="http://php.net/manual/zh/filter.filters.php" class="xref">Types of filters</a>     manual page lists the available filters.    </p>    <p class="para">     If omitted, <strong><code>FILTER_DEFAULT</code></strong> will be used, which is     equivalent to     <a href="http://php.net/manual/zh/filter.filters.sanitize.php" class="link"><strong><code>FILTER_UNSAFE_RAW</code></strong></a>.     This will result in no filtering taking place by default.    </p>   </dd>               <dt> <code class="parameter">options</code></dt>       <dd>        <p class="para">        一个选项的关联数组，或者按位区分的标示。如果过滤器接受选项，可以通过数组的 &quot;flags&quot; 位去提供这些标示。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-input-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果成功的话返回所请求的变量。如果过滤失败则返回 <strong><code>FALSE</code></strong> ，如果<code class="parameter">variable_name</code> 不存在的话则返回 <strong><code>NULL</code></strong> 。    如果标示 <strong><code>FILTER_NULL_ON_FAILURE</code></strong> 被使用了，那么当变量不存在时返回 <strong><code>FALSE</code></strong> ，当过滤失败时返回 <strong><code>NULL</code></strong> 。    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.filter-input-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6175">     <p><strong>Example #1 一个 <span class="function"><strong>filter_input()</strong></span> 的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$search_html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_input</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'search'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_SANITIZE_SPECIAL_CHARS</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$search_url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_input</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'search'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #DD0000">"You&nbsp;have&nbsp;searched&nbsp;for&nbsp;</span><span style="color: #9876AA">$search_html</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #DD0000">"&lt;a&nbsp;href='?search=</span><span style="color: #9876AA">$search_url</span><span style="color: #DD0000">'&gt;Search&nbsp;again.&lt;/a&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> You have searched for Me &amp;#38; son. &lt;a href=&#039;?search=Me%20%26%20son&#039;&gt;Search again.&lt;/a&gt; </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.filter-input-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>     <li class="member"><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>     <li class="member"><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>     <li class="member"><a href="http://php.net/manual/zh/filter.filters.php" class="xref">Types of filters</a></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return mixed Value of the requested variable on success, <b>FALSE</b> if the filter fails,*/
function filter_input ($type, $variable_name, $filter = FILTER_DEFAULT, $options = null) {}

/**
*<div id="function.filter-var" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_var</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_var</span> &mdash; <span class="dc-title">使用特定的过滤器过滤一个变量</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-var-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>filter_var</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$variable</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$filter</code><span class="initializer"> = FILTER_DEFAULT</span></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$options</code></span>   ]] )</div>    </div>   <div class="refsect1 parameters" id="refsect1-function.filter-var-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">variable</code></dt>       <dd>        <p class="para">        待过滤的变量。注意：标量的值在过滤前，会被<a href="http://php.net/manual/zh/language.types.string.php#language.types.string.casting" class="link">转换成字符串</a>。       </p>      </dd>                <dt> <code class="parameter">filter</code></dt>    <dd>     <p class="para">     The ID of the filter to apply. The <a href="http://php.net/manual/zh/filter.filters.php" class="xref">Types of filters</a>     manual page lists the available filters.    </p>    <p class="para">     If omitted, <strong><code>FILTER_DEFAULT</code></strong> will be used, which is     equivalent to     <a href="http://php.net/manual/zh/filter.filters.sanitize.php" class="link"><strong><code>FILTER_UNSAFE_RAW</code></strong></a>.     This will result in no filtering taking place by default.    </p>   </dd>               <dt> <code class="parameter">options</code></dt>       <dd>        <p class="para">        一个选项的关联数组，或者按位区分的标示。如果过滤器接受选项，可以通过数组的 &quot;flags&quot; 位去提供这些标示。        对于回调型的过滤器，应该传入 <span class="type"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable">callable</a></span>。这个回调函数必须接受一个参数，即待过滤的值，并且        返回一个在过滤/净化后的值。       </p>       <p class="para">        <div class="example-contents">         <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;for&nbsp;filters&nbsp;that&nbsp;accept&nbsp;options,&nbsp;use&nbsp;this&nbsp;format<br /></span><span style="color: #9876AA">$options&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'default'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;value&nbsp;to&nbsp;return&nbsp;if&nbsp;the&nbsp;filter&nbsp;fails<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;other&nbsp;options&nbsp;here<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'min_range'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">0<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_FLAG_ALLOW_OCTAL</span><span style="color: #007700">,<br />);<br /></span><span style="color: #9876AA">$var&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'0755'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;for&nbsp;filter&nbsp;that&nbsp;only&nbsp;accept&nbsp;flags,&nbsp;you&nbsp;can&nbsp;pass&nbsp;them&nbsp;directly<br /></span><span style="color: #9876AA">$var&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'oops'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;for&nbsp;filter&nbsp;that&nbsp;only&nbsp;accept&nbsp;flags,&nbsp;you&nbsp;can&nbsp;also&nbsp;pass&nbsp;as&nbsp;an&nbsp;array<br /></span><span style="color: #9876AA">$var&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'oops'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'flags'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;callback&nbsp;validate&nbsp;filter<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">foo</span><span style="color: #007700">(</span><span style="color: #9876AA">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Expected&nbsp;format:&nbsp;Surname,&nbsp;GivenNames<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #9876AA">strpos</span><span style="color: #007700">(</span><span style="color: #9876AA">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">",&nbsp;"</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #9876AA">false</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #9876AA">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #9876AA">$surname</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$givennames</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #9876AA">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">",&nbsp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">2</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$empty&nbsp;</span><span style="color: #007700">=&nbsp;(empty(</span><span style="color: #9876AA">$surname</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #9876AA">$givennames</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$notstrings&nbsp;</span><span style="color: #007700">=&nbsp;(!</span><span style="color: #9876AA">is_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$surname</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #9876AA">is_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$givennames</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$empty&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #9876AA">$notstrings</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #9876AA">$var&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'Doe,&nbsp;Jane&nbsp;Sue'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_CALLBACK</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>        </div>        </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-var-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the filtered data, or <strong><code>FALSE</code></strong> if the filter fails.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.filter-var-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6178">     <p><strong>Example #1 一个 <span class="function"><strong>filter_var()</strong></span> 的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'bob@example.com'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.com'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_URL</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">FILTER_FLAG_PATH_REQUIRED</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> string(15) &quot;bob@example.com&quot; bool(false) </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.filter-var-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>     <li class="member"><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>     <li class="member"><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>     <li class="member"><a href="http://php.net/manual/zh/filter.filters.php" class="xref">Types of filters</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.callback" class="link">callback</a> 类型的信息</li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return mixed the filtered data, or <b>FALSE</b> if the filter fails.*/
function filter_var ($variable, $filter = FILTER_DEFAULT, $options = null) {}

/**
*<div id="function.filter-input-array" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_input_array</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_input_array</span> &mdash; <span class="dc-title">获取一系列外部变量，并且可以通过过滤器处理它们</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-input-array-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>filter_input_array</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$type</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$definition</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$add_empty</code><span class="initializer"> = true</span></span>   ]] )</div>    <p class="para rdfs-comment">    这个函数当需要获取很多变量却不想重复调用<span class="function">{@link filter_input()}</span>时很有用。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.filter-input-array-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">type</code></dt>       <dd>        <p class="para">        <strong><code>INPUT_GET</code></strong>, <strong><code>INPUT_POST</code></strong>,        <strong><code>INPUT_COOKIE</code></strong>, <strong><code>INPUT_SERVER</code></strong>, or        <strong><code>INPUT_ENV</code></strong>之一。       </p>      </dd>                 <dt> <code class="parameter">definition</code></dt>       <dd>        <p class="para">        一个定义参数的数组。一个有效的键必须是一个包含变量名的<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>，一个有效的值要么是一个<a href="http://php.net/manual/zh/filter.filters.php" class="link">filter type</a>，或者是一个<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>        指明了过滤器、标示和选项。如果值是一个数组，那么它的有效的键可以是 <em>filter</em>，        用于指明 <a href="http://php.net/manual/zh/filter.filters.php" class="link">filter type</a>，<em>flags</em>         用于指明任何想要用于过滤器的标示，或者 <em>options</em> 用于指明任何想要用于过滤器的选项。        参考下面的例子来更好的理解这段说明。       </p>       <p class="para">        这个参数也可以是一个<a href="http://php.net/manual/zh/filter.constants.php" class="link">filter constant</a>的整数。那么数组中的所有变量都会被这个过滤器所过滤。       </p>      </dd>                 <dt> <code class="parameter">add_empty</code></dt>       <dd>        <p class="para">        在返回值中添加 <strong><code>NULL</code></strong> 作为不存在的键。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-input-array-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果成功的话返回一个所请求的变量的数组，如果失败的话返回 <strong><code>FALSE</code></strong> 。对于数组的值，如果过滤失败则返回 <strong><code>FALSE</code></strong> ，如果<code class="parameter">variable_name</code> 不存在的话则返回 <strong><code>NULL</code></strong> 。    如果标示 <strong><code>FILTER_NULL_ON_FAILURE</code></strong> 被使用了，那么当变量不存在时返回 <strong><code>FALSE</code></strong> ，当过滤失败时返回 <strong><code>NULL</code></strong> 。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.filter-input-array-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6174">     <p><strong>Example #1 一个 <span class="function"><strong>filter_input_array()</strong></span> 的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />error_reporting</span><span style="color: #007700">(</span><span style="color: #9876AA">E_ALL&nbsp;</span><span style="color: #007700">|&nbsp;</span><span style="color: #9876AA">E_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;data&nbsp;actually&nbsp;came&nbsp;from&nbsp;POST<br />$_POST&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;'product_id'&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;'libgd&lt;script&gt;',<br />&nbsp;&nbsp;&nbsp;&nbsp;'component'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;'10',<br />&nbsp;&nbsp;&nbsp;&nbsp;'versions'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;'2.0.33',<br />&nbsp;&nbsp;&nbsp;&nbsp;'testscalar'&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;array('2',&nbsp;'23',&nbsp;'10',&nbsp;'12'),<br />&nbsp;&nbsp;&nbsp;&nbsp;'testarray'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;'2',<br />);<br /><br /><br /></span><span style="color: #9876AA">$args&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'product_id'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'component'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'filter'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">,&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'min_range'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max_range'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">10</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'versions'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'doesnotexist'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'testscalar'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filter'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_REQUIRE_SCALAR</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'testarray'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filter'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br /><br />);<br /><br /></span><span style="color: #9876AA">$myinputs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_input_array</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_POST</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$args</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$myinputs</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(6) {   [&quot;product_id&quot;]=&gt;   string(17) &quot;libgd%3Cscript%3E&quot;   [&quot;component&quot;]=&gt;   array(1) {     [0]=&gt;     int(10)   }   [&quot;versions&quot;]=&gt;   string(6) &quot;2.0.33&quot;   [&quot;doesnotexist&quot;]=&gt;   NULL   [&quot;testscalar&quot;]=&gt;   bool(false)   [&quot;testarray&quot;]=&gt;   array(1) {     [0]=&gt;     int(2)   } } </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.filter-input-array-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.4.0</td>        <td>         添加 <code class="parameter">add_empty</code> 参数.        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 notes" id="refsect1-function.filter-input-array-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     在 <strong><code>INPUT_SERVER</code></strong> 数组中并没有 <em>REQUEST_TIME</em> ，因为它是被稍后插入到<var class="varname"><var class="varname"><a href="http://php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER</a></var></var> 中的。    </p>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.filter-input-array-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>     <li class="member"><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>     <li class="member"><a href="http://php.net/manual/zh/filter.filters.php" class="xref">Types of filters</a></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return mixed An array containing the values of the requested variables on success, or <b>FALSE</b>*/
function filter_input_array ($type, $definition = null, $add_empty = true) {}

/**
*<div id="function.filter-var-array" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_var_array</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_var_array</span> &mdash; <span class="dc-title">获取多个变量并且过滤它们</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-var-array-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>filter_var_array</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$data</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$definition</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$add_empty</code><span class="initializer"> = true</span></span>   ]] )</div>    <p class="para rdfs-comment">    不需要重复调用 <span class="function">{@link filter_var()}</span> 就能获取多个变量。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.filter-var-array-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">data</code></dt>       <dd>        <p class="para">        数组，键为字符串，值为待过滤的数据。       </p>      </dd>                 <dt> <code class="parameter">definition</code></dt>       <dd>        <p class="para">        一个定义参数的数组。一个有效的键必须是一个包含变量名的<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>，一个有效的值要么是一个<a href="http://php.net/manual/zh/filter.filters.php" class="link">filter type</a>，或者是一个<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>        指明了过滤器、标示和选项。如果值是一个数组，那么它的有效的键可以是 <em>filter</em>，        用于指明 <a href="http://php.net/manual/zh/filter.filters.php" class="link">filter type</a>，<em>flags</em>         用于指明任何想要用于过滤器的标示，或者 <em>options</em> 用于指明任何想要用于过滤器的选项。        参考下面的例子来更好的理解这段说明。       </p>       <p class="para">        这个参数也可以是一个<a href="http://php.net/manual/zh/filter.constants.php" class="link">filter constant</a>的整数。那么数组中的所有值都会被这个过滤器所过滤。       </p>      </dd>                 <dt> <code class="parameter">add_empty</code></dt>       <dd>        <p class="para">        在返回值中添加 <strong><code>NULL</code></strong> 作为不存在的键。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-var-array-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果成功则返回一个包含所请求变量的数组，或者当失败时返回 <strong><code>FALSE</code></strong> 。    一个数组的值如果过滤失败则为 <strong><code>FALSE</code></strong> ，或者为 <strong><code>NULL</code></strong> 如果变量不存在的话。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.filter-var-array-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6177">     <p><strong>Example #1 一个 <span class="function"><strong>filter_var_array()</strong></span> 的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />error_reporting</span><span style="color: #007700">(</span><span style="color: #9876AA">E_ALL&nbsp;</span><span style="color: #007700">|&nbsp;</span><span style="color: #9876AA">E_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'product_id'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'libgd&lt;script&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'component'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'versions'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2.0.33'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'testscalar'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'testarray'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #9876AA">$args&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'product_id'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'component'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'filter'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_FORCE_ARRAY</span><span style="color: #007700">,&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'min_range'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max_range'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">10</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'versions'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'doesnotexist'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'testscalar'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filter'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_REQUIRE_SCALAR</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'testarray'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filter'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'flags'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">FILTER_FORCE_ARRAY</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br /><br />);<br /><br /></span><span style="color: #9876AA">$myinputs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">filter_var_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$args</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$myinputs</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(6) {   [&quot;product_id&quot;]=&gt;   string(17) &quot;libgd%3Cscript%3E&quot;   [&quot;component&quot;]=&gt;   array(1) {     [0]=&gt;     int(10)   }   [&quot;versions&quot;]=&gt;   string(6) &quot;2.0.33&quot;   [&quot;doesnotexist&quot;]=&gt;   NULL   [&quot;testscalar&quot;]=&gt;   bool(false)   [&quot;testarray&quot;]=&gt;   array(1) {     [0]=&gt;     int(2)   } } </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.filter-var-array-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.4.0</td>        <td>         添加 <code class="parameter">add_empty</code> 参数。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.filter-var-array-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>     <li class="member"><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>     <li class="member"><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>     <li class="member"><a href="http://php.net/manual/zh/filter.filters.php" class="xref">Types of filters</a></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return mixed An array containing the values of the requested variables on success, or <b>FALSE</b>*/
function filter_var_array (array $data, $definition = null, $add_empty = true) {}

/**
*<div id="function.filter-list" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_list</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_list</span> &mdash; <span class="dc-title">返回所支持的过滤器列表</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-list-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><strong>filter_list</strong></span>     ( <span class="methodparam">void</span>    )</div>    </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-list-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回一个所支持的过滤器的名称的列表，如果没有这样子的过滤器的话则返回空数组。这个数组的索引不是过滤器id，    你可以通过 <span class="function">{@link filter_id()}</span> 去根据名称获取它们。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.filter-list-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6176">     <p><strong>Example #1 一个 <span class="function"><strong>filter_list()</strong></span> 的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_list</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> Array (     [0] =&gt; int     [1] =&gt; boolean     [2] =&gt; float     [3] =&gt; validate_regexp     [4] =&gt; validate_url     [5] =&gt; validate_email     [6] =&gt; validate_ip     [7] =&gt; string     [8] =&gt; stripped     [9] =&gt; encoded     [10] =&gt; special_chars     [11] =&gt; unsafe_raw     [12] =&gt; email     [13] =&gt; url     [14] =&gt; number_int     [15] =&gt; number_float     [16] =&gt; magic_quotes     [17] =&gt; callback ) </pre></div>     </div>    </div>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return array an array of names of all supported filters, empty array if there*/
function filter_list () {}

/**
*<div id="function.filter-has-var" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_has_var</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_has_var</span> &mdash; <span class="dc-title">检测是否存在指定类型的变量</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-has-var-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>filter_has_var</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$type</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$variable_name</code></span>    )</div>    </div>   <div class="refsect1 parameters" id="refsect1-function.filter-has-var-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">type</code></dt>       <dd>        <p class="para">        <strong><code>INPUT_GET</code></strong>、 <strong><code>INPUT_POST</code></strong>、        <strong><code>INPUT_COOKIE</code></strong>、 <strong><code>INPUT_SERVER</code></strong>、        <strong><code>INPUT_ENV</code></strong> 里的其中一个。       </p>      </dd>                 <dt> <code class="parameter">variable_name</code></dt>       <dd>        <p class="para">        要检查的变量名。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-has-var-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function filter_has_var ($type, $variable_name) {}

/**
*<div id="function.filter-id" class="refentry">  <div class="refnamediv">   <h1 class="refname">filter_id</h1>   <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p><p class="refpurpose"><span class="refname">filter_id</span> &mdash; <span class="dc-title">返回与某个特定名称的过滤器相关联的id</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.filter-id-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>filter_id</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filtername</code></span>    )</div>    </div>   <div class="refsect1 parameters" id="refsect1-function.filter-id-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">filtername</code></dt>       <dd>        <p class="para">        待获取的过滤器名称       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.filter-id-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果获取成功则返回过滤器id，如果过滤器不存在则返回 <strong><code>FALSE</code></strong> 。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.filter-id-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link filter_list()} - 返回所支持的过滤器列表</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filter.php">过滤器函数</a></div></div>
 * @return int ID of a filter on success or <b>FALSE</b> if filter doesn't exist.*/
function filter_id ($filtername) {}


/**
*      <a href="http://php.net/manual/zh/reserved.variables.post.php" class="link">POST</a> 变量。     
*/
define ('INPUT_POST', 0);

/**
*      <a href="http://php.net/manual/zh/reserved.variables.get.php" class="link">GET</a> 变量。     
*/
define ('INPUT_GET', 1);

/**
*      <a href="http://php.net/manual/zh/reserved.variables.cookies.php" class="link">COOKIE</a> 变量。     
*/
define ('INPUT_COOKIE', 2);

/**
*      <a href="http://php.net/manual/zh/reserved.variables.environment.php" class="link">ENV</a> 变量。     
*/
define ('INPUT_ENV', 4);

/**
*      <a href="http://php.net/manual/zh/reserved.variables.server.php" class="link">SERVER</a> 变量。     
*/
define ('INPUT_SERVER', 5);

/**
*      <a href="http://php.net/manual/zh/reserved.variables.session.php" class="link">SESSION</a> 变量。     (暂未实现)     
*/
define ('INPUT_SESSION', 6);

/**
*      <a href="http://php.net/manual/zh/reserved.variables.request.php" class="link">REQUEST</a> 变量。     (暂未实现)     
*/
define ('INPUT_REQUEST', 99);

/**
*      没有标记。     
*/
define ('FILTER_FLAG_NONE', 0);

/**
*      此标记要求输入的是标量。     
*/
define ('FILTER_REQUIRE_SCALAR', 33554432);

/**
*      需要输入的是数组。     
*/
define ('FILTER_REQUIRE_ARRAY', 16777216);

/**
*      一律返回数组。     
*/
define ('FILTER_FORCE_ARRAY', 67108864);

/**
*      失败时返回 NULL，而非 FALSE。     
*/
define ('FILTER_NULL_ON_FAILURE', 134217728);

/**
*      标记 &quot;int&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_INT', 257);

/**
*      标记 &quot;boolean&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_BOOLEAN', 258);

/**
*      标记 &quot;float&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_FLOAT', 259);

/**
*      标记 &quot;validate_regexp&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_REGEXP', 272);

define('FILTER_VALIDATE_DOMAIN', 277);

/**
*      标记 &quot;validate_url&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_URL', 273);

/**
*      标记 &quot;validate_email&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_EMAIL', 274);

/**
*      标记 &quot;validate_ip&quot; 过滤器。     
*/
define ('FILTER_VALIDATE_IP', 275);
/**
*      标记 &quot;validate_mac_address&quot; 过滤器。（PHP 5.5.0 起有效）     
*/
define ('FILTER_VALIDATE_MAC', 276);

/**
*      标记默认的 &quot;unsafe_raw&quot; 过滤器。 等同于     <strong><code>FILTER_UNSAFE_RAW</code></strong>。     
*/
define ('FILTER_DEFAULT', 516);

/**
*      标记 &quot;unsafe_raw&quot; 过滤器。     
*/
define ('FILTER_UNSAFE_RAW', 516);

/**
*      标记 &quot;string&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_STRING', 513);

/**
*      标记 &quot;stripped&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_STRIPPED', 513);

/**
*      标记 &quot;encoded&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_ENCODED', 514);

/**
*      标记 &quot;special_chars&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_SPECIAL_CHARS', 515);
define ('FILTER_SANITIZE_FULL_SPECIAL_CHARS', 522);

/**
*      标记 &quot;email&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_EMAIL', 517);

/**
*      标记 &quot;url&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_URL', 518);

/**
*      标记 &quot;number_int&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_NUMBER_INT', 519);

/**
*      标记 &quot;number_float&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_NUMBER_FLOAT', 520);

/**
*      标记 &quot;magic_quotes&quot; 过滤器。     
*/
define ('FILTER_SANITIZE_MAGIC_QUOTES', 521);

/**
*      标记 &quot;callback&quot; 过滤器。     
*/
define ('FILTER_CALLBACK', 1024);

/**
*      &quot;int&quot; 过滤器允许八进制（octal）标记的字符（<em>0[0-7]+</em>）。     
*/
define ('FILTER_FLAG_ALLOW_OCTAL', 1);

/**
*      &quot;int&quot; 过滤器允许十六进制（Hex）标记的字符（<em>0x[0-9a-fA-F]+</em>）     
*/
define ('FILTER_FLAG_ALLOW_HEX', 2);

/**
*      过滤 ASCII 编码值大于 32 的字符 。     
*/
define ('FILTER_FLAG_STRIP_LOW', 4);

/**
*      过滤 ASCII 编码值大于 127 的字符 。     
*/
define ('FILTER_FLAG_STRIP_HIGH', 8);
define ('FILTER_FLAG_STRIP_BACKTICK', 512);

/**
*      字符的 ASCII 编码值大于 32。     
*/
define ('FILTER_FLAG_ENCODE_LOW', 16);

/**
*      字符的 ASCII 编码值大于 127。     
*/
define ('FILTER_FLAG_ENCODE_HIGH', 32);

/**
*      为 <em>&amp;</em> 编码。     
*/
define ('FILTER_FLAG_ENCODE_AMP', 64);

/**
*      不要为 <em>&#039;</em> 和 <em>&quot;</em> 编码。     
*/
define ('FILTER_FLAG_NO_ENCODE_QUOTES', 128);

/**
*      (目前不能使用。)     
*/
define ('FILTER_FLAG_EMPTY_STRING_NULL', 256);

/**
*       &quot;number_float&quot; 过滤器允许小数部分。     
*/
define ('FILTER_FLAG_ALLOW_FRACTION', 4096);

/**
*      &quot;number_float&quot; 过滤器允许使用千分位分隔符（<em>,</em>）。     
*/
define ('FILTER_FLAG_ALLOW_THOUSAND', 8192);

/**
*      &quot;number_float&quot; 过滤器允许使用科学计数法（<em>e</em>、<em>E</em>）。     
*/
define ('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);

/**
 * Require scheme in "validate_url" filter.
 * @link http://php.net/manual/en/filter.constants.php
 */
define ('FILTER_FLAG_SCHEME_REQUIRED', 65536);

/**
 * Require host in "validate_url" filter.
 * @link http://php.net/manual/en/filter.constants.php
 */
define ('FILTER_FLAG_HOST_REQUIRED', 131072);

/**
*      &quot;validate_url&quot; 过滤器，要求带路径部分。     
*/
define ('FILTER_FLAG_PATH_REQUIRED', 262144);

/**
*      &quot;validate_url&quot; 过滤器，要求带 Query 部分。     
*/
define ('FILTER_FLAG_QUERY_REQUIRED', 524288);

/**
*      &quot;validate_ip&quot; 过滤器，仅仅允许 IPv4 地址。     
*/
define ('FILTER_FLAG_IPV4', 1048576);

/**
*      &quot;validate_ip&quot; 过滤器，仅仅允许 IPv6 地址。     
*/
define ('FILTER_FLAG_IPV6', 2097152);

/**
*      &quot;validate_ip&quot; 过滤器，禁止保留 IP 地址。     
*/
define ('FILTER_FLAG_NO_RES_RANGE', 4194304);

/**
*      &quot;validate_ip&quot; 过滤器，禁止私有 IP 地址。     
*/
define ('FILTER_FLAG_NO_PRIV_RANGE', 8388608);

define('FILTER_FLAG_HOSTNAME', 1048576);
/**
*      &quot;validate_email&quot; 过滤器，在邮件地址用户名部分允许 Unicode 字符。      （PHP 7.1.0 起有效）     
*/
define('FILTER_FLAG_EMAIL_UNICODE', 1048576);
// End of filter v.0.11.0
?>
