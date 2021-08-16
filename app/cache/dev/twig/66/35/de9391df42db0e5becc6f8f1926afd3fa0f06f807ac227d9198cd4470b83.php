<?php

/* UsersUserBundle::layouthome.html.twig */
class __TwigTemplate_6635de9391df42db0e5becc6f8f1926afd3fa0f06f807ac227d9198cd4470b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layouthome.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'userblog_body' => array($this, 'block_userblog_body'),
            'javascript' => array($this, 'block_javascript'),
            'javascripttemplate' => array($this, 'block_javascripttemplate'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layouthome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('userblog_body', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 15
    public function block_userblog_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('javascripttemplate', $context, $blocks);
        // line 26
        echo "
";
    }

    // line 24
    public function block_javascripttemplate($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsersUserBundle::layouthome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 26,  85 => 24,  82 => 23,  79 => 22,  74 => 15,  69 => 18,  67 => 15,  64 => 14,  61 => 13,  55 => 10,  52 => 9,  46 => 6,  43 => 5,  37 => 3,  34 => 2,  1968 => 1853,  1965 => 1852,  1915 => 1805,  1886 => 1779,  1876 => 1772,  1866 => 1765,  1855 => 1757,  1845 => 1750,  1835 => 1743,  1825 => 1736,  1815 => 1729,  1805 => 1722,  1795 => 1715,  435 => 358,  403 => 329,  371 => 300,  346 => 278,  336 => 271,  108 => 46,  91 => 32,  77 => 21,  73 => 19,  70 => 18,  63 => 15,  60 => 14,  53 => 11,  50 => 10,  39 => 4,  35 => 3,  32 => 2,);
    }
}
