<?php

namespace App\Entity;

use App\Repository\RatingblgRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=RatingblgRepository::class)
 */
class Ratingblg
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("ratingblg")
     * @Groups("posts:read")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Groups("ratingblg")
     * @Groups("posts:read")
     */
    private $rat;

    /**
     * @ORM\ManyToOne(targetEntity=Blg::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_blg", referencedColumnName="Id_b")
     * })
     * @Groups("ratingblg")
     * @Groups("posts:read")
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
