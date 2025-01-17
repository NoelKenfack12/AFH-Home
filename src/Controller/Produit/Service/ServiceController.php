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
use App\Entity\Produit\Service\Typearticle;
use App\Form\Produit\Service\TypearticleType;
use App\Entity\Produit\Produit\Souscategorie;

class ServiceController extends AbstractController
{
	public function nouveauservice(GeneralServicetext $service, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$nosservice = new Service($service);
		$form = $this->createForm(ServiceType::class, $nosservice);

		$typearticle = new Typearticle($service);
		$formtype = $this->createForm(TypearticleType::class, $typearticle);

		$formsupp = $this->createFormBuilder()->getForm();
		if($request->getMethod() == 'POST'){
			$form->handleRequest($request);
			$nosservice->setUser($this->getUser());
			if($nosservice->getImgservice() !== null)
			{
				$nosservice->getImgservice()->setServicetext($service);
			}
			if(isset($_POST['typearticle']))
			{
				$nosservice->setTypearticle($_POST['typearticle']);
				if(isset($_POST['scatmodule']) and ($_POST['typearticle'] == 'fonctionnement' or $_POST['typearticle'] == 'outilscampagne'))
				{
					$scat = $em->getRepository(Souscategorie::class)
								->find($_POST['scatmodule']);
					if($scat != null)
					{
						$nosservice->setSouscategorie($scat);
					}
				}
				if($_POST['typearticle'] == 'fonctionnement' and isset($_POST['typefonctionnement']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typefonctionnement']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'aboutwin') and isset($_POST['typeaboutwin']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeaboutwin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'avantagewin') and isset($_POST['typeavantagewin']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeavantagewin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
					if(isset($_POST['scatmodule'])){
						$scat = $em->getRepository(Souscategorie::class)
									->find($_POST['scatmodule']);
						if($scat != null)
						{
							$nosservice->setSouscategorie($scat);
						}
					}
					
				}else if(($_POST['typearticle'] == 'fonctionnementwin') and isset($_POST['typefonctionnementwin']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typefonctionnementwin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'blogwin') and isset($_POST['typeblogwin']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeblogwin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'faqwin') and isset($_POST['typefaqwin']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typefaqwin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'modepaiement') and isset($_POST['typemodepaiement']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typemodepaiement']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'outilscampagne') and isset($_POST['typeoutilscampagne']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeoutilscampagne']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'aproposads') and isset($_POST['typeaproposads']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeaproposads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'blogads') and isset($_POST['typeblogads']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeblogads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'faqads') and isset($_POST['typefaqads']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typefaqads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'engagementads') and isset($_POST['typeengagementads']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeengagementads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'toutinclusads') and isset($_POST['typetoutinclusads']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typetoutinclusads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'cguads') and isset($_POST['typecguads']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typecguads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'cguwin') and isset($_POST['typecguwin']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typecguwin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'confidentialiteads') and isset($_POST['typeconfidentialiteads']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeconfidentialiteads']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'confidentialitewin') and isset($_POST['typeconfidentialitewin']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeconfidentialitewin']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}else if(($_POST['typearticle'] == 'metiersafh') and isset($_POST['typemetiersafh']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typemetiersafh']);
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}
			}

			if ($form->isValid()){
				if($nosservice->getType() == null)
				{
					$type = $em->getRepository(Typearticle::class)
								->myFindOneType();
					if($type != null)
					{
						$nosservice->setType($type);
					}
				}
				$em->persist($nosservice);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée, Choisissez un type et retransmettez le formulaire!');
			}
		}

		$liste_module = $em->getRepository(Souscategorie::class)
							->myfindAll();

		$liste_service = $em->getRepository(Service::class)
							->myfindAll();

		$type_article = $em->getRepository(Typearticle::class)
							->findAll();

		$type_about = $em->getRepository(Typearticle::class)
						 ->findBy(array('position'=>'about'));

		$type_mission = $em->getRepository(Typearticle::class)
						->findBy(array('position'=>'mission'));

		$type_vision = $em->getRepository(Typearticle::class)
						  ->findBy(array('position'=>'vision'));

		$type_engagement = $em->getRepository(Typearticle::class)
									->findBy(array('position'=>'engagement'));

		$type_justice = $em->getRepository(Typearticle::class)
						  ->findBy(array('position'=>'justice'));

		$type_marketing = $em->getRepository(Typearticle::class)
						  ->findBy(array('position'=>'marketing'));

		$type_educationlarge = $em->getRepository(Typearticle::class)
								  ->findBy(array('position'=>'educationlarge'));
		$type_entrepreneur = $em->getRepository(Typearticle::class)
								  ->findBy(array('position'=>'entrepreneur'));

		$type_nosreperes = $em->getRepository(Typearticle::class)
						      ->findBy(array('position'=>'nosreperes'));
		$type_bourse = $em->getRepository(Typearticle::class)
					      ->findBy(array('position'=>'bourse'));
		$type_comptabilite = $em->getRepository(Typearticle::class)
					            ->findBy(array('position'=>'comptabilite'));
		$type_investissment = $em->getRepository(Typearticle::class)
					->findBy(array('position'=>'investissment'));
		$type_action = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'action'));
		$type_donation = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'donation'));
		$type_cgu = $em->getRepository(Typearticle::class)
								->findBy(array('position'=>'cgu'));
		$type_cguwin = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'cguwin'));
		$type_confidentialite = $em->getRepository(Typearticle::class)
								   ->findBy(array('position'=>'confidentialite'));

		return $this->render('Theme/Users/Adminuser/Service/nouveauservice.html.twig',
		array('form'=>$form->createView(),'formsupp'=>$formsupp->createView(),
		'formtype'=>$formtype->createView(),'liste_module'=>$liste_module,'type_article'=>$type_article,
		'liste_service'=>$liste_service,'type_about'=>$type_about,'type_mission'=>$type_mission,
		'type_vision'=>$type_vision,'type_engagement'=>$type_engagement,'type_justice'=>$type_justice,
		'type_marketing'=>$type_marketing,'type_educationlarge'=>$type_educationlarge,'type_entrepreneur'=>$type_entrepreneur, 'type_nosreperes'=>$type_nosreperes,'type_bourse'=>$type_bourse,
		'type_comptabilite'=>$type_comptabilite,'type_investissment'=>$type_investissment,'type_action'=>$type_action,'type_donation'=>$type_donation,
		'type_cgu'=>$type_cgu,'type_confidentialite'=>$type_confidentialite));
	}

	public function addtypearticle(Request $request,GeneralServicetext $service)
	{
		$em = $this->getDoctrine()->getManager();
		$typearticle = new Typearticle($service);
		$formtype = $this->createForm(TypearticleType::class, $typearticle);

		if($request->getMethod() == 'POST' and isset($_POST['typeservice'])){
			$formtype->handleRequest($request);
			$typearticle->setUser($this->getUser());

		if($formtype->isValid()){
				$typearticle->setPosition($_POST['typeservice']);
				$em->persist($typearticle);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée, Choisissez un type et retransmettez le formulaire!');
			}
		}
		return $this->redirect($this->generateUrl('users_adminuser_ajouter_nouveau_service'));
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