<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2015
*/
namespace App\Controller\Users\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users\User\Imgslide;
use App\Form\Users\User\ImgslideType;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;

class ImgslideController extends AbstractController
{
private $params;
private $_servicemail;

public function __construct(ParameterBagInterface $params, Singleemail $servicemail)
{
	$this->params = $params;
	$this->_servicemail = $servicemail;
}
public function addnewslide(GeneralServicetext $service, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$slide = new Imgslide($service);
	$formslide = $this->createForm(ImgslideType::class, $slide);

	if($request->getMethod() == 'POST')
	{
		$formslide->handleRequest($request);
		$slide->setUser($this->getUser());
		$slide->setServicetext($service);
		$allslide = $em->getRepository(Imgslide::class)
	                      ->FindAll();
		$nbslide = $this->params->get('nbslide');
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

public function deleteslide(Imgslide $slide, Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$formsupp = $this->createFormBuilder()->getForm(); 
	if ($request->getMethod() == 'POST') {
    $formsupp->handleRequest($request);
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