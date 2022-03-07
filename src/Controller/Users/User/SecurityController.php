<?php
namespace App\Controller\Users\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use App\Entity\Users\User\Newsletter;
use App\Entity\Produit\Service\Ville;
use App\Form\Users\User\NewsletterType;
use App\Entity\Users\User\User;
use App\Repository\Users\User\UserRepository;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users\Localisationuser\Pays;
use App\Entity\Produit\Produit\Produit;
use App\Entity\Produit\Service\Service;
use App\Service\Users\User\UserService;

class SecurityController extends AbstractController
{
private $_userService;
private $_userRepository;
public function __construct(UserService $userService, UserRepository $userRepository)
{
	$this->_userService = $userService;
	$this->_userRepository = $userRepository;
}

public function login(Request $request)
{
	$session = $request->getSession();
	// Si le visiteur est déjà identifié, on le redirige vers l'accueil
	if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')){
		return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
	}
	// On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
	/*if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	}else{
	$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
	$session->remove(SecurityContext::AUTHENTICATION_ERROR);
	}*/
	
	$em = $this->getDoctrine()->getManager();
	if (isset($_POST['_username']) and isset($_POST['_password'])){
		
		$repository = $em->getRepository(User::class);
		$user = $repository->findOneBy(array('username'=>$_POST['_username']));
		if($user != null)
		{
			if(trim($_POST['_password']) == trim($user->getPassword()))
			{
				$token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
				// On passe le token crée au service security context afin que l'utilisateur soit authentifié
				//$this->get('security.context')->setToken($token);
				//$this->get('session')->set('_security_users', serialize($token));

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
	
	return $this->render('Theme/Users/User/Security/login.html.twig',
	array('last_username' => '','error'=> ''));
}

public function accueilsite($position)
{
	$em = $this->getDoctrine()->getManager();
	
	$liste_pays = $em->getRepository(Pays::class)
	                      ->findPaysContinent('afrique', 15);
	$appli_marketing = $em->getRepository(Produit::class)
	                      ->findAppliType('marketing');
	$appli_tech = $em->getRepository(Produit::class)
	                      ->findAppliType('technologie');
	$all_appli = $em->getRepository(Produit::class)
	                      ->findAppliType('');	
	
	$liste_annee = $em->getRepository(Service::class)
	                      ->findBy(array('type'=>0), array('nom'=>'desc'));
	
	$liste_team = $em->getRepository(User::class)
	                      ->findTeam();
						  
	return $this->render('Theme/Users/User/Security/accueilsite.html.twig',
	array('liste_pays'=>$liste_pays, 'appli_marketing'=>$appli_marketing, 'appli_tech'=>$appli_tech, 
	'all_appli'=>$all_appli, 'liste_annee'=>$liste_annee, 'liste_team'=>$liste_team, 'position'=>$position));
}

public function savetransaction(GeneralServicetext $service)
{
	$ville = new Ville($service);
	$ville->setNom('Yaounde');
	$ville->setPays('Cameroun');
	$em = $this->getDoctrine()->getManager();
	$user = $em->getRepository(User::class)
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

public function opensession(Request $request, GeneralServicetext $generalServicetext)
{
	$parameters = json_decode($request->getContent(), true);
	if(count($parameters) == 2)
	{
		if($generalServicetext->array_keys_exists(array("user", "authcode"), $parameters))
		{
			$iduser = $parameters['user']['id'];
			$olduser = $this->_userRepository->findOneBy(array('puui'=>$iduser), array('datebeg'=>'desc'), 1);

			if($olduser == null){
				$email = $parameters['user']['email'];
				$phone = $parameters['user']['phone'];
				if($email != null)
				{
					$username = $email;
					$olduser = $this->_userRepository->findOneBy(array('email'=>$email));
				}else{
					$username = $phone; 
					$olduser = $this->_userRepository->findOneBy(array('tel'=>$phone));
				}

				if($olduser == null)
				{
					$olduser = $this->_userRepository->findOneBy(array('username'=>$username));
					if($olduser == null){
						//create User and log it
						$data = $this->_userService->loginUser($request, null, $parameters['user']['firstName'], $parameters['user']['lastName'], $parameters['user']['email'], $parameters['user']['phone'], $parameters['user']['imgprofil'], $parameters['user']['id']);
					}else{
						//log user
						$data = $this->_userService->loginUser($request, $olduser);
					}					
				}else{
					//log user
					$data = $this->_userService->loginUser($request, $olduser);
				}
			}else{
				//log user
				$data = $this->_userService->loginUser($request, $olduser);
			}
			return $data;
		}   
	}
	
	$data = $generalServicetext->badRequest();
	return $data;
}
}
