<?php

namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


use Doctrine\ORM\Mapping as ORM;

/**
 * Blg
 *
 * @ORM\Table(name="blg")
 * @ORM\Entity(repositoryClass=App\Repository\BlgRepository::class)
 */
class Blg
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_b", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idB;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=25, nullable=false)
     */
    private $titre;

    /** 
     * @Assert\NotBlank(message="Contenu  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     * @ORM\Column(name="Contenu", type="string", length=255, nullable=false)
     */
    private $contenu;
 
    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *@Assert\NotBlank(message="auteur   :doit etre non vide")
     * @ORM\Column(name="Auteur", type="string", length=255, nullable=false)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=Ratingblg::class, mappedBy="idblg", cascade={ "remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="id_blg" ,onDelete="CASCADE")
     */
    private $rates;


    public function __toString()
    {
        return (string) $this->idB;
    }

    public function getIdB(): ?int
    {
        return $this->idB;
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Ratingblg>
     */
    public function getReponses(): Ratingblg
    {
        return $this->rates;
    }

    public function addReponse(Ratingblg $reponse): self
    {
        if (!$this->rates->contains($reponse)) {
            $this->rates[] = $reponse;
            $reponse->setIdblg($this);
        }

        return $this;
    }

    public function removeReponse(Ratingblg $reponse): self
    {
        if ($this->rates->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getIdblg() === $this) {
                $reponse->setIdblg(null);
            }
        }

        return $this;
    }

}
