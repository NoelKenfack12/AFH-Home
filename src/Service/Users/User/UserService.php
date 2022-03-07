<?php

namespace App\Service\Users\User;

use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\Users\User\UserRepository;
use App\Security\TokenAuthenticator;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use App\Entity\Users\User\User;
use Symfony\Component\HttpFoundation\Request;

class UserService{
    private $helperService;
    private $authenticator;
    private $guardHandler;
    private $_entityManager;
    private $_generalServicetext;
    private $_userRepository;
    private $_servicemail;
    private $params;

    public function __construct(TokenAuthenticator $authenticator, GuardAuthenticatorHandler $guardHandler, Singleemail $servicemail, ParameterBagInterface $params,
    EntityManagerInterface $entityManager, GeneralServicetext $generalServicetext, UserRepository $userRepository)
    {
        $this->authenticator = $authenticator;
        $this->guardHandler = $guardHandler;
        $this->_entityManager = $entityManager;
        $this->_generalServicetext = $generalServicetext;
        $this->_userRepository = $userRepository;
        $this->_servicemail = $servicemail;
        $this->params = $params;
    }

    public function loginUser(Request $request, User $user=null, $firstname = null, $lastname=null, $email=null, $phone=null, $imgprofil = null,$id=null, $payscode='cm')
    {
        if($user == null)
        {
            $user = new User($this->_generalServicetext);
            $user->setNom($firstname);
            $user->setPrenom($lastname);
            $user->setEmail($email);
            $user->setTel($phone);
            //$user->setImgprofil($imgprofil);
            $user->setPassword('abc');
            $user->setPuui($id);

            if($email != null)
            {
                $user->setUsername($email);
            }else{
                $user->setUsername($phone);
            }

            $this->_entityManager->persist($user);
            $this->_entityManager->flush();

            $this->initAccountUser($user);
        }

        $response = $this->guardHandler->authenticateUserAndHandleSuccess(
            $user,          // the User object you just created
            $request,
            $this->authenticator, // authenticator whose onAuthenticationSuccess you want to use
            'main'          // the name of your firewall in security.yaml
        );

        // Verifie si le cookie n existe pas
        if((!isset($_COOKIE["PIDSESSREM"]) or $_COOKIE["PIDSESSREM"] == 'delete'))
        {
            // Stock les infos du cookie
            $cookie_info = array(
                'name'  => 'PIDSESSREM',
                'value' => $this->_generalServicetext->encrypt($user->getUsername(),$this->params->get('saltcookies')),
                'time'  => time() + (3600 * 24 * 360)
            );
            // Cree le cookie
            setCookie($cookie_info['name'], $cookie_info['value'], $cookie_info['time'],'/');
            setCookie('PIDSESSDUR',$cookie_info['time'], $cookie_info['time'],'/');
        }

        return new JsonResponse(array("status-code" => 200, "description" => "OK - Compte Créer avec succès"));
    }

    public function initAccountUser($user)
    {
        $siteweb = $this->params->get('siteweb');
        $sitename = $this->params->get('sitename');
        $emailadmin = $this->params->get('emailadmin');

        //Envoyé un message aux nouveaux inscrit.
    }
}