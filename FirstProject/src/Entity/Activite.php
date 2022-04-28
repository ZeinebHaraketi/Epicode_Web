<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idA;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_a", type="string", length=50, nullable=false)
     */
    private $nomA;

    /**
     * @var int
     *
     * @ORM\Column(name="cat_age", type="integer", nullable=false)
     */
    private $catAge;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="id_enfant", type="integer", nullable=false)
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

    public function getIdEnfant(): ?int
    {
        return $this->idEnfant;
    }

    public function setIdEnfant(int $idEnfant): self
    {
        $this->idEnfant = $idEnfant;

        return $this;
    }


}
