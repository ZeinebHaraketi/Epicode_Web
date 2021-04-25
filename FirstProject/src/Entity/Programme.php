<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme", indexes={@ORM\Index(name="Id_c", columns={"Id_c"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProgrammeRepository")
 */
class Programme
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_p", type="string", length=255, nullable=false)
     */
    private $nomP;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_r", type="string", length=255, nullable=false)
     */
    private $dateR;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Kine", type="integer", nullable=false)
     */
    private $idKine;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Consultation
     *
     * @ORM\ManyToOne(targetEntity="Consultation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_c", referencedColumnName="Id_c")
     * })
     */
    private $idC;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): self
    {
        $this->nomP = $nomP;

        return $this;
    }

    public function getDateR(): ?string
    {
        return $this->dateR;
    }

    public function setDateR(string $dateR): self
    {
        $this->dateR = $dateR;

        return $this;
    }

    public function getIdKine(): ?int
    {
        return $this->idKine;
    }

    public function setIdKine(int $idKine): self
    {
        $this->idKine = $idKine;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdC(): ?Consultation
    {
        return $this->idC;
    }

    public function setIdC(?Consultation $idC): self
    {
        $this->idC = $idC;

        return $this;
    }


}
