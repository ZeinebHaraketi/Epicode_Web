<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity(repositoryClass="App\Repository\ConsultationRepository")
 */
class Consultation
{
    protected $captchaCode;
    
   

    /**
     * @var int
     *
     * @ORM\Column(name="Id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *    @Assert\Type(type={"alpha"})
     *  * @Assert\Length(
     *      min = 3,
     *      max = 15,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="Age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=255, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_rdv", type="string", length=255, nullable=false)
     */
    private $dateRdv;

    /**
     * @var string
     *   * @Assert\Type(type={"alpha"})
     *
     * @ORM\Column(name="Etat_physique", type="string", length=255, nullable=false)
     */
    private $etatPhysique;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_c", type="string", length=255, nullable=false)
     */
    private $categorieC;

    /**
     * @var string
     *   @Assert\Type(type={"alpha"})
     * * @Assert\Length(
     *      min = 3,
     *      max = 15,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     *
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     */
    private $email;
    public function __toString()
    {
        return (string) $this->idC;
    }

    public function getIdC(): ?int
    {
        return $this->idC;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateRdv(): ?string
    {
        return $this->dateRdv;
    }

    public function setDateRdv(string $dateRdv): self
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    public function getEtatPhysique(): ?string
    {
        return $this->etatPhysique;
    }

    public function setEtatPhysique(string $etatPhysique): self
    {
        $this->etatPhysique = $etatPhysique;

        return $this;
    }

    public function getCategorieC(): ?string
    {
        return $this->categorieC;
    }

    public function setCategorieC(string $categorieC): self
    {
        $this->categorieC = $categorieC;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getCaptchaCode()
    {
      return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
      $this->captchaCode = $captchaCode;
    }


}
