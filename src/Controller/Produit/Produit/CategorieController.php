<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace App\Controller\Produit\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Produit\Produit\Categorie;
use App\Form\Produit\Produit\CategorieType;
use App\Entity\Produit\Produit\Souscategorie;
use App\Form\Produit\Produit\SouscategorieType;
use App\Entity\Produit\Produit\Produit;
use App\Form\Produit\Produit\ProduitType;
use App\Form\Produit\Service\ServiceType;
use App\Form\Produit\Service\EvenementType;
use App\Entity\Produit\Service\Service;
use App\Entity\Produit\Service\Evenement;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
private $params;
private $_servicemail;

public function __construct(ParameterBagInterface $params, Singleemail $servicemail)
{
	$this->params = $params;
	$this->_servicemail = $servicemail;
}
public function savecategorie(GeneralServicetext $servicetext, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$categorie = new Categorie($servicetext);
	$form = $this->createForm(CategorieType::class, $categorie);
	
	$souscategorie = new Souscategorie($servicetext);
	$formscat = $this->createForm(SousCategorieType::class, $souscategorie);
	
	$produit = new Produit($servicetext);
	$formpro = $this->createForm(ProduitType::class, $produit);
	
	$nosservice = new Service($servicetext);
    $formservice = $this->createForm(ServiceType::class, $nosservice);
	
	$event = new Evenement($servicetext);
    $formevent = $this->createForm(EvenementType::class, $event);
	
	if($request->getMethod() == 'POST')
	{
		$form->handleRequest($request);
		$categorie->setUser($this->getUser());
		$categorie->setServicetext($servicetext);
		$nbcategorie = $em->getRepository(Categorie::class)
	                      ->FindAll();
		$nbcategoriemax = $this->params->get('nbcategorie');
		if ($form->isValid() and count($nbcategorie) <= $nbcategoriemax){
			$em->persist($categorie);
			$em->flush();
		}else{
			if(count($nbcategorie) > $nbcategoriemax)
			{
				$this->get('session')->getFlashBag()->add('information','Trop de catégorie.');
			}else{
				$this->get('session')->getFlashBag()->add('information','Données invalides.');
			}
		}
	}
	$liste_categorie = $em->getRepository(Categorie::class)
	                      ->myfindAll();
	$liste_scat = $em->getRepository(Souscategorie::class)
	                      ->myfindAll();
	
	$liste_produit = $em->getRepository(Produit::class)
	                      ->myfindAll();
	$liste_service = $em->getRepository(Service::class)
	                      ->myfindAll();
	$liste_event = $em->getRepository(Evenement::class)
	                      ->myfindAll();

	$formsupp = $this->createFormBuilder()->getForm();
	
	return $this->render('Theme/Users/Adminuser/Categorie/savecategorie.html.twig',
	array('form'=>$form->createView(), 'formscat'=>$formscat->createView(), 'formservice'=>$formservice->createView(), 'formpro'=>$formpro->createView(),
	'formevent'=>$formevent->createView(),'formsupp'=>$formsupp->createView(),'liste_categorie'=>$liste_categorie, 'liste_scat'=>$liste_scat, 'liste_produit'=>$liste_produit, 
	'liste_service'=>$liste_service, 'liste_event'=>$liste_event));
}

public function ajoutersouscategorie(GeneralServicetext $service, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$souscategorie = new Souscategorie($service);
	$formscat = $this->createForm(SousCategorieType::class, $souscategorie);
	if($request->getMethod() == 'POST')
	{
		$formscat->handleRequest($request);
		$souscategorie->setUser($this->getUser());
		$souscategorie->setServicetext($service);
		$liste_souscategorie = $em->getRepository(Souscategorie::class)
	                              ->FindBy(array('categorie'=>$souscategorie->getCategorie()));
		$nbcategoriemax = $this->params->get('nbsouscategorie');
		if($formscat->isValid() and count($liste_souscategorie) <= $nbcategoriemax){
			$em->persist($souscategorie);
			$em->flush();
		}else{
			if( count($liste_souscategorie) > $nbcategoriemax )
			{
			  $this->get('session')->getFlashBag()->add('information','Trop de sous-catégorie.');
			}else{
			  $this->get('session')->getFlashBag()->add('information','Données invalides.');
			}
		}
	}
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
}

public function listeproduitadmin(GeneralServicetext $service, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$produit = new Produit($service);
	$request = $this->getRequest();
	$formpro = $this->createForm(ProduitType::class, $produit);
	if($request->getMethod() == 'POST')
	{
		$formpro->handleRequest($request);
		$produit->setUser($this->getUser());
		$imgpro = $produit->getImgpro();
		$imgpro->setServicetext($service);
		$imgpro->setProduit($produit);

		if($formpro->isValid()){
			$em->persist($produit);
			$em->persist($imgpro);
			$em->flush();
		}else{
			$this->get('session')->getFlashBag()->add('information','Données invalides.');
		}
	}
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
}

public function deletecategorie(Categorie $categorie, Request $request)
{
	$formsupp = $this->createFormBuilder()->getForm();
	if ($request->getMethod() == 'POST') {
    $formsupp->handleRequest($request);
    if ($formsupp->isValid()){
	$em = $this->getDoctrine()->getManager();
	$liste_scat = $em->getRepository(Souscategorie::class)
	                 ->findBy(array('categorie'=>$categorie));
	if(count($liste_scat) == 0)
	{
		$em->remove($categorie);
		$em->flush();
		$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès.');
	}else{
		$this->get('session')->getFlashBag()->add('information','Action réfusée; cette catégorie est déjà reservée');
	}
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	}
	$this->get('session')->getFlashBag()->add('categorie_supp',''.$categorie->getId().'');
	$this->get('session')->getFlashBag()->add('categorie_supp',''.$categorie->getNom().'');
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
}

public function delsouscategorie(Souscategorie $souscategorie, Request $request)
{
	$formsupp = $this->createFormBuilder()->getForm();
	if ($request->getMethod() == 'POST') {
    $formsupp->handleRequest($request);
    if ($formsupp->isValid()){
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository(Produit::class)
	                 ->findBy(array('souscategorie'=>$souscategorie));
	if(count($liste_produit) == 0)
	{
		$em->remove($souscategorie);
		$em->flush();
		$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès.');
	}else{
		$this->get('session')->getFlashBag()->add('information','Action réfusée; cette souscatégorie contient déjà des produits');
	}
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	}
	$this->get('session')->getFlashBag()->add('souscategorie_supp',''.$souscategorie->getId().'');
	$this->get('session')->getFlashBag()->add('souscategorie_supp',''.$souscategorie->getNom().'');
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
}

public function upgratecategorie(GeneralServicetext $service, Request $request, $id)
{
	$em = $this->getDoctrine()->getManager();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$categorie = $em->getRepository(Categorie::class)
					->find($id);

	if($categorie != null)
	{
    $form = $this->createForm(CategorieType::class, $categorie);
	if ($request->getMethod() == 'POST'){
		$form->handleRequest($request);
		$categorie->setServicetext($service);
		if ($form->isValid()){
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	return $this->render('Theme/Users/Adminuser/Categorie/upgratecategorie.html.twig',
	array('form'=>$form->createView(),'categorie'=>$categorie));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}
}

public function modifscat(GeneralServicetext $service, Request $request, $id)
{
	$em = $this->getDoctrine()->getManager();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$categorie = $em->getRepository(Souscategorie::class)
					->find($id);

	if($categorie != null)
	{
    $form = $this->createForm(SouscategorieType::class, $categorie);
	if ($request->getMethod() == 'POST'){
		$form->handleRequest($request);
		$categorie->setServicetext($service);
		if ($form->isValid()){
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	return $this->render('Theme/Users/Adminuser/Categorie/modifscat.html.twig',
	array('formscat'=>$form->createView(),'categorie'=>$categorie));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}
}

}