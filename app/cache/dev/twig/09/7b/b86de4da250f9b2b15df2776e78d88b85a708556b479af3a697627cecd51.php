<?php

/* GeneralTemplateBundle:Menu:menubare.html.twig */
class __TwigTemplate_097bb86de4da250f9b2b15df2776e78d88b85a708556b479af3a697627cecd51 extends Twig_Template
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
";
        // line 2
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "home")) {
            // line 3
            echo "<div class=\"my-fixed-nav\">
\t<div class=\"container\">
\t\t<a href=\"#!\" class=\"activator menu-toggle float-right btn-navigation\">
\t\t\t<span class=\"fa fa-navicon\" style=\"font-size: 40px;\"></span>
\t\t</a>
\t\t<a href=\"#\">
\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/afh-logo2.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height: 70px;\">
\t\t</a>
\t</div>
</div>
";
        } else {
            // line 14
            echo "<div style=\"height: 60px; background: #fff; padding-left: 40px;\">
<a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("users_user_acces_plateforme");
            echo "\">
<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/logo-lg-afh.png"), "html", null, true);
            echo "\" alt=\"Logo ";
            echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
            echo "\" style=\"with: 150px; height: 60px;\">
</a>
<div class=\"dropdown\" style=\"position: absolute; top: 10px; right: 20px; z-index: 1000!important;\">
\t<a id=\"dropdownMenu-top-1\" data-toggle=\"dropdown\" style=\"color: #333; white-space: nowrap; cursor: pointer;\">
\t\t<i class=\"fa fa-th\"></i> Applications <i class=\"fa fa-angle-down\"></i>
\t</a>
\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu-top-1\" style=\"padding-top: 0px;margin-top: -35px; margin-right: -20px; width: 300px;\">

\t\t<div class=\"row\" style=\"background: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2); \">
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://africexplorer.com/\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoafricexplorer.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH Afrique</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://host.afhunt.com/\" target=\"_blank\"  style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logohosting.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH Host</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://ads.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoadd.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH Adds</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://win.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logowin.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH Win</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://hbill.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logohbill.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH HBill</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://code.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logocode.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH Code</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://mbill.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logombill.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH MBill</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://market.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logomarket.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH Market</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4 col-md-4 text-center item-app\" style=\"height:90px; margin-top: 15px; border-radius: 5px;\">
\t\t\t\t<a href=\"http://liveca.afhunt.com\" target=\"_blank\" style=\"display: block; width: 100%; height: 100%; padding: 7px;\">
\t\t\t\t<img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoliveca-transparnet.png"), "html", null, true);
            echo "\" style=\"width: 60px; height: 60px;\"></br>
\t\t\t\t<strong style=\"white-space: nowrap; font-weight: normal; font-size: 12px;\">AFH LiveCa</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-12 text-center\" style=\"height: 25px;  background: #f2f2f2; margin: 20px 0px -5px 0px;\">
\t\t\t<a href=\"http://afhunt.com/\" target=\"_blank\" style=\"display: inline-block; width: 100%; height: 100%; border-radius: 5px;\">
\t\t\t\tToutes les applications
\t\t\t</a>
\t\t\t</div>
\t\t\t</div>
\t</div>
</div>
</div>

<script type=\"text/javascript\">
\$(function(){\t
\$('.dropdown').hover(function(){
  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
  }, function(){
  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
});
});
</script>
";
        }
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "GeneralTemplateBundle:Menu:menubare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 99,  135 => 75,  126 => 69,  117 => 63,  99 => 51,  90 => 45,  81 => 39,  72 => 33,  47 => 16,  40 => 14,  24 => 3,  22 => 2,  19 => 1,  5175 => 4903,  5172 => 4902,  5167 => 4897,  5164 => 4896,  5159 => 4871,  5156 => 4870,  5151 => 4841,  5148 => 4840,  5142 => 12,  5136 => 9,  5061 => 4973,  4991 => 4905,  4989 => 4902,  4984 => 4899,  4982 => 4896,  4976 => 4893,  4963 => 4885,  4951 => 4876,  4946 => 4874,  4943 => 4873,  4941 => 4870,  4936 => 4868,  4918 => 4853,  4906 => 4843,  4904 => 4840,  4889 => 4828,  4883 => 4825,  4879 => 4824,  4875 => 4823,  4871 => 4822,  4867 => 4821,  56 => 16,  48 => 14,  25 => 1,  92 => 24,  87 => 26,  85 => 24,  82 => 23,  79 => 22,  74 => 15,  69 => 18,  67 => 15,  64 => 14,  61 => 13,  55 => 10,  52 => 15,  46 => 6,  43 => 15,  37 => 10,  34 => 2,  1968 => 1853,  1965 => 1852,  1915 => 1805,  1886 => 1779,  1876 => 1772,  1866 => 1765,  1855 => 1757,  1845 => 1750,  1835 => 1743,  1825 => 1736,  1815 => 1729,  1805 => 1722,  1795 => 1715,  435 => 358,  403 => 329,  371 => 300,  346 => 278,  336 => 271,  108 => 57,  91 => 32,  77 => 21,  73 => 19,  70 => 18,  63 => 27,  60 => 17,  53 => 11,  50 => 10,  39 => 4,  35 => 9,  32 => 9,);
    }
}
