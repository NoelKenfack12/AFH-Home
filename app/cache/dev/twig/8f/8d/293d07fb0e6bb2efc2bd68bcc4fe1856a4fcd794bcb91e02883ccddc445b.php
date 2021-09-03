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
\tbody {
\t/* Colors */
\t\t--color-blue-50: #0a84ff;
\t\t--color-blue-60: #0060df;
\t\t--color-blue-70: #003eaa;
\t\t--color-blue-80: #002275;
\t\t--color-gray-10: #f9f9fa;
\t\t--color-gray-20: #ededf0;
\t\t--color-gray-30: #d7d7db;
\t\t--color-gray-40: #b1b1b3;
\t\t--color-gray-50: #737373;
\t\t--color-gray-60: #4a4a4f;
\t\t--color-gray-70: #38383d;
\t\t--color-gray-80: #2a2a2e;
\t\t--color-gray-90: #0c0c0d;
\t\t--color-green-70: #058b00;
\t\t--color-teal-50: #00feff;
\t\t--color-teal-60: #00c8d7;
\t\t--color-teal-70: #008ea4;

\t/* Icons */
\t\t--icon-context-menu: url(\"chrome://global/skin/icons/more.svg\");
\t\t--icon-dismiss: url(\"chrome://global/skin/icons/close.svg\");

\t--background-color: #F9F9FA;
\t--border-primary-color: #B1B1B3;

\t/* Primary Action */
\t--primary-action-default: var(--color-blue-60);
\t--primary-action-hover: var(--color-blue-70);
\t--primary-action-active: var(--color-blue-80);
\t--primary-action-text-color: #fff;

\t/* Secondary Action */
\t--secondary-action-default: var(--color-gray-20);
\t--secondary-action-hover: var(--color-gray-30);
\t--secondary-action-active: var(--color-gray-40);
\t--secondary-action-text-color: var(--color-gray-80);

\t/* Ghost Action */
\t\t--ghost-action-hover: var(--color-gray-20);
\t\t--ghost-action-active: var(--color-gray-30);
\t\t--ghost-action-text-color: var(--color-gray-80);

\t/* Forms */
\t\t--label-text-color: var(--text-secondary);
\t\t--text-field-border-color: var(--color-gray-30);
\t\t--text-field-hover-border-color: var(--color-gray-40);
\t\t--text-field-focus-border-color: var(--color-gray-40);
\t\t--text-field-bg-color: #fff;
\t/* Focus */
\t--focus-box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(10, 132, 255, 0.5);

\t/* Cards */
\t--rasied-card-bg-color: #FFF;
\t--rasied-card-border-radius: 8px;
\t--box-shadow-10: 0px 0px 8px 0 rgba(12, 12, 13, 0.05);
\t--raised-card-hover: 0 0 0 4px var(--secondary-action-default);
\t\t
\t/* Typography */
\t--base-font-size: 15px;
\t--small-font-size: 13px;
\t--base-line-height: 24px;
\t
\t/* Text Colors */
\t--text-primary: var(--color-gray-90);
\t--text-secondary: var(--color-gray-50);
\t}


\t/* Primary Button */
\t.btn--primary {
\t\tbackground-color: var(--primary-action-default);
\t\tcolor: var(--primary-action-text-color);
\t\tfill: var(--primary-action-text-color);
\t\t-moz-context-properties: fill;
\t}

\t.btn--primary:hover {
\t\tbackground-color: var(--primary-action-hover);
\t}

\t.btn--primary:active {
\t\tbackground-color: var(--primary-action-active);
\t}

\t.btn--primary:disabled,
\t.btn--primary.disabled {
\t\tbackground-color: var(--primary-action-default);
\t\tcolor: var(--primary-action-text-color);
\t\tfill: var(--primary-action-text-color);
\t\t-moz-context-properties: fill;
\t}

\t/* Secondary Button */
\t.btn--secondary {
\t\tbackground-color: var(--secondary-action-default);
\t\tcolor: var(--secondary-action-text-color);
\t\tfill: var(--secondary-action-text-color);
\t\t-moz-context-properties: fill;
\t}

\t.btn--secondary:hover {
\t\tbackground-color: var(--secondary-action-hover);
\t}

\t.btn--secondary:active {
\t\tbackground-color: var(--secondary-action-active);
\t}

\t.btn--secondary:disabled,
\t.btn--secondary.disabled {
\t\tbackground-color: var(--secondary-action-default);
\t\tcolor: var(--secondary-action-text-color);
\t\tfill: var(--secondary-action-text-color);
\t\t-moz-context-properties: fill;
\t}

\t/* Pill Button */
\t.btn--pill {
\t\tborder-radius: 16px;
\t\tline-height: 32px;
\t\tmin-height: 32px;
\t\tpadding: 0 16px;
\t\tvertical-align: middle;
\t}

\t.btn--pill-icon-only {
\t\tbackground-position: 50%;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: 16px;
\t\twidth: 32px;
\t}

\t/* Form Button */
\t.btn--form {
\t\tborder-radius: 4px;
\t\tmin-height: 40px;
\t\tmin-width: 96px;
\t\tpadding: 0 8px;
\t}

\t/* Ghost Button */
\t.btn--ghost {
\t\tbackground-color: transparent;
\t\tcolor: var(--ghost-action-text-color);
\t\tfill: var(--ghost-action-text-color);
\t\t-moz-context-properties: fill;
\t}

\t.btn--ghost:hover {
\t\tbackground-color: var(--ghost-action-hover);
\t}

\t.btn--ghost:active {
\t\tbackground-color: var(--ghost-action-active);
\t}

\t.btn--ghost:disabled,
\t.btn--ghost.disabled {
\t\tbackground-color: transparent;
\t\tcolor: var(--ghost-action-text-color);
\t\tfill: var(--ghost-action-text-color);
\t\t-moz-context-properties: fill;
\t}

\t.section-header {
\t\tdisplay: flex;
\t\tmargin-bottom: 12px;
\t}

\t.section-header > div {
\t\tflex-grow: 1;
\t}

\t.title-card {
\t\tcolor: var(--text-secondary);
\t\tdisplay: inline-block;
\t\tmargin-right: 12px;
\t\tfont-family: Quicksand-Bold;
\t\tfont-size: 14px;
\t}

\t.section-header .actions {
\t\tflex-grow: 0;
\t}

\t.section-header .actions .btn {
\t\tmargin-left: 8px;
\t}

\t/* Top Sites */
\t.top-sites {
\t\tpadding: 24px 0;
\t}

\t.tile-grid {
\t\tdisplay: grid;
\t\tgrid-row-gap: 24px;
\t\tjustify-content: space-between;
\t\tmargin-bottom: 24px;
\t}

\t@media (min-width: 0) {
\t\t.tile-grid {\t\t
\t\t\tgrid-template-columns: 82px 82px 82px;
\t\t}
\t}

\t@media (min-width: 540px) {
\t\t.tile-grid {
\t\t\tgrid-template-columns: 82px 82px 82px 82px;\t
\t\t}
\t}

\t@media (min-width: 720px) {
\t\t.tile-grid {
\t\t\tgrid-template-columns: 82px 82px 82px 82px 82px 82px;
\t\t}
\t}

\t@media (min-width: 1024px) {
\t\t.tile-grid {
\t\t\tgrid-template-columns: 82px 82px 82px 82px 82px 82px 82px 82px 82px;
\t\t}
\t}

\t/* Tiles */
\t.tile {
\t\theight: 126px;
\t\twidth: 82px;
\t}

\t.tile .card-app {
\t\theight: 82px;
\t\tmargin-bottom: 4px;
\t}

\t.tile .site-updated-badge {
\t\tbackground-color: var(--color-teal-60);
\t\tborder-radius: 100%;
\t\theight: 24px;
\t\tposition: absolute;
\t\tleft: -12px;
\t\ttop: -12px;
\t\twidth: 24px;
\t}

\t.tile.tile-wide {
\t\twidth: auto;
\t}

\t.tile .title,
\t.tile .meta {
\t\ttext-align: center;
\t}

\t.suggestions-grid {\t
\t\tdisplay: grid;
\t\tgrid-column-gap: 24px;
\t\tgrid-row-gap: 24px;
\t}

\t@media (min-width: 0px) {
\t\t.suggestions-grid {
\t\t\tgrid-template-columns: repeat(1, 1fr);
\t\t}
\t}

\t@media (min-width: 760px) {
\t\t.suggestions-grid {
\t\t\tgrid-template-columns: repeat(2, 1fr);
\t\t}
\t}

\t@media (min-width: 1024px) {
\t\t.suggestions-grid {
\t\t\tgrid-template-columns: repeat(3, 1fr);
\t\t}
\t}

\t/* Pocket Stories */
\t.pocket-stories {
\t\tbackground-color: #fff;
\t\tpadding: 24px 0;
\t}

\t.collection {
\t\tpadding: 24px;
\t\tmargin: 0 -24px;
\t}


\t.collection.sponsored {
\t/* \tbackground-color: var(--color-gray-10); */
\t\tborder-radius: 8px;
\t}

\t.collection-header {
\t\tdisplay: flex;
\t\tmargin: -8px 0 12px;
\t}

\t.collection-header .actions {
\t\tflex-grow: 1;
\t}

\t.collection-header .actions .btn {
\t\tfloat: right;
\t}


\t.card-app .context-menu-btn {
\t\topacity: 0;
\t\tposition: absolute;
\t\tright: -16px;
\t\ttop: -16px;
\t\ttransform: scale(0.25);
\t\ttransition-duration: 150ms;
\t\ttransition-property: transform, opacity;\t
\t}

\t/* Cards */
\t.card-raised {
\t\tbackground: var(--rasied-card-bg-color);
\t\tborder-radius: var(--rasied-card-border-radius);
\t\tborder: 1px inset rgba(12, 12, 13, 0.07);
\t\tbox-shadow: var(--box-shadow-10);
\t\ttransition: box-shadow 250ms, transform 150ms;
\t\tposition: relative;
\t\tmargin-bottom: 15px;
\t}

\t.card-raised:hover {
\t\tbox-shadow: var(--box-shadow-10), var(--raised-card-hover);\t
\t}

\t.card-raised:hover .context-menu-btn {
\t\topacity: 1;
\t\ttransform: scale(1);
\t\ttransition-delay: 200ms;
\t}

\t.card-raised:hover .title {
\t\tcolor: var(--primary-action-default);
\t\ttext-decoration: underline;
\t\tfont-size: 16px;
\t}

\t.card-raised:active {\t
\t\ttransform: scale(0.97);
\t}

\t.card-raised:focus {
\t\tbox-shadow: var(--box-shadow-10), 0 0 0 3px #fff, 0 0 0 6px rgba(10, 132, 255, 0.5);
\t}

\t/*
\t.card-img {
\t\tborder: 1px inset rgba(0, 0, 0, 0.15);
\t}
\t*/

\t.card-raised .card-img-top {
\t\tborder-top-left-radius: var(--rasied-card-border-radius);
\t\tborder-top-right-radius: var(--rasied-card-border-radius);
\t}

\t.card-body {
\t\tpadding: 12px 16px;
\t}

\t.card-footer {
\t\tpadding: 12px 16px;
\t}

\t.tile-wide:hover .card-raised{
\t\tbackground-color: #99d3ce;
\t}

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

\t\t\t\t\t<div class=\"rating-row\" style=\"float: right; margin-bottom: -15px;\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t  <li class=\"\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<span class=\"btn btn-primary\" style=\"text-transform: capitalize; font-family: Raleway-Medium; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
\t\t\t\t\t\ttransition: all 0.3s cubic-bezier(.25,.8,.25,1);\">
\t\t\t\t\t\t\tContinuer <span class=\"fa fa-angle-right\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"title title-card\" style=\"margin: 0px; padding: 0px;;\">
\t\t\t\t\t\t<img src=\"";
            // line 485
            if (($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "src") != null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "getwebpath")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/add.png"), "html", null, true);
            }
            echo "\" alt=\"\" style=\"float: left; margin-right: 7px; height: 80px; width: 80px; border-radius: 20px;\">
\t\t\t\t\t\tdécouvrez <strong style=\"color: #333; font-size: 18px;\">";
            // line 486
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "nom"), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t<div class=\"meta\"><i>";
            // line 487
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "souscategorie"), "nom"), "html", null, true);
            echo "</i> </div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<p style=\"margin-top: 0px;\">";
            // line 490
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
        // line 495
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
        return array (  551 => 495,  540 => 490,  534 => 487,  530 => 486,  522 => 485,  497 => 463,  494 => 462,  490 => 461,  471 => 445,  451 => 428,  431 => 411,  19 => 1,);
    }
}
