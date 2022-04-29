<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoachRepository::class)
 */
class Coach
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomCoach;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomCoach;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="reservationCoach")
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

   

  

  

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCoach(): ?string
    {
        return $this->NomCoach;
    }

    public function setNomCoach(string $NomCoach): self
    {
        $this->NomCoach = $NomCoach;

        return $this;
    }

    public function getPrenomCoach(): ?string
    {
        return $this->prenomCoach;
    }

    public function setPrenomCoach(string $prenomCoach): self
    {
        $this->prenomCoach = $prenomCoach;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setReservationCoach($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getReservationCoach() === $this) {
                $reservation->setReservationCoach(null);
            }
        }

        return $this;
    }

   

   

}
