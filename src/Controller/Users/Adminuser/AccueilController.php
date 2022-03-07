<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*/
namespace App\Controller\Users\Adminuser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Produit\Produit\Categorie;
use App\Form\Produit\Produit\CategorieType;
use App\Entity\Produit\Produit\Souscategorie;
use App\Form\Produit\Produit\SouscategorieType;
use App\Entity\Users\User\Imgslide;
use App\Form\Users\User\ImgslideType;
use App\Entity\Users\Localisationuser\Continent;
use App\Entity\Users\Localisationuser\Pays;
use App\Form\Users\Localisationuser\PaysType;
use App\Form\Users\Localisationuser\ContinentType;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users\User\Investissement;
use App\Entity\Produit\Produit\Panier;
use App\Entity\Produit\Service\Message;

class AccueilController extends AbstractController
{
public function accueiladmin(GeneralServicetext $service)
{
	$em = $this->getDoctrine()->getManager();
	$allslide = $em->getRepository(Imgslide::class)
	                      ->FindAll();
	$nbcategorie = $em->getRepository(Categorie::class)
	                      ->FindAll();
	
	$slide = new Imgslide($service);
	$formslide = $this->createForm(ImgslideType::class, $slide);
	
	$formsupp = $this->createFormBuilder()->getForm();
	
	$continent = new Continent($service);
	$form = $this->createForm(ContinentType::class, $continent);
	
	$pays = new Pays();
	$formpays = $this->createForm(PaysType::class, $pays);
	
	$liste_continent =$em->getRepository(Continent::class)
                      ->findAll();
	$liste_investissement =$em->getRepository(Investissement::class)
                              ->myFindAll();				  
    return $this->render('Theme/Users/Adminuser/Accueil/accueiladmin.html.twig',
	array('nbcategorie'=>$nbcategorie,'formslide'=>$formslide->createView(),'form'=>$form->createView(), 'allslide'=>$allslide,
	'formsupp'=>$formsupp->createView(),'liste_continent'=>$liste_continent,'liste_investissement'=>$liste_investissement,'form2'=>$formpays->createView()));
}

public function menuadmin()
{
	$em = $this->getDoctrine()->getManager();
	$liste_commande = $em->getRepository(Panier::class)
				         ->findBy(array('payer'=>1,'livrer'=>0));
	$liste_vente = $em->getRepository(Panier::class)
				      ->findBy(array('payer'=>1,'livrer'=>1));
	$liste_message = $em->getRepository(Message::class)
				      ->findBy(array('lut'=>false));
	return $this->render('Theme/Users/Adminuser/Accueil/menuadmin.html.twig',array('nbcommande'=>count($liste_commande),'nbvente'=>count($liste_vente),'messnonlut'=>count($liste_message)));
}
}