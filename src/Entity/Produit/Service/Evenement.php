<?php

namespace App\Entity\Produit\Service;

use Doctrine\ORM\Mapping as ORM;
use App\Validator\Validatortext\Taillemin;
use App\Validator\Validatortext\Taillemax;
use App\Validator\Validatortext\Siteweb;
use App\Service\Servicetext\GeneralServicetext;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\Produit\Service\EvenementRepository;
use App\Entity\Users\User\User;
use App\Entity\Produit\Service\Service;
use App\Entity\Produit\Produit\Produit;

/**
 * Evenement
 *
 * @ORM\Table("evenement")
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
    */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

	/**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

	/**
     * @var string
     *
     * @ORM\Column(name="typearticle", type="string", length=255, nullable=true)
     */
    private $typearticle;

	/**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer")
     */
    private $rang;

	/**
     * @var string
     *
     * @ORM\Column(name="breve", type="string", length=255, nullable=true)
     */
    private $breve;

	/**
     * @ORM\ManyToOne(targetEntity=Service::class,inversedBy="evenements")
    * @ORM\JoinColumn(nullable=true)
    */
	private $service;

	/**
     * @ORM\OneToOne(targetEntity=Imgevenement::class, cascade={"persist","remove"})
    * @ORM\JoinColumn(nullable=true)
    * @Assert\Valid()
    */
	private $imgevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="bestvalue", type="string", length=255, nullable=true)
     */
    private $bestvalue;
	
	/**
     * @var string
     *
     * @ORM\Column(name="falsevalue", type="string", length=255, nullable=true)
     */
    private $falsevalue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
       * @ORM\ManyToOne(targetEntity=User::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $user;
	
	/**
       * @ORM\ManyToOne(targetEntity=Service::class)
       * @ORM\JoinColumn(nullable=true)
    */
	private $indicateur;
	
	/**
       * @ORM\ManyToOne(targetEntity=Service::class)
       * @ORM\JoinColumn(nullable=true)
    */
	private $annee;
	
	/**
       * @ORM\ManyToOne(targetEntity=Produit::class)
       * @ORM\JoinColumn(nullable=true)
    */
	private $produit;
	
	// variable du service de normalisation des noms des pays.
	private $servicetext;
	
	private $codecouleur;
	
	public function __construct(GeneralServicetext $service)
	{
        $this->servicetext = $service;
        $this->date = new \Datetime();
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
	
	public function setCodecouleur($codecouleur)
    {
		$this->codecouleur = $codecouleur;
    }
    public function getCodecouleur()
    {
		return $this->codecouleur;
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
     * Set date
     *
     * @param \DateTime $date
     * @return Evenement
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
     * Set user
     * @return Evenement
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
     * Set bestvalue
     *
     * @param string $bestvalue
     * @return Evenement
     */
    public function setBestvalue($bestvalue)
    {
        $this->bestvalue = $bestvalue;

        return $this;
    }

    /**
     * Get bestvalue
     *
     * @return string 
     */
    public function getBestvalue()
    {
        return $this->bestvalue;
    }

    /**
     * Set falsevalue
     *
     * @param string $falsevalue
     * @return Evenement
     */
    public function setFalsevalue($falsevalue)
    {
        $this->falsevalue = $falsevalue;

        return $this;
    }

    /**
     * Get falsevalue
     *
     * @return string 
     */
    public function getFalsevalue()
    {
        return $this->falsevalue;
    }

    /**
     * Set indicateur
     * @return Evenement
     */
    public function setIndicateur(Service $indicateur): self
    {
        $this->indicateur = $indicateur;

        return $this;
    }

    /**
     * Get indicateur
     */
    public function getIndicateur(): ?Service
    {
        return $this->indicateur;
    }

    /**
     * Set annee
     * @return Evenement
     */
    public function setAnnee(Service $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     */
    public function getAnnee(): ?Service
    {
        return $this->annee;
    }

    /**
     * Set produit
     * @return Evenement
     */
    public function setProduit(Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     */
    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Evenement
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
     * @return Evenement
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

    public function setService(Service $service): self
    {
        $this->service = $service;
		    $service->addEvenement($this);

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setImgevenement(Imgevenement $imgevenement): self
    {
        $this->imgevenement = $imgevenement;

        return $this;
    }

    public function getImgevenement(): ?Imgevenement
    {
        return $this->imgevenement;
    }

    /**
     * Set rang
     *
     * @param integer $rang
     * @return Evenement
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

    /**
     * Set link
     *
     * @param string $link
     * @return Evenement
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set typearticle
     *
     * @param string $typearticle
     * @return Evenement
     */
    public function setTypearticle($typearticle)
    {
        $this->typearticle = $typearticle;

        return $this;
    }

    /**
     * Get typearticle
     *
     * @return string
     */
    public function getTypearticle()
    {
        return $this->typearticle;
    }

    /**
     * Set breve
     *
     * @param string $breve
     * @return Evenement
     */
    public function setBreve($breve)
    {
        $this->breve = $breve;

        return $this;
    }

    /**
     * Get breve
     *
     * @return string
     */
    public function getBreve()
    {
        return $this->breve;
    }
}

