<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use General\ValidatorBundle\Validatortext\Taillemin;
use General\ValidatorBundle\Validatortext\Taillemax;
use General\ServiceBundle\Servicetext\GeneralServicetext;
use General\ValidatorBundle\Validatortext\Siteweb;
use General\ValidatorBundle\Validatorfile\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Produit
 *
 * @ORM\Table("produit")
 * @ORM\Entity(repositoryClass="Produit\ProduitBundle\Entity\ProduitRepository")
 ** @ORM\HasLifecycleCallbacks
 */
class Produit
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
     *@Taillemax(valeur=100, message="Au plus 100 caractès")
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text",nullable=true)
     *@Taillemax(valeur=1200, message="Au plus 1200 caractès")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255,nullable=true)
     *@Siteweb()
     */
    private $link;
	
	/**
     * @var string
     *
     * @ORM\Column(name="bloglink", type="string", length=255,nullable=true)
     */
    private $bloglink;
	
	/**
     * @var string
     *
     * @ORM\Column(name="documentlink", type="string", length=255,nullable=true)
     */
    private $documentlink;
	
	/**
     * @var string
     *
     * @ORM\Column(name="forumlink", type="string", length=255,nullable=true)
     */
    private $forumlink;
	
	/**
     * @var string
     *
     * @ORM\Column(name="tariflink", type="string", length=255,nullable=true)
     */
    private $tariflink;
	
	/**
     * @var string
     *
     * @ORM\Column(name="avislink", type="string", length=255,nullable=true)
     */
    private $avislink;
	
	/**
     * @var string
     *
     * @ORM\Column(name="contactlink", type="string", length=255,nullable=true)
     */
    private $contactlink;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nblike", type="integer")
     */
    private $nblike;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbvente", type="integer")
     */
    private $nbvente;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="choixauteur", type="boolean")
     */
    private $choixauteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="newprise", type="integer")
     */
    private $newprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastprise", type="integer")
     */
    private $lastprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="difference", type="integer")
     */
    private $difference;
	
	/**
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=false)
        */
	private $user;
	
	/**
          * @ORM\ManyToMany(targetEntity="Users\UserBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=true)
          */
    private $userlikes;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="prixlivraison", type="integer")
     */
    private $prixlivraison;
	
	/**
         * @ORM\OneToMany(targetEntity="Produit\ProduitBundle\Entity\Imgproduit", mappedBy="produit")
         */
    private $imgproduits;
	
	private $imgpro;
	
	/**
         * @ORM\OneToMany(targetEntity="Produit\ProduitBundle\Entity\Coutlivraison", mappedBy="produit")
         */
    private $coutlivraisons;
	
	 /**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Souscategorie", inversedBy="produits")
       * @ORM\JoinColumn(nullable=false)
        */
	private $souscategorie;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer")
     */
    private $rang;
	
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
	
	private $servicetext;
	
	private $em;
	
	public function __construct(GeneralServicetext $service)
	{
		$this->servicetext = $service;
		$this->nblike = 0;
		$this->nbvente = 0;
		$this->newprise = 0;
		$this->prixlivraison = 0;
		$this->rang = 0;
		$this->choixauteur = false;
		$this->lastprise = false;
		$this->difference = 0;
		$this->date = new \Datetime();
		$this->imgproduits = new \Doctrine\Common\Collections\ArrayCollection();
		$this->coutlivraisons = new \Doctrine\Common\Collections\ArrayCollection();
		$this->userlikes = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	public function setEm($em)
	{
	$this->em = $em;
	}
	public function getEm()
	{
	return $this->em;
	}
	
	public function priseLivraison($ville)
	{
		$coutlivraison = $this->em->getRepository('ProduitProduitBundle:Coutlivraison')
	                     ->findOneBy(array('ville'=>$ville,'produit'=>$this));
		if($coutlivraison != null)
		{
			return $coutlivraison->getMontant();
		}else{
			return $this->prixlivraison;
		}
	}
	
	public function getImgpro()
	{
		return $this->imgpro;
	}
	
	public function setImgpro($imgpro)
	{
		$this->imgpro = $imgpro;
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
	
	public function ancienPrixProduit()
	{
	$aprix = $this->newprise + $this->difference;
	return $aprix;
	}
	
	/**
      * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preSave()
    {
	if($this->newprise != $this->lastprise)
	{
        $this->difference = ($this->lastprise - $this->newprise);
	}
	$this->lastprise = $this->newprise;
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
     * @return Produit
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
     * Set date
     *
     * @param \DateTime $date
     * @return Produit
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
     * Set nblike
     *
     * @param integer $nblike
     * @return Produit
     */
    public function setNblike($nblike)
    {
        $this->nblike = $nblike;

        return $this;
    }

    /**
     * Get nblike
     *
     * @return integer 
     */
    public function getNblike()
    {
        return $this->nblike;
    }

    /**
     * Set nbvente
     *
     * @param integer $nbvente
     * @return Produit
     */
    public function setNbvente($nbvente)
    {
        $this->nbvente = $nbvente;

        return $this;
    }

    /**
     * Get nbvente
     *
     * @return integer 
     */
    public function getNbvente()
    {
        return $this->nbvente;
    }

    /**
     * Set newprise
     *
     * @param integer $newprise
     * @return Produit
     */
    public function setNewprise($newprise)
    {
        $this->newprise = $newprise;

        return $this;
    }

    /**
     * Get newprise
     *
     * @return integer 
     */
    public function getNewprise()
    {
        return $this->newprise;
    }

    /**
     * Set lastprise
     *
     * @param integer $lastprise
     * @return Produit
     */
    public function setLastprise($lastprise)
    {
        $this->lastprise = $lastprise;

        return $this;
    }

    /**
     * Get lastprise
     *
     * @return integer 
     */
    public function getLastprise()
    {
        return $this->lastprise;
    }

    /**
     * Set difference
     *
     * @param integer $difference
     * @return Produit
     */
    public function setDifference($difference)
    {
        $this->difference = $difference;

        return $this;
    }

    /**
     * Get difference
     *
     * @return integer 
     */
    public function getDifference()
    {
        return $this->difference;
    }

    /**
     * Set user
     *
     * @param \Users\UserBundle\Entity\User $user
     * @return Produit
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
     * Add imgproduits
     *
     * @param \Produit\ProduitBundle\Entity\Imgproduit $imgproduits
     * @return Produit
     */
    public function addImgproduit(\Produit\ProduitBundle\Entity\Imgproduit $imgproduits)
    {
        $this->imgproduits[] = $imgproduits;

        return $this;
    }

    /**
     * Remove imgproduits
     *
     * @param \Produit\ProduitBundle\Entity\Imgproduit $imgproduits
     */
    public function removeImgproduit(\Produit\ProduitBundle\Entity\Imgproduit $imgproduits)
    {
        $this->imgproduits->removeElement($imgproduits);
    }

    /**
     * Get imgproduits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImgproduits()
    {
        return $this->imgproduits;
    }
	
	public function getImage()
	{
		$imageservice = null;
		if(count($this->imgproduits) >= 2)
		{
			$tail = mt_rand(1, count($this->imgproduits));
		}else{
			$tail = 1;
		}
		
		$compt = 1;
		foreach($this->imgproduits as $image)
		{
			if($compt == $tail)
			{
				$imageservice = $image;
				break;
			}else{
				$compt++;
			}
		}
		return $imageservice;
	}

    /**
     * Set souscategorie
     *
     * @param \Produit\ProduitBundle\Entity\Souscategorie $souscategorie
     * @return Produit
     */
    public function setSouscategorie(\Produit\ProduitBundle\Entity\Souscategorie $souscategorie)
    {
        $this->souscategorie = $souscategorie;
		$souscategorie->addProduit($this);

        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return \Produit\ProduitBundle\Entity\Souscategorie 
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set prixlivraison
     *
     * @param integer $prixlivraison
     * @return Produit
     */
    public function setPrixlivraison($prixlivraison)
    {
        $this->prixlivraison = $prixlivraison;

        return $this;
    }

    /**
     * Get prixlivraison
     *
     * @return integer 
     */
    public function getPrixlivraison()
    {
        return $this->prixlivraison;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Produit
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Add userlikes
     *
     * @param \Users\UserBundle\Entity\User $userlikes
     * @return Produit
     */
    public function addUserlike(\Users\UserBundle\Entity\User $userlikes)
    {
        $this->userlikes[] = $userlikes;
		$this->nblike = $this->nblike + 1;

        return $this;
    }

    /**
     * Remove userlikes
     *
     * @param \Users\UserBundle\Entity\User $userlikes
     */
    public function removeUserlike(\Users\UserBundle\Entity\User $userlikes)
    {
        $this->userlikes->removeElement($userlikes);
    }

    /**
     * Get userlikes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserlikes()
    {
        return $this->userlikes;
    }

    /**
     * Add coutlivraisons
     *
     * @param \Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons
     * @return Produit
     */
    public function addCoutlivraison(\Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons)
    {
        $this->coutlivraisons[] = $coutlivraisons;

        return $this;
    }

    /**
     * Remove coutlivraisons
     *
     * @param \Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons
     */
    public function removeCoutlivraison(\Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons)
    {
        $this->coutlivraisons->removeElement($coutlivraisons);
    }

    /**
     * Get coutlivraisons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoutlivraisons()
    {
        return $this->coutlivraisons;
    }

    /**
     * Set choixauteur
     *
     * @param boolean $choixauteur
     * @return Produit
     */
    public function setChoixauteur($choixauteur)
    {
        $this->choixauteur = $choixauteur;

        return $this;
    }

    /**
     * Get choixauteur
     *
     * @return boolean 
     */
    public function getChoixauteur()
    {
        return $this->choixauteur;
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
	return 'bundles/produit/produit/images/produit';
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
	$this->src = $this->setServicetext->normaliseText($text);
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
     * Set link
     *
     * @param string $link
     * @return Produit
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set src
     *
     * @param string $src
     * @return Produit
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
     * @return Produit
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

    /**
     * Set rang
     *
     * @param integer $rang
     * @return Produit
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return integer 
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set bloglink
     *
     * @param string $bloglink
     * @return Produit
     */
    public function setBloglink($bloglink)
    {
        $this->bloglink = $bloglink;

        return $this;
    }

    /**
     * Get bloglink
     *
     * @return string 
     */
    public function getBloglink()
    {
        return $this->bloglink;
    }

    /**
     * Set documentlink
     *
     * @param string $documentlink
     * @return Produit
     */
    public function setDocumentlink($documentlink)
    {
        $this->documentlink = $documentlink;

        return $this;
    }

    /**
     * Get documentlink
     *
     * @return string 
     */
    public function getDocumentlink()
    {
        return $this->documentlink;
    }

    /**
     * Set forumlink
     *
     * @param string $forumlink
     * @return Produit
     */
    public function setForumlink($forumlink)
    {
        $this->forumlink = $forumlink;

        return $this;
    }

    /**
     * Get forumlink
     *
     * @return string 
     */
    public function getForumlink()
    {
        return $this->forumlink;
    }

    /**
     * Set tariflink
     *
     * @param string $tariflink
     * @return Produit
     */
    public function setTariflink($tariflink)
    {
        $this->tariflink = $tariflink;

        return $this;
    }

    /**
     * Get tariflink
     *
     * @return string 
     */
    public function getTariflink()
    {
        return $this->tariflink;
    }

    /**
     * Set avislink
     *
     * @param string $avislink
     * @return Produit
     */
    public function setAvislink($avislink)
    {
        $this->avislink = $avislink;

        return $this;
    }

    /**
     * Get avislink
     *
     * @return string 
     */
    public function getAvislink()
    {
        return $this->avislink;
    }

    /**
     * Set contactlink
     *
     * @param string $contactlink
     * @return Produit
     */
    public function setContactlink($contactlink)
    {
        $this->contactlink = $contactlink;

        return $this;
    }

    /**
     * Get contactlink
     *
     * @return string 
     */
    public function getContactlink()
    {
        return $this->contactlink;
    }
}
