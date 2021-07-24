<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr>
*/
namespace General\TemplateBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use General\TemplateBundle\Entites\Recherche;
use Users\UserBundle\Entity\Newsletter;
use Users\UserBundle\Entity\Investissement;
use Users\UserBundle\Entity\User;
use Users\UserBundle\Form\NewsletterType;
use General\ServiceBundle\AfMail\Afmail;

class MenuController extends Controller
{
public function menubareAction($position="afhunt")
{
	$em = $this->getDoctrine()->getManager();
	return $this->render('GeneralTemplateBundle:Menu:menubare.html.twig',array('position'=>$position));
}

public function menubareleftAction()
{
	$em = $this->getDoctrine()->getManager();
	$liste_categorie = $em->getRepository('ProduitProduitBundle:Categorie')
	                      ->myFindAll();
	
	$nbprod = 0;
	$produitpanier = null;
	if($this->getUser() != null)
	{
		$panier = $em->getRepository('ProduitProduitBundle:Panier')
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
	$sous_categorie = $em->getRepository('ProduitProduitBundle:Souscategorie')
	                      ->myfindAll();
	return $this->render('GeneralTemplateBundle:Menu:menubareleft.html.twig',
	array('liste_categorie'=>$liste_categorie,'nbprod'=>$nbprod,'produitpanier'=>$produitpanier,'sous_categorie'=>$sous_categorie));
}

public function menubarerightAction($position="afhunt")
{
	$em = $this->getDoctrine()->getManager();
	$liste_appli = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->myfindAll();

	return $this->render('GeneralTemplateBundle:Menu:menubareright.html.twig', 
	array('position'=>$position,'liste_appli'=>$liste_appli));
}

public function footerAction($position="afhunt")
{
	$em = $this->getDoctrine()->getManager();
	
	$liste_pays = $em->getRepository('UsersLocalisationuserBundle:Pays')
	                      ->findPaysContinent('afrique', 15);
	$appli_marketing = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->findAppliType('marketing');
	$appli_tech = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->findAppliType('technologie');	
	return $this->render('GeneralTemplateBundle:Menu:footer.html.twig',
	array('liste_pays'=>$liste_pays, 'appli_marketing'=>$appli_marketing, 'appli_tech'=>$appli_tech, 'position'=>$position));
}

public function openmapAction()
{
	$em = $this->getDoctrine()->getManager();
	
	return $this->render('GeneralTemplateBundle:Menu:openmap.html.twig',
	array());
}

public function takeactionAction()
{
	$session = $this->get('session');
	$envoi = $session->get('test_takeaction');
	if($envoi !== 100)
	{
	return $this->render('GeneralTemplateBundle:Menu:takeaction.html.twig');
	}
	return new Response(' ');
}

public function stopAlerttakeactionAction()
{
	$session = $this->get('session');
	$session->set('test_takeaction',100);
	echo 1;
	exit;
}

public function investirchezafhAction()
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	
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
		$olduser = $em->getRepository('UsersUserBundle:User')
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
		
		$siteweb = $this->container->getParameter('siteweb');
		$sitename = $this->container->getParameter('sitename');
		$emailadmin = $this->container->getParameter('emailadmin');

		if($service->email($emailadmin))
		{
			$mail = new Afmail();
			$mail->setFrom($sitename.' <'.$emailadmin.'>'); 
			$mail->setSubject($nom.', Vient d\'enregistrer la demande d\'investissement Id: '.$investissement->getInvestid().' !'); 
			$mail->setHTML($this->renderView('UsersUserBundle:User:envoiemail.html.twig', array('link'=>$siteweb,'nom'=>$nom,'titre' => $nom.', Vient d\'enregistrer la demande d\'investissement Id: '.$investissement->getInvestid().' !','contenu'=>'Cliquez pour obtenir plus d\'information sur cette demande.')));
			$mail->setTextCharset('utf-8');
			$mail->setHTMLCharset('utf-8');
			$result = $mail->send(array($emailadmin));
		}
		
		$session->set('submit_demande', $investissement->getId());
	}else{
		if($envoi > 0)
		{
			$investissement = $em->getRepository('UsersUserBundle:Investissement')
							     ->find($envoi);
		}else{
			$investissement = null;
		}
	}
	
	return $this->render('GeneralTemplateBundle:Menu:investirchezafh.html.twig', 
	array('investissement'=>$investissement));
}
}