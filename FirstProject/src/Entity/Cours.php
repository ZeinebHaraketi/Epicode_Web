<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{

    protected $captchaCode;
    
    public function getCaptchaCode()
    {
      return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
      $this->captchaCode = $captchaCode;
    }
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_C;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Date_C;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Id_Co;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_cours;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="reservationCours")
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

    public function getNomC(): ?string
    {
        return $this->Nom_C;
    }

    public function setNomC(string $Nom_C): self
    {
        $this->Nom_C = $Nom_C;

        return $this;
    }

    public function getDateC(): ?string
    {
        return $this->Date_C;
    }

    public function setDateC(string $Date_C): self
    {
        $this->Date_C = $Date_C;

        return $this;
    }

    public function getIdCo(): ?string
    {
        return $this->Id_Co;
    }

    public function setIdCo(string $Id_Co): self
    {
        $this->Id_Co = $Id_Co;

        return $this;
    }

    public function getImageCours(): ?string
    {
        return $this->image_cours;
    }

    public function setImageCours(?string $image_cours): self
    {
        $this->image_cours = $image_cours;

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
            $reservation->setReservationCours($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getReservationCours() === $this) {
                $reservation->setReservationCours(null);
            }
        }

        return $this;
    }
}
