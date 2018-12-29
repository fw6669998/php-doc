<?php

// Start of standard v.5.3.1-0.dotdeb.1

define ('CONNECTION_ABORTED', 1);
define ('CONNECTION_NORMAL', 0);
define ('CONNECTION_TIMEOUT', 2);
define ('INI_USER', 1);
define ('INI_PERDIR', 2);
define ('INI_SYSTEM', 4);
define ('INI_ALL', 7);

/**
*      普通的 INI 扫描模式（自 PHP 5.3 起）。     
*/
define ('INI_SCANNER_NORMAL', 0);

/**
*      Typed INI 扫描模式（自 PHP 5.5.6.1 起）。     
*/
define ('INI_SCANNER_TYPED', 2);

/**
*      原始（Raw） INI 扫描模式（自 PHP 5.3 起）。     
*/
define ('INI_SCANNER_RAW', 1);

define ('PHP_URL_SCHEME', 0);
define ('PHP_URL_HOST', 1);
define ('PHP_URL_PORT', 2);
define ('PHP_URL_USER', 3);
define ('PHP_URL_PASS', 4);
define ('PHP_URL_PATH', 5);
define ('PHP_URL_QUERY', 6);
define ('PHP_URL_FRAGMENT', 7);

/**
 * <i>e</i> constant
 */
define ('M_E', 2.718281828459);

/**
 * {@link log}<sub>2</sub><i>e</i> constant
 */
define ('M_LOG2E', 1.442695040889);

/**
 * {@link log}<sub>10</sub><i>e</i> constant
 */
define ('M_LOG10E', 0.43429448190325);

/**
 * {@link log}<sub><i>e</i></sub>2 constant
 */
define ('M_LN2', 0.69314718055995);

/**
 * {@link log}<sub><i>e</i></sub>10 constant
 */
define ('M_LN10', 2.302585092994);

/**
 * &pi; constant
 */
define ('M_PI', 3.1415926535898);

/**
 * &pi;/2 constant
 */
define ('M_PI_2', 1.5707963267949);

/**
 * &pi;/4 constant
 */
define ('M_PI_4', 0.78539816339745);

/**
 * 1/&pi; constant
 */
define ('M_1_PI', 0.31830988618379);

/**
 * 2/&pi; constant
 */
define ('M_2_PI', 0.63661977236758);

/**
 * {@link sqrt}(&pi;) constant
 */
define ('M_SQRTPI', 1.7724538509055);

/**
 * 2/{@link sqrt}(&pi;) constant
 */
define ('M_2_SQRTPI', 1.1283791670955);

/**
 * {@link log}<sub><i>e</i></sub>&pi; constant
 */
define ('M_LNPI', 1.1447298858494);

/**
 * Euler constant
 */
define ('M_EULER', 0.57721566490153);

/**
 * {@link sqrt}(2) constant
 */
define ('M_SQRT2', 1.4142135623731);

/**
 * 1/{@link sqrt}(2) constant
 */
define ('M_SQRT1_2', 0.70710678118655);

/**
 * {@link sqrt}(3) constant
 */
define ('M_SQRT3', 1.7320508075689);

/**
*JSON_PARTIAL_OUTPUT_ON_ERROR
*/
define ('INF', INF);

/**
*<code>INF</code>
*/
define ('NAN', NAN);

/**
 * Round halves up [5.3.0]
 * @link http://php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_UP', 1);

/**
 * Round halves down [5.3.0]
 * @link http://php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_DOWN', 2);

/**
 * Round halves to even numbers [5.3.0]
 * @link http://php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_EVEN', 3);

/**
 * Round halves to odd numbers [5.3.0]
 * @link http://php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_ODD', 4);
define ('INFO_GENERAL', 1);

/**
 * PHP Credits. See also phpcredits.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('INFO_CREDITS', 2);

/**
 * Current Local and Master values for PHP directives. See
 * also ini_get.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('INFO_CONFIGURATION', 4);

/**
 * Loaded modules and their respective settings.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('INFO_MODULES', 8);

/**
 * Environment Variable information that's also available in
 * $_ENV.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('INFO_ENVIRONMENT', 16);

/**
 * Shows all 
 * predefined variables from EGPCS (Environment, GET,
 * POST, Cookie, Server).
 * @link http://php.net/manual/en/info.constants.php
 */
define ('INFO_VARIABLES', 32);

/**
 * PHP License information. See also the license faq.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('INFO_LICENSE', 64);
define ('INFO_ALL', 4294967295);

/**
 * A list of the core developers
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_GROUP', 1);

/**
 * General credits: Language design and concept, PHP
 * authors and SAPI module.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_GENERAL', 2);

/**
 * A list of the server API modules for PHP, and their authors.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_SAPI', 4);

/**
 * A list of the extension modules for PHP, and their authors.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_MODULES', 8);

/**
 * The credits for the documentation team.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_DOCS', 16);

/**
 * Usually used in combination with the other flags. Indicates
 * that a complete stand-alone HTML page needs to be
 * printed including the information indicated by the other
 * flags.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_FULLPAGE', 32);

/**
 * The credits for the quality assurance team.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_QA', 64);

/**
 * The configuration line, &php.ini; location, build date, Web
 * Server, System and more.
 * @link http://php.net/manual/en/info.constants.php
 */
define ('CREDITS_ALL', 4294967295);
define ('HTML_SPECIALCHARS', 0);
define ('HTML_ENTITIES', 1);
define ('ENT_COMPAT', 2);
define ('ENT_QUOTES', 3);
define ('ENT_NOQUOTES', 0);
/**
 * @since 5.3.0
 */
define ('ENT_IGNORE', 4);
define ('STR_PAD_LEFT', 0);
define ('STR_PAD_RIGHT', 1);
define ('STR_PAD_BOTH', 2);
define ('PATHINFO_DIRNAME', 1);
define ('PATHINFO_BASENAME', 2);
define ('PATHINFO_EXTENSION', 4);

/**
*     自 PHP 5.2.0 起     
*/
define ('PATHINFO_FILENAME', 8);
define ('CHAR_MAX', 127);
define ('LC_CTYPE', 0);
define ('LC_NUMERIC', 1);
define ('LC_TIME', 2);
define ('LC_COLLATE', 3);
define ('LC_MONETARY', 4);
define ('LC_ALL', 6);
define ('LC_MESSAGES', 5);
define ('SEEK_SET', 0);
define ('SEEK_CUR', 1);
define ('SEEK_END', 2);
define ('LOCK_SH', 1);
define ('LOCK_EX', 2);
define ('LOCK_UN', 3);
define ('LOCK_NB', 4);

/**
 * A connection with an external resource has been established.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_CONNECT', 2);

/**
*severity
*/
define ('STREAM_NOTIFY_AUTH_REQUIRED', 3);

/**
 * Authorization has been completed (with or without success).
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_AUTH_RESULT', 10);

/**
*mime-type
*/
define ('STREAM_NOTIFY_MIME_TYPE_IS', 4);

/**
*size
*/
define ('STREAM_NOTIFY_FILE_SIZE_IS', 5);

/**
*message
*/
define ('STREAM_NOTIFY_REDIRECTED', 6);

/**
*bytes_transferred
*/
define ('STREAM_NOTIFY_PROGRESS', 7);

/**
*message
*/
define ('STREAM_NOTIFY_FAILURE', 9);

/**
 * There is no more data available on the stream.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_COMPLETED', 8);

/**
*severity
*/
define ('STREAM_NOTIFY_RESOLVE', 1);

/**
 * Normal, non-error related, notification.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_INFO', 0);

/**
 * Non critical error condition. Processing may continue.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_WARN', 1);

/**
 * A critical error occurred. Processing cannot continue.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_ERR', 2);

/**
*{@link stream_filter_append()}
*/
define ('STREAM_FILTER_READ', 1);

/**
*{@link stream_filter_append()}
*/
define ('STREAM_FILTER_WRITE', 2);

/**
*STREAM_FILTER_READ | STREAM_FILTER_WRITE
*/
define ('STREAM_FILTER_ALL', 3);

/**
*{@link stream_socket_client()}
*/
define ('STREAM_CLIENT_PERSISTENT', 1);

/**
*<code>STREAM_CLIENT_CONNECT</code>
*/
define ('STREAM_CLIENT_ASYNC_CONNECT', 2);

/**
*{@link stream_socket_client()}
*/
define ('STREAM_CLIENT_CONNECT', 4);

/**
*{@link stream_socket_shutdown()}
*/
define ('STREAM_SHUT_RD', 0);

/**
*{@link stream_socket_shutdown()}
*/
define ('STREAM_SHUT_WR', 1);

/**
*{@link stream_socket_shutdown()}
*/
define ('STREAM_SHUT_RDWR', 2);

/**
 * Internet Protocol Version 4 (IPv4).
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_PF_INET', 2);

/**
 * Internet Protocol Version 6 (IPv6).
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_PF_INET6', 10);

/**
 * Unix system internal protocols.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_PF_UNIX', 1);

/**
 * Provides a IP socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_IP', 0);

/**
 * Provides a TCP socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_TCP', 6);

/**
 * Provides a UDP socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_UDP', 17);

/**
 * Provides a ICMP socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_ICMP', 1);

/**
 * Provides a RAW socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_RAW', 255);

/**
 * Provides sequenced, two-way byte streams with a transmission mechanism
 * for out-of-band data (TCP, for example).
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_STREAM', 1);

/**
 * Provides datagrams, which are connectionless messages (UDP, for
 * example).
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_DGRAM', 2);

/**
 * Provides a raw socket, which provides access to internal network
 * protocols and interfaces. Usually this type of socket is just available
 * to the root user.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_RAW', 3);

/**
 * Provides a sequenced packet stream socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_SEQPACKET', 5);

/**
 * Provides a RDM (Reliably-delivered messages) socket.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_RDM', 4);
define ('STREAM_PEEK', 2);
define ('STREAM_OOB', 1);

/**
*{@link stream_socket_server()}
*/
define ('STREAM_SERVER_BIND', 4);

/**
*{@link stream_socket_server()}
*/
define ('STREAM_SERVER_LISTEN', 8);

/**
*      在 <a href="http://php.net/manual/zh/ini.core.php#ini.include-path" class="link">include_path</a> 里搜索 <code class="parameter">filename</code>。       (自 PHP 5 起)。     
*/
define ('FILE_USE_INCLUDE_PATH', 1);

/**
*      过滤换行（EOL）字符（PHP 5 起）。     
*/
define ('FILE_IGNORE_NEW_LINES', 2);

/**
*      过滤空行（自 PHP 5 起）。     
*/
define ('FILE_SKIP_EMPTY_LINES', 4);

/**
*      为存在的文件添加内容。     
*/
define ('FILE_APPEND', 8);
define ('FILE_NO_DEFAULT_CONTEXT', 16);

/**
*      文本模式 (自 PHP 5.2.7 起)。      <blockquote class="note"><p><strong class="note">Note</strong>:        <p class="para">        此常量无效，仅仅用于向后兼容（<em>forward compatibility</em>）。       </p>      
*/
define ('FILE_TEXT', 0);

/**
*      二进制模式（自 PHP 5.2.7 起）。      <blockquote class="note"><p><strong class="note">Note</strong>:        <p class="para">        此常量无效，仅仅用于向后兼容（<em>forward compatibility</em>）。       </p>      
*/
define ('FILE_BINARY', 0);

/**
*      禁用反斜线转义     
*/
define ('FNM_NOESCAPE', 1);

/**
*      字符串里的斜杠只匹配指定模式里的斜杠。     
*/
define ('FNM_PATHNAME', 2);

/**
*      字符串里的起始点号必须完全匹配指定模式里的点号。     
*/
define ('FNM_PERIOD', 4);

/**
*      大小写不敏感的匹配，GNU 扩展的一部分。     
*/
define ('FNM_CASEFOLD', 16);

/**
*Return Code
*/
define ('PSFS_PASS_ON', 2);

/**
*Return Code
*/
define ('PSFS_FEED_ME', 1);

/**
*Return Code
*/
define ('PSFS_ERR_FATAL', 0);

/**
 * Regular read/write.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('PSFS_FLAG_NORMAL', 0);

/**
 * An incremental flush.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('PSFS_FLAG_FLUSH_INC', 1);

/**
 * Final flush prior to closing.
 * @link http://php.net/manual/en/stream.constants.php
 */
define ('PSFS_FLAG_FLUSH_CLOSE', 2);
define ('ABDAY_1', 131072);
define ('ABDAY_2', 131073);
define ('ABDAY_3', 131074);
define ('ABDAY_4', 131075);
define ('ABDAY_5', 131076);
define ('ABDAY_6', 131077);
define ('ABDAY_7', 131078);
define ('DAY_1', 131079);
define ('DAY_2', 131080);
define ('DAY_3', 131081);
define ('DAY_4', 131082);
define ('DAY_5', 131083);
define ('DAY_6', 131084);
define ('DAY_7', 131085);
define ('ABMON_1', 131086);
define ('ABMON_2', 131087);
define ('ABMON_3', 131088);
define ('ABMON_4', 131089);
define ('ABMON_5', 131090);
define ('ABMON_6', 131091);
define ('ABMON_7', 131092);
define ('ABMON_8', 131093);
define ('ABMON_9', 131094);
define ('ABMON_10', 131095);
define ('ABMON_11', 131096);
define ('ABMON_12', 131097);
define ('MON_1', 131098);
define ('MON_2', 131099);
define ('MON_3', 131100);
define ('MON_4', 131101);
define ('MON_5', 131102);
define ('MON_6', 131103);
define ('MON_7', 131104);
define ('MON_8', 131105);
define ('MON_9', 131106);
define ('MON_10', 131107);
define ('MON_11', 131108);
define ('MON_12', 131109);
define ('AM_STR', 131110);
define ('PM_STR', 131111);
define ('D_T_FMT', 131112);
define ('D_FMT', 131113);
define ('T_FMT', 131114);
define ('T_FMT_AMPM', 131115);
define ('ERA', 131116);
define ('ERA_D_T_FMT', 131120);
define ('ERA_D_FMT', 131118);
define ('ERA_T_FMT', 131121);
define ('ALT_DIGITS', 131119);
define ('CRNCYSTR', 262159);
define ('RADIXCHAR', 65536);
define ('THOUSEP', 65537);
define ('YESEXPR', 327680);
define ('NOEXPR', 327681);
define ('YESSTR', 54);
define ('NOSTR', 55);
define ('CODESET', 14);
define ('CRYPT_SALT_LENGTH', 123);
define ('CRYPT_STD_DES', 1);
define ('CRYPT_EXT_DES', 1);
define ('CRYPT_MD5', 1);
define ('CRYPT_BLOWFISH', 1);
define ('CRYPT_SHA256', 1);
define ('CRYPT_SHA512', 1);
define ('DIRECTORY_SEPARATOR', "/");
define ('PATH_SEPARATOR', ":");
define ('GLOB_BRACE', 1024);
define ('GLOB_MARK', 2);
define ('GLOB_NOSORT', 4);
define ('GLOB_NOCHECK', 16);
define ('GLOB_NOESCAPE', 64);
define ('GLOB_ERR', 1);
define ('GLOB_ONLYDIR', 8192);
define ('GLOB_AVAILABLE_FLAGS', 9303);
define ('EXTR_OVERWRITE', 0);
define ('EXTR_SKIP', 1);
define ('EXTR_PREFIX_SAME', 2);
define ('EXTR_PREFIX_ALL', 3);
define ('EXTR_PREFIX_INVALID', 4);
define ('EXTR_PREFIX_IF_EXISTS', 5);
define ('EXTR_IF_EXISTS', 6);
define ('EXTR_REFS', 256);

/**
*      <strong><code>SORT_ASC</code></strong> 用在 <span class="function">{@link array_multisort()}</span>      函数中，使其升序排列。     
*/
define ('SORT_ASC', 4);

/**
*      <strong><code>SORT_DESC</code></strong> 用在 <span class="function">{@link array_multisort()}</span>      函数中，使其降序排列。     
*/
define ('SORT_DESC', 3);

/**
*      <strong><code>SORT_REGULAR</code></strong> 用于对对象进行通常比较。     
*/
define ('SORT_REGULAR', 0);

/**
*      <strong><code>SORT_NUMERIC</code></strong> 用于对对象进行数值比较。     
*/
define ('SORT_NUMERIC', 1);

/**
*     <strong><code>SORT_STRING</code></strong> 用于对对象进行字符串比较。     
*/
define ('SORT_STRING', 2);

/**
*     <strong><code>SORT_LOCALE_STRING</code></strong> 基于当前区域来对对象进行字符串比较。PHP     4.4.0 和 5.0.2 新加。     
*/
define ('SORT_LOCALE_STRING', 5);

/**
*      <strong><code>CASE_LOWER</code></strong> 用在      <span class="function">{@link array_change_key_case()}</span> 中将数组的键名转换成小写字母。这也是      <span class="function">{@link array_change_key_case()}</span> 的默认值。     
*/
define ('CASE_LOWER', 0);

/**
*      <strong><code>CASE_UPPER</code></strong> 用在      <span class="function">{@link array_change_key_case()}</span> 中将数组的键名转换成大写字母。     
*/
define ('CASE_UPPER', 1);
define ('COUNT_NORMAL', 0);
define ('COUNT_RECURSIVE', 1);
define ('ASSERT_ACTIVE', 1);
define ('ASSERT_CALLBACK', 2);
define ('ASSERT_BAIL', 3);
define ('ASSERT_WARNING', 4);
define ('ASSERT_QUIET_EVAL', 5);
define ('ASSERT_EXCEPTION', 6);

/**
*Flag
*/
define ('STREAM_USE_PATH', 1);
define ('STREAM_IGNORE_URL', 2);
define ('STREAM_ENFORCE_SAFE_MODE', 4);

/**
*Flag
*/
define ('STREAM_REPORT_ERRORS', 8);

/**
 * This flag is useful when your extension really must be able to randomly
 * seek around in a stream. Some streams may not be seekable in their
 * native form, so this flag asks the streams API to check to see if the
 * stream does support seeking. If it does not, it will copy the stream
 * into temporary storage (which may be a temporary file or a memory
 * stream) which does support seeking.
 * Please note that this flag is not useful when you want to seek the
 * stream and write to it, because the stream you are accessing might
 * not be bound to the actual resource you requested.
 * If the requested resource is network based, this flag will cause the
 * opener to block until the whole contents have been downloaded.
 * @link http://php.net/manual/en/internals2.ze1.streams.constants.php
 */
define ('STREAM_MUST_SEEK', 16);
define ('STREAM_URL_STAT_LINK', 1);
define ('STREAM_URL_STAT_QUIET', 2);
define ('STREAM_MKDIR_RECURSIVE', 1);
define ('STREAM_IS_URL', 1);
define ('STREAM_OPTION_BLOCKING', 1);
define ('STREAM_OPTION_READ_TIMEOUT', 4);
define ('STREAM_OPTION_READ_BUFFER', 2);
define ('STREAM_OPTION_WRITE_BUFFER', 3);
define ('STREAM_BUFFER_NONE', 0);
define ('STREAM_BUFFER_LINE', 1);
define ('STREAM_BUFFER_FULL', 2);

/**
*<strong>stream_cast()</strong>
*/
define ('STREAM_CAST_AS_STREAM', 0);

/**
*{@link stream_select()}
*/
define ('STREAM_CAST_FOR_SELECT', 3);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_GIF', 1);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_JPEG', 2);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_PNG', 3);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_SWF', 4);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_PSD', 5);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_BMP', 6);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_TIFF_II', 7);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_TIFF_MM', 8);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_JPC', 9);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_JP2', 10);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_JPX', 11);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_JB2', 12);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_SWC', 13);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_IFF', 14);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_WBMP', 15);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_JPEG2000', 9);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_XBM', 16);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define ('IMAGETYPE_ICO', 17);
define ('IMAGETYPE_UNKNOWN', 0);
define ('IMAGETYPE_COUNT', 18);

/**
*     Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>     and <span class="function">{@link image_type_to_extension()}</span> functions. 
*/
define('IMAGETYPE_WEBP', 18);

/**
 * IPv4 Address Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_A', 1);

define('DNS_CAA', 8192);

/**
 * Authoritative Name Server Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_NS', 2);

/**
 * Alias (Canonical Name) Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_CNAME', 16);

/**
 * Start of Authority Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_SOA', 32);

/**
 * Pointer Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_PTR', 2048);

/**
*&raquo;&nbsp;<em>Operating System Names</em>
*/
define ('DNS_HINFO', 4096);

/**
 * Mail Exchanger Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_MX', 16384);

/**
 * Text Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_TXT', 32768);
define ('DNS_SRV', 33554432);
define ('DNS_NAPTR', 67108864);

/**
 * IPv6 Address Resource
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_AAAA', 134217728);
define ('DNS_A6', 16777216);

/**
*<code>DNS_ALL</code>
*/
define ('DNS_ANY', 268435456);

/**
 * Iteratively query the name server for
 * each available record type.
 * @link http://php.net/manual/en/network.constants.php
 */
define ('DNS_ALL', 251713587);

// End of standard v.5.3.1-0.dotdeb.1


//WI-11084 Constant not defined PHP_QUERY_RFC3986

/**
 * Encoding is performed per RFC 1738 and the application/x-www-form-urlencoded media type,
 * which implies that spaces are encoded as plus (+) signs.
 * @link http://php.net/manual/en/function.http-build-query.php
 */
define('PHP_QUERY_RFC1738', 1);
/**
 * Encoding is performed according to RFC 3986, and spaces will be percent encoded (%20).
 * @link http://php.net/manual/en/function.http-build-query.php
 */
define('PHP_QUERY_RFC3986', 2);


//WI-11254 Stubs for missing constants from PHP 5.4

/**
*        Specifies where the manpages were installed into.        Available since PHP 5.3.7.       
*/
define('PHP_MANDIR', '/usr/local/php/php/man');
/**
*        Specifies the PHP binary path during script execution.        Available since PHP 5.4.       
*/
define('PHP_BINARY', '/usr/local/php/bin/php');



/**
*      Indicates that the output buffer is being flushed, and had data to output.     
*/
define('PHP_OUTPUT_HANDLER_WRITE', 0);
/**
*      Indicates that the buffer has been flushed.     
*/
define('PHP_OUTPUT_HANDLER_FLUSH', 4);
/**
*      Indicates that the output buffer has been cleaned.     
*/
define('PHP_OUTPUT_HANDLER_CLEAN', 2);
/**
*      Indicates that this is the final output buffering operation.     
*/
define('PHP_OUTPUT_HANDLER_FINAL', 8);
/**
*      Controls whether an output buffer created by      <span class="function">{@link ob_start()}</span> can be cleaned.     
*/
define('PHP_OUTPUT_HANDLER_CLEANABLE', 16);
/**
*      Controls whether an output buffer created by      <span class="function">{@link ob_start()}</span> can be flushed.     
*/
define('PHP_OUTPUT_HANDLER_FLUSHABLE', 32);
/**
*      Controls whether an output buffer created by      <span class="function">{@link ob_start()}</span> can be removed before the end of the script.     
*/
define('PHP_OUTPUT_HANDLER_REMOVABLE', 64);
/**
*      The default set of output buffer flags; currently equivalent to      <strong><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></strong> |      <strong><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></strong> |      <strong><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></strong>.     
*/
define('PHP_OUTPUT_HANDLER_STDFLAGS', 112);
/** @link http://php.net/manual/en/outcontrol.constants.php */
define('PHP_OUTPUT_HANDLER_STARTED', 4096);
/** @link http://php.net/manual/en/outcontrol.constants.php */
define('PHP_OUTPUT_HANDLER_DISABLED', 8192);



/**
*      Sets XML_PARSE_PEDANTIC flag, which enables pedantic error reporting.     
*/
define('LIBXML_PEDANTIC', 128);




/**
*      DEFLATE algorithm as per RFC 1951. Available as of PHP 7.0.0.     
*/
define('ZLIB_ENCODING_RAW', -15);
/**
*      GZIP algorithm as per RFC 1952. Available as of PHP 7.0.0.     
*/
define('ZLIB_ENCODING_GZIP', 31);
/**
*      ZLIB compression algorithm as per RFC 1950. Available as of PHP 7.0.0.     
*/
define('ZLIB_ENCODING_DEFLATE', 15);



/**
 * Equivalent to calling htmlspecialchars() with ENT_QUOTES set.
 * Encoding quotes can be disabled by setting FILTER_FLAG_NO_ENCODE_QUOTES.
 * Like htmlspecialchars(), this filter is aware of the default_charset
 * and if a sequence of bytes is detected that makes up an invalid character
 * in the current character set then the entire string is rejected resulting in
 * a 0-length string.
 * @link http://php.net/manual/en/filter.filters.sanitize.php
 */
define('FILTER_SANITIZE_FULL_SPECIAL_CHARS', 515);





/**
*      包含着会话名以及会话 ID 的常量，格式为      <em>&quot;name=ID&quot;</em>，或者如果会话 ID 已经在适当的会话      cookie 中设定时则为空字符串。      这和 <span class="function">{@link session_id()}</span> 返回的是同一个 ID。     
*/
define('SID', "name=ID");
/**
*      自 PHP 5.4.0 起。如果会话已禁用则返回 <span class="function">{@link session_status()}</span> 的值。     
*/
define('PHP_SESSION_DISABLED', 0);
/**
*      自 PHP 5.4.0 起。在会话已启用但是没有会话的时候返回 <span class="function">{@link session_status()}</span> 的值。     
*/
define('PHP_SESSION_NONE', 1);
/**
*      自 PHP 5.4.0 起。在一个会话已启用并存在时返回  <span class="function">{@link session_status()}</span> 的值。     
*/
define('PHP_SESSION_ACTIVE', 2);



/**
 * Joins a multicast group. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('MCAST_JOIN_GROUP', 42);
/**
 * Leaves a multicast group. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('MCAST_LEAVE_GROUP', 45);
/**
 * Blocks packets arriving from a specific source to a specific multicast group,
 * which must have been previously joined. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('MCAST_BLOCK_SOURCE', 43);
/**
 * Unblocks (start receiving again) packets arriving from
 * a specific source address to a specific multicast group,
 * which must have been previously joined. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('MCAST_UNBLOCK_SOURCE', 44);
/**
 * Receive packets destined to a specific multicast group
 * whose source address matches a specific value. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('MCAST_JOIN_SOURCE_GROUP', 46);
/**
 * Stop receiving packets destined to a specific multicast group
 * whose soure address matches a specific value. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('MCAST_LEAVE_SOURCE_GROUP', 47);
/**
 * The outgoing interface for IPv4 multicast packets. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('IP_MULTICAST_IF', 32);
/**
 * The outgoing interface for IPv6 multicast packets. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('IP_MULTICAST_TTL', 33);
/**
 * The multicast loopback policy for IPv4 packets,
 * which determines whether multicast packets sent by this socket
 * also reach receivers in the same host that have joined the same multicast group
 * on the outgoing interface used by this socket. This is the case by default. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('IP_MULTICAST_LOOP', 34);
/**
 * Analogous to IP_MULTICAST_LOOP, but for IPv6. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('IPV6_MULTICAST_IF', 17);
/**
 * The time-to-live of outgoing IPv4 multicast packets.
 * This should be a value between 0 (don't leave the interface) and 255.
 * The default value is 1 (only the local network is reached). (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('IPV6_MULTICAST_HOPS', 18);
/**
 * Analogous to IP_MULTICAST_TTL, but for IPv6 packets.
 * The value -1 is also accepted, meaning the route default should be used. (added in PHP 5.4)
 * @link http://php.net/manual/en/function.socket-get-option.php
 */
define('IPV6_MULTICAST_LOOP', 19);



define('IPPROTO_IP', 0);
define('IPPROTO_IPV6', 41);



/**
 * Replace invalid code unit sequences with a Unicode Replacement Character
 * U+FFFD (UTF-8) or &#FFFD; (otherwise) instead of returning an empty string.
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @since 5.4.0
 */
define('ENT_SUBSTITUTE', 8);
/**
 * Replace invalid code points for the given document type with
 * a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;
 * (otherwise) instead of leaving them as is. This may be useful,
 * for instance, to ensure the well-formedness of XML documents
 * with embedded external content.
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @since 5.4.0
 */
define('ENT_DISALLOWED', 128);
/**
 * Handle code as HTML 4.01.
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @since 5.4.0
 */
define('ENT_HTML401', 0);
/**
 * Handle code as XML 1.
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @since 5.4.0
 */
define('ENT_XML1', 16);
/**
 * Handle code as XHTML.
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @since 5.4.0
 */
define('ENT_XHTML', 32);
/**
 * Handle code as HTML 5.
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @since 5.4.0
 */
define('ENT_HTML5', 48);


/** @link http://php.net/manual/en/function.scandir.php */
define('SCANDIR_SORT_ASCENDING', 0);
/** @link http://php.net/manual/en/function.scandir.php */
define('SCANDIR_SORT_DESCENDING', 1);
/** @link http://php.net/manual/en/function.scandir.php */
define('SCANDIR_SORT_NONE', 2);



/**
 * SORT_NATURAL is used to compare items as strings using "natural ordering" like natsort(). Added in PHP 5.4.0.
 * @link http://php.net/manual/en/array.constants.php
 */
define('SORT_NATURAL', 6);
/**
 * SORT_FLAG_CASE can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively. Added in PHP 5.4.0.
 * @link http://php.net/manual/en/array.constants.php
 */
define('SORT_FLAG_CASE', 8);



/**
*<strong>stream_metadata()</strong>
*/
define('STREAM_META_TOUCH', 1);
/**
*<strong>stream_metadata()</strong>
*/
define('STREAM_META_OWNER', 3);
/**
*<strong>stream_metadata()</strong>
*/
define('STREAM_META_OWNER_NAME', 2);
/**
*<strong>stream_metadata()</strong>
*/
define('STREAM_META_GROUP', 5);
/**
*<strong>stream_metadata()</strong>
*/
define('STREAM_META_GROUP_NAME', 4);
/**
*<strong>stream_metadata()</strong>
*/
define('STREAM_META_ACCESS', 6);




