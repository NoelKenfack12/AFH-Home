<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*/
namespace Users\AdminuserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Produit\ProduitBundle\Entity\Categorie;
use Produit\ProduitBundle\Form\CategorieType;
use Produit\ProduitBundle\Entity\Souscategorie;
use Produit\ProduitBundle\Form\SouscategorieType;
use Users\UserBundle\Entity\Imgslide;
use Users\UserBundle\Form\ImgslideType;
use Users\LocalisationuserBundle\Entity\Continent;
use Users\LocalisationuserBundle\Entity\Pays;
use Users\LocalisationuserBundle\Form\PaysType;
use Users\LocalisationuserBundle\Form\ContinentType;

class AccueilController extends Controller
{

public function accueiladminAction()
{
	$service = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	$allslide = $em->getRepository('UsersUserBundle:Imgslide')
	                      ->FindAll();
	$nbcategorie = $em->getRepository('ProduitProduitBundle:Categorie')
	                      ->FindAll();
	
	$slide = new Imgslide($service);
	$formslide = $this->createForm(new ImgslideType, $slide);
	
	$formsupp = $this->createFormBuilder()->getForm();
	
	$continent = new Continent($service);
	$form = $this->createForm(new ContinentType, $continent);
	
	$pays = new Pays();
	$formpays = $this->createForm(new PaysType, $pays);
	
	$liste_continent =$em->getRepository('UsersLocalisationuserBundle:Continent')
                      ->findAll();
	$liste_investissement =$em->getRepository('UsersUserBundle:Investissement')
                              ->myFindAll();				  
    return $this->render('UsersAdminuserBundle:Accueil:accueiladmin.html.twig',
	array('nbcategorie'=>$nbcategorie,'formslide'=>$formslide->createView(),'form'=>$form->createView(), 'allslide'=>$allslide,
	'formsupp'=>$formsupp->createView(),'liste_continent'=>$liste_continent,'liste_investissement'=>$liste_investissement,'form2'=>$formpays->createView()));
}

public function menuadminAction()
{
	$em = $this->getDoctrine()->getManager();
	$liste_commande = $em->getRepository('ProduitProduitBundle:Panier')
				         ->findOneBy(array('payer'=>1,'livrer'=>0));
	$liste_vente = $em->getRepository('ProduitProduitBundle:Panier')
				      ->findOneBy(array('payer'=>1,'livrer'=>1));
	$liste_message = $em->getRepository('ProduitServiceBundle:Message')
				      ->findBy(array('lut'=>false));
	return $this->render('UsersAdminuserBundle:Accueil:menuadmin.html.twig',array('nbcommande'=>count($liste_commande),'nbvente'=>count($liste_vente),'messnonlut'=>count($liste_message)));
}
}