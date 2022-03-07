<?php
/*
	(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace App\Controller\Produit\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\Produit\Service\MessageType;
use App\Entity\Produit\Service\Message;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;

class MessageController extends AbstractController
{
private $params;
private $_servicemail;

public function __construct(ParameterBagInterface $params, Singleemail $servicemail)
{
	$this->params = $params;
	$this->_servicemail = $servicemail;
}

public function contactus(Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$mess = new Message();
    $form = $this->createForm(MessageType::class, $mess);

	if ($request->getMethod() == 'POST'){
	$form->handleRequest($request);
	if($this->getUser() != null)
	{
		$mess->setUser($this->getUser());
		$mess->setNom($this->getUser()->name(25));
		$mess->getEmail($this->getUser()->getUsername());
		$mess->setContenu($mess->getTitre());
	}else{
		if($this->getUser() == null and $mess->getNom() == null and $mess->getEmail() == null)
		{
			$this->get('session')->getFlashBag()->add('information','Vous devez entrer votre nom et votre email!');
		}
	}
	
    if ($form->isValid()){
		$em->persist($mess);
		$em->flush();
		
		$siteweb = $this->params->get('siteweb');
		$sitename = $this->params->get('sitename');
		$emailadmin = $this->params->get('emailadmin');

		if($service->email($emailadmin))
		{
			$response = $this->_servicemail->sendNotifEmail(
				$sitename, //Nom du destinataire
				$emailadmin, //Email Destinataire
				$mess->getNom().'(Tel:'.$mess->getTel().')'.'vient d\'envoyé un message au support via Africexplorer !', //Objet de l'email
				$mess->getNom().'(Tel:'.$mess->getTel().')'.'vient d\'envoyé un message au support via Africexplorer !', //Grand Titre de l'email
				$mess->getTitre().'</br>'.$mess->getContenu(),  //Contenu de l'email
				'' //Lien à suivre
			);
		}
		
		$this->get('session')->getFlashBag()->add('information','Votre message a été enregistré avec succès');
	}else{
		$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée, Vérifier le formulaire !');
	}
	}
	return $this->render('Theme/Produit/Service/Message/contactus.html.twig', array('form'=>$form->createView()));
}

public function messagerecu()
{
	$em = $this->getDoctrine()->getManager();
	$liste_mess = $em->getRepository(Message::class)
	                 ->myfindAll();
	foreach($liste_mess as $mess)
	{
		if($mess->getLut() == false)
		{
		$mess->setLut(true);
		}
	}
	$em->flush();
	$formsupp = $this->createFormBuilder()->getForm();
	return $this->render('Theme/Produit/Service/Message/messagerecu.html.twig', array('liste_mess'=>$liste_mess,'formsupp'=>$formsupp->createView()));
}

public function supprimermessage(Message $message, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm();

	if ($request->getMethod() == 'POST') {
		$formsupp->handleRequest($request);
		if ($formsupp->isValid()){
			$em->remove($message);
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
		}
	}else{
		$this->get('session')->getFlashBag()->add('supprime_mess',$message->getId());
	    $this->get('session')->getFlashBag()->add('supprime_mess',$message->getTitre());
	}
	return $this->redirect($this->generateUrl('users_adminuser_liste_message_recu'));
}
public function validationmessage(Message $message)
{
	$em = $this->getDoctrine()->getManager();
	if($message->getValide() == true)
	{
	$message->setValide(false);
	}else{
	$message->setValide(true);
	}
	$em->flush();
	return $this->redirect($this->generateUrl('users_adminuser_liste_message_recu'));
}
}