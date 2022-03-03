<?php

namespace Users\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;

/**
 * Investissement
 *
 * @ORM\Table("investissement")
 * @ORM\Entity(repositoryClass="Users\UserBundle\Entity\InvestissementRepository")
  ** @ORM\HasLifecycleCallbacks
 */
class Investissement
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="villetext", type="string", length=255)
     */
    private $villetext;
	
	/**
     * @var string
     *
     * @ORM\Column(name="investid", type="string", length=255, nullable=true)
     */
    private $investid;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="dateins", type="date")
     */
    private $date;
	
	/**
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=false)
        */
	private $user;
	
	public function __construct()
	{
		$this->date = new \Datetime();
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
     * Set type
     *
     * @param string $type
     * @return Investissement
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
     * Set montant
     *
     * @param integer $montant
     * @return Investissement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Investissement
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
     * Set prenom
     *
     * @param string $prenom
     * @return Investissement
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Investissement
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
     * Set email
     *
     * @param string $email
     * @return Investissement
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set villetext
     *
     * @param string $villetext
     * @return Investissement
     */
    public function setVilletext($villetext)
    {
        $this->villetext = $villetext;

        return $this;
    }

    /**
     * Get villetext
     *
     * @return string 
     */
    public function getVilletext()
    {
        return $this->villetext;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Investissement
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
     * @return Investissement
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
     * @ORM\PrePersist()
     */
    public function premajuscule()
	{
		$this->investid = $this->numFacture();
	}
	
	public function numFacture()
	{
		$datetransform = new DateTimeToArrayTransformer();
		$dt = $datetransform->transform($this->getDate());
		return 'IV'.$dt['day'].''.$this->getId().''.$dt['month'].''.$dt['year'];
	}

    /**
     * Set investid
     *
     * @param string $investid
     * @return Investissement
     */
    public function setInvestid($investid)
    {
        $this->investid = $investid;

        return $this;
    }

    /**
     * Get investid
     *
     * @return string 
     */
    public function getInvestid()
    {
        return $this->investid;
    }
}
