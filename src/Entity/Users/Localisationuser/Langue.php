<?php

namespace App\Entity\Users\Localisationuser;

use Doctrine\ORM\Mapping as ORM;
use App\Validator\Validatortext\Taillemin;
use App\Validator\Validatortext\Taillemax;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Service\Servicetext\GeneralServicetext;
use App\Repository\Users\Localisationuser\LangueRepository;
use App\Entity\Users\Localisationuser\Pays;
use Doctrine\Common\Collections\Collection;

/**
 * Langue
 *
 * @ORM\Table("langue")
 * @ORM\Entity(repositoryClass=LangueRepository::class)
 * @UniqueEntity(fields="nom", message="Cette langue est déjà enregistrée.")
 ** @ORM\HasLifecycleCallbacks
 */
class Langue
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
     * @ORM\Column(name="nom", type="string", length=100,unique=true)
     *@Taillemin(valeur=5, message="Au moins 5 caractères")
     *@Taillemax(valeur=60, message="Au plus 60 caractères")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abbreviation", type="string", length=50)
     *@Taillemin(valeur=2, message="Au moins 2 caractères")
     *@Taillemax(valeur=10, message="Au plus 10 caractères")
     */
    private $abbreviation;
	
	/**
     * @ORM\ManyToMany(targetEntity=Pays::class, mappedBy="langues")
    */
    private $pays;
	
	private $serviceaccent;
	
	
	public function __construct(GeneralServicetext $service)
	{
        $this->serviceaccent = $service;
        $this->pays = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	public function getServiceaccent()
	{
	return $this->serviceaccent;
	}
	public function setServiceaccent(GeneralServicetext $service)
	{
	$this->serviceaccent = $service;
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
     * @return Langue
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
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Langue
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
	
	/**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function premajuscule()
	{
        $text1 = $this->serviceaccent->retireAccent($this->abbreviation);
        $this->nom =  ucfirst($this->nom);
        $this->abbreviation = strtolower($text1);
	}

    /**
     * Add pays
     * @return Langue
     */
    public function addPay(Pays $pays): self
    {
        $this->pays[] = $pays;

        return $this;
    }
    
    /**
     * Remove pays
     */
    public function removePay(Pays $pays)
    {
        $this->pays->removeElement($pays);
    }

    /**
     * Get pays 
     */
    public function getPays(): ?Collection
    {
        return $this->pays;
    }
}
