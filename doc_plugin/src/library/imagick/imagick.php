<?php

// Start of imagick v.3.4.3

class ImagickException extends Exception  {
}

class ImagickDrawException extends Exception  {
}

class ImagickPixelIteratorException extends Exception  {
}

class ImagickPixelException extends Exception  {
}

/**
*<div id="class.imagick" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.imagick.php" class="classname">Imagick</a> class</h1>    <div class="partintro"><p class="verinfo">(PECL imagick 2.0.0)</p>   <div class="section" id="imagick.synopsis">    <h2 class="title">类摘要</h2>    <div class="classsynopsis">     <div class="ooclass"></div>     <div class="classsynopsisinfo">      <span class="ooclass"><strong class="classname">Imagick</strong></span>      <span class="oointerface">implements        <span class="interfacename"><strong class="interfacename">Iterator</strong></span>      </span>      {</div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.adaptiveblurimage.php" class="methodname" style="color:#CC7832">adaptiveBlurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.adaptiveresizeimage.php" class="methodname" style="color:#CC7832">adaptiveResizeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$bestfit</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$legacy</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.adaptivesharpenimage.php" class="methodname" style="color:#CC7832">adaptiveSharpenImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.adaptivethresholdimage.php" class="methodname" style="color:#CC7832">adaptiveThresholdImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.addimage.php" class="methodname" style="color:#CC7832">addImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$source</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.addnoiseimage.php" class="methodname" style="color:#CC7832">addNoiseImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$noise_type</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.affinetransformimage.php" class="methodname" style="color:#CC7832">affineTransformImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickdraw.php" class="type ImagickDraw" style="color:#EAB766">ImagickDraw</a></span> <span class="parameter" style="color:#2EACF9">$matrix</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.animateimages.php" class="methodname" style="color:#CC7832">animateImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$x_server</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.annotateimage.php" class="methodname" style="color:#CC7832">annotateImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickdraw.php" class="type ImagickDraw" style="color:#EAB766">ImagickDraw</a></span> <span class="parameter" style="color:#2EACF9">$draw_settings</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$angle</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$text</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.appendimages.php" class="methodname" style="color:#CC7832">appendImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$stack</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.autolevelimage.php" class="methodname" style="color:#CC7832">autoLevelImage</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.averageimages.php" class="methodname" style="color:#CC7832">averageImages</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.blackthresholdimage.php" class="methodname" style="color:#CC7832">blackThresholdImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.blueshiftimage.php" class="methodname" style="color:#CC7832">blueShiftImage</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$factor</span><span class="initializer"> = 1.5</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.blurimage.php" class="methodname" style="color:#CC7832">blurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.borderimage.php" class="methodname" style="color:#CC7832">borderImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$bordercolor</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.brightnesscontrastimage.php" class="methodname" style="color:#CC7832">brightnessContrastImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$brightness</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$contrast</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.charcoalimage.php" class="methodname" style="color:#CC7832">charcoalImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.chopimage.php" class="methodname" style="color:#CC7832">chopImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clampimage.php" class="methodname" style="color:#CC7832">clampImage</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clear.php" class="methodname" style="color:#CC7832">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clipimage.php" class="methodname" style="color:#CC7832">clipImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clipimagepath.php" class="methodname" style="color:#CC7832">clipImagePath</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pathname</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$inside</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clippathimage.php" class="methodname" style="color:#CC7832">clipPathImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pathname</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$inside</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clone.php" class="methodname" style="color:#CC7832">clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.clutimage.php" class="methodname" style="color:#CC7832">clutImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$lookup_table</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.coalesceimages.php" class="methodname" style="color:#CC7832">coalesceImages</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.colorfloodfillimage.php" class="methodname" style="color:#CC7832">colorFloodfillImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$fill</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$bordercolor</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.colorizeimage.php" class="methodname" style="color:#CC7832">colorizeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$colorize</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$opacity</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$legacy</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.colormatriximage.php" class="methodname" style="color:#CC7832">colorMatrixImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$color_matrix</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.combineimages.php" class="methodname" style="color:#CC7832">combineImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channelType</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.commentimage.php" class="methodname" style="color:#CC7832">commentImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$comment</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.compareimagechannels.php" class="methodname" style="color:#CC7832">compareImageChannels</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$image</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channelType</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$metricType</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.compareimagelayers.php" class="methodname" style="color:#CC7832">compareImageLayers</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$method</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.compareimages.php" class="methodname" style="color:#CC7832">compareImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$compare</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$metric</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.compositeimage.php" class="methodname" style="color:#CC7832">compositeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$composite_object</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$composite</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_ALL</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$files</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.contrastimage.php" class="methodname" style="color:#CC7832">contrastImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$sharpen</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.contraststretchimage.php" class="methodname" style="color:#CC7832">contrastStretchImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$black_point</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$white_point</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.convolveimage.php" class="methodname" style="color:#CC7832">convolveImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$kernel</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.count.php" class="methodname" style="color:#CC7832">count</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.cropimage.php" class="methodname" style="color:#CC7832">cropImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.cropthumbnailimage.php" class="methodname" style="color:#CC7832">cropThumbnailImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.current.php" class="methodname" style="color:#CC7832">current</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.cyclecolormapimage.php" class="methodname" style="color:#CC7832">cycleColormapImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$displace</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.decipherimage.php" class="methodname" style="color:#CC7832">decipherImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$passphrase</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.deconstructimages.php" class="methodname" style="color:#CC7832">deconstructImages</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.deleteimageartifact.php" class="methodname" style="color:#CC7832">deleteImageArtifact</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$artifact</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.deleteimageproperty.php" class="methodname" style="color:#CC7832">deleteImageProperty</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.deskewimage.php" class="methodname" style="color:#CC7832">deskewImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.despeckleimage.php" class="methodname" style="color:#CC7832">despeckleImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.destroy.php" class="methodname" style="color:#CC7832">destroy</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.displayimage.php" class="methodname" style="color:#CC7832">displayImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servername</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.displayimages.php" class="methodname" style="color:#CC7832">displayImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servername</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.distortimage.php" class="methodname" style="color:#CC7832">distortImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$method</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$arguments</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$bestfit</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.drawimage.php" class="methodname" style="color:#CC7832">drawImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickdraw.php" class="type ImagickDraw" style="color:#EAB766">ImagickDraw</a></span> <span class="parameter" style="color:#2EACF9">$draw</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.edgeimage.php" class="methodname" style="color:#CC7832">edgeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.embossimage.php" class="methodname" style="color:#CC7832">embossImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.encipherimage.php" class="methodname" style="color:#CC7832">encipherImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$passphrase</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.enhanceimage.php" class="methodname" style="color:#CC7832">enhanceImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.equalizeimage.php" class="methodname" style="color:#CC7832">equalizeImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.evaluateimage.php" class="methodname" style="color:#CC7832">evaluateImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$op</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$constant</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.exportimagepixels.php" class="methodname" style="color:#CC7832">exportImagePixels</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$map</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$STORAGE</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.extentimage.php" class="methodname" style="color:#CC7832">extentImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.filter.php" class="methodname" style="color:#CC7832">filter</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type ImagickKernel" style="color:#EAB766">ImagickKernel</span></span> <span class="parameter" style="color:#2EACF9">$ImagickKernel</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_UNDEFINED</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.flattenimages.php" class="methodname" style="color:#CC7832">flattenImages</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.flipimage.php" class="methodname" style="color:#CC7832">flipImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.floodfillpaintimage.php" class="methodname" style="color:#CC7832">floodFillPaintImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$fill</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$target</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$invert</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.flopimage.php" class="methodname" style="color:#CC7832">flopImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.forwardfouriertransformimage.php" class="methodname" style="color:#CC7832">forwardFourierTransformimage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$magnitude</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.frameimage.php" class="methodname" style="color:#CC7832">frameImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$matte_color</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$inner_bevel</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$outer_bevel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.functionimage.php" class="methodname" style="color:#CC7832">functionImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$function</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$arguments</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.fximage.php" class="methodname" style="color:#CC7832">fxImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$expression</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.gammaimage.php" class="methodname" style="color:#CC7832">gammaImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$gamma</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.gaussianblurimage.php" class="methodname" style="color:#CC7832">gaussianBlurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getcolorspace.php" class="methodname" style="color:#CC7832">getColorspace</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getcompression.php" class="methodname" style="color:#CC7832">getCompression</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getcompressionquality.php" class="methodname" style="color:#CC7832">getCompressionQuality</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getcopyright.php" class="methodname" style="color:#CC7832">getCopyright</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getfilename.php" class="methodname" style="color:#CC7832">getFilename</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getfont.php" class="methodname" style="color:#CC7832">getFont</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getformat.php" class="methodname" style="color:#CC7832">getFormat</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getgravity.php" class="methodname" style="color:#CC7832">getGravity</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.gethomeurl.php" class="methodname" style="color:#CC7832">getHomeURL</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimage.php" class="methodname" style="color:#CC7832">getImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagealphachannel.php" class="methodname" style="color:#CC7832">getImageAlphaChannel</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageartifact.php" class="methodname" style="color:#CC7832">getImageArtifact</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$artifact</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageattribute.php" class="methodname" style="color:#CC7832">getImageAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagebackgroundcolor.php" class="methodname" style="color:#CC7832">getImageBackgroundColor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageblob.php" class="methodname" style="color:#CC7832">getImageBlob</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageblueprimary.php" class="methodname" style="color:#CC7832">getImageBluePrimary</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagebordercolor.php" class="methodname" style="color:#CC7832">getImageBorderColor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechanneldepth.php" class="methodname" style="color:#CC7832">getImageChannelDepth</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechanneldistortion.php" class="methodname" style="color:#CC7832">getImageChannelDistortion</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$reference</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$metric</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechanneldistortions.php" class="methodname" style="color:#CC7832">getImageChannelDistortions</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$reference</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$metric</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechannelextrema.php" class="methodname" style="color:#CC7832">getImageChannelExtrema</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechannelkurtosis.php" class="methodname" style="color:#CC7832">getImageChannelKurtosis</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechannelmean.php" class="methodname" style="color:#CC7832">getImageChannelMean</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechannelrange.php" class="methodname" style="color:#CC7832">getImageChannelRange</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagechannelstatistics.php" class="methodname" style="color:#CC7832">getImageChannelStatistics</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageclipmask.php" class="methodname" style="color:#CC7832">getImageClipMask</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagecolormapcolor.php" class="methodname" style="color:#CC7832">getImageColormapColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagecolors.php" class="methodname" style="color:#CC7832">getImageColors</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagecolorspace.php" class="methodname" style="color:#CC7832">getImageColorspace</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagecompose.php" class="methodname" style="color:#CC7832">getImageCompose</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagecompression.php" class="methodname" style="color:#CC7832">getImageCompression</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagecompressionquality.php" class="methodname" style="color:#CC7832">getImageCompressionQuality</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagedelay.php" class="methodname" style="color:#CC7832">getImageDelay</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagedepth.php" class="methodname" style="color:#CC7832">getImageDepth</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagedispose.php" class="methodname" style="color:#CC7832">getImageDispose</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagedistortion.php" class="methodname" style="color:#CC7832">getImageDistortion</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type MagickWand" style="color:#EAB766">MagickWand</span></span> <span class="parameter" style="color:#2EACF9">$reference</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$metric</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageextrema.php" class="methodname" style="color:#CC7832">getImageExtrema</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagefilename.php" class="methodname" style="color:#CC7832">getImageFilename</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageformat.php" class="methodname" style="color:#CC7832">getImageFormat</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagegamma.php" class="methodname" style="color:#CC7832">getImageGamma</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagegeometry.php" class="methodname" style="color:#CC7832">getImageGeometry</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagegravity.php" class="methodname" style="color:#CC7832">getImageGravity</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagegreenprimary.php" class="methodname" style="color:#CC7832">getImageGreenPrimary</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageheight.php" class="methodname" style="color:#CC7832">getImageHeight</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagehistogram.php" class="methodname" style="color:#CC7832">getImageHistogram</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageindex.php" class="methodname" style="color:#CC7832">getImageIndex</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageinterlacescheme.php" class="methodname" style="color:#CC7832">getImageInterlaceScheme</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageinterpolatemethod.php" class="methodname" style="color:#CC7832">getImageInterpolateMethod</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageiterations.php" class="methodname" style="color:#CC7832">getImageIterations</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagelength.php" class="methodname" style="color:#CC7832">getImageLength</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagemagicklicense.php" class="methodname" style="color:#CC7832">getImageMagickLicense</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagematte.php" class="methodname" style="color:#CC7832">getImageMatte</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagemattecolor.php" class="methodname" style="color:#CC7832">getImageMatteColor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagemimetype.php" class="methodname" style="color:#CC7832">getImageMimeType</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageorientation.php" class="methodname" style="color:#CC7832">getImageOrientation</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagepage.php" class="methodname" style="color:#CC7832">getImagePage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagepixelcolor.php" class="methodname" style="color:#CC7832">getImagePixelColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageprofile.php" class="methodname" style="color:#CC7832">getImageProfile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageprofiles.php" class="methodname" style="color:#CC7832">getImageProfiles</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pattern</span><span class="initializer"> = &quot;*&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$include_values</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageproperties.php" class="methodname" style="color:#CC7832">getImageProperties</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pattern</span><span class="initializer"> = &quot;*&quot;</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$include_values</span><span class="initializer"> = <strong><span>TRUE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageproperty.php" class="methodname" style="color:#CC7832">getImageProperty</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageredprimary.php" class="methodname" style="color:#CC7832">getImageRedPrimary</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageregion.php" class="methodname" style="color:#CC7832">getImageRegion</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagerenderingintent.php" class="methodname" style="color:#CC7832">getImageRenderingIntent</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageresolution.php" class="methodname" style="color:#CC7832">getImageResolution</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagesblob.php" class="methodname" style="color:#CC7832">getImagesBlob</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagescene.php" class="methodname" style="color:#CC7832">getImageScene</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagesignature.php" class="methodname" style="color:#CC7832">getImageSignature</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagesize.php" class="methodname" style="color:#CC7832">getImageSize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagetickspersecond.php" class="methodname" style="color:#CC7832">getImageTicksPerSecond</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagetotalinkdensity.php" class="methodname" style="color:#CC7832">getImageTotalInkDensity</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagetype.php" class="methodname" style="color:#CC7832">getImageType</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimageunits.php" class="methodname" style="color:#CC7832">getImageUnits</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagevirtualpixelmethod.php" class="methodname" style="color:#CC7832">getImageVirtualPixelMethod</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagewhitepoint.php" class="methodname" style="color:#CC7832">getImageWhitePoint</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getimagewidth.php" class="methodname" style="color:#CC7832">getImageWidth</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getinterlacescheme.php" class="methodname" style="color:#CC7832">getInterlaceScheme</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getiteratorindex.php" class="methodname" style="color:#CC7832">getIteratorIndex</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getnumberimages.php" class="methodname" style="color:#CC7832">getNumberImages</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getoption.php" class="methodname" style="color:#CC7832">getOption</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getpackagename.php" class="methodname" style="color:#CC7832">getPackageName</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getpage.php" class="methodname" style="color:#CC7832">getPage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixelIterator</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getpixeliterator.php" class="methodname" style="color:#CC7832">getPixelIterator</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixelIterator</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getpixelregioniterator.php" class="methodname" style="color:#CC7832">getPixelRegionIterator</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getpointsize.php" class="methodname" style="color:#CC7832">getPointSize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getquantum.php" class="methodname" style="color:#CC7832">getQuantum</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getquantumdepth.php" class="methodname" style="color:#CC7832">getQuantumDepth</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getquantumrange.php" class="methodname" style="color:#CC7832">getQuantumRange</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getregistry.php" class="methodname" style="color:#CC7832">getRegistry</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getreleasedate.php" class="methodname" style="color:#CC7832">getReleaseDate</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getresource.php" class="methodname" style="color:#CC7832">getResource</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getresourcelimit.php" class="methodname" style="color:#CC7832">getResourceLimit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getsamplingfactors.php" class="methodname" style="color:#CC7832">getSamplingFactors</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getsize.php" class="methodname" style="color:#CC7832">getSize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getsizeoffset.php" class="methodname" style="color:#CC7832">getSizeOffset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.getversion.php" class="methodname" style="color:#CC7832">getVersion</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.haldclutimage.php" class="methodname" style="color:#CC7832">haldClutImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$clut</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.hasnextimage.php" class="methodname" style="color:#CC7832">hasNextImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.haspreviousimage.php" class="methodname" style="color:#CC7832">hasPreviousImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.identifyformat.php" class="methodname" style="color:#CC7832">identifyFormat</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$embedText</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.identifyimage.php" class="methodname" style="color:#CC7832">identifyImage</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$appendRawOutput</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.implodeimage.php" class="methodname" style="color:#CC7832">implodeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.importimagepixels.php" class="methodname" style="color:#CC7832">importImagePixels</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$map</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$storage</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$pixels</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.inversefouriertransformimage.php" class="methodname" style="color:#CC7832">inverseFourierTransformImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$complement</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$magnitude</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.labelimage.php" class="methodname" style="color:#CC7832">labelImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$label</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.levelimage.php" class="methodname" style="color:#CC7832">levelImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$blackPoint</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$gamma</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$whitePoint</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.linearstretchimage.php" class="methodname" style="color:#CC7832">linearStretchImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$blackPoint</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$whitePoint</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.liquidrescaleimage.php" class="methodname" style="color:#CC7832">liquidRescaleImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$delta_x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$rigidity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.listregistry.php" class="methodname" style="color:#CC7832">listRegistry</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.magnifyimage.php" class="methodname" style="color:#CC7832">magnifyImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.mapimage.php" class="methodname" style="color:#CC7832">mapImage</a></span>      ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$map</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$dither</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.mattefloodfillimage.php" class="methodname" style="color:#CC7832">matteFloodfillImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$alpha</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$bordercolor</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.medianfilterimage.php" class="methodname" style="color:#CC7832">medianFilterImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.mergeimagelayers.php" class="methodname" style="color:#CC7832">mergeImageLayers</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$layer_method</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.minifyimage.php" class="methodname" style="color:#CC7832">minifyImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.modulateimage.php" class="methodname" style="color:#CC7832">modulateImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$brightness</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$saturation</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$hue</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.montageimage.php" class="methodname" style="color:#CC7832">montageImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickdraw.php" class="type ImagickDraw" style="color:#EAB766">ImagickDraw</a></span> <span class="parameter" style="color:#2EACF9">$draw</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$tile_geometry</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$thumbnail_geometry</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$frame</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.morphimages.php" class="methodname" style="color:#CC7832">morphImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$number_frames</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.morphology.php" class="methodname" style="color:#CC7832">morphology</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$morphologyMethod</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$iterations</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type ImagickKernel" style="color:#EAB766">ImagickKernel</span></span> <span class="parameter" style="color:#2EACF9">$ImagickKernel</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.mosaicimages.php" class="methodname" style="color:#CC7832">mosaicImages</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.motionblurimage.php" class="methodname" style="color:#CC7832">motionBlurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$angle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>      ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.negateimage.php" class="methodname" style="color:#CC7832">negateImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$gray</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">             <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.newimage.php" class="methodname" style="color:#CC7832">newImage</a></span>              ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$cols</span></span>             , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>             , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$background</span></span>             [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$format</span></span>         ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.newpseudoimage.php" class="methodname" style="color:#CC7832">newPseudoImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pseudoString</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.nextimage.php" class="methodname" style="color:#CC7832">nextImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.normalizeimage.php" class="methodname" style="color:#CC7832">normalizeImage</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.oilpaintimage.php" class="methodname" style="color:#CC7832">oilPaintImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.opaquepaintimage.php" class="methodname" style="color:#CC7832">opaquePaintImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$target</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$fill</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$invert</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.optimizeimagelayers.php" class="methodname" style="color:#CC7832">optimizeImageLayers</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.orderedposterizeimage.php" class="methodname" style="color:#CC7832">orderedPosterizeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$threshold_map</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.paintfloodfillimage.php" class="methodname" style="color:#CC7832">paintFloodfillImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$fill</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$bordercolor</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.paintopaqueimage.php" class="methodname" style="color:#CC7832">paintOpaqueImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$target</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$fill</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.painttransparentimage.php" class="methodname" style="color:#CC7832">paintTransparentImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$target</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$alpha</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.pingimage.php" class="methodname" style="color:#CC7832">pingImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.pingimageblob.php" class="methodname" style="color:#CC7832">pingImageBlob</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$image</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.pingimagefile.php" class="methodname" style="color:#CC7832">pingImageFile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$filehandle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fileName</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.polaroidimage.php" class="methodname" style="color:#CC7832">polaroidImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickdraw.php" class="type ImagickDraw" style="color:#EAB766">ImagickDraw</a></span> <span class="parameter" style="color:#2EACF9">$properties</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$angle</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.posterizeimage.php" class="methodname" style="color:#CC7832">posterizeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$levels</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$dither</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.previewimages.php" class="methodname" style="color:#CC7832">previewImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$preview</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.previousimage.php" class="methodname" style="color:#CC7832">previousImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.profileimage.php" class="methodname" style="color:#CC7832">profileImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$profile</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.quantizeimage.php" class="methodname" style="color:#CC7832">quantizeImage</a></span>      ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$numberColors</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$colorspace</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$treedepth</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$dither</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$measureError</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.quantizeimages.php" class="methodname" style="color:#CC7832">quantizeImages</a></span>      ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$numberColors</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$colorspace</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$treedepth</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$dither</span></span>     , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$measureError</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.queryfontmetrics.php" class="methodname" style="color:#CC7832">queryFontMetrics</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickdraw.php" class="type ImagickDraw" style="color:#EAB766">ImagickDraw</a></span> <span class="parameter" style="color:#2EACF9">$properties</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$text</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$multiline</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.queryfonts.php" class="methodname" style="color:#CC7832">queryFonts</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pattern</span><span class="initializer"> = &quot;*&quot;</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.queryformats.php" class="methodname" style="color:#CC7832">queryFormats</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pattern</span><span class="initializer"> = &quot;*&quot;</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.radialblurimage.php" class="methodname" style="color:#CC7832">radialBlurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$angle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.raiseimage.php" class="methodname" style="color:#CC7832">raiseImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$raise</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.randomthresholdimage.php" class="methodname" style="color:#CC7832">randomThresholdImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$low</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$high</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.readimage.php" class="methodname" style="color:#CC7832">readImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">             <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.readimageblob.php" class="methodname" style="color:#CC7832">readImageBlob</a></span>              ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$image</span></span>             [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>         ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.readimagefile.php" class="methodname" style="color:#CC7832">readImageFile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$filehandle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fileName</span><span class="initializer"> = <strong><span>NULL</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.readimages.php" class="methodname" style="color:#CC7832">readImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$filenames</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.recolorimage.php" class="methodname" style="color:#CC7832">recolorImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$matrix</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.reducenoiseimage.php" class="methodname" style="color:#CC7832">reduceNoiseImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.remapimage.php" class="methodname" style="color:#CC7832">remapImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$replacement</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$DITHER</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.removeimage.php" class="methodname" style="color:#CC7832">removeImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.removeimageprofile.php" class="methodname" style="color:#CC7832">removeImageProfile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.render.php" class="methodname" style="color:#CC7832">render</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.resampleimage.php" class="methodname" style="color:#CC7832">resampleImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_resolution</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y_resolution</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$filter</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$blur</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.resetimagepage.php" class="methodname" style="color:#CC7832">resetImagePage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$page</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.resizeimage.php" class="methodname" style="color:#CC7832">resizeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$filter</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$blur</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$bestfit</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$legacy</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.rollimage.php" class="methodname" style="color:#CC7832">rollImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.rotateimage.php" class="methodname" style="color:#CC7832">rotateImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$background</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$degrees</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.rotationalblurimage.php" class="methodname" style="color:#CC7832">rotationalBlurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$angle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.roundcorners.php" class="methodname" style="color:#CC7832">roundCorners</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_rounding</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y_rounding</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$stroke_width</span><span class="initializer"> = 10</span></span>       [, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$displace</span><span class="initializer"> = 5</span></span>       [, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$size_correction</span><span class="initializer"> = -6</span></span>      ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.sampleimage.php" class="methodname" style="color:#CC7832">sampleImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.scaleimage.php" class="methodname" style="color:#CC7832">scaleImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$cols</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$bestfit</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$legacy</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.segmentimage.php" class="methodname" style="color:#CC7832">segmentImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$COLORSPACE</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$cluster_threshold</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$smooth_threshold</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$verbose</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.selectiveblurimage.php" class="methodname" style="color:#CC7832">selectiveBlurImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.separateimagechannel.php" class="methodname" style="color:#CC7832">separateImageChannel</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.sepiatoneimage.php" class="methodname" style="color:#CC7832">sepiaToneImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setbackgroundcolor.php" class="methodname" style="color:#CC7832">setBackgroundColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$background</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setcolorspace.php" class="methodname" style="color:#CC7832">setColorspace</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$COLORSPACE</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setcompression.php" class="methodname" style="color:#CC7832">setCompression</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setcompressionquality.php" class="methodname" style="color:#CC7832">setCompressionQuality</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$quality</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setfilename.php" class="methodname" style="color:#CC7832">setFilename</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setfirstiterator.php" class="methodname" style="color:#CC7832">setFirstIterator</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setfont.php" class="methodname" style="color:#CC7832">setFont</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$font</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setformat.php" class="methodname" style="color:#CC7832">setFormat</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$format</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setgravity.php" class="methodname" style="color:#CC7832">setGravity</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$gravity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimage.php" class="methodname" style="color:#CC7832">setImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$replace</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagealphachannel.php" class="methodname" style="color:#CC7832">setImageAlphaChannel</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageartifact.php" class="methodname" style="color:#CC7832">setImageArtifact</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$artifact</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageattribute.php" class="methodname" style="color:#CC7832">setImageAttribute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagebackgroundcolor.php" class="methodname" style="color:#CC7832">setImageBackgroundColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$background</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagebias.php" class="methodname" style="color:#CC7832">setImageBias</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$bias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagebiasquantum.php" class="methodname" style="color:#CC7832">setImageBiasQuantum</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$bias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageblueprimary.php" class="methodname" style="color:#CC7832">setImageBluePrimary</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagebordercolor.php" class="methodname" style="color:#CC7832">setImageBorderColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$border</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagechanneldepth.php" class="methodname" style="color:#CC7832">setImageChannelDepth</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$depth</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageclipmask.php" class="methodname" style="color:#CC7832">setImageClipMask</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$clip_mask</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagecolormapcolor.php" class="methodname" style="color:#CC7832">setImageColormapColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickpixel.php" class="type ImagickPixel" style="color:#EAB766">ImagickPixel</a></span> <span class="parameter" style="color:#2EACF9">$color</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagecolorspace.php" class="methodname" style="color:#CC7832">setImageColorspace</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$colorspace</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagecompose.php" class="methodname" style="color:#CC7832">setImageCompose</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compose</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagecompression.php" class="methodname" style="color:#CC7832">setImageCompression</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compression</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagecompressionquality.php" class="methodname" style="color:#CC7832">setImageCompressionQuality</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$quality</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagedelay.php" class="methodname" style="color:#CC7832">setImageDelay</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$delay</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagedepth.php" class="methodname" style="color:#CC7832">setImageDepth</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$depth</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagedispose.php" class="methodname" style="color:#CC7832">setImageDispose</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$dispose</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageextent.php" class="methodname" style="color:#CC7832">setImageExtent</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagefilename.php" class="methodname" style="color:#CC7832">setImageFilename</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageformat.php" class="methodname" style="color:#CC7832">setImageFormat</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$format</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagegamma.php" class="methodname" style="color:#CC7832">setImageGamma</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$gamma</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagegravity.php" class="methodname" style="color:#CC7832">setImageGravity</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$gravity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagegreenprimary.php" class="methodname" style="color:#CC7832">setImageGreenPrimary</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageindex.php" class="methodname" style="color:#CC7832">setImageIndex</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageinterlacescheme.php" class="methodname" style="color:#CC7832">setImageInterlaceScheme</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$interlace_scheme</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageinterpolatemethod.php" class="methodname" style="color:#CC7832">setImageInterpolateMethod</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$method</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageiterations.php" class="methodname" style="color:#CC7832">setImageIterations</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$iterations</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagematte.php" class="methodname" style="color:#CC7832">setImageMatte</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$matte</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagemattecolor.php" class="methodname" style="color:#CC7832">setImageMatteColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$matte</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageopacity.php" class="methodname" style="color:#CC7832">setImageOpacity</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$opacity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageorientation.php" class="methodname" style="color:#CC7832">setImageOrientation</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$orientation</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagepage.php" class="methodname" style="color:#CC7832">setImagePage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageprofile.php" class="methodname" style="color:#CC7832">setImageProfile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$profile</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageproperty.php" class="methodname" style="color:#CC7832">setImageProperty</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageredprimary.php" class="methodname" style="color:#CC7832">setImageRedPrimary</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagerenderingintent.php" class="methodname" style="color:#CC7832">setImageRenderingIntent</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rendering_intent</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageresolution.php" class="methodname" style="color:#CC7832">setImageResolution</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_resolution</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y_resolution</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagescene.php" class="methodname" style="color:#CC7832">setImageScene</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$scene</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagetickspersecond.php" class="methodname" style="color:#CC7832">setImageTicksPerSecond</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$ticks_per_second</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagetype.php" class="methodname" style="color:#CC7832">setImageType</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$image_type</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimageunits.php" class="methodname" style="color:#CC7832">setImageUnits</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$units</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagevirtualpixelmethod.php" class="methodname" style="color:#CC7832">setImageVirtualPixelMethod</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$method</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setimagewhitepoint.php" class="methodname" style="color:#CC7832">setImageWhitePoint</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setinterlacescheme.php" class="methodname" style="color:#CC7832">setInterlaceScheme</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$interlace_scheme</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setiteratorindex.php" class="methodname" style="color:#CC7832">setIteratorIndex</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setlastiterator.php" class="methodname" style="color:#CC7832">setLastIterator</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setoption.php" class="methodname" style="color:#CC7832">setOption</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setpage.php" class="methodname" style="color:#CC7832">setPage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setpointsize.php" class="methodname" style="color:#CC7832">setPointSize</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$point_size</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setprogressmonitor.php" class="methodname" style="color:#CC7832">setProgressMonitor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#2EACF9">$callback</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="modifier">static</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setregistry.php" class="methodname" style="color:#CC7832">setRegistry</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setresolution.php" class="methodname" style="color:#CC7832">setResolution</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_resolution</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y_resolution</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setresourcelimit.php" class="methodname" style="color:#CC7832">setResourceLimit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$limit</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setsamplingfactors.php" class="methodname" style="color:#CC7832">setSamplingFactors</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$factors</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setsize.php" class="methodname" style="color:#CC7832">setSize</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.setsizeoffset.php" class="methodname" style="color:#CC7832">setSizeOffset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.settype.php" class="methodname" style="color:#CC7832">setType</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$image_type</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.shadeimage.php" class="methodname" style="color:#CC7832">shadeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$gray</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$azimuth</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$elevation</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.shadowimage.php" class="methodname" style="color:#CC7832">shadowImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$opacity</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.sharpenimage.php" class="methodname" style="color:#CC7832">sharpenImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.shaveimage.php" class="methodname" style="color:#CC7832">shaveImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.shearimage.php" class="methodname" style="color:#CC7832">shearImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$background</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_shear</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y_shear</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.sigmoidalcontrastimage.php" class="methodname" style="color:#CC7832">sigmoidalContrastImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$sharpen</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$alpha</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$beta</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.sketchimage.php" class="methodname" style="color:#CC7832">sketchImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$angle</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.smushimages.php" class="methodname" style="color:#CC7832">smushImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$stack</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.solarizeimage.php" class="methodname" style="color:#CC7832">solarizeImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.sparsecolorimage.php" class="methodname" style="color:#CC7832">sparseColorImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$SPARSE_METHOD</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$arguments</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.spliceimage.php" class="methodname" style="color:#CC7832">spliceImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.spreadimage.php" class="methodname" style="color:#CC7832">spreadImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.statisticimage.php" class="methodname" style="color:#CC7832">statisticImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$type</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.steganoimage.php" class="methodname" style="color:#CC7832">steganoImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$watermark_wand</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.stereoimage.php" class="methodname" style="color:#CC7832">stereoImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$offset_wand</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.stripimage.php" class="methodname" style="color:#CC7832">stripImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.subimagematch.php" class="methodname" style="color:#CC7832">subImageMatch</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$Imagick</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$offset</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">&$similarity</span></span>   ]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.swirlimage.php" class="methodname" style="color:#CC7832">swirlImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$degrees</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.textureimage.php" class="methodname" style="color:#CC7832">textureImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$texture_wand</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.thresholdimage.php" class="methodname" style="color:#CC7832">thresholdImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.thumbnailimage.php" class="methodname" style="color:#CC7832">thumbnailImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$bestfit</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$fill</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$legacy</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ]]] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.tintimage.php" class="methodname" style="color:#CC7832">tintImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$tint</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$opacity</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$legacy</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.tostring.php" class="methodname" style="color:#CC7832">__toString</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">Imagick</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.transformimage.php" class="methodname" style="color:#CC7832">transformImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$crop</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$geometry</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.transformimagecolorspace.php" class="methodname" style="color:#CC7832">transformImageColorspace</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$colorspace</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.transparentpaintimage.php" class="methodname" style="color:#CC7832">transparentPaintImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$target</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$alpha</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$invert</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.transposeimage.php" class="methodname" style="color:#CC7832">transposeImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.transverseimage.php" class="methodname" style="color:#CC7832">transverseImage</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.trimimage.php" class="methodname" style="color:#CC7832">trimImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.uniqueimagecolors.php" class="methodname" style="color:#CC7832">uniqueImageColors</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.unsharpmaskimage.php" class="methodname" style="color:#CC7832">unsharpMaskImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$radius</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sigma</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$amount</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$channel</span><span class="initializer"> = Imagick::CHANNEL_DEFAULT</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.valid.php" class="methodname" style="color:#CC7832">valid</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.vignetteimage.php" class="methodname" style="color:#CC7832">vignetteImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$blackPoint</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$whitePoint</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.waveimage.php" class="methodname" style="color:#CC7832">waveImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$amplitude</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$length</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.whitethresholdimage.php" class="methodname" style="color:#CC7832">whiteThresholdImage</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$threshold</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.writeimage.php" class="methodname" style="color:#CC7832">writeImage</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span><span class="initializer"> = NULL</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.writeimagefile.php" class="methodname" style="color:#CC7832">writeImageFile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$filehandle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$format</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.writeimages.php" class="methodname" style="color:#CC7832">writeImages</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$adjoin</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagick.writeimagesfile.php" class="methodname" style="color:#CC7832">writeImagesFile</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$filehandle</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$format</span></span>   ] )</div>     }</div>   </div>   <div class="section" id="imagick.imagick.methodtypes">   <h2 class="title">Image methods and global methods</h2>   <p class="para">    The Imagick class has the ability to hold and operate on multiple    images simultaneously. This is achieved through an internal stack. There    is always an internal pointer that points at the current image. Some    functions operate on all images in the Imagick class, but most operate    only on the current image in the internal stack. As a convention, method    names can contain the word Image to denote they affect only the current    image in the stack.   </p>  </div>   <div class="section" id="imagick.imagick.methods">   <h2 class="title">Class Methods</h2>   <p class="para">    Because there are so many methods, here is a handy list of methods,    somewhat reduced to their general purpose:   </p>    <table class="doctable table">    <caption><strong>Class methods by purpose</strong></caption>         <thead>      <tr>       <th>Image effects</th>       <th>Get methods</th>       <th>Set methods</th>       <th>Read/write images</th>       <th>Other</th>      </tr>      </thead>       <tbody class="tbody">      <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::adaptiveBlurImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getCompression()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setBackgroundColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::__construct()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::clear()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::adaptiveResizeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getFilename()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setCompressionQuality()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::addImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::clone()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::adaptiveSharpenImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getFormat()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setCompression()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::appendImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::current()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::adaptiveThresholdImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageBackgroundColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setFilename()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getFilename()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::destroy()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::addNoiseImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageBlob()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImagesBlob()}</span></td>          <td><span class="methodname" style="color:#CC7832">{@link Imagick::setFormat()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getFormat()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::affinetransformimage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageBluePrimary()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageBackgroundColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageFilename()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getHomeURL()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::annotateImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageBorderColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setFirstIterator()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageFormat()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::commentImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::averageImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageChannelDepth()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageBias()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getNumberImages()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::blackThresholdImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageChannelDistortion()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageBluePrimary()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageFilename()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getReleaseDate()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::blurImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageChannelExtrema()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageBorderColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageFormat()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getVersion()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::borderImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageChannelMean()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageChannelDepth()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::readImageFile()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::hasNextImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::charcoalImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageChannelStatistics()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageColormapColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::readImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::hasPreviousImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::chopImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageColormapColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageColorSpace()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::writeImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::labelImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::clipImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageColorspace()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageCompose()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::writeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::newImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::clipPathImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageColors()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageCompression()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::newPseudoImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::coalesceImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageCompose()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageDelay()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::nextImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::colorFloodFillImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageDelay()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageDepth()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::pingImageBlob()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::colorizeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageDepth()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageDispose()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::pingImageFile()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::combineImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageDispose()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageDispose()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::pingImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::compareImageChannels()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageDistortion()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageExtent()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::previousImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::compareImageLayers()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageExtrema()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageFilename()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::profileImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::compositeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageFilename()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageFormat()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::queryFormats()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::contrastImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageFormat()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageGamma()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::removeImageProfile()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::contrastStretchImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageGamma()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageGreenPrimary()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::removeImage()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::convolveImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageGeometry()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageIndex()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setFirstIterator()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::cropImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageGreenPrimary()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageInterpolateMethod()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageIndex()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::cycleColormapImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageHeight()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageIterations()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::valid()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::deconstructImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageHistogram()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageMatteColor()}</span></td>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getCopyright()}</span></td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::drawImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageIndex()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageMatte()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::edgeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageInterlaceScheme()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImagePage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::embossImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageInterpolateMethod()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageProfile()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::enhanceImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageIterations()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageProperty()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::equalizeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageMatteColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageRedPrimary()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::evaluateImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageMatte()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageRenderingIntent()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::flattenImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImagePage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageResolution()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::flipImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImagePixelColor()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageScene()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::flopImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageProfile()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageTicksPerSecond()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td class="empty">&nbsp;</td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageProperty()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageType()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::fxImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageRedPrimary()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageUnits()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::gammaImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageRegion()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageVirtualPixelMethod()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::gaussianBlurImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageRenderingIntent()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setImageWhitepoint()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::implodeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageResolution()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setInterlaceScheme()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::levelImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageScene()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setOption()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::linearStretchImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageSignature()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setPage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::magnifyImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageTicksPerSecond()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setResolution()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::matteFloodFillImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageTotalInkDensity()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setResourceLimit()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::medianFilterImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageType()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setSamplingFactors()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::minifyImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageUnits()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setSizeOffset()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::modulateImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageVirtualPixelMethod()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setSize()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::montageImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageWhitepoint()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::setType()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::morphImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageWidth()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::mosaicImages()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::motionBlurImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getInterlaceScheme()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::negateImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getNumberImages()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::normalizeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getOption()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::oilPaintImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getPackageName()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::optimizeImageLayers()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getPage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::paintOpaqueImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getPixelIterator()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::paintTransparentImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getPixelRegionIterator()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::posterizeImage()}</span></td>        <td><span class="methodname" style="color:#CC7832">{@link Imagick::getQuantumDepth()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::radialBlurImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getQuantumRange()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::raiseImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getResourceLimit()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::randomThresholdImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getResource()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::reduceNoiseImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getSamplingFactors()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::render()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getSizeOffset()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::resampleImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getSize()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::resizeImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::identifyImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::rollImage()}</span></td>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::getImageSize()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::rotateImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::sampleImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::scaleImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::separateImageChannel()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::sepiaToneImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::shadeImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::shadowImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::sharpenImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::shaveImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::shearImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::sigmoidalContrastImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::sketchImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::solarizeImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::spliceImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::spreadImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::steganoImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::stereoImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::stripImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::swirlImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::textureImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::thresholdImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::thumbnailImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::tintImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::transverseImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::trimImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::uniqueImageColors()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::unsharpMaskImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::vignetteImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::waveImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>       <tr>       <td><span class="methodname" style="color:#CC7832">{@link Imagick::whiteThresholdImage()}</span></td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>       <td class="empty">&nbsp;</td>      </tr>      </tbody>       </table>   </div>  </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link Imagick::adaptiveBlurImage} — Adds adaptive blur filter to image</li><li>{@link Imagick::adaptiveResizeImage} — Adaptively resize image with data dependent triangulation</li><li>{@link Imagick::adaptiveSharpenImage} — Adaptively sharpen the image</li><li>{@link Imagick::adaptiveThresholdImage} — Selects a threshold for each pixel based on a range of intensity</li><li>{@link Imagick::addImage} — Adds new image to Imagick object image list</li><li>{@link Imagick::addNoiseImage} — Adds random noise to the image</li><li>{@link Imagick::affineTransformImage} — Transforms an image</li><li>{@link Imagick::animateImages} — Animates an image or images</li><li>{@link Imagick::annotateImage} — Annotates an image with text</li><li>{@link Imagick::appendImages} — Append a set of images</li><li>{@link Imagick::autoLevelImage} — Description</li><li>{@link Imagick::averageImages} — Average a set of images</li><li>{@link Imagick::blackThresholdImage} — Forces all pixels below the threshold into black</li><li>{@link Imagick::blueShiftImage} — Description</li><li>{@link Imagick::blurImage} — Adds blur filter to image</li><li>{@link Imagick::borderImage} — Surrounds the image with a border</li><li>{@link Imagick::brightnessContrastImage} — Description</li><li>{@link Imagick::charcoalImage} — Simulates a charcoal drawing</li><li>{@link Imagick::chopImage} — Removes a region of an image and trims</li><li>{@link Imagick::clampImage} — Description</li><li>{@link Imagick::clear} — Clears all resources associated to Imagick object</li><li>{@link Imagick::clipImage} — Clips along the first path from the 8BIM profile</li><li>{@link Imagick::clipImagePath} — Description</li><li>{@link Imagick::clipPathImage} — Clips along the named paths from the 8BIM profile</li><li>{@link Imagick::clone} — Makes an exact copy of the Imagick object</li><li>{@link Imagick::clutImage} — Replaces colors in the image</li><li>{@link Imagick::coalesceImages} — Composites a set of images</li><li>{@link Imagick::colorFloodfillImage} — Changes the color value of any pixel that matches target</li><li>{@link Imagick::colorizeImage} — Blends the fill color with the image</li><li>{@link Imagick::colorMatrixImage} — Description</li><li>{@link Imagick::combineImages} — Combines one or more images into a single image</li><li>{@link Imagick::commentImage} — Adds a comment to your image</li><li>{@link Imagick::compareImageChannels} — Returns the difference in one or more images</li><li>{@link Imagick::compareImageLayers} — Returns the maximum bounding region between images</li><li>{@link Imagick::compareImages} — Compares an image to a reconstructed image</li><li>{@link Imagick::compositeImage} — 把一张图合并到一张图</li><li>{@link Imagick::__construct} — The Imagick constructor</li><li>{@link Imagick::contrastImage} — Change the contrast of the image</li><li>{@link Imagick::contrastStretchImage} — Enhances the contrast of a color image</li><li>{@link Imagick::convolveImage} — Applies a custom convolution kernel to the image</li><li>{@link Imagick::count} — Get the number of images</li><li>{@link Imagick::cropImage} — 截图图片的一块区域</li><li>{@link Imagick::cropThumbnailImage} — 创建缩略图</li><li>{@link Imagick::current} — Returns a reference to the current Imagick object</li><li>{@link Imagick::cycleColormapImage} — Displaces an image's colormap</li><li>{@link Imagick::decipherImage} — Deciphers an image</li><li>{@link Imagick::deconstructImages} — Returns certain pixel differences between images</li><li>{@link Imagick::deleteImageArtifact} — Delete image artifact</li><li>{@link Imagick::deleteImageProperty} — Description</li><li>{@link Imagick::deskewImage} — Removes skew from the image</li><li>{@link Imagick::despeckleImage} — Reduces the speckle noise in an image</li><li>{@link Imagick::destroy} — Destroys the Imagick object</li><li>{@link Imagick::displayImage} — Displays an image</li><li>{@link Imagick::displayImages} — Displays an image or image sequence</li><li>{@link Imagick::distortImage} — Distorts an image using various distortion methods</li><li>{@link Imagick::drawImage} — 把 ImagickDraw 对象渲染到当前图片上</li><li>{@link Imagick::edgeImage} — Enhance edges within the image</li><li>{@link Imagick::embossImage} — Returns a grayscale image with a three-dimensional effect</li><li>{@link Imagick::encipherImage} — Enciphers an image</li><li>{@link Imagick::enhanceImage} — Improves the quality of a noisy image</li><li>{@link Imagick::equalizeImage} — Equalizes the image histogram</li><li>{@link Imagick::evaluateImage} — Applies an expression to an image</li><li>{@link Imagick::exportImagePixels} — Exports raw image pixels</li><li>{@link Imagick::extentImage} — Set image size</li><li>{@link Imagick::filter} — Description</li><li>{@link Imagick::flattenImages} — Merges a sequence of images</li><li>{@link Imagick::flipImage} — Creates a vertical mirror image</li><li>{@link Imagick::floodFillPaintImage} — Changes the color value of any pixel that matches target</li><li>{@link Imagick::flopImage} — Creates a horizontal mirror image</li><li>{@link Imagick::forwardFourierTransformImage} — Description</li><li>{@link Imagick::frameImage} — Adds a simulated three-dimensional border</li><li>{@link Imagick::functionImage} — Applies a function on the image</li><li>{@link Imagick::fxImage} — Evaluate expression for each pixel in the image</li><li>{@link Imagick::gammaImage} — Gamma-corrects an image</li><li>{@link Imagick::gaussianBlurImage} — Blurs an image</li><li>{@link Imagick::getColorspace} — Gets the colorspace</li><li>{@link Imagick::getCompression} — Gets the object compression type</li><li>{@link Imagick::getCompressionQuality} — Gets the object compression quality</li><li>{@link Imagick::getCopyright} — Returns the ImageMagick API copyright as a string</li><li>{@link Imagick::getFilename} — The filename associated with an image sequence</li><li>{@link Imagick::getFont} — Gets font</li><li>{@link Imagick::getFormat} — Returns the format of the Imagick object</li><li>{@link Imagick::getGravity} — Gets the gravity</li><li>{@link Imagick::getHomeURL} — Returns the ImageMagick home URL</li><li>{@link Imagick::getImage} — Returns a new Imagick object</li><li>{@link Imagick::getImageAlphaChannel} — 获取图像的 alpha 通道</li><li>{@link Imagick::getImageArtifact} — Get image artifact</li><li>{@link Imagick::getImageAttribute} — Description</li><li>{@link Imagick::getImageBackgroundColor} — Returns the image background color</li><li>{@link Imagick::getImageBlob} — Returns the image sequence as a blob</li><li>{@link Imagick::getImageBluePrimary} — Returns the chromaticy blue primary point</li><li>{@link Imagick::getImageBorderColor} — Returns the image border color</li><li>{@link Imagick::getImageChannelDepth} — Gets the depth for a particular image channel</li><li>{@link Imagick::getImageChannelDistortion} — Compares image channels of an image to a reconstructed image</li><li>{@link Imagick::getImageChannelDistortions} — Gets channel distortions</li><li>{@link Imagick::getImageChannelExtrema} — Gets the extrema for one or more image channels</li><li>{@link Imagick::getImageChannelKurtosis} — The getImageChannelKurtosis purpose</li><li>{@link Imagick::getImageChannelMean} — Gets the mean and standard deviation</li><li>{@link Imagick::getImageChannelRange} — Gets channel range</li><li>{@link Imagick::getImageChannelStatistics} — Returns statistics for each channel in the image</li><li>{@link Imagick::getImageClipMask} — Gets image clip mask</li><li>{@link Imagick::getImageColormapColor} — Returns the color of the specified colormap index</li><li>{@link Imagick::getImageColors} — Gets the number of unique colors in the image</li><li>{@link Imagick::getImageColorspace} — Gets the image colorspace</li><li>{@link Imagick::getImageCompose} — Returns the composite operator associated with the image</li><li>{@link Imagick::getImageCompression} — Gets the current image's compression type</li><li>{@link Imagick::getImageCompressionQuality} — Gets the current image's compression quality</li><li>{@link Imagick::getImageDelay} — Gets the image delay</li><li>{@link Imagick::getImageDepth} — Gets the image depth</li><li>{@link Imagick::getImageDispose} — Gets the image disposal method</li><li>{@link Imagick::getImageDistortion} — Compares an image to a reconstructed image</li><li>{@link Imagick::getImageExtrema} — Gets the extrema for the image</li><li>{@link Imagick::getImageFilename} — Returns the filename of a particular image in a sequence</li><li>{@link Imagick::getImageFormat} — Returns the format of a particular image in a sequence</li><li>{@link Imagick::getImageGamma} — Gets the image gamma</li><li>{@link Imagick::getImageGeometry} — Gets the width and height as an associative array</li><li>{@link Imagick::getImageGravity} — Gets the image gravity</li><li>{@link Imagick::getImageGreenPrimary} — Returns the chromaticy green primary point</li><li>{@link Imagick::getImageHeight} — Returns the image height</li><li>{@link Imagick::getImageHistogram} — Gets the image histogram</li><li>{@link Imagick::getImageIndex} — Gets the index of the current active image</li><li>{@link Imagick::getImageInterlaceScheme} — Gets the image interlace scheme</li><li>{@link Imagick::getImageInterpolateMethod} — Returns the interpolation method</li><li>{@link Imagick::getImageIterations} — Gets the image iterations</li><li>{@link Imagick::getImageLength} — Returns the image length in bytes</li><li>{@link Imagick::getImageMagickLicense} — Returns a string containing the ImageMagick license</li><li>{@link Imagick::getImageMatte} — Return if the image has a matte channel</li><li>{@link Imagick::getImageMatteColor} — Returns the image matte color</li><li>{@link Imagick::getImageMimeType} — Description</li><li>{@link Imagick::getImageOrientation} — Gets the image orientation</li><li>{@link Imagick::getImagePage} — Returns the page geometry</li><li>{@link Imagick::getImagePixelColor} — Returns the color of the specified pixel</li><li>{@link Imagick::getImageProfile} — Returns the named image profile</li><li>{@link Imagick::getImageProfiles} — Returns the image profiles</li><li>{@link Imagick::getImageProperties} — Returns the image properties</li><li>{@link Imagick::getImageProperty} — Returns the named image property</li><li>{@link Imagick::getImageRedPrimary} — Returns the chromaticity red primary point</li><li>{@link Imagick::getImageRegion} — Extracts a region of the image</li><li>{@link Imagick::getImageRenderingIntent} — Gets the image rendering intent</li><li>{@link Imagick::getImageResolution} — 获取图像的x,y轴分辨率</li><li>{@link Imagick::getImagesBlob} — Returns all image sequences as a blob</li><li>{@link Imagick::getImageScene} — Gets the image scene</li><li>{@link Imagick::getImageSignature} — Generates an SHA-256 message digest</li><li>{@link Imagick::getImageSize} — Returns the image length in bytes</li><li>{@link Imagick::getImageTicksPerSecond} — Gets the image ticks-per-second</li><li>{@link Imagick::getImageTotalInkDensity} — Gets the image total ink density</li><li>{@link Imagick::getImageType} — Gets the potential image type</li><li>{@link Imagick::getImageUnits} — 获取图像的分辨率单位</li><li>{@link Imagick::getImageVirtualPixelMethod} — Returns the virtual pixel method</li><li>{@link Imagick::getImageWhitePoint} — Returns the chromaticity white point</li><li>{@link Imagick::getImageWidth} — Returns the image width</li><li>{@link Imagick::getInterlaceScheme} — Gets the object interlace scheme</li><li>{@link Imagick::getIteratorIndex} — Gets the index of the current active image</li><li>{@link Imagick::getNumberImages} — Returns the number of images in the object</li><li>{@link Imagick::getOption} — Returns a value associated with the specified key</li><li>{@link Imagick::getPackageName} — Returns the ImageMagick package name</li><li>{@link Imagick::getPage} — Returns the page geometry</li><li>{@link Imagick::getPixelIterator} — Returns a MagickPixelIterator</li><li>{@link Imagick::getPixelRegionIterator} — Get an ImagickPixelIterator for an image section</li><li>{@link Imagick::getPointSize} — Gets point size</li><li>{@link Imagick::getQuantum} — Description</li><li>{@link Imagick::getQuantumDepth} — Gets the quantum depth</li><li>{@link Imagick::getQuantumRange} — Returns the Imagick quantum range</li><li>{@link Imagick::getRegistry} — Description</li><li>{@link Imagick::getReleaseDate} — Returns the ImageMagick release date</li><li>{@link Imagick::getResource} — Returns the specified resource's memory usage</li><li>{@link Imagick::getResourceLimit} — Returns the specified resource limit</li><li>{@link Imagick::getSamplingFactors} — Gets the horizontal and vertical sampling factor</li><li>{@link Imagick::getSize} — Returns the size associated with the Imagick object</li><li>{@link Imagick::getSizeOffset} — Returns the size offset</li><li>{@link Imagick::getVersion} — Returns the ImageMagick API version</li><li>{@link Imagick::haldClutImage} — Replaces colors in the image</li><li>{@link Imagick::hasNextImage} — Checks if the object has more images</li><li>{@link Imagick::hasPreviousImage} — Checks if the object has a previous image</li><li>{@link Imagick::identifyFormat} — Description</li><li>{@link Imagick::identifyImage} — Identifies an image and fetches attributes</li><li>{@link Imagick::implodeImage} — Creates a new image as a copy</li><li>{@link Imagick::importImagePixels} — Imports image pixels</li><li>{@link Imagick::inverseFourierTransformImage} — Description</li><li>{@link Imagick::labelImage} — Adds a label to an image</li><li>{@link Imagick::levelImage} — Adjusts the levels of an image</li><li>{@link Imagick::linearStretchImage} — Stretches with saturation the image intensity</li><li>{@link Imagick::liquidRescaleImage} — Animates an image or images</li><li>{@link Imagick::listRegistry} — Description</li><li>{@link Imagick::magnifyImage} — Scales an image proportionally 2x</li><li>{@link Imagick::mapImage} — Replaces the colors of an image with the closest color from a reference image</li><li>{@link Imagick::matteFloodfillImage} — Changes the transparency value of a color</li><li>{@link Imagick::medianFilterImage} — Applies a digital filter</li><li>{@link Imagick::mergeImageLayers} — Merges image layers</li><li>{@link Imagick::minifyImage} — Scales an image proportionally to half its size</li><li>{@link Imagick::modulateImage} — Control the brightness, saturation, and hue</li><li>{@link Imagick::montageImage} — Creates a composite image</li><li>{@link Imagick::morphImages} — Method morphs a set of images</li><li>{@link Imagick::morphology} — Description</li><li>{@link Imagick::mosaicImages} — Forms a mosaic from images</li><li>{@link Imagick::motionBlurImage} — Simulates motion blur</li><li>{@link Imagick::negateImage} — Negates the colors in the reference image</li><li>{@link Imagick::newImage} — 创建一张图片</li><li>{@link Imagick::newPseudoImage} — Creates a new image</li><li>{@link Imagick::nextImage} — Moves to the next image</li><li>{@link Imagick::normalizeImage} — Enhances the contrast of a color image</li><li>{@link Imagick::oilPaintImage} — Simulates an oil painting</li><li>{@link Imagick::opaquePaintImage} — Changes the color value of any pixel that matches target</li><li>{@link Imagick::optimizeImageLayers} — Removes repeated portions of images to optimize</li><li>{@link Imagick::orderedPosterizeImage} — Performs an ordered dither</li><li>{@link Imagick::paintFloodfillImage} — Changes the color value of any pixel that matches target</li><li>{@link Imagick::paintOpaqueImage} — Change any pixel that matches color</li><li>{@link Imagick::paintTransparentImage} — Changes any pixel that matches color with the color defined by fill</li><li>{@link Imagick::pingImage} — Fetch basic attributes about the image</li><li>{@link Imagick::pingImageBlob} — Quickly fetch attributes</li><li>{@link Imagick::pingImageFile} — Get basic image attributes in a lightweight manner</li><li>{@link Imagick::polaroidImage} — Simulates a Polaroid picture</li><li>{@link Imagick::posterizeImage} — Reduces the image to a limited number of color level</li><li>{@link Imagick::previewImages} — Quickly pin-point appropriate parameters for image processing</li><li>{@link Imagick::previousImage} — Move to the previous image in the object</li><li>{@link Imagick::profileImage} — Adds or removes a profile from an image</li><li>{@link Imagick::quantizeImage} — Analyzes the colors within a reference image</li><li>{@link Imagick::quantizeImages} — Analyzes the colors within a sequence of images</li><li>{@link Imagick::queryFontMetrics} — Returns an array representing the font metrics</li><li>{@link Imagick::queryFonts} — Returns the configured fonts</li><li>{@link Imagick::queryFormats} — Returns formats supported by Imagick</li><li>{@link Imagick::radialBlurImage} — Radial blurs an image</li><li>{@link Imagick::raiseImage} — Creates a simulated 3d button-like effect</li><li>{@link Imagick::randomThresholdImage} — Creates a high-contrast, two-color image</li><li>{@link Imagick::readImage} — Reads image from filename</li><li>{@link Imagick::readImageBlob} — 从二进制字符串里读取图片</li><li>{@link Imagick::readImageFile} — Reads image from open filehandle</li><li>{@link Imagick::readimages} — Description</li><li>{@link Imagick::recolorImage} — Recolors image</li><li>{@link Imagick::reduceNoiseImage} — Smooths the contours of an image</li><li>{@link Imagick::remapImage} — Remaps image colors</li><li>{@link Imagick::removeImage} — Removes an image from the image list</li><li>{@link Imagick::removeImageProfile} — Removes the named image profile and returns it</li><li>{@link Imagick::render} — Renders all preceding drawing commands</li><li>{@link Imagick::resampleImage} — Resample image to desired resolution</li><li>{@link Imagick::resetImagePage} — Reset image page</li><li>{@link Imagick::resizeImage} — Scales an image</li><li>{@link Imagick::rollImage} — Offsets an image</li><li>{@link Imagick::rotateImage} — Rotates an image</li><li>{@link Imagick::rotationalBlurImage} — Description</li><li>{@link Imagick::roundCorners} — Rounds image corners</li><li>{@link Imagick::sampleImage} — Scales an image with pixel sampling</li><li>{@link Imagick::scaleImage} — Scales the size of an image</li><li>{@link Imagick::segmentImage} — Segments an image</li><li>{@link Imagick::selectiveBlurImage} — Description</li><li>{@link Imagick::separateImageChannel} — Separates a channel from the image</li><li>{@link Imagick::sepiaToneImage} — Sepia tones an image</li><li>{@link Imagick::setBackgroundColor} — Sets the object's default background color</li><li>{@link Imagick::setColorspace} — Set colorspace</li><li>{@link Imagick::setCompression} — Sets the object's default compression type</li><li>{@link Imagick::setCompressionQuality} — Sets the object's default compression quality</li><li>{@link Imagick::setFilename} — Sets the filename before you read or write the image</li><li>{@link Imagick::setFirstIterator} — Sets the Imagick iterator to the first image</li><li>{@link Imagick::setFont} — Sets font</li><li>{@link Imagick::setFormat} — Sets the format of the Imagick object</li><li>{@link Imagick::setGravity} — Sets the gravity</li><li>{@link Imagick::setImage} — Replaces image in the object</li><li>{@link Imagick::setImageAlphaChannel} — Sets image alpha channel</li><li>{@link Imagick::setImageArtifact} — Set image artifact</li><li>{@link Imagick::setImageAttribute} — Description</li><li>{@link Imagick::setImageBackgroundColor} — Sets the image background color</li><li>{@link Imagick::setImageBias} — Sets the image bias for any method that convolves an image</li><li>{@link Imagick::setImageBiasQuantum} — Description</li><li>{@link Imagick::setImageBluePrimary} — Sets the image chromaticity blue primary point</li><li>{@link Imagick::setImageBorderColor} — Sets the image border color</li><li>{@link Imagick::setImageChannelDepth} — Sets the depth of a particular image channel</li><li>{@link Imagick::setImageClipMask} — Sets image clip mask</li><li>{@link Imagick::setImageColormapColor} — Sets the color of the specified colormap index</li><li>{@link Imagick::setImageColorspace} — Sets the image colorspace</li><li>{@link Imagick::setImageCompose} — Sets the image composite operator</li><li>{@link Imagick::setImageCompression} — 设置图片压缩的类型</li><li>{@link Imagick::setImageCompressionQuality} — 设置图片压缩的质量</li><li>{@link Imagick::setImageDelay} — Sets the image delay</li><li>{@link Imagick::setImageDepth} — Sets the image depth</li><li>{@link Imagick::setImageDispose} — Sets the image disposal method</li><li>{@link Imagick::setImageExtent} — Sets the image size</li><li>{@link Imagick::setImageFilename} — Sets the filename of a particular image</li><li>{@link Imagick::setImageFormat} — 为图片设置指定的格式</li><li>{@link Imagick::setImageGamma} — Sets the image gamma</li><li>{@link Imagick::setImageGravity} — Sets the image gravity</li><li>{@link Imagick::setImageGreenPrimary} — Sets the image chromaticity green primary point</li><li>{@link Imagick::setImageIndex} — Set the iterator position</li><li>{@link Imagick::setImageInterlaceScheme} — Sets the image compression</li><li>{@link Imagick::setImageInterpolateMethod} — Sets the image interpolate pixel method</li><li>{@link Imagick::setImageIterations} — Sets the image iterations</li><li>{@link Imagick::setImageMatte} — Sets the image matte channel</li><li>{@link Imagick::setImageMatteColor} — Sets the image matte color</li><li>{@link Imagick::setImageOpacity} — Sets the image opacity level</li><li>{@link Imagick::setImageOrientation} — Sets the image orientation</li><li>{@link Imagick::setImagePage} — Sets the page geometry of the image</li><li>{@link Imagick::setImageProfile} — Adds a named profile to the Imagick object</li><li>{@link Imagick::setImageProperty} — Sets an image property</li><li>{@link Imagick::setImageRedPrimary} — Sets the image chromaticity red primary point</li><li>{@link Imagick::setImageRenderingIntent} — Sets the image rendering intent</li><li>{@link Imagick::setImageResolution} — Sets the image resolution</li><li>{@link Imagick::setImageScene} — Sets the image scene</li><li>{@link Imagick::setImageTicksPerSecond} — Sets the image ticks-per-second</li><li>{@link Imagick::setImageType} — Sets the image type</li><li>{@link Imagick::setImageUnits} — Sets the image units of resolution</li><li>{@link Imagick::setImageVirtualPixelMethod} — Sets the image virtual pixel method</li><li>{@link Imagick::setImageWhitePoint} — Sets the image chromaticity white point</li><li>{@link Imagick::setInterlaceScheme} — Sets the image compression</li><li>{@link Imagick::setIteratorIndex} — Set the iterator position</li><li>{@link Imagick::setLastIterator} — Sets the Imagick iterator to the last image</li><li>{@link Imagick::setOption} — Set an option</li><li>{@link Imagick::setPage} — Sets the page geometry of the Imagick object</li><li>{@link Imagick::setPointSize} — Sets point size</li><li>{@link Imagick::setProgressMonitor} — Description</li><li>{@link Imagick::setRegistry} — Description</li><li>{@link Imagick::setResolution} — Sets the image resolution</li><li>{@link Imagick::setResourceLimit} — Sets the limit for a particular resource in megabytes</li><li>{@link Imagick::setSamplingFactors} — Sets the image sampling factors</li><li>{@link Imagick::setSize} — Sets the size of the Imagick object</li><li>{@link Imagick::setSizeOffset} — Sets the size and offset of the Imagick object</li><li>{@link Imagick::setType} — Sets the image type attribute</li><li>{@link Imagick::shadeImage} — Creates a 3D effect</li><li>{@link Imagick::shadowImage} — Simulates an image shadow</li><li>{@link Imagick::sharpenImage} — Sharpens an image</li><li>{@link Imagick::shaveImage} — Shaves pixels from the image edges</li><li>{@link Imagick::shearImage} — Creating a parallelogram</li><li>{@link Imagick::sigmoidalContrastImage} — Adjusts the contrast of an image</li><li>{@link Imagick::sketchImage} — Simulates a pencil sketch</li><li>{@link Imagick::smushImages} — Description</li><li>{@link Imagick::solarizeImage} — Applies a solarizing effect to the image</li><li>{@link Imagick::sparseColorImage} — Interpolates colors</li><li>{@link Imagick::spliceImage} — Splices a solid color into the image</li><li>{@link Imagick::spreadImage} — Randomly displaces each pixel in a block</li><li>{@link Imagick::statisticImage} — Description</li><li>{@link Imagick::steganoImage} — Hides a digital watermark within the image</li><li>{@link Imagick::stereoImage} — Composites two images</li><li>{@link Imagick::stripImage} — 去掉图片的所有配置和设置</li><li>{@link Imagick::subImageMatch} — Description</li><li>{@link Imagick::swirlImage} — Swirls the pixels about the center of the image</li><li>{@link Imagick::textureImage} — Repeatedly tiles the texture image</li><li>{@link Imagick::thresholdImage} — Changes the value of individual pixels based on a threshold</li><li>{@link Imagick::thumbnailImage} — Changes the size of an image</li><li>{@link Imagick::tintImage} — Applies a color vector to each pixel in the image</li><li>{@link Imagick::__toString} — Returns the image as a string</li><li>{@link Imagick::transformImage} — Convenience method for setting crop size and the image geometry</li><li>{@link Imagick::transformImageColorspace} — Transforms an image to a new colorspace</li><li>{@link Imagick::transparentPaintImage} — Paints pixels transparent</li><li>{@link Imagick::transposeImage} — Creates a vertical mirror image</li><li>{@link Imagick::transverseImage} — Creates a horizontal mirror image</li><li>{@link Imagick::trimImage} — Remove edges from the image</li><li>{@link Imagick::uniqueImageColors} — Discards all but one of any pixel color</li><li>{@link Imagick::unsharpMaskImage} — Sharpens an image</li><li>{@link Imagick::valid} — Checks if the current item is valid</li><li>{@link Imagick::vignetteImage} — Adds vignette filter to the image</li><li>{@link Imagick::waveImage} — Applies wave filter to the image</li><li>{@link Imagick::whiteThresholdImage} — Force all pixels above the threshold into white</li><li>{@link Imagick::writeImage} — 把图片写入指定的文件</li><li>{@link Imagick::writeImageFile} — Writes an image to a filehandle</li><li>{@link Imagick::writeImages} — Writes an image or image sequence</li><li>{@link Imagick::writeImagesFile} — Writes frames to a filehandle</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.imagick.php">ImageMagick</a></div></div>
*/
class Imagick implements Iterator, Countable {
	const COLOR_BLACK = 11;
	const COLOR_BLUE = 12;
	const COLOR_CYAN = 13;
	const COLOR_GREEN = 14;
	const COLOR_RED = 15;
	const COLOR_YELLOW = 16;
	const COLOR_MAGENTA = 17;
	const COLOR_OPACITY = 18;
	const COLOR_ALPHA = 19;
	const COLOR_FUZZ = 20;
	const IMAGICK_EXTNUM = 30403;
	const IMAGICK_EXTVER = "3.4.3";
	const QUANTUM_RANGE = 65535;
	const USE_ZEND_MM = 0;
	const COMPOSITE_DEFAULT = 40;
	const COMPOSITE_UNDEFINED = 0;
	const COMPOSITE_NO = 1;
	const COMPOSITE_ADD = 2;
	const COMPOSITE_ATOP = 3;
	const COMPOSITE_BLEND = 4;
	const COMPOSITE_BUMPMAP = 5;
	const COMPOSITE_CLEAR = 7;
	const COMPOSITE_COLORBURN = 8;
	const COMPOSITE_COLORDODGE = 9;
	const COMPOSITE_COLORIZE = 10;
	const COMPOSITE_COPYBLACK = 11;
	const COMPOSITE_COPYBLUE = 12;
	const COMPOSITE_COPY = 13;
	const COMPOSITE_COPYCYAN = 14;
	const COMPOSITE_COPYGREEN = 15;
	const COMPOSITE_COPYMAGENTA = 16;
	const COMPOSITE_COPYOPACITY = 17;
	const COMPOSITE_COPYRED = 18;
	const COMPOSITE_COPYYELLOW = 19;
	const COMPOSITE_DARKEN = 20;
	const COMPOSITE_DSTATOP = 21;
	const COMPOSITE_DST = 22;
	const COMPOSITE_DSTIN = 23;
	const COMPOSITE_DSTOUT = 24;
	const COMPOSITE_DSTOVER = 25;
	const COMPOSITE_DIFFERENCE = 26;
	const COMPOSITE_DISPLACE = 27;
	const COMPOSITE_DISSOLVE = 28;
	const COMPOSITE_EXCLUSION = 29;
	const COMPOSITE_HARDLIGHT = 30;
	const COMPOSITE_HUE = 31;
	const COMPOSITE_IN = 32;
	const COMPOSITE_LIGHTEN = 33;
	const COMPOSITE_LUMINIZE = 35;
	const COMPOSITE_MINUS = 36;
	const COMPOSITE_MODULATE = 37;
	const COMPOSITE_MULTIPLY = 38;
	const COMPOSITE_OUT = 39;
	const COMPOSITE_OVER = 40;
	const COMPOSITE_OVERLAY = 41;
	const COMPOSITE_PLUS = 42;
	const COMPOSITE_REPLACE = 43;
	const COMPOSITE_SATURATE = 44;
	const COMPOSITE_SCREEN = 45;
	const COMPOSITE_SOFTLIGHT = 46;
	const COMPOSITE_SRCATOP = 47;
	const COMPOSITE_SRC = 48;
	const COMPOSITE_SRCIN = 49;
	const COMPOSITE_SRCOUT = 50;
	const COMPOSITE_SRCOVER = 51;
	const COMPOSITE_SUBTRACT = 52;
	const COMPOSITE_THRESHOLD = 53;
	const COMPOSITE_XOR = 54;
	const COMPOSITE_CHANGEMASK = 6;
	const COMPOSITE_LINEARLIGHT = 34;
	const COMPOSITE_DIVIDE = 55;
	const COMPOSITE_DISTORT = 56;
	const COMPOSITE_BLUR = 57;
	const COMPOSITE_PEGTOPLIGHT = 58;
	const COMPOSITE_VIVIDLIGHT = 59;
	const COMPOSITE_PINLIGHT = 60;
	const COMPOSITE_LINEARDODGE = 61;
	const COMPOSITE_LINEARBURN = 62;
	const COMPOSITE_MATHEMATICS = 63;
	const COMPOSITE_MODULUSADD = 2;
	const COMPOSITE_MODULUSSUBTRACT = 52;
	const COMPOSITE_MINUSDST = 36;
	const COMPOSITE_DIVIDEDST = 55;
	const COMPOSITE_DIVIDESRC = 64;
	const COMPOSITE_MINUSSRC = 65;
	const COMPOSITE_DARKENINTENSITY = 66;
	const COMPOSITE_LIGHTENINTENSITY = 67;
	const MONTAGEMODE_FRAME = 1;
	const MONTAGEMODE_UNFRAME = 2;
	const MONTAGEMODE_CONCATENATE = 3;
	const STYLE_NORMAL = 1;
	const STYLE_ITALIC = 2;
	const STYLE_OBLIQUE = 3;
	const STYLE_ANY = 4;
	const FILTER_UNDEFINED = 0;
	const FILTER_POINT = 1;
	const FILTER_BOX = 2;
	const FILTER_TRIANGLE = 3;
	const FILTER_HERMITE = 4;
	const FILTER_HANNING = 5;
	const FILTER_HAMMING = 6;
	const FILTER_BLACKMAN = 7;
	const FILTER_GAUSSIAN = 8;
	const FILTER_QUADRATIC = 9;
	const FILTER_CUBIC = 10;
	const FILTER_CATROM = 11;
	const FILTER_MITCHELL = 12;
	const FILTER_LANCZOS = 22;
	const FILTER_BESSEL = 13;
	const FILTER_SINC = 14;
	const FILTER_KAISER = 16;
	const FILTER_WELSH = 17;
	const FILTER_PARZEN = 18;
	const FILTER_LAGRANGE = 21;
	const FILTER_SENTINEL = 31;
	const FILTER_BOHMAN = 19;
	const FILTER_BARTLETT = 20;
	const FILTER_JINC = 13;
	const FILTER_SINCFAST = 15;
	const FILTER_ROBIDOUX = 26;
	const FILTER_LANCZOSSHARP = 23;
	const FILTER_LANCZOS2 = 24;
	const FILTER_LANCZOS2SHARP = 25;
	const FILTER_ROBIDOUXSHARP = 27;
	const FILTER_COSINE = 28;
	const FILTER_SPLINE = 29;
	const FILTER_LANCZOSRADIUS = 30;
	const IMGTYPE_UNDEFINED = 0;
	const IMGTYPE_BILEVEL = 1;
	const IMGTYPE_GRAYSCALE = 2;
	const IMGTYPE_GRAYSCALEMATTE = 3;
	const IMGTYPE_PALETTE = 4;
	const IMGTYPE_PALETTEMATTE = 5;
	const IMGTYPE_TRUECOLOR = 6;
	const IMGTYPE_TRUECOLORMATTE = 7;
	const IMGTYPE_COLORSEPARATION = 8;
	const IMGTYPE_COLORSEPARATIONMATTE = 9;
	const IMGTYPE_OPTIMIZE = 10;
	const IMGTYPE_PALETTEBILEVELMATTE = 11;
	const RESOLUTION_UNDEFINED = 0;
	const RESOLUTION_PIXELSPERINCH = 1;
	const RESOLUTION_PIXELSPERCENTIMETER = 2;
	const COMPRESSION_UNDEFINED = 0;
	const COMPRESSION_NO = 1;
	const COMPRESSION_BZIP = 2;
	const COMPRESSION_FAX = 6;
	const COMPRESSION_GROUP4 = 7;
	const COMPRESSION_JPEG = 8;
	const COMPRESSION_JPEG2000 = 9;
	const COMPRESSION_LOSSLESSJPEG = 10;
	const COMPRESSION_LZW = 11;
	const COMPRESSION_RLE = 12;
	const COMPRESSION_ZIP = 13;
	const COMPRESSION_DXT1 = 3;
	const COMPRESSION_DXT3 = 4;
	const COMPRESSION_DXT5 = 5;
	const COMPRESSION_ZIPS = 14;
	const COMPRESSION_PIZ = 15;
	const COMPRESSION_PXR24 = 16;
	const COMPRESSION_B44 = 17;
	const COMPRESSION_B44A = 18;
	const COMPRESSION_LZMA = 19;
	const COMPRESSION_JBIG1 = 20;
	const COMPRESSION_JBIG2 = 21;
	const PAINT_POINT = 1;
	const PAINT_REPLACE = 2;
	const PAINT_FLOODFILL = 3;
	const PAINT_FILLTOBORDER = 4;
	const PAINT_RESET = 5;
	const GRAVITY_NORTHWEST = 1;
	const GRAVITY_NORTH = 2;
	const GRAVITY_NORTHEAST = 3;
	const GRAVITY_WEST = 4;
	const GRAVITY_CENTER = 5;
	const GRAVITY_EAST = 6;
	const GRAVITY_SOUTHWEST = 7;
	const GRAVITY_SOUTH = 8;
	const GRAVITY_SOUTHEAST = 9;
	const GRAVITY_FORGET = 0;
	const GRAVITY_STATIC = 10;
	const STRETCH_NORMAL = 1;
	const STRETCH_ULTRACONDENSED = 2;
	const STRETCH_EXTRACONDENSED = 3;
	const STRETCH_CONDENSED = 4;
	const STRETCH_SEMICONDENSED = 5;
	const STRETCH_SEMIEXPANDED = 6;
	const STRETCH_EXPANDED = 7;
	const STRETCH_EXTRAEXPANDED = 8;
	const STRETCH_ULTRAEXPANDED = 9;
	const STRETCH_ANY = 10;
	const ALIGN_UNDEFINED = 0;
	const ALIGN_LEFT = 1;
	const ALIGN_CENTER = 2;
	const ALIGN_RIGHT = 3;
	const DECORATION_NO = 1;
	const DECORATION_UNDERLINE = 2;
	const DECORATION_OVERLINE = 3;
	const DECORATION_LINETROUGH = 4;
	const DECORATION_LINETHROUGH = 4;
	const NOISE_UNIFORM = 1;
	const NOISE_GAUSSIAN = 2;
	const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
	const NOISE_IMPULSE = 4;
	const NOISE_LAPLACIAN = 5;
	const NOISE_POISSON = 6;
	const NOISE_RANDOM = 7;
	const CHANNEL_UNDEFINED = 0;
	const CHANNEL_RED = 1;
	const CHANNEL_GRAY = 1;
	const CHANNEL_CYAN = 1;
	const CHANNEL_GREEN = 2;
	const CHANNEL_MAGENTA = 2;
	const CHANNEL_BLUE = 4;
	const CHANNEL_YELLOW = 4;
	const CHANNEL_ALPHA = 8;
	const CHANNEL_OPACITY = 8;
	const CHANNEL_MATTE = 8;
	const CHANNEL_BLACK = 32;
	const CHANNEL_INDEX = 32;
	const CHANNEL_ALL = 134217727;
	const CHANNEL_DEFAULT = 134217719;
	const CHANNEL_RGBA = 15;
	const CHANNEL_TRUEALPHA = 64;
	const CHANNEL_RGBS = 128;
	const CHANNEL_GRAY_CHANNELS = 128;
	const CHANNEL_SYNC = 256;
	const CHANNEL_COMPOSITES = 47;
	const METRIC_UNDEFINED = 0;
	const METRIC_ABSOLUTEERRORMETRIC = 1;
	const METRIC_MEANABSOLUTEERROR = 2;
	const METRIC_MEANERRORPERPIXELMETRIC = 3;
	const METRIC_MEANSQUAREERROR = 4;
	const METRIC_PEAKABSOLUTEERROR = 5;
	const METRIC_PEAKSIGNALTONOISERATIO = 6;
	const METRIC_ROOTMEANSQUAREDERROR = 7;
	const METRIC_NORMALIZEDCROSSCORRELATIONERRORMETRIC = 8;
	const METRIC_FUZZERROR = 9;
	const PIXEL_CHAR = 1;
	const PIXEL_DOUBLE = 2;
	const PIXEL_FLOAT = 3;
	const PIXEL_INTEGER = 4;
	const PIXEL_LONG = 5;
	const PIXEL_QUANTUM = 6;
	const PIXEL_SHORT = 7;
	const EVALUATE_UNDEFINED = 0;
	const EVALUATE_ADD = 1;
	const EVALUATE_AND = 2;
	const EVALUATE_DIVIDE = 3;
	const EVALUATE_LEFTSHIFT = 4;
	const EVALUATE_MAX = 5;
	const EVALUATE_MIN = 6;
	const EVALUATE_MULTIPLY = 7;
	const EVALUATE_OR = 8;
	const EVALUATE_RIGHTSHIFT = 9;
	const EVALUATE_SET = 10;
	const EVALUATE_SUBTRACT = 11;
	const EVALUATE_XOR = 12;
	const EVALUATE_POW = 13;
	const EVALUATE_LOG = 14;
	const EVALUATE_THRESHOLD = 15;
	const EVALUATE_THRESHOLDBLACK = 16;
	const EVALUATE_THRESHOLDWHITE = 17;
	const EVALUATE_GAUSSIANNOISE = 18;
	const EVALUATE_IMPULSENOISE = 19;
	const EVALUATE_LAPLACIANNOISE = 20;
	const EVALUATE_MULTIPLICATIVENOISE = 21;
	const EVALUATE_POISSONNOISE = 22;
	const EVALUATE_UNIFORMNOISE = 23;
	const EVALUATE_COSINE = 24;
	const EVALUATE_SINE = 25;
	const EVALUATE_ADDMODULUS = 26;
	const EVALUATE_MEAN = 27;
	const EVALUATE_ABS = 28;
	const EVALUATE_EXPONENTIAL = 29;
	const EVALUATE_MEDIAN = 30;
	const EVALUATE_SUM = 31;
	const COLORSPACE_UNDEFINED = 0;
	const COLORSPACE_RGB = 1;
	const COLORSPACE_GRAY = 2;
	const COLORSPACE_TRANSPARENT = 3;
	const COLORSPACE_OHTA = 4;
	const COLORSPACE_LAB = 5;
	const COLORSPACE_XYZ = 6;
	const COLORSPACE_YCBCR = 7;
	const COLORSPACE_YCC = 8;
	const COLORSPACE_YIQ = 9;
	const COLORSPACE_YPBPR = 10;
	const COLORSPACE_YUV = 11;
	const COLORSPACE_CMYK = 12;
	const COLORSPACE_SRGB = 13;
	const COLORSPACE_HSB = 14;
	const COLORSPACE_HSL = 15;
	const COLORSPACE_HWB = 16;
	const COLORSPACE_REC601LUMA = 17;
	const COLORSPACE_REC709LUMA = 19;
	const COLORSPACE_LOG = 21;
	const COLORSPACE_CMY = 22;
	const COLORSPACE_LUV = 23;
	const COLORSPACE_HCL = 24;
	const COLORSPACE_LCH = 25;
	const COLORSPACE_LMS = 26;
	const COLORSPACE_LCHAB = 27;
	const COLORSPACE_LCHUV = 28;
	const COLORSPACE_SCRGB = 29;
	const COLORSPACE_HSI = 30;
	const COLORSPACE_HSV = 31;
	const COLORSPACE_HCLP = 32;
	const COLORSPACE_YDBDR = 33;
	const COLORSPACE_REC601YCBCR = 18;
	const COLORSPACE_REC709YCBCR = 20;
	const VIRTUALPIXELMETHOD_UNDEFINED = 0;
	const VIRTUALPIXELMETHOD_BACKGROUND = 1;
	const VIRTUALPIXELMETHOD_CONSTANT = 2;
	const VIRTUALPIXELMETHOD_EDGE = 4;
	const VIRTUALPIXELMETHOD_MIRROR = 5;
	const VIRTUALPIXELMETHOD_TILE = 7;
	const VIRTUALPIXELMETHOD_TRANSPARENT = 8;
	const VIRTUALPIXELMETHOD_MASK = 9;
	const VIRTUALPIXELMETHOD_BLACK = 10;
	const VIRTUALPIXELMETHOD_GRAY = 11;
	const VIRTUALPIXELMETHOD_WHITE = 12;
	const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;
	const VIRTUALPIXELMETHOD_VERTICALTILE = 14;
	const VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE = 15;
	const VIRTUALPIXELMETHOD_VERTICALTILEEDGE = 16;
	const VIRTUALPIXELMETHOD_CHECKERTILE = 17;
	const PREVIEW_UNDEFINED = 0;
	const PREVIEW_ROTATE = 1;
	const PREVIEW_SHEAR = 2;
	const PREVIEW_ROLL = 3;
	const PREVIEW_HUE = 4;
	const PREVIEW_SATURATION = 5;
	const PREVIEW_BRIGHTNESS = 6;
	const PREVIEW_GAMMA = 7;
	const PREVIEW_SPIFF = 8;
	const PREVIEW_DULL = 9;
	const PREVIEW_GRAYSCALE = 10;
	const PREVIEW_QUANTIZE = 11;
	const PREVIEW_DESPECKLE = 12;
	const PREVIEW_REDUCENOISE = 13;
	const PREVIEW_ADDNOISE = 14;
	const PREVIEW_SHARPEN = 15;
	const PREVIEW_BLUR = 16;
	const PREVIEW_THRESHOLD = 17;
	const PREVIEW_EDGEDETECT = 18;
	const PREVIEW_SPREAD = 19;
	const PREVIEW_SOLARIZE = 20;
	const PREVIEW_SHADE = 21;
	const PREVIEW_RAISE = 22;
	const PREVIEW_SEGMENT = 23;
	const PREVIEW_SWIRL = 24;
	const PREVIEW_IMPLODE = 25;
	const PREVIEW_WAVE = 26;
	const PREVIEW_OILPAINT = 27;
	const PREVIEW_CHARCOALDRAWING = 28;
	const PREVIEW_JPEG = 29;
	const RENDERINGINTENT_UNDEFINED = 0;
	const RENDERINGINTENT_SATURATION = 1;
	const RENDERINGINTENT_PERCEPTUAL = 2;
	const RENDERINGINTENT_ABSOLUTE = 3;
	const RENDERINGINTENT_RELATIVE = 4;
	const INTERLACE_UNDEFINED = 0;
	const INTERLACE_NO = 1;
	const INTERLACE_LINE = 2;
	const INTERLACE_PLANE = 3;
	const INTERLACE_PARTITION = 4;
	const INTERLACE_GIF = 5;
	const INTERLACE_JPEG = 6;
	const INTERLACE_PNG = 7;
	const FILLRULE_UNDEFINED = 0;
	const FILLRULE_EVENODD = 1;
	const FILLRULE_NONZERO = 2;
	const PATHUNITS_UNDEFINED = 0;
	const PATHUNITS_USERSPACE = 1;
	const PATHUNITS_USERSPACEONUSE = 2;
	const PATHUNITS_OBJECTBOUNDINGBOX = 3;
	const LINECAP_UNDEFINED = 0;
	const LINECAP_BUTT = 1;
	const LINECAP_ROUND = 2;
	const LINECAP_SQUARE = 3;
	const LINEJOIN_UNDEFINED = 0;
	const LINEJOIN_MITER = 1;
	const LINEJOIN_ROUND = 2;
	const LINEJOIN_BEVEL = 3;
	const RESOURCETYPE_UNDEFINED = 0;
	const RESOURCETYPE_AREA = 1;
	const RESOURCETYPE_DISK = 2;
	const RESOURCETYPE_FILE = 3;
	const RESOURCETYPE_MAP = 4;
	const RESOURCETYPE_MEMORY = 5;
	const RESOURCETYPE_TIME = 7;
	const RESOURCETYPE_THROTTLE = 8;
	const RESOURCETYPE_THREAD = 6;
	const DISPOSE_UNRECOGNIZED = 0;
	const DISPOSE_UNDEFINED = 0;
	const DISPOSE_NONE = 1;
	const DISPOSE_BACKGROUND = 2;
	const DISPOSE_PREVIOUS = 3;
	const INTERPOLATE_UNDEFINED = 0;
	const INTERPOLATE_AVERAGE = 1;
	const INTERPOLATE_BICUBIC = 2;
	const INTERPOLATE_BILINEAR = 3;
	const INTERPOLATE_FILTER = 4;
	const INTERPOLATE_INTEGER = 5;
	const INTERPOLATE_MESH = 6;
	const INTERPOLATE_NEARESTNEIGHBOR = 7;
	const INTERPOLATE_SPLINE = 8;
	const LAYERMETHOD_UNDEFINED = 0;
	const LAYERMETHOD_COALESCE = 1;
	const LAYERMETHOD_COMPAREANY = 2;
	const LAYERMETHOD_COMPARECLEAR = 3;
	const LAYERMETHOD_COMPAREOVERLAY = 4;
	const LAYERMETHOD_DISPOSE = 5;
	const LAYERMETHOD_OPTIMIZE = 6;
	const LAYERMETHOD_OPTIMIZEPLUS = 8;
	const LAYERMETHOD_OPTIMIZETRANS = 9;
	const LAYERMETHOD_COMPOSITE = 12;
	const LAYERMETHOD_OPTIMIZEIMAGE = 7;
	const LAYERMETHOD_REMOVEDUPS = 10;
	const LAYERMETHOD_REMOVEZERO = 11;
	const LAYERMETHOD_TRIMBOUNDS = 16;
	const ORIENTATION_UNDEFINED = 0;
	const ORIENTATION_TOPLEFT = 1;
	const ORIENTATION_TOPRIGHT = 2;
	const ORIENTATION_BOTTOMRIGHT = 3;
	const ORIENTATION_BOTTOMLEFT = 4;
	const ORIENTATION_LEFTTOP = 5;
	const ORIENTATION_RIGHTTOP = 6;
	const ORIENTATION_RIGHTBOTTOM = 7;
	const ORIENTATION_LEFTBOTTOM = 8;
	const DISTORTION_UNDEFINED = 0;
	const DISTORTION_AFFINE = 1;
	const DISTORTION_AFFINEPROJECTION = 2;
	const DISTORTION_ARC = 9;
	const DISTORTION_BILINEAR = 6;
	const DISTORTION_PERSPECTIVE = 4;
	const DISTORTION_PERSPECTIVEPROJECTION = 5;
	const DISTORTION_SCALEROTATETRANSLATE = 3;
	const DISTORTION_POLYNOMIAL = 8;
	const DISTORTION_POLAR = 10;
	const DISTORTION_DEPOLAR = 11;
	const DISTORTION_BARREL = 14;
	const DISTORTION_SHEPARDS = 16;
	const DISTORTION_SENTINEL = 18;
	const DISTORTION_BARRELINVERSE = 15;
	const DISTORTION_BILINEARFORWARD = 6;
	const DISTORTION_BILINEARREVERSE = 7;
	const DISTORTION_RESIZE = 17;
	const DISTORTION_CYLINDER2PLANE = 12;
	const DISTORTION_PLANE2CYLINDER = 13;
	const LAYERMETHOD_MERGE = 13;
	const LAYERMETHOD_FLATTEN = 14;
	const LAYERMETHOD_MOSAIC = 15;
	const ALPHACHANNEL_ACTIVATE = 1;
	const ALPHACHANNEL_RESET = 7;
	const ALPHACHANNEL_SET = 8;
	const ALPHACHANNEL_UNDEFINED = 0;
	const ALPHACHANNEL_COPY = 3;
	const ALPHACHANNEL_DEACTIVATE = 4;
	const ALPHACHANNEL_EXTRACT = 5;
	const ALPHACHANNEL_OPAQUE = 6;
	const ALPHACHANNEL_SHAPE = 9;
	const ALPHACHANNEL_TRANSPARENT = 10;
	const SPARSECOLORMETHOD_UNDEFINED = 0;
	const SPARSECOLORMETHOD_BARYCENTRIC = 1;
	const SPARSECOLORMETHOD_BILINEAR = 7;
	const SPARSECOLORMETHOD_POLYNOMIAL = 8;
	const SPARSECOLORMETHOD_SPEPARDS = 16;
	const SPARSECOLORMETHOD_VORONOI = 18;
	const SPARSECOLORMETHOD_INVERSE = 19;
	const DITHERMETHOD_UNDEFINED = 0;
	const DITHERMETHOD_NO = 1;
	const DITHERMETHOD_RIEMERSMA = 2;
	const DITHERMETHOD_FLOYDSTEINBERG = 3;
	const FUNCTION_UNDEFINED = 0;
	const FUNCTION_POLYNOMIAL = 1;
	const FUNCTION_SINUSOID = 2;
	const ALPHACHANNEL_BACKGROUND = 2;
	const FUNCTION_ARCSIN = 3;
	const FUNCTION_ARCTAN = 4;
	const ALPHACHANNEL_FLATTEN = 11;
	const ALPHACHANNEL_REMOVE = 12;
	const STATISTIC_GRADIENT = 1;
	const STATISTIC_MAXIMUM = 2;
	const STATISTIC_MEAN = 3;
	const STATISTIC_MEDIAN = 4;
	const STATISTIC_MINIMUM = 5;
	const STATISTIC_MODE = 6;
	const STATISTIC_NONPEAK = 7;
	const STATISTIC_STANDARD_DEVIATION = 8;
	const MORPHOLOGY_CONVOLVE = 1;
	const MORPHOLOGY_CORRELATE = 2;
	const MORPHOLOGY_ERODE = 3;
	const MORPHOLOGY_DILATE = 4;
	const MORPHOLOGY_ERODE_INTENSITY = 5;
	const MORPHOLOGY_DILATE_INTENSITY = 6;
	const MORPHOLOGY_DISTANCE = 7;
	const MORPHOLOGY_OPEN = 8;
	const MORPHOLOGY_CLOSE = 9;
	const MORPHOLOGY_OPEN_INTENSITY = 10;
	const MORPHOLOGY_CLOSE_INTENSITY = 11;
	const MORPHOLOGY_SMOOTH = 12;
	const MORPHOLOGY_EDGE_IN = 13;
	const MORPHOLOGY_EDGE_OUT = 14;
	const MORPHOLOGY_EDGE = 15;
	const MORPHOLOGY_TOP_HAT = 16;
	const MORPHOLOGY_BOTTOM_HAT = 17;
	const MORPHOLOGY_HIT_AND_MISS = 18;
	const MORPHOLOGY_THINNING = 19;
	const MORPHOLOGY_THICKEN = 20;
	const MORPHOLOGY_VORONOI = 21;
	const MORPHOLOGY_ITERATIVE = 22;
	const KERNEL_UNITY = 1;
	const KERNEL_GAUSSIAN = 2;
	const KERNEL_DIFFERENCE_OF_GAUSSIANS = 3;
	const KERNEL_LAPLACIAN_OF_GAUSSIANS = 4;
	const KERNEL_BLUR = 5;
	const KERNEL_COMET = 6;
	const KERNEL_LAPLACIAN = 7;
	const KERNEL_SOBEL = 8;
	const KERNEL_FREI_CHEN = 9;
	const KERNEL_ROBERTS = 10;
	const KERNEL_PREWITT = 11;
	const KERNEL_COMPASS = 12;
	const KERNEL_KIRSCH = 13;
	const KERNEL_DIAMOND = 14;
	const KERNEL_SQUARE = 15;
	const KERNEL_RECTANGLE = 16;
	const KERNEL_OCTAGON = 17;
	const KERNEL_DISK = 18;
	const KERNEL_PLUS = 19;
	const KERNEL_CROSS = 20;
	const KERNEL_RING = 21;
	const KERNEL_PEAKS = 22;
	const KERNEL_EDGES = 23;
	const KERNEL_CORNERS = 24;
	const KERNEL_DIAGONALS = 25;
	const KERNEL_LINE_ENDS = 26;
	const KERNEL_LINE_JUNCTIONS = 27;
	const KERNEL_RIDGES = 28;
	const KERNEL_CONVEX_HULL = 29;
	const KERNEL_THIN_SE = 30;
	const KERNEL_SKELETON = 31;
	const KERNEL_CHEBYSHEV = 32;
	const KERNEL_MANHATTAN = 33;
	const KERNEL_OCTAGONAL = 34;
	const KERNEL_EUCLIDEAN = 35;
	const KERNEL_USER_DEFINED = 36;
	const KERNEL_BINOMIAL = 37;
	const DIRECTION_LEFT_TO_RIGHT = 2;
	const DIRECTION_RIGHT_TO_LEFT = 1;
	const NORMALIZE_KERNEL_NONE = 0;
	const NORMALIZE_KERNEL_VALUE = 8192;
	const NORMALIZE_KERNEL_CORRELATE = 65536;
	const NORMALIZE_KERNEL_PERCENT = 4096;

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes repeated portions of images to optimize
	 * @link http://php.net/manual/en/imagick.optimizeimagelayers.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function optimizeImageLayers () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the maximum bounding region between images
	 * @link http://php.net/manual/en/imagick.compareimagelayers.php
	 * @param int $method <p>
	 * One of the layer method constants.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function compareImageLayers ($method) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Quickly fetch attributes
	 * @link http://php.net/manual/en/imagick.pingimageblob.php
	 * @param string $image <p>
	 * A string containing the image.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function pingImageBlob ($image) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Get basic image attributes in a lightweight manner
	 * @link http://php.net/manual/en/imagick.pingimagefile.php
	 * @param resource $filehandle <p>
	 * An open filehandle to the image.
	 * </p>
	 * @param string $fileName [optional] <p>
	 * Optional filename for this image.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function pingImageFile ($filehandle, $fileName = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a vertical mirror image
	 * @link http://php.net/manual/en/imagick.transposeimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function transposeImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a horizontal mirror image
	 * @link http://php.net/manual/en/imagick.transverseimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function transverseImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Remove edges from the image
	 * @link http://php.net/manual/en/imagick.trimimage.php
	 * @param float $fuzz <p>
	 * By default target must match a particular pixel color exactly.
	 * However, in many cases two colors may differ by a small amount.
	 * The fuzz member of image defines how much tolerance is acceptable
	 * to consider two colors as the same. This parameter represents the variation
	 * on the quantum range.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function trimImage ($fuzz) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies wave filter to the image
	 * @link http://php.net/manual/en/imagick.waveimage.php
	 * @param float $amplitude <p>
	 * The amplitude of the wave.
	 * </p>
	 * @param float $length <p>
	 * The length of the wave.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function waveImage ($amplitude, $length) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds vignette filter to the image
	 * @link http://php.net/manual/en/imagick.vignetteimage.php
	 * @param float $blackPoint <p>
	 * The black point.
	 * </p>
	 * @param float $whitePoint <p>
	 * The white point
	 * </p>
	 * @param int $x <p>
	 * X offset of the ellipse
	 * </p>
	 * @param int $y <p>
	 * Y offset of the ellipse
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function vignetteImage ($blackPoint, $whitePoint, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Discards all but one of any pixel color
	 * @link http://php.net/manual/en/imagick.uniqueimagecolors.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function uniqueImageColors () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Return if the image has a matte channel
	 * @link http://php.net/manual/en/imagick.getimagematte.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function getImageMatte () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image matte channel
	 * @link http://php.net/manual/en/imagick.setimagematte.php
	 * @param bool $matte <p>
	 * True activates the matte channel and false disables it.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageMatte ($matte) {}

	/**
	 * Adaptively resize image with data dependent triangulation
	 *
	 * If legacy is true, the calculations are done with the small rounding bug that existed in Imagick before 3.4.0.<br>
	 * If false, the calculations should produce the same results as ImageMagick CLI does.<br>
	 * <br>
	 * <b>Note:</b> The behavior of the parameter bestfit changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched.
	 * In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If bestfit parameter is used both width and height must be given.
	 * @link http://php.net/manual/en/imagick.adaptiveresizeimage.php
	 * @param int $columns The number of columns in the scaled image.
	 * @param int $rows The number of rows in the scaled image.
	 * @param bool $bestfit [optional] Whether to fit the image inside a bounding box.<br>
	 *                                 The behavior of the parameter bestfit changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If bestfit parameter is used both width and height must be given.
	 * @param bool $legacy [optional] Added since 3.4.0. Default value FALSE
	 * @return bool TRUE on success
	 * @throws ImagickException Throws ImagickException on error
	 * @since 2.0.0
	 */
	public function adaptiveResizeImage ($columns, $rows, $bestfit = false, $legacy = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates a pencil sketch
	 * @link http://php.net/manual/en/imagick.sketchimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param float $angle <p>
	 * Apply the effect along this angle.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sketchImage ($radius, $sigma, $angle) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a 3D effect
	 * @link http://php.net/manual/en/imagick.shadeimage.php
	 * @param bool $gray <p>
	 * A value other than zero shades the intensity of each pixel.
	 * </p>
	 * @param float $azimuth <p>
	 * Defines the light source direction.
	 * </p>
	 * @param float $elevation <p>
	 * Defines the light source direction.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shadeImage ($gray, $azimuth, $elevation) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the size offset
	 * @link http://php.net/manual/en/imagick.getsizeoffset.php
	 * @return int the size offset associated with the Imagick object.
	 */
	public function getSizeOffset () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the size and offset of the Imagick object
	 * @link http://php.net/manual/en/imagick.setsizeoffset.php
	 * @param int $columns <p>
	 * The width in pixels.
	 * </p>
	 * @param int $rows <p>
	 * The height in pixels.
	 * </p>
	 * @param int $offset <p>
	 * The image offset.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setSizeOffset ($columns, $rows, $offset) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds adaptive blur filter to image
	 * @link http://php.net/manual/en/imagick.adaptiveblurimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * Provide a value of 0 and the radius will be chosen automagically.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptiveBlurImage ($radius, $sigma, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Enhances the contrast of a color image
	 * @link http://php.net/manual/en/imagick.contraststretchimage.php
	 * @param float $black_point <p>
	 * The black point.
	 * </p>
	 * @param float $white_point <p>
	 * The white point.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. <b>Imagick::CHANNEL_ALL</b>. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function contrastStretchImage ($black_point, $white_point, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adaptively sharpen the image
	 * @link http://php.net/manual/en/imagick.adaptivesharpenimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel. Use 0 for auto-select.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptiveSharpenImage ($radius, $sigma, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a high-contrast, two-color image
	 * @link http://php.net/manual/en/imagick.randomthresholdimage.php
	 * @param float $low <p>
	 * The low point
	 * </p>
	 * @param float $high <p>
	 * The high point
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function randomThresholdImage ($low, $high, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * @param $xRounding
	 * @param $yRounding
	 * @param $strokeWidth [optional]
	 * @param $displace [optional]
	 * @param $sizeCorrection [optional]
	 */
	public function roundCornersImage ($xRounding, $yRounding, $strokeWidth, $displace, $sizeCorrection) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Rounds image corners
	 * @link http://php.net/manual/en/imagick.roundcorners.php
	 * @param float $x_rounding <p>
	 * x rounding
	 * </p>
	 * @param float $y_rounding <p>
	 * y rounding
	 * </p>
	 * @param float $stroke_width [optional] <p>
	 * stroke width
	 * </p>
	 * @param float $displace [optional] <p>
	 * image displace
	 * </p>
	 * @param float $size_correction [optional] <p>
	 * size correction
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function roundCorners ($x_rounding, $y_rounding, $stroke_width = 10.0, $displace = 5.0, $size_correction = -6.0) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the iterator position
	 * @link http://php.net/manual/en/imagick.setiteratorindex.php
	 * @param int $index <p>
	 * The position to set the iterator to
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setIteratorIndex ($index) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the index of the current active image
	 * @link http://php.net/manual/en/imagick.getiteratorindex.php
	 * @return int an integer containing the index of the image in the stack.
	 */
	public function getIteratorIndex () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Convenience method for setting crop size and the image geometry
	 * @link http://php.net/manual/en/imagick.transformimage.php
	 * @param string $crop <p>
	 * A crop geometry string. This geometry defines a subregion of the image to crop.
	 * </p>
	 * @param string $geometry <p>
	 * An image geometry string. This geometry defines the final size of the image.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function transformImage ($crop, $geometry) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image opacity level
	 * @link http://php.net/manual/en/imagick.setimageopacity.php
	 * @param float $opacity <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageOpacity ($opacity) {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * Performs an ordered dither
	 * @link http://php.net/manual/en/imagick.orderedposterizeimage.php
	 * @param string $threshold_map <p>
	 * A string containing the name of the threshold dither map to use
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function orderedPosterizeImage ($threshold_map, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates a Polaroid picture
	 * @link http://php.net/manual/en/imagick.polaroidimage.php
	 * @param ImagickDraw $properties <p>
	 * The polaroid properties
	 * </p>
	 * @param float $angle <p>
	 * The polaroid angle
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function polaroidImage (ImagickDraw $properties, $angle) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the named image property
	 * @link http://php.net/manual/en/imagick.getimageproperty.php
	 * @param string $name <p>
	 * name of the property (for example Exif:DateTime)
	 * </p>
	 * @return string a string containing the image property, false if a
	 * property with the given name does not exist.
	 */
	public function getImageProperty ($name) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets an image property
	 * @link http://php.net/manual/en/imagick.setimageproperty.php
	 * @param string $name
	 * @param string $value
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageProperty ($name, $value) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image interpolate pixel method
	 * @link http://php.net/manual/en/imagick.setimageinterpolatemethod.php
	 * @param int $method <p>
	 * The method is one of the <b>Imagick::INTERPOLATE_*</b> constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageInterpolateMethod ($method) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the interpolation method
	 * @link http://php.net/manual/en/imagick.getimageinterpolatemethod.php
	 * @return int the interpolate method on success.
	 */
	public function getImageInterpolateMethod () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Stretches with saturation the image intensity
	 * @link http://php.net/manual/en/imagick.linearstretchimage.php
	 * @param float $blackPoint <p>
	 * The image black point
	 * </p>
	 * @param float $whitePoint <p>
	 * The image white point
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function linearStretchImage ($blackPoint, $whitePoint) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image length in bytes
	 * @link http://php.net/manual/en/imagick.getimagelength.php
	 * @return int an int containing the current image size.
	 */
	public function getImageLength () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Set image size
	 * @link http://php.net/manual/en/imagick.extentimage.php
	 * @param int $width <p>
	 * The new width
	 * </p>
	 * @param int $height <p>
	 * The new height
	 * </p>
	 * @param int $x <p>
	 * X position for the new size
	 * </p>
	 * @param int $y <p>
	 * Y position for the new size
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function extentImage ($width, $height, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image orientation
	 * @link http://php.net/manual/en/imagick.getimageorientation.php
	 * @return int an int on success.
	 */
	public function getImageOrientation () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image orientation
	 * @link http://php.net/manual/en/imagick.setimageorientation.php
	 * @param int $orientation <p>
	 * One of the orientation constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageOrientation ($orientation) {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.paintfloodfillimage.php
	 * @param mixed $fill <p>
	 * ImagickPixel object or a string containing the fill color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at
	 * intensities of 100 and 102 respectively are now interpreted as the
	 * same color for the purposes of the floodfill.
	 * </p>
	 * @param mixed $bordercolor <p>
	 * ImagickPixel object or a string containing the border color
	 * </p>
	 * @param int $x <p>
	 * X start position of the floodfill
	 * </p>
	 * @param int $y <p>
	 * Y start position of the floodfill
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function paintFloodfillImage ($fill, $fuzz, $bordercolor, $x, $y, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Replaces colors in the image from a color lookup table. Optional second parameter to replace colors in a specific channel. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.
	 * @link http://php.net/manual/en/imagick.clutimage.php
	 * @param Imagick $lookup_table <p>
	 * Imagick object containing the color lookup table
	 * </p>
	 * @param int $channel [optional] <p>
	 * The Channeltype
	 * constant. When not supplied, default channels are replaced.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 * @since 2.0.0
	 */
	public function clutImage (Imagick $lookup_table, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image properties
	 * @link http://php.net/manual/en/imagick.getimageproperties.php
	 * @param string $pattern [optional] <p>
	 * The pattern for property names.
	 * </p>
	 * @param bool $only_names [optional] <p>
	 * Whether to return only property names. If <b>FALSE</b> then also the values are returned
	 * </p>
	 * @return array an array containing the image properties or property names.
	 */
	public function getImageProperties ($pattern = "*", $only_names = true) {}

	/**
	 * (PECL imagick 2.2.0)<br/>
	 * Returns the image profiles
	 * @link http://php.net/manual/en/imagick.getimageprofiles.php
	 * @param string $pattern [optional] <p>
	 * The pattern for profile names.
	 * </p>
	 * @param bool $include_values [optional] <p>
	 * Whether to return only profile names. If <b>FALSE</b> then only profile names will be returned.
	 * </p>
	 * @return array an array containing the image profiles or profile names.
	 */
	public function getImageProfiles ($pattern = "*", $include_values = true) {}

	/**
	 * (PECL imagick 2.0.1)<br/>
	 * Distorts an image using various distortion methods
	 * @link http://php.net/manual/en/imagick.distortimage.php
	 * @param int $method <p>
	 * The method of image distortion. See distortion constants
	 * </p>
	 * @param array $arguments <p>
	 * The arguments for this distortion method
	 * </p>
	 * @param bool $bestfit <p>
	 * Attempt to resize destination to fit distorted source
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function distortImage ($method, array $arguments, $bestfit) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Writes an image to a filehandle
	 * @link http://php.net/manual/en/imagick.writeimagefile.php
	 * @param resource $filehandle <p>
	 * Filehandle where to write the image
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeImageFile ($filehandle) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Writes frames to a filehandle
	 * @link http://php.net/manual/en/imagick.writeimagesfile.php
	 * @param resource $filehandle <p>
	 * Filehandle where to write the images
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeImagesFile ($filehandle) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Reset image page
	 * @link http://php.net/manual/en/imagick.resetimagepage.php
	 * @param string $page <p>
	 * The page definition. For example 7168x5147+0+0
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resetImagePage ($page) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Sets image clip mask
	 * @link http://php.net/manual/en/imagick.setimageclipmask.php
	 * @param Imagick $clip_mask <p>
	 * The Imagick object containing the clip mask
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageClipMask (Imagick $clip_mask) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Gets image clip mask
	 * @link http://php.net/manual/en/imagick.getimageclipmask.php
	 * @return Imagick an Imagick object containing the clip mask.
	 */
	public function getImageClipMask () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Animates an image or images
	 * @link http://php.net/manual/en/imagick.animateimages.php
	 * @param string $x_server <p>
	 * X server address
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function animateImages ($x_server) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Recolors image
	 * @link http://php.net/manual/en/imagick.recolorimage.php
	 * @param array $matrix <p>
	 * The matrix containing the color values
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function recolorImage (array $matrix) {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Sets font
	 * @link http://php.net/manual/en/imagick.setfont.php
	 * @param string $font <p>
	 * Font name or a filename
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setFont ($font) {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Gets font
	 * @link http://php.net/manual/en/imagick.getfont.php
	 * @return string the string containing the font name or <b>FALSE</b> if not font is set.
	 */
	public function getFont () {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Sets point size
	 * @link http://php.net/manual/en/imagick.setpointsize.php
	 * @param float $point_size <p>
	 * Point size
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setPointSize ($point_size) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Gets point size
	 * @link http://php.net/manual/en/imagick.getpointsize.php
	 * @return float a float containing the point size.
	 */
	public function getPointSize () {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Merges image layers
	 * @link http://php.net/manual/en/imagick.mergeimagelayers.php
	 * @param int $layer_method <p>
	 * One of the <b>Imagick::LAYERMETHOD_*</b> constants
	 * </p>
	 * @return Imagick Returns an Imagick object containing the merged image.
	 * @throws ImagickException
	 */
	public function mergeImageLayers ($layer_method) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Sets image alpha channel
	 * @link http://php.net/manual/en/imagick.setimagealphachannel.php
	 * @param int $mode <p>
	 * One of the <b>Imagick::ALPHACHANNEL_*</b> constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageAlphaChannel ($mode) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.floodfillpaintimage.php
	 * @param mixed $fill <p>
	 * ImagickPixel object or a string containing the fill color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param mixed $target <p>
	 * ImagickPixel object or a string containing the target color to paint
	 * </p>
	 * @param int $x <p>
	 * X start position of the floodfill
	 * </p>
	 * @param int $y <p>
	 * Y start position of the floodfill
	 * </p>
	 * @param bool $invert <p>
	 * If <b>TRUE</b> paints any pixel that does not match the target color.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function floodFillPaintImage ($fill, $fuzz, $target, $x, $y, $invert, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.opaquepaintimage.php
	 * @param mixed $target <p>
	 * ImagickPixel object or a string containing the color to change
	 * </p>
	 * @param mixed $fill <p>
	 * The replacement color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param bool $invert <p>
	 * If <b>TRUE</b> paints any pixel that does not match the target color.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function opaquePaintImage ($target, $fill, $fuzz, $invert, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Paints pixels transparent
	 * @link http://php.net/manual/en/imagick.transparentpaintimage.php
	 * @param mixed $target <p>
	 * The target color to paint
	 * </p>
	 * @param float $alpha <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param bool $invert <p>
	 * If <b>TRUE</b> paints any pixel that does not match the target color.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function transparentPaintImage ($target, $alpha, $fuzz, $invert) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Animates an image or images
	 * @link http://php.net/manual/en/imagick.liquidrescaleimage.php
	 * @param int $width <p>
	 * The width of the target size
	 * </p>
	 * @param int $height <p>
	 * The height of the target size
	 * </p>
	 * @param float $delta_x <p>
	 * How much the seam can traverse on x-axis.
	 * Passing 0 causes the seams to be straight.
	 * </p>
	 * @param float $rigidity <p>
	 * Introduces a bias for non-straight seams. This parameter is
	 * typically 0.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function liquidRescaleImage ($width, $height, $delta_x, $rigidity) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Enciphers an image
	 * @link http://php.net/manual/en/imagick.encipherimage.php
	 * @param string $passphrase <p>
	 * The passphrase
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function encipherImage ($passphrase) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Deciphers an image
	 * @link http://php.net/manual/en/imagick.decipherimage.php
	 * @param string $passphrase <p>
	 * The passphrase
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function decipherImage ($passphrase) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Sets the gravity
	 * @link http://php.net/manual/en/imagick.setgravity.php
	 * @param int $gravity <p>
	 * The gravity property. Refer to the list of
	 * gravity constants.
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setGravity ($gravity) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Gets the gravity
	 * @link http://php.net/manual/en/imagick.getgravity.php
	 * @return int the gravity property. Refer to the list of
	 * gravity constants.
	 */
	public function getGravity () {}

	/**
	 * (PECL imagick 2.2.1)<br/>
	 * Gets channel range
	 * @link http://php.net/manual/en/imagick.getimagechannelrange.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return array an array containing minima and maxima values of the channel(s).
	 */
	public function getImageChannelRange ($channel) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Gets the image alpha channel
	 * @link http://php.net/manual/en/imagick.getimagealphachannel.php
	 * @return int a constant defining the current alpha channel value. Refer to this
	 * list of alpha channel constants.
	 */
	public function getImageAlphaChannel () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Gets channel distortions
	 * @link http://php.net/manual/en/imagick.getimagechanneldistortions.php
	 * @param Imagick $reference <p>
	 * Imagick object containing the reference image
	 * </p>
	 * @param int $metric <p>
	 * Refer to this list of metric type constants.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return float a double describing the channel distortion.
	 */
	public function getImageChannelDistortions (Imagick $reference, $metric, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Sets the image gravity
	 * @link http://php.net/manual/en/imagick.setimagegravity.php
	 * @param int $gravity <p>
	 * The gravity property. Refer to the list of
	 * gravity constants.
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setImageGravity ($gravity) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Gets the image gravity
	 * @link http://php.net/manual/en/imagick.getimagegravity.php
	 * @return int the images gravity property. Refer to the list of
	 * gravity constants.
	 */
	public function getImageGravity () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Imports image pixels
	 * @link http://php.net/manual/en/imagick.importimagepixels.php
	 * @param int $x <p>
	 * The image x position
	 * </p>
	 * @param int $y <p>
	 * The image y position
	 * </p>
	 * @param int $width <p>
	 * The image width
	 * </p>
	 * @param int $height <p>
	 * The image height
	 * </p>
	 * @param string $map <p>
	 * Map of pixel ordering as a string. This can be for example RGB.
	 * The value can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent),
	 * O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.
	 * </p>
	 * @param int $storage <p>
	 * The pixel storage method.
	 * Refer to this list of pixel constants.
	 * </p>
	 * @param array $pixels <p>
	 * The array of pixels
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function importImagePixels ($x, $y, $width, $height, $map, $storage, array $pixels) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Removes skew from the image
	 * @link http://php.net/manual/en/imagick.deskewimage.php
	 * @param float $threshold <p>
	 * Deskew threshold
	 * </p>
	 * @return bool
	 */
	public function deskewImage ($threshold) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Segments an image
	 * @link http://php.net/manual/en/imagick.segmentimage.php
	 * @param int $COLORSPACE <p>
	 * One of the COLORSPACE constants.
	 * </p>
	 * @param float $cluster_threshold <p>
	 * A percentage describing minimum number of pixels
	 * contained in hexedra before it is considered valid.
	 * </p>
	 * @param float $smooth_threshold <p>
	 * Eliminates noise from the histogram.
	 * </p>
	 * @param bool $verbose [optional] <p>
	 * Whether to output detailed information about recognised classes.
	 * </p>
	 * @return bool
	 */
	public function segmentImage ($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = false) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Interpolates colors
	 * @link http://php.net/manual/en/imagick.sparsecolorimage.php
	 * @param int $SPARSE_METHOD <p>
	 * Refer to this list of sparse method constants
	 * </p>
	 * @param array $arguments <p>
	 * An array containing the coordinates.
	 * The array is in format array(1,1, 2,45)
	 * </p>
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sparseColorImage ($SPARSE_METHOD, array $arguments, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Remaps image colors
	 * @link http://php.net/manual/en/imagick.remapimage.php
	 * @param Imagick $replacement <p>
	 * An Imagick object containing the replacement colors
	 * </p>
	 * @param int $DITHER <p>
	 * Refer to this list of dither method constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function remapImage (Imagick $replacement, $DITHER) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Exports raw image pixels
	 * @link http://php.net/manual/en/imagick.exportimagepixels.php
	 * @param int $x <p>
	 * X-coordinate of the exported area
	 * </p>
	 * @param int $y <p>
	 * Y-coordinate of the exported area
	 * </p>
	 * @param int $width <p>
	 * Width of the exported aread
	 * </p>
	 * @param int $height <p>
	 * Height of the exported area
	 * </p>
	 * @param string $map <p>
	 * Ordering of the exported pixels. For example "RGB".
	 * Valid characters for the map are R, G, B, A, O, C, Y, M, K, I and P.
	 * </p>
	 * @param int $STORAGE <p>
	 * Refer to this list of pixel type constants
	 * </p>
	 * @return array an array containing the pixels values.
	 */
	public function exportImagePixels ($x, $y, $width, $height, $map, $STORAGE) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * The getImageChannelKurtosis purpose
	 * @link http://php.net/manual/en/imagick.getimagechannelkurtosis.php
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return array an array with kurtosis and skewness
	 * members.
	 */
	public function getImageChannelKurtosis ($channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Applies a function on the image
	 * @link http://php.net/manual/en/imagick.functionimage.php
	 * @param int $function <p>
	 * Refer to this list of function constants
	 * </p>
	 * @param array $arguments <p>
	 * Array of arguments to pass to this function.
	 * </p>
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function functionImage ($function, array $arguments, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * @param $COLORSPACE
	 */
	public function transformImageColorspace ($COLORSPACE) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Replaces colors in the image
	 * @link http://php.net/manual/en/imagick.haldclutimage.php
	 * @param Imagick $clut <p>
	 * Imagick object containing the Hald lookup image.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function haldClutImage (Imagick $clut, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * @param $CHANNEL [optional]
	 */
	public function autoLevelImage ($CHANNEL) {}

	/**
	 * @param $factor [optional]
	 */
	public function blueShiftImage ($factor) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Get image artifact
	 * @link http://php.net/manual/en/imagick.getimageartifact.php
	 * @param string $artifact <p>
	 * The name of the artifact
	 * </p>
	 * @return string the artifact value on success.
	 */
	public function getImageArtifact ($artifact) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Set image artifact
	 * @link http://php.net/manual/en/imagick.setimageartifact.php
	 * @param string $artifact <p>
	 * The name of the artifact
	 * </p>
	 * @param string $value <p>
	 * The value of the artifact
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageArtifact ($artifact, $value) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Delete image artifact
	 * @link http://php.net/manual/en/imagick.deleteimageartifact.php
	 * @param string $artifact <p>
	 * The name of the artifact to delete
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function deleteImageArtifact ($artifact) {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * Gets the colorspace
	 * @link http://php.net/manual/en/imagick.getcolorspace.php
	 * @return int an integer which can be compared against COLORSPACE constants.
	 */
	public function getColorspace () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Set colorspace
	 * @link http://php.net/manual/en/imagick.setcolorspace.php
	 * @param int $COLORSPACE <p>
	 * One of the COLORSPACE constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setColorspace ($COLORSPACE) {}

	/**
	 * @param $CHANNEL [optional]
	 */
	public function clampImage ($CHANNEL) {}

	/**
	 * @param $stack
	 * @param $offset
	 */
	public function smushImages ($stack, $offset) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The Imagick constructor
	 * @link http://php.net/manual/en/imagick.construct.php
	 * @param mixed $files <p>
	 * The path to an image to load or an array of paths. Paths can include
	 * wildcards for file names, or can be URLs.
	 * </p>
	 * @throws ImagickException Throws ImagickException on error.
	 */
	public function __construct ($files = null) {}

	/**
	 * @return string
	 */
	public function __toString () {}

/**
*<div id="function.count" class="refentry">    <div class="refnamediv">     <h1 class="refname">count</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">count</span> &mdash; <span class="dc-title">计算数组中的单元数目，或对象中的属性个数</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.count-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>count</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$array_or_countable</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$mode</span><span class="initializer"> = COUNT_NORMAL</span></span>   ] )</div>    <p class="para rdfs-comment">    统计出数组里的所有元素的数量，或者对象里的东西。   </p>     <p class="para">      对于对象，如果安装了 <a href="http://php.net/manual/zh/ref.spl.php" class="link">SPL</a>，可以通过实现      <em>Countable</em> 接口对 <span class="function"><strong style="color:#CC7832">count()</strong></span>挂钩（hook）      。该接口只有一个方法      <span class="methodname" style="color:#CC7832">{@link Countable::count()}</span>，此方法为 <span class="function"><strong style="color:#CC7832">count()</strong></span>      函数返回值。     </p>     <p class="para">      关于 PHP 中如何实现和使用数组可以参考手册中<a href="http://php.net/manual/zh/language.types.array.php" class="link">数组</a>章节中的详细描述。   </p>  </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.count-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array_or_countable</span></dt>       <dd>        <p class="para">        数组或者 <a href="http://php.net/manual/zh/class.countable.php" class="classname">Countable</a>  对象。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">mode</span></dt>       <dd>        <p class="para">        如果可选的 <span class="parameter" style="color:#2EACF9">mode</span> 参数设为      <strong><span>COUNT_RECURSIVE</span></strong>（或 1），<span class="function"><strong style="color:#CC7832">count()</strong></span>      将递归地对数组计数。对计算多维数组的所有单元尤其有用。       </p>       <div class="caution"><strong class="caution">Caution</strong>        <p class="para">         <span class="function"><strong style="color:#CC7832">count()</strong></span> 能检测递归来避免无限循环，但每次出现时会产生 <strong><span>E_WARNING</span></strong> 错误         （如果 array 不止一次包含了自身）并返回大于预期的统计数字。        </p>       </div>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.count-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回 <span class="parameter" style="color:#2EACF9">array_or_countable</span> 中的单元数目。        如果参数既不是数组，也不是实现      <em>Countable</em> 接口的对象，将返回      <em>1</em>。    有个例外：如果      <span class="parameter" style="color:#2EACF9">array_or_countable</span> 是 <strong><span>NULL</span></strong> 则结果是 <em>0</em>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.count-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6085">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$a</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$a</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">false</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> int(3) int(3)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 12 // PHP 7.2 起 int(0)  Warning: count(): Parameter must be an array or an object that implements Countable in … on line 14 // PHP 7.2 起 int(1) </span></div>     </div>    </div>   </span>   <p class="para">    <div class="example" id="example-6086">     <p><strong>Example #2 递归 <span class="function"><strong style="color:#CC7832">count()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$food&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'fruits'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'veggie'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'collard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pea'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;recursive&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">COUNT_RECURSIVE</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;8<br /><br />//&nbsp;normal&nbsp;count<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;2<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.count-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        当无效的 countable 类型传递给 <span class="parameter" style="color:#2EACF9">array_or_countable</span> 参数时，<span class="function"><strong style="color:#CC7832">count()</strong></span> 会产生警告。       </td>      </tr>      </tbody>       </table>   </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.count-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link is_array()} - 检测变量是否是数组</span></li>     <li class="member"><span class="function">{@link isset()} - 检测变量是否已设置并且非 NULL</span></li>     <li class="member"><span class="function">{@link empty()} - 检查一个变量是否为空</span></li>     <li class="member"><span class="function">{@link strlen()} - 获取字符串长度</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function count () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a MagickPixelIterator
	 * @link http://php.net/manual/en/imagick.getpixeliterator.php
	 * @return ImagickPixelIterator an ImagickPixelIterator on success.
	 */
	public function getPixelIterator () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Get an ImagickPixelIterator for an image section
	 * @link http://php.net/manual/en/imagick.getpixelregioniterator.php
	 * @param int $x <p>
	 * The x-coordinate of the region.
	 * </p>
	 * @param int $y <p>
	 * The y-coordinate of the region.
	 * </p>
	 * @param int $columns <p>
	 * The width of the region.
	 * </p>
	 * @param int $rows <p>
	 * The height of the region.
	 * </p>
	 * @return ImagickPixelIterator an ImagickPixelIterator for an image section.
	 */
	public function getPixelRegionIterator ($x, $y, $columns, $rows) {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * Reads image from filename
	 * @link http://php.net/manual/en/imagick.readimage.php
	 * @param string $filename
	 * @return bool <b>TRUE</b> on success.
	 * @throws ImagickException Throws ImagickException on error.
	 */
	public function readImage ($filename) {}

	/**
	 * @param $filenames
	 * @throws ImagickException Throws ImagickException on error.
	 */
	public function readImages ($filenames) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reads image from a binary string
	 * @link http://php.net/manual/en/imagick.readimageblob.php
	 * @param string $image
	 * @param string $filename [optional]
	 * @return bool <b>TRUE</b> on success.
	 * @throws ImagickException Throws ImagickException on error.
	 */
	public function readImageBlob ($image, $filename = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the format of a particular image
	 * @link http://php.net/manual/en/imagick.setimageformat.php
	 * @param string $format <p>
	 * String presentation of the image format. Format support
	 * depends on the ImageMagick installation.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageFormat ($format) {}

	/**
	 * Scales the size of an image to the given dimensions. Passing zero as either of the arguments will preserve dimension while scaling.<br>
	 * If legacy is true, the calculations are done with the small rounding bug that existed in Imagick before 3.4.0.<br>
	 * If false, the calculations should produce the same results as ImageMagick CLI does.
	 * @link http://php.net/manual/en/imagick.scaleimage.php
	 * @param int $cols
	 * @param int $rows
	 * @param bool $bestfit [optional] The behavior of the parameter bestfit changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If bestfit parameter is used both width and height must be given.
	 * @param bool $legacy [optional] Added since 3.4.0. Default value FALSE
	 * @return bool <b>TRUE</b> on success.
	 * @throws ImagickException Throws ImagickException on error
	 * @since 2.0.0
	 */
	public function scaleImage ($cols, $rows, $bestfit = false, $legacy = false) {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * Writes an image to the specified filename
	 * @link http://php.net/manual/en/imagick.writeimage.php
	 * @param string $filename [optional] <p>
	 * Filename where to write the image. The extension of the filename
	 * defines the type of the file.
	 * Format can be forced regardless of file extension using format: prefix,
	 * for example "jpg:test.png".
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeImage ($filename = NULL) {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * Writes an image or image sequence
	 * @link http://php.net/manual/en/imagick.writeimages.php
	 * @param string $filename
	 * @param bool $adjoin
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeImages ($filename, $adjoin) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds blur filter to image
	 * @link http://php.net/manual/en/imagick.blurimage.php
	 * @param float $radius <p>
	 * Blur radius
	 * </p>
	 * @param float $sigma <p>
	 * Standard deviation
	 * </p>
	 * @param int $channel [optional] <p>
	 * The Channeltype
	 * constant. When not supplied, all channels are blurred.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function blurImage ($radius, $sigma, $channel = null) {}

	/**
	 * Changes the size of an image to the given dimensions and removes any associated profiles.<br>
	 * If legacy is true, the calculations are done with the small rounding bug that existed in Imagick before 3.4.0.<br>
	 * If false, the calculations should produce the same results as ImageMagick CLI does.<br>
	 * <br>
	 * <b>Note:</b> The behavior of the parameter bestfit changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If bestfit parameter is used both width and height must be given.
	 * @link http://php.net/manual/en/imagick.thumbnailimage.php
	 * @param int $columns <p>
	 * Image width
	 * </p>
	 * @param int $rows <p>
	 * Image height
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * Whether to force maximum values
	 * </p>
	 * The behavior of the parameter bestfit changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If bestfit parameter is used both width and height must be given.
	 * @param bool $fill [optional]
	 * @param bool $legacy [optional] Added since 3.4.0. Default value FALSE
	 * @return bool <b>TRUE</b> on success.
	 * @since 2.0.0
	 */
	public function thumbnailImage ($columns, $rows, $bestfit = false, $fill = false, $legacy = false) {}

	/**
	 * Creates a cropped thumbnail at the requested size.
	 * If legacy is true, uses the incorrect behaviour that was present until Imagick 3.4.0.
	 * If false it uses the correct behaviour.
	 * @link http://php.net/manual/en/imagick.cropthumbnailimage.php
	 * @param int $width The width of the thumbnail
	 * @param int $height The Height of the thumbnail
	 * @param bool $legacy [optional] Added since 3.4.0. Default value FALSE
	 * @return bool TRUE on succes
	 * @throws ImagickException Throws ImagickException on error
	 * @since 2.0.0
	 */
	public function cropThumbnailImage ($width, $height, $legacy = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the filename of a particular image in a sequence
	 * @link http://php.net/manual/en/imagick.getimagefilename.php
	 * @return string a string with the filename of the image.
	 */
	public function getImageFilename () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the filename of a particular image
	 * @link http://php.net/manual/en/imagick.setimagefilename.php
	 * @param string $filename
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageFilename ($filename) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the format of a particular image in a sequence
	 * @link http://php.net/manual/en/imagick.getimageformat.php
	 * @return string a string containing the image format on success.
	 */
	public function getImageFormat () {}

	/**
	 * @link http://lv.php.net/manual/en/imagick.getimagemimetype.php
	 * @return string Returns the image mime-type.
	 */
	public function getImageMimeType () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes an image from the image list
	 * @link http://php.net/manual/en/imagick.removeimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function removeImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Destroys the Imagick object
	 * @link http://php.net/manual/en/imagick.destroy.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function destroy () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clears all resources associated to Imagick object
	 * @link http://php.net/manual/en/imagick.clear.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clear () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image length in bytes
	 * @link http://php.net/manual/en/imagick.getimagesize.php
	 * @return int an int containing the current image size.
	 * @deprecated use {@see Imagick::getImageLength()} instead
	 */
/**
*<div id="function.getimagesize" class="refentry">   <div class="refnamediv">    <h1 class="refname">getimagesize</h1>    <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">getimagesize</span> &mdash; <span class="dc-title">取得图像大小</span></p>    </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.getimagesize-description">    <h3 class="title">说明</h3>    <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">     <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>getimagesize</strong></span>      ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$filename</span></span>     [, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$imageinfo</span></span>    ] )</div>     <p class="para rdfs-comment">     <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> 函数将测定任何     <acronym title="Graphic Interchange Format">GIF</acronym>，<acronym>JPG</acronym>，<acronym title="Portable Network Graphics">PNG</acronym>，<acronym title="Shockwave Flash">SWF</acronym>，<acronym>SWC</acronym>，<acronym title="Photoshop Document">PSD</acronym>，<acronym title="Tagged Image File Format">TIFF</acronym>，<acronym title="Bitmap">BMP</acronym>，<acronym title="Interchange File Format">IFF</acronym>，<acronym title="JPEG-2000">JP2</acronym>，<acronym>JPX</acronym>，<acronym title="Joint Bilevel Image Experts Group">JB2</acronym>，<acronym title="Japan Picture">JPC</acronym>，<acronym title="X Bitmap">XBM</acronym>     或 <acronym title="Wireless Bitmap">WBMP</acronym> 图像文件的大小并返回图像的尺寸以及文件类型和一个可以用于普通     <acronym title="Hyper Text Markup Language">HTML</acronym> 文件中 <span>IMG</span> 标记中的     height/width 文本字符串。    </p>    <p class="para">     如果不能访问 <span class="parameter" style="color:#2EACF9">filename</span>     指定的图像或者其不是有效的图像，<span class="function"><strong style="color:#CC7832">getimagesize()</strong></span>     将返回 <strong><span>FALSE</span></strong> 并产生一条 <var class="varname"><var class="varname">E_WARNING</var></var> 级的错误。    </p>    <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:      <p class="para">      对 <acronym title="Japan Picture">JPC</acronym>，<acronym title="JPEG-2000">JP2</acronym>，<acronym>JPX</acronym>，<acronym title="Joint Bilevel Image Experts Group">JB2</acronym>，<acronym title="X Bitmap">XBM</acronym>      和 <acronym title="Wireless Bitmap">WBMP</acronym> 的支持自 PHP 4.3.2      起可用。对 <acronym>SWC</acronym> 的支持自 PHP 4.3.0 起可用。对      <acronym title="Tagged Image File Format">TIFF</acronym> 的支持是 PHP 4.2.0 添加的。     </p>    </p></blockquote>    <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:      <span class="simpara">      JPEG 2000 支持是 PHP 4.3.2 添加的。注意 JPC 和 JP2      可以有不同的色彩深度的成分。此情况下，“bits”的值是碰到的最高的位深度。此外，JP2      文件可能包含有多个 JPEG 2000 代码流，此情况下，<span class="function"><strong style="color:#CC7832">getimagesize()</strong></span>      返回此文件顶层中碰到的第一个代码流的值。     </span>    </p></blockquote>    <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:      <span class="simpara">      本函数不需要 GD 图像库。     </span>    </p></blockquote>    <p class="para">     返回一个具有四个单元的数组。索引 0 包含图像宽度的像素值，索引 1     包含图像高度的像素值。索引 2 是图像类型的标记：1 = GIF，2 = JPG，3 =     PNG，4 = SWF，5 = PSD，6 = BMP，7 = TIFF(intel byte order)，8 =     TIFF(motorola byte order)，9 = JPC，10 = JP2，11 = JPX，12 =     JB2，13 = SWC，14 = IFF，15 = WBMP，16 = XBM。这些标记与 PHP 4.3.0     新加的 IMAGETYPE 常量对应。索引 3 是文本字符串，内容为“height=&quot;yyy&quot;     width=&quot;xxx&quot;”，可直接用于 IMG 标记。     <div class="example" id="example-3637">      <p><strong>Example #1 getimagesize（文件）</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">list(</span><span style="color: #9876AA">$width</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$height</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$attr</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"img/flag.jpg"</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #DD0000">"&lt;img&nbsp;src=\"img/flag.jpg\"&nbsp;</span><span style="color: #9876AA">$attr</span><span style="color: #DD0000">&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>      </div>    </p>    <p class="para">     URL 支持是 PHP 4.0.5 添加的。     <div class="example" id="example-3638">      <p><strong>Example #2 getimagesize（URL）</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/gifs/logo.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;if&nbsp;the&nbsp;file&nbsp;name&nbsp;has&nbsp;space&nbsp;in&nbsp;it,&nbsp;encode&nbsp;it&nbsp;properly<br /></span><span style="color: #9876AA">$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/gifs/lo%20go.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>      </div>    </p>    <p class="para">     对于 <acronym>JPG</acronym> 图像，还会多返回两个索引：<em>channels</em>     和 <em>bits</em>。<em>channels</em>     对于 RGB 图像其值为 3，对于 CMYK 图像其值为 4。<em>bits</em>     是每种颜色的位数。    </p>    <p class="para">     自 PHP 4.3.0 起，<em>bits</em> 和     <em>channels</em> 对于其它图像类型也存在。但是这些值可能会把人搞糊涂。例如，<acronym title="Graphic Interchange Format">GIF</acronym>     总是对每个像素使用 3 个 channel，但是对于动画 <acronym title="Graphic Interchange Format">GIF</acronym>     来说每个像素的位数无法通过全局颜色表计算出来。    </p>    <p class="para">     某些格式可能不包含图像或者包含多个图像。此种情况下，<span class="function"><strong style="color:#CC7832">getimagesize()</strong></span>     可能不能用来准确测定图像的大小。此时 <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span>     将返回零作为宽度和高度。    </p>    <p class="para">     自 PHP 4.3.0 起，<span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> 还会返回额外的参数     <em>mime</em>，符合该图像的 MIME 类型。此信息可以用来在     HTTP Content-type 头信息中发送正确的信息：     <div class="example" id="example-3639">      <p><strong>Example #3 getimagesize() 和 MIME 类型</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #9876AA">$filename</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$fp</span><span style="color: #007700">=</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #9876AA">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br />if&nbsp;(</span><span style="color: #9876AA">$size&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #9876AA">$fp</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;</span><span style="color: #9876AA">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-type:&nbsp;</span><span style="color: #007700">{</span><span style="color: #9876AA">$size</span><span style="color: #007700">[</span><span style="color: #DD0000">'mime'</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;</span><span style="color: #9876AA">fpassthru</span><span style="color: #007700">(</span><span style="color: #9876AA">$fp</span><span style="color: #007700">);<br />&nbsp;&nbsp;exit;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;error<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>      </div>    </p>    <p class="para">     可选的 <span class="parameter" style="color:#2EACF9">imageinfo</span>     参数允许从图像文件中提取一些扩展信息。目前，这将以一个关联数组返回不同的     <acronym>JPG</acronym> APP 标识。某些程序用这些 APP     标识来在图像中嵌入文本信息。一个非常常见的是 APP13 标识中嵌入的     <acronym>IPTC</acronym> <a href="http://www.iptc.org/" class="link external">&raquo;&nbsp;http://www.iptc.org/</a>     信息。可以用 <span class="function">{@link iptcparse()}</span> 函数来将二进制的     APP13 标识解析为可读的信息。    </p>    <p class="para">     <div class="example" id="example-3640">      <p><strong>Example #4 getimagesize() 返回 IPTC</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"testimg.jpg"</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br />if&nbsp;(isset(</span><span style="color: #9876AA">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">"APP13"</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$iptc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">iptcparse</span><span style="color: #007700">(</span><span style="color: #9876AA">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">"APP13"</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$iptc</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>      </div>    </p>    <p class="para">     参见 <span class="function">{@link image_type_to_mime_type()}</span>，<span class="function">{@link exif_imagetype()}</span>，<span class="function">{@link exif_read_data()}</span>     和 <span class="function">{@link exif_thumbnail()}</span>。    </p>   </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.getimagesize-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">filename</span></dt>       <dd>        <p class="para">         This parameter specifies the file you wish to retrieve information         about. It can reference a local file or (configuration permitting) a         remote file using one of the supported streams.        </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">imageinfo</span></dt>       <dd>        <p class="para">        This optional parameter allows you to extract some extended        information from the image file. Currently, this will return the        different <acronym>JPG</acronym> APP markers as an associative array.        Some programs use these APP markers to embed text information in         images. A very common one is to embed         <a href="http://www.iptc.org/" class="link external">&raquo;&nbsp;IPTC</a> information in the APP13 marker.        You can use the <span class="function">{@link iptcparse()}</span> function to parse the        binary APP13 marker into something readable.       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.getimagesize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns an array with 7 elements.   </p>   <p class="para">    Index 0 and 1 contains respectively the width and the height of the image.   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     Some formats may contain no image or may contain multiple images. In these     cases, <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> might not be able to properly     determine the image size. <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> will return     zero for width and height in these cases.    </p>   </p></blockquote>   <p class="para">    Index 2 is one of the <em>IMAGETYPE_XXX</em> constants indicating     the type of the image.   </p>   <p class="para">    Index 3 is a text string with the correct     <em>height=&quot;yyy&quot; width=&quot;xxx&quot;</em> string that can be used    directly in an <acronym>IMG</acronym> tag.   </p>   <p class="para">    <em>mime</em> is the correspondant MIME type of the image.    This information can be used to deliver images with the correct HTTP     <em>Content-type</em> header:    <div class="example" id="example-3641">     <p><strong>Example #5 <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> and MIME types</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #9876AA">$filename</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$fp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #9876AA">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br />if&nbsp;(</span><span style="color: #9876AA">$size&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #9876AA">$fp</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-type:&nbsp;</span><span style="color: #007700">{</span><span style="color: #9876AA">$size</span><span style="color: #007700">[</span><span style="color: #DD0000">'mime'</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">fpassthru</span><span style="color: #007700">(</span><span style="color: #9876AA">$fp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;exit;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;error<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </p>   <p class="para">    <em>channels</em> will be 3 for RGB pictures and 4 for CMYK    pictures.   </p>   <p class="para">    <em>bits</em> is the number of bits for each color.   </p>   <p class="para">    For some image types, the presence of <em>channels</em> and    <em>bits</em> values can be a bit    confusing. As an example, <acronym title="Graphic Interchange Format">GIF</acronym> always uses 3 channels    per pixel, but the number of bits per pixel cannot be calculated for an    animated <acronym title="Graphic Interchange Format">GIF</acronym> with a global color table.   </p>   <p class="para">    On failure, <strong><span>FALSE</span></strong> is returned.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 errors" id="refsect1-function.getimagesize-errors">   <h3 class="title">错误／异常</h3>   <p class="para">    If accessing the <span class="parameter" style="color:#2EACF9">filename</span> image is impossible, or    if it isn&#039;t a valid picture, <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> will    generate an error of level <strong><span>E_WARNING</span></strong>. On read error,    <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> will generate an error of level    <strong><span>E_NOTICE</span></strong>.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.getimagesize-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.3.0</td>        <td>         Added icon support.        </td>       </tr>        <tr>        <td>5.2.3</td>        <td>         Read errors generated by this function downgraded to         <strong><span>E_NOTICE</span></strong> from <strong><span>E_WARNING</span></strong>.        </td>       </tr>        <tr>        <td>4.3.2</td>        <td>         Support for <acronym title="Japan Picture">JPC</acronym>, <acronym title="JPEG-2000">JP2</acronym>,         <acronym>JPX</acronym>, <acronym title="Joint Bilevel Image Experts Group">JB2</acronym>,          <acronym title="X Bitmap">XBM</acronym>, and <acronym title="Wireless Bitmap">WBMP</acronym> became available.        </td>       </tr>        <tr>        <td>4.3.2</td>        <td>         JPEG 2000 support was added for the <span class="parameter" style="color:#2EACF9">imageinfo</span>         parameter.        </td>       </tr>        <tr>        <td>4.3.0</td>        <td>         <em>bits</em> and <em>channels</em> are present         for other image types, too.        </td>       </tr>        <tr>        <td>4.3.0</td>        <td>         <em>mime</em> was added.        </td>       </tr>        <tr>        <td>4.3.0</td>        <td>         Support for <acronym>SWC</acronym> and <acronym title="Interchange File Format">IFF</acronym> was         added.        </td>       </tr>        <tr>        <td>4.2.0</td>        <td>         Support for <acronym title="Tagged Image File Format">TIFF</acronym> was added.        </td>       </tr>        <tr>        <td>4.0.6</td>        <td>         Support for <acronym title="Bitmap">BMP</acronym> and <acronym title="Photoshop Document">PSD</acronym> was         added.        </td>       </tr>        <tr>        <td>4.0.5</td>        <td>         URL support was added.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.getimagesize-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-3642">     <p><strong>Example #6 <span class="function"><strong style="color:#CC7832">getimagesize()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">list(</span><span style="color: #9876AA">$width</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$height</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$attr</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"img/flag.jpg"</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #DD0000">"&lt;img&nbsp;src=\"img/flag.jpg\"&nbsp;</span><span style="color: #9876AA">$attr</span><span style="color: #DD0000">&nbsp;alt=\"getimagesize()&nbsp;example\"&nbsp;/&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>    <div class="example" id="example-3643">     <p><strong>Example #7 getimagesize (URL)</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/gifs/logo.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;if&nbsp;the&nbsp;file&nbsp;name&nbsp;has&nbsp;space&nbsp;in&nbsp;it,&nbsp;encode&nbsp;it&nbsp;properly<br /></span><span style="color: #9876AA">$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/gifs/lo%20go.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>    <div class="example" id="example-3644">     <p><strong>Example #8 getimagesize() returning IPTC</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">getimagesize</span><span style="color: #007700">(</span><span style="color: #DD0000">"testimg.jpg"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br />if&nbsp;(isset(</span><span style="color: #9876AA">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">"APP13"</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$iptc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">iptcparse</span><span style="color: #007700">(</span><span style="color: #9876AA">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">"APP13"</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$iptc</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.getimagesize-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>: <p class="para">此函数不需要 GD 图象库。</p></p></blockquote>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.getimagesize-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link image_type_to_mime_type()} - 取得 getimagesize，exif_read_data，exif_thumbnail，exif_imagetype     所返回的图像类型的 MIME 类型</span></li>     <li class="member"><span class="function">{@link exif_imagetype()} - 判断一个图像的类型</span></li>     <li class="member"><span class="function">{@link exif_read_data()} - 从 JPEG 或 TIFF    文件中读取 EXIF 头信息</span></li>     <li class="member"><span class="function">{@link exif_thumbnail()} - 取得嵌入在 TIFF 或 JPEG 图像中的缩略图</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.image.php">GD 和图像处理 函数</a></div></div>
*/
	public function getImageSize () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image sequence as a blob
	 * @link http://php.net/manual/en/imagick.getimageblob.php
	 * @return string a string containing the image.
	 */
	public function getImageBlob () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns all image sequences as a blob
	 * @link http://php.net/manual/en/imagick.getimagesblob.php
	 * @return string a string containing the images. On failure, throws ImagickException on failure
	 * @throws ImagickException on failure
	 */
	public function getImagesBlob () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the Imagick iterator to the first image
	 * @link http://php.net/manual/en/imagick.setfirstiterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setFirstIterator () {}

	/**
	 * (PECL imagick 2.0.1)<br/>
	 * Sets the Imagick iterator to the last image
	 * @link http://php.net/manual/en/imagick.setlastiterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setLastIterator () {}

	public function resetIterator () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Move to the previous image in the object
	 * @link http://php.net/manual/en/imagick.previousimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function previousImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Moves to the next image
	 * @link http://php.net/manual/en/imagick.nextimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function nextImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Checks if the object has a previous image
	 * @link http://php.net/manual/en/imagick.haspreviousimage.php
	 * @return bool <b>TRUE</b> if the object has more images when traversing the list in the
	 * reverse direction, returns <b>FALSE</b> if there are none.
	 */
	public function hasPreviousImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Checks if the object has more images
	 * @link http://php.net/manual/en/imagick.hasnextimage.php
	 * @return bool <b>TRUE</b> if the object has more images when traversing the list in the
	 * forward direction, returns <b>FALSE</b> if there are none.
	 */
	public function hasNextImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the iterator position
	 * @link http://php.net/manual/en/imagick.setimageindex.php
	 * @param int $index <p>
	 * The position to set the iterator to
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageIndex ($index) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the index of the current active image
	 * @link http://php.net/manual/en/imagick.getimageindex.php
	 * @return int an integer containing the index of the image in the stack.
	 */
	public function getImageIndex () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a comment to your image
	 * @link http://php.net/manual/en/imagick.commentimage.php
	 * @param string $comment <p>
	 * The comment to add
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function commentImage ($comment) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Extracts a region of the image
	 * @link http://php.net/manual/en/imagick.cropimage.php
	 * @param int $width <p>
	 * The width of the crop
	 * </p>
	 * @param int $height <p>
	 * The height of the crop
	 * </p>
	 * @param int $x <p>
	 * The X coordinate of the cropped region's top left corner
	 * </p>
	 * @param int $y <p>
	 * The Y coordinate of the cropped region's top left corner
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function cropImage ($width, $height, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a label to an image
	 * @link http://php.net/manual/en/imagick.labelimage.php
	 * @param string $label <p>
	 * The label to add
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function labelImage ($label) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the width and height as an associative array
	 * @link http://php.net/manual/en/imagick.getimagegeometry.php
	 * @return array an array with the width/height of the image.
	 */
	public function getImageGeometry () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Renders the ImagickDraw object on the current image
	 * @link http://php.net/manual/en/imagick.drawimage.php
	 * @param ImagickDraw $draw <p>
	 * The drawing operations to render on the image.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function drawImage (ImagickDraw $draw) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Sets the image compression quality
	 * @link http://php.net/manual/en/imagick.setimagecompressionquality.php
	 * @param int $quality <p>
	 * The image compression quality as an integer
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageCompressionQuality ($quality) {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * Gets the current image's compression quality
	 * @link http://php.net/manual/en/imagick.getimagecompressionquality.php
	 * @return int integer describing the images compression quality
	 */
	public function getImageCompressionQuality () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Annotates an image with text
	 * @link http://php.net/manual/en/imagick.annotateimage.php
	 * @param ImagickDraw $draw_settings <p>
	 * The ImagickDraw object that contains settings for drawing the text
	 * </p>
	 * @param float $x <p>
	 * Horizontal offset in pixels to the left of text
	 * </p>
	 * @param float $y <p>
	 * Vertical offset in pixels to the baseline of text
	 * </p>
	 * @param float $angle <p>
	 * The angle at which to write the text
	 * </p>
	 * @param string $text <p>
	 * The string to draw
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function annotateImage (ImagickDraw $draw_settings, $x, $y, $angle, $text) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composite one image onto another
	 * @link http://php.net/manual/en/imagick.compositeimage.php
	 * @param Imagick $composite_object <p>
	 * Imagick object which holds the composite image
	 * </p>
	 * @param int $composite Composite operator
	 * @param int $x <p>
	 * The column offset of the composited image
	 * </p>
	 * @param int $y <p>
	 * The row offset of the composited image
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function compositeImage (Imagick $composite_object, $composite, $x, $y, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Control the brightness, saturation, and hue
	 * @link http://php.net/manual/en/imagick.modulateimage.php
	 * @param float $brightness
	 * @param float $saturation
	 * @param float $hue
	 * @return bool <b>TRUE</b> on success.
	 */
	public function modulateImage ($brightness, $saturation, $hue) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the number of unique colors in the image
	 * @link http://php.net/manual/en/imagick.getimagecolors.php
	 * @return int <b>TRUE</b> on success.
	 */
	public function getImageColors () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a composite image
	 * @link http://php.net/manual/en/imagick.montageimage.php
	 * @param ImagickDraw $draw <p>
	 * The font name, size, and color are obtained from this object.
	 * </p>
	 * @param string $tile_geometry <p>
	 * The number of tiles per row and page (e.g. 6x4+0+0).
	 * </p>
	 * @param string $thumbnail_geometry <p>
	 * Preferred image size and border size of each thumbnail
	 * (e.g. 120x120+4+3>).
	 * </p>
	 * @param int $mode <p>
	 * Thumbnail framing mode, see Montage Mode constants.
	 * </p>
	 * @param string $frame <p>
	 * Surround the image with an ornamental border (e.g. 15x15+3+3). The
	 * frame color is that of the thumbnail's matte color.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function montageImage (ImagickDraw $draw, $tile_geometry, $thumbnail_geometry, $mode, $frame) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Identifies an image and fetches attributes
	 * @link http://php.net/manual/en/imagick.identifyimage.php
	 * @param bool $appendRawOutput [optional]
	 * @return array Identifies an image and returns the attributes. Attributes include
	 * the image width, height, size, and others.
	 */
	public function identifyImage ($appendRawOutput = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the value of individual pixels based on a threshold
	 * @link http://php.net/manual/en/imagick.thresholdimage.php
	 * @param float $threshold
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function thresholdImage ($threshold, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Selects a threshold for each pixel based on a range of intensity
	 * @link http://php.net/manual/en/imagick.adaptivethresholdimage.php
	 * @param int $width <p>
	 * Width of the local neighborhood.
	 * </p>
	 * @param int $height <p>
	 * Height of the local neighborhood.
	 * </p>
	 * @param int $offset <p>
	 * The mean offset
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptiveThresholdImage ($width, $height, $offset) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Forces all pixels below the threshold into black
	 * @link http://php.net/manual/en/imagick.blackthresholdimage.php
	 * @param mixed $threshold <p>
	 * The threshold below which everything turns black
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function blackThresholdImage ($threshold) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Force all pixels above the threshold into white
	 * @link http://php.net/manual/en/imagick.whitethresholdimage.php
	 * @param mixed $threshold
	 * @return bool <b>TRUE</b> on success.
	 */
	public function whiteThresholdImage ($threshold) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Append a set of images
	 * @link http://php.net/manual/en/imagick.appendimages.php
	 * @param bool $stack [optional] <p>
	 * Whether to stack the images vertically.
	 * By default (or if <b>FALSE</b> is specified) images are stacked left-to-right.
	 * If <i>stack</i> is <b>TRUE</b>, images are stacked top-to-bottom.
	 * </p>
	 * @return Imagick Imagick instance on success.
	 */
	public function appendImages ($stack = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates a charcoal drawing
	 * @link http://php.net/manual/en/imagick.charcoalimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function charcoalImage ($radius, $sigma) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Enhances the contrast of a color image
	 * @link http://php.net/manual/en/imagick.normalizeimage.php
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function normalizeImage ($channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates an oil painting
	 * @link http://php.net/manual/en/imagick.oilpaintimage.php
	 * @param float $radius <p>
	 * The radius of the circular neighborhood.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function oilPaintImage ($radius) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reduces the image to a limited number of color level
	 * @link http://php.net/manual/en/imagick.posterizeimage.php
	 * @param int $levels
	 * @param bool $dither
	 * @return bool <b>TRUE</b> on success.
	 */
	public function posterizeImage ($levels, $dither) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Radial blurs an image
	 * @link http://php.net/manual/en/imagick.radialblurimage.php
	 * @param float $angle
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function radialBlurImage ($angle, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a simulated 3d button-like effect
	 * @link http://php.net/manual/en/imagick.raiseimage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @param bool $raise
	 * @return bool <b>TRUE</b> on success.
	 */
	public function raiseImage ($width, $height, $x, $y, $raise) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Resample image to desired resolution
	 * @link http://php.net/manual/en/imagick.resampleimage.php
	 * @param float $x_resolution
	 * @param float $y_resolution
	 * @param int $filter
	 * @param float $blur
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resampleImage ($x_resolution, $y_resolution, $filter, $blur) {}

	/**
	 * Scales an image to the desired dimensions with one of these filters:<br>
	 * If legacy is true, the calculations are done with the small rounding bug that existed in Imagick before 3.4.0.<br>
	 * If false, the calculations should produce the same results as ImageMagick CLI does.<br>
	 * <br>
	 * <b>Note:</b> The behavior of the parameter bestfit changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched.<br>
	 * In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If bestfit parameter is used both width and height must be given.
	 * @link http://php.net/manual/en/imagick.resizeimage.php
	 * @param int $columns Width of the image
	 * @param int $rows Height of the image
	 * @param int $filter Refer to the list of filter constants.
	 * @param float $blur The blur factor where > 1 is blurry, < 1 is sharp.
	 * @param bool $bestfit [optional] Added since 2.1.0. Added optional fit parameter. This method now supports proportional scaling. Pass zero as either parameter for proportional scaling
	 * @param bool $legacy [optional] Added since 3.4.0. Default value FALSE
	 * @return bool TRUE on success
	 * @since 2.0.0
	 */
	public function resizeImage ($columns, $rows, $filter, $blur, $bestfit = false, $legacy = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Offsets an image
	 * @link http://php.net/manual/en/imagick.rollimage.php
	 * @param int $x <p>
	 * The X offset.
	 * </p>
	 * @param int $y <p>
	 * The Y offset.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function rollImage ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Rotates an image
	 * @link http://php.net/manual/en/imagick.rotateimage.php
	 * @param mixed $background <p>
	 * The background color
	 * </p>
	 * @param float $degrees <p>
	 * The number of degrees to rotate the image
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function rotateImage ($background, $degrees) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image with pixel sampling
	 * @link http://php.net/manual/en/imagick.sampleimage.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sampleImage ($columns, $rows) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a solarizing effect to the image
	 * @link http://php.net/manual/en/imagick.solarizeimage.php
	 * @param int $threshold
	 * @return bool <b>TRUE</b> on success.
	 */
	public function solarizeImage ($threshold) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates an image shadow
	 * @link http://php.net/manual/en/imagick.shadowimage.php
	 * @param float $opacity
	 * @param float $sigma
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shadowImage ($opacity, $sigma, $x, $y) {}

	/**
	 * @param $key
	 * @param $value
	 */
	public function setImageAttribute ($key, $value) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image background color
	 * @link http://php.net/manual/en/imagick.setimagebackgroundcolor.php
	 * @param mixed $background
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageBackgroundColor ($background) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image composite operator
	 * @link http://php.net/manual/en/imagick.setimagecompose.php
	 * @param int $compose
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageCompose ($compose) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image compression
	 * @link http://php.net/manual/en/imagick.setimagecompression.php
	 * @param int $compression <p>
	 * One of the <b>COMPRESSION</b> constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageCompression ($compression) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image delay
	 * @link http://php.net/manual/en/imagick.setimagedelay.php
	 * @param int $delay <p>
	 * The amount of time expressed in 'ticks' that the image should be
	 * displayed for. For animated GIFs there are 100 ticks per second, so a
	 * value of 20 would be 20/100 of a second aka 1/5th of a second.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageDelay ($delay) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image depth
	 * @link http://php.net/manual/en/imagick.setimagedepth.php
	 * @param int $depth
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageDepth ($depth) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image gamma
	 * @link http://php.net/manual/en/imagick.setimagegamma.php
	 * @param float $gamma
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageGamma ($gamma) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image iterations
	 * @link http://php.net/manual/en/imagick.setimageiterations.php
	 * @param int $iterations <p>
	 * The number of iterations the image should loop over. Set to '0' to loop
	 * continuously.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageIterations ($iterations) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image matte color
	 * @link http://php.net/manual/en/imagick.setimagemattecolor.php
	 * @param mixed $matte
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageMatteColor ($matte) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the page geometry of the image
	 * @link http://php.net/manual/en/imagick.setimagepage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImagePage ($width, $height, $x, $y) {}

	/**
	 * @param $filename
	 */
	public function setImageProgressMonitor ($filename) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image resolution
	 * @link http://php.net/manual/en/imagick.setimageresolution.php
	 * @param float $x_resolution
	 * @param float $y_resolution
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageResolution ($x_resolution, $y_resolution) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image scene
	 * @link http://php.net/manual/en/imagick.setimagescene.php
	 * @param int $scene
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageScene ($scene) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image ticks-per-second
	 * @link http://php.net/manual/en/imagick.setimagetickspersecond.php
	 * @param int $ticks_per_second <p>
	 * The duration for which an image should be displayed expressed in ticks
	 * per second.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageTicksPerSecond ($ticks_per_second) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image type
	 * @link http://php.net/manual/en/imagick.setimagetype.php
	 * @param int $image_type
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageType ($image_type) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image units of resolution
	 * @link http://php.net/manual/en/imagick.setimageunits.php
	 * @param int $units
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageUnits ($units) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sharpens an image
	 * @link http://php.net/manual/en/imagick.sharpenimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sharpenImage ($radius, $sigma, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Shaves pixels from the image edges
	 * @link http://php.net/manual/en/imagick.shaveimage.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shaveImage ($columns, $rows) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creating a parallelogram
	 * @link http://php.net/manual/en/imagick.shearimage.php
	 * @param mixed $background <p>
	 * The background color
	 * </p>
	 * @param float $x_shear <p>
	 * The number of degrees to shear on the x axis
	 * </p>
	 * @param float $y_shear <p>
	 * The number of degrees to shear on the y axis
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shearImage ($background, $x_shear, $y_shear) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Splices a solid color into the image
	 * @link http://php.net/manual/en/imagick.spliceimage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function spliceImage ($width, $height, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Fetch basic attributes about the image
	 * @link http://php.net/manual/en/imagick.pingimage.php
	 * @param string $filename <p>
	 * The filename to read the information from.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function pingImage ($filename) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reads image from open filehandle
	 * @link http://php.net/manual/en/imagick.readimagefile.php
	 * @param resource $filehandle
	 * @param string $fileName [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function readImageFile ($filehandle, $fileName = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Displays an image
	 * @link http://php.net/manual/en/imagick.displayimage.php
	 * @param string $servername <p>
	 * The X server name
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function displayImage ($servername) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Displays an image or image sequence
	 * @link http://php.net/manual/en/imagick.displayimages.php
	 * @param string $servername <p>
	 * The X server name
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function displayImages ($servername) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Randomly displaces each pixel in a block
	 * @link http://php.net/manual/en/imagick.spreadimage.php
	 * @param float $radius
	 * @return bool <b>TRUE</b> on success.
	 */
	public function spreadImage ($radius) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Swirls the pixels about the center of the image
	 * @link http://php.net/manual/en/imagick.swirlimage.php
	 * @param float $degrees
	 * @return bool <b>TRUE</b> on success.
	 */
	public function swirlImage ($degrees) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Strips an image of all profiles and comments
	 * @link http://php.net/manual/en/imagick.stripimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function stripImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns formats supported by Imagick
	 * @link http://php.net/manual/en/imagick.queryformats.php
	 * @param string $pattern [optional]
	 * @return array an array containing the formats supported by Imagick.
	 */
	public static function queryFormats ($pattern = "*") {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the configured fonts
	 * @link http://php.net/manual/en/imagick.queryfonts.php
	 * @param string $pattern [optional] <p>
	 * The query pattern
	 * </p>
	 * @return array an array containing the configured fonts.
	 */
	public static function queryFonts ($pattern = "*") {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns an array representing the font metrics
	 * @link http://php.net/manual/en/imagick.queryfontmetrics.php
	 * @param ImagickDraw $properties <p>
	 * ImagickDraw object containing font properties
	 * </p>
	 * @param string $text <p>
	 * The text
	 * </p>
	 * @param bool $multiline [optional] <p>
	 * Multiline parameter. If left empty it is autodetected
	 * </p>
	 * @return array a multi-dimensional array representing the font metrics.
	 */
	public function queryFontMetrics (ImagickDraw $properties, $text, $multiline = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Hides a digital watermark within the image
	 * @link http://php.net/manual/en/imagick.steganoimage.php
	 * @param Imagick $watermark_wand
	 * @param int $offset
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function steganoImage (Imagick $watermark_wand, $offset) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds random noise to the image
	 * @link http://php.net/manual/en/imagick.addnoiseimage.php
	 * @param int $noise_type <p>
	 * The type of the noise. Refer to this list of
	 * noise constants.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function addNoiseImage ($noise_type, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates motion blur
	 * @link http://php.net/manual/en/imagick.motionblurimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param float $angle <p>
	 * Apply the effect along this angle.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * The channel argument affects only if Imagick is compiled against ImageMagick version
	 * 6.4.4 or greater.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function motionBlurImage ($radius, $sigma, $angle, $channel = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Forms a mosaic from images
	 * @link http://php.net/manual/en/imagick.mosaicimages.php
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function mosaicImages () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Method morphs a set of images
	 * @link http://php.net/manual/en/imagick.morphimages.php
	 * @param int $number_frames <p>
	 * The number of in-between images to generate.
	 * </p>
	 * @return Imagick This method returns a new Imagick object on success.
	 * Throw an <b>ImagickException</b> on error.
	 * @throws ImagickException on error
	 */
	public function morphImages ($number_frames) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image proportionally to half its size
	 * @link http://php.net/manual/en/imagick.minifyimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function minifyImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Transforms an image
	 * @link http://php.net/manual/en/imagick.affinetransformimage.php
	 * @param ImagickDraw $matrix <p>
	 * The affine matrix
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function affineTransformImage (ImagickDraw $matrix) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Average a set of images
	 * @link http://php.net/manual/en/imagick.averageimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function averageImages () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Surrounds the image with a border
	 * @link http://php.net/manual/en/imagick.borderimage.php
	 * @param mixed $bordercolor <p>
	 * ImagickPixel object or a string containing the border color
	 * </p>
	 * @param int $width <p>
	 * Border width
	 * </p>
	 * @param int $height <p>
	 * Border height
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function borderImage ($bordercolor, $width, $height) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes a region of an image and trims
	 * @link http://php.net/manual/en/imagick.chopimage.php
	 * @param int $width <p>
	 * Width of the chopped area
	 * </p>
	 * @param int $height <p>
	 * Height of the chopped area
	 * </p>
	 * @param int $x <p>
	 * X origo of the chopped area
	 * </p>
	 * @param int $y <p>
	 * Y origo of the chopped area
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function chopImage ($width, $height, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clips along the first path from the 8BIM profile
	 * @link http://php.net/manual/en/imagick.clipimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clipImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clips along the named paths from the 8BIM profile
	 * @link http://php.net/manual/en/imagick.clippathimage.php
	 * @param string $pathname <p>
	 * The name of the path
	 * </p>
	 * @param bool $inside <p>
	 * If <b>TRUE</b> later operations take effect inside clipping path.
	 * Otherwise later operations take effect outside clipping path.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clipPathImage ($pathname, $inside) {}

	/**
	 * @param $pathname
	 * @param $inside
	 */
	public function clipImagePath ($pathname, $inside) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composites a set of images
	 * @link http://php.net/manual/en/imagick.coalesceimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function coalesceImages () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.colorfloodfillimage.php
	 * @param mixed $fill <p>
	 * ImagickPixel object containing the fill color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at
	 * intensities of 100 and 102 respectively are now interpreted as the
	 * same color for the purposes of the floodfill.
	 * </p>
	 * @param mixed $bordercolor <p>
	 * ImagickPixel object containing the border color
	 * </p>
	 * @param int $x <p>
	 * X start position of the floodfill
	 * </p>
	 * @param int $y <p>
	 * Y start position of the floodfill
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function colorFloodfillImage ($fill, $fuzz, $bordercolor, $x, $y) {}

	/**
	 * Blends the fill color with each pixel in the image. The 'opacity' color is a per channel strength factor for how strongly the color should be applied.<br>
	 * If legacy is true, the behaviour of this function is incorrect, but consistent with how it behaved before Imagick version 3.4.0
	 * @link http://php.net/manual/en/imagick.colorizeimage.php
	 * @param mixed $colorize <p>
	 * ImagickPixel object or a string containing the colorize color
	 * </p>
	 * @param mixed $opacity <p>
	 * ImagickPixel object or an float containing the opacity value.
	 * 1.0 is fully opaque and 0.0 is fully transparent.
	 * </p>
	 * @param bool $legacy [optional] Added since 3.4.0. Default value FALSE
	 * @return bool <b>TRUE</b> on success.
	 * @throws ImagickException Throws ImagickException on error
	 * @since 2.0.0
	 */
	public function colorizeImage ($colorize, $opacity, $legacy = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the difference in one or more images
	 * @link http://php.net/manual/en/imagick.compareimagechannels.php
	 * @param Imagick $image <p>
	 * Imagick object containing the image to compare.
	 * </p>
	 * @param int $channelType <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @param int $metricType <p>
	 * One of the metric type constants.
	 * </p>
	 * @return array Array consisting of new_wand and
	 * distortion.
	 */
	public function compareImageChannels (Imagick $image, $channelType, $metricType) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Compares an image to a reconstructed image
	 * @link http://php.net/manual/en/imagick.compareimages.php
	 * @param Imagick $compare <p>
	 * An image to compare to.
	 * </p>
	 * @param int $metric <p>
	 * Provide a valid metric type constant. Refer to this
	 * list of metric constants.
	 * </p>
	 * @return array Array consisting of an Imagick object of the
	 * reconstructed image and a double representing the difference.
	 * @throws ImagickException Throws ImagickException on error.
	 */
	public function compareImages (Imagick $compare, $metric) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Change the contrast of the image
	 * @link http://php.net/manual/en/imagick.contrastimage.php
	 * @param bool $sharpen <p>
	 * The sharpen value
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function contrastImage ($sharpen) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Combines one or more images into a single image
	 * @link http://php.net/manual/en/imagick.combineimages.php
	 * @param int $channelType <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function combineImages ($channelType) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a custom convolution kernel to the image
	 * @link http://php.net/manual/en/imagick.convolveimage.php
	 * @param array $kernel <p>
	 * The convolution kernel
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function convolveImage (array $kernel, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Displaces an image's colormap
	 * @link http://php.net/manual/en/imagick.cyclecolormapimage.php
	 * @param int $displace <p>
	 * The amount to displace the colormap.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function cycleColormapImage ($displace) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns certain pixel differences between images
	 * @link http://php.net/manual/en/imagick.deconstructimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function deconstructImages () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reduces the speckle noise in an image
	 * @link http://php.net/manual/en/imagick.despeckleimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function despeckleImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Enhance edges within the image
	 * @link http://php.net/manual/en/imagick.edgeimage.php
	 * @param float $radius <p>
	 * The radius of the operation.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function edgeImage ($radius) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a grayscale image with a three-dimensional effect
	 * @link http://php.net/manual/en/imagick.embossimage.php
	 * @param float $radius <p>
	 * The radius of the effect
	 * </p>
	 * @param float $sigma <p>
	 * The sigma of the effect
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function embossImage ($radius, $sigma) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Improves the quality of a noisy image
	 * @link http://php.net/manual/en/imagick.enhanceimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function enhanceImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Equalizes the image histogram
	 * @link http://php.net/manual/en/imagick.equalizeimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function equalizeImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies an expression to an image
	 * @link http://php.net/manual/en/imagick.evaluateimage.php
	 * @param int $op <p>
	 * The evaluation operator
	 * </p>
	 * @param float $constant <p>
	 * The value of the operator
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function evaluateImage ($op, $constant, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * Merges a sequence of images. This is useful for combining Photoshop layers into a single image.
	 * This is replaced by:
	 * <pre>
	 * $im = $im->mergeImageLayers(\Imagick::LAYERMETHOD_FLATTEN)
	 * </pre>
	 * @link http://php.net/manual/en/imagick.flattenimages.php
	 * @return Imagick Returns an Imagick object containing the merged image.
	 * @throws ImagickException Throws ImagickException on error.
	 * @since 2.0.0
	 */
	public function flattenImages () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a vertical mirror image
	 * @link http://php.net/manual/en/imagick.flipimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function flipImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a horizontal mirror image
	 * @link http://php.net/manual/en/imagick.flopimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function flopImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a simulated three-dimensional border
	 * @link http://php.net/manual/en/imagick.frameimage.php
	 * @param mixed $matte_color <p>
	 * ImagickPixel object or a string representing the matte color
	 * </p>
	 * @param int $width <p>
	 * The width of the border
	 * </p>
	 * @param int $height <p>
	 * The height of the border
	 * </p>
	 * @param int $inner_bevel <p>
	 * The inner bevel width
	 * </p>
	 * @param int $outer_bevel <p>
	 * The outer bevel width
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function frameImage ($matte_color, $width, $height, $inner_bevel, $outer_bevel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Evaluate expression for each pixel in the image
	 * @link http://php.net/manual/en/imagick.fximage.php
	 * @param string $expression <p>
	 * The expression.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function fxImage ($expression, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gamma-corrects an image
	 * @link http://php.net/manual/en/imagick.gammaimage.php
	 * @param float $gamma <p>
	 * The amount of gamma-correction.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function gammaImage ($gamma, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Blurs an image
	 * @link http://php.net/manual/en/imagick.gaussianblurimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function gaussianBlurImage ($radius, $sigma, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * @param $key
	 */
	public function getImageAttribute ($key) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image background color
	 * @link http://php.net/manual/en/imagick.getimagebackgroundcolor.php
	 * @return ImagickPixel an ImagickPixel set to the background color of the image.
	 */
	public function getImageBackgroundColor () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticy blue primary point
	 * @link http://php.net/manual/en/imagick.getimageblueprimary.php
	 * @return array Array consisting of "x" and "y" coordinates of point.
	 */
	public function getImageBluePrimary () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image border color
	 * @link http://php.net/manual/en/imagick.getimagebordercolor.php
	 * @return ImagickPixel <b>TRUE</b> on success.
	 */
	public function getImageBorderColor () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the depth for a particular image channel
	 * @link http://php.net/manual/en/imagick.getimagechanneldepth.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return int <b>TRUE</b> on success.
	 */
	public function getImageChannelDepth ($channel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Compares image channels of an image to a reconstructed image
	 * @link http://php.net/manual/en/imagick.getimagechanneldistortion.php
	 * @param Imagick $reference <p>
	 * Imagick object to compare to.
	 * </p>
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @param int $metric <p>
	 * One of the metric type constants.
	 * </p>
	 * @return float <b>TRUE</b> on success.
	 */
	public function getImageChannelDistortion (Imagick $reference, $channel, $metric) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the extrema for one or more image channels
	 * @link http://php.net/manual/en/imagick.getimagechannelextrema.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return array <b>TRUE</b> on success.
	 */
	public function getImageChannelExtrema ($channel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the mean and standard deviation
	 * @link http://php.net/manual/en/imagick.getimagechannelmean.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return array <b>TRUE</b> on success.
	 */
	public function getImageChannelMean ($channel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns statistics for each channel in the image
	 * @link http://php.net/manual/en/imagick.getimagechannelstatistics.php
	 * @return array <b>TRUE</b> on success.
	 */
	public function getImageChannelStatistics () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color of the specified colormap index
	 * @link http://php.net/manual/en/imagick.getimagecolormapcolor.php
	 * @param int $index <p>
	 * The offset into the image colormap.
	 * </p>
	 * @return ImagickPixel <b>TRUE</b> on success.
	 */
	public function getImageColormapColor ($index) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image colorspace
	 * @link http://php.net/manual/en/imagick.getimagecolorspace.php
	 * @return int <b>TRUE</b> on success.
	 */
	public function getImageColorspace () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the composite operator associated with the image
	 * @link http://php.net/manual/en/imagick.getimagecompose.php
	 * @return int <b>TRUE</b> on success.
	 */
	public function getImageCompose () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image delay
	 * @link http://php.net/manual/en/imagick.getimagedelay.php
	 * @return int the image delay.
	 */
	public function getImageDelay () {}

	/**
	 * (PECL imagick 0.9.1-0.9.9)<br/>
	 * Gets the image depth
	 * @link http://php.net/manual/en/imagick.getimagedepth.php
	 * @return int The image depth.
	 */
	public function getImageDepth () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Compares an image to a reconstructed image
	 * @link http://php.net/manual/en/imagick.getimagedistortion.php
	 * @param Imagick $reference <p>
	 * Imagick object to compare to.
	 * </p>
	 * @param int $metric <p>
	 * One of the metric type constants.
	 * </p>
	 * @return float the distortion metric used on the image (or the best guess
	 * thereof).
	 */
	public function getImageDistortion (Imagick $reference, $metric) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the extrema for the image
	 * @link http://php.net/manual/en/imagick.getimageextrema.php
	 * @return array an associative array with the keys "min" and "max".
	 */
	public function getImageExtrema () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image disposal method
	 * @link http://php.net/manual/en/imagick.getimagedispose.php
	 * @return int the dispose method on success.
	 */
	public function getImageDispose () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image gamma
	 * @link http://php.net/manual/en/imagick.getimagegamma.php
	 * @return float the image gamma on success.
	 */
	public function getImageGamma () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticy green primary point
	 * @link http://php.net/manual/en/imagick.getimagegreenprimary.php
	 * @return array an array with the keys "x" and "y" on success, throws an ImagickException on failure.
	 * @throws ImagickException on failure
	 */
	public function getImageGreenPrimary () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image height
	 * @link http://php.net/manual/en/imagick.getimageheight.php
	 * @return int the image height in pixels.
	 */
	public function getImageHeight () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image histogram
	 * @link http://php.net/manual/en/imagick.getimagehistogram.php
	 * @return array the image histogram as an array of ImagickPixel objects.
	 */
	public function getImageHistogram () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image interlace scheme
	 * @link http://php.net/manual/en/imagick.getimageinterlacescheme.php
	 * @return int the interlace scheme as an integer on success.
	 * Trhow an <b>ImagickException</b> on error.
	 * @throws ImagickException on error
	 */
	public function getImageInterlaceScheme () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image iterations
	 * @link http://php.net/manual/en/imagick.getimageiterations.php
	 * @return int the image iterations as an integer.
	 */
	public function getImageIterations () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image matte color
	 * @link http://php.net/manual/en/imagick.getimagemattecolor.php
	 * @return ImagickPixel ImagickPixel object on success.
	 */
	public function getImageMatteColor () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the page geometry
	 * @link http://php.net/manual/en/imagick.getimagepage.php
	 * @return array the page geometry associated with the image in an array with the
	 * keys "width", "height", "x", and "y".
	 */
	public function getImagePage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color of the specified pixel
	 * @link http://php.net/manual/en/imagick.getimagepixelcolor.php
	 * @param int $x <p>
	 * The x-coordinate of the pixel
	 * </p>
	 * @param int $y <p>
	 * The y-coordinate of the pixel
	 * </p>
	 * @return ImagickPixel an ImagickPixel instance for the color at the coordinates given.
	 */
	public function getImagePixelColor ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the named image profile
	 * @link http://php.net/manual/en/imagick.getimageprofile.php
	 * @param string $name <p>
	 * The name of the profile to return.
	 * </p>
	 * @return string a string containing the image profile.
	 */
	public function getImageProfile ($name) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticity red primary point
	 * @link http://php.net/manual/en/imagick.getimageredprimary.php
	 * @return array the chromaticity red primary point as an array with the keys "x"
	 * and "y".
	 * Throw an <b>ImagickException</b> on error.
	 * @throws ImagickException on error
	 */
	public function getImageRedPrimary () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image rendering intent
	 * @link http://php.net/manual/en/imagick.getimagerenderingintent.php
	 * @return int the image rendering intent.
	 */
	public function getImageRenderingIntent () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image X and Y resolution
	 * @link http://php.net/manual/en/imagick.getimageresolution.php
	 * @return array the resolution as an array.
	 */
	public function getImageResolution () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image scene
	 * @link http://php.net/manual/en/imagick.getimagescene.php
	 * @return int the image scene.
	 */
	public function getImageScene () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Generates an SHA-256 message digest
	 * @link http://php.net/manual/en/imagick.getimagesignature.php
	 * @return string a string containing the SHA-256 hash of the file.
	 */
	public function getImageSignature () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image ticks-per-second
	 * @link http://php.net/manual/en/imagick.getimagetickspersecond.php
	 * @return int the image ticks-per-second.
	 */
	public function getImageTicksPerSecond () {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * Gets the potential image type
	 * @link http://php.net/manual/en/imagick.getimagetype.php
	 * @return int the potential image type.
	 * <b>imagick::IMGTYPE_UNDEFINED</b>
	 * <b>imagick::IMGTYPE_BILEVEL</b>
	 * <b>imagick::IMGTYPE_GRAYSCALE</b>
	 * <b>imagick::IMGTYPE_GRAYSCALEMATTE</b>
	 * <b>imagick::IMGTYPE_PALETTE</b>
	 * <b>imagick::IMGTYPE_PALETTEMATTE</b>
	 * <b>imagick::IMGTYPE_TRUECOLOR</b>
	 * <b>imagick::IMGTYPE_TRUECOLORMATTE</b>
	 * <b>imagick::IMGTYPE_COLORSEPARATION</b>
	 * <b>imagick::IMGTYPE_COLORSEPARATIONMATTE</b>
	 * <b>imagick::IMGTYPE_OPTIMIZE</b>
	 */
	public function getImageType () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image units of resolution
	 * @link http://php.net/manual/en/imagick.getimageunits.php
	 * @return int the image units of resolution.
	 */
	public function getImageUnits () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the virtual pixel method
	 * @link http://php.net/manual/en/imagick.getimagevirtualpixelmethod.php
	 * @return int the virtual pixel method on success.
	 */
	public function getImageVirtualPixelMethod () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticity white point
	 * @link http://php.net/manual/en/imagick.getimagewhitepoint.php
	 * @return array the chromaticity white point as an associative array with the keys
	 * "x" and "y".
	 */
	public function getImageWhitePoint () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image width
	 * @link http://php.net/manual/en/imagick.getimagewidth.php
	 * @return int the image width.
	 */
	public function getImageWidth () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the number of images in the object
	 * @link http://php.net/manual/en/imagick.getnumberimages.php
	 * @return int the number of images associated with Imagick object.
	 */
	public function getNumberImages () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image total ink density
	 * @link http://php.net/manual/en/imagick.getimagetotalinkdensity.php
	 * @return float the image total ink density of the image.
	 * Throw an <b>ImagickException</b> on error.
	 * @throws ImagickException on error
	 */
	public function getImageTotalInkDensity () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Extracts a region of the image
	 * @link http://php.net/manual/en/imagick.getimageregion.php
	 * @param int $width <p>
	 * The width of the extracted region.
	 * </p>
	 * @param int $height <p>
	 * The height of the extracted region.
	 * </p>
	 * @param int $x <p>
	 * X-coordinate of the top-left corner of the extracted region.
	 * </p>
	 * @param int $y <p>
	 * Y-coordinate of the top-left corner of the extracted region.
	 * </p>
	 * @return Imagick Extracts a region of the image and returns it as a new wand.
	 */
	public function getImageRegion ($width, $height, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a new image as a copy
	 * @link http://php.net/manual/en/imagick.implodeimage.php
	 * @param float $radius <p>
	 * The radius of the implode
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function implodeImage ($radius) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the levels of an image
	 * @link http://php.net/manual/en/imagick.levelimage.php
	 * @param float $blackPoint <p>
	 * The image black point
	 * </p>
	 * @param float $gamma <p>
	 * The gamma value
	 * </p>
	 * @param float $whitePoint <p>
	 * The image white point
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function levelImage ($blackPoint, $gamma, $whitePoint, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image proportionally 2x
	 * @link http://php.net/manual/en/imagick.magnifyimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function magnifyImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Replaces the colors of an image with the closest color from a reference image.
	 * @link http://php.net/manual/en/imagick.mapimage.php
	 * @param Imagick $map
	 * @param bool $dither
	 * @return bool <b>TRUE</b> on success.
	 */
	public function mapImage (Imagick $map, $dither) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the transparency value of a color
	 * @link http://php.net/manual/en/imagick.mattefloodfillimage.php
	 * @param float $alpha <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @param float $fuzz <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @param mixed $bordercolor <p>
	 * An <b>ImagickPixel</b> object or string representing the border color.
	 * </p>
	 * @param int $x <p>
	 * The starting x coordinate of the operation.
	 * </p>
	 * @param int $y <p>
	 * The starting y coordinate of the operation.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function matteFloodfillImage ($alpha, $fuzz, $bordercolor, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a digital filter
	 * @link http://php.net/manual/en/imagick.medianfilterimage.php
	 * @param float $radius <p>
	 * The radius of the pixel neighborhood.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function medianFilterImage ($radius) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Negates the colors in the reference image
	 * @link http://php.net/manual/en/imagick.negateimage.php
	 * @param bool $gray <p>
	 * Whether to only negate grayscale pixels within the image.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function negateImage ($gray, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Change any pixel that matches color
	 * @link http://php.net/manual/en/imagick.paintopaqueimage.php
	 * @param mixed $target <p>
	 * Change this target color to the fill color within the image. An
	 * ImagickPixel object or a string representing the target color.
	 * </p>
	 * @param mixed $fill <p>
	 * An ImagickPixel object or a string representing the fill color.
	 * </p>
	 * @param float $fuzz <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function paintOpaqueImage ($target, $fill, $fuzz, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes any pixel that matches color with the color defined by fill
	 * @link http://php.net/manual/en/imagick.painttransparentimage.php
	 * @param mixed $target <p>
	 * Change this target color to specified opacity value within the image.
	 * </p>
	 * @param float $alpha <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @param float $fuzz <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function paintTransparentImage ($target, $alpha, $fuzz) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Quickly pin-point appropriate parameters for image processing
	 * @link http://php.net/manual/en/imagick.previewimages.php
	 * @param int $preview <p>
	 * Preview type. See Preview type constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function previewImages ($preview) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds or removes a profile from an image
	 * @link http://php.net/manual/en/imagick.profileimage.php
	 * @param string $name
	 * @param string $profile
	 * @return bool <b>TRUE</b> on success.
	 */
	public function profileImage ($name, $profile) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Analyzes the colors within a reference image
	 * @link http://php.net/manual/en/imagick.quantizeimage.php
	 * @param int $numberColors
	 * @param int $colorspace
	 * @param int $treedepth
	 * @param bool $dither
	 * @param bool $measureError
	 * @return bool <b>TRUE</b> on success.
	 */
	public function quantizeImage ($numberColors, $colorspace, $treedepth, $dither, $measureError) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Analyzes the colors within a sequence of images
	 * @link http://php.net/manual/en/imagick.quantizeimages.php
	 * @param int $numberColors
	 * @param int $colorspace
	 * @param int $treedepth
	 * @param bool $dither
	 * @param bool $measureError
	 * @return bool <b>TRUE</b> on success.
	 */
	public function quantizeImages ($numberColors, $colorspace, $treedepth, $dither, $measureError) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Smooths the contours of an image
	 * @link http://php.net/manual/en/imagick.reducenoiseimage.php
	 * @param float $radius
	 * @return bool <b>TRUE</b> on success.
	 */
	public function reduceNoiseImage ($radius) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes the named image profile and returns it
	 * @link http://php.net/manual/en/imagick.removeimageprofile.php
	 * @param string $name
	 * @return string a string containing the profile of the image.
	 */
	public function removeImageProfile ($name) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Separates a channel from the image
	 * @link http://php.net/manual/en/imagick.separateimagechannel.php
	 * @param int $channel
	 * @return bool <b>TRUE</b> on success.
	 */
	public function separateImageChannel ($channel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sepia tones an image
	 * @link http://php.net/manual/en/imagick.sepiatoneimage.php
	 * @param float $threshold
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sepiaToneImage ($threshold) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image bias for any method that convolves an image
	 * @link http://php.net/manual/en/imagick.setimagebias.php
	 * @param float $bias
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageBias ($bias) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity blue primary point
	 * @link http://php.net/manual/en/imagick.setimageblueprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageBluePrimary ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image border color
	 * @link http://php.net/manual/en/imagick.setimagebordercolor.php
	 * @param mixed $border <p>
	 * The border color
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageBorderColor ($border) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the depth of a particular image channel
	 * @link http://php.net/manual/en/imagick.setimagechanneldepth.php
	 * @param int $channel
	 * @param int $depth
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageChannelDepth ($channel, $depth) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the color of the specified colormap index
	 * @link http://php.net/manual/en/imagick.setimagecolormapcolor.php
	 * @param int $index
	 * @param ImagickPixel $color
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageColormapColor ($index, ImagickPixel $color) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image colorspace
	 * @link http://php.net/manual/en/imagick.setimagecolorspace.php
	 * @param int $colorspace <p>
	 * One of the COLORSPACE constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageColorspace ($colorspace) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image disposal method
	 * @link http://php.net/manual/en/imagick.setimagedispose.php
	 * @param int $dispose
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageDispose ($dispose) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image size
	 * @link http://php.net/manual/en/imagick.setimageextent.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageExtent ($columns, $rows) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity green primary point
	 * @link http://php.net/manual/en/imagick.setimagegreenprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageGreenPrimary ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image compression
	 * @link http://php.net/manual/en/imagick.setimageinterlacescheme.php
	 * @param int $interlace_scheme
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageInterlaceScheme ($interlace_scheme) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a named profile to the Imagick object
	 * @link http://php.net/manual/en/imagick.setimageprofile.php
	 * @param string $name
	 * @param string $profile
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageProfile ($name, $profile) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity red primary point
	 * @link http://php.net/manual/en/imagick.setimageredprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageRedPrimary ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image rendering intent
	 * @link http://php.net/manual/en/imagick.setimagerenderingintent.php
	 * @param int $rendering_intent
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageRenderingIntent ($rendering_intent) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image virtual pixel method
	 * @link http://php.net/manual/en/imagick.setimagevirtualpixelmethod.php
	 * @param int $method
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageVirtualPixelMethod ($method) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity white point
	 * @link http://php.net/manual/en/imagick.setimagewhitepoint.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImageWhitePoint ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the contrast of an image
	 * @link http://php.net/manual/en/imagick.sigmoidalcontrastimage.php
	 * @param bool $sharpen
	 * @param float $alpha
	 * @param float $beta
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sigmoidalContrastImage ($sharpen, $alpha, $beta, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composites two images
	 * @link http://php.net/manual/en/imagick.stereoimage.php
	 * @param Imagick $offset_wand
	 * @return bool <b>TRUE</b> on success.
	 */
	public function stereoImage (Imagick $offset_wand) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Repeatedly tiles the texture image
	 * @link http://php.net/manual/en/imagick.textureimage.php
	 * @param Imagick $texture_wand
	 * @return bool <b>TRUE</b> on success.
	 */
	public function textureImage (Imagick $texture_wand) {}

	/**
	 * pplies a color vector to each pixel in the image. The 'opacity' color is a per channel strength factor for how strongly the color should be applied.
	 * If legacy is true, the behaviour of this function is incorrect, but consistent with how it behaved before Imagick version 3.4.0
	 * @link http://php.net/manual/en/imagick.tintimage.php
	 * @param mixed $tint
	 * @param mixed $opacity
	 * @param bool $legacy [optional]
	 * @return bool <b>TRUE</b> on success.
	 * @throws ImagickException Throws ImagickException on error
	 * @since 2.0.0
	 */
	public function tintImage ($tint, $opacity, $legacy = false) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sharpens an image
	 * @link http://php.net/manual/en/imagick.unsharpmaskimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param float $amount
	 * @param float $threshold
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function unsharpMaskImage ($radius, $sigma, $amount, $threshold, $channel = Imagick::CHANNEL_ALL) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a new Imagick object
	 * @link http://php.net/manual/en/imagick.getimage.php
	 * @return Imagick a new Imagick object with the current image sequence.
	 */
	public function getImage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds new image to Imagick object image list
	 * @link http://php.net/manual/en/imagick.addimage.php
	 * @param Imagick $source <p>
	 * The source Imagick object
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function addImage (Imagick $source) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Replaces image in the object
	 * @link http://php.net/manual/en/imagick.setimage.php
	 * @param Imagick $replace <p>
	 * The replace Imagick object
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setImage (Imagick $replace) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a new image
	 * @link http://php.net/manual/en/imagick.newimage.php
	 * @param int $cols <p>
	 * Columns in the new image
	 * </p>
	 * @param int $rows <p>
	 * Rows in the new image
	 * </p>
	 * @param mixed $background <p>
	 * The background color used for this image
	 * </p>
	 * @param string $format [optional] <p>
	 * Image format. This parameter was added in Imagick version 2.0.1.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function newImage ($cols, $rows, $background, $format = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a new image
	 * @link http://php.net/manual/en/imagick.newpseudoimage.php
	 * @param int $columns <p>
	 * columns in the new image
	 * </p>
	 * @param int $rows <p>
	 * rows in the new image
	 * </p>
	 * @param string $pseudoString <p>
	 * string containing pseudo image definition.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function newPseudoImage ($columns, $rows, $pseudoString) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the object compression type
	 * @link http://php.net/manual/en/imagick.getcompression.php
	 * @return int the compression constant
	 */
	public function getCompression () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the object compression quality
	 * @link http://php.net/manual/en/imagick.getcompressionquality.php
	 * @return int integer describing the compression quality
	 */
	public function getCompressionQuality () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick API copyright as a string
	 * @link http://php.net/manual/en/imagick.getcopyright.php
	 * @return string a string containing the copyright notice of Imagemagick and
	 * Magickwand C API.
	 */
	public static function getCopyright () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The filename associated with an image sequence
	 * @link http://php.net/manual/en/imagick.getfilename.php
	 * @return string a string on success.
	 */
	public function getFilename () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the format of the Imagick object
	 * @link http://php.net/manual/en/imagick.getformat.php
	 * @return string the format of the image.
	 */
	public function getFormat () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick home URL
	 * @link http://php.net/manual/en/imagick.gethomeurl.php
	 * @return string a link to the imagemagick homepage.
	 */
	public static function getHomeURL () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the object interlace scheme
	 * @link http://php.net/manual/en/imagick.getinterlacescheme.php
	 * @return int Gets the wand interlace
	 * scheme.
	 */
	public function getInterlaceScheme () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a value associated with the specified key
	 * @link http://php.net/manual/en/imagick.getoption.php
	 * @param string $key <p>
	 * The name of the option
	 * </p>
	 * @return string a value associated with a wand and the specified key.
	 */
	public function getOption ($key) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick package name
	 * @link http://php.net/manual/en/imagick.getpackagename.php
	 * @return string the ImageMagick package name as a string.
	 */
	public static function getPackageName () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the page geometry
	 * @link http://php.net/manual/en/imagick.getpage.php
	 * @return array the page geometry associated with the Imagick object in
	 * an associative array with the keys "width", "height", "x", and "y",
	 * throwing ImagickException on error.
	 * @throws ImagickException on error
	 */
	public function getPage () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the quantum depth
	 * @link http://php.net/manual/en/imagick.getquantumdepth.php
	 * @return array the Imagick quantum depth as a string.
	 */
	public static function getQuantumDepth () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the Imagick quantum range
	 * @link http://php.net/manual/en/imagick.getquantumrange.php
	 * @return array the Imagick quantum range as a string.
	 */
	public static function getQuantumRange () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick release date
	 * @link http://php.net/manual/en/imagick.getreleasedate.php
	 * @return string the ImageMagick release date as a string.
	 */
	public static function getReleaseDate () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the specified resource's memory usage
	 * @link http://php.net/manual/en/imagick.getresource.php
	 * @param int $type <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @return int the specified resource's memory usage in megabytes.
	 */
	public static function getResource ($type) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the specified resource limit
	 * @link http://php.net/manual/en/imagick.getresourcelimit.php
	 * @param int $type <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @return int the specified resource limit in megabytes.
	 */
	public static function getResourceLimit ($type) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the horizontal and vertical sampling factor
	 * @link http://php.net/manual/en/imagick.getsamplingfactors.php
	 * @return array an associative array with the horizontal and vertical sampling
	 * factors of the image.
	 */
	public function getSamplingFactors () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the size associated with the Imagick object
	 * @link http://php.net/manual/en/imagick.getsize.php
	 * @return array the size associated with the Imagick object as an array with the
	 * keys "columns" and "rows".
	 */
	public function getSize () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick API version
	 * @link http://php.net/manual/en/imagick.getversion.php
	 * @return array the ImageMagick API version as a string and as a number.
	 */
	public static function getVersion () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the object's default background color
	 * @link http://php.net/manual/en/imagick.setbackgroundcolor.php
	 * @param mixed $background
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setBackgroundColor ($background) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the object's default compression type
	 * @link http://php.net/manual/en/imagick.setcompression.php
	 * @param int $compression
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setCompression ($compression) {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * Sets the object's default compression quality
	 * @link http://php.net/manual/en/imagick.setcompressionquality.php
	 * @param int $quality
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setCompressionQuality ($quality) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the filename before you read or write the image
	 * @link http://php.net/manual/en/imagick.setfilename.php
	 * @param string $filename
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setFilename ($filename) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the format of the Imagick object
	 * @link http://php.net/manual/en/imagick.setformat.php
	 * @param string $format
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setFormat ($format) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image compression
	 * @link http://php.net/manual/en/imagick.setinterlacescheme.php
	 * @param int $interlace_scheme
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setInterlaceScheme ($interlace_scheme) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set an option
	 * @link http://php.net/manual/en/imagick.setoption.php
	 * @param string $key
	 * @param string $value
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setOption ($key, $value) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the page geometry of the Imagick object
	 * @link http://php.net/manual/en/imagick.setpage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setPage ($width, $height, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the limit for a particular resource in megabytes
	 * @link http://php.net/manual/en/imagick.setresourcelimit.php
	 * @param int $type <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @param int $limit <p>
	 * The resource limit. The unit depends on the type of the resource being limited.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public static function setResourceLimit ($type, $limit) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image resolution
	 * @link http://php.net/manual/en/imagick.setresolution.php
	 * @param float $x_resolution <p>
	 * The horizontal resolution.
	 * </p>
	 * @param float $y_resolution <p>
	 * The vertical resolution.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setResolution ($x_resolution, $y_resolution) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image sampling factors
	 * @link http://php.net/manual/en/imagick.setsamplingfactors.php
	 * @param array $factors
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setSamplingFactors (array $factors) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the size of the Imagick object
	 * @link http://php.net/manual/en/imagick.setsize.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setSize ($columns, $rows) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image type attribute
	 * @link http://php.net/manual/en/imagick.settype.php
	 * @param int $image_type
	 * @return bool <b>TRUE</b> on success.
	 */
/**
*<div id="function.settype" class="refentry">    <div class="refnamediv">     <h1 class="refname">settype</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">settype</span> &mdash; <span class="dc-title">设置变量的类型</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.settype-description">   <h3 class="title">说明</h3>      <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">       <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>settype</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">&$var</span></span>       , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$type</span></span>       )</div>      <p class="para rdfs-comment">      将变量 <span class="parameter" style="color:#2EACF9">var</span> 的类型设置成      <span class="parameter" style="color:#2EACF9">type</span>。     </p>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.settype-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">var</span></dt>       <dd>        <p class="para">        要转换的变量。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">type</span></dt>       <dd>        <p class="para">        <span class="parameter" style="color:#2EACF9">type</span> 的可能值为：        <ul class="itemizedlist">         <li class="listitem">          <span class="simpara">         “boolean” （或为“bool”，从 PHP 4.2.0 起）          </span>         </li>         <li class="listitem">          <span class="simpara">         “integer” （或为“int”，从 PHP 4.2.0 起）          </span>         </li>         <li class="listitem">          <span class="simpara">         “float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）          </span>         </li>         <li class="listitem">          <span class="simpara">           &quot;string&quot;          </span>         </li>         <li class="listitem">          <span class="simpara">           &quot;array&quot;          </span>         </li>         <li class="listitem">          <span class="simpara">           &quot;object&quot;          </span>         </li>         <li class="listitem">          <span class="simpara">         “null” （从 PHP 4.2.0 起）          </span>         </li>        </ul>       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.settype-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.settype-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6363">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">settype()</strong></span> 示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$foo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"5bar"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;string<br /></span><span style="color: #9876AA">$bar&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">true</span><span style="color: #007700">;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;boolean<br /><br /></span><span style="color: #9876AA">settype</span><span style="color: #007700">(</span><span style="color: #9876AA">$foo</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"integer"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$foo&nbsp;现在是&nbsp;5&nbsp;&nbsp;&nbsp;(integer)<br /></span><span style="color: #9876AA">settype</span><span style="color: #007700">(</span><span style="color: #9876AA">$bar</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"string"</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$bar&nbsp;现在是&nbsp;"1"&nbsp;(string)<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.settype-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     Maximum value for &quot;int&quot; is <strong><span>PHP_INT_MAX</span></strong>.    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.settype-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link gettype()} - 获取变量的类型</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.types.type-juggling.php#language.types.typecasting" class="link">类型转换</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.types.type-juggling.php" class="link">类型戏法</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function setType ($image_type) {}

/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>key</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$array</span></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong style="color:#CC7832">key()</strong></span> 会返回 <strong><span>NULL</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <span class="parameter" style="color:#2EACF9">array</span> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </span></div>     </div>    </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key () {}

/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>next</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        受影响的 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong style="color:#CC7832">next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$handle</span></span>    )</div>    <p class="para rdfs-comment">    将 <span class="parameter" style="color:#2EACF9">handle</span> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">handle</span></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Foolly long sentence. </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Checks if the current item is valid
	 * @link http://php.net/manual/en/imagick.valid.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function valid () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a reference to the current Imagick object
	 * @link http://php.net/manual/en/imagick.current.php
	 * @return Imagick self on success.
	 */
/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>current</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong style="color:#CC7832">current()</strong></span>      返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong style="color:#CC7832">current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 的单元则本函数在碰到这个单元时也返回        <strong><span>FALSE</span></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </span>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current () {}

	/**
	 * Change the brightness and/or contrast of an image. It converts the brightness and contrast parameters into slope and intercept and calls a polynomical function to apply to the image.
	 * @link http://php.net/manual/en/imagick.brightnesscontrastimage.php
	 * @param string $brightness
	 * @param string $contrast
	 * @param int $CHANNEL [optional]
	 * @return void
	 * @since 3.3.0
	 */
	public function brightnessContrastImage ($brightness, $contrast, $CHANNEL = Imagick::CHANNEL_DEFAULT) { }

	/**
	 * Applies a user supplied kernel to the image according to the given morphology method.
	 * @link http://php.net/manual/en/imagick.morphology.php
	 * @param int $morphologyMethod Which morphology method to use one of the \Imagick::MORPHOLOGY_* constants.
	 * @param int $iterations The number of iteration to apply the morphology function. A value of -1 means loop until no change found. How this is applied may depend on the morphology method. Typically this is a value of 1.
	 * @param ImagickKernel $ImagickKernel
	 * @param int $CHANNEL [optional]
	 * @return void
	 * @since 3.3.0
	 */
	public function morphology ($morphologyMethod, $iterations, ImagickKernel $ImagickKernel, $CHANNEL = Imagick::CHANNEL_DEFAULT) { }

	/**
	 * Applies a custom convolution kernel to the image.
	 * @link http://php.net/manual/en/imagick.filter.php
	 * @param ImagickKernel $ImagickKernel An instance of ImagickKernel that represents either a single kernel or a linked series of kernels.
	 * @param int $CHANNEL [optional] Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to Imagick::CHANNEL_DEFAULT. Refer to this list of channel constants
	 * @return void
	 * @since 3.3.0
	 */
	public function filter (ImagickKernel $ImagickKernel , $CHANNEL = Imagick::CHANNEL_DEFAULT) { }

	/**
	 * Apply color transformation to an image. The method permits saturation changes, hue rotation, luminance to alpha, and various other effects. Although variable-sized transformation matrices can be used, typically one uses a 5x5 matrix for an RGBA image and a 6x6 for CMYKA (or RGBA with offsets).
	 * The matrix is similar to those used by Adobe Flash except offsets are in column 6 rather than 5 (in support of CMYKA images) and offsets are normalized (divide Flash offset by 255)
	 * @link http://php.net/manual/en/imagick.colormatriximage.php
	 * @param string $color_matrix
	 * @return void
	 * @since 3.3.0
	 */
	public function colorMatrixImage ($color_matrix = Imagick::CHANNEL_DEFAULT) { }

	/**
	 * Deletes an image property.
	 * @link http://php.net/manual/en/imagick.deleteimageproperty.php
	 * @param string $name The name of the property to delete.
	 * @return void
	 * @since 3.3.0
	 */
	public function deleteImageProperty ($name) { }

	/**
	 * Implements the discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.
	 * @link http://php.net/manual/en/imagick.forwardfouriertransformimage.php
	 * @param bool $magnitude If true, return as magnitude / phase pair otherwise a real / imaginary image pair.
	 * @return void
	 * @since 3.3.0
	 */
	public function forwardFourierTransformimage ($magnitude) { }

	/**
	 * Gets the current image's compression type.
	 * @link http://php.net/manual/en/imagick.getimagecompression.php
	 * @return int
	 * @since 3.3.0
	 */
	public function getImageCompression () { }

	/**
	 * Get the StringRegistry entry for the named key or false if not set.
	 * @link http://php.net/manual/en/imagick.getregistry.php
	 * @param string $key
	 * @return string
	 * @throws Exception Since version >=3.4.3. Throws an exception if the key does not exist, rather than terminating the program.
	 * @since 3.3.0
	 */
	public static function getRegistry ($key) { }

	/**
	 * Returns the ImageMagick quantum range as an integer.
	 * @link http://php.net/manual/en/imagick.getquantum.php
	 * @return int
	 * @since 3.3.0
	 */
	public static function getQuantum () { }

	/**
	 * Replaces any embedded formatting characters with the appropriate image property and returns the interpreted text. See http://www.imagemagick.org/script/escape.php for escape sequences.
	 * @link http://php.net/manual/en/imagick.identifyformat.php
	 * @see http://www.imagemagick.org/script/escape.php
	 * @param string $embedText A string containing formatting sequences e.g. "Trim box: %@ number of unique colors: %k".
	 * @return bool
	 * @since 3.3.0
	 */
	public function identifyFormat ($embedText) { }

	/**
	 * Implements the inverse discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.
	 * @link http://php.net/manual/en/imagick.inversefouriertransformimage.php
	 * @param Imagick $complement The second image to combine with this one to form either the magnitude / phase or real / imaginary image pair.
	 * @param bool $magnitude If true, combine as magnitude / phase pair otherwise a real / imaginary image pair.
	 * @return void
	 * @since 3.3.0
	 */
	public function inverseFourierTransformImage ($complement, $magnitude) { }

	/**
	 * List all the registry settings. Returns an array of all the key/value pairs in the registry
	 * @link http://php.net/manual/en/imagick.listregistry.php
	 * @return array An array containing the key/values from the registry.
	 * @since 3.3.0
	 */
	public static function listRegistry () { }

	/**
	 * Rotational blurs an image.
	 * @link http://php.net/manual/en/imagick.rotationalblurimage.php
	 * @param string $angle
	 * @param string $CHANNEL
	 * @return void
	 * @since 3.3.0
	 */
	public function rotationalBlurImage ($angle, $CHANNEL = Imagick::CHANNEL_DEFAULT) { }

	/**
	 * Selectively blur an image within a contrast threshold. It is similar to the unsharpen mask that sharpens everything with contrast above a certain threshold.
	 * @link http://php.net/manual/en/imagick.selectiveblurimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param float $threshold
	 * @param int $CHANNEL Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to Imagick::CHANNEL_DEFAULT. Refer to this list of channel constants
	 * @return void
	 * @since 3.3.0
	 */
	public function selectiveBlurImage ($radius, $sigma, $threshold, $CHANNEL = Imagick::CHANNEL_DEFAULT) { }

	/**
	 * Set whether antialiasing should be used for operations. On by default.
	 * @param bool $antialias
	 * @return int
	 * @since 3.3.0
	 */
	public function setAntiAlias ($antialias) { }

	/**
	 * @link http://php.net/manual/en/imagick.setimagebiasquantum.php
	 * @param string $bias
	 * @return void
	 * @since 3.3.0
	 */
	public function setImageBiasQuantum ($bias) { }

	/**
	 * Set a callback that will be called during the processing of the Imagick image.
	 * @link http://php.net/manual/en/imagick.setprogressmonitor.php
	 * @param callable $callback The progress function to call. It should return true if image processing should continue, or false if it should be cancelled.
	 * The offset parameter indicates the progress and the span parameter indicates the total amount of work needed to be done.
	 * <pre> bool callback ( mixed $offset , mixed $span ) </pre>
	 * <b>Caution</b>
	 * The values passed to the callback function are not consistent. In particular the span parameter can increase during image processing. Because of this calculating the percentage complete of an image operation is not trivial.
	 * @return void
	 * @since 3.3.0
	 */
	public function setProgressMonitor ($callback) { }

	/**
	 * Sets the ImageMagick registry entry named key to value. This is most useful for setting "temporary-path" which controls where ImageMagick creates temporary images e.g. while processing PDFs.
	 * @link http://php.net/manual/en/imagick.setregistry.php
	 * @param string $key
	 * @param string $value
	 * @return void
	 * @since 3.3.0
	 */
	public static function setRegistry ($key, $value) { }

	/**
	 * Replace each pixel with corresponding statistic from the neighborhood of the specified width and height.
	 * @link http://php.net/manual/en/imagick.statisticimage.php
	 * @param int $type
	 * @param int $width
	 * @param int $height
	 * @param int $channel [optional]
	 * @return void
	 * @since 3.3.0
	 */
	public function statisticImage ($type, $width, $height, $channel = Imagick::CHANNEL_DEFAULT ) { }

	/**
	 * Searches for a subimage in the current image and returns a similarity image such that an exact match location is
	 * completely white and if none of the pixels match, black, otherwise some gray level in-between.
	 * You can also pass in the optional parameters bestMatch and similarity. After calling the function similarity will
	 * be set to the 'score' of the similarity between the subimage and the matching position in the larger image,
	 * bestMatch will contain an associative array with elements x, y, width, height that describe the matching region.
	 *
	 * @link http://php.net/manual/en/imagick.subimagematch.php
	 * @param Imagick $imagick
	 * @param array $bestMatch [optional]
	 * @param float $similarity [optional] A new image that displays the amount of similarity at each pixel.
	 * @param float $similarity_threshold [optional] Only used if compiled with ImageMagick (library) > 7
	 * @param int $metric [optional] Only used if compiled with ImageMagick (library) > 7
	 * @return Imagick
	 * @since 3.3.0
	 */
	public function subImageMatch (Imagick $imagick, array &$bestMatch, &$similarity, $similarity_threshold, $metric) { }

	/**
	 * Is an alias of Imagick::subImageMatch
	 *
	 * @param Imagick $imagick
	 * @param array $bestMatch [optional]
	 * @param float $similarity [optional] A new image that displays the amount of similarity at each pixel.
	 * @param float $similarity_threshold [optional]
	 * @param int $metric [optional]
	 * @return Imagick
	 * @see Imagick::subImageMatch() This function is an alias of subImageMatch()
	 * @since 3.4.0
	 */
	public function similarityImage (Imagick $imagick, array &$bestMatch, &$similarity, $similarity_threshold, $metric) { }

	/**
	 * Returns any ImageMagick  configure options that match the specified pattern (e.g. "*" for all). Options include NAME, VERSION, LIB_VERSION, etc.
	 * @return string
	 * @since 3.4.0
	 */
	public function getConfigureOptions () { }

	/**
	 * GetFeatures() returns the ImageMagick features that have been compiled into the runtime.
	 * @return string
	 * @since 3.4.0
	 */
	public function getFeatures () { }

	/**
	 * @return int
	 * @since 3.4.0
	 */
	public function getHDRIEnabled () { }

	/**
	 * Sets the image channel mask. Returns the previous set channel mask.
	 * Only works with Imagick >=7
	 * @param int $channel
	 * @since 3.4.0
	 */
	public function setImageChannelMask ($channel) {}

	/**
	 * Merge multiple images of the same size together with the selected operator. http://www.imagemagick.org/Usage/layers/#evaluate-sequence
	 * @param int $EVALUATE_CONSTANT
	 * @return bool
	 * @see http://www.imagemagick.org/Usage/layers/#evaluate-sequence
	 * @since 3.4.0
	 */
	public function evaluateImages ($EVALUATE_CONSTANT) { }

	/**
	 * Extracts the 'mean' from the image and adjust the image to try make set its gamma appropriately.
	 * @param int $channel [optional] Default value Imagick::CHANNEL_ALL
	 * @return bool
	 * @since 3.4.1
	 */
	public function autoGammaImage ($channel = Imagick::CHANNEL_ALL) { }

	/**
	 * Adjusts an image so that its orientation is suitable $ for viewing (i.e. top-left orientation).
	 * @return bool
	 * @since 3.4.1
	 */
	public function autoOrient () { }

	/**
	 * Composite one image onto another using the specified gravity.
	 *
	 * @param Imagick $imagick
	 * @param int $COMPOSITE_CONSTANT
	 * @param int $GRAVITY_CONSTANT
	 * @return bool
	 * @since 3.4.1
	 */
	public function compositeImageGravity(Imagick $imagick, $COMPOSITE_CONSTANT, $GRAVITY_CONSTANT) { }

	/**
	 * Attempts to increase the appearance of large-scale light-dark transitions.
	 *
	 * @param float $radius
	 * @param float $strength
	 * @return bool
	 * @since 3.4.1
	 */
	public function localContrastImage($radius, $strength) { }

	/**
	 * Identifies the potential image type, returns one of the Imagick::IMGTYPE_* constants
	 * @return int
	 * @since 3.4.3
	 */
	public function identifyImageType() { }

	/**
	 * Sets the image to the specified alpha level. Will replace ImagickDraw::setOpacity()
	 *
	 * @param float $alpha
	 * @return bool
	 * @since 3.4.3
	 */
	public function setImageAlpha($alpha) { }
}

/**
*<div id="class.imagickdraw" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.imagickdraw.php" class="classname">ImagickDraw</a> class</h1>    <div class="partintro"><p class="verinfo">(PECL imagick 2.0.0)</p>   <div class="section" id="imagickdraw.synopsis">    <h2 class="title">类摘要</h2>    <div class="classsynopsis">     <div class="ooclass"></div>     <div class="classsynopsisinfo">      <span class="ooclass"><strong class="classname">ImagickDraw</strong></span>      {</div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.affine.php" class="methodname" style="color:#CC7832">affine</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$affine</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.annotation.php" class="methodname" style="color:#CC7832">annotation</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$text</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.arc.php" class="methodname" style="color:#CC7832">arc</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sx</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sy</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ex</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ey</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sd</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ed</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.bezier.php" class="methodname" style="color:#CC7832">bezier</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$coordinates</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.circle.php" class="methodname" style="color:#CC7832">circle</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ox</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$oy</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$px</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$py</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.clear.php" class="methodname" style="color:#CC7832">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickDraw</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.clone.php" class="methodname" style="color:#CC7832">clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.color.php" class="methodname" style="color:#CC7832">color</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$paintMethod</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.comment.php" class="methodname" style="color:#CC7832">comment</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$comment</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.composite.php" class="methodname" style="color:#CC7832">composite</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$compose</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$compositeWand</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.destroy.php" class="methodname" style="color:#CC7832">destroy</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.ellipse.php" class="methodname" style="color:#CC7832">ellipse</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ox</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$oy</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$rx</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ry</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$start</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$end</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getclippath.php" class="methodname" style="color:#CC7832">getClipPath</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getcliprule.php" class="methodname" style="color:#CC7832">getClipRule</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getclipunits.php" class="methodname" style="color:#CC7832">getClipUnits</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfillcolor.php" class="methodname" style="color:#CC7832">getFillColor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfillopacity.php" class="methodname" style="color:#CC7832">getFillOpacity</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfillrule.php" class="methodname" style="color:#CC7832">getFillRule</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfont.php" class="methodname" style="color:#CC7832">getFont</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfontfamily.php" class="methodname" style="color:#CC7832">getFontFamily</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfontsize.php" class="methodname" style="color:#CC7832">getFontSize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfontstretch.php" class="methodname" style="color:#CC7832">getFontStretch</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfontstyle.php" class="methodname" style="color:#CC7832">getFontStyle</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getfontweight.php" class="methodname" style="color:#CC7832">getFontWeight</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getgravity.php" class="methodname" style="color:#CC7832">getGravity</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokeantialias.php" class="methodname" style="color:#CC7832">getStrokeAntialias</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokecolor.php" class="methodname" style="color:#CC7832">getStrokeColor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokedasharray.php" class="methodname" style="color:#CC7832">getStrokeDashArray</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokedashoffset.php" class="methodname" style="color:#CC7832">getStrokeDashOffset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokelinecap.php" class="methodname" style="color:#CC7832">getStrokeLineCap</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokelinejoin.php" class="methodname" style="color:#CC7832">getStrokeLineJoin</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokemiterlimit.php" class="methodname" style="color:#CC7832">getStrokeMiterLimit</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokeopacity.php" class="methodname" style="color:#CC7832">getStrokeOpacity</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getstrokewidth.php" class="methodname" style="color:#CC7832">getStrokeWidth</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextalignment.php" class="methodname" style="color:#CC7832">getTextAlignment</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextantialias.php" class="methodname" style="color:#CC7832">getTextAntialias</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextdecoration.php" class="methodname" style="color:#CC7832">getTextDecoration</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextencoding.php" class="methodname" style="color:#CC7832">getTextEncoding</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextinterlinespacing.php" class="methodname" style="color:#CC7832">getTextInterlineSpacing</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextinterwordspacing.php" class="methodname" style="color:#CC7832">getTextInterwordSpacing</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextkerning.php" class="methodname" style="color:#CC7832">getTextKerning</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">ImagickPixel</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.gettextundercolor.php" class="methodname" style="color:#CC7832">getTextUnderColor</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.getvectorgraphics.php" class="methodname" style="color:#CC7832">getVectorGraphics</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.line.php" class="methodname" style="color:#CC7832">line</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sx</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$sy</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ex</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ey</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.matte.php" class="methodname" style="color:#CC7832">matte</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$paintMethod</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathclose.php" class="methodname" style="color:#CC7832">pathClose</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetoabsolute.php" class="methodname" style="color:#CC7832">pathCurveToAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetoquadraticbezierabsolute.php" class="methodname" style="color:#CC7832">pathCurveToQuadraticBezierAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetoquadraticbezierrelative.php" class="methodname" style="color:#CC7832">pathCurveToQuadraticBezierRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php" class="methodname" style="color:#CC7832">pathCurveToQuadraticBezierSmoothAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php" class="methodname" style="color:#CC7832">pathCurveToQuadraticBezierSmoothRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetorelative.php" class="methodname" style="color:#CC7832">pathCurveToRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetosmoothabsolute.php" class="methodname" style="color:#CC7832">pathCurveToSmoothAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathcurvetosmoothrelative.php" class="methodname" style="color:#CC7832">pathCurveToSmoothRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathellipticarcabsolute.php" class="methodname" style="color:#CC7832">pathEllipticArcAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$rx</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ry</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_axis_rotation</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$large_arc_flag</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$sweep_flag</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathellipticarcrelative.php" class="methodname" style="color:#CC7832">pathEllipticArcRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$rx</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ry</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_axis_rotation</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$large_arc_flag</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$sweep_flag</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathfinish.php" class="methodname" style="color:#CC7832">pathFinish</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathlinetoabsolute.php" class="methodname" style="color:#CC7832">pathLineToAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathlinetohorizontalabsolute.php" class="methodname" style="color:#CC7832">pathLineToHorizontalAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathlinetohorizontalrelative.php" class="methodname" style="color:#CC7832">pathLineToHorizontalRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathlinetorelative.php" class="methodname" style="color:#CC7832">pathLineToRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathlinetoverticalabsolute.php" class="methodname" style="color:#CC7832">pathLineToVerticalAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathlinetoverticalrelative.php" class="methodname" style="color:#CC7832">pathLineToVerticalRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathmovetoabsolute.php" class="methodname" style="color:#CC7832">pathMoveToAbsolute</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathmovetorelative.php" class="methodname" style="color:#CC7832">pathMoveToRelative</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pathstart.php" class="methodname" style="color:#CC7832">pathStart</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.point.php" class="methodname" style="color:#CC7832">point</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.polygon.php" class="methodname" style="color:#CC7832">polygon</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$coordinates</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.polyline.php" class="methodname" style="color:#CC7832">polyline</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$coordinates</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pop.php" class="methodname" style="color:#CC7832">pop</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.popclippath.php" class="methodname" style="color:#CC7832">popClipPath</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.popdefs.php" class="methodname" style="color:#CC7832">popDefs</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.poppattern.php" class="methodname" style="color:#CC7832">popPattern</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.push.php" class="methodname" style="color:#CC7832">push</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pushclippath.php" class="methodname" style="color:#CC7832">pushClipPath</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$clip_mask_id</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pushdefs.php" class="methodname" style="color:#CC7832">pushDefs</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.pushpattern.php" class="methodname" style="color:#CC7832">pushPattern</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$pattern_id</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$width</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$height</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.rectangle.php" class="methodname" style="color:#CC7832">rectangle</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.render.php" class="methodname" style="color:#CC7832">render</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.resetvectorgraphics.php" class="methodname" style="color:#CC7832">resetVectorGraphics</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.rotate.php" class="methodname" style="color:#CC7832">rotate</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$degrees</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.roundrectangle.php" class="methodname" style="color:#CC7832">roundRectangle</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$rx</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$ry</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.scale.php" class="methodname" style="color:#CC7832">scale</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setclippath.php" class="methodname" style="color:#CC7832">setClipPath</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$clip_mask</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setcliprule.php" class="methodname" style="color:#CC7832">setClipRule</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fill_rule</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setclipunits.php" class="methodname" style="color:#CC7832">setClipUnits</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$clip_units</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfillalpha.php" class="methodname" style="color:#CC7832">setFillAlpha</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$opacity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfillcolor.php" class="methodname" style="color:#CC7832">setFillColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickpixel.php" class="type ImagickPixel" style="color:#EAB766">ImagickPixel</a></span> <span class="parameter" style="color:#2EACF9">$fill_pixel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfillopacity.php" class="methodname" style="color:#CC7832">setFillOpacity</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fillOpacity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfillpatternurl.php" class="methodname" style="color:#CC7832">setFillPatternURL</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fill_url</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfillrule.php" class="methodname" style="color:#CC7832">setFillRule</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fill_rule</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfont.php" class="methodname" style="color:#CC7832">setFont</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$font_name</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfontfamily.php" class="methodname" style="color:#CC7832">setFontFamily</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$font_family</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfontsize.php" class="methodname" style="color:#CC7832">setFontSize</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$pointsize</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfontstretch.php" class="methodname" style="color:#CC7832">setFontStretch</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$fontStretch</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfontstyle.php" class="methodname" style="color:#CC7832">setFontStyle</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$style</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setfontweight.php" class="methodname" style="color:#CC7832">setFontWeight</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$font_weight</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setgravity.php" class="methodname" style="color:#CC7832">setGravity</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$gravity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setresolution.php" class="methodname" style="color:#CC7832">setResolution</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x_resolution</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y_resolution</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokealpha.php" class="methodname" style="color:#CC7832">setStrokeAlpha</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$opacity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokeantialias.php" class="methodname" style="color:#CC7832">setStrokeAntialias</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$stroke_antialias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokecolor.php" class="methodname" style="color:#CC7832">setStrokeColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickpixel.php" class="type ImagickPixel" style="color:#EAB766">ImagickPixel</a></span> <span class="parameter" style="color:#2EACF9">$stroke_pixel</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokedasharray.php" class="methodname" style="color:#CC7832">setStrokeDashArray</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$dashArray</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokedashoffset.php" class="methodname" style="color:#CC7832">setStrokeDashOffset</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$dash_offset</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokelinecap.php" class="methodname" style="color:#CC7832">setStrokeLineCap</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$linecap</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokelinejoin.php" class="methodname" style="color:#CC7832">setStrokeLineJoin</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$linejoin</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokemiterlimit.php" class="methodname" style="color:#CC7832">setStrokeMiterLimit</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$miterlimit</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokeopacity.php" class="methodname" style="color:#CC7832">setStrokeOpacity</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$stroke_opacity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokepatternurl.php" class="methodname" style="color:#CC7832">setStrokePatternURL</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$stroke_url</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setstrokewidth.php" class="methodname" style="color:#CC7832">setStrokeWidth</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$stroke_width</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextalignment.php" class="methodname" style="color:#CC7832">setTextAlignment</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$alignment</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextantialias.php" class="methodname" style="color:#CC7832">setTextAntialias</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$antiAlias</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextdecoration.php" class="methodname" style="color:#CC7832">setTextDecoration</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$decoration</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextencoding.php" class="methodname" style="color:#CC7832">setTextEncoding</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$encoding</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextinterlinespacing.php" class="methodname" style="color:#CC7832">setTextInterlineSpacing</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$spacing</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextinterwordspacing.php" class="methodname" style="color:#CC7832">setTextInterwordSpacing</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$spacing</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextkerning.php" class="methodname" style="color:#CC7832">setTextKerning</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$kerning</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.settextundercolor.php" class="methodname" style="color:#CC7832">setTextUnderColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickpixel.php" class="type ImagickPixel" style="color:#EAB766">ImagickPixel</a></span> <span class="parameter" style="color:#2EACF9">$under_color</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setvectorgraphics.php" class="methodname" style="color:#CC7832">setVectorGraphics</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$xml</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.setviewbox.php" class="methodname" style="color:#CC7832">setViewbox</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y1</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x2</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y2</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.skewx.php" class="methodname" style="color:#CC7832">skewX</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$degrees</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.skewy.php" class="methodname" style="color:#CC7832">skewY</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$degrees</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickdraw.translate.php" class="methodname" style="color:#CC7832">translate</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    )</div>     }</div>   </div>  </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ImagickDraw::affine} — Adjusts the current affine transformation matrix</li><li>{@link ImagickDraw::annotation} — Draws text on the image</li><li>{@link ImagickDraw::arc} — Draws an arc</li><li>{@link ImagickDraw::bezier} — Draws a bezier curve</li><li>{@link ImagickDraw::circle} — Draws a circle</li><li>{@link ImagickDraw::clear} — Clears the ImagickDraw</li><li>{@link ImagickDraw::clone} — Makes an exact copy of the specified ImagickDraw object</li><li>{@link ImagickDraw::color} — Draws color on image</li><li>{@link ImagickDraw::comment} — Adds a comment</li><li>{@link ImagickDraw::composite} — Composites an image onto the current image</li><li>{@link ImagickDraw::__construct} — The ImagickDraw constructor</li><li>{@link ImagickDraw::destroy} — Frees all associated resources</li><li>{@link ImagickDraw::ellipse} — Draws an ellipse on the image</li><li>{@link ImagickDraw::getClipPath} — Obtains the current clipping path ID</li><li>{@link ImagickDraw::getClipRule} — Returns the current polygon fill rule</li><li>{@link ImagickDraw::getClipUnits} — Returns the interpretation of clip path units</li><li>{@link ImagickDraw::getFillColor} — Returns the fill color</li><li>{@link ImagickDraw::getFillOpacity} — Returns the opacity used when drawing</li><li>{@link ImagickDraw::getFillRule} — Returns the fill rule</li><li>{@link ImagickDraw::getFont} — Returns the font</li><li>{@link ImagickDraw::getFontFamily} — Returns the font family</li><li>{@link ImagickDraw::getFontSize} — Returns the font pointsize</li><li>{@link ImagickDraw::getFontStretch} — Description</li><li>{@link ImagickDraw::getFontStyle} — Returns the font style</li><li>{@link ImagickDraw::getFontWeight} — Returns the font weight</li><li>{@link ImagickDraw::getGravity} — Returns the text placement gravity</li><li>{@link ImagickDraw::getStrokeAntialias} — Returns the current stroke antialias setting</li><li>{@link ImagickDraw::getStrokeColor} — Returns the color used for stroking object outlines</li><li>{@link ImagickDraw::getStrokeDashArray} — Returns an array representing the pattern of dashes and gaps used to stroke paths</li><li>{@link ImagickDraw::getStrokeDashOffset} — Returns the offset into the dash pattern to start the dash</li><li>{@link ImagickDraw::getStrokeLineCap} — Returns the shape to be used at the end of open subpaths when they are stroked</li><li>{@link ImagickDraw::getStrokeLineJoin} — Returns the shape to be used at the corners of paths when they are stroked</li><li>{@link ImagickDraw::getStrokeMiterLimit} — Returns the stroke miter limit</li><li>{@link ImagickDraw::getStrokeOpacity} — Returns the opacity of stroked object outlines</li><li>{@link ImagickDraw::getStrokeWidth} — Returns the width of the stroke used to draw object outlines</li><li>{@link ImagickDraw::getTextAlignment} — Returns the text alignment</li><li>{@link ImagickDraw::getTextAntialias} — Returns the current text antialias setting</li><li>{@link ImagickDraw::getTextDecoration} — Returns the text decoration</li><li>{@link ImagickDraw::getTextEncoding} — Returns the code set used for text annotations</li><li>{@link ImagickDraw::getTextInterlineSpacing} — Description</li><li>{@link ImagickDraw::getTextInterwordSpacing} — Description</li><li>{@link ImagickDraw::getTextKerning} — Description</li><li>{@link ImagickDraw::getTextUnderColor} — Returns the text under color</li><li>{@link ImagickDraw::getVectorGraphics} — Returns a string containing vector graphics</li><li>{@link ImagickDraw::line} — Draws a line</li><li>{@link ImagickDraw::matte} — Paints on the image's opacity channel</li><li>{@link ImagickDraw::pathClose} — Adds a path element to the current path</li><li>{@link ImagickDraw::pathCurveToAbsolute} — Draws a cubic Bezier curve</li><li>{@link ImagickDraw::pathCurveToQuadraticBezierAbsolute} — Draws a quadratic Bezier curve</li><li>{@link ImagickDraw::pathCurveToQuadraticBezierRelative} — Draws a quadratic Bezier curve</li><li>{@link ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute} — Draws a quadratic Bezier curve</li><li>{@link ImagickDraw::pathCurveToQuadraticBezierSmoothRelative} — Draws a quadratic Bezier curve</li><li>{@link ImagickDraw::pathCurveToRelative} — Draws a cubic Bezier curve</li><li>{@link ImagickDraw::pathCurveToSmoothAbsolute} — Draws a cubic Bezier curve</li><li>{@link ImagickDraw::pathCurveToSmoothRelative} — Draws a cubic Bezier curve</li><li>{@link ImagickDraw::pathEllipticArcAbsolute} — Draws an elliptical arc</li><li>{@link ImagickDraw::pathEllipticArcRelative} — Draws an elliptical arc</li><li>{@link ImagickDraw::pathFinish} — Terminates the current path</li><li>{@link ImagickDraw::pathLineToAbsolute} — Draws a line path</li><li>{@link ImagickDraw::pathLineToHorizontalAbsolute} — Draws a horizontal line path</li><li>{@link ImagickDraw::pathLineToHorizontalRelative} — Draws a horizontal line</li><li>{@link ImagickDraw::pathLineToRelative} — Draws a line path</li><li>{@link ImagickDraw::pathLineToVerticalAbsolute} — Draws a vertical line</li><li>{@link ImagickDraw::pathLineToVerticalRelative} — Draws a vertical line path</li><li>{@link ImagickDraw::pathMoveToAbsolute} — Starts a new sub-path</li><li>{@link ImagickDraw::pathMoveToRelative} — Starts a new sub-path</li><li>{@link ImagickDraw::pathStart} — Declares the start of a path drawing list</li><li>{@link ImagickDraw::point} — Draws a point</li><li>{@link ImagickDraw::polygon} — Draws a polygon</li><li>{@link ImagickDraw::polyline} — Draws a polyline</li><li>{@link ImagickDraw::pop} — Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw</li><li>{@link ImagickDraw::popClipPath} — Terminates a clip path definition</li><li>{@link ImagickDraw::popDefs} — Terminates a definition list</li><li>{@link ImagickDraw::popPattern} — Terminates a pattern definition</li><li>{@link ImagickDraw::push} — Clones the current ImagickDraw and pushes it to the stack</li><li>{@link ImagickDraw::pushClipPath} — Starts a clip path definition</li><li>{@link ImagickDraw::pushDefs} — Indicates that following commands create named elements for early processing</li><li>{@link ImagickDraw::pushPattern} — Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern</li><li>{@link ImagickDraw::rectangle} — Draws a rectangle</li><li>{@link ImagickDraw::render} — Renders all preceding drawing commands onto the image</li><li>{@link ImagickDraw::resetVectorGraphics} — Description</li><li>{@link ImagickDraw::rotate} — Applies the specified rotation to the current coordinate space</li><li>{@link ImagickDraw::roundRectangle} — Draws a rounded rectangle</li><li>{@link ImagickDraw::scale} — Adjusts the scaling factor</li><li>{@link ImagickDraw::setClipPath} — Associates a named clipping path with the image</li><li>{@link ImagickDraw::setClipRule} — Set the polygon fill rule to be used by the clipping path</li><li>{@link ImagickDraw::setClipUnits} — Sets the interpretation of clip path units</li><li>{@link ImagickDraw::setFillAlpha} — Sets the opacity to use when drawing using the fill color or fill texture</li><li>{@link ImagickDraw::setFillColor} — Sets the fill color to be used for drawing filled objects</li><li>{@link ImagickDraw::setFillOpacity} — Sets the opacity to use when drawing using the fill color or fill texture</li><li>{@link ImagickDraw::setFillPatternURL} — Sets the URL to use as a fill pattern for filling objects</li><li>{@link ImagickDraw::setFillRule} — Sets the fill rule to use while drawing polygons</li><li>{@link ImagickDraw::setFont} — Sets the fully-specified font to use when annotating with text</li><li>{@link ImagickDraw::setFontFamily} — Sets the font family to use when annotating with text</li><li>{@link ImagickDraw::setFontSize} — Sets the font pointsize to use when annotating with text</li><li>{@link ImagickDraw::setFontStretch} — Sets the font stretch to use when annotating with text</li><li>{@link ImagickDraw::setFontStyle} — Sets the font style to use when annotating with text</li><li>{@link ImagickDraw::setFontWeight} — Sets the font weight</li><li>{@link ImagickDraw::setGravity} — Sets the text placement gravity</li><li>{@link ImagickDraw::setResolution} — Description</li><li>{@link ImagickDraw::setStrokeAlpha} — Specifies the opacity of stroked object outlines</li><li>{@link ImagickDraw::setStrokeAntialias} — Controls whether stroked outlines are antialiased</li><li>{@link ImagickDraw::setStrokeColor} — Sets the color used for stroking object outlines</li><li>{@link ImagickDraw::setStrokeDashArray} — Specifies the pattern of dashes and gaps used to stroke paths</li><li>{@link ImagickDraw::setStrokeDashOffset} — Specifies the offset into the dash pattern to start the dash</li><li>{@link ImagickDraw::setStrokeLineCap} — Specifies the shape to be used at the end of open subpaths when they are stroked</li><li>{@link ImagickDraw::setStrokeLineJoin} — Specifies the shape to be used at the corners of paths when they are stroked</li><li>{@link ImagickDraw::setStrokeMiterLimit} — Specifies the miter limit</li><li>{@link ImagickDraw::setStrokeOpacity} — Specifies the opacity of stroked object outlines</li><li>{@link ImagickDraw::setStrokePatternURL} — Sets the pattern used for stroking object outlines</li><li>{@link ImagickDraw::setStrokeWidth} — Sets the width of the stroke used to draw object outlines</li><li>{@link ImagickDraw::setTextAlignment} — Specifies a text alignment</li><li>{@link ImagickDraw::setTextAntialias} — Controls whether text is antialiased</li><li>{@link ImagickDraw::setTextDecoration} — Specifies a decoration</li><li>{@link ImagickDraw::setTextEncoding} — Specifies the text code set</li><li>{@link ImagickDraw::setTextInterlineSpacing} — Description</li><li>{@link ImagickDraw::setTextInterwordSpacing} — Description</li><li>{@link ImagickDraw::setTextKerning} — Description</li><li>{@link ImagickDraw::setTextUnderColor} — Specifies the color of a background rectangle</li><li>{@link ImagickDraw::setVectorGraphics} — Sets the vector graphics</li><li>{@link ImagickDraw::setViewbox} — Sets the overall canvas size</li><li>{@link ImagickDraw::skewX} — Skews the current coordinate system in the horizontal direction</li><li>{@link ImagickDraw::skewY} — Skews the current coordinate system in the vertical direction</li><li>{@link ImagickDraw::translate} — Applies a translation to the current coordinate system</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.imagick.php">ImageMagick</a></div></div>
*/
class ImagickDraw  {

	public function resetVectorGraphics () {}

	public function getTextKerning () {}

	/**
	 * @param $kerning
	 */
	public function setTextKerning ($kerning) {}

	public function getTextInterWordSpacing () {}

	/**
	 * @param $spacing
	 */
	public function setTextInterWordSpacing ($spacing) {}

	public function getTextInterLineSpacing () {}

	/**
	 * @param $spacing
	 */
	public function setTextInterLineSpacing ($spacing) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The ImagickDraw constructor
	 * @link http://php.net/manual/en/imagickdraw.construct.php
	 */
	public function __construct () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the fill color to be used for drawing filled objects
	 * @link http://php.net/manual/en/imagickdraw.setfillcolor.php
	 * @param ImagickPixel $fill_pixel <p>
	 * ImagickPixel to use to set the color
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFillColor (ImagickPixel $fill_pixel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the opacity to use when drawing using the fill color or fill texture
	 * @link http://php.net/manual/en/imagickdraw.setfillalpha.php
	 * @param float $opacity <p>
	 * fill alpha
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFillAlpha ($opacity) {}

	/**
	 * @param $x_resolution
	 * @param $y_resolution
	 */
	public function setResolution ($x_resolution, $y_resolution) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the color used for stroking object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokecolor.php
	 * @param ImagickPixel $stroke_pixel <p>
	 * the stroke color
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeColor (ImagickPixel $stroke_pixel) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the opacity of stroked object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokealpha.php
	 * @param float $opacity <p>
	 * opacity
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeAlpha ($opacity) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the width of the stroke used to draw object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokewidth.php
	 * @param float $stroke_width <p>
	 * stroke width
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeWidth ($stroke_width) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clears the ImagickDraw
	 * @link http://php.net/manual/en/imagickdraw.clear.php
	 * @return bool an ImagickDraw object.
	 */
	public function clear () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a circle
	 * @link http://php.net/manual/en/imagickdraw.circle.php
	 * @param float $ox <p>
	 * origin x coordinate
	 * </p>
	 * @param float $oy <p>
	 * origin y coordinate
	 * </p>
	 * @param float $px <p>
	 * perimeter x coordinate
	 * </p>
	 * @param float $py <p>
	 * perimeter y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function circle ($ox, $oy, $px, $py) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws text on the image
	 * @link http://php.net/manual/en/imagickdraw.annotation.php
	 * @param float $x <p>
	 * The x coordinate where text is drawn
	 * </p>
	 * @param float $y <p>
	 * The y coordinate where text is drawn
	 * </p>
	 * @param string $text <p>
	 * The text to draw on the image
	 * </p>
	 * @return bool No value is returned.
	 */
	public function annotation ($x, $y, $text) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Controls whether text is antialiased
	 * @link http://php.net/manual/en/imagickdraw.settextantialias.php
	 * @param bool $antiAlias
	 * @return bool No value is returned.
	 */
	public function setTextAntialias ($antiAlias) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies specifies the text code set
	 * @link http://php.net/manual/en/imagickdraw.settextencoding.php
	 * @param string $encoding <p>
	 * the encoding name
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setTextEncoding ($encoding) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the fully-specified font to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfont.php
	 * @param string $font_name
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setFont ($font_name) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font family to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontfamily.php
	 * @param string $font_family <p>
	 * the font family
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setFontFamily ($font_family) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font pointsize to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontsize.php
	 * @param float $pointsize <p>
	 * the point size
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFontSize ($pointsize) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font style to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontstyle.php
	 * @param int $style <p>
	 * STYLETYPE_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFontStyle ($style) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font weight
	 * @link http://php.net/manual/en/imagickdraw.setfontweight.php
	 * @param int $font_weight
	 * @return bool
	 */
	public function setFontWeight ($font_weight) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font
	 * @link http://php.net/manual/en/imagickdraw.getfont.php
	 * @return string a string on success and false if no font is set.
	 */
	public function getFont () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font family
	 * @link http://php.net/manual/en/imagickdraw.getfontfamily.php
	 * @return string the font family currently selected or false if font family is not set.
	 */
	public function getFontFamily () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font pointsize
	 * @link http://php.net/manual/en/imagickdraw.getfontsize.php
	 * @return float the font size associated with the current ImagickDraw object.
	 */
	public function getFontSize () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font style
	 * @link http://php.net/manual/en/imagickdraw.getfontstyle.php
	 * @return int the font style constant (STYLE_) associated with the ImagickDraw object
	 * or 0 if no style is set.
	 */
	public function getFontStyle () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font weight
	 * @link http://php.net/manual/en/imagickdraw.getfontweight.php
	 * @return int an int on success and 0 if no weight is set.
	 */
	public function getFontWeight () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Frees all associated resources
	 * @link http://php.net/manual/en/imagickdraw.destroy.php
	 * @return bool No value is returned.
	 */
	public function destroy () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a rectangle
	 * @link http://php.net/manual/en/imagickdraw.rectangle.php
	 * @param float $x1 <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of the bottom right corner
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the bottom right corner
	 * </p>
	 * @return bool No value is returned.
	 */
	public function rectangle ($x1, $y1, $x2, $y2) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a rounded rectangle
	 * @link http://php.net/manual/en/imagickdraw.roundrectangle.php
	 * @param float $x1 <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of the bottom right
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the bottom right
	 * </p>
	 * @param float $rx <p>
	 * x rounding
	 * </p>
	 * @param float $ry <p>
	 * y rounding
	 * </p>
	 * @return bool No value is returned.
	 */
	public function roundRectangle ($x1, $y1, $x2, $y2, $rx, $ry) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an ellipse on the image
	 * @link http://php.net/manual/en/imagickdraw.ellipse.php
	 * @param float $ox
	 * @param float $oy
	 * @param float $rx
	 * @param float $ry
	 * @param float $start
	 * @param float $end
	 * @return bool No value is returned.
	 */
	public function ellipse ($ox, $oy, $rx, $ry, $start, $end) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Skews the current coordinate system in the horizontal direction
	 * @link http://php.net/manual/en/imagickdraw.skewx.php
	 * @param float $degrees <p>
	 * degrees to skew
	 * </p>
	 * @return bool No value is returned.
	 */
	public function skewX ($degrees) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Skews the current coordinate system in the vertical direction
	 * @link http://php.net/manual/en/imagickdraw.skewy.php
	 * @param float $degrees <p>
	 * degrees to skew
	 * </p>
	 * @return bool No value is returned.
	 */
	public function skewY ($degrees) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a translation to the current coordinate system
	 * @link http://php.net/manual/en/imagickdraw.translate.php
	 * @param float $x <p>
	 * horizontal translation
	 * </p>
	 * @param float $y <p>
	 * vertical translation
	 * </p>
	 * @return bool No value is returned.
	 */
	public function translate ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a line
	 * @link http://php.net/manual/en/imagickdraw.line.php
	 * @param float $sx <p>
	 * starting x coordinate
	 * </p>
	 * @param float $sy <p>
	 * starting y coordinate
	 * </p>
	 * @param float $ex <p>
	 * ending x coordinate
	 * </p>
	 * @param float $ey <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function line ($sx, $sy, $ex, $ey) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an arc
	 * @link http://php.net/manual/en/imagickdraw.arc.php
	 * @param float $sx <p>
	 * Starting x ordinate of bounding rectangle
	 * </p>
	 * @param float $sy <p>
	 * starting y ordinate of bounding rectangle
	 * </p>
	 * @param float $ex <p>
	 * ending x ordinate of bounding rectangle
	 * </p>
	 * @param float $ey <p>
	 * ending y ordinate of bounding rectangle
	 * </p>
	 * @param float $sd <p>
	 * starting degrees of rotation
	 * </p>
	 * @param float $ed <p>
	 * ending degrees of rotation
	 * </p>
	 * @return bool No value is returned.
	 */
	public function arc ($sx, $sy, $ex, $ey, $sd, $ed) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Paints on the image's opacity channel
	 * @link http://php.net/manual/en/imagickdraw.matte.php
	 * @param float $x <p>
	 * x coordinate of the matte
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the matte
	 * </p>
	 * @param int $paintMethod <p>
	 * PAINT_ constant
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function matte ($x, $y, $paintMethod) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a polygon
	 * @link http://php.net/manual/en/imagickdraw.polygon.php
	 * @param array $coordinates <p>
	 * multidimensional array like array( array( 'x' => 3, 'y' => 4 ), array( 'x' => 2, 'y' => 6 ) );
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function polygon (array $coordinates) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a point
	 * @link http://php.net/manual/en/imagickdraw.point.php
	 * @param float $x <p>
	 * point's x coordinate
	 * </p>
	 * @param float $y <p>
	 * point's y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function point ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text decoration
	 * @link http://php.net/manual/en/imagickdraw.gettextdecoration.php
	 * @return int one of the DECORATION_ constants
	 * and 0 if no decoration is set.
	 */
	public function getTextDecoration () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the code set used for text annotations
	 * @link http://php.net/manual/en/imagickdraw.gettextencoding.php
	 * @return string a string specifying the code set
	 * or false if text encoding is not set.
	 */
	public function getTextEncoding () {}

	public function getFontStretch () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font stretch to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontstretch.php
	 * @param int $fontStretch <p>
	 * STRETCH_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFontStretch ($fontStretch) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Controls whether stroked outlines are antialiased
	 * @link http://php.net/manual/en/imagickdraw.setstrokeantialias.php
	 * @param bool $stroke_antialias <p>
	 * the antialias setting
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeAntialias ($stroke_antialias) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies a text alignment
	 * @link http://php.net/manual/en/imagickdraw.settextalignment.php
	 * @param int $alignment <p>
	 * ALIGN_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setTextAlignment ($alignment) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies a decoration
	 * @link http://php.net/manual/en/imagickdraw.settextdecoration.php
	 * @param int $decoration <p>
	 * DECORATION_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setTextDecoration ($decoration) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the color of a background rectangle
	 * @link http://php.net/manual/en/imagickdraw.settextundercolor.php
	 * @param ImagickPixel $under_color <p>
	 * the under color
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setTextUnderColor (ImagickPixel $under_color) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the overall canvas size
	 * @link http://php.net/manual/en/imagickdraw.setviewbox.php
	 * @param int $x1 <p>
	 * left x coordinate
	 * </p>
	 * @param int $y1 <p>
	 * left y coordinate
	 * </p>
	 * @param int $x2 <p>
	 * right x coordinate
	 * </p>
	 * @param int $y2 <p>
	 * right y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setViewbox ($x1, $y1, $x2, $y2) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the current affine transformation matrix
	 * @link http://php.net/manual/en/imagickdraw.affine.php
	 * @param array $affine <p>
	 * Affine matrix parameters
	 * </p>
	 * @return bool No value is returned.
	 */
	public function affine (array $affine) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a bezier curve
	 * @link http://php.net/manual/en/imagickdraw.bezier.php
	 * @param array $coordinates <p>
	 * Multidimensional array like array( array( 'x' => 1, 'y' => 2 ),
	 * array( 'x' => 3, 'y' => 4 ) )
	 * </p>
	 * @return bool No value is returned.
	 */
	public function bezier (array $coordinates) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composites an image onto the current image
	 * @link http://php.net/manual/en/imagickdraw.composite.php
	 * @param int $compose <p>
	 * composition operator. One of COMPOSITE_ constants
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param float $width <p>
	 * width of the composition image
	 * </p>
	 * @param float $height <p>
	 * height of the composition image
	 * </p>
	 * @param Imagick $compositeWand <p>
	 * the Imagick object where composition image is taken from
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function composite ($compose, $x, $y, $width, $height, Imagick $compositeWand) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws color on image
	 * @link http://php.net/manual/en/imagickdraw.color.php
	 * @param float $x <p>
	 * x coordinate of the paint
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the paint
	 * </p>
	 * @param int $paintMethod <p>
	 * one of the PAINT_ constants
	 * </p>
	 * @return bool No value is returned.
	 */
	public function color ($x, $y, $paintMethod) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a comment
	 * @link http://php.net/manual/en/imagickdraw.comment.php
	 * @param string $comment <p>
	 * The comment string to add to vector output stream
	 * </p>
	 * @return bool No value is returned.
	 */
	public function comment ($comment) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Obtains the current clipping path ID
	 * @link http://php.net/manual/en/imagickdraw.getclippath.php
	 * @return string a string containing the clip path ID or false if no clip path exists.
	 */
	public function getClipPath () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current polygon fill rule
	 * @link http://php.net/manual/en/imagickdraw.getcliprule.php
	 * @return int one of the FILLRULE_ constants.
	 */
	public function getClipRule () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the interpretation of clip path units
	 * @link http://php.net/manual/en/imagickdraw.getclipunits.php
	 * @return int an int on success.
	 */
	public function getClipUnits () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the fill color
	 * @link http://php.net/manual/en/imagickdraw.getfillcolor.php
	 * @return ImagickPixel an ImagickPixel object.
	 */
	public function getFillColor () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the opacity used when drawing
	 * @link http://php.net/manual/en/imagickdraw.getfillopacity.php
	 * @return float The opacity.
	 */
	public function getFillOpacity () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the fill rule
	 * @link http://php.net/manual/en/imagickdraw.getfillrule.php
	 * @return int a FILLRULE_ constant
	 */
	public function getFillRule () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text placement gravity
	 * @link http://php.net/manual/en/imagickdraw.getgravity.php
	 * @return int a GRAVITY_ constant on success and 0 if no gravity is set.
	 */
	public function getGravity () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current stroke antialias setting
	 * @link http://php.net/manual/en/imagickdraw.getstrokeantialias.php
	 * @return bool <b>TRUE</b> if antialiasing is on and false if it is off.
	 */
	public function getStrokeAntialias () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color used for stroking object outlines
	 * @link http://php.net/manual/en/imagickdraw.getstrokecolor.php
	 * @return ImagickPixel an ImagickPixel object which describes the color.
	 */
	public function getStrokeColor () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns an array representing the pattern of dashes and gaps used to stroke paths
	 * @link http://php.net/manual/en/imagickdraw.getstrokedasharray.php
	 * @return array an array on success and empty array if not set.
	 */
	public function getStrokeDashArray () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the offset into the dash pattern to start the dash
	 * @link http://php.net/manual/en/imagickdraw.getstrokedashoffset.php
	 * @return float a float representing the offset and 0 if it's not set.
	 */
	public function getStrokeDashOffset () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the shape to be used at the end of open subpaths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.getstrokelinecap.php
	 * @return int one of the LINECAP_ constants or 0 if stroke linecap is not set.
	 */
	public function getStrokeLineCap () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the shape to be used at the corners of paths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.getstrokelinejoin.php
	 * @return int one of the LINEJOIN_ constants or 0 if stroke line join is not set.
	 */
	public function getStrokeLineJoin () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the stroke miter limit
	 * @link http://php.net/manual/en/imagickdraw.getstrokemiterlimit.php
	 * @return int an int describing the miter limit
	 * and 0 if no miter limit is set.
	 */
	public function getStrokeMiterLimit () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the opacity of stroked object outlines
	 * @link http://php.net/manual/en/imagickdraw.getstrokeopacity.php
	 * @return float a double describing the opacity.
	 */
	public function getStrokeOpacity () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the width of the stroke used to draw object outlines
	 * @link http://php.net/manual/en/imagickdraw.getstrokewidth.php
	 * @return float a double describing the stroke width.
	 */
	public function getStrokeWidth () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text alignment
	 * @link http://php.net/manual/en/imagickdraw.gettextalignment.php
	 * @return int one of the ALIGN_ constants and 0 if no align is set.
	 */
	public function getTextAlignment () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current text antialias setting
	 * @link http://php.net/manual/en/imagickdraw.gettextantialias.php
	 * @return bool <b>TRUE</b> if text is antialiased and false if not.
	 */
	public function getTextAntialias () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a string containing vector graphics
	 * @link http://php.net/manual/en/imagickdraw.getvectorgraphics.php
	 * @return string a string containing the vector graphics.
	 */
	public function getVectorGraphics () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text under color
	 * @link http://php.net/manual/en/imagickdraw.gettextundercolor.php
	 * @return ImagickPixel an ImagickPixel object describing the color.
	 */
	public function getTextUnderColor () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a path element to the current path
	 * @link http://php.net/manual/en/imagickdraw.pathclose.php
	 * @return bool No value is returned.
	 */
	public function pathClose () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
	 * @param float $x1 <p>
	 * x coordinate of the first control point
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the first control point
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the first control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the curve end
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the curve end
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToAbsolute ($x1, $y1, $x2, $y2, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetorelative.php
	 * @param float $x1 <p>
	 * x coordinate of starting control point
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of starting control point
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of ending control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of ending control point
	 * </p>
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToRelative ($x1, $y1, $x2, $y2, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
	 * @param float $x1 <p>
	 * x coordinate of the control point
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the end point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the end point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToQuadraticBezierAbsolute ($x1, $y1, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
	 * @param float $x1 <p>
	 * starting x coordinate
	 * </p>
	 * @param float $y1 <p>
	 * starting y coordinate
	 * </p>
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToQuadraticBezierRelative ($x1, $y1, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToQuadraticBezierSmoothAbsolute ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToQuadraticBezierSmoothRelative ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
	 * @param float $x2 <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the second control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the ending point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the ending point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToSmoothAbsolute ($x2, $y2, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
	 * @param float $x2 <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the second control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the ending point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the ending point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathCurveToSmoothRelative ($x2, $y2, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an elliptical arc
	 * @link http://php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
	 * @param float $rx <p>
	 * x radius
	 * </p>
	 * @param float $ry <p>
	 * y radius
	 * </p>
	 * @param float $x_axis_rotation <p>
	 * x axis rotation
	 * </p>
	 * @param bool $large_arc_flag <p>
	 * large arc flag
	 * </p>
	 * @param bool $sweep_flag <p>
	 * sweep flag
	 * </p>
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathEllipticArcAbsolute ($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an elliptical arc
	 * @link http://php.net/manual/en/imagickdraw.pathellipticarcrelative.php
	 * @param float $rx <p>
	 * x radius
	 * </p>
	 * @param float $ry <p>
	 * y radius
	 * </p>
	 * @param float $x_axis_rotation <p>
	 * x axis rotation
	 * </p>
	 * @param bool $large_arc_flag <p>
	 * large arc flag
	 * </p>
	 * @param bool $sweep_flag <p>
	 * sweep flag
	 * </p>
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathEllipticArcRelative ($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates the current path
	 * @link http://php.net/manual/en/imagickdraw.pathfinish.php
	 * @return bool No value is returned.
	 */
	public function pathFinish () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetoabsolute.php
	 * @param float $x <p>
	 * starting x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending x coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathLineToAbsolute ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetorelative.php
	 * @param float $x <p>
	 * starting x coordinate
	 * </p>
	 * @param float $y <p>
	 * starting y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathLineToRelative ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a horizontal line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathLineToHorizontalAbsolute ($x) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a horizontal line
	 * @link http://php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathLineToHorizontalRelative ($x) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a vertical line
	 * @link http://php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathLineToVerticalAbsolute ($y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a vertical line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathLineToVerticalRelative ($y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Starts a new sub-path
	 * @link http://php.net/manual/en/imagickdraw.pathmovetoabsolute.php
	 * @param float $x <p>
	 * x coordinate of the starting point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the starting point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathMoveToAbsolute ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Starts a new sub-path
	 * @link http://php.net/manual/en/imagickdraw.pathmovetorelative.php
	 * @param float $x <p>
	 * target x coordinate
	 * </p>
	 * @param float $y <p>
	 * target y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathMoveToRelative ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Declares the start of a path drawing list
	 * @link http://php.net/manual/en/imagickdraw.pathstart.php
	 * @return bool No value is returned.
	 */
	public function pathStart () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a polyline
	 * @link http://php.net/manual/en/imagickdraw.polyline.php
	 * @param array $coordinates <p>
	 * array of x and y coordinates: array( array( 'x' => 4, 'y' => 6 ), array( 'x' => 8, 'y' => 10 ) )
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function polyline (array $coordinates) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates a clip path definition
	 * @link http://php.net/manual/en/imagickdraw.popclippath.php
	 * @return bool No value is returned.
	 */
	public function popClipPath () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates a definition list
	 * @link http://php.net/manual/en/imagickdraw.popdefs.php
	 * @return bool No value is returned.
	 */
	public function popDefs () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates a pattern definition
	 * @link http://php.net/manual/en/imagickdraw.poppattern.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function popPattern () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Starts a clip path definition
	 * @link http://php.net/manual/en/imagickdraw.pushclippath.php
	 * @param string $clip_mask_id <p>
	 * Clip mask Id
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pushClipPath ($clip_mask_id) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Indicates that following commands create named elements for early processing
	 * @link http://php.net/manual/en/imagickdraw.pushdefs.php
	 * @return bool No value is returned.
	 */
	public function pushDefs () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
	 * @link http://php.net/manual/en/imagickdraw.pushpattern.php
	 * @param string $pattern_id <p>
	 * the pattern Id
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the top-left corner
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the top-left corner
	 * </p>
	 * @param float $width <p>
	 * width of the pattern
	 * </p>
	 * @param float $height <p>
	 * height of the pattern
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function pushPattern ($pattern_id, $x, $y, $width, $height) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Renders all preceding drawing commands onto the image
	 * @link http://php.net/manual/en/imagickdraw.render.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function render () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies the specified rotation to the current coordinate space
	 * @link http://php.net/manual/en/imagickdraw.rotate.php
	 * @param float $degrees <p>
	 * degrees to rotate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function rotate ($degrees) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the scaling factor
	 * @link http://php.net/manual/en/imagickdraw.scale.php
	 * @param float $x <p>
	 * horizontal factor
	 * </p>
	 * @param float $y <p>
	 * vertical factor
	 * </p>
	 * @return bool No value is returned.
	 */
	public function scale ($x, $y) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Associates a named clipping path with the image
	 * @link http://php.net/manual/en/imagickdraw.setclippath.php
	 * @param string $clip_mask <p>
	 * the clipping path name
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setClipPath ($clip_mask) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the polygon fill rule to be used by the clipping path
	 * @link http://php.net/manual/en/imagickdraw.setcliprule.php
	 * @param int $fill_rule <p>
	 * FILLRULE_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setClipRule ($fill_rule) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the interpretation of clip path units
	 * @link http://php.net/manual/en/imagickdraw.setclipunits.php
	 * @param int $clip_units <p>
	 * the number of clip units
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setClipUnits ($clip_units) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the opacity to use when drawing using the fill color or fill texture
	 * @link http://php.net/manual/en/imagickdraw.setfillopacity.php
	 * @param float $fillOpacity <p>
	 * the fill opacity
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFillOpacity ($fillOpacity) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the URL to use as a fill pattern for filling objects
	 * @link http://php.net/manual/en/imagickdraw.setfillpatternurl.php
	 * @param string $fill_url <p>
	 * URL to use to obtain fill pattern.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setFillPatternURL ($fill_url) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the fill rule to use while drawing polygons
	 * @link http://php.net/manual/en/imagickdraw.setfillrule.php
	 * @param int $fill_rule <p>
	 * FILLRULE_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setFillRule ($fill_rule) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the text placement gravity
	 * @link http://php.net/manual/en/imagickdraw.setgravity.php
	 * @param int $gravity <p>
	 * GRAVITY_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setGravity ($gravity) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the pattern used for stroking object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokepatternurl.php
	 * @param string $stroke_url <p>
	 * stroke URL
	 * </p>
	 * @return bool imagick.imagickdraw.return.success;
	 */
	public function setStrokePatternURL ($stroke_url) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the offset into the dash pattern to start the dash
	 * @link http://php.net/manual/en/imagickdraw.setstrokedashoffset.php
	 * @param float $dash_offset <p>
	 * dash offset
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeDashOffset ($dash_offset) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the shape to be used at the end of open subpaths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.setstrokelinecap.php
	 * @param int $linecap <p>
	 * LINECAP_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeLineCap ($linecap) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the shape to be used at the corners of paths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.setstrokelinejoin.php
	 * @param int $linejoin <p>
	 * LINEJOIN_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeLineJoin ($linejoin) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the miter limit
	 * @link http://php.net/manual/en/imagickdraw.setstrokemiterlimit.php
	 * @param int $miterlimit <p>
	 * the miter limit
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeMiterLimit ($miterlimit) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the opacity of stroked object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokeopacity.php
	 * @param float $stroke_opacity <p>
	 * stroke opacity. 1.0 is fully opaque
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setStrokeOpacity ($stroke_opacity) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the vector graphics
	 * @link http://php.net/manual/en/imagickdraw.setvectorgraphics.php
	 * @param string $xml <p>
	 * xml containing the vector graphics
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setVectorGraphics ($xml) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
	 * @link http://php.net/manual/en/imagickdraw.pop.php
	 * @return bool <b>TRUE</b> on success and false on failure.
	 */
	public function pop () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clones the current ImagickDraw and pushes it to the stack
	 * @link http://php.net/manual/en/imagickdraw.push.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function push () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the pattern of dashes and gaps used to stroke paths
	 * @link http://php.net/manual/en/imagickdraw.setstrokedasharray.php
	 * @param array $dashArray <p>
	 * array of floats
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setStrokeDashArray (array $dashArray) {}

    /**
     * Sets the opacity to use when drawing using the fill or stroke color or texture. Fully opaque is 1.0.
     *
     * @param float $opacity
     * @return void
     * @since 3.4.1
     */
	public function setOpacity($opacity) { }

	/**
	 * Returns the opacity used when drawing with the fill or stroke color or texture. Fully opaque is 1.0.
	 *
	 * @return float
	 * @since 3.4.1
	 */
	public function getOpacity() { }

	/**
	 * Sets the image font resolution.
	 *
	 * @param float $x
	 * @param float $y
	 * @return bool
	 * @since 3.4.1
	 */
	public function setFontResolution($x, $y) { }

	/**
	 * Gets the image X and Y resolution.
	 *
	 * @return array
	 * @since 3.4.1
	 */
	public function getFontResolution() { }

	/**
	 * Returns the direction that will be used when annotating with text.
	 * @return bool
	 * @since 3.4.1
	 */
	public function getTextDirection() { }

	/**
	 * Sets the font style to use when annotating with text. The AnyStyle enumeration acts as a wild-card "don't care" option.
	 *
	 * @param int $direction
	 * @return bool
	 * @since 3.4.1
	 */
	public function setTextDirection($direction) { }

	/**
	 * Returns the border color used for drawing bordered objects.
	 *
	 * @return ImagickPixel
	 * @since 3.4.1
	 */
	public function getBorderColor() { }

	/**
	 * Sets the border color to be used for drawing bordered objects.
	 * @param ImagickPixel $color
	 * @return bool
	 * @since 3.4.1
	 */
	public function setBorderColor(ImagickPixel $color) { }

	/**
	 * Obtains the vertical and horizontal resolution.
	 *
	 * @return string|null
	 * @since 3.4.1
	 */
	public function getDensity() { }

	/**
	 * Sets the vertical and horizontal resolution.
	 * @param string $density_string
	 * @return bool
	 * @since 3.4.1
	 */
	public function setDensity($density_string) { }
}

/**
*<div id="class.imagickpixeliterator" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.imagickpixeliterator.php" class="classname">ImagickPixelIterator</a> class</h1>    <div class="partintro"><p class="verinfo">(PECL imagick 2.0.0)</p>   <div class="section" id="imagickpixeliterator.synopsis">    <h2 class="title">类摘要</h2>    <div class="classsynopsis">     <div class="ooclass"></div>     <div class="classsynopsisinfo">      <span class="ooclass"><strong class="classname">ImagickPixelIterator</strong></span>      {</div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.clear.php" class="methodname" style="color:#CC7832">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$wand</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.destroy.php" class="methodname" style="color:#CC7832">destroy</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.getcurrentiteratorrow.php" class="methodname" style="color:#CC7832">getCurrentIteratorRow</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.getiteratorrow.php" class="methodname" style="color:#CC7832">getIteratorRow</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.getnextiteratorrow.php" class="methodname" style="color:#CC7832">getNextIteratorRow</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.getpreviousiteratorrow.php" class="methodname" style="color:#CC7832">getPreviousIteratorRow</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.newpixeliterator.php" class="methodname" style="color:#CC7832">newPixelIterator</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$wand</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.newpixelregioniterator.php" class="methodname" style="color:#CC7832">newPixelRegionIterator</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagick.php" class="type Imagick" style="color:#EAB766">Imagick</a></span> <span class="parameter" style="color:#2EACF9">$wand</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$x</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$y</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$columns</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$rows</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.resetiterator.php" class="methodname" style="color:#CC7832">resetIterator</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.setiteratorfirstrow.php" class="methodname" style="color:#CC7832">setIteratorFirstRow</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.setiteratorlastrow.php" class="methodname" style="color:#CC7832">setIteratorLastRow</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.setiteratorrow.php" class="methodname" style="color:#CC7832">setIteratorRow</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$row</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixeliterator.synciterator.php" class="methodname" style="color:#CC7832">syncIterator</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>   </div>  </div>                                                                                       <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ImagickPixelIterator::clear} — Clear resources associated with a PixelIterator</li><li>{@link ImagickPixelIterator::__construct} — The ImagickPixelIterator constructor</li><li>{@link ImagickPixelIterator::destroy} — Deallocates resources associated with a PixelIterator</li><li>{@link ImagickPixelIterator::getCurrentIteratorRow} — Returns the current row of ImagickPixel objects</li><li>{@link ImagickPixelIterator::getIteratorRow} — Returns the current pixel iterator row</li><li>{@link ImagickPixelIterator::getNextIteratorRow} — Returns the next row of the pixel iterator</li><li>{@link ImagickPixelIterator::getPreviousIteratorRow} — Returns the previous row</li><li>{@link ImagickPixelIterator::newPixelIterator} — Returns a new pixel iterator</li><li>{@link ImagickPixelIterator::newPixelRegionIterator} — Returns a new pixel iterator</li><li>{@link ImagickPixelIterator::resetIterator} — Resets the pixel iterator</li><li>{@link ImagickPixelIterator::setIteratorFirstRow} — Sets the pixel iterator to the first pixel row</li><li>{@link ImagickPixelIterator::setIteratorLastRow} — Sets the pixel iterator to the last pixel row</li><li>{@link ImagickPixelIterator::setIteratorRow} — Set the pixel iterator row</li><li>{@link ImagickPixelIterator::syncIterator} — Syncs the pixel iterator</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.imagick.php">ImageMagick</a></div></div>
*/
class ImagickPixelIterator implements Iterator {

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The ImagickPixelIterator constructor
	 * @link http://php.net/manual/en/imagickpixeliterator.construct.php
	 * @param Imagick $wand
	 */
	public function __construct (Imagick $wand) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a new pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.newpixeliterator.php
	 * @param Imagick $wand
	 * @return bool <b>TRUE</b> on success. Throwing ImagickPixelIteratorException.
	 * @throw ImagickPixelIteratorException
	 */
	public function newPixelIterator (Imagick $wand) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a new pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
	 * @param Imagick $wand
	 * @param int $x
	 * @param int $y
	 * @param int $columns
	 * @param int $rows
	 * @return bool a new ImagickPixelIterator on success; on failure, throws ImagickPixelIteratorException
	 * @throws ImagickPixelIteratorException.
	 */
	public function newPixelRegionIterator (Imagick $wand, $x, $y, $columns, $rows) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current pixel iterator row
	 * @link http://php.net/manual/en/imagickpixeliterator.getiteratorrow.php
	 * @return int the integer offset of the row, throwing ImagickPixelIteratorException on error.
	 * @throws ImagickPixelIteratorException on error
	 */
	public function getIteratorRow () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the pixel iterator row
	 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorrow.php
	 * @param int $row
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setIteratorRow ($row) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the pixel iterator to the first pixel row
	 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setIteratorFirstRow () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the pixel iterator to the last pixel row
	 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setIteratorLastRow () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the previous row
	 * @link http://php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
	 * @return array the previous row as an array of ImagickPixelWand objects from the
	 * ImagickPixelIterator, throwing ImagickPixelIteratorException on error.
	 * @throws ImagickPixelIteratorException on error
	 */
	public function getPreviousIteratorRow () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current row of ImagickPixel objects
	 * @link http://php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
	 * @return array a row as an array of ImagickPixel objects that can themselves be iterated.
	 */
	public function getCurrentIteratorRow () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the next row of the pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
	 * @return array the next row as an array of ImagickPixel objects, throwing
	 * ImagickPixelIteratorException on error.
	 * @throws ImagickPixelIteratorException on error
	 */
	public function getNextIteratorRow () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Resets the pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.resetiterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resetIterator () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Syncs the pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.synciterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function syncIterator () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Deallocates resources associated with a PixelIterator
	 * @link http://php.net/manual/en/imagickpixeliterator.destroy.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function destroy () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clear resources associated with a PixelIterator
	 * @link http://php.net/manual/en/imagickpixeliterator.clear.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clear () {}

	/**
	 * @param Imagick $Imagick
	 */
	public static function getpixeliterator (Imagick $Imagick) {}

	/**
	 * @param Imagick $Imagick
	 * @param $x
	 * @param $y
	 * @param $columns
	 * @param $rows
	 */
	public static function getpixelregioniterator (Imagick $Imagick, $x, $y, $columns, $rows) {}

/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>key</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$array</span></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong style="color:#CC7832">key()</strong></span> 会返回 <strong><span>NULL</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <span class="parameter" style="color:#2EACF9">array</span> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </span></div>     </div>    </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key () {}

/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>next</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong style="color:#CC7832">next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        受影响的 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong style="color:#CC7832">next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next () {}

/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$handle</span></span>    )</div>    <p class="para rdfs-comment">    将 <span class="parameter" style="color:#2EACF9">handle</span> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">handle</span></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Foolly long sentence. </span></div>     </div>    </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind () {}

/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>current</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">&$array</span></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">array</span></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong style="color:#CC7832">current()</strong></span>      返回 <strong><span>FALSE</span></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><span>FALSE</span></strong>，但也可能返回等同于 <strong><span>FALSE</span></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong style="color:#CC7832">current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> <strong><span>FALSE</span></strong> 的单元则本函数在碰到这个单元时也返回        <strong><span>FALSE</span></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </span>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current () {}

	public function valid () {}

}

/**
*<div id="class.imagickpixel" class="reference">  <h1 class="title">The <a href="http://php.net/manual/zh/class.imagickpixel.php" class="classname">ImagickPixel</a> class</h1>    <div class="partintro"><p class="verinfo">(PECL imagick 2.0.0)</p>   <div class="section" id="imagickpixel.synopsis">    <h2 class="title">类摘要</h2>    <div class="classsynopsis">     <div class="ooclass"></div>     <div class="classsynopsisinfo">      <span class="ooclass"><strong class="classname">ImagickPixel</strong></span>      {</div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.clear.php" class="methodname" style="color:#CC7832">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$color</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.destroy.php" class="methodname" style="color:#CC7832">destroy</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getcolor.php" class="methodname" style="color:#CC7832">getColor</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$normalized</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getcolorasstring.php" class="methodname" style="color:#CC7832">getColorAsString</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getcolorcount.php" class="methodname" style="color:#CC7832">getColorCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getcolorquantum.php" class="methodname" style="color:#CC7832">getColorQuantum</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">float</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getcolorvalue.php" class="methodname" style="color:#CC7832">getColorValue</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$color</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">number</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getcolorvaluequantum.php" class="methodname" style="color:#CC7832">getColorValueQuantum</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$color</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.gethsl.php" class="methodname" style="color:#CC7832">getHSL</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.getindex.php" class="methodname" style="color:#CC7832">getIndex</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.ispixelsimilar.php" class="methodname" style="color:#CC7832">isPixelSimilar</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickpixel.php" class="type ImagickPixel" style="color:#EAB766">ImagickPixel</a></span> <span class="parameter" style="color:#2EACF9">$color</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.ispixelsimilarquantum.php" class="methodname" style="color:#CC7832">isPixelSimilarQuantum</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$color</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.issimilar.php" class="methodname" style="color:#CC7832">isSimilar</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/class.imagickpixel.php" class="type ImagickPixel" style="color:#EAB766">ImagickPixel</a></span> <span class="parameter" style="color:#2EACF9">$color</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$fuzz</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.setcolor.php" class="methodname" style="color:#CC7832">setColor</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$color</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.setcolorcount.php" class="methodname" style="color:#CC7832">setcolorcount</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$colorCount</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.setcolorvalue.php" class="methodname" style="color:#CC7832">setColorValue</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$color</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.setcolorvaluequantum.php" class="methodname" style="color:#CC7832">setColorValueQuantum</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$color</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.number" class="type number" style="color:#EAB766">number</a></span> <span class="parameter" style="color:#2EACF9">$value</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.sethsl.php" class="methodname" style="color:#CC7832">setHSL</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$hue</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$saturation</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#2EACF9">$luminosity</span></span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/imagickpixel.setindex.php" class="methodname" style="color:#CC7832">setIndex</a></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$index</span></span>    )</div>     }</div>   </div>  </div>                                                                                                                                     <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link ImagickPixel::clear} — Clears resources associated with this object</li><li>{@link ImagickPixel::__construct} — The ImagickPixel constructor</li><li>{@link ImagickPixel::destroy} — Deallocates resources associated with this object</li><li>{@link ImagickPixel::getColor} — Returns the color</li><li>{@link ImagickPixel::getColorAsString} — Returns the color as a string</li><li>{@link ImagickPixel::getColorCount} — Returns the color count associated with this color</li><li>{@link ImagickPixel::getColorQuantum} — Description</li><li>{@link ImagickPixel::getColorValue} — Gets the normalized value of the provided color channel</li><li>{@link ImagickPixel::getColorValueQuantum} — Description</li><li>{@link ImagickPixel::getHSL} — Returns the normalized HSL color of the ImagickPixel object</li><li>{@link ImagickPixel::getIndex} — Description</li><li>{@link ImagickPixel::isPixelSimilar} — Check the distance between this color and another</li><li>{@link ImagickPixel::isPixelSimilarQuantum} — Description</li><li>{@link ImagickPixel::isSimilar} — Check the distance between this color and another</li><li>{@link ImagickPixel::setColor} — Sets the color</li><li>{@link ImagickPixel::setColorCount} — Description</li><li>{@link ImagickPixel::setColorValue} — Sets the normalized value of one of the channels</li><li>{@link ImagickPixel::setColorValueQuantum} — Description</li><li>{@link ImagickPixel::setHSL} — Sets the normalized HSL color</li><li>{@link ImagickPixel::setIndex} — Description</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.imagick.php">ImageMagick</a></div></div>
*/
class ImagickPixel  {

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the normalized HSL color of the ImagickPixel object
	 * @link http://php.net/manual/en/imagickpixel.gethsl.php
	 * @return array the HSL value in an array with the keys "hue",
	 * "saturation", and "luminosity". Throws ImagickPixelException on failure.
	 * @throws ImagickPixelException on failure
	 */
	public function getHSL () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the normalized HSL color
	 * @link http://php.net/manual/en/imagickpixel.sethsl.php
	 * @param float $hue <p>
	 * The normalized value for hue, described as a fractional arc
	 * (between 0 and 1) of the hue circle, where the zero value is
	 * red.
	 * </p>
	 * @param float $saturation <p>
	 * The normalized value for saturation, with 1 as full saturation.
	 * </p>
	 * @param float $luminosity <p>
	 * The normalized value for luminosity, on a scale from black at
	 * 0 to white at 1, with the full HS value at 0.5 luminosity.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setHSL ($hue, $saturation, $luminosity) {}

	public function getColorValueQuantum () {}

	/**
	 * @param $color_value
	 */
	public function setColorValueQuantum ($color_value) {}

	public function getIndex () {}

	/**
	 * @param $index
	 */
	public function setIndex ($index) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The ImagickPixel constructor
	 * @link http://php.net/manual/en/imagickpixel.construct.php
	 * @param string $color [optional] <p>
	 * The optional color string to use as the initial value of this object.
	 * </p>
	 */
	public function __construct ($color = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the color
	 * @link http://php.net/manual/en/imagickpixel.setcolor.php
	 * @param string $color <p>
	 * The color definition to use in order to initialise the
	 * ImagickPixel object.
	 * </p>
	 * @return bool <b>TRUE</b> if the specified color was set, <b>FALSE</b> otherwise.
	 */
	public function setColor ($color) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the normalized value of one of the channels
	 * @link http://php.net/manual/en/imagickpixel.setcolorvalue.php
	 * @param int $color <p>
	 * One of the Imagick color constants e.g. \Imagick::COLOR_GREEN or \Imagick::COLOR_ALPHA.
	 * </p>
	 * @param float $value <p>
	 * The value to set this channel to, ranging from 0 to 1.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setColorValue ($color, $value) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the normalized value of the provided color channel
	 * @link http://php.net/manual/en/imagickpixel.getcolorvalue.php
	 * @param int $color <p>
	 * The color to get the value of, specified as one of the Imagick color
	 * constants. This can be one of the RGB colors, CMYK colors, alpha and
	 * opacity e.g (Imagick::COLOR_BLUE, Imagick::COLOR_MAGENTA).
	 * </p>
	 * @return float The value of the channel, as a normalized floating-point number, throwing
	 * ImagickPixelException on error.
	 * @throws ImagickPixelException on error
	 */
	public function getColorValue ($color) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clears resources associated with this object
	 * @link http://php.net/manual/en/imagickpixel.clear.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clear () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Deallocates resources associated with this object
	 * @link http://php.net/manual/en/imagickpixel.destroy.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function destroy () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Check the distance between this color and another
	 * @link http://php.net/manual/en/imagickpixel.issimilar.php
	 * @param ImagickPixel $color <p>
	 * The ImagickPixel object to compare this object against.
	 * </p>
	 * @param float $fuzz <p>
	 * The maximum distance within which to consider these colors as similar.
	 * The theoretical maximum for this value is the square root of three
	 * (1.732).
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function isSimilar (ImagickPixel $color, $fuzz) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Check the distance between this color and another
	 * @link http://php.net/manual/en/imagickpixel.ispixelsimilar.php
	 * @param ImagickPixel $color <p>
	 * The ImagickPixel object to compare this object against.
	 * </p>
	 * @param float $fuzz <p>
	 * The maximum distance within which to consider these colors as similar.
	 * The theoretical maximum for this value is the square root of three
	 * (1.732).
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function isPixelSimilar (ImagickPixel $color, $fuzz) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color
	 * @link http://php.net/manual/en/imagickpixel.getcolor.php
	 * @param bool $normalized [optional] <p>
	 * Normalize the color values
	 * </p>
	 * @return array An array of channel values, each normalized if <b>TRUE</b> is given as param. Throws
	 * ImagickPixelException on error.
	 * @throws ImagickPixelException on error.
	 */
	public function getColor ($normalized = false) {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Returns the color as a string
	 * @link http://php.net/manual/en/imagickpixel.getcolorasstring.php
	 * @return string the color of the ImagickPixel object as a string.
	 */
	public function getColorAsString () {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color count associated with this color
	 * @link http://php.net/manual/en/imagickpixel.getcolorcount.php
	 * @return int the color count as an integer on success, throws
	 * ImagickPixelException on failure.
	 * @throws ImagickPixelException on failure.
	 */
	public function getColorCount () {}

	/**
	 * @param $colorCount
	 */
	public function setColorCount ($colorCount) {}


	/**
	 * Returns true if the distance between two colors is less than the specified distance. The fuzz value should be in the range 0-QuantumRange.<br>
	 * The maximum value represents the longest possible distance in the colorspace. e.g. from RGB(0, 0, 0) to RGB(255, 255, 255) for the RGB colorspace
	 * @link http://php.net/manual/en/imagickpixel.ispixelsimilarquantum.php
	 * @param string $pixel
	 * @param string $fuzz
	 * @return bool
	 * @since 3.3.0
	 */
	public function isPixelSimilarQuantum($color, $fuzz) { }

	/**
	 * Returns the color of the pixel in an array as Quantum values. If ImageMagick was compiled as HDRI these will be floats, otherwise they will be integers.
	 * @link http://php.net/manual/en/imagickpixel.getcolorquantum.php
	 * @return mixed The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.
	 * @since 3.3.0
	 */
	public function getColorQuantum() { }

	/**
	 * Sets the color count associated with this color from another ImagickPixel object.
	 *
	 * @param ImagickPixel $srcPixel
	 * @return bool
	 * @since 3.4.1
	 */
	public function setColorFromPixel(ImagickPixel $srcPixel) { }
}
// End of imagick v.3.2.0RC1

// Start of Imagick v3.3.0RC1

/**
 * @link http://php.net/manual/en/class.imagickkernel.php
 */
class ImagickKernel {
	/**
	 * Attach another kernel to this kernel to allow them to both be applied in a single morphology or filter function. Returns the new combined kernel.
	 * @link http://php.net/manual/en/imagickkernel.addkernel.php
	 * @param ImagickKernel $imagickKernel
	 * @return void
	 * @since 3.3.0
	 */
	public function addKernel(ImagickKernel $imagickKernel) { }

	/**
	 * Adds a given amount of the 'Unity' Convolution Kernel to the given pre-scaled and normalized Kernel. This in effect adds that amount of the original image into the resulting convolution kernel. The resulting effect is to convert the defined kernels into blended soft-blurs, unsharp kernels or into sharpening kernels.
	 * @link http://php.net/manual/en/imagickkernel.addunitykernel.php
	 * @return void
	 * @since 3.3.0
	 */
	public function addUnityKernel() { }

	/**
	 * Create a kernel from a builtin in kernel. See http://www.imagemagick.org/Usage/morphology/#kernel for examples.<br>
	 * Currently the 'rotation' symbols are not supported. Example: $diamondKernel = ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DIAMOND, "2");
	 * @link http://php.net/manual/en/imagickkernel.frombuiltin.php
	 * @param string $kernelType The type of kernel to build e.g. \Imagick::KERNEL_DIAMOND
	 * @param string $kernelString A string that describes the parameters e.g. "4,2.5"
	 * @return void
	 * @since 3.3.0
	 */
	public static function fromBuiltin($kernelType, $kernelString) { }

	/**
	 * Create a kernel from a builtin in kernel. See http://www.imagemagick.org/Usage/morphology/#kernel for examples.<br>
	 * Currently the 'rotation' symbols are not supported. Example: $diamondKernel = ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DIAMOND, "2");
	 * @link http://php.net/manual/en/imagickkernel.frombuiltin.php
	 * @see http://www.imagemagick.org/Usage/morphology/#kernel
	 * @param array $matrix A matrix (i.e. 2d array) of values that define the kernel. Each element should be either a float value, or FALSE if that element shouldn't be used by the kernel.
	 * @param array $origin [optional] Which element of the kernel should be used as the origin pixel. e.g. For a 3x3 matrix specifying the origin as [2, 2] would specify that the bottom right element should be the origin pixel.
	 * @return ImagickKernel
	 * @since 3.3.0
	 */
	public static function fromMatrix($matrix, $origin) { }

	/**
	 * Get the 2d matrix of values used in this kernel. The elements are either float for elements that are used or 'false' if the element should be skipped.
	 * @link http://php.net/manual/en/imagickkernel.getmatrix.php
	 * @return array A matrix (2d array) of the values that represent the kernel.
	 * @since 3.3.0
	 */
	public function getMatrix() { }

	/**
	 * ScaleKernelInfo() scales the given kernel list by the given amount, with or without normalization of the sum of the kernel values (as per given flags).<br>
	 * The exact behaviour of this function depends on the normalization type being used please see http://www.imagemagick.org/api/morphology.php#ScaleKernelInfo for details.<br>
	 * Flag should be one of Imagick::NORMALIZE_KERNEL_VALUE, Imagick::NORMALIZE_KERNEL_CORRELATE, Imagick::NORMALIZE_KERNEL_PERCENT or not set.
	 * @link http://php.net/manual/en/imagickkernel.scale.php
	 * @see http://www.imagemagick.org/api/morphology.php#ScaleKernelInfo
	 * @return void
	 * @since 3.3.0
	 */
	public function scale() { }

	/**
	 * Separates a linked set of kernels and returns an array of ImagickKernels.
	 * @link http://php.net/manual/en/imagickkernel.separate.php
	 * @return void
	 * @since 3.3.0
	 */
	public function seperate() { }
}
