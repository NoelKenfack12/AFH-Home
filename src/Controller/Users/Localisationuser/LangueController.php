<?php
namespace App\Controller\Users\Localisationuser;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users\Localisationuser\Langue;
use App\Form\Users\Localisationuser\LangueType;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;

class LangueController extends AbstractController
{
public function accueillangue(GeneralServicetext $service, Request $request)
{
    $em = $this->getDoctrine()->getManager();
	$lang = new Langue($service);
	$form = $this->createForm(LangueType::class, $lang); 

	if ($request->getMethod() == 'POST') {
    $form->handleRequest($request);
    if ($form->isValid()){
		$em->persist($lang);
		$em->flush();
		$this->get('session')->getFlashBag()->add('langue','Langue bien enregistrée.');
		return $this->redirect($this->generateUrl('admin_user_langue_accueil'));
	}
	}
	return $this->render('Theme/Users/Adminuser/Localisationuser/accueillangue.html.twig',
	array('formlang'=>$form->createView()));
}
public function listelangue()
{
	$em = $this->getDoctrine()->getManager();
	$liste_lang = $em->getRepository(Langue::class)
	                 ->findAll();
	return $this->render('Theme/Users/Adminuser/Localisationuser/listelangue.html.twig',
	array('liste_langue'=>$liste_lang));
}
public function modifierlangue(Langue $lang, GeneralServicetext $service, Request $request)
{
    $em = $this->getDoctrine()->getManager();
	$form = $this->createForm(LangueType::class, $lang);
	if ($request->getMethod() == 'POST') {
	$lang->setServiceaccent($service);
    $form->handleRequest($request);
    if ($form->isValid()){
		$em->flush();
		$this->get('session')->getFlashBag()->add('langue','Modification effectuée.');
		return $this->redirect($this->generateUrl('admin_user_langue_accueil'));
	}
	}
    return $this->render('Theme/Users/Adminuser/Localisationuser/modifierlangue.html.twig',
	array('formlang'=>$form->createview(), 'langue'=>$lang));
}
public function supprimerlangue(Langue $lang, Request $request)
{
    $em = $this->getDoctrine()->getManager();
	$form = $this->createFormBuilder()->getForm(); 
	if ($request->getMethod() == 'POST') {
    $form->handleRequest($request);
    if ($form->isValid()){
		//ici on vérifiera si la langue n'est pas pour les pays déjà enregistrés
		$em->remove($lang);
		$em->flush();
		$this->get('session')->getFlashBag()->add('langue','Langue bien supprimer.');
		return $this->redirect($this->generateUrl('admin_user_langue_accueil'));
	}
	}
    return $this->render('Theme/Users/Adminuser/Localisationuser/supprimerlangue.html.twig',
	array('form'=>$form->createview(), 'langue'=>$lang));
}
}