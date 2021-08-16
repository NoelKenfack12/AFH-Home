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
</style>

<footer style=\"min-height: 100px; border-top: 1px solid #ddd;\">

    <section class=\"footers  pt-5 pb-3\">
        <div class=\"container pt-5\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6 col-md-4 footers-one\">
                     <div class=\"footers-logo\">
                        <h3><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-sm-afh.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; float: left;  margin-right: 20px;\"/> A.F.H unt.com</h3>
                     </div>
                     <div class=\"footers-info mt-3\">
                         <p>
                            
\t\t\t\t            Des services et produits incontournables pour le développement de votre activité numérique.
                            <div style=\"color: #fff;\">
                              <ul class=\"list-unstyled\">
                                <li><a href=\"#!\">";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "html", null, true);
            echo "</a></li>
                                <li><a href=\"https://api.whatsapp.com/send?phone=";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "\" target=\"_blank\">Whatsapp: +";
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "</a></li>
                                <li><a href=\"tel:";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["telephone2"]) ? $context["telephone2"] : $this->getContext($context, "telephone2")), "html", null, true);
            echo "\">MTN: +";
            echo twig_escape_filter($this->env, (isset($context["telephone2"]) ? $context["telephone2"] : $this->getContext($context, "telephone2")), "html", null, true);
            echo "</a></li>
                              </ul>
                            </div>
                         </p>
                     </div>
                     <div class=\"social-icons\"> 
                     <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-2x social\"></i></a>
                     <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-2x social\"></i></a>
                     <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-gp\" class=\"fa fa-youtube-square fa-2x social\"></i></a>
                     <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-linkedin-square fa-2x social\"></i></a>
                 </div>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-two\">
                     <h5> Technologie [";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech"))), "html", null, true);
            echo "]</h5>
                     <p>CMS et solutions sur mesures</p>
                     <ul class=\"list-unstyled\">
                        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 60
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "link"), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "nom"), "html", null, true);
                echo "</a></li>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                            <li><a href=\"#!\">Vide</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        <li><a href=\"#!\"><span class=\"fa fa-plus-square\"></span> Afficher plus</a></li>
                     </ul>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-three\">
                     <h5>Marketing [";
            // line 68
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing"))), "html", null, true);
            echo "] </h5>
                     <p>Communication et vente</p>
                     <ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 72
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "link"), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 74
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        <li><a href=\"#!\"><span class=\"fa fa-plus-square\"></span> Afficher plus</a></li>
                     </ul>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-four\">
                     <h5>Découverte [";
            // line 80
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays"))), "html", null, true);
            echo "] </h5>
                     <p>Référencement et géolocalisation</p>
                     <ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 84
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "siteweb"), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 86
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        <li><a href=\"#!\"><span class=\"fa fa-plus-square\"></span> Afficher plus</a></li>
                     </ul>
                 </div>
                <div class=\"col-xs-12 col-sm-6 col-md-2 footers-five\">
                     <h5>Company </h5>
                     <ul class=\"list-unstyled\">
                      <li><a href=\"maintenance.html\">Career</a></li>
                      <li><a href=\"about.html\">For Parters</a></li>
                      <li><a href=\"about.html\">Terms</a></li>
                      <li><a href=\"about.html\">Policy</a></li>
                      <li><a href=\"contact.html\">Contact Us</a></li>
                     </ul>
                 </div>
                 
            </div>
        </div>
     </section>
     <section class=\"disclaimer bg-light\" style=\"border-bottom: 1px solid #dee2e6!important;\">
         <div class=\"container\">
             <div class=\"row \">
                 <div class=\"col-md-12 py-2\">
                     <small>
                        Disclaimer: Element Limited is only an intermediary offering its platform to facilitate the transactions between Seller and Customer/Buyer/User and is not and cannot be a party to or control in any manner any transactions between the Seller and the Customer/Buyer/User. All the offers and discounts on this Website have been extended by various Builder(s)/Developer(s) who have advertised their products. Element is only communicating the offers and not selling or rendering any of those products or services. It neither warrants nor is it making any representations with respect to offer(s) made on the site. Element Limited shall neither be responsible nor liable to mediate or resolve any disputes or disagreements between the Customer/Buyer/User and the Seller and both Seller and Customer/Buyer/User shall settle all such disputes without involving Element Limited in any manner.
                    </small>
                 </div>
             </div>
         </div>
     </section>
     <section class=\"copyright border\"  style=\"box-shadow:0px 0px 70px #888888;\">
         <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                      © 2014 - ";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " A.F.H unt.com
                 </div>
                <div class=\"col-md-6\">
                    <a href=\"#!\" style=\"float: right; padding: 2px;\">
                       Conditions d'utilisations
                    </a>
                    <a href=\"#!\" style=\"float: right; padding: 2px;\">
                       Confidentialité
                    </a>
                </div>
            </div>
         </div>
     </section>

</footer>

";
        } else {
            // line 137
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
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logooj.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/></a>
\t\t\t\t\t\t\t<div><strong>Omnijobber</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoapme.jpg"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/></a>
\t\t\t\t\t\t\t<div><strong>A.P.M.E</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoovh.jpg"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/></a>
\t\t\t\t\t\t\t<div><strong>OVH</strong></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t<a href=\"#!\" title=\"\" style=\"display: block;\"><img src=\"";
            // line 165
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
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logohbill.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div ><strong>AFH HBill</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://mbill.afhunt.com/\" target=\"_blank\" class=\"text-center\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logombill.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div><strong>AFH MBill</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://win.afhunt.com/\" target=\"_blank\" class=\"text-center\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logowin.png"), "html", null, true);
            echo "\"  style=\"height: 50px;\"/>
\t\t\t\t\t\t\t<div><strong>AFH Win</strong></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<a href=\"http://code.afhunt.com/\" class=\"text-center\" target=\"_blank\" style=\"display: block;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 196
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
            // line 209
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
            // line 227
            echo twig_escape_filter($this->env, (isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t<a class=\"social-btn linkedin\" href=\"";
            // line 228
            echo twig_escape_filter($this->env, (isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t<a class=\"social-btn instagram\" href=\"";
            // line 229
            echo twig_escape_filter($this->env, (isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
\t\t\t\t\t\t\t<a class=\"social-btn github\" href=\"";
            // line 230
            echo twig_escape_filter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"color: #fff;\">
\t\t\t\t\t\t  <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li><a href=\"#!\">";
            // line 234
            echo twig_escape_filter($this->env, (isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"https://api.whatsapp.com/send?phone=";
            // line 235
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "\" target=\"_blank\">Whatsapp: +";
            echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"tel:";
            // line 236
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
            // line 243
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech"))), "html", null, true);
            echo "] </a></li>
\t\t\t\t\t\t";
            // line 244
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_tech"]) ? $context["appli_tech"] : $this->getContext($context, "appli_tech")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 245
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
                // line 247
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\" style=\"border-left: 1px dashed  #ddd;\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li style=\"text-transform: capitalize;\"><a href=\"#!\" class=\"cd-bouncy-nav-trigger2\" style=\"font-size: 20px; color: #fff;\"><span class=\"fa fa-caret-down\"></span> Marketing [";
            // line 253
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing"))), "html", null, true);
            echo "] </a></li>
\t\t\t\t\t\t";
            // line 254
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["appli_marketing"]) ? $context["appli_marketing"] : $this->getContext($context, "appli_marketing")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 255
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
                // line 257
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\" style=\"border-left: 1px dashed  #ddd;\">
\t\t\t\t\t<ul class=\"list-unstyled\"> 
\t\t\t\t\t\t<li style=\"text-transform: capitalize;\"><a href=\"#!\" class=\"toggle-modal-right\" value=\"accueil\" style=\"font-size: 20px; color: #fff;\"><span class=\"fa fa-caret-down\"></span> Découverte [";
            // line 263
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays"))), "html", null, true);
            echo "]</a></li>
\t\t\t\t\t\t";
            // line 264
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["liste_pays"]) ? $context["liste_pays"] : $this->getContext($context, "liste_pays")), 0, 4));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 265
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
                // line 267
                echo "\t\t\t\t\t\t\t<li><a href=\"#!\">Vide</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</div>
\t</div><!-- /.footer-links -->

<div class=\"siteFooter-secondary-wrapper\" style=\"background: #34495E!important;\">
<div class=\"container -footer\">
\t  <div class=\"row\">
\t\t  <div class=\"col-md-6\">
\t\t\t\t© 2014 - ";
            // line 278
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
        return array (  540 => 278,  529 => 269,  522 => 267,  506 => 265,  501 => 264,  497 => 263,  491 => 259,  484 => 257,  468 => 255,  463 => 254,  459 => 253,  453 => 249,  446 => 247,  430 => 245,  425 => 244,  421 => 243,  409 => 236,  403 => 235,  399 => 234,  392 => 230,  388 => 229,  384 => 228,  380 => 227,  357 => 209,  341 => 196,  332 => 190,  323 => 184,  314 => 178,  298 => 165,  290 => 160,  282 => 155,  274 => 150,  259 => 137,  239 => 120,  205 => 88,  198 => 86,  188 => 84,  183 => 83,  177 => 80,  171 => 76,  164 => 74,  154 => 72,  149 => 71,  143 => 68,  137 => 64,  130 => 62,  120 => 60,  115 => 59,  109 => 56,  102 => 52,  98 => 51,  94 => 50,  90 => 49,  79 => 43,  73 => 42,  69 => 41,  56 => 33,  25 => 4,  23 => 3,  19 => 1,);
    }
}
