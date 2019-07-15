<?php

// Start of xsl v.0.1

/**
*<div id="class.xsltprocessor" class="reference">  <h1 class="title">The XSLTProcessor class</h1>      <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>      <div class="section" id="xsltprocessor.intro">    <h2 class="title">简介</h2>     <p class="para">         </p>   </div>      <div class="section" id="xsltprocessor.synopsis">    <h2 class="title">类摘要</h2>       <div class="classsynopsis">     <div class="ooclass"></div>        <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">XSLTProcessor</strong>      </span>      {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="type">string</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.getparameter.php" class="methodname">getParameter</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$namespaceURI</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$localName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.getsecurityprefs.php" class="methodname">getSecurityPrefs</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.hasexsltsupport.php" class="methodname">hasExsltSupport</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span>    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.importstylesheet.php" class="methodname">importStylesheet</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$stylesheet</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">void</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.registerphpfunctions.php" class="methodname">registerPHPFunctions</a></span>     ([ <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$restrict</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.removeparameter.php" class="methodname">removeParameter</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$namespaceURI</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$localName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.setparameter.php" class="methodname">setParameter</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$namespace</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.setprofiling.php" class="methodname">setProfiling</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$filename</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span>  <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.setsecurityprefs.php" class="methodname">setSecurityPrefs</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$securityPrefs</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">DOMDocument</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.transformtodoc.php" class="methodname">transformToDoc</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$doc</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">int</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.transformtouri.php" class="methodname">transformToURI</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.domdocument.php" class="type DOMDocument">DOMDocument</a></span> <code class="parameter">$doc</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$uri</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="type">string</span>     <span class="methodname"><a href="http://php.net/manual/zh/xsltprocessor.transformtoxml.php" class="methodname">transformToXml</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$doc</code></span>    )</div>     }</div>      </div>    </div>                                                                                         <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link XSLTProcessor::__construct} — Creates a new XSLTProcessor object</li><li>{@link XSLTProcessor::getParameter} — Get value of a parameter</li><li>{@link XSLTProcessor::getSecurityPrefs} — Get security preferences</li><li>{@link XSLTProcessor::hasExsltSupport} — Determine if PHP has EXSLT support</li><li>{@link XSLTProcessor::importStylesheet} — Import stylesheet</li><li>{@link XSLTProcessor::registerPHPFunctions} — Enables the ability to use PHP functions as XSLT functions</li><li>{@link XSLTProcessor::removeParameter} — Remove parameter</li><li>{@link XSLTProcessor::setParameter} — Set value for a parameter</li><li>{@link XSLTProcessor::setProfiling} — Sets profiling output file</li><li>{@link XSLTProcessor::setSecurityPrefs} — Set security preferences</li><li>{@link XSLTProcessor::transformToDoc} — Transform to a DOMDocument</li><li>{@link XSLTProcessor::transformToUri} — Transform to URI</li><li>{@link XSLTProcessor::transformToXml} — Transform to XML</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.xsl.php">XSL</a></div></div>
*/
class XSLTProcessor  {

	/**
	 * Import stylesheet
	 * @link http://php.net/manual/en/xsltprocessor.importstylesheet.php
	 * @param object $stylesheet <p>
	 * The imported style sheet as a <b>DOMDocument</b> or
	 * <b>SimpleXMLElement</b> object.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function importStylesheet ($stylesheet) {}

	/**
	 * Transform to a DOMDocument
	 * @link http://php.net/manual/en/xsltprocessor.transformtodoc.php
	 * @param DOMNode $doc <p>
	 * The node to be transformed.
	 * </p>
	 * @return DOMDocument The resulting <b>DOMDocument</b> or <b>FALSE</b> on error.
	 * @since 5.0
	 */
	public function transformToDoc (DOMNode $doc) {}

	/**
	 * Transform to URI
	 * @link http://php.net/manual/en/xsltprocessor.transformtouri.php
	 * @param DOMDocument|SimpleXMLElement $doc <p>
	 * The document to transform.
	 * </p>
	 * @param string $uri <p>
	 * The target URI for the transformation.
	 * </p>
	 * @return int the number of bytes written or <b>FALSE</b> if an error occurred.
	 * @since 5.0
	 */
	public function transformToUri ($doc, $uri) {}

	/**
	 * Transform to XML
	 * @link http://php.net/manual/en/xsltprocessor.transformtoxml.php
	 * @param DOMDocument|SimpleXMLElement $doc <p>
	 * The transformed document.
	 * </p>
	 * @return string The result of the transformation as a string or <b>FALSE</b> on error.
	 * @since 5.0
	 */
	public function transformToXml ($doc) {}

	/**
	 * Set value for a parameter
	 * @link http://php.net/manual/en/xsltprocessor.setparameter.php
	 * @param string $namespace <p>
	 * The namespace URI of the XSLT parameter.
	 * </p>
	 * @param string $name <p>
	 * The local name of the XSLT parameter.
	 * </p>
	 * @param string $value <p>
	 * The new value of the XSLT parameter.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function setParameter ($namespace, $name, $value) {}

	/**
	 * Get value of a parameter
	 * @link http://php.net/manual/en/xsltprocessor.getparameter.php
	 * @param string $namespaceURI <p>
	 * The namespace URI of the XSLT parameter.
	 * </p>
	 * @param string $localName <p>
	 * The local name of the XSLT parameter.
	 * </p>
	 * @return string The value of the parameter (as a string), or <b>FALSE</b> if it's not set.
	 * @since 5.0
	 */
	public function getParameter ($namespaceURI, $localName) {}

	/**
	 * Remove parameter
	 * @link http://php.net/manual/en/xsltprocessor.removeparameter.php
	 * @param string $namespaceURI <p>
	 * The namespace URI of the XSLT parameter.
	 * </p>
	 * @param string $localName <p>
	 * The local name of the XSLT parameter.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0
	 */
	public function removeParameter ($namespaceURI, $localName) {}

	/**
	 * Determine if PHP has EXSLT support
	 * @link http://php.net/manual/en/xsltprocessor.hasexsltsupport.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0.4
	 */
	public function hasExsltSupport () {}

	/**
	 * Enables the ability to use PHP functions as XSLT functions
	 * @link http://php.net/manual/en/xsltprocessor.registerphpfunctions.php
	 * @param mixed $restrict [optional] <p>
	 * Use this parameter to only allow certain functions to be called from
	 * XSLT.
	 * </p>
	 * <p>
	 * This parameter can be either a string (a function name) or an array of
	 * functions.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0.4
	 */
	public function registerPHPFunctions ($restrict = null) {}

	/**
	 * Sets profiling output file
	 * @link http://php.net/manual/en/xsltprocessor.setprofiling.php
	 * @param string $filename <p>
	 * Path to the file to dump profiling information.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.3.0
	 */
	public function setProfiling ($filename) {}

	/**
	 * Set security preferences
	 * @link http://php.net/manual/en/xsltprocessor.setsecurityprefs.php
	 * @param int $securityPrefs
	 * @return int
	 * @since 5.4.0
	 */
	public function setSecurityPrefs ($securityPrefs) {}

	/**
	 * Get security preferences
	 * @link http://php.net/manual/en/xsltprocessor.getsecurityprefs.php
	 * @return int
	 * @since 5.4.0
	 */
	public function getSecurityPrefs () {}

}
define ('XSL_CLONE_AUTO', 0);
define ('XSL_CLONE_NEVER', -1);
define ('XSL_CLONE_ALWAYS', 1);

/**
*Deactivate all security restrictions.     
*/
define ('XSL_SECPREF_NONE', 0);
/**
*      Disallows reading files.     
*/
define ('XSL_SECPREF_READ_FILE', 2);
/**
*      Disallows writing files.     
*/
define ('XSL_SECPREF_WRITE_FILE', 4);
/**
*      Disallows creating directories.     
*/
define ('XSL_SECPREF_CREATE_DIRECTORY', 8);
/**
*      Disallows reading network files.     
*/
define ('XSL_SECPREF_READ_NETWORK', 16);
/**
*      Disallows writing network files.     
*/
define ('XSL_SECPREF_WRITE_NETWORK', 32);
/**
*      Disallows all write access, i.e. a bitmask of      <strong><code>XSL_SECPREF_WRITE_NETWORK</code></strong> |      <strong><code>XSL_SECPREF_CREATE_DIRECTORY</code></strong> |      <strong><code>XSL_SECPREF_WRITE_FILE</code></strong>.     
*/
define ('XSL_SECPREF_DEFAULT', 44);

/**
*      libxslt version like 10117. Available as of PHP 5.1.2.     
*/
define ('LIBXSLT_VERSION', 10128);

/**
*      libxslt version like 1.1.17. Available as of PHP 5.1.2.     
*/
define ('LIBXSLT_DOTTED_VERSION', "1.1.28");

/**
*      libexslt version like 813. Available as of PHP 5.1.2.     
*/
define ('LIBEXSLT_VERSION', 817);

/**
*      libexslt version like 1.1.17. Available as of PHP 5.1.2.     
*/
define ('LIBEXSLT_DOTTED_VERSION', "1.1.28");

// End of xsl v.0.1
?>
