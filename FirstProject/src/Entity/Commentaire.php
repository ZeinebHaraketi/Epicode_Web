<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="Id_b", columns={"Id_b"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;

    /**
     * @var string
     *    @Assert\Type(type={"alpha"})
     *  * @Assert\Length(
     *      min = 3,
     *      max = 15,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     *
     * @ORM\Column(name="Nom_c", type="string", length=255, nullable=false)
     */
    private $nomC;

     /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *@Assert\NotBlank(message="auteur   :doit etre non vide")
     * @ORM\Column(name="Message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *   * @Assert\Type(type={"alpha"})
     *
     * @ORM\Column(name="Nom_article", type="string", length=255, nullable=false)
     */
    private $nomArticle;

    /**
     * @var \Blg
     *
     * @ORM\ManyToOne(targetEntity="Blg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_b", referencedColumnName="Id_b")
     * })
     */
    private $idB;

    /**
     * @ORM\OneToMany(targetEntity=Likes::class, mappedBy="idc", cascade={ "remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="id" ,onDelete="CASCADE")
     */
    private $likec;

    public function __construct()
    {
        $this->likec = new ArrayCollection();
    }

    public function getIdCom(): ?int
    {
        return $this->idCom;
    }

    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    public function setNomC(string $nomC): self
    {
        $this->nomC = $nomC;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date= $date;

        return $this;
    }

    public function getNomArticle(): ?string
    {
        return $this->nomArticle;
    }

    public function setNomArticle(string $nomArticle): self
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    public function getIdB(): ?Blg
    {
        return $this->idB;
    }

    public function setIdB(?Blg $idB): self
    {
        $this->idB = $idB;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLikec()
    {
        return $this->likec;
    }

    /**
     * @param mixed $likec
     */
    public function setLikec($likec): void
    {
        $this->likec = $likec;
    }


    /**
     * @return Collection<int, Likes>
     */
    public function getReponses(): Collection
    {
        return $this->likec;
    }

    public function addReponse(Likes $reponse): self
    {
        if (!$this->likec->contains($reponse)) {
            $this->likec[] = $reponse;
            $reponse->setReclamations($this);
        }

        return $this;
    }

    public function removeReponse(Likes $reponse): self
    {
        if ($this->likec->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getCommentaires() === $this) {
                $reponse->setCommentaires(null);
            }
        }

        return $this;
    }

}
