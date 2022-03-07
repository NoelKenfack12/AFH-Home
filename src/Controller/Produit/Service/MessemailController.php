<?php
/*
	(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace App\Controller\Produit\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\Produit\Service\MessemailType;
use App\Entity\Produit\Service\Messemail;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users\User\User;
use App\Entity\Users\User\Newsletter;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;

class MessemailController extends AbstractController
{
private $params;
private $_servicemail;

public function __construct(ParameterBagInterface $params, Singleemail $servicemail)
{
	$this->params = $params;
	$this->_servicemail = $servicemail;
}
public function messageemail(GeneralServicetext $service, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$messemail = new Messemail();
    $form = $this->createForm(MessemailType::class, $messemail);
	$formsupp = $this->createFormBuilder()->getForm();

	if ($request->getMethod() == 'POST'){
	$form->handleRequest($request);
	$messemail->setUser($this->getUser());
    if ($form->isValid()){
		
		$liste_user = $em->getRepository(User::class)
		                 ->findAll();
		$liste_email = array();
		$user_email = array();
		foreach($liste_user as $user)
		{
			if(!in_array($user->getUsername(),$liste_email))
			{
				array_push($liste_email, $user->getUsername());
				$tab = array();
				$tab[0] = $user->name(25);
				$tab[1] = $user->getUsername();
				array_push($user_email, $tab);
			}
		}
		
		$liste_newsletter = $em->getRepository(Newsletter::class)
		                 ->findAll();
		foreach($liste_newsletter as $news)
		{
			if($news->getEmail() != null and !in_array($news->getEmail(),$liste_email))
			{
				array_push($liste_email, $news->getEmail());
				if($news->getNom() != null)
				{
					
					$tab = array();
					$tab[0] = $news->getNom();
					$tab[1] = $news->getEmail();
					array_push($user_email, $tab);
				}else{
					$tab = array();
					$tab[0] = '...';
					$tab[1] = $news->getEmail();
					array_push($user_email, $tab);
				}
			}
		}
		
		$siteweb = $this->params->get('siteweb');
		$sitename = $this->params->get('sitename');
		$emailadmin = $this->params->get('emailadmin');

		for($i = 0; $i < count($user_email); $i++)
		{
			$response = $this->_servicemail->sendNotifEmail(
				$sitename, //Nom du destinataire
				$emailadmin, //Email Destinataire
				$messemail->getTitre(), //Objet de l'email
				$messemail->getTitre(), //Grand Titre de l'email
				$messemail->getContenu(),  //Contenu de l'email
				$messemail->getLink() //Lien à suivre
			);
		}
		}
		
		$em->persist($messemail);
		$em->flush();
		$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');
	}else{
		$this->get('session')->getFlashBag()->add('information','Une erreur a été rencontrée');
	}
	$liste_mess = $em->getRepository(Messemail::class)
	                    ->findAll();
	return $this->render('Theme/Users/Adminuser/Messemail/messemail.html.twig',
	array('form'=>$form->createView(),'liste_mess'=>$liste_mess,'formsupp'=>$formsupp->createView()));
}

public function supprimermessemail(Messemail $mess, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm();

	if ($request->getMethod() == 'POST') {
	$formsupp->handleRequest($request);
		if($formsupp->isValid()){
			$em->remove($mess);
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
		}
	}else{
	$this->get('session')->getFlashBag()->add('supprime_mess',$mess->getId());
	$this->get('session')->getFlashBag()->add('supprime_mess',$mess->getTitre());
	}
	return $this->redirect($this->generateUrl('users_adminuser_message_email_new_letter'));
}
}