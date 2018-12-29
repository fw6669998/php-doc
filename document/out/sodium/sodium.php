<?php

const SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES = 32;
const SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES = 0;
const SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES = 12;
const SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES = 16;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES = 32;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES = 0;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES = 8;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES = 16;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES = 32;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES = 0;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES = 12;
const SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES = 16;
const SODIUM_CRYPTO_AUTH_BYTES = 32;
const SODIUM_CRYPTO_AUTH_KEYBYTES = 32;
const SODIUM_CRYPTO_BOX_SEALBYTES = 16;
const SODIUM_CRYPTO_BOX_SECRETKEYBYTES = 32;
const SODIUM_CRYPTO_BOX_PUBLICKEYBYTES = 32;
const SODIUM_CRYPTO_BOX_KEYPAIRBYTES = 64;
const SODIUM_CRYPTO_BOX_MACBYTES = 16;
const SODIUM_CRYPTO_BOX_NONCEBYTES = 24;
const SODIUM_CRYPTO_BOX_SEEDBYTES = 32;
const SODIUM_CRYPTO_KX_BYTES = 32;
const SODIUM_CRYPTO_KX_PUBLICKEYBYTES = 32;
const SODIUM_CRYPTO_KX_SECRETKEYBYTES = 32;
const SODIUM_CRYPTO_GENERICHASH_BYTES = 32;
const SODIUM_CRYPTO_GENERICHASH_BYTES_MIN = 16;
const SODIUM_CRYPTO_GENERICHASH_BYTES_MAX = 64;
const SODIUM_CRYPTO_GENERICHASH_KEYBYTES = 32;
const SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN = 16;
const SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX = 64;
const SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES = 32;
const SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX = '$7$';
const SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE = 534288;
const SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE = 16777216;
const SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE = 33554432;
const SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE = 1073741824;
const SODIUM_CRYPTO_SCALARMULT_BYTES = 32;
const SODIUM_CRYPTO_SCALARMULT_SCALARBYTES = 32;
const SODIUM_CRYPTO_SHORTHASH_BYTES = 8;
const SODIUM_CRYPTO_SHORTHASH_KEYBYTES = 16;
const SODIUM_CRYPTO_SECRETBOX_KEYBYTES = 32;
const SODIUM_CRYPTO_SECRETBOX_MACBYTES = 16;
const SODIUM_CRYPTO_SECRETBOX_NONCEBYTES = 24;
const SODIUM_CRYPTO_SIGN_BYTES = 64;
const SODIUM_CRYPTO_SIGN_SEEDBYTES = 32;
const SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES = 32;
const SODIUM_CRYPTO_SIGN_SECRETKEYBYTES = 64;
const SODIUM_CRYPTO_SIGN_KEYPAIRBYTES = 96;
const SODIUM_CRYPTO_STREAM_KEYBYTES = 32;
const SODIUM_CRYPTO_STREAM_NONCEBYTES = 24;
const SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE = 4;
const SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE = 33554432;
const SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE = 6;
const SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE = 134217728;
const SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE = 8;
const SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE = 536870912;
const SODIUM_LIBRARY_VERSION="1.0.11";
const SODIUM_LIBRARY_MAJOR_VERSION = 9;
const SODIUM_LIBRARY_MINOR_VERSION = 3;
const SODIUM_CRYPTO_KDF_BYTES_MIN = 16;
const SODIUM_CRYPTO_KDF_BYTES_MAX = 64;
const SODIUM_CRYPTO_KDF_CONTEXTBYTES = 8;
const SODIUM_CRYPTO_KDF_KEYBYTES = 32;
const SODIUM_CRYPTO_KX_SEEDBYTES = 32;
const SODIUM_CRYPTO_KX_SESSIONKEYBYTES = 32;
const SODIUM_CRYPTO_KX_KEYPAIRBYTES = 64;
const SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13 = 1;
const SODIUM_CRYPTO_PWHASH_ALG_DEFAULT = 1;
const SODIUM_CRYPTO_PWHASH_SALTBYTES = 16;
const SODIUM_CRYPTO_PWHASH_STRPREFIX = '$argon2i$';

/**
*<div id="function.sodium-crypto-aead-aes256gcm-is-available" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_aes256gcm_is_available</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_aes256gcm_is_available</span> &mdash; <span class="dc-title">Check if hardware supports AES256-GCM</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-aes256gcm-is-available-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sodium_crypto_aead_aes256gcm_is_available</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-aes256gcm-is-available-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-aes256gcm-is-available-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return bool*/
function sodium_crypto_aead_aes256gcm_is_available(): bool
{
    return false;
}

/**
*<div id="function.sodium-crypto-aead-aes256gcm-decrypt" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_aes256gcm_decrypt</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_aes256gcm_decrypt</span> &mdash; <span class="dc-title">Decrypt in combined mode with precalculation</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-aes256gcm-decrypt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_aes256gcm_decrypt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$ciphertext</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$ad</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-aes256gcm-decrypt-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">ciphertext</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">ad</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-aes256gcm-decrypt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_aead_aes256gcm_decrypt(
    string $ciphertext,
    string $ad,
    string $nonce,
    string $key
): string {
    unset($msg, $ad, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-aead-aes256gcm-encrypt" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_aes256gcm_encrypt</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_aes256gcm_encrypt</span> &mdash; <span class="dc-title">Encrypt in combined mode with precalculation</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-aes256gcm-encrypt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_aes256gcm_encrypt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$ad</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-aes256gcm-encrypt-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">ad</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-aes256gcm-encrypt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_aead_aes256gcm_encrypt(
    string $msg,
    string $ad,
    string $nonce,
    string $key
): string {
    unset($msg, $ad, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-aead-chacha20poly1305-decrypt" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_chacha20poly1305_decrypt</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_chacha20poly1305_decrypt</span> &mdash; <span class="dc-title">Verify that the ciphertext includes a valid tag</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-decrypt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_chacha20poly1305_decrypt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$ciphertext</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$ad</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-decrypt-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">ciphertext</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">ad</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-decrypt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_aead_chacha20poly1305_decrypt(
    string $ciphertext,
    string $ad,
    string $nonce,
    string $key
): string {
    unset($ciphertext, $ad, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-aead-chacha20poly1305-encrypt" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_chacha20poly1305_encrypt</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_chacha20poly1305_encrypt</span> &mdash; <span class="dc-title">Encrypt a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-encrypt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_chacha20poly1305_encrypt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$ad</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-encrypt-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">ad</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-encrypt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_aead_chacha20poly1305_encrypt(
    string $msg,
    string $ad,
    string $nonce,
    string $key
): string {
    unset($msg, $ad, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_chacha20poly1305_ietf_decrypt</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_chacha20poly1305_ietf_decrypt</span> &mdash; <span class="dc-title">Verify that the ciphertext includes a valid tag</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_chacha20poly1305_ietf_decrypt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$ciphertext</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$ad</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">ciphertext</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">ad</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_aead_chacha20poly1305_ietf_decrypt(
    string $ciphertext,
    string $ad,
    string $nonce,
    string $key
): string {
    unset($ciphertext, $ad, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_chacha20poly1305_ietf_encrypt</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_chacha20poly1305_ietf_encrypt</span> &mdash; <span class="dc-title">Encrypt a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_chacha20poly1305_ietf_encrypt</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$ad</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">ad</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_aead_chacha20poly1305_ietf_encrypt(
    string $msg,
    string $ad,
    string $nonce,
    string $key
): string {
    unset($msg, $ad, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-auth" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_auth</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_auth</span> &mdash; <span class="dc-title">Compute a tag for the message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-auth-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_auth</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-auth-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-auth-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_auth(
    string $msg,
    string $key
): string {
    unset($msg, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-auth-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_auth_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_auth_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-auth-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_auth_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-auth-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-auth-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_auth_keygen(): string {}

/**
*<div id="function.sodium-crypto-kx-keypair" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kx_keypair</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kx_keypair</span> &mdash; <span class="dc-title">Creates a new sodium keypair</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kx-keypair-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_kx_keypair</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    Create a new sodium keypair consisting of the the secret key (32 bytes)    followed by the public key (32 bytes). The keys can be retrieved by calling    <span class="function">{@link sodium_crypto_kx_secretkey()}</span> and    <span class="function">{@link sodium_crypto_kx_publickey()}</span>, respectively.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kx-keypair-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kx-keypair-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the new keypair on success; throws an exception otherwise.   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.sodium-crypto-kx-keypair-examples">   <h3 class="title">范例</h3>   <div class="example" id="openssl_spki_export.example.keygen">    <p><strong>Example #1 <span class="function"><strong>sodium_crypto_kx_keypair()</strong></span> usage</strong></p>    <div class="example-contents"><p>      Create a new keypair and retrieve the secret and the public key from it.    </p></div>    <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$keypair&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">sodium_crypto_kx_keypair</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">$secret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">sodium_crypto_kx_secretkey</span><span style="color: #007700">(</span><span style="color: #9876AA">$keypair</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$public&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">sodium_crypto_kx_publickey</span><span style="color: #007700">(</span><span style="color: #9876AA">$keypair</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"secret:&nbsp;%s\npublic:&nbsp;%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">bin2hex</span><span style="color: #007700">(</span><span style="color: #9876AA">$secret</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">bin2hex</span><span style="color: #007700">(</span><span style="color: #9876AA">$public</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen"> <div class="cdata"><pre> secret: e7c5c918fdc40762e6000542c0118f4368ce8fd242b0e48c1e17202797a25daf public: d1f59fda8652caf40ed1a01d2b6f3802b60846986372cd8fa337b7c12c428b18 </pre></div>    </div>   </div>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_kx_keypair (): string {}

/**
 * @link http://php.net/manual/en/function.sodium-crypto-kx-publickey.php
 * @since 7.2
 * @param string $key
 * @return string
 */

/**
*<div id="function.sodium-crypto-kx-publickey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kx_publickey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kx_publickey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kx-publickey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_kx_publickey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kx-publickey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kx-publickey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_crypto_kx_publickey (string $key): string {}

/**
*<div id="function.sodium-crypto-kx-secretkey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kx_secretkey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kx_secretkey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kx-secretkey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_kx_secretkey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kx-secretkey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kx-secretkey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_kx_secretkey (string $key): string {}

/**
*<div id="function.sodium-crypto-kx-seed-keypair" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kx_seed_keypair</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kx_seed_keypair</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kx-seed-keypair-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_kx_seed_keypair</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$string</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kx-seed-keypair-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">string</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kx-seed-keypair-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_kx_seed_keypair (string $string): string {}

/**
*<div id="function.sodium-crypto-kx-server-session-keys" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kx_server_session_keys</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kx_server_session_keys</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kx-server-session-keys-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><strong>sodium_crypto_kx_server_session_keys</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$server_keypair</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$client_key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kx-server-session-keys-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">server_keypair</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">client_key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kx-server-session-keys-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return array*/
function sodium_crypto_kx_server_session_keys (string $server_keypair , string $client_key): array {}

/**
*<div id="function.sodium-crypto-generichash-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_generichash_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_generichash_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-generichash-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_generichash_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-generichash-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-generichash-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_generichash_keygen(): string {}


/**
*<div id="function.sodium-crypto-kx-client-session-keys" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kx_client_session_keys</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kx_client_session_keys</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kx-client-session-keys-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">array</span> <span class="methodname"><strong>sodium_crypto_kx_client_session_keys</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$client_keypair</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$server_key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kx-client-session-keys-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">client_keypair</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">server_key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kx-client-session-keys-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return array*/
function sodium_crypto_kx_client_session_keys (string $client_keypair, string $server_key): array {}

/**
*<div id="function.sodium-crypto-kdf-derive-from-key" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kdf_derive_from_key</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kdf_derive_from_key</span> &mdash; <span class="dc-title">Derive a subkey</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kdf-derive-from-key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_kdf_derive_from_key</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$subkey_len</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$subkey_id</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$context</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kdf-derive-from-key-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">subkey_len</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">subkey_id</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">context</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kdf-derive-from-key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_kdf_derive_from_key (int $subkey_len, int $subkey_id, string $context, string $key): string {}

/**
*<div id="function.sodium-crypto-kdf-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_kdf_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_kdf_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-kdf-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_kdf_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-kdf-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-kdf-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_kdf_keygen(): string {}

/**
*<div id="function.sodium-crypto-shorthash-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_shorthash_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_shorthash_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-shorthash-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_shorthash_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-shorthash-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-shorthash-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_shorthash_keygen(): string {}

/**
*<div id="function.sodium-crypto-stream-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_stream_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_stream_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-stream-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_stream_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-stream-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-stream-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_stream_keygen(): string {}

/**
*<div id="function.sodium-pad" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_pad</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_pad</span> &mdash; <span class="dc-title">Add padding data</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-pad-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_pad</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$unpadded</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-pad-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">unpadded</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-pad-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_pad ($string, $length): string {}

/**
*<div id="function.sodium-unpad" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_unpad</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_unpad</span> &mdash; <span class="dc-title">Remove padding data</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-unpad-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_unpad</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$padded</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-unpad-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">padded</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-unpad-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_unpad ($string, $length): string {}



/**
*<div id="function.sodium-crypto-auth-verify" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_auth_verify</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_auth_verify</span> &mdash; <span class="dc-title">Verifies that the tag is valid for the message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-auth-verify-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sodium_crypto_auth_verify</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$signature</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-auth-verify-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">signature</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-auth-verify-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return bool*/
function sodium_crypto_auth_verify(
    string $mac,
    string $msg,
    string $key
): bool {
    unset($mac, $msg, $key);
    return false;
}

/**
*<div id="function.sodium-crypto-box" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box</span> &mdash; <span class="dc-title">Encrypt a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box(
    string $msg,
    string $nonce,
    string $keypair
): string {
    unset($msg, $nonce, $keypair);
    return '';
}

/**
*<div id="function.sodium-crypto-box-keypair" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_keypair</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_keypair</span> &mdash; <span class="dc-title">Randomly generate a secret key and a corresponding public key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-keypair-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_keypair</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-keypair-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-keypair-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_keypair(): string {
    return '';
}

/**
*<div id="function.sodium-crypto-box-seed-keypair" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_seed_keypair</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_seed_keypair</span> &mdash; <span class="dc-title">Deterministically derive the key pair from a single key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-seed-keypair-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_seed_keypair</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-seed-keypair-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-seed-keypair-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_seed_keypair(
    string $seed
): string {
    unset($seed);
    return '';
}

/**
*<div id="function.sodium-crypto-box-keypair-from-secretkey-and-publickey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_keypair_from_secretkey_and_publickey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_keypair_from_secretkey_and_publickey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-keypair-from-secretkey-and-publickey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_keypair_from_secretkey_and_publickey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$secret_key</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$public_key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-keypair-from-secretkey-and-publickey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">secret_key</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">public_key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-keypair-from-secretkey-and-publickey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_keypair_from_secretkey_and_publickey(
    string $secretkey,
    string $publickey
): string {
    unset($secretkey, $publickey);
    return '';
}

/**
*<div id="function.sodium-crypto-box-open" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_open</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_open</span> &mdash; <span class="dc-title">Verify and decrypt a ciphertext</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-open-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_open</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$ciphertext</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-open-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">ciphertext</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-open-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_open(
    string $msg,
    string $nonce,
    string $keypair
): string {
    unset($msg, $nonce, $keypair);
    return '';
}

/**
*<div id="function.sodium-crypto-box-publickey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_publickey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_publickey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-publickey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_publickey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-publickey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-publickey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_publickey(
    string $keypair
): string {
    unset($keypair);
    return '';
}

/**
*<div id="function.sodium-crypto-box-publickey-from-secretkey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_publickey_from_secretkey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_publickey_from_secretkey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-publickey-from-secretkey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_publickey_from_secretkey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-publickey-from-secretkey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-publickey-from-secretkey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_publickey_from_secretkey(
    string $secretkey
): string {
    unset($secretkey);
    return '';
}

/**
*<div id="function.sodium-crypto-box-seal" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_seal</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_seal</span> &mdash; <span class="dc-title">Encrypt a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-seal-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_seal</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-seal-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-seal-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_seal(
    string $message,
    string $publickey
): string {
    unset($message, $publickey);
    return '';
}

/**
*<div id="function.sodium-crypto-box-seal-open" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_seal_open</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_seal_open</span> &mdash; <span class="dc-title">Decrypt the ciphertext</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-seal-open-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_seal_open</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$ciphertext</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-seal-open-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">ciphertext</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-seal-open-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_seal_open(
    string $encrypted,
    string $keypair
): string {
    unset($encrypted, $keypair);
    return '';
}

/**
*<div id="function.sodium-crypto-box-secretkey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_box_secretkey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_box_secretkey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-box-secretkey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_box_secretkey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-box-secretkey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-box-secretkey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_box_secretkey(string $keypair): string
{
    unset($keypair);
    return '';
}

/**
 * Elliptic Curve Diffie Hellman Key Exchange
 * X25519
 *
 * @param string $secretkey
 * @param string $publickey
 * @param string $client_publickey
 * @param string $server_publickey
 * @return string
 */
function sodium_crypto_kx(
    string $secretkey,
    string $publickey,
    string $client_publickey,
    string $server_publickey
): string {
    unset($secretkey, $publickey, $client_publickey, $server_publickey);
    return '';
}

/**
*<div id="function.sodium-crypto-generichash" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_generichash</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_generichash</span> &mdash; <span class="dc-title">Get a hash of the message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-generichash-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_generichash</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = SODIUM_CRYPTO_GENERICHASH_BYTES</span></span>   ]] )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-generichash-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-generichash-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_generichash(
    string $input,
    string $key = '',
    int $length = 32
): string{
    unset($input, $key, $length);
    return '';
}

/**
*<div id="function.sodium-crypto-generichash-init" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_generichash_init</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_generichash_init</span> &mdash; <span class="dc-title">Initialize a hash</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-generichash-init-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_generichash_init</strong></span>     ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = SODIUM_CRYPTO_GENERICHASH_BYTES</span></span>   ]] )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-generichash-init-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-generichash-init-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_generichash_init(
    string $key = '',
    int $length = 32
): string {
    unset($key, $length);
    return '';
}

/**
*<div id="function.sodium-crypto-generichash-update" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_generichash_update</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_generichash_update</span> &mdash; <span class="dc-title">Add message to a hash</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-generichash-update-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sodium_crypto_generichash_update</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter reference">&$state</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-generichash-update-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">state</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-generichash-update-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return bool*/
function sodium_crypto_generichash_update(
    string &$state,
    string $append
): bool {
    unset($hashState, $append);
    return '';
}

/**
*<div id="function.sodium-crypto-generichash-final" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_generichash_final</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_generichash_final</span> &mdash; <span class="dc-title">Complete the hash</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-generichash-final-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_generichash_final</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter reference">&$state</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code><span class="initializer"> = SODIUM_CRYPTO_GENERICHASH_BYTES</span></span>   ] )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-generichash-final-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">state</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-generichash-final-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_generichash_final(
    string $state,
    int $length = 32
): string {
    unset($state, $length);
    return '';
}

/**
*<div id="function.sodium-crypto-pwhash" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_pwhash</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash</span> &mdash; <span class="dc-title">Derive a key from a password</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_pwhash</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$salt</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$opslimit</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$memlimit</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$alg</code></span>   ] )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">       <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>; The length of the password hash to generate, in bytes.      </p>     </dd>              <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">       <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>; The password to generate a hash for.      </p>     </dd>              <dt> <code class="parameter">salt</code></dt>      <dd>       <p class="para">       <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> A salt to add to the password before hashing. The salt should be unpredictable, ideally generated from a good random mumber source such as <span class="function">{@link random_bytes()}</span>, and have a length of at least <strong><code>SODIUM_CRYPTO_PWHASH_SALTBYTES</code></strong> bytes.      </p>     </dd>              <dt> <code class="parameter">opslimit</code></dt>      <dd>       <p class="para">       Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are some constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <strong><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</code></strong>, <strong><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</code></strong> and <strong><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</code></strong>.      </p>     </dd>              <dt> <code class="parameter">memlimit</code></dt>      <dd>       <p class="para">       The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <strong><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</code></strong>, <strong><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</code></strong>, and <strong><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</code></strong>. Typically these should be paired with the matching opslimit values.      </p>     </dd>              <dt> <code class="parameter">alg</code></dt>      <dd>       <p class="para">       <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span> A number indicating the hash algorithm to use. By default <strong><code>SODIUM_CRYPTO_PWHASH_ALG_DEFAULT</code></strong> (the currently recommended algorithm, which can change from one version of libsodium to another), or explicitly using <strong><code>SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13</code></strong>, representing the Argon2id algorithm version 1.3.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the hashed password,  或者在失败时返回 <strong><code>FALSE</code></strong>.   </p>   <p class="para">    The used algorithm, opslimit, memlimit and salt are embedded within the hash, so    all information needed to verify the hash is included. This allows    the <span class="function">{@link password_verify()}</span> function to verify the hash without    needing separate storage for the salt or algorithm information.   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.sodium-crypto-pwhash-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     It is recommended that you test this function on your servers, and adjust the <code class="parameter">opslimit</code> and <code class="parameter">memlimit</code> parameters      so that execution of the function takes less than 100 milliseconds on interactive systems, and also verify that it fits with your PHP memory_limit setting.      The constants will help you choose good limits for your hardware.    </p>    <p class="para">     In order to produce the same password hash from the same password, the same algorithm, the same salt, and the same values for <code class="parameter">opslimit</code> and <code class="parameter">memlimit</code> must to be used. Therefore, these parameters must be stored for each user, or be used consistently for your whole application.    </p>   </p></blockquote>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_pwhash(
    int $out_len,
    string $passwd,
    string $salt,
    int $opslimit,
    int $memlimit,
    int $alg
): string {
    unset($out_len, $passwd, $salt, $opslimit, $memlimit);
    return '';
}

/**
*<div id="function.sodium-crypto-pwhash-str" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_pwhash_str</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash_str</span> &mdash; <span class="dc-title">Get an ASCII encoded hash</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-str-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_pwhash_str</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$opslimit</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$memlimit</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-str-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">opslimit</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">memlimit</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-str-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_pwhash_str(
    string $passwd,
    int $opslimit,
    int $memlimit
): string {
    unset($passwd, $opslimit, $memlimit);
    return '';
}

/**
*<div id="function.sodium-crypto-pwhash-str-verify" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_pwhash_str_verify</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash_str_verify</span> &mdash; <span class="dc-title">Verify that hash is a valid password verification string</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-str-verify-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sodium_crypto_pwhash_str_verify</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$hash</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-str-verify-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">hash</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-str-verify-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return bool*/
function sodium_crypto_pwhash_str_verify(
    string $hash,
    string $passwd
): bool {
    unset($hash, $passwd);
    return false;
}

/**
*<div id="function.sodium-crypto-pwhash-scryptsalsa208sha256" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_pwhash_scryptsalsa208sha256</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash_scryptsalsa208sha256</span> &mdash; <span class="dc-title">Derives a key from a password</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_pwhash_scryptsalsa208sha256</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$salt</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$opslimit</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$memlimit</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">salt</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">opslimit</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">memlimit</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_pwhash_scryptsalsa208sha256(
    int $out_len,
    string $passwd,
    string $salt,
    int $opslimit,
    int $memlimit,
    int $alg
): string {
    unset($out_len, $passwd, $salt, $opslimit, $memlimit);
    return '';
}

/**
*<div id="function.sodium-crypto-pwhash-scryptsalsa208sha256-str" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_pwhash_scryptsalsa208sha256_str</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash_scryptsalsa208sha256_str</span> &mdash; <span class="dc-title">Get an ASCII encoded hash</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-str-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_pwhash_scryptsalsa208sha256_str</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$opslimit</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$memlimit</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-str-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">opslimit</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">memlimit</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-str-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_pwhash_scryptsalsa208sha256_str(
    string $passwd,
    int $opslimit,
    int $memlimit
): string {
    unset($passwd, $opslimit, $memlimit);
    return '';
}

/**
*<div id="function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_pwhash_scryptsalsa208sha256_str_verify</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash_scryptsalsa208sha256_str_verify</span> &mdash; <span class="dc-title">Verify that the password is a valid password verification string</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sodium_crypto_pwhash_scryptsalsa208sha256_str_verify</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$hash</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$password</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">hash</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">password</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return bool*/
function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify(
    string $hash,
    string $passwd
): bool {
    unset($hash, $passwd);
    return false;
}

/**
*<div id="function.sodium-crypto-scalarmult" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_scalarmult</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_scalarmult</span> &mdash; <span class="dc-title">Compute a shared secret given a user&#039;s secret key and another user&#039;s public key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-scalarmult-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_scalarmult</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$n</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$p</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-scalarmult-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">n</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">p</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-scalarmult-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_scalarmult(
    string $ecdhA,
    string $ecdhB
): string {
    unset($ecdhA, $ecdhB);
    return '';
}

/**
*<div id="function.sodium-crypto-secretbox" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_secretbox</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_secretbox</span> &mdash; <span class="dc-title">Encrypt a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-secretbox-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_secretbox</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$string</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-secretbox-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">string</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-secretbox-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_secretbox(
    string $plaintext,
    string $nonce,
    string $key
): string {
    unset($plaintext, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-secretbox-open" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_secretbox_open</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_secretbox_open</span> &mdash; <span class="dc-title">Verify and decrypt a ciphertext</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-secretbox-open-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_secretbox_open</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$ciphertext</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-secretbox-open-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">ciphertext</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-secretbox-open-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string|bool*/
function sodium_crypto_secretbox_open(
    string $ciphertext,
    string $nonce,
    string $key
): string {
    unset($ciphertext, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-shorthash" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_shorthash</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_shorthash</span> &mdash; <span class="dc-title">Compute a fixed-size fingerprint for the message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-shorthash-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_shorthash</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-shorthash-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-shorthash-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_shorthash(
    string $message,
    string $key
): string {
    unset($message, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-sign" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign</span> &mdash; <span class="dc-title">Sign a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$secret_key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">secret_key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign(
    string $message,
    string $secretkey
): string {
    unset($message, $secretkey);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-detached" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_detached</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_detached</span> &mdash; <span class="dc-title">Sign the message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-detached-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_detached</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$keypair</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-detached-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">keypair</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-detached-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_detached(
    string $message,
    string $secretkey
): string {
    unset($message, $secretkey);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-ed25519-pk-to-curve25519" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_ed25519_pk_to_curve25519</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_ed25519_pk_to_curve25519</span> &mdash; <span class="dc-title">Convert an Ed25519 public key to a Curve25519 public key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-ed25519-pk-to-curve25519-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_ed25519_pk_to_curve25519</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-ed25519-pk-to-curve25519-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-ed25519-pk-to-curve25519-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_ed25519_pk_to_curve25519(
    string $sign_pk
): string {
    unset($sign_pk);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-ed25519-sk-to-curve25519" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_ed25519_sk_to_curve25519</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_ed25519_sk_to_curve25519</span> &mdash; <span class="dc-title">Convert an Ed25519 secret key to a Curve25519 secret key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-ed25519-sk-to-curve25519-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_ed25519_sk_to_curve25519</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-ed25519-sk-to-curve25519-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-ed25519-sk-to-curve25519-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_ed25519_sk_to_curve25519(
    string $sign_sk
): string {
    unset($sign_sk);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-keypair" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_keypair</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_keypair</span> &mdash; <span class="dc-title">Randomly generate a secret key and a corresponding public key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-keypair-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_keypair</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-keypair-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-keypair-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_keypair(): string
{
    return '';
}


/**
*<div id="function.sodium-crypto-sign-keypair-from-secretkey-and-publickey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_keypair_from_secretkey_and_publickey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_keypair_from_secretkey_and_publickey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-keypair-from-secretkey-and-publickey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_keypair_from_secretkey_and_publickey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$secret_key</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$public_key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-keypair-from-secretkey-and-publickey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">secret_key</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">public_key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-keypair-from-secretkey-and-publickey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_keypair_from_secretkey_and_publickey(
    string $secretkey,
    string $publickey
): string {
    unset($secretkey, $publickey);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-open" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_open</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_open</span> &mdash; <span class="dc-title">Check that the signed message has a valid signature</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-open-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_open</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$string</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$keypair</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-open-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">string</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">keypair</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-open-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_open(
    string $signed_message,
    string $publickey
): string {
    unset($signed_message, $publickey);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-publickey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_publickey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_publickey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-publickey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_publickey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$keypair</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-publickey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">keypair</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-publickey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_publickey(
    string $keypair
): string {
    unset($keypair);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-secretkey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_secretkey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_secretkey</span> &mdash; <span class="dc-title">Description</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-secretkey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_secretkey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-secretkey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-secretkey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_secretkey(
    string $keypair
): string {
    unset($keypair);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-publickey-from-secretkey" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_publickey_from_secretkey</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_publickey_from_secretkey</span> &mdash; <span class="dc-title">Extract the public key from the secret key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-publickey-from-secretkey-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_publickey_from_secretkey</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-publickey-from-secretkey-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-publickey-from-secretkey-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_publickey_from_secretkey(
    string $secretkey
): string {
    unset($secretkey);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-seed-keypair" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_seed_keypair</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_seed_keypair</span> &mdash; <span class="dc-title">Deterministically derive the key pair from a single key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-seed-keypair-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_sign_seed_keypair</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-seed-keypair-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-seed-keypair-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_sign_seed_keypair(
    string $seed
): string {
    unset($seed);
    return '';
}

/**
*<div id="function.sodium-crypto-sign-verify-detached" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_sign_verify_detached</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_sign_verify_detached</span> &mdash; <span class="dc-title">Verify signature for the message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-sign-verify-detached-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sodium_crypto_sign_verify_detached</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$signature</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-sign-verify-detached-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">signature</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-sign-verify-detached-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return bool*/
function sodium_crypto_sign_verify_detached(
    string $signature,
    string $msg,
    string $publickey
): bool {
    unset($signature, $msg, $publickey);
    return false;
}

/**
*<div id="function.sodium-crypto-stream" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_stream</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_stream</span> &mdash; <span class="dc-title">Generate a deterministic sequence of bytes from a seed</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-stream-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_stream</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-stream-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-stream-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_stream(
    int $length,
    string $nonce,
    string $key
): string {
    unset($length, $nonce, $key);
    return '';
}

/**
*<div id="function.sodium-crypto-stream-xor" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_stream_xor</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_stream_xor</span> &mdash; <span class="dc-title">Encrypt a message</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-stream-xor-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_stream_xor</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$msg</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$nonce</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-stream-xor-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">msg</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">nonce</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">key</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-stream-xor-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_stream_xor(
    string $plaintext,
    string $nonce,
    string $key
): string {
    unset($plaintext, $nonce, $key);
    return '';
}

/**
 * Generate a string of random bytes
 * /dev/urandom
 *
 * @param int $length
 * @return string
 */
function sodium_randombytes_buf(
    int $length
): string {
    unset($length);
    return '';
}

/**
 * Generate a 16-bit integer
 * /dev/urandom
 *
 * @return int
 */
function sodium_randombytes_random16(): string {
    return '';
}

/**
 * Generate an unbiased random integer between 0 and a specified value
 * /dev/urandom
 *
 * @param int $upperBoundNonInclusive
 * @return int
 */
function sodium_randombytes_uniform(
    int $upperBoundNonInclusive
): int {
    unset($upperBoundNonInclusive);
    return 0;
}

/**
*<div id="function.sodium-bin2hex" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_bin2hex</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_bin2hex</span> &mdash; <span class="dc-title">Encode to hexadecimal</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-bin2hex-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_bin2hex</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$bin</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-bin2hex-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">bin</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-bin2hex-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_bin2hex(
    string $binary
): string {
    unset($binary);
    return '';
}

/**
*<div id="function.sodium-compare" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_compare</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_compare</span> &mdash; <span class="dc-title">Compare large numbers</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-compare-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>sodium_compare</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$buf1</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$buf2</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-compare-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">buf1</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">buf2</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-compare-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return int*/
function sodium_compare(
    string $left,
    string $right
): int {
    unset($left, $right);
    return 0;
}

/**
*<div id="function.sodium-hex2bin" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_hex2bin</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_hex2bin</span> &mdash; <span class="dc-title">Decodes a hexadecimally encoded binary string</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-hex2bin-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_hex2bin</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$hex</code></span>    [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$ignore</code></span>   ] )</div>    <p class="para rdfs-comment">    Decodes a hexadecimally encoded binary string.   </p>   <p class="para">    Like <span class="function">{@link sodium_bin2hex()}</span>, <span class="function"><strong>sodium_hex2bin()</strong></span>    is resistant to side-channel attacks while <span class="function">{@link hex2bin()}</span> is not.   </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-hex2bin-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">hex</code></dt>      <dd>       <p class="para">       Hexadecimal representation of data.      </p>     </dd>              <dt> <code class="parameter">ignore</code></dt>      <dd>       <p class="para">       Optional string argument for characters to ignore.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-hex2bin-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the binary representation of the given <code class="parameter">hex</code> data.   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_hex2bin(
    string $hex, string $ignore
): string {
    unset($hex);
    return '';
}

/**
*<div id="function.sodium-increment" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_increment</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_increment</span> &mdash; <span class="dc-title">Increment large number</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-increment-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>sodium_increment</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter reference">&$val</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-increment-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">val</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-increment-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_increment(
    string &$nonce
) {
    unset($nonce);
}

/**
*<div id="function.sodium-add" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_add</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_add</span> &mdash; <span class="dc-title">Add large numbers</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-add-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>sodium_add</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter reference">&$val</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$addv</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-add-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">val</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">addv</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-add-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    没有返回值。   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_add(
    string &$left,
    string $right
) {
    unset($left, $right);
}

/**
 * Get the true major version of libsodium
 * @return int
 */
function sodium_library_version_major(): int {
    return 0;
}

/**
 * Get the true minor version of libsodium
 * @return int
 */
function sodium_library_version_minor(): int {
    return 0;
}

/**
*<div id="function.sodium-memcmp" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_memcmp</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_memcmp</span> &mdash; <span class="dc-title">Test for equality in constant-time</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-memcmp-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>sodium_memcmp</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$buf1</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$buf2</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-memcmp-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">buf1</code></dt>      <dd>       <p class="para">             </p>     </dd>              <dt> <code class="parameter">buf2</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-memcmp-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return int*/
function sodium_memcmp(
    string $left,
    string $right
): int {
    unset($right, $left);
    return 0;
}

/**
*<div id="function.sodium-memzero" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_memzero</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_memzero</span> &mdash; <span class="dc-title">Overwrite buf with zeros</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-memzero-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>sodium_memzero</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter reference">&$buf</code></span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-memzero-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">buf</code></dt>      <dd>       <p class="para">             </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-memzero-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_memzero(
    &$reference, $length
) {
    $target = '';
}

/**
 * Get the version string
 *
 * @return string
 */
function sodium_version_string(): string {
    return 'NA';
}

/**
*<div id="function.sodium-crypto-scalarmult-base" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_scalarmult_base</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_scalarmult_base</span> &mdash; <span class="dc-title">别名 <span class="function">{@link sodium_crypto_box_publickey_from_secretkey()}</span></span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-scalarmult-base-description">   <h3 class="title">说明</h3>   <p class="simpara">    此函数是该函数的别名：    <span class="function">{@link sodium_crypto_box_publickey_from_secretkey()}</span>.   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
 * @return string*/
function sodium_crypto_scalarmult_base(
    string $string_1, string $string_2
): string {
    unset($sk);

    return '';
}

/**
*<div id="function.sodium-crypto-secretbox-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_secretbox_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_secretbox_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-secretbox-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_secretbox_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-secretbox-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-secretbox-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_crypto_secretbox_keygen(): string {}

/**
*<div id="function.sodium-crypto-aead-aes256gcm-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_aes256gcm_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_aes256gcm_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-aes256gcm-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_aes256gcm_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-aes256gcm-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-aes256gcm-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_crypto_aead_aes256gcm_keygen(): string {}

/**
*<div id="function.sodium-crypto-aead-chacha20poly1305-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_chacha20poly1305_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_chacha20poly1305_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_chacha20poly1305_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_crypto_aead_chacha20poly1305_keygen(): string {}

/**
*<div id="function.sodium-crypto-aead-chacha20poly1305-ietf-keygen" class="refentry">  <div class="refnamediv">   <h1 class="refname">sodium_crypto_aead_chacha20poly1305_ietf_keygen</h1>   <p class="verinfo">(PHP 7 &gt;= 7.2.0)</p><p class="refpurpose"><span class="refname">sodium_crypto_aead_chacha20poly1305_ietf_keygen</span> &mdash; <span class="dc-title">Get random bytes for key</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-keygen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>sodium_crypto_aead_chacha20poly1305_ietf_keygen</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-keygen-parameters">   <h3 class="title">参数</h3>   <p class="para">此函数没有参数。</p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-aead-chacha20poly1305-ietf-keygen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">       </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.sodium.php">Sodium 函数</a></div></div>
*/
function sodium_crypto_aead_chacha20poly1305_ietf_keygen(): string {}

class SodiumException extends Exception {

}