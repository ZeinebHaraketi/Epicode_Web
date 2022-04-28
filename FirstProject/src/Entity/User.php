<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="Nom_U", type="string", length=255, nullable=false)
     */
    private $nomU;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_N", type="string", length=255, nullable=false)
     */
    private $dateN;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=255, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Mdp", type="string", length=255, nullable=false)
     */
    private $mdp;

    /**
     * @ORM\OneToMany(targetEntity=Ratingblg::class, mappedBy="idu")
     */
    private $idblg;

    public function __construct()
    {
        $this->idblg = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomU(): ?string
    {
        return $this->nomU;
    }

    public function setNomU(string $nomU): self
    {
        $this->nomU = $nomU;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateN(): ?string
    {
        return $this->dateN;
    }

    public function setDateN(string $dateN): self
    {
        $this->dateN = $dateN;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * @return Collection<int, Ratingblg>
     */
    public function getIdblg(): Collection
    {
        return $this->idblg;
    }

    public function addIdblg(Ratingblg $idblg): self
    {
        if (!$this->idblg->contains($idblg)) {
            $this->idblg[] = $idblg;
            $idblg->setIdu($this);
        }

        return $this;
    }

    public function removeIdblg(Ratingblg $idblg): self
    {
        if ($this->idblg->removeElement($idblg)) {
            // set the owning side to null (unless already changed)
            if ($idblg->getIdu() === $this) {
                $idblg->setIdu(null);
            }
        }

        return $this;
    }


}
