<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrupdateresponse" class="reference">   <h1 class="title">The SolrUpdateResponse class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrupdateresponse.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a response to an update request.    </p>   </div>     <div class="section" id="solrupdateresponse.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrUpdateResponse</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.solrresponse.php" class="classname">SolrResponse</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrupdateresponse.php#solrupdateresponse.constants.parse-solr-obj"><var class="varname">PARSE_SOLR_OBJ</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrupdateresponse.php#solrupdateresponse.constants.parse-solr-doc"><var class="varname">PARSE_SOLR_DOC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">SolrResponse::PARSE_SOLR_OBJ</var>}</var>      <span class="initializer"> = 0</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">SolrResponse::PARSE_SOLR_DOC</var>}</var>      <span class="initializer"> = 1</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status">$<var class="varname">http_status</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.parser-mode">$<var class="varname">parser_mode</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">bool</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.success">$<var class="varname">success</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status-message">$<var class="varname">http_status_message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-request-url">$<var class="varname">http_request_url</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request-headers">$<var class="varname">http_raw_request_headers</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request">$<var class="varname">http_raw_request</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response-headers">$<var class="varname">http_raw_response_headers</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response">$<var class="varname">http_raw_response</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-digested-response">$<var class="varname">http_digested_response</var></a></var>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/solrupdateresponse.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrupdateresponse.destruct.php" class="methodname">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getDigestedResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link SolrResponse::getHttpStatus}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getHttpStatusMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getRawRequest}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getRawRequestHeaders}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getRawResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getRawResponseHeaders}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link SolrResponse::getRequestUrl}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrObject</span> <span class="methodname">{@link SolrResponse::getResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link SolrResponse::setParseMode}</span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$parser_mode</code><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname">{@link SolrResponse::success}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="solrupdateresponse.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="solrupdateresponse.constants.types">     <h2 class="title">SolrUpdateResponse Class Constants</h2>     <dl>               <dt id="solrupdateresponse.constants.parse-solr-obj"><strong><code>SolrUpdateResponse::PARSE_SOLR_OBJ</code></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrObject instances</p>       </dd>                     <dt id="solrupdateresponse.constants.parse-solr-doc"><strong><code>SolrUpdateResponse::PARSE_SOLR_DOC</code></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrDocument instances.</p>       </dd>             </dl>     </div>   </div>     </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrUpdateResponse::__construct} — Constructor</li><li>{@link SolrUpdateResponse::__destruct} — Destructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrUpdateResponse extends SolrResponse {

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrUpdateResponse constructor.
	 * @link http://php.net/manual/en/solrupdateresponse.construct.php
	 */
	public function __construct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrupdateresponse.destruct.php
	 */
	public function __destruct() {}

}