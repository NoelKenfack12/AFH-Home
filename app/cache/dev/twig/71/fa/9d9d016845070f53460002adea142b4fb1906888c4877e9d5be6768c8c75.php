<?php

/* ProduitServiceBundle:Service:callbackstatistiquepage.html.twig */
class __TwigTemplate_71fa9d9d016845070f53460002adea142b4fb1906888c4877e9d5be6768c8c75 extends Twig_Template
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



<div class=\"col-md-12\">
  <div class=\"shadow- bg-light1\"style=\"padding: 0px 0px 15px 0px; z-index: 1; position: relative!important; background: #fff;  box-shadow: 0px 1px 5px 0px #d4d8de;\">
\t<!-- div style=\"height: 40px; background: #fff;\"></div -->
\t  <div class=\"container\" style=\"padding-top: 5px;\">
\t\t<h3>Les Statistiques
\t\t\t<span style=\"float: right;\">
\t\t\t\t<a href=\"#!\">
\t\t\t\t\t<span class=\"fa fa-heart\"></span>
\t\t\t\t</a>
\t\t\t</span>
\t\t</h3>
\t  </div>
  </div>
</div>


<section  class=\"silly_scrollbar\" style=\"padding-top: 20px; width: 98%; margin: 0 auto;\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12\">
\t<div class=\"animecourant-panel-popup\" style=\"display: block;\">
\t\t\t
\t</div>
</div>

\t<div class=\"col-sm-12 col-md-12\">
\t\t<div class=\"border-0\" style=\"padding:  0px 0px 50px 0px;\">
\t\t\t<div class=\"shadow3\" style=\"border: 3px solid #9dba3d;\">
\t\t\t\t<div class=\"article-detail article-panel\">
\t\t\t\t\t<h2>Nos indicateurs clés</h2>
\t\t\t\t\t<h4 style=\"margin-bottom: 20px;\">
\t\t\t\t\t\tL'investissement, la ressource humaine compétente sont au cœur de notre croissance indiquée par le trafic progressif que nous enregistrons au quotidien. Nous gardons une attention particulière sur ces indicateurs.
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t


\t\t\t<div class=\"article-detail article-panel\" style=\"padding: 0px;\">
\t\t\t\t<h2>Tout avait commencé en 2013</h2>
\t\t\t\t<h4>
\t\t\t\t\tEt chaqu'année nous prenons une pause pour faire l'état des lieux !
\t\t\t\t</h4>
\t\t\t</div>

\t\t</div>
\t
\t</div>
</div>

<style>
\t.open-stat-current-year{
\t\tbox-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  \t\ttransition: all 0.3s cubic-bezier(.25,.8,.25,1);
\t}
\t.activestatyear{
\t\tbackground: #005dff!important; color: #fff!important;
\t}
\t.desactivestatyear{
\t\tbackground: #fff; cursor: pointer;
\t}
</style>
<link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/carousel/css/style.css"), "html", null, true);
        echo "\"/>
<div class=\"row\" style=\"margin-top: 0px;\">
\t<div class=\"col-md-12\" style=\"padding: 0px 30px;\">
\t<div class=\"resCarousel\" data-items=\"2,2,3,4\" data-slide=\"1\" style=\"padding-left: 0px; padding-right: 0px;\">
\t<div class=\"resCarousel-inner\" style=\"max-height: 150px;\">
\t\t";
        // line 73
        $context["lastyear"] = null;
        // line 74
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_annee"]) ? $context["liste_annee"] : $this->getContext($context, "liste_annee")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 75
            echo "\t\t<div class=\"item open-stat-current-year open-stat-current-year-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "id"), "html", null, true);
            echo "  desactivestatyear ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                $context["lastyear"] = (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee"));
                echo " activestatyear ";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "id"), "html", null, true);
            echo "\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-lg-12 EiProdImg\">
\t\t\t\t<a href=\"#!\"><img src=\"";
            // line 77
            if (($this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "imgservice") != null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "imgservice"), "getwebpath")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/600.jpg"), "html", null, true);
            }
            echo "\" class=\"img-responsive\" style=\"width: 100%; height: 70px;\"/></a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-12 col-lg-12 EiProdName\">
\t\t\t\t<div class=\"EiPName\" style=\"white-space: nowrap;\">
\t\t\t\t\t<strong>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "nom"), "html", null, true);
            echo "</strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"\" style=\"white-space: nowrap;\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "description"), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t</div>
\t<button class=\"btn btn-default leftLst pull-left\" style=\"position: relative; margin-top: -130px; z-index: 1; background: #fff; color: #333;\"><i class=\"fa fa-fw fa-angle-left\"></i></button>
\t<button class=\"btn btn-default rightLst pull-right\" style=\"position: relative; margin-top: -130px; z-index: 1; background: #fff; color: #333;\"><i class=\"fa fa-fw fa-angle-right\"></i></button>
\t</div>
\t</div>
</div>

<div class=\"row content-stat-application-current-year error-manager-catalogue\" value=\"0\" style=\"margin-top: 0px!important; margin-bottom: 35px!important;\">
\t";
        // line 95
        if ((((array_key_exists("lastyear", $context)) ? (_twig_default_filter((isset($context["lastyear"]) ? $context["lastyear"] : $this->getContext($context, "lastyear")), null)) : (null)) != null)) {
            // line 96
            echo "\t\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProduitServiceBundle:Service:applicationstat", array("position" => 0, "anneeid" => $this->getAttribute((isset($context["lastyear"]) ? $context["lastyear"] : $this->getContext($context, "lastyear")), "id"))));
            echo "
\t\t
\t\t<script type=\"text/javascript\">
\t\t\tsetTimeout(function() { uploadSlideCatalogue(";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lastyear"]) ? $context["lastyear"] : $this->getContext($context, "lastyear")), "id"), "html", null, true);
            echo "); }, 500);
\t\t</script>
\t";
        } else {
            // line 102
            echo "\t\t<h2 style=\"text-align: center; margin-top: 20px;\">Aucune Application disponible pour le moment ...</h2>
\t";
        }
        // line 104
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/carousel/js/main.js"), "html", null, true);
        echo "\"></script>

</div>
</section>


<script type=\"text/javascript\">
var bougepop = 1;
var dimensionpop = 200;
function activateelementPop()
{
var visibility = visibleElement('.animecourant-panel-popup');

if(visibility && bougepop == 0){
\tbougepop = 1;
\t\$('.toutleblock-popup').css('position','relative');
\t\$('.toutleblock-popup').css('bottom','0px');
\t\$('.toutleblock-popup').css('margin-bottom','0px');
}
}

function stopelementPop()
{
var visibility = visibleElement('.stop-courant-panel-popup');

if(visibility && bougepop == 1){
\tif(visibleElement('.animecourant-panel-popup') && visibleElement('.stop-courant-panel-popup'))
\t{
\t}else{
\tbougepop = 0;
\t\$('.toutleblock-popup').css('position','fixed');
\t\$('.toutleblock-popup').css('width',dimensionpop+'px');
\t\$('.toutleblock-popup').css('bottom','30px');
\t\$('.toutleblock-popup').css('margin-bottom','0px');
\t}
}
}

function controlScrollPop()
{
\tvar largeur = (\$(window).width());
\tdimensionpop = \$('.toutleblock-popup').width();
\tif (largeur >= 768)
\t{
\t\tif(visibleElement('.animecourant-panel-popup') && visibleElement('.stop-courant-panel-popup'))
\t\t{
\t\t\$('.toutleblock-popup').css('position','fixed');
\t\t\$('.toutleblock-popup').css('width',dimensionpop+'px');
\t\t}else{
\t\twindow.setInterval(function() { stopelementPop(); }, 100);
\t\twindow.setInterval(function() { activateelementPop(); }, 100);
\t\t}
\t\t
\t}
}
controlScrollPop();
</script>
";
    }

    public function getTemplateName()
    {
        return "ProduitServiceBundle:Service:callbackstatistiquepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 106,  192 => 104,  188 => 102,  182 => 99,  175 => 96,  173 => 95,  163 => 87,  145 => 83,  140 => 81,  129 => 77,  116 => 75,  98 => 74,  96 => 73,  88 => 68,  19 => 1,);
    }
}
