<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace Produit\ServiceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Produit\ServiceBundle\Form\ServiceType;
use Produit\ServiceBundle\Entity\Service;
use Produit\ServiceBundle\Form\EvenementType;
use Produit\ServiceBundle\Entity\Evenement;

class ServiceController extends Controller
{
	public function nouveauserviceAction()
	{
		$em = $this->getDoctrine()->getManager();
		$service = $this->container->get('general_service.servicetext');
		$nosservice = new Service($service);
		$form = $this->createForm(new ServiceType, $nosservice);
		$formsupp = $this->createFormBuilder()->getForm();
		$request = $this->get('request');
		if ($request->getMethod() == 'POST' and isset($_POST['type'])){
			$form->bind($request);
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

	public function modifierserviceAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$service = $this->container->get('general_service.servicetext');
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}
		
		$nosservice = $em->getRepository('ProduitServiceBundle:Service')
						->find($id);

		if($nosservice != null)
		{
		$form = $this->createForm(new ServiceType, $nosservice);
		$request = $this->get('request');
		if ($request->getMethod() == 'POST' and isset($_POST['type'])){
			$form->bind($request);
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
		return $this->render('UsersAdminuserBundle:Service:modifierservice.html.twig',
		array('formservice'=>$form->createView(),'nosservice'=>$nosservice));
		}else{
			echo 'Echec ! Une erreur a été rencontrée.';
			exit;
		}
	}

	public function modifevolutionindicateurAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$service = $this->container->get('general_service.servicetext');
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}
		
		$indicateur = $em->getRepository('ProduitServiceBundle:Evenement')
						->find($id);

		if($indicateur != null)
		{
		$formevent = $this->createForm(new EvenementType, $indicateur);
		$request = $this->get('request');
		if ($request->getMethod() == 'POST'){
			$formevent->bind($request);
			if ($formevent->isValid()){
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
			}
			return $this->redirect($this->generateUrl('users_adminuser_save_categorie_product'));
		}
		return $this->render('UsersAdminuserBundle:Service:modifevolutionindicateur.html.twig',
		array('formevent'=>$formevent->createView(),'indicateur'=>$indicateur));
		}else{
			echo 'Echec ! Une erreur a été rencontrée.';
			exit;
		}
	}

	public function addevenementAction()
	{
		$em = $this->getDoctrine()->getManager();
		$service = $this->container->get('general_service.servicetext');
		$request = $this->get('request');
		$evenement = new Evenement($service);
		$formevent = $this->createForm(new EvenementType, $evenement);
		if ($request->getMethod() == 'POST'){
			$formevent->bind($request);
			$evenement->setUser($this->getUser());

			$oldevolution = $em->getRepository('ProduitServiceBundle:Evenement')
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

	public function supprimevenementAction(Evenement $even)
	{
		$em = $this->getDoctrine()->getManager();
		$formsupp = $this->createFormBuilder()->getForm();

		$request = $this->get('request');
		if ($request->getMethod() == 'POST'){
			$formsupp->bind($request);
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

	public function supprimerserviceAction(Service $service)
	{
		$em = $this->getDoctrine()->getManager();
		$formsupp = $this->createFormBuilder()->getForm();
		$request = $this->get('request');
		if($request->getMethod() == 'POST'){
		$formsupp->bind($request);
		if ($formsupp->isValid()){
			$liste_indicateur = $em->getRepository('ProduitServiceBundle:Evenement')
								->findBy(array('indicateur'=>$service));
			$liste_annee = $em->getRepository('ProduitServiceBundle:Evenement')
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

	public function presentationAction($id = 0)
	{
		$em = $this->getDoctrine()->getManager();
		$liste_service = $em->getRepository('ProduitServiceBundle:Service')
							->myfindAll();
		if($id != 0)
		{
			$service = $em->getRepository('ProduitServiceBundle:Service')
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
		return $this->render('ProduitServiceBundle:Service:presentation.html.twig', array('service'=>$service,'liste_service'=>$liste_service));
		}else{
		return $this->redirect($this->generateUrl('users_user_acces_plateforme'));
		}
	}

	public function applicationstatAction($anneeid, $position)
	{
		if(isset($_POST['anneeid']))
		{
			$anneeid = $_POST['anneeid'];
		}
		
		$em = $this->getDoctrine()->getManager();
		$liste_indicateur = $em->getRepository('ProduitServiceBundle:Service')
							->findBy(array('type'=>1), array('rang'=>'asc'));
		
		$all_appli = $em->getRepository('ProduitProduitBundle:Produit')
							->findAppliType('');	
		
		foreach($liste_indicateur as $indicateur)
		{
			$indicateur->setEm($em);
		}
		return $this->render('ProduitServiceBundle:Service:applicationstat.html.twig', 
		array('anneeid'=>$anneeid, 'liste_indicateur'=>$liste_indicateur, 'all_appli'=>$all_appli, 'position'=>$position));
	}

	public function callbackhomepageAction()
	{
		$request = $this->get('request');
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
				return $this->render('ProduitServiceBundle:Service:callbackaboutpage.html.twig');
			}else if($param == 'projet')
			{
				$liste_appli = $em->getRepository('ProduitProduitBundle:Produit')
	                      		  ->myfindAll();

				return $this->render('ProduitServiceBundle:Service:callbackprojetpage.html.twig', array('liste_appli'=>$liste_appli));
			}else if($param == 'statistique')
			{
				return $this->render('ProduitServiceBundle:Service:callbackstatistiquepage.html.twig');
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