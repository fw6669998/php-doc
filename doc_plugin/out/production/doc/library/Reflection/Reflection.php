<?php

// Start of Reflection v.$Revision: 307971 $

/**
*<div id="class.reflectionexception" class="reference">   <h1 class="title">ReflectionException 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionexception.intro">    <h2 class="title">简介</h2>    <p class="para">     ReflectionException 类。    </p>   </div>     <div class="section" id="reflectionexception.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionException</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>      </div>  <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionException extends Exception  {

}

/**
*<div id="class.reflection" class="reference">   <h1 class="title">Reflection 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflection.intro">    <h2 class="title">简介</h2>    <p class="para">     反射（reflection）类。    </p>   </div>     <div class="section" id="reflection.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">Reflection</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflection.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.reflector.php" class="type Reflector">Reflector</a></span> <code class="parameter">$reflector</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code><span class="initializer"> = false</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflection.getmodifiernames.php" class="methodname">getModifierNames</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$modifiers</code></span>    )</div>     }</div>     </div>   </div>                       <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link Reflection::export} — Exports</li><li>{@link Reflection::getModifierNames} — 获取修饰符的名称</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class Reflection  {

	/**
	 * Gets modifier names
	 * @link http://php.net/manual/en/reflection.getmodifiernames.php
	 * @param int $modifiers <p>
	 * The modifiers to get, which is from a numeric value.
	 * </p>
	 * @return array An array of modifier names.
	 * @since 5.0
	 */
	public static function getModifierNames ($modifiers) {}

	/**
	 * Exports
	 * @link http://php.net/manual/en/reflection.export.php
	 * @param Reflector $reflector <p>
	 * The reflection to export.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 * @since 5.0
	 */
	public static function export (Reflector $reflector, $return = false) {}

}

/**
 * <b>Reflector</b> is an interface implemented by all
 * exportable Reflection classes.
 * @link http://php.net/manual/en/class.reflector.php
 */
interface Reflector  {

	/**
	 * Exports
	 * @link http://php.net/manual/en/reflector.export.php
	 * @return string
	 * @since 5.0
	 */
	static function export ();

	/**
	 * To string
	 * @link http://php.net/manual/en/reflector.tostring.php
	 * @return string 
	 * @since 5.0
	 */
	function __toString ();

}

/**
*<div id="class.reflectionfunctionabstract" class="reference">   <h1 class="title">ReflectionFunctionAbstract 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7)</p>     <div class="section" id="reflectionfunctionabstract.intro">    <h2 class="title">简介</h2>    <p class="para">     {@link ReflectionFunction} 的父类，详情请阅读它的描述。    </p>   </div>     <div class="section" id="reflectionfunctionabstract.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionFunctionAbstract</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionfunctionabstract.php#reflectionfunctionabstract.props.name">$<var class="varname">name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getclosurescopeclass.php" class="methodname">getClosureScopeClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getclosurethis.php" class="methodname">getClosureThis</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getdoccomment.php" class="methodname">getDocComment</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getendline.php" class="methodname">getEndLine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionExtension</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getextension.php" class="methodname">getExtension</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getextensionname.php" class="methodname">getExtensionName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getfilename.php" class="methodname">getFileName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getnamespacename.php" class="methodname">getNamespaceName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getnumberofparameters.php" class="methodname">getNumberOfParameters</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getnumberofrequiredparameters.php" class="methodname">getNumberOfRequiredParameters</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getparameters.php" class="methodname">getParameters</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionType</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getreturntype.php" class="methodname">getReturnType</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getshortname.php" class="methodname">getShortName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getstartline.php" class="methodname">getStartLine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.getstaticvariables.php" class="methodname">getStaticVariables</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.hasreturntype.php" class="methodname">hasReturnType</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.innamespace.php" class="methodname">inNamespace</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.isclosure.php" class="methodname">isClosure</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.isdeprecated.php" class="methodname">isDeprecated</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.isgenerator.php" class="methodname">isGenerator</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.isinternal.php" class="methodname">isInternal</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.isuserdefined.php" class="methodname">isUserDefined</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.isvariadic.php" class="methodname">isVariadic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.returnsreference.php" class="methodname">returnsReference</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionfunctionabstract.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionfunctionabstract.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionfunctionabstract.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        函数的名称。只读，尝试赋值的时候将会抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>     </div>                                                                                                                                                                                                                                                <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionFunctionAbstract::__clone} — 复制函数</li><li>{@link ReflectionFunctionAbstract::getClosureScopeClass} — Returns the scope associated to the closure</li><li>{@link ReflectionFunctionAbstract::getClosureThis} — 返回本身的匿名函数</li><li>{@link ReflectionFunctionAbstract::getDocComment} — 获取注释内容</li><li>{@link ReflectionFunctionAbstract::getEndLine} — 获取结束行号</li><li>{@link ReflectionFunctionAbstract::getExtension} — 获取扩展信息</li><li>{@link ReflectionFunctionAbstract::getExtensionName} — 获取扩展名称</li><li>{@link ReflectionFunctionAbstract::getFileName} — 获取文件名称</li><li>{@link ReflectionFunctionAbstract::getName} — 获取函数名称</li><li>{@link ReflectionFunctionAbstract::getNamespaceName} — 获取命名空间</li><li>{@link ReflectionFunctionAbstract::getNumberOfParameters} — 获取参数数目</li><li>{@link ReflectionFunctionAbstract::getNumberOfRequiredParameters} — 获取必须输入参数个数</li><li>{@link ReflectionFunctionAbstract::getParameters} — 获取参数</li><li>{@link ReflectionFunctionAbstract::getReturnType} — Gets the specified return type of a function</li><li>{@link ReflectionFunctionAbstract::getShortName} — 获取函数短名称</li><li>{@link ReflectionFunctionAbstract::getStartLine} — 获取开始行号</li><li>{@link ReflectionFunctionAbstract::getStaticVariables} — 获取静态变量</li><li>{@link ReflectionFunctionAbstract::hasReturnType} — Checks if the function has a specified return type</li><li>{@link ReflectionFunctionAbstract::inNamespace} — 检查是否处于命名空间</li><li>{@link ReflectionFunctionAbstract::isClosure} — 检查是否是匿名函数</li><li>{@link ReflectionFunctionAbstract::isDeprecated} — 检查是否已经弃用</li><li>{@link ReflectionFunctionAbstract::isGenerator} — 判断函数是否是一个生成器函数</li><li>{@link ReflectionFunctionAbstract::isInternal} — 判断函数是否是内置函数</li><li>{@link ReflectionFunctionAbstract::isUserDefined} — 检查是否是用户定义</li><li>{@link ReflectionFunctionAbstract::isVariadic} — Checks if the function is variadic</li><li>{@link ReflectionFunctionAbstract::returnsReference} — 检查是否返回参考信息</li><li>{@link ReflectionFunctionAbstract::__toString} — 字符串化</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
abstract class ReflectionFunctionAbstract implements Reflector {
	public $name;


	/**
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void
	 * @since 5.0
	 */
	final private function __clone () {}

	/**
	 * To string
	 * @link http://php.net/manual/en/reflectionfunctionabstract.tostring.php
	 * @since 5.0
	 */
	abstract public function __toString ();

	/**
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool <b>TRUE</b> if it's in a namespace, otherwise <b>FALSE</b>
	 * @since 5.3.0
	 */
	public function inNamespace () {}

	/**
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool <b>TRUE</b> if it's a closure, otherwise <b>FALSE</b>
	 * @since 5.3.0
	 */
	public function isClosure () {}

	/**
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool <b>TRUE</b> if it's deprecated, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isDeprecated () {}

	/**
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool <b>TRUE</b> if it's internal, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isInternal () {}

	/**
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool <b>TRUE</b> if it's user-defined, otherwise false;
	 * @since 5.0
	 */
	public function isUserDefined () {}

	/**
	 * Returns this pointer bound to closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this pointer.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.0
	 */
	public function getClosureThis () {}

	/**
	 * Returns the scope associated to the closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass Returns the class on success.
	 * Returns <b>NULL</b> on failure.
	 * @since 5.4.0
	 */
	public function getClosureScopeClass () {}

	/**
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string|bool The doc comment if it exists, otherwise <b>FALSE</b>
	 * @since 5.1.0
	 */
	public function getDocComment () {}

	/**
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined function, or <b>FALSE</b> if unknown.
	 * @since 5.0
	 */
	public function getEndLine () {}

	/**
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a <b>ReflectionExtension</b> object.
	 * @since 5.0
	 */
	public function getExtension () {}

	/**
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 * @since 5.0
	 */
	public function getExtensionName () {}

	/**
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 * @since 5.0
	 */
	public function getFileName () {}

	/**
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 * @since 5.0
	 */
	public function getName () {}

	/**
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 * @since 5.3.0
	 */
	public function getNamespaceName () {}

	/**
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 * @since 5.0.3
	 */
	public function getNumberOfParameters () {}

	/**
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 * @since 5.0.3
	 */
	public function getNumberOfRequiredParameters () {}

	/**
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return ReflectionParameter[] The parameters, as a ReflectionParameter objects.
	 * @since 5.0
	 */
	public function getParameters () {}

	/**
	 * Gets the specified return type of a function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
	 * @return ReflectionType|NULL Returns a ReflectionType object if a return type is specified, NULL otherwise.
	 * @since 7.0
	 */
	public function getReturnType () {}

	/**
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 * @since 5.3.0
	 */
	public function getShortName () {}

	/**
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 * @since 5.0
	 */
	public function getStartLine () {}

	/**
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 * @since 5.0
	 */
	public function getStaticVariables () {}

	/**
	 * Checks if the function has a specified return type
	 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
	 * @return bool Returns TRUE if the function is a specified return type, otherwise FALSE.
	 * @since 7.0
	 */
	public function hasReturnType () {}

	/**
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool <b>TRUE</b> if it returns a reference, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function returnsReference () {}

	/**
	 * Returns whether this function is a generator
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
	 * @return bool <b>TRUE</b> if the function is generator, otherwise <b>FALSE</b>
	 * @since 5.5.0
	 */
	public function isGenerator() {}

	/**
	 * Returns whether this function is variadic
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
	 * @return bool <b>TRUE</b> if the function is variadic, otherwise <b>FALSE</b>
	 * @since 5.6.0
	 */
	public function isVariadic() {}
}

/**
*<div id="class.reflectionfunction" class="reference">   <h1 class="title">ReflectionFunction 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionfunction.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionFunction</strong> 类报告了一个函数的有关信息。    </p>   </div>     <div class="section" id="reflectionfunction.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionFunction</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.reflectionfunctionabstract.php" class="classname">ReflectionFunctionAbstract</a>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">IS_DEPRECATED</var>}</var>      <span class="initializer"> = 262144</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname">{@link $<var class="varname">name</var>}</var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname">{@link __construct}</span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname">{@link export}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$return</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">Closure</span> <span class="methodname">{@link getClosure}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname">{@link invoke}</span>     ([ <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname">{@link invokeArgs}</span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$args</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link isDisabled}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link __toString}</span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link ReflectionFunctionAbstract::__clone}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname">{@link ReflectionFunctionAbstract::getClosureScopeClass}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname">{@link ReflectionFunctionAbstract::getClosureThis}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getDocComment}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getEndLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionExtension</span> <span class="methodname">{@link ReflectionFunctionAbstract::getExtension}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getExtensionName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getFileName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getNamespaceName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getNumberOfParameters}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getNumberOfRequiredParameters}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionFunctionAbstract::getParameters}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionType</span> <span class="methodname">{@link ReflectionFunctionAbstract::getReturnType}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getShortName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getStartLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionFunctionAbstract::getStaticVariables}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::hasReturnType}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::inNamespace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isClosure}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isDeprecated}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isGenerator}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isInternal}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isUserDefined}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isVariadic}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::returnsReference}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">void</span> <span class="methodname">{@link ReflectionFunctionAbstract::__toString}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="reflectionfunction.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionfunction.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        函数的名称。只读，并在尝试赋值的时候会抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>         <div class="section" id="reflectionfunction.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="reflectionfunction.constants.modifiers">     <h2 class="title">ReflectionFunction 修饰符</h2>     <dl>               <dt id="reflectionfunction.constants.is-deprecated"><strong><code>ReflectionFunction::IS_DEPRECATED</code></strong></dt>        <dd>         <p class="para">         指示了不建议使用的函数。        </p>       </dd>             </dl>     </div>   </div>     </div>                                                      <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionFunction::__construct} — Constructs a ReflectionFunction object</li><li>{@link ReflectionFunction::export} — Exports function</li><li>{@link ReflectionFunction::getClosure} — Returns a dynamically created closure for the function</li><li>{@link ReflectionFunction::invoke} — Invokes function</li><li>{@link ReflectionFunction::invokeArgs} — Invokes function args</li><li>{@link ReflectionFunction::isDisabled} — Checks if function is disabled</li><li>{@link ReflectionFunction::__toString} — To string</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector {
	const IS_DEPRECATED = 262144;

	public $name;


	/**
	 * Constructs a ReflectionFunction object
	 * @link http://php.net/manual/en/reflectionfunction.construct.php
	 * @param mixed $name <p>
	 * The name of the function to reflect or a closure.
	 * </p>
	 * @throws \ReflectionException if the function does not exist.
	 * @since 5.0
	 */
	public function __construct ($name) {}

	/**
	 * To string
	 * @link http://php.net/manual/en/reflectionfunction.tostring.php
	 * @return string <b>ReflectionFunction::export</b>-like output for
	 * the function.
	 * @since 5.0
	 */
	public function __toString () {}

	/**
	 * Exports function
	 * @link http://php.net/manual/en/reflectionfunction.export.php
	 * @param string $name <p>
	 * The reflection to export.
	 * </p>
	 * @param string $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 * @since 5.0
	 */
	public static function export ($name, $return = null) {}

	/**
	 * Checks if function is disabled
	 * @link http://php.net/manual/en/reflectionfunction.isdisabled.php
	 * @return bool <b>TRUE</b> if it's disable, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isDisabled () {}

	/**
	 * Invokes function
	 * @link http://php.net/manual/en/reflectionfunction.invoke.php
	 * @param string $args [optional] <p>
	 * The passed in argument list. It accepts a variable number of
	 * arguments which are passed to the function much like
	 * call_user_func is.
	 * </p>
	 * @return mixed 
	 * @since 5.0
	 */
	public function invoke ($args = null) {}

	/**
	 * Invokes function args
	 * @link http://php.net/manual/en/reflectionfunction.invokeargs.php
	 * @param array $args <p>
	 * The passed arguments to the function as an array, much like
	 * <b>call_user_func_array</b> works.
	 * </p>
	 * @return mixed the result of the invoked function
	 * @since 5.1.0
	 */
	public function invokeArgs (array $args) {}

	/**
	 * Returns a dynamically created closure for the function
	 * @link http://php.net/manual/en/reflectionfunction.getclosure.php
	 * @return Closure <b>Closure</b>.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.0
	 */
	public function getClosure () {}

}

/**
*<div id="class.reflectionparameter" class="reference">   <h1 class="title">ReflectionParameter 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionparameter.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionParameter</strong> 取回了函数或方法参数的相关信息。    </p>    <p class="para">     要自行检查函数的参数，首先创建一个 {@link ReflectionFunction} 或 <a href="http://php.net/manual/zh/class.reflectionmethod.php" class="classname">ReflectionMethod</a> 的实例，然后使用它们的 <span class="methodname">{@link ReflectionFunctionAbstract::getParameters()}</span> 方法来获取参数的数组。    </p>   </div>     <div class="section" id="reflectionparameter.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionParameter</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionparameter.php#reflectionparameter.props.name">$<var class="varname">name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.allowsnull.php" class="methodname">allowsNull</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.canbepassedbyvalue.php" class="methodname">canBePassedByValue</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$function</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$parameter</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$function</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$parameter</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.getclass.php" class="methodname">getClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionFunctionAbstract</span> <span class="methodname">{@link getDeclaringFunction}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.getdefaultvalue.php" class="methodname">getDefaultValue</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.getdefaultvalueconstantname.php" class="methodname">getDefaultValueConstantName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.getposition.php" class="methodname">getPosition</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionType</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.gettype.php" class="methodname">getType</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.hastype.php" class="methodname">hasType</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.isarray.php" class="methodname">isArray</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.iscallable.php" class="methodname">isCallable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.isdefaultvalueavailable.php" class="methodname">isDefaultValueAvailable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.isdefaultvalueconstant.php" class="methodname">isDefaultValueConstant</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.isoptional.php" class="methodname">isOptional</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.ispassedbyreference.php" class="methodname">isPassedByReference</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.isvariadic.php" class="methodname">isVariadic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionparameter.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionparameter.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionparameter.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        参数的名称。只读，在尝试赋值的时候会抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>     </div>                                                                                                                                                                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionParameter::allowsNull} — Checks if null is allowed</li><li>{@link ReflectionParameter::canBePassedByValue} — Returns whether this parameter can be passed by value</li><li>{@link ReflectionParameter::__clone} — Clone</li><li>{@link ReflectionParameter::__construct} — Construct</li><li>{@link ReflectionParameter::export} — Exports</li><li>{@link ReflectionParameter::getClass} — 获得类型提示类。</li><li>{@link ReflectionParameter::getDeclaringClass} — Gets declaring class</li><li>{@link ReflectionParameter::getDeclaringFunction} — Gets declaring function</li><li>{@link ReflectionParameter::getDefaultValue} — Gets default parameter value</li><li>{@link ReflectionParameter::getDefaultValueConstantName} — Returns the default value's constant name if default value is constant or null</li><li>{@link ReflectionParameter::getName} — Gets parameter name</li><li>{@link ReflectionParameter::getPosition} — Gets parameter position</li><li>{@link ReflectionParameter::getType} — Gets a parameter's type</li><li>{@link ReflectionParameter::hasType} — Checks if parameter has a type</li><li>{@link ReflectionParameter::isArray} — Checks if parameter expects an array</li><li>{@link ReflectionParameter::isCallable} — Returns whether parameter MUST be callable</li><li>{@link ReflectionParameter::isDefaultValueAvailable} — 检查是否有默认值。</li><li>{@link ReflectionParameter::isDefaultValueConstant} — Returns whether the default value of this parameter is a constant</li><li>{@link ReflectionParameter::isOptional} — Checks if optional</li><li>{@link ReflectionParameter::isPassedByReference} — Checks if passed by reference</li><li>{@link ReflectionParameter::isVariadic} — Checks if the parameter is variadic</li><li>{@link ReflectionParameter::__toString} — To string</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionParameter implements Reflector {
	public $name;


	/**
	 * Clone
	 * @link http://php.net/manual/en/reflectionparameter.clone.php
	 * @return void
	 * @since 5.0
	 */
	final private function __clone () {}

	/**
	 * Exports
	 * @link http://php.net/manual/en/reflectionparameter.export.php
	 * @param string $function <p>
	 * The function name.
	 * </p>
	 * @param string $parameter <p>
	 * The parameter name.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string The exported reflection.
	 * @since 5.0
	 */
	public static function export ($function, $parameter, $return = null) {}

	/**
	 * Construct
	 * @link http://php.net/manual/en/reflectionparameter.construct.php
	 * @param string $function <p>
	 * The function to reflect parameters from.
	 * </p>
	 * @param string $parameter <p>
	 * The parameter.
	 * </p>
	 * @throws \ReflectionException if the function or parameter does not exist.
	 * @since 5.0
	 */
	public function __construct ($function, $parameter) {}

	/**
	 * To string
	 * @link http://php.net/manual/en/reflectionparameter.tostring.php
	 * @return string
	 * @since 5.0
	 */
	public function __toString () {}

	/**
	 * Gets parameter name
	 * @link http://php.net/manual/en/reflectionparameter.getname.php
	 * @return string The name of the reflected parameter.
	 * @since 5.0
	 */
	public function getName () {}

	/**
	 * Gets a parameter's type
	 * @link http://php.net/manual/en/reflectionparameter.gettype.php
	 * @return ReflectionType|NULL Returns a ReflectionType object if a parameter type is specified, NULL otherwise.
	 * @since 7.0
	 */
/**
*<div id="function.gettype" class="refentry">    <div class="refnamediv">     <h1 class="refname">gettype</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">gettype</span> &mdash; <span class="dc-title">获取变量的类型</span></p>     </div>    <div class="refsect1 unknown-unknown-unknown-unknown-seealss" id="refsect1-function.gettype-unknown-unknown-unknown-unknown-seealss">     <h3 class="title">描述</h3>      <div class="methodsynopsis dc-description">       <span class="type">string</span> <span class="methodname"><strong>gettype</strong></span>        ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>       )</div>      <p class="para rdfs-comment">      返回 PHP 变量的类型      <code class="parameter">var</code>.     </p>     <div class="warning"><strong class="warning">Warning</strong>      <p class="simpara">       不要使用 <span class="function"><strong>gettype()</strong></span>       来测试某种类型，因为其返回的字符串在未来的版本中可能需要改变。此外，由于包含了字符串的比较，它的运行也是较慢的。             </p>      <p class="simpara">       使用 <em>is_*</em> 函数代替。      </p>     </div>     <p class="para">      返回的字符串的可能值为：      <ul class="itemizedlist">       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span>”（从 PHP 4 起）</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type double">double</a></span>”（由于历史原因，如果是 <span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type float">float</a></span> 则返回“double”，而不是“float”）</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span>”</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>”（从 PHP 4 起）</span>       </li>       <li class="listitem">        <span class="simpara">“<span class="type"><a href="http://php.net/manual/zh/language.types.null.php" class="type NULL">NULL</a></span>”（从 PHP 4 起）</span>       </li>       <li class="listitem">        <span class="simpara">“user function”（只用于 PHP 3，现已停用）</span>       </li>       <li class="listitem">        <span class="simpara">“unknown type”</span>       </li>      </ul>     </p>     <p class="para">      对于 PHP 4，你应该使用 <span class="function">{@link function_exists()}</span>      和 <span class="function">{@link method_exists()}</span>      取代先前将 <span class="function"><strong>gettype()</strong></span>      作用于函数的用法。     </p>     <p class="para">      参见      <span class="function">{@link settype()}</span>、<span class="function">{@link is_array()}</span>、<span class="function">{@link is_bool()}</span>、<span class="function">{@link is_float()}</span>、<span class="function">{@link is_integer()}</span>、<span class="function">{@link is_null()}</span>、<span class="function">{@link is_numeric()}</span>、<span class="function">{@link is_object()}</span>、<span class="function">{@link is_resource()}</span>、<span class="function">{@link is_scalar()}</span>      和 <span class="function">{@link is_string()}</span>。     </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function getType() {}

	/**
	 * Checks if the parameter has a type associated with it.
	 * @link http://php.net/manual/en/reflectionparameter.hastype.php
	 * @return bool TRUE if a type is specified, FALSE otherwise.
	 * @since 7.0
	 */
	public function hasType () {}


	/**
	 * Checks if passed by reference
	 * @link http://php.net/manual/en/reflectionparameter.ispassedbyreference.php
	 * @return bool <b>TRUE</b> if the parameter is passed in by reference, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isPassedByReference () {}

	/**
	 * Returns whether this parameter can be passed by value
	 * @link http://php.net/manual/en/reflectionparameter.canbepassedbyvalue.php
	 * @return bool <b>TRUE</b> if the parameter can be passed by value, <b>FALSE</b> otherwise.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.4.0
	 */
	public function canBePassedByValue () {}

	/**
	 * Gets declaring function
	 * @link http://php.net/manual/en/reflectionparameter.getdeclaringfunction.php
	 * @return ReflectionFunctionAbstract A <b>ReflectionFunctionAbstract</b> object.
	 * @since 5.2.3
	 */
	public function getDeclaringFunction () {}

	/**
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionparameter.getdeclaringclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object.
	 * @since 5.0
	 */
	public function getDeclaringClass () {}

	/**
	 * Get class
	 * @link http://php.net/manual/en/reflectionparameter.getclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object.
	 * @since 5.0
	 */
	public function getClass () {}

	/**
	 * Checks if parameter expects an array
	 * @link http://php.net/manual/en/reflectionparameter.isarray.php
	 * @return bool <b>TRUE</b> if an array is expected, <b>FALSE</b> otherwise.
	 * @since 5.1.0
	 */
	public function isArray () {}

    /**
     * Returns whether parameter MUST be callable
     * @link http://php.net/manual/en/reflectionparameter.iscallable.php
     * @return bool Returns TRUE if the parameter is callable, FALSE if it is not or NULL on failure.
	 * @since 5.4.0
/**
*<div id="reflectionparameter.iscallable" class="refentry">  <div class="refnamediv">   <h1 class="refname">ReflectionParameter::isCallable</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">ReflectionParameter::isCallable</span> &mdash; <span class="dc-title">Returns whether parameter MUST be callable</span></p>   </div>   <div class="refsect1 description" id="refsect1-reflectionparameter.iscallable-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>ReflectionParameter::isCallable</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-reflectionparameter.iscallable-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-reflectionparameter.iscallable-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns <strong><code>TRUE</code></strong> if the parameter is <span class="type"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable">callable</a></span>, <strong><code>FALSE</code></strong> if it is    not or <strong><code>NULL</code></strong> on failure.   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/class.reflectionparameter.php">ReflectionParameter</a></div></div>
*/
    public function isCallable () {}

	/**
	 * Checks if null is allowed
	 * @link http://php.net/manual/en/reflectionparameter.allowsnull.php
	 * @return bool <b>TRUE</b> if <b>NULL</b> is allowed, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function allowsNull () {}

	/**
	 * Gets parameter position
	 * @link http://php.net/manual/en/reflectionparameter.getposition.php
	 * @return int The position of the parameter, left to right, starting at position #0.
	 * @since 5.2.3
	 */
	public function getPosition () {}

	/**
	 * Checks if optional
	 * @link http://php.net/manual/en/reflectionparameter.isoptional.php
	 * @return bool <b>TRUE</b> if the parameter is optional, otherwise <b>FALSE</b>
	 * @since 5.0.3
	 */
	public function isOptional () {}

	/**
	 * Checks if a default value is available
	 * @link http://php.net/manual/en/reflectionparameter.isdefaultvalueavailable.php
	 * @return bool <b>TRUE</b> if a default value is available, otherwise <b>FALSE</b>
	 * @since 5.0.3
	 */
	public function isDefaultValueAvailable () {}

	/**
	 * Gets default parameter value
	 * @link http://php.net/manual/en/reflectionparameter.getdefaultvalue.php
	 * @return mixed The parameters default value.
	 * @since 5.0.3
	 */
	public function getDefaultValue () {}

    /**
	 * Returns whether the default value of this parameter is constant
	 * @return boolean
	 * @since 5.4.6
/**
*<div id="reflectionparameter.isdefaultvalueconstant" class="refentry">  <div class="refnamediv">   <h1 class="refname">ReflectionParameter::isDefaultValueConstant</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.6, PHP 7)</p><p class="refpurpose"><span class="refname">ReflectionParameter::isDefaultValueConstant</span> &mdash; <span class="dc-title">Returns whether the default value of this parameter is a constant</span></p>   </div>   <div class="refsect1 description" id="refsect1-reflectionparameter.isdefaultvalueconstant-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>ReflectionParameter::isDefaultValueConstant</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Returns whether the default value of this parameter is a constant.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-reflectionparameter.isdefaultvalueconstant-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-reflectionparameter.isdefaultvalueconstant-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns <strong><code>TRUE</code></strong> if the default value is constant, and <strong><code>FALSE</code></strong> otherwise.   </p>  </div>    <div class="refsect1 seealso" id="refsect1-reflectionparameter.isdefaultvalueconstant-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="methodname">{@link ReflectionParameter::getDefaultValueConstantName()} - Returns the default value's constant name if default value is constant or null</span></li>     <li class="member"><span class="methodname">{@link ReflectionParameter::isDefaultValueAvailable()} - 检查是否有默认值。</span></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/class.reflectionparameter.php">ReflectionParameter</a></div></div>
*/
    public function isDefaultValueConstant () {}

    /**
	 * Returns the default value's constant name if default value is constant or null
     * @return string
	 * @since 5.4.6
     */
	public function getDefaultValueConstantName () {}

	/**
	 * Returns whether this function is variadic
	 * @link http://php.net/manual/en/reflectionparameter.isvariadic.php
	 * @return bool <b>TRUE</b> if the function is variadic, otherwise <b>FALSE</b>
	 * @since 5.6.0
	 */
	public function isVariadic() {}

}

/**
*<div id="class.reflectionmethod" class="reference">   <h1 class="title">ReflectionMethod 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionmethod.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionMethod</strong> 类报告了一个方法的有关信息。    </p>   </div>     <div class="section" id="reflectionmethod.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionMethod</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.reflectionfunctionabstract.php" class="classname">ReflectionFunctionAbstract</a>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.constants.is-static"><var class="varname">IS_STATIC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.constants.is-public"><var class="varname">IS_PUBLIC</var></a></var>      <span class="initializer"> = 256</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.constants.is-protected"><var class="varname">IS_PROTECTED</var></a></var>      <span class="initializer"> = 512</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.constants.is-private"><var class="varname">IS_PRIVATE</var></a></var>      <span class="initializer"> = 1024</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.constants.is-abstract"><var class="varname">IS_ABSTRACT</var></a></var>      <span class="initializer"> = 2</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.constants.is-final"><var class="varname">IS_FINAL</var></a></var>      <span class="initializer"> = 4</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.props.name">$<var class="varname">name</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionmethod.php#reflectionmethod.props.class">$<var class="varname">class</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$class</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$class</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code><span class="initializer"> = false</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">Closure</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.getclosure.php" class="methodname">getClosure</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.getmodifiers.php" class="methodname">getModifiers</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionMethod</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.getprototype.php" class="methodname">getPrototype</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.invoke.php" class="methodname">invoke</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$parameter</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.invokeargs.php" class="methodname">invokeArgs</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    , <span class="methodparam"><span class="type">array</span> <code class="parameter">$args</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isabstract.php" class="methodname">isAbstract</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isconstructor.php" class="methodname">isConstructor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isdestructor.php" class="methodname">isDestructor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isfinal.php" class="methodname">isFinal</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isprivate.php" class="methodname">isPrivate</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isprotected.php" class="methodname">isProtected</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.ispublic.php" class="methodname">isPublic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.isstatic.php" class="methodname">isStatic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.setaccessible.php" class="methodname">setAccessible</a></span>     ( <span class="methodparam"><span class="type">bool</span> <code class="parameter">$accessible</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionmethod.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link ReflectionFunctionAbstract::__clone}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname">{@link ReflectionFunctionAbstract::getClosureScopeClass}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname">{@link ReflectionFunctionAbstract::getClosureThis}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getDocComment}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getEndLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionExtension</span> <span class="methodname">{@link ReflectionFunctionAbstract::getExtension}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getExtensionName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getFileName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getNamespaceName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getNumberOfParameters}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getNumberOfRequiredParameters}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionFunctionAbstract::getParameters}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionType</span> <span class="methodname">{@link ReflectionFunctionAbstract::getReturnType}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionFunctionAbstract::getShortName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionFunctionAbstract::getStartLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionFunctionAbstract::getStaticVariables}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::hasReturnType}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::inNamespace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isClosure}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isDeprecated}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isGenerator}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isInternal}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isUserDefined}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::isVariadic}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionFunctionAbstract::returnsReference}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">void</span> <span class="methodname">{@link ReflectionFunctionAbstract::__toString}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="reflectionmethod.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionmethod.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">Method name</p>      </dd>                 <dt id="reflectionmethod.props.class"><var class="varname"><var class="varname">class</var></var></dt>       <dd>        <p class="para">Class name</p>      </dd>          </dl>    </div>       <div class="section" id="reflectionmethod.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="reflectionmethod.constants.modifiers">     <h2 class="title">ReflectionMethod 修饰符</h2>     <dl>               <dt id="reflectionmethod.constants.is-static"><strong><code>ReflectionMethod::IS_STATIC</code></strong></dt>        <dd>         <p class="para">指示一个方法是静态（static）的。</p>       </dd>                     <dt id="reflectionmethod.constants.is-public"><strong><code>ReflectionMethod::IS_PUBLIC</code></strong></dt>        <dd>         <p class="para">指示一个方法是 public 的。</p>       </dd>                     <dt id="reflectionmethod.constants.is-protected"><strong><code>ReflectionMethod::IS_PROTECTED</code></strong></dt>        <dd>         <p class="para">指示一个方法是 protected 的。</p>       </dd>                     <dt id="reflectionmethod.constants.is-private"><strong><code>ReflectionMethod::IS_PRIVATE</code></strong></dt>        <dd>         <p class="para">指示一个方法是 private 的。</p>       </dd>                     <dt id="reflectionmethod.constants.is-abstract"><strong><code>ReflectionMethod::IS_ABSTRACT</code></strong></dt>        <dd>         <p class="para">指示一个方法是 abstract 的。</p>       </dd>                     <dt id="reflectionmethod.constants.is-final"><strong><code>ReflectionMethod::IS_FINAL</code></strong></dt>        <dd>         <p class="para">指示一个方法是 final 的。</p>       </dd>             </dl>     </div>   </div>     </div>                                                                                                                                                                       <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionMethod::__construct} — ReflectionMethod 的构造函数</li><li>{@link ReflectionMethod::export} — 输出一个回调方法</li><li>{@link ReflectionMethod::getClosure} — 返回一个动态建立的方法调用接口，译者注：可以使用这个返回值直接调用非公开方法。</li><li>{@link ReflectionMethod::getDeclaringClass} — 获取反射函数调用参数的类表达</li><li>{@link ReflectionMethod::getModifiers} — 获取方法的修饰符</li><li>{@link ReflectionMethod::getPrototype} — 返回方法原型 (如果存在)</li><li>{@link ReflectionMethod::invoke} — Invoke</li><li>{@link ReflectionMethod::invokeArgs} — 带参数执行</li><li>{@link ReflectionMethod::isAbstract} — 判断方法是否是抽象方法</li><li>{@link ReflectionMethod::isConstructor} — 判断方法是否是构造方法</li><li>{@link ReflectionMethod::isDestructor} — 判断方法是否是析构方法</li><li>{@link ReflectionMethod::isFinal} — 判断方法是否定义 final</li><li>{@link ReflectionMethod::isPrivate} — 判断方法是否是私有方法</li><li>{@link ReflectionMethod::isProtected} — 判断方法是否是保护方法 (protected)</li><li>{@link ReflectionMethod::isPublic} — 判断方法是否是公开方法</li><li>{@link ReflectionMethod::isStatic} — 判断方法是否是静态方法</li><li>{@link ReflectionMethod::setAccessible} — 设置方法是否访问</li><li>{@link ReflectionMethod::__toString} — 返回反射方法对象的字符串表达</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;
	const IS_ABSTRACT = 2;
	const IS_FINAL = 4;

	public $name;
	public $class;


	/**
	 * Export a reflection method.
	 * @link http://php.net/manual/en/reflectionmethod.export.php
	 * @param string $class <p>
	 * The class name.
	 * </p>
	 * @param string $name <p>
	 * The name of the method.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 * @since 5.0
	 */
	public static function export ($class, $name, $return = false) {}

	/**
	 * Constructs a ReflectionMethod
	 * @link http://php.net/manual/en/reflectionmethod.construct.php
	 * @param mixed $class [optional] <p>
	 * Classname or object (instance of the class) that contains the method.
	 * </p>
	 * @param string $name <p>
	 * Name of the method, or the method FQN in the form 'Foo::bar' if $class argument missing
	 * </p>
	 * @throws \ReflectionException if the class or method does not exist.
	 * @since 5.0
	 */
	public function __construct ($class, $name) {}

	/**
	 * Returns the string representation of the Reflection method object.
	 * @link http://php.net/manual/en/reflectionmethod.tostring.php
	 * @return string A string representation of this <b>ReflectionMethod</b> instance.
	 * @since 5.0
	 */
	public function __toString () {}

	/**
	 * Checks if method is public
	 * @link http://php.net/manual/en/reflectionmethod.ispublic.php
	 * @return bool <b>TRUE</b> if the method is public, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isPublic () {}

	/**
	 * Checks if method is private
	 * @link http://php.net/manual/en/reflectionmethod.isprivate.php
	 * @return bool <b>TRUE</b> if the method is private, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isPrivate () {}

	/**
	 * Checks if method is protected
	 * @link http://php.net/manual/en/reflectionmethod.isprotected.php
	 * @return bool <b>TRUE</b> if the method is protected, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isProtected () {}

	/**
	 * Checks if method is abstract
	 * @link http://php.net/manual/en/reflectionmethod.isabstract.php
	 * @return bool <b>TRUE</b> if the method is abstract, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isAbstract () {}

	/**
	 * Checks if method is final
	 * @link http://php.net/manual/en/reflectionmethod.isfinal.php
	 * @return bool <b>TRUE</b> if the method is final, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isFinal () {}

	/**
	 * Checks if method is static
	 * @link http://php.net/manual/en/reflectionmethod.isstatic.php
	 * @return bool <b>TRUE</b> if the method is static, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isStatic () {}

	/**
	 * Checks if method is a constructor
	 * @link http://php.net/manual/en/reflectionmethod.isconstructor.php
	 * @return bool <b>TRUE</b> if the method is a constructor, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isConstructor () {}

	/**
	 * Checks if method is a destructor
	 * @link http://php.net/manual/en/reflectionmethod.isdestructor.php
	 * @return bool <b>TRUE</b> if the method is a destructor, otherwise <b>FALSE</b>
	 * @since 5.0
	 */
	public function isDestructor () {}

	/**
	 * Returns a dynamically created closure for the method
	 * @link http://php.net/manual/en/reflectionmethod.getclosure.php
	 * @param object $object [optional] Forbidden for static methods, required for other methods.
	 * @return Closure <b>Closure</b>.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.4.0
	 */
	public function getClosure ($object) {}

	/**
	 * Gets the method modifiers
	 * @link http://php.net/manual/en/reflectionmethod.getmodifiers.php
	 * @return int A numeric representation of the modifiers. The modifiers are listed below.
	 * The actual meanings of these modifiers are described in the
	 * predefined constants.
	 * <table>
	 * ReflectionMethod modifiers
	 * <tr valign="top">
	 * <td>value</td>
	 * <td>constant</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * ReflectionMethod::IS_STATIC
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * ReflectionMethod::IS_ABSTRACT
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>4</td>
	 * <td>
	 * ReflectionMethod::IS_FINAL
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>256</td>
	 * <td>
	 * ReflectionMethod::IS_PUBLIC
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>512</td>
	 * <td>
	 * ReflectionMethod::IS_PROTECTED
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1024</td>
	 * <td>
	 * ReflectionMethod::IS_PRIVATE
	 * </td>
	 * </tr>
	 * </table>
	 * @since 5.0
	 */
	public function getModifiers () {}

	/**
	 * Invoke
	 * @link http://php.net/manual/en/reflectionmethod.invoke.php
	 * @param object $object <p>
	 * The object to invoke the method on. For static methods, pass
	 * null to this parameter.
	 * </p>
	 * @param mixed $parameter [optional] <p>
	 * Zero or more parameters to be passed to the method.
	 * It accepts a variable number of parameters which are passed to the method.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return mixed the method result.
	 * @since 5.0
	 */
	public function invoke ($object, $parameter = null, $_ = null) {}

	/**
	 * Invoke args
	 * @link http://php.net/manual/en/reflectionmethod.invokeargs.php
	 * @param object $object <p>
	 * The object to invoke the method on. In case of static methods, you can pass
	 * null to this parameter.
	 * </p>
	 * @param array $args <p>
	 * The parameters to be passed to the function, as an array.
	 * </p>
	 * @return mixed the method result.
	 * @since 5.1.0
	 */
	public function invokeArgs ($object, array $args) {}

	/**
	 * Gets declaring class for the reflected method.
	 * @link http://php.net/manual/en/reflectionmethod.getdeclaringclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object of the class that the
	 * reflected method is part of.
	 * @since 5.0
	 */
	public function getDeclaringClass () {}

	/**
	 * Gets the method prototype (if there is one).
	 * @link http://php.net/manual/en/reflectionmethod.getprototype.php
	 * @return ReflectionMethod A <b>ReflectionMethod</b> instance of the method prototype.
	 * @since 5.0
	 */
	public function getPrototype () {}

	/**
	 * Set method accessibility
	 * @link http://php.net/manual/en/reflectionmethod.setaccessible.php
	 * @param bool $accessible <p>
	 * <b>TRUE</b> to allow accessibility, or <b>FALSE</b>.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.3.2
	 */
	public function setAccessible ($accessible) {}

}

/**
*<div id="class.reflectionclass" class="reference">   <h1 class="title">ReflectionClass 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionclass.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionClass</strong> 类报告了一个类的有关信息。    </p>   </div>     <div class="section" id="reflectionclass.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionClass</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.constants.is-implicit-abstract"><var class="varname">IS_IMPLICIT_ABSTRACT</var></a></var>      <span class="initializer"> = 16</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.constants.is-explicit-abstract"><var class="varname">IS_EXPLICIT_ABSTRACT</var></a></var>      <span class="initializer"> = 32</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.constants.is-final"><var class="varname">IS_FINAL</var></a></var>      <span class="initializer"> = 64</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.props.name">$<var class="varname">name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$argument</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$argument</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code><span class="initializer"> = false</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getconstant.php" class="methodname">getConstant</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getconstants.php" class="methodname">getConstants</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionMethod</span>  <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getconstructor.php" class="methodname">getConstructor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getdefaultproperties.php" class="methodname">getDefaultProperties</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getdoccomment.php" class="methodname">getDocComment</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getendline.php" class="methodname">getEndLine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionExtension</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getextension.php" class="methodname">getExtension</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getextensionname.php" class="methodname">getExtensionName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getfilename.php" class="methodname">getFileName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getinterfacenames.php" class="methodname">getInterfaceNames</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getinterfaces.php" class="methodname">getInterfaces</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionMethod</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getmethod.php" class="methodname">getMethod</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getmethods.php" class="methodname">getMethods</a></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$filter</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getmodifiers.php" class="methodname">getModifiers</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getnamespacename.php" class="methodname">getNamespaceName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getparentclass.php" class="methodname">getParentClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getproperties.php" class="methodname">getProperties</a></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$filter</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionProperty</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getproperty.php" class="methodname">getProperty</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClassConstant</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getreflectionconstant.php" class="methodname">getReflectionConstant</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getreflectionconstants.php" class="methodname">getReflectionConstants</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getshortname.php" class="methodname">getShortName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getstartline.php" class="methodname">getStartLine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getstaticproperties.php" class="methodname">getStaticProperties</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.getstaticpropertyvalue.php" class="methodname">getStaticPropertyValue</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter reference">&$def_value</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.gettraitaliases.php" class="methodname">getTraitAliases</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.gettraitnames.php" class="methodname">getTraitNames</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.gettraits.php" class="methodname">getTraits</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.hasconstant.php" class="methodname">hasConstant</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.hasmethod.php" class="methodname">hasMethod</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.hasproperty.php" class="methodname">hasProperty</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.implementsinterface.php" class="methodname">implementsInterface</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$interface</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.innamespace.php" class="methodname">inNamespace</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isabstract.php" class="methodname">isAbstract</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isanonymous.php" class="methodname">isAnonymous</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.iscloneable.php" class="methodname">isCloneable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isfinal.php" class="methodname">isFinal</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isinstance.php" class="methodname">isInstance</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isinstantiable.php" class="methodname">isInstantiable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isinterface.php" class="methodname">isInterface</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isinternal.php" class="methodname">isInternal</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isiterable.php" class="methodname">isIterable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isiterateable.php" class="methodname">isIterateable</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.issubclassof.php" class="methodname">isSubclassOf</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$class</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.istrait.php" class="methodname">isTrait</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.isuserdefined.php" class="methodname">isUserDefined</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.newinstance.php" class="methodname">newInstance</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$args</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.newinstanceargs.php" class="methodname">newInstanceArgs</a></span>     ([ <span class="methodparam"><span class="type">array</span> <code class="parameter">$args</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.newinstancewithoutconstructor.php" class="methodname">newInstanceWithoutConstructor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.setstaticpropertyvalue.php" class="methodname">setStaticPropertyValue</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclass.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionclass.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionclass.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        类的名称。只读，并在尝试赋值的时候会抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>         <div class="section" id="reflectionclass.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="reflectionclass.constants.modifiers">     <h2 class="title">ReflectionClass 修饰符</h2>     <dl>               <dt id="reflectionclass.constants.is-implicit-abstract"><strong><code>ReflectionClass::IS_IMPLICIT_ABSTRACT</code></strong></dt>        <dd>         <p class="para">         指示了类是一个<a href="http://php.net/manual/zh/language.oop5.abstract.php" class="link">抽象类（abstract）</a>，         因为它有抽象（abstract）方法。        </p>       </dd>                     <dt id="reflectionclass.constants.is-explicit-abstract"><strong><code>ReflectionClass::IS_EXPLICIT_ABSTRACT</code></strong></dt>        <dd>         <p class="para">         指示了类是一个<a href="http://php.net/manual/zh/language.oop5.abstract.php" class="link">抽象类（abstract）</a>，         因为它已明确定义。        </p>       </dd>                     <dt id="reflectionclass.constants.is-final"><strong><code>ReflectionClass::IS_FINAL</code></strong></dt>        <dd>         <p class="para">         指示这是一个 <a href="http://php.net/manual/zh/language.oop5.final.php" class="link">final</a> 类。        </p>       </dd>             </dl>     </div>   </div>     </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionClass::__construct} — 初始化 ReflectionClass 类</li><li>{@link ReflectionClass::export} — 导出一个类</li><li>{@link ReflectionClass::getConstant} — 获取定义过的一个常量</li><li>{@link ReflectionClass::getConstants} — 获取一组常量</li><li>{@link ReflectionClass::getConstructor} — 获取类的构造函数</li><li>{@link ReflectionClass::getDefaultProperties} — 获取默认属性</li><li>{@link ReflectionClass::getDocComment} — 获取文档注释</li><li>{@link ReflectionClass::getEndLine} — 获取最后一行的行数</li><li>{@link ReflectionClass::getExtension} — 根据已定义的类获取所在扩展的 ReflectionExtension 对象</li><li>{@link ReflectionClass::getExtensionName} — 获取定义的类所在的扩展的名称</li><li>{@link ReflectionClass::getFileName} — 获取定义类的文件名</li><li>{@link ReflectionClass::getInterfaceNames} — 获取接口（interface）名称</li><li>{@link ReflectionClass::getInterfaces} — 获取接口</li><li>{@link ReflectionClass::getMethod} — 获取一个类方法的 ReflectionMethod。</li><li>{@link ReflectionClass::getMethods} — 获取方法的数组</li><li>{@link ReflectionClass::getModifiers} — 获取类的修饰符</li><li>{@link ReflectionClass::getName} — 获取类名</li><li>{@link ReflectionClass::getNamespaceName} — 获取命名空间的名称</li><li>{@link ReflectionClass::getParentClass} — 获取父类</li><li>{@link ReflectionClass::getProperties} — 获取一组属性</li><li>{@link ReflectionClass::getProperty} — 获取类的一个属性的 ReflectionProperty</li><li>{@link ReflectionClass::getReflectionConstant} — Gets a ReflectionClassConstant for a class's constant</li><li>{@link ReflectionClass::getReflectionConstants} — Gets class constants</li><li>{@link ReflectionClass::getShortName} — 获取短名</li><li>{@link ReflectionClass::getStartLine} — 获取起始行号</li><li>{@link ReflectionClass::getStaticProperties} — 获取静态（static）属性</li><li>{@link ReflectionClass::getStaticPropertyValue} — 获取静态（static）属性的值</li><li>{@link ReflectionClass::getTraitAliases} — 返回 trait 别名的一个数组</li><li>{@link ReflectionClass::getTraitNames} — 返回这个类所使用 traits 的名称的数组</li><li>{@link ReflectionClass::getTraits} — 返回这个类所使用的 traits 数组</li><li>{@link ReflectionClass::hasConstant} — 检查常量是否已经定义</li><li>{@link ReflectionClass::hasMethod} — 检查方法是否已定义</li><li>{@link ReflectionClass::hasProperty} — 检查属性是否已定义</li><li>{@link ReflectionClass::implementsInterface} — 接口的实现</li><li>{@link ReflectionClass::inNamespace} — 检查是否位于命名空间中</li><li>{@link ReflectionClass::isAbstract} — 检查类是否是抽象类（abstract）</li><li>{@link ReflectionClass::isAnonymous} — 检查类是否是匿名类</li><li>{@link ReflectionClass::isCloneable} — 返回了一个类是否可复制</li><li>{@link ReflectionClass::isFinal} — 检查类是否声明为 final</li><li>{@link ReflectionClass::isInstance} — 检查类的实例</li><li>{@link ReflectionClass::isInstantiable} — 检查类是否可实例化</li><li>{@link ReflectionClass::isInterface} — 检查类是否是一个接口（interface）</li><li>{@link ReflectionClass::isInternal} — 检查类是否由扩展或核心在内部定义</li><li>{@link ReflectionClass::isIterable} — Check whether this class is iterable</li><li>{@link ReflectionClass::isIterateable} — 检查是否可迭代（iterateable）</li><li>{@link ReflectionClass::isSubclassOf} — 检查是否为一个子类</li><li>{@link ReflectionClass::isTrait} — 返回了是否为一个 trait</li><li>{@link ReflectionClass::isUserDefined} — 检查是否由用户定义的</li><li>{@link ReflectionClass::newInstance} — 从指定的参数创建一个新的类实例</li><li>{@link ReflectionClass::newInstanceArgs} — 从给出的参数创建一个新的类实例。</li><li>{@link ReflectionClass::newInstanceWithoutConstructor} — 创建一个新的类实例而不调用它的构造函数</li><li>{@link ReflectionClass::setStaticPropertyValue} — 设置静态属性的值</li><li>{@link ReflectionClass::__toString} — 返回 ReflectionClass 对象字符串的表示形式。</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 64;

	public $name;


	/**
	 * Clones object
	 * @link http://php.net/manual/en/reflectionclass.clone.php
	 * @return void 
	 * @since 5.0
	 */
	final private function __clone () {}

	/**
	 * Exports a class
	 * @link http://php.net/manual/en/reflectionclass.export.php
	 * @param mixed $argument <p>
	 * The reflection to export.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 * @since 5.0
	 */
	public static function export ($argument, $return = false) {}

	/**
	 * Constructs a ReflectionClass
	 * @link http://php.net/manual/en/reflectionclass.construct.php
	 * @param mixed $argument <p>
	 * Either a string containing the name of the class to
	 * reflect, or an object.
	 * </p>
	 * @throws \ReflectionException if the class does not exist.
	 * @since 5.0
	 */
	public function __construct ($argument) {}

	/**
	 * Returns the string representation of the ReflectionClass object.
	 * @link http://php.net/manual/en/reflectionclass.tostring.php
	 * @return string A string representation of this <b>ReflectionClass</b> instance.
	 * @since 5.0
	 */
	public function __toString () {}

	/**
	 * Gets class name
	 * @link http://php.net/manual/en/reflectionclass.getname.php
	 * @return string The class name.
	 * @since 5.0
	 */
	public function getName () {}

	/**
	 * Checks if class is defined internally by an extension, or the core
	 * @link http://php.net/manual/en/reflectionclass.isinternal.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isInternal () {}

	/**
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isUserDefined () {}

	/**
	 * Checks if the class is instantiable
	 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isInstantiable () {}

	/**
	 * Returns whether this class is cloneable
	 * @link http://php.net/manual/en/reflectionclass.iscloneable.php
	 * @return bool <b>TRUE</b> if the class is cloneable, <b>FALSE</b> otherwise.
	 * @since 5.4.0
	 */
	public function isCloneable () {}

	/**
	 * Gets the filename of the file in which the class has been defined
	 * @link http://php.net/manual/en/reflectionclass.getfilename.php
	 * @return string the filename of the file in which the class has been defined.
	 * If the class is defined in the PHP core or in a PHP extension, <b>FALSE</b>
	 * is returned.
	 * @since 5.0
	 */
	public function getFileName () {}

	/**
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionclass.getstartline.php
	 * @return int The starting line number, as an integer.
	 * @since 5.0
	 */
	public function getStartLine () {}

	/**
	 * Gets end line
	 * @link http://php.net/manual/en/reflectionclass.getendline.php
	 * @return int The ending line number of the user defined class, or <b>FALSE</b> if unknown.
	 * @since 5.0
	 */
	public function getEndLine () {}

	/**
	 * Gets doc comments
	 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
	 * @return string|bool The doc comment if it exists, otherwise <b>FALSE</b>
	 * @since 5.1.0
	 */
	public function getDocComment () {}

	/**
	 * Gets the constructor of the class
	 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
	 * @return ReflectionMethod A <b>ReflectionMethod</b> object reflecting the class' constructor, or <b>NULL</b> if the class
	 * has no constructor.
	 * @since 5.0
	 */
	public function getConstructor () {}

	/**
	 * Checks if method is defined
	 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * Name of the method being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if it has the method, otherwise <b>FALSE</b>
	 * @since 5.1.0
	 */
	public function hasMethod ($name) {}

	/**
	 * Gets a <b>ReflectionMethod</b> for a class method.
	 * @link http://php.net/manual/en/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * The method name to reflect.
	 * </p>
	 * @return ReflectionMethod A <b>ReflectionMethod</b>.
	 * @since 5.0
	 */
	public function getMethod ($name) {}

	/**
	 * Gets an array of methods
	 * @link http://php.net/manual/en/reflectionclass.getmethods.php
	 * @param string $filter [optional] <p>
	 * Filter the results to include only methods with certain attributes. Defaults
	 * to no filtering.
	 * </p>
	 * <p>
	 * Any combination of <b>ReflectionMethod::IS_STATIC</b>,
	 * <b>ReflectionMethod::IS_PUBLIC</b>,
	 * <b>ReflectionMethod::IS_PROTECTED</b>,
	 * <b>ReflectionMethod::IS_PRIVATE</b>,
	 * <b>ReflectionMethod::IS_ABSTRACT</b>,
	 * <b>ReflectionMethod::IS_FINAL</b>.
	 * </p>
         * @return ReflectionMethod[] An array of methods.
	 * @since 5.0
	 */
	public function getMethods ($filter = null) {}

	/**
	 * Checks if property is defined
	 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * Name of the property being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if it has the property, otherwise <b>FALSE</b>
	 * @since 5.1.0
	 */
	public function hasProperty ($name) {}

	/**
	 * Gets a <b>ReflectionProperty</b> for a class's property
	 * @link http://php.net/manual/en/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @return ReflectionProperty A <b>ReflectionProperty</b>.
	 * @since 5.0
	 */
	public function getProperty ($name) {}

	/**
	 * Gets properties
	 * @link http://php.net/manual/en/reflectionclass.getproperties.php
	 * @param int $filter [optional] <p>
	 * The optional filter, for filtering desired property types. It's configured using
	 * the ReflectionProperty constants,
	 * and defaults to all property types.
	 * </p>
	 * @return ReflectionProperty[]
	 * @since 5.0
	 */
	public function getProperties ($filter = null) {}

	/**
	 * Gets a ReflectionClassConstant for a class's property
	 * @link http://php.net/manual/en/reflectionclass.getreflectionconstant.php
	 * @param string $name <p>
	 * The class constant name.
	 * </p>
	 * @return ReflectionClassConstant A ReflectionClassConstant.
	 * @since 7.1
	 */
	public function getReflectionConstant ($name) {}

	/**
	 * Gets class constants
	 * @link http://php.net/manual/en/reflectionclass.getreflectionconstants.php
	 * @return ReflectionClassConstant[] An array of ReflectionClassConstant objects.
	 * @since 7.1
	 */
	public function getReflectionConstants () {}

	/**
	 * Checks if constant is defined
	 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * The name of the constant being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if the constant is defined, otherwise <b>FALSE</b>.
	 * @since 5.1.0
	 */
	public function hasConstant ($name) {}

	/**
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionclass.getconstants.php
	 * @return array An array of constants.
	 * Constant name in key, constant value in value.
	 * @since 5.0
	 */
	public function getConstants () {}

	/**
	 * Gets defined constant
	 * @link http://php.net/manual/en/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * Name of the constant.
	 * </p>
	 * @return mixed Value of the constant.
	 * @since 5.0
	 */
	public function getConstant ($name) {}

	/**
	 * Gets the interfaces
	 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
         * @return ReflectionClass[] An associative array of interfaces, with keys as interface
	 * names and the array values as <b>ReflectionClass</b> objects.
	 * @since 5.0
	 */
	public function getInterfaces () {}

	/**
	 * Gets the interface names
	 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
	 * @return array A numerical array with interface names as the values.
	 * @since 5.2.0
	 */
	public function getInterfaceNames () {}

	/**
	 * Checks if the class is anonymous
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 7.0
	 */
	public function isAnonymous () {}

	/**
	 * Checks if the class is an interface
	 * @link http://php.net/manual/en/reflectionclass.isinterface.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isInterface () {}

	/**
	 * Returns an array of traits used by this class
	 * @link http://php.net/manual/en/reflectionclass.gettraits.php
	 * @return ReflectionClass[] an array with trait names in keys and instances of trait's
	 * <b>ReflectionClass</b> in values.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.4.0
	 */
	public function getTraits () {}

	/**
	 * Returns an array of names of traits used by this class
	 * @link http://php.net/manual/en/reflectionclass.gettraitnames.php
	 * @return array an array with trait names in values.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.4.0
	 */
	public function getTraitNames () {}

	/**
	 * Returns an array of trait aliases
	 * @link http://php.net/manual/en/reflectionclass.gettraitaliases.php
	 * @return array an array with new method names in keys and original names (in the
	 * format "TraitName::original") in values.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.4.0
	 */
	public function getTraitAliases () {}

	/**
	 * Returns whether this is a trait
	 * @link http://php.net/manual/en/reflectionclass.istrait.php
	 * @return bool <b>TRUE</b> if this is a trait, <b>FALSE</b> otherwise.
	 * Returns <b>NULL</b> in case of an error.
	 * @since 5.4.0
	 */
	public function isTrait () {}

	/**
	 * Checks if class is abstract
	 * @link http://php.net/manual/en/reflectionclass.isabstract.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isAbstract () {}

	/**
	 * Checks if class is final
	 * @link http://php.net/manual/en/reflectionclass.isfinal.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isFinal () {}

	/**
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
	 * @return int bitmask of
	 * modifier constants.
	 * @since 5.0
	 */
	public function getModifiers () {}

	/**
	 * Checks class for instance
	 * @link http://php.net/manual/en/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * The object being compared to.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isInstance ($object) {}

	/**
	 * Creates a new class instance from given arguments.
	 * @link http://php.net/manual/en/reflectionclass.newinstance.php
	 * @param mixed $args [optional]<p>
	 * Accepts a variable number of arguments which are passed to the class
	 * constructor, much like <b>call_user_func</b>.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return object
	 * @since 5.0
	 */
	public function newInstance ($args = null, $_ = null) {}
	/**
	 * Creates a new class instance without invoking the constructor.
	 * @link http://php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
	 * @return object
	 * @since 5.4.0
	 */
	public function newInstanceWithoutConstructor() {}

	/**
	 * Creates a new class instance from given arguments.
	 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * The parameters to be passed to the class constructor as an array.
	 * </p>
	 * @return object a new instance of the class.
	 * @since 5.1.3
	 */
	public function newInstanceArgs (array $args = null) {}

	/**
	 * Gets parent class
	 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
	 * @return ReflectionClass
	 * @since 5.0
	 */
	public function getParentClass () {}

	/**
	 * Checks if a subclass
	 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * The class name being checked against.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isSubclassOf ($class) {}

	/**
	 * Gets static properties
	 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
	 * @return array The static properties, as an array.
	 * @since 5.0
	 */
	public function getStaticProperties () {}

	/**
	 * Gets static property value
	 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * The name of the static property for which to return a value.
	 * </p>
	 * @param string $default [optional] <p>
	 * </p>
	 * @return mixed The value of the static property.
	 * @since 5.1.0
	 */
	public function getStaticPropertyValue ($name, $default = null) {}

	/**
	 * Sets static property value
	 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * Property name.
	 * </p>
	 * @param mixed $value <p>
	 * New property value.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.1.0
	 */
	public function setStaticPropertyValue ($name, $value) {}

	/**
	 * Gets default properties
	 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
	 * @return array An array of default properties, with the key being the name of
	 * the property and the value being the default value of the property or <b>NULL</b>
	 * if the property doesn't have a default value. The function does not distinguish
	 * between static and non static properties and does not take visibility modifiers
	 * into account.
	 * @since 5.0
	 */
	public function getDefaultProperties () {}

	/**
	 * Checks if iterateable
	 * @link http://php.net/manual/en/reflectionclass.isiterateable.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function isIterateable () {}

	/**
	 * Checks if iterateable
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 7.2
	 */
	public function isIterable () {}

	/**
	 * Implements interface
	 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * The interface name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function implementsInterface ($interface) {}

	/**
	 * Gets a <b>ReflectionExtension</b> object for the extension which defined the class
	 * @link http://php.net/manual/en/reflectionclass.getextension.php
	 * @return ReflectionExtension A <b>ReflectionExtension</b> object representing the extension which defined the class,
	 * or <b>NULL</b> for user-defined classes.
	 * @since 5.0
	 */
	public function getExtension () {}

	/**
	 * Gets the name of the extension which defined the class
	 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
	 * @return string The name of the extension which defined the class, or <b>FALSE</b> for user-defined classes.
	 * @since 5.0
	 */
	public function getExtensionName () {}

	/**
	 * Checks if in namespace
	 * @link http://php.net/manual/en/reflectionclass.innamespace.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function inNamespace () {}

	/**
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
	 * @return string The namespace name.
	 * @since 5.3.0
	 */
	public function getNamespaceName () {}

	/**
	 * Gets short name
	 * @link http://php.net/manual/en/reflectionclass.getshortname.php
	 * @return string The class short name.
	 * @since 5.3.0
	 */
	public function getShortName () {}

}

/**
*<div id="class.reflectionobject" class="reference">   <h1 class="title">ReflectionObject 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionobject.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionObject</strong> 类报告了一个对象（<span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span>）的相关信息。    </p>   </div>     <div class="section" id="reflectionobject.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">     <strong class="classname">ReflectionObject</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>      <a href="http://php.net/manual/zh/class.reflectionclass.php" class="classname">ReflectionClass</a>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.constants.is-implicit-abstract"><var class="varname">IS_IMPLICIT_ABSTRACT</var></a></var>      <span class="initializer"> = 16</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.constants.is-explicit-abstract"><var class="varname">IS_EXPLICIT_ABSTRACT</var></a></var>      <span class="initializer"> = 32</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionclass.php#reflectionclass.constants.is-final"><var class="varname">IS_FINAL</var></a></var>      <span class="initializer"> = 64</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionobject.php#reflectionobject.props.name">$<var class="varname">name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionobject.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$argument</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionobject.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$argument</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code></span>   ] )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname">{@link ReflectionClass::__construct}</span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$argument</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::export}</span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$argument</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code><span class="initializer"> = false</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname">{@link ReflectionClass::getConstant}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getConstants}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionMethod</span>  <span class="methodname">{@link ReflectionClass::getConstructor}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getDefaultProperties}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::getDocComment}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionClass::getEndLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionExtension</span> <span class="methodname">{@link ReflectionClass::getExtension}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::getExtensionName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::getFileName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getInterfaceNames}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getInterfaces}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionMethod</span> <span class="methodname">{@link ReflectionClass::getMethod}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getMethods}</span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$filter</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionClass::getModifiers}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::getName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::getNamespaceName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname">{@link ReflectionClass::getParentClass}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getProperties}</span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$filter</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionProperty</span> <span class="methodname">{@link ReflectionClass::getProperty}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClassConstant</span> <span class="methodname">{@link ReflectionClass::getReflectionConstant}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getReflectionConstants}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::getShortName}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link ReflectionClass::getStartLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getStaticProperties}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname">{@link ReflectionClass::getStaticPropertyValue}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter reference">&$def_value</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getTraitAliases}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getTraitNames}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link ReflectionClass::getTraits}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::hasConstant}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::hasMethod}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::hasProperty}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::implementsInterface}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$interface</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::inNamespace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isAbstract}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isAnonymous}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isCloneable}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isFinal}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isInstance}</span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isInstantiable}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isInterface}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isInternal}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isIterable}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isIterateable}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isSubclassOf}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$class</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isTrait}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link ReflectionClass::isUserDefined}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname">{@link ReflectionClass::newInstance}</span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$args</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname">{@link ReflectionClass::newInstanceArgs}</span>     ([ <span class="methodparam"><span class="type">array</span> <code class="parameter">$args</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname">{@link ReflectionClass::newInstanceWithoutConstructor}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname">{@link ReflectionClass::setStaticPropertyValue}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link ReflectionClass::__toString}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="reflectionobject.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionobject.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        对象的类名。只读，在尝试赋值的时候会抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>     </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionObject::__construct} — Constructs a ReflectionObject</li><li>{@link ReflectionObject::export} — Export</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionObject extends ReflectionClass implements Reflector {

	/**
	 * Export
	 * @link http://php.net/manual/en/reflectionobject.export.php
	 * @param string $argument <p>
	 * The reflection to export.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 * @since 5.0
	 */
	public static function export ($argument, $return = null) {}

	/**
	 * Constructs a ReflectionObject
	 * @link http://php.net/manual/en/reflectionobject.construct.php
	 * @param object $argument <p>
	 * An object instance.
	 * </p>
	 * @since 5.0
	 */
	public function __construct ($argument) {}

}

/**
*<div id="class.reflectionproperty" class="reference">   <h1 class="title">ReflectionProperty 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionproperty.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionProperty</strong> 类报告了类的属性的相关信息。    </p>   </div>     <div class="section" id="reflectionproperty.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionProperty</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionproperty.php#reflectionproperty.constants.is-static"><var class="varname">IS_STATIC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionproperty.php#reflectionproperty.constants.is-public"><var class="varname">IS_PUBLIC</var></a></var>      <span class="initializer"> = 256</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionproperty.php#reflectionproperty.constants.is-protected"><var class="varname">IS_PROTECTED</var></a></var>      <span class="initializer"> = 512</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.reflectionproperty.php#reflectionproperty.constants.is-private"><var class="varname">IS_PRIVATE</var></a></var>      <span class="initializer"> = 1024</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionproperty.php#reflectionproperty.props.name">$<var class="varname">name</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionproperty.php#reflectionproperty.props.class">$<var class="varname">class</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$class</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$class</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.getdoccomment.php" class="methodname">getDocComment</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.getmodifiers.php" class="methodname">getModifiers</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.getvalue.php" class="methodname">getValue</a></span>     ([ <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.isdefault.php" class="methodname">isDefault</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.isprivate.php" class="methodname">isPrivate</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.isprotected.php" class="methodname">isProtected</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.ispublic.php" class="methodname">isPublic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.isstatic.php" class="methodname">isStatic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.setaccessible.php" class="methodname">setAccessible</a></span>     ( <span class="methodparam"><span class="type">bool</span> <code class="parameter">$accessible</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.setvalue.php" class="methodname">setValue</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    , <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionproperty.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionproperty.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionproperty.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        属性的名称。只读，在尝试赋值的时候抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>                 <dt id="reflectionproperty.props.class"><var class="varname"><var class="varname">class</var></var></dt>       <dd>        <p class="para">        定义的属性所在的类。只读，在尝试赋值的时候抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>         <div class="section" id="reflectionproperty.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="reflectionproperty.constants.modifiers">     <h2 class="title">ReflectionProperty 修饰符</h2>     <dl>               <dt id="reflectionproperty.constants.is-static"><strong><code>ReflectionProperty::IS_STATIC</code></strong></dt>        <dd>         <p class="para">         指示了 <a href="http://php.net/manual/zh/language.oop5.static.php" class="link">static</a> 的属性。        </p>       </dd>                     <dt id="reflectionproperty.constants.is-public"><strong><code>ReflectionProperty::IS_PUBLIC</code></strong></dt>        <dd>         <p class="para">         指示了 <a href="http://php.net/manual/zh/language.oop5.visibility.php" class="link">public</a> 的属性。        </p>       </dd>                     <dt id="reflectionproperty.constants.is-protected"><strong><code>ReflectionProperty::IS_PROTECTED</code></strong></dt>        <dd>         <p class="para">         指示了 <a href="http://php.net/manual/zh/language.oop5.visibility.php" class="link">protected</a> 的属性。        </p>       </dd>                     <dt id="reflectionproperty.constants.is-private"><strong><code>ReflectionProperty::IS_PRIVATE</code></strong></dt>        <dd>         <p class="para">         指示了 <a href="http://php.net/manual/zh/language.oop5.visibility.php" class="link">private</a> 的属性。        </p>       </dd>             </dl>     </div>   </div>     </div>                                                                                                                     <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionProperty::__clone} — Clone</li><li>{@link ReflectionProperty::__construct} — Construct a ReflectionProperty object</li><li>{@link ReflectionProperty::export} — Export</li><li>{@link ReflectionProperty::getDeclaringClass} — Gets declaring class</li><li>{@link ReflectionProperty::getDocComment} — Gets the property doc comment</li><li>{@link ReflectionProperty::getModifiers} — Gets the property modifiers</li><li>{@link ReflectionProperty::getName} — Gets property name</li><li>{@link ReflectionProperty::getValue} — Gets value</li><li>{@link ReflectionProperty::isDefault} — Checks if property is a default property</li><li>{@link ReflectionProperty::isPrivate} — Checks if property is private</li><li>{@link ReflectionProperty::isProtected} — Checks if property is protected</li><li>{@link ReflectionProperty::isPublic} — Checks if property is public</li><li>{@link ReflectionProperty::isStatic} — Checks if property is static</li><li>{@link ReflectionProperty::setAccessible} — Set property accessibility</li><li>{@link ReflectionProperty::setValue} — Set property value</li><li>{@link ReflectionProperty::__toString} — To string</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionProperty implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;

	public $name;
	public $class;


	/**
	 * Clone
	 * @link http://php.net/manual/en/reflectionproperty.clone.php
	 * @return void 
	 * @since 5.0
	 */
	final private function __clone () {}

	/**
	 * Export
	 * @link http://php.net/manual/en/reflectionproperty.export.php
	 * @param mixed $class 
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string
	 * @since 5.0
	 */
	public static function export ($class, $name, $return = null) {}

	/**
	 * Construct a ReflectionProperty object
	 * @link http://php.net/manual/en/reflectionproperty.construct.php
	 * @param mixed $class <p>
	 * The class name, that contains the property.
	 * </p>
	 * @param string $name <p>
	 * The name of the property being reflected.
	 * </p>
	 * @throws \ReflectionException if the class or property does not exist.
	 * @since 5.0
	 */
	public function __construct ($class, $name) {}

	/**
	 * To string
	 * @link http://php.net/manual/en/reflectionproperty.tostring.php
	 * @return string
	 * @since 5.0
	 */
	public function __toString () {}

	/**
	 * Gets property name
	 * @link http://php.net/manual/en/reflectionproperty.getname.php
	 * @return string The name of the reflected property.
	 * @since 5.0
	 */
	public function getName () {}

	/**
	 * Gets value
	 * @link http://php.net/manual/en/reflectionproperty.getvalue.php
	 * @param object $object [optional]<p>
	 * If the property is non-static an object must be provided to fetch the
	 * property from. If you want to fetch the default property without
	 * providing an object use <b>ReflectionClass::getDefaultProperties</b>
	 * instead.
	 * </p>
	 * @return mixed The current value of the property.
	 * @since 5.0
	 */
	public function getValue ($object) {}

	/**
	 * Set property value
	 * @link http://php.net/manual/en/reflectionproperty.setvalue.php
	 * @param object $object [optional]<p>
	 * If the property is non-static an object must be provided to change
	 * the property on. If the property is static this parameter is left
	 * out and only <i>value</i> needs to be provided.
	 * </p>
	 * @param mixed $value <p>
	 * The new value.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0
	 */
	public function setValue ($object, $value) {}

	/**
	 * Set static property value
	 * @link http://php.net/manual/en/reflectionproperty.setvalue.php
	 * @param mixed $value The new value.
	 * @return void No value is returned.
	 * @since 5.0
	 */
	public function setValue ($value) {}

	/**
	 * Checks if property is public
	 * @link http://php.net/manual/en/reflectionproperty.ispublic.php
	 * @return bool <b>TRUE</b> if the property is public, <b>FALSE</b> otherwise.
	 * @since 5.0
	 */
	public function isPublic () {}

	/**
	 * Checks if property is private
	 * @link http://php.net/manual/en/reflectionproperty.isprivate.php
	 * @return bool <b>TRUE</b> if the property is private, <b>FALSE</b> otherwise.
	 * @since 5.0
	 */
	public function isPrivate () {}

	/**
	 * Checks if property is protected
	 * @link http://php.net/manual/en/reflectionproperty.isprotected.php
	 * @return bool <b>TRUE</b> if the property is protected, <b>FALSE</b> otherwise.
	 * @since 5.0
	 */
	public function isProtected () {}

	/**
	 * Checks if property is static
	 * @link http://php.net/manual/en/reflectionproperty.isstatic.php
	 * @return bool <b>TRUE</b> if the property is static, <b>FALSE</b> otherwise.
	 * @since 5.0
	 */
	public function isStatic () {}

	/**
	 * Checks if default value
	 * @link http://php.net/manual/en/reflectionproperty.isdefault.php
	 * @return bool <b>TRUE</b> if the property was declared at compile-time, or <b>FALSE</b> if
	 * it was created at run-time.
	 * @since 5.0
	 */
	public function isDefault () {}

	/**
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionproperty.getmodifiers.php
	 * @return int A numeric representation of the modifiers.
	 * @since 5.0
	 */
	public function getModifiers () {}

	/**
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionproperty.getdeclaringclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object.
	 * @since 5.0
	 */
	public function getDeclaringClass () {}

	/**
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionproperty.getdoccomment.php
	 * @return string|bool The doc comment if it exists, otherwise <b>FALSE</b>
	 * @since 5.1.0
	 */
	public function getDocComment () {}

	/**
	 * Set property accessibility
	 * @link http://php.net/manual/en/reflectionproperty.setaccessible.php
	 * @param bool $accessible <p>
	 * <b>TRUE</b> to allow accessibility, or <b>FALSE</b>.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.3.0
	 */
	public function setAccessible ($accessible) {}

}

/**
*<div id="class.reflectionextension" class="reference">   <h1 class="title">ReflectionExtension 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="reflectionextension.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionExtension</strong> 报告了一个扩展（extension）的有关信息。    </p>   </div>     <div class="section" id="reflectionextension.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionExtension</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionextension.php#reflectionextension.props.name">$<var class="varname">name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$return</code><span class="initializer"> = false</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getclasses.php" class="methodname">getClasses</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getclassnames.php" class="methodname">getClassNames</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getconstants.php" class="methodname">getConstants</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getdependencies.php" class="methodname">getDependencies</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getfunctions.php" class="methodname">getFunctions</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getinientries.php" class="methodname">getINIEntries</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.getversion.php" class="methodname">getVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.info.php" class="methodname">info</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.ispersistent.php" class="methodname">isPersistent</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.istemporary.php" class="methodname">isTemporary</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionextension.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionextension.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionextension.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        扩展的名称，和 <span class="methodname">{@link ReflectionExtension::getName()}</span> 方法所返回的一样。       </p>      </dd>          </dl>    </div>     </div>                                                                                                                                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionExtension::__clone} — Clones</li><li>{@link ReflectionExtension::__construct} — Constructs a ReflectionExtension</li><li>{@link ReflectionExtension::export} — Export</li><li>{@link ReflectionExtension::getClasses} — Gets classes</li><li>{@link ReflectionExtension::getClassNames} — 获取类名称</li><li>{@link ReflectionExtension::getConstants} — 获取常量</li><li>{@link ReflectionExtension::getDependencies} — 获取依赖</li><li>{@link ReflectionExtension::getFunctions} — 获取扩展中的函数</li><li>{@link ReflectionExtension::getINIEntries} — 获取ini配置</li><li>{@link ReflectionExtension::getName} — 获取扩展名称</li><li>{@link ReflectionExtension::getVersion} — 获取扩展版本号</li><li>{@link ReflectionExtension::info} — 输出扩展信息</li><li>{@link ReflectionExtension::isPersistent} — 返回扩展是否持久化载入</li><li>{@link ReflectionExtension::isTemporary} — 返回扩展是否是临时载入</li><li>{@link ReflectionExtension::__toString} — To string</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionExtension implements Reflector {
	public $name;


	/**
	 * Clones
	 * @link http://php.net/manual/en/reflectionextension.clone.php
	 * @return void No value is returned, if called a fatal error will occur.
	 * @since 5.0
	 */
	final private function __clone () {}

	/**
	 * Export
	 * @link http://php.net/manual/en/reflectionextension.export.php
	 * @param string $name <p>
	 * The reflection to export.
	 * </p>
	 * @param string $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 * @since 5.0
	 */
	public static function export ($name, $return = false) {}

	/**
	 * Constructs a ReflectionExtension
	 * @link http://php.net/manual/en/reflectionextension.construct.php
	 * @param string $name <p>
	 * Name of the extension.
	 * </p>
	 * @throws \ReflectionException if the extension does not exist.
	 * @since 5.0
	 */
	public function __construct ($name) {}

	/**
	 * To string
	 * @link http://php.net/manual/en/reflectionextension.tostring.php
	 * @return string the exported extension as a string, in the same way as the
	 * <b>ReflectionExtension::export</b>.
	 * @since 5.0
	 */
	public function __toString () {}

	/**
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionextension.getname.php
	 * @return string The extensions name.
	 * @since 5.0
	 */
	public function getName () {}

	/**
	 * Gets extension version
	 * @link http://php.net/manual/en/reflectionextension.getversion.php
	 * @return string The version of the extension.
	 * @since 5.0
	 */
	public function getVersion () {}

	/**
	 * Gets extension functions
	 * @link http://php.net/manual/en/reflectionextension.getfunctions.php
/**
*<div id="function.defined" class="refentry">  <div class="refnamediv">   <h1 class="refname">defined</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">defined</span> &mdash; <span class="dc-title">检查某个名称的常量是否存在</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.defined-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>defined</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div>    <p class="para rdfs-comment">    检查该名称的常量是否已定义。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     如果你要检查一个变量是否存在，请使用 <span class="function">{@link isset()}</span>。       <span class="function"><strong>defined()</strong></span> 函数仅对 <a href="http://php.net/manual/zh/language.constants.php" class="link">constants</a> 有效。如果你要检测某个函数是否存在，使用 <span class="function">{@link function_exists()}</span>。    </p>   </p></blockquote>  </div>    <div class="refsect1 parameters" id="refsect1-function.defined-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">name</code></dt>       <dd>        <p class="para">        常量的名称。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.defined-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">   如果名称 <code class="parameter">name</code> 的常量已定义，返回 <strong><code>TRUE</code></strong>；未定义则返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.defined-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-4529">     <p><strong>Example #1 检查常量</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Note&nbsp;the&nbsp;use&nbsp;of&nbsp;quotes,&nbsp;this&nbsp;is&nbsp;important.&nbsp;&nbsp;This&nbsp;example&nbsp;is&nbsp;checking<br />&nbsp;*&nbsp;if&nbsp;the&nbsp;string&nbsp;'TEST'&nbsp;is&nbsp;the&nbsp;name&nbsp;of&nbsp;a&nbsp;constant&nbsp;named&nbsp;TEST&nbsp;<br /></span><span style="color: #007700">if&nbsp;(</span><span style="color: #9876AA">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'TEST'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">TEST</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.defined-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link define()} - 定义一个常量</span></li>     <li class="member"><span class="function">{@link constant()} - 返回一个常量的值</span></li>     <li class="member"><span class="function">{@link get_defined_constants()} - 返回所有常量的关联数组，键是常量名，值是常量值</span></li>     <li class="member"><span class="function">{@link function_exists()} - 如果给定的函数已经被定义就返回 TRUE</span></li>     <li class="member">章节 <a href="http://php.net/manual/zh/language.constants.php" class="link">Constants</a></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.misc.php">杂项 函数</a></div></div>
         * @return ReflectionFunction[] An associative array of <b>ReflectionFunction</b> objects,*/
	 * for each function defined in the extension with the keys being the function
	 * names. If no function are defined, an empty array is returned.
	 * @since 5.0
	 */
	public function getFunctions () {}

	/**
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionextension.getconstants.php
	 * @return array An associative array with constant names as keys.
	 * @since 5.0
	 */
	public function getConstants () {}

	/**
	 * Gets extension ini entries
	 * @link http://php.net/manual/en/reflectionextension.getinientries.php
	 * @return array An associative array with the ini entries as keys,
	 * with their defined values as values.
	 * @since 5.0
	 */
	public function getINIEntries () {}

	/**
	 * Gets classes
	 * @link http://php.net/manual/en/reflectionextension.getclasses.php
         * @return ReflectionClass[] An array of <b>ReflectionClass</b> objects, one
	 * for each class within the extension. If no classes are defined,
	 * an empty array is returned.
	 * @since 5.0
	 */
	public function getClasses () {}

	/**
	 * Gets class names
	 * @link http://php.net/manual/en/reflectionextension.getclassnames.php
	 * @return array An array of class names, as defined in the extension.
	 * If no classes are defined, an empty array is returned.
	 * @since 5.0
	 */
	public function getClassNames () {}

	/**
	 * Gets dependencies
	 * @link http://php.net/manual/en/reflectionextension.getdependencies.php
	 * @return array An associative array with dependencies as keys and
	 * either Required, Optional
	 * or Conflicts as the values.
	 * @since 5.0
	 */
	public function getDependencies () {}

	/**
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionextension.info.php
	 * @return string Information about the extension.
	 * @since 5.0
	 */
	public function info () {}

	/**
	 * Returns whether this extension is persistent
	 * @link http://php.net/manual/en/reflectionextension.ispersistent.php
	 * @return bool <b>TRUE</b> for extensions loaded by extension, <b>FALSE</b>
	 * otherwise.
	 * @since 5.4.0
	 */
	public function isPersistent () {}

	/**
	 * Returns whether this extension is temporary
	 * @link http://php.net/manual/en/reflectionextension.istemporary.php
	 * @return bool <b>TRUE</b> for extensions loaded by <b>dl</b>,
	 * <b>FALSE</b> otherwise.
	 * @since 5.4.0
	 */
	public function isTemporary () {}


}

/**
*<div id="class.reflectionzendextension" class="reference">   <h1 class="title">ReflectionZendExtension 类</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p>     <div class="section" id="reflectionzendextension.intro">    <h2 class="title">简介</h2>    <p class="para">     </p>   </div>     <div class="section" id="reflectionzendextension.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionZendExtension</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionzendextension.php#reflectionzendextension.props.name">$<var class="varname">name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.getauthor.php" class="methodname">getAuthor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.getcopyright.php" class="methodname">getCopyright</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.geturl.php" class="methodname">getURL</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.getversion.php" class="methodname">getVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionzendextension.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionzendextension.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionzendextension.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        扩展的名称。只读，并在尝试赋值的时候抛出 <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a>。       </p>      </dd>          </dl>    </div>     </div>                                                                    <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionZendExtension::__clone} — Clone handler</li><li>{@link ReflectionZendExtension::__construct} — Constructor</li><li>{@link ReflectionZendExtension::export} — Export</li><li>{@link ReflectionZendExtension::getAuthor} — Gets author</li><li>{@link ReflectionZendExtension::getCopyright} — Gets copyright</li><li>{@link ReflectionZendExtension::getName} — Gets name</li><li>{@link ReflectionZendExtension::getURL} — Gets URL</li><li>{@link ReflectionZendExtension::getVersion} — Gets version</li><li>{@link ReflectionZendExtension::__toString} — To string handler</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionZendExtension implements Reflector {
	public $name;


	/**
	 * Clone handler
	 * @link http://php.net/manual/en/reflectionzendextension.clone.php
	 * @return void
	 * @since 5.4.0
	 */
	final private function __clone () {}

	/**
	 * Export
	 * @link http://php.net/manual/en/reflectionzendextension.export.php
	 * @param string $name <p>
	 * </p>
	 * @param string $return [optional] <p>
	 * </p>
	 * @return string
	 * @since 5.4.0
	 */
	public static function export ($name, $return = null) {}

	/**
	 * Constructor
	 * @link http://php.net/manual/en/reflectionzendextension.construct.php
	 * @param string $name <p>
	 * </p>
	 * @throws \ReflectionException if the extension does not exist.
	 * @since 5.4.0
	 */
	public function __construct ($name) {}

	/**
	 * To string handler
	 * @link http://php.net/manual/en/reflectionzendextension.tostring.php
	 * @return string
	 * @since 5.4.0
	 */
	public function __toString () {}

	/**
	 * Gets name
	 * @link http://php.net/manual/en/reflectionzendextension.getname.php
	 * @return string
	 * @since 5.4.0
	 */
	public function getName () {}

	/**
	 * Gets version
	 * @link http://php.net/manual/en/reflectionzendextension.getversion.php
	 * @return string
	 * @since 5.4.0
	 */
	public function getVersion () {}

	/**
	 * Gets author
	 * @link http://php.net/manual/en/reflectionzendextension.getauthor.php
	 * @return string
	 * @since 5.4.0
	 */
	public function getAuthor () {}

	/**
	 * Gets URL
	 * @link http://php.net/manual/en/reflectionzendextension.geturl.php
	 * @return string
	 * @since 5.4.0
	 */
	public function getURL () {}

	/**
	 * Gets copyright
	 * @link http://php.net/manual/en/reflectionzendextension.getcopyright.php
	 * @return string
	 * @since 5.4.0
	 */
	public function getCopyright () {}

}

/**
*<div id="class.reflectiongenerator" class="reference">   <h1 class="title">生成器反射类</h1>     <div class="partintro"><p class="verinfo">(PHP 7)</p>     <div class="section" id="reflectiongenerator.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionGenerator</strong>类用于获取生成器的信息。    </p>   </div>     <div class="section" id="reflectiongenerator.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionGenerator</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiongenerator.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.generator.php" class="type Generator">Generator</a></span> <code class="parameter">$generator</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiongenerator.getexecutingfile.php" class="methodname">getExecutingFile</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">Generator</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiongenerator.getexecutinggenerator.php" class="methodname">getExecutingGenerator</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiongenerator.getexecutingline.php" class="methodname">getExecutingLine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionFunctionAbstract</span> <span class="methodname">{@link getFunction}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">object</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiongenerator.getthis.php" class="methodname">getThis</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiongenerator.gettrace.php" class="methodname">getTrace</a></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$options</code><span class="initializer"> = DEBUG_BACKTRACE_PROVIDE_OBJECT</span></span>   ] )</div>      }</div>    </div>   </div>                                                      <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionGenerator::__construct} — Constructs a ReflectionGenerator object</li><li>{@link ReflectionGenerator::getExecutingFile} — Gets the file name of the currently executing generator</li><li>{@link ReflectionGenerator::getExecutingGenerator} — Gets the executing Generator object</li><li>{@link ReflectionGenerator::getExecutingLine} — Gets the currently executing line of the generator</li><li>{@link ReflectionGenerator::getFunction} — Gets the function name of the generator</li><li>{@link ReflectionGenerator::getThis} — Gets the $this value of the generator</li><li>{@link ReflectionGenerator::getTrace} — Gets the trace of the executing generator</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionGenerator
{
	/* Methods */
	/**
	 * Constructs a ReflectionGenerator object
	 * @link http://php.net/manual/en/reflectiongenerator.construct.php
	 * @param Generator $generator A generator object.
	 * @since 7.0
	 */
	public function __construct(Generator $generator)
	{
	}

	/**
	 *  Gets the file name of the currently executing generator
	 * @link http://php.net/manual/en/reflectiongenerator.getexecutingfile.php
	 * @return string Returns the full path and file name of the currently executing generator.
	 * @since 7.0
	 *
	 */
	public function getExecutingFile()
	{
	}

	/**
	 * Gets the executing Generator object
	 * @link http://php.net/manual/en/reflectiongenerator.construct.php
	 * @return Generator Returns the currently executing Generator object.
	 * @since 7.0
	 *
	 */
	public function getExecutingGenerator()
	{
	}

	/**
	 * Gets the currently executing line of the generator
	 * @link http://php.net/manual/en/reflectiongenerator.getexecutingline.php
	 * @return int Returns the line number of the currently executing statement in the generator.
	 * @since 7.0
	 */
	public function getExecutingLine()
	{
	}

	/**
	 * Gets the function name of the generator
	 * @link http://php.net/manual/en/reflectiongenerator.getfunction.php
	 * @return ReflectionFunctionAbstract Returns a ReflectionFunctionAbstract class. This will be ReflectionFunction for functions, or ReflectionMethod for methods.
	 * @since 7.0
	 */
	public function getFunction()
	{
	}

	/**
	 * Gets the function name of the generator
	 * @link http://php.net/manual/en/reflectiongenerator.getthis.php
	 * @return object|null Returns the $this value, or NULL if the generator was not created in a class context.
	 * @since 7.0
	 */
	public function getThis()
	{
	}

	/**
	 * Gets the trace of the executing generator
	 * @link http://php.net/manual/en/reflectiongenerator.gettrace.php
	 * @param int $options [optional] <p>
	 * The value of <em>options</em> can be any of the following
	 * the following flags.
	 * </p>
	 * <table>
	 * <b>Available options</b>
	 *
	 * <thead>
	 * <tr>
	 * <th>Option</th>
	 * <th>Description</th>
	 * </tr>
	 *
	 * </thead>
	 *
	 * <tbody class="tbody">
	 * <tr>
	 * <td>
	 * <b>DEBUG_BACKTRACE_PROVIDE_OBJECT</b>
	 * </td>
	 * <td>
	 * Default.
	 * </td>
	 * </tr>
	 *
	 * <tr>
	 * <td>
	 * <b>DEBUG_BACKTRACE_IGNORE_ARGS</B>
	 * </td>
	 * <td>
	 * Don't include the argument information for functions in the stack
	 * trace.
	 * </td>
	 * </tr>
	 *
	 * </tbody>
	 *
	 * </table>
	 * @return array Returns the trace of the currently executing generator.
	 * @since 7.0
	 */
	public function getTrace($options = DEBUG_BACKTRACE_PROVIDE_OBJECT)
	{
	}
}

/**
*<div id="class.reflectiontype" class="reference">   <h1 class="title">The ReflectionType class</h1>     <div class="partintro"><p class="verinfo">(PHP 7)</p>     <div class="section" id="reflectiontype.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">ReflectionType</strong>      类用于获取函数、类方法的参数或者返回值的类型。    </p>   </div>     <div class="section" id="reflectiontype.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionType</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiontype.allowsnull.php" class="methodname">allowsNull</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiontype.isbuiltin.php" class="methodname">isBuiltin</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectiontype.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>      }</div>    </div>   </div>                          <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionType::allowsNull} — Checks if null is allowed</li><li>{@link ReflectionType::isBuiltin} — Checks if it is a built-in type</li><li>{@link ReflectionType::__toString} — To string</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionType
{
	/* Methods */
	/**
	 * Checks if null is allowed
	 * @link http://php.net/manual/en/reflectiontype.allowsnull.php
	 * @return bool TRUE if NULL is allowed, otherwise FALSE
	 * @since 7.0
	 */
	public function allowsNull()
	{
	}

	/**
	 * Checks if it is a built-in type
	 * @link http://php.net/manual/en/reflectiontype.isbuiltin.php
	 * @return bool TRUE if it's a built-in type, otherwise FALSE
	 * @since 7.0
	 */
	public function isBuiltin()
	{
	}

	/**
	 * To string
	 * @link http://php.net/manual/en/reflectiontype.tostring.php
	 * @return string Returns the type of the parameter.
	 * @since 7.0
	 * @deprecated 7.1.0:8.0.0 Please use getName()
	 * @see \ReflectionType::getName()
	 */
	public function __toString()
	{
	}

	/**
	 * Get type of the parameter.
	 * @return string Returns the type of the parameter.
	 * @since 7.1.0
	 */
	public function getName()
	{
	}

    private final function __clone() {}

}

/**
*<div id="class.reflectionclassconstant" class="reference">   <h1 class="title">The ReflectionClassConstant class</h1>     <div class="partintro"><p class="verinfo">(PHP 7 &gt;= 7.1.0)</p>     <div class="section" id="reflectionclassconstant.intro">    <h2 class="title">简介</h2>    <p class="para">     The <strong class="classname">ReflectionClassConstant</strong> class reports     information about a class constant.    </p>   </div>     <div class="section" id="reflectionclassconstant.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">ReflectionClassConstant</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><a href="http://php.net/manual/zh/class.reflector.php" class="interfacename">Reflector</a></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionclassconstant.php#reflectionclassconstant.props.name">$<var class="varname">name</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">public</span>       <var class="varname"><a href="http://php.net/manual/zh/class.reflectionclassconstant.php#reflectionclassconstant.props.class">$<var class="varname">class</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$class</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.export.php" class="methodname">export</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$class</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">ReflectionClass</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.getdeclaringclass.php" class="methodname">getDeclaringClass</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.getdoccomment.php" class="methodname">getDocComment</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.getmodifiers.php" class="methodname">getModifiers</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.getname.php" class="methodname">getName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.getvalue.php" class="methodname">getValue</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.isprivate.php" class="methodname">isPrivate</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.isprotected.php" class="methodname">isProtected</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.ispublic.php" class="methodname">isPublic</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/reflectionclassconstant.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="reflectionclassconstant.props">    <h2 class="title">属性</h2>    <dl>            <dt id="reflectionclassconstant.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">        Name of the class constant. Read-only, throws        <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a> in attempt to write.       </p>      </dd>                 <dt id="reflectionclassconstant.props.class"><var class="varname"><var class="varname">class</var></var></dt>       <dd>        <p class="para">        Name of the class where the class constant is defined. Read-only, throws        <a href="http://php.net/manual/zh/class.reflectionexception.php" class="classname">ReflectionException</a> in attempt to write.       </p>      </dd>          </dl>    </div>    </div>                                                                                  <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionClassConstant::__construct} — Constructs a ReflectionClassConstant</li><li>{@link ReflectionClassConstant::export} — Export</li><li>{@link ReflectionClassConstant::getDeclaringClass} — Gets declaring class</li><li>{@link ReflectionClassConstant::getDocComment} — Gets doc comments</li><li>{@link ReflectionClassConstant::getModifiers} — Gets the class constant modifiers</li><li>{@link ReflectionClassConstant::getName} — Get name of the constant</li><li>{@link ReflectionClassConstant::getValue} — Gets value</li><li>{@link ReflectionClassConstant::isPrivate} — Checks if class constant is private</li><li>{@link ReflectionClassConstant::isProtected} — Checks if class constant is protected</li><li>{@link ReflectionClassConstant::isPublic} — Checks if class constant is public</li><li>{@link ReflectionClassConstant::__toString} — Returns the string representation of the ReflectionClassConstant object</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.reflection.php">反射</a></div></div>
*/
class ReflectionClassConstant implements Reflector {

    public $name ;
    public $class ;

    /**
     * ReflectionClassConstant constructor.
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.construct.php
     * @param mixed $class Either a string containing the name of the class to reflect, or an object.
     * @param string $name The name of the class constant.
     * @return ReflectionClassConstant
     */
    public function __construct($class, $name) {}

    /**
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.export.php
     * @param mixed $class The reflection to export.
     * @param string $name The class constant name.
     * @param bool $return Setting to TRUE will return the export, as opposed to emitting it. Setting to FALSE (the default) will do the opposite.
     * @return string
     */
	public static function export($class, $name, $return) {}

    /**
     * Gets declaring class
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.getdeclaringclass.php
     * @return ReflectionClass
     */
	public function getDeclaringClass() {}

    /**
     * Gets doc comments
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.getdoccomment.php
     * @return string|bool The doc comment if it exists, otherwise <b>FALSE</b>
     */
	public function getDocComment() {}

    /**
     * Gets the class constant modifiers
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.getmodifiers.php
     * @return int
     */
	public function getModifiers() {}

    /**
     * Get name of the constant
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.getname.php
     * @return string
     */
	public function getName() {}

    /**
     * Gets value
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.getvalue.php
     * @return mixed
     */
	public function getValue() {}

    /**
     * Checks if class constant is private
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.isprivate.php
     * @return bool
     */
	public function isPrivate() {}

    /**
     * Checks if class constant is protected
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.isprotected.php
     * @return bool
     */
	public function isProtected() {}

    /**
     * Checks if class constant is public
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.ispublic.php
     * @param bool
     */
	public function isPublic() {}

    /**
     * Returns the string representation of the ReflectionClassConstant object.
     * @since 7.1
     * @link http://php.net/manual/en/reflectionclassconstant.tostring.php
     * @return string|void
     */
	public function __toString() {}

    private final function __clone() {}

}

/**
 * @since 7.1
 */
class ReflectionNamedType extends ReflectionType{

}

// End of Reflection v.$Id: bcdcdaeea3aba34a8083bb62c6eda69ff3c3eab5 $
?>
