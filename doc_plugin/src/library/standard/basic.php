<?php

/**
*<div id="function.dl" class="refentry">  <div class="refnamediv">   <h1 class="refname">dl</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">dl</span> &mdash; <span class="dc-title">运行时载入一个 PHP 扩展</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.dl-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>dl</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$library</code></span>    )</div>    <p class="para rdfs-comment">    载入指定参数 <code class="parameter">library</code> 的 PHP 扩展。   </p>   <p class="para">    使用 <span class="function">{@link extension_loaded()}</span> 来测试指定的扩展是否已经激活。    这既能用于内建的扩展也可以用于动态加载的扩展（既可以通过 <var class="filename">php.ini</var> 也可以通过 <span class="function"><strong>dl()</strong></span>）。   </p>   <div class="warning"><strong class="warning">Warning</strong>    <p class="simpara">     在 PHP 5.3 里，此函数被某些 SAPI 移除了。    </p>   </div>  </div>    <div class="refsect1 parameters" id="refsect1-function.dl-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">library</code></dt>       <dd>        <p class="para">        此参数<em class="emphasis">仅仅</em>是要加载的扩展的文件名，依赖于你的平台。        比如，<a href="http://php.net/manual/zh/ref.sockets.php" class="link">sockets</a>（作为共享模块编译，而不是默认的！）在 Unix 平台上称为 <var class="filename">sockets.so</var> 而 在 Windows 平台上是 <var class="filename">php_sockets.dll</var>。       </p>       <p class="para">        扩展加载的目录依赖于你的平台：       </p>       <p class="para">        Windows - 如果没有在 <var class="filename">php.ini</var> 里明确设置，扩展默认会从 <var class="filename">C:\php5\</var> 加载。       </p>       <p class="para">        Unix - 如果没有在 <var class="filename">php.ini</var> 里明确设置，默认的扩展目录依赖于        <ul class="itemizedlist">         <li class="listitem">          <span class="simpara">           PHP 是否通过 <em>--enable-debug</em> 选项构建          </span>         </li>         <li class="listitem">          <span class="simpara">           PHP 是否以（实验性质的）ZTS （Zned 线程安全）支持构建          </span>         </li>         <li class="listitem">          <span class="simpara">           当前的内部 <em>ZEND_MODULE_API_NO</em>（Zend 内部模块 API 数字，基本上是主要模块修改时的日期）          </span>         </li>        </ul>        考虑到上述，目录默认为 <em>&lt;install-dir&gt;/lib/php/extensions/ &lt;debug-or-not&gt;-&lt;zts-or-not&gt;-ZEND_MODULE_API_NO</em>，例如        <var class="filename">/usr/local/php/lib/php/extensions/debug-non-zts-20010901</var>        或        <var class="filename">/usr/local/php/lib/php/extensions/no-debug-zts-20010901</var>。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.dl-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。 如果加载模块的功能是无效或者禁用的（既可以通过设置关闭 <a href="http://php.net/manual/zh/info.configuration.php#ini.enable-dl" class="link">enable_dl</a> 设置，也可以通过启用 <var class="filename">php.ini</var> 里的 <a href="http://php.net/manual/zh/ini.sect.safe-mode.php#ini.safe-mode" class="link">安全模式</a>）将导致一个 <strong><code>E_ERROR</code></strong> 并中断执行。    如果因为指定的库无法加载而导致 <span class="function"><strong>dl()</strong></span> 失败，除了返回 <strong><code>FALSE</code></strong>，还会产生一个 <strong><code>E_WARNING</code></strong> 的消息。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.dl-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-491">     <p><strong>Example #1 <span class="function"><strong>dl()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;加载一个扩展的例子，基于操作系统<br /></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">strtoupper</span><span style="color: #007700">(</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">PHP_OS</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">))&nbsp;===&nbsp;</span><span style="color: #DD0000">'WIN'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">dl</span><span style="color: #007700">(</span><span style="color: #DD0000">'php_sqlite.dll'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">dl</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite.so'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #FF8000">//&nbsp;或者，使用常量&nbsp;PHP_SHLIB_SUFFIX&nbsp;<br /></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$prefix&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #9876AA">PHP_SHLIB_SUFFIX&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">'dll'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">'php_'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">dl</span><span style="color: #007700">(</span><span style="color: #9876AA">$prefix&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'sqlite.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">PHP_SHLIB_SUFFIX</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.dl-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         PHP-FPM 模式下已禁用 <span class="function"><strong>dl()</strong></span>。        </td>       </tr>        <tr>        <td>5.3.9</td>        <td>         尽管不推荐，但  PHP-FPM 模式下启用了 <span class="function"><strong>dl()</strong></span>。        </td>       </tr>        <tr>        <td>5.3.0</td>        <td>         由于稳定性，<span class="function"><strong>dl()</strong></span> 在某些 SAPI 中被禁用。仅仅允许 <span class="function"><strong>dl()</strong></span> 的 SAPI 为 CLI 和 Embed。         使用 <a href="http://php.net/manual/zh/ini.core.php#ini.extension" class="link">扩展加载指令</a> 作为替代。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 notes" id="refsect1-function.dl-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     当 PHP 以支持 ZTS 构建时，<em class="emphasis">不</em>支持 <span class="function"><strong>dl()</strong></span>。     使用 <a href="http://php.net/manual/zh/ini.core.php#ini.extension" class="link">扩展加载指令</a> 作为替代。    </p>   </p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     在某些 Unix 平台上，<span class="function"><strong>dl()</strong></span> 是大小写敏感的。    </p>   </p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">当 PHP 运行在 <a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 时，不能使用此函数。</span></p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.dl-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><a href="http://php.net/manual/zh/ini.core.php#ini.extension" class="link">扩展加载指令</a></li>     <li class="member"><span class="function">{@link extension_loaded()} - 检查一个扩展是否已经加载</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.info.php">PHP 选项/信息 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. If the functionality of loading modules is not available*/
function dl ($library) {}

/**
*<div id="function.cli-set-process-title" class="refentry">  <div class="refnamediv">   <h1 class="refname">cli_set_process_title</h1>   <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7)</p><p class="refpurpose"><span class="refname">cli_set_process_title</span> &mdash; <span class="dc-title">Sets the process title</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.cli-set-process-title-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>cli_set_process_title</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$title</code></span>    )</div>     <p class="para rdfs-comment">    Sets the process title visible in tools such as <strong class="command">top</strong> and    <strong class="command">ps</strong>. This function is available only in    <a href="http://php.net/manual/zh/features.commandline.php" class="link">CLI</a> mode.   </p>   </div>    <div class="refsect1 parameters" id="refsect1-function.cli-set-process-title-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">title</code></dt>      <dd>       <p class="para">       The new title.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.cli-set-process-title-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 errors" id="refsect1-function.cli-set-process-title-errors">   <h3 class="title">错误／异常</h3>       <p class="para">    An <strong><code>E_WARNING</code></strong> will be generated if the operating system    is unsupported.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.cli-set-process-title-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-490">     <p><strong>Example #1 <span class="function"><strong>cli_set_process_title()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$title&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"My&nbsp;Amazing&nbsp;PHP&nbsp;Script"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$pid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getmypid</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;you&nbsp;can&nbsp;use&nbsp;this&nbsp;to&nbsp;see&nbsp;your&nbsp;process&nbsp;title&nbsp;in&nbsp;ps<br /><br /></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">cli_set_process_title</span><span style="color: #007700">(</span><span style="color: #9876AA">$title</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Unable&nbsp;to&nbsp;set&nbsp;process&nbsp;title&nbsp;for&nbsp;PID&nbsp;</span><span style="color: #9876AA">$pid</span><span style="color: #DD0000">...\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"The&nbsp;process&nbsp;title&nbsp;'</span><span style="color: #9876AA">$title</span><span style="color: #DD0000">'&nbsp;for&nbsp;PID&nbsp;</span><span style="color: #9876AA">$pid</span><span style="color: #DD0000">&nbsp;has&nbsp;been&nbsp;set&nbsp;for&nbsp;your&nbsp;process!\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">sleep</span><span style="color: #007700">(</span><span style="color: #9876AA">5</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>     <div class="refsect1 seealso" id="refsect1-function.cli-set-process-title-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link cli_get_process_title()} - Returns the current process title</span></li>     <li class="member"><span class="function">{@link setproctitle()} - Set the process title</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.info.php">PHP 选项/信息 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function cli_set_process_title ($title) {}

/**
*<div id="function.cli-get-process-title" class="refentry">  <div class="refnamediv">   <h1 class="refname">cli_get_process_title</h1>   <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7)</p><p class="refpurpose"><span class="refname">cli_get_process_title</span> &mdash; <span class="dc-title">Returns the current process title</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.cli-get-process-title-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>cli_get_process_title</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Returns the current process title, as set by    <span class="function">{@link cli_set_process_title()}</span>. Note that this may not exactly    match what is shown in <strong class="command">ps</strong> or <strong class="command">top</strong>,    depending on your operating system.   </p>    <p class="para">    This function is available only in    <a href="http://php.net/manual/zh/features.commandline.php" class="link">CLI</a> mode.   </p>   </div>    <div class="refsect1 parameters" id="refsect1-function.cli-get-process-title-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.cli-get-process-title-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Return a string with the current process title or <strong><code>NULL</code></strong> on error.   </p>  </div>    <div class="refsect1 errors" id="refsect1-function.cli-get-process-title-errors">   <h3 class="title">错误／异常</h3>       <p class="para">    An <strong><code>E_WARNING</code></strong> will be generated if the operating system    is unsupported.   </p>  </div>     <div class="refsect1 examples" id="refsect1-function.cli-get-process-title-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-489">     <p><strong>Example #1 <span class="function"><strong>cli_get_process_title()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"Process&nbsp;title:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">cli_get_process_title</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>     <div class="refsect1 seealso" id="refsect1-function.cli-get-process-title-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link cli_set_process_title()} - Sets the process title</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.info.php">PHP 选项/信息 函数</a></div></div>
 * @return string Return a string with the current process title or <b>NULL</b> on error.*/
function cli_get_process_title () {}

/**
*<div id="function.gc-mem-caches" class="refentry">  <div class="refnamediv">   <h1 class="refname">gc_mem_caches</h1>   <p class="verinfo">(PHP 7)</p><p class="refpurpose"><span class="refname">gc_mem_caches</span> &mdash; <span class="dc-title">    Reclaims memory used by the Zend Engine memory manager  </span></p>   </div>   <div class="refsect1 description" id="refsect1-function.gc-mem-caches-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>gc_mem_caches</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Reclaims memory used by the Zend Engine memory manager.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.gc-mem-caches-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>     <div class="refsect1 returnvalues" id="refsect1-function.gc-mem-caches-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the number of bytes freed.   </p>  </div>             <div class="refsect1 seealso" id="refsect1-function.gc-mem-caches-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><a href="http://php.net/manual/zh/features.gc.php" class="link">Garbage Collection</a></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.info.php">PHP 选项/信息 函数</a></div></div>
 * @return int Returns the number of bytes freed.*/
function gc_mem_caches () {}

/**
*<div id="function.get-resources" class="refentry">  <div class="refnamediv">   <h1 class="refname">get_resources</h1>   <p class="verinfo">(PHP 7)</p><p class="refpurpose"><span class="refname">get_resources</span> &mdash; <span class="dc-title">Returns active resources</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.get-resources-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><strong>get_resources</strong></span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$type</code></span>   ] )</div>    <p class="para rdfs-comment">    Returns an array of all currently active <span class="type"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>s, optionally    filtered by resource type.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.get-resources-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">type</code></dt>       <dd>        <p class="para">        If defined, this will cause <span class="function"><strong>get_resources()</strong></span> to only        return resources of the given type.        <a href="http://php.net/manual/zh/resource.php" class="link">A list of resource types is available.</a>       </p>       <p class="para">        If the <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> <em>Unknown</em> is provided as        the type, then only resources that are of an unknown type will be        returned.       </p>       <p class="para">        If omitted, all resources will be returned.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.get-resources-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns an <span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span> of currently active resources, indexed by    resource number.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.get-resources-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-502">     <p><strong>Example #1 Unfiltered <span class="function"><strong>get_resources()</strong></span></strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$fp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tmpfile</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">get_resources</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(1) {   [1]=&gt;   resource(1) of type (stream) } </pre></div>     </div>    </div>    <div class="example" id="example-503">     <p><strong>Example #2 Filtered <span class="function"><strong>get_resources()</strong></span></strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$fp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tmpfile</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">get_resources</span><span style="color: #007700">(</span><span style="color: #DD0000">'stream'</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">get_resources</span><span style="color: #007700">(</span><span style="color: #DD0000">'curl'</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> array(1) {   [1]=&gt;   resource(1) of type (stream) } array(0) { } </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.get-resources-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link get_loaded_extensions()} - 返回所有编译并加载模块名的 array</span></li>     <li class="member"><span class="function">{@link get_defined_constants()} - 返回所有常量的关联数组，键是常量名，值是常量值</span></li>     <li class="member"><span class="function">{@link get_defined_functions()} - 返回所有已定义函数的数组</span></li>     <li class="member"><span class="function">{@link get_defined_vars()} - 返回由所有已定义变量所组成的数组</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.info.php">PHP 选项/信息 函数</a></div></div>
 * @return array Returns an array of currently active resources, indexed by resource number.*/
function get_resources ($type) {}


/**
 * The full path and filename of the file. If used inside an include,
 * the name of the included file is returned.
 * Since PHP 4.0.2, <b>__FILE__</b> always contains an
 * absolute path with symlinks resolved whereas in older versions it contained relative path
 * under some circumstances.
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__FILE__', '', true);

/**
 * The current line number of the file.
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__LINE__', 0, true);

/**
 * The class name. (Added in PHP 4.3.0) As of PHP 5 this constant
 * returns the class name as it was declared (case-sensitive). In PHP
 * 4 its value is always lowercased. The class name includes the namespace
 * it was declared in (e.g. Foo\Bar).
 * Note that as of PHP 5.4 __CLASS__ works also in traits. When used
 * in a trait method, __CLASS__ is the name of the class the trait
 * is used in.
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__CLASS__', '', true);

/**
 * The function name. (Added in PHP 4.3.0) As of PHP 5 this constant
 * returns the function name as it was declared (case-sensitive). In
 * PHP 4 its value is always lowercased.
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__FUNCTION__', '', true);

/**
 * The class method name. (Added in PHP 5.0.0) The method name is
 * returned as it was declared (case-sensitive).
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__METHOD__', '', true);

/**
 * The trait name. (Added in PHP 5.4.0) As of PHP 5.4 this constant
 * returns the trait as it was declared (case-sensitive). The trait name includes the namespace
 * it was declared in (e.g. Foo\Bar).
 * @since 5.4.0
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__TRAIT__', '', true);

/**
 * The directory of the file. If used inside an include,
 * the directory of the included file is returned. This is equivalent
 * to dirname(__FILE__). This directory name
 * does not have a trailing slash unless it is the root directory.
 * @since 5.3.0
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__DIR__', '', true);

/**
 * The name of the current namespace (case-sensitive). This constant
 * is defined in compile-time (Added in PHP 5.3.0).
 * @since 5.3.0
 * @link http://php.net/manual/en/language.constants.predefined.php
 */
define ('__NAMESPACE__', '', true);

