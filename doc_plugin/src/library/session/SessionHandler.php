<?php
/**
 * <b>SessionHandlerInterface</b> is an interface which defines
 * a prototype for creating a custom session handler.
 * In order to pass a custom session handler to
 * session_set_save_handler() using its OOP invocation,
 * the class must implement this interface.
 * @link http://php.net/manual/en/class.sessionhandlerinterface.php
 * @since 5.4.0
 */
interface SessionHandlerInterface {

	/**
	 * Close the session
	 * @link http://php.net/manual/en/sessionhandlerinterface.close.php
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function close();

	/**
	 * Destroy a session
	 * @link http://php.net/manual/en/sessionhandlerinterface.destroy.php
	 * @param string $session_id The session ID being destroyed.
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function destroy($session_id);

	/**
	 * Cleanup old sessions
	 * @link http://php.net/manual/en/sessionhandlerinterface.gc.php
	 * @param int $maxlifetime <p>
	 * Sessions that have not updated for
	 * the last maxlifetime seconds will be removed.
	 * </p>
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function gc($maxlifetime);

	/**
	 * Initialize session
	 * @link http://php.net/manual/en/sessionhandlerinterface.open.php
	 * @param string $save_path The path where to store/retrieve the session.
	 * @param string $name The session name.
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function open($save_path, $name);


	/**
	 * Read session data
	 * @link http://php.net/manual/en/sessionhandlerinterface.read.php
	 * @param string $session_id The session id to read data for.
	 * @return string <p>
	 * Returns an encoded string of the read data.
	 * If nothing was read, it must return an empty string.
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function read($session_id);

	/**
	 * Write session data
	 * @link http://php.net/manual/en/sessionhandlerinterface.write.php
	 * @param string $session_id The session id.
	 * @param string $session_data <p>
	 * The encoded session data. This data is the
	 * result of the PHP internally encoding
	 * the $_SESSION superglobal to a serialized
	 * string and passing it as this parameter.
	 * Please note sessions use an alternative serialization method.
	 * </p>
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function write($session_id, $session_data);
}

/**
 * <b>SessionUpdateTimestampHandlerInterface</b> is an interface which
 * defines a prototype for updating the life time of an existing session.
 * In order to use the lazy_write option must be enabled and a custom session
 * handler must implement this interface.
 * @since 7.0.0
 */
interface SessionUpdateTimestampHandlerInterface {

    /**
     * Validate session id
     * @param string $session_id The session id
     * @return bool <p>
     * Note this value is returned internally to PHP for processing.
     * </p>
     */
    public function validateId($session_id);

    /**
     * Update timestamp of a session
     * @param string $session_id The session id
     * @param string $session_data <p>
     * The encoded session data. This data is the
     * result of the PHP internally encoding
     * the $_SESSION superglobal to a serialized
     * string and passing it as this parameter.
     * Please note sessions use an alternative serialization method.
     * </p>
     * @return bool
     */
    public function updateTimestamp($session_id, $session_data);

}

/**
*<div id="class.sessionhandler" class="reference">   <h1 class="title">The SessionHandler class</h1>     <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p>     <div class="section" id="sessionhandler.intro">    <h2 class="title">简介</h2>    <p class="para">     <strong class="classname">SessionHandler</strong> is a special class that can be used     to expose the current internal PHP session save handler by inheritance.     There are seven methods which wrap the seven internal session save handler     callbacks (<code class="parameter">open</code>, <code class="parameter">close</code>,     <code class="parameter">read</code>, <code class="parameter">write</code>,     <code class="parameter">destroy</code>, <code class="parameter">gc</code> and     <code class="parameter">create_sid</code>).  By default, this class will wrap     whatever internal save handler is set as defined by the     <a href="http://php.net/manual/zh/session.configuration.php#ini.session.save-handler" class="link">session.save_handler</a>     configuration directive which is usually <code class="parameter">files</code> by     default.  Other internal session save handlers are provided by PHP     extensions such as SQLite (as <code class="parameter">sqlite</code>), Memcache (as     <code class="parameter">memcache</code>), and Memcached (as     <code class="parameter">memcached</code>).    </p>    <p class="para">     When a plain instance of <strong class="classname">SessionHandler</strong> is set as the save handler using     <span class="function">{@link session_set_save_handler()}</span> it will wrap the current save handlers.     A class extending from <strong class="classname">SessionHandler</strong> allows you to override     the methods or intercept or filter them by calls the parent class methods which ultimately wrap     the internal PHP session handlers.    </p>    <p class="para">     This allows you, for example, to intercept the <code class="parameter">read</code> and <code class="parameter">write</code>     methods to encrypt/decrypt the session data and then pass the result to and from the parent class.     Alternatively one might chose to entirely override a method like the garbage collection callback     <code class="parameter">gc</code>.    </p>    <p class="para">     Because the <strong class="classname">SessionHandler</strong> wraps the current internal save handler     methods, the above example of encryption can be applied to any internal save handler without     having to know the internals of the handlers.    </p>    <p class="para">     To use this class, first set the save handler you wish to expose using     <a href="http://php.net/manual/zh/session.configuration.php#ini.session.save-handler" class="link">session.save_handler</a> and then pass an instance of     <strong class="classname">SessionHandler</strong> or one extending it to <span class="function">{@link session_set_save_handler()}</span>.    </p>    <p class="para">     Please note the callback methods of this class are designed to be called internally by     PHP and are not meant to be called from user-space code.  The return values are equally processed internally     by PHP.  For more information on the session workflow, please refer <span class="function">{@link session_set_save_handler()}</span>.    </p>   </div>     <div class="section" id="sessionhandler.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SessionHandler</strong>      </span>       <span class="oointerface">implements <span class="interfacename"><a href="http://php.net/manual/zh/class.sessionhandlerinterface.php" class="interfacename">SessionHandlerInterface</a></span></span>      <span class="oointerface">, <span class="interfacename"><strong class="interfacename">SessionIdInterface</strong></span></span>      {</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.close.php" class="methodname">close</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.create-sid.php" class="methodname">create_sid</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.destroy.php" class="methodname">destroy</a></span>    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$session_id</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.gc.php" class="methodname">gc</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$maxlifetime</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.open.php" class="methodname">open</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$save_path</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$session_name</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.read.php" class="methodname">read</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$session_id</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/sessionhandler.write.php" class="methodname">write</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$session_id</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$session_data</code></span>    )</div>     }</div>     </div>    <div class="section" id="session.notes">    <div class="warning"><strong class="warning">Warning</strong>     <p class="para">      This class is designed to expose the current internal PHP session save handler, if you want to      write your own custom save handlers, please implement the <a href="http://php.net/manual/zh/class.sessionhandlerinterface.php" class="classname">SessionHandlerInterface</a>      interface instead of extending from <strong class="classname">SessionHandler</strong>.     </p>    </div>   </div>    <div class="section" id="sessionhandler.changelog">    <h2 class="title">更新日志</h2>    <p class="para">     <table class="doctable informaltable">             <thead>        <tr>         <th>版本</th>         <th>说明</th>        </tr>        </thead>        <tbody class="tbody">        <tr>         <td>5.5.1</td>         <td>          Added <span class="function">{@link SessionHandler::create_sid()}</span>.         </td>        </tr>        </tbody>           </table>     </p>   </div>    <div class="section" id="sessionhandler.examples">    <div class="example" id="example-5839">     <p><strong>Example #1       Using <strong class="classname">SessionHandler</strong> to add encryption to internal PHP save handlers.     </strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />&nbsp;</span><span style="color: #FF8000">//*<br />&nbsp;&nbsp;*&nbsp;decrypt&nbsp;AES&nbsp;256<br />&nbsp;&nbsp;*<br />&nbsp;&nbsp;*&nbsp;@param&nbsp;data&nbsp;$edata<br />&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$password<br />&nbsp;&nbsp;*&nbsp;@return&nbsp;decrypted&nbsp;data<br />&nbsp;&nbsp;<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">decrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">$edata</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$password</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">base64_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">$edata</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$salt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">16</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$ct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">16</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$rounds&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;depends&nbsp;on&nbsp;key&nbsp;length<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$data00&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$password</span><span style="color: #007700">.</span><span style="color: #9876AA">$salt</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$hash&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$hash</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$data00</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$hash</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #9876AA">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #9876AA">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #9876AA">$rounds</span><span style="color: #007700">;&nbsp;</span><span style="color: #9876AA">$i</span><span style="color: #007700">++)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$hash</span><span style="color: #007700">[</span><span style="color: #9876AA">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$hash</span><span style="color: #007700">[</span><span style="color: #9876AA">$i&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">].</span><span style="color: #9876AA">$data00</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$result&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #9876AA">$hash</span><span style="color: #007700">[</span><span style="color: #9876AA">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$result</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">32</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$iv&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$result</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">32</span><span style="color: #007700">,</span><span style="color: #9876AA">16</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">openssl_decrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">$ct</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'AES-256-CBC'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$iv</span><span style="color: #007700">);<br />&nbsp;&nbsp;}<br /><br /></span><span style="color: #FF8000">//*<br />&nbsp;*&nbsp;crypt&nbsp;AES&nbsp;256<br />&nbsp;*<br />&nbsp;*&nbsp;@param&nbsp;data&nbsp;$data<br />&nbsp;*&nbsp;@param&nbsp;string&nbsp;$password<br />&nbsp;*&nbsp;@return&nbsp;base64&nbsp;encrypted&nbsp;data<br />&nbsp;<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">encrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$password</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Set&nbsp;a&nbsp;random&nbsp;salt<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$salt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">openssl_random_pseudo_bytes</span><span style="color: #007700">(</span><span style="color: #9876AA">16</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$salted&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$dx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Salt&nbsp;the&nbsp;key(32)&nbsp;and&nbsp;iv(16)&nbsp;=&nbsp;48<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$salted</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #9876AA">48</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$dx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$dx</span><span style="color: #007700">.</span><span style="color: #9876AA">$password</span><span style="color: #007700">.</span><span style="color: #9876AA">$salt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$salted&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #9876AA">$dx</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$salted</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">32</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$iv&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$salted</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">32</span><span style="color: #007700">,</span><span style="color: #9876AA">16</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$encrypted_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">openssl_encrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'AES-256-CBC'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$iv</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">base64_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">$salt&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$encrypted_data</span><span style="color: #007700">);<br />}<br /><br />class&nbsp;</span><span style="color: #9876AA">EncryptedSessionHandler&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #9876AA">SessionHandler<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #9876AA">$key</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #9876AA">__construct</span><span style="color: #007700">(</span><span style="color: #9876AA">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #9876AA">read</span><span style="color: #007700">(</span><span style="color: #9876AA">$id</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">parent</span><span style="color: #007700">::</span><span style="color: #9876AA">read</span><span style="color: #007700">(</span><span style="color: #9876AA">$id</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">$data</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">decrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #9876AA">write</span><span style="color: #007700">(</span><span style="color: #9876AA">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$data</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">encrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">key</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #9876AA">parent</span><span style="color: #007700">::</span><span style="color: #9876AA">write</span><span style="color: #007700">(</span><span style="color: #9876AA">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /><br /></span><span style="color: #FF8000">//&nbsp;we'll&nbsp;intercept&nbsp;the&nbsp;native&nbsp;'files'&nbsp;handler,&nbsp;but&nbsp;will&nbsp;equally&nbsp;work<br />//&nbsp;with&nbsp;other&nbsp;internal&nbsp;native&nbsp;handlers&nbsp;like&nbsp;'sqlite',&nbsp;'memcache'&nbsp;or&nbsp;'memcached'<br />//&nbsp;which&nbsp;are&nbsp;provided&nbsp;by&nbsp;PHP&nbsp;extensions.<br /></span><span style="color: #9876AA">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.save_handler'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'files'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'secret_string'</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$handler&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">EncryptedSessionHandler</span><span style="color: #007700">(</span><span style="color: #9876AA">$key</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">session_set_save_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">$handler</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">session_start</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;proceed&nbsp;to&nbsp;set&nbsp;and&nbsp;retrieve&nbsp;values&nbsp;by&nbsp;key&nbsp;from&nbsp;$_SESSION</span> </span> </code></div>     </div>     </div>    <blockquote class="note"><p><strong class="note">Note</strong>:      <p class="para">      Since this class&#039; methods are designed to be called internally by PHP as part of the normal session workflow,      child class calls to parent methods (i.e. the actual internal native handlers) will return <strong><code>FALSE</code></strong> unless      the session has actually been started (either automatically, or by explicit <span class="function">{@link session_start()}</span>.      This is important to consider when writing unit tests where the class methods might be invoked manually.     </p>    </p></blockquote>   </div>   </div>                                                             <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SessionHandler::close} — Close the session</li><li>{@link SessionHandler::create_sid} — Return a new session ID</li><li>{@link SessionHandler::destroy} — Destroy a session</li><li>{@link SessionHandler::gc} — Cleanup old sessions</li><li>{@link SessionHandler::open} — Initialize session</li><li>{@link SessionHandler::read} — Read session data</li><li>{@link SessionHandler::write} — Write session data</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.session.php">Sessions</a></div></div>
*/
class SessionHandler implements SessionHandlerInterface, SessionUpdateTimestampHandlerInterface {

	/**
	 * Close the session
	 * @link http://php.net/manual/en/sessionhandler.close.php
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function close() { }

    /**
     * Return a new session ID
     * @link http://php.net/manual/en/sessionhandler.create-sid.php
     * @return string <p>A session ID valid for the default session handler.</p>
     * @since 5.5.1
     */
	public function create_sid() {}

	/**
	 * Destroy a session
	 * @link http://php.net/manual/en/sessionhandler.destroy.php
	 * @param string $session_id The session ID being destroyed.
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function destroy($session_id) { }

	/**
	 * Cleanup old sessions
	 * @link http://php.net/manual/en/sessionhandler.gc.php
	 * @param int $maxlifetime <p>
	 * Sessions that have not updated for
	 * the last maxlifetime seconds will be removed.
	 * </p>
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function gc($maxlifetime) { }

	/**
	 * Initialize session
	 * @link http://php.net/manual/en/sessionhandler.open.php
	 * @param string $save_path The path where to store/retrieve the session.
	 * @param string $session_name The session name.
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function open($save_path, $session_name) { }


	/**
	 * Read session data
	 * @link http://php.net/manual/en/sessionhandler.read.php
	 * @param string $session_id The session id to read data for.
	 * @return string <p>
	 * Returns an encoded string of the read data.
	 * If nothing was read, it must return an empty string.
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function read($session_id) { }

	/**
	 * Write session data
	 * @link http://php.net/manual/en/sessionhandler.write.php
	 * @param string $session_id The session id.
	 * @param string $session_data <p>
	 * The encoded session data. This data is the
	 * result of the PHP internally encoding
	 * the $_SESSION superglobal to a serialized
	 * string and passing it as this parameter.
	 * Please note sessions use an alternative serialization method.
	 * </p>
	 * @return bool <p>
	 * The return value (usually TRUE on success, FALSE on failure).
	 * Note this value is returned internally to PHP for processing.
	 * </p>
	 * @since 5.4.0
	 */
	public function write($session_id, $session_data) { }

    /**
     * Validate session id
     * @param string $session_id The session id
     * @return bool <p>
     * Note this value is returned internally to PHP for processing.
     * </p>
     */
    public function validateId($session_id) { }

    /**
     * Update timestamp of a session
     * @param string $session_id The session id
     * @param string $session_data <p>
     * The encoded session data. This data is the
     * result of the PHP internally encoding
     * the $_SESSION superglobal to a serialized
     * string and passing it as this parameter.
     * Please note sessions use an alternative serialization method.
     * </p>
     * @return bool
     */
    public function updateTimestamp($session_id, $session_data) { }

}
