<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Activite
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="id_enfant", columns={"id_enfant"})})
 * @ORM\Entity
 * 
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("act")
     * @Groups("post:read")
     */
    private $idA;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_a", type="string", length=50, nullable=false)
     * @Assert\Length(
     * min = 5,
     * max = 10,
     * minMessage = "Votre Nom doit être au moins {{ limit }} characters long",
     * maxMessage = "Votre Nom ne peut pas etre plus {{ limit }} characters"
     * )
     * @Groups("act")
     * @Groups("post:read")
     */
    private $nomA;

    /**
     * @var int
     *
     * @ORM\Column(name="cat_age", type="integer", nullable=false)
     * @Groups("act")
     * @Groups("post:read")
     */
    private $catAge;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     * @Groups("act")
     * @Groups("post:read")
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     * @Groups("act")
     * @Groups("post:read")
     */
    private $image;

    /**
     * @var \Enfant
     *
     * @ORM\ManyToOne(targetEntity="Enfant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enfant", referencedColumnName="id_enfant")
     * })
     * @Groups("act")
     * @Groups("post:read")
     */
    private $idEnfant;

    public function getIdA(): ?int
    {
        return $this->idA;
    }

    public function getNomA(): ?string
    {
        return $this->nomA;
    }

    public function setNomA(string $nomA): self
    {
        $this->nomA = $nomA;

        return $this;
    }

    public function getCatAge(): ?int
    {
        return $this->catAge;
    }

    public function setCatAge(int $catAge): self
    {
        $this->catAge = $catAge;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdEnfant(): ?Enfant
    {
        return $this->idEnfant;
    }

    public function setIdEnfant(?Enfant $idEnfant): self
    {
        $this->idEnfant = $idEnfant;

        return $this;
    }


}
