<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr>
*/
namespace App\Controller\General\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\General\Template\Recherche;
use App\Entity\Users\User\Newsletter;
use App\Entity\Users\User\Investissement;
use App\Entity\Users\User\User;
use App\Form\Users\User\NewsletterType;
use App\Entity\Produit\Produit\Categorie;
use App\Entity\Produit\Produit\Panier;
use App\Entity\Produit\Produit\Souscategorie;
use App\Entity\Produit\Produit\Produit;
use App\Entity\Users\Localisationuser\Pays;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;
use App\Security\TokenAuthenticator;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class MenuController extends AbstractController
{
private $_generalServicetext;
private $params;
private $authenticator;
private $guardHandler;
private $_servicemail;

public function __construct(TokenAuthenticator $authenticator, GuardAuthenticatorHandler $guardHandler, ParameterBagInterface $params, GeneralServicetext $generalServicetext, Singleemail $servicemail)
{
	$this->authenticator = $authenticator;
	$this->guardHandler = $guardHandler;
	$this->_generalServicetext = $generalServicetext;
	$this->params = $params;
	$this->_servicemail = $servicemail;
}

public function menubare($position="afhunt")
{
	$em = $this->getDoctrine()->getManager();
	if($this->getUser() == null and isset($_COOKIE["PIDSESSREM"]) and $_COOKIE["PIDSESSREM"] != 'delete')
	{
		$cookies = $_COOKIE["PIDSESSREM"];
		$username = trim($this->_generalServicetext->decrypt($cookies, $this->params->get('saltcookies')));
		
		$repository = $em->getRepository(User::class);
		$user = $repository->findOneBy(array('username'=>$username));
		
		if($user != null)
		{
			$response = $this->guardHandler->authenticateUserAndHandleSuccess(
				$user,          // the User object you just created
				$request,
				$this->authenticator, // authenticator whose onAuthenticationSuccess you want to use
				'main'          // the name of your firewall in security.yaml
			);
		}
	}
	return $this->render('Theme/General/Template/Menu/menubare.html.twig',array('position'=>$position));
}

public function menubareleft()
{
	$em = $this->getDoctrine()->getManager();
	$liste_categorie = $em->getRepository(Categorie::class)
	                      ->myFindAll();
	
	$nbprod = 0;
	$produitpanier = null;
	if($this->getUser() != null)
	{
		$panier = $em->getRepository(Panier::class)
	                      ->findOneBy(array('user'=>$this->getUser(),'payer'=>0));
			if($panier != null)
			{
				$produitpanier = $panier->getProduitpaniers();
				foreach($produitpanier as $prodpan)
				{
					$nbprod = $nbprod + $prodpan->getQuantite();
				}
			}
	}
	$sous_categorie = $em->getRepository(Souscategorie::class)
	                      ->myfindAll();
	return $this->render('Theme/General/Template/Menu/menubareleft.html.twig',
	array('liste_categorie'=>$liste_categorie,'nbprod'=>$nbprod,'produitpanier'=>$produitpanier,'sous_categorie'=>$sous_categorie));
}

public function menubareright($position="afhunt")
{
	$em = $this->getDoctrine()->getManager();
	$liste_appli = $em->getRepository(Produit::class)
	                      ->myfindAll();

	return $this->render('Theme/General/Template/Menu/menubareright.html.twig', 
	array('position'=>$position,'liste_appli'=>$liste_appli));
}

public function footer($position="afhunt")
{
	$em = $this->getDoctrine()->getManager();
	
	$liste_pays = $em->getRepository(Pays::class)
	                      ->findPaysContinent('afrique', 15);
	$appli_marketing = $em->getRepository(Produit::class)
	                      ->findAppliType('marketing');
	$appli_tech = $em->getRepository(Produit::class)
	                      ->findAppliType('technologie');	
	return $this->render('Theme/General/Template/Menu/footer.html.twig',
	array('liste_pays'=>$liste_pays, 'appli_marketing'=>$appli_marketing, 'appli_tech'=>$appli_tech, 'position'=>$position));
}

public function openmap()
{
	$em = $this->getDoctrine()->getManager();
	
	return $this->render('Theme/General/Template/Menu/openmap.html.twig',
	array());
}

public function takeaction()
{
	$session = $this->get('session');
	$envoi = $session->get('test_takeaction');
	if($envoi !== 100)
	{
	return $this->render('Theme/General/Template/Menu/takeaction.html.twig');
	}
	return new Response(' ');
}

public function stopAlerttakeaction()
{
	$session = $this->get('session');
	$session->set('test_takeaction',100);
	echo 1;
	exit;
}

public function investirchezafh(GeneralServicetext $service)
{
	$em = $this->getDoctrine()->getManager();
	$session = $this->get('session');
	$envoi = $session->get('submit_demande');
	
	if(isset($_POST['typeinves']) and isset($_POST['montant']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['email']) and isset($_POST['ville']) and $envoi == null)
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$montant = $_POST['montant'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$ville = $_POST['ville'];
		$type = $_POST['typeinves'];
		$olduser = $em->getRepository(User::class)
	                  ->findOneBy(array('username'=>$_POST['email']));
		if($olduser == null)
		{
			$user = new User($service);
			$user->setNom($nom);
			$user->setPrenom($prenom);
			if($email != '')
			{
				$user->setUsername($email);
			}else{
				$user->setUsername($tel);
			}
			$user->setTel($tel);
			$user->setPassword('91122219');
			$em->persist($user);
			$em->flush();
		}else{
			$user = $olduser;
		}
		$investissement = new Investissement();
		$investissement->setType($type);
		$investissement->setMontant($montant);
		$investissement->setNom($nom);
		$investissement->setPrenom($prenom);
		$investissement->setTel($tel);
		$investissement->setEmail($email);
		$investissement->setVilletext($ville);
		$investissement->setUser($user);
		$em->persist($investissement);
		$em->flush();
		
		$siteweb = $this->params->get('siteweb');
		$sitename = $this->params->get('sitename');
		$emailadmin = $this->params->get('emailadmin');

		if($service->email($emailadmin))
		{
			$response = $this->_servicemail->sendNotifEmail(
				$sitename, //Nom du destinataire
				$emailadmin, //Email Destinataire
				$nom.', Vient d\'enregistrer la demande d\'investissement Id: '.$investissement->getInvestid().' !', //Objet de l'email
				$nom.', Vient d\'enregistrer la demande d\'investissement Id: '.$investissement->getInvestid().' !', //Grand Titre de l'email
				'Cliquez pour obtenir plus d\'information sur cette demande.',  //Contenu de l'email
				$siteweb //Lien à suivre
			);
		}
		
		$session->set('submit_demande', $investissement->getId());
	}else{
		if($envoi > 0)
		{
			$investissement = $em->getRepository(Investissement::class)
							     ->find($envoi);
		}else{
			$investissement = null;
		}
	}
	
	return $this->render('Theme/General/Template/Menu/investirchezafh.html.twig', 
	array('investissement'=>$investissement));
}
}