<?php
/**
 * Extension stub file for PECL HTTP version 3.x
 * @author Katherine Rossiter <signe@users.noreply.github.com>
 * @see https://mdref.m6w6.name/http
 */

namespace http {

    interface Exception
    {
    }

    class QueryString implements \Serializable, \ArrayAccess, \IteratorAggregate
    {

        const TYPE_ARRAY  = 7;
        const TYPE_BOOL   = 13;
        const TYPE_FLOAT  = 5;
        const TYPE_INT    = 4;
        const TYPE_OBJECT = 8;
        const TYPE_STRING = 6;

        /**
         * The global instance. See http\QueryString::getGlobalInstance().
         * @var QueryString
         */
        private $instance;

        /**
         * The data
         * @var mixed[]
         */
        private $queryArray = null;

        /**
         * QueryString constructor.
         * @param string $querystring
         */
        public function __construct($querystring)
        {
        }

        /**
         * @return string
         */
        public function __toString()
        {
        }

        /**
         * Retrieve an querystring value
         * @param string $name
         * @param mixed $type
         * @param mixed $defval
         * @param bool $delete
         */
        public function get($name = null, $type = null, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve an array value at offset $name
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         * @return array
         */
        public function getArray($name, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve an array value at offset $name
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         * @return bool
         */
        public function getBool($name, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve an array value at offset $name
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         * @return float
         */
        public function getFloat($name, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve the global querystring instance referencing $_GET
         * @return QueryString
         */
        public static function getGlobalInstance()
        {
        }

        /**
         * Retrieve an array value at offset $name
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         * @return int
         */
        public function getInt($name, $defval = null, $delete = false)
        {
        }

        /**
         * @return \IteratorAggregate
         */
        public function getIterator()
        {
        }

        /**
         * Retrieve an array value at offset $name
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         */
        public function getObject($name, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve an array value at offset $name
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         * @return string
         */
        public function getString($name, $defval = null, $delete = false)
        {
        }

        /**
         * Set additional $params to a clone of this instance
         * @param mixed $params
         * @return QueryString
         */
        public function mod($params = null)
        {
        }

        public function offsetExists($offset)
        {
        }

        public function offsetGet($offset)
        {
        }

        public function offsetSet($offset, $value)
        {
        }

        public function offsetUnset($offset)
        {
        }

        public function serialize()
        {
        }

        /**
         * Set additional querystring entries
         * @param mixed $params
         * @return QueryString
         */
        public function set($params)
        {
        }

        /**
         * Returns http\QueryString::$queryArray
         * @return mixed[]
         */
        public function toArray()
        {
        }

        /**
         * Get the string represenation of the querystring (x-www-form-urlencoded)
         * @return string
         */
        public function toString()
        {
        }

        public function unserialize($serialized)
        {
        }

        /**
         * Translate character encodings of the querystring with ext/iconv
         * @param string $from_enc
         * @param string $to_enc
         * @return QueryString
         */
        public function xlate()
        {
        }
    }

    class Url
    {
        const FROM_ENV         = 0x1000;
        const IGNORE_ERRORS    = 0x10000000;
        const JOIN_PATH        = 0x1;
        const JOIN_QUERY       = 0x2;
        const PARSE_MBLOC      = 0x10000;
        const PARSE_MBUTF8     = 0x20000;
        const PARSE_TOIDN      = 0x100000;
        const PARSE_TOIDN_2003 = 0x900000;
        const PARSE_TOIDN_2008 = 0x500000;
        const PARSE_TOPCT      = 0x200000;
        const REPLACE          = 0x0;
        const SANITIZE_PATH    = 0x2000;
        const SILENT_ERRORS    = 0x20000000;
        const STDFLAGS         = 0x332003;
        const STRIP_ALL        = 0x1EC;
        const STRIP_AUTH       = 0xC;
        const STRIP_FRAGMENT   = 0x100;
        const STRIP_PASS       = 0x8;
        const STRIP_PATH       = 0x40;
        const STRIP_PORT       = 0x20;
        const STRIP_QUERY      = 0x80;
        const STRIP_USER       = 0x4;

        /** @var string */
        public $scheme = null;

        /** @var string */
        public $user = null;

        /** @var string */
        public $pass = null;

        /** @var string */
        public $host = null;

        /** @var string */
        public $port = null;

        /** @var string */
        public $path = null;

        /** @var string */
        public $query = null;

        /** @var string */
        public $fragment = null;

        /**
         * Url constructor.
         * @param mixed $old_url
         * @param mixed $new_url
         * @param int $flags
         */
        public function __construct($old_url = null, $new_url = null, $flags = 0)
        {
        }

        /**
         * Alias of Url::toString()
         */
        public function __toString()
        {
        }

        /**
         * Clone this URL and apply $parts to the cloned URL
         * @param mixed $parts
         * @param $flags
         * @return Url
         */
        public function mod($parts, $flags = http\Url::JOIN_PATH | http\Url::JOIN_QUERY | http\Url::SANITIZE_PATH)
        {
        }

        /**
         * Retrieve the URL parts as array
         * @return string[]
         */
        public function toArray()
        {
        }

        /**
         * Get the string prepresentation of the URL
         * @return string
         */
        public function toString()
        {
        }
    }
}

namespace http\Exception {

    class BadConversionException extends \DomainException implements \http\Exception
    {
    }

    class BadHeaderException extends \DomainException implements \http\Exception
    {
    }

    class BadMessageException extends \DomainException implements \http\Exception
    {
    }

/**
*<div id="class.badmethodcallexception" class="reference">  <h1 class="title">The BadMethodCallException class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="badmethodcallexception.intro">    <h2 class="title">简介</h2>    <p class="para">     当一个回调方法是一个未定义的方法或缺失一些参数时会抛出该异常。    </p>   </div>      <div class="section" id="badmethodcallexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">BadMethodCallException</strong>      </span>       <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.badfunctioncallexception.php" class="classname">BadFunctionCallException</a>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>     }</div>      </div>    </div>       <div class="up"><a href="http://php.net/manual/zh/spl.exceptions.php">异常</a></div></div>
*/
    class BadMethodCallException extends \BadMethodCallException implements \http\Exception
    {
    }

    class BadQueryStringException extends \DomainException implements \http\Exception
    {
    }

    class BadUrlException extends \DomainException implements \http\Exception
    {
    }

/**
*<div id="class.invalidargumentexception" class="reference">  <h1 class="title">The InvalidArgumentException class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="invalidargumentexception.intro">    <h2 class="title">简介</h2>    <p class="para">     Exception thrown if an argument is not of the expected type.    </p>   </div>      <div class="section" id="invalidargumentexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">InvalidArgumentException</strong>      </span>       <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.logicexception.php" class="classname">LogicException</a>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>     }</div>      </div>  </div>       <div class="up"><a href="http://php.net/manual/zh/spl.exceptions.php">异常</a></div></div>
*/
    class InvalidArgumentException extends \InvalidArgumentException implements \http\Exception
    {
    }

/**
*<div id="class.runtimeexception" class="reference">  <h1 class="title">The RuntimeException class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="runtimeexception.intro">    <h2 class="title">简介</h2>    <p class="para">     Exception thrown if an error which can only be found on runtime occurs.    </p>   </div>      <div class="section" id="runtimeexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">RuntimeException</strong>      </span>       <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>     }</div>      </div>    </div>       <div class="up"><a href="http://php.net/manual/zh/spl.exceptions.php">异常</a></div></div>
*/
    class RuntimeException extends \RuntimeException implements \http\Exception
    {
    }

/**
*<div id="class.unexpectedvalueexception" class="reference">  <h1 class="title">The UnexpectedValueException class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="unexpectedvalueexception.intro">    <h2 class="title">简介</h2>    <p class="para">     Exception thrown if a value does not match with a set of values. Typically     this happens when a function calls another function and expects the return     value to be of a certain type or value not including arithmetic or buffer     related errors.    </p>   </div>      <div class="section" id="unexpectedvalueexception.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">UnexpectedValueException</strong>      </span>       <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.runtimeexception.php" class="classname">RuntimeException</a>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>     }</div>      </div>    </div>       <div class="up"><a href="http://php.net/manual/zh/spl.exceptions.php">异常</a></div></div>
*/
    class UnexpectedValueException extends \UnexpectedValueException implements \http\Exception
    {
    }
}

namespace http\Env {

    class Request extends \http\Message
    {

        /**
         * The request’s query parameters. ($_GET)
         * @var http\QueryString
         */
        protected $query = null;

        /**
         * The request’s form parameters. ($_POST)
         * @var http\QueryString
         */
        protected $form = null;

        /**
         * The request’s form uploads. ($_FILES)
         * @var array
         */
        protected $files = null;

        /**
         * The request’s cookies. ($_COOKIE)
         * @var array
         */
        protected $cookie = null;

        public function __construct()
        {
        }

        /**
         * Retrieve an URL query value ($_GET)
         * @param string $name
         * @param mixed $type
         * @param mixed $defval
         * @param bool $delete
         * @return mixed
         */
        public function getCookie($name = null, $type = null, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve the uploaded files list ($_FILES)
         * @return array
         */
        public function getFiles()
        {
        }

        /**
         * Retrieve a form value ($_POST)
         * @param string $name
         * @param mixed $type
         * @param mixed $defval
         * @param bool $delete
         * @return mixed
         */
        public function getForm($name = null, $type = null, $defval = null, $delete = false)
        {
        }

        /**
         * Retrieve an URL query value ($_GET)
         * @param string $name
         * @param mixed $type
         * @param mixed $defval
         * @param bool $delete
         * @return mixed
         */
        public function getQuery($name = null, $type = null, $defval = null, $delete = false)
        {
        }
    }

    /**
     * Class Response
     * @package http\Env
     */
    class Response extends \http\Message
    {
        const CACHE_HIT  = 1;
        const CACHE_MISS = 2;
        const CACHE_NO   = 0;

        const CONTENT_ENCODING_GZIP = 1;
        const CONTENT_ENCODING_NONE = 0;

        /**
         * How the client should treat this response in regards to caching
         * @var string
         */
        protected $cacheControl = null;

        /**
         * The response’s cookies.
         * @var array
         */
        protected $cookies = null;

        /**
         * The response’s MIME content type
         * @var string
         */
        protected $contentType = null;

        /**
         * The response’s MIME content disposition
         * @var string
         */
        protected $contentDisposition = null;

        /**
         * See http\Env\Response::CONTENT_ENCODING_* constants
         * @var int
         */
        protected $contentEncoding = null;

        /**
         * A custom ETag
         * @var string
         */
        protected $etag = null;

        /**
         * A “Last-Modified” time stamp.
         * @var int
         */
        protected $lastModified = null;

        /**
         * A request instance which overrides the environments default request
         * @var \http\Env\Request
         */
        protected $request = null;

        /**
         * Any throttling delay.
         * @var int
         */
        protected $throttleDelay = null;

        /**
         * The chunk to send every $throttleDelay seconds.
         * @var int
         */
        protected $throttleChunk = null;

        public function __construct()
        {
        }

        /**
         * Output buffer handler
         * @param string $data
         * @param int $ob_flags
         * @return bool
         */
        public function __invoke($data, $ob_flags = 0)
        {
        }

        /**
         * @param string $header_name
         * @return int
         */
        public function isCachedByETag($header_name = 'If-None-Match')
        {
        }

        /**
         * @param string $header_name
         * @return int
         */
        public function isCachedByLastModified($header_name = 'If-Modified-Since')
        {
        }

        /**
         * Send the response through the SAPI or $stream
         * @param resource $stream
         * @return bool
         */
        public function send($stream = null)
        {
        }

        /**
         * Make suggestions to the client how it should cache the response
         * @param string $cache_control
         * @return Response
         */
        public function setCacheControl($cache_control)
        {
        }

        /**
         * Set the reponse’s content disposition parameters
         * @param array $disposition_params
         * @return Response
         */
        public function setContentDisposition($disposition_params)
        {
        }

        /**
         * Enable support for “Accept-Encoding” requests with deflate or gzip
         * @param int $content_encoding
         * @return Response
         */
        public function setContentEncoding($content_encoding)
        {
        }

        /**
         * Set the MIME content type of the response
         * @param string $content_type
         * @return Response
         */
        public function setContentType($content_type)
        {
        }

        /**
         * Add cookies to the response to send
         * @param mixed $cookie
         * @return Response
         */
        public function setCookie($cookie)
        {
        }

        /**
         * Override the environment’s request
         * @param \http\Message $env_request
         * @return Response
         */
        public function setEnvRequest($env_request)
        {
        }

        /**
         * Override the environment’s request
         * @param string $etag
         * @return Response
         */
        public function setEtag($etag)
        {
        }

        /**
         * Override the environment’s request
         * @param int $last_modified
         * @return Response
         */
        public function setLastModified($last_modified)
        {
        }

        /**
         * Override the environment’s request
         * @param int $chunk_size
         * @param float $delay
         * @return Response
         */
        public function setThrottleRate($chunk_size, $delay = 1)
        {
        }
    }

    class Url extends \http\Url
    {
    }
}
