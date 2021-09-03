<?php

/* ::layouthome.html.twig */
class __TwigTemplate_34c5724fdb692105ace5c7874af56c0587c925d9e41e8d712aa1c9c9416608c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'srcjavascript' => array($this, 'block_srcjavascript'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>

  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"msapplication-tap-highlight\" content=\"no\">
  ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 10
        echo "\t<link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-sm-afh.png"), "html", null, true);
        echo "\" sizes=\"32x32\">

\t<title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/css/style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/css/font-awesome.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/css/fontsaps.css"), "html", null, true);
        echo "\" />
    <style>
\t\t.img-classic{
\t\t\tbox-shadow: none;
      padding: 2px;
\t\t}
    .inner-parad-card{
      background: #fff; height: 350px; width: 100%;
      border-radius: 17px;
      padding: 7px;
      font-family: Arial;
    \tfont-size: 13px;
    \tfont-weight: 400;
    \tline-height: 18px;
    \tcolor: #283346;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
      transition: all 0.3s cubic-bezier(.25,.8,.25,1);
      display: inline-block;
      text-decoration: none!important;
    }
    .inner-parad-card:hover{
      transform: translateY(-30px)!important;
      box-shadow: 0 0.15rem 1.75rem 0 rgba(31, 45, 65, 0.15)!important;
    }
    .inner-parad-card:hover span.btn-item-action{
      display: inline-block!important;
    }
    .btn-item-action{
      display: none;
      position: absolute;
      right: 15px;
      top: 15px;
      font-family: Roboto-Regular;
      text-decoration: underline;
      font-size: 16px;
      border: 1px solid #ddd;
      padding: 7px 15px;
    }
    .inner-parad-card.first-item{
    \tborder: 1px solid #7C7CB7;
    \tbox-shadow: 0px 1px 5px 0px #D4D8DE;
    }
    .inner-parad-card.second-item{
    \tborder: 1px solid #FCC417;
    \tbox-shadow: 0px 1px 5px 0px #D4D8DE;
    }
    .inner-parad-card.third-item{
    \tborder: 1px solid #ff748e;
    \tbox-shadow: 0px 1px 5px 0px #D4D8DE;
    }
    .inner-parad-card .help-title{
    \tmargin-top: 7px; font-family: Montserrat; font-size: 21px; font-weight: 700; color: #333333;
    }
    .inner-parad-card .help-content{
    \tfont-family: Quicksand-Regular; margin-top: 20px; font-size: 15px;font-weight: 400; color: #283346;
    }
    .inner-parad-card img{
    \twidth: 103px; height: 89px;
    }

    @media (min-width: 1200px){
      .box-samples-img-2 {
          right: 0px;
          transform: translateY(-65%);
          bottom: 0;
      }
      .box-samples-img-3 {
          right: 0px;
          transform: translateY(46%);
          bottom: 0;
      }
      .box-samples-img-1 {
          top: 0;
          left: 0;
          transform: translateY(16%);
      }

      .box-samples-img-0{
          top: 400px;
          left: 0;
          transform: translateY(16%);
      }
    }
    @media (min-width: 1200px){
      .box-samples-img {
          position: absolute;
          width: 300px;
          max-width: 50%;
      }
    }
    @media (max-width: 1200px){
      .box-samples-img {
          width: 300px;
          max-width: 25%;
      }
    }
\t\t.owl-carousel.owl-style-1 .owl-prev:before {
\t\t\tcontent: '\\f177';
\t\t}
\t\t.owl-carousel.owl-style-1 .owl-next:before {
\t\t\tcontent: '\\f178';
\t\t}
\t\t.owl-carousel.owl-style-1 .owl-prev:before, .owl-carousel.owl-style-1 .owl-next:before {
\t\t\tfont-family: \"FontAwesome\";
\t\t}
\t\t.ui-to-top {
\t\t\tposition: fixed;
\t\t\tright: 15px;
\t\t\tbottom: 15px!important;
\t\t\tz-index: 100;
\t\t\twidth: 50px;
\t\t\theight: 50px;
\t\t\tfont-size: 20px!important;
\t\t\tline-height: 46px!important;
\t\t}

\t\t.pd-t-home{
\t\t\tpadding-top: 20px;
\t\t}

\t\t@media (min-width: 768px) {
\t\t\t.small-screen {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t}
\t\t@media (max-width: 1200px) {
\t\t\t.pd-t-home{
\t\t\t\tpadding-top: 50px;
\t\t\t}
\t\t}
\t\t.header-homepage{
\t\t\tposition: fixed; width: 100%; top: 0px; background: #fff; z-index: 10; height: 80px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
\t\t\ttransition: all 0.3s cubic-bezier(.25,.8,.25,1);
\t\t\tpadding: 20px 0px;
\t\t}

\t\t/*
\t\t------Begin Activator---------------*/
\t.activator {
        /*display: block;
        position: absolute;
        width: 24px;
        height: 20px;
        top: 41px;
        right: 15px;
        cursor: pointer;
        z-index: 1000;
        -webkit-transition: all 0.2s linear;
        transition: all 0.2s linear;*/
    }
    .activator .menu-icon,
    .activator .menu-icon::before,
    .activator .menu-icon::after {
        content: \"\";
        display: block;
        position: relative;
        left: 0;
        right: 0;
        height: 2px;
        background: #000;
        margin-left: 8px;
        border-radius: 1px;
        cursor: pointer;
        -webkit-transition: all 300ms ease-in-out;
        transition: all 300ms ease-in-out;
    }
    .activator .menu-icon {
        top: 8px;
    }
    .activator .menu-icon::before {
        top: -8px;
    }
    .activator .menu-icon::after {
        bottom: -8px;
    }

    .activator.active .menu-icon {
     background: none;
    }
    .activator.active .menu-icon::before {
        top: 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    .activator.active .menu-icon::after {
        bottom: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    #activate-menu {
        z-index: 900;
        padding: 20px 40px;
        position: fixed;
        top: 0;
        bottom: 0;
        right: -40%;
        width: 40%;
        list-style-type: none;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        -webkit-overflow-scrolling: touch;
        background: #f2f2f2;
        overflow: hidden;
        overflow-y: auto;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
    @media (max-width: 400px) {
      #activate-menu {
        width: 95%;
        right: -95%;
      }
    }
    @media (max-width: 600px) {
      #activate-menu {
        width: 80%;
        right: -80%;
      }
    }
    @media (max-width: 900px) {
      #activate-menu {
        width: 70%;
        right: -70%;
      }
    }
    @media (max-width: 1200px) {
      #activate-menu {
        width: 60%;
        right: -60%;
      }
    }

    #activate-menu.visible {
        right: 0;
    }

    #fade-bg {
        display: none;
        width: 100%;
        height: 100%;
        position: fixed;
        -webkit-overflow-scrolling: touch;
        overflow: hidden;
        top: 0;
        left: 0;
        z-index: 80;
        background: rgba(0, 0, 0, 0.2);
    }

    .menu-toggle:before{
        content: \"\"!important;
    }
\t/*
\t------------------------End Activator--------------------*/

  .btn-navigation{
    display: inline-block; padding: 7px; background: #f2f2f2; border: 1px solid #ddd; border-radius: 7px;
    color: #325ea9;
    margin-top: 15px;
  }
  @media (min-width: 768px) {
    .btn-navigation{
      margin-right: -15px;
    }
  }
  .btn-navigation:hover{
    background: #325ea9;
    color: #fff;
  }
  .my-fixed-nav{
    position: fixed;
    top: 0px;
    width: 100%;
    background: #fff;
    box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    display: none;
    z-index: 50;
    height: 80px;
  }
  .app-title{
  \tfont-family: Montserrat-Bold;
  \tfont-size: 25px;
  \ttext-align: left;
  \tline-height: 39px;
  \tcolor: #283346;
  \twidth: 550px;
  \tmax-width: 100%;
  }
  .app-title-diviser{
  \tdisplay: inline-block; height: 6px; background: #ed6e11; width: 255px;
     max-width: 100%;
  }

  #top-sidebar-popper{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: -100vh;
    z-index: 5000;
    background: rgba(0,0,0,0.6);
  }

  #preloader-logo {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
  }

  .loading-msg {
      width: 100%;
      font-size: 0.75em;
      color: #555;
      position: absolute;
      bottom: 10%;
      left: 50%;
      transform: translate(-50%, 50%);
      text-align: center;
  }

  .spinner {
      width: 80px;
      height: 80px;
      border: 2px solid #f3f3f3;
      border-top: 3px solid #2489CE;
      border-radius: 100%;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      animation: spin 1s infinite ease;
  }

  @keyframes spin {
      from {
          transform: rotate(0deg);
      }
      to {
          transform: rotate(360deg);
      }
  }

  #loading-msg {
    width: 100%;
    left: 0;
    margin-top: 90vh;
    display: inline-block;
    text-align: center;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size: 25px;
    color: white;
    text-shadow: 2px 2px 4px #000000;
  }

  .preloader2{background-color:#f7f7f7;width:100%;height:100%;position:fixed;top:0;left:0;right:0;bottom:0;z-index:999999;-webkit-transition:.6s;-o-transition:.6s;transition:.6s;margin:0 auto}
  .preloader2 .preloader-circle{width:100px;height:100px;position:relative;border-style:solid;border-width:5px;border-top-color:#a9c254;border-bottom-color:transparent;border-left-color:transparent;border-right-color:transparent;z-index:10;border-radius:50%;-webkit-box-shadow:0 1px 5px 0 rgba(35,181,185,0.15);box-shadow:0 1px 5px 0 rgba(35,181,185,0.15);background-color:#ffffff;-webkit-animation:zoom 2000ms infinite ease;animation:zoom 800ms infinite ease;-webkit-transition:.6s;-o-transition:.6s;transition:.6s}
  .preloader2 .preloader-circle2{border-top-color:red; border-width:5px;}
  .preloader2 .preloader-img{position:absolute;top:50%;z-index:200;left:0;right:0;margin:0 auto;text-align:center;display:inline-block;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);padding-top:6px;-webkit-transition:.6s;-o-transition:.6s;transition:.6s}.preloader2 .preloader-img img{max-width:80px}.preloader .pere-text strong{font-weight:800;color:#dca73a;text-transform:uppercase}
  @-webkit-keyframes zoom{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}}@keyframes zoom{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}}
\t
\t
\t
aside{
\tposition: fixed;
\twidth: 100%;
\theight: 100%;
\ttop: 0;
\tleft: 0;
\tbackground: #fff;
\topacity: 0;
\tvisibility: hidden;
\ttransition: all .5s ease;
\tz-index: 90000!important;
}
.open {
\topacity: 1!important;
\tvisibility: visible;
}

.close-nav {
\tposition: fixed;
\ttop: 10px;
\tleft: 15px;
\tcolor: white;
\tz-index: 3;
\tcursor: pointer;
\tfont-family: sans-serif;
\tbox-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
\ttransition: all 0.3s cubic-bezier(.25,.8,.25,1);
\tbackground: #fff;;
}
.close-nav:hover{
\tbackground: red!important;
\tcolor: #fff!important;
}
.hiden-scroll-bar-body{
\theight: 400px;
\toverflow-y: hidden;
}
.close-nav span,
.close-nav span:before,
.close-nav span:after {
\tborder-radius: 4px;
\theight: 5px;
\twidth: 35px;
\tbackground: white;
\tposition: absolute;
\tdisplay: block;
\tcontent: '';
}
.close-nav span {
\tbackground: transparent;
}
.close-nav span:before {
\t-webkit-transform: rotate(45deg);
\t\t\ttransform: rotate(45deg);
}
.close-nav span:after {
\t-webkit-transform: rotate(-45deg);
\t\t\ttransform: rotate(-45deg);
}

.outer-close {
\tposition: absolute;
\tright: 0;
\ttop: 0;
\twidth: 85px;
\theight: 85px;
\tcursor: pointer;
}

.silly_scrollbar {
\theight: calc(100% - 72px);
\tpadding:0 14px;
\toverflow:auto;
}

.silly_scrollbar::-webkit-scrollbar {
\twidth: 12px;
}
\t
.silly_scrollbar::-webkit-scrollbar-track {
\t-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
\tborder-radius: 10px;
}
\t
.silly_scrollbar::-webkit-scrollbar-thumb {
\tborder-radius: 10px;
\t-webkit-box-shadow: inset 0 0 6px red; 
}

.silly_scrollbar::-webkit-scrollbar-thumb:hover {
\t-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.8);
}

.open:hover {
\topacity: 1!important;
}






@-webkit-keyframes rotateScene {
  0% {
    transform: rotateY(0deg) rotateX(70deg);
  }
  100% {
    transform: rotateY(360deg) rotateX(70deg);
  }
}
@keyframes rotateScene {
  0% {
    transform: rotateY(0deg) rotateX(70deg);
  }
  100% {
    transform: rotateY(360deg) rotateX(70deg);
  }
}
@-webkit-keyframes animateTop {
  0% {
    transform: rotateY(0deg) translateZ(25px);
    -webkit-transform: rotateY(0deg) translateZ(25px);
    -moz-transform: rotateY(0deg) translateZ(25px);
    -ms-trasform: rotateY(0deg) translateZ(25px);
  }
  50% {
    transform: rotateY(0deg) translateZ(0);
    -webkit-transform: rotateY(0deg) translateZ(0);
    -moz-transform: rotateY(0deg) translateZ(0);
    -ms-trasform: rotateY(0deg) translateZ(0);
  }
  100% {
    transform: rotateY(0deg) translateZ(25px);
    -webkit-transform: rotateY(0deg) translateZ(25px);
    -moz-transform: rotateY(0deg) translateZ(25px);
    -ms-trasform: rotateY(0deg) translateZ(25px);
  }
}
@keyframes animateTop {
  0% {
    transform: rotateY(0deg) translateZ(25px);
    -webkit-transform: rotateY(0deg) translateZ(25px);
    -moz-transform: rotateY(0deg) translateZ(25px);
    -ms-trasform: rotateY(0deg) translateZ(25px);
  }
  50% {
    transform: rotateY(0deg) translateZ(0);
    -webkit-transform: rotateY(0deg) translateZ(0);
    -moz-transform: rotateY(0deg) translateZ(0);
    -ms-trasform: rotateY(0deg) translateZ(0);
  }
  100% {
    transform: rotateY(0deg) translateZ(25px);
    -webkit-transform: rotateY(0deg) translateZ(25px);
    -moz-transform: rotateY(0deg) translateZ(25px);
    -ms-trasform: rotateY(0deg) translateZ(25px);
  }
}
@-webkit-keyframes animateFaceTwo {
  0% {
    transform: rotateX(-90deg) translateZ(-25px);
    -webkit-transform: rotateX(-90deg) translateZ(-25px);
    -moz-transform: rotateX(-90deg) translateZ(-25px);
    -ms-trasform: rotateX(-90deg) translateZ(-25px);
    height: 50px;
  }
  50% {
    transform: rotateX(-90deg) translateZ(0px);
    -webkit-transform: rotateX(-90deg) translateZ(0px);
    -moz-transform: rotateX(-90deg) translateZ(0px);
    -ms-trasform: rotateX(-90deg) translateZ(0px);
    height: 0;
  }
  100% {
    transform: rotateX(-90deg) translateZ(-25px);
    -webkit-transform: rotateX(-90deg) translateZ(-25px);
    -moz-transform: rotateX(-90deg) translateZ(-25px);
    -ms-trasform: rotateX(-90deg) translateZ(-25px);
    height: 50px;
  }
}
@keyframes animateFaceTwo {
  0% {
    transform: rotateX(-90deg) translateZ(-25px);
    -webkit-transform: rotateX(-90deg) translateZ(-25px);
    -moz-transform: rotateX(-90deg) translateZ(-25px);
    -ms-trasform: rotateX(-90deg) translateZ(-25px);
    height: 50px;
  }
  50% {
    transform: rotateX(-90deg) translateZ(0px);
    -webkit-transform: rotateX(-90deg) translateZ(0px);
    -moz-transform: rotateX(-90deg) translateZ(0px);
    -ms-trasform: rotateX(-90deg) translateZ(0px);
    height: 0;
  }
  100% {
    transform: rotateX(-90deg) translateZ(-25px);
    -webkit-transform: rotateX(-90deg) translateZ(-25px);
    -moz-transform: rotateX(-90deg) translateZ(-25px);
    -ms-trasform: rotateX(-90deg) translateZ(-25px);
    height: 50px;
  }
}
@-webkit-keyframes animateFaceThree {
  0% {
    transform: rotateY(90deg) translateZ(25px);
    -webkit-transform: rotateY(90deg) translateZ(25px);
    -moz-transform: rotateY(90deg) translateZ(25px);
    -ms-trasform: rotateY(90deg) translateZ(25px);
    width: 50px;
  }
  50% {
    transform: rotateY(90deg) translateZ(50px);
    -webkit-transform: rotateY(90deg) translateZ(50px);
    -moz-transform: rotateY(90deg) translateZ(50px);
    -ms-trasform: rotateY(90deg) translateZ(50px);
    width: 0;
  }
  100% {
    transform: rotateY(90deg) translateZ(25px);
    -webkit-transform: rotateY(90deg) translateZ(25px);
    -moz-transform: rotateY(90deg) translateZ(25px);
    -ms-trasform: rotateY(90deg) translateZ(25px);
    width: 50px;
  }
}
@keyframes animateFaceThree {
  0% {
    transform: rotateY(90deg) translateZ(25px);
    -webkit-transform: rotateY(90deg) translateZ(25px);
    -moz-transform: rotateY(90deg) translateZ(25px);
    -ms-trasform: rotateY(90deg) translateZ(25px);
    width: 50px;
  }
  50% {
    transform: rotateY(90deg) translateZ(50px);
    -webkit-transform: rotateY(90deg) translateZ(50px);
    -moz-transform: rotateY(90deg) translateZ(50px);
    -ms-trasform: rotateY(90deg) translateZ(50px);
    width: 0;
  }
  100% {
    transform: rotateY(90deg) translateZ(25px);
    -webkit-transform: rotateY(90deg) translateZ(25px);
    -moz-transform: rotateY(90deg) translateZ(25px);
    -ms-trasform: rotateY(90deg) translateZ(25px);
    width: 50px;
  }
}
@-webkit-keyframes animateFaceFour {
  0% {
    transform: rotateY(-90deg) translateZ(25px);
    -webkit-transform: rotateY(-90deg) translateZ(25px);
    -moz-transform: rotateY(-90deg) translateZ(25px);
    -ms-trasform: rotateY(-90deg) translateZ(25px);
    width: 50px;
  }
  50% {
    transform: rotateY(-90deg) translateZ(0px);
    -webkit-transform: rotateY(-90deg) translateZ(0px);
    -moz-transform: rotateY(-90deg) translateZ(0px);
    -ms-trasform: rotateY(-90deg) translateZ(0px);
    width: 0;
  }
  100% {
    transform: rotateY(-90deg) translateZ(25px);
    -webkit-transform: rotateY(-90deg) translateZ(25px);
    -moz-transform: rotateY(-90deg) translateZ(25px);
    -ms-trasform: rotateY(-90deg) translateZ(25px);
    width: 50px;
  }
}
@keyframes animateFaceFour {
  0% {
    transform: rotateY(-90deg) translateZ(25px);
    -webkit-transform: rotateY(-90deg) translateZ(25px);
    -moz-transform: rotateY(-90deg) translateZ(25px);
    -ms-trasform: rotateY(-90deg) translateZ(25px);
    width: 50px;
  }
  50% {
    transform: rotateY(-90deg) translateZ(0px);
    -webkit-transform: rotateY(-90deg) translateZ(0px);
    -moz-transform: rotateY(-90deg) translateZ(0px);
    -ms-trasform: rotateY(-90deg) translateZ(0px);
    width: 0;
  }
  100% {
    transform: rotateY(-90deg) translateZ(25px);
    -webkit-transform: rotateY(-90deg) translateZ(25px);
    -moz-transform: rotateY(-90deg) translateZ(25px);
    -ms-trasform: rotateY(-90deg) translateZ(25px);
    width: 50px;
  }
}
@-webkit-keyframes animateFaceFive {
  0% {
    transform: rotateX(-90deg) translateZ(25px);
    -webkit-transform: rotateX(-90deg) translateZ(25px);
    -moz-transform: rotateX(-90deg) translateZ(25px);
    -ms-trasform: rotateX(-90deg) translateZ(25px);
    height: 50px;
  }
  50% {
    transform: rotateX(-90deg) translateZ(50px);
    -webkit-transform: rotateX(-90deg) translateZ(50px);
    -moz-transform: rotateX(-90deg) translateZ(50px);
    -ms-trasform: rotateX(-90deg) translateZ(50px);
    height: 0;
  }
  100% {
    transform: rotateX(-90deg) translateZ(25px);
    -webkit-transform: rotateX(-90deg) translateZ(25px);
    -moz-transform: rotateX(-90deg) translateZ(25px);
    -ms-trasform: rotateX(-90deg) translateZ(25px);
    height: 50px;
  }
}
@keyframes animateFaceFive {
  0% {
    transform: rotateX(-90deg) translateZ(25px);
    -webkit-transform: rotateX(-90deg) translateZ(25px);
    -moz-transform: rotateX(-90deg) translateZ(25px);
    -ms-trasform: rotateX(-90deg) translateZ(25px);
    height: 50px;
  }
  50% {
    transform: rotateX(-90deg) translateZ(50px);
    -webkit-transform: rotateX(-90deg) translateZ(50px);
    -moz-transform: rotateX(-90deg) translateZ(50px);
    -ms-trasform: rotateX(-90deg) translateZ(50px);
    height: 0;
  }
  100% {
    transform: rotateX(-90deg) translateZ(25px);
    -webkit-transform: rotateX(-90deg) translateZ(25px);
    -moz-transform: rotateX(-90deg) translateZ(25px);
    -ms-trasform: rotateX(-90deg) translateZ(25px);
    height: 50px;
  }
}
@-webkit-keyframes animateHeight {
  0% {
    height: 0;
    transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -webkit-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -moz-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -ms-trasform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
  }
  50% {
    height: 50px;
    transform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
    -webkit-transform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
    -moz-transform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
    -ms-trasform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
  }
  100% {
    height: 0;
    transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -webkit-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -moz-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -ms-trasform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
  }
}
@keyframes animateHeight {
  0% {
    height: 0;
    transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -webkit-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -moz-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -ms-trasform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
  }
  50% {
    height: 50px;
    transform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
    -webkit-transform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
    -moz-transform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
    -ms-trasform: rotateX(90deg) translateY(25px) translateZ(0) translateX(-10px);
  }
  100% {
    height: 0;
    transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -webkit-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -moz-transform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
    -ms-trasform: rotateX(90deg) translateY(0) translateZ(-25px) translateX(-10px);
  }
}


.containary {
  width: 500px;
  height: 500px;
  position: relative;
  perspective: 1000px;
}
.containary .inner {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transform: rotateY(0deg) rotateX(40deg) rotateZ(45deg);
  -webkit-transform: rotateY(0deg) rotateX(40deg) rotateZ(45deg);
  -moz-transform: rotateY(0deg) rotateX(40deg) rotateZ(45deg);
  -ms-trasform: rotateY(0deg) rotateX(40deg) rotateZ(45deg);
}
.containary .inner figure.top1 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 0;
}
.containary .inner figure.top1 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top1 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top1 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top1 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top1 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top2 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 50px;
}
.containary .inner figure.top2 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top2 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top2 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top2 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top2 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top3 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 100px;
}
.containary .inner figure.top3 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top3 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top3 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top3 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top3 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top4 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 150px;
}
.containary .inner figure.top4 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top4 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top4 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top4 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top4 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top5 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 200px;
}
.containary .inner figure.top5 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top5 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top5 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top5 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top5 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top6 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 250px;
}
.containary .inner figure.top6 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top6 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top6 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top6 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top6 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top7 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 300px;
}
.containary .inner figure.top7 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top7 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top7 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top7 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top7 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top8 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 350px;
}
.containary .inner figure.top8 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top8 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top8 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top8 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top8 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top9 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 400px;
}
.containary .inner figure.top9 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top9 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top9 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top9 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top9 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top10 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 0;
  left: 450px;
}
.containary .inner figure.top10 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top10 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top10 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top10 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top10 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top11 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 0;
}
.containary .inner figure.top11 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top11 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top11 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top11 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top11 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top12 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 50px;
}
.containary .inner figure.top12 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top12 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top12 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top12 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top12 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top13 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 100px;
}
.containary .inner figure.top13 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top13 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top13 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top13 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top13 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top14 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 150px;
}
.containary .inner figure.top14 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top14 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top14 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top14 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top14 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top15 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 200px;
}
.containary .inner figure.top15 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top15 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top15 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top15 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top15 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top16 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 250px;
}
.containary .inner figure.top16 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top16 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top16 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top16 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top16 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top17 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 300px;
}
.containary .inner figure.top17 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top17 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top17 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top17 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top17 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top18 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 350px;
}
.containary .inner figure.top18 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top18 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top18 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top18 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top18 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top19 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 400px;
}
.containary .inner figure.top19 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top19 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top19 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top19 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top19 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top20 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 50px;
  left: 450px;
}
.containary .inner figure.top20 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top20 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top20 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top20 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top20 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top21 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 0;
}
.containary .inner figure.top21 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top21 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top21 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top21 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top21 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top22 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 50px;
}
.containary .inner figure.top22 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top22 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top22 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top22 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top22 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top23 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 100px;
}
.containary .inner figure.top23 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top23 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top23 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top23 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top23 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top24 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 150px;
}
.containary .inner figure.top24 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top24 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top24 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top24 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top24 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top25 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 200px;
}
.containary .inner figure.top25 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top25 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top25 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top25 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top25 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top26 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 250px;
}
.containary .inner figure.top26 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top26 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top26 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top26 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top26 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top27 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 300px;
}
.containary .inner figure.top27 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top27 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top27 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top27 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top27 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top28 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 350px;
}
.containary .inner figure.top28 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top28 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top28 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top28 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top28 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top29 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 400px;
}
.containary .inner figure.top29 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top29 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top29 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top29 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top29 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top30 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 100px;
  left: 450px;
}
.containary .inner figure.top30 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top30 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top30 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top30 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top30 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top31 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 0;
}
.containary .inner figure.top31 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top31 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top31 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top31 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top31 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top32 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 50px;
}
.containary .inner figure.top32 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top32 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top32 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top32 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top32 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top33 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 100px;
}
.containary .inner figure.top33 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top33 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top33 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top33 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top33 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top34 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 150px;
}
.containary .inner figure.top34 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top34 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top34 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top34 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top34 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top35 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 200px;
}
.containary .inner figure.top35 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top35 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top35 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top35 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top35 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top36 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 250px;
}
.containary .inner figure.top36 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top36 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top36 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top36 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top36 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top37 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 300px;
}
.containary .inner figure.top37 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top37 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top37 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top37 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top37 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top38 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 350px;
}
.containary .inner figure.top38 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top38 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top38 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top38 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top38 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top39 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 400px;
}
.containary .inner figure.top39 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top39 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top39 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top39 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top39 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top40 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 150px;
  left: 450px;
}
.containary .inner figure.top40 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top40 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top40 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top40 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top40 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top41 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 0;
}
.containary .inner figure.top41 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top41 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top41 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top41 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top41 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top42 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 50px;
}
.containary .inner figure.top42 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top42 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top42 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top42 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top42 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top43 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 100px;
}
.containary .inner figure.top43 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top43 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top43 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top43 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top43 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top44 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 150px;
}
.containary .inner figure.top44 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top44 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top44 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top44 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top44 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top45 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 200px;
}
.containary .inner figure.top45 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0s infinite forwards;
          animation: animateTop 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top45 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top45 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top45 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top45 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top46 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 250px;
}
.containary .inner figure.top46 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0s infinite forwards;
          animation: animateTop 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top46 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top46 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top46 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top46 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top47 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 300px;
}
.containary .inner figure.top47 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top47 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top47 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top47 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top47 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top48 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 350px;
}
.containary .inner figure.top48 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top48 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top48 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top48 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top48 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top49 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 400px;
}
.containary .inner figure.top49 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top49 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top49 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top49 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top49 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top50 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 200px;
  left: 450px;
}
.containary .inner figure.top50 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top50 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top50 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top50 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top50 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top51 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 0;
}
.containary .inner figure.top51 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top51 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top51 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top51 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top51 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top52 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 50px;
}
.containary .inner figure.top52 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top52 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top52 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top52 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top52 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top53 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 100px;
}
.containary .inner figure.top53 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top53 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top53 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top53 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top53 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top54 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 150px;
}
.containary .inner figure.top54 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top54 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top54 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top54 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top54 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top55 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 200px;
}
.containary .inner figure.top55 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0s infinite forwards;
          animation: animateTop 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top55 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top55 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top55 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top55 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top56 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 250px;
}
.containary .inner figure.top56 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0s infinite forwards;
          animation: animateTop 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top56 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top56 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top56 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top56 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0s infinite forwards;
}
.containary .inner figure.top57 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 300px;
}
.containary .inner figure.top57 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top57 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top57 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top57 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top57 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top58 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 350px;
}
.containary .inner figure.top58 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top58 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top58 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top58 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top58 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top59 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 400px;
}
.containary .inner figure.top59 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top59 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top59 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top59 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top59 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top60 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 250px;
  left: 450px;
}
.containary .inner figure.top60 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top60 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top60 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top60 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top60 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top61 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 0;
}
.containary .inner figure.top61 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top61 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top61 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top61 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top61 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top62 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 50px;
}
.containary .inner figure.top62 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top62 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top62 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top62 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top62 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top63 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 100px;
}
.containary .inner figure.top63 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top63 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top63 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top63 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top63 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top64 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 150px;
}
.containary .inner figure.top64 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top64 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top64 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top64 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top64 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top65 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 200px;
}
.containary .inner figure.top65 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top65 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top65 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top65 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top65 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top66 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 250px;
}
.containary .inner figure.top66 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top66 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top66 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top66 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top66 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top67 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 300px;
}
.containary .inner figure.top67 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.4s infinite forwards;
          animation: animateTop 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top67 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top67 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top67 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top67 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.4s infinite forwards;
}
.containary .inner figure.top68 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 350px;
}
.containary .inner figure.top68 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top68 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top68 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top68 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top68 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top69 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 400px;
}
.containary .inner figure.top69 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top69 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top69 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top69 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top69 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top70 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 300px;
  left: 450px;
}
.containary .inner figure.top70 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top70 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top70 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top70 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top70 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top71 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 0;
}
.containary .inner figure.top71 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top71 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top71 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top71 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top71 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top72 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 50px;
}
.containary .inner figure.top72 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top72 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top72 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top72 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top72 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top73 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 100px;
}
.containary .inner figure.top73 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top73 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top73 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top73 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top73 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top74 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 150px;
}
.containary .inner figure.top74 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top74 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top74 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top74 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top74 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top75 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 200px;
}
.containary .inner figure.top75 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top75 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top75 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top75 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top75 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top76 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 250px;
}
.containary .inner figure.top76 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top76 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top76 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top76 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top76 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top77 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 300px;
}
.containary .inner figure.top77 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top77 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top77 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top77 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top77 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top78 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 350px;
}
.containary .inner figure.top78 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 0.8s infinite forwards;
          animation: animateTop 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top78 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top78 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top78 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top78 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 0.8s infinite forwards;
}
.containary .inner figure.top79 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 400px;
}
.containary .inner figure.top79 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top79 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top79 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top79 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top79 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top80 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 350px;
  left: 450px;
}
.containary .inner figure.top80 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top80 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top80 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top80 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top80 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top81 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 0;
}
.containary .inner figure.top81 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top81 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top81 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top81 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top81 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top82 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 50px;
}
.containary .inner figure.top82 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top82 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top82 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top82 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top82 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top83 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 100px;
}
.containary .inner figure.top83 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top83 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top83 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top83 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top83 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top84 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 150px;
}
.containary .inner figure.top84 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top84 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top84 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top84 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top84 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top85 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 200px;
}
.containary .inner figure.top85 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top85 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top85 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top85 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top85 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top86 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 250px;
}
.containary .inner figure.top86 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top86 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top86 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top86 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top86 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top87 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 300px;
}
.containary .inner figure.top87 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top87 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top87 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top87 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top87 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top88 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 350px;
}
.containary .inner figure.top88 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top88 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top88 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top88 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top88 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top89 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 400px;
}
.containary .inner figure.top89 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1s infinite forwards;
          animation: animateTop 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top89 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top89 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top89 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top89 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1s infinite forwards;
}
.containary .inner figure.top90 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 400px;
  left: 450px;
}
.containary .inner figure.top90 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top90 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top90 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top90 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top90 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top91 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 0;
}
.containary .inner figure.top91 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top91 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top91 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top91 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top91 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top92 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 50px;
}
.containary .inner figure.top92 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top92 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top92 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top92 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top92 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top93 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 100px;
}
.containary .inner figure.top93 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top93 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top93 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top93 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top93 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top94 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 150px;
}
.containary .inner figure.top94 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top94 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top94 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top94 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top94 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top95 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 200px;
}
.containary .inner figure.top95 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top95 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top95 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top95 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top95 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top96 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 250px;
}
.containary .inner figure.top96 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top96 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top96 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top96 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top96 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top97 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 300px;
}
.containary .inner figure.top97 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top97 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top97 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top97 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top97 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top98 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 350px;
}
.containary .inner figure.top98 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top98 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top98 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top98 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top98 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top99 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 400px;
}
.containary .inner figure.top99 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top99 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top99 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top99 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top99 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top100 {
  width: 50px;
  height: 50px;
  position: absolute;
  transform-origin: center;
  transform-style: preserve-3d;
  margin: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  top: 450px;
  left: 450px;
}
.containary .inner figure.top100 figure.cube-face.cubeface1 {
  -webkit-animation: animateTop 2s ease-in-out 1.4s infinite forwards;
          animation: animateTop 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top100 figure.cube-face.cubeface2 {
  -webkit-animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceTwo 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top100 figure.cube-face.cubeface3 {
  -webkit-animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceThree 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top100 figure.cube-face.cubeface4 {
  -webkit-animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFour 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.top100 figure.cube-face.cubeface5 {
  -webkit-animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
          animation: animateFaceFive 2s ease-in-out 1.4s infinite forwards;
}
.containary .inner figure.cube-face {
  margin: 0;
  width: 50px;
  height: 50px;
  display: block;
  position: absolute;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  contain: layout;
}
.containary .inner figure.cube-face.cubeface1 {
  transform: rotateY(0deg) translateZ(25px);
  -webkit-transform: rotateY(0deg) translateZ(25px);
  -moz-transform: rotateY(0deg) translateZ(25px);
  -ms-trasform: rotateY(0deg) translateZ(25px);
  background-color: #ffffff;
}
.containary .inner figure.cube-face.cubeface2 {
  transform: rotateX(-90deg) translateZ(-25px);
  -webkit-transform: rotateX(-90deg) translateZ(-25px);
  -moz-transform: rotateX(-90deg) translateZ(-25px);
  -ms-trasform: rotateX(-90deg) translateZ(-25px);
  background-color: #e1e1e1;
}
.containary .inner figure.cube-face.cubeface3 {
  transform: rotateY(90deg) translateZ(25px);
  -webkit-transform: rotateY(90deg) translateZ(25px);
  -moz-transform: rotateY(90deg) translateZ(25px);
  -ms-trasform: rotateY(90deg) translateZ(25px);
  background-color: #c8c8c8;
}
.containary .inner figure.cube-face.cubeface4 {
  transform: rotateY(-90deg) translateZ(25px);
  -webkit-transform: rotateY(-90deg) translateZ(25px);
  -moz-transform: rotateY(-90deg) translateZ(25px);
  -ms-trasform: rotateY(-90deg) translateZ(25px);
  background-color: #c8c8c8;
}
.containary .inner figure.cube-face.cubeface5 {
  transform: rotateX(-90deg) translateZ(25px);
  -webkit-transform: rotateX(-90deg) translateZ(25px);
  -moz-transform: rotateX(-90deg) translateZ(25px);
  -ms-trasform: rotateX(-90deg) translateZ(25px);
  background-color: #e1e1e1;
}

.tags-box{
  list-style: circle!important;
  margin-top: 7px; 
  margin-bottom: -15px;
}
.tags-box li{
  display: inline-block;
  font-size: 18;
  font-weight: bold;
  padding: 2px 5px;
  text-decoration: underline;
}
.tags-box li::before {content: \"•\"; color: #325ea9; font-size: 18px; padding: 7px; margin-bottom: -5px;}



.ribbon-wrapper {
  position: relative;
  margin: 25px auto;
  padding: 0;
  display: block;
  width: 600px;
}

.ribbon-green .ribbon-front {
  background-color: #8cc657;
}

.ribbon-black .ribbon-front {
  background-color: #9dba3d;
}
.ribbon-black .ribbon-front h2 {
  color: #ec741b !important;
}
.ribbon-black .ribbon-front small {
  color: white;
}
.ribbon-black .ribbon-edge-topleft,
.ribbon-black .ribbon-edge-bottomleft {
  border-color: transparent #a94a38 transparent transparent !important;
}
.ribbon-black .ribbon-edge-topright,
.ribbon-black .ribbon-edge-bottomright {
  border-color: transparent transparent transparent #ec741b !important;
}

.ribbon-right .ribbon-front {
  -moz-border-radius: 5px 0 0 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px 0 0 5px;
}
.ribbon-right .ribbon-edge-bottomleft {
  top: 0;
}
.ribbon-right .ribbon-edge-topright,
.ribbon-right .ribbon-edge-bottomright {
  left: 290px;
}
.ribbon-right .ribbon-edge-topright {
  top: 0px;
  border-width: 0px 0 0 20px;
}
.ribbon-right .ribbon-edge-bottomright {
  border-width: 0 0 20px 20px;
}

.ribbon-front {
  height: 112px;
  width: 280px;
  position: relative;
  left: 30px;
  z-index: 2;
  text-align: center;
  cursor: pointer;
  -moz-border-radius: 0 5px 5px 0;
  -webkit-border-radius: 0;
  border-radius: 0 5px 5px 0;
  -moz-transition: all 200ms;
  -o-transition: all 200ms;
  -webkit-transition: all 200ms;
  transition: all 200ms;
}
.ribbon-front h2 {
  color: white;
  font-size: 2.8em;
  padding: 18px 0 0;
  margin: 0;
}
.ribbon-front small {
  font-weight: 600;
  font-size: 16px;
}
.ribbon-front:hover {
  background: #8e8e8e;
  color: black;
}
.ribbon-front:hover small, .ribbon-front:hover h2 {
  color: white !important;
}

.ribbon-front,
.ribbon-back-left,
.ribbon-back-right {
  -moz-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
}

.ribbon-edge-topleft,
.ribbon-edge-topright,
.ribbon-edge-bottomleft,
.ribbon-edge-bottomright {
  position: absolute;
  z-index: 1;
  border-style: solid;
  height: 0px;
  width: 0px;
}

.ribbon-edge-bottomleft,
.ribbon-edge-bottomright {
  top: 112px;
}

.ribbon-edge-topleft,
.ribbon-edge-bottomleft {
  left: 50px;
  border-color: transparent black transparent transparent;
}

.ribbon-edge-topleft {
  top: 0px;
  border-width: 0px 20px 0 0;
}

.ribbon-edge-bottomleft {
  border-width: 0 20px 20px 0;
}

.ribbon-edge-topright,
.ribbon-edge-bottomright {
  left: 280px;
  border-color: transparent transparent transparent black;
}

.ribbon-edge-topright {
  top: 0px;
  border-width: 0px 0 0 20px;
}

.ribbon-edge-bottomright {
  border-width: 0 0 0px 20px;
}

.ribbon-back-left {
  position: absolute;
  top: 10px;
  left: 0px;
  width: 0px;
  height: 112px;
  z-index: 0;
}

.ribbon-back-right {
  position: absolute;
  top: 0px;
  right: 0px;
  width: 0px;
  height: 112px;
  z-index: 0;
}


.shadow {
\t\tbox-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
\t}
\t.bg-light {
\t\tbackground-color: #f8f9fa!important;
\t}
\t.woocommerce-variation-price {
\t\ttext-align: center;
\t\tfont-size: 1.5rem;
\t\tpadding: 0;
\t\tmargin-bottom: 1rem;
\t}

\t.woocommerce div.product p.price, .woocommerce div.product span.price {
\t\tcolor: #77a464;
\t\tfont-size: 1.25em;
\t}

\t.woocommerce-variation-price .price {
\t\tfont-weight: 600!important;
\t\tcolor: #13b094!important;
\t}
\t.woocommerce div.product p.price del, .woocommerce div.product span.price del {
\t\topacity: .5;
\t\tdisplay: inline-block;
\t}
\t.woocommerce-variation-price .price del {
\t\tcolor: #adb5bd;
\t}

\t.woocommerce-variation-price .price ins {
\t\ttext-decoration: none;
\t\tfont-size: 22px;
\t}

\t.single_add_to_cart_button{
\t\ttext-transform: capitalize;
\t}
\t
\t.inner-shadow {
\t  box-shadow: inset 0 0 10px;
\t}
\t


   * {box-sizing: border-box;}


\t.tag {
\t\tdisplay: inline-block;
\t\tcolor: #455a64;
\t\tline-height: 1;
\t\ttext-decoration: none;
\t\tpadding: 7px 15px 7px 21px;
\t\tbackground: #cfd8dc;
\t\tmargin: 0 18px 10px 0;
\t\tborder-top-left-radius: 3px;
\t\tborder-bottom-left-radius: 3px;
\t\tposition: relative;
\t\ttransition: .2s;
\t\t-webkit-tap-highlight-color: transparent;
\t\tfont-size: 11px;
\t}

\t.tag::before {
\t\tcontent: \"\";
\t\twidth: 7px;
\t\theight: 7px;
\t\tborder-radius: 50%;
\t\tbackground: #fff;
\t\tposition: absolute;
\t\ttop: calc(50% - 3.5px);
\t\tleft: 7px
\t}
\t.tag::after {
\t\tcontent: \"\";
\t\tdisplay: block;
\t\tborder-left: 8px solid #cfd8dc;
\t\tborder-top: 10px solid #0000;
\t\tborder-bottom: 15px solid #0000;
\t\tposition: absolute;
\t\ttop: 0;
\t\tleft: 100%;
\t\ttransition: .2s;
\t}
\t.tag:active {
\tcolor: #fff;
\tbackground: #ec407a;
\ttransform: scale(1.1);
\t}
\t.tag:active::after {border-left-color: #ec407a;}
\t@media (min-width:1050px) {
\t.tag:hover {
\t\tcolor: #fff;
\t\tbackground: #ec407a;
\t\ttransform: scale(1.1);
\t}
\t.tag:hover::after {border-left-color: #ec407a;}
\t}

\t.content p{
\t\tmargin: 0px!important;
\t}



details div.sommaire-content {
\tborder-left: 2px solid #000;
\tborder-right: 2px solid #000;
\tborder-bottom: 2px solid #000;
\tpadding: 1.5em;
}

details div.sommaire-content > * + * {
\tmargin-top: 1.5em;
}

details + details {
\tmargin-top: .5rem;
}

summary {
\tlist-style: none;
}

summary::-webkit-details-marker {
\tdisplay: none;
}

summary {
\tborder: 2px solid #000;
\tpadding: .75em 1em;
\tcursor: pointer;
\tposition: relative;
\tpadding-left: calc(1.75rem + .75rem + .75rem);
}

summary:before {
\tposition: absolute;
\ttop: 50%;
\ttransform: translateY(-50%);
\tleft: .75rem;
\tcontent: \"↓\";
\twidth: 1.75rem;
\theight: 1.75rem;
\tbackground-color: #000;
\tcolor: #FFF;
\tdisplay: inline-flex;
\tjustify-content: center;
\talign-items: center;
\tflex-shrink: 0;
}

details[open] summary {
\tbackground-color: #eee;
}

details[open] summary:before {
\tcontent: \"↑\";
}
summary:hover {
\tbackground-color: #eee;
}

a {
\tcolor: inherit;
\tfont-weight: 600;
\ttext-decoration: none;
\tbox-shadow: 0 1px 0 0;
}

a:hover {
\tbox-shadow: 0 3px 0 0;
}

code {
\tfont-family: monospace;
\tfont-weight: 600;
}

.shadow3 {
   box-shadow: 0 3px 10px 0 rgb(0 0 0 / 5%);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
\tpadding: 15px;
\tmargin-bottom: 15px;
}
.detail-identified-course{
\tborder: none; box-shadow: none;
}
.detail-identified-course:hover{
\tbackground-color: #f5f5f5;
}


.btn-social,
.btn-social:visited,
.btn-social:focus,
.btn-social:hover,
.btn-social:active {
  color: #ffffff;
  text-decoration: none;
  transition: opacity .15s ease-in-out;
}

.btn-social:hover,
.btn-social:active {
  opacity: .75;
}

.btn-fb {
  background-color: #3b5998;
}

/* Outline Social Share Buttons */

.btn-social-outline {
background-color: transparent;
background-image: none;
text-decoration: none;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

.btn-fb-outline {
color: #3b5998;
border-color: #3b5998;
}

.btn-fb-outline:hover,
.btn-fb-outline:active {
color: #ffffff;
background-color: #3b5998;
}

.btn-tw-outline {
color: #1da1f2;
border-color: #1da1f2;
}

.btn-tw-outline:hover,
.btn-tw-outline:active {
color: #ffffff;
background-color: #1da1f2;
}

.btn-in-outline {
color: #0077b5;
border-color: #0077b5;
}

.btn-in-outline:hover,
.btn-in-outline:active {
color: #ffffff;
background-color: #0077b5;
}

.btn-gp-outline {
color: #db4437;
border-color: #db4437;
}

.btn-gp-outline:hover,
.btn-gp-outline:active {
color: #ffffff;
background-color: #db4437;
}

.btn-rd-outline {
color: #ff4500;
border-color: #ff4500;
}

.btn-rd-outline:hover,
.btn-rd-outline:active {
color: #ffffff;
background-color: #ff4500;
}

.btn-hn-outline {
color: #ff4000;
border-color: #ff4000;
}

.btn-hn-outline:hover,
.btn-hn-outline:active {
color: #ffffff;
background-color: #ff4000;
}


.share-button {
position: relative;
display: inline-block;
padding: 3px 10px 4px 8px;
margin: 10px;
color: #fff;
background-color: #333;
border-radius: 2px;
box-shadow: 0 1px 1px rgba(0, 0, 0, 0.35);
text-decoration: none;
font-family: \"Open Sans\", Helvetica, Arial, sans-serif;
font-weight: 600;
font-size: 15px;
min-width: 80px;
}

.share-button:hover {
color: #fff;
background-color: #4f4f4f;
}

.share-button:active {
top: 1px;
box-shadow: 0 0 1px rgba(0, 0, 0, 0.25);
}

.share-button svg {
fill: #ffffff;
width: 19px;
height: 19px;
margin-right: 5px;
}

.share-button.facebook {
background-color: #4A66B7;
}

.share-button.facebook:hover {
background-color: #556fbb;
}

.share-button.twitter {
background-color: #1B95E0;
}

.share-button.twitter:hover {
background-color: #269ce5;
}

.share-button.pinterest {
background-color: #c92228;
}

.share-button.pinterest:hover {
background-color: #cf4146;
}

.share-button.linkedin {
background-color: #0077B5;
}

.share-button.linkedin:hover {
background-color: #1e84b9;
}

.share-button.reddit {
background-color: #5f99cf;
}

.share-button.reddit:hover {
background-color: #75a6d4;
}

.share-button.tumblr {
background-color: #35465c;
}

.share-button.tumblr:hover {
background-color: #455166;
}

.share-button.hacker-news {
background-color: #ff6600;
}

.share-button.hacker-news:hover{
background-color: #ff7515;
}

.share-button.designer-news{
background-color: #2d72d9;
}

.share-button.designer-news:hover {
background-color: #3d82e9;
}

.share-button.google-plus {
background-color: #fefefe;
color: #333;
}

.share-button.google-plus:hover {
background-color: #f6f6f6;
color: #333;
}

.share-button.google-plus svg {
fill: #DB4437;
}

/* Debut Slick slide */
.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
  /* Fin Slick slide */

  /* Fin Testimonial slide */
.testimonials-clean {
  color:#313437;
  background-color:#fff;
}

.testimonials-clean p {
  color: #fff;
}

.testimonials-clean h2 {
  font-weight:bold;
  color:inherit;
}

@media (max-width:767px) {
  .testimonials-clean h2 {
    font-size:24px;
  }
}


.testimonials-clean .people {
  padding: 0px 0 20px;
}

.testimonials-clean .item {
  margin-bottom:32px;
}

@media (min-width:768px) {
  .testimonials-clean .item {
    height:220px;
  }
}

.testimonials-clean .item .box {
  padding:30px;
  background-color:#a0bb2e;;
  position:relative;
  border-radius: 7px;
  
}

.testimonials-clean .item .box:after {
  content:'';
  position:absolute;
  left:30px;
  bottom:-24px;
  width:0;
  height:0;
  border:15px solid transparent;
  border-width:12px 15px;
  border-top-color:#a0bb2e;
}

.testimonials-clean .item .author {
  margin-top:28px;
  padding-left:25px;
}

.testimonials-clean .item .author p{
  margin-top: 0px;
}

.testimonials-clean .item .name {
  font-weight:bold;
  margin-bottom:2px;
  color:inherit;
}

.testimonials-clean .item .title {
  font-size:13px;
  color:#9da9ae;
}

.testimonials-clean .item .description {
  font-size:15px;
  margin-bottom:0;
}

.testimonials-clean .item img {
  max-width: 50px;
  float: left;
  margin-right: 12px;
  margin-top: 5px;
}

/* Fin Testimonial slide */

.rating-row ul{list-style:none;display:flex; padding:0 ; margin:0;}
.rating-row ul li{color:#96d3cf;font-size:20px;margin:0px 3px;}

.comparison {
  max-width:100%;
  margin:0 auto;
  font:13px/1.4 \"Helvetica Neue\",Helvetica,Arial,sans-serif;
  text-align:center;
  padding:0px;
}

.comparison table {
  width:100%;
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: fixed;
  border-bottom:1px solid #CCC;
}

.comparison td, .comparison th {
  border-right:1px solid #CCC;
  empty-cells: show;
  padding:10px;
}

.compare-heading {
  font-size:18px;
  font-weight:bold !important;
  border-bottom:0 !important;
  padding-top:10px !important;
  text-align: center;
}

.comparison tbody tr:nth-child(odd) {
  display:none;
}

.comparison .compare-row {
  background:#fff;
  border-top: 1px solid #ddd;
}

.comparison .tickblue {
  color:#0078C1;
}

.comparison .tickgreen {
  color:#009E2C;
}

.comparison th {
  font-weight:normal;
  padding:0;
  border-bottom:1px solid #CCC;
}

.comparison tr td:first-child {
  text-align:left;
}
  
.comparison .qbse, .comparison .qbo, .comparison .tl {
  color:#FFF;
  padding:10px;
  font-size:13px;
  border-right:1px solid #CCC;
  border-bottom:0;
}

.comparison .tl2 {
  border-right:0;
}

.comparison .qbse {
  background:#0078C1;
  border-top-left-radius: 3px;
  border-left:0px;
}

.comparison .qbo {
  background:#009E2C;
  border-top-right-radius: 3px;
  border-right:0px;
}

.comparison .price-info {
  padding:5px 15px 15px 15px;
  text-align: center!important;
}

.comparison .price-was {
  color:#999;
  text-decoration: line-through;
}

.comparison .price-now, .comparison .price-now span {
  color:#ff5406;
}

.comparison .price-now span {
  font-size:32px;
}

.comparison .price-small {
    font-size: 18px !important;
    position: relative;
    top: -11px;
    left: 2px;
}

.comparison .price-buy {
  background:#ff5406;
  padding:10px 20px;
  font-size:12px;
  display:inline-block;
  color:#FFF;
  text-decoration:none;
  border-radius:3px;
  text-transform:uppercase;
  margin:5px 0 10px 0;
}

.comparison .price-try {
  font-size:12px;
}

.comparison .price-try a {
  color:#202020;
}

@media (max-width: 767px) {
  .comparison td:first-child, .comparison th:first-child {
    display: none;
  }
  .comparison tbody tr:nth-child(odd) {
    display:table-row;
    background:#F7F7F7;
  }
  .comparison .row {
    background:#FFF;
  }
  .comparison td, .comparison th {
    border:1px solid #CCC;
  }
  .price-info {
  border-top:0 !important;
  
}
  
}

@media (max-width: 639px){
  .comparison .price-buy {
    padding:5px 10px;
  }
  .comparison td, .comparison th {
    padding:10px 5px;
  }
  .comparison .hide-mobile {
    display:none;
  }
  .comparison .price-now span {
  font-size:16px;
}

.comparison .price-small {
    font-size: 16px !important;
    top: 0;
    left: 0;
}
  .comparison .qbse, .comparison .qbo {
    font-size:12px;
    padding:10px 5px;
  }
  .comparison .price-buy {
    margin-top:10px;
  }
  .compare-heading {
  font-size:13px;
}
}
.card-select-plan{
  margin: -10px; margin-bottom: 20px; padding: 15px 0px; background: #36ac91;
}
.compare-row:hover{
background: #DDD; color: #333;
cursor: pointer;
}
.compare-row2:hover{
background: #DDD; color: #333;
cursor: pointer;
}

blockquote .apostrof+p{margin-top:0}blockquote+p{margin-top:50px}.skewed-bg{position:absolute;bottom:-35%;left:0%;width:100%;height:300px;-webkit-transform:skew(0deg,-4deg);transform:skew(0deg,-4deg);transform-origin:top left;-webkit-transform:top left;-moz-transform:top left;-o-transform:top left;-ms-transform:top left;background-color:#fff}
.skewed-bg-top{bottom:auto;top:0}.skewed-bg-curbed{background-color:#fff;bottom:0;box-shadow:0 40px 40px 3px rgba(0,0,0,.05);border-bottom-right-radius:150px}.purple-text,.purple-text:hover,.purple-text:focus{color:#9c27b0}.green-text,.green-text:hover,.green-text:focus{color:#56b68b}.red-text{color:#e74c3c}.gray-text{color:#898989}.site-header{position:absolute;top:0;padding:29px 50px 0;background-color:transparent;width:100%;z-index:3}.site-navigation{padding:0}.site-navigation.navbar-light .navbar-nav .nav-link{margin-top:15px;font-size:15px;line-height:20px;padding:0 5px 15px;color:#fff;border-bottom:2px solid transparent}.nav-link.dropdown-toggle:after{content:none}
.nav-item{position:relative}.nav-item .dropdown-menu{padding:5px 0;display:block;margin-top:-3px;left:50%;min-width:190px;transform:translateX(-50%);-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-o-transform:translateX(-50%);-ms-transform:translateX(-50%);opacity:0;visibility:hidden;transition:all .25s ease-in-out;-moz-transition:all .25s ease-in-out;-webkit-transition:all .25s ease-in-out;-o-transition:all .25s ease-in-out;-ms-transition:all .25s ease-in-out}.nav-link.dropdown-toggle:hover+.dropdown-menu,.nav-item .dropdown-menu:hover{opacity:1;visibility:visible}.nav-item .dropdown-menu:before{content:'';position:absolute;top:-10px;left:50%;width:0;height:0;border-style:solid;border-width:0 10px 10px;border-color:transparent transparent #fff transparent;transform:translateX(-50%);-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-o-transform:translateX(-50%);-ms-transform:translateX(-50%);transition:all .25s ease-in-out;-moz-transition:all .25s ease-in-out;-webkit-transition:all .25s ease-in-out;-o-transition:all .25s ease-in-out;-ms-transition:all .25s ease-in-out}.navbar-brand{padding:0}.nav-item .dropdown-menu a{padding:15px 40px 15px 15px;font-size:14px}.nav-item .dropdown-menu a+a{border-top:1px solid #ebebeb}
.nav-item .dropdown-menu a:hover{background:0 0;color:#56b68b}.site-navigation.navbar-light .navbar-nav li+li{margin-left:20px}.site-navigation.navbar-light .navbar-nav .nav-btn-item{margin-left:25px;margin-top:8px}.site-navigation.navbar-light .navbar-nav .nav-btn-item+.nav-btn-item{margin-left:10px;margin-top:8px}.site-navigation.navbar-light .navbar-nav .nav-link:hover,.site-navigation.navbar-light .navbar-nav .nav-link:focus,.site-navigation.navbar-light .navbar-nav .active .nav-link{border-bottom-color:#fff}.site-navigation.navbar-light .navbar-nav .nav-link.dropdown-toggle:hover,.site-navigation.navbar-light .navbar-nav .nav-link.dropdown-toggle:focus{border-bottom-color:transparent}.hero{position:relative;height:716px;width:100%}.hero .container{padding-top:175px}.hero h1{margin-bottom:0;font-family:lato-bold,sans-serif;font-size:34px;color:#fff}.hero p{max-width:420px;margin:20px 0 0;font-family:lato-regular,sans-serif;font-size:17px;color:rgba(255,255,255,.6);line-height:30px;padding-top:5px}.hero-btn,.hero-sponsored{margin-top:25px}.hero .btn+.btn{margin-left:15px}.hero-sponsored p{position:absolute;margin:0;font-size:20px}.hero-sponsored ul{padding-left:130px;margin-bottom:0}.hero-sponsored img{height:40px}.hero-sponsored ul li,.list-inline-item:not(:last-child){margin:0 0 0 20px}.hero-content-img img{position:absolute;top:35px;z-index:2;zoom:.8}.hero.hero-center .container{padding-top:190px;text-align:center}.hero.hero-center p{max-width:700px;margin:30px auto 0}.hero.hero-center .hero-content-img{margin-top:40px}.hero.hero-center .hero-content-img img{position:relative;top:0}.site-main{overflow:hidden}.right-in,.left-in,.center-in{z-index:1}section{position:relative}section h2+p{margin-top:27px}section h3+p{margin-top:30px}.section-overlay:after{content:'';opacity:.3;display:block;height:100%;width:150%;box-shadow:0 30px 44px 3px rgba(0,0,0,.05);position:absolute;top:25%;left:40%;border-radius:400px;-webkit-transform:skew(0deg,-4deg);transform:skew(0deg,-4deg);pointer-events:none}.section-welcome{position:relative;padding:115px 0 25px;z-index:1}.section-welcome h2{margin-top:0}
.section-welcome .btn{margin-top:20px;margin-bottom:8px}.section-welcome img{position:absolute}
.section-layouts{padding:132px 0 80px}.section-layouts,.section-layouts .skewed-bg{background-color:#f9fbff}
.section-layouts .skewed-bg{bottom:auto;top:15px}.btn-demos{margin-top:20px}.btn-demos .btn{padding:15px}
.carousel-controls{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:relative;margin-top:40px;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.carousel-indicators{margin:0 60px;margin-bottom:0;position:relative;bottom:0}.carousel-indicators li{margin:4px 10px 0;height:12px;width:12px;max-width:12px;border:1px solid #c2c2c2;border-radius:50%}
.carousel-indicators li.active{border-color:#555;background-color:#555}.carousel-control-next,.carousel-control-prev{position:relative;width:20px;height:20px}
.carousel-control-next span,.carousel-control-prev span{opacity:.6}.carousel-control-prev span{-moz-transform:scaleX(-1);-o-transform:scaleX(-1);-webkit-transform:scaleX(-1);transform:scaleX(-1);filter:FlipH;-ms-filter:\"FlipH\"}.carousel-control-next span:hover,.carousel-control-next span:focus,.carousel-control-prev span:hover,.carousel-control-prev span:focus{opacity:1}.carousel-item .col-md-6{padding-bottom:20px}.carousel-item img{position:relative;left:40px;box-shadow:0 2px 5px 0 rgba(0,0,0,.3);border-radius:5px}.section-features{padding:80px 0 0}.section-features .text-center p{margin-top:30px;line-height:20px}.feature{position:relative;padding:120px 0}.feature-info{margin-top:25px}.feature-icon{height:80px;width:80px;line-height:80px;text-align:center;border-radius:20px;background-color:rgba(100,215,116,.2);float:left}.feature-title{display:block;overflow:hidden}.feature-icon div{margin-top:20px}.feature-img{position:absolute;right:0;border-radius:5px;z-index:99;box-shadow:0 2px 20px 0 rgba(0,0,0,.2);zoom:.85}.feature-img-inverted{right:auto;left:15px}
.feature-info h3{font-size:27px;display:block;float:left;margin:0;margin-left:20px;margin-top:21px}
.feature-info p,.feature-info .btn{margin-top:30px}.feature .skewed-bg{z-index:-1}.messaging{margin-top:60px;padding-top:0}
.quick-setup .skewed-bg{top:100%;bottom:auto;background:#619a6e}.user-targeting{background:#619a6e}.user-targeting.section-overlay:after{background-color:rgba(255,255,255,.1);height:75%;top:60%;left:20%}.user-targeting .skewed-bg{background:#619a6e;bottom:-22%}.user-targeting h3{color:#fff}.user-targeting p{color:rgba(255,255,255,.6)}.data-tracking{margin-top:50px;padding-bottom:60px}.data-tracking .skewed-bg{bottom:-56%;background-color:#f9fbff}
.footer-offers{width:80%;margin:auto;margin-top:65px}.footer-about{zoom:.9}.site-footer{padding:50px 0 35px;position:relative;background-color:#333}
.site-footer .skewed-bg{bottom:auto;top:0}.offer{position:relative;height:164px;width:100%;padding:38px 45px 50px;background-color:#fff;box-shadow:0 2px 10px 0 rgba(0,0,0,.1);border-radius:5px;text-align:left;border:1px solid #ebebeb}.offer h3{font-family:lato-bold,sans-serif;font-size:22px;line-height:22px;text-transform:uppercase}.offer h3 a:hover{text-decoration:underline}.offer h3 span{margin-left:20px}.offer h3 span div{vertical-align:middle;position:relative;bottom:2px}.offer p{margin-top:20px}.offer-city{overflow:hidden}.offer-city:after{content:'';position:absolute;left:25px;bottom:-75px;width:140%;height:100%;display:block;opacity:.03}.footer-ready{padding:110px 0 0}.footer-ready h3{font-family:lato-regular,sans-serif;font-size:34px;line-height:34px;color:#fff}.footer-ready h3+p{color:#fff;line-height:20px;margin-top:25px}.footer-ready .col-sm-8{text-align:right}.footer-ready .btn{font-family:lato-regular,sans-serif;position:relative}.footer-ready .btn-icon{margin-left:10px;padding-left:80px;box-shadow:0 2px 10px 0 rgba(0,0,0,.4)}.footer-ready .btn span{position:absolute;left:0;top:0;line-height:52px;width:60px;background:#448f6d;text-align:center;border-radius:5px 0 0 5px}.footer-ready .btn span div{vertical-align:middle;position:relative;bottom:2px}.footer-links{padding-top:47px}.footer-links ul{margin-bottom:0}.footer-links p{margin-top:35px;color:#fff;max-width:320px}.footer-links .list-unstyled li a{color:rgba(255,255,255,.8);font-size:14px}
.footer-links .list-unstyled li:first-child{font-family:lato-regular,sans-serif;font-size:20px;line-height:40px;text-transform:uppercase;color:#fff}
.footer-links .list-unstyled li+li{margin-top:15px}.footer-links .list-unstyled li+li+li{margin-top:5px}

.sidebarWithImages-image-wrapper.-is-visible{opacity:1}.sidebarWithImages-image{margin-bottom:32px}@media (min-width:60em) and (max-width:79.9375em){.sidebarWithImages-image{max-width:600px}}.sidebarWithImages-image.-screenshot{box-shadow:0 11px 12px 0 rgba(36,50,66,.12)}.sidebarWithImages-image-caption{margin-left:auto;margin-right:auto;max-width:600px;text-align:center}.signupCTA{position:relative;z-index:500}.signupCTA.-bg-gray{background-color:#f6f8f9}@media (min-width:60em){.signupCTA.-bg-slanted:after{content:\"\";height:100%;overflow:hidden;position:absolute;top:0;transform:skewY(-5deg);transform-origin:0;width:100%;z-index:-1;-webkit-backface-visibility:hidden;background-color:#f6f8f9;top:160px}}@media (min-width:60em){.signupCTA.-bg-timeline{background-size:cover}}@media (min-width:60em){.signupCTA.-bg-timeline .signupCTA-text{padding-bottom:240px;padding-top:240px}}.signupCTA-text{padding-bottom:80px;padding-top:80px;text-align:center}@media (min-width:48em){.signupCTA-text{padding-bottom:160px;padding-top:160px}}.signupForm.-center{display:block;text-align:center}@media (min-width:48em){.signupForm-input{margin-right:16px;max-width:300px}}@media (max-width:47.9375em){.signupForm-submit{margin-top:16px;width:100%}}.signupForm-mobile-buttons{text-align:center}.signupForm-mobile-button{display:block;margin-left:auto;margin-right:auto;text-align:center;width:100%}@media (min-width:48em){.signupForm-mobile-button{margin-top:32px;max-width:200px}}.signupForm-mobile-button:hover{border-bottom:none}.signupForm-mobile-button img{width:50%}.signupForm-email{width:100%}@media (min-width:48em){.signupForm-email{margin-right:32px;width:250px}}.simpleHeadline{padding-bottom:96px;padding-top:96px}.simpleHeadline-text{box-sizing:border-box;flex:0 1 auto;position:relative}@media (min-width:60em){.simpleHeadline-text{flex-basis:50%;max-width:50%;padding-left:16px;padding-right:16px}}.simpleHeadline-text.-no-gutters{padding-left:0;padding-right:0}@media (min-width:60em){.simpleHeadline-text{margin-left:25%}}.singlevideo{padding-bottom:80px;padding-top:80px}@media (min-width:48em){.singlevideo{padding-bottom:160px;padding-top:160px}}.singlevideo-video-wrapper{position:relative;padding-bottom:56.25%;height:0;overflow:hidden}.singlevideo-video-wrapper iframe{position:absolute;top:0;left:0;width:100%;height:100%}.siteFooter{background-color:#161d28;display:none;font-size:14px}@media (min-width:60em){.siteFooter{display:block}}@media print{.siteFooter{display:none!important}}.siteFooter.-mini{display:block;padding-bottom:16px;padding-top:16px;text-align:center}@media (min-width:60em){.siteFooter.-mini{display:none}}.siteFooter li{list-style-type:none}.siteFooter a.-white{font-weight:400}.siteFooter a.-white:hover{border-bottom:2px solid #fff}.siteFooter-main-wrapper{background-color:#161d28;padding-bottom:80px;padding-top:80px}.siteFooter-secondary-wrapper{background-color:#222a36;color:#fff;padding-bottom:32px;padding-top:32px}.siteFooter-links{box-sizing:border-box;display:flex;flex:0 1 auto;flex-direction:row;flex-wrap:wrap;margin-left:-16px;margin-right:-16px;letter-spacing:.5px}.siteFooter-links.-reverse{flex-direction:row-reverse}.siteFooter-links.-no-gutters{margin-left:0;margin-right:0}.siteFooter-title{color:#9ca6af;font-weight:500;margin-bottom:32px}.siteFooter-item{hyphens:auto;margin-bottom:0}.siteFooter-item:not(:last-child){margin-bottom:16px}.siteFooter-item a{border-bottom:none}.siteFooter-item a:hover{border-bottom:2px solid #fff}.siteFooter-icon svg{height:24px;width:24px}.siteFooter-social{border-bottom:none;font-size:1.375rem;opacity:.6;transition:opacity 225ms}.siteFooter-social:hover{border-bottom:none;opacity:1}.siteFooter-social:not(:last-of-type){margin-right:16px}.siteFooter-mobile-button{display:block}.siteFooter-mobile-button:hover{border-bottom:none}.siteFooter-mobile-button img{height:40px;opacity:.6;transition:opacity 225ms}.siteFooter-mobile-button img:hover{opacity:1}.siteFooter-logo{line-height:1}.siteHeader{justify-content:space-between;transition:padding 225ms,box-shadow 225ms,background-color .3s;width:100%;z-index:900}@media (max-width:59.9375em){.siteHeader{background-color:#fff;box-shadow:0 1px 2px 0 rgba(36,50,66,.15)}}@media (min-width:60em){.siteHeader{position:fixed}}.siteHeader.-is-scrolling{background-color:#fff;box-shadow:0 1px 2px 0 rgba(36,50,66,.15)}.siteHeader.-mobile-nav-active{min-height:100%}.siteHeader.-bg-gray{background-color:#222a36}.siteHeader.-bg-coral{background-color:#ff5163}.siteHeader-row{box-sizing:border-box;display:flex;flex:0 1 auto;flex-direction:row;flex-wrap:wrap;margin-left:0;margin-right:0;align-items:center;font-weight:500;height:56px;padding-left:16px;padding-right:16px;position:relative}.siteHeader-row.-reverse{flex-direction:row-reverse}.siteHeader-row.-no-gutters{margin-left:0;margin-right:0}.siteHeader-logo-wrapper{box-sizing:border-box;flex:0 1 auto;position:relative}@media (min-width:48em){.siteHeader-logo-wrapper{flex-basis:16.66667%;max-width:16.66667%;padding-left:0;padding-right:0}}.siteHeader-logo-wrapper.-no-gutters{padding-left:0;padding-right:0}.siteHeader-logo{background:url('../images/logo.png') no-repeat transparent 50%;background-size:contain;display:block;height:40px;width:112px}

</style>


<script src=\"";
        // line 5031
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/core.min.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 5032
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/notify/themes/alertify.core.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 5033
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/notify/themes/alertify.default.css"), "html", null, true);
        echo "\" id=\"toggleCSS\" />
<script src=\"";
        // line 5034
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/onvisible.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5035
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/notify/lib/alertify.min.js"), "html", null, true);
        echo "\"></script>

<script>
\tfunction resetNotif(){
\t\t\$(\"#toggleCSS\").attr(\"href\", \"";
        // line 5039
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/notify/themes/alertify.default.css"), "html", null, true);
        echo "\");
\t\talertify.set({
\t\t\tlabels : {
\t\t\t\tok     : \"OK\",
\t\t\t\tcancel : \"Cancel\"
\t\t\t},
\t\t\tdelay : 5000,
\t\t\tbuttonReverse : false,
\t\t\tbuttonFocus   : \"ok\"
\t\t});
\t}
</script>
\t";
        // line 5051
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5054
        echo "</head> 

<body style=\"width: 100%; overflow-x: hidden!important;\">
<div id=\"top-sidebar-popper\">
\t<!-- div class=\"spinner\"></div  -->
\t<div id=\"preloader-active\">
\t<div class=\"preloader2 d-flex align-items-center justify-content-center\">
\t\t<div class=\"preloader-inner position-relative\">
\t\t\t<div class=\"preloader-circle\"></div>
\t\t\t<div class=\"preloader-img pere-text\">
\t\t\t\t<img src=\"";
        // line 5064
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/afh-logo2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t<span id=\"loading-msg\"></span>
</div>

<div class=\"preloader\" style=\"display: none!important;\">
  <!--div class=\"preloader-body\">
    <div class=\"cssload-container\"><span></span><span></span><span></span><span></span>
    </div>
  </div -->
</div>

  ";
        // line 5079
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GeneralTemplateBundle:Menu:menubare", array("position" => "home")));
        echo "
  
  ";
        // line 5081
        $this->displayBlock('body', $context, $blocks);
        // line 5084
        echo "
  ";
        // line 5085
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GeneralTemplateBundle:Menu:footer", array("position" => "home")));
        echo "

  ";
        // line 5087
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GeneralTemplateBundle:Menu:menubareright", array("position" => "home")));
        echo "



<aside>
  <div class=\"outer-close toggle-overlay\">
    
    <a class=\"close-nav text-center open-scroll-bar-body\" style=\"color: #333; display: inline-block; height: 40px; width: 40px; border-radius: 20px; padding-top: 10px;\"><i class=\"fa fa-arrow-left\"></i></a> 
    
    <div style=\"position: fixed; z-index: 3; bottom: 0px; width: 100%; left: 0px; background: #fff; padding: 7px 10px; border-top: 1px solid #ddd;\">
      <div style=\"font-size: 12px;\">© 2014 - ";
        // line 5097
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
        echo "</div>
    </div>

  </div>
  
  <div class=\"row content-article-tech\" style=\"height: 100%!important; margin-top: 0px;\">
\t
  </div>
</aside>

<div class=\"content-alert-action-hosting-user\" value=\"0\" name=\"0\" style=\"display: none;\"></div>
<div class=\"panel-result-action-hosting-user\" style=\"display: none; position: fixed; z-index: 9999000; width: 100%; text-align: center; top: 40%;\">
\t<span class=\"img-loader-panel\" style=\"display: none;\">
    <span style=\"display: inline-block; width: 80px; height: 80px; background: #fff; text-align: center; padding-top: 25px;\">
      <img src=\"";
        // line 5111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/loader.gif"), "html", null, true);
        echo "\" alt=\"Attente\" style=\"height: 30px; width: 30px;\"/>
    </span>
\t</span>
</div>

<script src=\"";
        // line 5116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/script.js"), "html", null, true);
        echo "\"></script>
    <!--coded by Houdini-->

";
        // line 5119
        $this->displayBlock('srcjavascript', $context, $blocks);
        // line 5122
        echo "
<script type=\"text/javascript\">
\$(function(){\t
";
        // line 5125
        $this->displayBlock('javascript', $context, $blocks);
        // line 5128
        echo "});


var activator = \$('.activator');
var navBg = \$('#fade-bg');

activator.on('click', function(){
\t\$(this).toggleClass('active');
\t\$('#activate-menu').toggleClass('visible');
\tnavBg.fadeToggle();
});


navBg.on('click', function(){
\t\$('#activate-menu').removeClass('visible');
\t\$(activator).removeClass('active');
\t\$(this).hide();
});

\$(window).bind('scroll', function(){
\tdimension = 150;
\tif(\$(window).scrollTop() > dimension){
\t\t\$('.my-fixed-nav').show();
\t}else{
\t\t\$('.my-fixed-nav').hide();
\t}
});

var animtail = 0;
\$('.collapse-gigamenu').click(function(){
\topenModalRight();
\t//setTimeout(function(){ openModalRight(); }, 10000);
\tvar param = \$(this).attr(\"value\");

\topenCallBack(param);
});

/*function closeReloadModal()
{
\tresetNotif();
\talertify.confirm(\"Êtes-vous certain de vouloir lancé la livraison de cette campagne ?</br></br>\", function (e) {
\t\tif(e){
\t\t\t\tdocument.location.href= ''+id;
\t\t} else {
\t\t\talertify.success(\"Opération annulée avec succès !\");
\t\t}
\t});
}*/

function openModalRight()
{
\tif(animtail == 0)
\t{
\t\t\$( \"#top-sidebar-popper\" ).animate({ \"top\": \"+=100vh\" }, \"slow\" );
\t\tanimtail = 100;
\t\t\$('#preloader-active').show(\"slow\");
\t\t\$(\".preloader2\").css(\"background-color\", \"transparent\");
\t}else{
\t\t\$( \"#top-sidebar-popper\" ).animate({ \"top\": \"-=100vh\" }, \"slow\" );
\t\tanimtail = 0;
\t\t\$('#preloader-active').hide(\"slow\");
\t\t\$(\".preloader2\").css(\"background-color\", \"#f7f7f7\");
\t}
}

function openCallBack(param)
{
\t\$.ajax({
       url : '";
        // line 5196
        echo $this->env->getExtension('routing')->getPath("produit_service_callback_homepage");
        echo "',
       type : 'POST',
       contentType: 'application/json',
       dataType: 'html',
       data : JSON.stringify( { \"param\": param } ),
       success : function(data, statut){
        //alert(data);
        openModalRight();

        setTimeout(function(){ 
          \$('.content-article-tech').html(data);
          \$('aside').toggleClass('open');
        }, 500);
\t\t\t
       },

       error : function(resultat, statut, error){
         alertify.error(\"Le serveur a rencontré un problème lors du traitement de votre requête !\");
\t\t     openModalRight();
       }
    });
}

\$('.open-scroll-bar-body').click(function(){
\t\$('aside').toggleClass('open');
\t\$('.content-article-tech').html('');
});

(function(){
\tvar loaderText = document.getElementById(\"loading-msg\");
\tvar refreshIntervalId = setInterval(function(){
\t\tloaderText.innerHTML = getLoadingText();
\t}, 2000);

\tfunction getLoadingText(){
\t\tvar strLoadingText;
\t\tvar arrLoadingText = [\"Appel du serveur d'autorisation ...\", \"Appel du serveur d'authentification ...\",\"Mise à jour de la session ..\",\"Redirection en cours ...\", \"Mise à jour du jettons de sécurité ..\"];
\t\tvar rand = Math.floor(Math.random() * arrLoadingText.length);
\t\treturn arrLoadingText[rand];
\t}
})();

\$(window).on('load', function () {
\t\$('#preloader-active').delay(450).fadeOut('slow');
\t\$('body').delay(450).css({
\t'overflow': 'visible'
\t});
});
</script>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-595f8e9fdd98b073\"></script --> 
<!--End of Tawk.to Script-->

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
/*
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
\tvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
\ts1.async=true;
\ts1.src='https://embed.tawk.to/5d5d9fd0eb1a6b0be608ac6a/default';
\ts1.charset='UTF-8';
\ts1.setAttribute('crossorigin','*');
\ts0.parentNode.insertBefore(s1,s0);
})();*/
</script>
<!--End of Tawk.to Script-->
</body>
</html>";
    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
    }

    // line 5051
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5052
        echo "\t
\t";
    }

    // line 5081
    public function block_body($context, array $blocks = array())
    {
        // line 5082
        echo "        
  ";
    }

    // line 5119
    public function block_srcjavascript($context, array $blocks = array())
    {
        // line 5120
        echo "
";
    }

    // line 5125
    public function block_javascript($context, array $blocks = array())
    {
        // line 5126
        echo "
";
    }

    public function getTemplateName()
    {
        return "::layouthome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5401 => 5126,  5398 => 5125,  5393 => 5120,  5390 => 5119,  5385 => 5082,  5382 => 5081,  5377 => 5052,  5374 => 5051,  5368 => 12,  5362 => 9,  5287 => 5196,  5217 => 5128,  5215 => 5125,  5210 => 5122,  5208 => 5119,  5202 => 5116,  5194 => 5111,  5175 => 5097,  5162 => 5087,  5157 => 5085,  5154 => 5084,  5152 => 5081,  5147 => 5079,  5129 => 5064,  5117 => 5054,  5115 => 5051,  5100 => 5039,  5093 => 5035,  5089 => 5034,  5085 => 5033,  5081 => 5032,  5077 => 5031,  60 => 17,  52 => 15,  48 => 14,  43 => 12,  37 => 10,  25 => 1,  2353 => 2191,  2350 => 2190,  2302 => 2145,  2298 => 2144,  2294 => 2143,  2290 => 2142,  2286 => 2141,  2282 => 2140,  2278 => 2139,  2274 => 2138,  2270 => 2137,  2260 => 2130,  2220 => 2093,  2206 => 2082,  2189 => 2068,  2175 => 2057,  2161 => 2046,  2144 => 2032,  2097 => 1988,  2080 => 1974,  2066 => 1963,  2044 => 1944,  1769 => 1672,  1738 => 1644,  1714 => 1623,  1704 => 1616,  1673 => 1588,  1488 => 1406,  438 => 359,  406 => 330,  374 => 301,  349 => 279,  339 => 272,  111 => 47,  94 => 33,  80 => 22,  76 => 20,  73 => 19,  66 => 16,  63 => 15,  56 => 16,  53 => 11,  42 => 5,  38 => 4,  35 => 9,  32 => 2,);
    }
}
