<?php

/* GeneralTemplateBundle:Menu:footer.html.twig */
class __TwigTemplate_b0275e36570d96a174911b2ca31fc81e6362a5d1ce1663b1393cfb0d9b2e98bc extends Twig_Template
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
        // line 3
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "home")) {
            // line 4
            echo "<style>
    .footers a {color:#696969;}
    .footers p {color:#696969;}
    .footers ul {line-height:30px;}
    #social-fb:hover {
        color: #3B5998;
        transition:all .001s;
    }
    #social-tw:hover {
        color: #4099FF;
        transition:all .001s;
    }
    #social-gp:hover {
        color: #d34836;
        transition:all .001s;
    }
    #social-em:hover {
        color: #f39c12;
        transition:all .001s;
    }

\t/* Link Style 5 */
\t.link5 a {
\t\tcolor: #325da8;
\t\tbackground-image: linear-gradient(to bottom, transparent 65%, #9ebb3d 0);
\t\tbackground-size: 0% 100%;
\t\tbackground-repeat: no-repeat;
\t\ttext-decoration: none;
\t\ttransition: background-size .4s ease;
\t\ttext-decoration: none;
\t\tbox-shadow: none;
\t\tfont-family: Philosopher-Bold;
\t}

\t.link5 a:hover {
\t\tbackground-size: 100% 100%;
\t\tcursor: pointer;
\t}


\t.buttonrs {
\t\tfloat: left;
\t\twidth: 40px;
\t\theight: 40px;
\t\tcursor: pointer;
\t\tbackground: #fff;
\t\toverflow: hidden;
\t\tborder-radius: 40px;
\t\ttransition: all 0.3s ease-in-out;
\t}

\t.buttonrs span {
\t\tfont-size: 12px;
\t\tfont-weight: 200;
\t\tline-height: 20px;
\t\tmargin-left: 0px;
\t\tfont-family: OpenSans-SemiBold;
\t}

\t.buttonrs:hover {
\t\twidth: 120px;
\t}

\t.buttonrs:nth-child(1):hover .icon {
\t\tbackground: #e1306c;
\t}

\t.buttonrs:nth-child(2):hover .icon {
\t\tbackground: #4267b2;
\t}

\t.buttonrs:nth-child(3):hover .icon {
\t\tbackground: #1da1f2;
\t}

\t.buttonrs:nth-child(4):hover .icon {
\t\tbackground: #0e76a8;
\t}

\t.buttonrs:nth-child(5):hover .icon {
\t\tbackground: #ff0000;
\t}

\t.buttonrs:nth-child(6):hover .icon {
\t\tbackground: #333;
\t}

\t.buttonrs:nth-child(1) span {
\t\tcolor: #e1306c;
\t}

\t.buttonrs:nth-child(2) span {
\t\tcolor: #4267b2;
\t}

\t.buttonrs:nth-child(3) span {
\t\tcolor: #1da1f2;
\t}

\t.buttonrs:nth-child(4) span {
\t\tcolor: #0e76a8;
\t}

\t.buttonrs:nth-child(5) span {
\t\tcolor: #ff0000;
\t}

\t.buttonrs:nth-child(6) span {
\t\tcolor: #333;
\t}

\t.buttonrs .icon {
\t\twidth: 40px;
\t\theight: 40px;
\t\ttext-align: center;
\t\tborder-radius: 50px;
\t\tdisplay: inline-block;
\t\ttransition: all 0.3s ease-in-out;
\t}

\t.buttonrs .icon i {
\t\tfont-size: 15px;
\t\tline-height: 40px;
\t\ttransition: all 0.3s ease-in-out;
\t}

\t.buttonrs:hover i {
\t\tcolor: #fff;
\t}

</style>

<footer style=\"min-height: 100px; border-top: 1px solid #ddd;\">

    <section class=\"footers  pt-5 pb-3\">
        <div class=\"container pt-5\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6 col-md-4 footers-one\">
                     <div class=\"footers-logo\">
                        <h3 style=\"font-family: Philosopher-Bold;\"><img src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-sm-afh.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; float: left;  margin-right: 20px;\"/> A.F.H unt.com</h3>
                     </div>
                     <div class=\"footers-info mt-3\">
                         <p>
\t\t\t\t            Engagé dans les services intelligeant sur mesure et l’intégration socio-professionnelle des jeunes depuis 2014.
                            <div style=\"color: #fff;\">
                              <ul class=\"list-unstyled\">
                                <li class=\"link5\"><a href=\"#!\">";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "html", null, true);
            echo "</a></li>
                                <li class=\"link5\"><a href=\"https://api.whatsapp.com/send?phone=";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "\" target=\"_blank\">Whatsapp: +";
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "</a></li>
                                <li class=\"link5\"><a href=\"tel:";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["telephone2"]) ? $context["telephone2"] : $this->getContext($context, "telephone2")), "html", null, true);
            echo "\">MTN: +";
            echo twig_escape_filter($this->env, (isset($context["telephone2"]) ? $context["telephone2"] : $this->getContext($context, "telephone2")), "html", null, true);
            echo "</a></li>
                              </ul>
                            </div>
                         </p>
                     </div>

\t\t\t\t\t <div style=\"white-space: nowrap!important; min-width: 500px;\">
\t\t\t\t\t\t<a href=\"\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Instagram</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")), "html", null, true);
            echo "\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"";
            // line 173
            echo twig_escape_filter($this->env, (isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")), "html", null, true);
            echo "\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")), "html", null, true);
            echo "\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>LinkedIn</span>
\t\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t<a href=\"";
            // line 187
            echo twig_escape_filter($this->env, (isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "html", null, true);
            echo "\" class=\"buttonrs\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>YouTube</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t </div>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-two\">
                     <h5> Technologie [";
            // line 196
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech"))), "html", null, true);
            echo "]</h5>
                     <p>CMS et solutions sur mesures</p>
                     <ul class=\"list-unstyled\">
                        ";
            // line 199
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 200
                echo "                            <li class=\"link5\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "link"), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "nom"), "html", null, true);
                echo "</a></li>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 202
                echo "                            <li class=\"link5\"><a href=\"#!\">Vide</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                        <li class=\"link5\"><a href=\"#!\"><span class=\"fa fa-plus\"></span> Afficher plus</a></li>
                     </ul>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-three\">
                     <h5>Marketing [";
            // line 208
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing"))), "html", null, true);
            echo "] </h5>
                     <p>Communication et vente</p>
                     <ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 211
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 212
                echo "\t\t\t\t\t\t\t<li class=\"link5\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "link"), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 214
                echo "\t\t\t\t\t\t\t<li class=\"link5\"><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                        <li class=\"link5\"><a href=\"#!\"><span class=\"fa fa-plus\"></span> Afficher plus</a></li>
                     </ul>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-four\">
                     <h5>Découverte [";
            // line 220
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays"))), "html", null, true);
            echo "] </h5>
                     <p>Référencement et géolocalisation</p>
                     <ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 223
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 224
                echo "\t\t\t\t\t\t\t<li class=\"link5\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "siteweb"), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 226
                echo "\t\t\t\t\t\t\t<li class=\"link5\"><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                        <li class=\"link5\"><a href=\"#!\"><span class=\"fa fa-plus\"></span> Afficher plus</a></li>
                     </ul>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-five\">
                     <h5>À propos </h5>
\t\t\t\t\t <p>L'innovation au coeur des projets AFH</p>
                     <ul class=\"list-unstyled\">
                      <li class=\"link5\"><a href=\"#!\">L'entreprise</a></li>
                      <li class=\"link5\"><a href=\"#!\">Les projets</a></li>
                      <li class=\"link5\"><a href=\"#!\">Les statistiques</a></li>
                      <li class=\"link5\"><a href=\"#!\">Contribuer</a></li>
                      <li class=\"link5\"><a href=\"#!\">Investir</a></li>
                     </ul>
                 </div>
                 
            </div>
        </div>
     </section>
\t 
     <section class=\"disclaimer bg-light\" style=\"border-bottom: 1px solid #dee2e6!important;\">
         <div class=\"container\">
             <div class=\"row \">
                 <div class=\"col-md-12 py-2\" style=\"text-align: justify;\">
                     <small>
\t\t\t\t\t\tBienvenue sur AFH Group, Nous avons lancé depuis 2013 le développement des projets AFHunt avec un réel désir de construire des services numériques stables de bout en bout ! Le parcours n’a pas été évident, nous avons tissé des partenariats techniques et commerciaux avec des entreprises et des particuliers dans le but de concrétiser ce rêve, mais avons été à plusieurs reprises abandonné au milieu de l’Océan par ceux-ci suite d’une part à leur faillite ou à leur méconnaissance de notre engagement dans ce secteur passionnant, Bien évidemment  ces échecs nous ont fragilisés à un moment donné, mais notre engagement nous a poussé à réviser nos processus de développement et de croissance adoptant ainsi des niveaux de sécurités diverses  garantissant l’aboutissement de nos projets sur le temps, et aujourd’hui nous sommes fier des résultats. Nous continuons à travaillons avec beaucoup d’amour sur nos services que nous voulons concurrentiels sur le plan international.
                    </small>
                 </div>
             </div>
         </div>
     </section>

     <section class=\"copyright border\"  style=\"box-shadow:0px 0px 70px #888888;\">
         <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                      <strong style=\"font-family: Philosopher-Bold;\">© 2014 - ";
            // line 263
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " A.F.H unt.com</strong> 
\t\t\t\t\t  Made width <span class=\"fa fa-heart-o\" style=\"color: red;\"></span> by <a href=\"http://code.afhunt.com\" target=\"_blank\">AFH Code</a>
                 </div>
                <div class=\"col-md-6 text-right\">
                    <a href=\"#!\">
                       Conditions d'utilisations
                    </a>
\t\t\t\t\t<span style=\"font-size: 13px;\" class=\"fa fa-eercast\"></span>
                    <a href=\"#!\">
                       Confidentialité
                    </a>
                </div>
            </div>
         </div>
     </section>

</footer>

";
        } else {
            // line 282
            echo "<div class=\"clearfix\"></div>
<footer id=\"colophon\" class=\"site-footer\" style=\"background-color:#005dff!important; position: absolute;  width: 100%; padding-bottom: 0px;\">
\t<!-- Begin Annonce Accueil -->
\t<div class=\"skewed-bg\" style=\"\"></div>
\t<div class=\"footer-offers\">
\t\t<div class=\"container afd-footer-offers-left\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"offer afd-footer-height\" style=\"padding-top: 0px;\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3 style=\"margin-bottom: 2px;\"><a href=\"#!\" style=\"text-transform: capitalize; color: #005dff;\">Ils nous font confiance</a></h3>
\t\t\t\t\t\t<p style=\"margin: 2px 0px 5px 2px; padding: 0px; border-bottom: 1px solid #ddd;\">Nous travaillons ensemble pour vous offrir le meilleur du marché</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 295
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logooj.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/></a>
\t\t\t\t\t\t\t<div><strong>Omnijobber</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoapme.jpg"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/></a>
\t\t\t\t\t\t\t<div><strong>A.P.M.E</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoovh.jpg"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/></a>
\t\t\t\t\t\t\t<div><strong>OVH</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoamazone.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/> </a>
\t\t\t\t\t\t\t<div><strong>Amazone</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div> <!-- /.offer -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"offer afd-footer-height\" style=\"padding-top: 0px;\">
\t\t\t\t\t\t<h3><a href=\"#!\" class=\"green-text\"><a href=\"#!\" style=\"text-transform: capitalize; color: #005dff;\">Devenir Partenaire AFH</a> </a></h3>
\t\t\t\t\t\t <p style=\"margin: 2px 0px 5px 2px; padding: 0px; border-bottom: 1px solid #ddd;\">Démarrez votre propre business en moins de 24H.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://hbill.afhunt.com/\" target=\"_blank\" class=\"text-center\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 323
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logohbill.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div ><strong>AFH HBill</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://mbill.afhunt.com/\" target=\"_blank\" class=\"text-center\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logombill.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div><strong>AFH MBill</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://win.afhunt.com/\" target=\"_blank\" class=\"text-center\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logowin.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div><strong>AFH Win</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://code.afhunt.com/\" class=\"text-center\" target=\"_blank\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 341
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logocode.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div><strong>AFH Code</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.offer -->
\t\t\t\t</div>
\t\t</div><!-- /.container -->
\t</div><!-- /.footer-offers -->

\t<!-- End Annonce Accueil -->
\t<div class=\"footer-ready\" style=\"padding-top: 20px;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h3><img src=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-sm-afh.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; float: left;  margin-top: -10px; margin-right: 20px;\"/> A.F.H unt.com</h3>
\t\t\t\t<p>Des services et produits incontournables pour le développement de votre activité numérique.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<a href=\"#!\" class=\"btn btn-default pull-right share-icon cd-bouncy-nav-trigger2\" style=\"line-height: 40px; background: #3498db; color: #fff; min-width: 130px; height: 50px; border-radius: 5px; margin-top: 20px;\"><span></span> Démarrer</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div style=\"border-top: 1px solid #ddd; margin-top: 20px;\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div><!-- /.footer-ready -->

\t<div class=\"footer-links\" style=\"padding-bottom: 7px;\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"footer-about\">
\t\t\t\t\t\t<div class=\"social-btns\">
\t\t\t\t\t\t\t<a class=\"social-btn facebook\" href=\"";
            // line 372
            echo twig_escape_filter($this->env, (isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t<a class=\"social-btn linkedin\" href=\"";
            // line 373
            echo twig_escape_filter($this->env, (isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t<a class=\"social-btn instagram\" href=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
\t\t\t\t\t\t\t<a class=\"social-btn github\" href=\"";
            // line 375
            echo twig_escape_filter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"color: #fff;\">
\t\t\t\t\t\t  <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li><a href=\"#!\">";
            // line 379
            echo twig_escape_filter($this->env, (isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"https://api.whatsapp.com/send?phone=";
            // line 380
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "\" target=\"_blank\">Whatsapp: +";
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"tel:";
            // line 381
            echo twig_escape_filter($this->env, (isset($context["telephone2"]) ? $context["telephone2"] : $this->getContext($context, "telephone2")), "html", null, true);
            echo "\">MTN: +";
            echo twig_escape_filter($this->env, (isset($context["telephone2"]) ? $context["telephone2"] : $this->getContext($context, "telephone2")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.footer-about -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\" style=\"border-left: 1px dashed  #ddd;\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li style=\"text-transform: capitalize;\"><a href=\"#!\" class=\"cd-bouncy-nav-trigger2\" style=\"font-size: 20px; color: #fff;\"><span class=\"fa fa-caret-down\"></span> Technologie [";
            // line 388
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech"))), "html", null, true);
            echo "] </a></li>
\t\t\t\t\t\t";
            // line 389
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 390
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "link"), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "src") != null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getwebpath")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/600.jpg"), "html", null, true);
                }
                echo "\" alt=\"\" style=\"width: 20px; height: 20px; margin-right: 7px; border-radius: 10px;\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 392
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\" style=\"border-left: 1px dashed  #ddd;\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li style=\"text-transform: capitalize;\"><a href=\"#!\" class=\"cd-bouncy-nav-trigger2\" style=\"font-size: 20px; color: #fff;\"><span class=\"fa fa-caret-down\"></span> Marketing [";
            // line 398
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing"))), "html", null, true);
            echo "] </a></li>
\t\t\t\t\t\t";
            // line 399
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 400
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "link"), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "src") != null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getwebpath")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/600.jpg"), "html", null, true);
                }
                echo "\" alt=\"\" style=\"width: 20px; height: 20px; margin-right: 7px; border-radius: 10px;\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 402
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\" style=\"border-left: 1px dashed  #ddd;\">
\t\t\t\t\t<ul class=\"list-unstyled\"> 
\t\t\t\t\t\t<li style=\"text-transform: capitalize;\"><a href=\"#!\" class=\"toggle-modal-right\" value=\"accueil\" style=\"font-size: 20px; color: #fff;\"><span class=\"fa fa-caret-down\"></span> Découverte [";
            // line 408
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays"))), "html", null, true);
            echo "]</a></li>
\t\t\t\t\t\t";
            // line 409
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 410
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "siteweb"), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                if (($this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "drapeau") != null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "drapeau"), "getwebpath")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/600.jpg"), "html", null, true);
                }
                echo "\" style=\"width: 20px; height: 20px; margin-right: 7px; border-radius: 10px;\"/> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 412
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</div>
\t</div><!-- /.footer-links -->

<div class=\"siteFooter-secondary-wrapper\" style=\"background: #34495E!important;\">
<div class=\"container -footer\">
\t  <div class=\"row\">
\t\t  <div class=\"col-md-6\">
\t\t\t\t© 2014 - ";
            // line 423
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " A.F.H unt.com
\t\t   </div>
\t\t  <div class=\"col-md-6\">
\t\t\t  <a href=\"#!\" style=\"float: right; color: #fff; padding: 2px;\">
\t\t\t\t Conditions d'utilisations
\t\t\t  </a>
\t\t\t  <a href=\"#!\" style=\"float: right; color: #fff; padding: 2px;\">
\t\t\t\t Confidentialité
\t\t\t  </a>
\t\t  </div>
\t  </div>
</div>
</div>
</footer>
<div class=\"clearfix\" style=\"padding: 7px; background: #fff;\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "GeneralTemplateBundle:Menu:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 423,  674 => 414,  667 => 412,  651 => 410,  646 => 409,  642 => 408,  636 => 404,  629 => 402,  613 => 400,  608 => 399,  604 => 398,  598 => 394,  591 => 392,  575 => 390,  570 => 389,  566 => 388,  554 => 381,  548 => 380,  544 => 379,  537 => 375,  533 => 374,  529 => 373,  525 => 372,  502 => 354,  486 => 341,  477 => 335,  468 => 329,  459 => 323,  443 => 310,  435 => 305,  427 => 300,  419 => 295,  404 => 282,  382 => 263,  345 => 228,  338 => 226,  328 => 224,  323 => 223,  317 => 220,  311 => 216,  304 => 214,  294 => 212,  289 => 211,  283 => 208,  277 => 204,  270 => 202,  260 => 200,  255 => 199,  249 => 196,  237 => 187,  227 => 180,  217 => 173,  207 => 166,  188 => 152,  182 => 151,  178 => 150,  166 => 143,  25 => 4,  23 => 3,  19 => 1,  2350 => 2191,  2347 => 2190,  2299 => 2145,  2295 => 2144,  2291 => 2143,  2287 => 2142,  2283 => 2141,  2279 => 2140,  2275 => 2139,  2271 => 2138,  2267 => 2137,  2257 => 2130,  2217 => 2093,  2203 => 2082,  2186 => 2068,  2172 => 2057,  2158 => 2046,  2141 => 2032,  2080 => 1974,  2066 => 1963,  2044 => 1944,  1769 => 1672,  1738 => 1644,  1714 => 1623,  1704 => 1616,  1673 => 1588,  1488 => 1406,  438 => 359,  406 => 330,  374 => 301,  349 => 279,  339 => 272,  111 => 47,  94 => 33,  80 => 22,  76 => 20,  73 => 19,  66 => 16,  63 => 15,  56 => 12,  53 => 11,  42 => 5,  38 => 4,  35 => 3,  32 => 2,);
    }
}
