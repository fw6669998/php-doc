<?php

// Start of memcached v.2.1.0

/**
*<div id="class.memcached" class="reference">   <h1 class="title">Memcached类</h1>     <div class="partintro"><p class="verinfo">(PECL memcached &gt;= 0.1.0)</p>     <div class="section" id="memcached.intro">    <h2 class="title">简介</h2>    <p class="para">    表征到memcached服务集群的连接。    </p>   </div>     <div class="section" id="memcached.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">Memcached</strong>      </span>      {</div>           <div class="constructorsynopsis dc-description">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$persistent_id</span></span>   ] )</div>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.add.php" class="methodname" style="color:#CC7832">add</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.addbykey.php" class="methodname" style="color:#CC7832">addByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.addserver.php" class="methodname" style="color:#CC7832">addServer</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$host</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$port</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$weight</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.addservers.php" class="methodname" style="color:#CC7832">addServers</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$servers</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.append.php" class="methodname" style="color:#CC7832">append</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.appendbykey.php" class="methodname" style="color:#CC7832">appendByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.cas.php" class="methodname" style="color:#CC7832">cas</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$cas_token</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.casbykey.php" class="methodname" style="color:#CC7832">casByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$cas_token</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.decrement.php" class="methodname" style="color:#CC7832">decrement</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span><span class="initializer"> = 1</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.decrementbykey.php" class="methodname" style="color:#CC7832">decrementByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span><span class="initializer"> = 1</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$initial_value</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiry</span><span class="initializer"> = 0</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.delete.php" class="methodname" style="color:#CC7832">delete</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$time</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.deletebykey.php" class="methodname" style="color:#CC7832">deleteByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$time</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.deletemulti.php" class="methodname" style="color:#CC7832">deleteMulti</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$keys</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$time</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.deletemultibykey.php" class="methodname" style="color:#CC7832">deleteMultiByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$keys</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$time</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.fetch.php" class="methodname" style="color:#CC7832">fetch</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.fetchall.php" class="methodname" style="color:#CC7832">fetchAll</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.flush.php" class="methodname" style="color:#CC7832">flush</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$delay</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.get.php" class="methodname" style="color:#CC7832">get</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.callback" class="type callback" style="color:#EAB766">callback</a></span> <span class="parameter" style="color:#2EACF9">$cache_cb</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">&$cas_token</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getallkeys.php" class="methodname" style="color:#CC7832">getAllKeys</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getbykey.php" class="methodname" style="color:#CC7832">getByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.callback" class="type callback" style="color:#EAB766">callback</a></span> <span class="parameter" style="color:#2EACF9">$cache_cb</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">&$cas_token</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getdelayed.php" class="methodname" style="color:#CC7832">getDelayed</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$keys</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$with_cas</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.callback" class="type callback" style="color:#EAB766">callback</a></span> <span class="parameter" style="color:#2EACF9">$value_cb</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getdelayedbykey.php" class="methodname" style="color:#CC7832">getDelayedByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$keys</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$with_cas</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.callback" class="type callback" style="color:#EAB766">callback</a></span> <span class="parameter" style="color:#2EACF9">$value_cb</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getmulti.php" class="methodname" style="color:#CC7832">getMulti</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$keys</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getmultibykey.php" class="methodname" style="color:#CC7832">getMultiByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$keys</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">&$cas_tokens</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$flags</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">mixed</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getoption.php" class="methodname" style="color:#CC7832">getOption</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$option</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getresultcode.php" class="methodname" style="color:#CC7832">getResultCode</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getresultmessage.php" class="methodname" style="color:#CC7832">getResultMessage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getserverbykey.php" class="methodname" style="color:#CC7832">getServerByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getserverlist.php" class="methodname" style="color:#CC7832">getServerList</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getstats.php" class="methodname" style="color:#CC7832">getStats</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.getversion.php" class="methodname" style="color:#CC7832">getVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.increment.php" class="methodname" style="color:#CC7832">increment</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span><span class="initializer"> = 1</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.incrementbykey.php" class="methodname" style="color:#CC7832">incrementByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span><span class="initializer"> = 1</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$initial_value</span><span class="initializer"> = 0</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiry</span><span class="initializer"> = 0</span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.ispersistent.php" class="methodname" style="color:#CC7832">isPersistent</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.ispristine.php" class="methodname" style="color:#CC7832">isPristine</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.prepend.php" class="methodname" style="color:#CC7832">prepend</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.prependbykey.php" class="methodname" style="color:#CC7832">prependByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.quit.php" class="methodname" style="color:#CC7832">quit</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.replace.php" class="methodname" style="color:#CC7832">replace</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.replacebykey.php" class="methodname" style="color:#CC7832">replaceByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.resetserverlist.php" class="methodname" style="color:#CC7832">resetServerList</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.set.php" class="methodname" style="color:#CC7832">set</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.setbykey.php" class="methodname" style="color:#CC7832">setByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.setmulti.php" class="methodname" style="color:#CC7832">setMulti</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$items</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.setmultibykey.php" class="methodname" style="color:#CC7832">setMultiByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$items</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.setoption.php" class="methodname" style="color:#CC7832">setOption</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$option</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.setoptions.php" class="methodname" style="color:#CC7832">setOptions</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$options</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.setsaslauthdata.php" class="methodname" style="color:#CC7832">setSaslAuthData</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$username</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$password</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.touch.php" class="methodname" style="color:#CC7832">touch</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/memcached.touchbykey.php" class="methodname" style="color:#CC7832">touchByKey</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$server_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$expiration</span></span>    )</div>     }</div>     </div>     </div>                                                                                                                                                                                                                                                                                                                                                                             <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link Memcached::add} — 向一个新的key下面增加一个元素</li><li>{@link Memcached::addByKey} — 在指定服务器上的一个新的key下增加一个元素</li><li>{@link Memcached::addServer} — 向服务器池中增加一个服务器</li><li>{@link Memcached::addServers} — 向服务器池中增加多台服务器</li><li>{@link Memcached::append} — 向已存在元素后追加数据</li><li>{@link Memcached::appendByKey} — 向指定服务器上已存在元素后追加数据</li><li>{@link Memcached::cas} — 比较并交换值</li><li>{@link Memcached::casByKey} — 在指定服务器上比较并交换值</li><li>{@link Memcached::__construct} — 创建一个Memcached实例</li><li>{@link Memcached::decrement} — 减小数值元素的值</li><li>{@link Memcached::decrementByKey} — Decrement numeric item's value, stored on a specific server</li><li>{@link Memcached::delete} — 删除一个元素</li><li>{@link Memcached::deleteByKey} — 从指定的服务器删除一个元素</li><li>{@link Memcached::deleteMulti} — Delete multiple items</li><li>{@link Memcached::deleteMultiByKey} — Delete multiple items from a specific server</li><li>{@link Memcached::fetch} — 抓取下一个结果</li><li>{@link Memcached::fetchAll} — 抓取所有剩余的结果</li><li>{@link Memcached::flush} — 作废缓存中的所有元素</li><li>{@link Memcached::get} — 检索一个元素</li><li>{@link Memcached::getAllKeys} — Gets the keys stored on all the servers</li><li>{@link Memcached::getByKey} — 从特定的服务器检索元素</li><li>{@link Memcached::getDelayed} — 请求多个元素</li><li>{@link Memcached::getDelayedByKey} — 从指定的服务器上请求多个元素</li><li>{@link Memcached::getMulti} — 检索多个元素</li><li>{@link Memcached::getMultiByKey} — 从特定服务器检索多个元素</li><li>{@link Memcached::getOption} — 获取Memcached的选项值</li><li>{@link Memcached::getResultCode} — 返回最后一次操作的结果代码</li><li>{@link Memcached::getResultMessage} — 返回最后一次操作的结果描述消息</li><li>{@link Memcached::getServerByKey} — 获取一个key所映射的服务器信息</li><li>{@link Memcached::getServerList} — 获取服务器池中的服务器列表</li><li>{@link Memcached::getStats} — 获取服务器池的统计信息</li><li>{@link Memcached::getVersion} — 获取服务器池中所有服务器的版本信息</li><li>{@link Memcached::increment} — 增加数值元素的值</li><li>{@link Memcached::incrementByKey} — Increment numeric item's value, stored on a specific server</li><li>{@link Memcached::isPersistent} — Check if a persitent connection to memcache is being used</li><li>{@link Memcached::isPristine} — Check if the instance was recently created</li><li>{@link Memcached::prepend} — 向一个已存在的元素前面追加数据</li><li>{@link Memcached::prependByKey} — Prepend data to an existing item on a specific server</li><li>{@link Memcached::quit} — 关闭所有打开的链接。</li><li>{@link Memcached::replace} — 替换已存在key下的元素</li><li>{@link Memcached::replaceByKey} — Replace the item under an existing key on a specific server</li><li>{@link Memcached::resetServerList} — Clears all servers from the server list</li><li>{@link Memcached::set} — 存储一个元素</li><li>{@link Memcached::setByKey} — Store an item on a specific server</li><li>{@link Memcached::setMulti} — 存储多个元素</li><li>{@link Memcached::setMultiByKey} — Store multiple items on a specific server</li><li>{@link Memcached::setOption} — 设置一个memcached选项</li><li>{@link Memcached::setOptions} — Set Memcached options</li><li>{@link Memcached::setSaslAuthData} — Set the credentials to use for authentication</li><li>{@link Memcached::touch} — Set a new expiration on an item</li><li>{@link Memcached::touchByKey} — Set a new expiration on an item on a specific server</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.memcached.php">Memcached</a></div></div>
*/
class Memcached  {

	/**
	 * <p>Enables or disables payload compression. When enabled,
	 * item values longer than a certain threshold (currently 100 bytes) will be
	 * compressed during storage and decompressed during retrieval
	 * transparently.</p>
	 * <p>Type: boolean, default: <b>TRUE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_COMPRESSION = -1001;
	const OPT_COMPRESSION_TYPE = -1004;

	/**
	 * <p>This can be used to create a "domain" for your item keys. The value
	 * specified here will be prefixed to each of the keys. It cannot be
	 * longer than 128 characters and will reduce the
	 * maximum available key size. The prefix is applied only to the item keys,
	 * not to the server keys.</p>
	 * <p>Type: string, default: "".</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_PREFIX_KEY = -1002;

	/**
	 * <p>
	 * Specifies the serializer to use for serializing non-scalar values.
	 * The valid serializers are <b>Memcached::SERIALIZER_PHP</b>
	 * or <b>Memcached::SERIALIZER_IGBINARY</b>. The latter is
	 * supported only when memcached is configured with
	 * --enable-memcached-igbinary option and the
	 * igbinary extension is loaded.
	 * </p>
	 * <p>Type: integer, default: <b>Memcached::SERIALIZER_PHP</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_SERIALIZER = -1003;

	/**
	 * <p>Indicates whether igbinary serializer support is available.</p>
	 * <p>Type: boolean.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HAVE_IGBINARY = 0;

	/**
	 * <p>Indicates whether JSON serializer support is available.</p>
	 * <p>Type: boolean.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HAVE_JSON = 0;
	const HAVE_SESSION = 1;
	const HAVE_SASL = 0;

	/**
	 * <p>Specifies the hashing algorithm used for the item keys. The valid
	 * values are supplied via <b>Memcached::HASH_*</b> constants.
	 * Each hash algorithm has its advantages and its disadvantages. Go with the
	 * default if you don't know or don't care.</p>
	 * <p>Type: integer, default: <b>Memcached::HASH_DEFAULT</b></p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_HASH = 2;

	/**
	 * <p>The default (Jenkins one-at-a-time) item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_DEFAULT = 0;

	/**
	 * <p>MD5 item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_MD5 = 1;

	/**
	 * <p>CRC item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_CRC = 2;

	/**
	 * <p>FNV1_64 item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_FNV1_64 = 3;

	/**
	 * <p>FNV1_64A item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_FNV1A_64 = 4;

	/**
	 * <p>FNV1_32 item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_FNV1_32 = 5;

	/**
	 * <p>FNV1_32A item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_FNV1A_32 = 6;

	/**
	 * <p>Hsieh item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_HSIEH = 7;

	/**
	 * <p>Murmur item key hashing algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const HASH_MURMUR = 8;

	/**
	 * <p>Specifies the method of distributing item keys to the servers.
	 * Currently supported methods are modulo and consistent hashing. Consistent
	 * hashing delivers better distribution and allows servers to be added to
	 * the cluster with minimal cache losses.</p>
	 * <p>Type: integer, default: <b>Memcached::DISTRIBUTION_MODULA.</b></p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_DISTRIBUTION = 9;

	/**
	 * <p>Modulo-based key distribution algorithm.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const DISTRIBUTION_MODULA = 0;

	/**
	 * <p>Consistent hashing key distribution algorithm (based on libketama).</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const DISTRIBUTION_CONSISTENT = 1;
	const DISTRIBUTION_VIRTUAL_BUCKET = 6;

	/**
	 * <p>Enables or disables compatibility with libketama-like behavior. When
	 * enabled, the item key hashing algorithm is set to MD5 and distribution is
	 * set to be weighted consistent hashing distribution. This is useful
	 * because other libketama-based clients (Python, Ruby, etc.) with the same
	 * server configuration will be able to access the keys transparently.
	 * </p>
	 * <p>
	 * It is highly recommended to enable this option if you want to use
	 * consistent hashing, and it may be enabled by default in future
	 * releases.
	 * </p>
	 * <p>Type: boolean, default: <b>FALSE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_LIBKETAMA_COMPATIBLE = 16;
	const OPT_LIBKETAMA_HASH = 17;
	const OPT_TCP_KEEPALIVE = 32;

	/**
	 * <p>Enables or disables buffered I/O. Enabling buffered I/O causes
	 * storage commands to "buffer" instead of being sent. Any action that
	 * retrieves data causes this buffer to be sent to the remote connection.
	 * Quitting the connection or closing down the connection will also cause
	 * the buffered data to be pushed to the remote connection.</p>
	 * <p>Type: boolean, default: <b>FALSE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_BUFFER_WRITES = 10;

	/**
	 * <p>Enable the use of the binary protocol. Please note that you cannot
	 * toggle this option on an open connection.</p>
	 * <p>Type: boolean, default: <b>FALSE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_BINARY_PROTOCOL = 18;

	/**
	 * <p>Enables or disables asynchronous I/O. This is the fastest transport
	 * available for storage functions.</p>
	 * <p>Type: boolean, default: <b>FALSE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_NO_BLOCK = 0;

	/**
	 * <p>Enables or disables the no-delay feature for connecting sockets (may
	 * be faster in some environments).</p>
	 * <p>Type: boolean, default: <b>FALSE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_TCP_NODELAY = 1;

	/**
	 * <p>The maximum socket send buffer in bytes.</p>
	 * <p>Type: integer, default: varies by platform/kernel
	 * configuration.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_SOCKET_SEND_SIZE = 4;

	/**
	 * <p>The maximum socket receive buffer in bytes.</p>
	 * <p>Type: integer, default: varies by platform/kernel
	 * configuration.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_SOCKET_RECV_SIZE = 5;

	/**
	 * <p>In non-blocking mode this set the value of the timeout during socket
	 * connection, in milliseconds.</p>
	 * <p>Type: integer, default: 1000.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_CONNECT_TIMEOUT = 14;

	/**
	 * <p>The amount of time, in seconds, to wait until retrying a failed
	 * connection attempt.</p>
	 * <p>Type: integer, default: 0.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_RETRY_TIMEOUT = 15;

	/**
	 * <p>Socket sending timeout, in microseconds. In cases where you cannot
	 * use non-blocking I/O this will allow you to still have timeouts on the
	 * sending of data.</p>
	 * <p>Type: integer, default: 0.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_SEND_TIMEOUT = 19;

	/**
	 * <p>Socket reading timeout, in microseconds. In cases where you cannot
	 * use non-blocking I/O this will allow you to still have timeouts on the
	 * reading of data.</p>
	 * <p>Type: integer, default: 0.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_RECV_TIMEOUT = 20;

	/**
	 * <p>Timeout for connection polling, in milliseconds.</p>
	 * <p>Type: integer, default: 1000.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_POLL_TIMEOUT = 8;

	/**
	 * <p>Enables or disables caching of DNS lookups.</p>
	 * <p>Type: boolean, default: <b>FALSE</b>.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_CACHE_LOOKUPS = 6;

	/**
	 * <p>Specifies the failure limit for server connection attempts. The
	 * server will be removed after this many continuous connection
	 * failures.</p>
	 * <p>Type: integer, default: 0.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const OPT_SERVER_FAILURE_LIMIT = 21;
	const OPT_AUTO_EJECT_HOSTS = 28;
	const OPT_HASH_WITH_PREFIX_KEY = 25;
	const OPT_NOREPLY = 26;
	const OPT_SORT_HOSTS = 12;
	const OPT_VERIFY_KEY = 13;
	const OPT_USE_UDP = 27;
	const OPT_NUMBER_OF_REPLICAS = 29;
	const OPT_RANDOMIZE_REPLICA_READ = 30;
	const OPT_REMOVE_FAILED_SERVERS = 35;

	/**
	 * <p>The operation was successful.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_SUCCESS = 0;

	/**
	 * <p>The operation failed in some fashion.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_FAILURE = 1;

	/**
	 * <p>DNS lookup failed.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_HOST_LOOKUP_FAILURE = 2;

	/**
	 * <p>Failed to read network data.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_UNKNOWN_READ_FAILURE = 7;

	/**
	 * <p>Bad command in memcached protocol.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_PROTOCOL_ERROR = 8;

	/**
	 * <p>Error on the client side.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_CLIENT_ERROR = 9;

	/**
	 * <p>Error on the server side.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_SERVER_ERROR = 10;

	/**
	 * <p>Failed to write network data.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_WRITE_FAILURE = 5;

	/**
	 * <p>Failed to do compare-and-swap: item you are trying to store has been
	 * modified since you last fetched it.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_DATA_EXISTS = 12;

	/**
	 * <p>Item was not stored: but not because of an error. This normally
	 * means that either the condition for an "add" or a "replace" command
	 * wasn't met, or that the item is in a delete queue.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_NOTSTORED = 14;

	/**
	 * <p>Item with this key was not found (with "get" operation or "cas"
	 * operations).</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_NOTFOUND = 16;

	/**
	 * <p>Partial network data read error.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_PARTIAL_READ = 18;

	/**
	 * <p>Some errors occurred during multi-get.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_SOME_ERRORS = 19;

	/**
	 * <p>Server list is empty.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_NO_SERVERS = 20;

	/**
	 * <p>End of result set.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_END = 21;

	/**
	 * <p>System error.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_ERRNO = 26;

	/**
	 * <p>The operation was buffered.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_BUFFERED = 32;

	/**
	 * <p>The operation timed out.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_TIMEOUT = 31;

	/**
	 * <p>Bad key.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_BAD_KEY_PROVIDED = 33;
	const RES_STORED = 15;
	const RES_DELETED = 22;
	const RES_STAT = 24;
	const RES_ITEM = 25;
	const RES_NOT_SUPPORTED = 28;
	const RES_FETCH_NOTFINISHED = 30;
	const RES_SERVER_MARKED_DEAD = 35;
	const RES_UNKNOWN_STAT_KEY = 36;
	const RES_INVALID_HOST_PROTOCOL = 34;
	const RES_MEMORY_ALLOCATION_FAILURE = 17;
	const RES_E2BIG = 37;
	const RES_KEY_TOO_BIG = 39;
	const RES_SERVER_TEMPORARILY_DISABLED = 47;
	const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;
	const RES_AUTH_PROBLEM = 40;
	const RES_AUTH_FAILURE = 41;
	const RES_AUTH_CONTINUE = 42;
	
	
	/**
	 * <p>Failed to create network socket.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;

	/**
	 * <p>Payload failure: could not compress/decompress or serialize/unserialize the value.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const RES_PAYLOAD_FAILURE = -1001;

	/**
	 * <p>The default PHP serializer.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const SERIALIZER_PHP = 1;

	/**
	 * <p>The igbinary serializer.
	 * Instead of textual representation it stores PHP data structures in a
	 * compact binary form, resulting in space and time gains.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const SERIALIZER_IGBINARY = 2;

	/**
	 * <p>The JSON serializer. Requires PHP 5.2.10+.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const SERIALIZER_JSON = 3;
	const SERIALIZER_JSON_ARRAY = 4;
	const COMPRESSION_FASTLZ = 2;
	const COMPRESSION_ZLIB = 1;

	/**
	 * <p>A flag for <b>Memcached::getMulti</b> and
	 * <b>Memcached::getMultiByKey</b> to ensure that the keys are
	 * returned in the same order as they were requested in. Non-existing keys
	 * get a default value of NULL.</p>
	 * @link http://php.net/manual/en/memcached.constants.php
	 */
	const GET_PRESERVE_ORDER = 1;
	const GET_ERROR_RETURN_VALUE = false;


	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Create a Memcached instance
	 * @link http://php.net/manual/en/memcached.construct.php
	 * @param $persistent_id [optional]
	 * @param $callback [optional]
	 */
	public function __construct ($persistent_id, $callback) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Return the result code of the last operation
	 * @link http://php.net/manual/en/memcached.getresultcode.php
	 * @return int Result code of the last Memcached operation.
	 */
	public function getResultCode () {}

	/**
	 * (PECL memcached &gt;= 1.0.0)<br/>
	 * Return the message describing the result of the last operation
	 * @link http://php.net/manual/en/memcached.getresultmessage.php
	 * @return string Message describing the result of the last Memcached operation.
	 */
	public function getResultMessage () {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Retrieve an item
	 * @link http://php.net/manual/en/memcached.get.php
	 * @param string $key <p>
	 * The key of the item to retrieve.
	 * </p>
	 * @param callable $cache_cb [optional] <p>
	 * Read-through caching callback or <b>NULL</b>.
	 * </p>
	 * @param float $cas_token [optional] <p>
	 * The variable to store the CAS token in.
	 * </p>
	 * @return mixed the value stored in the cache or <b>FALSE</b> otherwise.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTFOUND</b> if the key does not exist.
	 */
	public function get ($key, callable $cache_cb = null, &$cas_token = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Retrieve an item from a specific server
	 * @link http://php.net/manual/en/memcached.getbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key of the item to fetch.
	 * </p>
	 * @param callable $cache_cb [optional] <p>
	 * Read-through caching callback or <b>NULL</b>
	 * </p>
	 * @param float $cas_token [optional] <p>
	 * The variable to store the CAS token in.
	 * </p>
	 * @return mixed the value stored in the cache or <b>FALSE</b> otherwise.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTFOUND</b> if the key does not exist.
	 */
	public function getByKey ($server_key, $key, callable $cache_cb = null, &$cas_token = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Retrieve multiple items
	 * @link http://php.net/manual/en/memcached.getmulti.php
	 * @param array $keys <p>
	 * Array of keys to retrieve.
	 * </p>
	 * @param array $cas_tokens [optional] <p>
	 * The variable to store the CAS tokens for the found items.
	 * </p>
	 * @param int $flags [optional] <p>
	 * The flags for the get operation.
	 * </p>
	 * @return mixed the array of found items or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function getMulti (array $keys, array &$cas_tokens = null, $flags = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Retrieve multiple items from a specific server
	 * @link http://php.net/manual/en/memcached.getmultibykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param array $keys <p>
	 * Array of keys to retrieve.
	 * </p>
	 * @param string $cas_tokens [optional] <p>
	 * The variable to store the CAS tokens for the found items.
	 * </p>
	 * @param int $flags [optional] <p>
	 * The flags for the get operation.
	 * </p>
	 * @return array the array of found items or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function getMultiByKey ($server_key, array $keys, &$cas_tokens = null, $flags = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Request multiple items
	 * @link http://php.net/manual/en/memcached.getdelayed.php
	 * @param array $keys <p>
	 * Array of keys to request.
	 * </p>
	 * @param bool $with_cas [optional] <p>
	 * Whether to request CAS token values also.
	 * </p>
	 * @param callable $value_cb [optional] <p>
	 * The result callback or <b>NULL</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function getDelayed (array $keys, $with_cas = null, callable $value_cb = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Request multiple items from a specific server
	 * @link http://php.net/manual/en/memcached.getdelayedbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param array $keys <p>
	 * Array of keys to request.
	 * </p>
	 * @param bool $with_cas [optional] <p>
	 * Whether to request CAS token values also.
	 * </p>
	 * @param callable $value_cb [optional] <p>
	 * The result callback or <b>NULL</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function getDelayedByKey ($server_key, array $keys, $with_cas = null, callable $value_cb = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Fetch the next result
	 * @link http://php.net/manual/en/memcached.fetch.php
	 * @return array the next result or <b>FALSE</b> otherwise.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_END</b> if result set is exhausted.
	 */
	public function fetch () {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Fetch all the remaining results
	 * @link http://php.net/manual/en/memcached.fetchall.php
	 * @return array the results or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function fetchAll () {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Store an item
	 * @link http://php.net/manual/en/memcached.set.php
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function set ($key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Store an item on a specific server
	 * @link http://php.net/manual/en/memcached.setbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function setByKey ($server_key, $key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Set a new expiration on an item
	 * @link http://php.net/manual/en/memcached.touch.php
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param int $expiration <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
/**
*<div id="function.touch" class="refentry">  <div class="refnamediv">   <h1 class="refname">touch</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">touch</span> &mdash; <span class="dc-title">设定文件的访问和修改时间</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.touch-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>touch</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$time</span><span class="initializer"> = time()</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$atime</span></span>   ]] )</div>    <p class="para rdfs-comment">    尝试将由 <span class="parameter" style="color:#2EACF9">filename</span>    给出的文件的访问和修改时间设定为给出的 <span class="parameter" style="color:#2EACF9">time</span>。    注意访问时间总是会被修改的，不论有几个参数。   </p>   <p class="para">    如果文件不存在，则会被创建。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.touch-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">filename</span></dt>       <dd>        <p class="para">        要设定的文件名。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">time</span></dt>       <dd>        <p class="para">        要设定的时间。如果没有提供参数 <span class="parameter" style="color:#2EACF9">time</span> 则会使用当前系统的时间。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">atime</span></dt>       <dd>        <p class="para">        如果给出了这个参数，则给定文件的访问时间会被设为    <span class="parameter" style="color:#2EACF9">atime</span>，否则会设置 为<span class="parameter" style="color:#2EACF9">time</span>。如果没有给出这两个参数，则使用当前系统时间。       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.touch-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.touch-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.3.0</td>        <td>         能够修改 Windows 下目录的最后修改时间。        </td>       </tr>       </tbody>         </table>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.touch-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2845">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">touch()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">if&nbsp;(</span><span style="color: #9876AA">touch</span><span style="color: #007700">(</span><span style="color: #9876AA">$filename</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$filename&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;modification&nbsp;time&nbsp;has&nbsp;been&nbsp;changed&nbsp;to&nbsp;present&nbsp;time'</span><span style="color: #007700">;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Sorry,&nbsp;could&nbsp;not&nbsp;change&nbsp;modification&nbsp;time&nbsp;of&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$filename</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>   <p class="para">    <div class="example" id="example-2846">     <p><strong>Example #2 使用 <span class="parameter" style="color:#2EACF9">time</span> 参数的 <span class="function"><strong style="color:#CC7832">touch()</strong></span></strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;This&nbsp;is&nbsp;the&nbsp;touch&nbsp;time,&nbsp;we'll&nbsp;set&nbsp;it&nbsp;to&nbsp;one&nbsp;hour&nbsp;in&nbsp;the&nbsp;past.<br /></span><span style="color: #9876AA">$time&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">time</span><span style="color: #007700">()&nbsp;-&nbsp;</span><span style="color: #9876AA">3600</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Touch&nbsp;the&nbsp;file<br /></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">touch</span><span style="color: #007700">(</span><span style="color: #DD0000">'some_file.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$time</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Whoops,&nbsp;something&nbsp;went&nbsp;wrong...'</span><span style="color: #007700">;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Touched&nbsp;file&nbsp;with&nbsp;success'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.touch-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <p class="para">注意：不同文件系统对时间的判断方法可能是不相同的。</p></p></blockquote>   <div class="warning"><strong class="warning">Warning</strong>    <p class="para">     在 PHP 5.3.0 之前无法修改 Windows 下目录的最后修改时间。    </p>   </div>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function touch ($key, $expiration) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Set a new expiration on an item on a specific server
	 * @link http://php.net/manual/en/memcached.touchbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param int $expiration <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function touchByKey ($server_key, $key, $expiration) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Store multiple items
	 * @link http://php.net/manual/en/memcached.setmulti.php
	 * @param array $items <p>
	 * An array of key/value pairs to store on the server.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function setMulti (array $items, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Store multiple items on a specific server
	 * @link http://php.net/manual/en/memcached.setmultibykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param array $items <p>
	 * An array of key/value pairs to store on the server.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function setMultiByKey ($server_key, array $items, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Compare and swap an item
	 * @link http://php.net/manual/en/memcached.cas.php
	 * @param float $cas_token <p>
	 * Unique value associated with the existing item. Generated by memcache.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_DATA_EXISTS</b> if the item you are trying
	 * to store has been modified since you last fetched it.
	 */
	public function cas ($cas_token, $key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Compare and swap an item on a specific server
	 * @link http://php.net/manual/en/memcached.casbykey.php
	 * @param float $cas_token <p>
	 * Unique value associated with the existing item. Generated by memcache.
	 * </p>
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_DATA_EXISTS</b> if the item you are trying
	 * to store has been modified since you last fetched it.
	 */
	public function casByKey ($cas_token, $server_key, $key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Add an item under a new key
	 * @link http://php.net/manual/en/memcached.add.php
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key already exists.
	 */
	public function add ($key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Add an item under a new key on a specific server
	 * @link http://php.net/manual/en/memcached.addbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key already exists.
	 */
	public function addByKey ($server_key, $key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Append data to an existing item
	 * @link http://php.net/manual/en/memcached.append.php
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param string $value <p>
	 * The string to append.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key does not exist.
	 */
	public function append ($key, $value) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Append data to an existing item on a specific server
	 * @link http://php.net/manual/en/memcached.appendbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param string $value <p>
	 * The string to append.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key does not exist.
	 */
	public function appendByKey ($server_key, $key, $value) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Prepend data to an existing item
	 * @link http://php.net/manual/en/memcached.prepend.php
	 * @param string $key <p>
	 * The key of the item to prepend the data to.
	 * </p>
	 * @param string $value <p>
	 * The string to prepend.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key does not exist.
	 */
	public function prepend ($key, $value) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Prepend data to an existing item on a specific server
	 * @link http://php.net/manual/en/memcached.prependbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key of the item to prepend the data to.
	 * </p>
	 * @param string $value <p>
	 * The string to prepend.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key does not exist.
	 */
	public function prependByKey ($server_key, $key, $value) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Replace the item under an existing key
	 * @link http://php.net/manual/en/memcached.replace.php
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key does not exist.
	 */
	public function replace ($key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Replace the item under an existing key on a specific server
	 * @link http://php.net/manual/en/memcached.replacebykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key under which to store the value.
	 * </p>
	 * @param mixed $value <p>
	 * The value to store.
	 * </p>
	 * @param int $expiration [optional] <p>
	 * The expiration time, defaults to 0. See Expiration Times for more info.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTSTORED</b> if the key does not exist.
	 */
	public function replaceByKey ($server_key, $key, $value, $expiration = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Delete an item
	 * @link http://php.net/manual/en/memcached.delete.php
	 * @param string $key <p>
	 * The key to be deleted.
	 * </p>
	 * @param int $time [optional] <p>
	 * The amount of time the server will wait to delete the item.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTFOUND</b> if the key does not exist.
	 */
/**
*<div id="function.delete" class="refentry">  <div class="refnamediv">   <h1 class="refname">delete</h1>   <p class="verinfo">(None)</p><p class="refpurpose"><span class="refname">delete</span> &mdash; <span class="dc-title">参见 <span class="function">{@link unlink()}</span> 或 <span class="function">{@link unset()}</span></span></p>   </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.delete-description">   <h3 class="title">说明</h3>   <p class="para">    这是个虚构的手册条目来给那些本来是找 <span class="function">{@link unlink()}</span> 或者    <span class="function">{@link unset()}</span> 的人提供一些有用的信息。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.delete-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link unlink()} - 删除文件</span></li>     <li class="member"><span class="function">{@link unset()} - 释放给定的变量</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function delete ($key, $time = 0) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Delete multiple items
	 * @link http://php.net/manual/en/memcached.deletemulti.php
	 * @param array $keys <p>
	 * The keys to be deleted.
	 * </p>
	 * @param int $time [optional] <p>
	 * The amount of time the server will wait to delete the items.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTFOUND</b> if the key does not exist.
	 */
	public function deleteMulti (array $keys, $time = 0) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Delete an item from a specific server
	 * @link http://php.net/manual/en/memcached.deletebykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key to be deleted.
	 * </p>
	 * @param int $time [optional] <p>
	 * The amount of time the server will wait to delete the item.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTFOUND</b> if the key does not exist.
	 */
	public function deleteByKey ($server_key, $key, $time = 0) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Delete multiple items from a specific server
	 * @link http://php.net/manual/en/memcached.deletemultibykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param array $keys <p>
	 * The keys to be deleted.
	 * </p>
	 * @param int $time [optional] <p>
	 * The amount of time the server will wait to delete the items.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * The <b>Memcached::getResultCode</b> will return
	 * <b>Memcached::RES_NOTFOUND</b> if the key does not exist.
	 */
	public function deleteMultiByKey ($server_key, array $keys, $time = 0) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Increment numeric item's value
	 * @link http://php.net/manual/en/memcached.increment.php
	 * @param string $key <p>
	 * The key of the item to increment.
	 * </p>
	 * @param int $offset [optional] <p>
	 * The amount by which to increment the item's value.
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * The value to set the item to if it doesn't currently exist.
	 * </p>
	 * @param int $expiry [optional] <p>
	 * The expiry time to set on the item.
	 * </p>
	 * @return int new item's value on success or <b>FALSE</b> on failure.
	 */
	public function increment ($key, $offset = 1, $initial_value = 0, $expiry = 0) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Decrement numeric item's value
	 * @link http://php.net/manual/en/memcached.decrement.php
	 * @param string $key <p>
	 * The key of the item to decrement.
	 * </p>
	 * @param int $offset [optional] <p>
	 * The amount by which to decrement the item's value.
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * The value to set the item to if it doesn't currently exist.
	 * </p>
	 * @param int $expiry [optional] <p>
	 * The expiry time to set on the item.
	 * </p>
	 * @return int item's new value on success or <b>FALSE</b> on failure.
	 */
	public function decrement ($key, $offset = 1, $initial_value = 0, $expiry = 0) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Increment numeric item's value, stored on a specific server
	 * @link http://php.net/manual/en/memcached.incrementbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key of the item to increment.
	 * </p>
	 * @param int $offset [optional] <p>
	 * The amount by which to increment the item's value.
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * The value to set the item to if it doesn't currently exist.
	 * </p>
	 * @param int $expiry [optional] <p>
	 * The expiry time to set on the item.
	 * </p>
	 * @return int new item's value on success or <b>FALSE</b> on failure.
	 */
	public function incrementByKey ($server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Decrement numeric item's value, stored on a specific server
	 * @link http://php.net/manual/en/memcached.decrementbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @param string $key <p>
	 * The key of the item to decrement.
	 * </p>
	 * @param int $offset [optional] <p>
	 * The amount by which to decrement the item's value.
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * The value to set the item to if it doesn't currently exist.
	 * </p>
	 * @param int $expiry [optional] <p>
	 * The expiry time to set on the item.
	 * </p>
	 * @return int item's new value on success or <b>FALSE</b> on failure.
	 */
	public function decrementByKey ($server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Add a server to the server pool
	 * @link http://php.net/manual/en/memcached.addserver.php
	 * @param string $host <p>
	 * The hostname of the memcache server. If the hostname is invalid, data-related
	 * operations will set
	 * <b>Memcached::RES_HOST_LOOKUP_FAILURE</b> result code.
	 * </p>
	 * @param int $port <p>
	 * The port on which memcache is running. Usually, this is
	 * 11211.
	 * </p>
	 * @param int $weight [optional] <p>
	 * The weight of the server relative to the total weight of all the
	 * servers in the pool. This controls the probability of the server being
	 * selected for operations. This is used only with consistent distribution
	 * option and usually corresponds to the amount of memory available to
	 * memcache on that server.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addServer ($host, $port, $weight = 0) {}

	/**
	 * (PECL memcached &gt;= 0.1.1)<br/>
	 * Add multiple servers to the server pool
	 * @link http://php.net/manual/en/memcached.addservers.php
	 * @param array $servers
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function addServers (array $servers) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Get the list of the servers in the pool
	 * @link http://php.net/manual/en/memcached.getserverlist.php
	 * @return array The list of all servers in the server pool.
	 */
	public function getServerList () {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Map a key to a server
	 * @link http://php.net/manual/en/memcached.getserverbykey.php
	 * @param string $server_key <p>
	 * The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
	 * </p>
	 * @return array an array containing three keys of host,
	 * port, and weight on success or <b>FALSE</b>
	 * on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
	public function getServerByKey ($server_key) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Clears all servers from the server list
	 * @link http://php.net/manual/en/memcached.resetserverlist.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function resetServerList () {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Close any open connections
	 * @link http://php.net/manual/en/memcached.quit.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function quit () {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Get server pool statistics
	 * @link http://php.net/manual/en/memcached.getstats.php
	 * @return array Array of server statistics, one entry per server.
	 */
	public function getStats () {}

	/**
	 * (PECL memcached &gt;= 0.1.5)<br/>
	 * Get server pool version info
	 * @link http://php.net/manual/en/memcached.getversion.php
	 * @return array Array of server versions, one entry per server.
	 */
	public function getVersion () {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Gets the keys stored on all the servers
	 * @link http://php.net/manual/en/memcached.getallkeys.php
	 * @return array the keys stored on all the servers on success or <b>FALSE</b> on failure.
	 */
	public function getAllKeys () {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Invalidate all items in the cache
	 * @link http://php.net/manual/en/memcached.flush.php
	 * @param int $delay [optional] <p>
	 * Numer of seconds to wait before invalidating the items.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Use <b>Memcached::getResultCode</b> if necessary.
	 */
/**
*<div id="function.flush" class="refentry">    <div class="refnamediv">     <h1 class="refname">flush</h1>      <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">flush</span> &mdash; <span class="dc-title">刷新输出缓冲</span></p>     </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 unknown-seealsp" id="refsect1-function.flush-unknown-seealsp">     <h3 class="title">说明</h3>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">       <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span> <span class="methodname" style="color:#CC7832"><strong>flush</strong></span>        ( <span class="methodparam">void</span>       )</div>      <p class="simpara">      刷新PHP程序的缓冲，而不论PHP执行在何种情况下（CGI ，web服务器等等）。该函数将当前为止程序的所有输出发送到用户的浏览器。     </p>     <p class="para">      <span class="function"><strong style="color:#CC7832">flush()</strong></span> 函数不会对服务器或客户端浏览器的缓存模式产生影响。因此，必须同时使用 <span class="function">{@link ob_flush()}</span> 和<span class="function"><strong style="color:#CC7832">flush()</strong></span> 函数来刷新输出缓冲。     </p>     <p class="para">      个别web服务器程序，特别是Win32下的web服务器程序，在发送结果到浏览器之前，仍然会缓存脚本的输出，直到程序结束为止。     </p>     <p class="para">      有些Apache的模块，比如mod_gzip，可能自己进行输出缓存，这将导致<span class="function"><strong style="color:#CC7832">flush()</strong></span>函数产生的结果不会立即被发送到客户端浏览器。     </p>     <p class="para">      甚至浏览器也会在显示之前，缓存接收到的内容。例如 Netscape 浏览器会在接受到换行或 html 标记的开头之前缓存内容，并且在接受到 &lt;/table&gt; 标记之前，不会显示出整个表格。     </p>     <p class="para">      一些版本的 Microsoft Internet Explorer 只有当接受到的256个字节以后才开始显示该页面，所以必须发送一些额外的空格来让这些浏览器显示页面内容。     </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.outcontrol.php">Output Control 函数</a></div></div>
*/
	public function flush ($delay = 0) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Retrieve a Memcached option value
	 * @link http://php.net/manual/en/memcached.getoption.php
	 * @param int $option <p>
	 * One of the Memcached::OPT_* constants.
	 * </p>
	 * @return mixed the value of the requested option, or <b>FALSE</b> on
	 * error.
	 */
	public function getOption ($option) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Set a Memcached option
	 * @link http://php.net/manual/en/memcached.setoption.php
	 * @param int $option
	 * @param mixed $value
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setOption ($option, $value) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Set Memcached options
	 * @link http://php.net/manual/en/memcached.setoptions.php
	 * @param array $options <p>
	 * An associative array of options where the key is the option to set and
	 * the value is the new value for the option.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setOptions (array $options) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Check if a persitent connection to memcache is being used
	 * @link http://php.net/manual/en/memcached.ispersistent.php
	 * @return bool true if Memcache instance uses a persistent connection, false otherwise.
	 */
	public function isPersistent () {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Check if the instance was recently created
	 * @link http://php.net/manual/en/memcached.ispristine.php
	 * @return bool the true if instance is recently created, false otherwise.
	 */
	public function isPristine () {}

}

/**
 * @link http://php.net/manual/en/class.memcachedexception.php
 */
class MemcachedException extends RuntimeException  {

}
// End of memcached v.2.1.0
?>
