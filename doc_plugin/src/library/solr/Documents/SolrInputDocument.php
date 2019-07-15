<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrinputdocument" class="reference">   <h1 class="title">The SolrInputDocument class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrinputdocument.intro">    <h2 class="title">简介</h2>    <p class="para">     This class represents a Solr document that is about to be submitted to the Solr index.    </p>   </div>     <div class="section" id="solrinputdocument.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrInputDocument</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrinputdocument.php#solrinputdocument.constants.sort-default"><var class="varname">SORT_DEFAULT</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrinputdocument.php#solrinputdocument.constants.sort-asc"><var class="varname">SORT_ASC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrinputdocument.php#solrinputdocument.constants.sort-desc"><var class="varname">SORT_DESC</var></a></var>      <span class="initializer"> = 2</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrinputdocument.php#solrinputdocument.constants.sort-field-name"><var class="varname">SORT_FIELD_NAME</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrinputdocument.php#solrinputdocument.constants.sort-field-value-count"><var class="varname">SORT_FIELD_VALUE_COUNT</var></a></var>      <span class="initializer"> = 2</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrinputdocument.php#solrinputdocument.constants.sort-field-boost-value"><var class="varname">SORT_FIELD_BOOST_VALUE</var></a></var>      <span class="initializer"> = 4</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.addchilddocument.php" class="methodname">addChildDocument</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.solrinputdocument.php" class="type SolrInputDocument">SolrInputDocument</a></span> <code class="parameter">$child</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.addchilddocuments.php" class="methodname">addChildDocuments</a></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$docs</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.addfield.php" class="methodname">addField</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldValue</code></span>    [, <span class="methodparam"><span class="type">float</span> <code class="parameter">$fieldBoostValue</code><span class="initializer"> = 0.0</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.clear.php" class="methodname">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.deletefield.php" class="methodname">deleteField</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.destruct.php" class="methodname">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.fieldexists.php" class="methodname">fieldExists</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">float</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getboost.php" class="methodname">getBoost</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getchilddocuments.php" class="methodname">getChildDocuments</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getchilddocumentscount.php" class="methodname">getChildDocumentsCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrDocumentField</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getfield.php" class="methodname">getField</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">float</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getfieldboost.php" class="methodname">getFieldBoost</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getfieldcount.php" class="methodname">getFieldCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.getfieldnames.php" class="methodname">getFieldNames</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.haschilddocuments.php" class="methodname">hasChildDocuments</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.merge.php" class="methodname">merge</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.solrinputdocument.php" class="type SolrInputDocument">SolrInputDocument</a></span> <code class="parameter">$sourceDoc</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$overwrite</code><span class="initializer"> = <strong><code>TRUE</code></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.reset.php" class="methodname">reset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.setboost.php" class="methodname">setBoost</a></span>     ( <span class="methodparam"><span class="type">float</span> <code class="parameter">$documentBoostValue</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.setfieldboost.php" class="methodname">setFieldBoost</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    , <span class="methodparam"><span class="type">float</span> <code class="parameter">$fieldBoostValue</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.sort.php" class="methodname">sort</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$sortOrderBy</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$sortDirection</code><span class="initializer"> = SolrInputDocument::SORT_ASC</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrinputdocument.toarray.php" class="methodname">toArray</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>       <div class="section" id="solrinputdocument.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="solrinputdocument.constants.types">     <h2 class="title">SolrInputDocument Class Constants</h2>     <dl>               <dt id="solrinputdocument.constants.sort-default"><strong><code>SolrInputDocument::SORT_DEFAULT</code></strong></dt>        <dd>         <p class="para">Sorts the fields in ascending order.</p>       </dd>                     <dt id="solrinputdocument.constants.sort-asc"><strong><code>SolrInputDocument::SORT_ASC</code></strong></dt>        <dd>         <p class="para">Sorts the fields in ascending order.</p>       </dd>                     <dt id="solrinputdocument.constants.sort-desc"><strong><code>SolrInputDocument::SORT_DESC</code></strong></dt>        <dd>         <p class="para">Sorts the fields in descending order.</p>       </dd>                     <dt id="solrinputdocument.constants.sort-field-name"><strong><code>SolrInputDocument::SORT_FIELD_NAME</code></strong></dt>        <dd>         <p class="para">Sorts the fields by name</p>       </dd>                     <dt id="solrinputdocument.constants.sort-field-value-count"><strong><code>SolrInputDocument::SORT_FIELD_VALUE_COUNT</code></strong></dt>        <dd>         <p class="para">Sorts the fields by number of values.</p>       </dd>                     <dt id="solrinputdocument.constants.sort-field-boost-value"><strong><code>SolrInputDocument::SORT_FIELD_BOOST_VALUE</code></strong></dt>        <dd>         <p class="para">Sorts the fields by boost value.</p>       </dd>             </dl>     </div>   </div>     </div>                                                                                                                                                                      <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrInputDocument::addChildDocument} — Adds a child document for block indexing</li><li>{@link SolrInputDocument::addChildDocuments} — Adds an array of child documents</li><li>{@link SolrInputDocument::addField} — Adds a field to the document</li><li>{@link SolrInputDocument::clear} — Resets the input document</li><li>{@link SolrInputDocument::__clone} — Creates a copy of a SolrDocument</li><li>{@link SolrInputDocument::__construct} — Constructor</li><li>{@link SolrInputDocument::deleteField} — Removes a field from the document</li><li>{@link SolrInputDocument::__destruct} — Destructor</li><li>{@link SolrInputDocument::fieldExists} — Checks if a field exists</li><li>{@link SolrInputDocument::getBoost} — Retrieves the current boost value for the document</li><li>{@link SolrInputDocument::getChildDocuments} — Returns an array of child documents (SolrInputDocument)</li><li>{@link SolrInputDocument::getChildDocumentsCount} — Returns the number of child documents</li><li>{@link SolrInputDocument::getField} — Retrieves a field by name</li><li>{@link SolrInputDocument::getFieldBoost} — Retrieves the boost value for a particular field</li><li>{@link SolrInputDocument::getFieldCount} — Returns the number of fields in the document</li><li>{@link SolrInputDocument::getFieldNames} — Returns an array containing all the fields in the document</li><li>{@link SolrInputDocument::hasChildDocuments} — Returns true if the document has any child documents</li><li>{@link SolrInputDocument::merge} — Merges one input document into another</li><li>{@link SolrInputDocument::reset} — This is an alias of SolrInputDocument::clear</li><li>{@link SolrInputDocument::setBoost} — Sets the boost value for this document</li><li>{@link SolrInputDocument::setFieldBoost} — Sets the index-time boost value for a field</li><li>{@link SolrInputDocument::sort} — Sorts the fields within the document</li><li>{@link SolrInputDocument::toArray} — Returns an array representation of the input document</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrInputDocument {

	/** @var int Sorts the fields in ascending order. */
	const SORT_DEFAULT = 1 ;

	/** @var int Sorts the fields in ascending order. */
	const SORT_ASC = 1 ;

	/** @var int Sorts the fields in descending order. */
	const SORT_DESC = 2 ;

	/** @var int Sorts the fields by name */
	const SORT_FIELD_NAME = 1 ;

	/** @var int Sorts the fields by number of values. */
	const SORT_FIELD_VALUE_COUNT = 2 ;

	/** @var int Sorts the fields by boost value. */
	const SORT_FIELD_BOOST_VALUE = 4 ;

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Adds a child document for block indexing
	 * @link http://php.net/manual/en/solrinputdocument.addchilddocument.php
	 * @param SolrInputDocument $child <p>
	 * A SolrInputDocument object.
	 * </p>
	 * @throws SolrIllegalArgumentException
	 * @throws SolrException
	 */
	public function addChildDocument(SolrInputDocument $child) {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Adds an array of child documents
	 * @link http://php.net/manual/en/solrinputdocument.addchilddocuments.php
	 * @param array $docs <p>
	 * An array of SolrInputDocument objects.
	 * </p>
	 * @throws SolrIllegalArgumentException
	 * @throws SolrException
	 */
	public function addChildDocuments(array &$docs) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a field to the document
	 * @link http://php.net/manual/en/solrinputdocument.addfield.php
	 * @param string $fieldName <p>
	 * The name of the field
	 * </p>
	 * @param string $fieldValue <p>
	 * The value for the field.
	 * </p>
	 * @param float $fieldBoostValue [optional] <p>
	 * The index time boost for the field. Though this cannot be negative, you can still pass values less than 1.0 but
	 * they must be greater than zero.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function addField($fieldName, $fieldValue, $fieldBoostValue = 0.0) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Resets the input document
	 * @link http://php.net/manual/en/solrinputdocument.clear.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function clear() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Creates a copy of a SolrDocument
	 * @link http://php.net/manual/en/solrinputdocument.clone.php
	 */
	public function __clone() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrInputDocument constructor.
	 * @link http://php.net/manual/en/solrinputdocument.construct.php
	 */
	public function __construct () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a field from the document
	 * @link http://php.net/manual/en/solrinputdocument.construct.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function deleteField($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrinputdocument.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if a field exists
	 * @link http://php.net/manual/en/solrinputdocument.fieldexists.php
	 * @param string $fieldName <p>
	 * Name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> if the field was found and <b>FALSE</b> if it was not found.
	 * </p>
	 */
	public function fieldExists($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves the current boost value for the document
	 * @link http://php.net/manual/en/solrinputdocument.getboost.php
	 * @return float <p>
	 * Returns the boost value on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getBoost() {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Returns an array of child documents (SolrInputDocument)
	 * @link http://php.net/manual/en/solrinputdocument.getchilddocuments.php
	 * @return SolrInputDocument[]
	 */
	public function getChildDocuments() {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Returns the number of child documents
	 * @link http://php.net/manual/en/solrinputdocument.getchilddocumentscount.php
	 * @return int
	 */
	public function getChildDocumentsCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves a field by name
	 * @link http://php.net/manual/en/solrinputdocument.getfield.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return SolrDocumentField<p>
	 * Returns a SolrDocumentField object on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getField($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves the boost value for a particular field
	 * @link http://php.net/manual/en/solrinputdocument.getfieldboost.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return float <p>
	 * Returns the boost value for the field or <b>FALSE</b> if there was an error.
	 * </p>
	 */
	public function getFieldBoost($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the number of fields in the document
	 * @link http://php.net/manual/en/solrinputdocument.getfieldcount.php
	 * @return int <p>
	 * Returns an integer on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getFieldCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array containing all the fields in the document
	 * @link http://php.net/manual/en/solrinputdocument.getfieldnames.php
	 * @return array <p>
	 * Returns an array on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getFieldNames() {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Checks whether the document has any child documents
	 * @link http://php.net/manual/en/solrinputdocument.haschilddocuments.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> if the document has any child documents
	 * </p>
	 */
	public function hasChildDocuments() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Merges one input document into another
	 * @link http://php.net/manual/en/solrinputdocument.merge.php
	 * @param SolrInputDocument $sourceDoc <p>
	 * The source document.
	 * </p>
	 * @param bool $overwrite [optional] <p>
	 * If this is <b>TRUE</b> it will replace matching fields in the destination document.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure. In the future, this will be modified to return the
	 * number of fields in the new document.
	 * </p>
	 */
	public function merge(SolrInputDocument $sourceDoc, $overwrite = true) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * This is an alias of SolrInputDocument::clear
	 * @link http://php.net/manual/en/solrinputdocument.reset.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>reset()</strong></span> 将 <code class="parameter">array</code>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the boost value for this document
	 * @link http://php.net/manual/en/solrinputdocument.setboost.php
	 * @param float $documentBoostValue <p>
	 * The index-time boost value for this document.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function setBoost($documentBoostValue) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the index-time boost value for a field
	 * http://php.net/manual/en/solrinputdocument.setfieldboost.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @param float $fieldBoostValue <p>
	 * The index time boost value.
	 * </p>
	 */
	public function setFieldBoost($fieldName, $fieldBoostValue) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sorts the fields within the document
	 * @link http://php.net/manual/en/solrinputdocument.sort.php
	 * @param int $sortOrderBy <p>
	 * The sort criteria, must be one of :
	 * <ul>
	 * <li>SolrInputDocument::SORT_FIELD_NAME</li>
	 * <li>SolrInputDocument::SORT_FIELD_BOOST_VALUE</li>
	 * <li>SolrInputDocument::SORT_FIELD_VALUE_COUNT</li>
	 * </ul>
	 * </p>
	 * @param int $sortDirection [optional] <p>
	 * The sort direction, can be one of :
	 * <ul>
	 * <li>SolrInputDocument::SORT_DEFAULT</li>
	 * <li>SolrInputDocument::SORT_ASC</li>
	 * <li>SolrInputDocument::SORT_DESC</li>
	 * </ul>
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
/**
*<div id="function.sort" class="refentry">  <div class="refnamediv">   <h1 class="refname">sort</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">sort</span> &mdash; <span class="dc-title">对数组排序</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.sort-description">   <h3 class="title">说明</h3>    <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sort</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$sort_flags</code><span class="initializer"> = SORT_REGULAR</span></span>   ] )</div>    <p class="para rdfs-comment">    本函数对数组进行排序。当本函数结束时数组单元将被从最低到最高重新安排。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:   <p class="para">   If two members compare as equal, their relative order in the sorted array is undefined.  </p> </p></blockquote>   </div>   <div class="refsect1 parameters" id="refsect1-function.sort-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        要排序的数组。       </p>      </dd>                 <dt> <code class="parameter">sort_flags</code></dt>       <dd>        <p class="para">        可选的第二个参数 <code class="parameter">sort_flags</code>    可以用以下值改变排序的行为：       </p>       <p class="para">        排序类型标记：        <ul class="itemizedlist">         <li class="listitem">          <span class="simpara"><strong><code>SORT_REGULAR</code></strong>  - 正常比较单元（不改变类型）</span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_NUMERIC</code></strong> - 单元被作为数字来比较</span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_STRING</code></strong> - 单元被作为字符串来比较</span>         </li>         <li class="listitem">          <span class="simpara"> <strong><code>SORT_LOCALE_STRING</code></strong> -       根据当前的区域（locale）设置来把单元当作字符串比较，可以用       <span class="function">{@link setlocale()}</span> 来改变。          </span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_NATURAL</code></strong> - 和 <span class="function">{@link natsort()}</span> 类似对每个单元以“自然的顺序”对字符串进行排序。 PHP 5.4.0 中新增的。</span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_FLAG_CASE</code></strong> - 能够与 <strong><code>SORT_STRING</code></strong> 或           <strong><code>SORT_NATURAL</code></strong> 合并（OR 位运算），不区分大小写排序字符串。</span>         </li>        </ul>       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.sort-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.sort-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>5.4.0</td>       <td>        添加了 <code class="parameter">sort_flags</code> 内 <strong><code>SORT_NATURAL</code></strong> 和        <strong><code>SORT_FLAG_CASE</code></strong> 的支持。        </td>      </tr>       <tr>       <td>5.0.2</td>       <td>        添加了  <strong><code>SORT_LOCALE_STRING</code></strong>。       </td>      </tr>      </tbody>       </table>   </div>   <div class="refsect1 examples" id="refsect1-function.sort-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6113">     <p><strong>Example #1 <span class="function"><strong>sort()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$fruits&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"lemon"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"banana"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"apple"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">sort</span><span style="color: #007700">(</span><span style="color: #9876AA">$fruits</span><span style="color: #007700">);<br />foreach&nbsp;(</span><span style="color: #9876AA">$fruits&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"fruits["&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"]&nbsp;=&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$val&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruits[0] = apple fruits[1] = banana fruits[2] = lemon fruits[3] = orange </pre></div>     </div>    </div>   </p>   <p class="para">    fruits 被按照字母顺序排序。   </p>   <p class="para">    <div class="example" id="example-6114">     <p><strong>Example #2 使用不区分大小写自然排序的 <span class="function"><strong>sort()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$fruits&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"Orange1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange2"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Orange3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange20"<br /></span><span style="color: #007700">);<br /></span><span style="color: #9876AA">sort</span><span style="color: #007700">(</span><span style="color: #9876AA">$fruits</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">SORT_NATURAL&nbsp;</span><span style="color: #007700">|&nbsp;</span><span style="color: #9876AA">SORT_FLAG_CASE</span><span style="color: #007700">);<br />foreach&nbsp;(</span><span style="color: #9876AA">$fruits&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"fruits["&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"]&nbsp;=&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$val&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruits[0] = Orange1 fruits[1] = orange2 fruits[2] = Orange3 fruits[3] = orange20 </pre></div>     </div>    </div>   </p>   <p class="para">    fruits 排序得像 <span class="function">{@link natcasesort()}</span> 的结果。   </p>  </div>   <div class="refsect1 notes" id="refsect1-function.sort-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">此函数为 <code class="parameter">array</code> 中的元素赋与新的键名。这将删除原有的键名，而不是仅仅将键名重新排序。</span></p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">     和大多数 PHP 排序函数一样，<span class="function"><strong>sort()</strong></span>      使用了 <a href="http://en.wikipedia.org/wiki/Quicksort" class="link external">&raquo;&nbsp;Quicksort</a> 实现的。     The pivot is chosen in the middle of the partition resulting in an optimal     time for already sorted arrays. This is however an implementation detail you     shouldn&#039;t rely on.    </span>   </p></blockquote>   <div class="warning"><strong class="warning">Warning</strong>    <p class="simpara">     在对含有混合类型值的数组排序时要小心，因为     <span class="function"><strong>sort()</strong></span> 可能会产生不可预知的结果。    </p>   </div>  </div>   <div class="refsect1 seealso" id="refsect1-function.sort-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link asort()} - 对数组进行排序并保持索引关系</span></li>     <li class="member"><a href="http://php.net/manual/zh/array.sorting.php" class="link">数组排序函数对比</a></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function sort($sortOrderBy, $sortDirection = SolrInputDocument::SORT_ASC) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array representation of the input document
	 * @link http://php.net/manual/en/solrinputdocument.toarray.php
	 * @return array <p>
	 * Returns an array containing the fields. It returns FALSE on failure.
	 * </p>
	 */
	public function toArray() {}

}