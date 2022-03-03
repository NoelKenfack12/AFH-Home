<?php

namespace Produit\ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use General\ValidatorBundle\Validatortext\Taillemin;
use General\ValidatorBundle\Validatortext\Taillemax;
use General\ServiceBundle\Servicetext\GeneralServicetext;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table("evenement")
 * @ORM\Entity(repositoryClass="Produit\ServiceBundle\Entity\EvenementRepository")
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
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=false)
        */
	private $user;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ServiceBundle\Entity\Service")
       * @ORM\JoinColumn(nullable=false)
        */
	private $indicateur;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ServiceBundle\Entity\Service")
       * @ORM\JoinColumn(nullable=false)
        */
	private $annee;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Produit")
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
     *
     * @param \Users\UserBundle\Entity\User $user
     * @return Evenement
     */
    public function setUser(\Users\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Users\UserBundle\Entity\User 
     */
    public function getUser()
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
     *
     * @param \Produit\ServiceBundle\Entity\Service $indicateur
     * @return Evenement
     */
    public function setIndicateur(\Produit\ServiceBundle\Entity\Service $indicateur)
    {
        $this->indicateur = $indicateur;

        return $this;
    }

    /**
     * Get indicateur
     *
     * @return \Produit\ServiceBundle\Entity\Service 
     */
    public function getIndicateur()
    {
        return $this->indicateur;
    }

    /**
     * Set annee
     *
     * @param \Produit\ServiceBundle\Entity\Service $annee
     * @return Evenement
     */
    public function setAnnee(\Produit\ServiceBundle\Entity\Service $annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \Produit\ServiceBundle\Entity\Service 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set produit
     *
     * @param \Produit\ProduitBundle\Entity\Produit $produit
     * @return Evenement
     */
    public function setProduit(\Produit\ProduitBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Produit\ProduitBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
