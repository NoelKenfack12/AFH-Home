<?php

namespace Users\LocalisationuserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use General\ValidatorBundle\Validatortext\Taillemin;
use General\ValidatorBundle\Validatortext\Taillemax;
use General\ValidatorBundle\Validatortext\Siteweb;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContextInterface;
use General\ServiceBundle\Servicetext\GeneralServicetext;
use General\ValidatorBundle\Validatorfile\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Pays
 *
 * @ORM\Table("pays")
 * @ORM\Entity(repositoryClass="Users\LocalisationuserBundle\Entity\PaysRepository")
 * @UniqueEntity(fields="siteweb", message="Ce site est déjà enregistré.")
 * @UniqueEntity(fields="nom", message="Ce pays est déjà enregistré.")
  * @UniqueEntity(fields="code", message="Ce code existe déjà.")
  ** @ORM\HasLifecycleCallbacks
  * @Assert\Callback(methods={"nomValide"})
 */
 
class Pays
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
     * @ORM\Column(name="nom", type="string", length=255,unique=true)
     *@Taillemin(valeur=4,message="Au moins 4 caractères")
     *@Taillemax(valeur=60, message="Au plus 60 caractères")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=255,unique=true,nullable=true)
     *@Siteweb()
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="citoyen", type="string", length=255,nullable=true)
     *@Taillemax(valeur=60, message="Au plus 60 caractères")
     */
    private $citoyen;
	
	/**
     * @var string
     *
     * @ORM\Column(name="citoyenne", type="string", length=255,nullable=true)
     *@Taillemax(valeur=60, message="Au plus 60 caractères")
     */
    private $citoyenne;

    /**
     * @var string
     * 
     * @ORM\Column(name="code", type="string", length=255,unique=true,nullable=true)
     */  
    private $code;
	
	/**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255,unique=true,nullable=true)
     */
    private $domaine;
	
	/**
           * @ORM\OneToOne(targetEntity="Users\LocalisationuserBundle\Entity\Drapeau",  cascade={"persist","remove"})
           * @ORM\JoinColumn(nullable=true)
	*@Assert\Valid()
          */
	private $drapeau;
	
	/**
	* @ORM\ManyToOne(targetEntity="Users\LocalisationuserBundle\Entity\Continent", inversedBy="pays")
	* @ORM\JoinColumn(nullable=false)
	*/
    private $continent;
	
	/**
	* @ORM\ManyToMany(targetEntity="Users\LocalisationuserBundle\Entity\Langue", inversedBy="pays")
	* @ORM\JoinColumn(nullable=true)
	*/
    private $langues;
	
	/**
         * @ORM\OneToMany(targetEntity="Users\UserBundle\Entity\User", mappedBy="pays")
         */
    private $users;
	
	/**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=255,nullable=true)
     */
    private $src;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255,nullable=true)
     */
    private $alt;
	
	/**
	*@Image(taillemax=1500000, message="la taille de l'image  %string% est grande.")
	*/
	private $file;
	
	// permet le stocage temporaire du nom du fichier
	private $tempFilename;
	
	// variable du service de normalisation des noms de fichier
	private $servicefile;
	
	
	public function __construct()
	{
	$this->langues = new \Doctrine\Common\Collections\ArrayCollection();
	$this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Pays
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
     * Set siteweb
     *
     * @param string $siteweb
     * @return Pays
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set citoyen
     *
     * @param string $citoyen
     * @return Pays
     */
    public function setCitoyen($citoyen)
    {
        $this->citoyen = $citoyen;

        return $this;
    }

    /**
     * Get citoyen
     *
     * @return string 
     */
    public function getCitoyen()
    {
        return $this->citoyen;
    }

	 /**
     * Set code
     *
     * @param string $citoyen
     * @return Pays
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

	 /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }
	
	/**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function premajuscule()
	{
	$this->nom =  ucfirst($this->nom);
	$this->citoyen =  ucfirst($this->citoyen);
	$this->citoyenne = ucfirst($this->citoyenne);
	}

    /**
     * Set continent
     *
     * @param \Users\LocalisationuserBundle\Entity\Continent $continent
     * @return Pays
     */
    public function setContinent(\Users\LocalisationuserBundle\Entity\Continent $continent)
    {
        $this->continent = $continent;
		$continent->addPay($this);

        return $this;
    }

    /**
     * Get continent
     *
     * @return \Users\LocalisationuserBundle\Entity\Continent 
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Add langues
     *
     * @param \Users\LocalisationuserBundle\Entity\Langue $langues
     * @return Pays
     */
    public function addLangue(\Users\LocalisationuserBundle\Entity\Langue $langues)
    {
        $this->langues[] = $langues;
		if($langue != null){
		$langues->addPay($this);
		}

        return $this;
    }

    /**
     * Remove langues
     *
     * @param \Users\LocalisationuserBundle\Entity\Langue $langues
     */
    public function removeLangue(\Users\LocalisationuserBundle\Entity\Langue $langues)
    {
        $this->langues->removeElement($langues);
		if($langue != null){
		$langues->removePay($this);
		}
    }

    /**
     * Get langues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLangues()
    {
        return $this->langues;
    }
	
	public function nomValide(ExecutionContextInterface $context)
	{
	if (count($this->langues) > 4)
	{
	$context->addViolationAt($this->nom, 'Trop de langue pour ce pays.', array(), null);
	}
	}

    /**
     * Set citoyenne
     *
     * @param string $citoyenne
     * @return Pays
     */
    public function setCitoyenne($citoyenne)
    {
        $this->citoyenne = $citoyenne;

        return $this;
    }

    /**
     * Get citoyenne
     *
     * @return string 
     */
    public function getCitoyenne()
    {
        return $this->citoyenne;
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
     * Set drapeau
     *
     * @param \Users\LocalisationuserBundle\Entity\Drapeau $drapeau
     * @return Pays
     */
    public function setDrapeau(\Users\LocalisationuserBundle\Entity\Drapeau $drapeau = null)
    {
        $this->drapeau = $drapeau;

        return $this;
    }

    /**
     * Get drapeau
     *
     * @return \Users\LocalisationuserBundle\Entity\Drapeau 
     */
    public function getDrapeau()
    {
        return $this->drapeau;
    }

    /**
     * Add users
     *
     * @param \Users\UserBundle\Entity\User $users
     * @return Pays
     */
    public function addUser(\Users\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Users\UserBundle\Entity\User $users
     */
    public function removeUser(\Users\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     * @return Pays
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
	
	//permet la récupération du nom du fichier temporaire
    public function getTempFilename()
    {
    return $this->tempFilename;
    }
	//permet de modifier le contenu de la variable tempFilename
    public function setTempFilename($temp)
	{
	$this->tempFilename=$temp;
	}
	// permet la récupération du nom du fiechier
	public function getFile()
	{
	return $this->file;
	}
	public function setServicefile(GeneralServicetext $service)
	{
		$this->servicefile = $service;
	}
	
	public function getServicefile()
	{
		return $this->servicefile;
	}
	
	public function getUploadDir()
	{
		// On retourne le chemin relatif vers l'image pour un navigateur
		return 'bundles/users/localisationuser/images/pays';
	}
	
	protected function getUploadRootDir()
	{
		// On retourne le chemin relatif vers l'image pour notre codePHP
		return  __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	public function setFile(UploadedFile $file)
	{
		$this->file = $file;
		// On vérifie si on avait déjà un fichier pour cette entité
		if (null !== $this->src) {
		// On sauvegarde l'extension du fichier pour le supprimer plus tard
		$this->tempFilename = $this->src;
		// On réinitialise les valeurs des attributs url et alt
		$this->src = null;
		$this->alt = null;
		}
	}
	
	/**
	* @ORM\PrePersist()
	* @ORM\PreUpdate()
	*/
	public function preUpload()
	{
		if (null === $this->file) {
		return;
		}
		$text = $this->file->getClientOriginalName();
		$this->src = $this->servicefile->normaliseText($text);
		$this->alt = $this->src;
	}
	/**
	* @ORM\PostPersist()
	* @ORM\PostUpdate()
	*/
	public function upload()
	{
		// Si jamais il n'y a pas de fichier (champ facultatif)
		if (null === $this->file) {
		return;
		}
		if (null !== $this->tempFilename) {
		$oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
		if (file_exists($oldFile)) {
		unlink($oldFile);
		}
		}
		$this->file->move( $this->getUploadRootDir(), $this->id.'.'.$this->src);
	}
	
	/**
	*@ORM\PreRemove()
	*/
	public function preRemoveUpload()
	{
		$this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->src;
	}
 
	/**
	* @ORM\PostRemove()
	*/
	public function postRemoveUpload()
	{
		// En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
		if (file_exists($this->tempFilename)) {
		// On supprime le fichier
		unlink($this->tempFilename);
		}
	}

	public function getWebPath()
	{
		return $this->getUploadDir().'/'.$this->getId().'.'.$this->getSrc();
	}

    /**
     * Set src
     *
     * @param string $src
     * @return Pays
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Pays
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
