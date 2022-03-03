<?php
namespace Users\LocalisationuserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Users\LocalisationuserBundle\Entity\Langue;
use Users\LocalisationuserBundle\Form\LangueType;

class LangueController extends Controller
{
public function accueillangueAction()
{
	$service = $this->container->get('general_service.servicefile');
    $em = $this->getDoctrine()->getManager();
	$lang = new Langue($service);
	$form = $this->createForm(new LangueType, $lang); 
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $form->bind($request);
    if ($form->isValid()){
	$em->persist($lang);
    $em->flush();
	$this->get('session')->getFlashBag()->add('langue','Langue bien enregistrée.');
	return $this->redirect($this->generateUrl('admin_user_langue_accueil'));
	}
	}
	return $this->render('UsersAdminuserBundle:Localisationuser:accueillangue.html.twig',
	array('formlang'=>$form->createView()));
}
public function listelangueAction()
{
	$em = $this->getDoctrine()->getManager();
	$liste_lang = $em->getRepository('UsersLocalisationuserBundle:Langue')
	                 ->findAll();
	return $this->render('UsersAdminuserBundle:Localisationuser:listelangue.html.twig',
	array('liste_langue'=>$liste_lang));
}
public function modifierlangueAction(Langue $lang)
{
	$service = $this->container->get('general_service.servicefile');
    $em = $this->getDoctrine()->getManager();
	$form = $this->createForm(new LangueType, $lang); 
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
	$lang->setServiceaccent($service);
    $form->bind($request);
    if ($form->isValid()){
    $em->flush();
	$this->get('session')->getFlashBag()->add('langue','Modification effectuée.');
	return $this->redirect($this->generateUrl('admin_user_langue_accueil'));
	}
	}
    return $this->render('UsersAdminuserBundle:Localisationuser:modifierlangue.html.twig',
	array('formlang'=>$form->createview(), 'langue'=>$lang));
}
public function supprimerlangueAction(Langue $lang)
{
    $em = $this->getDoctrine()->getManager();
	$form = $this->createFormBuilder()->getForm(); 
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $form->bind($request);
    if ($form->isValid()){
	//ici on vérifiera si la langue n'est pas pour les pays déjà enregistrés
	$em->remove($lang);
    $em->flush();
	$this->get('session')->getFlashBag()->add('langue','Langue bien supprimer.');
	return $this->redirect($this->generateUrl('admin_user_langue_accueil'));
	}
	}
    return $this->render('UsersAdminuserBundle:Localisationuser:supprimerlangue.html.twig',
	array('form'=>$form->createview(), 'langue'=>$lang));}
}