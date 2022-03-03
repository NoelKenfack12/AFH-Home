<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table("panier")
 * @ORM\Entity(repositoryClass="Produit\ProduitBundle\Entity\PanierRepository")
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
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=false)
        */
	private $user;
	
	/**
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=true)
        */
	private $affilier;
	
	/**
       * @ORM\OneToOne(targetEntity="Produit\ServiceBundle\Entity\Ville")
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
         * @ORM\OneToMany(targetEntity="Produit\ProduitBundle\Entity\Produitpanier", mappedBy="panier")
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
     *
     * @param \Users\UserBundle\Entity\User $user
     * @return Panier
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
     * Add produitpaniers
     *
     * @param \Produit\ProduitBundle\Entity\Produitpanier $produitpaniers
     * @return Panier
     */
    public function addProduitpanier(\Produit\ProduitBundle\Entity\Produitpanier $produitpaniers)
    {
        $this->produitpaniers[] = $produitpaniers;

        return $this;
    }

    /**
     * Remove produitpaniers
     *
     * @param \Produit\ProduitBundle\Entity\Produitpanier $produitpaniers
     */
    public function removeProduitpanier(\Produit\ProduitBundle\Entity\Produitpanier $produitpaniers)
    {
        $this->produitpaniers->removeElement($produitpaniers);
    }

    /**
     * Get produitpaniers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduitpaniers()
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
     *
     * @param \Produit\ServiceBundle\Entity\Ville $ville
     * @return Panier
     */
    public function setVille(\Produit\ServiceBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Produit\ServiceBundle\Entity\Ville 
     */
    public function getVille()
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
     *
     * @param \Users\UserBundle\Entity\User $affilier
     * @return Panier
     */
    public function setAffilier(\Users\UserBundle\Entity\User $affilier = null)
    {
        $this->affilier = $affilier;

        return $this;
    }

    /**
     * Get affilier
     *
     * @return \Users\UserBundle\Entity\User 
     */
    public function getAffilier()
    {
        return $this->affilier;
    }
}
