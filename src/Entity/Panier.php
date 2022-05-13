<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="Id_P", columns={"Id_P"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Pa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPa;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="Coupon", type="string", length=25, nullable=false)
     */
    private $coupon;


    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_P", referencedColumnName="Id_P")
     * })
     */
    private $idP;


    public function getIdPa(): ?int
    {
        return $this->idPa;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getCoupon(): ?string
    {
        return $this->coupon;
    }

    public function setCoupon(string $coupon): self
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdP()
    {
        return $this->idP;
    }

    /**
     * @param mixed $idP
     */
    public function setIdP($idP): void
    {
        $this->idP = $idP;
    }


}
