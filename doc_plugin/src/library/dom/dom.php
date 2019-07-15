<?php

// Start of dom v.20031129


/**
 * Gets a <b>DOMElement</b> object from a
 * @since 5.0
<b>SimpleXMLElement</b> object
/**
*<div id="function.dom-import-simplexml" class="refentry">  <div class="refnamediv">   <h1 class="refname">dom_import_simplexml</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">dom_import_simplexml</span> &mdash; <span class="dc-title">    Gets a <a href="http://php.net/manual/zh/class.domelement.php" class="classname">DOMElement</a> object from a    <a href="http://php.net/manual/zh/class.simplexmlelement.php" class="classname">SimpleXMLElement</a> object   </span></p>   </div>  <div class="refsect1 description" id="refsect1-function.dom-import-simplexml-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/class.domelement.php" class="type DOMElement">DOMElement</a></span> <span class="methodname"><strong>dom_import_simplexml</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span> <code class="parameter">$node</code></span>    )</div>    <p class="para rdfs-comment">    This function takes the node <code class="parameter">node</code> of class    <a href="http://php.net/manual/zh/ref.simplexml.php" class="link">SimpleXML</a> and makes it into a    <a href="http://php.net/manual/zh/class.domelement.php" class="classname">DOMElement</a> node. This new object can then be used    as a native <a href="http://php.net/manual/zh/class.domelement.php" class="classname">DOMElement</a> node.    </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.dom-import-simplexml-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">node</code></dt>       <dd>        <p class="para">        The <a href="http://php.net/manual/zh/class.simplexmlelement.php" class="classname">SimpleXMLElement</a> node.       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.dom-import-simplexml-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    The <a href="http://php.net/manual/zh/class.domelement.php" class="classname">DOMElement</a> node added or <strong><code>FALSE</code></strong> if any errors occur.   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.dom-import-simplexml-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-6501">    <p><strong>Example #1 Import SimpleXML into DOM with <span class="function"><strong>dom_import_simplexml()</strong></span></strong></p>    <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$sxe&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;'</span><span style="color: #007700">);<br /><br />if&nbsp;(</span><span style="color: #9876AA">$sxe&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #9876AA">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Error&nbsp;while&nbsp;parsing&nbsp;the&nbsp;document'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;exit;<br />}<br /><br /></span><span style="color: #9876AA">$dom_sxe&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">dom_import_simplexml</span><span style="color: #007700">(</span><span style="color: #9876AA">$sxe</span><span style="color: #007700">);<br />if&nbsp;(!</span><span style="color: #9876AA">$dom_sxe</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Error&nbsp;while&nbsp;converting&nbsp;XML'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;exit;<br />}<br /><br /></span><span style="color: #9876AA">$dom&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$dom_sxe&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">importNode</span><span style="color: #007700">(</span><span style="color: #9876AA">$dom_sxe</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$dom_sxe&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">appendChild</span><span style="color: #007700">(</span><span style="color: #9876AA">$dom_sxe</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">saveXML</span><span style="color: #007700">();<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>    </div>    </div>  </div>   <div class="refsect1 seealso" id="refsect1-function.dom-import-simplexml-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link simplexml_import_dom()} - Get a SimpleXMLElement object from a DOM node</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.dom.php">DOM 函数</a></div></div>
 * @return DOMElement The <b>DOMElement</b> node added or <b>FALSE</b> if any errors occur.*/
function dom_import_simplexml (SimpleXMLElement $node) {}


/**
 * Node is a <b>DOMElement</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_ELEMENT_NODE', 1);

/**
 * Node is a <b>DOMAttr</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_ATTRIBUTE_NODE', 2);

/**
 * Node is a <b>DOMText</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_TEXT_NODE', 3);

/**
 * Node is a <b>DOMCharacterData</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_CDATA_SECTION_NODE', 4);

/**
 * Node is a <b>DOMEntityReference</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_ENTITY_REF_NODE', 5);

/**
 * Node is a <b>DOMEntity</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_ENTITY_NODE', 6);

/**
 * Node is a <b>DOMProcessingInstruction</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_PI_NODE', 7);

/**
 * Node is a <b>DOMComment</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_COMMENT_NODE', 8);

/**
 * Node is a <b>DOMDocument</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_DOCUMENT_NODE', 9);

/**
 * Node is a <b>DOMDocumentType</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_DOCUMENT_TYPE_NODE', 10);

/**
 * Node is a <b>DOMDocumentFragment</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_DOCUMENT_FRAG_NODE', 11);

/**
 * Node is a <b>DOMNotation</b>
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('XML_NOTATION_NODE', 12);
define ('XML_HTML_DOCUMENT_NODE', 13);
define ('XML_DTD_NODE', 14);
define ('XML_ELEMENT_DECL_NODE', 15);
define ('XML_ATTRIBUTE_DECL_NODE', 16);
define ('XML_ENTITY_DECL_NODE', 17);
define ('XML_NAMESPACE_DECL_NODE', 18);
define ('XML_LOCAL_NAMESPACE', 18);
define ('XML_ATTRIBUTE_CDATA', 1);
define ('XML_ATTRIBUTE_ID', 2);
define ('XML_ATTRIBUTE_IDREF', 3);
define ('XML_ATTRIBUTE_IDREFS', 4);
define ('XML_ATTRIBUTE_ENTITY', 6);
define ('XML_ATTRIBUTE_NMTOKEN', 7);
define ('XML_ATTRIBUTE_NMTOKENS', 8);
define ('XML_ATTRIBUTE_ENUMERATION', 9);
define ('XML_ATTRIBUTE_NOTATION', 10);

/**
 * Error code not part of the DOM specification. Meant for PHP errors.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_PHP_ERR', 0);

/**
 * If index or size is negative, or greater than the allowed value.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_INDEX_SIZE_ERR', 1);

/**
 * If the specified range of text does not fit into a 
 * <b>DOMString</b>.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOMSTRING_SIZE_ERR', 2);

/**
 * If any node is inserted somewhere it doesn't belong
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_HIERARCHY_REQUEST_ERR', 3);

/**
 * If a node is used in a different document than the one that created it.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_WRONG_DOCUMENT_ERR', 4);

/**
 * If an invalid or illegal character is specified, such as in a name.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_INVALID_CHARACTER_ERR', 5);

/**
 * If data is specified for a node which does not support data.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_NO_DATA_ALLOWED_ERR', 6);

/**
 * If an attempt is made to modify an object where modifications are not allowed.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_NO_MODIFICATION_ALLOWED_ERR', 7);

/**
 * If an attempt is made to reference a node in a context where it does not exist.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_NOT_FOUND_ERR', 8);

/**
 * If the implementation does not support the requested type of object or operation.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_NOT_SUPPORTED_ERR', 9);

/**
 * If an attempt is made to add an attribute that is already in use elsewhere.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_INUSE_ATTRIBUTE_ERR', 10);

/**
 * If an attempt is made to use an object that is not, or is no longer, usable.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_INVALID_STATE_ERR', 11);

/**
 * If an invalid or illegal string is specified.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_SYNTAX_ERR', 12);

/**
 * If an attempt is made to modify the type of the underlying object.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_INVALID_MODIFICATION_ERR', 13);

/**
 * If an attempt is made to create or change an object in a way which is 
 * incorrect with regard to namespaces.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_NAMESPACE_ERR', 14);

/**
 * If a parameter or an operation is not supported by the underlying object.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_INVALID_ACCESS_ERR', 15);

/**
 * If a call to a method such as insertBefore or removeChild would make the Node
 * invalid with respect to "partial validity", this exception would be raised and 
 * the operation would not be done.
 * @link http://php.net/manual/en/dom.constants.php
 */
define ('DOM_VALIDATION_ERR', 16);

// End of dom v.20031129
?>
