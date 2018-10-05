<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <meta charset="UTF-8">
    <title>Photography</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

<!--    <!-- Stylesheets -->-->
<!--    <link href="common-css/bootstrap.css" rel="stylesheet">-->

    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

    <link href="01_Photography/css/styles.css" rel="stylesheet">

    <link href="01_Photography/css/responsive.css" rel="stylesheet">


<html lang="en"><head>



<body>

<!--<header>-->
<!--    <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>-->
<!---->
<!--    <a class="right-area" href="mailto:contact@colorlib.com">CONTACT@COLORLIB.COM</a>-->
<!---->
<!--    <a class="menu-nav-icon" data-menu="#main-menu"><i class="ion-navicon"></i></a>-->
<!---->
<!--    <ul class="main-menu" id="main-menu">-->
<!--        <li><a href="index.html">Home</a></li>-->
<!--        <li class="drop-down"><a href="#!">Portfolio<i class="ion-arrow-down-b"></i></a>-->
<!--            <ul class="drop-down-menu drop-down-inner">-->
<!--                <li><a href="02_Portfolio.html">Portfolio 1</a></li>-->
<!--                <li><a href="03_Portfolio.html">Portfolio 2</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="drop-down"><a href="#!">Blog<i class="ion-arrow-down-b"></i></a>-->
<!--            <ul class="drop-down-menu drop-down-inner">-->
<!--                <li><a href="04_Blog.html">Blog Page</a></li>-->
<!--                <li><a href="05_Blog_Single.html">Blog Detail</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="06_Regular_Page.html">Regular page</a></li>-->
<!--    </ul>-->
<!--</header>-->
<!---->
<!--<section class="slider-section">-->
<!---->
<!--    <div class="forcefullwidth_wrapper_tp_banner" id="rev_slider_28_1_forcefullwidth" style="position:relative;width:100%;height:auto;margin-top:0px;margin-bottom:0px"><div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullscreen-container tp-mouseover" data-alias="parallax-zoom-slices" data-source="gallery" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; padding: 0px; margin-top: 0px; margin-bottom: 0px; position: absolute; max-height: none; overflow: visible; height: 532px; width: 1920px; left: -50px;">-->
<!--            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->-->
<!--            <div id="rev_slider_28_1" class="rev_slider fullscreenbanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus" style="max-height: none; margin-top: 0px; margin-bottom: 0px; height: 100%;" data-version="5.4.1" data-slideactive="rs-83">-->
<!--                <ul class="tp-revslider-mainul" style="visibility: visible; display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">-->
<!--                    <!-- SLIDE 1 -->-->
<!--                    <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-slicey_shadow="0px 0px 50px 0px transparent" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0; background-color: rgba(255, 255, 255, 0);">-->
<!--                        <!-- MAIN IMAGE -->-->
<!--                        <div class="slotholder" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="images/slider-1-1920x1080.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg defaultimg" data-no-retina="">--><div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url(&quot;images/slider-1-1920x1080.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="images/slider-1-1920x1080.jpg"></div><div class="tp-kbimg-wrap " style="z-index: 2; width: 100%; height: 100%; top: 0px; left: 0px; position: absolute; transform: translate3d(0px, -275.875px, 0px); transform-origin: 0% 0% 0px;"><img class="tp-kbimg" src="images/slider-1-1920x1080.jpg" style="position: absolute; height: 1024px; width: 1820px; transform: matrix3d(1, 0.000174533, 0, 0, -0.000174533, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 0% 0% 0px;" width="1920" height="1080"></div></div>-->
<!---->
<!--                        <!-- LAYERS -->-->
<!---->
<!--                        <!-- LAYER NR. 1 -->-->
<!--                        <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: hidden; left: 768px; top: 206px; z-index: 14;"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;"><div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-53','-53','-53','-33']" data-fontsize="['80','70','60','50']" data-lineheight="['90','80','70','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--						{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; white-space: nowrap; font-size: 49px; line-height: 55px; font-weight: 600; color: rgb(255, 255, 255); visibility: inherit; transition: none 0s ease 0s; text-align: inherit; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;" id="layer-556247510">Red kayaks</div><div class="tp-blockmask" style="transform: matrix(0, 0, 0, 1, 0, 0); background: rgb(255, 255, 255) none repeat scroll 0% 0%; transform-origin: 100% 50% 0px;"></div></div></div></div>-->
<!---->
<!--                        <!-- LAYER NR. 2 -->-->
<!--                        <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: hidden; left: 833px; top: 271px; z-index: 15;"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;"><div class="tp-caption tp-resizeme visit-btn rs-hover-ready" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['25','25','25','25']" data-fontsize="['25','20','20','20']" data-lineheight="['30','25','25','25']" data-width="['none','none','480','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--						{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},-->
<!--						{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 0px 0;&quot;}]" data-textalign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 15px; line-height: 18px; color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-style: solid; border-width: 0px 0px 2px; cursor: pointer; letter-spacing: 3px; font-weight: 600; min-width: 0px; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; margin: 0px; padding: 0px; min-height: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;" id="layer-339390180">VIEW PROJECTS </div><div class="tp-blockmask" style="transform: matrix(0, 0, 0, 1, 0, 0); background: rgb(255, 255, 255) none repeat scroll 0% 0%; transform-origin: 100% 50% 0px;"></div></div></div></div>-->
<!---->
<!--                    </li>-->
<!---->
<!--                    <!-- SLIDE 2 -->-->
<!--                    <li data-index="rs-83" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent" class="tp-revslider-slidesli active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1; background-color: rgba(255, 255, 255, 0);">-->
<!---->
<!--                        <!-- MAIN IMAGE -->-->
<!--                        <div class="slotholder" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="images/slider-4-1920x1080.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg defaultimg" data-no-retina="">--><div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url(&quot;images/slider-4-1920x1080.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="images/slider-4-1920x1080.jpg"></div><div class="tp-kbimg-wrap " style="z-index: 2; width: 100%; height: 100%; top: 0px; left: 0px; position: absolute; transform: translate3d(-45.032px, -301.206px, 0px); transform-origin: 0% 0% 0px;"><img class="tp-kbimg" src="images/slider-4-1920x1080.jpg" style="position: absolute; height: 1024px; width: 1820px; transform: matrix3d(1.04949, 0.000137848, 0, 0, -0.000137848, 1.04949, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 0% 0% 0px;" width="1920" height="1080"></div></div>-->
<!---->
<!--                        <!-- LAYERS -->-->
<!---->
<!--                        <!-- LAYER NR. 1 -->-->
<!--                        <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 768px; top: 206px; z-index: 14;"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;"><div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-53','-53','-53','-33']" data-fontsize="['80','70','60','50']" data-lineheight="['90','80','70','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--							{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; white-space: nowrap; font-size: 49px; line-height: 55px; font-weight: 600; color: rgb(255, 255, 255); visibility: inherit; transition: none 0s ease 0s; text-align: inherit; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;" id="layer-85871968">Red kayaks</div><div class="tp-blockmask" style="transform: matrix(0, 0, 0, 1, 0, 0); background: rgb(255, 255, 255) none repeat scroll 0% 0%; transform-origin: 100% 50% 0px;"></div></div></div></div>-->
<!---->
<!--                        <!-- LAYER NR. 2 -->-->
<!--                        <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 833px; top: 271px; z-index: 15;"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;"><div class="tp-caption tp-resizeme visit-btn rs-hover-ready" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['25','25','25','25']" data-fontsize="['25','20','20','20']" data-lineheight="['30','25','25','25']" data-width="['none','none','480','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--							{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},-->
<!--							{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 0px 0;&quot;}]" data-textalign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 15px; line-height: 18px; color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-style: solid; border-width: 0px 0px 2px; cursor: pointer; letter-spacing: 3px; font-weight: 600; min-width: 0px; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; margin: 0px; padding: 0px; min-height: 0px; max-height: none; max-width: none; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;" id="layer-704484721">VIEW PROJECTS </div><div class="tp-blockmask" style="transform: matrix(0, 0, 0, 1, 0, 0); background: rgb(255, 255, 255) none repeat scroll 0% 0%; transform-origin: 100% 50% 0px;"></div></div></div></div>-->
<!---->
<!--                    </li>-->
<!---->
<!--                    <!-- SLIDE 3 -->-->
<!--                    <li data-index="rs-84" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden;">-->
<!--                        <!-- MAIN IMAGE -->-->
<!--                        <div class="slotholder" style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;"><!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="images/slider-2-1920x1080.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg defaultimg" data-no-retina="">--><div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url(&quot;images/slider-2-1920x1080.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;" src="images/slider-2-1920x1080.jpg"></div></div>-->
<!--                        <!-- LAYERS -->-->
<!---->
<!--                        <!-- LAYER NR. 1 -->-->
<!--                        <div class="tp-parallax-wrap " style=" position:absolute;display:block;;visibility:hidden"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position:absolute;display:block;;"><div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-53','-53','-53','-33']" data-fontsize="['80','70','60','50']" data-lineheight="['90','80','70','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--						{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; white-space: nowrap; font-size: 80px; line-height: 90px; font-weight: 600; color: rgb(255, 255, 255); visibility: hidden;" id="layer-935019064">Red kayaks</div></div></div></div>-->
<!---->
<!--                        <!-- LAYER NR. 2 -->-->
<!--                        <div class="tp-parallax-wrap " style=" position:absolute;display:block;;visibility:hidden"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position:absolute;display:block;;"><div class="tp-caption tp-resizeme visit-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['25','25','25','25']" data-fontsize="['25','20','20','20']" data-lineheight="['30','25','25','25']" data-width="['none','none','480','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--						{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},-->
<!--						{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 0px 0;&quot;}]" data-textalign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 25px; line-height: 30px; color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-style: solid; border-width: 0px 0px 3px; cursor: pointer; letter-spacing: 5px; font-weight: 600; min-width: auto; visibility: hidden;" id="layer-947104534">VIEW PROJECTS </div></div></div></div>-->
<!---->
<!--                    </li>-->
<!---->
<!---->
<!--                    <!-- SLIDE  4-->-->
<!--                    <li data-index="rs-85" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden;">-->
<!---->
<!--                        <!-- MAIN IMAGE -->-->
<!--                        <div class="slotholder" style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;"><!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="images/slider-4-1920x1080.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg defaultimg" data-no-retina="">--><div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url(&quot;images/slider-4-1920x1080.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;" src="images/slider-4-1920x1080.jpg"></div></div>-->
<!---->
<!--                        <!-- LAYERS -->-->
<!---->
<!--                        <!-- LAYER NR. 1 -->-->
<!--                        <div class="tp-parallax-wrap " style=" position:absolute;display:block;;visibility:hidden"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position:absolute;display:block;;"><div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-53','-53','-53','-33']" data-fontsize="['80','70','60','50']" data-lineheight="['90','80','70','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--							{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; white-space: nowrap; font-size: 80px; line-height: 90px; font-weight: 600; color: rgb(255, 255, 255); visibility: hidden;" id="layer-426799718">Red kayaks</div></div></div></div>-->
<!---->
<!--                        <!-- LAYER NR. 2 -->-->
<!--                        <div class="tp-parallax-wrap " style=" position:absolute;display:block;;visibility:hidden"><div class="tp-loop-wrap" style="position:absolute;display:block;;"><div class="tp-mask-wrap" style="position:absolute;display:block;;"><div class="tp-caption tp-resizeme visit-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['25','25','25','25']" data-fontsize="['25','20','20','20']" data-lineheight="['30','25','25','25']" data-width="['none','none','480','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1000,&quot;sfx_effect&quot;:&quot;blockfromleft&quot;,&quot;sfxcolor&quot;:&quot;#ffffff&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},-->
<!--							{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},-->
<!--							{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 0px 0;&quot;}]" data-textalign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 25px; line-height: 30px; color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-style: solid; border-width: 0px 0px 3px; cursor: pointer; letter-spacing: 5px; font-weight: 600; min-width: auto; visibility: hidden;" id="layer-663074815">VIEW PROJECTS </div></div></div></div>-->
<!---->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="tp-bannertimer" style="height: 10px; background: rgba(255, 255, 255, 0.25) none repeat scroll 0% 0%; width: 4.88%; visibility: visible; transform: translate3d(0px, 0px, 0px);"></div>	<div class="tp-loader off" style="display: none;"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div class="tp-leftarrow tparrows uranus" style="top: 50%; transform: matrix(1.3, 0, 0, 1.3, 20, -20); left: 0px;"></div><div class="tp-rightarrow tparrows uranus" style="top: 50%; transform: matrix(1.3, 0, 0, 1.3, -60, -20); left: 100%;"></div><div class="tp-bullets hermes horizontal nav-pos-hor-center nav-pos-ver-bottom nav-dir-horizontal" style="width: 75px; height: 15px; top: 100%; transform: matrix(1, 0, 0, 1, -37, -35); left: 50%;"><div class="tp-bullet" style="left: 0px; top: 0px;"></div><div class="tp-bullet selected" style="left: 20px; top: 0px;"></div><div class="tp-bullet" style="left: 40px; top: 0px;"></div><div class="tp-bullet" style="left: 60px; top: 0px;"></div></div></div>-->
<!--        </div><div class="tp-fullwidth-forcer" style="width: 100%; height: 532px;"></div></div><!-- END REVOLUTION SLIDER -->-->
<!---->
<!--</section><!-- slider -->-->
<!---->
<!--<footer>-->
<!--    <p class="copyright">-->
<!--        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->-->
<!--        Copyright ©<script>document.write(new Date().getFullYear());</script>2018 All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!--        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->-->
<!--    </p>-->
<!---->
<!--    <a class="show-thumb-btn" href="#">SHOW THUMBNAILS</a>-->
<!---->
<!--    <ul class="social-icons">-->
<!--        <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>-->
<!--        <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>-->
<!--        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>-->
<!--        <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>-->
<!--        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>-->
<!--    </ul><!-- social-icons -->-->
<!--</footer>-->
<!---->
<!---->
<!--<!-- SCIPTS -->-->
<!---->
<!--<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>-->
<!---->
<!--<!--<script src="common-js/jquery-3.2.1.min.js"></script>-->-->
<!---->
<!---->
<!--<script src="common-js/bootstrap.js"></script>-->
<!---->
<!---->
<!--<script src="common-js/scripts.js"></script>-->
<!--<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>-->
<!--<script>-->
<!--    window.dataLayer = window.dataLayer || [];-->
<!--    function gtag(){dataLayer.push(arguments);}-->
<!--    gtag('js', new Date());-->
<!---->
<!--    gtag('config', 'UA-23581568-13');-->
<!--</script>-->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="la.jpg" alt="Los Angeles">
        </div>

        <div class="item">
            <img src="chicago.jpg" alt="Chicago">
        </div>

        <div class="item">
            <img src="ny.jpg" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body></html>