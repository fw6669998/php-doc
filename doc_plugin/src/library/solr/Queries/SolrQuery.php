<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrquery" class="reference">   <h1 class="title">The SolrQuery class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrquery.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a collection of name-value pairs sent to the Solr server during a request.    </p>   </div>     <div class="section" id="solrquery.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SolrQuery</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.solrmodifiableparams.php" class="classname">SolrModifiableParams</a>      </span>            <span class="oointerface">implements        <span class="interfacename"><strong class="interfacename">Serializable</strong></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrquery.php#solrquery.constants.order-asc"><var class="varname">ORDER_ASC</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrquery.php#solrquery.constants.order-desc"><var class="varname">ORDER_DESC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrquery.php#solrquery.constants.facet-sort-index"><var class="varname">FACET_SORT_INDEX</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrquery.php#solrquery.constants.facet-sort-count"><var class="varname">FACET_SORT_COUNT</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrquery.php#solrquery.constants.terms-sort-index"><var class="varname">TERMS_SORT_INDEX</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrquery.php#solrquery.constants.terms-sort-count"><var class="varname">TERMS_SORT_COUNT</var></a></var>      <span class="initializer"> = 1</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addexpandfilterquery.php" class="methodname" style="color:#CC7832">addExpandFilterQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fq</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addexpandsortfield.php" class="methodname" style="color:#CC7832">addExpandSortField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$order</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addfacetdatefield.php" class="methodname" style="color:#CC7832">addFacetDateField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$dateField</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addfacetdateother.php" class="methodname" style="color:#CC7832">addFacetDateOther</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addfacetfield.php" class="methodname" style="color:#CC7832">addFacetField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addfacetquery.php" class="methodname" style="color:#CC7832">addFacetQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$facetQuery</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addfield.php" class="methodname" style="color:#CC7832">addField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addfilterquery.php" class="methodname" style="color:#CC7832">addFilterQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fq</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addgroupfield.php" class="methodname" style="color:#CC7832">addGroupField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832">{@link addGroupFunction}</span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addgroupquery.php" class="methodname" style="color:#CC7832">addGroupQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addgroupsortfield.php" class="methodname" style="color:#CC7832">addGroupSortField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$order</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addhighlightfield.php" class="methodname" style="color:#CC7832">addHighlightField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addmltfield.php" class="methodname" style="color:#CC7832">addMltField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addmltqueryfield.php" class="methodname" style="color:#CC7832">addMltQueryField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$boost</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addsortfield.php" class="methodname" style="color:#CC7832">addSortField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$order</span><span class="initializer"> = SolrQuery::ORDER_DESC</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addstatsfacet.php" class="methodname" style="color:#CC7832">addStatsFacet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.addstatsfield.php" class="methodname" style="color:#CC7832">addStatsField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.collapse.php" class="methodname" style="color:#CC7832">collapse</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span> <span class="parameter" style="color:#2EACF9">$collapseFunction</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$q</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getexpand.php" class="methodname" style="color:#CC7832">getExpand</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getexpandfilterqueries.php" class="methodname" style="color:#CC7832">getExpandFilterQueries</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getexpandquery.php" class="methodname" style="color:#CC7832">getExpandQuery</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getexpandrows.php" class="methodname" style="color:#CC7832">getExpandRows</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getexpandsortfields.php" class="methodname" style="color:#CC7832">getExpandSortFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacet.php" class="methodname" style="color:#CC7832">getFacet</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetdateend.php" class="methodname" style="color:#CC7832">getFacetDateEnd</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetdatefields.php" class="methodname" style="color:#CC7832">getFacetDateFields</a></span> ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetdategap.php" class="methodname" style="color:#CC7832">getFacetDateGap</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetdatehardend.php" class="methodname" style="color:#CC7832">getFacetDateHardEnd</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetdateother.php" class="methodname" style="color:#CC7832">getFacetDateOther</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetdatestart.php" class="methodname" style="color:#CC7832">getFacetDateStart</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetfields.php" class="methodname" style="color:#CC7832">getFacetFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetlimit.php" class="methodname" style="color:#CC7832">getFacetLimit</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetmethod.php" class="methodname" style="color:#CC7832">getFacetMethod</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetmincount.php" class="methodname" style="color:#CC7832">getFacetMinCount</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetmissing.php" class="methodname" style="color:#CC7832">getFacetMissing</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetoffset.php" class="methodname" style="color:#CC7832">getFacetOffset</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetprefix.php" class="methodname" style="color:#CC7832">getFacetPrefix</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetqueries.php" class="methodname" style="color:#CC7832">getFacetQueries</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfacetsort.php" class="methodname" style="color:#CC7832">getFacetSort</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfields.php" class="methodname" style="color:#CC7832">getFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getfilterqueries.php" class="methodname" style="color:#CC7832">getFilterQueries</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroup.php" class="methodname" style="color:#CC7832">getGroup</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupcachepercent.php" class="methodname" style="color:#CC7832">getGroupCachePercent</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupfacet.php" class="methodname" style="color:#CC7832">getGroupFacet</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupfields.php" class="methodname" style="color:#CC7832">getGroupFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupformat.php" class="methodname" style="color:#CC7832">getGroupFormat</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupfunctions.php" class="methodname" style="color:#CC7832">getGroupFunctions</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgrouplimit.php" class="methodname" style="color:#CC7832">getGroupLimit</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupmain.php" class="methodname" style="color:#CC7832">getGroupMain</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupngroups.php" class="methodname" style="color:#CC7832">getGroupNGroups</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupoffset.php" class="methodname" style="color:#CC7832">getGroupOffset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupqueries.php" class="methodname" style="color:#CC7832">getGroupQueries</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgroupsortfields.php" class="methodname" style="color:#CC7832">getGroupSortFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getgrouptruncate.php" class="methodname" style="color:#CC7832">getGroupTruncate</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlight.php" class="methodname" style="color:#CC7832">getHighlight</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightalternatefield.php" class="methodname" style="color:#CC7832">getHighlightAlternateField</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightfields.php" class="methodname" style="color:#CC7832">getHighlightFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightformatter.php" class="methodname" style="color:#CC7832">getHighlightFormatter</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightfragmenter.php" class="methodname" style="color:#CC7832">getHighlightFragmenter</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightfragsize.php" class="methodname" style="color:#CC7832">getHighlightFragsize</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlighthighlightmultiterm.php" class="methodname" style="color:#CC7832">getHighlightHighlightMultiTerm</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightmaxalternatefieldlength.php" class="methodname" style="color:#CC7832">getHighlightMaxAlternateFieldLength</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightmaxanalyzedchars.php" class="methodname" style="color:#CC7832">getHighlightMaxAnalyzedChars</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightmergecontiguous.php" class="methodname" style="color:#CC7832">getHighlightMergeContiguous</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightregexmaxanalyzedchars.php" class="methodname" style="color:#CC7832">getHighlightRegexMaxAnalyzedChars</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightregexpattern.php" class="methodname" style="color:#CC7832">getHighlightRegexPattern</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightregexslop.php" class="methodname" style="color:#CC7832">getHighlightRegexSlop</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightrequirefieldmatch.php" class="methodname" style="color:#CC7832">getHighlightRequireFieldMatch</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightsimplepost.php" class="methodname" style="color:#CC7832">getHighlightSimplePost</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightsimplepre.php" class="methodname" style="color:#CC7832">getHighlightSimplePre</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightsnippets.php" class="methodname" style="color:#CC7832">getHighlightSnippets</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gethighlightusephrasehighlighter.php" class="methodname" style="color:#CC7832">getHighlightUsePhraseHighlighter</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmlt.php" class="methodname" style="color:#CC7832">getMlt</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltboost.php" class="methodname" style="color:#CC7832">getMltBoost</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltcount.php" class="methodname" style="color:#CC7832">getMltCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltfields.php" class="methodname" style="color:#CC7832">getMltFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltmaxnumqueryterms.php" class="methodname" style="color:#CC7832">getMltMaxNumQueryTerms</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltmaxnumtokens.php" class="methodname" style="color:#CC7832">getMltMaxNumTokens</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltmaxwordlength.php" class="methodname" style="color:#CC7832">getMltMaxWordLength</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltmindocfrequency.php" class="methodname" style="color:#CC7832">getMltMinDocFrequency</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltmintermfrequency.php" class="methodname" style="color:#CC7832">getMltMinTermFrequency</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltminwordlength.php" class="methodname" style="color:#CC7832">getMltMinWordLength</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getmltqueryfields.php" class="methodname" style="color:#CC7832">getMltQueryFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getquery.php" class="methodname" style="color:#CC7832">getQuery</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getrows.php" class="methodname" style="color:#CC7832">getRows</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getsortfields.php" class="methodname" style="color:#CC7832">getSortFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getstart.php" class="methodname" style="color:#CC7832">getStart</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getstats.php" class="methodname" style="color:#CC7832">getStats</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getstatsfacets.php" class="methodname" style="color:#CC7832">getStatsFacets</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getstatsfields.php" class="methodname" style="color:#CC7832">getStatsFields</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.getterms.php" class="methodname" style="color:#CC7832">getTerms</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsfield.php" class="methodname" style="color:#CC7832">getTermsField</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsincludelowerbound.php" class="methodname" style="color:#CC7832">getTermsIncludeLowerBound</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsincludeupperbound.php" class="methodname" style="color:#CC7832">getTermsIncludeUpperBound</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermslimit.php" class="methodname" style="color:#CC7832">getTermsLimit</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermslowerbound.php" class="methodname" style="color:#CC7832">getTermsLowerBound</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsmaxcount.php" class="methodname" style="color:#CC7832">getTermsMaxCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsmincount.php" class="methodname" style="color:#CC7832">getTermsMinCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsprefix.php" class="methodname" style="color:#CC7832">getTermsPrefix</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsreturnraw.php" class="methodname" style="color:#CC7832">getTermsReturnRaw</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermssort.php" class="methodname" style="color:#CC7832">getTermsSort</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettermsupperbound.php" class="methodname" style="color:#CC7832">getTermsUpperBound</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.gettimeallowed.php" class="methodname" style="color:#CC7832">getTimeAllowed</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removeexpandfilterquery.php" class="methodname" style="color:#CC7832">removeExpandFilterQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fq</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removeexpandsortfield.php" class="methodname" style="color:#CC7832">removeExpandSortField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removefacetdatefield.php" class="methodname" style="color:#CC7832">removeFacetDateField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removefacetdateother.php" class="methodname" style="color:#CC7832">removeFacetDateOther</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removefacetfield.php" class="methodname" style="color:#CC7832">removeFacetField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removefacetquery.php" class="methodname" style="color:#CC7832">removeFacetQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removefield.php" class="methodname" style="color:#CC7832">removeField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removefilterquery.php" class="methodname" style="color:#CC7832">removeFilterQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fq</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removehighlightfield.php" class="methodname" style="color:#CC7832">removeHighlightField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removemltfield.php" class="methodname" style="color:#CC7832">removeMltField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removemltqueryfield.php" class="methodname" style="color:#CC7832">removeMltQueryField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$queryField</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removesortfield.php" class="methodname" style="color:#CC7832">removeSortField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removestatsfacet.php" class="methodname" style="color:#CC7832">removeStatsFacet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.removestatsfield.php" class="methodname" style="color:#CC7832">removeStatsField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setechohandler.php" class="methodname" style="color:#CC7832">setEchoHandler</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setechoparams.php" class="methodname" style="color:#CC7832">setEchoParams</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$type</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setexpand.php" class="methodname" style="color:#CC7832">setExpand</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setexpandquery.php" class="methodname" style="color:#CC7832">setExpandQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$q</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setexpandrows.php" class="methodname" style="color:#CC7832">setExpandRows</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setexplainother.php" class="methodname" style="color:#CC7832">setExplainOther</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacet.php" class="methodname" style="color:#CC7832">setFacet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetdateend.php" class="methodname" style="color:#CC7832">setFacetDateEnd</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetdategap.php" class="methodname" style="color:#CC7832">setFacetDateGap</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetdatehardend.php" class="methodname" style="color:#CC7832">setFacetDateHardEnd</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetdatestart.php" class="methodname" style="color:#CC7832">setFacetDateStart</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetenumcachemindefaultfrequency.php" class="methodname" style="color:#CC7832">setFacetEnumCacheMinDefaultFrequency</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$frequency</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetlimit.php" class="methodname" style="color:#CC7832">setFacetLimit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$limit</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetmethod.php" class="methodname" style="color:#CC7832">setFacetMethod</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$method</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetmincount.php" class="methodname" style="color:#CC7832">setFacetMinCount</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mincount</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetmissing.php" class="methodname" style="color:#CC7832">setFacetMissing</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetoffset.php" class="methodname" style="color:#CC7832">setFacetOffset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetprefix.php" class="methodname" style="color:#CC7832">setFacetPrefix</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$prefix</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setfacetsort.php" class="methodname" style="color:#CC7832">setFacetSort</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$facetSort</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroup.php" class="methodname" style="color:#CC7832">setGroup</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroupcachepercent.php" class="methodname" style="color:#CC7832">setGroupCachePercent</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$percent</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroupfacet.php" class="methodname" style="color:#CC7832">setGroupFacet</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroupformat.php" class="methodname" style="color:#CC7832">setGroupFormat</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgrouplimit.php" class="methodname" style="color:#CC7832">setGroupLimit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroupmain.php" class="methodname" style="color:#CC7832">setGroupMain</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroupngroups.php" class="methodname" style="color:#CC7832">setGroupNGroups</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgroupoffset.php" class="methodname" style="color:#CC7832">setGroupOffset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setgrouptruncate.php" class="methodname" style="color:#CC7832">setGroupTruncate</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlight.php" class="methodname" style="color:#CC7832">setHighlight</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightalternatefield.php" class="methodname" style="color:#CC7832">setHighlightAlternateField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightformatter.php" class="methodname" style="color:#CC7832">setHighlightFormatter</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$formatter</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightfragmenter.php" class="methodname" style="color:#CC7832">setHighlightFragmenter</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fragmenter</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightfragsize.php" class="methodname" style="color:#CC7832">setHighlightFragsize</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$size</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlighthighlightmultiterm.php" class="methodname" style="color:#CC7832">setHighlightHighlightMultiTerm</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightmaxalternatefieldlength.php" class="methodname" style="color:#CC7832">setHighlightMaxAlternateFieldLength</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fieldLength</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightmaxanalyzedchars.php" class="methodname" style="color:#CC7832">setHighlightMaxAnalyzedChars</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightmergecontiguous.php" class="methodname" style="color:#CC7832">setHighlightMergeContiguous</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightregexmaxanalyzedchars.php" class="methodname" style="color:#CC7832">setHighlightRegexMaxAnalyzedChars</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$maxAnalyzedChars</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightregexpattern.php" class="methodname" style="color:#CC7832">setHighlightRegexPattern</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightregexslop.php" class="methodname" style="color:#CC7832">setHighlightRegexSlop</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$factor</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightrequirefieldmatch.php" class="methodname" style="color:#CC7832">setHighlightRequireFieldMatch</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightsimplepost.php" class="methodname" style="color:#CC7832">setHighlightSimplePost</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$simplePost</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightsimplepre.php" class="methodname" style="color:#CC7832">setHighlightSimplePre</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$simplePre</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightsnippets.php" class="methodname" style="color:#CC7832">setHighlightSnippets</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$field_override</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.sethighlightusephrasehighlighter.php" class="methodname" style="color:#CC7832">setHighlightUsePhraseHighlighter</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmlt.php" class="methodname" style="color:#CC7832">setMlt</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltboost.php" class="methodname" style="color:#CC7832">setMltBoost</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltcount.php" class="methodname" style="color:#CC7832">setMltCount</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$count</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltmaxnumqueryterms.php" class="methodname" style="color:#CC7832">setMltMaxNumQueryTerms</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltmaxnumtokens.php" class="methodname" style="color:#CC7832">setMltMaxNumTokens</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltmaxwordlength.php" class="methodname" style="color:#CC7832">setMltMaxWordLength</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$maxWordLength</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltmindocfrequency.php" class="methodname" style="color:#CC7832">setMltMinDocFrequency</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$minDocFrequency</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltmintermfrequency.php" class="methodname" style="color:#CC7832">setMltMinTermFrequency</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$minTermFrequency</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setmltminwordlength.php" class="methodname" style="color:#CC7832">setMltMinWordLength</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$minWordLength</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setomitheader.php" class="methodname" style="color:#CC7832">setOmitHeader</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setquery.php" class="methodname" style="color:#CC7832">setQuery</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$query</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setrows.php" class="methodname" style="color:#CC7832">setRows</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setshowdebuginfo.php" class="methodname" style="color:#CC7832">setShowDebugInfo</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setstart.php" class="methodname" style="color:#CC7832">setStart</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$start</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setstats.php" class="methodname" style="color:#CC7832">setStats</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.setterms.php" class="methodname" style="color:#CC7832">setTerms</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsfield.php" class="methodname" style="color:#CC7832">setTermsField</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fieldname</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsincludelowerbound.php" class="methodname" style="color:#CC7832">setTermsIncludeLowerBound</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsincludeupperbound.php" class="methodname" style="color:#CC7832">setTermsIncludeUpperBound</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermslimit.php" class="methodname" style="color:#CC7832">setTermsLimit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$limit</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermslowerbound.php" class="methodname" style="color:#CC7832">setTermsLowerBound</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$lowerBound</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsmaxcount.php" class="methodname" style="color:#CC7832">setTermsMaxCount</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$frequency</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsmincount.php" class="methodname" style="color:#CC7832">setTermsMinCount</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$frequency</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsprefix.php" class="methodname" style="color:#CC7832">setTermsPrefix</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$prefix</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsreturnraw.php" class="methodname" style="color:#CC7832">setTermsReturnRaw</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$flag</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermssort.php" class="methodname" style="color:#CC7832">setTermsSort</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$sortType</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settermsupperbound.php" class="methodname" style="color:#CC7832">setTermsUpperBound</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$upperBound</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrQuery</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrquery.settimeallowed.php" class="methodname" style="color:#CC7832">setTimeAllowed</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$timeAllowed</span></span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrModifiableParams::__construct}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832">{@link SolrModifiableParams::__destruct}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="solrquery.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="solrquery.constants.order-asc"><strong><span>SolrQuery::ORDER_ASC</span></strong></dt>       <dd>        <p class="para">Used to specify that the sorting should be in acending order</p>      </dd>                  <dt id="solrquery.constants.order-desc"><strong><span>SolrQuery::ORDER_DESC</span></strong></dt>       <dd>        <p class="para">Used to specify that the sorting should be in descending order</p>      </dd>                  <dt id="solrquery.constants.facet-sort-index"><strong><span>SolrQuery::FACET_SORT_INDEX</span></strong></dt>       <dd>        <p class="para">Used to specify that the facet should sort by index</p>      </dd>                  <dt id="solrquery.constants.facet-sort-count"><strong><span>SolrQuery::FACET_SORT_COUNT</span></strong></dt>       <dd>        <p class="para">Used to specify that the facet should sort by count</p>      </dd>                  <dt id="solrquery.constants.terms-sort-index"><strong><span>SolrQuery::TERMS_SORT_INDEX</span></strong></dt>       <dd>        <p class="para">Used in the TermsComponent</p>      </dd>                  <dt id="solrquery.constants.terms-sort-count"><strong><span>SolrQuery::TERMS_SORT_COUNT</span></strong></dt>       <dd>        <p class="para">Used in the TermsComponent</p>      </dd>           </dl>    </div>     </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrQuery::addExpandFilterQuery} — Overrides main filter query, determines which documents to include in the main group</li><li>{@link SolrQuery::addExpandSortField} — Orders the documents within the expanded groups (expand.sort parameter)</li><li>{@link SolrQuery::addFacetDateField} — Maps to facet.date</li><li>{@link SolrQuery::addFacetDateOther} — Adds another facet.date.other parameter</li><li>{@link SolrQuery::addFacetField} — Adds another field to the facet</li><li>{@link SolrQuery::addFacetQuery} — Adds a facet query</li><li>{@link SolrQuery::addField} — Specifies which fields to return in the result</li><li>{@link SolrQuery::addFilterQuery} — Specifies a filter query</li><li>{@link SolrQuery::addGroupField} — Add a field to be used to group results</li><li>{@link SolrQuery::addGroupFunction} — Allows grouping results based on the unique values of a function query (group.func parameter)</li><li>{@link SolrQuery::addGroupQuery} — Allows grouping of documents that match the given query</li><li>{@link SolrQuery::addGroupSortField} — Add a group sort field (group.sort parameter)</li><li>{@link SolrQuery::addHighlightField} — Maps to hl.fl</li><li>{@link SolrQuery::addMltField} — Sets a field to use for similarity</li><li>{@link SolrQuery::addMltQueryField} — Maps to mlt.qf</li><li>{@link SolrQuery::addSortField} — Used to control how the results should be sorted</li><li>{@link SolrQuery::addStatsFacet} — Requests a return of sub results for values within the given facet</li><li>{@link SolrQuery::addStatsField} — Maps to stats.field parameter</li><li>{@link SolrQuery::collapse} — Collapses the result set to a single document per group</li><li>{@link SolrQuery::__construct} — Constructor</li><li>{@link SolrQuery::__destruct} — Destructor</li><li>{@link SolrQuery::getExpand} — Returns true if group expanding is enabled</li><li>{@link SolrQuery::getExpandFilterQueries} — Returns the expand filter queries</li><li>{@link SolrQuery::getExpandQuery} — Returns the expand query expand.q parameter</li><li>{@link SolrQuery::getExpandRows} — Returns The number of rows to display in each group (expand.rows)</li><li>{@link SolrQuery::getExpandSortFields} — Returns an array of fields</li><li>{@link SolrQuery::getFacet} — Returns the value of the facet parameter</li><li>{@link SolrQuery::getFacetDateEnd} — Returns the value for the facet.date.end parameter</li><li>{@link SolrQuery::getFacetDateFields} — Returns all the facet.date fields</li><li>{@link SolrQuery::getFacetDateGap} — Returns the value of the facet.date.gap parameter</li><li>{@link SolrQuery::getFacetDateHardEnd} — Returns the value of the facet.date.hardend parameter</li><li>{@link SolrQuery::getFacetDateOther} — Returns the value for the facet.date.other parameter</li><li>{@link SolrQuery::getFacetDateStart} — Returns the  lower bound for the first date range for all date faceting on this field</li><li>{@link SolrQuery::getFacetFields} — Returns all the facet fields</li><li>{@link SolrQuery::getFacetLimit} — Returns the maximum number of constraint counts that should be returned for the facet fields</li><li>{@link SolrQuery::getFacetMethod} — Returns the value of the facet.method parameter</li><li>{@link SolrQuery::getFacetMinCount} — Returns the minimum counts for facet fields should be included in the response</li><li>{@link SolrQuery::getFacetMissing} — Returns the current state of the facet.missing parameter</li><li>{@link SolrQuery::getFacetOffset} — Returns an offset into the list of constraints to be used for pagination</li><li>{@link SolrQuery::getFacetPrefix} — Returns the facet prefix</li><li>{@link SolrQuery::getFacetQueries} — Returns all the facet queries</li><li>{@link SolrQuery::getFacetSort} — Returns the facet sort type</li><li>{@link SolrQuery::getFields} — Returns the list of fields that will be returned in the response</li><li>{@link SolrQuery::getFilterQueries} — Returns an array of filter queries</li><li>{@link SolrQuery::getGroup} — Returns true if grouping is enabled</li><li>{@link SolrQuery::getGroupCachePercent} — Returns group cache percent value</li><li>{@link SolrQuery::getGroupFacet} — Returns the group.facet parameter value</li><li>{@link SolrQuery::getGroupFields} — Returns group fields (group.field parameter values)</li><li>{@link SolrQuery::getGroupFormat} — Returns the group.format value</li><li>{@link SolrQuery::getGroupFunctions} — Returns group functions (group.func parameter values)</li><li>{@link SolrQuery::getGroupLimit} — Returns the group.limit value</li><li>{@link SolrQuery::getGroupMain} — Returns the group.main value</li><li>{@link SolrQuery::getGroupNGroups} — Returns the group.ngroups value</li><li>{@link SolrQuery::getGroupOffset} — Returns the group.offset value</li><li>{@link SolrQuery::getGroupQueries} — Returns all the group.query parameter values</li><li>{@link SolrQuery::getGroupSortFields} — Returns the group.sort value</li><li>{@link SolrQuery::getGroupTruncate} — Returns the group.truncate value</li><li>{@link SolrQuery::getHighlight} — Returns the state of the hl parameter</li><li>{@link SolrQuery::getHighlightAlternateField} — Returns the highlight field to use as backup or default</li><li>{@link SolrQuery::getHighlightFields} — Returns all the fields that Solr should generate highlighted snippets for</li><li>{@link SolrQuery::getHighlightFormatter} — Returns the formatter for the highlighted output</li><li>{@link SolrQuery::getHighlightFragmenter} — Returns the text snippet generator for highlighted text</li><li>{@link SolrQuery::getHighlightFragsize} — Returns the number of characters of fragments to consider for highlighting</li><li>{@link SolrQuery::getHighlightHighlightMultiTerm} — Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</li><li>{@link SolrQuery::getHighlightMaxAlternateFieldLength} — Returns the maximum number of characters of the field to return</li><li>{@link SolrQuery::getHighlightMaxAnalyzedChars} — Returns the maximum number of characters into a document to look for suitable snippets</li><li>{@link SolrQuery::getHighlightMergeContiguous} — Returns whether or not the collapse contiguous fragments into a single fragment</li><li>{@link SolrQuery::getHighlightRegexMaxAnalyzedChars} — Returns the maximum number of characters from a field when using the regex fragmenter</li><li>{@link SolrQuery::getHighlightRegexPattern} — Returns the regular expression for fragmenting</li><li>{@link SolrQuery::getHighlightRegexSlop} — Returns the deviation factor from the ideal fragment size</li><li>{@link SolrQuery::getHighlightRequireFieldMatch} — Returns if a field will only be highlighted if the query matched in this particular field</li><li>{@link SolrQuery::getHighlightSimplePost} — Returns the text which appears after a highlighted term</li><li>{@link SolrQuery::getHighlightSimplePre} — Returns the text which appears before a highlighted term</li><li>{@link SolrQuery::getHighlightSnippets} — Returns the maximum number of highlighted snippets to generate per field</li><li>{@link SolrQuery::getHighlightUsePhraseHighlighter} — Returns the state of the hl.usePhraseHighlighter parameter</li><li>{@link SolrQuery::getMlt} — Returns whether or not MoreLikeThis results should be enabled</li><li>{@link SolrQuery::getMltBoost} — Returns whether or not the query will be boosted by the interesting term relevance</li><li>{@link SolrQuery::getMltCount} — Returns the number of similar documents to return for each result</li><li>{@link SolrQuery::getMltFields} — Returns all the fields to use for similarity</li><li>{@link SolrQuery::getMltMaxNumQueryTerms} — Returns the maximum number of query terms that will be included in any generated query</li><li>{@link SolrQuery::getMltMaxNumTokens} — Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</li><li>{@link SolrQuery::getMltMaxWordLength} — Returns the maximum word length above which words will be ignored</li><li>{@link SolrQuery::getMltMinDocFrequency} — Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</li><li>{@link SolrQuery::getMltMinTermFrequency} — Returns the frequency below which terms will be ignored in the source document</li><li>{@link SolrQuery::getMltMinWordLength} — Returns the minimum word length below which words will be ignored</li><li>{@link SolrQuery::getMltQueryFields} — Returns the query fields and their boosts</li><li>{@link SolrQuery::getQuery} — Returns the main query</li><li>{@link SolrQuery::getRows} — Returns the maximum number of documents</li><li>{@link SolrQuery::getSortFields} — Returns all the sort fields</li><li>{@link SolrQuery::getStart} — Returns the offset in the complete result set</li><li>{@link SolrQuery::getStats} — Returns whether or not stats is enabled</li><li>{@link SolrQuery::getStatsFacets} — Returns all the stats facets that were set</li><li>{@link SolrQuery::getStatsFields} — Returns all the statistics fields</li><li>{@link SolrQuery::getTerms} — Returns whether or not the TermsComponent is enabled</li><li>{@link SolrQuery::getTermsField} — Returns the field from which the terms are retrieved</li><li>{@link SolrQuery::getTermsIncludeLowerBound} — Returns whether or not to include the lower bound in the result set</li><li>{@link SolrQuery::getTermsIncludeUpperBound} — Returns whether or not to include the upper bound term in the result set</li><li>{@link SolrQuery::getTermsLimit} — Returns the maximum number of terms Solr should return</li><li>{@link SolrQuery::getTermsLowerBound} — Returns the term to start at</li><li>{@link SolrQuery::getTermsMaxCount} — Returns the maximum document frequency</li><li>{@link SolrQuery::getTermsMinCount} — Returns the minimum document frequency to return in order to be included</li><li>{@link SolrQuery::getTermsPrefix} — Returns the term prefix</li><li>{@link SolrQuery::getTermsReturnRaw} — Whether or not to return raw characters</li><li>{@link SolrQuery::getTermsSort} — Returns an integer indicating how terms are sorted</li><li>{@link SolrQuery::getTermsUpperBound} — Returns the term to stop at</li><li>{@link SolrQuery::getTimeAllowed} — Returns the time in milliseconds allowed for the query to finish</li><li>{@link SolrQuery::removeExpandFilterQuery} — Removes an expand filter query</li><li>{@link SolrQuery::removeExpandSortField} — Removes an expand sort field from the expand.sort parameter</li><li>{@link SolrQuery::removeFacetDateField} — Removes one of the facet date fields</li><li>{@link SolrQuery::removeFacetDateOther} — Removes one of the facet.date.other parameters</li><li>{@link SolrQuery::removeFacetField} — Removes one of the facet.date parameters</li><li>{@link SolrQuery::removeFacetQuery} — Removes one of the facet.query parameters</li><li>{@link SolrQuery::removeField} — Removes a field from the list of fields</li><li>{@link SolrQuery::removeFilterQuery} — Removes a filter query</li><li>{@link SolrQuery::removeHighlightField} — Removes one of the fields used for highlighting</li><li>{@link SolrQuery::removeMltField} — Removes one of the moreLikeThis fields</li><li>{@link SolrQuery::removeMltQueryField} — Removes one of the moreLikeThis query fields</li><li>{@link SolrQuery::removeSortField} — Removes one of the sort fields</li><li>{@link SolrQuery::removeStatsFacet} — Removes one of the stats.facet parameters</li><li>{@link SolrQuery::removeStatsField} — Removes one of the stats.field parameters</li><li>{@link SolrQuery::setEchoHandler} — Toggles the echoHandler parameter</li><li>{@link SolrQuery::setEchoParams} — Determines what kind of parameters to include in the response</li><li>{@link SolrQuery::setExpand} — Enables/Disables the Expand Component</li><li>{@link SolrQuery::setExpandQuery} — Sets the expand.q parameter</li><li>{@link SolrQuery::setExpandRows} — Sets the number of rows to display in each group (expand.rows). Server Default 5</li><li>{@link SolrQuery::setExplainOther} — Sets the explainOther common query parameter</li><li>{@link SolrQuery::setFacet} — Maps to the facet parameter. Enables or disables facetting</li><li>{@link SolrQuery::setFacetDateEnd} — Maps to facet.date.end</li><li>{@link SolrQuery::setFacetDateGap} — Maps to facet.date.gap</li><li>{@link SolrQuery::setFacetDateHardEnd} — Maps to facet.date.hardend</li><li>{@link SolrQuery::setFacetDateStart} — Maps to facet.date.start</li><li>{@link SolrQuery::setFacetEnumCacheMinDefaultFrequency} — Sets the minimum document frequency used for determining term count</li><li>{@link SolrQuery::setFacetLimit} — Maps to facet.limit</li><li>{@link SolrQuery::setFacetMethod} — Specifies the type of algorithm to use when faceting a field</li><li>{@link SolrQuery::setFacetMinCount} — Maps to facet.mincount</li><li>{@link SolrQuery::setFacetMissing} — Maps to facet.missing</li><li>{@link SolrQuery::setFacetOffset} — Sets the offset into the list of constraints to allow for pagination</li><li>{@link SolrQuery::setFacetPrefix} — Specifies a string prefix with which to limits the terms on which to facet</li><li>{@link SolrQuery::setFacetSort} — Determines the ordering of the facet field constraints</li><li>{@link SolrQuery::setGroup} — Enable/Disable result grouping (group parameter)</li><li>{@link SolrQuery::setGroupCachePercent} — Enables caching for result grouping</li><li>{@link SolrQuery::setGroupFacet} — Sets group.facet parameter</li><li>{@link SolrQuery::setGroupFormat} — Sets the group format, result structure (group.format parameter)</li><li>{@link SolrQuery::setGroupLimit} — Specifies the number of results to return for each group. The server default value is 1</li><li>{@link SolrQuery::setGroupMain} — If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple</li><li>{@link SolrQuery::setGroupNGroups} — If true, Solr includes the number of groups that have matched the query in the results</li><li>{@link SolrQuery::setGroupOffset} — Sets the group.offset parameter</li><li>{@link SolrQuery::setGroupTruncate} — If true, facet counts are based on the most relevant document of each group matching the query</li><li>{@link SolrQuery::setHighlight} — Enables or disables highlighting</li><li>{@link SolrQuery::setHighlightAlternateField} — Specifies the backup field to use</li><li>{@link SolrQuery::setHighlightFormatter} — Specify a formatter for the highlight output</li><li>{@link SolrQuery::setHighlightFragmenter} — Sets a text snippet generator for highlighted text</li><li>{@link SolrQuery::setHighlightFragsize} — The size of fragments to consider for highlighting</li><li>{@link SolrQuery::setHighlightHighlightMultiTerm} — Use SpanScorer to highlight phrase terms</li><li>{@link SolrQuery::setHighlightMaxAlternateFieldLength} — Sets the maximum number of characters of the field to return</li><li>{@link SolrQuery::setHighlightMaxAnalyzedChars} — Specifies the number of characters into a document to look for suitable snippets</li><li>{@link SolrQuery::setHighlightMergeContiguous} — Whether or not to collapse contiguous fragments into a single fragment</li><li>{@link SolrQuery::setHighlightRegexMaxAnalyzedChars} — Specify the maximum number of characters to analyze</li><li>{@link SolrQuery::setHighlightRegexPattern} — Specify the regular expression for fragmenting</li><li>{@link SolrQuery::setHighlightRegexSlop} — Sets the factor by which the regex fragmenter can stray from the ideal fragment size</li><li>{@link SolrQuery::setHighlightRequireFieldMatch} — Require field matching during highlighting</li><li>{@link SolrQuery::setHighlightSimplePost} — Sets the text which appears after a highlighted term</li><li>{@link SolrQuery::setHighlightSimplePre} — Sets the text which appears before a highlighted term</li><li>{@link SolrQuery::setHighlightSnippets} — Sets the maximum number of highlighted snippets to generate per field</li><li>{@link SolrQuery::setHighlightUsePhraseHighlighter} — Whether to highlight phrase terms only when they appear within the query phrase</li><li>{@link SolrQuery::setMlt} — Enables or disables moreLikeThis</li><li>{@link SolrQuery::setMltBoost} — Set if the query will be boosted by the interesting term relevance</li><li>{@link SolrQuery::setMltCount} — Set the number of similar documents to return for each result</li><li>{@link SolrQuery::setMltMaxNumQueryTerms} — Sets the maximum number of query terms included</li><li>{@link SolrQuery::setMltMaxNumTokens} — Specifies the maximum number of tokens to parse</li><li>{@link SolrQuery::setMltMaxWordLength} — Sets the maximum word length</li><li>{@link SolrQuery::setMltMinDocFrequency} — Sets the mltMinDoc frequency</li><li>{@link SolrQuery::setMltMinTermFrequency} — Sets the frequency below which terms will be ignored in the source docs</li><li>{@link SolrQuery::setMltMinWordLength} — Sets the minimum word length</li><li>{@link SolrQuery::setOmitHeader} — Exclude the header from the returned results</li><li>{@link SolrQuery::setQuery} — Sets the search query</li><li>{@link SolrQuery::setRows} — Specifies the maximum number of rows to return in the result</li><li>{@link SolrQuery::setShowDebugInfo} — Flag to show debug information</li><li>{@link SolrQuery::setStart} — Specifies the number of rows to skip</li><li>{@link SolrQuery::setStats} — Enables or disables the Stats component</li><li>{@link SolrQuery::setTerms} — Enables or disables the TermsComponent</li><li>{@link SolrQuery::setTermsField} — Sets the name of the field to get the Terms from</li><li>{@link SolrQuery::setTermsIncludeLowerBound} — Include the lower bound term in the result set</li><li>{@link SolrQuery::setTermsIncludeUpperBound} — Include the upper bound term in the result set</li><li>{@link SolrQuery::setTermsLimit} — Sets the maximum number of terms to return</li><li>{@link SolrQuery::setTermsLowerBound} — Specifies the Term to start from</li><li>{@link SolrQuery::setTermsMaxCount} — Sets the maximum document frequency</li><li>{@link SolrQuery::setTermsMinCount} — Sets the minimum document frequency</li><li>{@link SolrQuery::setTermsPrefix} — Restrict matches to terms that start with the prefix</li><li>{@link SolrQuery::setTermsReturnRaw} — Return the raw characters of the indexed term</li><li>{@link SolrQuery::setTermsSort} — Specifies how to sort the returned terms</li><li>{@link SolrQuery::setTermsUpperBound} — Sets the term to stop at</li><li>{@link SolrQuery::setTimeAllowed} — The time allowed for search to finish</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
class SolrQuery extends SolrModifiableParams implements Serializable {

	/** @var int Used to specify that the sorting should be in acending order */
	const ORDER_ASC = 0;

	/** @var int Used to specify that the sorting should be in descending order */
	const ORDER_DESC = 1;

	/** @var int Used to specify that the facet should sort by index */
	const FACET_SORT_INDEX = 0;

	/** @var int Used to specify that the facet should sort by count */
	const FACET_SORT_COUNT = 1;

	/** @var int Used in the TermsComponent */
	const TERMS_SORT_INDEX = 0;

	/** @var int Used in the TermsComponent */
	const TERMS_SORT_COUNT = 1;

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Overrides main filter query, determines which documents to include in the main group.
	 * @link http://php.net/manual/en/solrquery.addexpandfilterquery.php
	 * @param string $fq
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addExpandFilterQuery($fq) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Orders the documents within the expanded groups (expand.sort parameter).
	 * @link http://php.net/manual/en/solrquery.addexpandsortfield.php
	 * @param string $field <p>
	 * Field name
	 * </p>
	 * @param string $order [optional] <p>
	 * Order ASC/DESC, utilizes SolrQuery::ORDER_* constants.
	 * </p>
	 * <p>
	 * Default: SolrQuery::ORDER_DESC
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addExpandSortField($field, $order) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date
	 * @link http://php.net/manual/en/solrquery.addfacetdatefield.php
	 * @param string $dateField <p>
	 * The name of the date field.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addFacetDateField($dateField) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds another facet.date.other parameter
	 * @link http://php.net/manual/en/solrquery.addfacetdateother.php
	 * @param string $value <p>
	 * The value to use.
	 * </p>
	 * @param string $field_override <p>
	 * The field name for the override.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addFacetDateOther($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds another field to the facet
	 * @link http://php.net/manual/en/solrquery.addfacetfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addFacetField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a facet query
	 * @link http://php.net/manual/en/solrquery.addfacetquery.php
	 * @param string $facetQuery <p>
	 * The facet query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addFacetQuery($facetQuery) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies which fields to return in the result
	 * @link http://php.net/manual/en/solrquery.addfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies a filter query
	 * @link http://php.net/manual/en/solrquery.addfilterquery.php
	 * @param string $fq <p>
	 * The filter query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addFilterQuery($fq) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Add a field to be used to group results.
	 * @link http://php.net/manual/en/solrquery.addgroupfield.php
	 * @param string $value
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addGroupField($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Allows grouping results based on the unique values of a function query (group.func parameter).
	 * @link http://php.net/manual/en/solrquery.addgroupfunction.php
	 * @param string $value
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addGroupFunction($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Allows grouping of documents that match the given query.
	 * @link http://php.net/manual/en/solrquery.addgroupquery.php
	 * @param string $value
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addGroupQuery($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Add a group sort field (group.sort parameter).
	 * @link http://php.net/manual/en/solrquery.addgroupsortfield.php
	 * @param string $field <p>
	 * Field name
	 * </p>
	 * @param int $order <p>
	 * Order ASC/DESC, utilizes SolrQuery::ORDER_* constants
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addGroupSortField($field, $order) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to hl.fl
	 * @link http://php.net/manual/en/solrquery.addhighlightfield.php
	 * @param string $field <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addHighlightField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets a field to use for similarity
	 * @link http://php.net/manual/en/solrquery.addmltfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addMltField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to mlt.qf
	 * @link http://php.net/manual/en/solrquery.addmltqueryfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @param float $boost <p>
	 * Its boost value
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addMltQueryField($field, $boost) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Used to control how the results should be sorted
	 * @link http://php.net/manual/en/solrquery.addsortfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @param int $order <p>
	 * The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addSortField($field, $order = SolrQuery::ORDER_DESC) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Requests a return of sub results for values within the given facet
	 * @link http://php.net/manual/en/solrquery.addstatsfacet.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addStatsFacet($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to stats.field parameter
	 * @link http://php.net/manual/en/solrquery.addstatsfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addStatsField($field) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Collapses the result set to a single document per group
	 * @link http://php.net/manual/en/solrquery.collapse.php
	 * @param SolrCollapseFunction $collapseFunction
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function collapse(SolrCollapseFunction $collapseFunction) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrQuery constructor.
	 * @link http://php.net/manual/en/solrquery.construct.php
	 * @param string $q <p>
	 * Optional search query
	 * </p>
	 */
	public function __construct($q = '') {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrquery.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns true if group expanding is enabled
	 * @link http://php.net/manual/en/solrquery.getexpand.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> if group expanding is enabled
	 * </p>
	 */
	public function getExpand() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the expand filter queries
	 * @link http://php.net/manual/en/solrquery.getexpandfilterqueries.php
	 * @return array <p>
	 * Returns the expand filter queries
	 * </p>
	 */
	public function getExpandFilterQueries() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the expand query expand.q parameter
	 * @link http://php.net/manual/en/solrquery.getexpandquery.php
	 * @return array <p>
	 * Returns the expand query expand.q parameter
	 * </p>
	 */
	public function getExpandQuery() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns The number of rows to display in each group (expand.rows)
	 * @link http://php.net/manual/en/solrquery.getexpandrows.php
	 * @return int <p>
	 * Returns The number of rows to display in each group (expand.rows)
	 * </p>
	 */
	public function getExpandRows() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns an array of fields
	 * @link http://php.net/manual/en/solrquery.getexpandsortfields.php
	 * @return array <p>
	 * Returns an array of fields
	 * </p>
	 */
	public function getExpandSortFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet parameter
	 * @link http://php.net/manual/en/solrquery.getfacet.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacet() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value for the facet.date.end parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdateend.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateEnd($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the facet.date fields
	 * @link http://php.net/manual/en/solrquery.getfacetdatefields.php
	 * @return array <p>
	 * Returns all the facet.date fields as an array or <b>NULL</b> if none was set
	 * </p>
	 */
	public function getFacetDateFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet.date.gap parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdategap.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateGap($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet.date.hardend parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdatehardend.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateHardEnd($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value for the facet.date.other parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdatehardend.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateOther($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the lower bound for the first date range for all date faceting on this field
	 * @link http://php.net/manual/en/solrquery.getfacetdatestart.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateStart($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the facet fields
	 * @link http://php.net/manual/en/solrquery.getfacetfields.php
	 * @return array <p>
	 * Returns an array of all the fields and <b>NULL</b> if none was set
	 * </p>
	 */
	public function getFacetFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of constraint counts that should be returned for the facet fields
	 * @link http://php.net/manual/en/solrquery.getfacetlimit.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetLimit($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet.method parameter
	 * @link http://php.net/manual/en/solrquery.getfacetmethod.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetMethod($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the minimum counts for facet fields should be included in the response
	 * @link http://php.net/manual/en/solrquery.getfacetmincount.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetMinCount($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the current state of the facet.missing parameter
	 * @link http://php.net/manual/en/solrquery.getfacetmissing.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetMissing($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an offset into the list of constraints to be used for pagination
	 * @link http://php.net/manual/en/solrquery.getfacetoffset.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetOffset($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the facet prefix
	 * @link http://php.net/manual/en/solrquery.getfacetprefix.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetPrefix($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the facet queries
	 * @link http://php.net/manual/en/solrquery.getfacetqueries.php
	 * @return string <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetQueries() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the facet sort type
	 * @link http://php.net/manual/en/solrquery.getfacetsort.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <b>NULL</b> if not
	 * set.
	 * </p>
	 */
	public function getFacetSort($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the list of fields that will be returned in the response
	 * @link http://php.net/manual/en/solrquery.getfields.php
	 * @return string <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array of filter queries
	 * @link http://php.net/manual/en/solrquery.getfilterqueries.php
	 * @return string <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFilterQueries() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns true if grouping is enabled
	 * http://php.net/manual/en/solrquery.getgroup.php
	 * @return bool <p>
	 * Returns true if grouping is enabled
	 * </p>
	 */
	public function getGroup() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns group cache percent value
	 * @link http://php.net/manual/en/solrquery.getgroupcachepercent.php
	 * @return int <p>
	 * Returns group cache percent value
	 * </p>
	 */
	public function getGroupCachePercent() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.facet parameter value
	 * @link http://php.net/manual/en/solrquery.getgroupfacet.php
	 * @return bool <p>
	 * Returns the group.facet parameter value
	 * </p>
	 */
	public function getGroupFacet() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns group fields (group.field parameter values)
	 * @link http://php.net/manual/en/solrquery.getgroupfields.php
	 * @return array <p>
	 * Returns group fields (group.field parameter values)
	 * </p>
	 */
	public function getGroupFields() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.format value
	 * @link http://php.net/manual/en/solrquery.getgroupformat.php
	 * @return string <p>
	 * Returns the group.format value
	 * </p>
	 */
	public function getGroupFormat() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns group functions (group.func parameter values)
	 * @link http://php.net/manual/en/solrquery.getgroupfunctions.php
	 * @return array <p>
	 * Returns group functions (group.func parameter values)
	 * </p>
	 */
	public function getGroupFunctions() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.limit value
	 * @link http://php.net/manual/en/solrquery.getgrouplimit.php
	 * @return int <p>
	 * Returns the group.limit value
	 * </p>
	 */
	public function getGroupLimit() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.main value
	 * @link http://php.net/manual/en/solrquery.getgroupmain.php
	 * @return bool <p>
	 * Returns the group.main value
	 * </p>
	 */
	public function getGroupMain() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.ngroups value
	 * @link http://php.net/manual/en/solrquery.getgroupngroups.php
	 * @return bool <p>
	 * Returns the group.ngroups value
	 * </p>
	 */
	public function getGroupNGroups() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.offset value
	 * @link http://php.net/manual/en/solrquery.getgroupoffset.php
	 * @return bool <p>
	 * Returns the group.offset value
	 * </p>
	 */
	public function getGroupOffset() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns all the group.query parameter values
	 * @link http://php.net/manual/en/solrquery.getgroupqueries.php
	 * @return array <p>
	 * Returns all the group.query parameter values
	 * </p>
	 */
	public function getGroupQueries() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.sort value
	 * @link http://php.net/manual/en/solrquery.getgroupsortfields.php
	 * @return array <p>
	 * Returns all the group.sort parameter values
	 * </p>
	 */
	public function getGroupSortFields() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Returns the group.truncate value
	 * @link http://php.net/manual/en/solrquery.getgrouptruncate.php
	 * @return bool <p>
	 * Returns the group.truncate value
	 * </p>
	 */
	public function getGroupTruncate() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the state of the hl parameter
	 * @link http://php.net/manual/en/solrquery.gethighlight.php
	 * @return bool <p>
	 * Returns the state of the hl parameter
	 * </p>
	 */
	public function getHighlight() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the highlight field to use as backup or default
	 * @link http://php.net/manual/en/solrquery.gethighlightalternatefield.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightAlternateField($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the fields that Solr should generate highlighted snippets for
	 * @link http://php.net/manual/en/solrquery.gethighlightfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the formatter for the highlighted output
	 * @link http://php.net/manual/en/solrquery.gethighlightformatter.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFormatter($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the text snippet generator for highlighted text
	 * @link http://php.net/manual/en/solrquery.gethighlightfragmenter.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFragmenter($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the number of characters of fragments to consider for highlighting
	 * @link http://php.net/manual/en/solrquery.gethighlightfragsize.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFragsize($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
	 * @link http://php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightHighlightMultiTerm() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of characters of the field to return
	 * @link http://php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightMaxAlternateFieldLength($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of characters into a document to look for suitable snippets
	 * @link http://php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightMaxAnalyzedChars() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not the collapse contiguous fragments into a single fragment
	 * @link http://php.net/manual/en/solrquery.gethighlightmergecontiguous.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightMergeContiguous($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of characters from a field when using the regex fragmenter
	 * @link http://php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightRegexMaxAnalyzedChars() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the regular expression for fragmenting
	 * @link http://php.net/manual/en/solrquery.gethighlightregexpattern.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightRegexPattern() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the deviation factor from the ideal fragment size
	 * @link http://php.net/manual/en/solrquery.gethighlightregexslop.php
	 * @return float <p>
	 * Returns a double on success and <b>NULL</b> if not set.
	 * </p>
	 */
	public function getHighlightRegexSlop() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns if a field will only be highlighted if the query matched in this particular field
	 * @link http://php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightRequireFieldMatch() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the text which appears after a highlighted term
	 * @link http://php.net/manual/en/solrquery.gethighlightsimplepost.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightSimplePost($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the text which appears before a highlighted term
	 * @link http://php.net/manual/en/solrquery.gethighlightsimplepre.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightSimplePre($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of highlighted snippets to generate per field
	 * @link http://php.net/manual/en/solrquery.gethighlightsnippets.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightSnippets($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the state of the hl.usePhraseHighlighter parameter
	 * @link http://php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightUsePhraseHighlighter() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not MoreLikeThis results should be enabled
	 * @link http://php.net/manual/en/solrquery.getmlt.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMlt() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not the query will be boosted by the interesting term relevance
	 * @link http://php.net/manual/en/solrquery.getmltboost.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltBoost() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the number of similar documents to return for each result
	 * @link http://php.net/manual/en/solrquery.getmltcount.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the fields to use for similarity
	 * @link http://php.net/manual/en/solrquery.getmltfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of query terms that will be included in any generated query
	 * @link http://php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMaxNumQueryTerms() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
	 * @link http://php.net/manual/en/solrquery.getmltmaxnumtokens.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMaxNumTokens() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum word length above which words will be ignored
	 * @link http://php.net/manual/en/solrquery.getmltmaxwordlength.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMaxWordLength() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
	 * @link http://php.net/manual/en/solrquery.getmltmindocfrequency.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMinDocFrequency() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the frequency below which terms will be ignored in the source document
	 * @link http://php.net/manual/en/solrquery.getmltmintermfrequency.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMinTermFrequency() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the minimum word length below which words will be ignored
	 * @link http://php.net/manual/en/solrquery.getmltminwordlength.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMinWordLength() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the query fields and their boosts
	 * @link http://php.net/manual/en/solrquery.getmltqueryfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltQueryFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the main query
	 * @link http://php.net/manual/en/solrquery.getquery.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getQuery() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of documents
	 * @link http://php.net/manual/en/solrquery.getrows.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getRows() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the sort fields
	 * @link http://php.net/manual/en/solrquery.getsortfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if none of the parameters was set.
	 * </p>
	 */
	public function getSortFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the offset in the complete result set
	 * @link http://php.net/manual/en/solrquery.getstart.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStart() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not stats is enabled
	 * @link http://php.net/manual/en/solrquery.getstats.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStats() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the stats facets that were set
	 * @link http://php.net/manual/en/solrquery.getstatsfacets.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStatsFacets() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the statistics fields
	 * @link http://php.net/manual/en/solrquery.getstatsfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStatsFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not the TermsComponent is enabled
	 * @link http://php.net/manual/en/solrquery.getterms.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTerms() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the field from which the terms are retrieved
	 * @link http://php.net/manual/en/solrquery.gettermsfield.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsField() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not to include the lower bound in the result set
	 * @link http://php.net/manual/en/solrquery.gettermsincludelowerbound.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsIncludeLowerBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not to include the upper bound term in the result set
	 * @link http://php.net/manual/en/solrquery.gettermsincludeupperbound.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsIncludeUpperBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of terms Solr should return
	 * @link http://php.net/manual/en/solrquery.gettermslimit.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsLimit() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the term to start at
	 * @link http://php.net/manual/en/solrquery.gettermslowerbound.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsLowerBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum document frequency
	 * @link http://php.net/manual/en/solrquery.gettermsmaxcount.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsMaxCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the minimum document frequency to return in order to be included
	 * @link http://php.net/manual/en/solrquery.gettermsmincount.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsMinCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the term prefix
	 * @link http://php.net/manual/en/solrquery.gettermsprefix.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsPrefix() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Whether or not to return raw characters
	 * @link http://php.net/manual/en/solrquery.gettermsreturnraw.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsReturnRaw() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an integer indicating how terms are sorted
	 * @link http://php.net/manual/en/solrquery.gettermssort.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set<br/>
	 * SolrQuery::TERMS_SORT_INDEX indicates that the terms are returned by index order.<br/>
	 * SolrQuery::TERMS_SORT_COUNT implies that the terms are sorted by term frequency (highest count first)
	 * </p>
	 */
	public function getTermsSort() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the term to stop at
	 * @link http://php.net/manual/en/solrquery.gettermsupperbound.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsUpperBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the time in milliseconds allowed for the query to finish
	 * @link http://php.net/manual/en/solrquery.gettimeallowed.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTimeAllowed() {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Removes an expand filter query
	 * @link http://php.net/manual/en/solrquery.removeexpandfilterquery.php
	 * @param string $fq
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeExpandFilterQuery($fq) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Removes an expand sort field from the expand.sort parameter.
	 * @link http://php.net/manual/en/solrquery.removeexpandsortfield.php
	 * @param string $field <p>
	 * Field name
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeExpandSortField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet date fields
	 * @link http://php.net/manual/en/solrquery.removefacetdatefield.php
	 * @param string $field <p>
	 * The name of the date field to remove
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetDateField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet.date.other parameters
	 * @link http://php.net/manual/en/solrquery.removefacetdateother.php
	 * @param string $value <p>
	 * The value
	 * </p>
	 * @param string $field_override [optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetDateOther($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet.date parameters
	 * @link http://php.net/manual/en/solrquery.removefacetfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet.query parameters
	 * @link http://php.net/manual/en/solrquery.removefacetquery.php
	 * @param string $value <p>
	 * The value
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetQuery($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a field from the list of fields
	 * @link http://php.net/manual/en/solrquery.removefield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a filter query
	 * @link http://php.net/manual/en/solrquery.removefilterquery.php
	 * @param string $fq
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFilterQuery($fq) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the fields used for highlighting
	 * @link http://php.net/manual/en/solrquery.removehighlightfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeHighlightField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the moreLikeThis fields
	 * @link http://php.net/manual/en/solrquery.removemltfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeMltField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the moreLikeThis query fields
	 * @link http://php.net/manual/en/solrquery.removemltqueryfield.php
	 * @param string $queryField <p>
	 * The query field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeMltQueryField($queryField) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the sort fields
	 * @link http://php.net/manual/en/solrquery.removesortfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeSortField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the stats.facet parameters
	 * @link http://php.net/manual/en/solrquery.removestatsfacet.php
	 * @param string $value <p>
	 * The value
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeStatsFacet($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the stats.field parameters
	 * @link http://php.net/manual/en/solrquery.removestatsfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeStatsField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Toggles the echoHandler parameter
	 * @link http://php.net/manual/en/solrquery.setechohandler.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setEchoHandler($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Determines what kind of parameters to include in the response
	 * @link http://php.net/manual/en/solrquery.setechoparams.php
	 * @param string $type <p>
	 * The type of parameters to include:
	 * </p>
	 * <ul>
	 * <li><b>none</b>: don't include any request parameters for debugging</li>
	 * <li><b>explicit</b>: include the parameters explicitly specified by the client in the request</li>
	 * <li><b>all</b>: include all parameters involved in this request, either specified explicitly by the client, or
	 * implicit because of the request handler configuration.</li>
	 * </ul>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setEchoParams($type) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Enables/Disables the Expand Component
	 * @link http://php.net/manual/en/solrquery.setexpand.php
	 * @param bool $value <p>
	 * Bool flag
	 * </b>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setExpand($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the expand.q parameter
	 * @link http://php.net/manual/en/solrquery.setexpandquery.php
	 * @param string $q
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setExpandQuery($q) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the number of rows to display in each group (expand.rows). Server Default 5
	 * @link http://php.net/manual/en/solrquery.setexpandrows.php
	 * @param integer $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setExpandRows($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the explainOther common query parameter
	 * @link http://php.net/manual/en/solrquery.setexplainother.php
	 * @param string $query <p>
	 * The Lucene query to identify a set of documents
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setExplainOther($query) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to the facet parameter. Enables or disables facetting
	 * @link http://php.net/manual/en/solrquery.setfacet.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> enables faceting and <b>FALSE</b> disables it.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacet($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.end
	 * @link http://php.net/manual/en/solrquery.setfacetdateend.php
	 * @param string $value <p>
	 * See facet.date.end
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateEnd($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.gap
	 * @link http://php.net/manual/en/solrquery.setfacetdategap.php
	 * @param string $value <p>
	 * See facet.date.gap
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateGap($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.hardend
	 * @link http://php.net/manual/en/solrquery.setfacetdatehardend.php
	 * @param string $value <p>
	 * See facet.date.hardend
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateHardEnd($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.start
	 * @link http://php.net/manual/en/solrquery.setfacetdatestart.php
	 * @param string $value <p>
	 * See facet.date.start
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateStart($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the minimum document frequency used for determining term count
	 * @link http://php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
	 * @param int $frequency <p>
	 * The minimum frequency
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetEnumCacheMinDefaultFrequency($frequency, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.limit
	 * @link http://php.net/manual/en/solrquery.setfacetlimit.php
	 * @param int $limit <p>
	 * The maximum number of constraint counts
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetLimit($limit, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the type of algorithm to use when faceting a field
	 * @link http://php.net/manual/en/solrquery.setfacetmethod.php
	 * @param string $method <p>
	 * The method to use.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetMethod($method, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.mincount
	 * @link http://php.net/manual/en/solrquery.setfacetmincount.php
	 * @param int $mincount <p>
	 * The minimum count
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetMinCount($mincount, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.missing
	 * @link http://php.net/manual/en/solrquery.setfacetmissing.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> turns this feature on. <b>FALSE</b> disables it.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetMissing($flag, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the offset into the list of constraints to allow for pagination
	 * @link http://php.net/manual/en/solrquery.setfacetoffset.php
	 * @param int $offset <p>
	 * The offset
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetOffset($offset, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies a string prefix with which to limits the terms on which to facet
	 * @link http://php.net/manual/en/solrquery.setfacetprefix.php
	 * @param string $prefix <p>
	 * The prefix string
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetPrefix($prefix, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Determines the ordering of the facet field constraints
	 * @link http://php.net/manual/en/solrquery.setfacetsort.php
	 * @param int $facetSort <p>
	 * Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetSort($facetSort, $field_override) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Enable/Disable result grouping (group parameter)
	 * @link http://php.net/manual/en/solrquery.setgroup.php
	 * @param bool $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroup($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Enables caching for result grouping
	 * @link http://php.net/manual/en/solrquery.setgroupcachepercent.php
	 * @param int $percent <p>
	 * Setting this parameter to a number greater than 0 enables caching for result grouping. Result Grouping executes
	 * two searches; this option caches the second search. The server default value is 0. Testing has shown that group
	 * caching only improves search time with Boolean, wildcard, and fuzzy queries. For simple queries like term or
	 * "match all" queries, group caching degrades performance. group.cache.percent parameter.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupCachePercent($percent) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets group.facet parameter
	 * @link http://php.net/manual/en/solrquery.setgroupfacet.php
	 * @param bool $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupFacet($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the group format, result structure (group.format parameter).
	 * @link http://php.net/manual/en/solrquery.setgroupformat.php
	 * @param string $value <p>
	 * Sets the group.format parameter. If this parameter is set to simple, the grouped documents are presented in a
	 * single flat list, and the start and rows parameters affect the numbers of documents instead of groups.<br/>
	 * Accepts: grouped/simple
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupFormat($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Specifies the number of results to return for each group. The server default value is 1.
	 * @link http://php.net/manual/en/solrquery.setgrouplimit.php
	 * @param int $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupLimit($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * If true, the result of the first field grouping command is used as the main result list in the response, using
	 * group.format=simple.
	 * @link http://php.net/manual/en/solrquery.setgroupmain.php
	 * @param string $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupMain($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * If true, Solr includes the number of groups that have matched the query in the results.
	 * @link http://php.net/manual/en/solrquery.setgroupngroups.php
	 * @param bool $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupNGroups($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * Sets the group.offset parameter.
	 * @link http://php.net/manual/en/solrquery.setgroupoffset.php
	 * @param int $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupOffset($value) {}

	/**
	 * (PECL solr &gt;= 2.2.0)<br/>
	 * If true, facet counts are based on the most relevant document of each group matching the query.
	 * @link http://php.net/manual/en/solrquery.setgrouptruncate.php
	 * @param bool $value
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setGroupTruncate($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables highlighting
	 * @link http://php.net/manual/en/solrquery.sethighlight.php
	 * @param bool $flag<p>
	 * Setting it to <b>TRUE</b> enables highlighted snippets to be generated in the query response.<br/>
	 * Setting it to <b>FALSE</b> disables highlighting
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlight($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the backup field to use
	 * @link http://php.net/manual/en/solrquery.sethighlightalternatefield.php
	 * @param string $field <p>
	 * The name of the backup field
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightAlternateField($field, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specify a formatter for the highlight output
	 * @link http://php.net/manual/en/solrquery.sethighlightformatter.php
	 * @param string $formatter <p>
	 * Currently the only legal value is "simple"
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightFormatter($formatter, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets a text snippet generator for highlighted text
	 * @link http://php.net/manual/en/solrquery.sethighlightfragmenter.php
	 * @param string $fragmenter <p>
	 * The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain
	 * regular expression
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightFragmenter($fragmenter, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * The size of fragments to consider for highlighting
	 * @link http://php.net/manual/en/solrquery.sethighlightfragsize.php
	 * @param int $size <p>
	 * The size, in characters, of fragments to consider for highlighting
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightFragsize($size, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Use SpanScorer to highlight phrase terms
	 * @link http://php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
	 * @param bool $flag <p>
	 * Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the
	 * document.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightHighlightMultiTerm($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of characters of the field to return
	 * @link http://php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
	 * @param string $fieldLength <p>
	 * The length of the field
	 * </p>
	 * <p>
	 * If SolrQuery::setHighlightAlternateField() was passed the value <b>TRUE</b>, this parameter specifies the maximum
	 * number of characters of the field to return
	 * </p>
	 * <p>
	 * Any value less than or equal to 0 means unlimited.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightMaxAlternateFieldLength($fieldLength, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the number of characters into a document to look for suitable snippets
	 * @link http://php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
	 * @param int $value <p>
	 * The number of characters into a document to look for suitable snippets
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightMaxAnalyzedChars($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Whether or not to collapse contiguous fragments into a single fragment
	 * @link http://php.net/manual/en/solrquery.sethighlightmergecontiguous.php
	 * @param bool $flag <p>
	 * Whether or not to collapse contiguous fragments into a single fragment
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightMergeContiguous($flag, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specify the maximum number of characters to analyze
	 * @link http://php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
	 * @param int $maxAnalyzedChars <p>
	 * The maximum number of characters to analyze from a field when using the regex fragmenter
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specify the regular expression for fragmenting
	 * @link http://php.net/manual/en/solrquery.sethighlightregexpattern.php
	 * @param string $value <p>
	 * The regular expression for fragmenting. This could be used to extract sentences
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRegexPattern($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
	 * @link http://php.net/manual/en/solrquery.sethighlightregexslop.php
	 * @param float $factor <p>
	 * The factor by which the regex fragmenter can stray from the ideal fragment size (specfied by
	 * SolrQuery::setHighlightFragsize) to accommodate the regular expression.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRegexSlop($factor) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Require field matching during highlighting
	 * @link http://php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
	 * @param bool $flag <p>
	 * If <b>TRUE</b>, then a field will only be highlighted if the query matched in this particular field.<br/>
	 * This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to <b>TRUE</b>.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRequireFieldMatch($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the text which appears after a highlighted term
	 * @link http://php.net/manual/en/solrquery.sethighlightsimplepost.php
	 * @param string $simplePost <p>
	 * Sets the text which appears after a highlighted term. The default is &lt;/em&gt;
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightSimplePost($simplePost, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the text which appears before a highlighted term
	 * @link http://php.net/manual/en/solrquery.sethighlightsimplepre.php
	 * @param string $simplePre <p>
	 * Sets the text which appears before a highlighted term. The default is &lt;em&gt;
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightSimplePre($simplePre, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of highlighted snippets to generate per field
	 * @link http://php.net/manual/en/solrquery.sethighlightsnippets.php
	 * @param int $value <p>
	 * The maximum number of highlighted snippets to generate per field
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightSnippets($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Whether to highlight phrase terms only when they appear within the query phrase
	 * @link http://php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
	 * @param bool $flag <p>
	 * Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the
	 * document.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightUsePhraseHighlighter($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables moreLikeThis
	 * @link http://php.net/manual/en/solrquery.setmlt.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> enables it and <b>FALSE</b> turns it off.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMlt($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Set if the query will be boosted by the interesting term relevance
	 * @link http://php.net/manual/en/solrquery.setmltboost.php
	 * @param bool $flag <p>
	 * Sets to <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltBoost($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Set the number of similar documents to return for each result
	 * @link http://php.net/manual/en/solrquery.setmltcount.php
	 * @param int $count <p>
	 * The number of similar documents to return for each result
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltCount($count) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of query terms included
	 * @link http://php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
	 * @param int $value <p>
	 * The maximum number of query terms that will be included in any generated query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMaxNumQueryTerms($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the maximum number of tokens to parse
	 * @link http://php.net/manual/en/solrquery.setmltmaxnumtokens.php
	 * @param int $value <p>
	 * The maximum number of tokens to parse
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMaxNumTokens($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum word length
	 * @link http://php.net/manual/en/solrquery.setmltmaxwordlength.php
	 * @param int $maxWordLength <p>
	 * The maximum word length above which words will be ignored
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMaxWordLength($maxWordLength) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the mltMinDoc frequency
	 * @link http://php.net/manual/en/solrquery.setmltmindocfrequency.php
	 * @param int $minDocFrequency <p>
	 * Sets the frequency at which words will be ignored which do not occur in at least this many docs.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMinDocFrequency($minDocFrequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the frequency below which terms will be ignored in the source docs
	 * @link http://php.net/manual/en/solrquery.setmltmintermfrequency.php
	 * @param int $minTermFrequency <p>
	 * The frequency below which terms will be ignored in the source docs
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMinTermFrequency($minTermFrequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the minimum word length
	 * @link http://php.net/manual/en/solrquery.setmltminwordlength.php
	 * @param int $minWordLength <p>
	 * The minimum word length below which words will be ignored
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMinWordLength($minWordLength) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Exclude the header from the returned results
	 * @link http://php.net/manual/en/solrquery.setomitheader.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> excludes the header from the result.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setOmitHeader($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the search query
	 * @link http://php.net/manual/en/solrquery.setquery.php
	 * @param string $query <p>
	 * The search query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setQuery($query) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the maximum number of rows to return in the result
	 * @link http://php.net/manual/en/solrquery.setrows.php
	 * @param int $rows <p>
	 * The maximum number of rows to return
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setRows($rows) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Flag to show debug information
	 * @link http://php.net/manual/en/solrquery.setshowdebuginfo.php
	 * @param bool $flag <p>
	 * Whether to show debug info. <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setShowDebugInfo($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the number of rows to skip
	 * @link http://php.net/manual/en/solrquery.setstart.php
	 * @param int $start <p>
	 * The number of rows to skip.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setStart($start) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables the Stats component
	 * @link http://php.net/manual/en/solrquery.setstats.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> turns on the stats component and <b>FALSE</b> disables it.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setStats($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables the TermsComponent
	 * @link http://php.net/manual/en/solrquery.setterms.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> enables it. <b>FALSE</b> turns it off
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTerms($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the name of the field to get the Terms from
	 * @link http://php.net/manual/en/solrquery.settermsfield.php
	 * @param string $fieldname <p>
	 * The field name
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsField($fieldname) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Include the lower bound term in the result set
	 * @link http://php.net/manual/en/solrquery.settermsincludelowerbound.php
	 * @param bool $flag <p>
	 * Include the lower bound term in the result set
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsIncludeLowerBound($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Include the upper bound term in the result set
	 * @link http://php.net/manual/en/solrquery.settermsincludeupperbound.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsIncludeUpperBound($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of terms to return
	 * @link http://php.net/manual/en/solrquery.settermslimit.php
	 * @param int $limit <p>
	 * The maximum number of terms to return. All the terms will be returned if the limit is negative.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsLimit($limit) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the Term to start from
	 * @link http://php.net/manual/en/solrquery.settermslowerbound.php
	 * @param string $lowerBound <p>
	 * The lower bound Term
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsLowerBound($lowerBound) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum document frequency
	 * @link http://php.net/manual/en/solrquery.settermsmaxcount.php
	 * @param int $frequency <p>
	 * The maximum document frequency.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsMaxCount($frequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the minimum document frequency
	 * @link http://php.net/manual/en/solrquery.settermsmincount.php
	 * @param int $frequency <p>
	 * The minimum frequency
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsMinCount($frequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Restrict matches to terms that start with the prefix
	 * @link http://php.net/manual/en/solrquery.settermsprefix.php
	 * @param string $prefix <p>
	 * Restrict matches to terms that start with the prefix
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsPrefix($prefix) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Return the raw characters of the indexed term
	 * @link http://php.net/manual/en/solrquery.settermsreturnraw.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsReturnRaw($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies how to sort the returned terms
	 * @link http://php.net/manual/en/solrquery.settermssort.php
	 * @param int $sortType <p>
	 * If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first).<br/>
	 * If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsSort($sortType) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the term to stop at
	 * @link http://php.net/manual/en/solrquery.settermsupperbound.php
	 * @param string $upperBound <p>
	 * The term to stop at
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsUpperBound($upperBound) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * The time allowed for search to finish
	 * @link http://php.net/manual/en/solrquery.settimeallowed.php
	 * @param int $timeAllowed <p>
	 * The time allowed for a search to finish. This value only applies to the search and not to requests in general.
	 * Time is in milliseconds. Values less than or equal to zero implies no time restriction. Partial results may be
	 * returned, if there are any.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTimeAllowed($timeAllowed) {}

}