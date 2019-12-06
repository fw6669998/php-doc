<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrclient" class="reference">   <h1 class="title">The SolrClient class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrclient.intro">    <h2 class="title">简介</h2>    <p class="para">     Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.    </p>   </div>     <div class="section" id="solrclient.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrClient</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.search-servlet-type"><var class="varname">SEARCH_SERVLET_TYPE</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.update-servlet-type"><var class="varname">UPDATE_SERVLET_TYPE</var></a></var>      <span class="initializer"> = 2</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.threads-servlet-type"><var class="varname">THREADS_SERVLET_TYPE</var></a></var>      <span class="initializer"> = 4</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.ping-servlet-type"><var class="varname">PING_SERVLET_TYPE</var></a></var>      <span class="initializer"> = 8</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.terms-servlet-type"><var class="varname">TERMS_SERVLET_TYPE</var></a></var>      <span class="initializer"> = 16</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.system-servlet-type"><var class="varname">SYSTEM_SERVLET_TYPE</var></a></var>      <span class="initializer"> = 32</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.default-search-servlet"><var class="varname">DEFAULT_SEARCH_SERVLET</var></a></var>      <span class="initializer"> = select</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.default-update-servlet"><var class="varname">DEFAULT_UPDATE_SERVLET</var></a></var>      <span class="initializer"> = update</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.default-threads-servlet"><var class="varname">DEFAULT_THREADS_SERVLET</var></a></var>      <span class="initializer"> = admin/threads</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.default-ping-servlet"><var class="varname">DEFAULT_PING_SERVLET</var></a></var>      <span class="initializer"> = admin/ping</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.default-terms-servlet"><var class="varname">DEFAULT_TERMS_SERVLET</var></a></var>      <span class="initializer"> = terms</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrclient.php#solrclient.constants.default-system-servlet"><var class="varname">DEFAULT_SYSTEM_SERVLET</var></a></var>      <span class="initializer"> = admin/system</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.adddocument.php" class="methodname" style="color:#CC7832">addDocument</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.solrinputdocument.php" class="type SolrInputDocument" style="color:#EAB766">SolrInputDocument</a></span> <span class="parameter" style="color:#2EACF9">$doc</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$overwrite</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$commitWithin</span><span class="initializer"> = 0</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.adddocuments.php" class="methodname" style="color:#CC7832">addDocuments</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$docs</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$overwrite</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$commitWithin</span><span class="initializer"> = 0</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.commit.php" class="methodname" style="color:#CC7832">commit</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$softCommit</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$waitSearcher</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$expungeDeletes</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$clientOptions</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.deletebyid.php" class="methodname" style="color:#CC7832">deleteById</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$id</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.deletebyids.php" class="methodname" style="color:#CC7832">deleteByIds</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$ids</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.deletebyqueries.php" class="methodname" style="color:#CC7832">deleteByQueries</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$queries</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.deletebyquery.php" class="methodname" style="color:#CC7832">deleteByQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQueryResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.getbyid.php" class="methodname" style="color:#CC7832">getById</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$id</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQueryResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.getbyids.php" class="methodname" style="color:#CC7832">getByIds</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$ids</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.getdebug.php" class="methodname" style="color:#CC7832">getDebug</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.getoptions.php" class="methodname" style="color:#CC7832">getOptions</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.optimize.php" class="methodname" style="color:#CC7832">optimize</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$maxSegments</span><span class="initializer"> = 1</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$softCommit</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$waitSearcher</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrPingResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.ping.php" class="methodname" style="color:#CC7832">ping</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQueryResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.query.php" class="methodname" style="color:#CC7832">query</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.solrparams.php" class="type SolrParams" style="color:#EAB766">SolrParams</a></span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.request.php" class="methodname" style="color:#CC7832">request</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$raw_request</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrUpdateResponse</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.rollback.php" class="methodname" style="color:#CC7832">rollback</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.setresponsewriter.php" class="methodname" style="color:#CC7832">setResponseWriter</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$responseWriter</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.setservlet.php" class="methodname" style="color:#CC7832">setServlet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.system.php" class="methodname" style="color:#CC7832">system</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrclient.threads.php" class="methodname" style="color:#CC7832">threads</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>     <div class="section" id="solrclient.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="solrclient.constants.search-servlet-type"><strong><span>SolrClient::SEARCH_SERVLET_TYPE</span></strong></dt>       <dd>        <p class="para">Used when updating the search servlet.</p>      </dd>                  <dt id="solrclient.constants.update-servlet-type"><strong><span>SolrClient::UPDATE_SERVLET_TYPE</span></strong></dt>       <dd>        <p class="para">Used when updating the update servlet.</p>      </dd>                  <dt id="solrclient.constants.threads-servlet-type"><strong><span>SolrClient::THREADS_SERVLET_TYPE</span></strong></dt>       <dd>        <p class="para">Used when updating the threads servlet.</p>      </dd>                  <dt id="solrclient.constants.ping-servlet-type"><strong><span>SolrClient::PING_SERVLET_TYPE</span></strong></dt>       <dd>        <p class="para">Used when updating the ping servlet.</p>      </dd>                  <dt id="solrclient.constants.terms-servlet-type"><strong><span>SolrClient::TERMS_SERVLET_TYPE</span></strong></dt>       <dd>        <p class="para">Used when updating the terms servlet.</p>      </dd>                      <dt id="solrclient.constants.system-servlet-type"><strong><span>SolrClient::SYSTEM_SERVLET_TYPE</span></strong></dt>       <dd>        <p class="para">Used when retrieving system information from the system servlet.</p>      </dd>                  <dt id="solrclient.constants.default-search-servlet"><strong><span>SolrClient::DEFAULT_SEARCH_SERVLET</span></strong></dt>       <dd>        <p class="para">This is the intial value for the search servlet.</p>      </dd>                  <dt id="solrclient.constants.default-update-servlet"><strong><span>SolrClient::DEFAULT_UPDATE_SERVLET</span></strong></dt>       <dd>        <p class="para">This is the intial value for the update servlet.</p>      </dd>                  <dt id="solrclient.constants.default-threads-servlet"><strong><span>SolrClient::DEFAULT_THREADS_SERVLET</span></strong></dt>       <dd>        <p class="para">This is the intial value for the threads servlet.</p>      </dd>                  <dt id="solrclient.constants.default-ping-servlet"><strong><span>SolrClient::DEFAULT_PING_SERVLET</span></strong></dt>       <dd>        <p class="para">This is the intial value for the ping servlet.</p>      </dd>                  <dt id="solrclient.constants.default-terms-servlet"><strong><span>SolrClient::DEFAULT_TERMS_SERVLET</span></strong></dt>       <dd>        <p class="para">This is the intial value for the terms servlet used for the TermsComponent</p>      </dd>                      <dt id="solrclient.constants.default-system-servlet"><strong><span>SolrClient::DEFAULT_SYSTEM_SERVLET</span></strong></dt>       <dd>        <p class="para">This is the intial value for the system servlet used to obtain Solr Server information</p>      </dd>           </dl>    </div>     </div>                                                                                                                                                               <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrClient::addDocument} — Adds a document to the index</li><li>{@link SolrClient::addDocuments} — Adds a collection of SolrInputDocument instances to the index</li><li>{@link SolrClient::commit} — Finalizes all add/deletes made to the index</li><li>{@link SolrClient::__construct} — Constructor for the SolrClient object</li><li>{@link SolrClient::deleteById} — Delete by Id</li><li>{@link SolrClient::deleteByIds} — Deletes by Ids</li><li>{@link SolrClient::deleteByQueries} — Removes all documents matching any of the queries</li><li>{@link SolrClient::deleteByQuery} — Deletes all documents matching the given query</li><li>{@link SolrClient::__destruct} — Destructor for SolrClient</li><li>{@link SolrClient::getById} — Get Document By Id. Utilizes Solr Realtime Get (RTG)</li><li>{@link SolrClient::getByIds} — Get Documents by their Ids. Utilizes Solr Realtime Get (RTG)</li><li>{@link SolrClient::getDebug} — Returns the debug data for the last connection attempt</li><li>{@link SolrClient::getOptions} — Returns the client options set internally</li><li>{@link SolrClient::optimize} — Defragments the index</li><li>{@link SolrClient::ping} — Checks if Solr server is still up</li><li>{@link SolrClient::query} — Sends a query to the server</li><li>{@link SolrClient::request} — Sends a raw update request</li><li>{@link SolrClient::rollback} — Rollbacks all add/deletes made to the index since the last commit</li><li>{@link SolrClient::setResponseWriter} — Sets the response writer used to prepare the response from Solr</li><li>{@link SolrClient::setServlet} — Changes the specified servlet type to a new value</li><li>{@link SolrClient::system} — Retrieve Solr Server information</li><li>{@link SolrClient::threads} — Checks the threads status</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrClient {

	/** @var int Used when updating the search servlet. */
	const SEARCH_SERVLET_TYPE = 1;

	/** @var int Used when updating the update servlet. */
	const UPDATE_SERVLET_TYPE = 2;

	/** @var int Used when updating the threads servlet. */
	const THREADS_SERVLET_TYPE = 4;

	/** @var int Used when updating the ping servlet. */
	const PING_SERVLET_TYPE = 8;

	/** @var int Used when updating the terms servlet. */
	const TERMS_SERVLET_TYPE = 16;

	/** @var int Used when retrieving system information from the system servlet. */
	const SYSTEM_SERVLET_TYPE = 32;

	/** @var string This is the intial value for the search servlet. */
	const DEFAULT_SEARCH_SERVLET = 'select';

	/** @var string This is the intial value for the update servlet. */
	const DEFAULT_UPDATE_SERVLET = 'update';

	/** @var string This is the intial value for the threads servlet. */
	const DEFAULT_THREADS_SERVLET = 'admin/threads';

	/** @var string This is the intial value for the ping servlet. */
	const DEFAULT_PING_SERVLET = 'admin/ping';

	/** @var string This is the intial value for the terms servlet used for the TermsComponent. */
	const DEFAULT_TERMS_SERVLET = 'terms';

	/** @var string This is the intial value for the system servlet used to obtain Solr Server information. */
	const DEFAULT_SYSTEM_SERVLET = 'admin/system';

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a document to the index
	 * @link http://php.net/manual/en/solrclient.adddocument.php
	 * @param SolrInputDocument $doc <p>
	 * The SolrInputDocument instance.
	 * </p>
	 * @param bool $overwrite [optional] <p>
	 * Whether to overwrite existing document or not. If <b>FALSE</b> there will be duplicates (several documents with
	 * the same ID).
	 * </p>
	 * <div>
	 * <b>Warning</b><br/>
	 * PECL Solr < 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite
	 * bool flag.<br/>
	 * <br/>
	 * $allowDups = false is the same as $overwrite = true
	 * </div>
	 * @param int $commitWithin [optional] <p>
	 * Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means
	 * disabled.
	 * </p>
	 * <p>
	 * When this value specified, it leaves the control of when to do the commit to Solr itself, optimizing number of
	 * commits to a minimum while still fulfilling the update latency requirements, and Solr will automatically do a
	 * commit when the oldest add in the buffer is due.
	 * <p/>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse object or throws an Exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function addDocument(SolrInputDocument $doc, $overwrite = true, $commitWithin = 0) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a collection of SolrInputDocument instances to the index
	 * @link http://php.net/manual/en/solrclient.adddocuments.php
	 * @param array $docs <p>
	 * An array containing the collection of SolrInputDocument instances. This array must be an actual variable.
	 * <p/>
	 * @param bool $overwrite [optional] <p>
	 * Whether to overwrite existing document or not. If <b>FALSE</b> there will be duplicates (several documents with
	 * the same ID).
	 * </p>
	 * <div>
	 * <b>Warning</b><br/>
	 * PECL Solr < 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite
	 * bool flag.<br/>
	 * <br/>
	 * $allowDups = false is the same as $overwrite = true
	 * </div>
	 * @param int $commitWithin [optional] <p>
	 * Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means
	 * disabled.
	 * </p>
	 * <p>
	 * When this value specified, it leaves the control of when to do the commit to Solr itself, optimizing number of
	 * commits to a minimum while still fulfilling the update latency requirements, and Solr will automatically do a
	 * commit when the oldest add in the buffer is due.
	 * <p/>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse object or throws an Exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 * @TODO: Check -> doc indicate void function but return is set at SolrUpdateResponse
	 */
	public function addDocuments(array $docs, $overwrite = true, $commitWithin = 0) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Finalizes all add/deletes made to the index
	 * @link http://php.net/manual/en/solrclient.commit.php
	 * @param bool $softCommit [optional] <p>
	 * This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees.
	 * (Solr4.0+)
	 * </p>
	 * <p>
	 * A soft commit is much faster since it only makes index changes visible and does not fsync index files or write a
	 * new index descriptor. If the JVM crashes or there is a loss of power, changes that occurred after the last hard
	 * commit will be lost. Search collections that have near-real-time requirements (that want index changes to be
	 * quickly visible to searches) will want to soft commit often but hard commit less frequently.
	 * </p>
	 * @param bool $waitSearcher [optional] <p>
	 * block until a new searcher is opened and registered as the main query searcher, making the changes visible.
	 * </p>
	 * @param bool $expungeDeletes [optional] <p>
	 * Merge segments with deletes away. (Solr1.4+)
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse object or throws an Exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function commit($softCommit = false, $waitSearcher = true, $expungeDeletes = false) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrClient constructor.
	 * @link http://php.net/manual/en/solrclient.construct.php
	 * @param array $clientOptions <p>
	 * This is an array containing one of the following keys :
	 * </p>
	 * <ul>
	 * <li><b>secure</b>: (Boolean value indicating whether or not to connect in secure mode)</li>
	 * <li><b>hostname</b>: (The hostname for the Solr server)</li>
	 * <li><b>port</b>: (The port number)</li>
	 * <li><b>path</b>: (The path to solr)</li>
	 * <li><b>wt</b>: (The name of the response writer e.g. xml, json)</li>
	 * <li><b>login</b>: (The username used for HTTP Authentication, if any)</li>
	 * <li><b>password</b>: (The HTTP Authentication password)</li>
	 * <li><b>proxy_host</b>: (The hostname for the proxy server, if any)</li>
	 * <li><b>proxy_port</b>: (The proxy port)</li>
	 * <li><b>proxy_login</b>: (The proxy username)</li>
	 * <li><b>proxy_password</b>: (The proxy password)</li>
	 * <li><b>timeout</b>: (This is maximum time in seconds allowed for the http data transfer operation. Default is 30
	 * seconds)</li>
	 * <li><b>ssl_cert</b>: (File name to a PEM-formatted file containing the private key + private certificate
	 * (concatenated in that order) )</li>
	 * <li><b>ssl_key</b>: (File name to a PEM-formatted private key file only)</li>
	 * <li><b>ssl_keypassword</b>: (Password for private key)</li>
	 * <li><b>ssl_cainfo</b>: (Name of file holding one or more CA certificates to verify peer with)</li>
	 * <li><b>ssl_capath</b>: (Name of directory holding multiple CA certificates to verify peer with )</li>
	 * </ul>
	 * <p>
	 * Please note the if the ssl_cert file only contains the private certificate, you have to specify a separate
	 * ssl_key file.
	 * </p>
	 * <p>
	 * The ssl_keypassword option is required if the ssl_cert or ssl_key options are set.
	 * </p>
	 * @throws SolrIllegalArgumentException
	 */
	public function __construct (array $clientOptions) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Delete by Id
	 * @link http://php.net/manual/en/solrclient.deletebyid.php
	 * @param string $id <p>
	 * The value of the uniqueKey field declared in the schema
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function deleteById($id) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Deletes by Ids
	 * @link http://php.net/manual/en/solrclient.deletebyids.php
	 * @param array $ids <p>
	 * An array of IDs representing the uniqueKey field declared in the schema for each document to be deleted. This
	 * must be an actual php variable.
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function deleteByIds(array $ids) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes all documents matching any of the queries
	 * @link http://php.net/manual/en/solrclient.deletebyqueries.php
	 * @param array $queries <p>
	 * The array of queries. This must be an actual php variable.
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function deleteByQueries(array $queries) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Deletes all documents matching the given query
	 * @link http://php.net/manual/en/solrclient.deletebyquery.php
	 * @param string $query <p>
	 * The query
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function deleteByQuery($query) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor for SolrClient
	 * @link http://php.net/manual/en/solrclient.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Get Document By Id. Utilizes Solr Realtime Get (RTG).
	 * @link http://php.net/manual/en/solrclient.getbyid.php
	 * @param string $id <p>
	 * Document ID
	 * </p>
	 * @return SolrQueryResponse
	 */
	public function getById ($id) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Get Documents by their Ids. Utilizes Solr Realtime Get (RTG).
	 * @link http://php.net/manual/en/solrclient.getbyids.php
	 * @param array $ids <p>
	 * Document ids
	 * </p>
	 * @return SolrQueryResponse
	 */
	public function getByIds(array $ids) {}

	/**
	 * (PECL solr &gt;= 0.9.7)<br/>
	 * Returns the debug data for the last connection attempt
	 * @link http://php.net/manual/en/solrclient.getdebug.php
	 * @return string <p>
	 * Returns a string on success and null if there is nothing to return.
	 * </p>
	 */
	public function getDebug () {}

	/**
	 * (PECL solr &gt;= 0.9.6)<br/>
	 * Returns the client options set internally
	 * @link http://php.net/manual/en/solrclient.getoptions.php
	 * @return array <p>
	 * Returns an array containing all the options for the SolrClient object set internally.
	 * </p>
	 */
	public function getOptions() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Defragments the index
	 * @link http://php.net/manual/en/solrclient.optimize.php
	 * @param int $maxSegments <p>
	 * Optimizes down to at most this number of segments. Since Solr 1.3
	 * </p>
	 * @param bool $softCommit <p>
	 * This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees.
	 * (Solr4.0+)
	 * </p>
	 * @param bool $waitSearcher <p>
	 * Block until a new searcher is opened and registered as the main query searcher, making the changes visible.
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function optimize($maxSegments = 1, $softCommit = true, $waitSearcher = true) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if Solr server is still up
	 * @link http://php.net/manual/en/solrclient.ping.php
	 * @return SolrPingResponse <p>
	 * Returns a SolrPingResponse object on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function ping() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sends a query to the server
	 * @link http://php.net/manual/en/solrclient.query.php
	 * @param SolrParams $query <p>
	 * A SolrParams object. It is recommended to use SolrQuery for advanced queries.
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function query(SolrParams $query) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sends a raw update request
	 * @link http://php.net/manual/en/solrclient.request.php
	 * @param string $raw_request <p>
	 * An XML string with the raw request to the server.
	 * </p>
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrIllegalArgumentException <p>
	 * Throws SolrIllegalArgumentException if raw_request was an empty string.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function request($raw_request) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Rollbacks all add/deletes made to the index since the last commit
	 * @link http://php.net/manual/en/solrclient.rollback.php
	 * @return SolrUpdateResponse <p>
	 * Returns a SolrUpdateResponse on success and throws an exception on failure.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function rollback() {}

	/**
	 * (PECL solr &gt;= 0.9.11)<br/>
	 * Sets the response writer used to prepare the response from Solr
	 * @link http://php.net/manual/en/solrclient.setresponsewriter.php
	 * @param string $responseWriter <p>
	 * One of the following:
	 * </p>
	 * <ul>
	 * <li>json</li>
	 * <li>phps</li>
	 * <li>xml</li>
	 * </ul>
	 */
	public function setResponseWriter($responseWriter) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Changes the specified servlet type to a new value
	 * @link http://php.net/manual/en/solrclient.setservlet.php
	 * @param int $type <p>
	 * One of the following :
	 * </p>
	 * <ul>
	 * <li>SolrClient::SEARCH_SERVLET_TYPE</li>
	 * <li>SolrClient::UPDATE_SERVLET_TYPE</li>
	 * <li>SolrClient::THREADS_SERVLET_TYPE</li>
	 * <li>SolrClient::PING_SERVLET_TYPE</li>
	 * <li>SolrClient::TERMS_SERVLET_TYPE</li>
	 * </ul>
	 * @param string $value <p>
	 * The new value for the servlet
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function setServlet($type, $value) {}

	/**
	 * (PECL solr &gt;= 2.0.0)<br/>
	 * Retrieve Solr Server information
	 * @link http://php.net/manual/en/solrclient.system.php
	 * @return SolrGenericResponse <p>
	 * Returns a SolrGenericResponse object on success.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
/**
*<div id="function.system" class="refentry">  <div class="refnamediv">   <h1 class="refname">system</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">system</span> &mdash; <span class="dc-title">执行外部程序，并且显示输出</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.system-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>system</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$command</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">&$return_var</span></span>   ] )</div>    <p class="para rdfs-comment">     同 C 版本的 <span class="function"><strong style="color:#CC7832">system()</strong></span> 函数一样，     本函数执行 <span class="parameter" style="color:#2EACF9">command</span> 参数所指定的命令，     并且输出执行结果。   </p>   <p class="para">     如果 PHP 运行在服务器模块中，     <span class="function"><strong style="color:#CC7832">system()</strong></span> 函数还会尝试在每行输出完毕之后，     自动刷新 web 服务器的输出缓存。   </p>   <p class="para">     如果要获取一个命令未经任何处理的     原始输出，     请使用 <span class="function">{@link passthru()}</span> 函数。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.system-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">command</span></dt>       <dd>        <p class="para">        要执行的命令。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">return_var</span></dt>       <dd>        <p class="para">         如果提供 <span class="parameter" style="color:#2EACF9">return_var</span> 参数，         则外部命令执行后的返回状态将会被设置到此变量中。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.system-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功则返回命令输出的最后一行，     失败则返回 <strong><span>FALSE</span></strong>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.system-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-4359">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">system()</strong></span> 例程</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;pre&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;输出&nbsp;shell&nbsp;命令&nbsp;"ls"&nbsp;的返回结果<br />//&nbsp;并且将输出的最后一样内容返回到&nbsp;$last_line。<br />//&nbsp;将命令的返回值保存到&nbsp;$retval。<br /></span><span style="color: #9876AA">$last_line&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">system</span><span style="color: #007700">(</span><span style="color: #DD0000">'ls'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$retval</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;打印更多信息<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'<br />&lt;/pre&gt;<br />&lt;hr&nbsp;/&gt;Last&nbsp;line&nbsp;of&nbsp;the&nbsp;output:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$last_line&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&lt;hr&nbsp;/&gt;Return&nbsp;value:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$retval</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.system-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong><p class="para">当用户提供的数据传入此函数，使用 <span class="function">{@link escapeshellarg()}</span> 或 <span class="function">{@link escapeshellcmd()}</span> 来确保用户欺骗系统从而执行任意命令。</p></div>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <p class="para">如何程序使用此函数启动，为了能保持在后台运行，此程序必须将输出重定向到文件或其它输出流。否则会导致 PHP 挂起，直至程序执行结束。</p></p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <span class="simpara"><a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 启用时，可仅可用 <a href="http://php.net/manual/zh/ini.sect.safe-mode.php#ini.safe-mode-exec-dir" class="link">safe_mode_exec_dir</a> 执行文件。实际上，现在不允许在到可执行的路径中存在 <em>..</em> 组件。</span></p></blockquote>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara"><a href="http://php.net/manual/zh/features.safe-mode.php" class="link">安全模式</a> 启用时，命令字符串会被 <span class="function">{@link escapeshellcmd()}</span> 转换。因此，<em>echo y | echo x</em> 会变成 <em>echo y \| echo x</em>。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.system-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link exec()} - 执行一个外部程序</span></li>     <li class="member"><span class="function">{@link passthru()} - 执行外部程序并且显示原始输出</span></li>     <li class="member"><span class="function">{@link popen()} - 打开进程文件指针</span></li>     <li class="member"><span class="function">{@link escapeshellcmd()} - shell 元字符转义</span></li>     <li class="member"><span class="function">{@link pcntl_exec()} - 在当前进程空间执行指定程序</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.operators.execution.php" class="link">执行操作符</a></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.exec.php">程序执行函数</a></div></div>
*/
	public function system() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks the threads status
	 * @link http://php.net/manual/en/solrclient.threads.php
	 * @return SolrGenericResponse <p>
	 * Returns a SolrGenericResponse object on success.
	 * </p>
	 * @throws SolrClientException <p>
	 * Throws SolrClientException if the client had failed, or there was a connection issue.
	 * </p>
	 * @throws SolrServerException <p>
	 * Throws SolrServerException if the Solr Server had failed to satisfy the request.
	 * </p>
	 */
	public function threads() {}

}