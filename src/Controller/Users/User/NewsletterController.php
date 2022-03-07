<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr>
*/
namespace App\Controller\Users\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users\User\Newsletter;
use App\Form\Users\User\NewsletterType;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;

class NewsletterController extends AbstractController
{
public function createaccount(Request $request)
{
	$em = $this->getDoctrine()->getManager();
	$newsletter = new Newsletter();
	$form = $this->createForm(NewsletterType::class, $newsletter);

	if ($request->getMethod() == 'POST'){
    $form->handleRequest($request);
    if ($form->isValid()){
		$em->persist($newsletter);
		$em->flush();
		$session = $this->get('session');
		$session->set('test_newsletter',100);
		$this->get('session')->getFlashBag()->add('alertnewsletter','<div class="alert alert-warning" style="border-radius: 0px;"><span class="fa fa-thumbs-o-up"></span> Inscription à la newsletter effectuée avec succès. Nous vous remercions !!!</div>');
	}else{
		$this->get('session')->getFlashBag()->add('alertnewsletter','<div class="alert alert-warning" style="border-radius: 0px;"><span class="fa fa-warning"></span> Une erreur a été rencontrée, Il se peut que votre email est déjà enregistré. </div>');
	}
	}
	return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
}
}