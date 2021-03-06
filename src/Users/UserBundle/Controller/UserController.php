<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*ce fichier est la proprieté de Zentsoft entreprise.
*/
namespace Users\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Users\UserBundle\Entity\User;
use Users\UserBundle\Form\UserType;
use Users\UserBundle\Entity\Imgprofil;
use Users\UserBundle\Form\ImgprofilType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\SecurityContext;

class UserController extends Controller
{
public function inscriptionuserAction()
{
	$service = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	$request = $this->getRequest();
	// Si le visiteur est déjà identifié, on le redirige vers l'accueil
	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
	}
	$user = new User($service);
	$form = $this->createForm(new UserType, $user);
	
	if ($request->getMethod() == 'POST' and $this->getUser() == null){
    $form->bind($request);
		if(isset($_POST['codepays']))
		{
			$user->setTel($_POST['codepays'].' '.$user->getTel());
		}
    if ($form->isValid()){
	$em->persist($user);
    $em->flush();
    $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
    // On passe le token crée au service security context afin que l'utilisateur soit authentifié
    $this->get('security.context')->setToken($token);
	return $this->redirect($this->generateUrl('users_user_user_accueil',array('id'=>$user->getId())));
	}
	$this->get('session')->getFlashBag()->add('information','Une erreur a été rencontrée !!!');
	}
	return $this->render('UsersUserBundle:User:inscriptionuser.html.twig',array('form'=>$form->createview()));
}

public function accueiluserAction(User $user)
{
	if($this->getUser() == $user)
	{
		$user->setDatebeg(time());
		$em = $this->getDoctrine()->getManager();
		$em->flush();
		
		$em = $this->getDoctrine()->getManager();
	    $panier = $em->getRepository('ProduitProduitBundle:Panier')
				     ->findOneBy(array('user'=>$user,'payer'=>0));
		$panier_payer = $em->getRepository('ProduitProduitBundle:Panier')
				           ->findBy(array('user'=>$user,'payer'=>1));
		$service = $this->container->get('general_service.servicetext');
		$profil = new Imgprofil($service);
	    $form = $this->createForm(new ImgprofilType, $profil);
		
		$topcat = $em->getRepository('ProduitProduitBundle:Souscategorie')
	                 ->topsouscategorie(8);
				
		return $this->render('UsersUserBundle:User:accueiluser.html.twig',
		array('user'=>$user,'form'=>$form->createView(),'panier'=>$panier,'panier_payer'=>$panier_payer,'topcat'=>$topcat));
	}else{
	return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
	}
}

public function modifierprofilAction(User $user)
{
	$service = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	$request = $this->getRequest();
	$profil = new Imgprofil($service);
	    $form = $this->createForm(new ImgprofilType, $profil);
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid()){
				$oldprofil = $em->getRepository('UsersUserBundle:Imgprofil')
	                            ->FindOneBy(array('user'=>$user));
				if ($oldprofil === null)
				{
				$profil->setUser($user);
				$profil->setId($user->getId());
				$profil->setServicetext($service);
				$em->persist($profil);
				$em->flush();
				}else{
				$em->remove($oldprofil);
                $em->flush();
				$profil->setUser($user);
				$profil->setId($user->getId());
				$profil->setServicetext($service);
				$em->persist($profil);
				$em->flush();
				}
			}
		}
		return $this->redirect($this->generateUrl('users_user_user_accueil',array('id'=>$user->getId())));
}

public function ajouteradminAction()
{
	$em = $this->getDoctrine()->getManager();
	$request = $this->getRequest();
	if ($request->getMethod() == 'POST' and isset($_POST['_username']) and isset($_POST['_password'])){
		$username = $this->container->getParameter('username');
		$password = $this->container->getParameter('password');
		if($_POST['_username'] == $username and $_POST['_password'] == $password and $this->getUser() != null)
		{
			$this->getUser()->addRole('ROLE_ADMIN');
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Administrateur enregistré avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Le mot de passe ou le nom d\'utilisateur est incorect.');
		}
		return $this->render('UsersUserBundle:User:ajouteradmin.html.twig');
    }
	$liste_user = $em->getRepository('UsersUserBundle:User')
	                 ->findAll();
	$exist = false;
	foreach($liste_user as $user)
	{
		if (in_array('ROLE_ADMIN', $user->getRoles())){
            $exist = true;
			break;
        }
	}
	if($exist == true)
	{
		return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
	}else{
		return $this->render('UsersUserBundle:User:ajouteradmin.html.twig');
	}
}

public function nouveauadminAction()
{
	$em = $this->getDoctrine()->getManager();
	$request = $this->getRequest();
	$formsupp = $this->createFormBuilder()->getForm(); 
	if ($request->getMethod() == 'POST' and isset($_POST['username']) and isset($_POST['roleuser']))
	{
		$userrole = $em->getRepository('UsersUserBundle:User')
	                 ->findOneBy(array('username'=>$_POST['username']));
		if($userrole != null and !in_array($_POST['roleuser'], ($userrole->getRoles())))
		{
			$userrole->addRole($_POST['roleuser']);
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Rôle '.$_POST['roleuser'].' ajouté avec succès à '.$userrole->name(20));
		}
	}
	$liste_user = $em->getRepository('UsersUserBundle:User')
	                 ->findAll();
	$newcollection = new \Doctrine\Common\Collections\ArrayCollection();
	foreach($liste_user as $user)
	{
		if(in_array('ROLE_ADMIN', $user->getRoles()) or in_array('ROLE_GESTION', $user->getRoles()) or in_array('ROLE_TEAM', $user->getRoles())){
            $newcollection[] = $user;
        }
	}
	return $this->render('UsersAdminuserBundle:User:nouveauadmin.html.twig',array('liste_user'=>$newcollection,'formsupp'=>$formsupp->createView()));
}

public function eleveroleAction(User $user)
{
	$formsupp = $this->createFormBuilder()->getForm();
	$request = $this->getRequest();
	$em = $this->getDoctrine()->getManager();
	if ($request->getMethod() == 'POST'){
	$formsupp->bind($request);
	if ($formsupp->isValid()){
		$user->removeRole('ROLE_GESTION');
		$em->flush();
		$this->get('session')->getFlashBag()->add('information','Rôle supprimé avec succès !!!');
	}
	}else{
	$this->get('session')->getFlashBag()->add('supprime_role',$user->getId());
	$this->get('session')->getFlashBag()->add('supprime_role',$user->name(20));
	}
	return $this->redirect($this->generateUrl('users_adminuser_ajout_nouveau_admin'));
}

public function programmeafilierAction()
{
	return $this->render('UsersUserBundle:User:programmeafilier.html.twig');
}

public function retouracceuilAction($all)
{
	$this->get('session')->getFlashBag()->add('retourningvisitor','<h3 class="alert alert-warning"><span class="fa fa-warning"></span> Il se peut que la ressource que vous demandez a été déplacée. </br><a href="'.$this->generateUrl("produit_produit_application_references").'" class="btn btn-info" style="margin-top: 15px;background: #34b1e7; -webkit-box-shadow:0 1px 2px 0 rgba(0,0,0,0.1); box-shadow:0 2px 2px 0 rgba(0,0,0,0.8);">Veuillez choisir un pays ici <span class=" fa fa-angle-double-right"></span></a></h3>');
	return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
}

public function saveaccountinfosAction(User $user)
{
	$service = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	if(isset($_POST['facebook']) and $service->siteweb($_POST['facebook']))
	{
		$user->setFacebook($_POST['facebook']);
	}
	if(isset($_POST['twitter']) and $service->siteweb($_POST['twitter']))
	{
		$user->setTwitter($_POST['twitter']);
	}
	if(isset($_POST['linkedin']) and $service->siteweb($_POST['linkedin']))
	{
		$user->setLinkedin($_POST['linkedin']);
	}
	if(isset($_POST['google']) and $service->siteweb($_POST['google']))
	{
		$user->setGoogle($_POST['google']);
	}
	if(isset($_POST['categorie']) and $service->chaineValide($_POST['categorie'], 5,30))
	{
		$user->setCategorie($_POST['categorie']);
	}
	if(isset($_POST['specialite']) and $service->chaineValide($_POST['specialite'], 5,30))
	{
		$user->setSpecialite($_POST['specialite']);
	}
	if(isset($_POST['apropos']) and $service->chaineValide($_POST['apropos'], 10,300))
	{
		$user->setApropos($_POST['apropos']);
	}
	if(isset($_POST['teamyear']) and $_POST['teamyear'] > 0)
	{
		$user->setTeamyear($_POST['teamyear']);
	}
	$em->flush();
	return $this->redirect($this->generateUrl('users_user_user_accueil', array('id'=>$user->getId())));
}

public function largevueuserAction()
{
	$user = null;
	$em = $this->getDoctrine()->getManager();
	if(isset($_POST['id']))
	{
		$user = $em->getRepository('UsersUserBundle:User')
	               ->find($_POST['id']);
	}
	return $this->render('UsersUserBundle:User:largevueuser.html.twig', 
	array('user'=>$user));
}
}