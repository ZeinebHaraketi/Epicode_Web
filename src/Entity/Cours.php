<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_C", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_C", type="string", length=255, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_C", type="string", length=255, nullable=false)
     */
    private $dateC;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Co", type="integer", nullable=false)
     */
    private $idCo;

    public function getIdC(): ?int
    {
        return $this->idC;
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

    public function getDateC(): ?string
    {
        return $this->dateC;
    }

    public function setDateC(string $dateC): self
    {
        $this->dateC = $dateC;

        return $this;
    }

    public function getIdCo(): ?int
    {
        return $this->idCo;
    }

    public function setIdCo(int $idCo): self
    {
        $this->idCo = $idCo;

        return $this;
    }


}
