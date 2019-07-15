<?php

// Start of tidy v.2.0

/**
*<div id="class.tidy" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.tidy.php" class="classname">tidy</a> class</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)</p>      <div class="section" id="tidy.intro">    <h2 class="title">简介</h2>    <p class="para">     An HTML node in an HTML file, as detected by tidy.    </p>   </div>      <div class="section" id="tidy.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">tidy</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">string</span> <var class="varname"><a href="http://php.net/manual/zh/tidy.props.errorbuffer.php">$<var class="varname">errorBuffer</var></a></var>;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">tidyNode</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.body.php" class="methodname">body</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.cleanrepair.php" class="methodname">cleanRepair</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.construct.php" class="methodname">__construct</a></span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$use_include_path</code></span>   ]]]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.diagnose.php" class="methodname">diagnose</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.getconfig.php" class="methodname">getConfig</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.gethtmlver.php" class="methodname">getHtmlVer</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.getopt.php" class="methodname">getOpt</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$option</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.getoptdoc.php" class="methodname">getOptDoc</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$optname</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.getrelease.php" class="methodname">getRelease</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.getstatus.php" class="methodname">getStatus</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">tidyNode</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.head.php" class="methodname">head</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">tidyNode</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.php.php" class="methodname">html</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.isxhtml.php" class="methodname">isXhtml</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.isxml.php" class="methodname">isXml</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.parsefile.php" class="methodname">parseFile</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$use_include_path</code><span class="initializer"> = <strong><code>FALSE</code></strong></span></span>   ]]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.parsestring.php" class="methodname">parseString</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$input</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.repairfile.php" class="methodname">repairFile</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$use_include_path</code><span class="initializer"> = <strong><code>FALSE</code></strong></span></span>   ]]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.repairstring.php" class="methodname">repairString</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$data</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">tidyNode</span> <span class="methodname"><a href="http://php.net/manual/zh/tidy.root.php" class="methodname">root</a></span>     ( <span class="methodparam">void</span>    )</div>          }</div>     </div>    </div>                                                                                                                             <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link tidy::body} — Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</li><li>{@link tidy::cleanRepair} — Execute configured cleanup and repair operations on parsed markup</li><li>{@link tidy::__construct} — Constructs a new tidy object</li><li>{@link tidy::diagnose} — Run configured diagnostics on parsed and repaired markup</li><li>{@link tidy::$errorBuffer} — Return warnings and errors which occurred parsing the specified document</li><li>{@link tidy::getConfig} — Get current Tidy configuration</li><li>{@link tidy::getHtmlVer} — Get the Detected HTML version for the specified document</li><li>{@link tidy::getOpt} — Returns the value of the specified configuration option for the tidy document</li><li>{@link tidy::getOptDoc} — Returns the documentation for the given option name</li><li>{@link tidy::getRelease} — Get release date (version) for Tidy library</li><li>{@link tidy::getStatus} — Get status of specified document</li><li>{@link tidy::head} — Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</li><li>{@link tidy::html} — Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</li><li>{@link tidy::isXhtml} — Indicates if the document is a XHTML document</li><li>{@link tidy::isXml} — Indicates if the document is a generic (non HTML/XHTML) XML document</li><li>{@link tidy::parseFile} — Parse markup in file or URI</li><li>{@link tidy::parseString} — Parse a document stored in a string</li><li>{@link tidy::repairFile} — Repair a file and return it as a string</li><li>{@link tidy::repairString} — Repair a string using an optionally provided configuration file</li><li>{@link tidy::root} — Returns a tidyNode object representing the root of the tidy parse tree</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.tidy.php">Tidy</a></div></div>
*/
class tidy  {
	/**
	 * @var string  The last warnings and errors from TidyLib
	 */
	public $errorBuffer;


	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Returns the value of the specified configuration option for the tidy document
	 * @link http://php.net/manual/en/tidy.getopt.php
	 * @param string $option <p>
	 * You will find a list with each configuration option and their types
	 * at: http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @return mixed the value of the specified <i>option</i>.
	 * The return type depends on the type of the specified one.
	 */
/**
*<div id="function.getopt" class="refentry">  <div class="refnamediv">   <h1 class="refname">getopt</h1>   <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">getopt</span> &mdash; <span class="dc-title">从命令行参数列表中获取选项</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.getopt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><strong>getopt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$options</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$longopts</code></span>       [, <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$optind</code></span>   ]] )</div>    <p class="para rdfs-comment">    解析传入脚本的选项。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.getopt-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">options</code></dt>       <dd>        <span class="simpara">        该字符串中的每个字符会被当做选项字符，匹配传入脚本的选项以单个连字符(-)开头。       </span>       <span class="simpara">        比如，一个选项字符串 <em>&quot;x&quot;</em> 识别了一个选项 <em>-x</em>。       </span>       <span class="simpara">        只允许 a-z、A-Z 和 0-9。       </span>      </dd>                 <dt> <code class="parameter">longopts</code></dt>       <dd>        <span class="simpara">        选项数组。此数组中的每个元素会被作为选项字符串，匹配了以两个连字符(<em>--</em>)传入到脚本的选项。       </span>       <span class="simpara">        例如，长选项元素 <em>&quot;opt&quot;</em> 识别了一个选项 <em>--opt</em>。       </span>      </dd>                 <dt> <code class="parameter">optind</code></dt>       <dd>        <span class="simpara">        If the <code class="parameter">optind</code> parameter is present, then the        index where argument parsing stopped will be written to this variable.       </span>      </dd>          </dl>    </p>   <p class="para">    <code class="parameter">options</code> 可能包含了以下元素：    <ul class="simplelist">     <li class="member">单独的字符（不接受值）</li>     <li class="member">后面跟随冒号的字符（此选项需要值）</li>     <li class="member">后面跟随两个冒号的字符（此选项的值可选）</li>    </ul>    选项的值是字符串后的第一个参数。如果需要一个值，它不介意值之前是否有前置的空格，参见以下内容。    <blockquote class="note"><p><strong class="note">Note</strong>:      <span class="simpara">      选项的值不接受空格（<em>&quot; &quot;</em>）作为分隔符。     </span>    </p></blockquote>   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     <code class="parameter">options</code> 和 <code class="parameter">longopts</code> 的格式几乎是一样的，唯一的不同之处是 <code class="parameter">longopts</code> 需要是选项的数组（每个元素为一个选项），而 <code class="parameter">options</code> 需要一个字符串（每个字符是个选项）。    </p>   </p></blockquote>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.getopt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    此函数会返回选项/参数对， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     选项的解析会终止于找到的第一个非选项，之后的任何东西都会被丢弃。    </p>   </p></blockquote>  </div>    <div class="refsect1 changelog" id="refsect1-function.getopt-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.1.0</td>        <td>         添加 <code class="parameter">optind</code> 参数。        </td>       </tr>        <tr>        <td>5.3.0</td>        <td>         支持 &quot;=&quot; 作为 参数和值的分隔符。        </td>       </tr>        <tr>        <td>5.3.0</td>        <td>         增加了可选值的支持（用&quot;::&quot;指定）。        </td>       </tr>        <tr>        <td>5.3.0</td>        <td>         参数 <code class="parameter">longopts</code> 在所有系统平台上均可用。        </td>       </tr>        <tr>        <td>5.3.0</td>        <td>         此函数不再依赖于操作系统，现在也能够在 Windows 上运行。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.getopt-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-506">     <p><strong>Example #1 <span class="function"><strong>getopt()</strong></span> 例子：基本用法</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Script&nbsp;example.php<br /></span><span style="color: #9876AA">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getopt</span><span style="color: #007700">(</span><span style="color: #DD0000">"f:hp:"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$options</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"> <div class="shellcode"><pre class="shellcode">shell&gt; php example.php -fvalue -h</pre> </div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(2) {   [&quot;f&quot;]=&gt;   string(5) &quot;value&quot;   [&quot;h&quot;]=&gt;   bool(false) } </pre></div>     </div>    </div>   </p>   <p class="para">    <div class="example" id="example-507">     <p><strong>Example #2 <span class="function"><strong>getopt()</strong></span> 例子：引入长选项</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Script&nbsp;example.php<br /></span><span style="color: #9876AA">$shortopts&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$shortopts&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"f:"</span><span style="color: #007700">;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Required&nbsp;value<br /></span><span style="color: #9876AA">$shortopts&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"v::"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Optional&nbsp;value<br /></span><span style="color: #9876AA">$shortopts&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"abc"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;These&nbsp;options&nbsp;do&nbsp;not&nbsp;accept&nbsp;values<br /><br /></span><span style="color: #9876AA">$longopts&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"required:"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Required&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"optional::"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Optional&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"option"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;No&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"opt"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;No&nbsp;value<br /></span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getopt</span><span style="color: #007700">(</span><span style="color: #9876AA">$shortopts</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$longopts</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$options</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"> <div class="shellcode"><pre class="shellcode">shell&gt; php example.php -f &quot;value for f&quot; -v -a --required value --optional=&quot;optional value&quot; --option</pre> </div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(6) {   [&quot;f&quot;]=&gt;   string(11) &quot;value for f&quot;   [&quot;v&quot;]=&gt;   bool(false)   [&quot;a&quot;]=&gt;   bool(false)   [&quot;required&quot;]=&gt;   string(5) &quot;value&quot;   [&quot;optional&quot;]=&gt;   string(14) &quot;optional value&quot;   [&quot;option&quot;]=&gt;   bool(false) } </pre></div>     </div>    </div>   </p>   <p class="para">    <div class="example" id="example-508">     <p><strong>Example #3 <span class="function"><strong>getopt()</strong></span> 例子：传递同一多个选项</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Script&nbsp;example.php<br /></span><span style="color: #9876AA">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getopt</span><span style="color: #007700">(</span><span style="color: #DD0000">"abc"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$options</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"> <div class="shellcode"><pre class="shellcode">shell&gt; php example.php -aaac</pre> </div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(2) {   [&quot;a&quot;]=&gt;   array(3) {     [0]=&gt;     bool(false)     [1]=&gt;     bool(false)     [2]=&gt;     bool(false)   }   [&quot;c&quot;]=&gt;   bool(false) } </pre></div>     </div>    </div>   </p>   <p class="para">    <div class="example" id="example-509">     <p><strong>Example #4 <span class="function"><strong>getopt()</strong></span> 例子：使用 <code class="parameter">optind</code></strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Script&nbsp;example.php<br /></span><span style="color: #9876AA">$optind&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">null</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$opts&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getopt</span><span style="color: #007700">(</span><span style="color: #DD0000">'a:b:'</span><span style="color: #007700">,&nbsp;[],&nbsp;</span><span style="color: #9876AA">$optind</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$pos_args&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">array_slice</span><span style="color: #007700">(</span><span style="color: #9876AA">$argv</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$optind</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$pos_args</span><span style="color: #007700">);</span> </span> </code></div>     </div>      <div class="example-contents"> <div class="shellcode"><pre class="shellcode">shell&gt; php example.php -a 1 -b 2 -- test</pre> </div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(1) {   [0]=&gt;   string(4) &quot;test&quot; } </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.getopt-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><a href="http://php.net/manual/zh/reserved.variables.argv.php" class="link"><var class="varname"><var class="varname"><a href="http://php.net/manual/zh/reserved.variables.argv.php" class="classname">$argv</a></var></var></a></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.info.php">PHP 选项/信息 函数</a></div></div>
*/
	public function getOpt ($option) {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Execute configured cleanup and repair operations on parsed markup
	 * @link http://php.net/manual/en/tidy.cleanrepair.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function cleanRepair () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Parse markup in file or URI
	 * @link http://php.net/manual/en/tidy.parsefile.php
	 * @param string $filename <p>
	 * If the <i>filename</i> parameter is given, this function
	 * will also read that file and initialize the object with the file,
	 * acting like <b>tidy_parse_file</b>.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * For an explanation about each option, see
	 * http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * Search for the file in the include_path.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function parseFile ($filename, $config = null, $encoding = null, $use_include_path = false) {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Parse a document stored in a string
	 * @link http://php.net/manual/en/tidy.parsestring.php
	 * @param string $input <p>
	 * The data to be parsed.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @return bool a new <b>tidy</b> instance.
	 */
	public function parseString ($input, $config = null, $encoding = null) {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
	 * Repair a string using an optionally provided configuration file
	 * @link http://php.net/manual/en/tidy.repairstring.php
	 * @param string $data <p>
	 * The data to be repaired.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * Check http://tidy.sourceforge.net/docs/quickref.html for
	 * an explanation about each option.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @return string the repaired string.
	 */
	public function repairString ($data, $config = null, $encoding = null) {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
	 * Repair a file and return it as a string
	 * @link http://php.net/manual/en/tidy.repairfile.php
	 * @param string $filename <p>
	 * The file to be repaired.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * Check http://tidy.sourceforge.net/docs/quickref.html for an
	 * explanation about each option.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * Search for the file in the include_path.
	 * </p>
	 * @return string the repaired contents as a string.
	 */
	public function repairFile ($filename, $config = null, $encoding = null, $use_include_path = false) {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Run configured diagnostics on parsed and repaired markup
	 * @link http://php.net/manual/en/tidy.diagnose.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function diagnose () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Get release date (version) for Tidy library
	 * @link http://php.net/manual/en/tidy.getrelease.php
	 * @return string a string with the release date of the Tidy library.
	 */
	public function getRelease () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
	 * Get current Tidy configuration
	 * @link http://php.net/manual/en/tidy.getconfig.php
	 * @return array an array of configuration options.
	 * </p>
	 * <p>
	 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
	 */
	public function getConfig () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Get status of specified document
	 * @link http://php.net/manual/en/tidy.getstatus.php
	 * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
	 * errors, or 2 for errors.
	 */
	public function getStatus () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Get the Detected HTML version for the specified document
	 * @link http://php.net/manual/en/tidy.gethtmlver.php
	 * @return int the detected HTML version.
	 * </p>
	 * <p>
	 * This function is not yet implemented in the Tidylib itself, so it always
	 * return 0.
	 */
	public function getHtmlVer () {}

	/**
	 * Returns the documentation for the given option name
	 * @link http://php.net/manual/en/tidy.getoptdoc.php
	 * @param string $optname <p>
	 * The option name
	 * </p>
	 * @return string a string if the option exists and has documentation available, or
	 * <b>FALSE</b> otherwise.
	 * @since 5.1.0
	 */
	public function getOptDoc ($optname) {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Indicates if the document is a XHTML document
	 * @link http://php.net/manual/en/tidy.isxhtml.php
	 * @return bool This function returns <b>TRUE</b> if the specified tidy
	 * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
	 * </p>
	 * <p>
	 * This function is not yet implemented in the Tidylib itself, so it always
	 * return <b>FALSE</b>.
	 */
	public function isXhtml () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Indicates if the document is a generic (non HTML/XHTML) XML document
	 * @link http://php.net/manual/en/tidy.isxml.php
	 * @return bool This function returns <b>TRUE</b> if the specified tidy
	 * <i>object</i> is a generic XML document (non HTML/XHTML),
	 * or <b>FALSE</b> otherwise.
	 * </p>
	 * <p>
	 * This function is not yet implemented in the Tidylib itself, so it always
	 * return <b>FALSE</b>.
	 */
	public function isXml () {}

	/**
	 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
	 * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
	 * @link http://php.net/manual/en/tidy.root.php
	 * @return tidyNode the <b>tidyNode</b> object.
	 */
	public function root () {}

	/**
	 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
	 * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
	 * @link http://php.net/manual/en/tidy.head.php
	 * @return tidyNode the <b>tidyNode</b> object.
	 */
	public function head () {}

	/**
	 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
	 * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
	 * @link http://php.net/manual/en/tidy.html.php
	 * @return tidyNode the <b>tidyNode</b> object.
	 */
	public function html () {}

	/**
	 * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
	 * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
	 * @link http://php.net/manual/en/tidy.body.php
	 * @return tidyNode a <b>tidyNode</b> object starting from the
	 * &lt;body&gt; tag of the tidy parse tree.
	 */
	public function body () {}

	/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Constructs a new <b>tidy</b> object
	 * @link http://php.net/manual/en/tidy.construct.php
	 * @param string $filename [optional] <p>
	 * If the <i>filename</i> parameter is given, this function
	 * will also read that file and initialize the object with the file,
	 * acting like <b>tidy_parse_file</b>.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * Search for the file in the include_path.
	 * </p>
	 */
	public function __construct ($filename = null, $config = null, $encoding = null, $use_include_path = null) {}

}

/**
*<div id="class.tidynode" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a> class</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="tidynode.intro">    <h2 class="title">简介</h2>    <p class="para">     An HTML node in an HTML file, as detected by tidy.    </p>   </div>      <div class="section" id="tidynode.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass">      <span class="modifier">final</span>           </div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">tidyNode</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">string</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.value">$<var class="varname">value</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">string</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.name">$<var class="varname">name</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">int</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.type">$<var class="varname">type</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">int</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.line">$<var class="varname">line</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">int</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.column">$<var class="varname">column</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">bool</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.proprietary">$<var class="varname">proprietary</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">int</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.id">$<var class="varname">id</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">array</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.attribute">$<var class="varname">attribute</var></a></var>;</div>      <div class="fieldsynopsis"><span class="modifier">public</span> <span class="type">array</span> <var class="varname"><a href="http://php.net/manual/zh/class.tidynode.php#tidynode.props.child">$<var class="varname">child</var></a></var>;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="constructorsynopsis dc-description">    <span class="modifier">private</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam">void</span>    )</div>      <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">tidyNode</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.getparent.php" class="methodname">getParent</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.haschildren.php" class="methodname">hasChildren</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.hassiblings.php" class="methodname">hasSiblings</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.isasp.php" class="methodname">isAsp</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.iscomment.php" class="methodname">isComment</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.ishtml.php" class="methodname">isHtml</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.isjste.php" class="methodname">isJste</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.isphp.php" class="methodname">isPhp</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/tidynode.istext.php" class="methodname">isText</a></span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>     <div class="section" id="tidynode.props">    <h2 class="title">属性</h2>    <dl>            <dt id="tidynode.props.value"><var class="varname"><var class="varname">value</var></var></dt>       <dd>        <p class="para">The HTML representation of the node, including the surrounding tags.</p>      </dd>                 <dt id="tidynode.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">The name of the HTML node</p>      </dd>                 <dt id="tidynode.props.type"><var class="varname"><var class="varname">type</var></var></dt>       <dd>        <p class="para">The type of the node (one of the <a href="http://php.net/manual/zh/tidy.constants.php#tidy.constants.nodetype" class="link">nodetype constants</a>, e.g. <strong><code>TIDY_NODETYPE_PHP</code></strong>)</p>      </dd>                 <dt id="tidynode.props.line"><var class="varname"><var class="varname">line</var></var></dt>       <dd>        <p class="para">The line number at which the tags is located in the file</p>      </dd>                 <dt id="tidynode.props.column"><var class="varname"><var class="varname">column</var></var></dt>       <dd>        <p class="para">The column number at which the tags is located in the file</p>      </dd>                 <dt id="tidynode.props.proprietary"><var class="varname"><var class="varname">proprietary</var></var></dt>       <dd>        <p class="para">Indicates if the node is a proprietary tag</p>      </dd>                 <dt id="tidynode.props.id"><var class="varname"><var class="varname">id</var></var></dt>       <dd>        <p class="para">The ID of the node (one of the <a href="http://php.net/manual/zh/tidy.constants.php#tidy.constants.tag" class="link">tag constants</a>, e.g. <strong><code>TIDY_TAG_FRAME</code></strong>)</p>      </dd>                 <dt id="tidynode.props.attribute"><var class="varname"><var class="varname">attribute</var></var></dt>       <dd>        <p class="para">        An array of string, representing        the attributes names (as keys) of the current node.       </p>      </dd>                 <dt id="tidynode.props.child"><var class="varname"><var class="varname">child</var></var></dt>       <dd>        <p class="para">        An array of <strong class="classname">tidyNode</strong>, representing        the children of the current node.       </p>      </dd>          </dl>     <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.1.0</td>        <td><var class="varname"><var class="varname">line</var></var>, <var class="varname"><var class="varname">column</var></var>        and <var class="varname"><var class="varname">proprietary</var></var> were added</td>       </tr>       </tbody>         </table>    </p>   </div>   </div>                                                                  <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link tidyNode::__construct} — Private constructor to disallow direct instantiation</li><li>{@link tidyNode::getParent} — Returns the parent node of the current node</li><li>{@link tidyNode::hasChildren} — Checks if a node has children</li><li>{@link tidyNode::hasSiblings} — Checks if a node has siblings</li><li>{@link tidyNode::isAsp} — Checks if this node is ASP</li><li>{@link tidyNode::isComment} — Checks if a node represents a comment</li><li>{@link tidyNode::isHtml} — Checks if a node is part of a HTML document</li><li>{@link tidyNode::isJste} — Checks if this node is JSTE</li><li>{@link tidyNode::isPhp} — Checks if a node is PHP</li><li>{@link tidyNode::isText} — Checks if a node represents text (no markup)</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.tidy.php">Tidy</a></div></div>
*/
final class tidyNode  {
	/**
	 * <p style="margin-top:0;">The HTML representation of the node, including the surrounding tags.</p>
	 * @var string
	 */
	public $value;
	/**
	 * <p style="margin-top:0;">The name of the HTML node</p>
	 * @var string
	 */
	public $name;
	/**
	 * <p style="margin-top:0;">The type of the tag (one of the constants above, e.g. <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
	 * @var int
	 */
	public $type;
	/**
	 * <p style="margin-top:0;">The line number at which the tags is located in the file</p>
	 * @var int
	 */
	public $line;
	/**
	 * <p style="margin-top:0;">The column number at which the tags is located in the file</p>
	 * @var int
	 */
	public $column;
	/**
	 * <p style="margin-top:0;">Indicates if the node is a proprietary tag</p>
	 * @var bool
	 */
	public $proprietary;
	/**
	 * <p style="margin-top:0;">The ID of the tag (one of the constants above, e.g. <b><code>TIDY_TAG_FRAME</code></b>)</p>
	 * @var int
	 */
	public $id;
	/**
	 * <p style="margin-top:0;">
	 * An array of string, representing
	 * the attributes names (as keys) of the current node.
	 * </p>
	 * @var array
	 */
	public $attribute;
	/**
	 * <p style="margin-top:0;">
	 * An array of <b>tidyNode</b>, representing
	 * the children of the current node.
	 * </p>
	 * @var array
	 */
	public $child;


	/**
	 * Checks if a node has children
	 * @link http://php.net/manual/en/tidynode.haschildren.php
	 * @return bool <b>TRUE</b> if the node has children, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function hasChildren () {}

	/**
	 * Checks if a node has siblings
	 * @link http://php.net/manual/en/tidynode.hassiblings.php
	 * @return bool <b>TRUE</b> if the node has siblings, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function hasSiblings () {}

	/**
	 * Checks if a node represents a comment
	 * @link http://php.net/manual/en/tidynode.iscomment.php
	 * @return bool <b>TRUE</b> if the node is a comment, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function isComment () {}

	/**
	 * Checks if a node is part of a HTML document
	 * @link http://php.net/manual/en/tidynode.ishtml.php
	 * @return bool <b>TRUE</b> if the node is part of a HTML document, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function isHtml () {}

	/**
	 * Checks if a node represents text (no markup)
	 * @link http://php.net/manual/en/tidynode.istext.php
	 * @return bool <b>TRUE</b> if the node represent a text, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function isText () {}

	/**
	 * Checks if this node is JSTE
	 * @link http://php.net/manual/en/tidynode.isjste.php
	 * @return bool <b>TRUE</b> if the node is JSTE, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function isJste () {}

	/**
	 * Checks if this node is ASP
	 * @link http://php.net/manual/en/tidynode.isasp.php
	 * @return bool <b>TRUE</b> if the node is ASP, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function isAsp () {}

	/**
	 * Checks if a node is PHP
	 * @link http://php.net/manual/en/tidynode.isphp.php
	 * @return bool <b>TRUE</b> if the current node is PHP code, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */
	public function isPhp () {}

	/**
	 * Returns the parent node of the current node
	 * @link http://php.net/manual/en/tidynode.getparent.php
	 * @return tidyNode a tidyNode if the node has a parent, or <b>NULL</b>
	 * otherwise.
	 * @since 5.2.2
	 */
	public function getParent () {}

	private function __construct () {}

}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the value of the specified configuration option for the tidy document
 * @link http://php.net/manual/en/tidy.getopt.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @param string $option <p>
 * You will find a list with each configuration option and their types
 * at: http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @return mixed the value of the specified <i>option</i>.
 * The return type depends on the type of the specified one.
 */
function tidy_getopt (tidy $object, $option) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Parse a document stored in a string
 * @link http://php.net/manual/en/tidy.parsestring.php
 * @param string $input <p>
 * The data to be parsed.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @return tidy a new <b>tidy</b> instance.
 */
function tidy_parse_string ($input, $config = null, $encoding = null) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Parse markup in file or URI
 * @link http://php.net/manual/en/tidy.parsefile.php
 * @param string $filename <p>
 * If the <i>filename</i> parameter is given, this function
 * will also read that file and initialize the object with the file,
 * acting like <b>tidy_parse_file</b>.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * For an explanation about each option, see
 * http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * Search for the file in the include_path.
 * </p>
 * @return tidy a new <b>tidy</b> instance.
 */
function tidy_parse_file ($filename, $config = null, $encoding = null, $use_include_path = false) {}

/**
*<div id="function.tidy-get-output" class="refentry">  <div class="refnamediv">   <h1 class="refname">tidy_get_output</h1>   <p class="verinfo">(PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_get_output</span> &mdash; <span class="dc-title">Return a string representing the parsed tidy markup</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.tidy-get-output-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>tidy_get_output</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.tidy.php" class="type tidy">tidy</a></span> <code class="parameter">$object</code></span>    )</div>    <p class="para rdfs-comment">    Gets a string with the repaired html.   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.tidy-get-output-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">object</code></dt>       <dd>        <p class="para">        The <a href="http://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a> 对象。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.tidy-get-output-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the parsed tidy markup.   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.tidy-get-output-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4871">     <p><strong>Example #1 <span class="function"><strong>tidy_get_output()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;paragraph&lt;/i&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$tidy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #9876AA">tidy_get_output</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 3.2//EN&quot;&gt; &lt;html&gt; &lt;head&gt; &lt;title&gt;&lt;/title&gt; &lt;/head&gt; &lt;body&gt; &lt;p&gt;paragraph&lt;/p&gt; &lt;/body&gt; &lt;/html&gt; </pre></div>     </div>    </div>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tidy.php">Tidy 函数</a></div></div>
 * @return string the parsed tidy markup.*/
function tidy_get_output (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Return warnings and errors which occurred parsing the specified document
 * @link http://php.net/manual/en/tidy.props.errorbuffer.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return mixed the error buffer as a string.
 */
function tidy_get_error_buffer (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Execute configured cleanup and repair operations on parsed markup
 * @link http://php.net/manual/en/tidy.cleanrepair.php
 * @param tidy $object The Tidy object.
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function tidy_clean_repair (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Repair a string using an optionally provided configuration file
 * @link http://php.net/manual/en/tidy.repairstring.php
 * @param string $data <p>
 * The data to be repaired.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * Check http://tidy.sourceforge.net/docs/quickref.html for
 * an explanation about each option.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @return string the repaired string.
 */
function tidy_repair_string ($data, $config = null, $encoding = null) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Repair a file and return it as a string
 * @link http://php.net/manual/en/tidy.repairfile.php
 * @param string $filename <p>
 * The file to be repaired.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * Check http://tidy.sourceforge.net/docs/quickref.html for an
 * explanation about each option.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * Search for the file in the include_path.
 * </p>
 * @return string the repaired contents as a string.
 */
function tidy_repair_file ($filename, $config = null, $encoding = null, $use_include_path = false) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Run configured diagnostics on parsed and repaired markup
 * @link http://php.net/manual/en/tidy.diagnose.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function tidy_diagnose (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get release date (version) for Tidy library
 * @link http://php.net/manual/en/tidy.getrelease.php
 * @return string a string with the release date of the Tidy library.
 */
function tidy_get_release () {}

/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Get current Tidy configuration
 * @link http://php.net/manual/en/tidy.getconfig.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return array an array of configuration options.
 * </p>
 * <p>
 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
 */
function tidy_get_config (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get status of specified document
 * @link http://php.net/manual/en/tidy.getstatus.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
 * errors, or 2 for errors.
 */
function tidy_get_status (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get the Detected HTML version for the specified document
 * @link http://php.net/manual/en/tidy.gethtmlver.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the detected HTML version.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return 0.
 */
function tidy_get_html_ver (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Indicates if the document is a XHTML document
 * @link http://php.net/manual/en/tidy.isxhtml.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool This function returns <b>TRUE</b> if the specified tidy
 * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return <b>FALSE</b>.
 */
function tidy_is_xhtml (tidy $object) {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Indicates if the document is a generic (non HTML/XHTML) XML document
 * @link http://php.net/manual/en/tidy.isxml.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool This function returns <b>TRUE</b> if the specified tidy
 * <i>object</i> is a generic XML document (non HTML/XHTML),
 * or <b>FALSE</b> otherwise.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return <b>FALSE</b>.
 */
function tidy_is_xml (tidy $object) {}

/**
*<div id="function.tidy-error-count" class="refentry">  <div class="refnamediv">   <h1 class="refname">tidy_error_count</h1>   <p class="verinfo">(PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_error_count</span> &mdash; <span class="dc-title">Returns the Number of Tidy errors encountered for specified document</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.tidy-error-count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>tidy_error_count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.tidy.php" class="type tidy">tidy</a></span> <code class="parameter">$object</code></span>    )</div>    <p class="para rdfs-comment">    Returns the number of Tidy errors encountered for the specified document.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.tidy-error-count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">object</code></dt>       <dd>        <p class="para">        The <a href="http://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a> 对象。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.tidy-error-count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the number of errors.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.tidy-error-count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4870">     <p><strong>Example #1 <span class="function"><strong>tidy_error_count()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;<br />&lt;bogustag&gt;bogus&lt;/bogustag&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">$tidy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">tidy_error_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//1<br /><br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> 1 line 1 column 1 - Warning: missing &lt;!DOCTYPE&gt; declaration line 1 column 8 - Warning: discarding unexpected &lt;/i&gt; line 2 column 1 - Error: &lt;bogustag&gt; is not recognized! line 2 column 1 - Warning: discarding unexpected &lt;bogustag&gt; line 2 column 16 - Warning: discarding unexpected &lt;/bogustag&gt; line 1 column 1 - Warning: inserting missing &#039;title&#039; element </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.tidy-error-count-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><span class="function">{@link tidy_access_count()} - Returns the Number of Tidy accessibility warnings encountered for specified document</span></li>    <li class="member"><span class="function">{@link tidy_warning_count()} - Returns the Number of Tidy warnings encountered for specified document</span></li>   </ul>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tidy.php">Tidy 函数</a></div></div>
 * @return int the number of errors.*/
function tidy_error_count (tidy $object) {}

/**
*<div id="function.tidy-warning-count" class="refentry">  <div class="refnamediv">   <h1 class="refname">tidy_warning_count</h1>   <p class="verinfo">(PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_warning_count</span> &mdash; <span class="dc-title">Returns the Number of Tidy warnings encountered for specified document</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.tidy-warning-count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>tidy_warning_count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.tidy.php" class="type tidy">tidy</a></span> <code class="parameter">$object</code></span>    )</div>    <p class="para rdfs-comment">    Returns the number of Tidy warnings encountered for the specified document.   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.tidy-warning-count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">object</code></dt>       <dd>        <p class="para">        The <a href="http://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a> 对象。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.tidy-warning-count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the number of warnings.   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.tidy-warning-count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4872">     <p><strong>Example #1 <span class="function"><strong>tidy_warning_count()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;<br />&lt;bogustag&gt;bogus&lt;/bogustag&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">$tidy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">tidy_error_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//1<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">tidy_warning_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//5<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.tidy-warning-count-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link tidy_error_count()} - Returns the Number of Tidy errors encountered for specified document</span></li>     <li class="member"><span class="function">{@link tidy_access_count()} - Returns the Number of Tidy accessibility warnings encountered for specified document</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tidy.php">Tidy 函数</a></div></div>
 * @return int the number of warnings.*/
function tidy_warning_count (tidy $object) {}

/**
*<div id="function.tidy-access-count" class="refentry">  <div class="refnamediv">   <h1 class="refname">tidy_access_count</h1>   <p class="verinfo">(PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_access_count</span> &mdash; <span class="dc-title">Returns the Number of Tidy accessibility warnings encountered for specified document</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.tidy-access-count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>tidy_access_count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.tidy.php" class="type tidy">tidy</a></span> <code class="parameter">$object</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>tidy_access_count()</strong></span> returns the number of    accessibility warnings found for the specified document.   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.tidy-access-count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">object</code></dt>       <dd>        <p class="para">        The <a href="http://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a> 对象。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.tidy-access-count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the number of warnings.   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.tidy-access-count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4868">     <p><strong>Example #1 <span class="function"><strong>tidy_access_count()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$html&nbsp;</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;!DOCTYPE&nbsp;html&nbsp;PUBLIC&nbsp;"-//W3C//DTD&nbsp;HTML&nbsp;3.2//EN"&gt;<br />&lt;html&gt;&lt;head&gt;&lt;title&gt;Title&lt;/title&gt;&lt;/head&gt;<br />&lt;body&gt;<br /><br />&lt;p&gt;&lt;img&nbsp;src="img.png"&gt;&lt;/p&gt;<br /><br />&lt;/body&gt;&lt;/html&gt;'</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #FF8000">//&nbsp;select&nbsp;the&nbsp;accessibility&nbsp;check&nbsp;level:&nbsp;1,&nbsp;2&nbsp;or&nbsp;3<br /></span><span style="color: #9876AA">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'accessibility-check'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$tidy&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseString</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;Never&nbsp;forget&nbsp;to&nbsp;call&nbsp;this!&nbsp;<br /></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">diagnose</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #9876AA">tidy_access_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//5<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 notes" id="refsect1-function.tidy-access-count-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     Due to the design of the TidyLib, you must call     <span class="function"><a href="http://php.net/manual/zh/tidy.diagnose.php" class="function">tidy_diagnose()</a></span> before     <span class="function"><strong>tidy_access_count()</strong></span> or it will return always     <em>0</em>. You must also need to enable the     <em>accessibility-check</em> option.    </p>   </p></blockquote>  </div>   <div class="refsect1 seealso" id="refsect1-function.tidy-access-count-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link tidy_error_count()} - Returns the Number of Tidy errors encountered for specified document</span></li>     <li class="member"><span class="function">{@link tidy_warning_count()} - Returns the Number of Tidy warnings encountered for specified document</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tidy.php">Tidy 函数</a></div></div>
 * @return int the number of warnings.*/
function tidy_access_count (tidy $object) {}

/**
*<div id="function.tidy-config-count" class="refentry">  <div class="refnamediv">   <h1 class="refname">tidy_config_count</h1>   <p class="verinfo">(PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_config_count</span> &mdash; <span class="dc-title">Returns the Number of Tidy configuration errors encountered for specified document</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.tidy-config-count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>tidy_config_count</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.tidy.php" class="type tidy">tidy</a></span> <code class="parameter">$object</code></span>    )</div>    <p class="para rdfs-comment">    Returns the number of errors encountered in the configuration of the    specified tidy <code class="parameter">object</code>.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.tidy-config-count-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">object</code></dt>       <dd>        <p class="para">        The <a href="http://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a> 对象。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.tidy-config-count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the number of errors.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.tidy-config-count-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4869">     <p><strong>Example #1 <span class="function"><strong>tidy_config_count()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;test&lt;/I&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'doctype'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bogus'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$tidy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;This&nbsp;outputs&nbsp;1,&nbsp;because&nbsp;'bogus'&nbsp;isn't&nbsp;a&nbsp;valid&nbsp;doctype&nbsp;<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">tidy_config_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tidy.php">Tidy 函数</a></div></div>
 * @return int the number of errors.*/
function tidy_config_count (tidy $object) {}

/**
 * Returns the documentation for the given option name
 * @link http://php.net/manual/en/tidy.getoptdoc.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @param string $optname <p>
 * The option name
 * </p>
 * @return string a string if the option exists and has documentation available, or
 * <b>FALSE</b> otherwise.
 * @since 5.1.0
 */
function tidy_get_opt_doc (tidy $object, $optname) {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
 * @link http://php.net/manual/en/tidy.root.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode the <b>tidyNode</b> object.
 */
function tidy_get_root (tidy $object) {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
 * @link http://php.net/manual/en/tidy.head.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode the <b>tidyNode</b> object.
 */
function tidy_get_head (tidy $object) {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
 * @link http://php.net/manual/en/tidy.html.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode the <b>tidyNode</b> object.
 */
function tidy_get_html (tidy $object) {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
 * @link http://php.net/manual/en/tidy.body.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode a <b>tidyNode</b> object starting from the
 * &lt;body&gt; tag of the tidy parse tree.
 */
function tidy_get_body (tidy $object) {}

/**
*<div id="function.ob-tidyhandler" class="refentry">  <div class="refnamediv">   <h1 class="refname">ob_tidyhandler</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">ob_tidyhandler</span> &mdash; <span class="dc-title">ob_start callback function to repair the buffer</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.ob-tidyhandler-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>ob_tidyhandler</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$input</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$mode</code></span>   ] )</div>    <p class="para rdfs-comment">    Callback function for <span class="function">{@link ob_start()}</span> to repair the buffer.   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.ob-tidyhandler-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">input</code></dt>       <dd>        <p class="para">        The buffer.       </p>      </dd>                 <dt> <code class="parameter">mode</code></dt>       <dd>        <p class="para">        The buffer mode.       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.ob-tidyhandler-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the modified buffer.   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.ob-tidyhandler-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4867">     <p><strong>Example #1 <span class="function"><strong>ob_tidyhandler()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />ob_start</span><span style="color: #007700">(</span><span style="color: #DD0000">'ob_tidyhandler'</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 3.2//EN&quot;&gt; &lt;html&gt; &lt;head&gt; &lt;title&gt;&lt;/title&gt; &lt;/head&gt; &lt;body&gt; &lt;p&gt;test&lt;/p&gt; &lt;/body&gt; &lt;/html&gt; </pre></div>     </div>    </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.ob-tidyhandler-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link ob_start()} - 打开输出控制缓冲</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tidy.php">Tidy 函数</a></div></div>
 * @return string the modified buffer.*/
function ob_tidyhandler ($input, $mode = null) {}


/**
 * description
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_TAG_UNKNOWN', 0);
/**
*    <caption><strong>tidy tag constants</strong></caption>           <thead>       <tr>        <th>Constant</th>        <th>Notes</th>       </tr>       </thead>       <tbody class="tbody">       <tr id="constant.tidy-tag-unknown">        <td><strong><code>TIDY_TAG_UNKNOWN</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-a">        <td><strong><code>TIDY_TAG_A</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-abbr">        <td><strong><code>TIDY_TAG_ABBR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-acronym">        <td><strong><code>TIDY_TAG_ACRONYM</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-align">        <td><strong><code>TIDY_TAG_ALIGN</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-applet">        <td><strong><code>TIDY_TAG_APPLET</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-area">        <td><strong><code>TIDY_TAG_AREA</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-article">        <td><strong><code>TIDY_TAG_ARTICLE</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-aside">        <td><strong><code>TIDY_TAG_ASIDE</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-audio">        <td><strong><code>TIDY_TAG_AUDIO</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-b">        <td><strong><code>TIDY_TAG_B</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-base">        <td><strong><code>TIDY_TAG_BASE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-basefont">        <td><strong><code>TIDY_TAG_BASEFONT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-bdi">        <td><strong><code>TIDY_TAG_BDI</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-bdo">        <td><strong><code>TIDY_TAG_BDO</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-bgsound">        <td><strong><code>TIDY_TAG_BGSOUND</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-big">        <td><strong><code>TIDY_TAG_BIG</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-blink">        <td><strong><code>TIDY_TAG_BLINK</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-blockquote">        <td><strong><code>TIDY_TAG_BLOCKQUOTE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-body">        <td><strong><code>TIDY_TAG_BODY</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-br">        <td><strong><code>TIDY_TAG_BR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-button">        <td><strong><code>TIDY_TAG_BUTTON</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-canvas">        <td><strong><code>TIDY_TAG_CANVAS</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-caption">        <td><strong><code>TIDY_TAG_CAPTION</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-center">        <td><strong><code>TIDY_TAG_CENTER</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-cite">        <td><strong><code>TIDY_TAG_CITE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-code">        <td><strong><code>TIDY_TAG_CODE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-col">        <td><strong><code>TIDY_TAG_COL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-colgroup">        <td><strong><code>TIDY_TAG_COLGROUP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-command">        <td><strong><code>TIDY_TAG_COMMAND</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-comment">        <td><strong><code>TIDY_TAG_COMMENT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-datalist">        <td><strong><code>TIDY_TAG_DATALIST</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-dd">        <td><strong><code>TIDY_TAG_DD</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-del">        <td><strong><code>TIDY_TAG_DEL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-details">        <td><strong><code>TIDY_TAG_DETAILS</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-dfn">        <td><strong><code>TIDY_TAG_DFN</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-dialog">        <td><strong><code>TIDY_TAG_DIALOG</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-dir">        <td><strong><code>TIDY_TAG_DIR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-div">        <td><strong><code>TIDY_TAG_DIV</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-dl">        <td><strong><code>TIDY_TAG_DL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-dt">        <td><strong><code>TIDY_TAG_DT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-em">        <td><strong><code>TIDY_TAG_EM</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-embed">        <td><strong><code>TIDY_TAG_EMBED</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-fieldset">        <td><strong><code>TIDY_TAG_FIELDSET</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-figcaption">        <td><strong><code>TIDY_TAG_FIGCAPTION</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-figure">        <td><strong><code>TIDY_TAG_FIGURE</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-font">        <td><strong><code>TIDY_TAG_FONT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-footer">        <td><strong><code>TIDY_TAG_FOOTER</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-form">        <td><strong><code>TIDY_TAG_FORM</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-frame">        <td><strong><code>TIDY_TAG_FRAME</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-frameset">        <td><strong><code>TIDY_TAG_FRAMESET</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-h1">        <td><strong><code>TIDY_TAG_H1</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-h2">        <td><strong><code>TIDY_TAG_H2</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-h3">        <td><strong><code>TIDY_TAG_H3</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-h4">        <td><strong><code>TIDY_TAG_H4</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-h5">        <td><strong><code>TIDY_TAG_H5</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-h6">        <td><strong><code>TIDY_TAG_H6</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-head">        <td><strong><code>TIDY_TAG_HEAD</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-header">        <td><strong><code>TIDY_TAG_HEADER</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-hgroup">        <td><strong><code>TIDY_TAG_HGROUP</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-hr">        <td><strong><code>TIDY_TAG_HR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-html">        <td><strong><code>TIDY_TAG_HTML</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-i">        <td><strong><code>TIDY_TAG_I</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-iframe">        <td><strong><code>TIDY_TAG_IFRAME</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-ilayer">        <td><strong><code>TIDY_TAG_ILAYER</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-img">        <td><strong><code>TIDY_TAG_IMG</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-input">        <td><strong><code>TIDY_TAG_INPUT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-ins">        <td><strong><code>TIDY_TAG_INS</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-isindex">        <td><strong><code>TIDY_TAG_ISINDEX</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-kbd">        <td><strong><code>TIDY_TAG_KBD</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-keygen">        <td><strong><code>TIDY_TAG_KEYGEN</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-label">        <td><strong><code>TIDY_TAG_LABEL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-layer">        <td><strong><code>TIDY_TAG_LAYER</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-legend">        <td><strong><code>TIDY_TAG_LEGEND</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-li">        <td><strong><code>TIDY_TAG_LI</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-link">        <td><strong><code>TIDY_TAG_LINK</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-listing">        <td><strong><code>TIDY_TAG_LISTING</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-main">        <td><strong><code>TIDY_TAG_MAIN</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-map">        <td><strong><code>TIDY_TAG_MAP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-mark">        <td><strong><code>TIDY_TAG_MARK</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-marquee">        <td><strong><code>TIDY_TAG_MARQUEE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-menu">        <td><strong><code>TIDY_TAG_MENU</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-menuitem">        <td><strong><code>TIDY_TAG_MENUITEM</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-meta">        <td><strong><code>TIDY_TAG_META</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-meter">        <td><strong><code>TIDY_TAG_METER</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-multicol">        <td><strong><code>TIDY_TAG_MULTICOL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-nav">        <td><strong><code>TIDY_TAG_NAV</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-nobr">        <td><strong><code>TIDY_TAG_NOBR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-noembed">        <td><strong><code>TIDY_TAG_NOEMBED</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-noframes">        <td><strong><code>TIDY_TAG_NOFRAMES</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-nolayer">        <td><strong><code>TIDY_TAG_NOLAYER</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-nosave">        <td><strong><code>TIDY_TAG_NOSAVE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-noscript">        <td><strong><code>TIDY_TAG_NOSCRIPT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-object">        <td><strong><code>TIDY_TAG_OBJECT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-ol">        <td><strong><code>TIDY_TAG_OL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-optgroup">        <td><strong><code>TIDY_TAG_OPTGROUP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-option">        <td><strong><code>TIDY_TAG_OPTION</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-output">        <td><strong><code>TIDY_TAG_OUTPUT</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-p">        <td><strong><code>TIDY_TAG_P</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-param">        <td><strong><code>TIDY_TAG_PARAM</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-plaintext">        <td><strong><code>TIDY_TAG_PLAINTEXT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-pre">        <td><strong><code>TIDY_TAG_PRE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-progress">        <td><strong><code>TIDY_TAG_PROGRESS</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-q">        <td><strong><code>TIDY_TAG_Q</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-rb">        <td><strong><code>TIDY_TAG_RB</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-rbc">        <td><strong><code>TIDY_TAG_RBC</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-rp">        <td><strong><code>TIDY_TAG_RP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-rt">        <td><strong><code>TIDY_TAG_RT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-rtc">        <td><strong><code>TIDY_TAG_RTC</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-ruby">        <td><strong><code>TIDY_TAG_RUBY</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-s">        <td><strong><code>TIDY_TAG_S</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-samp">        <td><strong><code>TIDY_TAG_SAMP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-script">        <td><strong><code>TIDY_TAG_SCRIPT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-section">        <td><strong><code>TIDY_TAG_SECTION</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-select">        <td><strong><code>TIDY_TAG_SELECT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-server">        <td><strong><code>TIDY_TAG_SERVER</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-servlet">        <td><strong><code>TIDY_TAG_SERVLET</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-small">        <td><strong><code>TIDY_TAG_SMALL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-source">        <td><strong><code>TIDY_TAG_SOURCE</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-spacer">        <td><strong><code>TIDY_TAG_SPACER</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-span">        <td><strong><code>TIDY_TAG_SPAN</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-strike">        <td><strong><code>TIDY_TAG_STRIKE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-strong">        <td><strong><code>TIDY_TAG_STRONG</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-style">        <td><strong><code>TIDY_TAG_STYLE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-sub">        <td><strong><code>TIDY_TAG_SUB</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-summary">        <td><strong><code>TIDY_TAG_SUMMARY</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-sup">        <td><strong><code>TIDY_TAG_SUP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-table">        <td><strong><code>TIDY_TAG_TABLE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-tbody">        <td><strong><code>TIDY_TAG_TBODY</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-td">        <td><strong><code>TIDY_TAG_TD</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-template">        <td><strong><code>TIDY_TAG_TEMPLATE</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-textarea">        <td><strong><code>TIDY_TAG_TEXTAREA</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-tfoot">        <td><strong><code>TIDY_TAG_TFOOT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-th">        <td><strong><code>TIDY_TAG_TH</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-thead">        <td><strong><code>TIDY_TAG_THEAD</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-time">        <td><strong><code>TIDY_TAG_TIME</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-title">        <td><strong><code>TIDY_TAG_TITLE</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-tr">        <td><strong><code>TIDY_TAG_TR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-track">        <td><strong><code>TIDY_TAG_TRACK</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-tt">        <td><strong><code>TIDY_TAG_TT</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-u">        <td><strong><code>TIDY_TAG_U</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-ul">        <td><strong><code>TIDY_TAG_UL</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-var">        <td><strong><code>TIDY_TAG_VAR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-video">        <td><strong><code>TIDY_TAG_VIDEO</code></strong></td>        <td>Added in libtidy 5.0.0. Available as of PHP 7.4.0.</td>       </tr>        <tr id="constant.tidy-tag-wbr">        <td><strong><code>TIDY_TAG_WBR</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>        <tr id="constant.tidy-tag-xmp">        <td><strong><code>TIDY_TAG_XMP</code></strong></td>        <td class="empty">&nbsp;</td>       </tr>       </tbody>        
*/
define ('TIDY_TAG_A', 1);
define ('TIDY_TAG_ABBR', 2);
define ('TIDY_TAG_ACRONYM', 3);
define ('TIDY_TAG_ADDRESS', 4);
define ('TIDY_TAG_ALIGN', 5);
define ('TIDY_TAG_APPLET', 6);
define ('TIDY_TAG_AREA', 7);
define ('TIDY_TAG_B', 8);
define ('TIDY_TAG_BASE', 9);
define ('TIDY_TAG_BASEFONT', 10);
define ('TIDY_TAG_BDO', 11);
define ('TIDY_TAG_BGSOUND', 12);
define ('TIDY_TAG_BIG', 13);
define ('TIDY_TAG_BLINK', 14);
define ('TIDY_TAG_BLOCKQUOTE', 15);
define ('TIDY_TAG_BODY', 16);
define ('TIDY_TAG_BR', 17);
define ('TIDY_TAG_BUTTON', 18);
define ('TIDY_TAG_CAPTION', 19);
define ('TIDY_TAG_CENTER', 20);
define ('TIDY_TAG_CITE', 21);
define ('TIDY_TAG_CODE', 22);
define ('TIDY_TAG_COL', 23);
define ('TIDY_TAG_COLGROUP', 24);
define ('TIDY_TAG_COMMENT', 25);
define ('TIDY_TAG_DD', 26);
define ('TIDY_TAG_DEL', 27);
define ('TIDY_TAG_DFN', 28);
define ('TIDY_TAG_DIR', 29);
define ('TIDY_TAG_DIV', 30);
define ('TIDY_TAG_DL', 31);
define ('TIDY_TAG_DT', 32);
define ('TIDY_TAG_EM', 33);
define ('TIDY_TAG_EMBED', 34);
define ('TIDY_TAG_FIELDSET', 35);
define ('TIDY_TAG_FONT', 36);
define ('TIDY_TAG_FORM', 37);
define ('TIDY_TAG_FRAME', 38);
define ('TIDY_TAG_FRAMESET', 39);
define ('TIDY_TAG_H1', 40);
define ('TIDY_TAG_H2', 41);
define ('TIDY_TAG_H3', 42);
define ('TIDY_TAG_H4', 43);
define ('TIDY_TAG_H5', 44);
define ('TIDY_TAG_H6', 45);
define ('TIDY_TAG_HEAD', 46);
define ('TIDY_TAG_HR', 47);
define ('TIDY_TAG_HTML', 48);
define ('TIDY_TAG_I', 49);
define ('TIDY_TAG_IFRAME', 50);
define ('TIDY_TAG_ILAYER', 51);
define ('TIDY_TAG_IMG', 52);
define ('TIDY_TAG_INPUT', 53);
define ('TIDY_TAG_INS', 54);
define ('TIDY_TAG_ISINDEX', 55);
define ('TIDY_TAG_KBD', 56);
define ('TIDY_TAG_KEYGEN', 57);
define ('TIDY_TAG_LABEL', 58);
define ('TIDY_TAG_LAYER', 59);
define ('TIDY_TAG_LEGEND', 60);
define ('TIDY_TAG_LI', 61);
define ('TIDY_TAG_LINK', 62);
define ('TIDY_TAG_LISTING', 63);
define ('TIDY_TAG_MAP', 64);
define ('TIDY_TAG_MARQUEE', 65);
define ('TIDY_TAG_MENU', 66);
define ('TIDY_TAG_META', 67);
define ('TIDY_TAG_MULTICOL', 68);
define ('TIDY_TAG_NOBR', 69);
define ('TIDY_TAG_NOEMBED', 70);
define ('TIDY_TAG_NOFRAMES', 71);
define ('TIDY_TAG_NOLAYER', 72);
define ('TIDY_TAG_NOSAVE', 73);
define ('TIDY_TAG_NOSCRIPT', 74);
define ('TIDY_TAG_OBJECT', 75);
define ('TIDY_TAG_OL', 76);
define ('TIDY_TAG_OPTGROUP', 77);
define ('TIDY_TAG_OPTION', 78);
define ('TIDY_TAG_P', 79);
define ('TIDY_TAG_PARAM', 80);
define ('TIDY_TAG_PLAINTEXT', 81);
define ('TIDY_TAG_PRE', 82);
define ('TIDY_TAG_Q', 83);
define ('TIDY_TAG_RB', 84);
define ('TIDY_TAG_RBC', 85);
define ('TIDY_TAG_RP', 86);
define ('TIDY_TAG_RT', 87);
define ('TIDY_TAG_RTC', 88);
define ('TIDY_TAG_RUBY', 89);
define ('TIDY_TAG_S', 90);
define ('TIDY_TAG_SAMP', 91);
define ('TIDY_TAG_SCRIPT', 92);
define ('TIDY_TAG_SELECT', 93);
define ('TIDY_TAG_SERVER', 94);
define ('TIDY_TAG_SERVLET', 95);
define ('TIDY_TAG_SMALL', 96);
define ('TIDY_TAG_SPACER', 97);
define ('TIDY_TAG_SPAN', 98);
define ('TIDY_TAG_STRIKE', 99);
define ('TIDY_TAG_STRONG', 100);
define ('TIDY_TAG_STYLE', 101);
define ('TIDY_TAG_SUB', 102);
define ('TIDY_TAG_SUP', 103);
define ('TIDY_TAG_TABLE', 104);
define ('TIDY_TAG_TBODY', 105);
define ('TIDY_TAG_TD', 106);
define ('TIDY_TAG_TEXTAREA', 107);
define ('TIDY_TAG_TFOOT', 108);
define ('TIDY_TAG_TH', 109);
define ('TIDY_TAG_THEAD', 110);
define ('TIDY_TAG_TITLE', 111);
define ('TIDY_TAG_TR', 112);
define ('TIDY_TAG_TT', 113);
define ('TIDY_TAG_U', 114);
define ('TIDY_TAG_UL', 115);
define ('TIDY_TAG_VAR', 116);
define ('TIDY_TAG_WBR', 117);
define ('TIDY_TAG_XMP', 118);

/**
 * root node
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_ROOT', 0);

/**
 * doctype
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_DOCTYPE', 1);

/**
 * HTML comment
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_COMMENT', 2);

/**
 * Processing Instruction
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_PROCINS', 3);

/**
 * Text
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_TEXT', 4);

/**
 * start tag
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_START', 5);

/**
 * end tag
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_END', 6);

/**
 * empty tag
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_STARTEND', 7);

/**
 * CDATA
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_CDATA', 8);

/**
 * XML section
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_SECTION', 9);

/**
 * ASP code
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_ASP', 10);

/**
 * JSTE code
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_JSTE', 11);

/**
 * PHP code
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_PHP', 12);

/**
 * XML declaration
 * @link http://php.net/manual/en/tidy.constants.php
 */
define ('TIDY_NODETYPE_XMLDECL', 13);

// End of tidy v.2.0
?>
