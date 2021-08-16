<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_071569d37fee934289c2f775fb51a8bd8ac2d1a8549fd7ec5faeba4df20811c9 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  66 => 25,  62 => 24,  42 => 12,  30 => 5,  26 => 3,  546 => 490,  535 => 485,  525 => 481,  517 => 480,  494 => 462,  490 => 461,  471 => 445,  451 => 428,  431 => 411,  540 => 278,  529 => 482,  522 => 267,  506 => 265,  501 => 264,  497 => 463,  491 => 259,  484 => 257,  468 => 255,  463 => 254,  459 => 253,  453 => 249,  446 => 247,  430 => 245,  425 => 244,  421 => 243,  409 => 236,  399 => 234,  392 => 230,  388 => 229,  384 => 228,  380 => 227,  357 => 209,  341 => 196,  332 => 190,  323 => 184,  314 => 178,  298 => 165,  290 => 160,  282 => 155,  274 => 150,  259 => 137,  239 => 120,  205 => 88,  198 => 86,  188 => 84,  183 => 83,  177 => 80,  171 => 76,  164 => 74,  154 => 72,  149 => 71,  143 => 68,  137 => 64,  130 => 62,  120 => 60,  115 => 59,  109 => 56,  102 => 52,  98 => 51,  94 => 50,  23 => 3,  162 => 99,  135 => 75,  126 => 69,  117 => 63,  99 => 51,  90 => 49,  81 => 39,  72 => 33,  47 => 16,  40 => 14,  24 => 2,  22 => 2,  19 => 1,  5175 => 4903,  5172 => 4902,  5167 => 4897,  5164 => 4896,  5159 => 4871,  5156 => 4870,  5151 => 4841,  5148 => 4840,  5142 => 12,  5136 => 9,  5061 => 4973,  4991 => 4905,  4989 => 4902,  4984 => 4899,  4982 => 4896,  4976 => 4893,  4963 => 4885,  4951 => 4876,  4946 => 4874,  4943 => 4873,  4941 => 4870,  4936 => 4868,  4918 => 4853,  4906 => 4843,  4904 => 4840,  4889 => 4828,  4883 => 4825,  4879 => 4824,  4875 => 4823,  4871 => 4822,  4867 => 4821,  56 => 33,  48 => 14,  25 => 4,  92 => 24,  87 => 26,  85 => 24,  82 => 23,  79 => 29,  74 => 15,  69 => 41,  67 => 15,  64 => 14,  61 => 13,  55 => 10,  52 => 15,  46 => 14,  43 => 15,  37 => 10,  34 => 2,  1968 => 1853,  1965 => 1852,  1915 => 1805,  1886 => 1779,  1876 => 1772,  1866 => 1765,  1855 => 1757,  1845 => 1750,  1835 => 1743,  1825 => 1736,  1815 => 1729,  1805 => 1722,  1795 => 1715,  435 => 358,  403 => 235,  371 => 300,  346 => 278,  336 => 271,  108 => 57,  91 => 35,  77 => 21,  73 => 42,  70 => 26,  63 => 27,  60 => 17,  53 => 11,  50 => 15,  39 => 4,  35 => 9,  32 => 6,);
    }
}
