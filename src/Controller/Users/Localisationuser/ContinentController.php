<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr>
*ce fichier est une proprietéde Zentsoft, 16 février 2015 (01h04min)--debut du Module utilisateurs
*/
namespace App\Controller\Users\Localisationuser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users\Localisationuser\Continent;
use App\Entity\Users\Localisationuser\Pays;
use App\Form\Users\Localisationuser\PaysType;
use App\Form\Users\Localisationuser\ContinentType;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;

class ContinentController extends AbstractController
{
public function listecontinent(GeneralServicetext $service)
{
	$continent = new Continent($service);
	$form = $this->createForm(ContinentType::class, $continent);
    $em = $this->getDoctrine()->getManager();
    $liste_continent =$em->getRepository(Continent::class)
                      ->findAll();
    return $this->render('Theme/Users/Adminuser/Localisationuser/listecontinent.html.twig', 
	array('liste_continent'=>$liste_continent,'form' => $form->createView()));
}

public function updatecontinent(GeneralServicetext $service, Request $request, $id)
{
	$em = $this->getDoctrine()->getManager();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}else{
		$id = $id;
	}
	
	$continent = $em->getRepository(Continent::class)
					->find($id);

	if($continent != null)
	{
    $form = $this->createForm(ContinentType::class, $continent);

	if ($request->getMethod() == 'POST'){
		$form->handleRequest($request);
		$continent->setServiceaccent($service);
		if ($form->isValid()){
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
		}
		return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
	}
	return $this->render('Theme/Users/Adminuser/Localisationuser/updatecontinent.html.twig',
	array('form'=>$form->createView(),'continent'=>$continent));
	}else{
		echo 'Echec ! Une erreur a été rencontrée.';
		exit;
	}	
}
public function supprimercontinent(Continent $continent, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm(); 
	if ($request->getMethod() == 'POST') {
    $formsupp->handleRequest($request);
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
public function payscontinent(Request $request, GeneralServicetext $service)
{
    $continent = new Continent($service);
	$form = $this->createForm(ContinentType::class, $continent);
	$pays = new Pays();
	$formpays = $this->createForm(PaysType::class, $pays);

	if ($request->getMethod() == 'POST') {
    $form->handleRequest($request);
    if ($form->isValid()){
	$em = $this->getDoctrine()->getManager();
	$liste_cont = $em->getRepository(Continent::class)
	                 ->findAll();
	if(count($liste_cont) == 0)
	{
		$em->persist($continent);
		$em->flush();
		$this->get('session')->getFlashBag()->add('information','le continent a été bien enregistrée.');
	}else{
	$this->get('session')->getFlashBag()->add('information','Action réfusée!!, Les données issus de cette interface ne peuvent plus être validées');
	}
	return $this->render('Theme/General/Service/Adminplateforme/payscontinent.html.twig', 
	array('form2'=>$formpays->createView(),'form' => $form->createView()));
	}
	}
	return $this->render('Theme/General/Service/Adminplateforme/payscontinent.html.twig', 
	array('form2'=>$formpays->createView(),'form' => $form->createView()));
}
}