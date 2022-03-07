<?php

namespace App\Entity\Produit\Service;

use Doctrine\ORM\Mapping as ORM;
use App\Validator\Validatortext\Taillemin;
use App\Validator\Validatortext\Taillemax;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\Produit\Service\ServiceRepository;
use App\Entity\Users\User\User;
use App\Entity\Produit\Service\Imgservice;
use App\Entity\Produit\Service\Evenement;

/**
 * Service
 *
 * @ORM\Table("service")
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Taillemin(valeur=3, message="Au moins 3 caractères")
     * @Taillemax(valeur=50, message="Au plus 50 caractès")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Taillemin(valeur=3, message="Au moins 3 caractères")
     * @Taillemax(valeur=200, message="Au plus 200 caractès")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;  //0 pour l'année, 1 pour un indicateur
	
	/**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer")
     */
    private $rang; 
	
	/**
       * @ORM\ManyToOne(targetEntity=User::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $user;
	
	/**
     * @ORM\OneToOne(targetEntity=Imgservice::class,  cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     *@Assert\Valid()
    */
	private $imgservice;
	
	// variable du service de normalisation des noms des pays.
	private $servicetext;
	private $em;
	
	public function __construct(GeneralServicetext $service)
	{
		$this->servicetext = $service;
		$this->date = new \Datetime();
		$this->type = 0;
		$this->rang = 0;
	}

	public function setServicetext( GeneralServicetext $service)
    {
    $this->servicetext = $service;
    }
    public function getServicetext()
    {
    return $this->servicetext;
    }
	
	public function setEm($em)
    {
		$this->em = $em;
    }
	
    public function getEm()
    {
		return $this->em;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Service
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Service
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Service
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Service
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     * @return Service
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * Set imgservice
     * @return Service
     */
    public function setImgservice(Imgservice $imgservice): self
    {
        $this->imgservice = $imgservice;

        return $this;
    }

    /**
     * Get imgservice
     */
    public function getImgservice(): ?Imgservice
    {
        return $this->imgservice;
    }

    /**
     * Set rang
     *
     * @param integer $rang
     * @return Service
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return integer 
     */
    public function getRang()
    {
        return $this->rang;
    }
	
	public function getTabColor()
	{
		return array(array('#f7f7f7','#333'),array('#f96d00','#fff'),array('#ffffff','#333'),array('#f2f2f2','#333'),array('#00325a','#fff'),array('#a6be53','#fff'),array('#3498db','#fff'));
	}
	public function getvaleurAppli($idapp, $idannee)
	{
		$indicateur = $this->em->getRepository(Evenement::class)
							   ->getvaleurAppli($this->getId(),$idapp,$idannee);
		
		if($indicateur != null)
		{
			$random_keys = array_rand($this->getTabColor());
			$indicateur->setCodecouleur($this->getTabColor()[$random_keys]);
		}
		return $indicateur;
	}
}
