<?php

namespace App\Entity\Produit\Produit;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\Produit\Produit\PanierRepository;
use App\Entity\Users\User\User;
use App\Entity\Produit\Service\Ville;
use App\Entity\Produit\Produit\Produitpanier;
use Doctrine\Common\Collections\Collection;

/**
 * Panier
 *
 * @ORM\Table("panier")
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255, nullable=true)
     */
    private $domaine;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payer", type="boolean")
     */
    private $payer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="livrer", type="boolean")
     */
    private $livrer;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="coastlivraison", type="integer")
     */
	private $coastlivraison;
	
	/**
       * @ORM\ManyToOne(targetEntity=User::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $user;
	
	/**
       * @ORM\ManyToOne(targetEntity=User::class)
       * @ORM\JoinColumn(nullable=true)
    */
	private $affilier;
	
	/**
       * @ORM\OneToOne(targetEntity=Ville::class)
       * @ORM\JoinColumn(nullable=true)
    */
	private $ville;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="livraisonpayer", type="boolean")
     */
    private $livraisonpayer;
	
	/**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;
	
	/**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=true)
     */
    private $destination;
	
	/**
         * @ORM\OneToMany(targetEntity=Produitpanier::class, mappedBy="panier")
         */
    private $produitpaniers;
	
	public function __construct()
	{
		$this->produitpaniers = new \Doctrine\Common\Collections\ArrayCollection();
		$this->date = new \Datetime();
		$this->payer = false;
		$this->livrer = false;
		$this->livraisonpayer = false;
		$this->coastlivraison = 0;
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
     * @return Panier
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
     * Set payer
     *
     * @param boolean $payer
     * @return Panier
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return boolean 
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set livrer
     *
     * @param boolean $livrer
     * @return Panier
     */
    public function setLivrer($livrer)
    {
        $this->livrer = $livrer;

        return $this;
    }

    /**
     * Get livrer
     *
     * @return boolean 
     */
    public function getLivrer()
    {
        return $this->livrer;
    }

    /**
     * Set user
     * @return Panier
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
     * Add produitpaniers
     * @return Panier
     */
    public function addProduitpanier(Produitpanier $produitpaniers): self
    {
        $this->produitpaniers[] = $produitpaniers;

        return $this;
    }

    /**
     * Remove produitpaniers
     */
    public function removeProduitpanier(Produitpanier $produitpaniers)
    {
        $this->produitpaniers->removeElement($produitpaniers);
    }

    /**
     * Get produitpaniers 
     */
    public function getProduitpaniers(): ?Collection
    {
        return $this->produitpaniers;
    }

    /**
     * Set livraisonpayer
     *
     * @param boolean $livraisonpayer
     * @return Panier
     */
    public function setLivraisonpayer($livraisonpayer)
    {
        $this->livraisonpayer = $livraisonpayer;

        return $this;
    }

    /**
     * Get livraisonpayer
     *
     * @return boolean 
     */
    public function getLivraisonpayer()
    {
        return $this->livraisonpayer;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Panier
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Panier
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set coastlivraison
     *
     * @param integer $coastlivraison
     * @return Panier
     */
    public function setCoastlivraison($coastlivraison)
    {
        $this->coastlivraison = $coastlivraison;

        return $this;
    }

    /**
     * Get coastlivraison
     *
     * @return integer 
     */
    public function getCoastlivraison()
    {
        return $this->coastlivraison;
    }

    /**
     * Set ville
     * @return Panier
     */
    public function setVille(Ville $ville = null): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     */
    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     * @return Panier
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
     * Set affilier
     * @return Panier
     */
    public function setAffilier(User $affilier = null): self
    {
        $this->affilier = $affilier;

        return $this;
    }

    /**
     * Get affilier
     */
    public function getAffilier(): ?User
    {
        return $this->affilier;
    }
}
