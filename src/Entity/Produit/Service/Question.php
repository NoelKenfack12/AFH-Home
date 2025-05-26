<?php

namespace App\Entity\Produit\Service;

use App\Repository\Produit\Service\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Users\User\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 * @ORM\Table("question")
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
      * @ORM\ManyToOne(targetEntity=User::class)
      * @ORM\JoinColumn(nullable=true)
    */
    private $user;
    
    /**
     * @var json
     *
     * @ORM\Column(name="first_post", type="json", nullable=true)
     */
    private ?array $firstPost = [];

    /**
     * @var json
     *
     * @ORM\Column(name="second_post", type="json", nullable=true)
     */
    private ?array $secondPost = [];

    /**
     * @var json
     *
     * @ORM\Column(name="third_post", type="json", nullable=true)
     */
    private ?array $thirdPost = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomGagnant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telGagnant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailGagnant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $villeGagnant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomAuteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telAuteur;

    /**
     * @ORM\OneToMany(targetEntity=Candidat::class, mappedBy="question", cascade={"persist"})
    */
    private $candidats;

    public function __construct()
	{
		$this->date = new \Datetime();
        $this->candidats = new ArrayCollection();
	}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set user
     * @return Question
     */
    public function setUser(User $user = null): self
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

    public function getFirstPost(): ?array
    {
        return $this->firstPost;
    }

    public function setFirstPost(?array $firstPost): self
    {
        $this->firstPost = $firstPost;

        return $this;
    }

    public function getSecondPost(): ?array
    {
        return $this->secondPost;
    }

    public function setSecondPost(?array $secondPost): self
    {
        $this->secondPost = $secondPost;

        return $this;
    }

    public function getThirdPost(): ?array
    {
        return $this->thirdPost;
    }

    public function setThirdPost(?array $thirdPost): self
    {
        $this->thirdPost = $thirdPost;

        return $this;
    }

    public function getNomGagnant(): ?string
    {
        return $this->nomGagnant;
    }

    public function setNomGagnant(?string $nomGagnant): self
    {
        $this->nomGagnant = $nomGagnant;

        return $this;
    }

    public function getTelGagnant(): ?string
    {
        return $this->telGagnant;
    }

    public function setTelGagnant(?string $telGagnant): self
    {
        $this->telGagnant = $telGagnant;

        return $this;
    }

    public function getEmailGagnant(): ?string
    {
        return $this->emailGagnant;
    }

    public function setEmailGagnant(?string $emailGagnant): self
    {
        $this->emailGagnant = $emailGagnant;

        return $this;
    }

    public function getVilleGagnant(): ?string
    {
        return $this->villeGagnant;
    }

    public function setVilleGagnant(?string $villeGagnant): self
    {
        $this->villeGagnant = $villeGagnant;

        return $this;
    }

    public function getNomAuteur(): ?string
    {
        return $this->nomAuteur;
    }

    public function setNomAuteur(string $nomAuteur): self
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    public function getTelAuteur(): ?string
    {
        return $this->telAuteur;
    }

    public function setTelAuteur(string $telAuteur): self
    {
        $this->telAuteur = $telAuteur;

        return $this;
    }

    public function addCandidat(Candidat $candidats): self
    {
        $this->candidats[] = $candidats;

        return $this;
    }

    public function removeCandidat(Candidat $candidats): self
    {
        $this->candidats->removeElement($candidats);
    }

    /**
     * @return Collection|Candidat[]
     */
    public function getCandidats(): Collection
    {
        return $this->candidats;
    }
}
