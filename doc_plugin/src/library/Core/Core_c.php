<?php

// Start of Core v.5.3.6-13ubuntu3.2

/**
 * Created by typecasting to object.
 * @link http://php.net/manual/en/reserved.classes.php
 */
class stdClass {
}

/**
 * @link https://wiki.php.net/rfc/iterable
 */
interface iterable {}

/**
 * Interface to detect if a class is traversable using &foreach;.
 * @link http://php.net/manual/en/class.traversable.php
 */
interface Traversable extends iterable {
}

/**
 * Interface to create an external Iterator.
 * @link http://php.net/manual/en/class.iteratoraggregate.php
 */
interface IteratorAggregate extends Traversable {

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator();
}

/**
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 * @link http://php.net/manual/en/class.iterator.php
 */
interface Iterator extends Traversable {

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current();

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next();

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key();

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid();

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind();
}

/**
 * Interface to provide accessing objects as arrays.
 * @link http://php.net/manual/en/class.arrayaccess.php
 */
interface ArrayAccess {

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
    public function offsetExists($offset);

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset);

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
    public function offsetSet($offset, $value);

    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset);
}

/**
 * Interface for customized serializing.
 * @link http://php.net/manual/en/class.serializable.php
 */
interface Serializable {

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize();

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized);
}


/**
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7,
 * including Error and Exception.
 * @link http://php.net/manual/en/class.throwable.php
 * @since 7.0
 */
interface Throwable
{

    /**
     * Gets the message
     * @link http://php.net/manual/en/throwable.getmessage.php
     * @return string
     * @since 7.0
     */
    public function getMessage();

    /**
     * Gets the exception code
     * @link http://php.net/manual/en/throwable.getcode.php
     * @return int <p>
     * Returns the exception code as integer in
     * {@see Exception} but possibly as other type in
     * {@see Exception} descendants (for example as
     * string in {@see PDOException}).
     * </p>
     * @since 7.0
     */
    public function getCode();

    /**
     * Gets the file in which the exception occurred
     * @link http://php.net/manual/en/throwable.getfile.php
     * @return string Returns the name of the file from which the object was thrown.
     * @since 7.0
     */
    public function getFile();

    /**
     * Gets the line on which the object was instantiated
     * @link http://php.net/manual/en/throwable.getline.php
     * @return int Returns the line number where the thrown object was instantiated.
     * @since 7.0
     */
    public function getLine();

    /**
     * Gets the stack trace
     * @link http://php.net/manual/en/throwable.gettrace.php
     * @return array <p>
     * Returns the stack trace as an array in the same format as
     * {@see debug_backtrace()}.
     * </p>
     * @since 7.0
     */
    public function getTrace();

    /**
     * Gets the stack trace as a string
     * @link http://php.net/manual/en/throwable.gettraceasstring.php
     * @return string Returns the stack trace as a string.
     * @since 7.0
     */
    public function getTraceAsString();

    /**
     * Returns the previous Throwable
     * @link http://php.net/manual/en/throwable.getprevious.php
     * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
     * @since 7.0
     */
    public function getPrevious();

    /**
     * Gets a string representation of the thrown object
     * @link http://php.net/manual/en/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString();
}
/**
*<div id="class.exception" class="reference">  <h1 class="title">Exception</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="exception.intro">    <h2 class="title">简介</h2>    <p class="para">     <span class="ooclass"><strong class="classname">Exception</strong></span>是所有异常的基类。    </p>   </div>      <div class="section" id="exception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">Exception</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="constructorsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$message</span><span class="initializer"> = &quot;&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$code</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type Throwable" style="color:#EAB766">Throwable</span></span> <span class="parameter" style="color:#2EACF9">$previous</span><span class="initializer"> = <strong><span>NULL</span></strong></span></span>   ]]] )</div>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.getmessage.php" class="methodname" style="color:#CC7832">getMessage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">Throwable</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.getprevious.php" class="methodname" style="color:#CC7832">getPrevious</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.getcode.php" class="methodname" style="color:#CC7832">getCode</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.getfile.php" class="methodname" style="color:#CC7832">getFile</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.getline.php" class="methodname" style="color:#CC7832">getLine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.gettrace.php" class="methodname" style="color:#CC7832">getTrace</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.gettraceasstring.php" class="methodname" style="color:#CC7832">getTraceAsString</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span>  <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.tostring.php" class="methodname" style="color:#CC7832">__toString</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/exception.clone.php" class="methodname" style="color:#CC7832">__clone</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>        </div>      <div class="section" id="exception.props">    <h2 class="title">属性</h2>    <dl>            <dt id="exception.props.message"><var class="varname"><var class="varname">message</var></var></dt>       <dd>        <p class="para">异常消息内容</p>      </dd>                 <dt id="exception.props.code"><var class="varname"><var class="varname">code</var></var></dt>       <dd>        <p class="para">异常代码</p>      </dd>                 <dt id="exception.props.file"><var class="varname"><var class="varname">file</var></var></dt>       <dd>        <p class="para">抛出异常的文件名</p>      </dd>                 <dt id="exception.props.line"><var class="varname"><var class="varname">line</var></var></dt>       <dd>        <p class="para">抛出异常在该文件中的行号</p>      </dd>          </dl>    </div>     </div>                                                                                                                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link Exception::__construct} — 异常构造函数</li><li>{@link Exception::getMessage} — 获取异常消息内容</li><li>{@link Exception::getPrevious} — 返回异常链中的前一个异常</li><li>{@link Exception::getCode} — 获取异常代码</li><li>{@link Exception::getFile} — 创建异常时的程序文件名称</li><li>{@link Exception::getLine} — 获取创建的异常所在文件中的行号</li><li>{@link Exception::getTrace} — 获取异常追踪信息</li><li>{@link Exception::getTraceAsString} — 获取字符串类型的异常追踪信息</li><li>{@link Exception::__toString} — 将异常对象转换为字符串</li><li>{@link Exception::__clone} — 异常克隆</li></ul> <div class="up"><a href="http://php.net/manual/zh/reserved.exceptions.php">预定义异常</a></div></div>
*/
class Exception implements Throwable {
    protected $message;
    protected $code;
    protected $file;
    protected $line;


    /**
     * Clone the exception
     * Tries to clone the Exception, which results in Fatal error.
     * @link http://php.net/manual/en/exception.clone.php
     * @return void
     * @since 5.1.0
     */
    final private function __clone() { }

    /**
     * Construct the exception. Note: The message is NOT binary safe.
     * @link http://php.net/manual/en/exception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining.
     * @since 5.1.0
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null) { }

/**
*<div id="exception.getmessage" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getMessage</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getMessage</span> &mdash; <span class="dc-title">获取异常消息内容</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.getmessage-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>Exception::getMessage</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    返回异常消息内容。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.getmessage-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.getmessage-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回字符串类型的异常消息内容。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.getmessage-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-304">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Exception::getMessage()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">"Some&nbsp;error&nbsp;message"</span><span style="color: #007700">);<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">();<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Some error message </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.getmessage-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getMessage()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return string the Exception message as a string.*/
    final public function getMessage() { }

/**
*<div id="exception.getcode" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getCode</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getCode</span> &mdash; <span class="dc-title">获取异常代码</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.getcode-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>Exception::getCode</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    返回异常代码。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.getcode-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.getcode-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a> 返回整型（<span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer" style="color:#EAB766">integer</a></span>）的异常代码，但在其他类中可能返回其他类型(比如在 <a href="http://php.net/manual/zh/class.pdoexception.php" class="classname">PDOException</a> 中返回 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>)。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.getcode-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-306">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Exception::getCode()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">"Some&nbsp;error&nbsp;message"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">30</span><span style="color: #007700">);<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"The&nbsp;exception&nbsp;code&nbsp;is:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getCode</span><span style="color: #007700">();<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> The exception code is: 30 </span></div>     </div>    </div>   </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.getcode-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getCode()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return mixed|int the exception code as integer in*/
    final public function getCode() { }

/**
*<div id="exception.getfile" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getFile</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getFile</span> &mdash; <span class="dc-title">创建异常时的程序文件名称</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.getfile-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>Exception::getFile</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    获取创建异常的程序文件名称。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.getfile-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.getfile-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回发生异常的程序文件名称。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.getfile-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="variable.globals.basic">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Exception::getFile()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">Exception</span><span style="color: #007700">;<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getFile</span><span style="color: #007700">();<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> /home/bjori/tmp/ex.php </span></div>     </div>    </div>   </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.getfile-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getFile()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return string the filename in which the exception was created.*/
    final public function getFile() { }

/**
*<div id="exception.getline" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getLine</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getLine</span> &mdash; <span class="dc-title">获取创建的异常所在文件中的行号</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.getline-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>Exception::getLine</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    返回发生异常的代码在文件中的行号。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.getline-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.getline-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回发生异常的代码在文件中的行号。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.getline-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="variable.server.basic">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Exception::getLine()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">"Some&nbsp;error&nbsp;message"</span><span style="color: #007700">);<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"The&nbsp;exception&nbsp;was&nbsp;thrown&nbsp;on&nbsp;line:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getLine</span><span style="color: #007700">();<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> The exception was thrown on line: 3 </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.getline-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getLine()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return int the line number where the exception was created.*/
    final public function getLine() { }

/**
*<div id="exception.gettrace" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getTrace</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getTrace</span> &mdash; <span class="dc-title">获取异常追踪信息</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.gettrace-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>Exception::getTrace</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    返回异常追踪信息。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.gettrace-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.gettrace-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回包含异常追踪信息的数组（<span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>）。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.gettrace-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="variable.get.basic">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Exception::getTrace()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">test</span><span style="color: #007700">()&nbsp;{<br />&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">Exception</span><span style="color: #007700">;<br />}<br /><br />try&nbsp;{<br />&nbsp;</span><span style="color: #9876AA">test</span><span style="color: #007700">();<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getTrace</span><span style="color: #007700">());<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> array(1) {   [0]=&gt;   array(4) {     [&quot;file&quot;]=&gt;     string(22) &quot;/home/bjori/tmp/ex.php&quot;     [&quot;line&quot;]=&gt;     int(7)     [&quot;function&quot;]=&gt;     string(4) &quot;test&quot;     [&quot;args&quot;]=&gt;     array(0) {     }   } } </span></div>     </div>    </div>   </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.gettrace-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getTrace()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return array the Exception stack trace as an array.*/
    final public function getTrace() { }

/**
*<div id="exception.getprevious" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getPrevious</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getPrevious</span> &mdash; <span class="dc-title">返回异常链中的前一个异常</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.getprevious-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766"><span class="type Throwable" style="color:#EAB766">Throwable</span></span> <span class="methodname" style="color:#CC7832"><strong>Exception::getPrevious</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    返回异常链中的前一个异常（<span class="methodname" style="color:#CC7832">{@link Exception::__construct()}</span>方法的第三个参数）。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.getprevious-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.getprevious-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回异常链中的前一个异常 <strong class="classname">Throwable</strong>，否则返回<strong><span>NULL</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-exception.getprevious-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         返回类型的定义改成了 <strong class="classname">Throwable</strong>。        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.getprevious-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-305">     <p><strong>Example #1 <span class="methodname" style="color:#CC7832"><strong>Exception::getPrevious()</strong></span>示例</strong></p>     <div class="example-contents"><p>      追踪异常，并循环打印。     </p></div>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #9876AA">MyCustomException&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #9876AA">Exception&nbsp;</span><span style="color: #007700">{}<br /><br />function&nbsp;</span><span style="color: #9876AA">doStuff</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">InvalidArgumentException</span><span style="color: #007700">(</span><span style="color: #DD0000">"You&nbsp;are&nbsp;doing&nbsp;it&nbsp;wrong!"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">112</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">MyCustomException</span><span style="color: #007700">(</span><span style="color: #DD0000">"Something&nbsp;happend"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">911</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">doStuff</span><span style="color: #007700">();<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s:%d&nbsp;%s&nbsp;(%d)&nbsp;[%s]\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getFile</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getLine</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getCode</span><span style="color: #007700">(),&nbsp;</span><span style="color: #9876AA">get_class</span><span style="color: #007700">(</span><span style="color: #9876AA">$e</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while(</span><span style="color: #9876AA">$e&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getPrevious</span><span style="color: #007700">());<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> /home/bjori/ex.php:8 Something happend (911) [MyCustomException] /home/bjori/ex.php:6 You are doing it wrong! (112) [InvalidArgumentException] </span></div>     </div>    </div>   </span>  </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.getprevious-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getPrevious()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return Exception the previous <b>Exception</b> if available*/
    final public function getPrevious() { }

/**
*<div id="exception.gettraceasstring" class="refentry">  <div class="refnamediv">   <h1 class="refname">Exception::getTraceAsString</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Exception::getTraceAsString</span> &mdash; <span class="dc-title">获取字符串类型的异常追踪信息</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-exception.gettraceasstring-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>Exception::getTraceAsString</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    以字符串类型返回异常追踪信息。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-exception.gettraceasstring-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-exception.gettraceasstring-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    以字符串类型返回异常追踪信息。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-exception.gettraceasstring-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="variable.post.basic">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Exception::getTraceAsString()</strong></span>示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">test</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">Exception</span><span style="color: #007700">;<br />}<br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">test</span><span style="color: #007700">();<br />}&nbsp;catch(</span><span style="color: #9876AA">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getTraceAsString</span><span style="color: #007700">();<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> #0 /home/bjori/tmp/ex.php(7): test() #1 {main} </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-exception.gettraceasstring-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="methodname" style="color:#CC7832"><strong>Throwable::getTraceAsString()</strong></span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.exception.php">Exception</a></div></div>
     * @return string the Exception stack trace as a string.*/
    final public function getTraceAsString() { }

    /**
     * String representation of the exception
     * @link http://php.net/manual/en/exception.tostring.php
     * @return string the string representation of the exception.
     * @since 5.1.0
     */
    public function __toString() { }

    public function __wakeup() { }
}

/**
 * Error is the base class for all internal PHP error exceptions.
 * @link http://php.net/manual/en/class.error.php
 * @since 7.0
 */
class Error implements Throwable {

    /**
     * Construct the error object.
     * @link http://php.net/manual/en/error.construct.php
     * @param string $message [optional] The Error message to throw.
     * @param int $code [optional] The Error code.
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining.
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
    }

    /***
     * Gets the message
     * @link http://php.net/manual/en/throwable.getmessage.php
     * @return string
     * @since 7.0
     */
    public final function getMessage()
    {
    }

    /**
     * Gets the exception code
     * @link http://php.net/manual/en/throwable.getcode.php
     * @return int <p>
     * Returns the exception code as integer in
     * {@see Exception} but possibly as other type in
     * {@see Exception} descendants (for example as
     * string in {@see PDOException}).
     * </p>
     * @since 7.0
     */
    public final function getCode(){}


    /**
     * Gets the file in which the exception occurred
     * @link http://php.net/manual/en/throwable.getfile.php
     * @return string Returns the name of the file from which the object was thrown.
     * @since 7.0
     */
    public final function getFile(){}


    /**
     * Gets the line on which the object was instantiated
     * @link http://php.net/manual/en/throwable.getline.php
     * @return int Returns the line number where the thrown object was instantiated.
     * @since 7.0
     */
    public final function getLine(){}


    /**
     * Gets the stack trace
     * @link http://php.net/manual/en/throwable.gettrace.php
     * @return array <p>
     * Returns the stack trace as an array in the same format as
     * {@see debug_backtrace()}.
     * </p>
     * @since 7.0
     */
    public final function getTrace(){}

    /**
     * Gets the stack trace as a string
     * @link http://php.net/manual/en/throwable.gettraceasstring.php
     * @return string Returns the stack trace as a string.
     * @since 7.0
     */
    public final function getTraceAsString(){}

    /**
     * Returns the previous Throwable
     * @link http://php.net/manual/en/throwable.getprevious.php
     * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
     * @since 7.0
     */
    public final function getPrevious(){}
    /**
     * Gets a string representation of the thrown object
     * @link http://php.net/manual/en/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString(){}

    /**
     * Clone the error
     * Error can not be clone, so this method results in fatal error.
     * @return void
     * @link http://php.net/manual/en/error.clone.php
     */
    private final function __clone(){}

    public function __wakeup(){}
}

/**
 * There are three scenarios where a TypeError may be thrown.
 * The first is where the argument type being passed to a function does not match its corresponding declared
 * parameter type. The second is where a value being returned from a function does not match the declared function return type. The third is where an
 * invalid number of arguments are passed to a built-in PHP function (strict mode only).
 * @link http://php.net/manual/en/class.typeerror.php
 * @since 7.0
 */
class TypeError extends Error {

}

/**
 * ParseError is thrown when an error occurs while parsing PHP code, such as when {@see eval()} is called.
 * @link http://php.net/manual/en/class.parseerror.php
 * @since 7.0
 */
class ParseError extends Error {

}

/**
 * AssertionError is thrown when an assertion made via {@see assert()} fails.
 * @link http://php.net/manual/en/class.assertionerror.php
 * @since 7.0
 */
class AssertionError extends Error {

}

/**
 * ArgumentCountError is thrown when too few arguments are passed to a user
 * defined routine.
 *
 * @since 7.1
 * @see https://php.net/migration71.incompatible#migration71.incompatible.too-few-arguments-exception
 */
class ArgumentCountError extends TypeError {}

/**
 * ArithmeticError is thrown when an error occurs while performing mathematical operations.
 * In PHP 7.0, these errors include attempting to perform a bitshift by a negative amount,
 * and any call to {@see intdiv()} that would result in a value outside the possible bounds of an integer.
 * @link http://php.net/manual/en/class.arithmeticerror.php
 * @since 7.0
 */
class ArithmeticError extends Error {

}

/**
 * DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
 * @link http://php.net/manual/en/class.divisionbyzeroerror.php
 * @since 7.0
 */
class DivisionByZeroError extends ArithmeticError {

}

/**
*<div id="class.errorexception" class="reference">  <h1 class="title">ErrorException</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="errorexception.intro">    <h2 class="title">简介</h2>    <p class="para">     错误异常。    </p>   </div>      <div class="section" id="errorexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ErrorException</strong>      </span>        <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.errorexception.php#errorexception.props.severity">$<var class="varname">severity</var></a></var>     ;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="constructorsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/errorexception.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$message</span><span class="initializer"> = &quot;&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$code</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$severity</span><span class="initializer"> = E_ERROR</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span><span class="initializer"> = __FILE__</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$lineno</span><span class="initializer"> = __LINE__</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.exception.php" class="type Exception" style="color:#EAB766">Exception</a></span> <span class="parameter" style="color:#2EACF9">$previous</span><span class="initializer"> = <strong><span>NULL</span></strong></span></span>   ]]]]]] )</div>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/errorexception.getseverity.php" class="methodname" style="color:#CC7832">getSeverity</a></span>     ( <span class="methodparam">void</span>    )</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">Throwable</span> <span class="methodname" style="color:#CC7832">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span>  <span class="methodname" style="color:#CC7832">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>     }</div>      </div>      <div class="section" id="errorexception.props">    <h2 class="title">属性</h2>    <dl>            <dt id="errorexception.props.severity"><var class="varname"><var class="varname">severity</var></var></dt>       <dd>        <p class="para">异常级别</p>      </dd>          </dl>    </div>     <div class="section" id="errorexception.examples">    <h2 class="title">范例</h2>    <p class="para">     <div class="example" id="variable.cookie.basic">      <p><strong>Example #1 使用<span class="function">{@link set_error_handler()}</span>函数将错误信息托管至ErrorException</strong></p>      <div class="example-contents">  <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">exception_error_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$errfile</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$errline&nbsp;</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">ErrorException</span><span style="color: #007700">(</span><span style="color: #9876AA">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$errfile</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$errline</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">set_error_handler</span><span style="color: #007700">(</span><span style="color: #DD0000">"exception_error_handler"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Trigger&nbsp;exception&nbsp;<br /></span><span style="color: #9876AA">strpos</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>       <div class="example-contents"><p>以上例程的输出类似于：</p></div>      <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Fatal error: Uncaught exception &#039;ErrorException&#039; with message &#039;Wrong parameter count for strpos()&#039; in /home/bjori/tmp/ex.php:8 Stack trace: #0 [internal function]: exception_error_handler(2, &#039;Wrong parameter...&#039;, &#039;/home/bjori/php...&#039;, 8, Array) #1 /home/bjori/php/cleandocs/test.php(8): strpos() #2 {main}   thrown in /home/bjori/tmp/ex.php on line 8 </span></div>      </div>     </div>    </p>   </div>    </div>                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ErrorException::__construct} — 构造一个异常（Exception）</li><li>{@link ErrorException::getSeverity} — 获取异常的严重程度</li></ul> <div class="up"><a href="http://php.net/manual/zh/reserved.exceptions.php">预定义异常</a></div></div>
*/
class ErrorException extends Exception {

    protected $severity;


    /**
     * Constructs the exception
     * @link http://php.net/manual/en/errorexception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param int $severity [optional] The severity level of the exception.
     * @param string $filename [optional] The filename where the exception is thrown.
     * @param int $lineno [optional] The line number where the exception is thrown.
     * @param Exception $previous [optional] The previous exception used for the exception chaining.
     * @since 5.1.0
     */
    public function __construct($message = "", $code = 0, $severity = 1, $filename = __FILE__, $lineno = __LINE__, $previous) { }

/**
*<div id="errorexception.getseverity" class="refentry">  <div class="refnamediv">   <h1 class="refname">ErrorException::getSeverity</h1>   <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p><p class="refpurpose"><span class="refname">ErrorException::getSeverity</span> &mdash; <span class="dc-title">获取异常的严重程度</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-errorexception.getseverity-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>ErrorException::getSeverity</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">   返回异常的严重程度。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-errorexception.getseverity-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-errorexception.getseverity-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">   返回异常的严重级别。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-errorexception.getseverity-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="variable.phperrormsg.basic">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">ErrorException::getSeverity()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #9876AA">ErrorException</span><span style="color: #007700">(</span><span style="color: #DD0000">"Exception&nbsp;message"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">E_USER_ERROR</span><span style="color: #007700">);<br />}&nbsp;catch(</span><span style="color: #9876AA">ErrorException&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"This&nbsp;exception&nbsp;severity&nbsp;is:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getSeverity</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getSeverity</span><span style="color: #007700">()&nbsp;===&nbsp;</span><span style="color: #9876AA">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> This exception severity is: 256 bool(true) </span></div>     </div>    </div>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.errorexception.php">ErrorException</a></div></div>
     * @return int the severity level of the exception.*/
    final public function getSeverity() { }
}

/**
*<div id="class.closure" class="reference">   <h1 class="title">Closure 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p>     <div class="section" id="closure.intro">    <h2 class="title">简介</h2>    <p class="para">     用于代表 <a href="http://php.net/manual/zh/functions.anonymous.php" class="link">匿名函数</a>     的类.    </p>     <p class="para">     匿名函数（在 PHP 5.3 中被引入）会产生这个类型的对象。在过去，这个类被认为是一个实现细节，但现在可以依赖它做一些事情。自     PHP 5.4 起，这个类带有一些方法，允许在匿名函数创建后对其进行更多的控制。    </p>     <p class="para">     除了此处列出的方法，还有一个     <em>__invoke</em> 方法。这是为了与其他实现了     <a href="http://php.net/manual/zh/language.oop5.magic.php#language.oop5.magic.invoke" class="link">__invoke()魔术方法</a>     的对象保持一致性，但调用匿名函数的过程与它无关。    </p>    </div>     <div class="section" id="closure.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">Closure</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/closure.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">Closure</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/closure.bind.php" class="methodname" style="color:#CC7832">bind</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.closure.php" class="type Closure" style="color:#EAB766">Closure</a></span> <span class="parameter" style="color:#2EACF9">$closure</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">object</span> <span class="parameter" style="color:#2EACF9">$newthis</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$newscope</span>    <span class="initializer"> = &#039;static&#039;</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">Closure</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/closure.bindto.php" class="methodname" style="color:#CC7832">bindTo</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">object</span> <span class="parameter" style="color:#2EACF9">$newthis</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$newscope</span>    <span class="initializer"> = &#039;static&#039;</span></span>   ] )</div>     }</div>     </div>   </div>                                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link Closure::__construct} — 用于禁止实例化的构造函数</li><li>{@link Closure::bind} — 复制一个闭包，绑定指定的$this对象和类作用域。</li><li>{@link Closure::bindTo} — 复制当前闭包对象，绑定指定的$this对象和类作用域。</li></ul> <div class="up"><a href="http://php.net/manual/zh/reserved.interfaces.php">预定义接口</a></div></div>
*/
final class Closure {

    /**
     * This method exists only to disallow instantiation of the Closure class.
     * Objects of this class are created in the fashion described on the anonymous functions page.
     * @link http://www.php.net/manual/en/closure.construct.php
     */
    private function __construct() { }

    /**
     * This is for consistency with other classes that implement calling magic,
     * as this method is not used for calling the function.
     * @param mixed $_ [optional]
     * @return mixed
     * @link http://www.php.net/manual/en/class.closure.php
     */
    public function __invoke(...$_) { }

/**
*<div id="closure.bindto" class="refentry">  <div class="refnamediv">   <h1 class="refname">Closure::bindTo</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">Closure::bindTo</span> &mdash; <span class="dc-title">    复制当前闭包对象，绑定指定的$this对象和类作用域。   </span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-closure.bindto-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.closure.php" class="type Closure" style="color:#EAB766">Closure</a></span> <span class="methodname" style="color:#CC7832"><strong>Closure::bindTo</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">object</span> <span class="parameter" style="color:#2EACF9">$newthis</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$newscope</span>    <span class="initializer"> = &#039;static&#039;</span></span>   ] )</div>    <p class="para rdfs-comment">    创建并返回一个 <a href="http://php.net/manual/zh/functions.anonymous.php" class="link">匿名函数</a>，    它与当前对象的函数体相同、绑定了同样变量，但可以绑定不同的对象，也可以绑定新的类作用域。   </p>    <p class="para">    “绑定的对象”决定了函数体中的 <em>$this</em>    的取值，“类作用域”代表一个类型、决定在这个匿名函数中能够调用哪些 私有 和 保护 的方法。    也就是说，此时 $this 可以调用的方法，与 <span class="parameter" style="color:#2EACF9">newscope</span> 类的成员函数是相同的。   </p>    <p class="para">    静态闭包不能有绑定的对象（    <span class="parameter" style="color:#2EACF9">newthis</span> 参数的值应该设为    <strong><span>NULL</span></strong>）不过仍然可以用 bubdTo 方法来改变它们的类作用域。   </p>    <p class="para">    This function will ensure that for a non-static closure, having a bound    instance will imply being scoped and vice-versa. To this end,    non-static closures that are given a scope but a <strong><span>NULL</span></strong> instance are made    static and non-static non-scoped closures that are given a non-null    instance are scoped to an unspecified class.   </p>    <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     如果你只是想要复制一个匿名函数，可以用     <a href="http://php.net/manual/zh/language.oop5.cloning.php" class="link">cloning</a> 代替。    </p>   </p></blockquote>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-closure.bindto-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <span class="parameter" style="color:#2EACF9">newthis</span></dt>      <dd>       <span>       绑定给匿名函数的一个对象，或者       <strong><span>NULL</span></strong> 来取消绑定。      </span>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">newscope</span></dt>      <dd>       <p class="para">       关联到匿名函数的类作用域，或者       &#039;static&#039; 保持当前状态。如果是一个对象，则使用这个对象的类型为心得类作用域。       这会决定绑定的对象的 保护、私有成员 方法的可见性。      </p>     </dd>        </dl>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-closure.bindto-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回新创建的 <a href="http://php.net/manual/zh/class.closure.php" class="classname">Closure</a> 对象     或者在失败时返回 <strong><span>FALSE</span></strong>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-closure.bindto-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-320">    <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Closure::bindTo()</strong></span> 实例</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #9876AA">A&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;</span><span style="color: #9876AA">__construct</span><span style="color: #007700">(</span><span style="color: #9876AA">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">val&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$val</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;</span><span style="color: #9876AA">getClosure</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//returns&nbsp;closure&nbsp;bound&nbsp;to&nbsp;this&nbsp;object&nbsp;and&nbsp;scope<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;function()&nbsp;{&nbsp;return&nbsp;</span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">val</span><span style="color: #007700">;&nbsp;};<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #9876AA">$ob1&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">A</span><span style="color: #007700">(</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$ob2&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">A</span><span style="color: #007700">(</span><span style="color: #9876AA">2</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$cl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$ob1</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getClosure</span><span style="color: #007700">();<br />echo&nbsp;</span><span style="color: #9876AA">$cl</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$cl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$cl</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">bindTo</span><span style="color: #007700">(</span><span style="color: #9876AA">$ob2</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">$cl</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> 1 2 </span></div>    </div>   </div>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-closure.bindto-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><a href="http://php.net/manual/zh/functions.anonymous.php" class="link">匿名函数</a></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link Closure::bind()} - 复制一个闭包，绑定指定的$this对象和类作用域。</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.closure.php">Closure</a></div></div>
     * @return Closure Returns the newly created Closure object or FALSE on failure*/
    function bindTo($newthis, $newscope = 'static') { }

/**
*<div id="closure.bind" class="refentry">  <div class="refnamediv">   <h1 class="refname">Closure::bind</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">Closure::bind</span> &mdash; <span class="dc-title">    复制一个闭包，绑定指定的$this对象和类作用域。   </span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-closure.bind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.closure.php" class="type Closure" style="color:#EAB766">Closure</a></span> <span class="methodname" style="color:#CC7832"><strong>Closure::bind</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.closure.php" class="type Closure" style="color:#EAB766">Closure</a></span> <span class="parameter" style="color:#2EACF9">$closure</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">object</span> <span class="parameter" style="color:#2EACF9">$newthis</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$newscope</span>    <span class="initializer"> = &#039;static&#039;</span></span>   ] )</div>    <p class="para rdfs-comment">    这个方法是 <span class="methodname" style="color:#CC7832">{@link Closure::bindTo()}</span> 的静态版本。查看它的文档获取更多信息。   </p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-closure.bind-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <span class="parameter" style="color:#2EACF9">closure</span></dt>      <dd>       <span>       需要绑定的匿名函数。      </span>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">newthis</span></dt>      <dd>       <p class="para">       需要绑定到匿名函数的对象，或者       <strong><span>NULL</span></strong> 创建未绑定的闭包。      </p>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">newscope</span></dt>      <dd>       <p class="para">       想要绑定给闭包的类作用域，或者 &#039;static&#039; 表示不改变。如果传入一个对象，则使用这个对象的类型名。       类作用域用来决定在闭包中 $this 对象的 私有、保护方法 的可见性。       The class scope to which associate the closure is to be associated, or       &#039;static&#039; to keep the current one. If an object is given, the type of the       object will be used instead. This determines the visibility of protected       and private methods of the bound object.      </p>     </dd>        </dl>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-closure.bind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回一个新的 <a href="http://php.net/manual/zh/class.closure.php" class="classname">Closure</a> 对象  或者在失败时返回 <strong><span>FALSE</span></strong>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-closure.bind-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-319">    <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">Closure::bind()</strong></span> 实例</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #9876AA">A&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;static&nbsp;</span><span style="color: #9876AA">$sfoo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #9876AA">$ifoo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">2</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">$cl1&nbsp;</span><span style="color: #007700">=&nbsp;static&nbsp;function()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">A</span><span style="color: #007700">::</span><span style="color: #9876AA">$sfoo</span><span style="color: #007700">;<br />};<br /></span><span style="color: #9876AA">$cl2&nbsp;</span><span style="color: #007700">=&nbsp;function()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">ifoo</span><span style="color: #007700">;<br />};<br /><br /></span><span style="color: #9876AA">$bcl1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">Closure</span><span style="color: #007700">::</span><span style="color: #9876AA">bind</span><span style="color: #007700">(</span><span style="color: #9876AA">$cl1</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'A'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$bcl2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">Closure</span><span style="color: #007700">::</span><span style="color: #9876AA">bind</span><span style="color: #007700">(</span><span style="color: #9876AA">$cl2</span><span style="color: #007700">,&nbsp;new&nbsp;</span><span style="color: #9876AA">A</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'A'</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">$bcl1</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #9876AA">$bcl2</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> 1 2 </span></div>    </div>   </div>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-closure.bind-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><a href="http://php.net/manual/zh/functions.anonymous.php" class="link">匿名函数</a></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link Closure::bindTo()} - 复制当前闭包对象，绑定指定的$this对象和类作用域。</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.closure.php">Closure</a></div></div>
     * @return Closure Returns the newly created Closure object or FALSE on failure*/
    static function bind(Closure $closure, $newthis, $newscope = 'static') { }

    /**
     * Temporarily binds the closure to newthis, and calls it with any given parameters.
     * @link http://php.net/manual/en/closure.call.php
     * @param object $newThis The object to bind the closure to for the duration of the call.
     * @param mixed $parameters [optional] Zero or more parameters, which will be given as parameters to the closure.
     * @return mixed
     * @since 7.0
     */
    function call ($newThis, ...$parameters) {}
    
    /**
     * @param callable $callable
     * @return Closure
     * @since 7.1
     */
    public static function fromCallable (callable $callable) {}
}

/**
 * Classes implementing <b>Countable</b> can be used with the
 * <b>count</b> function.
 * @link http://php.net/manual/en/class.countable.php
 */
interface Countable {

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count();
}
