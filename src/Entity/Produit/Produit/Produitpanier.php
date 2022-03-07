<?php

namespace App\Entity\Produit\Produit;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\Produit\Produit\ProduitpanierRepository;
use App\Entity\Produit\Produit\Produit;
use App\Entity\Produit\Produit\Panier;

/**
 * Produitpanier
 *
 * @ORM\Table("produitpanier")
 * @ORM\Entity(repositoryClass=ProduitpanierRepository::class)
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
       * @ORM\ManyToOne(targetEntity=Produit::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $produit;
	
	/**
       * @ORM\ManyToOne(targetEntity=Panier::class, inversedBy="produitpaniers")
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
     * @return Produitpanier
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
     * Set panier
     * @return Produitpanier
     */
    public function setPanier(Panier $panier): self
    {
        $this->panier = $panier;
		$panier->addProduitpanier($this);

        return $this;
    }

    /**
     * Get panier
     */
    public function getPanier(): ?Panier
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
