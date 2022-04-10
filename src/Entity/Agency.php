<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agency
 *
 * @ORM\Table(name="agency")
 * @ORM\Entity
 */
class Agency
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Agency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgency;

    /**
     * @var string
     *
     * @ORM\Column(name="nameAgency", type="string", length=255, nullable=false)
     */
    private $nameagency;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyPhoneNumber", type="string", length=255, nullable=false)
     */
    private $agencyphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyLocation", type="string", length=255, nullable=false)
     */
    private $agencylocation;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyDescription", type="string", length=255, nullable=false)
     */
    private $agencydescription;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfCars", type="integer", nullable=false)
     */
    private $numberofcars;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfAvailableCars", type="integer", nullable=false)
     */
    private $numberofavailablecars;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageAgency", type="string", length=255, nullable=true)
     */
    private $imageagency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrLike", type="integer", nullable=true)
     */
    private $nbrlike = '0';

    public function getIdAgency(): ?int
    {
        return $this->idAgency;
    }

    public function getNameagency(): ?string
    {
        return $this->nameagency;
    }

    public function setNameagency(string $nameagency): self
    {
        $this->nameagency = $nameagency;

        return $this;
    }

    public function getAgencyphonenumber(): ?string
    {
        return $this->agencyphonenumber;
    }

    public function setAgencyphonenumber(string $agencyphonenumber): self
    {
        $this->agencyphonenumber = $agencyphonenumber;

        return $this;
    }

    public function getAgencylocation(): ?string
    {
        return $this->agencylocation;
    }

    public function setAgencylocation(string $agencylocation): self
    {
        $this->agencylocation = $agencylocation;

        return $this;
    }

    public function getAgencydescription(): ?string
    {
        return $this->agencydescription;
    }

    public function setAgencydescription(string $agencydescription): self
    {
        $this->agencydescription = $agencydescription;

        return $this;
    }

    public function getNumberofcars(): ?int
    {
        return $this->numberofcars;
    }

    public function setNumberofcars(int $numberofcars): self
    {
        $this->numberofcars = $numberofcars;

        return $this;
    }

    public function getNumberofavailablecars(): ?int
    {
        return $this->numberofavailablecars;
    }

    public function setNumberofavailablecars(int $numberofavailablecars): self
    {
        $this->numberofavailablecars = $numberofavailablecars;

        return $this;
    }

    public function getImageagency(): ?string
    {
        return $this->imageagency;
    }

    public function setImageagency(?string $imageagency): self
    {
        $this->imageagency = $imageagency;

        return $this;
    }

    public function getNbrlike(): ?int
    {
        return $this->nbrlike;
    }

    public function setNbrlike(?int $nbrlike): self
    {
        $this->nbrlike = $nbrlike;

        return $this;
    }


}
