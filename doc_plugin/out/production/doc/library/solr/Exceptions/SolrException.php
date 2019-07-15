<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrexception" class="reference">   <h1 class="title">The SolrException class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrexception.intro">    <h2 class="title">简介</h2>    <p class="para">     This is the base class for all exception thrown by the Solr extension classes.    </p>   </div>     <div class="section" id="solrexception.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SolrException</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrexception.php#solrexception.props.sourceline">$<var class="varname">sourceline</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrexception.php#solrexception.props.sourcefile">$<var class="varname">sourcefile</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrexception.php#solrexception.props.zif-name">$<var class="varname">zif_name</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrexception.getinternalinfo.php" class="methodname">getInternalInfo</a></span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="solrexception.props">    <h2 class="title">属性</h2>    <dl>            <dt id="solrexception.props.sourceline"><var class="varname"><var class="varname">sourceline</var></var></dt>       <dd>        <p class="para">The line in c-space source file where exception was generated</p>      </dd>                 <dt id="solrexception.props.sourcefile"><var class="varname"><var class="varname">sourcefile</var></var></dt>       <dd>        <p class="para">The c-space source file where exception was generated</p>      </dd>                 <dt id="solrexception.props.zif-name"><var class="varname"><var class="varname">zif_name</var></var></dt>       <dd>        <p class="para">The c-space function where exception was generated</p>      </dd>          </dl>    </div>     </div>            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrException::getInternalInfo} — Returns internal information where the Exception was thrown</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
class SolrException extends Exception {

	/** @var int The line in c-space source file where exception was generated */
	protected $sourceline;

	/** @var string The c-space source file where exception was generated */
	protected $sourcefile;

	/** @var string The c-space function where exception was generated */
	protected $zif_name;

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns internal information where the Exception was thrown
	 * @link http://php.net/manual/en/solrexception.getinternalinfo.php
	 * @return array <p>
	 * Returns an array containing internal information where the error was thrown. Used only for debugging by extension
	 * developers.
	 * </p>
	 */
	public function getInternalInfo() {}

}