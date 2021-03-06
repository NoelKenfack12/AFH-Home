<?php

namespace Users\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use General\ValidatorBundle\Validatortext\Email;
use General\ValidatorBundle\Validatortext\Taillemin;
use General\ValidatorBundle\Validatortext\Taillemax;
use General\ValidatorBundle\Validatortext\Password;
use General\ValidatorBundle\Validatortext\Telephone;
use General\ServiceBundle\Servicetext\GeneralServicetext;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table("user")
 * @ORM\Entity(repositoryClass="Users\UserBundle\Entity\UserRepository")
 * @UniqueEntity(fields="username", message="Ce  mail existe déjà.")
 * @UniqueEntity(fields="tel", message="Ce  numéro existe déjà.")
 ** @ORM\HasLifecycleCallbacks
 */
class User implements UserInterface
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
     *@Taillemin(valeur=3, message="Au moins 3 caractères")
     *@Taillemax(valeur=70, message="Au plus 70 caractès")
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255,nullable=true)
     */
    private $prenom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
      *@Email()
     */
    private $username;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     *@Password()
     */
    private $password;
	
	/**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;
	
	/**
     * @var array
     *
     * @ORM\Column(name="roles", type="array")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, unique=true)
     *@Telephone()
     */
    private $tel;
	
	/**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;
	
	/**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;
	
	/**
     * @var string
     *
     * @ORM\Column(name="linkedin", type="string", length=255, nullable=true)
     */
    private $linkedin;
	
	/**
     * @var string
     *
     * @ORM\Column(name="google", type="string", length=255, nullable=true)
     */
    private $google;
	
	/**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;
	
	/**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255, nullable=true)
     */
    private $specialite;
	
	/**
     * @var text
     *
     * @ORM\Column(name="apropos", type="text", length=255, nullable=true)
     */
    private $apropos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailval", type="boolean")
     */
    private $mailval;

    /**
     * @var integer
     *
     * @ORM\Column(name="datebeg", type="bigint")
     */
    private $datebeg;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateend", type="bigint")
     */
    private $dateend;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="teamyear", type="integer")
     */
    private $teamyear;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateins", type="datetime")
     */
    private $dateins;

    /**
     * @var boolean
     *
     * @ORM\Column(name="telval", type="boolean")
     */
    private $telval;

    /**
      * @ORM\ManyToOne(targetEntity="Users\LocalisationuserBundle\Entity\Pays", inversedBy="users")
      * @ORM\JoinColumn(nullable=true)
      */
    private $pays;
	
	/**
         * @ORM\OneToOne(targetEntity="Users\UserBundle\Entity\Imgprofil", mappedBy="user")
         */
    private $imgprofil;

	private $servicetext;
	
	public function __construct(GeneralServicetext $service)
	{
		$this->servicetext = $service;
		$this->mailval = false;
		$this->telval = false;
		$this->dateins = new \Datetime();
		$this->datebeg = time();
		$this->dateend = time();
		$this->roles = array('ROLE_USER');
		$this->teamyear = date('Y');
	}
	
	public function getServicetext()
	{
		return $this->servicetext;
	}
	
	public function setServicetext(GeneralServicetext $service)
	{
		$this->servicetext = $service;
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
     * @return User
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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
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
     * Set datebeg
     *
     * @param integer $datebeg
     * @return User
     */
    public function setDatebeg($datebeg)
    {
        $this->datebeg = $datebeg;

        return $this;
    }

    /**
     * Get datebeg
     *
     * @return integer 
     */
    public function getDatebeg()
    {
        return $this->datebeg;
    }

    /**
     * Set dateend
     *
     * @param integer $dateend
     * @return User
     */
    public function setDateend($dateend)
    {
        $this->dateend = $dateend;

        return $this;
    }

    /**
     * Get dateend
     *
     * @return integer 
     */
    public function getDateend()
    {
        return $this->dateend;
    }

    /**
     * Set dateins
     *
     * @param \DateTime $dateins
     * @return User
     */
    public function setDateins($dateins)
    {
        $this->dateins = $dateins;

        return $this;
    }

    /**
     * Get dateins
     *
     * @return \DateTime 
     */
    public function getDateins()
    {
        return $this->dateins;
    }

    /**
     * Set telval
     *
     * @param boolean $telval
     * @return User
     */
    public function setTelval($telval)
    {
        $this->telval = $telval;

        return $this;
    }

    /**
     * Get telval
     *
     * @return boolean 
     */
    public function getTelval()
    {
        return $this->telval;
    }

    /**
     * Set mailval
     *
     * @param boolean $mailval
     * @return User
     */
    public function setMailval($mailval)
    {
        $this->mailval = $mailval;

        return $this;
    }

    /**
     * Get mailval
     *
     * @return boolean 
     */
    public function getMailval()
    {
        return $this->mailval;
    }
	
	/**
     * @ORM\PrePersist()
     */
    public function premajuscule()
	{
	$text1 = $this->servicetext->retireAccent($this->nom);
	$text1 = strtolower($text1);
	$this->nom = ucwords($text1);
	}
	
	 /**
     * Set roles
     *
     * @param array $roles
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array 
     */
    public function getRoles()
    {
        return $this->roles;
    }
	
	public function addRole($role)
    {
        if (!in_array($role, $this->roles)) {
            $this->roles[] = $role;
        }

        return $this;
    }
	public function removeRole($role)
    {
        if (false !== $key = array_search(strtoupper($role), $this->roles, true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }

        return $this;
    }
	
	/**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }
	
	/**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
	
	public function eraseCredentials()
	{
	
	}
	public function name($tail)
	{
		if(strlen($this->nom) <= $tail)
		{
		return $this->nom;
		}else{
		$text = wordwrap($this->nom,$tail,'~',true);
		$tab = explode('~',$text);
		$text = $tab[0];
		return $text.'...';
		}
	}

    /**
     * Set imgprofil
     *
     * @param \Users\UserBundle\Entity\Imgprofil $imgprofil
     * @return User
     */
    public function setImgprofil(\Users\UserBundle\Entity\Imgprofil $imgprofil = null)
    {
        $this->imgprofil = $imgprofil;

        return $this;
    }

    /**
     * Get imgprofil
     *
     * @return \Users\UserBundle\Entity\Imgprofil 
     */
    public function getImgprofil()
    {
        return $this->imgprofil;
    }

    /**
     * Set pays
     *
     * @param \Users\LocalisationuserBundle\Entity\Pays $pays
     * @return User
     */
    public function setPays(\Users\LocalisationuserBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;
		if($pays != null)
		{
			$pays->addUser($this);
		}

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Users\LocalisationuserBundle\Entity\Pays 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return User
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     * @return User
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set google
     *
     * @param string $google
     * @return User
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string 
     */
    public function getGoogle()
    {
        return $this->google;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return User
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     * @return User
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set apropos
     *
     * @param string $apropos
     * @return User
     */
    public function setApropos($apropos)
    {
        $this->apropos = $apropos;

        return $this;
    }

    /**
     * Get apropos
     *
     * @return string 
     */
    public function getApropos()
    {
        return $this->apropos;
    }

    /**
     * Set teamyear
     *
     * @param integer $teamyear
     * @return User
     */
    public function setTeamyear($teamyear)
    {
        $this->teamyear = $teamyear;

        return $this;
    }

    /**
     * Get teamyear
     *
     * @return integer 
     */
    public function getTeamyear()
    {
        return $this->teamyear;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
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
}
