<?php

// Start of gettext v.

/**
*<div id="function.textdomain" class="refentry">    <div class="refnamediv">     <h1 class="refname">textdomain</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">textdomain</span> &mdash; <span class="dc-title">Sets the default domain</span></p>     </div>    <div class="refsect1 description" id="refsect1-function.textdomain-description">     <h3 class="title">说明</h3>      <div class="methodsynopsis dc-description">       <span class="type">string</span> <span class="methodname"><strong>textdomain</strong></span>        ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$text_domain</code><span class="initializer"> = <strong><code>NULL</code></strong></span></span>       )</div>      <p class="para rdfs-comment">      This function sets the domain to search within when calls are      made to <span class="function">{@link gettext()}</span>, usually the named after an      application.     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.textdomain-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">text_domain</code></dt>       <dd>        <p class="para">        The new message domain, or <strong><code>NULL</code></strong> to get the current setting without        changing it       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.textdomain-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    If successful, this function returns the current message    domain, after possibly changing it.   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string If successful, this function returns the current message*/
function textdomain ($text_domain) {}

/**
*<div id="function.gettext" class="refentry">  <div class="refnamediv">   <h1 class="refname">gettext</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">gettext</span> &mdash; <span class="dc-title">Lookup a message in the current domain</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.gettext-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>gettext</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$message</code></span>    )</div>    <p class="para rdfs-comment">    Looks up a message in the current domain.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.gettext-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">message</code></dt>       <dd>        <p class="para">        The message being translated.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.gettext-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a translated <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> if one is found in the     translation table, or the submitted message if not found.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.gettext-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2883">     <p><strong>Example #1 <span class="function"><strong>gettext()</strong></span>-check</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Set&nbsp;language&nbsp;to&nbsp;German<br /></span><span style="color: #9876AA">putenv</span><span style="color: #007700">(</span><span style="color: #DD0000">'LC_ALL=de_DE'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_ALL</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Specify&nbsp;location&nbsp;of&nbsp;translation&nbsp;tables<br /></span><span style="color: #9876AA">bindtextdomain</span><span style="color: #007700">(</span><span style="color: #DD0000">"myPHPApp"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"./locale"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Choose&nbsp;domain<br /></span><span style="color: #9876AA">textdomain</span><span style="color: #007700">(</span><span style="color: #DD0000">"myPHPApp"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Translation&nbsp;is&nbsp;looking&nbsp;for&nbsp;in&nbsp;./locale/de_DE/LC_MESSAGES/myPHPApp.mo&nbsp;now<br /><br />//&nbsp;Print&nbsp;a&nbsp;test&nbsp;message<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">gettext</span><span style="color: #007700">(</span><span style="color: #DD0000">"Welcome&nbsp;to&nbsp;My&nbsp;PHP&nbsp;Application"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Or&nbsp;use&nbsp;the&nbsp;alias&nbsp;_()&nbsp;for&nbsp;gettext()<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">_</span><span style="color: #007700">(</span><span style="color: #DD0000">"Have&nbsp;a&nbsp;nice&nbsp;day"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>     <div class="refsect1 notes" id="refsect1-function.gettext-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     You may use the underscore character &#039;_&#039; as an alias to this function.    </p>   </p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     Setting a language isn&#039;t enough for some systems and the      <span class="function">{@link putenv()}</span> should be used to define the      current locale.    </p>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.gettext-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link setlocale()} - 设置地区信息</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string a translated string if one is found in the*/
function gettext ($message) {}

/**
 * Lookup a message in the current domain
 * @link http://php.net/manual/en/function.gettext.php
 * @param string $message <p>
 * The message being translated.
 * </p>
 * @return string a translated string if one is found in the
 * translation table, or the submitted message if not found.
 * @since 4.0
 * @since 5.0
 */
function _ ($message) {}

/**
*<div id="function.dgettext" class="refentry">  <div class="refnamediv">   <h1 class="refname">dgettext</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">dgettext</span> &mdash; <span class="dc-title">Override the current domain</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.dgettext-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>dgettext</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$domain</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$message</code></span>    )</div>    <p class="para rdfs-comment">    The <span class="function"><strong>dgettext()</strong></span> function allows you to override    the current <code class="parameter">domain</code> for a single message lookup.   </p>  </div>     <div class="refsect1 parameters" id="refsect1-function.dgettext-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">domain</code></dt>       <dd>        <p class="para">        The domain       </p>      </dd>                 <dt> <code class="parameter">message</code></dt>       <dd>        <p class="para">        The message       </p>      </dd>          </dl>    </p>  </div>     <div class="refsect1 returnvalues" id="refsect1-function.dgettext-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    A <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> on success.   </p>  </div>     <div class="refsect1 seealso" id="refsect1-function.dgettext-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link gettext()} - Lookup a message in the current domain</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string A string on success.*/
function dgettext ($domain, $message) {}

/**
*<div id="function.dcgettext" class="refentry">  <div class="refnamediv">   <h1 class="refname">dcgettext</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">dcgettext</span> &mdash; <span class="dc-title">Overrides the domain for a single lookup</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.dcgettext-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>dcgettext</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$domain</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$message</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$category</code></span>    )</div>    <p class="para rdfs-comment">    This function allows you to override the current domain for a    single message lookup.   </p>  </div>     <div class="refsect1 parameters" id="refsect1-function.dcgettext-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">domain</code></dt>       <dd>        <p class="para">        The domain       </p>      </dd>                 <dt> <code class="parameter">message</code></dt>       <dd>        <p class="para">        The message       </p>      </dd>                 <dt> <code class="parameter">category</code></dt>       <dd>        <p class="para">        The category       </p>      </dd>          </dl>    </p>  </div>     <div class="refsect1 returnvalues" id="refsect1-function.dcgettext-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    A <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> on success.   </p>  </div>     <div class="refsect1 seealso" id="refsect1-function.dcgettext-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link gettext()} - Lookup a message in the current domain</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string A string on success.*/
function dcgettext ($domain, $message, $category) {}

/**
*<div id="function.bindtextdomain" class="refentry">  <div class="refnamediv">   <h1 class="refname">bindtextdomain</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bindtextdomain</span> &mdash; <span class="dc-title">Sets the path for a domain</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.bindtextdomain-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>bindtextdomain</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$domain</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$directory</code></span>    )</div>    <p class="para rdfs-comment">    The <span class="function"><strong>bindtextdomain()</strong></span> function sets the path    for a domain.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.bindtextdomain-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">domain</code></dt>       <dd>        <p class="para">        The domain       </p>      </dd>                 <dt> <code class="parameter">directory</code></dt>       <dd>        <p class="para">        The directory path       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.bindtextdomain-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    The full pathname for the <code class="parameter">domain</code> currently being set.   </p>  </div>      <div class="refsect1 examples" id="refsect1-function.bindtextdomain-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2882">     <p><strong>Example #1 <span class="function"><strong>bindtextdomain()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$domain&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'myapp'</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #9876AA">bindtextdomain</span><span style="color: #007700">(</span><span style="color: #9876AA">$domain</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/usr/share/myapp/locale'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> /usr/share/myapp/locale </pre></div>     </div>    </div>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string The full pathname for the <i>domain</i> currently being set.*/
function bindtextdomain ($domain, $directory) {}

/**
*<div id="function.ngettext" class="refentry">  <div class="refnamediv">   <h1 class="refname">ngettext</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">ngettext</span> &mdash; <span class="dc-title">Plural version of gettext</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.ngettext-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>ngettext</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msgid1</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msgid2</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$n</code></span>    )</div>    <p class="para rdfs-comment">    The plural version of <span class="function">{@link gettext()}</span>.  Some languages     have more than one form for plural messages dependent on the count.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.ngettext-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">msgid1</code></dt>       <dd>        <p class="para">        The singular message ID.       </p>      </dd>                 <dt> <code class="parameter">msgid2</code></dt>       <dd>        <p class="para">        The plural message ID.       </p>      </dd>                 <dt> <code class="parameter">n</code></dt>       <dd>        <p class="para">        The number (e.g. item count) to determine the translation for the        respective grammatical number.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.ngettext-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns correct plural form of message identified by     <code class="parameter">msgid1</code> and <code class="parameter">msgid2</code>    for count <code class="parameter">n</code>.    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.ngettext-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2884">     <p><strong>Example #1 <span class="function"><strong>ngettext()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_ALL</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'cs_CZ'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #9876AA">ngettext</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;window"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"%d&nbsp;windows"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;1&nbsp;okno<br /></span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #9876AA">ngettext</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;window"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"%d&nbsp;windows"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">2</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">2</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;2&nbsp;okna<br /></span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #9876AA">ngettext</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;window"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"%d&nbsp;windows"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;5&nbsp;oken<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string correct plural form of message identified by*/
function ngettext ($msgid1, $msgid2, $n) {}

/**
*<div id="function.dngettext" class="refentry">  <div class="refnamediv">   <h1 class="refname">dngettext</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">dngettext</span> &mdash; <span class="dc-title">Plural version of dgettext</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.dngettext-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>dngettext</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$domain</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msgid1</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msgid2</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$n</code></span>    )</div>    <p class="para rdfs-comment">    The <span class="function"><strong>dngettext()</strong></span> function allows you to override    the current <code class="parameter">domain</code> for a single plural message lookup.   </p>  </div>     <div class="refsect1 parameters" id="refsect1-function.dngettext-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">domain</code></dt>       <dd>        <p class="para">        The domain       </p>      </dd>                 <dt> <code class="parameter">msgid1</code></dt>       <dd>        <p class="para">       </p>      </dd>                 <dt> <code class="parameter">msgid2</code></dt>       <dd>        <p class="para">       </p>      </dd>                 <dt> <code class="parameter">n</code></dt>       <dd>        <p class="para">       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.dngettext-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    A <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> on success.   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.dngettext-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link ngettext()} - Plural version of gettext</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string A string on success.*/
function dngettext ($domain, $msgid1, $msgid2, $n) {}

/**
*<div id="function.dcngettext" class="refentry">  <div class="refnamediv">   <h1 class="refname">dcngettext</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">dcngettext</span> &mdash; <span class="dc-title">Plural version of dcgettext</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.dcngettext-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>dcngettext</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$domain</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msgid1</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msgid2</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$n</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$category</code></span>    )</div>    <p class="para rdfs-comment">    This function allows you to override the current domain for a    single plural message lookup.   </p>  </div>     <div class="refsect1 parameters" id="refsect1-function.dcngettext-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">domain</code></dt>       <dd>        <p class="para">        The domain       </p>      </dd>                 <dt> <code class="parameter">msgid1</code></dt>       <dd>        <p class="para">       </p>      </dd>                 <dt> <code class="parameter">msgid2</code></dt>       <dd>        <p class="para">       </p>      </dd>                 <dt> <code class="parameter">n</code></dt>       <dd>        <p class="para">       </p>      </dd>                 <dt> <code class="parameter">category</code></dt>       <dd>        <p class="para">       </p>      </dd>          </dl>    </p>  </div>     <div class="refsect1 returnvalues" id="refsect1-function.dcngettext-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    A <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> on success.   </p>  </div>     <div class="refsect1 seealso" id="refsect1-function.dcngettext-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link ngettext()} - Plural version of gettext</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string A string on success.*/
function dcngettext ($domain, $msgid1, $msgid2, $n, $category) {}

/**
*<div id="function.bind-textdomain-codeset" class="refentry">  <div class="refnamediv">   <h1 class="refname">bind_textdomain_codeset</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bind_textdomain_codeset</span> &mdash; <span class="dc-title">Specify the character encoding in which the messages from the DOMAIN message catalog will be returned</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.bind-textdomain-codeset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>bind_textdomain_codeset</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$domain</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$codeset</code></span>    )</div>    <p class="para rdfs-comment">    With <span class="function"><strong>bind_textdomain_codeset()</strong></span>, you can set in which    encoding will be messages from <code class="parameter">domain</code> returned by    <span class="function">{@link gettext()}</span> and similar functions.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.bind-textdomain-codeset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">domain</code></dt>       <dd>        <p class="para">        The domain       </p>      </dd>                 <dt> <code class="parameter">codeset</code></dt>       <dd>        <p class="para">        The code set       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.bind-textdomain-codeset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    A <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> on success.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.gettext.php">Gettext 函数</a></div></div>
 * @return string A string on success.*/
function bind_textdomain_codeset ($domain, $codeset) {}

// End of gettext v.
?>
