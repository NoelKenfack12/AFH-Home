<?php

/* UsersUserBundle:Security:accueilsite.html.twig */
class __TwigTemplate_fbadc164f24f99c95c071614ce8fd6dfed41f851b5d7c63660d5c0cfcf2c9d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UsersUserBundle::layouthome.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'userblog_body' => array($this, 'block_userblog_body'),
            'javascripttemplate' => array($this, 'block_javascripttemplate'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UsersUserBundle::layouthome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta($context, array $blocks = array())
    {
        // line 3
        echo "
  ";
        // line 4
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
  <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "html", null, true);
        echo ", start-up, applications,référencement,annuaire, annonces,technologie, hébergement web,e-commerce,stratégie marketing,annonces, annonce afrique,études, bonnes affaires, hébergement web illimité,hébergement, site internet, site, gratuite,hébergement revendeur,template,domaine, nom de domaine, visite guidée, cameroun, site cameroun,hébergement web cameroun,site moins cher, vente en ligne, commerce en afrique, afrique Explorer, web marketing, référencement SEO, développement web sur mesure, ";
        echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords")), "html", null, true);
        echo "\"/>
  <meta name=\"author\" content=\"Noel Kenfack\"/>
  <meta name=\"description\" content=\"AFHunt est une entreprise Camerounaise qui vise à opérer une véritable transformation numérique au Cameroun et en Afrique, pour faciliter les opérations digitales des particuliers et des entreprises. \"/>

";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Solutions et services intelligents prêt à l'emploi
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_userblog_body($context, array $blocks = array())
    {
        // line 20
        echo "
    <div class=\"\" style=\"position: absolute; z-index: 1; top: 0px; width: 100%;\">
      <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/vector-top.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 500px;\">
    </div>
    
    <div class=\"page\">
      <section class=\" section section-xs bg-gradient-1 oh text-left\" style=\"padding: 7px 0px;\">
        <div class=\"header-homepage1\" style=\"position: relative; z-index: 2;\">
    \t\t\t<div class=\"container text-left\">
            <a href=\"#!\" class=\"activator menu-toggle float-right btn-navigation\">
                <span class=\"fa fa-navicon\" style=\"font-size: 40px;\"></span>
    \t\t\t\t</a>
            <a href=\"#\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/afh-logo2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 300px;\">
            </a>
            <br/>
            <span style=\"padding-left: 20px; font-family: Quicksand-Bold; font-size: 20px;\">
              Solutions et services intelligents <span style=\"display: inline-block; border: 1px solid #ed6e11; padding: 3px 15px; border-radius: 15px; color: #fff; background: #9dba3d;\">prêts à l'emploi</span> 🙌
            </span>
    \t\t\t</div>
    \t\t</div>


        <div class=\"container pd-t-home\" style=\"position: relative; z-index: 2;\">
          <div class=\"row row-50\">
            <div class=\"col-xl-6 col-xxl-5\">
              <div class=\"\">
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/home-image.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 350px;\"/>
              </div>
              <h3 class=\"app-title\">
                Nous fédérons les forces pour bâtir une Afrique conquérante dans les nouvelles technologies !
              </h3>

              <div class=\"text-left\">
                <span class=\"app-title-diviser\"></span>
              </div>

              <div class=\"box-promo\">
                <div class=\"unit unit-spacing-md align-items-center justify-content-center justify-content-xl-start\">
                  <div class=\"unit-left wow fadeIn\" data-wow-delay=\"1s\"><a class=\"button button-primary button-shadow\" href=\"#\">Nous joindre</a></div>
                  <div class=\"unit-body wow fadeIn\" data-wow-delay=\"1.1s\"><a class=\"link-underline text-uppercase small collapse-gigamenu\"  value=\"about\" href=\"#!\">En savoir plus <span class=\"fa fa-chevron-circle-right\"></span> </a></div>
                </div>
                <div style=\"width: 700px; max-width: 100%;\" class=\"box-divided block-sm wow fadeIn\" data-wow-delay=\"1.3s\"><span class=\"box-divided-line\"></span>
                  <p class=\"big box-divided-text\" style=\"font-family: Raleway-Medium;\">
                    Nous construisons avec vous des environements sûr pour l'installation et le développement des entreprises modernes !
                    <br/>
                    <span class=\"float-right\" style=\"font-family: MrDafoe-Regular;\">Noel Kenfack</span>
                  </p>
                </div>
                <div class=\"heading-1 text-uppercase font-weight-bold wow fadeIn\" data-wow-delay=\"1.7s\">
                  <div class=\"big text-bordered-1\">AFHunt It</div>
                </div>
                <div class=\"decor-element decor-element-2 wow fadeIn\" data-wow-delay=\".6s\">
                  <svg class=\"animation-rotate-1\" width=\"176\" height=\"198\" viewBox=\"0 0 176 198\" fill=\"none\">
                    <path opacity=\"0.2\" d=\"M85.5 10.9904C87.047 10.0972 88.953 10.0972 90.5 10.9904L162.969 52.8301C164.516 53.7233 165.469 55.3739 165.469 57.1603V140.84C165.469 142.626 164.516 144.277 162.969 145.17L90.5 187.01C88.953 187.903 87.047 187.903 85.5 187.01L13.0314 145.17L8.03143 153.83L13.0314 145.17C11.4844 144.277 10.5314 142.626 10.5314 140.84V57.1603C10.5314 55.3739 11.4844 53.7233 13.0314 52.8301L85.5 10.9904Z\" stroke=\"#020549\" stroke-width=\"20\"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class=\"col-xl-6 col-xxl-7 d-none d-md-block\" style=\"background: rgba(158,187,61,0.2); border-radius: 20px;\">

              <div class=\"ribbon-wrapper ribbon-black ribbon-right\" style=\"position: absolute; right: 0px; top: -30px; width: 290px;\">
                <div class=\"ribbon-front\">
                  <h2> Welcome</h2>
                  <small>😉 heureux de vous recevoir aujourd’hui</small>
                </div>
                <div class=\"ribbon-edge-topleft\"></div>
                <div class=\"ribbon-edge-topright\"></div>
                <div class=\"ribbon-edge-bottomleft\"></div>
                <div class=\"ribbon-edge-bottomright\"></div>
                <div class=\"ribbon-back-left\"></div>
                <div class=\"ribbon-back-right\"></div>
              </div>

              <div class=\"box-samples\">
                <div class=\"decor-element decor-element-1 wow fadeIn\" data-wow-delay=\"2.4s\">
                  <svg width=\"79\" height=\"194\" viewBox=\"0 0 79 194\" fill=\"none\" data-parallax-scroll=\"{&quot;y&quot;: -50,  &quot;smoothness&quot;: 30}\">
                    <path d=\"M0 3.82266H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 7.64532L3.77444 4.52995e-06\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 3.82266H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 7.64532L17.9287 4.52995e-06\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 3.82266H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 7.64532L32.083 4.52995e-06\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 3.82266H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 7.64532L46.2372 4.52995e-06\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 3.82266H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 7.64532L60.3914 4.52995e-06\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 3.82266H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 7.64532L74.5457 4.52995e-06\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 18.1576H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 21.9803L3.77444 14.335\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 18.1576H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 21.9803L17.9287 14.335\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 18.1576H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 21.9803L32.083 14.335\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 18.1576H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 21.9803L46.2372 14.335\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 18.1576H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 21.9803L60.3914 14.335\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 18.1576H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 21.9803L74.5457 14.335\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 32.4926H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 36.3153L3.77444 28.67\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 32.4926H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 36.3153L17.9287 28.67\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 32.4926H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 36.3153L32.083 28.67\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 32.4926H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 36.3153L46.2372 28.67\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 32.4926H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 36.3153L60.3914 28.67\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 32.4926H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 36.3153L74.5457 28.67\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 46.8276H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 50.6502L3.77444 43.0049\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 46.8276H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 50.6502L17.9287 43.0049\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 46.8276H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 50.6502L32.083 43.0049\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 46.8276H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 50.6502L46.2372 43.0049\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 46.8276H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 50.6502L60.3914 43.0049\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 46.8276H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 50.6502L74.5457 43.0049\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 61.1626H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 64.9852L3.77444 57.3399\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 61.1626H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 64.9852L17.9287 57.3399\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 61.1626H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 64.9852L32.083 57.3399\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 61.1626H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 64.9852L46.2372 57.3399\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 61.1626H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 64.9852L60.3914 57.3399\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 61.1626H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 64.9852L74.5457 57.3399\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 75.4975H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 79.3202L3.77444 71.6749\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 75.4975H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 79.3202L17.9287 71.6749\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 75.4975H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 79.3202L32.083 71.6749\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 75.4975H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 79.3202L46.2372 71.6749\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 75.4975H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 79.3202L60.3914 71.6749\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 75.4975H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 79.3202L74.5457 71.6749\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 89.8325H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 93.6552L3.77444 86.0099\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 89.8325H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 93.6552L17.9287 86.0099\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 89.8325H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 93.6552L32.083 86.0099\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 89.8325H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 93.6552L46.2372 86.0099\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 89.8325H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 93.6552L60.3914 86.0099\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 89.8325H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 93.6552L74.5457 86.0099\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 104.167H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 107.99L3.77444 100.345\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 104.167H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 107.99L17.9287 100.345\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 104.167H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 107.99L32.083 100.345\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 104.167H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 107.99L46.2372 100.345\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 104.167H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 107.99L60.3914 100.345\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 104.167H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 107.99L74.5457 100.345\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 118.502H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 122.325L3.77444 114.68\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 118.502H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 122.325L17.9287 114.68\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 118.502H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 122.325L32.083 114.68\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 118.502H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 122.325L46.2372 114.68\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 118.502H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 122.325L60.3914 114.68\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 118.502H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 122.325L74.5457 114.68\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 132.837H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 136.66L3.77444 129.015\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 132.837H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 136.66L17.9287 129.015\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 132.837H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 136.66L32.083 129.015\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 132.837H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 136.66L46.2372 129.015\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 132.837H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 136.66L60.3914 129.015\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 132.837H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 136.66L74.5457 129.015\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 147.172H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 150.995L3.77444 143.35\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 147.172H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 150.995L17.9287 143.35\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 147.172H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 150.995L32.083 143.35\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 147.172H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 150.995L46.2372 143.35\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 147.172H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 150.995L60.3914 143.35\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 147.172H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 150.995L74.5457 143.35\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 161.507H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 165.33L3.77444 157.685\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 161.507H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 165.33L17.9287 157.685\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 161.507H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 165.33L32.083 157.685\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 161.507H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 165.33L46.2372 157.685\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 161.507H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 165.33L60.3914 157.685\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 161.507H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 165.33L74.5457 157.685\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 175.842H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 179.665L3.77444 172.02\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 175.842H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 179.665L17.9287 172.02\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 175.842H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 179.665L32.083 172.02\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 175.842H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 179.665L46.2372 172.02\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 175.842H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 179.665L60.3914 172.02\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 175.842H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 179.665L74.5457 172.02\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M0 190.177H7.54894\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M3.77444 194L3.77444 186.355\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M14.1542 190.177H21.7032\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M17.9287 194L17.9287 186.355\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M28.3085 190.177H35.8574\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M32.083 194L32.083 186.355\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M42.4627 190.177H50.0117\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M46.2372 194L46.2372 186.355\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M56.617 190.177H64.1659\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M60.3914 194L60.3914 186.355\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M70.7712 190.177H78.3202\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                    <path d=\"M74.5457 194L74.5457 186.355\" stroke=\"#07893C\" stroke-width=\"1.2\"></path>
                  </svg>
                </div>
                <div class=\"box-samples-img box-samples-img-0 wow fadeIn\" data-wow-delay=\"1.8s\">
        \t\t\t\t\t<div class=\"img-classic\">
        \t\t\t\t\t\t<a href=\"#!\" class=\"inner-parad-card first-item collapse-gigamenu\"  value=\"projet\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">

                      <div class=\"text-left\">
                        <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_01.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
                      </div>
                      <div class=\"help-title\">
                          Les projets
                      </div>

                      <div class=\"help-content\">
                        Pendant ";
        // line 279
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 2013), "html", null, true);
        echo " années d’exercices, nous avons réalisé un nombre important de projets pour les entreprises, les organisations, les gouvernements et les particuliers ! </br>Découvrez quelques un ci-dessous.
                      </div>


                      <ul class=\"tags-box\">
                        <li>Liste</li>
                        <li>Investir</li>
                        <li>Commander</li>
                      </ul>

                      <div class=\"text-center mg-t-5\">
                        <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
                      </div>
                    </a>
        \t\t\t\t\t</div>
                </div>

                <div class=\"box-samples-img box-samples-img-1 wow fadeIn\" data-wow-delay=\"1.8s\">
        \t\t\t\t\t<div class=\"img-classic\">
        \t\t\t\t\t\t<a href=\"#!\" class=\"inner-parad-card first-item collapse-gigamenu\"  value=\"about\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">

                      <div class=\"text-left\">
                        <img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_01.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
                      </div>
                      <div class=\"help-title\">
                          À propos de AFHunt
                      </div>

                      <div class=\"help-content\">
                        Nous sommes un groupe d'ingénieurs en chasse des technologies à la pointe contribuant à la croissance et le contrôle automatisé du flux d’opérations des startups et PMEs Moderne.
                      </div>

                      <ul class=\"tags-box\">
                        <li>Vision</li>
                        <li>Mission</li>
                        <li>Equipe</li>
                        <li>Conférences</li>
                      </ul>

                      <div class=\"text-center mg-t-5\">
                          <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
                      </div>
                    </a>
        \t\t\t\t\t</div>
                </div>

                <div class=\"box-samples-img box-samples-img-2 wow fadeIn\" data-wow-delay=\"2s\">
                  <div class=\"img-classic\">
        \t\t\t\t\t\t<a href=\"#!\" class=\"inner-parad-card second-item collapse-gigamenu\"  value=\"statistique\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">

                      <div class=\"text-left\">
                        <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_14.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
                      </div>
                      <div class=\"help-title\">
                          Les statistiques
                      </div>

                      <div class=\"help-content\">
                        Nous avons connus quelques effets boule de neige qui ont contribués à la constitution des communautés intéressé et active autours des projets divers que nous représentons aujourd’hui ! 
                      </div>

                      <ul class=\"tags-box\">
                        <li>Communautés</li>
                        <li>Investissements</li>
                        <li>RH</li>
                      </ul>
                      
                      <div class=\"text-center mg-t-5\">
                        <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
                      </div>

                    </a>
        \t\t\t\t\t</div>
                </div>

                <div class=\"box-samples-img box-samples-img-3 wow fadeIn\" data-wow-delay=\"2.2s\">
                  <div class=\"img-classic\">
        \t\t\t\t\t\t<a href=\"\" class=\"inner-parad-card third-item\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">

                      <div class=\"text-left\">
                        <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_16.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
                      </div>
                      <div class=\"help-title\">
                          Nos Offres d'emploi
                      </div>

                      <div class=\"help-content\">
                        Outil mis à la disposition du personnel métier de la chaine de contrôle du régime de vignettes
                      </div>

                      <div class=\"text-center mg-t-5\">
                        <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
                      </div>

                      <span class=\"btn-item-action\">Continuer <span class=\"fa fa-chevron-circle-right\"></span> </span>
                    </a>
        \t\t\t\t\t</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <style>
        
      </style>


      <section style=\"position: relative!important;z-index: 2;\">
        <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-md-6\">
                <div class=\"containary\" style=\"background-color: #98d3ce; min-width: 100%!important; margin-top: 40px; box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
                transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);\">
                  <div class=\"inner\" style=\"margin-top: -40px;\">
                
                    <figure class=\"top top1\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top2\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top3\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top4\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top5\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top6\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top7\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top8\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top9\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top10\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top11\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top12\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top13\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top14\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top15\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top16\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top17\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top18\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top19\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top20\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top21\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top22\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top23\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top24\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top25\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top26\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top27\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top28\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top29\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top30\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top31\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top32\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top33\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top34\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top35\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top36\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top37\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top38\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top39\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top40\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    
                    <figure class=\"top top41\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top42\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top43\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top44\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top45\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <span style=\"color: #fff; font-size: 20px; display: inline-block; padding: 7px 15px; font-family: Montserrat-ExtraBold;\">A</span>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top46\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <span style=\"color: #fff; font-size: 20px; display: inline-block; padding: 7px 15px; font-family: Montserrat-ExtraBold;\">F</span>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top47\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top48\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top49\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top50\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top51\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top52\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top53\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top54\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top55\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <span style=\"color: #fff; font-size: 20px; display: inline-block; padding: 7px 15px; font-family: Montserrat-ExtraBold;\">H</span>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top56\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <span style=\"color: #fff; font-size: 15px; display: inline-block; padding: 15px 10px;\">Unt</span>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top57\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top58\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top59\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top60\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top61\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top62\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top63\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top64\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top65\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top66\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top67\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top68\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top69\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top70\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top71\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top72\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top73\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top74\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top75\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top76\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top77\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top78\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top79\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top80\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top81\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top82\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top83\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top84\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top85\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top86\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top87\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top88\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top89\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top90\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top91\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top92\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #325ea9;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Ads</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top93\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top94\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #9ebb3d;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Code</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top95\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top96\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #364a5e;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Fact</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top97\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top98\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #92cac5;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Win</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top99\">
                      <figure class=\"cube-face cubeface1\"></figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                    <figure class=\"top top100\">
                      <figure class=\"cube-face cubeface1\" style=\"background: #ed6e11;\">
                        <a href=\"\" style=\" padding: 3px; color: #fff; display: block;\">AFH Sol</a>
                      </figure>
                      <figure class=\"cube-face cubeface2\"></figure>
                      <figure class=\"cube-face cubeface3\"></figure>
                      <figure class=\"cube-face cubeface4\"></figure>
                      <figure class=\"cube-face cubeface5\"></figure>
                    </figure>
                
                  </div>
                </div>
              </div>

              <div class=\"col-md-6\" style=\"padding-top: 50px;\">

                <style>
                  :root{
                  --padding: 21px;
                  --bg-color: #f5f8eb;
                  --text-color: #0a643a;
                  --accent-color: #a0bb2e;
                  --font-family: 'Noticia Text';
                  --font-display: 'Lalezar';
                }

                .article-panel{
                  background: #fff; font-size: 21px; line-height: 2;
                  padding: var(--padding);
                  color: var(--text-color);
                  font-family: var(--font-family);
                }


                .article-detail h2{
                  font-size: 180%;
                  transform: translateX(-5px);
                  font-family: var(--font-display);
                  margin-bottom: 0;
                  line-height: 60px;
                  font-family: Quicksand-Bold;
                  text-transform: capitalize;
                }

                .article-detail  a{
                  color: var(--text-color);
                }

                .article-detail  p{
                  margin-bottom: 2em;
                }
                .article-detail  span.mic:before{
                  content: '🎙️';
                  margin-right: 5px;
                  display: inline-block;
                }

                .article-detail  h2:after{
                  content: '';
                  display: block;
                  height: 8px;
                  background: var(--accent-color);
                  max-width: 55px;
                  transform: skewX(-21deg) translateY(-13px);
                  border-radius: 3px;
                }
                


  .cardcomponent{
\t\tborder-radius: 4px;
\t\tbackground: #fff;
\t\tbox-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
\t\ttransition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
\tpadding: 7px 80px 7px 15px;
\tcursor: pointer;
  line-height: 20px;
  margin-bottom: 15px;
\t}

\t.cardcomponent:hover{
\t\ttransform: scale(1.05);
\tbox-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
\t}


\t.cardcomponent img{
\tposition: absolute;
\ttop: 20px;
\tright: 15px;
\tmax-height: 120px;
\t}

\t.cardcomponent-1{
\t
\t\tbackground-repeat: no-repeat;
\t\tbackground-position: right;
\t\tbackground-size: 80px;
\t}

\t.cardcomponent-2{
\t
\t\tbackground-repeat: no-repeat;
\t\tbackground-position: right;
\t\tbackground-size: 80px;
\t}

\t.cardcomponent-3{
\t\tbackground-repeat: no-repeat;
\t\tbackground-position: right;
\t\tbackground-size: 80px;
\t}

\t@media(max-width: 990px){
\t.cardcomponent{
\t\tmargin: 20px;
\t}
\t}

  .lg-btn-primary{
\theight: 56px; padding: 18px 20px;
\tfont-family: Quicksand-Bold;
\tfont-size: 14px;
\ttext-align: center;
\tcolor: #fff;
\tbackground-color: #9dba3d;
\tborder: 0px solid #283346;
\tborder-radius: 28px; display: inline-block; text-decoration: none!important;
}

.inner-parad-card button.lg-btn-primary span{
  display: none;
}
.inner-parad-card:hover button.lg-btn-primary{
  background-color: #325ea9!important;
}
.inner-parad-card:hover button.lg-btn-primary span{
  display: inline!important;
}

.lg-btn-primary.dark1{
\tbackground: #333!important;
\tcolor: #fff!important;
}
.mg-t-5{
  margin-top: 25px;
}

.btn-afh {
  color: yellow;
  padding: 5px 15px;
  background-color: red;
  border-radius: 20px;
  box-shadow: 5px 5px 5px rgba(51, 51, 51, 0.4);
  overflow: hidden;
  transform: translate(-50%, -50%);
  font-family: Raleway-Medium;
  font-size: 14px;
}
.btn-afh::before {
  content: \"\";
  width: 0%;
  height: 0%;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.3);
  
  transform: translate(-50%, -50%);
  transition: all 0.3s;
}
.btn-afh:hover::before {
  width: 100%;
  padding-top: 100%;
}
.btn-afh span {
  position: relative;
}


                </style>

                <div class=\"article-detail \" style=\"background: #fff; font-size: 21px; line-height: 2;
                      
                padding: var(--padding);
                color: var(--text-color);
                font-family: var(--font-family);\">

                  <h2>Contributions</h2>
                  <h4 style=\"margin-bottom: 20px;\">Notre coeur bat au rythme des projets que nous portons depuis des années avec vous !</h4>

                  <div class=\"cardcomponent cardcomponent-1\" style=\"border-top: 2px solid #99d3ce; background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);\">
                    <h4>Communauté d'experts volontaire</h4>
                    <p style=\"font-family: Muli-Regular; font-size: 12px; margin-bottom: 10px\">Les experts mettent leurs compétences au profit de la croissance des projets AFH et montent en puissance avec les projets sur lesquels ils interviennent.</p>
                    
                      <a href=\"#!\" class=\"btn-afh btn-raised btn-danger\" style=\"background: #9dba3d; color: #fff;\">
                        <span>En savoir plus</span>
                      </a>
                  </div>

                  <div class=\"cardcomponent cardcomponent-2\" style=\"border-top: 2px soli #99d3ce;  background-image: url(https://ionicframework.com/img/getting-started/components-card.png);\">
                    <h4>Communauté d'investisseurs</h4>
                    <p style=\"font-family: Muli-Regular; font-size: 12px;\">Les vionnaires investissent sur les projets AFH dans le but de faire fructifier leurs investissements à cours et à long terme.</p>
                    <a href=\"#!\" class=\"btn-afh btn-raised btn-danger\"  style=\"background: #9dba3d; color: #fff;\">
                      <span>En savoir plus</span>
                    </a>
                  </div>
                  
                </div>

              </div>
          </div>
        </div>
      </section>

      <style>
    .section-card {
      width: 100%;
      margin-left: auto;
      margin-right: auto;
    }
    .section-card + .section-card {
      margin-top: 2.5em;
    }

    .section-card h1 {
      font-weight: 700;
      line-height: 1.125;
      font-size: clamp(1.5rem, 2.5vw, 2.5rem);
    }

    .section-card h2 {
      margin-top: 0.25em;
      color: #999;
      font-size: clamp(1.125rem, 2.5vw, 1.25rem);
    }
    .section-card h2 + * {
      margin-top: 1.5em;
    }

    summary {
      background-color: #fff;
      position: relative;
      cursor: pointer;
      padding: 1em 0.5em;
      list-style: none;
      padding-left: 50px;
      border: 2px solid #fff;
      box-shadow: 0px 2px 8px 0px #b0bec5;
    }
    summary::-webkit-details-marker {
      display: none;
    }
    summary:hover {
      background-color: #f2f5f9;
    }
    summary div {
      display: flex;
      align-items: center;
    }
    summary h3 {
      display: flex;
      flex-direction: column;
    }
    summary small {
      color: #333;
      font-size: 16px;
      font-family: OpenSans-Light;
    }
    summary strong {
      font-weight: 700;
    }
    summary span:first-child {
      width: 4rem;
      height: 4rem;
      border-radius: 10px;
      background-color: #f3e1e1;
      display: flex;
      flex-shrink: 0;
      align-items: center;
      justify-content: center;
      margin-right: 1.25em;
    }
    summary span:first-child svg {
      width: 2.25rem;
      height: 2.25rem;
    }
    summary span:last-child {
      font-weight: 700;
      margin-left: auto;
    }
    summary:focus {
      outline: none;
    }
    summary .plus {
      color: #289672;
    }

    details {
      border-bottom: 1px solid #b5bfd9;
    }
    details[open] {
      box-shadow: -3px 0 0 #b5bfd9;
    }
    details:first-of-type {
      border-top: 1px solid #b5bfd9;
    }
    details > div {
      padding: 2em 2em 0;
      font-size: 0.875em;
    }

    dl {
      display: flex;
      flex-wrap: wrap;
    }
    dl dt {
      font-weight: 700;
    }
    dl div {
      margin-right: 4em;
      margin-bottom: 2em;
    }
    .data-description{
      background: #fff;
    }

    @media (min-width: 576px){
    .box-side-left, .box-side-right{
      background: #93d4cf!important;
      height: 800px;
    }}

    .animated-progress {
      width: 150px;
      height: 20px;
      border-radius: 5px;
      margin: 20px 10px;
      overflow: hidden;
      position: relative;
      box-shadow: 
            inset 0px 11px 8px -10px #CCC,
            inset 0px -11px 8px -10px #CCC; 
    }

    .animated-progress span {
      height: 100%;
      display: block;
      width: 0;
      color: rgb(255, 251, 251);
      line-height: 20px;
      position: absolute;
      text-align: end;
      padding-right: 5px;
    }

    .progress-blue span {
      background-color: #325ea9!important;
    }
    .progress-green span {
      background-color: #9ebb3d!important;
    }
    .progress-purple span {
      background-color: #364a5e!important;
    }
    .progress-red span {
      background-color: #eb6d11!important;
    }
      </style>


<section class=\"small-screen section section-xxl bg-gradient-1\" style=\"position: relative!important;z-index: 1;\">
  <div class=\"container\">
      <div class=\"article-detail\" style=\"background: #fff; font-size: 21px; line-height: 2;
          padding: var(--padding);
          color: var(--text-color);
          font-family: var(--font-family);\">
          <h2>AFHunt en bref</h2>
          <h4>5 minutes pour un aperçu des engagements AFHunt.</h4>
       </div>
  </div>
  
<div class=\"owl-carousel owl-style-1 owl-loaded owl-drag\" data-md-items=\"2\" data-nav=\"true\" data-margin=\"13\" style=\"\">

  <div class=\"owl-stage-outer\">
    <div class=\"owl-stage\" style=\"transform: translate3d(-1540px, 0px, 0px); transition: all 0.25s ease 0s;\">
      <div class=\"owl-item cloned\" style=\"width: 372.112px; margin-right: 13px;\">
        <a href=\"#!\" class=\"inner-parad-card first-item collapse-gigamenu\"  value=\"about\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">
  
          <div class=\"text-left\">
            <img src=\"";
        // line 1580
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_01.png"), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"help-title\">
              À propos de AFHunt
          </div>
  
          <div class=\"help-content\">
            Nous sommes un groupe d'ingénieurs en chasse des technologies à la pointe contribuant à la croissance et le contrôle automatisé du flux d’opérations des startups et PMEs Moderne.
          </div>
  
          <ul class=\"tags-box\">
            <li>Vision</li>
            <li>Mission</li>
            <li>Equipe</li>
            <li>Conférences</li>
          </ul>
  
          <div class=\"text-center mg-t-5\">
              <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
          </div>
        </a>
        
      </div>
  
      <div class=\"owl-item active\" style=\"width: 372.112px; margin-right: 13px;\">
        <a href=\"#!\" class=\"inner-parad-card first-item collapse-gigamenu\"  value=\"projet\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">
  
          <div class=\"text-left\">
            <img src=\"";
        // line 1608
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_01.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
          </div>
          <div class=\"help-title\">
              Les projets
          </div>
  
          <div class=\"help-content\">
            Pendant ";
        // line 1615
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 2013), "html", null, true);
        echo " années d’exercices, nous avons réalisé un nombre important de projets pour les entreprises, les organisations, les gouvernements et les particuliers ! </br>Découvrez quelques un ci-dessous.
          </div>
  
  
          <ul class=\"tags-box\">
            <li>Liste</li>
            <li>Investir</li>
            <li>Commander</li>
          </ul>
  
          <div class=\"text-center mg-t-5\">
            <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
          </div>
        </a>
      </div>
  
      <div class=\"owl-item \" style=\"width: 372.112px; margin-right: 13px;\">
        
        <a href=\"#!\" class=\"inner-parad-card second-item collapse-gigamenu\"  value=\"statistique\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">
  
          <div class=\"text-left\">
            <img src=\"";
        // line 1636
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_14.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
          </div>
          <div class=\"help-title\">
              Les statistiques
          </div>
  
          <div class=\"help-content\">
            Nous avons connus quelques effets boule de neige qui ont contribués à la constitution des communautés intéressé et active autours des projets divers que nous représentons aujourd’hui ! 
          </div>
  
          <ul class=\"tags-box\">
            <li>Communautés</li>
            <li>Investissements</li>
            <li>RH</li>
          </ul>
          
          <div class=\"text-center mg-t-5\">
            <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
          </div>
  
        </a>
  
      </div>
  
      <div class=\"owl-item cloned\" style=\"width: 372.112px; margin-right: 13px;\">
        <a href=\"\" class=\"inner-parad-card third-item\" data-parallax-scroll=\"{&quot;y&quot;: -90,  &quot;smoothness&quot;: 30}\">
  
          <div class=\"text-left\">
            <img src=\"";
        // line 1664
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/images/img_box_16.png"), "html", null, true);
        echo "\" alt=\"\" style=\"\">
          </div>
          <div class=\"help-title\">
              Nos Offres d'emploi
          </div>
  
          <div class=\"help-content\">
            Outil mis à la disposition du personnel métier de la chaine de contrôle du régime de vignettes
          </div>
  
          <div class=\"text-center mg-t-5\">
            <button class=\"lg-btn-primary\">Consulter <span class=\"fa fa-arrow-right\"></span></button>
          </div>
  
          <span class=\"btn-item-action\">Continuer <span class=\"fa fa-chevron-circle-right\"></span> </span>
        </a>
      </div>

    </div>
  </div>

    <div class=\"owl-nav\">
    <button type=\"button\" role=\"presentation\" class=\"owl-prev\">
      <svg width=\"57\" height=\"63\" viewBox=\"0 0 57 63\" fill=\"none\">
        <path d=\"M22.5 2.4641C26.2128 0.320508 30.7872 0.320508 34.5 2.4641L50.6458 11.7859C54.3586 13.9295 56.6458 17.891 56.6458 22.1782V40.8218C56.6458 45.109 54.3586 49.0705 50.6458 51.2141L34.5 60.5359C30.7872 62.6795 26.2128 62.6795 22.5 60.5359L6.35417 51.2141C2.64136 49.0705 0.354174 45.109 0.354174 40.8218L0.354174 22.1782C0.354174 17.891 2.64136 13.9295 6.35417 11.7859L22.5 2.4641Z\" fill=\"#39BA82\"></path>
      </svg>
    </button>
    <button type=\"button\" role=\"presentation\" class=\"owl-next\">
      <svg width=\"57\" height=\"63\" viewBox=\"0 0 57 63\" fill=\"none\">
        <path d=\"M22.5 2.4641C26.2128 0.320508 30.7872 0.320508 34.5 2.4641L50.6458 11.7859C54.3586 13.9295 56.6458 17.891 56.6458 22.1782V40.8218C56.6458 45.109 54.3586 49.0705 50.6458 51.2141L34.5 60.5359C30.7872 62.6795 26.2128 62.6795 22.5 60.5359L6.35417 51.2141C2.64136 49.0705 0.354174 45.109 0.354174 40.8218L0.354174 22.1782C0.354174 17.891 2.64136 13.9295 6.35417 11.7859L22.5 2.4641Z\" fill=\"#39BA82\"></path>
      </svg>
    </button>
  </div>
  <div class=\"owl-dots disabled\"></div>
</div>

</section>



      <section class=\"bg-default section-xxl position-relative\" style=\"position: relative!important;z-index: 1; padding-top: 0px!important; margin-bottom: -20px;\">
        <div class=\"box-side box-side-left bg-gradient-1\"></div>
        <div class=\"box-side box-side-right bg-gradient-1-reverse\"></div>
        
      <div>
        <div class=\"container position-relative\">
          <div class=\" wow fadeInUp\">
            <div class=\"article-detail\" style=\"background: #fff; font-size: 21px; line-height: 2;
                      
                padding: var(--padding);
                color: var(--text-color);
                font-family: var(--font-family);\">
                <h2>Programme et expertise IT</h2>
                <h4>Nous travaillons de façon stratégique avec nos partenaires main dans la main pour le développement et l'innovation dans les secteurs ci-dessous:</h4>
            </div>
          </div>
        </div>
      </div>

      <div class=\"container position-relative\">

          <div class=\"row row-gutter-42\" style=\"margin: 30px 0px 0px 0px;\">

            <div class=\"col-md-12\">
              <section class=\"section-card\">
            
                <details>
                  <summary>
                    <div>
                      <span style=\"background-color: #f2dcbb; margin-right: 25px;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"192\" height=\"192\" fill=\"currentColor\" viewBox=\"0 0 256 256\">
                          <rect width=\"256\" height=\"256\" fill=\"none\"></rect>
                          <path d=\"M192,120h27.05573a8,8,0,0,0,7.15542-4.42229l18.40439-36.80878a8,8,0,0,0-3.18631-10.52366L192,40\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                          <path d=\"M64,120H36.94427a8,8,0,0,1-7.15542-4.42229L11.38446,78.76893a8,8,0,0,1,3.18631-10.52366L64,40\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                          <path d=\"M160,40a32,32,0,0,1-64,0H64V208a8,8,0,0,0,8,8H184a8,8,0,0,0,8-8V40Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                        </svg>
                      </span>
                      <h3>
                        <strong>cloud Computing</strong>
                        <small>Une Infrastructure solide comme du rock</small>
                      </h3>
                      <span>

                        <div class=\"animated-progress progress-blue\">
                          <span data-progress=\"45\"></span>
                        </div>

                      </span>
                    </div>
                  </summary>
                  <div class=\"data-description\">
                    <dl>
                      <div>
                        <dt>Time</dt>
                        <dd>4.27pm</dd>
                      </div>
              
                      <div>
                        <dt>Card used</dt>
                        <dd>•••• 6890</dd>
                      </div>
              
                      <div>
                        <dt>Reference ID</dt>
                        <dd>3125-568911</dd>
                      </div>
                    </dl>
                  </div>
                </details>
                <details>
                  <summary>
                    <div>
                      <span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"192\" height=\"192\" fill=\"currentColor\" viewBox=\"0 0 256 256\">
                          <rect width=\"256\" height=\"256\" fill=\"none\"></rect>
                          <rect x=\"32\" y=\"80\" width=\"192\" height=\"48\" rx=\"7.99999\" stroke-width=\"16\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"></rect>
                          <path d=\"M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                          <line x1=\"128\" y1=\"80\" x2=\"128\" y2=\"208\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></line>
                          <path d=\"M173.25483,68.68629C161.94113,80,128,80,128,80s0-33.94113,11.31371-45.25483a24,24,0,0,1,33.94112,33.94112Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                          <path d=\"M82.74517,68.68629C94.05887,80,128,80,128,80s0-33.94113-11.31371-45.25483A24,24,0,0,0,82.74517,68.68629Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                        </svg>
                      </span>
                      <h3>
                        <strong>Big Data et Référencement web</strong>
                        <small>Des données  gigantesque gérées sur des architectures moderne.</small>
                      </h3>
                      <span class=\"plus\">
                        <div class=\"animated-progress progress-green\">
                          <span data-progress=\"60\"></span>
                        </div>
                      </span>
                    </div>
                  </summary>
                  <div class=\"data-description\">
                    <dl>
                      <div>
                        <dt>Time</dt>
                        <dd>8.14am</dd>
                      </div>
              
                      <div>
                        <dt>Reference ID</dt>
                        <dd>3125-568912</dd>
                      </div>
                    </dl>
                  </div>
                </details>
                <details>
                  <summary>
                    <div>
                      <span style=\"background-color: #e0ece4;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"192\" height=\"192\" fill=\"#000000\" viewBox=\"0 0 256 256\">
                          <rect width=\"256\" height=\"256\" fill=\"none\"></rect>
                          <line x1=\"88\" y1=\"24\" x2=\"88\" y2=\"56\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></line>
                          <line x1=\"120\" y1=\"24\" x2=\"120\" y2=\"56\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></line>
                          <line x1=\"152\" y1=\"24\" x2=\"152\" y2=\"56\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></line>
                          <line x1=\"32\" y1=\"216\" x2=\"208\" y2=\"216\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></line>
                          <path d=\"M83.29651,216.0038A88.01441,88.01441,0,0,1,32,136V88H208v48a88.0144,88.0144,0,0,1-51.29712,80.00408\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                          <path d=\"M208,88h0a32,32,0,0,1,32,32V128a32,32,0,0,1-32,32h-3.37846\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path>
                        </svg>
                      </span>
                      <h3>
                        <strong>E-commerce et Marketing Automation</strong>
                        <small>Food & Beverage</small>
                      </h3>
                      <span>
                        <div class=\"animated-progress progress-purple\">
                          <span data-progress=\"70\"></span>
                        </div>
                      </span>
                    </div>
                  </summary>
                  <div class=\"data-description\">
                    <dl>
                      <div>
                        <dt>Time</dt>
                        <dd>7.49am</dd>
                      </div>
              
                      <div>
                        <dt>Card used</dt>
                        <dd>•••• 6890</dd>
                      </div>
              
                      <div>
                        <dt>Reference ID</dt>
                        <dd>3125-568913</dd>
                      </div>
                    </dl>
                  </div>
                </details>
                <details>
                  <summary>
                    <div>
                      <span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"192\" height=\"192\" fill=\"#000000\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"></rect><circle cx=\"128\" cy=\"128\" r=\"96\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></circle><g><path d=\"M179.1333,108.32931a112.19069,112.19069,0,0,0-102.3584.04859\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path><path d=\"M164.29541,136.71457a79.94058,79.94058,0,0,0-72.68359.04736\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path><path d=\"M149.47217,165.07248a47.97816,47.97816,0,0,0-43.03662.04736\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path></g></svg>
                      </span>
                      <h3>
                        <strong>Robotique et Intelligence Artificielle</strong>
                        <small>Music & Entertainment</small>
                      </h3>
                      <span>
                        <div class=\"animated-progress progress-red\">
                          <span data-progress=\"20\"></span>
                        </div>
                      </span>
                    </div>
                  </summary>
                  <div class=\"data-description\">
                    <dl>
                      <div>
                        <dt>Time</dt>
                        <dd>1.00am</dd>
                      </div>
              
                      <div>
                        <dt>Card used</dt>
                        <dd>•••• 6890</dd>
                      </div>
              
                      <div>
                        <dt>Reference ID</dt>
                        <dd>3125-568915</dd>
                      </div>
                    </dl>
                  </div>
                </details>

                <details>
                  <summary>
                    <div>
                      <span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"192\" height=\"192\" fill=\"#000000\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"></rect><circle cx=\"128\" cy=\"128\" r=\"96\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></circle><g><path d=\"M179.1333,108.32931a112.19069,112.19069,0,0,0-102.3584.04859\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path><path d=\"M164.29541,136.71457a79.94058,79.94058,0,0,0-72.68359.04736\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path><path d=\"M149.47217,165.07248a47.97816,47.97816,0,0,0-43.03662.04736\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path></g></svg>
                      </span>
                      <h3>
                        <strong>Génie logiciel: Applis sur mesure et réalité virtuelle</strong>
                        <small>Music & Entertainment</small>
                      </h3>
                      <span>
                        <div class=\"animated-progress progress-blue\">
                          <span data-progress=\"45\"></span>
                        </div>
                      </span>
                    </div>
                  </summary>
                  <div class=\"data-description\">
                    <dl>
                      <div>
                        <dt>Time</dt>
                        <dd>1.00am</dd>
                      </div>
              
                      <div>
                        <dt>Card used</dt>
                        <dd>•••• 6890</dd>
                      </div>
              
                      <div>
                        <dt>Reference ID</dt>
                        <dd>3125-568915</dd>
                      </div>
                    </dl>
                  </div>
                </details>

                <details>
                  <summary>
                    <div>
                      <span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"192\" height=\"192\" fill=\"#000000\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"></rect><circle cx=\"128\" cy=\"128\" r=\"96\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></circle><g><path d=\"M179.1333,108.32931a112.19069,112.19069,0,0,0-102.3584.04859\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path><path d=\"M164.29541,136.71457a79.94058,79.94058,0,0,0-72.68359.04736\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path><path d=\"M149.47217,165.07248a47.97816,47.97816,0,0,0-43.03662.04736\" fill=\"none\" stroke=\"#000000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"></path></g></svg>
                      </span>
                      <h3>
                        <strong>Industrie: transformation de la production locale</strong>
                        <small>Music & Entertainment</small>
                      </h3>
                      <span>
                        <div class=\"animated-progress progress-green\">
                          <span data-progress=\"18\"></span>
                        </div>
                      </span>
                    </div>
                  </summary>
                  <div class=\"data-description\">
                    <dl>
                      <div>
                        <dt>Time</dt>
                        <dd>1.00am</dd>
                      </div>
              
                      <div>
                        <dt>Card used</dt>
                        <dd>•••• 6890</dd>
                      </div>
              
                      <div>
                        <dt>Reference ID</dt>
                        <dd>3125-568915</dd>
                      </div>
                    </dl>
                  </div>
                </details>

              </section>
            </div>

          </div>
        </div>
      </section>

      <div class=\"testimonials-clean\" style=\"position: relative!important; margin: -70px 0px 40px 0px; z-index: 5;\">
        <div class=\"container\">
          <div class=\"article-detail\">
            <h2>Nos piliés de développement</h2>
            <h4>Notre développement est basé sur un canal bien définit que nous déveleppons progressivement avec beaucoup de passion.</h4>
          </div>
            <div class=\"row people\">
                <div class=\"col-md-6 col-lg-4 item\">
                    <div class=\"box\">
                        <p class=\"description\">
                          Nous nous efforçons de toujours propulsé les produits et services formidables dans un environnement qui stimule la créativité !
                          <br/>
                          <span class=\"fa fa-quote-left\"></span> _Pour y arriver nous travaillons avec beaucoup de partenaires et d'experts.
                        </p>
                    </div>
                    <div class=\"author\"><img class=\"rounded-circle\" src=\"https://i.imgur.com/o5uMfKo.jpg\">
                        <h5 class=\"name\">Production</h5>
                        <p class=\"title\">Infrastructure & Architecture</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 item\">
                    <div class=\"box\">
                        <p class=\"description\">
                          Nous intégrons l'acheminement de nos services et produits sur les circuits naturellement et ou automatiquement développés par les entités du groupe et nos services intelligeant.
                        </p>
                    </div>
                    <div class=\"author\"><img class=\"rounded-circle\" src=\"https://i.imgur.com/o5uMfKo.jpg\">
                        <h5 class=\"name\">Vulgarisation</h5>
                        <p class=\"title\">La communication auto.</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 item\">
                    <div class=\"box\">
                        <p class=\"description\">
                          Nous développons des communautés aimables et aimées qui partagent nos produits et services pour rendre leurs tâches quotidiennes moins douloureuses.
                          <br/>
                          <span class=\"fa fa-quote-left\"></span> Experts, Investisseurs, Clients, etc..
                        </p>
                    </div>
                    <div class=\"author\">
                      <img class=\"rounded-circle\" src=\"https://i.imgur.com/o5uMfKo.jpg\">
                        <h5 class=\"name\">Consommation</h5>
                        <p class=\"title\">Les communautés</p>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <style>

        .ressources-items{
          position: absolute!important; z-index: 5!important; top: 10px!important; left: 15PX!important;
        }
        .ressources-items .libele-item{
          color: white;
          text-shadow: 2px 2px 4px #000000; font-size: 20px;
        }

      </style>


      <section class=\"section \" style=\" background-color: #fff;\">
        <div class=\"container\">
          <div class=\"article-detail\">
            <h2>Nous nous mobilisons sur plusieurs fronts au quotidien</h2>
            <h4>Nous organisons et participons aux séminaires, aux évènements et ateliers dans le but de former, d'orienter et de dénicher les talents pour les projets AFH de grande envergure.</h4>
          </div>
        </div>
        <div class=\"owl-carousel owl-style-1 owl-loaded owl-drag\" data-md-items=\"2\" data-autoplay=\"false\" data-nav=\"true\" data-margin=\"13\" style=\"\">

        <div class=\"owl-stage-outer\">
          <div class=\"owl-stage\" style=\"transform: translate3d(-1540px, 0px, 0px); transition: all 0.25s ease 0s; \">
            
            <div class=\"owl-item cloned\" style=\"margin-right: 13px; position: sticky;\">
              <div class=\"page-figure-wrap\">
                <a class=\"page-figure\">
                  <div class=\"ressources-items\">
                    <div class=\"libele-item\">Une affaire</div>
                  </div>

                  <img src=\"";
        // line 2054
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/ressources/res01.jpeg"), "html", null, true);
        echo "\" alt=\"\" width=\"381\" height=\"559\">
                </a>
              </div>
            </div>

            <div class=\"owl-item active\" style=\"width: 372.112px; margin-right: 13px;\">
              <div class=\"page-figure-wrap\">
                <a class=\"page-figure\" href=\"\">
                  <div class=\"ressources-items\">
                    <div class=\"libele-item\">Une affaire</div>
                  </div>
                  <img src=\"";
        // line 2065
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/ressources/seminaire.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"559\" height=\"381\">
                </a>
              </div>
            </div>

            <div class=\"owl-item cloned\" style=\"width: 372.112px; margin-right: 13px;\">
              <div class=\"page-figure-wrap\"> 
                <a class=\"page-figure\" href=\"\"> 
                  <div class=\"ressources-items\"> 
                    <div class=\"libele-item\">Une affaire</div> 
                  </div>
                  <img src=\"";
        // line 2076
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/ressources/res03.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"559\" height=\"381\">
                </a>
              </div>
            </div>

            <div class=\"owl-item\" style=\"width: 372.112px; margin-right: 13px;\">
              <div class=\"page-figure-wrap\">
                <a class=\"page-figure\" href=\"\">
                  <div class=\"ressources-items\"> 
                    <div class=\"libele-item\">Une affaire</div> 
                  </div>
                  <img src=\"";
        // line 2087
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/ressources/res04.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"559\" height=\"381\">
                </a>
              </div>
            </div>

            <div class=\"owl-item\" style=\"width: 372.112px; margin-right: 13px;\">
              <div class=\"page-figure-wrap\">
                <a class=\"page-figure\" href=\"\">
                  <div class=\"ressources-items\"> 
                    <div class=\"libele-item\">Une affaire</div> 
                  </div>
                  <img src=\"";
        // line 2098
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/ressources/res06.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"559\" height=\"381\">
                </a>
              </div>
            </div>
            
            <div class=\"owl-item\" style=\"width: 372.112px; margin-right: 13px;\">
              <div class=\"page-figure-wrap\">
                <a class=\"page-figure\" href=\"\">
                  <div class=\"ressources-items\"> 
                    <div class=\"libele-item\">Une affaire</div> 
                  </div>
                  <img src=\"";
        // line 2109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/ressources/res05.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"559\" height=\"381\">
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class=\"owl-nav\">
            <button type=\"button\" role=\"presentation\" class=\"owl-prev\" styme=\"\">
              <svg width=\"57\" height=\"63\" viewBox=\"0 0 57 63\" fill=\"none\">
                <path d=\"M22.5 2.4641C26.2128 0.320508 30.7872 0.320508 34.5 2.4641L50.6458 11.7859C54.3586 13.9295 56.6458 17.891 56.6458 22.1782V40.8218C56.6458 45.109 54.3586 49.0705 50.6458 51.2141L34.5 60.5359C30.7872 62.6795 26.2128 62.6795 22.5 60.5359L6.35417 51.2141C2.64136 49.0705 0.354174 45.109 0.354174 40.8218L0.354174 22.1782C0.354174 17.891 2.64136 13.9295 6.35417 11.7859L22.5 2.4641Z\" fill=\"#9EBB3C\"></path>
              </svg>
            </button>
            <button type=\"button\" role=\"presentation\" class=\"owl-next\">
              <svg width=\"57\" height=\"63\" viewBox=\"0 0 57 63\" fill=\"none\">
                <path d=\"M22.5 2.4641C26.2128 0.320508 30.7872 0.320508 34.5 2.4641L50.6458 11.7859C54.3586 13.9295 56.6458 17.891 56.6458 22.1782V40.8218C56.6458 45.109 54.3586 49.0705 50.6458 51.2141L34.5 60.5359C30.7872 62.6795 26.2128 62.6795 22.5 60.5359L6.35417 51.2141C2.64136 49.0705 0.354174 45.109 0.354174 40.8218L0.354174 22.1782C0.354174 17.891 2.64136 13.9295 6.35417 11.7859L22.5 2.4641Z\" fill=\"#9EBB3C\"></path>
              </svg>
            </button>
          </div>
          <div class=\"owl-dots disabled\">
          </div>
        </div>
      </section>


<style>
  .title-section-part {
  font-size: 50px;
  background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
}
</style>

<script src=\"";
        // line 2146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("afhholding/js/slick.js"), "html", null, true);
        echo "\"></script>
<section style=\"margin-bottom: 20px; margin-top: 20px;\">
  <div class=\"container\">
    <div class=\"article-detail\">
    <h2 class=\"title-section-part\" >Partenaires AFHunt Holding</h2>
    </div>
    <section class=\"customer-logos slider\">
        <div class=\"slide\"><img src=\"";
        // line 2153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logooj.png"), "html", null, true);
        echo "\" alt=\"Omnijobber\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoovh.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoamazone.png"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/france-dns.png"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-factory.png"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoapme.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/i-web.png"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/domainebox.png"), "html", null, true);
        echo "\"></div>
        <div class=\"slide\"><img src=\"";
        // line 2161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logo-symfony.png"), "html", null, true);
        echo "\"></div>
    </section>
  </div>
</section>

<script>
  \$(document).ready(function(){
  \$('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });
});

\$(\".animated-progress span\").each(function () {
  \$(this).animate(
    {
      width: \$(this).attr(\"data-progress\") + \"%\",
    },
    1000
  );
  \$(this).text(\$(this).attr(\"data-progress\") + \"%\");
});
</script>

    </div>
    

";
    }

    // line 2206
    public function block_javascripttemplate($context, array $blocks = array())
    {
        // line 2207
        echo "
";
    }

    public function getTemplateName()
    {
        return "UsersUserBundle:Security:accueilsite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2354 => 2207,  2351 => 2206,  2303 => 2161,  2299 => 2160,  2295 => 2159,  2291 => 2158,  2287 => 2157,  2283 => 2156,  2279 => 2155,  2275 => 2154,  2271 => 2153,  2261 => 2146,  2221 => 2109,  2207 => 2098,  2193 => 2087,  2179 => 2076,  2165 => 2065,  2151 => 2054,  1758 => 1664,  1727 => 1636,  1703 => 1615,  1693 => 1608,  1662 => 1580,  438 => 359,  406 => 330,  374 => 301,  349 => 279,  339 => 272,  111 => 47,  94 => 33,  80 => 22,  76 => 20,  73 => 19,  66 => 16,  63 => 15,  56 => 12,  53 => 11,  42 => 5,  38 => 4,  35 => 3,  32 => 2,);
    }
}
