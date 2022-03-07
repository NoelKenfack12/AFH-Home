<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace App\Controller\Produit\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\Produit\Service\ServiceType;
use App\Entity\Produit\Service\Service;
use App\Form\Produit\Service\EvenementType;
use App\Entity\Produit\Service\Evenement;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produit\Produit\Produit;

class ServiceController extends AbstractController
{
	public function nouveauservice(GeneralServicetext $service, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$nosservice = new Service($service);
		$form = $this->createForm(ServiceType::class, $nosservice);
		$formsupp = $this->createFormBuilder()->getForm();

		if ($request->getMethod() == 'POST' and isset($_POST['type'])){
			$form->handleRequest($request);
			$nosservice->setUser($this->getUser());
			if($nosservice->getImgservice() !== null)
			{
			$nosservice->getImgservice()->setServicetext($service);
			}
			if($form->isValid()){
				$nosservice->setType($_POST['type']);
				$em->persist($nosservice);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée, Choisissez un type et retransmettez le formulaire!');
			}
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}

	public function modifierservice(GeneralServicetext $service, Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}
		
		$nosservice = $em->getRepository(Service::class)
						->find($id);

		if($nosservice != null)
		{
		$form = $this->createForm(ServiceType::class, $nosservice);

		if ($request->getMethod() == 'POST' and isset($_POST['type'])){
			$form->handleRequest($request);
			if($nosservice->getImgservice() !== null)
			{
			$nosservice->getImgservice()->setServicetext($service);
			}
			if ($form->isValid()){
				$nosservice->setType($_POST['type']);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
			}
			return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
		}
		return $this->render('Theme/Users/Adminuser/Service/modifierservice.html.twig',
		array('formservice'=>$form->createView(),'nosservice'=>$nosservice));
		}else{
			echo 'Echec ! Une erreur a été rencontrée.';
			exit;
		}
	}
	
	public function modifevolutionindicateur(GeneralServicetext $service, Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}		
		$indicateur = $em->getRepository(Evenement::class)
						->find($id);

		if($indicateur != null)
		{
		$formevent = $this->createForm(EvenementType::class, $indicateur);

		if ($request->getMethod() == 'POST'){
			$formevent->handleRequest($request);
			if ($formevent->isValid()){
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
			}
			return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
		}
		return $this->render('Theme/Users/Adminuser/Service/modifevolutionindicateur.html.twig',
		array('formevent'=>$formevent->createView(),'indicateur'=>$indicateur));
		}else{
			echo 'Echec ! Une erreur a été rencontrée.';
			exit;
		}
	}

	public function addevenement(GeneralServicetext $service, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$evenement = new Evenement($service);
		$formevent = $this->createForm(EvenementType::class, $evenement);
		if ($request->getMethod() == 'POST'){
			$formevent->handleRequest($request);
			$evenement->setUser($this->getUser());

			$oldevolution = $em->getRepository(Evenement::class)
							->findOneBy(array('indicateur'=>$evenement->getIndicateur(),'annee'=>$evenement->getAnnee(),'produit'=>$evenement->getProduit()));
			if ($formevent->isValid() and $oldevolution == null){
				$em->persist($evenement);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');
			}else{
				if($oldevolution != null)
				{
					$this->get('session')->getFlashBag()->add('information','Echec, Une ligne identique existe déjà');
				}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée !');
				}
			}
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}

	public function supprimevenement(Evenement $even, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$formsupp = $this->createFormBuilder()->getForm();

		if ($request->getMethod() == 'POST'){
			$formsupp->handleRequest($request);
			if ($formsupp->isValid()){
				$em->remove($even);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
			}
		}else{
		$this->get('session')->getFlashBag()->add('supprime_evolution',$even->getId());
		$this->get('session')->getFlashBag()->add('supprime_evolution',$even->getBestvalue());
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}

	public function supprimerservice(Service $service, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$formsupp = $this->createFormBuilder()->getForm();
		if($request->getMethod() == 'POST'){
		$formsupp->handleRequest($request);
		if ($formsupp->isValid()){
			$liste_indicateur = $em->getRepository(Evenement::class)
								->findBy(array('indicateur'=>$service));
			$liste_annee = $em->getRepository(Evenement::class)
								->findBy(array('annee'=>$service));
			if((count($liste_indicateur) + count($liste_annee)) == 0)
			{
				$em->remove($service);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Action réfusée ! cette evénement contient les action.');
			}
		}
		}else{
			$this->get('session')->getFlashBag()->add('supprime_service',$service->getId());
			$this->get('session')->getFlashBag()->add('supprime_service',$service->getNom());
		}
		return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
	}

	public function presentation($id = 0)
	{
		$em = $this->getDoctrine()->getManager();
		$liste_service = $em->getRepository(Service::class)
							->myfindAll();
		if($id != 0)
		{
			$service = $em->getRepository(Service::class)
						->find($id);
			$newliste = new \Doctrine\Common\Collections\ArrayCollection();
			if($service != null)
			{
			$newliste[] = $service;
			}
			foreach($liste_service as $courantservice)
			{
				if($service != $courantservice)
				{
					$newliste[] = $courantservice;
				}
			}
			$liste_service = $newliste;
		}else{
			$compt = 0;
			foreach($liste_service as $ser)
			{
				if($compt == 0)
				{
					$service = $ser;
					break;
				}
			}
		}
		if($service != null)
		{
		return $this->render('Theme/Produit/Service/Service/presentation.html.twig', array('service'=>$service,'liste_service'=>$liste_service));
		}else{
		return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
		}
	}

	public function applicationstat($anneeid, $position)
	{
		if(isset($_POST['anneeid']))
		{
			$anneeid = $_POST['anneeid'];
		}
		
		$em = $this->getDoctrine()->getManager();
		$liste_indicateur = $em->getRepository(Service::class)
							->findBy(array('type'=>1), array('rang'=>'asc'));
		
		$all_appli = $em->getRepository(Produit::class)
							->findAppliType('');	
		
		foreach($liste_indicateur as $indicateur)
		{
			$indicateur->setEm($em);
		}
		return $this->render('Theme/Produit/Service/Service/applicationstat.html.twig', 
		array('anneeid'=>$anneeid, 'liste_indicateur'=>$liste_indicateur, 'all_appli'=>$all_appli, 'position'=>$position));
	}
	
	public function callbackhomepage(Request $request)
	{
		$parameters = json_decode($request->getContent(), true);
		$em = $this->getDoctrine()->getManager();
        if(count($parameters) == 1)
   		{
            $param = $parameters['param'];   
		}else{
			$param = "vide";
		}

		if($param != 'vide')
		{
			if($param == 'about')
			{
				return $this->render('Theme/Produit/Service/Service/callbackaboutpage.html.twig');
			}else if($param == 'projet')
			{
				$liste_appli = $em->getRepository(Produit::class)
	                      		  ->myfindAll();

				return $this->render('Theme/Produit/Service/Service/callbackprojetpage.html.twig', array('liste_appli'=>$liste_appli));
			}else if($param == 'statistique')
			{
				$liste_annee = $em->getRepository(Service::class)
	                      		  ->findBy(array('type'=>0), array('nom'=>'desc'));

				return $this->render('Theme/Produit/Service/Service/callbackstatistiquepage.html.twig', 
				array('liste_annee'=>$liste_annee));
			}else if($param == 'emploi'){
				return $this->render('Theme/Produit/Service/Service/callbackemploipage.html.twig');
			}else{
				echo 0;
				exit;
			}
		}else{
			echo 0;
			exit;
		}
	}
}