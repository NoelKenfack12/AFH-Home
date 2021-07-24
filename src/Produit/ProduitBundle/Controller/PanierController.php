<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*/
namespace Produit\ProduitBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Users\UserBundle\Entity\User;
use Produit\ProduitBundle\Entity\Panier;
use Produit\ProduitBundle\Entity\Produitpanier;

class PanierController extends Controller
{
public function validationpayementAction(User $user)
{
	$em = $this->getDoctrine()->getManager();
	$panier = $em->getRepository('ProduitProduitBundle:Panier')
				 ->findOneBy(array('user'=>$user,'payer'=>0));
	if($this->getUser() == $user and $panier != null)
	{
		if(isset($_GET['tel']) and isset($_GET['destination']) and isset($_GET['coastlivraison']))
		{
			$panier->setTel(htmlspecialchars($_GET['tel']));
			$panier->setDestination(htmlspecialchars($_GET['destination']));
			$panier->setLivraisonpayer(true);
			$panier->setCoastlivraison($_GET['coastlivraison']);
		}
		$panier->setPayer(true);
		$panier->setDate(new \Datetime());
		$em->flush();
		echo 1;
		exit;
	}else{
		echo 0;
		exit;
	}
}
public function paniernonlivrerAction()
{
	$em = $this->getDoctrine()->getManager();
	$liste_panier = $em->getRepository('ProduitProduitBundle:Panier')
				       ->findBy(array('payer'=>1,'livrer'=>0),array('date'=>'desc'));
	return $this->render('UsersAdminuserBundle:Panier:paniernonlivrer.html.twig',array('liste_panier'=>$liste_panier));
}
public function contenupanierAction(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository('ProduitProduitBundle:Produitpanier')
				       ->myfindBy($panier->getId());
	return $this->render('UsersAdminuserBundle:Panier:contenupanier.html.twig',array('liste_produit'=>$liste_produit,'panier'=>$panier));
}
public function livraisonpanierAction(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	if($panier->getLivrer() == false)
	{
		$panier->setLivrer(true);
		$em->flush();
	}
	return $this->redirect($this->generateUrl('users_adminuser_liste_panier_non_livrer'));
}
public function panierlivrerAction()
{
	$em = $this->getDoctrine()->getManager();
	$liste_panier = $em->getRepository('ProduitProduitBundle:Panier')
				       ->findBy(array('payer'=>1,'livrer'=>1),array('date'=>'desc'));
	return $this->render('UsersAdminuserBundle:Panier:panierlivrer.html.twig',array('liste_panier'=>$liste_panier));
}
public function detailpanieruserAction(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository('ProduitProduitBundle:Produitpanier')
				       ->myfindBy($panier->getId());
	$topcat = $em->getRepository('ProduitProduitBundle:Souscategorie')
	                 ->topsouscategorie(8);
	return $this->render('ProduitProduitBundle:Panier:detailpanieruser.html.twig',
	array('liste_produit'=>$liste_produit,'panier'=>$panier,'topcat'=>$topcat));
}
public function modifierlieulivraisonAction(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	if(isset($_POST['ville']))
	{
		$ville = $em->getRepository('ProduitServiceBundle:Ville')
				       ->findOneBy(array('nom'=>$_POST['ville']));
			if($ville != null)
			{
				$panier->setVille($ville);
				$em->flush();
			}
	}
	return $this->redirect($this->generateUrl('produit_produit_reglement_commande_du_panier',array('id'=>$this->getUser()->getId())));
}
public function payementpanierAction(Panier $panier, $montant)
{
	$em = $this->getDoctrine()->getManager();
	if(isset($_POST['tel']) and isset($_POST['destination']))
	{
		$panier->setTel($_POST['tel']);
		$panier->setDestination($_POST['destination']);
		$panier->setCoastlivraison($montant);
		$panier->setLivraisonpayer(true);
		$panier->setPayer(true);
	}else{
		$panier->setPayer(true);
	}
	$em->flush();
	
	$mailer = $this->get('mailer');
		$message = \Swift_Message::newInstance()
		->setSubject($panier->getUser()->name(30).' vient de une commande.')
		->setFrom(array('support@hosting.africexplorer.com'=>'Support Afex Hosting'))
		->setTo('noel.kenfack@yahoo.fr')
		->setBody('
		<h2>'.$panier->getUser()->name(30).' vient de passer une commande.</h2>
		<div>Vérifiez la commande sur <a href="http://hosting.africexplorer.com">http://hosting.africexplorer.com</a></div>
		','text/html');
		$mailer->send($message);
		
	return $this->redirect($this->generateUrl('users_user_user_accueil', array('id'=>$panier->getUser()->getId())));
}
public function ajoutdomaineAction($domaine)
{
	$em = $this->getDoctrine()->getManager();
	$produit = $em->getRepository('ProduitProduitBundle:Produit')
	                 ->findOneBy(array('bestplan'=>true));
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
			if($useraffilier != null)
			{
				$panier->setAffilier($useraffilier);
			}
			$panier->setDomaine($domaine);
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
			$oldpanier->setDomaine($domaine.';'.$oldpanier->getDomaine());
			$em->flush();
		}
		return $this->redirect($this->generateUrl('users_user_user_accueil', array('id'=>$this->getUser()->getId())));
	}
	return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
}
}