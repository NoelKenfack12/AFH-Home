<?php

/* ProduitServiceBundle:Service:applicationstat.html.twig */
class __TwigTemplate_20497f2d25157e0162d64deb644cfb76fae5287011abc50e94881b89c0a379b7 extends Twig_Template
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
        echo "<div class=\"col-md-12\" style=\"padding: 0px 30px;\">

";
        // line 3
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == 1)) {
            // line 4
            echo "<div class=\"comparison\" style=\"padding: 0px 0px;\">
<table id=\"myTable\">
<thead style=\"background: #005dff; color: #fff;\">
  <tr>
\t<th class=\"tl\">
\t\t<strong style=\"font-size: 20px; float: left;\">Produits/Services</strong>
\t</th>
\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_indicateur"]) ? $context["liste_indicateur"] : $this->getContext($context, "liste_indicateur")));
            foreach ($context['_seq'] as $context["_key"] => $context["indicateur"]) {
                // line 12
                echo "\t<th class=\"compare-heading\">
\t  ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["indicateur"]) ? $context["indicateur"] : $this->getContext($context, "indicateur")), "nom"), "html", null, true);
                echo "
\t</th>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </tr>
</thead>
<tbody>
  ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all_appli"]) ? $context["all_appli"] : $this->getContext($context, "all_appli")));
            foreach ($context['_seq'] as $context["_key"] => $context["appli"]) {
                // line 20
                echo "  <tr class=\"compare-row\" title=\"\">
\t<td></td>
\t<td style=\"font-weight: bold;\" colspan=\"5\"><img src=\"";
                // line 22
                if (($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "src") != null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "getwebpath")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/600.jpg"), "html", null, true);
                }
                echo "\" alt=\"\" style=\"width: 30px; height: 30px; margin-right: 15px; \"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "nom"), "html", null, true);
                echo "</td>
  </tr>

  <tr class=\"compare-row\" title=\"\">
\t<td style=\"font-weight: bold;\"><img src=\"";
                // line 26
                if (($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "src") != null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "getwebpath")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templateafh/images/600.jpg"), "html", null, true);
                }
                echo "\" alt=\"\" style=\"width: 30px; height: 30px; margin-right: 15px; \"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "nom"), "html", null, true);
                echo "</td>
\t
\t";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["liste_indicateur"]) ? $context["liste_indicateur"] : $this->getContext($context, "liste_indicateur")));
                foreach ($context['_seq'] as $context["_key"] => $context["indicateur"]) {
                    // line 29
                    echo "\t\t";
                    $context["currentval"] = $this->getAttribute((isset($context["indicateur"]) ? $context["indicateur"] : $this->getContext($context, "indicateur")), "getvaleurAppli", array(0 => $this->getAttribute((isset($context["appli"]) ? $context["appli"] : $this->getContext($context, "appli")), "id"), 1 => (isset($context["anneeid"]) ? $context["anneeid"] : $this->getContext($context, "anneeid"))), "method");
                    // line 30
                    echo "\t\t
\t\t";
                    // line 40
                    echo "\t\t
\t\t";
                    // line 41
                    if (((isset($context["currentval"]) ? $context["currentval"] : $this->getContext($context, "currentval")) != null)) {
                        // line 42
                        echo "\t\t\t<td class=\"text-center\" style=\"background: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentval"]) ? $context["currentval"] : $this->getContext($context, "currentval")), "getCodecouleur"), 0, array(), "array"), "html", null, true);
                        echo ";\"><span class=\"tickblue\" style=\"color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentval"]) ? $context["currentval"] : $this->getContext($context, "currentval")), "getCodecouleur"), 1, array(), "array"), "html", null, true);
                        echo "; border-bottom : 2px solid red;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentval"]) ? $context["currentval"] : $this->getContext($context, "currentval")), "falsevalue"), "html", null, true);
                        echo " </span></td>
\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t<td class=\"text-center\"><span class=\"tickblue\" style=\"color: #333; border-bottom : 2px solid red;\">-</span></td>
\t\t";
                    }
                    // line 46
                    echo "\t\t
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicateur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "\t
  </tr>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appli'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "</tbody>
<tfoot style=\"background: #005dff; color: #fff;\">
  <tr>
\t<th class=\"tl\">
\t\t<strong style=\"font-size: 20px; float: left;\">Produits/Services</strong>
\t</th>
\t";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_indicateur"]) ? $context["liste_indicateur"] : $this->getContext($context, "liste_indicateur")));
            foreach ($context['_seq'] as $context["_key"] => $context["indicateur"]) {
                // line 58
                echo "\t<th class=\"compare-heading\">
\t  ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["indicateur"]) ? $context["indicateur"] : $this->getContext($context, "indicateur")), "nom"), "html", null, true);
                echo "
\t</th>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "  </tr>
</tfoot>
</table>
</div>

";
        } else {
            // line 68
            echo "\t<h3 style=\"text-align: center; margin-top: 40px;\">
\tPatientez pendant le chargement des statistiques ...</br>
\t<img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/loader.gif"), "html", null, true);
            echo "\" alt=\"Attente\" style=\"height: 20px; width: 20px; margin-top: 10px;\"/>
\t</h3>
";
        }
        // line 73
        echo "</div>


<script type=\"text/javascript\">
\$('.open-stat-current-year').click(function(){
\tvar height = (\$(window).height() + \$(window).scrollTop());
\tvar width = \$(window).width() + 100;
\tvar scrolltop = \$(window).scrollTop();
\t\$('.panel-result-action-hosting-user').show();
\t\$('.content-alert-action-hosting-user').show();
\t\$('.img-loader-panel').show();
\t\$('.content-alert-action-hosting-user').html('<div style=\"position: fixed; top: 0px; margin-bottom: '+scrolltop+'px; left: 0px; z-index: 9000; width: '+width+'px; height: '+height+'px; background: rgba(0,0,0,0.5);\"></div>');

\tuploadSlideCatalogue(\$(this).attr('value'));
});

var idyear = 0;
function uploadSlideCatalogue(idyear)
{
\tidyear = idyear;
\tif(\$('.content-stat-application-current-year').attr('value') == 0)
\t{
\t\$('.content-stat-application-current-year').attr('value', 1);
    \$.ajax({
\t\turl : '";
        // line 97
        echo $this->env->getExtension('routing')->getPath("produit_service_chargement_statatistique_annee", array("position" => 1));
        echo "',
\t\ttype : 'POST',
\t\tdataType : 'html', // On désire recevoir du HTML
\t\tdata : \"anneeid=\" + idyear,
\t\tsuccess : function(data, statut){ // code_html contient le HTML renvoyé
\t\t  \$('.content-stat-application-current-year').html(data);
\t\t  \$('.open-stat-current-year').removeClass('activestatyear');
\t\t  \$('.open-stat-current-year-'+idyear).addClass('activestatyear');
\t\t  
\t\t  \$('.panel-result-action-hosting-user').hide();
\t\t  \$('.content-alert-action-hosting-user').hide();
\t\t  \$('.img-loader-panel').hide();
\t\t  \$('.content-stat-application-current-year').attr('value', 0);
\t\t},
        error : function(resultat, statut, erreur){
            var hauteur1 = \$(\".error-manager-catalogue\").height() - 15;
            var largeur1 = \$(\".error-manager-catalogue\").width();
            var padding1 = Math.round(hauteur1/2 - 60);
            \$(\".error-manager-catalogue\").before('<div class=\"attente-resultat-ajax-catalogue\" style=\"padding-top: '+80+'px; z-index: 1; height: '+hauteur1+'px; text-align: center; vertical-align: center; width: '+largeur1+'px; position: absolute; background: #fff; margin-top: 7px;\"><div>Erreur de chargement ! </br><a href=\"#!\" onclick=\"rechargementcatalogue()\"><span class=\"fa fa-repeat\"></span> Recharger</a></div></div>');
\t\t\t
\t\t\t\$('.panel-result-action-hosting-user').hide();
\t\t\t\$('.content-alert-action-hosting-user').hide();
\t\t\t\$('.img-loader-panel').hide();
\t\t\t\$('.content-stat-application-current-year').attr('value', 0);
\t   }
\t});
\t}
}

function rechargementcatalogue(){
    \$('.attente-resultat-ajax-catalogue').replaceWith('');
\tvar height = (\$(window).height() + \$(window).scrollTop());
\tvar width = \$(window).width() + 100;
\tvar scrolltop = \$(window).scrollTop();
\t\$('.panel-result-action-hosting-user').show();
\t\$('.content-alert-action-hosting-user').show();
\t\$('.img-loader-panel').show();
\t\$('.content-alert-action-hosting-user').html('<div style=\"position: fixed; top: 0px; margin-bottom: '+scrolltop+'px; left: 0px; z-index: 9998000; width: '+width+'px; height: '+height+'px; background: rgba(0,0,0,0.5);\"></div>');

    uploadSlideCatalogue(idyear);
}
</script>";
    }

    public function getTemplateName()
    {
        return "ProduitServiceBundle:Service:applicationstat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 97,  173 => 73,  167 => 70,  163 => 68,  155 => 62,  146 => 59,  143 => 58,  139 => 57,  131 => 51,  123 => 48,  116 => 46,  112 => 44,  102 => 42,  100 => 41,  97 => 40,  94 => 30,  91 => 29,  87 => 28,  76 => 26,  63 => 22,  59 => 20,  55 => 19,  50 => 16,  41 => 13,  38 => 12,  34 => 11,  25 => 4,  23 => 3,  19 => 1,);
    }
}
