<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrobject" class="reference">   <h1 class="title">The SolrObject class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrobject.intro">    <h2 class="title">简介</h2>    <p class="para">     This is an object whose properties can also by accessed using the array syntax. All its properties are read-only.    </p>   </div>     <div class="section" id="solrobject.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrObject</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><strong class="interfacename">ArrayAccess</strong></span>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.destruct.php" class="methodname">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.getpropertynames.php" class="methodname">getPropertyNames</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.offsetexists.php" class="methodname">offsetExists</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$property_name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.offsetget.php" class="methodname">offsetGet</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$property_name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.offsetset.php" class="methodname">offsetSet</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$property_name</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$property_value</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrobject.offsetunset.php" class="methodname">offsetUnset</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$property_name</code></span>    )</div>     }</div>     </div>   </div>                                                      <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrObject::__construct} — Creates Solr object</li><li>{@link SolrObject::__destruct} — Destructor</li><li>{@link SolrObject::getPropertyNames} — Returns an array of all the names of the properties</li><li>{@link SolrObject::offsetExists} — Checks if the property exists</li><li>{@link SolrObject::offsetGet} — Used to retrieve a property</li><li>{@link SolrObject::offsetSet} — Sets the value for a property</li><li>{@link SolrObject::offsetUnset} — Unsets the value for the property</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrObject implements ArrayAccess {

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrObject constructor.
	 * @link http://php.net/manual/en/solrobject.construct.php
	 */
	public function __construct () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrobject.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array of all the names of the properties
	 * @link http://php.net/manual/en/solrobject.getpropertynames.php
	 * @return array <p>
	 * Returns an array.
	 * </p>
	 */
	public function getPropertyNames() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if the property exists
	 * @link http://php.net/manual/en/solrobject.offsetexists.php
	 * @param string $property_name <p>
	 * The name of the property.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function offsetExists($property_name) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Used to retrieve a property
	 * @link http://php.net/manual/en/solrobject.offsetget.php
	 * @param string $property_name <p>
	 * The name of the property.
	 * </p>
	 * @return SolrDocumentField <p>
	 * Returns the property value.
	 * </p>
	 */
	public function offsetGet($property_name) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the value for a property
	 * @link http://php.net/manual/en/solrobject.offsetset.php
	 * @param string $property_name <p>
	 * The name of the property.
	 * </p>
	 * @param string $property_value <p>
	 * The new value.
	 * </p>
	 */
	public function offsetSet($property_name , $property_value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Unsets the value for the property
	 * @link http://php.net/manual/en/solrobject.offsetunset.php
	 * @param string $property_name <p>
	 * The name of the property.
	 * </p>
	 * @TODO: Check -> doc indicate void function but return is set at true/false
	 */
	public function offsetUnset($property_name) {}

}