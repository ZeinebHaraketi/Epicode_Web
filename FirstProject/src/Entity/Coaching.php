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

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_User", type="string", length=25, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_User", type="string", length=25, nullable=false)
     */
    private $prenomUser;

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

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }


}
