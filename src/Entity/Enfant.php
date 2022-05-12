<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="App\Repository\EnfantRepository")
 */
class Enfant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_enfant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
	 * @Groups("enf")
     * @Groups("post:read")
     */
    private $idEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     * @Assert\NotNull
     * @Assert\Length(
     * min = 5,
     * max = 10,
     * minMessage = "Votre Nom doit être au moins {{ limit }} characters long",
     * maxMessage = "Votre Nom ne peut pas etre plus {{ limit }} characters"
     * )
	 * @Groups("enf")
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     * @Assert\NotNull
     * @Assert\Length(
     * min = 5,
     * max = 10,
     * minMessage = "Votre Prenom doit être au moins {{ limit }} characters long",
     * maxMessage = "Votre Prenom ne peut pas etre plus {{ limit }} characters"
     * )
	 * @Groups("enf")
     * @Groups("post:read")
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
	 * @Groups("enf")
     * @Groups("post:read")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=15, nullable=false)
     * @Groups("enf")
     * @Groups("post:read")
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
	 * @Groups("enf")
     * @Groups("post:read")
     */
    private $photo;

    /**
     * @var int
     * @Assert\NotNull
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     * @Groups("enf")
     * @Groups("post:read")
     */
    private $idA;
    
    public function __toString()
    {
        return (string) $this->idEnfant;
    }

    
    public function getIdEnfant(): ?int
    {
        return $this->idEnfant;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getIdA(): ?int
    {
        return $this->idA;
    }

    public function setIdA(int $idA): self
    {
        $this->idA = $idA;

        return $this;
    }


}
