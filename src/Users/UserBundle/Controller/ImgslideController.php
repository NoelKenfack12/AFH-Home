<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*/
namespace Users\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Users\UserBundle\Entity\Imgslide;
use Users\UserBundle\Form\ImgslideType;

class ImgslideController extends Controller
{
public function addnewslideAction()
{
	$service = $this->container->get('general_service.servicetext');
	$em = $this->getDoctrine()->getManager();
	$slide = new Imgslide($service);
	$formslide = $this->createForm(new ImgslideType, $slide);
	$request = $this->getRequest();
	if($request->getMethod() == 'POST')
	{
		$formslide->bind($request);
		$slide->setUser($this->getUser());
		$slide->setServicetext($service);
		$allslide = $em->getRepository('UsersUserBundle:Imgslide')
	                      ->FindAll();
		$nbslide = $this->container->getParameter('nbslide');
		if ($formslide->isValid() and count($allslide) <= $nbslide){
			$em->persist($slide);
			$em->flush();
		}else{
			if(count($allslide) > $nbslide)
			{
				$this->get('session')->getFlashBag()->add('imgslide','Trop de slide.');
			}else{
				$this->get('session')->getFlashBag()->add('imgslide','Données invalides.');
			}
		}
	}
	return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
}
public function deleteslideAction(Imgslide $slide)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm(); 
    $request = $this->get('request');
	if ($request->getMethod() == 'POST') {
    $formsupp->bind($request);
    if ($formsupp->isValid()){
	$em->remove($slide);
    $em->flush();
	$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
	return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
	}
	}
    $this->get('session')->getFlashBag()->add('supprime_slide',$slide->getId());
	$this->get('session')->getFlashBag()->add('supprime_slide',$slide->getTitre());
	return $this->redirect($this->generateUrl('users_adminuser_accueil_administration'));
}	
}