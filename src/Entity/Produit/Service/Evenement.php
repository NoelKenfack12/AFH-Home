<?php

namespace App\Entity\Produit\Service;

use Doctrine\ORM\Mapping as ORM;
use App\Validator\Validatortext\Taillemin;
use App\Validator\Validatortext\Taillemax;
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
     * @ORM\Column(name="bestvalue", type="string", length=255)
     *@Taillemax(valeur=50, message="Au plus 50 caractès")
     */
    private $bestvalue;
	
	/**
     * @var string
     *
     * @ORM\Column(name="falsevalue", type="string", length=255)
     *@Taillemax(valeur=50, message="Au plus 50 caractès")
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
       * @ORM\JoinColumn(nullable=false)
    */
	private $indicateur;
	
	/**
       * @ORM\ManyToOne(targetEntity=Service::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $annee;
	
	/**
       * @ORM\ManyToOne(targetEntity=Produit::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $produit;
	
	// variable du service de normalisation des noms des pays.
	private $servicetext;
	
	private $codecouleur;
	
	public function __construct(GeneralServicetext $service)
	{
	$this->servicetext = $service;
	$this->date = new \Datetime();
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
}
