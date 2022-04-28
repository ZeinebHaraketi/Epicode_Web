<?php

namespace App\Entity;

use App\Repository\RatingblgRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="likes")
 * @ORM\Entity
 */
class Likes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Commentaire::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcom", referencedColumnName="Id_com")
     * })
     */
    private $idc;

    /**
     * @var int
     *
     * @ORM\Column(name="likec", type="integer")
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

    /**
     * @return int
     */
    public function getLikec(): int
    {
        return $this->likec;
    }

    /**
     * @param int $likec
     */
    public function setLikec(int $likec): void
    {
        $this->likec = $likec;
    }

    /**
     * @return int
     */
    public function getDislikec(): int
    {
        return $this->dislikec;
    }

    /**
     * @param int $dislikec
     */
    public function setDislikec(int $dislikec): void
    {
        $this->dislikec = $dislikec;
    }


    /**
     * @return Commentaire
     */
    public function getCommentaires(): Commentaire
    {
        return $this->idc;
    }

    /**
     * @param mixed $idc
     */
    public function setIdc($idc): void
    {
        $this->idc = $idc;
    }

    public function setCommentaires(?Commentaire $commentaire): self
    {
        $this->idc = $commentaire;

        return $this;
    }


    public function setReponse(?Likes $reponse): self
    {
        $this->idc = $reponse;

        return $this;
    }

    /**
     * @return Collection<int, Likes>
     */
    public function getReponses(): Collection
    {
        return $this->idc;
    }

    public function removeReclamation(Commentaire $reclamation): self
    {
        if ($this->idc->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getLikec() === $this) {
                $reclamation->setLikec(null);
            }
        }

        return $this;
    }

    public function setReclamations(?Commentaire $reclamations): self
    {
        $this->idc = $reclamations;

        return $this;
    }
}
