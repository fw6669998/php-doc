<?php

/**
*<div id="class.v8js" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a> class</h1>     <div class="partintro"><p class="verinfo">(PECL v8js &gt;= 0.1.0)</p>     <div class="section" id="v8js.intro">    <h2 class="title">简介</h2>    <p class="para">     This is the core class for V8Js extension. Each instance created from     this class has own context in which all JavaScript is compiled and     executed.    </p>    <p class="para">     See <span class="function">{@link V8Js::__construct()}</span> for more information.    </p>   </div>     <div class="section" id="v8js.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">V8Js</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.v8js.php#v8js.constants.v8-version"><var class="varname">V8_VERSION</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.v8js.php#v8js.constants.flag-none"><var class="varname">FLAG_NONE</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.v8js.php#v8js.constants.flag-force-array"><var class="varname">FLAG_FORCE_ARRAY</var></a></var>      <span class="initializer"> = 2</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// Methods </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/v8js.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$object_name</span><span class="initializer"> = &quot;PHP&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$variables</span><span class="initializer"> = array()</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$extensions</span><span class="initializer"> = array()</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$report_uncaught_exceptions</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ]]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/v8js.executestring.php" class="methodname" style="color:#CC7832">executeString</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$script</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$identifier</span><span class="initializer"> = &quot;V8Js::executeString()&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span><span class="initializer"> = <strong><span>V8Js::FLAG_NONE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/v8js.getextensions.php" class="methodname" style="color:#CC7832">getExtensions</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">V8JsException</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/v8js.getpendingexception.php" class="methodname" style="color:#CC7832">getPendingException</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/v8js.registerextension.php" class="methodname" style="color:#CC7832">registerExtension</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension_name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$script</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$dependencies</span><span class="initializer"> = array()</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$auto_enable</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div>     }</div>     </div>       <div class="section" id="v8js.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="v8js.constants.v8-version"><strong><span>V8Js::V8_VERSION</span></strong></dt>       <dd>        <p class="para">The V8 Javascript Engine version.</p>      </dd>                  <dt id="v8js.constants.flag-none"><strong><span>V8Js::FLAG_NONE</span></strong></dt>       <dd>        <p class="para">No flags.</p>      </dd>                  <dt id="v8js.constants.flag-force-array"><strong><span>V8Js::FLAG_FORCE_ARRAY</span></strong></dt>       <dd>        <p class="para">Forces all JS objects to be associative arrays in PHP.</p>      </dd>           </dl>    </div>     </div>                                        <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link V8Js::__construct} — Construct a new V8Js object</li><li>{@link V8Js::executeString} — Execute a string as Javascript code</li><li>{@link V8Js::getExtensions} — Return an array of registered extensions</li><li>{@link V8Js::getPendingException} — Return pending uncaught Javascript exception</li><li>{@link V8Js::registerExtension} — Register Javascript extensions for V8Js</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.v8js.php">V8js</a></div></div>
*/
class V8Js
{
    /* Constants */

    const V8_VERSION = '';

    const FLAG_NONE = 1;
    const FLAG_FORCE_ARRAY = 2;
    const FLAG_PROPAGATE_PHP_EXCEPTIONS = 4;

    /* Methods */

    /**
     * Initializes and starts V8 engine and returns new V8Js object with it's own V8 context.
     * Snapshots are supported by V8 4.3.7 and higher.
     * @param string $object_name
     * @param array $variables
     * @param array $extensions
     * @param bool $report_uncaught_exceptions
     * @param string $snapshot_blob
     */
    public function __construct($object_name = "PHP", array $variables = [], array $extensions = [], $report_uncaught_exceptions = TRUE, $snapshot_blob = NULL)
    {}

    /**
     * Provide a function or method to be used to load required modules. This can be any valid PHP callable.
     * The loader function will receive the normalised module path and should return Javascript code to be executed.
     * @param callable $loader
     */
    public function setModuleLoader(callable $loader)
    {}

    /**
     * Provide a function or method to be used to normalise module paths. This can be any valid PHP callable.
     * This can be used in combination with setModuleLoader to influence normalisation of the module path (which
     * is normally done by V8Js itself but can be overriden this way).
     * The normaliser function will receive the base path of the current module (if any; otherwise an empty string)
     * and the literate string provided to the require method and should return an array of two strings (the new
     * module base path as well as the normalised name).  Both are joined by a '/' and then passed on to the
     * module loader (unless the module was cached before).
     * @param callable $normaliser
     */
    public function setModuleNormaliser(callable $normaliser)
    {}

/**
*<div id="v8js.executestring" class="refentry">  <div class="refnamediv">   <h1 class="refname">V8Js::executeString</h1>   <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::executeString</span> &mdash; <span class="dc-title">Execute a string as Javascript code</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-v8js.executestring-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>V8Js::executeString</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$script</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$identifier</span><span class="initializer"> = &quot;V8Js::executeString()&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span><span class="initializer"> = <strong><span>V8Js::FLAG_NONE</span></strong></span></span>   ]] )</div>    <p class="para rdfs-comment">    Compiles and executes the string passed with <span class="parameter" style="color:#2EACF9">script</span> as Javascript code.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-v8js.executestring-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <span class="parameter" style="color:#2EACF9">script</span></dt>      <dd>       <span>       The code string to be executed.      </span>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">identifier</span></dt>      <dd>       <p class="para">       Identifier string for the executed code. Used for debugging.      </p>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">flags</span></dt>      <dd>       <p class="para">       Execution flags. This value must be one of the       <em>V8Js::FLAG_*</em> constants, defaulting to       <strong><span>V8Js::FLAG_NONE</span></strong>.       <ul class="itemizedlist">         <li class="listitem">          <p class="para">           <strong><span>V8Js::FLAG_NONE</span></strong>: no flags          </p>         </li>         <li class="listitem">          <p class="para">           <strong><span>V8Js::FLAG_FORCE_ARRAY</span></strong>: forces all Javascript           objects passed to PHP to be associative arrays          </p>         </li>       </ul>      </p>     </dd>        </dl>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-v8js.executestring-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the last variable instantiated in the Javascript code converted to matching PHP variable type.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/class.v8js.php">V8Js</a></div></div>
     * @return mixed*/
    public function executeString($script, $identifier = '', $flags = V8Js::FLAG_NONE, $time_limit = 0, $memory_limit = 0)
    {}

    /**
     * Compiles a script in object's context with optional identifier string.
     * @param $script
     * @param string $identifier
     * @return resource
     */
    public function compileString($script, $identifier = '')
    {}

    /**
     * Executes a precompiled script in object's context.
     * A time limit (milliseconds) and/or memory limit (bytes) can be provided to restrict execution. These options will throw a V8JsTimeLimitException or V8JsMemoryLimitException.
     * @param resource $script
     * @param int $flags
     * @param int $time_limit
     * @param int $memory_limit
     */
    public function executeScript($script, $flags = V8Js::FLAG_NONE, $time_limit = 0 , $memory_limit = 0)
    {}

    /**
     * Set the time limit (in milliseconds) for this V8Js object
     * works similar to the set_time_limit php
     * @param int $limit
     */
    public function setTimeLimit($limit)
    {}

    /**
     * Set the memory limit (in bytes) for this V8Js object
     * @param int $limit
     */
    public function setMemoryLimit($limit)
    {}

    /**
     * Set the average object size (in bytes) for this V8Js object.
     * V8's "amount of external memory" is adjusted by this value for every exported object.  V8 triggers a garbage collection once this totals to 192 MB.
     * @param int $average_object_size
     */
    public function setAverageObjectSize($average_object_size)
    {}

/**
*<div id="v8js.getpendingexception" class="refentry">  <div class="refnamediv">   <h1 class="refname">V8Js::getPendingException</h1>   <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::getPendingException</span> &mdash; <span class="dc-title">Return pending uncaught Javascript exception</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-v8js.getpendingexception-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.v8jsexception.php" class="type V8JsException" style="color:#EAB766">V8JsException</a></span> <span class="methodname" style="color:#CC7832"><strong>V8Js::getPendingException</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Returns any pending uncaught Javascript exception as <a href="http://php.net/manual/zh/class.v8jsexception.php" class="classname">V8JsException</a>    left from earlier <span class="function">{@link V8Js::executeString()}</span> call(s).   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-v8js.getpendingexception-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-v8js.getpendingexception-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Either <a href="http://php.net/manual/zh/class.v8jsexception.php" class="classname">V8JsException</a> or <strong><span>NULL</span></strong>.   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.v8js.php">V8Js</a></div></div>
     * @return V8JsScriptException|null*/
    public function getPendingException()
    {}

    /**
     * Clears the uncaught pending exception
     */
    public function clearPendingException()
    {}

    /** Static methods **/

/**
*<div id="v8js.registerextension" class="refentry">  <div class="refnamediv">   <h1 class="refname">V8Js::registerExtension</h1>   <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::registerExtension</span> &mdash; <span class="dc-title">Register Javascript extensions for V8Js</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-v8js.registerextension-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>V8Js::registerExtension</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$extension_name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$script</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$dependencies</span><span class="initializer"> = array()</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$auto_enable</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div>    <p class="para rdfs-comment">    Registers passed Javascript <span class="parameter" style="color:#2EACF9">script</span> as extension to    be used in <a href="http://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a> contexts.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-v8js.registerextension-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <span class="parameter" style="color:#2EACF9">extension_name</span></dt>      <dd>       <span>       Name of the extension to be registered.      </span>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">script</span></dt>      <dd>       <p class="para">       The Javascript code to be registered.      </p>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">dependencies</span></dt>      <dd>       <p class="para">       Array of extension names the extension to be registered depends on. Any such extension is       enabled automatically when this extension is loaded.       <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:         <p class="para">         All extensions, including the dependencies, must be registered before any <a href="http://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a>         are created which use them.        </p>       </p></blockquote>      </p>     </dd>              <dt> <span class="parameter" style="color:#2EACF9">auto_enable</span></dt>      <dd>       <p class="para">       If set to <strong><span>TRUE</span></strong>, the extension will be enabled automatically in all <a href="http://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a> contexts.      </p>     </dd>        </dl>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-v8js.registerextension-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns <strong><span>TRUE</span></strong> if extension was registered successfully, <strong><span>FALSE</span></strong> otherwise.   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/class.v8js.php">V8Js</a></div></div>
     * @return bool*/
    public static function registerExtension($extension_name, $code, array $dependencies, $auto_enable = FALSE)
    {}

/**
*<div id="v8js.getextensions" class="refentry">  <div class="refnamediv">   <h1 class="refname">V8Js::getExtensions</h1>   <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::getExtensions</span> &mdash; <span class="dc-title">Return an array of registered extensions</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-v8js.getextensions-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>V8Js::getExtensions</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    This function returns array of Javascript extensions registered using <span class="function">{@link V8Js::registerExtension()}</span>.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-v8js.getextensions-parameters">   <h3 class="title">参数</h3>   <span>此函数没有参数。</span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-v8js.getextensions-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns an array of registered extensions or an empty array if there are none.   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.v8js.php">V8Js</a></div></div>
     * @return array|string[]*/
    public static function getExtensions()
    {}

    /**
     * Creates a custom V8 heap snapshot with the provided JavaScript source embedded.
     * Snapshots are supported by V8 4.3.7 and higher.  For older versions of V8 this
     * extension doesn't provide this method.
     * @param string $embed_source
     * @return string|false
     */
    public static function createSnapshot($embed_source)
    {}
}

final class V8JsScriptException extends Exception
{
    /**
     * @return string
     */
    final public function getJsFileName( ) {}

    /**
     * @return int
     */
    final public function getJsLineNumber( ) {}
    /**
     * @return int
     */
    final public function getJsStartColumn( ) {}
    /**
     * @return int
     */
    final public function getJsEndColumn( ) {}

    /**
     * @return string
     */
    final public function getJsSourceLine( ) {}
    /**
     * @return string
     */
    final public function getJsTrace( ) {}
}

final class V8JsTimeLimitException extends Exception
{
}

final class V8JsMemoryLimitException extends Exception
{
}
