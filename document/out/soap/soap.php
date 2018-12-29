<?php

// Start of soap v.

/**
*<div id="class.soapclient" class="reference">   <h1 class="title">The <a href="http://php.net/manual/zh/class.soapclient.php" class="classname">SoapClient</a> class</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="soapclient.intro">    <h2 class="title">简介</h2>    <p class="para">     The SoapClient class provides a client for <a href="http://www.w3.org/TR/soap11/" class="link external">&raquo;&nbsp;SOAP 1.1</a>, <a href="http://www.w3.org/TR/soap12/" class="link external">&raquo;&nbsp;SOAP 1.2</a> servers. It can be used in WSDL   or non-WSDL mode.    </p>   </div>     <div class="section" id="soapclient.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SoapClient</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.call.php" class="methodname">__call</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$function_name</code></span>    , <span class="methodparam"><span class="type">array</span> <code class="parameter">$arguments</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$wsdl</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.dorequest.php" class="methodname">__doRequest</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$request</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$location</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$version</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$one_way</code><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.getcookies.php" class="methodname">__getCookies</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.getfunctions.php" class="methodname">__getFunctions</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.getlastrequest.php" class="methodname">__getLastRequest</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.getlastrequestheaders.php" class="methodname">__getLastRequestHeaders</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.getlastresponse.php" class="methodname">__getLastResponse</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.getlastresponseheaders.php" class="methodname">__getLastResponseHeaders</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.gettypes.php" class="methodname">__getTypes</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.setcookie.php" class="methodname">__setCookie</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.setlocation.php" class="methodname">__setLocation</a></span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$new_location</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.setsoapheaders.php" class="methodname">__setSoapHeaders</a></span>     ([ <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$soapheaders</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.soapcall.php" class="methodname">__soapCall</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$function_name</code></span>    , <span class="methodparam"><span class="type">array</span> <code class="parameter">$arguments</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$input_headers</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$output_headers</code></span>   ]]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/soapclient.soapclient.php" class="methodname">SoapClient</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$wsdl</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>   ] )</div>     }</div>     </div>   </div>                                                                                                              <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SoapClient::__call} — Calls a SOAP function (deprecated)</li><li>{@link SoapClient::__construct} — SoapClient constructor</li><li>{@link SoapClient::__doRequest} — Performs a SOAP request</li><li>{@link SoapClient::__getCookies} — Get list of cookies</li><li>{@link SoapClient::__getFunctions} — Returns list of available SOAP functions</li><li>{@link SoapClient::__getLastRequest} — Returns last SOAP request</li><li>{@link SoapClient::__getLastRequestHeaders} — Returns the SOAP headers from the last request</li><li>{@link SoapClient::__getLastResponse} — Returns last SOAP response</li><li>{@link SoapClient::__getLastResponseHeaders} — Returns the SOAP headers from the last response</li><li>{@link SoapClient::__getTypes} — Returns a list of SOAP types</li><li>{@link SoapClient::__setCookie} — The __setCookie purpose</li><li>{@link SoapClient::__setLocation} — Sets the location of the Web service to use</li><li>{@link SoapClient::__setSoapHeaders} — Sets SOAP headers for subsequent calls</li><li>{@link SoapClient::__soapCall} — Calls a SOAP function</li><li>{@link SoapClient::SoapClient} — SoapClient constructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.soap.php">SOAP</a></div></div>
*/
class SoapClient  {

	/**
	 * SoapClient constructor
	 * @link http://php.net/manual/en/soapclient.soapclient.php
	 * @param mixed $wsdl <p>
	 * URI of the WSDL file or <b>NULL</b> if working in
	 * non-WSDL mode.
	 * </p>
	 * <p>
	 * During development, WSDL caching may be disabled by the
	 * use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
	 * otherwise changes made to the WSDL file will have no effect until
	 * soap.wsdl_cache_ttl is expired.
	 * </p>
	 * @param array $options [optional] <p>
	 * An array of options. If working in WSDL mode, this parameter is optional.
	 * If working in non-WSDL mode, the location and
	 * uri options must be set, where location
	 * is the URL of the SOAP server to send the request to, and uri
	 * is the target namespace of the SOAP service.
	 * </p>
	 * <p>
	 * The style and use options only work in
	 * non-WSDL mode. In WSDL mode, they come from the WSDL file.
	 * </p>
	 * <p>
	 * The soap_version option should be one of either
	 * <b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
	 * select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
	 * </p>
	 * <p>
	 * For HTTP authentication, the login and
	 * password options can be used to supply credentials.
	 * For making an HTTP connection through
	 * a proxy server, the options proxy_host,
	 * proxy_port, proxy_login
	 * and proxy_password are also available.
	 * For HTTPS client certificate authentication use
	 * local_cert and passphrase options. An
	 * authentication may be supplied in the authentication
	 * option. The authentication method may be either
	 * <b>SOAP_AUTHENTICATION_BASIC</b> (default) or
	 * <b>SOAP_AUTHENTICATION_DIGEST</b>.
	 * </p>
	 * <p>
	 * The compression option allows to use compression
	 * of HTTP SOAP requests and responses.
	 * </p>
	 * <p>
	 * The encoding option defines internal character
	 * encoding. This option does not change the encoding of SOAP requests (it is
	 * always utf-8), but converts strings into it.
	 * </p>
	 * <p>
	 * The trace option enables tracing of request so faults
	 * can be backtraced. This defaults to <b>FALSE</b>
	 * </p>
	 * <p>
	 * The classmap option can be used to map some WSDL
	 * types to PHP classes. This option must be an array with WSDL types
	 * as keys and names of PHP classes as values.
	 * </p>
	 * <p>
	 * Setting the boolean trace option enables use of the
	 * methods
	 * SoapClient->__getLastRequest,
	 * SoapClient->__getLastRequestHeaders,
	 * SoapClient->__getLastResponse and
	 * SoapClient->__getLastResponseHeaders.
	 * </p>
	 * <p>
	 * The exceptions option is a boolean value defining whether
	 * soap errors throw exceptions of type
	 * SoapFault.
	 * </p>
	 * <p>
	 * The connection_timeout option defines a timeout in seconds
	 * for the connection to the SOAP service. This option does not define a timeout
	 * for services with slow responses. To limit the time to wait for calls to finish the
	 * default_socket_timeout setting
	 * is available.
	 * </p>
	 * <p>
	 * The typemap option is an array of type mappings.
	 * Type mapping is an array with keys type_name,
	 * type_ns (namespace URI), from_xml
	 * (callback accepting one string parameter) and to_xml
	 * (callback accepting one object parameter).
	 * </p>
	 * <p>
	 * The cache_wsdl option is one of
	 * <b>WSDL_CACHE_NONE</b>,
	 * <b>WSDL_CACHE_DISK</b>,
	 * <b>WSDL_CACHE_MEMORY</b> or
	 * <b>WSDL_CACHE_BOTH</b>.
	 * </p>
	 * <p>
	 * The user_agent option specifies string to use in
	 * User-Agent header.
	 * </p>
	 * <p>
	 * The stream_context option is a resource
	 * for context.
	 * </p>
	 * <p>
	 * The features option is a bitmask of
	 * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
	 * <b>SOAP_USE_XSI_ARRAY_TYPE</b>,
	 * <b>SOAP_WAIT_ONE_WAY_CALLS</b>.
	 * </p>
	 * <p>
	 * The keep_alive option is a boolean value defining whether
	 * to send the Connection: Keep-Alive header or
	 * Connection: close.
	 * </p>
	 * <p>
	 * The ssl_method option is one of
	 * <b>SOAP_SSL_METHOD_TLS</b>,
	 * <b>SOAP_SSL_METHOD_SSLv2</b>,
	 * <b>SOAP_SSL_METHOD_SSLv3</b> or
	 * <b>SOAP_SSL_METHOD_SSLv23</b>.
	 * </p>
	 * @since 5.0.1
	 */
	public function SoapClient ($wsdl, array $options = null) {}

    /**
     * SoapClient constructor
     * @link http://php.net/manual/en/soapclient.soapclient.php
     * @param mixed $wsdl <p>
     * URI of the WSDL file or <b>NULL</b> if working in
     * non-WSDL mode.
     * </p>
     * <p>
     * During development, WSDL caching may be disabled by the
     * use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
     * otherwise changes made to the WSDL file will have no effect until
     * soap.wsdl_cache_ttl is expired.
     * </p>
     * @param array $options [optional] <p>
     * An array of options. If working in WSDL mode, this parameter is optional.
     * If working in non-WSDL mode, the location and
     * uri options must be set, where location
     * is the URL of the SOAP server to send the request to, and uri
     * is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The style and use options only work in
     * non-WSDL mode. In WSDL mode, they come from the WSDL file.
     * </p>
     * <p>
     * The soap_version option should be one of either
     * <b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
     * select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
     * </p>
     * <p>
     * For HTTP authentication, the login and
     * password options can be used to supply credentials.
     * For making an HTTP connection through
     * a proxy server, the options proxy_host,
     * proxy_port, proxy_login
     * and proxy_password are also available.
     * For HTTPS client certificate authentication use
     * local_cert and passphrase options. An
     * authentication may be supplied in the authentication
     * option. The authentication method may be either
     * <b>SOAP_AUTHENTICATION_BASIC</b> (default) or
     * <b>SOAP_AUTHENTICATION_DIGEST</b>.
     * </p>
     * <p>
     * The compression option allows to use compression
     * of HTTP SOAP requests and responses.
     * </p>
     * <p>
     * The encoding option defines internal character
     * encoding. This option does not change the encoding of SOAP requests (it is
     * always utf-8), but converts strings into it.
     * </p>
     * <p>
     * The trace option enables tracing of request so faults
     * can be backtraced. This defaults to <b>FALSE</b>
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * Setting the boolean trace option enables use of the
     * methods
     * SoapClient->__getLastRequest,
     * SoapClient->__getLastRequestHeaders,
     * SoapClient->__getLastResponse and
     * SoapClient->__getLastResponseHeaders.
     * </p>
     * <p>
     * The exceptions option is a boolean value defining whether
     * soap errors throw exceptions of type
     * SoapFault.
     * </p>
     * <p>
     * The connection_timeout option defines a timeout in seconds
     * for the connection to the SOAP service. This option does not define a timeout
     * for services with slow responses. To limit the time to wait for calls to finish the
     * default_socket_timeout setting
     * is available.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * The user_agent option specifies string to use in
     * User-Agent header.
     * </p>
     * <p>
     * The stream_context option is a resource
     * for context.
     * </p>
     * <p>
     * The features option is a bitmask of
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>,
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>.
     * </p>
     * <p>
     * The keep_alive option is a boolean value defining whether
     * to send the Connection: Keep-Alive header or
     * Connection: close.
     * </p>
     * <p>
     * The ssl_method option is one of
     * <b>SOAP_SSL_METHOD_TLS</b>,
     * <b>SOAP_SSL_METHOD_SSLv2</b>,
     * <b>SOAP_SSL_METHOD_SSLv3</b> or
     * <b>SOAP_SSL_METHOD_SSLv23</b>.
     * </p>
     * @since 5.0.1
     */
    public function __construct ($wsdl, array $options = null) {}

	/**
	 * Calls a SOAP function (deprecated)
	 * @link http://php.net/manual/en/soapclient.call.php
	 * @param string $function_name
	 * @param string $arguments
	 * @return mixed
	 * @since 5.0.1
	 */
	public function __call ($function_name, $arguments) {}

	/**
	 * Calls a SOAP function
	 * @link http://php.net/manual/en/soapclient.soapcall.php
	 * @param string $function_name <p>
	 * The name of the SOAP function to call.
	 * </p>
	 * @param array $arguments <p>
	 * An array of the arguments to pass to the function. This can be either
	 * an ordered or an associative array. Note that most SOAP servers require
	 * parameter names to be provided, in which case this must be an
	 * associative array.
	 * </p>
	 * @param array $options [optional] <p>
	 * An associative array of options to pass to the client.
	 * </p>
	 * <p>
	 * The location option is the URL of the remote Web service.
	 * </p>
	 * <p>
	 * The uri option is the target namespace of the SOAP service.
	 * </p>
	 * <p>
	 * The soapaction option is the action to call.
	 * </p>
	 * @param mixed $input_headers [optional] <p>
	 * An array of headers to be sent along with the SOAP request.
	 * </p>
	 * @param array $output_headers [optional] <p>
	 * If supplied, this array will be filled with the headers from the SOAP response.
	 * </p>
	 * @return mixed SOAP functions may return one, or multiple values. If only one value is returned
	 * by the SOAP function, the return value of __soapCall will be
	 * a simple value (e.g. an integer, a string, etc). If multiple values are
	 * returned, __soapCall will return
	 * an associative array of named output parameters.
	 * </p>
	 * <p>
	 * On error, if the SoapClient object was constructed with the exceptions
	 * option set to <b>FALSE</b>, a SoapFault object will be returned.
	 * @since 5.0.1
	 */
	public function __soapCall ($function_name, array $arguments, array $options = null, $input_headers = null, array &$output_headers = null) {}

	/**
	 * Returns last SOAP request
	 * @link http://php.net/manual/en/soapclient.getlastrequest.php
	 * @return string The last SOAP request, as an XML string.
	 * @since 5.0.1
	 */
	public function __getLastRequest () {}

	/**
	 * Returns last SOAP response
	 * @link http://php.net/manual/en/soapclient.getlastresponse.php
	 * @return string The last SOAP response, as an XML string.
	 * @since 5.0.1
	 */
	public function __getLastResponse () {}

	/**
	 * Returns the SOAP headers from the last request
	 * @link http://php.net/manual/en/soapclient.getlastrequestheaders.php
	 * @return string The last SOAP request headers.
	 * @since 5.0.1
	 */
	public function __getLastRequestHeaders () {}

	/**
	 * Returns the SOAP headers from the last response
	 * @link http://php.net/manual/en/soapclient.getlastresponseheaders.php
	 * @return string The last SOAP response headers.
	 * @since 5.0.1
	 */
	public function __getLastResponseHeaders () {}

	/**
	 * Returns list of available SOAP functions
	 * @link http://php.net/manual/en/soapclient.getfunctions.php
	 * @return array The array of SOAP function prototypes, detailing the return type,
	 * the function name and type-hinted paramaters.
	 * @since 5.0.1
	 */
	public function __getFunctions () {}

	/**
	 * Returns a list of SOAP types
	 * @link http://php.net/manual/en/soapclient.gettypes.php
	 * @return array The array of SOAP types, detailing all structures and types.
	 * @since 5.0.1
	 */
	public function __getTypes () {}

	/**
	 * Performs a SOAP request
	 * @link http://php.net/manual/en/soapclient.dorequest.php
	 * @param string $request <p>
	 * The XML SOAP request.
	 * </p>
	 * @param string $location <p>
	 * The URL to request.
	 * </p>
	 * @param string $action <p>
	 * The SOAP action.
	 * </p>
	 * @param int $version <p>
	 * The SOAP version.
	 * </p>
	 * @param int $one_way [optional] <p>
	 * If one_way is set to 1, this method returns nothing.
	 * Use this where a response is not expected.
	 * </p>
	 * @return string The XML SOAP response.
	 * @since 5.0.1
	 */
	public function __doRequest ($request, $location, $action, $version, $one_way = 0) {}

	/**
	 * The __setCookie purpose
	 * @link http://php.net/manual/en/soapclient.setcookie.php
	 * @param string $name <p>
	 * The name of the cookie.
	 * </p>
	 * @param string $value [optional] <p>
	 * The value of the cookie. If not specified, the cookie will be deleted.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0.4
	 */
	public function __setCookie ($name, $value = null) {}

	/**
	 * Sets the location of the Web service to use
	 * @link http://php.net/manual/en/soapclient.setlocation.php
	 * @param string $new_location [optional] <p>
	 * The new endpoint URL.
	 * </p>
	 * @return string The old endpoint URL.
	 * @since 5.0.1
	 */
	public function __setLocation ($new_location = null) {}

	/**
	 * Sets SOAP headers for subsequent calls
	 * @link http://php.net/manual/en/soapclient.setsoapheaders.php
	 * @param mixed $soapheaders [optional] <p>
	 * The headers to be set. It could be <b>SoapHeader</b>
	 * object or array of <b>SoapHeader</b> objects.
	 * If not specified or set to <b>NULL</b>, the headers will be deleted.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @since 5.0.5
	 */
	public function __setSoapHeaders ($soapheaders = null) {}

}

/**
*<div id="class.soapvar" class="reference">   <h1 class="title">The SoapVar class</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="soapvar.intro">    <h2 class="title">简介</h2>    <p class="para">     A class representing a variable or object for use with SOAP services.    </p>   </div>     <div class="section" id="soapvar.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SoapVar</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapvar.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$type_name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$type_namespace</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$node_name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$node_namespace</code></span>   ]]]] )</div> <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapvar.soapvar.php" class="methodname">SoapVar</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$encoding</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$type_name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$type_namespace</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$node_name</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$node_namespace</code></span>   ]]]] )</div>     }</div>     </div>   </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SoapVar::__construct} — SoapVar constructor</li><li>{@link SoapVar::SoapVar} — SoapVar constructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.soap.php">SOAP</a></div></div>
*/
class SoapVar  {

	/**
	 * SoapVar constructor
	 * @link http://php.net/manual/en/soapvar.soapvar.php
	 * @param mixed $data <p>
	 * The data to pass or return.
	 * </p>
	 * @param string $encoding <p>
	 * The encoding ID, one of the XSD_... constants.
	 * </p>
	 * @param string $type_name [optional] <p>
	 * The type name.
	 * </p>
	 * @param string $type_namespace [optional] <p>
	 * The type namespace.
	 * </p>
	 * @param string $node_name [optional] <p>
	 * The XML node name.
	 * </p>
	 * @param string $node_namespace [optional] <p>
	 * The XML node namespace.
	 * </p>
	 * @since 5.0.1
	 */
	public function SoapVar ($data, $encoding, $type_name = null, $type_namespace = null, $node_name = null, $node_namespace = null) {}

}

/**
*<div id="class.soapserver" class="reference">   <h1 class="title">The SoapServer class</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="soapserver.intro">    <h2 class="title">简介</h2>    <p class="para">     The SoapServer class provides a server for the <a href="http://www.w3.org/TR/soap11/" class="link external">&raquo;&nbsp;SOAP 1.1</a> and <a href="http://www.w3.org/TR/soap12/" class="link external">&raquo;&nbsp;SOAP 1.2</a> protocols. It can be used with or without a WSDL service description.    </p>   </div>     <div class="section" id="soapserver.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SoapServer</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname">{@link addFunction}</span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$functions</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.addsoapheader.php" class="methodname">addSoapHeader</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.soapheader.php" class="type SoapHeader">SoapHeader</a></span> <code class="parameter">$object</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$wsdl</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.fault.php" class="methodname">fault</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$code</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$string</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$actor</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$details</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>   ]]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.getfunctions.php" class="methodname">getFunctions</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.handle.php" class="methodname">handle</a></span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$soap_request</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.setclass.php" class="methodname">setClass</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$class_name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.setobject.php" class="methodname">setObject</a></span>     ( <span class="methodparam"><span class="type">object</span> <code class="parameter">$object</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.setpersistence.php" class="methodname">setPersistence</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$mode</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/soapserver.soapserver.php" class="methodname">SoapServer</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$wsdl</code></span>    [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>   ] )</div>     }</div>     </div>   </div>                                                                             <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SoapServer::addFunction} — 添加一个或多个函数来处理SOAP请求</li><li>{@link SoapServer::addSoapHeader} — Add a SOAP header to the response</li><li>{@link SoapServer::__construct} — SoapServer constructor</li><li>{@link SoapServer::fault} — Issue SoapServer fault indicating an error</li><li>{@link SoapServer::getFunctions} — Returns list of defined functions</li><li>{@link SoapServer::handle} — Handles a SOAP request</li><li>{@link SoapServer::setClass} — Sets the class which handles SOAP requests</li><li>{@link SoapServer::setObject} — Sets the object which will be used to handle SOAP requests</li><li>{@link SoapServer::setPersistence} — Sets SoapServer persistence mode</li><li>{@link SoapServer::SoapServer} — SoapServer constructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.soap.php">SOAP</a></div></div>
*/
class SoapServer  {

	/**
	 * SoapServer constructor
	 * @link http://php.net/manual/en/soapserver.soapserver.php
	 * @param mixed $wsdl <p>
	 * To use the SoapServer in WSDL mode, pass the URI of a WSDL file.
	 * Otherwise, pass <b>NULL</b> and set the uri option to the
	 * target namespace for the server.
	 * </p>
	 * @param array $options [optional] <p>
	 * Allow setting a default SOAP version (soap_version),
	 * internal character encoding (encoding),
	 * and actor URI (actor).
	 * </p>
	 * <p>
	 * The classmap option can be used to map some WSDL
	 * types to PHP classes. This option must be an array with WSDL types
	 * as keys and names of PHP classes as values.
	 * </p>
	 * <p>
	 * The typemap option is an array of type mappings.
	 * Type mapping is an array with keys type_name,
	 * type_ns (namespace URI), from_xml
	 * (callback accepting one string parameter) and to_xml
	 * (callback accepting one object parameter).
	 * </p>
	 * <p>
	 * The cache_wsdl option is one of
	 * <b>WSDL_CACHE_NONE</b>,
	 * <b>WSDL_CACHE_DISK</b>,
	 * <b>WSDL_CACHE_MEMORY</b> or
	 * <b>WSDL_CACHE_BOTH</b>.
	 * </p>
	 * <p>
	 * There is also a features option which can be set to
	 * <b>SOAP_WAIT_ONE_WAY_CALLS</b>,
	 * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
	 * <b>SOAP_USE_XSI_ARRAY_TYPE</b>.
	 * </p>
	 * @since 5.0.1
	 */
	public function SoapServer ($wsdl, array $options = null) {}

	/**
	 * Sets SoapServer persistence mode
	 * @link http://php.net/manual/en/soapserver.setpersistence.php
	 * @param int $mode <p>
	 * One of the SOAP_PERSISTENCE_XXX constants.
	 * </p>
	 * <p>
	 * <b>SOAP_PERSISTENCE_REQUEST</b> - SoapServer data does not persist between
	 * requests. This is the default behavior of any SoapServer
	 * object after setClass is called.
	 * </p>
	 * <p>
	 * <b>SOAP_PERSISTENCE_SESSION</b> - SoapServer data persists between requests.
	 * This is accomplished by serializing the SoapServer class data into
	 * $_SESSION['_bogus_session_name'], because of this
	 * <b>session_start</b> must be called before this persistence mode is set.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.1.2
	 */
	public function setPersistence ($mode) {}

	/**
	 * Sets the class which handles SOAP requests
	 * @link http://php.net/manual/en/soapserver.setclass.php
	 * @param string $class_name <p>
	 * The name of the exported class.
	 * </p>
	 * @param mixed $args [optional] <p>
	 * These optional parameters will be passed to the default class constructor
	 * during object creation.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return void No value is returned.
	 * @since 5.0.1
	 */
	public function setClass ($class_name, $args = null, $_ = null) {}

	/**
	 * Sets the object which will be used to handle SOAP requests
	 * @link http://php.net/manual/en/soapserver.setobject.php
	 * @param object $object <p>
	 * The object to handle the requests.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.2.0
	 */
	public function setObject ($object) {}

	/**
	 * Adds one or more functions to handle SOAP requests
	 * @link http://php.net/manual/en/soapserver.addfunction.php
	 * @param mixed $functions <p>
	 * To export one function, pass the function name into this parameter as
	 * a string.
	 * </p>
	 * <p>
	 * To export several functions, pass an array of function names.
	 * </p>
	 * <p>
	 * To export all the functions, pass a special constant <b>SOAP_FUNCTIONS_ALL</b>.
	 * </p>
	 * <p>
	 * <i>functions</i> must receive all input arguments in the same
	 * order as defined in the WSDL file (They should not receive any output parameters
	 * as arguments) and return one or more values. To return several values they must
	 * return an array with named output parameters.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0.1
	 */
	public function addFunction ($functions) {}

	/**
	 * Returns list of defined functions
	 * @link http://php.net/manual/en/soapserver.getfunctions.php
	 * @return array An array of the defined functions.
	 * @since 5.0.1
	 */
	public function getFunctions () {}

	/**
	 * Handles a SOAP request
	 * @link http://php.net/manual/en/soapserver.handle.php
	 * @param string $soap_request [optional] <p>
	 * The SOAP request. If this argument is omitted, the request is assumed to be
	 * in the raw POST data of the HTTP request.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0.1
	 */
	public function handle ($soap_request = null) {}

	/**
	 * Issue SoapServer fault indicating an error
	 * @link http://php.net/manual/en/soapserver.fault.php
	 * @param string $code <p>
	 * The error code to return
	 * </p>
	 * @param string $string <p>
	 * A brief description of the error
	 * </p>
	 * @param string $actor [optional] <p>
	 * A string identifying the actor that caused the fault.
	 * </p>
	 * @param string $details [optional] <p>
	 * More details of the fault
	 * </p>
	 * @param string $name [optional] <p>
	 * The name of the fault. This can be used to select a name from a WSDL file.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0.1
	 */
	public function fault ($code, $string, $actor = null, $details = null, $name = null) {}

	/**
	 * Add a SOAP header to the response
	 * @link http://php.net/manual/en/soapserver.addsoapheader.php
	 * @param SoapHeader $object <p>
	 * The header to be returned.
	 * </p>
	 * @return void No value is returned.
	 * @since 5.0.1
	 */
	public function addSoapHeader (SoapHeader $object) {}

}

/**
*<div id="class.soapfault" class="reference">   <h1 class="title">The SoapFault class</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="soapfault.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a SOAP fault.    </p>   </div>     <div class="section" id="soapfault.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SoapFault</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapfault.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultcode</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultstring</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultactor</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$detail</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultname</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$headerfault</code></span>   ]]]] )</div> <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapfault.soapfault.php" class="methodname">SoapFault</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultcode</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultstring</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultactor</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$detail</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$faultname</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$headerfault</code></span>   ]]]] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/soapfault.tostring.php" class="methodname">__toString</a></span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>      </div>                          <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SoapFault::__construct} — SoapFault constructor</li><li>{@link SoapFault::SoapFault} — SoapFault constructor</li><li>{@link SoapFault::__toString} — Obtain a string representation of a SoapFault</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.soap.php">SOAP</a></div></div>
*/
class SoapFault extends Exception  {
    /**
     * @var string
     */
	public $faultcode;
    /**
     * @var string
     */
	public $faultstring;
    /**
     * @var string
     */
    public $faultactor;
    /**
     * @var mixed
     */
    public $detail;
    /**
     * @var string
     */
    public $faultname;
    /**
     * @var mixed
     */
    public $headerfault;

	/**
	 * SoapFault constructor
	 * @link http://php.net/manual/en/soapfault.soapfault.php
	 * @param string $faultcode <p>
	 * The error code of the <b>SoapFault</b>.
	 * </p>
	 * @param string $faultstring <p>
	 * The error message of the <b>SoapFault</b>.
	 * </p>
	 * @param string $faultactor [optional] <p>
	 * A string identifying the actor that caused the error.
	 * </p>
	 * @param mixed $detail [optional] <p>
	 * More details about the cause of the error.
	 * </p>
	 * @param string $faultname [optional] <p>
	 * Can be used to select the proper fault encoding from WSDL.
	 * </p>
	 * @param mixed $headerfault [optional] <p>
	 * Can be used during SOAP header handling to report an error in the
	 * response header.
	 * </p>
	 * @since 5.0.1
	 */
	public function SoapFault ($faultcode, $faultstring, $faultactor = null, $detail = null, $faultname = null, $headerfault = null) {}

	/**
	 * Obtain a string representation of a SoapFault
	 * @link http://php.net/manual/en/soapfault.tostring.php
	 * @return string A string describing the SoapFault.
	 * @since 5.0.1
	 */
	public function __toString () {}


}

/**
*<div id="class.soapparam" class="reference">   <h1 class="title">The SoapParam class</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="soapparam.intro">    <h2 class="title">简介</h2>    <p class="para">      Represents parameter to a SOAP call.    </p>   </div>     <div class="section" id="soapparam.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SoapParam</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapparam.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapparam.soapparam.php" class="methodname">SoapParam</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    )</div>     }</div>     </div>   </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SoapParam::__construct} — SoapParam constructor</li><li>{@link SoapParam::SoapParam} — SoapParam constructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.soap.php">SOAP</a></div></div>
*/
class SoapParam  {

	/**
	 * SoapParam constructor
	 * @link http://php.net/manual/en/soapparam.soapparam.php
	 * @param mixed $data <p>
	 * The data to pass or return. This parameter can be passed directly as PHP
	 * value, but in this case it will be named as paramN and
	 * the SOAP service may not understand it.
	 * </p>
	 * @param string $name <p>
	 * The parameter name.
	 * </p>
	 * @since 5.0.1
	 */
	public function SoapParam ($data, $name) {}

}

/**
*<div id="class.soapheader" class="reference">   <h1 class="title">The SoapHeader class</h1>     <div class="partintro"><p class="verinfo">(PHP 5, PHP 7)</p>     <div class="section" id="soapheader.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a SOAP header.    </p>   </div>     <div class="section" id="soapheader.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SoapHeader</strong>      </span>      {</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapheader.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$namespace</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$mustunderstand</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$actor</code></span>   ]]] )</div> <div class="methodsynopsis dc-description">    <span class="methodname"><a href="http://php.net/manual/zh/soapheader.soapheader.php" class="methodname">SoapHeader</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$namespace</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>    [, <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$mustunderstand</code><span class="initializer"> = <strong><code>FALSE</code></strong></span></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$actor</code></span>   ]]] )</div>     }</div>     </div>   </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SoapHeader::__construct} — SoapHeader constructor</li><li>{@link SoapHeader::SoapHeader} — SoapHeader constructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.soap.php">SOAP</a></div></div>
*/
class SoapHeader  {

	/**
	 * SoapHeader constructor
	 * @link http://php.net/manual/en/soapheader.soapheader.php
	 * @param string $namespace <p>
	 * The namespace of the SOAP header element.
	 * </p>
	 * @param string $name <p>
	 * The name of the SoapHeader object.
	 * </p>
	 * @param mixed $data [optional] <p>
	 * A SOAP header's content. It can be a PHP value or a
	 * <b>SoapVar</b> object.
	 * </p>
	 * @param bool $mustunderstand [optional]
	 * @param string $actor [optional] <p>
	 * Value of the actor attribute of the SOAP header
	 * element.
	 * </p>
	 * @since 5.0.1
	 */
	public function SoapHeader ($namespace, $name, $data = null, $mustunderstand = false, $actor = null) {}

}

/**
*<div id="function.use-soap-error-handler" class="refentry">  <div class="refnamediv">   <h1 class="refname">use_soap_error_handler</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">use_soap_error_handler</span> &mdash; <span class="dc-title">Set whether to use the SOAP error handler</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.use-soap-error-handler-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>use_soap_error_handler</strong></span>     ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$handler</code><span class="initializer"> = <strong><code>TRUE</code></strong></span></span>   ] )</div>    <p class="para rdfs-comment">    This function sets whether or not to use the SOAP error handler in the SOAP server.     It will return the previous value. If set to <strong><code>TRUE</code></strong>, details of errors    in a <a href="http://php.net/manual/zh/class.soapserver.php" class="classname">SoapServer</a> application will be sent to the client    as a SOAP fault message.    If <strong><code>FALSE</code></strong>, the standard PHP error handler is used.    The default is to send error to the client as SOAP fault message.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.use-soap-error-handler-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">handler</code></dt>       <dd>        <p class="para">        Set to <strong><code>TRUE</code></strong> to send error details to clients.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.use-soap-error-handler-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the original value.   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.use-soap-error-handler-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link set_error_handler()} - 设置用户自定义的错误处理函数</span></li>     <li class="member"><span class="function">{@link set_exception_handler()} - 设置用户自定义的异常处理函数</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.soap.php">SOAP 函数</a></div></div>
 * @return bool the original value.*/
function use_soap_error_handler ($handler = true) {}

/**
*<div id="function.is-soap-fault" class="refentry">  <div class="refnamediv">   <h1 class="refname">is_soap_fault</h1>   <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">is_soap_fault</span> &mdash; <span class="dc-title">Checks if a SOAP call has failed</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.is-soap-fault-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>is_soap_fault</strong></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$object</code></span>    )</div>    <p class="para rdfs-comment">    This function is useful to check if the SOAP call failed, but    without using exceptions. To use it, create a     <a href="http://php.net/manual/zh/class.soapclient.php" class="classname">SoapClient</a> object with the <em>exceptions</em>    option set to zero or <strong><code>FALSE</code></strong>.    In this case, the SOAP method will return a special     <a href="http://php.net/manual/zh/class.soapfault.php" class="classname">SoapFault</a> object which encapsulates the fault     details (faultcode, faultstring, faultactor and faultdetails).   </p>   <p class="para">    If <em>exceptions</em> is not set then SOAP call will throw    an exception on error.    <span class="function"><strong>is_soap_fault()</strong></span> checks if the given    parameter is a <a href="http://php.net/manual/zh/class.soapfault.php" class="classname">SoapFault</a> object.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.is-soap-fault-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">object</code></dt>       <dd>        <p class="para">        The object to test.       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.is-soap-fault-returnvalues">   <h3 class="title">返回值</h3>      <p class="para">    This will return <strong><code>TRUE</code></strong> on error, and <strong><code>FALSE</code></strong> otherwise.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.is-soap-fault-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6397">     <p><strong>Example #1 <span class="function"><strong>is_soap_fault()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$client&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'exceptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$client</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">SomeFunction</span><span style="color: #007700">();<br />if&nbsp;(</span><span style="color: #9876AA">is_soap_fault</span><span style="color: #007700">(</span><span style="color: #9876AA">$result</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"SOAP&nbsp;Fault:&nbsp;(faultcode:&nbsp;</span><span style="color: #007700">{</span><span style="color: #9876AA">$result</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultcode</span><span style="color: #007700">}</span><span style="color: #DD0000">,&nbsp;faultstring:&nbsp;</span><span style="color: #007700">{</span><span style="color: #9876AA">$result</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultstring</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>    <div class="example" id="example-6398">     <p><strong>Example #2 SOAP&#039;s standard method for error reporting is exceptions</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$client&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$client</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">SomeFunction</span><span style="color: #007700">(</span><span style="color: #FF8000">//&nbsp;...&nbsp;</span><span style="color: #007700">);<br />}&nbsp;catch&nbsp;(</span><span style="color: #9876AA">SoapFault&nbsp;$fault</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"SOAP&nbsp;Fault:&nbsp;(faultcode:&nbsp;</span><span style="color: #007700">{</span><span style="color: #9876AA">$fault</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultcode</span><span style="color: #007700">}</span><span style="color: #DD0000">,&nbsp;faultstring:&nbsp;</span><span style="color: #007700">{</span><span style="color: #9876AA">$fault</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultstring</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.is-soap-fault-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="methodname">{@link SoapClient::SoapClient()} - SoapClient constructor</span></li>     <li class="member"><span class="methodname">{@link SoapFault::SoapFault()} - SoapFault constructor</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.soap.php">SOAP 函数</a></div></div>
 * @return bool This will return <b>TRUE</b> on error, and <b>FALSE</b> otherwise.*/
function is_soap_fault ($object) {}

define ('SOAP_1_1', 1);
define ('SOAP_1_2', 2);
define ('SOAP_PERSISTENCE_SESSION', 1);
define ('SOAP_PERSISTENCE_REQUEST', 2);
define ('SOAP_FUNCTIONS_ALL', 999);
define ('SOAP_ENCODED', 1);
define ('SOAP_LITERAL', 2);
define ('SOAP_RPC', 1);
define ('SOAP_DOCUMENT', 2);
define ('SOAP_ACTOR_NEXT', 1);
define ('SOAP_ACTOR_NONE', 2);
define ('SOAP_ACTOR_UNLIMATERECEIVER', 3);
define ('SOAP_COMPRESSION_ACCEPT', 32);
define ('SOAP_COMPRESSION_GZIP', 0);
define ('SOAP_COMPRESSION_DEFLATE', 16);
define ('SOAP_AUTHENTICATION_BASIC', 0);
define ('SOAP_AUTHENTICATION_DIGEST', 1);
define ('UNKNOWN_TYPE', 999998);
define ('XSD_STRING', 101);
define ('XSD_BOOLEAN', 102);
define ('XSD_DECIMAL', 103);
define ('XSD_FLOAT', 104);
define ('XSD_DOUBLE', 105);
define ('XSD_DURATION', 106);
define ('XSD_DATETIME', 107);
define ('XSD_TIME', 108);
define ('XSD_DATE', 109);
define ('XSD_GYEARMONTH', 110);
define ('XSD_GYEAR', 111);
define ('XSD_GMONTHDAY', 112);
define ('XSD_GDAY', 113);
define ('XSD_GMONTH', 114);
define ('XSD_HEXBINARY', 115);
define ('XSD_BASE64BINARY', 116);
define ('XSD_ANYURI', 117);
define ('XSD_QNAME', 118);
define ('XSD_NOTATION', 119);
define ('XSD_NORMALIZEDSTRING', 120);
define ('XSD_TOKEN', 121);
define ('XSD_LANGUAGE', 122);
define ('XSD_NMTOKEN', 123);
define ('XSD_NAME', 124);
define ('XSD_NCNAME', 125);
define ('XSD_ID', 126);
define ('XSD_IDREF', 127);
define ('XSD_IDREFS', 128);
define ('XSD_ENTITY', 129);
define ('XSD_ENTITIES', 130);
define ('XSD_INTEGER', 131);
define ('XSD_NONPOSITIVEINTEGER', 132);
define ('XSD_NEGATIVEINTEGER', 133);
define ('XSD_LONG', 134);
define ('XSD_INT', 135);
define ('XSD_SHORT', 136);
define ('XSD_BYTE', 137);
define ('XSD_NONNEGATIVEINTEGER', 138);
define ('XSD_UNSIGNEDLONG', 139);
define ('XSD_UNSIGNEDINT', 140);
define ('XSD_UNSIGNEDSHORT', 141);
define ('XSD_UNSIGNEDBYTE', 142);
define ('XSD_POSITIVEINTEGER', 143);
define ('XSD_NMTOKENS', 144);
define ('XSD_ANYTYPE', 145);
define ('XSD_ANYXML', 147);
define ('APACHE_MAP', 200);
define ('SOAP_ENC_OBJECT', 301);
define ('SOAP_ENC_ARRAY', 300);
define ('XSD_1999_TIMEINSTANT', 401);
define ('XSD_NAMESPACE', "http://www.w3.org/2001/XMLSchema");
define ('XSD_1999_NAMESPACE', "http://www.w3.org/1999/XMLSchema");
define ('SOAP_SINGLE_ELEMENT_ARRAYS', 1);
define ('SOAP_WAIT_ONE_WAY_CALLS', 2);
define ('SOAP_USE_XSI_ARRAY_TYPE', 4);
define ('WSDL_CACHE_NONE', 0);
define ('WSDL_CACHE_DISK', 1);
define ('WSDL_CACHE_MEMORY', 2);
define ('WSDL_CACHE_BOTH', 3);

/**
 * @link http://php.net/manual/en/soap.constants.php
 * @since 5.5.0
 */
define ('SOAP_SSL_METHOD_TLS', 0);

/**
 * @link http://php.net/manual/en/soap.constants.php
 * @since 5.5.0
 */
define ('SOAP_SSL_METHOD_SSLv2', 1);

/**
 * @link http://php.net/manual/en/soap.constants.php
 * @since 5.5.0
 */
define ('SOAP_SSL_METHOD_SSLv3', 2);

/**
 * @link http://php.net/manual/en/soap.constants.php
 * @since 5.5.0
 */
define ('SOAP_SSL_METHOD_SSLv23', 3);

// End of soap v.
?>
