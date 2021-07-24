<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace Produit\ProduitBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Produit\ProduitBundle\Entity\Categorie;
use Produit\ProduitBundle\Form\CategorieType;
use Produit\ProduitBundle\Entity\Souscategorie;
use Produit\ProduitBundle\Form\SouscategorieType;
use Produit\ProduitBundle\Entity\Produit;
use Produit\ProduitBundle\Form\ProduitType;
use Produit\ServiceBundle\Form\ServiceType;
use Produit\ServiceBundle\Form\EvenementType;
use Produit\ServiceBundle\Entity\Service;
use Produit\ServiceBundle\Entity\Evenement;

class CategorieController extends Controller
{

public function savecategorieAction()
{
	$servicetext = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	$categorie = new Categorie($servicetext);
	$request = $this->getRequest();
	$form = $this->createForm(new CategorieType, $categorie);
	
	$souscategorie = new Souscategorie($servicetext);
	$formscat = $this->createForm(new SousCategorieType, $souscategorie);
	
	$produit = new Produit($servicetext);
	$formpro = $this->createForm(new ProduitType(), $produit);
	
	$nosservice = new Service($servicetext);
    $formservice = $this->createForm(new ServiceType, $nosservice);
	
	$event = new Evenement($servicetext);
    $formevent = $this->createForm(new EvenementType, $event);
	
	if($request->getMethod() == 'POST')
	{
		$form->bind($request);
		$categorie->setUser($this->getUser());
		$categorie->setServicetext($servicetext);
		$nbcategorie = $em->getRepository('ProduitProduitBundle:Categorie')
	                      ->FindAll();
		$nbcategoriemax = $this->container->getParameter('nbcategorie');
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
	$liste_categorie = $em->getRepository('ProduitProduitBundle:Categorie')
	                      ->myfindAll();
	$liste_scat = $em->getRepository('ProduitProduitBundle:Souscategorie')
	                      ->myfindAll();
	
	$liste_produit = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->myfindAll();
	$liste_service = $em->getRepository('ProduitServiceBundle:Service')
	                      ->myfindAll();
	$liste_event = $em->getRepository('ProduitServiceBundle:Evenement')
	                      ->myfindAll();

	$formsupp = $this->createFormBuilder()->getForm();
	
	return $this->render('UsersAdminuserBundle:Categorie:savecategorie.html.twig',
	array('form'=>$form->createView(), 'formscat'=>$formscat->createView(), 'formservice'=>$formservice->createView(), 'formpro'=>$formpro->createView(),
	'formevent'=>$formevent->createView(),'formsupp'=>$formsupp->createView(),'liste_categorie'=>$liste_categorie, 'liste_scat'=>$liste_scat, 'liste_produit'=>$liste_produit, 
	'liste_service'=>$liste_service, 'liste_event'=>$liste_event));
}

public function ajoutersouscategorieAction()
{
	$service = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	$souscategorie = new Souscategorie($service);
	$request = $this->getRequest();
	$formscat = $this->createForm(new SousCategorieType, $souscategorie);
	if($request->getMethod() == 'POST')
	{
		$formscat->bind($request);
		$souscategorie->setUser($this->getUser());
		$souscategorie->setServicetext($service);
		$liste_souscategorie = $em->getRepository('ProduitProduitBundle:Souscategorie')
	                              ->FindBy(array('categorie'=>$souscategorie->getCategorie()));
		$nbcategoriemax = $this->container->getParameter('nbsouscategorie');
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

public function listeproduitadminAction()
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	$produit = new Produit($service);
	$request = $this->getRequest();
	$formpro = $this->createForm(new ProduitType(), $produit);
	if($request->getMethod() == 'POST')
	{
		$formpro->bind($request);
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

public function deletecategorieAction(Categorie $categorie)
{
	$formsupp = $this->createFormBuilder()->getForm();
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $formsupp->bind($request);
    if ($formsupp->isValid()){
	$em = $this->getDoctrine()->getManager();
	$liste_scat = $em->getRepository('ProduitProduitBundle:Souscategorie')
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

public function delsouscategorieAction(Souscategorie $souscategorie)
{
	$formsupp = $this->createFormBuilder()->getForm();
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $formsupp->bind($request);
    if ($formsupp->isValid()){
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository('ProduitProduitBundle:Produit')
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

public function upgratecategorieAction($id)
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$categorie = $em->getRepository('ProduitProduitBundle:Categorie')
					->find($id);

	if($categorie != null)
	{
    $form = $this->createForm(new CategorieType, $categorie);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST'){
		$form->bind($request);
		$categorie->setServicetext($service);
		if ($form->isValid()){
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	return $this->render('UsersAdminuserBundle:Categorie:upgratecategorie.html.twig',
	array('form'=>$form->createView(),'categorie'=>$categorie));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}
}

public function modifscatAction($id)
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$categorie = $em->getRepository('ProduitProduitBundle:Souscategorie')
					->find($id);

	if($categorie != null)
	{
    $form = $this->createForm(new SouscategorieType, $categorie);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST'){
		$form->bind($request);
		$categorie->setServicetext($service);
		if ($form->isValid()){
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	return $this->render('UsersAdminuserBundle:Categorie:modifscat.html.twig',
	array('formscat'=>$form->createView(),'categorie'=>$categorie));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}
}

}