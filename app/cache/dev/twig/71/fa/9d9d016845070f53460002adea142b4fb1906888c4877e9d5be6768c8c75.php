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
\t\t\t<div class=\"shadow3\">
\t\t\t\t<div class=\"article-detail article-panel\">
\t\t\t\t\t<h2>Le Challenge est grand</h2>
\t\t\t\t\t<h4 style=\"margin-bottom: 20px;\">
\t\t\t\t\t\t<span class=\"mic\" style=\"background: #98d3ce; color: #fff;\">AFHunt Group </span>\test un groupe  d'entreprises innovantes qui vise à opérer une véritable transformation numérique au Cameroun et en Afrique, pour faciliter le traitement des flux d'informations dans des entreprises et des organisations.
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t

\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\t<h4>Pour réussir ce challenge, AFHunt Group travail sans relâche avec une communauté dynamique qui grandi de jour en jour.</h4>
\t\t\t\t<div>Cette communauté se mobilise sur plusieurs plans. <strong><a href=\"\">Sur le plan technoligique</a></strong>, en partageant leurs idées et compétences; <strong><a href=\"\">Sur le plan financié</a></strong> en investissant sur les projets porteurs; 
\t\t\t\t\t<strong><a href=\"\">Sur le plan amicale</a></strong> en partageant nos produits.
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"article-detail article-panel\" style=\"padding: 0px;\">
\t\t\t\t<h2>Notre Equipe</h2>
\t\t\t\t<h4>
\t\t\t\t\tQuelques figures qui font la fierté du groupe
\t\t\t\t</h4>
\t\t\t</div>

\t\t</div>
\t
</div>

</div>
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

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
