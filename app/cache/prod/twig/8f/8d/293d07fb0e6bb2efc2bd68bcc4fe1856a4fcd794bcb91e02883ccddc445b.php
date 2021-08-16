<?php

/* GeneralTemplateBundle:Menu:menubareright.html.twig */
class __TwigTemplate_8f8d293d07fb0e6bb2efc2bd68bcc4fe1856a4fcd794bcb91e02883ccddc445b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<style>
body {
/* Colors */
\t--color-blue-50: #0a84ff;
\t--color-blue-60: #0060df;
\t--color-blue-70: #003eaa;
\t--color-blue-80: #002275;
\t--color-gray-10: #f9f9fa;
\t--color-gray-20: #ededf0;
\t--color-gray-30: #d7d7db;
\t--color-gray-40: #b1b1b3;
\t--color-gray-50: #737373;
\t--color-gray-60: #4a4a4f;
\t--color-gray-70: #38383d;
\t--color-gray-80: #2a2a2e;
\t--color-gray-90: #0c0c0d;
\t--color-green-70: #058b00;
\t--color-teal-50: #00feff;
\t--color-teal-60: #00c8d7;
\t--color-teal-70: #008ea4;

/* Icons */
\t--icon-context-menu: url(\"chrome://global/skin/icons/more.svg\");
\t--icon-dismiss: url(\"chrome://global/skin/icons/close.svg\");

  --background-color: #F9F9FA;
  --border-primary-color: #B1B1B3;

/* Primary Action */
  --primary-action-default: var(--color-blue-60);
  --primary-action-hover: var(--color-blue-70);
  --primary-action-active: var(--color-blue-80);
  --primary-action-text-color: #fff;

/* Secondary Action */
  --secondary-action-default: var(--color-gray-20);
  --secondary-action-hover: var(--color-gray-30);
  --secondary-action-active: var(--color-gray-40);
  --secondary-action-text-color: var(--color-gray-80);

/* Ghost Action */
\t--ghost-action-hover: var(--color-gray-20);
\t--ghost-action-active: var(--color-gray-30);
\t--ghost-action-text-color: var(--color-gray-80);

/* Forms */
\t--label-text-color: var(--text-secondary);
\t--text-field-border-color: var(--color-gray-30);
\t--text-field-hover-border-color: var(--color-gray-40);
\t--text-field-focus-border-color: var(--color-gray-40);
\t--text-field-bg-color: #fff;
/* Focus */
  --focus-box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(10, 132, 255, 0.5);

/* Cards */
  --rasied-card-bg-color: #FFF;
  --rasied-card-border-radius: 8px;
  --box-shadow-10: 0px 0px 8px 0 rgba(12, 12, 13, 0.05);
  --raised-card-hover: 0 0 0 4px var(--secondary-action-default);
    
  /* Typography */
  --base-font-size: 15px;
  --small-font-size: 13px;
  --base-line-height: 24px;
  
  /* Text Colors */
  --text-primary: var(--color-gray-90);
  --text-secondary: var(--color-gray-50);
}


/* Primary Button */
.btn--primary {
\tbackground-color: var(--primary-action-default);
\tcolor: var(--primary-action-text-color);
\tfill: var(--primary-action-text-color);
\t-moz-context-properties: fill;
}

.btn--primary:hover {
\tbackground-color: var(--primary-action-hover);
}

.btn--primary:active {
\tbackground-color: var(--primary-action-active);
}

.btn--primary:disabled,
.btn--primary.disabled {
\tbackground-color: var(--primary-action-default);
\tcolor: var(--primary-action-text-color);
\tfill: var(--primary-action-text-color);
\t-moz-context-properties: fill;
}

/* Secondary Button */
.btn--secondary {
\tbackground-color: var(--secondary-action-default);
\tcolor: var(--secondary-action-text-color);
\tfill: var(--secondary-action-text-color);
\t-moz-context-properties: fill;
}

.btn--secondary:hover {
\tbackground-color: var(--secondary-action-hover);
}

.btn--secondary:active {
\tbackground-color: var(--secondary-action-active);
}

.btn--secondary:disabled,
.btn--secondary.disabled {
\tbackground-color: var(--secondary-action-default);
\tcolor: var(--secondary-action-text-color);
\tfill: var(--secondary-action-text-color);
\t-moz-context-properties: fill;
}

/* Pill Button */
.btn--pill {
\tborder-radius: 16px;
\tline-height: 32px;
\tmin-height: 32px;
\tpadding: 0 16px;
\tvertical-align: middle;
}

.btn--pill-icon-only {
\tbackground-position: 50%;
\tbackground-repeat: no-repeat;
\tbackground-size: 16px;
\twidth: 32px;
}

/* Form Button */
.btn--form {
\tborder-radius: 4px;
\tmin-height: 40px;
\tmin-width: 96px;
\tpadding: 0 8px;
}

/* Ghost Button */
.btn--ghost {
\tbackground-color: transparent;
\tcolor: var(--ghost-action-text-color);
\tfill: var(--ghost-action-text-color);
\t-moz-context-properties: fill;
}

.btn--ghost:hover {
\tbackground-color: var(--ghost-action-hover);
}

.btn--ghost:active {
\tbackground-color: var(--ghost-action-active);
}

.btn--ghost:disabled,
.btn--ghost.disabled {
\tbackground-color: transparent;
\tcolor: var(--ghost-action-text-color);
\tfill: var(--ghost-action-text-color);
\t-moz-context-properties: fill;
}

.section-header {
\tdisplay: flex;
\tmargin-bottom: 12px;
}

.section-header > div {
\tflex-grow: 1;
}

.title-card {
\tcolor: var(--text-secondary);
\tdisplay: inline-block;
\tmargin-right: 12px;
\tfont-family: Quicksand-Bold;
\tfont-size: 14px;
}

.section-header .actions {
\tflex-grow: 0;
}

.section-header .actions .btn {
\tmargin-left: 8px;
}

/* Top Sites */
.top-sites {
\tpadding: 24px 0;
}

.tile-grid {
\tdisplay: grid;
\tgrid-row-gap: 24px;
\tjustify-content: space-between;
\tmargin-bottom: 24px;
}

@media (min-width: 0) {
\t.tile-grid {\t\t
\t\tgrid-template-columns: 82px 82px 82px;
\t}
}

@media (min-width: 540px) {
\t.tile-grid {
\t\tgrid-template-columns: 82px 82px 82px 82px;\t
\t}
}

@media (min-width: 720px) {
\t.tile-grid {
\t\tgrid-template-columns: 82px 82px 82px 82px 82px 82px;
\t}
}

@media (min-width: 1024px) {
\t.tile-grid {
\t\tgrid-template-columns: 82px 82px 82px 82px 82px 82px 82px 82px 82px;
\t}
}

/* Tiles */
.tile {
\theight: 126px;
\twidth: 82px;
}

.tile .card-app {
\theight: 82px;
\tmargin-bottom: 4px;
}

.tile .site-updated-badge {
\tbackground-color: var(--color-teal-60);
\tborder-radius: 100%;
\theight: 24px;
\tposition: absolute;
\tleft: -12px;
\ttop: -12px;
\twidth: 24px;
}

.tile.tile-wide {
\twidth: auto;
}

.tile .title,
.tile .meta {
\ttext-align: center;
}

.suggestions-grid {\t
\tdisplay: grid;
\tgrid-column-gap: 24px;
\tgrid-row-gap: 24px;
}

@media (min-width: 0px) {
\t.suggestions-grid {
\t\tgrid-template-columns: repeat(1, 1fr);
\t}
}

@media (min-width: 760px) {
\t.suggestions-grid {
\t\tgrid-template-columns: repeat(2, 1fr);
\t}
}

@media (min-width: 1024px) {
\t.suggestions-grid {
\t\tgrid-template-columns: repeat(3, 1fr);
\t}
}

/* Pocket Stories */
.pocket-stories {
\tbackground-color: #fff;
\tpadding: 24px 0;
}

.collection {
\tpadding: 24px;
\tmargin: 0 -24px;
}


.collection.sponsored {
/* \tbackground-color: var(--color-gray-10); */
\tborder-radius: 8px;
}

.collection-header {
\tdisplay: flex;
\tmargin: -8px 0 12px;
}

.collection-header .actions {
\tflex-grow: 1;
}

.collection-header .actions .btn {
\tfloat: right;
}


.card-app .context-menu-btn {
\topacity: 0;
\tposition: absolute;
\tright: -16px;
\ttop: -16px;
\ttransform: scale(0.25);
\ttransition-duration: 150ms;
\ttransition-property: transform, opacity;\t
}

/* Cards */
.card-raised {
\tbackground: var(--rasied-card-bg-color);
\tborder-radius: var(--rasied-card-border-radius);
\tborder: 1px inset rgba(12, 12, 13, 0.07);
\tbox-shadow: var(--box-shadow-10);
\ttransition: box-shadow 250ms, transform 150ms;
\tposition: relative;
\tmargin-bottom: 15px;
}

.card-raised:hover {
\tbox-shadow: var(--box-shadow-10), var(--raised-card-hover);\t
}

.card-raised:hover .context-menu-btn {
    opacity: 1;
    transform: scale(1);
    transition-delay: 200ms;
}

.card-raised:hover .title {
\tcolor: var(--primary-action-default);
\ttext-decoration: underline;
\tfont-size: 16px;
}

.card-raised:active {\t
\ttransform: scale(0.97);
}

.card-raised:focus {
\tbox-shadow: var(--box-shadow-10), 0 0 0 3px #fff, 0 0 0 6px rgba(10, 132, 255, 0.5);
}

/*
.card-img {
\tborder: 1px inset rgba(0, 0, 0, 0.15);
}
*/

.card-raised .card-img-top {
\tborder-top-left-radius: var(--rasied-card-border-radius);
\tborder-top-right-radius: var(--rasied-card-border-radius);
}

.card-body {
\tpadding: 12px 16px;
}

.card-footer {
\tpadding: 12px 16px;
}

.tile-wide:hover .card-raised{
\tbackground-color: #99d3ce;
}

</style>

<nav id=\"activate-menu\" style=\"background: #fff;\">
<div style=\"box-shadow: 0px 1px 5px 0px #d4d8de;
padding: 18px 15px; position: absolute; left: 0px; top: 0px; width: 100%;\">

\t<a href=\"#!\" class=\"activator float-right\">
\t\t<span class=\"fa fa-times\"></span>
\t</a>
\t<h3 class=\"help-title\">
\t\t<span class=\"fa fa-th\"></span>
\t\tApplications AFH
\t</h3>
</div>

<header class=\"section-header\" style=\"margin-top: 80px;\">
\t<div class=\"actions\">\t\t\t\t\t\t
\t\t<button aria-haspopup=\"true\" class=\"btn btn--pill btn--pill-icon-only btn--secondary context-menu-btn icon\" title=\"Open menu\" aria-label=\"Open context menu for…\"></button>
\t</div>
</header>

<div class=\"suggestions-grid\">
\t<a href=\"http://market.afhunt.com\" target=\"_blank\" class=\"tile tile-wide\">
\t\t<div class=\"card-app card-raised text-center\">
\t\t\t<button aria-haspopup=\"true\" class=\"btn btn--pill btn--pill-icon-only btn--secondary context-menu-btn icon\" title=\"Open menu\" aria-label=\"Open context menu for…\">
\t\t\t\t<span class=\"fa fa-check\" style=\"display: inline-block; margin-top: -7px; margin-left: -7px;\"></span>
\t\t\t</button>

\t\t\t<img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/lglogomarket.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 70px; max-width: 100%; margin-top: 10px;\">
\t\t</div>
\t\t<div classt=\"text-left\">
\t\t\t<div class=\"title small text-left\">
\t\t\t\t<strong>AFH Market\t</strong>\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"meta small text-left\">
\t\t\t\tE-commerce
\t\t\t</div>
\t\t</div>
\t</a>
\t
\t<a href=\"http://host.afhunt.com\" target=\"_blank\" class=\"tile tile-wide\">
\t\t<div class=\"card-app card-raised text-center\">
\t\t\t<button aria-haspopup=\"true\" class=\"btn btn--pill btn--pill-icon-only btn--secondary context-menu-btn icon\" title=\"Open menu\" aria-label=\"Open context menu for…\">
\t\t\t\t<span class=\"fa fa-check\" style=\"display: inline-block; margin-top: -7px; margin-left: -7px;\"></span>
\t\t\t</button>
\t\t\t<img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-large-host.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 70px; max-width: 100%; margin-top: 10px;\">
\t\t</div>
\t\t<div classt=\"text-left\">
\t\t\t<div class=\"title small text-left\">
\t\t\t\t<strong>AFH Host</strong>\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"meta small text-left\">
\t\t\t\tHébergement web
\t\t\t</div>
\t\t</div>
\t</a>
\t
\t<a href=\"http://factory.afhunt.com\" target=\"_blank\" class=\"tile tile-wide\" style=\"text-decoration: none; box-shadow: none;\">
\t\t<div class=\"card-app card-raised text-center\">
\t\t\t<button aria-haspopup=\"true\" class=\"btn btn--pill btn--pill-icon-only btn--secondary context-menu-btn icon\" title=\"Open menu\" aria-label=\"Open context menu for…\">
\t\t\t\t<span class=\"fa fa-check\" style=\"display: inline-block; margin-top: -7px; margin-left: -7px;\"></span>
\t\t\t</button>
\t\t\t<img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-top.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 50px; max-width: 100%; margin-top: 20px;\">
\t\t</div>
\t\t<div classt=\"text-left\">
\t\t\t<div class=\"title small text-left\">
\t\t\t\t<strong>AFH Factory</strong>\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"meta small text-left\">
\t\t\t\t12+ chantiers d'investissement
\t\t\t</div>
\t\t</div>
\t</a>
</div>


<div class=\"collection sponsored\" style=\"position: static;\">
\t<div class=\"row\">\t\t\t
\t\t";
        // line 461
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_appli"]) ? $context["liste_appli"] : $this->getContext($context, "liste_appli")));
        foreach ($context['_seq'] as $context["_key"] => $context["appli"]) {
            // line 462
            echo "\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"";
            // line 463
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "link"), "html", null, true);
            echo "\" target=\"_blank\" class=\"card-app card-raised\" style=\"width: 100%; display: inline-block; text-decoration: none;\">
\t\t\t\t<button aria-haspopup=\"true\" class=\"btn btn--pill btn--pill-icon-only btn--secondary context-menu-btn icon\" title=\"Open menu\" aria-label=\"Open context menu for…\">
\t\t\t\t\t<span class=\"fa fa-check\" style=\"display: inline-block; margin-top: -7px; margin-left: -7px;\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"rating-row\" style=\"float: right;\">
\t\t\t\t\t\t<ul>    
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t  </div>
\t\t\t\t\t<div class=\"title title-card\" style=\"margin: 0px; padding: 0px;;\">
\t\t\t\t\t\t

\t\t\t\t\t\t<img src=\"";
            // line 480
            if (($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "src") != null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "getwebpath")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/add.png"), "html", null, true);
            }
            echo "\" alt=\"\" style=\"float: left; margin-right: 7px; height: 80px; width: 80px; border-radius: 20px;\">
\t\t\t\t\t\tdécouvrez <strong style=\"color: #333; font-size: 18px;\">";
            // line 481
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "nom"), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t<div class=\"meta\"><i>";
            // line 482
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "souscategorie"), "nom"), "html", null, true);
            echo "</i> </div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<p>";
            // line 485
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "contenu"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "
\t\t
\t</div>

\t<div style=\"box-shadow:0px 0px 70px #888888; padding: 7px; border-radius: 7px; position: absolute; left: 0px; right: 0px; margin-top: 10px;\">
\t\tApplications AFH
\t</div>
</div>


</nav>
<div id=\"fade-bg\"></div>";
    }

    public function getTemplateName()
    {
        return "GeneralTemplateBundle:Menu:menubareright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 490,  535 => 485,  525 => 481,  517 => 480,  494 => 462,  490 => 461,  471 => 445,  451 => 428,  431 => 411,  540 => 278,  529 => 482,  522 => 267,  506 => 265,  501 => 264,  497 => 463,  491 => 259,  484 => 257,  468 => 255,  463 => 254,  459 => 253,  453 => 249,  446 => 247,  430 => 245,  425 => 244,  421 => 243,  409 => 236,  399 => 234,  392 => 230,  388 => 229,  384 => 228,  380 => 227,  357 => 209,  341 => 196,  332 => 190,  323 => 184,  314 => 178,  298 => 165,  290 => 160,  282 => 155,  274 => 150,  259 => 137,  239 => 120,  205 => 88,  198 => 86,  188 => 84,  183 => 83,  177 => 80,  171 => 76,  164 => 74,  154 => 72,  149 => 71,  143 => 68,  137 => 64,  130 => 62,  120 => 60,  115 => 59,  109 => 56,  102 => 52,  98 => 51,  94 => 50,  23 => 3,  162 => 99,  135 => 75,  126 => 69,  117 => 63,  99 => 51,  90 => 49,  81 => 39,  72 => 33,  47 => 16,  40 => 14,  24 => 3,  22 => 2,  19 => 1,  5175 => 4903,  5172 => 4902,  5167 => 4897,  5164 => 4896,  5159 => 4871,  5156 => 4870,  5151 => 4841,  5148 => 4840,  5142 => 12,  5136 => 9,  5061 => 4973,  4991 => 4905,  4989 => 4902,  4984 => 4899,  4982 => 4896,  4976 => 4893,  4963 => 4885,  4951 => 4876,  4946 => 4874,  4943 => 4873,  4941 => 4870,  4936 => 4868,  4918 => 4853,  4906 => 4843,  4904 => 4840,  4889 => 4828,  4883 => 4825,  4879 => 4824,  4875 => 4823,  4871 => 4822,  4867 => 4821,  56 => 33,  48 => 14,  25 => 4,  92 => 24,  87 => 26,  85 => 24,  82 => 23,  79 => 43,  74 => 15,  69 => 41,  67 => 15,  64 => 14,  61 => 13,  55 => 10,  52 => 15,  46 => 6,  43 => 15,  37 => 10,  34 => 2,  1968 => 1853,  1965 => 1852,  1915 => 1805,  1886 => 1779,  1876 => 1772,  1866 => 1765,  1855 => 1757,  1845 => 1750,  1835 => 1743,  1825 => 1736,  1815 => 1729,  1805 => 1722,  1795 => 1715,  435 => 358,  403 => 235,  371 => 300,  346 => 278,  336 => 271,  108 => 57,  91 => 32,  77 => 21,  73 => 42,  70 => 18,  63 => 27,  60 => 17,  53 => 11,  50 => 10,  39 => 4,  35 => 9,  32 => 9,);
    }
}
