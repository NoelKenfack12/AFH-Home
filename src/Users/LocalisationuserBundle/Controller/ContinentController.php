<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr>
*ce fichier est une proprietéde Zentsoft, 16 février 2015 (01h04min)--debut du Module utilisateurs
*/
namespace Users\LocalisationuserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Users\LocalisationuserBundle\Entity\Continent;
use Users\LocalisationuserBundle\Entity\Pays;
use Users\LocalisationuserBundle\Form\PaysType;
use Users\LocalisationuserBundle\Form\ContinentType;

class ContinentController extends Controller
{
public function listecontinentAction()
{
	$service = $this->container->get('general_service.servicefile');
	$continent = new Continent($service);
	$form = $this->createForm(new ContinentType, $continent);
    $em = $this->getDoctrine()->getManager();
    $liste_continent =$em->getRepository('UsersLocalisationuserBundle:Continent')
                      ->findAll();
    return $this->render('UsersAdminuserBundle:Localisationuser:listecontinent.html.twig', 
	array('liste_continent'=>$liste_continent,'form' => $form->createView()));
}

public function updatecontinentAction($id)
{
	$em = $this->getDoctrine()->getManager();
	$service = $this->container->get('general_service.servicetext');
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$continent = $em->getRepository('UsersLocalisationuserBundle:Continent')
					->find($id);

	if($continent != null)
	{
    $form = $this->createForm(new ContinentType, $continent);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST'){
		$form->bind($request);
		$continent->setServiceaccent($service);
		if ($form->isValid()){
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
		}
		return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
	}
	return $this->render('UsersAdminuserBundle:Localisationuser:updatecontinent.html.twig',
	array('form'=>$form->createView(),'continent'=>$continent));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}
	
}
public function supprimercontinentAction(Continent $continent)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm(); 
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $formsupp->bind($request);
    if ($formsupp->isValid()){
		$liste_pays = $continent->getPays();
		if(count($liste_pays) > 0){
			$this->get('session')->getFlashBag()->add('information','Action réfusée: Ce continent contient déjà les pays.');
		}else{
			$em->remove($continent);
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','continent bien supprimé.');
		}
		return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
	}
	}
    $this->get('session')->getFlashBag()->add('supprime_continent',$continent->getId());
	$this->get('session')->getFlashBag()->add('supprime_continent',$continent->getNom());
	return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
}
public function payscontinentAction()
{
	$service = $this->container->get('general_service.servicefile');
    $continent = new Continent($service);
	$form = $this->createForm(new ContinentType, $continent);
	$pays = new Pays();
	$formpays = $this->createForm(new PaysType, $pays);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $form->bind($request);
    if ($form->isValid()){
	$em = $this->getDoctrine()->getManager();
	$liste_cont = $em->getRepository('UsersLocalisationuserBundle:Continent')
	                 ->findAll();
	if(count($liste_cont) == 0)
	{
	$em->persist($continent);
    $em->flush();
	$this->get('session')->getFlashBag()->add('information','le continent a été bien enregistrée.');
	}else{
	$this->get('session')->getFlashBag()->add('information','Action réfusée!!, Les données issus de cette interface ne peuvent plus être validées');
	}
	return $this->render('GeneralServiceBundle:Adminplateforme:payscontinent.html.twig', 
	array('form2'=>$formpays->createView(),'form' => $form->createView()));
	}
	}
	return $this->render('GeneralServiceBundle:Adminplateforme:payscontinent.html.twig', 
	array('form2'=>$formpays->createView(),'form' => $form->createView()));
}
}