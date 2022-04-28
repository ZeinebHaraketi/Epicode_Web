<?php

namespace App\Entity;

use App\Repository\RatingblgRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RatingblgRepository::class)
 */
class Ratingblg
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $rat;

    /**
     * @ORM\ManyToOne(targetEntity=Blg::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_blg", referencedColumnName="Id_b")
     * })
     */
    private $idblg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRat(): ?float
    {
        return $this->rat;
    }

    public function setRat(float $rat): self
    {
        $this->rat = $rat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdblg()
    {
        return $this->idblg;
    }

    /**
     * @param mixed $idblg
     */
    public function setIdblg($idblg): void
    {
        $this->idblg = $idblg;
    }


}
