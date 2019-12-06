<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrutils" class="reference">   <h1 class="title">The SolrUtils class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrutils.intro">    <h2 class="title">简介</h2>    <p class="para">     Contains utility methods for retrieving the current extension version and preparing query phrases.    </p>    <p class="para">Also contains method for escaping query strings and parsing XML responses.</p>   </div>     <div class="section" id="solrutils.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">abstract</span>       <strong class="classname">SolrUtils</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">SolrObject</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrutils.digestxmlresponse.php" class="methodname" style="color:#CC7832">digestXmlResponse</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$xmlresponse</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$parse_mode</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrutils.escapequerychars.php" class="methodname" style="color:#CC7832">escapeQueryChars</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$str</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrutils.getsolrversion.php" class="methodname" style="color:#CC7832">getSolrVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrutils.queryphrase.php" class="methodname" style="color:#CC7832">queryPhrase</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$str</span></span>    )</div>     }</div>     </div>   </div>                                 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrUtils::digestXmlResponse} — Parses an response XML string into a SolrObject</li><li>{@link SolrUtils::escapeQueryChars} — Escapes a lucene query string</li><li>{@link SolrUtils::getSolrVersion} — Returns the current version of the Solr extension</li><li>{@link SolrUtils::queryPhrase} — Prepares a phrase from an unescaped lucene string</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
abstract class SolrUtils {

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Parses an response XML string into a SolrObject
	 * @link http://php.net/manual/en/solrutils.digestxmlresponse.php
	 * @param string $xmlresponse <p>
	 * The XML response string from the Solr server.
	 * </p>
	 * @param int $parse_mode [optional] <p>
	 * Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC
	 * </p>
	 * @return SolrObject <p>
	 * Returns the SolrObject representing the XML response.
	 * </p>
	 * <p>
	 * If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.
	 * </p>
	 * <p>
	 * If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.
	 * </p>
	 * @throws SolrException
	 */
	public static function digestXmlResponse($xmlresponse, $parse_mode = 0) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Escapes a lucene query string
	 * @link http://php.net/manual/en/solrutils.escapequerychars.php
	 * @param string $str <p>
	 * This is the query string to be escaped.
	 * </p>
	 * @return string <p>
	 * Returns the escaped string or <b>FALSE</b> on failure.
	 * </p>
	 */
	public static function escapeQueryChars($str) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the current version of the Solr extension
	 * @link http://php.net/manual/en/solrutils.getsolrversion.php
	 * @return string <p>
	 * The current version of the Apache Solr extension.
	 * </p>
	 */
	public static function getSolrVersion() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Prepares a phrase from an unescaped lucene string
	 * @link http://php.net/manual/en/solrutils.queryphrase.php
	 * @param $str <p>
	 * The lucene phrase.
	 * </p>
	 * @return string <p>
	 * Returns the phrase contained in double quotes.
	 * </p>
	 */
	public static function queryPhrase($str) {}

}