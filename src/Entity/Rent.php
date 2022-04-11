<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RentRepository;

/**
 * Rent
 *
 * @ORM\Table(name="rent", indexes={@ORM\Index(name="fk_User", columns={"idUser"}), @ORM\Index(name="fk_Car", columns={"idCar"}), @ORM\Index(name="Agency_fk", columns={"idAgency"})})
 * @ORM\Entity(repositoryClass=RentRepository::class)
 */
class Rent
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrent;

    /**
     * @var string
     *
     * @ORM\Column(name="StartDate", type="string", length=255, nullable=false)
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="EndDate", type="string", length=255, nullable=false)
     */
    private $enddate;

    /**
     * @var \Car
     *
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCar", referencedColumnName="id_Car")
     * })
     */
    private $idcar;

    /**
     * @var \Agency
     * @ORM\ManyToOne(targetEntity="Agency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgency", referencedColumnName="Id_Agency")
     * })
     */
    private $idagency;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    public function getIdrent(): ?int
    {
        return $this->idrent;
    }

    public function getStartdate(): ?string
    {
        return $this->startdate;
    }

    public function setStartdate(string $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    public function setEnddate(string $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getIdcar(): ?Car
    {
        return $this->idcar;
    }

    public function setIdcar(?Car $idcar): self
    {
        $this->idcar = $idcar;

        return $this;
    }

    public function getIdagency(): ?Agency
    {
        return $this->idagency;
    }

    public function setIdagency(?Agency $idagency): self
    {
        $this->idagency = $idagency;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
