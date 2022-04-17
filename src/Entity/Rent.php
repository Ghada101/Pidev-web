<?php

namespace App\Entity;

use Doctrine\DBAL\Types\DateType;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RentRepository;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="StartDate", type="datetime",nullable=false)
     * @Assert\GreaterThan("today")
     * @Assert\LessThanOrEqual(propertyPath="enddate",message="Start date must be less than End date")
     * @Assert\NotBlank(message="Please enter a start date")
     */
    private $startdate;

    /**
     * @ORM\Column(name="EndDate", type="datetime", nullable=false)
     * @Assert\GreaterThanOrEqual(propertyPath="Startdate",message="End date must be greater than Start date")
     * @Assert\GreaterThan("today")
     * @Assert\NotBlank(message="Please enter an end date")
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

    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    public function setStartdate(\DateTimeInterface $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    public function setEnddate(\DateTimeInterface $enddate): self
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