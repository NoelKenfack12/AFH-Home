<?php

namespace App\Entity\Users\User;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;
use App\Repository\Users\User\InvestissementRepository;
use App\Entity\Users\User\User;
use App\Validator\Validatorfile\Image;
use App\Service\Servicetext\GeneralServicetext;

/**
 * Investissement
 *
 * @ORM\Table("investissement")
 * @ORM\Entity(repositoryClass=InvestissementRepository::class)
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateins", type="date")
     */
    private $date;
	
	/**
       * @ORM\ManyToOne(targetEntity=User::class)
       * @ORM\JoinColumn(nullable=false)
    */
	private $user;

    /**
	*@Image(taillemax=1500000, message="la taille de l'image  %string% est grande.")
	*/
	private $file;

	// permet le stocage temporaire du nom du fichier
	private $tempFilename;

    private $servicetext;
	
	public function __construct(GeneralServicetext $service)
	{
		$this->date = new \Datetime();
        $this->src ="source";
		$this->alt ="alternatif";
        $this->servicetext = $service;
	}

    public function getServicetext()
	{
		return $this->servicetext;
	}

	public function setServicetext(GeneralServicetext $service)
	{
		$this->servicetext = $service;
		return $this;
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
     * @return Investissement
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

	public function getUploadDir()
	{
	// On retourne le chemin relatif vers l'image pour un navigateur
	return 'bundles/users/user/cv/investissement';
	}

	protected function getUploadRootDir()
	{
	// On retourne le chemin relatif vers l'image pour notre codePHP
	return  __DIR__.'/../../../../public/'.$this->getUploadDir();
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
  	$text1 = $this->servicetext->retireAccent($this->nom);
  	$text1 = strtolower($text1);
  	$this->nom = ucwords($text1);
  	if (null === $this->file) {
  	   return;
  	}
  	$text = $this->file->getClientOriginalName();
  	$this->src = $this->servicetext->normaliseText($text);
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
     * @return Typearticle
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
     * @return Typearticle
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
