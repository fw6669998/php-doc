<?php

// Start of Core v.5.3.6-13ubuntu3.2


/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_ERROR', 1);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>.        Available since PHP 5.2.0       
*/
define ('E_RECOVERABLE_ERROR', 4096);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_WARNING', 2);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_PARSE', 4);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_NOTICE', 8);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_STRICT', 2048);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>.        Available since PHP 5.3.0       
*/
define ('E_DEPRECATED', 8192);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_CORE_ERROR', 16);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_CORE_WARNING', 32);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>      
*/
define ('E_COMPILE_ERROR', 64);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_COMPILE_WARNING', 128);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_USER_ERROR', 256);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_USER_WARNING', 512);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_USER_NOTICE', 1024);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>.        Available since PHP 5.3.0       
*/
define ('E_USER_DEPRECATED', 16384);

/**
*        <a href="http://php.net/manual/zh/errorfunc.constants.php" class="link">Error reporting constant</a>     
*/
define ('E_ALL', 30719);
define ('DEBUG_BACKTRACE_PROVIDE_OBJECT', 1);
define ('DEBUG_BACKTRACE_IGNORE_ARGS', 2);
define ('S_MEMORY', 1);
define ('S_VARS', 4);
define ('S_FILES', 8);
define ('S_INCLUDE', 16);
define ('S_SQL', 32);
define ('S_EXECUTOR', 64);
define ('S_MAIL', 128);
define ('S_SESSION', 256);
define ('S_MISC', 2);
define ('S_INTERNAL', 536870912);
define ('S_ALL', 511);

/**
 * system is unusable
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_EMERG', 0);

/**
 * action must be taken immediately
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_ALERT', 1);

/**
 * critical conditions
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_CRIT', 2);

/**
 * error conditions
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_ERR', 3);

/**
 * warning conditions
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_WARNING', 4);

/**
 * normal, but significant, condition
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_NOTICE', 5);

/**
 * informational message
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_INFO', 6);

/**
 * debug-level message
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_DEBUG', 7);

/**
 * kernel messages
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_KERN', 0);

/**
 * generic user-level messages
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_USER', 8);

/**
 * mail subsystem
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_MAIL', 16);

/**
 * other system daemons
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_DAEMON', 24);

/**
*<code>LOG_AUTHPRIV</code>
*/
define ('LOG_AUTH', 32);

/**
 * messages generated internally by syslogd
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_SYSLOG', 40);

/**
 * line printer subsystem
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_LPR', 48);

/**
 * USENET news subsystem
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_NEWS', 56);

/**
 * UUCP subsystem
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_UUCP', 64);

/**
 * clock daemon (cron and at)
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_CRON', 72);

/**
 * security/authorization messages (private)
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_AUTHPRIV', 80);
define ('LOG_LOCAL0', 128);
define ('LOG_LOCAL1', 136);
define ('LOG_LOCAL2', 144);
define ('LOG_LOCAL3', 152);
define ('LOG_LOCAL4', 160);
define ('LOG_LOCAL5', 168);
define ('LOG_LOCAL6', 176);
define ('LOG_LOCAL7', 184);

/**
 * include PID with each message
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_PID', 1);

/**
 * if there is an error while sending data to the system logger,
 * write directly to the system console
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_CONS', 2);

/**
 * (default) delay opening the connection until the first
 * message is logged
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_ODELAY', 4);

/**
 * open the connection to the logger immediately
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_NDELAY', 8);
define ('LOG_NOWAIT', 16);

/**
 * print log message also to standard error
 * @link http://php.net/manual/en/network.constants.php
 */
define ('LOG_PERROR', 32);
/**
*        See <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">Booleans</a>.       
*/
define ('true', true, true);
/**
*        See <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">Booleans</a>.       
*/
define ('false', false, true);
/**
*        See <a href="http://php.net/manual/zh/language.types.null.php" class="link">Null</a>.     
*/
define ('null', null, true);
define ('ZEND_THREAD_SAFE', false);
define ('ZEND_DEBUG_BUILD', false);
define ('PHP_WINDOWS_VERSION_BUILD', 0);
/**
*4
*/
define ('PHP_WINDOWS_VERSION_MAJOR', 0);
define ('PHP_WINDOWS_VERSION_MINOR', 0);
/**
*2
*/
define ('PHP_WINDOWS_VERSION_PLATFORM', 0);
/**
*PHP_WINDOWS_NT_*
*/
define ('PHP_WINDOWS_VERSION_PRODUCTTYPE', 0);
define ('PHP_WINDOWS_VERSION_SP_MAJOR', 0);
define ('PHP_WINDOWS_VERSION_SP_MINOR', 0);
/**
*<strong>Windows suitemask 位字段</strong>
*/
define ('PHP_WINDOWS_VERSION_SUITEMASK', 0);
/**
*      The current PHP version as a string in         &quot;major.minor.release[extra]&quot; notation.     
*/
define ('PHP_VERSION', "5.3.6-13ubuntu3.2");
/**
*        The current PHP &quot;major&quot; version as an integer (e.g., int(5)         from version &quot;5.2.7-extra&quot;). Available since PHP 5.2.7.       
*/
define ('PHP_MAJOR_VERSION', 5);
/**
*        The current PHP &quot;minor&quot; version as an integer (e.g., int(2)         from version &quot;5.2.7-extra&quot;). Available since PHP 5.2.7.       
*/
define ('PHP_MINOR_VERSION', 3);
/**
*        The current PHP &quot;release&quot; version as an integer (e.g., int(7)         from version &quot;5.2.7-extra&quot;). Available since PHP 5.2.7.       
*/
define ('PHP_RELEASE_VERSION', 6);
/**
*        The current PHP &quot;extra&quot; version as a string (e.g., &#039;-extra&#039;        from version &quot;5.2.7-extra&quot;). Often used by distribution        vendors to indicate a package version. Available since        PHP 5.2.7.       
*/
define ('PHP_EXTRA_VERSION', "-13ubuntu3.2");
/**
*        The current PHP version as an integer, useful for         version comparisons (e.g., int(50207) from version &quot;5.2.7-extra&quot;).        Available since PHP 5.2.7.       
*/
define ('PHP_VERSION_ID', 50306);
/**
*        Available since PHP 5.2.7.       
*/
define ('PHP_ZTS', 0);
/**
*        Available since PHP 5.2.7.       
*/
define ('PHP_DEBUG', 0);
/**
*        The operating system PHP was built for.     
*/
define ('PHP_OS', "Linux");
/**
*        The operating system family PHP was built for. Either of        <em>&#039;Windows&#039;</em>, <em>&#039;BSD&#039;</em>,        <em>&#039;Darwin&#039;</em>, <em>&#039;Solaris&#039;</em>,        <em>&#039;Linux&#039;</em> or <em>&#039;Unknown&#039;</em>.        Available as of PHP 7.2.0.       
*/
define ('PHP_OS_FAMILY', "Linux");
/**
*      The Server API for this build of PHP.参见 <span class="function">{@link php_sapi_name()}</span>。     
*/
define ('PHP_SAPI', "cli");
define ('DEFAULT_INCLUDE_PATH', ".:/usr/share/php:/usr/share/pear");
define ('PEAR_INSTALL_DIR', "/usr/share/php");
define ('PEAR_EXTENSION_DIR', "/usr/lib/php5/20090626");
define ('PHP_EXTENSION_DIR', "/usr/lib/php5/20090626");
/**
*      The value &quot;--prefix&quot; was set to at configure.     
*/
define ('PHP_PREFIX', "/usr");
/**
*        Specifies where the binaries were installed into.     
*/
define ('PHP_BINDIR', "/usr/bin");
define ('PHP_LIBDIR', "/usr/lib/php5");
define ('PHP_DATADIR', "/usr/share");
define ('PHP_SYSCONFDIR', "/etc");
define ('PHP_LOCALSTATEDIR', "/var");
define ('PHP_CONFIG_FILE_PATH', "/etc/php5/cli");
define ('PHP_CONFIG_FILE_SCAN_DIR', "/etc/php5/cli/conf.d");
/**
*      The build-platform&#039;s shared library suffix, such as &quot;so&quot; (most Unixes)        or &quot;dll&quot; (Windows).     
*/
define ('PHP_SHLIB_SUFFIX', "so");
/**
*      The correct &#039;End Of Line&#039; symbol for this platform.自 PHP 5.0.2 起可用     
*/
define ('PHP_EOL', "\n");
define ('SUHOSIN_PATCH', 1);
define ('SUHOSIN_PATCH_VERSION', "0.9.10");
/**
*        The maximum length of filenames (including path) supported        by this build of PHP. Available since PHP 5.3.0.       
*/
define ('PHP_MAXPATHLEN', 4096);
/**
*      The largest integer supported in this build of PHP. Usually int(2147483647).自 PHP 5.0.5 起可用     
*/
define ('PHP_INT_MAX', 9223372036854775807);
/**
*        The smallest integer supported in this build of PHP. Usually int(-2147483648) in 32 bit systems and        int(-9223372036854775808) in 64 bit systems. Available since PHP 7.0.0.        Usually, PHP_INT_MIN === ~PHP_INT_MAX.       
*/
define ('PHP_INT_MIN', -9223372036854775808);
/**
*      The size of an integer in bytes in this build of PHP. 自 PHP 5.0.5 起可用     
*/
define ('PHP_INT_SIZE', 8);
/**
*        Number of decimal digits that can be rounded into a float and back        without precision loss.        Available as of PHP 7.2.0.       
*/
define('PHP_FLOAT_DIG', 15);
/**
*        Smallest representable positive number x, so that <em>x + 1.0 !=        1.0</em>.        Available as of PHP 7.2.0.       
*/
define('PHP_FLOAT_EPSILON', 2.2204460492503e-16);

/**
*        Largest representable floating point number.        Available as of PHP 7.2.0.       
*/
define('PHP_FLOAT_MAX', 1.7976931348623e+308);
/**
*        Smallest representable floating point number.        Available as of PHP 7.2.0.       
*/
define('PHP_FLOAT_MIN', 2.2250738585072e-308);
define ('ZEND_MULTIBYTE', 0);
/**
*      Indicates that output buffering has begun.     
*/
define ('PHP_OUTPUT_HANDLER_START', 1);
/**
*      Indicates that the buffer has been flushed, but output buffering will      continue.     
*/
define ('PHP_OUTPUT_HANDLER_CONT', 2);
/**
*      Indicates that output buffering has ended.     
*/
define ('PHP_OUTPUT_HANDLER_END', 4);
define ('UPLOAD_ERR_OK', 0);
define ('UPLOAD_ERR_INI_SIZE', 1);
define ('UPLOAD_ERR_FORM_SIZE', 2);
define ('UPLOAD_ERR_PARTIAL', 3);
define ('UPLOAD_ERR_NO_FILE', 4);
define ('UPLOAD_ERR_NO_TMP_DIR', 6);
define ('UPLOAD_ERR_CANT_WRITE', 7);
define ('UPLOAD_ERR_EXTENSION', 8);
define('STDIN', fopen('php://stdin', 'r'));
define('STDOUT', fopen('php://stdout', 'w'));
define('STDERR', fopen('php://stderr', 'w'));

/**
*        The maximum number of file descriptors for select system calls. Available        as of PHP 7.1.0.     
*/
define('PHP_FD_SETSIZE', 1024);

