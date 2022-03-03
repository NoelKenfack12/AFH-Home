<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*/
namespace Produit\ProduitBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Produit\ProduitBundle\Entity\Produit;
use Produit\ProduitBundle\Entity\Coutlivraison;
use Produit\ProduitBundle\Entity\Panier;
use Users\UserBundle\Entity\User;
use Produit\ProduitBundle\Entity\Produitpanier;
use Produit\ProduitBundle\Entity\Imgproduit;
use Produit\ProduitBundle\Form\ProduitType;
use Produit\ProduitBundle\Form\CoutlivraisonType;
use Produit\ProduitBundle\Entity\Souscategorie;
use General\TemplateBundle\Entites\Recherche;

class ProduitController extends Controller
{
public function miseajourproduitAction($id)
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$produit = $em->getRepository('ProduitProduitBundle:Produit')
					->find($id);

	if($produit != null)
	{
    $formpro = $this->createForm(new ProduitType($produit->getsouscategorie()->getCategorie()), $produit);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST'){
		$formpro->bind($request);
		$produit->setUser($this->getUser());
		$produit->setServicetext($service);
		if($produit->getImgpro() != null)
		{
			$imgpro = $produit->getImgpro();
			$imgpro->setServicetext($service);
			$imgpro->setProduit($produit);
		}
		
		$liste_img = $produit->getImgproduits();
		$nbimgproduit = $this->container->getParameter('nbimgparproduit');
		if($formpro->isValid() and count($liste_img) <= $nbimgproduit){
			if($produit->getImgpro() != null)
			{
			$em->persist($imgpro);
			}
			$em->flush();
		}else{
			if( count($liste_img) > $nbimgproduit )
			{
			  $this->get('session')->getFlashBag()->add('images','Trop d\'image pour ce produit.');
			}else{
			  $this->get('session')->getFlashBag()->add('images','Données invalides.');
			}
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}
	return $this->render('UsersAdminuserBundle:Produit:modifierproduit.html.twig',
	array('formpro'=>$formpro->createView(),'produit'=>$produit));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}
}

public function supprimerimageAction(Imgproduit $imgproduit)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm(); 
    $request = $this->get('request');
	$produit = $imgproduit->getProduit();
	if ($request->getMethod() == 'POST') {
    $formsupp->bind($request);
    if ($formsupp->isValid()){
	if(count($produit->getImgproduits()) > 1)
	{
		$em->remove($imgproduit);
		$em->flush();
		$this->get('session')->getFlashBag()->add('informationsupp','Suppression effectuée avec succés');
	}else{
	$this->get('session')->getFlashBag()->add('informationsupp','Un produit doit avoir au mions une images');
	}
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product',array('id'=>$produit->getId())));
	}
	}
    $this->get('session')->getFlashBag()->add('supprime_image',$imgproduit->getId());
	$this->get('session')->getFlashBag()->add('supprime_image',$imgproduit->getProduit()->getNom());
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
}

public function listeproduituserAction(Souscategorie $souscategorie)
{
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository('ProduitProduitBundle:Produit')
	                    ->myFindBy($souscategorie->getId());
	$liste_slide = $em->getRepository('UsersUserBundle:Imgslide')
	                      ->myFindAll();
	if(isset($_GET['spaf']))
	{
		$session = $this->get('session');
		$envoi = $session->get('superafilier');
		if($envoi == null)
		{
			$session->set('superafilier',htmlspecialchars($_GET['spaf']));
		}
	}
	return $this->render('ProduitProduitBundle:Produit:listeproduituser.html.twig', 
	array('souscategorie'=>$souscategorie,'liste_produit'=>$liste_produit,'liste_slide'=>$liste_slide));
}
public function detailproduitAction(Produit $produit)
{
	$em = $this->getDoctrine()->getManager();
	$repositorie = $em->getRepository('ProduitProduitBundle:Produit');
	$liste_produit = $repositorie->FindBy(array('souscategorie'=>$produit->getSouscategorie()));
	$all_produit =  $repositorie->orderCroissant();
	$top_cinq = $repositorie->topProduit(5);
	$top_like = $repositorie->topLike(5);
	$position = 0;
	foreach($all_produit as $pro)
	{
	if($pro->getId() == $produit->getId()){
	$position++;
	break;
	}else{
	$position++;
	}
	}
	$topcat = $em->getRepository('ProduitProduitBundle:SousCategorie')
	             ->topsouscategorie(5);
	return $this->render('ProduitProduitBundle:Produit:detailproduit.html.twig', 
	array('liste_produit'=>$liste_produit,'produit'=>$produit,'position'=>$position,
	'all_produit'=>$all_produit,'top_cinq'=>$top_cinq,'top_like'=>$top_like,'topcat'=>$topcat));
}
public function likeproductAction()
{
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	}else{
	$id = 0;
	}
	$em = $this->getDoctrine()->getManager();
	$produit = $em->getRepository('ProduitProduitBundle:Produit')
	                 ->find($id);
	if($produit != null and $this->getUser() != null){
	$userlikes = $produit->getUserlikes();
	$trouve = false;
	foreach($userlikes as $user)
	{
		if($this->getUser() == $user)
		{
			$trouve = true;
		}
	}
	if($trouve == false)
	{
		$produit->addUserlike($this->getUser());
		$em->flush();
	}
	echo 1;
	exit;
	}else{
	echo 0;
	exit;
	}
}
public function ajouterpanierAction()
{
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	}else{
	$id = 0;
	}
	$em = $this->getDoctrine()->getManager();
	$produit = $em->getRepository('ProduitProduitBundle:Produit')
	                 ->find($id);
	if($produit != null and $this->getUser() != null){
	
	$oldpanier = $em->getRepository('ProduitProduitBundle:Panier')
	                 ->findOneBy(array('user'=>$this->getUser(),'payer'=>0));
		if($oldpanier == null)
		{
			$session = $this->get('session');
			$envoi = $session->get('superafilier');
			$useraffilier = null;
			if($envoi != null)
			{
				$tabuseraffilier = explode('host',$envoi);
				$useraffilier = $em->getRepository('UsersUserBundle:User')
	                               ->find($tabuseraffilier[0]);
			}
		
			$panier = new Panier();
			$panier->setUser($this->getUser());
			if($useraffilier != null and $this->getUser() != $useraffilier)
			{
				$panier->setAffilier($useraffilier);
			}
			$em->persist($panier);
			$produitpanier = new Produitpanier();
			$produitpanier->setPanier($panier);
			$produitpanier->setProduit($produit);
			$em->persist($produitpanier);
			$em->flush();
		}else{
			if(count($oldpanier->getProduitpaniers()) != 0)
			{
				$listprod = $oldpanier->getProduitpaniers();
				$trouve = false;
				foreach($listprod as $prod)
				{
					if($prod->getProduit() == $produit)
					{
						$prod->setQuantite($prod->getQuantite() + 1);
						$trouve = true;
						break;
					}
				}
				if($trouve == false)
				{
					$produitpanier = new Produitpanier();
					$produitpanier->setPanier($oldpanier);
					$produitpanier->setProduit($produit);
					$em->persist($produitpanier);
				}
			}else{
				$produitpanier = new Produitpanier();
				$produitpanier->setPanier($oldpanier);
				$produitpanier->setProduit($produit);
				$em->persist($produitpanier);
			}
			$em->flush();
		}
	echo 1;
	exit;
	}else{
	echo 0;
	exit;
	}
}
public function addpanierAction(Produit $produit)
{
	$em = $this->getDoctrine()->getManager();
	if($this->getUser() != null)
	{
	$oldpanier = $em->getRepository('ProduitProduitBundle:Panier')
	                 ->findOneBy(array('user'=>$this->getUser(),'payer'=>0));
		if($oldpanier == null)
		{
			$panier = new Panier();
			$panier->setUser($this->getUser());
			$em->persist($panier);
			$produitpanier = new Produitpanier();
			$produitpanier->setPanier($panier);
			$produitpanier->setProduit($produit);
			$em->persist($produitpanier);
			$em->flush();
		}else{
			if(count($oldpanier->getProduitpaniers()) != 0)
			{
				$listprod = $oldpanier->getProduitpaniers();
				$trouve = false;
				foreach($listprod as $prod)
				{
					if($prod->getProduit() == $produit)
					{
						$prod->setQuantite($prod->getQuantite() + 1);
						$trouve = true;
						break;
					}
				}
				if($trouve == false)
				{
					$produitpanier = new Produitpanier();
					$produitpanier->setPanier($oldpanier);
					$produitpanier->setProduit($produit);
					$em->persist($produitpanier);
				}
			}else{
				$produitpanier = new Produitpanier();
				$produitpanier->setPanier($oldpanier);
				$produitpanier->setProduit($produit);
				$em->persist($produitpanier);
			}
			$em->flush();
		}
	$this->get('session')->getFlashBag()->add('ajoutproduit','Produit ajouter avec succès');
	}else{
	$this->get('session')->getFlashBag()->add('ajoutproduit','Une erreur a été rencontrée !');
	}
	return $this->redirect($this->generateUrl('produit_produit_liste_produit_souscategorie',array('id'=>$produit->getSouscategorie()->getId())));
}
public function reglementcommandeAction(User $user)
{
	$em = $this->getDoctrine()->getManager();
	$nbprod = 0;
	$produitpanier = null;
	$panier = $em->getRepository('ProduitProduitBundle:Panier')
				 ->findOneBy(array('user'=>$user,'payer'=>0));
		if($panier != null)
		{
			$produitpanier = $panier->getProduitpaniers();
			foreach($produitpanier as $prodpan)
			{
				$nbprod = $nbprod + $prodpan->getQuantite();
				$prodpan->getProduit()->setEm($em);
			}
			$liste_ville = $em->getRepository('ProduitServiceBundle:Ville')
				        ->findAll();
			return $this->render('ProduitProduitBundle:Produit:reglementcommande.html.twig', array('panier'=>$panier,'user'=>$user,'produitpanier'=>$produitpanier,'nbprod'=>$nbprod,'liste_ville'=>$liste_ville));
		}else{
		return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
		}
}
public function editcommandeAction()
{
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	}else{
	$id = 0;
	}
	if(isset($_GET['quantite']))
	{
	$quantite = $_GET['quantite'];
	}else{
	$quantite = 0;
	}
	$em = $this->getDoctrine()->getManager();
	$prodpan = $em->getRepository('ProduitProduitBundle:Produitpanier')
	                 ->find($id);
	if($prodpan != null)
	{
		$prodpan->setQuantite($quantite);
		$em->flush();
	echo 1;
	exit;
	}else{
	echo 0;
	exit;
	}
}
public function eleveproduitAction(Produitpanier $prodpan)
{
	if($this->getUser() == $prodpan->getpanier()->getUser())
	{
		$em = $this->getDoctrine()->getManager();
		$em->remove($prodpan);
		$em->flush();
		return $this->redirect($this->generateUrl('produit_produit_reglement_commande_du_panier',array('id'=>$this->getUser()->getId())));
	}
	return $this->redirect($this->generateUrl('login'));
}

public function supprimerproduitAction(Produit $produit)
{
	$em = $this->getDoctrine()->getManager();
	$liste_service = $em->getRepository('ProduitServiceBundle:Evenement')
	                 ->findBy(array('produit'=>$produit));
	$categorie = $produit->getSouscategorie();
	$formsupp = $this->createFormBuilder()->getForm(); 
	$request = $this->get('request');
	if ($request->getMethod() == 'POST') {
		$formsupp->bind($request);
		if ($formsupp->isValid()){
			if(count($liste_service) == 0){
			$liste_image = $produit->getImgproduits();
			foreach($liste_image as $img)
			{
				$em->remove($img);
			}
			$em->remove($produit);
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Action réfusée ! les statistiques ont déjà été ajoutés à ce produit.');
			}
		}
	}else{
		$this->get('session')->getFlashBag()->add('supprime_prod',$produit->getId());
		$this->get('session')->getFlashBag()->add('supprime_prod',$produit->getNom());
	}
	return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
}

public function rechercheproduitAction()
{
	$em = $this->getDoctrine()->getManager();
	$recherche = new Recherche();
	$formBuilder = $this->createFormBuilder($recherche);
	$formBuilder
              ->add('donnee', 'text',array('attr'=>array('class'=>'form-control police2','placeholder'=>'Retrouver un produit','type'=>'search')));
	$formrecher = $formBuilder->getForm();
	$liste_produit = null;
	$request = $this->get('request');
	if ($request->getMethod() == 'POST') {
		$formrecher->bind($request);
		if ($formrecher->isValid()){
	     $liste_produit = $em->getRepository('ProduitProduitBundle:Produit')
						     ->findProduit($recherche->getDonnee());
		}
	}
	return $this->render('ProduitProduitBundle:Produit:recherche.html.twig', array('liste_produit'=>$liste_produit,'donnee'=>$recherche->getDonnee()));
}
public function addcoutlivraisonAction(Produit $produit)
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	$coutlivraison = new Coutlivraison($service);
	$formlivraison = $this->createForm(new CoutlivraisonType(), $coutlivraison);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST'){
	$formlivraison->bind($request);
	$coutlivraison->setUser($this->getUser());
	$coutlivraison->setProduit($produit);
	$oldcout = $em->getRepository('ProduitProduitBundle:Coutlivraison')
						     ->findOneBy(array('ville'=>$coutlivraison->getVille(),'produit'=>$produit));
    if ($formlivraison->isValid() and $oldcout == null){
		$em->persist($coutlivraison);
		$em->flush();
		$this->get('session')->getFlashBag()->add('informationsupp','Enregistrement effectué avec succès');
	}
	}
	return $this->redirect($this->generateUrl('users_adminuser_update_courant_produit',array('id'=>$produit->getId())));
}
public function modifcoutlivraisonAction(Coutlivraison $coutlivraison)
{
	$em = $this->getDoctrine()->getManager();
    if (isset($_POST['coutlivraison']) and is_numeric($_POST['coutlivraison'])){
		$coutlivraison->setMontant(htmlspecialchars($_POST['coutlivraison']));
		$em->flush();
		$this->get('session')->getFlashBag()->add('informationsupp','Enregistrement effectué avec succès');
	}
	return $this->redirect($this->generateUrl('users_adminuser_update_courant_produit',array('id'=>$coutlivraison->getProduit()->getId())));
}
public function supprimercoutlivraisonAction(Coutlivraison $coutlivraison)
{
	$produit = $coutlivraison->getProduit();
	$em = $this->getDoctrine()->getManager();
	$em->remove($coutlivraison);
	$em->flush();
	return $this->redirect($this->generateUrl('users_adminuser_update_courant_produit',array('id'=>$produit->getId())));
}
public function nosreferencesAction()
{
	return $this->render('ProduitProduitBundle:Produit:nosreferences.html.twig');
}
public function servicesstructAction()
{
	return $this->render('ProduitProduitBundle:Produit:servicesstruct.html.twig');
}
public function aboutuserAction()
{
	return $this->render('ProduitProduitBundle:Produit:aboutus.html.twig');
}
}