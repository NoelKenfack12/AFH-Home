<?php
/*
	(c) Noel Kenfack <noel.kenfack@yahoo.fr> Février 2016
*/
namespace App\Controller\Produit\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users\User\User;
use App\Entity\Produit\Service\Question;
use App\Entity\Users\User\Newsletter;
use App\Form\Produit\Service\QuestionType;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\Email\Singleemail;

class QuestionController extends AbstractController
{
    private $params;
    private $_servicemail;

    public function __construct(ParameterBagInterface $params, Singleemail $servicemail)
    {
        $this->params = $params;
        $this->_servicemail = $servicemail;
    }

    public function listeQuestionnaires(Request $request,GeneralServicetext $service, $page)
    {
        $em = $this->getDoctrine()->getManager();
		$liste_article = $em->getRepository(Question::class)
							->myFindAllPagine($page, 10);

        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            if($form->isValid()){
                $firstPost = array();
                $secondPost = array();
                $thirdPost = array();
                if(isset($_POST['firstPost']))
                {
                    $firstPost["proposition"] = $_POST['firstPost'];
                    if(isset($_POST['reponse']) and $_POST['reponse'] == "first")
                    {
                        $firstPost["reponse"] = true;
                    }else{
                        $firstPost["reponse"] = false;
                    }
                }
                if(isset($_POST['secondPost']))
                {
                    $secondPost["proposition"] = $_POST['secondPost'];
                    if(isset($_POST['reponse']) and $_POST['reponse'] == "second")
                    {
                        $secondPost["reponse"] = true;
                    }else{
                        $secondPost["reponse"] = false;
                    }
                }
                if(isset($_POST['thirdPost']))
                {
                    $thirdPost["proposition"] = $_POST['thirdPost'];
                    if(isset($_POST['reponse']) and $_POST['reponse'] == "third")
                    {
                        $thirdPost["reponse"] = true;
                    }else{
                        $thirdPost["reponse"] = false;
                    }
                }
                $question->setFirstPost($firstPost);
                $question->setSecondPost($secondPost);
                $question->setThirdPost($thirdPost);
                $question->setReference("xxx");
                $em->persist($question);
                $em->flush();

                $pid = $service->initialisePid($question->getId());
                $question->setReference($pid);
                $em->flush();
                $this->get('session')->getFlashBag()->add('information','Modification effectuée avec succès');
            }else{
                $this->get('session')->getFlashBag()->add('information','Une ereur a été rencontrée!');
            }
        }

        return $this->render('Theme/Users/Adminuser/Questionnaire/listeQuestionnaires.html.twig', 
        array('page'=>$page, 'liste_article'=>$liste_article, 
        'nombrepage'=>ceil(count($liste_article)/10), 'form'=>$form->createView()));
    }
}