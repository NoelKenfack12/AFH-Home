<?php
namespace Users\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Users\UserBundle\Entity\Newsletter;
use Produit\ServiceBundle\Entity\Ville;
use Users\UserBundle\Form\NewsletterType;

class SecurityController extends Controller
{

public function loginAction()
{
	$request = $this->getRequest();
	$session = $request->getSession();
	// Si le visiteur est déjà identifié, on le redirige vers l'accueil
	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
	return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
	}
	// On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	}else{
	$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
	$session->remove(SecurityContext::AUTHENTICATION_ERROR);
	}
	
	$em = $this->getDoctrine()->getManager();
	if (isset($_POST['_username']) and isset($_POST['_password'])){
		
		$repository = $em->getRepository('UsersUserBundle:User');
		$user = $repository->findOneBy(array('username'=>$_POST['_username']));
		if($user != null)
		{
			if(trim($_POST['_password']) == trim($user->getPassword()))
			{
				$token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
				// On passe le token crée au service security context afin que l'utilisateur soit authentifié
				$this->get('security.context')->setToken($token);
				$this->get('session')->set('_security_users', serialize($token));

				$target_link = $session->get('_security.welcome.target_path');//permet de poussuivre son activité en cas de connexion forcée !
				if($target_link != null and strlen($target_link) > 5)
				{
					return $this->redirect($target_link);
				}else{
					return $this->redirect($this->generateUrl('users_user_user_accueil', array('id'=>$user->getId())));
				}
			}else{
				$error_login = 'Echec: Mot de passe ou Email invalide.';
			}
		}
	}
	
	return $this->render('UsersUserBundle:Security:login.html.twig',
	array('last_username' => $session->get(SecurityContext::LAST_USERNAME),'error'=> $error));
}

public function accueilsiteAction($position)
{
	$em = $this->getDoctrine()->getManager();
	
	$liste_pays = $em->getRepository('UsersLocalisationuserBundle:Pays')
	                      ->findPaysContinent('afrique', 15);
	$appli_marketing = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->findAppliType('marketing');
	$appli_tech = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->findAppliType('technologie');
	$all_appli = $em->getRepository('ProduitProduitBundle:Produit')
	                      ->findAppliType('');	
	
	$liste_annee = $em->getRepository('ProduitServiceBundle:Service')
	                      ->findBy(array('type'=>0), array('nom'=>'desc'));
	
	$liste_team = $em->getRepository('UsersUserBundle:User')
	                      ->findTeam();
						  
	return $this->render('UsersUserBundle:Security:accueilsite.html.twig',
	array('liste_pays'=>$liste_pays, 'appli_marketing'=>$appli_marketing, 'appli_tech'=>$appli_tech, 
	'all_appli'=>$all_appli, 'liste_annee'=>$liste_annee, 'liste_team'=>$liste_team, 'position'=>$position));
}

public function savetransactionAction()
{
	$service = $this->container->get('general_service.servicetext');
	$ville = new Ville($service);
	$ville->setNom('Yaounde');
	$ville->setPays('Cameroun');
	$em = $this->getDoctrine()->getManager();
	$user = $em->getRepository('UsersUserBundle:User')
	                      ->find(1);
	$ville->setUser($user);
	$em->persist($ville);
	$em->flush();
	
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value){
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
	}

	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	$fp = fsockopen ('www.sandbox.paypal.com', 80, $errno, $errstr, 30);
	
	$item_name = $_POST['item_name'];
    $item_number = $_POST['item_number'];
    $payment_status = $_POST['payment_status'];
    $payment_amount = $_POST['mc_gross'];
    $payment_currency = $_POST['mc_currency'];
    $txn_id = $_POST['txn_id'];
    $receiver_email = $_POST['receiver_email'];
    $payer_email = $_POST['payer_email'];
    $id_user = $_POST['custom'];
	
	if (!$fp) {
    $ville->setNom('-1');
    } else {
        fputs ($fp, $header . $req);
        while (!feof($fp)) {
            $res = fgets ($fp, 1024);
            if (strcmp ($res, "VERIFIED") == 0) {
                $ville->setNom('1');
            }
            else if (strcmp ($res, "INVALID") == 0) {
                $ville->setNom('0');           
            }
        }
        fclose ($fp);
    }
	$em->flush();
	echo '0';
	exit;
}
}
