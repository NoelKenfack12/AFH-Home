<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produitpanier
 *
 * @ORM\Table("produitpanier")
 * @ORM\Entity(repositoryClass="Produit\ProduitBundle\Entity\ProduitpanierRepository")
 */
class Produitpanier
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;
	
	/**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255,nullable=true)
     */
    private $domaine;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="enregistrement", type="boolean")
     */
    private $enregistrement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Produit")
       * @ORM\JoinColumn(nullable=false)
       */
	private $produit;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Panier", inversedBy="produitpaniers")
       * @ORM\JoinColumn(nullable=false)
        */
	private $panier;
	
	public function __construct()
	{
		$this->date = new \Datetime();
		$this->enregistrement = true;
		$this->quantite = 1;
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
     * Set quantite
     *
     * @param integer $quantite
     * @return Produitpanier
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Produitpanier
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
     * Set produit
     *
     * @param \Produit\ProduitBundle\Entity\Produit $produit
     * @return Produitpanier
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

    /**
     * Set panier
     *
     * @param \Produit\ProduitBundle\Entity\Panier $panier
     * @return Produitpanier
     */
    public function setPanier(\Produit\ProduitBundle\Entity\Panier $panier)
    {
        $this->panier = $panier;
		$panier->addProduitpanier($this);

        return $this;
    }

    /**
     * Get panier
     *
     * @return \Produit\ProduitBundle\Entity\Panier 
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     * @return Produitpanier
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set enregistrement
     *
     * @param boolean $enregistrement
     * @return Produitpanier
     */
    public function setEnregistrement($enregistrement)
    {
        $this->enregistrement = $enregistrement;

        return $this;
    }

    /**
     * Get enregistrement
     *
     * @return boolean 
     */
    public function getEnregistrement()
    {
        return $this->enregistrement;
    }
}
