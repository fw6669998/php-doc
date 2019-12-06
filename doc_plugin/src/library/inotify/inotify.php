<?php

// Start of inotify v.0.1.6

/**
*<div id="function.inotify-add-watch" class="refentry">  <div class="refnamediv">   <h1 class="refname">inotify_add_watch</h1>   <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_add_watch</span> &mdash; <span class="dc-title">Add a watch to an initialized inotify instance</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-add-watch-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>inotify_add_watch</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$inotify_instance</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pathname</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mask</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">inotify_add_watch()</strong></span> adds a new watch or modify an    existing watch for the file or directory specified in    <span class="parameter" style="color:#2EACF9">pathname</span>.   </p>   <p class="para">    Using <span class="function"><strong style="color:#CC7832">inotify_add_watch()</strong></span> on a watched object replaces    the existing watch. Using the <strong><span>IN_MASK_ADD</span></strong> constant    adds (OR) events to the existing watch.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-add-watch-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">inotify_instance</span></dt>       <dd>        <p class="para">        <span class="function">{@link inotify_init()}</span>返回的资源       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">pathname</span></dt>       <dd>        <p class="para">        File or directory to watch       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">mask</span></dt>       <dd>        <p class="para">        Events to watch for. See <a href="http://php.net/manual/zh/inotify.constants.php" class="link">预定义常量</a>.       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-add-watch-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    The return value is a unique (inotify instance wide) watch descriptor.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-add-watch-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link inotify_init()} - Initialize an inotify instance</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.inotify.php">Inotify 函数</a></div></div>
 * @return int a unique (<i>inotify</i> instance-wide) watch descriptor.*/
function inotify_add_watch( $inotify_instance, $pathname, $mask )
{
}

/**
*<div id="function.inotify-init" class="refentry">  <div class="refnamediv">   <h1 class="refname">inotify_init</h1>   <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_init</span> &mdash; <span class="dc-title">Initialize an inotify instance</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-init-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">resource</span> <span class="methodname" style="color:#CC7832"><strong>inotify_init</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Initialize an inotify instance for use with    <span class="function">{@link inotify_add_watch()}</span>   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-init-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    A stream resource or <strong><span>FALSE</span></strong> on error.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.inotify-init-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2849">     <p><strong>Example #1 Example usage of inotify</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Open&nbsp;an&nbsp;inotify&nbsp;instance<br /></span><span style="color: #9876AA">$fd&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">inotify_init</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;Watch&nbsp;__FILE__&nbsp;for&nbsp;metadata&nbsp;changes&nbsp;(e.g.&nbsp;mtime)<br /></span><span style="color: #9876AA">$watch_descriptor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">inotify_add_watch</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">__FILE__</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">IN_ATTRIB</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;generate&nbsp;an&nbsp;event<br /></span><span style="color: #9876AA">touch</span><span style="color: #007700">(</span><span style="color: #9876AA">__FILE__</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Read&nbsp;events<br /></span><span style="color: #9876AA">$events&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">inotify_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$events</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;The&nbsp;following&nbsp;methods&nbsp;allows&nbsp;to&nbsp;use&nbsp;inotify&nbsp;functions&nbsp;without&nbsp;blocking&nbsp;on&nbsp;inotify_read():<br /><br />//&nbsp;-&nbsp;Using&nbsp;stream_select()&nbsp;on&nbsp;$fd:<br /></span><span style="color: #9876AA">$read&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$write&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">null</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$except&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">null</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">stream_select</span><span style="color: #007700">(</span><span style="color: #9876AA">$read</span><span style="color: #007700">,</span><span style="color: #9876AA">$write</span><span style="color: #007700">,</span><span style="color: #9876AA">$except</span><span style="color: #007700">,</span><span style="color: #9876AA">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;-&nbsp;Using&nbsp;stream_set_blocking()&nbsp;on&nbsp;$fd<br /></span><span style="color: #9876AA">stream_set_blocking</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">inotify_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;Does&nbsp;no&nbsp;block,&nbsp;and&nbsp;return&nbsp;false&nbsp;if&nbsp;no&nbsp;events&nbsp;are&nbsp;pending<br /><br />//&nbsp;-&nbsp;Using&nbsp;inotify_queue_len()&nbsp;to&nbsp;check&nbsp;if&nbsp;event&nbsp;queue&nbsp;is&nbsp;not&nbsp;empty<br /></span><span style="color: #9876AA">$queue_len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">inotify_queue_len</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;&gt;&nbsp;0,&nbsp;inotify_read()&nbsp;will&nbsp;not&nbsp;block<br /><br />//&nbsp;Stop&nbsp;watching&nbsp;__FILE__&nbsp;for&nbsp;metadata&nbsp;changes<br /></span><span style="color: #9876AA">inotify_rm_watch</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$watch_descriptor</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Close&nbsp;the&nbsp;inotify&nbsp;instance<br />//&nbsp;This&nbsp;may&nbsp;have&nbsp;closed&nbsp;all&nbsp;watches&nbsp;if&nbsp;this&nbsp;was&nbsp;not&nbsp;already&nbsp;done<br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> array(   array(     &#039;wd&#039; =&gt; 1,     // Equals $watch_descriptor     &#039;mask&#039; =&gt; 4,   // IN_ATTRIB bit is set     &#039;cookie&#039; =&gt; 0, // unique id to connect related events (e.g.                     // IN_MOVE_FROM and IN_MOVE_TO events)     &#039;name&#039; =&gt; &#039;&#039;,  // the name of a file (e.g. if we monitored changes                    // in a directory)   ), ); </span></div>     </div>    </div>   </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-init-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link inotify_add_watch()} - Add a watch to an initialized inotify instance</span></li>     <li class="member"><span class="function">{@link inotify_rm_watch()} - Remove an existing watch from an inotify instance</span></li>     <li class="member"><span class="function">{@link inotify_queue_len()} - Return a number upper than zero if there are pending events</span></li>     <li class="member"><span class="function">{@link inotify_read()} - Read events from an inotify instance</span></li>     <li class="member"><span class="function">{@link fclose()} - 关闭一个已打开的文件指针</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.inotify.php">Inotify 函数</a></div></div>
 * @return resource a stream resource or <b>FALSE</b> on error.*/
function inotify_init()
{
}

/**
*<div id="function.inotify-queue-len" class="refentry">  <div class="refnamediv">   <h1 class="refname">inotify_queue_len</h1>   <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_queue_len</span> &mdash; <span class="dc-title">Return a number upper than zero if there are pending events</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-queue-len-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>inotify_queue_len</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$inotify_instance</span></span>    )</div>    <p class="para rdfs-comment">    This function allows to know if <span class="function">{@link inotify_read()}</span> will block or not.    If a number upper than zero is returned, there are pending events and     <span class="function">{@link inotify_read()}</span> will not block.    </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-queue-len-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">inotify_instance</span></dt>       <dd>        <p class="para">        <span class="function">{@link inotify_init()}</span>返回的资源       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-queue-len-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a number upper than zero if there are pending events.    </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-queue-len-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link inotify_init()} - Initialize an inotify instance</span></li>     <li class="member"><span class="function">{@link stream_select()} - Runs the equivalent of the select() system call on the given    arrays of streams with a timeout specified by tv_sec and tv_usec</span></li>     <li class="member"><span class="function">{@link stream_set_blocking()} - 为资源流设置阻塞或者阻塞模式</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.inotify.php">Inotify 函数</a></div></div>
 * @return int a number greater than zero if events are pending, otherwise zero.*/
function inotify_queue_len( $inotify_instance )
{
}

/**
*<div id="function.inotify-read" class="refentry">  <div class="refnamediv">   <h1 class="refname">inotify_read</h1>   <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_read</span> &mdash; <span class="dc-title">Read events from an inotify instance</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-read-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>inotify_read</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$inotify_instance</span></span>    )</div>    <p class="para rdfs-comment">    Read inotify events from an inotify instance.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-read-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">inotify_instance</span></dt>       <dd>        <p class="para">        <span class="function">{@link inotify_init()}</span>返回的资源       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-read-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    An array of inotify events or <strong><span>FALSE</span></strong> if no events was pending and    <span class="parameter" style="color:#2EACF9">inotify_instance</span> is non-blocking. Each event is an array with the following keys:    <ul class="simplelist">     <li class="member">wd is a watch descriptor returned by      <span class="function">{@link inotify_add_watch()}</span></li>     <li class="member">mask is a bit mask of <a href="http://php.net/manual/zh/inotify.constants.php" class="link">events</a></li>     <li class="member">cookie is a unique id to connect related events (e.g. <strong><span>IN_MOVE_FROM</span></strong>      and <strong><span>IN_MOVE_TO</span></strong>)</li>     <li class="member">name is the name of a file (e.g. if a file was modified in a      watched directory)</li>    </ul>   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-read-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link inotify_init()} - Initialize an inotify instance</span></li>     <li class="member"><span class="function">{@link stream_select()} - Runs the equivalent of the select() system call on the given    arrays of streams with a timeout specified by tv_sec and tv_usec</span></li>     <li class="member"><span class="function">{@link stream_set_blocking()} - 为资源流设置阻塞或者阻塞模式</span></li>     <li class="member"><span class="function">{@link inotify_queue_len()} - Return a number upper than zero if there are pending events</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.inotify.php">Inotify 函数</a></div></div>
 * @return array an array of inotify events or <b>FALSE</b> if no events*/
function inotify_read( $inotify_instance )
{
}

/**
*<div id="function.inotify-rm-watch" class="refentry">  <div class="refnamediv">   <h1 class="refname">inotify_rm_watch</h1>   <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_rm_watch</span> &mdash; <span class="dc-title">Remove an existing watch from an inotify instance</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-rm-watch-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>inotify_rm_watch</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$inotify_instance</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$watch_descriptor</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">inotify_rm_watch()</strong></span> removes the watch    <span class="parameter" style="color:#2EACF9">watch_descriptor</span> from the inotify instance    <span class="parameter" style="color:#2EACF9">inotify_instance</span>.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-rm-watch-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">inotify_instance</span></dt>       <dd>        <p class="para">        <span class="function">{@link inotify_init()}</span>返回的资源       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">watch_descriptor</span></dt>       <dd>        <p class="para">        Watch to remove from the instance       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-rm-watch-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-rm-watch-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link inotify_init()} - Initialize an inotify instance</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.inotify.php">Inotify 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function inotify_rm_watch( $inotify_instance, $watch_descriptor )
{
}

/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_ACCESS = 1;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_MODIFY = 2;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_ATTRIB = 4;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_CLOSE_WRITE = 8;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_CLOSE_NOWRITE = 16;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_OPEN = 32;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_MOVED_FROM = 64;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_MOVED_TO = 128;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_CREATE = 256;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_DELETE = 512;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_DELETE_SELF = 1024;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_MOVE_SELF = 2048;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_UNMOUNT = 8192;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_Q_OVERFLOW = 16384;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_IGNORED = 32768;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_CLOSE = 24;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_MOVE = 192;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_ALL_EVENTS = 4095;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_ONLYDIR = 16777216;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_DONT_FOLLOW = 33554432;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_MASK_ADD = 536870912;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_ISDIR = 1073741824;
/**
 * @type int
 * @link http://php.net/manual/en/inotify.constants.php
 */
const IN_ONESHOT = 2147483648;

// End of inotify v.0.1.6
