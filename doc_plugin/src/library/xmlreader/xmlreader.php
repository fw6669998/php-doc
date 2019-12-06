<?php

// Start of xmlreader v.0.2

/**
*<div id="class.xmlreader" class="reference">  <h1 class="title">The XMLReader class</h1>      <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7)</p>      <div class="section" id="xmlreader.intro">    <h2 class="title">简介</h2>    <p class="para">     The XMLReader extension is an XML Pull parser. The reader acts as a      cursor going forward on the document stream and stopping at each node      on the way.    </p>   </div>      <div class="section" id="xmlreader.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">XMLReader</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.none"><var class="varname">NONE</var></a></var>       <span class="initializer"> = 0</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.element"><var class="varname">ELEMENT</var></a></var>       <span class="initializer"> = 1</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.attribute"><var class="varname">ATTRIBUTE</var></a></var>       <span class="initializer"> = 2</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.text"><var class="varname">TEXT</var></a></var>       <span class="initializer"> = 3</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.cdata"><var class="varname">CDATA</var></a></var>       <span class="initializer"> = 4</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.entity-ref"><var class="varname">ENTITY_REF</var></a></var>       <span class="initializer"> = 5</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.entity"><var class="varname">ENTITY</var></a></var>       <span class="initializer"> = 6</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.pi"><var class="varname">PI</var></a></var>       <span class="initializer"> = 7</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.comment"><var class="varname">COMMENT</var></a></var>       <span class="initializer"> = 8</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.doc"><var class="varname">DOC</var></a></var>       <span class="initializer"> = 9</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.doc-type"><var class="varname">DOC_TYPE</var></a></var>       <span class="initializer"> = 10</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.doc-fragment"><var class="varname">DOC_FRAGMENT</var></a></var>       <span class="initializer"> = 11</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.notation"><var class="varname">NOTATION</var></a></var>       <span class="initializer"> = 12</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.whitespace"><var class="varname">WHITESPACE</var></a></var>       <span class="initializer"> = 13</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.significant-whitespace"><var class="varname">SIGNIFICANT_WHITESPACE</var></a></var>       <span class="initializer"> = 14</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.end-element"><var class="varname">END_ELEMENT</var></a></var>       <span class="initializer"> = 15</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.end-entity"><var class="varname">END_ENTITY</var></a></var>       <span class="initializer"> = 16</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.xml-declaration"><var class="varname">XML_DECLARATION</var></a></var>       <span class="initializer"> = 17</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.loaddtd"><var class="varname">LOADDTD</var></a></var>       <span class="initializer"> = 1</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.defaultattrs"><var class="varname">DEFAULTATTRS</var></a></var>       <span class="initializer"> = 2</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.validate"><var class="varname">VALIDATE</var></a></var>       <span class="initializer"> = 3</span>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">const</span>       <span class="type" style="color:#EAB766">int</span>        <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.constants.subst-entities"><var class="varname">SUBST_ENTITIES</var></a></var>       <span class="initializer"> = 4</span>      ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">int</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.attributecount">$<var class="varname">attributeCount</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.baseuri">$<var class="varname">baseURI</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">int</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.depth">$<var class="varname">depth</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">bool</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.hasattributes">$<var class="varname">hasAttributes</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">bool</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.hasvalue">$<var class="varname">hasValue</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">bool</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.isdefault">$<var class="varname">isDefault</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">bool</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.isemptyelement">$<var class="varname">isEmptyElement</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.localname">$<var class="varname">localName</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.name">$<var class="varname">name</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.namespaceuri">$<var class="varname">namespaceURI</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">int</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.nodetype">$<var class="varname">nodeType</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.prefix">$<var class="varname">prefix</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.value">$<var class="varname">value</var></a></var>      ;</div>       <div class="fieldsynopsis">       <span class="modifier">public</span>       <span class="modifier">readonly</span>       <span class="type" style="color:#EAB766">string</span>        <var class="varname"><a href="http://php.net/manual/zh/class.xmlreader.php#xmlreader.props.xmllang">$<var class="varname">xmlLang</var></a></var>      ;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.close.php" class="methodname" style="color:#CC7832">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">DOMNode</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.expand.php" class="methodname" style="color:#CC7832">expand</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.domnode.php" class="type DOMNode" style="color:#EAB766">DOMNode</a></span> <span class="parameter" style="color:#2EACF9">$basenode</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">string</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.getattribute.php" class="methodname" style="color:#CC7832">getAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">string</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.getattributeno.php" class="methodname" style="color:#CC7832">getAttributeNo</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.getattributens.php" class="methodname" style="color:#CC7832">getAttributeNs</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localName</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$namespaceURI</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.getparserproperty.php" class="methodname" style="color:#CC7832">getParserProperty</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$property</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.isvalid.php" class="methodname" style="color:#CC7832">isValid</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">string</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.lookupnamespace.php" class="methodname" style="color:#CC7832">lookupNamespace</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$prefix</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.movetoattribute.php" class="methodname" style="color:#CC7832">moveToAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.movetoattributeno.php" class="methodname" style="color:#CC7832">moveToAttributeNo</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.movetoattributens.php" class="methodname" style="color:#CC7832">moveToAttributeNs</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localName</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$namespaceURI</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.movetoelement.php" class="methodname" style="color:#CC7832">moveToElement</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.movetofirstattribute.php" class="methodname" style="color:#CC7832">moveToFirstAttribute</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.movetonextattribute.php" class="methodname" style="color:#CC7832">moveToNextAttribute</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.next.php" class="methodname" style="color:#CC7832">next</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$localname</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.open.php" class="methodname" style="color:#CC7832">open</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$URI</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$encoding</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$options</span><span class="initializer"> = 0</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.read.php" class="methodname" style="color:#CC7832">read</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.readinnerxml.php" class="methodname" style="color:#CC7832">readInnerXml</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.readouterxml.php" class="methodname" style="color:#CC7832">readOuterXml</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.readstring.php" class="methodname" style="color:#CC7832">readString</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.setparserproperty.php" class="methodname" style="color:#CC7832">setParserProperty</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$property</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.setrelaxngschema.php" class="methodname" style="color:#CC7832">setRelaxNGSchema</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.setrelaxngschemasource.php" class="methodname" style="color:#CC7832">setRelaxNGSchemaSource</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$source</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.setschema.php" class="methodname" style="color:#CC7832">setSchema</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span>    <span class="type" style="color:#EAB766">bool</span>     <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/xmlreader.xml.php" class="methodname" style="color:#CC7832">xml</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$source</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$encoding</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$options</span><span class="initializer"> = 0</span></span>   ]] )</div>       }</div>      </div>      <div class="section" id="xmlreader.props">    <h2 class="title">属性</h2>    <dl>            <dt id="xmlreader.props.attributecount"><var class="varname"><var class="varname">attributeCount</var></var></dt>       <dd>        <p class="para">        The number of attributes on the node       </p>      </dd>                  <dt id="xmlreader.props.baseuri"><var class="varname"><var class="varname">baseURI</var></var></dt>       <dd>        <p class="para">The base URI of the node</p>      </dd>                  <dt id="xmlreader.props.depth"><var class="varname"><var class="varname">depth</var></var></dt>       <dd>        <p class="para">Depth of the node in the tree, starting at 0</p>      </dd>                  <dt id="xmlreader.props.hasattributes"><var class="varname"><var class="varname">hasAttributes</var></var></dt>       <dd>        <p class="para">Indicates if node has attributes</p>      </dd>                  <dt id="xmlreader.props.hasvalue"><var class="varname"><var class="varname">hasValue</var></var></dt>       <dd>        <p class="para">Indicates if node has a text value</p>      </dd>                  <dt id="xmlreader.props.isdefault"><var class="varname"><var class="varname">isDefault</var></var></dt>       <dd>        <p class="para">Indicates if attribute is defaulted from DTD</p>      </dd>                  <dt id="xmlreader.props.isemptyelement"><var class="varname"><var class="varname">isEmptyElement</var></var></dt>       <dd>         <p class="para">Indicates if node is an empty element tag</p>      </dd>                  <dt id="xmlreader.props.localname"><var class="varname"><var class="varname">localName</var></var></dt>       <dd>        <p class="para">The local name of the node</p>      </dd>                  <dt id="xmlreader.props.name"><var class="varname"><var class="varname">name</var></var></dt>       <dd>        <p class="para">The qualified name of the node</p>      </dd>                  <dt id="xmlreader.props.namespaceuri"><var class="varname"><var class="varname">namespaceURI</var></var></dt>       <dd>        <p class="para">The URI of the namespace associated with the node</p>      </dd>                  <dt id="xmlreader.props.nodetype"><var class="varname"><var class="varname">nodeType</var></var></dt>       <dd>        <p class="para">The node type for the node</p>      </dd>                  <dt id="xmlreader.props.prefix"><var class="varname"><var class="varname">prefix</var></var></dt>       <dd>        <p class="para">The prefix of the namespace associated with the node</p>      </dd>                  <dt id="xmlreader.props.value"><var class="varname"><var class="varname">value</var></var></dt>       <dd>        <p class="para">The text value of the node</p>      </dd>                  <dt id="xmlreader.props.xmllang"><var class="varname"><var class="varname">xmlLang</var></var></dt>       <dd>        <p class="para">The xml:lang scope which the node resides</p>      </dd>           </dl>    </div>         <div class="section" id="xmlreader.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="xmlreader.constants.types">     <h2 class="title">XMLReader Node Types</h2>     <dl>               <dt id="xmlreader.constants.none"><strong><span>XMLReader::NONE</span></strong></dt>        <dd>         <p class="para">No node type</p>       </dd>                     <dt id="xmlreader.constants.element"><strong><span>XMLReader::ELEMENT</span></strong></dt>        <dd>         <p class="para">Start element</p>       </dd>                     <dt id="xmlreader.constants.attribute"><strong><span>XMLReader::ATTRIBUTE</span></strong></dt>        <dd>         <p class="para">Attribute node</p>       </dd>                     <dt id="xmlreader.constants.text"><strong><span>XMLReader::TEXT</span></strong></dt>        <dd>         <p class="para">Text node</p>       </dd>                     <dt id="xmlreader.constants.cdata"><strong><span>XMLReader::CDATA</span></strong></dt>        <dd>         <p class="para">CDATA node</p>       </dd>                     <dt id="xmlreader.constants.entity-ref"><strong><span>XMLReader::ENTITY_REF</span></strong></dt>        <dd>         <p class="para">Entity Reference node</p>       </dd>                     <dt id="xmlreader.constants.entity"><strong><span>XMLReader::ENTITY</span></strong></dt>        <dd>         <p class="para">Entity Declaration node</p>       </dd>                     <dt id="xmlreader.constants.pi"><strong><span>XMLReader::PI</span></strong></dt>        <dd>         <p class="para">Processing Instruction node</p>       </dd>                     <dt id="xmlreader.constants.comment"><strong><span>XMLReader::COMMENT</span></strong></dt>        <dd>         <p class="para">Comment node</p>       </dd>                     <dt id="xmlreader.constants.doc"><strong><span>XMLReader::DOC</span></strong></dt>        <dd>         <p class="para">Document node</p>       </dd>                     <dt id="xmlreader.constants.doc-type"><strong><span>XMLReader::DOC_TYPE</span></strong></dt>        <dd>         <p class="para">Document Type node</p>       </dd>                     <dt id="xmlreader.constants.doc-fragment"><strong><span>XMLReader::DOC_FRAGMENT</span></strong></dt>        <dd>         <p class="para">Document Fragment node</p>       </dd>                     <dt id="xmlreader.constants.notation"><strong><span>XMLReader::NOTATION</span></strong></dt>        <dd>         <p class="para">Notation node</p>       </dd>                     <dt id="xmlreader.constants.whitespace"><strong><span>XMLReader::WHITESPACE</span></strong></dt>        <dd>         <p class="para">Whitespace node</p>       </dd>                     <dt id="xmlreader.constants.significant-whitespace"><strong><span>XMLReader::SIGNIFICANT_WHITESPACE</span></strong></dt>        <dd>         <p class="para">Significant Whitespace node</p>       </dd>                     <dt id="xmlreader.constants.end-element"><strong><span>XMLReader::END_ELEMENT</span></strong></dt>        <dd>         <p class="para">End Element</p>       </dd>                     <dt id="xmlreader.constants.end-entity"><strong><span>XMLReader::END_ENTITY</span></strong></dt>        <dd>         <p class="para">End Entity</p>       </dd>                     <dt id="xmlreader.constants.xml-declaration"><strong><span>XMLReader::XML_DECLARATION</span></strong></dt>        <dd>         <p class="para">XML Declaration node</p>       </dd>             </dl>     </div>     <div class="section" id="xmlreader.constants.options">     <h2 class="title">XMLReader Parser Options</h2>      <dl>               <dt id="xmlreader.constants.loaddtd"><strong><span>XMLReader::LOADDTD</span></strong></dt>        <dd>         <p class="para">Load DTD but do not validate</p>       </dd>                     <dt id="xmlreader.constants.defaultattrs"><strong><span>XMLReader::DEFAULTATTRS</span></strong></dt>        <dd>         <p class="para">Load DTD and default attributes but do not validate</p>       </dd>                     <dt id="xmlreader.constants.validate"><strong><span>XMLReader::VALIDATE</span></strong></dt>        <dd>         <p class="para">Load DTD and validate while parsing</p>       </dd>                     <dt id="xmlreader.constants.subst-entities"><strong><span>XMLReader::SUBST_ENTITIES</span></strong></dt>        <dd>         <p class="para">Substitute entities and expand references</p>       </dd>             </dl>     </div>   </div>   </div>                                                                                                                                                                         <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link XMLReader::close} — Close the XMLReader input</li><li>{@link XMLReader::expand} — Returns a copy of the current node as a DOM object</li><li>{@link XMLReader::getAttribute} — Get the value of a named attribute</li><li>{@link XMLReader::getAttributeNo} — Get the value of an attribute by index</li><li>{@link XMLReader::getAttributeNs} — Get the value of an attribute by localname and URI</li><li>{@link XMLReader::getParserProperty} — Indicates if specified property has been set</li><li>{@link XMLReader::isValid} — Indicates if the parsed document is valid</li><li>{@link XMLReader::lookupNamespace} — Lookup namespace for a prefix</li><li>{@link XMLReader::moveToAttribute} — Move cursor to a named attribute</li><li>{@link XMLReader::moveToAttributeNo} — Move cursor to an attribute by index</li><li>{@link XMLReader::moveToAttributeNs} — Move cursor to a named attribute</li><li>{@link XMLReader::moveToElement} — Position cursor on the parent Element of current Attribute</li><li>{@link XMLReader::moveToFirstAttribute} — Position cursor on the first Attribute</li><li>{@link XMLReader::moveToNextAttribute} — Position cursor on the next Attribute</li><li>{@link XMLReader::next} — Move cursor to next node skipping all subtrees</li><li>{@link XMLReader::open} — Set the URI containing the XML to parse</li><li>{@link XMLReader::read} — Move to next node in document</li><li>{@link XMLReader::readInnerXml} — Retrieve XML from current node</li><li>{@link XMLReader::readOuterXml} — Retrieve XML from current node, including itself</li><li>{@link XMLReader::readString} — Reads the contents of the current node as a string</li><li>{@link XMLReader::setParserProperty} — Set parser options</li><li>{@link XMLReader::setRelaxNGSchema} — Set the filename or URI for a RelaxNG Schema</li><li>{@link XMLReader::setRelaxNGSchemaSource} — Set the data containing a RelaxNG Schema</li><li>{@link XMLReader::setSchema} — Validate document against XSD</li><li>{@link XMLReader::XML} — Set the data containing the XML to parse</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.xmlreader.php">XMLReader</a></div></div>
*/
class XMLReader  {
	/**
	 * No node type
	 */
	const NONE = 0;
	/**
	 * Start element
	 */
	const ELEMENT = 1;
	/**
	 * Attribute node
	 */
	const ATTRIBUTE = 2;
	/**
	 * Text node
	 */
	const TEXT = 3;
	/**
	 * CDATA node
	 */
	const CDATA = 4;
	/**
	 * Entity Reference node
	 */
	const ENTITY_REF = 5;
	/**
	 * Entity Declaration node
	 */
	const ENTITY = 6;
	/**
	 * Processing Instruction node
	 */
	const PI = 7;
	/**
	 * Comment node
	 */
	const COMMENT = 8;
	/**
	 * Document node
	 */
	const DOC = 9;
	/**
	 * Document Type node
	 */
	const DOC_TYPE = 10;
	/**
	 * Document Fragment node
	 */
	const DOC_FRAGMENT = 11;
	/**
	 * Notation node
	 */
	const NOTATION = 12;
	/**
	 * Whitespace node
	 */
	const WHITESPACE = 13;
	/**
	 * Significant Whitespace node
	 */
	const SIGNIFICANT_WHITESPACE = 14;
	/**
	 * End Element
	 */
	const END_ELEMENT = 15;
	/**
	 * End Entity
	 */
	const END_ENTITY = 16;
	/**
	 * XML Declaration node
	 */
	const XML_DECLARATION = 17;
	/**
	 * Load DTD but do not validate
	 */
	const LOADDTD = 1;
	/**
	 * Load DTD and default attributes but do not validate
	 */
	const DEFAULTATTRS = 2;
	/**
	 * Load DTD and validate while parsing
	 */
	const VALIDATE = 3;
	/**
	 * Substitute entities and expand references
	 */
	const SUBST_ENTITIES = 4;


	/**
	 * Close the XMLReader input
	 * @link http://php.net/manual/en/xmlreader.close.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function close () {}

	/**
	 * Get the value of a named attribute
	 * @link http://php.net/manual/en/xmlreader.getattribute.php
	 * @param string $name <p>
	 * The name of the attribute.
	 * </p>
	 * @return string The value of the attribute, or <b>NULL</b> if no attribute with the given
	 * <i>name</i> is found or not positioned on an element node.
	 * @since 5.1.2
	 */
	public function getAttribute ($name) {}

	/**
	 * Get the value of an attribute by index
	 * @link http://php.net/manual/en/xmlreader.getattributeno.php
	 * @param int $index <p>
	 * The position of the attribute.
	 * </p>
	 * @return string|NULL The value of the attribute, or <b>NULL</b> if no attribute exists
	 * at <i>index</i> or not positioned of element.
	 * @since 5.1.2
	 */
	public function getAttributeNo ($index) {}

	/**
	 * Get the value of an attribute by localname and URI
	 * @link http://php.net/manual/en/xmlreader.getattributens.php
	 * @param string $localName <p>
	 * The local name.
	 * </p>
	 * @param string $namespaceURI <p>
	 * The namespace URI.
	 * </p>
	 * @return string|NULL The value of the attribute, or <b>NULL</b> if no attribute with the
	 * given <i>localName</i> and
	 * <i>namespaceURI</i> is found or not positioned of element.
	 * @since 5.1.2
	 */
	public function getAttributeNs ($localName, $namespaceURI) {}

	/**
	 * Indicates if specified property has been set
	 * @link http://php.net/manual/en/xmlreader.getparserproperty.php
	 * @param int $property <p>
	 * One of the parser option
	 * constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function getParserProperty ($property) {}

	/**
	 * Indicates if the parsed document is valid
	 * @link http://php.net/manual/en/xmlreader.isvalid.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function isValid () {}

	/**
	 * Lookup namespace for a prefix
	 * @link http://php.net/manual/en/xmlreader.lookupnamespace.php
	 * @param string $prefix <p>
	 * String containing the prefix.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function lookupNamespace ($prefix) {}

	/**
	 * Move cursor to an attribute by index
	 * @link http://php.net/manual/en/xmlreader.movetoattributeno.php
	 * @param int $index <p>
	 * The position of the attribute.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function moveToAttributeNo ($index) {}

	/**
	 * Move cursor to a named attribute
	 * @link http://php.net/manual/en/xmlreader.movetoattribute.php
	 * @param string $name <p>
	 * The name of the attribute.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function moveToAttribute ($name) {}

	/**
	 * Move cursor to a named attribute
	 * @link http://php.net/manual/en/xmlreader.movetoattributens.php
	 * @param string $localName <p>
	 * The local name.
	 * </p>
	 * @param string $namespaceURI <p>
	 * The namespace URI.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function moveToAttributeNs ($localName, $namespaceURI) {}

	/**
	 * Position cursor on the parent Element of current Attribute
	 * @link http://php.net/manual/en/xmlreader.movetoelement.php
	 * @return bool <b>TRUE</b> if successful and <b>FALSE</b> if it fails or not positioned on
	 * Attribute when this method is called.
	 * @since 5.1.2
	 */
	public function moveToElement () {}

	/**
	 * Position cursor on the first Attribute
	 * @link http://php.net/manual/en/xmlreader.movetofirstattribute.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function moveToFirstAttribute () {}

	/**
	 * Position cursor on the next Attribute
	 * @link http://php.net/manual/en/xmlreader.movetonextattribute.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function moveToNextAttribute () {}

	/**
	 * Set the URI containing the XML to parse
	 * @link http://php.net/manual/en/xmlreader.open.php
	 * @param string $URI <p>
	 * URI pointing to the document.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The document encoding or <b>NULL</b>.
	 * </p>
	 * @param int $options [optional] <p>
	 * A bitmask of the LIBXML_*
	 * constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. If called statically, returns an
	 * <b>XMLReader</b> or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function open ($URI, $encoding = null, $options = 0) {}

	/**
	 * Move to next node in document
	 * @link http://php.net/manual/en/xmlreader.read.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function read () {}

	/**
	 * Move cursor to next node skipping all subtrees
	 * @link http://php.net/manual/en/xmlreader.next.php
	 * @param string $localname [optional] <p>
	 * The name of the next node to move to.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>next</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        受影响的 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong style="color:#CC7832">next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next ($localname = null) {}

	/**
	 * Retrieve XML from current node
	 * @link http://php.net/manual/en/xmlreader.readinnerxml.php
	 * @return string the contents of the current node as a string. Empty string on failure.
	 * @since 5.2.0
	 */
	public function readInnerXml () {}

	/**
	 * Retrieve XML from current node, including it self
	 * @link http://php.net/manual/en/xmlreader.readouterxml.php
	 * @return string the contents of current node, including itself, as a string. Empty string on failure.
	 * @since 5.2.0
	 */
	public function readOuterXml () {}

	/**
	 * Reads the contents of the current node as a string
	 * @link http://php.net/manual/en/xmlreader.readstring.php
	 * @return string the content of the current node as a string. Empty string on
	 * failure.
	 * @since 5.2.0
	 */
	public function readString () {}

	/**
	 * Validate document against XSD
	 * @link http://php.net/manual/en/xmlreader.setschema.php
	 * @param string $filename <p>
	 * The filename of the XSD schema.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.2.0
	 */
	public function setSchema ($filename) {}

	/**
	 * Set parser options
	 * @link http://php.net/manual/en/xmlreader.setparserproperty.php
	 * @param int $property <p>
	 * One of the parser option
	 * constants.
	 * </p>
	 * @param bool $value <p>
	 * If set to <b>TRUE</b> the option will be enabled otherwise will
	 * be disabled.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function setParserProperty ($property, $value) {}

	/**
	 * Set the filename or URI for a RelaxNG Schema
	 * @link http://php.net/manual/en/xmlreader.setrelaxngschema.php
	 * @param string $filename <p>
	 * filename or URI pointing to a RelaxNG Schema.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.2.0
	 */
	public function setRelaxNGSchema ($filename) {}

	/**
	 * Set the data containing a RelaxNG Schema
	 * @link http://php.net/manual/en/xmlreader.setrelaxngschemasource.php
	 * @param string $source <p>
	 * String containing the RelaxNG Schema.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function setRelaxNGSchemaSource ($source) {}

	/**
	 * Set the data containing the XML to parse
	 * @link http://php.net/manual/en/xmlreader.xml.php
	 * @param string $source <p>
	 * String containing the XML to be parsed.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The document encoding or <b>NULL</b>.
	 * </p>
	 * @param int $options [optional] <p>
	 * A bitmask of the LIBXML_*
	 * constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. If called statically, returns an
	 * <b>XMLReader</b> or <b>FALSE</b> on failure.
	 * @since 5.1.2
	 */
	public function XML ($source, $encoding = null, $options = 0) {}

	/**
	 * Returns a copy of the current node as a DOM object
	 * @link http://php.net/manual/en/xmlreader.expand.php
	 * @param DOMNode $basenode [optional]
	 * @return DOMNode The resulting <b>DOMNode</b> or <b>FALSE</b> on error.
	 * @since 5.1.2
	 */
	public function expand (DOMNode $basenode = null) {}

}
// End of xmlreader v.0.2
