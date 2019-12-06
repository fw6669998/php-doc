<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrresponse" class="reference">   <h1 class="title">The SolrResponse class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrresponse.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a response from the Solr server.    </p>   </div>     <div class="section" id="solrresponse.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">abstract</span>       <strong class="classname">SolrResponse</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.constants.parse-solr-obj"><var class="varname">PARSE_SOLR_OBJ</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.constants.parse-solr-doc"><var class="varname">PARSE_SOLR_DOC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status">$<var class="varname">http_status</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.parser-mode">$<var class="varname">parser_mode</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">bool</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.success">$<var class="varname">success</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status-message">$<var class="varname">http_status_message</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-request-url">$<var class="varname">http_request_url</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request-headers">$<var class="varname">http_raw_request_headers</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request">$<var class="varname">http_raw_request</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response-headers">$<var class="varname">http_raw_response_headers</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response">$<var class="varname">http_raw_response</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-digested-response">$<var class="varname">http_digested_response</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getdigestedresponse.php" class="methodname" style="color:#CC7832">getDigestedResponse</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.gethttpstatus.php" class="methodname" style="color:#CC7832">getHttpStatus</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.gethttpstatusmessage.php" class="methodname" style="color:#CC7832">getHttpStatusMessage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getrawrequest.php" class="methodname" style="color:#CC7832">getRawRequest</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getrawrequestheaders.php" class="methodname" style="color:#CC7832">getRawRequestHeaders</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getrawresponse.php" class="methodname" style="color:#CC7832">getRawResponse</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getrawresponseheaders.php" class="methodname" style="color:#CC7832">getRawResponseHeaders</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getrequesturl.php" class="methodname" style="color:#CC7832">getRequestUrl</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrObject</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.getresponse.php" class="methodname" style="color:#CC7832">getResponse</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.setparsemode.php" class="methodname" style="color:#CC7832">setParseMode</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$parser_mode</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrresponse.success.php" class="methodname" style="color:#CC7832">success</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="solrresponse.props">    <h2 class="title">属性</h2>    <dl>            <dt id="solrresponse.props.http-status"><var class="varname"><var class="varname">http_status</var></var></dt>       <dd>        <p class="para">The http status of the response.</p>      </dd>                 <dt id="solrresponse.props.parser-mode"><var class="varname"><var class="varname">parser_mode</var></var></dt>       <dd>        <p class="para">Whether to parse the solr documents as SolrObject or SolrDocument instances.</p>      </dd>                 <dt id="solrresponse.props.success"><var class="varname"><var class="varname">success</var></var></dt>       <dd>        <p class="para">Was there an error during the request</p>      </dd>                 <dt id="solrresponse.props.http-status-message"><var class="varname"><var class="varname">http_status_message</var></var></dt>       <dd>        <p class="para">Detailed message on http status</p>      </dd>                 <dt id="solrresponse.props.http-request-url"><var class="varname"><var class="varname">http_request_url</var></var></dt>       <dd>        <p class="para">The request URL</p>      </dd>                 <dt id="solrresponse.props.http-raw-request-headers"><var class="varname"><var class="varname">http_raw_request_headers</var></var></dt>       <dd>        <p class="para">A string of raw headers sent during the request.</p>      </dd>                 <dt id="solrresponse.props.http-raw-request"><var class="varname"><var class="varname">http_raw_request</var></var></dt>       <dd>        <p class="para">The raw request sent to the server</p>      </dd>                 <dt id="solrresponse.props.http-raw-response-headers"><var class="varname"><var class="varname">http_raw_response_headers</var></var></dt>       <dd>        <p class="para">Response headers from the Solr server.</p>      </dd>                 <dt id="solrresponse.props.http-raw-response"><var class="varname"><var class="varname">http_raw_response</var></var></dt>       <dd>        <p class="para">The response message from the server.</p>      </dd>                 <dt id="solrresponse.props.http-digested-response"><var class="varname"><var class="varname">http_digested_response</var></var></dt>       <dd>        <p class="para">The response in PHP serialized format.</p>      </dd>          </dl>    </div>         <div class="section" id="solrresponse.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="solrresponse.constants.types">     <h2 class="title">SolrResponse Class Constants</h2>     <dl>               <dt id="solrresponse.constants.parse-solr-obj"><strong><span>SolrResponse::PARSE_SOLR_OBJ</span></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrObject instances</p>       </dd>                     <dt id="solrresponse.constants.parse-solr-doc"><strong><span>SolrResponse::PARSE_SOLR_DOC</span></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrDocument instances.</p>       </dd>             </dl>     </div>   </div>     </div>                                                                                  <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrResponse::getDigestedResponse} — Returns the XML response as serialized PHP data</li><li>{@link SolrResponse::getHttpStatus} — Returns the HTTP status of the response</li><li>{@link SolrResponse::getHttpStatusMessage} — Returns more details on the HTTP status</li><li>{@link SolrResponse::getRawRequest} — Returns the raw request sent to the Solr server</li><li>{@link SolrResponse::getRawRequestHeaders} — Returns the raw request headers sent to the Solr server</li><li>{@link SolrResponse::getRawResponse} — Returns the raw response from the server</li><li>{@link SolrResponse::getRawResponseHeaders} — Returns the raw response headers from the server</li><li>{@link SolrResponse::getRequestUrl} — Returns the full URL the request was sent to</li><li>{@link SolrResponse::getResponse} — Returns a SolrObject representing the XML response from the server</li><li>{@link SolrResponse::setParseMode} — Sets the parse mode</li><li>{@link SolrResponse::success} — Was the request a success</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
abstract class SolrResponse  {

	/** @var int Documents should be parsed as SolrObject instances */
	const PARSE_SOLR_OBJ = 0;

	/** @var int Documents should be parsed as SolrDocument instances. */
	const PARSE_SOLR_DOC = 1;
	
	/** @var int The http status of the response. */
	protected $http_status;
	
	/** @var int Whether to parse the solr documents as SolrObject or SolrDocument instances. */
	protected $parser_mode;

	/** @var bool Was there an error during the request */
	protected $success;

	/** @var string Detailed message on http status */
	protected $http_status_message;

	/** @var string The request URL */
	protected $http_request_url;

	/** @var string A string of raw headers sent during the request. */
	protected $http_raw_request_headers;

	/** @var string The raw request sent to the server */
	protected $http_raw_request;

	/** @var string Response headers from the Solr server. */
	protected $http_raw_response_headers;

	/** @var string The response message from the server. */
	protected $http_raw_response;

	/** @var string The response in PHP serialized format. */
	protected $http_digested_response;

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the XML response as serialized PHP data
	 * @link http://php.net/manual/en/solrresponse.getdigestedresponse.php
	 * @return string <p>
	 * Returns the XML response as serialized PHP data
	 * </p>
	 */
	public function getDigestedResponse() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the HTTP status of the response
	 * @link http://php.net/manual/en/solrresponse.gethttpstatus.php
	 * @return int <p>
	 * Returns the HTTP status of the response.
	 * </p>
	 */
	public function getHttpStatus() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns more details on the HTTP status
	 * @link http://php.net/manual/en/solrresponse.gethttpstatusmessage.php
	 * @return string <p>
	 * Returns more details on the HTTP status
	 * </p>
	 */
	public function getHttpStatusMessage () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the raw request sent to the Solr server
	 * @link http://php.net/manual/en/solrresponse.getrawrequest.php
	 * @return string <p>
	 * Returns the raw request sent to the Solr server
	 * </p>
	 */
	public function getRawRequest () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the raw request headers sent to the Solr server
	 * @link http://php.net/manual/en/solrresponse.getrawrequestheaders.php
	 * @return string <p>
	 * Returns the raw request headers sent to the Solr server
	 * </p>
	 */
	public function getRawRequestHeaders () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the raw response from the server
	 * @link http://php.net/manual/en/solrresponse.getrawresponse.php
	 * @return string <p>
	 * Returns the raw response from the server.
	 * </p>
	 */
	public function getRawResponse () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the raw response headers from the server
	 * @link http://php.net/manual/en/solrresponse.getrawresponseheaders.php
	 * @return string <p>
	 * Returns the raw response headers from the server.
	 * </p>
	 */
	public function getRawResponseHeaders () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the full URL the request was sent to
	 * @link http://php.net/manual/en/solrresponse.getrequesturl.php
	 * @return string <p>
	 * Returns the full URL the request was sent to
	 * </p>
	 */
	public function getRequestUrl () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns a SolrObject representing the XML response from the server
	 * @link http://php.net/manual/en/solrresponse.getresponse.php
	 * @return SolrObject <p>
	 * Returns a SolrObject representing the XML response from the server
	 * </p>
	 */
	public function getResponse () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the parse mode
	 * @link http://php.net/manual/en/solrresponse.setparsemode.php
	 * @param int $parser_mode <ul>
	 * <li>SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. </li>
	 * <li>SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.</li>
	 * </ul>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function setParseMode ($parser_mode = 0) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Was the request a success
	 * @link http://php.net/manual/en/solrresponse.success.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> if it was successful and <b>FALSE</b> if it was not.
	 * </p>
	 */
	public function success () {}

}