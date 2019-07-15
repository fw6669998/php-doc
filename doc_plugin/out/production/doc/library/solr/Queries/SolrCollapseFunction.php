<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrcollapsefunction" class="reference">   <h1 class="title">The SolrCollapseFunction class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 2.2.0)</p>     <div class="section" id="solrcollapsefunction.intro">    <h2 class="title">简介</h2>    <p class="para">     </p>   </div>     <div class="section" id="solrcollapsefunction.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SolrCollapseFunction</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">string</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">NULLPOLICY_IGNORE</var>}</var>      <span class="initializer"> = ignore</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">string</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">NULLPOLICY_EXPAND</var>}</var>      <span class="initializer"> = expand</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">string</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">NULLPOLICY_COLLAPSE</var>}</var>      <span class="initializer"> = collapse</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="constructorsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname">{@link __construct}</span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$field</code></span>   ] )</div>      <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link getField}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link getHint}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link getMax}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link getMin}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link getNullPolicy}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link getSize}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrCollapseFunction</span> <span class="methodname">{@link setField}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrCollapseFunction</span> <span class="methodname">{@link setHint}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$hint</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrCollapseFunction</span> <span class="methodname">{@link setMax}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$max</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrCollapseFunction</span> <span class="methodname">{@link setMin}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$min</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrCollapseFunction</span> <span class="methodname">{@link setNullPolicy}</span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$nullPolicy</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrCollapseFunction</span> <span class="methodname">{@link setSize}</span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$size</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link __toString}</span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>       <div class="section" id="solrcollapsefunction.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="solrcollapsefunction.constants.nullpolicy-ignore"><strong><code>SolrCollapseFunction::NULLPOLICY_IGNORE</code></strong></dt>       <dd>        <p class="para"/>      </dd>                  <dt id="solrcollapsefunction.constants.nullpolicy-expand"><strong><code>SolrCollapseFunction::NULLPOLICY_EXPAND</code></strong></dt>       <dd>        <p class="para"/>      </dd>                  <dt id="solrcollapsefunction.constants.nullpolicy-collapse"><strong><code>SolrCollapseFunction::NULLPOLICY_COLLAPSE</code></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>     </div>                                                                                                       <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrCollapseFunction::__construct} — Constructor</li><li>{@link SolrCollapseFunction::getField} — Returns the field that is being collapsed on</li><li>{@link SolrCollapseFunction::getHint} — Returns collapse hint</li><li>{@link SolrCollapseFunction::getMax} — Returns max parameter</li><li>{@link SolrCollapseFunction::getMin} — Returns min parameter</li><li>{@link SolrCollapseFunction::getNullPolicy} — Returns null policy</li><li>{@link SolrCollapseFunction::getSize} — Returns size parameter</li><li>{@link SolrCollapseFunction::setField} — Sets the field to collapse on</li><li>{@link SolrCollapseFunction::setHint} — Sets collapse hint</li><li>{@link SolrCollapseFunction::setMax} — Selects the group heads by the max value of a numeric field or function query</li><li>{@link SolrCollapseFunction::setMin} — Sets the initial size of the collapse data structures when collapsing on a numeric field only</li><li>{@link SolrCollapseFunction::setNullPolicy} — Sets the NULL Policy</li><li>{@link SolrCollapseFunction::setSize} — Sets the initial size of the collapse data structures when collapsing on a numeric field only</li><li>{@link SolrCollapseFunction::__toString} — Returns a string representing the constructed collapse function</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
class SolrCollapseFunction {

	/** @var string */
	const NULLPOLICY_IGNORE = 'ignore';

	/** @var string */
	const NULLPOLICY_EXPAND = 'expand';

	/** @var string */
	const NULLPOLICY_COLLAPSE = 'collapse';

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * SolrCollapseFunction constructor.
	 * @link http://php.net/manual/en/solrcollapsefunction.construct.php
	 * @param string $field [optional] <p>
	 * The field name to collapse on.<br/>
	 * In order to collapse a result. The field type must be a single valued String, Int or Float.
	 * </p>
	 */
	public function __construct ($field) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the field that is being collapsed on.
	 * @link http://php.net/manual/en/solrcollapsefunction.getfield.php
	 * @return string
	 */
	public function getField() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns collapse hint
	 * @link http://php.net/manual/en/solrcollapsefunction.gethint.php
	 * @return string
	 */
	public function getHint() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns max parameter
	 * @link http://php.net/manual/en/solrcollapsefunction.getmax.php
	 * @return string
	 */
	public function getMax() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns min parameter
	 * @link http://php.net/manual/en/solrcollapsefunction.getmin.php
	 * @return string
	 */
	public function getMin() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns null policy
	 * @link http://php.net/manual/en/solrcollapsefunction.getnullpolicy.php
	 * @return string
	 */
	public function getNullPolicy() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns size parameter
	 * @link http://php.net/manual/en/solrcollapsefunction.getsize.php
	 * @return int
	 */
	public function getSize() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the field to collapse on
	 * @link http://php.net/manual/en/solrcollapsefunction.setfield.php
	 * @param string $fieldName <p>
	 * The field name to collapse on. In order to collapse a result. The field type must be a single valued String, Int
	 * or Float.
	 * </p>
	 * @return SolrCollapseFunction
	 */
	public function setField($fieldName) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets collapse hint
	 * @link http://php.net/manual/en/solrcollapsefunction.sethint.php
	 * @param string $hint <p>
	 * Currently there is only one hint available "top_fc", which stands for top level FieldCache
	 * </p>
	 * @return SolrCollapseFunction
	 */
	public function setHint($hint) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Selects the group heads by the max value of a numeric field or function query.
	 * @link http://php.net/manual/en/solrcollapsefunction.setmax.php
	 * @param string $max
	 * @return SolrCollapseFunction
	 */
	public function setMax($max) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the initial size of the collapse data structures when collapsing on a numeric field only
	 * @link http://php.net/manual/en/solrcollapsefunction.setmin.php
	 * @param string $min
	 * @return SolrCollapseFunction
	 */
	public function setMin($min) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the NULL Policy
	 * @link http://php.net/manual/en/solrcollapsefunction.setnullpolicy.php
	 * @param string $nullPolicy
	 * @return SolrCollapseFunction
	 */
	public function setNullPolicy($nullPolicy) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the initial size of the collapse data structures when collapsing on a numeric field only.
	 * @link http://php.net/manual/en/solrcollapsefunction.setsize.php
	 * @param int $size
	 * @return SolrCollapseFunction
	 */
	public function setSize($size) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns a string representing the constructed collapse function
	 * @link http://php.net/manual/en/solrcollapsefunction.tostring.php
	 * @return string
	 */
	public function __toString() {}

}