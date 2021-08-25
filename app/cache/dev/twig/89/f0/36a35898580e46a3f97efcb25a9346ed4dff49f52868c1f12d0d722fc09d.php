<?php

/* ProduitServiceBundle:Service:callbackaboutpage.html.twig */
class __TwigTemplate_89f036a35898580e46a3f97efcb25a9346ed4dff49f52868c1f12d0d722fc09d extends Twig_Template
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
\t/* style member component */
.list-members {
  background: #ed6e11;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 15px;
}
.member-info2{
\tbackground: #a0bb2e!important;
\tposition: sticky;
}

.member {
  flex-basis: 50%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.member-image {
  width: 50%;
  height: 100%;
  cursor: pointer;
  overflow: hidden;
  position: relative;
}

.member-image img {
  width: 100%;
  height: 100%;
  transition: 1s;
}

.member-image:hover img {
  transform: scale(1.1);
}

.member-info {
  width: 50%;
  text-align: left;
  padding: 15px;
}

.member-info h3{
  font-size: 22px;
  font-family: Philosopher-Bold;
}

.member-info p {
  margin: 5px 0;
}


/* Membuat segitiga */
.member-image::after {
  content: '';
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-right: 15px solid #ed6e11;
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
}
.member-image2::after {
\tborder-right: 15px solid #a0bb2e!important;
}
.social-teams{
\twhite-space: nowrap!important; min-width: 400px; position: absolute; bottom: -30px; left: 10px; z-index: 10005;
}


/* Merubah posisi member-image dengan member-info */
@media screen and (min-width: 771px) {
  .member:nth-child(4n+3) .member-info,
  .member:nth-child(4n+4) .member-info {
    order: 1;
  }
  .member:nth-child(4n+3) .member-image,
  .member:nth-child(4n+4) .member-image {
    order: 2;
  }

  /* Merubah posisi sigitiga pada baris genap */
  .member:nth-child(4n+3) .member-image::after,
  .member:nth-child(4n+4) .member-image::after {
    left: 0;
    right: auto;
    transform: translateY(-50%) rotateZ(180deg);
  }
}


/* Mobile Styles */
@media screen and (max-width: 770px) {
  .list-members {
    width: 95%;
  }
  .member {
    flex-basis: 100%;
    font-size: 14px;
  }
  .social-link .fa {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .member:nth-child(even) .member-info {
    order: 1;
  }
  .member:nth-child(even) .member-image {
    order: 2;
  }
  
  /* Merubah posisi sigitiga elemen genap */
  .member:nth-child(even) .member-image::after {
    left: 0;
    right: auto;
    transform: translateY(-50%) rotateZ(180deg);
  }
}
</style>

<div class=\"col-md-12\">
  <div class=\"shadow- bg-light1\"style=\"padding: 0px 0px 15px 0px; z-index: 1; position: relative!important; background: #fff;  box-shadow: 0px 1px 5px 0px #d4d8de;\">
\t<!-- div style=\"height: 40px; background: #fff;\"></div -->
\t  <div class=\"container\" style=\"padding-top: 5px;\">
\t\t<h3>À propos de nous
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

\t<div class=\"col-sm-12 col-md-8\">
\t\t<div class=\"border-0\" style=\"padding:  0px 0px 50px 0px;\">
\t\t\t<div class=\"shadow3\" style=\"border: 3px solid #9dba3d; border-radius: 5px;\">
\t\t\t\t<div class=\"article-detail article-panel\">
\t\t\t\t\t<!-- h2>Le Challenge est grand</h2 -->
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

\t\t\t<ul class=\"list-members\">
\t\t\t\t<li class=\"member\">
\t\t\t\t  <div class=\"member-image member-image2\">
\t\t\t\t\t<img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/1.png\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"member-info member-info2\">
\t\t\t\t\t<h3>Noel Kenfack</h3>
\t\t\t\t\t<p>Dev Full-stack polyglotte & CEO</p>
\t\t\t\t\t  <div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>
\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"member\">
\t\t\t\t  <div class=\"member-image member-image2\">
\t\t\t\t\t<img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/2.png\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"member-info member-info2\">
\t\t\t\t\t<h3>Gaiel Azambou</h3>
\t\t\t\t\t<p>Stratège communication</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>

\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"member\">
\t\t\t\t  <div class=\"member-image member-image2\">
\t\t\t\t\t<img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/3.png\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"member-info member-info2\">
\t\t\t\t\t<h3>Ghislain Takam</h3>
\t\t\t\t\t<p>UX/UI & graphic designer</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>

\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"member\">
\t\t\t\t  <div class=\"member-image member-image2\">
\t\t\t\t\t<img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/4.png\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"member-info member-info2\">
\t\t\t\t\t<h3>Mariane Kazé</h3>
\t\t\t\t\t<p>Content Manager</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>

\t\t\t\t  </div>
\t\t\t\t</li>
\t\t\t\t<li class=\"member\">
\t\t\t\t\t<div class=\"member-image member-image2\">
\t\t\t\t\t  <img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/4.png\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-info member-info2\">
\t\t\t\t\t  <h3>Gaetan Nozawo</h3>
\t\t\t\t\t  <p>Stratégique AFH Factory</p>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"member\">
\t\t\t\t\t<div class=\"member-image member-image2\">
\t\t\t\t\t  <img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/4.png\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-info member-info2\">
\t\t\t\t\t  <h3>Guilou Tiaya</h3>
\t\t\t\t\t  <p>Comptabilité & Fiscalité</p>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"member\">
\t\t\t\t\t<div class=\"member-image member-image2\">
\t\t\t\t\t  <img src=\"https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/4.png\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-info member-info2\">
\t\t\t\t\t  <h3>Rodrigue Ayemetio</h3>
\t\t\t\t\t  <p>Affaires juridique</p>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"social-teams\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>

\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"member\" style=\"background: #325ea9;\">
\t\t\t\t\t
\t\t\t\t  </li>
\t\t\t  </ul>
\t
\t\t</div>
\t
</div>


<div class=\"col-sm-12 col-md-4\">
\t
\t";
        // line 422
        $this->env->loadTemplate("ProduitServiceBundle:Service:menustruct.html.twig")->display($context);
        // line 423
        echo "\t\t\t
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
        return "ProduitServiceBundle:Service:callbackaboutpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 423,  442 => 422,  19 => 1,);
    }
}
