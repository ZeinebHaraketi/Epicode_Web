<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likes
 *
 * @ORM\Table(name="likes", indexes={@ORM\Index(name="IDX_49CA4E7D7DB39D81", columns={"idcom"})})
 * @ORM\Entity
 */
class Likes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idcom", type="integer", nullable=true)
     */
    private $idcom;

    /**
     * @var int
     *
     * @ORM\Column(name="likec", type="integer", nullable=false)
     */
    private $likec;

    /**
     * @var int
     *
     * @ORM\Column(name="dislikec", type="integer", nullable=false)
     */
    private $dislikec;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcom(): ?int
    {
        return $this->idcom;
    }

    public function setIdcom(?int $idcom): self
    {
        $this->idcom = $idcom;

        return $this;
    }

    public function getLikec(): ?int
    {
        return $this->likec;
    }

    public function setLikec(int $likec): self
    {
        $this->likec = $likec;

        return $this;
    }

    public function getDislikec(): ?int
    {
        return $this->dislikec;
    }

    public function setDislikec(int $dislikec): self
    {
        $this->dislikec = $dislikec;

        return $this;
    }


}
