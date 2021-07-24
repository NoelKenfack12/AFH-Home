<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace Produit\ServiceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Produit\ServiceBundle\Form\MessageType;
use Produit\ServiceBundle\Entity\Message;
use General\ServiceBundle\AfMail\Afmail;
use General\ServiceBundle\AfMail\fileAttachment;

class MessageController extends Controller
{

public function contactusAction()
{
	$em = $this->getDoctrine()->getManager();
	$mess = new Message();
    $form = $this->createForm(new MessageType, $mess);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST'){
	$form->bind($request);
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
		
		$mail = new Afmail();                                    // Create the email object
		$mail->setFrom($mess->getNom().' <'.$mess->getEmail().'>');     // Set the From: address
		$mail->setCc('Support Afex Hosting <support@hosting.africexplorer.com>');               // Set the Cc: address (es)
		$mail->setCc('Gmail Africexplorer <africexplorer@gmail.com>');               // Set the Cc: address (es)
		$mail->setSubject($mess->getNom().'(Tel:'.$mess->getTel().')'.'vient d\'envoyé un message au support via Africexplorer !');                           // Set the subject
		$mail->setHTML($mess->getTitre().'</br>'.$mess->getContenu()); // Set the HTML (optional)
		$mail->setTextCharset('utf-8');
		$mail->setHTMLCharset('utf-8');
		$result = $mail->send(array('noel.kenfack@yahoo.fr'));      // Send the email
		
		$this->get('session')->getFlashBag()->add('information','Votre message a été enregistré avec succès');
	}else{
		$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée, Vérifier le formulaire !');
	}
	}
	return $this->render('ProduitServiceBundle:Message:contactus.html.twig', array('form'=>$form->createView()));
}

public function messagerecuAction()
{
	$em = $this->getDoctrine()->getManager();
	$liste_mess = $em->getRepository('ProduitServiceBundle:Message')
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
	return $this->render('ProduitServiceBundle:Message:messagerecu.html.twig', array('liste_mess'=>$liste_mess,'formsupp'=>$formsupp->createView()));
}

public function supprimermessageAction(Message $message)
{
	$em = $this->getDoctrine()->getManager();
		$formsupp = $this->createFormBuilder()->getForm();
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
		$formsupp->bind($request);
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
public function validationmessageAction(Message $message)
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