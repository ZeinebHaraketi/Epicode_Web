<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateR;

       /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Cours::class, inversedBy="reservations")
     */
    private $reservationCours;

    /**
     * @ORM\ManyToOne(targetEntity=Coach::class, inversedBy="reservations")
     */
    private $reservationCoach;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateR(): ?\DateTimeInterface
    {
        return $this->dateR;
    }

    public function setDateR(\DateTimeInterface $dateR): self
    {
        $this->dateR = $dateR;

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

    public function getReservationCours(): ?Cours
    {
        return $this->reservationCours;
    }

    public function setReservationCours(?Cours $reservationCours): self
    {
        $this->reservationCours = $reservationCours;

        return $this;
    }

    public function getReservationCoach(): ?Coach
    {
        return $this->reservationCoach;
    }

    public function setReservationCoach(?Coach $reservationCoach): self
    {
        $this->reservationCoach = $reservationCoach;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }
}
