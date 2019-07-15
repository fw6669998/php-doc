<?php

// Start of pcntl v.

/**
*<div id="function.pcntl-fork" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_fork</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_fork</span> &mdash; <span class="dc-title">   在当前进程当前位置产生分支（子进程）。译注：fork是创建了一个子进程，父进程和子进程   都从fork的位置开始向下继续执行，不同的是父进程执行过程中，得到的fork返回值为子进程   号，而子进程得到的是0。   </span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-fork-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_fork</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">   <span class="function"><strong>pcntl_fork()</strong></span>函数创建一个子进程，这个子进程仅PID（进程号）   和PPID（父进程号）与其父进程不同。fork怎样在您的系统工作的详细信息请查阅您的系统   的fork（2）手册。   </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-fork-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">   成功时，在父进程执行线程内返回产生的子进程的PID，在子进程执行线程内返回0。失败时，在   父进程上下文返回-1，不会创建子进程，并且会引发一个PHP错误。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.pcntl-fork-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4321">     <p><strong>Example #1 <span class="function"><strong>pcntl_fork()</strong></span> 示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$pid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">pcntl_fork</span><span style="color: #007700">();<br /></span><span style="color: #FF8000">//父进程和子进程都会执行下面代码<br /></span><span style="color: #007700">if&nbsp;(</span><span style="color: #9876AA">$pid&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #9876AA">1</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//错误处理：创建子进程失败时返回-1.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">die(</span><span style="color: #DD0000">'could&nbsp;not&nbsp;fork'</span><span style="color: #007700">);<br />}&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #9876AA">$pid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//父进程会得到子进程号，所以这里是父进程执行的逻辑<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #9876AA">$status</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//等待子进程中断，防止子进程成为僵尸进程。<br /></span><span style="color: #007700">}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//子进程得到的$pid为0,&nbsp;所以这里是子进程执行的逻辑。<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-fork-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>     <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int On success, the PID of the child process is returned in the*/
function pcntl_fork () {}

/**
*<div id="function.pcntl-waitpid" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_waitpid</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_waitpid</span> &mdash; <span class="dc-title">等待或返回fork的子进程状态</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-waitpid-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_waitpid</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$pid</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$status</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>   ] )</div>    <p class="para rdfs-comment">   挂起当前进程的执行直到参数<code class="parameter">pid</code>指定的进程号的进程退出，   或接收到一个信号要求中断当前进程或调用一个信号处理函数。   </p>   <p class="para">   如果<code class="parameter">pid</code>指定的子进程在此函数调用时已经退出（俗称僵尸进程），此函数   将立刻返回。关于waitpid更详细的规范请参见您系统的waitpid（2）手册。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-waitpid-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">pid</code></dt>       <dd>        <p class="para">        参数<code class="parameter">pid</code>的值可以是以下之一：        <table class="doctable table">         <caption><strong><code class="parameter">pid</code>可选值</strong></caption>                   <tbody class="tbody">           <tr>            <td><em>&lt; -1</em></td>            <td>            等待任意进程组ID等于参数<code class="parameter">pid</code>给定值的绝对值的进程。            </td>           </tr>            <tr>            <td><em>-1</em></td>            <td>            等待任意子进程;与pcntl_wait函数行为一致。            </td>           </tr>            <tr>            <td><em>0</em></td>            <td>            等待任意与调用进程组ID相同的子进程。            </td>           </tr>            <tr>            <td><em>&gt; 0</em></td>            <td>             等待进程号等于参数<code class="parameter">pid</code>值的子进程。            </td>           </tr>           </tbody>                 </table>        </p>       <blockquote class="note"><p><strong class="note">Note</strong>:         <p class="para">        指定<em>-1</em>作为<code class="parameter">pid</code>的值等同于<span class="function">{@link pcntl_wait()}</span>        提供(负的<code class="parameter">options</code>)。        </p>       </p></blockquote>      </dd>                 <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">        <span class="function"><strong>pcntl_waitpid()</strong></span>将会存储状态信息到<code class="parameter">status</code>        参数上，这个通过<code class="parameter">status</code>参数返回的状态信息可以用以下函数        <span class="function">{@link pcntl_wifexited()}</span>,        <span class="function">{@link pcntl_wifstopped()}</span>,        <span class="function">{@link pcntl_wifsignaled()}</span>,        <span class="function">{@link pcntl_wexitstatus()}</span>,        <span class="function">{@link pcntl_wtermsig()}</span>以及        <span class="function">{@link pcntl_wstopsig()}</span>获取其具体的值。       </p>      </dd>                 <dt> <code class="parameter">options</code></dt>       <dd>        <p class="para">        如果您的操作系统（多数BSD类系统）允许使用wait3，您可以提供可选的<code class="parameter">options</code>       参数。如果这个参数没有提供，wait将会被用作系统调用。如果wait3不可用，提供参数       <code class="parameter">options</code>不会有任何效果。<code class="parameter">options</code>的值可以是0       或者以下两个常量或两个常量“或运算”结果（即两个常量代表意义都有效）。        <table class="doctable table">         <caption><strong><code class="parameter">options</code>可用的值</strong></caption>                   <tbody class="tbody">           <tr>            <td><em>WNOHANG</em></td>            <td>             如果没有子进程退出立刻返回。            </td>           </tr>            <tr>            <td><em>WUNTRACED</em></td>            <td>             子进程已经退出并且其状态未报告时返回。            </td>           </tr>           </tbody>                 </table>        </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-waitpid-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>pcntl_waitpid()</strong></span>返回退出的子进程进程号，发生错误时返回-1,如果提供了    <strong><code>WNOHANG</code></strong>作为option（wait3可用的系统）并且没有可用子进程时返回0。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-waitpid-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分支（子进程）。译注：fork是创建了一个子进程，父进程和子进程   都从fork的位置开始向下继续执行，不同的是父进程执行过程中，得到的fork返回值为子进程   号，而子进程得到的是0。</span></li>     <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>     <li class="member"><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出。</span></li>     <li class="member"><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>     <li class="member"><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>     <li class="member"><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>     <li class="member"><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>     <li class="member"><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int <b>pcntl_waitpid</b> returns the process ID of the*/
function pcntl_waitpid ($pid, &$status, $options = 0) {}

/**
*<div id="function.pcntl-wait" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wait</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wait</span> &mdash; <span class="dc-title">等待或返回fork的子进程状态</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wait-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_wait</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter reference">&$status</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>   ] )</div>    <p class="para rdfs-comment">   wait函数刮起当前进程的执行直到一个子进程退出或接收到一个信号要求中断当前进程或调用一个信号处理函数。   如果一个子进程在调用此函数时已经退出（俗称僵尸进程），此函数立刻返回。子进程使用的所有系统资源将   被释放。关于wait在您系统上工作的详细规范请查看您系统的wait（2）手册。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">    这个函数等同于以<em>-1</em>作为参数<code class="parameter">pid</code>    的值并且没有<code class="parameter">options</code>参数来调用<span class="function">{@link pcntl_waitpid()}</span>    函数。    </p>   </p></blockquote>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wait-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">        <span class="function"><strong>pcntl_wait()</strong></span>将会存储状态信息到<code class="parameter">status</code>        参数上，这个通过<code class="parameter">status</code>参数返回的状态信息可以用以下函数        <span class="function">{@link pcntl_wifexited()}</span>,        <span class="function">{@link pcntl_wifstopped()}</span>,        <span class="function">{@link pcntl_wifsignaled()}</span>,        <span class="function">{@link pcntl_wexitstatus()}</span>,        <span class="function">{@link pcntl_wtermsig()}</span>以及        <span class="function">{@link pcntl_wstopsig()}</span>获取其具体的值。       </p>      </dd>                 <dt> <code class="parameter">options</code></dt>       <dd>        <p class="para">       如果您的操作系统（多数BSD类系统）允许使用wait3，您可以提供可选的<code class="parameter">options</code>       参数。如果这个参数没有提供，wait将会被用作系统调用。如果wait3不可用，提供参数       <code class="parameter">options</code>不会有任何效果。<code class="parameter">options</code>的值可以是0       或者以下两个常量或两个常量“或运算”结果（即两个常量代表意义都有效）。        <table class="doctable table">         <caption><strong><code class="parameter">options</code>可用值</strong></caption>                   <tbody class="tbody">           <tr>            <td><em>WNOHANG</em></td>            <td>             如果没有子进程退出立刻返回。            </td>           </tr>            <tr>            <td><em>WUNTRACED</em></td>            <td>            子进程已经退出并且其状态未报告时返回。            </td>           </tr>           </tbody>                 </table>        </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wait-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>pcntl_wait()</strong></span>返回退出的子进程进程号，发生错误时返回-1,如果提供了    <strong><code>WNOHANG</code></strong>作为option（wait3可用的系统）并且没有可用子进程时返回0。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wait-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分支（子进程）。译注：fork是创建了一个子进程，父进程和子进程   都从fork的位置开始向下继续执行，不同的是父进程执行过程中，得到的fork返回值为子进程   号，而子进程得到的是0。</span></li>     <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>     <li class="member"><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出。</span></li>     <li class="member"><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>     <li class="member"><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>     <li class="member"><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>     <li class="member"><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>     <li class="member"><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int <b>pcntl_wait</b> returns the process ID of the*/
function pcntl_wait (&$status, $options = 0) {}

/**
*<div id="function.pcntl-signal" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_signal</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_signal</span> &mdash; <span class="dc-title">安装一个信号处理器</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-signal-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_signal</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$signo</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.callback" class="type callback">callback</a></span> <code class="parameter">$handler</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$restart_syscalls</code><span class="initializer"> = true</span></span>   ] )</div>    <p class="para rdfs-comment">    函数<span class="function"><strong>pcntl_signal()</strong></span>为<code class="parameter">signo</code>指定的信号安装一个新    的信号处理器。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">signo</code></dt>       <dd>        <p class="para">        信号编号。       </p>      </dd>                 <dt> <code class="parameter">handler</code></dt>       <dd>        <p class="para">       信号处理器可以是用户创建的函数或方法的名字，也可以是系统常量        <strong><code>SIG_IGN</code></strong>（译注：忽略信号处理程序）或<strong><code>SIG_DFL（默认信号处理程序）</code></strong>.        </p>       <blockquote class="note"><p><strong class="note">Note</strong>:         <p class="para">        注意当你使用一个对象方法的时候，该对象的引用计数回增加使得它在你改变为其他处理或脚本结束之前是持久存在的。        </p>       </p></blockquote>      </dd>                 <dt> <code class="parameter">restart_syscalls</code></dt>       <dd>        <p class="para">       指定当信号到达时系统调用重启是否可用。（译注：经查资料，此参数意为系统调用被信号打断时，系统调用是否从       开始处重新开始，但根据http://bugs.php.net/bug.php?id=52121，此参数存在bug无效。）       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.pcntl-signal-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>4.3.0</td>        <td>         增加参数<code class="parameter">restart_syscalls</code>。        </td>       </tr>        <tr>        <td>4.3.0</td>        <td>         对象方法可以作为回调被使用。        </td>       </tr>        <tr>        <td>4.3.0</td>        <td>PCNTL现在使用了ticks作为信号处理的回调机制，ticks在速度上远远超过了之前的处理机制。         这个变化与“用户ticks”遵循了相同的语义。您可以使用<span class="function"><strong>declare()</strong></span>         语句在程序中指定允许发生回调的位置。这使得我们对异步事件处理的开销最小化。在编译PHP时         启用pcntl将始终承担这种开销，不论您的脚本中是否真正使用了pcntl。         PHP 4.3.0使用ticks作为信号处理回调机制，这比以前的机制快了很多。这个变化与         &quot;<a href="http://php.net/manual/zh/control-structures.declare.php#control-structures.declare.ticks" class="link">用户ticks</a>&quot;         遵循了相同的语义。您可以使用<a href="http://php.net/manual/zh/control-structures.declare.php" class="link">declare()</a>         语句在程序中指定允许发生回调的位置。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.pcntl-signal-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4324">     <p><strong>Example #1 <span class="function"><strong>pcntl_signal()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//使用ticks需要PHP&nbsp;4.3.0以上版本<br /></span><span style="color: #007700">declare(</span><span style="color: #9876AA">ticks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//信号处理函数<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">sig_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">)<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #9876AA">SIGTERM</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;处理SIGTERM信号<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">exit;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//处理SIGHUP信号<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Caught&nbsp;SIGUSR1...\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;处理所有其他信号<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /><br />}<br /><br />echo&nbsp;</span><span style="color: #DD0000">"Installing&nbsp;signal&nbsp;handler...\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//安装信号处理器<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGTERM</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;或者在PHP&nbsp;4.3.0以上版本可以使用对象方法<br />//&nbsp;pcntl_signal(SIGUSR1,&nbsp;array($obj,&nbsp;"do_something");<br /><br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"Generating&nbsp;signal&nbsp;SIGTERM&nbsp;to&nbsp;self...\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//向当前进程发送SIGUSR1信号<br /></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #DD0000">"Done\n"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分支（子进程）。译注：fork是创建了一个子进程，父进程和子进程   都从fork的位置开始向下继续执行，不同的是父进程执行过程中，得到的fork返回值为子进程   号，而子进程得到的是0。</span></li>     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_signal ($signo, $handler, $restart_syscalls = true) {}

/**
*<div id="function.pcntl-signal-dispatch" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_signal_dispatch</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_signal_dispatch</span> &mdash; <span class="dc-title">调用等待信号的处理器</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-signal-dispatch-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_signal_dispatch</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    函数<span class="function"><strong>pcntl_signal_dispatch()</strong></span>调用每个等待信号通过<span class="function">{@link pcntl_signal()}</span>    安装的处理器。   </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-dispatch-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.pcntl-signal-dispatch-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4322">     <p><strong>Example #1 <span class="function"><strong>pcntl_signal_dispatch()</strong></span> 示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"安装信号处理器...\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">,&nbsp;&nbsp;function(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"信号处理器被调用\n"</span><span style="color: #007700">;<br />});<br /><br />echo&nbsp;</span><span style="color: #DD0000">"为自己生成SIGHUP信号...\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #DD0000">"分发...\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">pcntl_signal_dispatch</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #DD0000">"完成\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> 安装信号处理器... 为自己生成SIGHUP信号... 分发... 信号处理器被调用 完成 </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-dispatch-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>     <li class="member"><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>     <li class="member"><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>     <li class="member"><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_signal_dispatch () {}

/**
*<div id="function.pcntl-wifexited" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wifexited</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wifexited</span> &mdash; <span class="dc-title">检查状态代码是否代表一个正常的退出。</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wifexited-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_wifexited</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$status</code></span>    )</div>    <p class="para rdfs-comment">   检查子进程状态代码是否代表正常退出。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wifexited-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">参数 <code class="parameter">status</code> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span> 时的状态参数。</p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifexited-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    当子进程状态代码代表正常退出时返回 <strong><code>TRUE</code></strong> ，其他情况返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wifexited-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>     <li class="member"><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> if the child status code represents a normal exit, <b>FALSE</b>*/
function pcntl_wifexited ($status) {}

/**
*<div id="function.pcntl-wifstopped" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wifstopped</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wifstopped</span> &mdash; <span class="dc-title">检查子进程当前是否已经停止</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wifstopped-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_wifstopped</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$status</code></span>    )</div>    <p class="para rdfs-comment">   仅查子进程当前是否停止; 此函数只有作用于使用了<em>WUNTRACED</em>作为   option的<span class="function">{@link pcntl_waitpid()}</span>函数调用产生的status时才有效。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wifstopped-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">参数 <code class="parameter">status</code> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span> 时的状态参数。</p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifstopped-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果子进程当前是停止的返回 <strong><code>TRUE</code></strong> ，其他情况返回 <strong><code>FALSE</code></strong> 。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wifstopped-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> if the child process which caused the return is*/
function pcntl_wifstopped ($status) {}

/**
*<div id="function.pcntl-wifsignaled" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wifsignaled</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wifsignaled</span> &mdash; <span class="dc-title">检查子进程状态码是否代表由于某个信号而中断</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wifsignaled-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_wifsignaled</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$status</code></span>    )</div>    <p class="para rdfs-comment">   检查子进程是否是由于某个未捕获的信号退出的。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wifsignaled-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">参数 <code class="parameter">status</code> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span> 时的状态参数。</p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifsignaled-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果子进程是由于某个未捕获的信号退出的返回 <strong><code>TRUE</code></strong> ，其他情况返回 <strong><code>FALSE</code></strong> 。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wifsignaled-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>     <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> if the child process exited because of a signal which was*/
function pcntl_wifsignaled ($status) {}

/**
*<div id="function.pcntl-wexitstatus" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wexitstatus</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wexitstatus</span> &mdash; <span class="dc-title">返回一个中断的子进程的返回代码</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wexitstatus-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_wexitstatus</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$status</code></span>    )</div>    <p class="para rdfs-comment">   返回一个中断的子进程的返回代码。这个函数仅在函数<span class="function">{@link pcntl_wifexited()}</span>返回    <strong><code>TRUE</code></strong>.时有效。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wexitstatus-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">参数 <code class="parameter">status</code> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span> 时的状态参数。</p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wexitstatus-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回整形的子进程返回代码。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wexitstatus-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>     <li class="member"><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出。</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int the return code, as an integer.*/
function pcntl_wexitstatus ($status) {}

/**
 * @param int $status
 */
function pcntl_wifcontinued ( $status){}
/**
*<div id="function.pcntl-wtermsig" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wtermsig</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wtermsig</span> &mdash; <span class="dc-title">返回导致子进程中断的信号</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wtermsig-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_wtermsig</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$status</code></span>    )</div>    <p class="para rdfs-comment">   返回导致子进程中断的信号编号。这个函数仅在<span class="function">{@link pcntl_wifsignaled()}</span> 返回 <strong><code>TRUE</code></strong> 时有效。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wtermsig-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">参数 <code class="parameter">status</code> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span> 时的状态参数。</p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wtermsig-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回整型的信号编号。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wtermsig-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>     <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>     <li class="member"><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int the signal number, as an integer.*/
function pcntl_wtermsig ($status) {}

/**
*<div id="function.pcntl-wstopsig" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_wstopsig</h1>   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_wstopsig</span> &mdash; <span class="dc-title">返回导致子进程停止的信号</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-wstopsig-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_wstopsig</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$status</code></span>    )</div>    <p class="para rdfs-comment">   返回导致子进程停止的信号编号。这个函数仅在<span class="function">{@link pcntl_wifstopped()}</span>返回 <strong><code>TRUE</code></strong> 时有效。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-wstopsig-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">status</code></dt>       <dd>        <p class="para">参数 <code class="parameter">status</code> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span> 时的状态参数。</p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wstopsig-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回信号编号。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-wstopsig-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回fork的子进程状态</span></li>     <li class="member"><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int the signal number.*/
function pcntl_wstopsig ($status) {}

/**
*<div id="function.pcntl-exec" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_exec</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_exec</span> &mdash; <span class="dc-title">在当前进程空间执行指定程序</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-exec-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>pcntl_exec</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$path</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$args</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$envs</code></span>   ]] )</div>    <p class="para rdfs-comment">    以给定参数执行程序。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-exec-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">path</code></dt>       <dd>        <p class="para">        <code class="parameter">path</code>必须时可执行二进制文件路径或一个在文件第一行指定了        一个可执行文件路径标头的脚本（比如文件第一行是#!/usr/local/bin/perl的perl脚本）。        更多的信息请查看您系统的execve（2）手册。       </p>      </dd>                 <dt> <code class="parameter">args</code></dt>       <dd>        <p class="para">        <code class="parameter">args</code>是一个要传递给程序的参数的字符串数组。       </p>      </dd>                 <dt> <code class="parameter">envs</code></dt>       <dd>        <p class="para">        <code class="parameter">envs</code>是一个要传递给程序作为环境变量的字符串数组。这个数组是        key =&gt; value格式的，key代表要传递的环境变量的名称，value代表该环境变量值。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-exec-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    当发生错误时返回 <strong><code>FALSE</code></strong> ，没有错误时没有返回。   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return void <b>FALSE</b> on error and does not return on success.*/
function pcntl_exec ($path, array $args = null, array $envs = null) {}

/**
*<div id="function.pcntl-alarm" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_alarm</h1>   <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_alarm</span> &mdash; <span class="dc-title">为进程设置一个alarm闹钟信号</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-alarm-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_alarm</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$seconds</code></span>    )</div>    <p class="para rdfs-comment">   创建一个计时器，在指定的秒数后向进程发送一个<strong><code>SIGALRM</code></strong>信号。每次对   <span class="function"><strong>pcntl_alarm()</strong></span>的调用都会取消之前设置的alarm信号。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-alarm-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">seconds</code></dt>       <dd>        <p class="para">       等待的秒数。如果<code class="parameter">seconds</code>设置为0,将不会创建alarm信号。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-alarm-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">   返回上次alarm调度（离alarm信号发送）剩余的秒数，或者之前没有alarm调度（译注：或者之前调度已完成）   时返回<em>0</em>。   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int the time in seconds that any previously scheduled alarm had*/
function pcntl_alarm ($seconds) {}

/**
*<div id="function.pcntl-get-last-error" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_get_last_error</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_get_last_error</span> &mdash; <span class="dc-title">Retrieve the error number set by the last pcntl function which failed</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.pcntl-get-last-error-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_get_last_error</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-get-last-error-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-get-last-error-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns error code.   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-get-last-error-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_strerror()} - Retrieve the system error message associated with the given errno</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int error code.*/
function pcntl_get_last_error () {}

/**
*<div id="function.pcntl-errno" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_errno</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_errno</span> &mdash; <span class="dc-title">别名 <span class="function">{@link pcntl_get_last_error()}</span></span></p>   </div>   <div class="refsect1 description" id="refsect1-function.pcntl-errno-description">   <h3 class="title">说明</h3>   <p class="simpara">    此函数是该函数的别名：    <span class="function">{@link pcntl_get_last_error()}</span>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
*/
function pcntl_errno () {}

/**
*<div id="function.pcntl-strerror" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_strerror</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_strerror</span> &mdash; <span class="dc-title">Retrieve the system error message associated with the given errno</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.pcntl-strerror-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>pcntl_strerror</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$errno</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-strerror-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">errno</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-strerror-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns error description on success 或者在失败时返回 <strong><code>FALSE</code></strong>.   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-strerror-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_get_last_error()} - Retrieve the error number set by the last pcntl function which failed</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return string error description on success or <b>FALSE</b> on failure.*/
function pcntl_strerror ($errno) {}

/**
*<div id="function.pcntl-getpriority" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_getpriority</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_getpriority</span> &mdash; <span class="dc-title">获取任意进程的优先级</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-getpriority-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_getpriority</strong></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$pid</code><span class="initializer"> = getmypid()</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$process_identifier</code><span class="initializer"> = PRIO_PROCESS</span></span>   ]] )</div>    <p class="para rdfs-comment">    <span class="function"><strong>pcntl_getpriority()</strong></span> 获取进程号为    <code class="parameter">pid</code>的进程的优先级。由于不同的系统类型以及内核版本下    优先级可能不同，因此请参考您系统的getpriority（2）手册以获取详细的规范。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-getpriority-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">pid</code></dt>       <dd>        <p class="para">        如果没有指定，默认是当前进程的进程号。       </p>      </dd>                 <dt> <code class="parameter">process_identifier</code></dt>       <dd>        <p class="para">        <strong><code>PRIO_PGRP</code></strong>（译注：获取进程组优先级）, <strong><code>PRIO_USER</code></strong>        （译注：获取用户进程优先级）或 <strong><code>PRIO_PROCESS（译注：默认值;获取进程优先级）</code></strong>三者之一。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-getpriority-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>pcntl_getpriority()</strong></span> 返回进程的优先级或在错误时返回 <strong><code>FALSE</code></strong> 。 值越小代表优先级越高。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-getpriority-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_setpriority()} - 修改任意进程的优先级</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int <b>pcntl_getpriority</b> returns the priority of the process*/
function pcntl_getpriority ($pid, $process_identifier = PRIO_PROCESS) {}

/**
*<div id="function.pcntl-setpriority" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_setpriority</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_setpriority</span> &mdash; <span class="dc-title">修改任意进程的优先级</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-setpriority-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_setpriority</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$priority</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$pid</code><span class="initializer"> = getmypid()</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$process_identifier</code><span class="initializer"> = PRIO_PROCESS</span></span>   ]] )</div>    <p class="para rdfs-comment">    <span class="function"><strong>pcntl_setpriority()</strong></span> 设置进程号为    <code class="parameter">pid</code>的进程的优先级。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-setpriority-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">priority</code></dt>       <dd>        <p class="para">        <code class="parameter">priority</code> 通常时-20至20这个范围内的值。默认优先级是0,值越小代表        优先级越高。由于不同的系统类型以及内核版本下优先级可能不同，因此请参考您系统的setpriority（2）        手册以获取详细的规范。       </p>      </dd>                 <dt> <code class="parameter">pid</code></dt>       <dd>        <p class="para">        如果没有指定，默认是当前进程的进程号。       </p>      </dd>                 <dt> <code class="parameter">process_identifier</code></dt>       <dd>        <p class="para">        <strong><code>PRIO_PGRP</code></strong>（译注：获取进程组优先级）, <strong><code>PRIO_USER</code></strong>        （译注：获取用户进程优先级）或 <strong><code>PRIO_PROCESS（译注：默认值;获取进程优先级）</code></strong>三者之一。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-setpriority-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-setpriority-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_getpriority()} - 获取任意进程的优先级</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_setpriority ($priority, $pid, $process_identifier = PRIO_PROCESS) {}

/**
*<div id="function.pcntl-sigprocmask" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_sigprocmask</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_sigprocmask</span> &mdash; <span class="dc-title">设置或检索阻塞信号</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-sigprocmask-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_sigprocmask</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$how</code></span>    , <span class="methodparam"><span class="type">array</span> <code class="parameter">$set</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$oldset</code></span>   ] )</div>    <p class="para rdfs-comment">    函数<span class="function"><strong>pcntl_sigprocmask()</strong></span>用来增加，删除或设置阻塞信号，具体行为    依赖于参数<code class="parameter">how</code>。    </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-sigprocmask-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">how</code></dt>       <dd>        <p class="para">        设置<span class="function"><strong>pcntl_sigprocmask()</strong></span>函数的行为。 可选值:         <ul class="simplelist">         <li class="member"><strong><code>SIG_BLOCK</code></strong>: 把信号加入到当前阻塞信号中。</li>         <li class="member"><strong><code>SIG_UNBLOCK</code></strong>: 从当前阻塞信号中移出信号。</li>         <li class="member"><strong><code>SIG_SETMASK</code></strong>: 用给定的信号列表替换当前阻塞信号列表。</li>        </ul>       </p>      </dd>                 <dt> <code class="parameter">set</code></dt>       <dd>        <p class="para">        信号列表。       </p>      </dd>                 <dt> <code class="parameter">oldset</code></dt>       <dd>        <p class="para">        <code class="parameter">oldset</code>是一个输出参数，用来返回之前的阻塞信号列表数组。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigprocmask-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.pcntl-sigprocmask-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4325">     <p><strong>Example #1 <span class="function"><strong>pcntl_sigprocmask()</strong></span> 示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//将SIGHUP信号加入到阻塞信号中<br /></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_BLOCK</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$oldset&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #FF8000">//将SIGHUP从阻塞信号列表中移除并返回之前的阻塞信号列表。<br /></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_UNBLOCK</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">$oldset</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-sigprocmask-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>     <li class="member"><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_sigprocmask ($how, array $set, array &$oldset = null) {}

/**
*<div id="function.pcntl-sigwaitinfo" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_sigwaitinfo</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_sigwaitinfo</span> &mdash; <span class="dc-title">等待信号</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-sigwaitinfo-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_sigwaitinfo</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$set</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$siginfo</code></span>   ] )</div>    <p class="para rdfs-comment">    <span class="function"><strong>pcntl_sigwaitinfo()</strong></span>函数暂停调用脚本的执行直到接收到<code class="parameter">set</code>    参数中列出的某个信号。只要其中的一个信号已经在等待状态(比如： 通过    <span class="function">{@link pcntl_sigprocmask()}</span>函数阻塞)，    函数<span class="function"><strong>pcntl_sigwaitinfo()</strong></span>就回立刻返回。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-sigwaitinfo-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">set</code></dt>       <dd>        <p class="para">        要等待的信号数组。       </p>      </dd>                 <dt> <code class="parameter">siginfo</code></dt>       <dd>        <p class="para">        <code class="parameter">siginfo</code>是一个输出参数，用来返回信号的信息。       </p>       <p class="para">        以下元素会为所有信号设置：        <ul class="simplelist">         <li class="member">signo: 信号编号</li>         <li class="member">errno: 错误编号</li>         <li class="member">code: 信号代码</li>        </ul>       </p>       <p class="para">        下面元素可能会为<strong><code>SIGCHLD</code></strong>信号设置:        <ul class="simplelist">         <li class="member">status: 退出的值或信号</li>         <li class="member">utime: 用户消耗的时间</li>         <li class="member">stime: 系统（内核）消耗的时间</li>         <li class="member">pid: 发送进程ID</li>         <li class="member">uid: 发送进程的实际用户ID</li>        </ul>       </p>       <p class="para">        信号<strong><code>SIGILL</code></strong>,        <strong><code>SIGFPE</code></strong>, <strong><code>SIGSEGV</code></strong> 和        <strong><code>SIGBUS</code></strong> 可能会被设置的元素:        <ul class="simplelist">         <li class="member">addr: 发生故障的内存位置</li>        </ul>       </p>       <p class="para">        可能会为<strong><code>SIGPOLL</code></strong>        信号设置的元素：        <ul class="simplelist">         <li class="member">band: Band event</li>         <li class="member">fd: 文件描述符</li>        </ul>       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigwaitinfo-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时，函数<span class="function"><strong>pcntl_sigwaitinfo()</strong></span>返回一个信号编号。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.pcntl-sigwaitinfo-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4326">     <p><strong>Example #1 <span class="function"><strong>pcntl_sigwaitinfo()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"Blocking&nbsp;SIGHUP&nbsp;signal\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_BLOCK</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">));<br /><br />echo&nbsp;</span><span style="color: #DD0000">"Sending&nbsp;SIGHUP&nbsp;to&nbsp;self\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #DD0000">"Waiting&nbsp;for&nbsp;signals\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$info&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">pcntl_sigwaitinfo</span><span style="color: #007700">(array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-sigwaitinfo-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>     <li class="member"><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int On success, <b>pcntl_sigwaitinfo</b> returns a signal number.*/
function pcntl_sigwaitinfo (array $set, array &$siginfo = null) {}

/**
*<div id="function.pcntl-sigtimedwait" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_sigtimedwait</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">pcntl_sigtimedwait</span> &mdash; <span class="dc-title">带超时机制的信号等待</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.pcntl-sigtimedwait-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>pcntl_sigtimedwait</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$set</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$siginfo</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$seconds</code><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$nanoseconds</code><span class="initializer"> = 0</span></span>   ]]] )</div>    <p class="para rdfs-comment">    函数<span class="function"><strong>pcntl_sigtimedwait()</strong></span>实际上与<span class="function">{@link pcntl_sigwaitinfo()}</span>    的行为一致，不同在于它多了两个增强参数<code class="parameter">seconds</code>和    <code class="parameter">nanoseconds</code>，这使得脚本等待的事件有了一个时间的上限。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-sigtimedwait-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">set</code></dt>       <dd>        <p class="para">        要等待的信号列表数组。       </p>      </dd>                 <dt> <code class="parameter">siginfo</code></dt>       <dd>        <p class="para">        <code class="parameter">siginfo</code>是一个输出参数，用来返回信号的信息。更详细情况参见        <span class="function">{@link pcntl_sigwaitinfo()}</span>。       </p>      </dd>                 <dt> <code class="parameter">seconds</code></dt>       <dd>        <p class="para">        超时秒数。       </p>      </dd>                 <dt> <code class="parameter">nanoseconds</code></dt>       <dd>        <p class="para">        超时纳秒数。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigtimedwait-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时，函数<span class="function"><strong>pcntl_sigtimedwait()</strong></span>返回信号编号。   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-sigtimedwait-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>     <li class="member"><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return int On success, <b>pcntl_sigtimedwait</b> returns a signal number.*/
function pcntl_sigtimedwait (array $set, array &$siginfo = null, $seconds = 0, $nanoseconds = 0) {}

/**
*<div id="function.pcntl-async-signals" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_async_signals</h1>   <p class="verinfo">(PHP 7 &gt;= 7.1.0)</p><p class="refpurpose"><span class="refname">pcntl_async_signals</span> &mdash; <span class="dc-title">Enable/disable asynchronous signal handling or return the old setting</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.pcntl-async-signals-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>pcntl_async_signals</strong></span>     ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$on</code><span class="initializer"> = <strong><code>NULL</code></strong></span></span>   ] )</div>    <p class="para rdfs-comment">    If the <code class="parameter">on</code> parameter is omitted,    <span class="function"><strong>pcntl_async_signals()</strong></span> returns whether asynchronous signal    handling is enabled. Otherwise, asynchronous signal handling is enabled or    disabled.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-async-signals-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">on</code></dt>      <dd>       <p class="para">       Whether asynchronous signal handling should be enabled.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-async-signals-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    When used as getter (that is without the optional parameter) it returns    whether asynchronous signal handling is enabled. When used as setter (that is    with the optional parameter given), it returns whether asynchronous signal    handling was enabled <em class="emphasis">before</em> the function call.   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-async-signals-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><a href="http://php.net/manual/zh/control-structures.declare.php" class="link">declare</a></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool*/
function pcntl_async_signals($on) {}

/**
*<div id="function.pcntl-signal-get-handler" class="refentry">  <div class="refnamediv">   <h1 class="refname">pcntl_signal_get_handler</h1>   <p class="verinfo">(PHP 7 &gt;= 7.1.0)</p><p class="refpurpose"><span class="refname">pcntl_signal_get_handler</span> &mdash; <span class="dc-title">Get the current handler for specified signal</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.pcntl-signal-get-handler-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>pcntl_signal_get_handler</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$signo</code></span>    )</div>    <p class="para rdfs-comment">    The <span class="function"><strong>pcntl_signal_get_handler()</strong></span> function will get the current handler for the specified <code class="parameter">signo</code>.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-get-handler-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">signo</code></dt>      <dd>       <p class="para">       The signal number.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-get-handler-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    This function may return an integer value that refers to <strong><code>SIG_DFL</code></strong> or <strong><code>SIG_IGN</code></strong>.  If you set a custom handler a string value containing the function name is returned.   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.pcntl-signal-get-handler-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>7.1.0</td>       <td>        <span class="function"><strong>pcntl_signal_get_handler()</strong></span> has been added.       </td>      </tr>      </tbody>       </table>   </div>    <div class="refsect1 examples" id="refsect1-function.pcntl-signal-get-handler-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4323">     <p><strong>Example #1 <span class="function"><strong>pcntl_signal_get_handler()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;Outputs:&nbsp;int(0)<br /><br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">pcntl_test</span><span style="color: #007700">(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">)&nbsp;{}<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pcntl_test'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;Outputs:&nbsp;string(10)&nbsp;"pcntl_test"<br /><br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">SIG_DFL</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;Outputs:&nbsp;int(0)<br /><br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">SIG_IGN</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;Outputs:&nbsp;int(1)<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-get-handler-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_signal()} - 安装一个信号处理器</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.pcntl.php">PCNTL 函数</a></div></div>
 * @return bool*/
function pcntl_signal_get_handler($signo) {}

define ('WNOHANG', 1);
define ('WUNTRACED', 2);
define ('WCONTINUED', 16);
define ('SIG_IGN', 1);
define ('SIG_DFL', 0);
define ('SIG_ERR', -1);
define ('SIGHUP', 1);
define ('SIGINT', 2);
define ('SIGQUIT', 3);
define ('SIGILL', 4);
define ('SIGTRAP', 5);
define ('SIGABRT', 6);
define ('SIGIOT', 6);
define ('SIGBUS', 7);
define ('SIGFPE', 8);
define ('SIGKILL', 9);
define ('SIGUSR1', 10);
define ('SIGSEGV', 11);
define ('SIGUSR2', 12);
define ('SIGPIPE', 13);
define ('SIGALRM', 14);
define ('SIGTERM', 15);
define ('SIGSTKFLT', 16);
define ('SIGCLD', 17);
define ('SIGCHLD', 17);
define ('SIGCONT', 18);
define ('SIGSTOP', 19);
define ('SIGTSTP', 20);
define ('SIGTTIN', 21);
define ('SIGTTOU', 22);
define ('SIGURG', 23);
define ('SIGXCPU', 24);
define ('SIGXFSZ', 25);
define ('SIGVTALRM', 26);
define ('SIGPROF', 27);
define ('SIGWINCH', 28);
define ('SIGPOLL', 29);
define ('SIGIO', 29);
define ('SIGPWR', 30);
define ('SIGSYS', 31);
define ('SIGBABY', 31);
define ('PRIO_PGRP', 1);
define ('PRIO_USER', 2);
define ('PRIO_PROCESS', 0);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SIG_BLOCK', 0);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SIG_UNBLOCK', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SIG_SETMASK', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_USER', 0);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_KERNEL', 128);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_QUEUE', -1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_TIMER', -2);
define ('SI_MESGQ', -3);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_ASYNCIO', -4);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_SIGIO', -5);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SI_TKILL', -6);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('CLD_EXITED', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('CLD_KILLED', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('CLD_DUMPED', 3);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('CLD_TRAPPED', 4);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('CLD_STOPPED', 5);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('CLD_CONTINUED', 6);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('TRAP_BRKPT', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('TRAP_TRACE', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('POLL_IN', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('POLL_OUT', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('POLL_MSG', 3);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('POLL_ERR', 4);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('POLL_PRI', 5);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('POLL_HUP', 6);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_ILLOPC', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_ILLOPN', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_ILLADR', 3);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_ILLTRP', 4);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_PRVOPC', 5);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_PRVREG', 6);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_COPROC', 7);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('ILL_BADSTK', 8);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_INTDIV', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_INTOVF', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_FLTDIV', 3);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_FLTOVF', 4);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_FLTUND', 7);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_FLTRES', 6);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_FLTINV', 7);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('FPE_FLTSUB', 8);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SEGV_MAPERR', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('SEGV_ACCERR', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('BUS_ADRALN', 1);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('BUS_ADRERR', 2);

/**
*      PHP 5.3.0之后版本可用。     
*/
define ('BUS_OBJERR', 3);
define ('PCNTL_EINTR', 4);
define ('PCNTL_ECHILD', 10);
define ('PCNTL_EINVAL', 22);
define ('PCNTL_EAGAIN', 11);
define ('PCNTL_ESRCH', 3);
define ('PCNTL_EACCES', 13);
define ('PCNTL_EPERM', 1);
define ('PCNTL_ENOMEM', 12);
define ('PCNTL_E2BIG', 7);
define ('PCNTL_EFAULT', 14);
define ('PCNTL_EIO', 5);
define ('PCNTL_EISDIR', 21);
define ('PCNTL_ELIBBAD', 80);
define ('PCNTL_ELOOP', 40);
define ('PCNTL_EMFILE', 24);
define ('PCNTL_ENAMETOOLONG', 36);
define ('PCNTL_ENFILE', 23);
define ('PCNTL_ENOENT', 2);
define ('PCNTL_ENOEXEC', 8);
define ('PCNTL_ENOTDIR', 20);
define ('PCNTL_ETXTBSY', 26);

// End of pcntl v.
?>
