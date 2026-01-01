<?php
/*(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace App\Controller\Produit\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\Produit\Service\ServiceType;
use App\Entity\Produit\Service\Service;
use App\Form\Produit\Service\EvenementType;
use App\Form\Produit\Service\EvenementeditType;
use App\Entity\Produit\Service\Evenement;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produit\Service\Question;
use App\Entity\Produit\Produit\Produit;
use App\Entity\Produit\Service\Typearticle;
use App\Form\Produit\Service\TypearticleType;
use App\Entity\Produit\Produit\Souscategorie;
use App\Entity\Users\User\Investissement;
use App\Form\Users\User\InvestissementType;

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
				$nosservice->setType($_POST['typearticle']);
				if($_POST['typearticle'] == 'about' and isset($_POST['typeabout']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeabout']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'mission') and isset($_POST['typemission']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typemission']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'vision') and isset($_POST['typevision']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typevision']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'engagement') and isset($_POST['typeengagement']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeengagement']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'justice') and isset($_POST['typejustice']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typejustice']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'marketing') and isset($_POST['typemarketing']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typemarketing']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'educationlarge') and isset($_POST['typeeducationlarge']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeeducationlarge']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'entrepreneur') and isset($_POST['typeentrepreneur']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeentrepreneur']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'nosreperes') and isset($_POST['typenosreperes']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typenosreperes']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'bourse') and isset($_POST['typebourse']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typebourse']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'comptabilite') and isset($_POST['typecomptabilite']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typecomptabilite']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'investissment') and isset($_POST['typeinvestissment']))
				{
					$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeinvestissment']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'action') and isset($_POST['typeaction']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeaction']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'donation') and isset($_POST['typedonation']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typedonation']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'demasquer') and isset($_POST['typedemasquer']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typedemasquer']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'branding') and isset($_POST['typebranding']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typebranding']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'projets') and isset($_POST['typeprojets']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeprojets']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'cgu') and isset($_POST['typecgu']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typecgu']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}else if(($_POST['typearticle'] == 'confidentialite') and isset($_POST['typeconfidentialite']))
				{
					$type = $em->getRepository(Typearticle::class)
								->find($_POST['typeconfidentialite']);
					if($type != null)
					{
						$nosservice->setTypearticle($type);
					}
				}
			}

			if ($form->isValid()){
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
		$type_demasquer = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'demasquer'));
		$type_branding = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'branding'));
		$type_projets = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'projets'));
		$type_cgu = $em->getRepository(Typearticle::class)
								->findBy(array('position'=>'cgu'));
		$type_confidentialite = $em->getRepository(Typearticle::class)
								   ->findBy(array('position'=>'confidentialite'));

		return $this->render('Theme/Users/Adminuser/Service/nouveauservice.html.twig',
		array('form'=>$form->createView(),'formsupp'=>$formsupp->createView(),
		'formtype'=>$formtype->createView(),'liste_module'=>$liste_module,'type_article'=>$type_article,
		'liste_service'=>$liste_service, 'type_about'=>$type_about, 'type_mission'=>$type_mission,
		'type_vision'=>$type_vision, 'type_engagement'=>$type_engagement, 'type_justice'=>$type_justice, 'type_projets'=>$type_projets,
		'type_marketing'=>$type_marketing,'type_educationlarge'=>$type_educationlarge,'type_entrepreneur'=>$type_entrepreneur, 'type_nosreperes'=>$type_nosreperes,'type_bourse'=>$type_bourse,
		'type_comptabilite'=>$type_comptabilite,'type_investissment'=>$type_investissment,'type_action'=>$type_action,'type_donation'=>$type_donation,
		'type_cgu'=>$type_cgu,'type_confidentialite'=>$type_confidentialite, 'type_demasquer'=>$type_demasquer, 'type_branding'=>$type_branding));
	}

	public function modifarticle(GeneralServicetext $service, Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}
		$article = $em->getRepository(Service::class)
								->find($id);
		if($article != null)
		{
		$form = $this->createForm(ServiceType::class, $article);
			if ($request->getMethod() == 'POST'){
			$form->handleRequest($request);
			$article->setServicetext($service);
			if ($form->isValid()){

				$article->setUser($this->getUser());
				if($article->getImgservice() !== null)
				{
					$article->getImgservice()->setServicetext($service);
				}

				if(isset($_POST['typearticle']))
				{
					$article->setType($_POST['typearticle']);
					if($_POST['typearticle'] == 'about' and isset($_POST['typeabout']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeabout']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'mission') and isset($_POST['typemission']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typemission']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'vision') and isset($_POST['typevision']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typevision']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'engagement') and isset($_POST['typeengagement']))
					{
						$type = $em->getRepository(Typearticle::class)
										->find($_POST['typeengagement']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'justice') and isset($_POST['typejustice']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typejustice']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'marketing') and isset($_POST['typemarketing']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typemarketing']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'educationlarge') and isset($_POST['typeeducationlarge']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeeducationlarge']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'entrepreneur') and isset($_POST['typeentrepreneur']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeentrepreneur']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'nosreperes') and isset($_POST['typenosreperes']))
					{
						$type = $em->getRepository(Typearticle::class)
										->find($_POST['typenosreperes']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'bourse') and isset($_POST['typebourse']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typebourse']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'comptabilite') and isset($_POST['typecomptabilite']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typecomptabilite']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'investissment') and isset($_POST['typeinvestissment']))
					{
						$type = $em->getRepository(Typearticle::class)
										->find($_POST['typeinvestissment']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'action') and isset($_POST['typeaction']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeaction']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'donation') and isset($_POST['typedonation']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typedonation']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'demasquer') and isset($_POST['typedemasquer']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typedemasquer']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'branding') and isset($_POST['typebranding']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typebranding']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'projets') and isset($_POST['typeprojets']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeprojets']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'cgu') and isset($_POST['typecgu']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typecgu']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}else if(($_POST['typearticle'] == 'confidentialite') and isset($_POST['typeconfidentialite']))
					{
						$type = $em->getRepository(Typearticle::class)
									->find($_POST['typeconfidentialite']);
						if($type != null)
						{
							$article->setTypearticle($type);
						}
					}
				}

				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
			}else{
			$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
			}
			return $this->redirect($this->generateUrl('users_adminuser_liste_article_type', array('id'=>$article->getTypearticle()->getId())));
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
		$type_demasquer = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'demasquer'));
		$type_branding = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'branding'));
		$type_projets = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>'projets'));
		$type_cgu = $em->getRepository(Typearticle::class)
								->findBy(array('position'=>'cgu'));
		$type_confidentialite = $em->getRepository(Typearticle::class)
								   ->findBy(array('position'=>'confidentialite'));

		return $this->render('Theme/Users/Adminuser/Service/modifarticle.html.twig',
		array('form'=>$form->createView(),'liste_module'=>$liste_module,'type_article'=>$type_article,
		'liste_service'=>$liste_service,'type_about'=>$type_about,'type_mission'=>$type_mission,
		'type_vision'=>$type_vision,'type_engagement'=>$type_engagement,'type_justice'=>$type_justice,'type_projets'=>$type_projets,
		'type_marketing'=>$type_marketing,'type_educationlarge'=>$type_educationlarge,'type_entrepreneur'=>$type_entrepreneur, 'type_nosreperes'=>$type_nosreperes,'type_bourse'=>$type_bourse,
		'type_comptabilite'=>$type_comptabilite,'type_investissment'=>$type_investissment,'type_action'=>$type_action,'type_donation'=>$type_donation,
		'type_cgu'=>$type_cgu,'type_confidentialite'=>$type_confidentialite, 'article'=>$article, 'type_demasquer'=>$type_demasquer, 'type_branding'=>$type_branding));
		}else{
			echo 'Echec ! Une erreur a été rencontrée.';
			exit;
		}
	}

	public function deletepartie(Evenement $partie, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$formsupp = $this->createFormBuilder()->getForm();
		if ($request->getMethod() == 'POST'){
			$formsupp->handleRequest($request);
			if ($formsupp->isValid()){
				$em->remove($partie);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
			}
		}else{
			$this->get('session')->getFlashBag()->add('supprime_even',$partie->getId());
			$this->get('session')->getFlashBag()->add('supprime_even',$partie->getNom());
		}
		return $this->redirect($this->generateUrl('users_adminuser_liste_article_type', array('id'=>$partie->getService()->getTypearticle()->getId())));
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

	public function articlespartype(Typearticle $typearticle, $page)
	{
		$em = $this->getDoctrine()->getManager();
		$liste_article = $em->getRepository(Service::class)
							->findAllArticle($typearticle->getId(),$page, 10);
		$formsupp = $this->createFormBuilder()->getForm();

		return $this->render('Theme/Users/Adminuser/Service/articlespartype.html.twig',
		array('liste_article'=>$liste_article,'formsupp'=>$formsupp->createView(),
		'nombrepage' => ceil(count($liste_article)/10),'page'=>$page,'typearticle'=>$typearticle));
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

	public function modifpartiearticle($id, GeneralServicetext $service, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}
		$partie = $em->getRepository(Evenement::class)
						->find($id);
		if($partie != null)
		{
		$formeven = $this->createForm(EvenementeditType::class, $partie);
		if ($request->getMethod() == 'POST'){
			$formeven->handleRequest($request);
			$partie->setServicetext($service);
			if ($formeven->isValid() and isset($_POST['typearticle'])){
				$partie->setTypearticle($_POST['typearticle']);
				$partie->setUser($this->getUser());
				if($partie->getImgevenement() !== null)
				{
					$partie->getImgevenement()->setServicetext($service);
				}

				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');

				return $this->redirect($this->generateUrl('users_adminuser_detail_article_admin', array('id'=>$partie->getService()->getId())));
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
			}
			return $this->redirect($this->generateUrl('users_adminuser_liste_article_type', array('id'=>$partie->getService()->getType()->getId())));
		}
		return $this->render('Theme/Users/Adminuser/Service/modifpartiearticle.html.twig',
		array('formeven'=>$formeven->createView(),'partie'=>$partie));
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

	public function addarticlepart(Service $service, GeneralServicetext $serviceText, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$evenement = new Evenement($serviceText);
		$formeven = $this->createForm(EvenementeditType::class, $evenement);
		if ($request->getMethod() == 'POST'){
			$formeven->handleRequest($request);
			$evenement->setUser($this->getUser());
			$evenement->setService($service);
			if($evenement->getImgevenement() !== null)
			{
				$evenement->getImgevenement()->setServicetext($serviceText);
			}
			if($formeven->isValid() and isset($_POST['typearticle'])){
				$evenement->setTypearticle($_POST['typearticle']);
				$em->persist($evenement);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');

				return $this->redirect($this->generateUrl('users_adminuser_detail_article_admin', array('id'=>$service->getId())));
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée !');
			}
		}
		return $this->redirect($this->generateUrl('users_adminuser_liste_article_type',
		array('id'=>$service->getTypearticle()->getId())));
	}

	public function supprimertypearticle(Typearticle $typearticle)
	{
		$em = $this->getDoctrine()->getManager();
		if(count($typearticle->getServices()) == 0)
		{
			$em->remove($typearticle);
			$em->flush();
			$this->get('session')->getFlashBag()->add('information','Suppression effectuée avec succès');
		}else{
			$this->get('session')->getFlashBag()->add('information','Echec ! Cette catégorie contient les articles, Supprimez lès en premier.');
		}
		return $this->redirect($this->generateUrl('users_adminuser_ajouter_nouveau_service'));
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
			$liste_service = $em->getRepository(Evenement::class)
								->findBy(array('service'=>$service));

			if((count($liste_indicateur) + count($liste_annee) + count($liste_service)) == 0)
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

	public function detailarticleadmin(Service $article, GeneralServicetext $service)
	{
		$em = $this->getDoctrine()->getManager();
		$evenement = new Evenement($service);
		$formeven = $this->createForm(EvenementeditType::class, $evenement);
		$formsupp = $this->createFormBuilder()->getForm();

		return $this->render('Theme/Users/Adminuser/Service/detailarticleadmin.html.twig',
		array('article'=>$article, 'formeven'=>$formeven->createView(), 'formsupp'=>$formsupp->createView()));
	}

	public function updatetypearticle(Request $request,GeneralServicetext $service, $id)
	{
		$em = $this->getDoctrine()->getManager();
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}else{
			$id = $id;
		}
		$typearticle = $em->getRepository(Typearticle::class)
										->find($id);
		if($typearticle != null)
		{
		$formtype = $this->createForm(TypearticleType::class, $typearticle);
			if ($request->getMethod() == 'POST'){
				$formtype->handleRequest($request);
				$typearticle->setServicetext($service);
				if($formtype->isValid() and isset($_POST['typeservice'])){
					$typearticle->setPosition($_POST['typeservice']);
					$em->flush();
					$this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
				}else{
					$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
				}
				return $this->redirect($this->generateUrl('users_adminuser_ajouter_nouveau_service'));
			}
			return $this->render('Theme/Users/Adminuser/Service/updatetypearticle.html.twig',
			array('formtype'=>$formtype->createView(),'typearticle'=>$typearticle));
		}else{
			echo 'Echec ! Une erreur a été rencontrée.';
			exit;
		}
	}

	public function articlessupport($position, $page, $idType)
	{
		$em = $this->getDoctrine()->getManager();
		$currentTypeArticle = null;
		if($idType > 0)
		{
			$currentTypeArticle = $em->getRepository(Typearticle::class)
							         ->find($idType);

			$liste_article = $em->getRepository(Service::class)
							->myFindByTypearticlePagine($idType, $position, $page, 10);
		}else{
			$liste_article = $em->getRepository(Service::class)
							->myFindAllPagineType($position, $page, 10);
		}

		if($position == "mission" or $position == "vision")
		{
			return $this->render('Theme/Produit/Service/Service/articlesmission.html.twig', 
			array('page'=>$page, 'liste_article'=>$liste_article, 
			'nombrepage'=>ceil(count($liste_article)/10), 'position'=>$position));
		}else if($position == "about"){
			return $this->render('Theme/Produit/Service/Service/articlesabout.html.twig', 
			array('page'=>$page, 'liste_article'=>$liste_article, 
			'nombrepage'=>ceil(count($liste_article)/10), 'position'=>$position));
		}else{

			$type_article = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>$position), array("rang"=>"asc"), 20);
			
			return $this->render('Theme/Produit/Service/Service/articlessupport.html.twig', 
			array('page'=>$page, 'liste_article'=>$liste_article, 'type_article'=>$type_article,
			'nombrepage'=>ceil(count($liste_article)/10), 'position'=>$position, 'idType'=>$idType, 'currentTypeArticle'=>$currentTypeArticle));
		}
	}

	public function openQuiz($page)
	{
		$em = $this->getDoctrine()->getManager();
		$liste_article = $em->getRepository(Question::class)
                            ->myFindAllPagine($page, 10);
		return $this->render('Theme/Produit/Service/Service/openQuiz.html.twig', 
		array('page'=>$page, 'liste_article'=>$liste_article,'nombrepage'=>ceil(count($liste_article)/10)));
	}

	public function commentaireArticle(Service $article)
	{
		$em = $this->getDoctrine()->getManager();
		$article->setEm($em);
		$liste_type = $em->getRepository(Typearticle::class)
							->findBy(array('position'=>$article->getType()));	

		$liste_article = $em->getRepository(Service::class)
							->myFindAllPagineType($article->getType(),1,500);
		$images_partie = new \Doctrine\Common\Collections\ArrayCollection();

		$liste_key = explode(',',$article->getKeyword());

		return $this->render('Theme/Produit/Service/Service/commentaireArticle.html.twig',
		array('article'=>$article, 'type_blog'=>$liste_type, 'liste_article'=>$liste_article, 'liste_key'=>$liste_key));
	}

	public function brandingShop($page)
	{
		$em = $this->getDoctrine()->getManager();
		$liste_article = $em->getRepository(Service::class)
							->myFindAllPagineType('branding',$page,10);

		return $this->render('Theme/Produit/Service/Service/brandingShop.html.twig', 
		array('page'=>$page, 'liste_article'=>$liste_article, 
		'nombrepage'=>ceil(count($liste_article)/10), 'position'=>'branding'));
	}

	public function menustruct()
	{
		$em = $this->getDoctrine()->getManager();
		$liste_appli = $em->getRepository(Produit::class)
	                      ->myfindAll();
		return $this->render('Theme/Produit/Service/Service/menustruct.html.twig', array('liste_appli'=>$liste_appli));
	}

	public function contacts(GeneralServicetext $service, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$investissement = new Investissement($service);
		$forminvestissement = $this->createForm(InvestissementType::class, $investissement);

		if($request->getMethod() == 'POST' and isset($_POST['typeservice'])){
			$forminvestissement->handleRequest($request);
			$investissement->setUser($this->getUser());

		if($forminvestissement->isValid()){
				$em->persist($investissement);
				$em->flush();
				$this->get('session')->getFlashBag()->add('information','Enregistrement effectué avec succès');
			}else{
				$this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée, Choisissez un type et retransmettez le formulaire!');
			}
		}

		return $this->render('Theme/Produit/Service/Service/contacts.html.twig', array('forminvestissement'=>$forminvestissement->createView()));
	}
}