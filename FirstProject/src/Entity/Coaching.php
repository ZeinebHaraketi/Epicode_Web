<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coaching
 *
 * @ORM\Table(name="coaching")
 * @ORM\Entity
 */
class Coaching
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_S", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idS;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_S", type="string", length=255, nullable=false)
     */
    private $dateS;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Co", type="integer", nullable=false)
     */
    private $idCo;

    public function getIdS(): ?int
    {
        return $this->idS;
    }

    public function getDateS(): ?string
    {
        return $this->dateS;
    }

    public function setDateS(string $dateS): self
    {
        $this->dateS = $dateS;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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
