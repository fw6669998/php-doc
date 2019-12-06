<?php

// Start of tokenizer v.0.1

/**
*<div id="function.token-get-all" class="refentry">  <div class="refnamediv">   <h1 class="refname">token_get_all</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">token_get_all</span> &mdash; <span class="dc-title">将提供的源码按 PHP 标记进行分割</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.token-get-all-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>token_get_all</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$source</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">token_get_all()</strong></span> 解析提供的 <span class="parameter" style="color:#2EACF9">source</span>     源码字符，然后使用 Zend 引擎的语法分析器获取源码中的 PHP 语言的解析器代号   </p>   <p class="para">    解析器代号列表见<a href="http://php.net/manual/zh/tokens.php" class="xref">解析器代号列表</a>, 或者使用     <span class="function">{@link token_name()}</span> 翻译获取这个代号的字符串表示.   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.token-get-all-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">source</span></dt>       <dd>        <p class="para">        需要解析的 PHP 源码.       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.token-get-all-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    An array of token identifiers. Each individual token identifier is either    a single character (i.e.: <em>;</em>, <em>.</em>,     or a three element array containing the token index in element 0, the string    content of the original token in element 1 and the line number in element 2.   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.token-get-all-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-4874">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">token_get_all()</strong></span> examples</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$tokens&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">token_get_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;?php&nbsp;echo;&nbsp;?&gt;'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(T_OPEN_TAG,&nbsp;'&lt;?php'),&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(T_ECHO,&nbsp;'echo'),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';',<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(T_CLOSE_TAG,&nbsp;'?&gt;')&nbsp;);&nbsp;<br /><br />//&nbsp;Note&nbsp;in&nbsp;the&nbsp;following&nbsp;example&nbsp;that&nbsp;the&nbsp;string&nbsp;is&nbsp;parsed&nbsp;as&nbsp;T_INLINE_HTML<br />&nbsp;&nbsp;&nbsp;rather&nbsp;than&nbsp;the&nbsp;otherwise&nbsp;expected&nbsp;T_COMMENT&nbsp;(T_ML_COMMENT&nbsp;in&nbsp;PHP&nbsp;&lt;5).<br />&nbsp;&nbsp;&nbsp;This&nbsp;is&nbsp;because&nbsp;no&nbsp;open/close&nbsp;tags&nbsp;were&nbsp;used&nbsp;in&nbsp;the&nbsp;"code"&nbsp;provided.<br />&nbsp;&nbsp;&nbsp;This&nbsp;would&nbsp;be&nbsp;equivalent&nbsp;to&nbsp;putting&nbsp;a&nbsp;comment&nbsp;outside&nbsp;of&nbsp;&lt;?php&nbsp;?&gt;&nbsp;tags&nbsp;in&nbsp;a&nbsp;normal&nbsp;file.&nbsp;<br /></span><span style="color: #9876AA">$tokens&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">token_get_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'//&nbsp;comment&nbsp;'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;=&gt;&nbsp;array(array(T_INLINE_HTML,&nbsp;'//&nbsp;comment&nbsp;'));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.token-get-all-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.2.2</td>        <td>Line numbers are returned in element 2        </td>       </tr>       </tbody>         </table>    </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tokenizer.php">Tokenizer 函数</a></div></div>
 * @return array An array of token identifiers. Each individual token identifier is either*/
function token_get_all ($source, $flags = 0) {}

/**
*<div id="function.token-name" class="refentry">  <div class="refnamediv">   <h1 class="refname">token_name</h1>   <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">token_name</span> &mdash; <span class="dc-title">获取提供的 PHP 解析器代号的符号名称</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.token-name-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>token_name</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$token</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">token_name()</strong></span> 获取一个 PHP     <span class="parameter" style="color:#2EACF9">token</span> 的符号名称.    </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.token-name-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">token</span></dt>       <dd>        <p class="para">        解析器代号的值.       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.token-name-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    提供的<span class="parameter" style="color:#2EACF9">token</span> 的符号名.   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.token-name-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-4875">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">token_name()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;260&nbsp;is&nbsp;the&nbsp;token&nbsp;value&nbsp;for&nbsp;the&nbsp;T_EVAL&nbsp;token<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">260</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;-&gt;&nbsp;"T_EVAL"<br /><br />//&nbsp;a&nbsp;token&nbsp;constant&nbsp;maps&nbsp;to&nbsp;its&nbsp;own&nbsp;name<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">T_FUNCTION</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;-&gt;&nbsp;"T_FUNCTION"<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.token-name-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><a href="http://php.net/manual/zh/tokens.php" class="link">List of Parser Tokens</a></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.tokenizer.php">Tokenizer 函数</a></div></div>
 * @return string The symbolic name of the given <i>token</i>.*/
function token_name ($token) {}

define('TOKEN_PARSE', 1);
define('T_REQUIRE_ONCE', 262);
define('T_REQUIRE', 261);
define('T_EVAL', 260);
define('T_INCLUDE_ONCE', 259);
define('T_INCLUDE', 258);
define('T_LOGICAL_OR', 263);
define('T_LOGICAL_XOR', 264);
define('T_LOGICAL_AND', 265);
define('T_PRINT', 266);
define('T_YIELD', 267);
define('T_DOUBLE_ARROW', 268);
define('T_YIELD_FROM', 269);
define('T_POW_EQUAL', 281);
define('T_SR_EQUAL', 280);
define('T_SL_EQUAL', 279);
define('T_XOR_EQUAL', 278);
define('T_OR_EQUAL', 277);
define('T_AND_EQUAL', 276);
define('T_MOD_EQUAL', 275);
define('T_CONCAT_EQUAL', 274);
define('T_DIV_EQUAL', 273);
define('T_MUL_EQUAL', 272);
define('T_MINUS_EQUAL', 271);
define('T_PLUS_EQUAL', 270);
define('T_COALESCE', 282);
define('T_BOOLEAN_OR', 283);
define('T_BOOLEAN_AND', 284);
define('T_SPACESHIP', 289);
define('T_IS_NOT_IDENTICAL', 288);
define('T_IS_IDENTICAL', 287);
define('T_IS_NOT_EQUAL', 286);
define('T_IS_EQUAL', 285);
define('T_IS_GREATER_OR_EQUAL', 291);
define('T_IS_SMALLER_OR_EQUAL', 290);
define('T_SR', 293);
define('T_SL', 292);
define('T_INSTANCEOF', 294);
define('T_UNSET_CAST', 303);
define('T_BOOL_CAST', 302);
define('T_OBJECT_CAST', 301);
define('T_ARRAY_CAST', 300);
define('T_STRING_CAST', 299);
define('T_DOUBLE_CAST', 298);
define('T_INT_CAST', 297);
define('T_DEC', 296);
define('T_INC', 295);
define('T_POW', 304);
define('T_CLONE', 306);
define('T_NEW', 305);
define('T_ELSEIF', 308);
define('T_ELSE', 309);
define('T_ENDIF', 310);
define('T_PUBLIC', 316);
define('T_PROTECTED', 315);
define('T_PRIVATE', 314);
define('T_FINAL', 313);
define('T_ABSTRACT', 312);
define('T_STATIC', 311);
define('T_LNUMBER', 317);
define('T_DNUMBER', 318);
define('T_STRING', 319);
define('T_VARIABLE', 320);
define('T_INLINE_HTML', 321);
define('T_ENCAPSED_AND_WHITESPACE', 322);
define('T_CONSTANT_ENCAPSED_STRING', 323);
define('T_STRING_VARNAME', 324);
define('T_NUM_STRING', 325);
define('T_EXIT', 326);
define('T_IF', 327);
define('T_ECHO', 328);
define('T_DO', 329);
define('T_WHILE', 330);
define('T_ENDWHILE', 331);
define('T_FOR', 332);
define('T_ENDFOR', 333);
define('T_FOREACH', 334);
define('T_ENDFOREACH', 335);
define('T_DECLARE', 336);
define('T_ENDDECLARE', 337);
define('T_AS', 338);
define('T_SWITCH', 339);
define('T_ENDSWITCH', 340);
define('T_CASE', 341);
define('T_DEFAULT', 342);
define('T_BREAK', 343);
define('T_CONTINUE', 344);
define('T_GOTO', 345);
define('T_FUNCTION', 346);
define('T_CONST', 347);
define('T_RETURN', 348);
define('T_TRY', 349);
define('T_CATCH', 350);
define('T_FINALLY', 351);
define('T_THROW', 352);
define('T_USE', 353);
define('T_INSTEADOF', 354);
define('T_GLOBAL', 355);
define('T_VAR', 356);
define('T_UNSET', 357);
define('T_ISSET', 358);
define('T_EMPTY', 359);
define('T_HALT_COMPILER', 360);
define('T_CLASS', 361);
define('T_TRAIT', 362);
define('T_INTERFACE', 363);
define('T_EXTENDS', 364);
define('T_IMPLEMENTS', 365);
define('T_OBJECT_OPERATOR', 366);
define('T_LIST', 367);
define('T_ARRAY', 368);
define('T_CALLABLE', 369);
define('T_LINE', 370);
define('T_FILE', 371);
define('T_DIR', 372);
define('T_CLASS_C', 373);
define('T_TRAIT_C', 374);
define('T_METHOD_C', 375);
define('T_FUNC_C', 376);
define('T_COMMENT', 377);
define('T_DOC_COMMENT', 378);
define('T_OPEN_TAG', 379);
define('T_OPEN_TAG_WITH_ECHO', 380);
define('T_CLOSE_TAG', 381);
define('T_WHITESPACE', 382);
define('T_START_HEREDOC', 383);
define('T_END_HEREDOC', 384);
define('T_DOLLAR_OPEN_CURLY_BRACES', 385);
define('T_CURLY_OPEN', 386);
define('T_PAAMAYIM_NEKUDOTAYIM', 387);
define('T_NAMESPACE', 388);
define('T_NS_C', 389);
define('T_NS_SEPARATOR', 390);
define('T_ELLIPSIS', 391);
define('T_DOUBLE_COLON', 387);

// End of tokenizer v.0.1
