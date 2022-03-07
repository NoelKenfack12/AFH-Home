<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> F�vrier 2015
*/
namespace App\Controller\Produit\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users\User\User;
use App\Entity\Produit\Produit\Panier;
use App\Entity\Produit\Produit\Produitpanier;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;
use App\Entity\Produit\Produit\Souscategorie;
use App\Entity\Produit\Service\Ville;
use App\Entity\Produit\Produit\Produit;

class PanierController extends AbstractController
{
private $params;
private $_servicemail;

public function __construct(ParameterBagInterface $params, Singleemail $servicemail)
{
	$this->params = $params;
	$this->_servicemail = $servicemail;
}
public function validationpayement(User $user)
{
	$em = $this->getDoctrine()->getManager();
	$panier = $em->getRepository(Panier::class)
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
public function paniernonlivrer()
{
	$em = $this->getDoctrine()->getManager();
	$liste_panier = $em->getRepository(Panier::class)
				       ->findBy(array('payer'=>1,'livrer'=>0),array('date'=>'desc'));
	return $this->render('Theme/Users/Adminuser/Panier/paniernonlivrer.html.twig',array('liste_panier'=>$liste_panier));
}
public function contenupanier(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository(Produitpanier::class)
				       ->myfindBy($panier->getId());
	return $this->render('Theme/Users/Adminuser/Panier/contenupanier.html.twig',array('liste_produit'=>$liste_produit,'panier'=>$panier));
}

public function livraisonpanier(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	if($panier->getLivrer() == false)
	{
		$panier->setLivrer(true);
		$em->flush();
	}
	return $this->redirect($this->generateUrl('users_adminuser_liste_panier_non_livrer'));
}
public function panierlivrer()
{
	$em = $this->getDoctrine()->getManager();
	$liste_panier = $em->getRepository(Panier::class)
				       ->findBy(array('payer'=>1,'livrer'=>1),array('date'=>'desc'));
	return $this->render('Theme/Users/Adminuser/Panier/panierlivrer.html.twig',array('liste_panier'=>$liste_panier));
}
public function detailpanieruser(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	$liste_produit = $em->getRepository(Produitpanier::class)
				       ->myfindBy($panier->getId());
	$topcat = $em->getRepository(Souscategorie::class)
	                 ->topsouscategorie(8);
	return $this->render('Theme/Produit/Produit/Panier/detailpanieruser.html.twig',
	array('liste_produit'=>$liste_produit,'panier'=>$panier,'topcat'=>$topcat));
}
public function modifierlieulivraison(Panier $panier)
{
	$em = $this->getDoctrine()->getManager();
	if(isset($_POST['ville']))
	{
		$ville = $em->getRepository(Ville::class)
				       ->findOneBy(array('nom'=>$_POST['ville']));
			if($ville != null)
			{
				$panier->setVille($ville);
				$em->flush();
			}
	}
	return $this->redirect($this->generateUrl('produit_produit_reglement_commande_du_panier',array('id'=>$this->getUser()->getId())));
}

public function payementpanier(Panier $panier, $montant)
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
	
	$siteweb = $this->params->get('siteweb');
	$sitename = $this->params->get('sitename');
	$emailadmin = $this->params->get('emailadmin');

	if($service->email($emailadmin))
	{
		$response = $this->_servicemail->sendNotifEmail(
			$sitename, //Nom du destinataire
			$emailadmin, //Email Destinataire
			$panier->getUser()->name(30).' vient de une commande.', //Objet de l'email
			$panier->getUser()->name(30).' vient de une commande.', //Grand Titre de l'email
			'vient de passer une commande.</h2>
			<div>Vérifiez la commande sur <a href="http://hosting.africexplorer.com">http://hosting.africexplorer.com</a></div>',  //Contenu de l'email
			$siteweb //Lien à suivre
		);
	}		
	return $this->redirect($this->generateUrl('users_user_user_accueil', array('id'=>$panier->getUser()->getId())));
}
public function ajoutdomaine($domaine)
{
	$em = $this->getDoctrine()->getManager();
	$produit = $em->getRepository(Produit::class)
	                 ->findOneBy(array('bestplan'=>true));
	if($produit != null and $this->getUser() != null){
	$oldpanier = $em->getRepository(Panier::class)
	                 ->findOneBy(array('user'=>$this->getUser(),'payer'=>0));
		if($oldpanier == null)
		{
			$session = $this->get('session');
			$envoi = $session->get('superafilier');
			$useraffilier = null;
			if($envoi != null)
			{
				$tabuseraffilier = explode('host',$envoi);
				$useraffilier = $em->getRepository(User::class)
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