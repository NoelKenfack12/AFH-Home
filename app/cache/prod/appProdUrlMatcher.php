<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/nous/contacter')) {
            // produit_service_contact_us
            if ($pathinfo === '/nous/contacter') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessageController::contactusAction',  '_route' => 'produit_service_contact_us',);
            }

            // produit_service_contact_us_slache
            if (rtrim($pathinfo, '/') === '/nous/contacter') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'produit_service_contact_us_slache');
                }

                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessageController::contactusAction',  '_route' => 'produit_service_contact_us_slache',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // produit_service_chargement_statatistique_annee
            if (0 === strpos($pathinfo, '/chargement/statatistique/annee') && preg_match('#^/chargement/statatistique/annee(?:/(?P<position>\\d+)(?:/(?P<anneeid>\\d+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_service_chargement_statatistique_annee')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::applicationstatAction',  'position' => 0,  'anneeid' => 0,));
            }

            // produit_service_callback_homepage
            if ($pathinfo === '/callback/homepage/afh') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::callbackhomepageAction',  '_route' => 'produit_service_callback_homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/market')) {
            // produit_produit_liste_produit_souscategorie
            if (0 === strpos($pathinfo, '/market/liste/produit/souscategorie') && preg_match('#^/market/liste/produit/souscategorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_liste_produit_souscategorie')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::listeproduituserAction',));
            }

            // produit_produit_detail_produit_market
            if (0 === strpos($pathinfo, '/market/detail/produit') && preg_match('#^/market/detail/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_detail_produit_market')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::detailproduitAction',));
            }

        }

        // produit_produit_like_courant_product
        if ($pathinfo === '/like/courant/product') {
            return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::likeproductAction',  '_route' => 'produit_produit_like_courant_product',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // produit_produit_ajouter_product_panier
            if ($pathinfo === '/ajouter/product/panier') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::ajouterpanierAction',  '_route' => 'produit_produit_ajouter_product_panier',);
            }

            // produit_produit_add_panier_produit
            if (0 === strpos($pathinfo, '/add/panier/produit') && preg_match('#^/add/panier/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_add_panier_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::addpanierAction',));
            }

        }

        // produit_produit_reglement_commande_du_panier
        if (0 === strpos($pathinfo, '/reglement/commande/dupanier') && preg_match('#^/reglement/commande/dupanier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_reglement_commande_du_panier')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::reglementcommandeAction',));
        }

        if (0 === strpos($pathinfo, '/e')) {
            // produit_produit_editer_courant_commande
            if ($pathinfo === '/edit/courant/commande') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::editcommandeAction',  '_route' => 'produit_produit_editer_courant_commande',);
            }

            // produit_produit_elever_produit_commande
            if (0 === strpos($pathinfo, '/enleve/produit/commande') && preg_match('#^/enleve/produit/commande/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_elever_produit_commande')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::eleveproduitAction',));
            }

        }

        // produit_produit_recherche_new_produit
        if ($pathinfo === '/recherche/new/produit') {
            return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::rechercheproduitAction',  '_route' => 'produit_produit_recherche_new_produit',);
        }

        // produit_produit_modifier_lieu_livraison
        if (0 === strpos($pathinfo, '/modifier/lieu/livraison/panier') && preg_match('#^/modifier/lieu/livraison/panier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_modifier_lieu_livraison')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::modifierlieulivraisonAction',));
        }

        // produit_produit_payement_dupanier_utilisateur
        if (0 === strpos($pathinfo, '/payement/dupanier/utilisateur') && preg_match('#^/payement/dupanier/utilisateur/(?P<id>\\d+)(?:/(?P<montant>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_payement_dupanier_utilisateur')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::payementpanierAction',  'montant' => 0,));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // produit_produit_ajout_nom_domaine_panier
            if (0 === strpos($pathinfo, '/ajouter/domaine/panier') && preg_match('#^/ajouter/domaine/panier(?:/(?P<domaine>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_produit_ajout_nom_domaine_panier')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::ajoutdomaineAction',  'domaine' => '',));
            }

            if (0 === strpos($pathinfo, '/applications')) {
                // produit_produit_application_references
                if ($pathinfo === '/applications') {
                    return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::nosreferencesAction',  '_route' => 'produit_produit_application_references',);
                }

                // produit_produit_application_references_slache
                if (rtrim($pathinfo, '/') === '/applications') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'produit_produit_application_references_slache');
                    }

                    return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::nosreferencesAction',  '_route' => 'produit_produit_application_references_slache',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/services')) {
            // produit_produit_service_struct
            if ($pathinfo === '/services') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::servicesstructAction',  '_route' => 'produit_produit_service_struct',);
            }

            // produit_produit_service_struct_slache
            if (rtrim($pathinfo, '/') === '/services') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'produit_produit_service_struct_slache');
                }

                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::servicesstructAction',  '_route' => 'produit_produit_service_struct_slache',);
            }

        }

        if (0 === strpos($pathinfo, '/about/us')) {
            // produit_produit_about_us
            if ($pathinfo === '/about/us') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::aboutuserAction',  '_route' => 'produit_produit_about_us',);
            }

            // produit_produit_about_us_slache
            if (rtrim($pathinfo, '/') === '/about/us') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'produit_produit_about_us_slache');
                }

                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::aboutuserAction',  '_route' => 'produit_produit_about_us_slache',);
            }

        }

        // general_template_stop_alert_takeaction
        if ($pathinfo === '/stop/alert/takeaction') {
            return array (  '_controller' => 'General\\TemplateBundle\\Controller\\MenuController::stopAlerttakeactionAction',  '_route' => 'general_template_stop_alert_takeaction',);
        }

        // general_template_open_map_local_country
        if ($pathinfo === '/open/map/local/country') {
            return array (  '_controller' => 'General\\TemplateBundle\\Controller\\MenuController::openmapAction',  '_route' => 'general_template_open_map_local_country',);
        }

        if (0 === strpos($pathinfo, '/in')) {
            // general_template_investir_chez_afh
            if ($pathinfo === '/investir/chez/afh') {
                return array (  '_controller' => 'General\\TemplateBundle\\Controller\\MenuController::investirchezafhAction',  '_route' => 'general_template_investir_chez_afh',);
            }

            // users_user_inscription_user
            if ($pathinfo === '/inscription/user') {
                return array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::inscriptionuserAction',  '_route' => 'users_user_inscription_user',);
            }

        }

        // users_user_user_accueil
        if (0 === strpos($pathinfo, '/accueil/user') && preg_match('#^/accueil/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_user_accueil')), array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::accueiluserAction',));
        }

        // users_user_connexion_user
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Users\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'users_user_connexion_user',);
        }

        // users_user_acces_plateforme
        if (preg_match('#^/(?P<position>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_acces_plateforme')), array (  '_controller' => 'Users\\UserBundle\\Controller\\SecurityController::accueilsiteAction',  'position' => '',));
        }

        // users_user_save_transaction
        if ($pathinfo === '/save/transaction') {
            return array (  '_controller' => 'Users\\UserBundle\\Controller\\SecurityController::savetransactionAction',  '_route' => 'users_user_save_transaction',);
        }

        // users_user_modifier_profil
        if (0 === strpos($pathinfo, '/modifier/profil/user') && preg_match('#^/modifier/profil/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_modifier_profil')), array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::modifierprofilAction',));
        }

        // users_user_detail_panier_user
        if (0 === strpos($pathinfo, '/detail/user/panier') && preg_match('#^/detail/user/panier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_detail_panier_user')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::detailpanieruserAction',));
        }

        // users_user_ajout_super_admin
        if ($pathinfo === '/ajouter/super/admin') {
            return array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::ajouteradminAction',  '_route' => 'users_user_ajout_super_admin',);
        }

        // users_user_presentation_service_even
        if (0 === strpos($pathinfo, '/presentation/service/evenement') && preg_match('#^/presentation/service/evenement(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_presentation_service_even')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::presentationAction',  'id' => 0,));
        }

        // users_user_inscription_programme_afiliation
        if ($pathinfo === '/inscription/programme/afiliation') {
            return array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::programmeafilierAction',  '_route' => 'users_user_inscription_programme_afiliation',);
        }

        // users_user_create_newsletter_account
        if ($pathinfo === '/create/newsletter/account') {
            return array (  '_controller' => 'Users\\UserBundle\\Controller\\NewsletterController::createaccountAction',  '_route' => 'users_user_create_newsletter_account',);
        }

        // users_user_save_account_infos
        if (0 === strpos($pathinfo, '/save/account/infos') && preg_match('#^/save/account/infos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_save_account_infos')), array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::saveaccountinfosAction',));
        }

        // users_user_large_vue_user
        if ($pathinfo === '/large/vue/user') {
            return array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::largevueuserAction',  '_route' => 'users_user_large_vue_user',);
        }

        if (0 === strpos($pathinfo, '/packagewebsiteadmin')) {
            // users_adminuser_accueil_administration
            if ($pathinfo === '/packagewebsiteadmin/admin/accueil') {
                return array (  '_controller' => 'Users\\AdminuserBundle\\Controller\\AccueilController::accueiladminAction',  '_route' => 'users_adminuser_accueil_administration',);
            }

            // users_adminuser_save_categorie_product
            if ($pathinfo === '/packagewebsiteadmin/nouvelle/categorie') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::savecategorieAction',  '_route' => 'users_adminuser_save_categorie_product',);
            }

            if (0 === strpos($pathinfo, '/packagewebsiteadmin/a')) {
                // users_adminuser_ajouter_sous_categorie
                if ($pathinfo === '/packagewebsiteadmin/ajouter/nouvelle/souscategorie') {
                    return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::ajoutersouscategorieAction',  '_route' => 'users_adminuser_ajouter_sous_categorie',);
                }

                // users_adminuser_add_new_slide
                if ($pathinfo === '/packagewebsiteadmin/add/new/slide') {
                    return array (  '_controller' => 'Users\\UserBundle\\Controller\\ImgslideController::addnewslideAction',  '_route' => 'users_adminuser_add_new_slide',);
                }

            }

            // users_adminuser_delete_courant_slide
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/delete/courant/slide') && preg_match('#^/packagewebsiteadmin/delete/courant/slide/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_delete_courant_slide')), array (  '_controller' => 'Users\\UserBundle\\Controller\\ImgslideController::deleteslideAction',));
            }

            // users_adminuser_liste_produit_souscategorie
            if ($pathinfo === '/packagewebsiteadmin/liste/produit/souscategorie') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::listeproduitadminAction',  '_route' => 'users_adminuser_liste_produit_souscategorie',);
            }

            // users_adminuser_miseajour_produit
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/miseajour/du/produit') && preg_match('#^/packagewebsiteadmin/miseajour/du/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_miseajour_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::miseajourproduitAction',));
            }

            // users_adminuser_supprimer_image_produit
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprimer/image/produit') && preg_match('#^/packagewebsiteadmin/supprimer/image/produit/(?P<id>[a-zA-Z0-9]*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_supprimer_image_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::supprimerimageAction',));
            }

            // users_adminuser_validation_dupayement
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/validation/du/payement') && preg_match('#^/packagewebsiteadmin/validation/du/payement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_validation_dupayement')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::validationpayementAction',));
            }

            // users_adminuser_liste_panier_non_livrer
            if ($pathinfo === '/packagewebsiteadmin/liste/des/paniers/non/livrer') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::paniernonlivrerAction',  '_route' => 'users_adminuser_liste_panier_non_livrer',);
            }

            // users_adminuser_contenu_panier_user
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/contenu/admin/panier/user') && preg_match('#^/packagewebsiteadmin/contenu/admin/panier/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_contenu_panier_user')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::contenupanierAction',));
            }

            // users_adminuser_livraison_panier_commander
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/livraison/panier/commander') && preg_match('#^/packagewebsiteadmin/livraison/panier/commander/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_livraison_panier_commander')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::livraisonpanierAction',));
            }

            // users_adminuser_tousles_panier_livrer
            if ($pathinfo === '/packagewebsiteadmin/tousles/paniers/livrer') {
                return array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\PanierController::panierlivrerAction',  '_route' => 'users_adminuser_tousles_panier_livrer',);
            }

            // users_adminuser_supprimer_courant_produit
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprimer/produit/admin') && preg_match('#^/packagewebsiteadmin/supprimer/produit/admin/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_supprimer_courant_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::supprimerproduitAction',));
            }

            // users_adminuser_ajout_nouveau_admin
            if ($pathinfo === '/packagewebsiteadmin/ajout/nouveau/admin/plateforme') {
                return array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::nouveauadminAction',  '_route' => 'users_adminuser_ajout_nouveau_admin',);
            }

            // users_adminuser_enleve_role_admin
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/enleve/role/admin/user') && preg_match('#^/packagewebsiteadmin/enleve/role/admin/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_enleve_role_admin')), array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::eleveroleAction',));
            }

            // users_adminuser_ajouter_nouveau_service
            if ($pathinfo === '/packagewebsiteadmin/ajouter/nouveau/service') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::nouveauserviceAction',  '_route' => 'users_adminuser_ajouter_nouveau_service',);
            }

            if (0 === strpos($pathinfo, '/packagewebsiteadmin/mod')) {
                // users_adminuser_modifier_un_service
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/modifier/un/nouveau/service') && preg_match('#^/packagewebsiteadmin/modifier/un/nouveau/service(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_modifier_un_service')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::modifierserviceAction',  'id' => 0,));
                }

                // users_adminuser_mod_evolution_indicateur
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/mod/evolution/indicateur') && preg_match('#^/packagewebsiteadmin/mod/evolution/indicateur(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_mod_evolution_indicateur')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::modifevolutionindicateurAction',  'id' => 0,));
                }

            }

            // users_adminuser_add_un_evenement
            if ($pathinfo === '/packagewebsiteadmin/add/un/evenement/service') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::addevenementAction',  '_route' => 'users_adminuser_add_un_evenement',);
            }

            if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprim')) {
                // users_adminuser_supprim_service_evenement
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprim/service/evenement') && preg_match('#^/packagewebsiteadmin/supprim/service/evenement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_supprim_service_evenement')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::supprimevenementAction',));
                }

                // users_adminuser_supprimer_service_even
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprimer/service/even') && preg_match('#^/packagewebsiteadmin/supprimer/service/even/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_supprimer_service_even')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\ServiceController::supprimerserviceAction',));
                }

            }

            // users_adminuser_liste_message_recu
            if ($pathinfo === '/packagewebsiteadmin/liste/des/messages/recu') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessageController::messagerecuAction',  '_route' => 'users_adminuser_liste_message_recu',);
            }

            // users_adminuser_supprim_message_contact
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprimer/message/contact') && preg_match('#^/packagewebsiteadmin/supprimer/message/contact/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_supprim_message_contact')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessageController::supprimermessageAction',));
            }

            // produit_service_ajouter_ville
            if ($pathinfo === '/packagewebsiteadmin/ajout/nouvelle/ville') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\VilleController::ajoutvilleAction',  '_route' => 'produit_service_ajouter_ville',);
            }

            // produit_service_supprimer_ville_courante
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/supprimer/ville/courante') && preg_match('#^/packagewebsiteadmin/supprimer/ville/courante/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_service_supprimer_ville_courante')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\VilleController::supprimervilleAction',));
            }

            // users_adminuser_add_cout_livraison
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/add/cout/livraison/produit') && preg_match('#^/packagewebsiteadmin/add/cout/livraison/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_add_cout_livraison')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::addcoutlivraisonAction',));
            }

            // users_adminuser_modif_coutlivraison_produit
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/modif/coutlivraison/produit') && preg_match('#^/packagewebsiteadmin/modif/coutlivraison/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_modif_coutlivraison_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::modifcoutlivraisonAction',));
            }

            // users_adminuser_delete_coutlivraison
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/delete/produit/coutlivraison') && preg_match('#^/packagewebsiteadmin/delete/produit/coutlivraison/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_delete_coutlivraison')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::supprimercoutlivraisonAction',));
            }

            // users_adminuser_addnew_continent_localite_user
            if ($pathinfo === '/packagewebsiteadmin/addnew/continent/localite/user') {
                return array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\ContinentController::accueilcontinentAction',  '_route' => 'users_adminuser_addnew_continent_localite_user',);
            }

            // users_adminuser_savenew_pays_localite_user
            if ($pathinfo === '/packagewebsiteadmin/savenew/pays/localite/user') {
                return array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\PaysController::ajouterpaysAction',  '_route' => 'users_adminuser_savenew_pays_localite_user',);
            }

            // users_adminuser_validation_message_market
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/validation/message/market') && preg_match('#^/packagewebsiteadmin/validation/message/market/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_validation_message_market')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessageController::validationmessageAction',));
            }

            // users_adminuser_message_email_new_letter
            if ($pathinfo === '/packagewebsiteadmin/message/email/news/letter') {
                return array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessemailController::messageemailAction',  '_route' => 'users_adminuser_message_email_new_letter',);
            }

            // users_adminuser_suppression_mess_email_user
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/suppression/mess/email/user') && preg_match('#^/packagewebsiteadmin/suppression/mess/email/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_suppression_mess_email_user')), array (  '_controller' => 'Produit\\ServiceBundle\\Controller\\MessemailController::supprimermessemailAction',));
            }

            if (0 === strpos($pathinfo, '/packagewebsiteadmin/user')) {
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/user/up')) {
                    // users_adminuser_update_content_continent
                    if (0 === strpos($pathinfo, '/packagewebsiteadmin/user/update/content/continent') && preg_match('#^/packagewebsiteadmin/user/update/content/continent(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_update_content_continent')), array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\ContinentController::updatecontinentAction',  'id' => 0,));
                    }

                    // users_adminuser_upgrate_categorie_produit
                    if (0 === strpos($pathinfo, '/packagewebsiteadmin/user/upgrate/categorie/produit') && preg_match('#^/packagewebsiteadmin/user/upgrate/categorie/produit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_upgrate_categorie_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::upgratecategorieAction',  'id' => 0,));
                    }

                }

                // users_adminuser_modif_souscategorie_application
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/user/modif/souscategorie/application') && preg_match('#^/packagewebsiteadmin/user/modif/souscategorie/application(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_modif_souscategorie_application')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::modifscatAction',  'id' => 0,));
                }

                // users_adminuser_alter_application_produit
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/user/alter/application/produit') && preg_match('#^/packagewebsiteadmin/user/alter/application/produit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_alter_application_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\ProduitController::miseajourproduitAction',  'id' => 0,));
                }

            }

            // users_adminuser_modif_pays_localisation_user
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/modif/pays/localisation/user') && preg_match('#^/packagewebsiteadmin/modif/pays/localisation/user(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_modif_pays_localisation_user')), array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\PaysController::modificationpaysAction',  'id' => 0,));
            }

            // users_adminuser_localisation_supprimer_continent
            if (0 === strpos($pathinfo, '/packagewebsiteadmin/user/localisation/supprimer/continent') && preg_match('#^/packagewebsiteadmin/user/localisation/supprimer/continent(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_localisation_supprimer_continent')), array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\ContinentController::supprimercontinentAction',  'id' => 0,));
            }

            if (0 === strpos($pathinfo, '/packagewebsiteadmin/d')) {
                // users_adminuser_drop_country_user_local
                if (0 === strpos($pathinfo, '/packagewebsiteadmin/drop/country/user/local') && preg_match('#^/packagewebsiteadmin/drop/country/user/local(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_drop_country_user_local')), array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\PaysController::dropcountryuserAction',  'id' => 0,));
                }

                if (0 === strpos($pathinfo, '/packagewebsiteadmin/del')) {
                    // users_adminuser_delete_categorie_produit
                    if (0 === strpos($pathinfo, '/packagewebsiteadmin/delete/categorie/produit') && preg_match('#^/packagewebsiteadmin/delete/categorie/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_delete_categorie_produit')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::deletecategorieAction',));
                    }

                    // users_adminuser_del_souscategorie_appli
                    if (0 === strpos($pathinfo, '/packagewebsiteadmin/del/souscategorie/appli') && preg_match('#^/packagewebsiteadmin/del/souscategorie/appli/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_adminuser_del_souscategorie_appli')), array (  '_controller' => 'Produit\\ProduitBundle\\Controller\\CategorieController::delsouscategorieAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if (preg_match('#^/login(?:/(?P<special>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'login')), array (  '_controller' => 'Users\\UserBundle\\Controller\\SecurityController::loginAction',  'special' => 0,));
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // users_localisationuser_chargement_pays_appli
        if ($pathinfo === '/chargement/pays/appli') {
            return array (  '_controller' => 'Users\\LocalisationuserBundle\\Controller\\PaysController::chargementpaysAction',  '_route' => 'users_localisationuser_chargement_pays_appli',);
        }

        // users_user_retourner_accueil
        if (preg_match('#^/(?P<all>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_user_retourner_accueil')), array (  '_controller' => 'Users\\UserBundle\\Controller\\UserController::retouracceuilAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
