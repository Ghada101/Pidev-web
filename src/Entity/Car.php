<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car", indexes={@ORM\Index(name="fk_Agency", columns={"fk_Agency"})})
 * @ORM\Entity
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Car", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NameCar", type="string", length=255, nullable=true)
     */
    private $namecar;

    /**
     * @var string
     *
     * @ORM\Column(name="CarNumber", type="string", length=255, nullable=false)
     */
    private $carnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="CarColor", type="string", length=255, nullable=false)
     */
    private $carcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="CarBrand", type="string", length=255, nullable=false)
     */
    private $carbrand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CarImage", type="string", length=255, nullable=true)
     */
    private $carimage;

    /**
     * @var bool
     *
     * @ORM\Column(name="RentStatus", type="boolean", nullable=false)
     */
    private $rentstatus = '0';

    /**
     * @var \Agency
     *
     * @ORM\ManyToOne(targetEntity="Agency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_Agency", referencedColumnName="Id_Agency")
     * })
     */
    private $fkAgency;

    public function getIdCar(): ?int
    {
        return $this->idCar;
    }

    public function getNamecar(): ?string
    {
        return $this->namecar;
    }

    public function setNamecar(?string $namecar): self
    {
        $this->namecar = $namecar;

        return $this;
    }

    public function getCarnumber(): ?string
    {
        return $this->carnumber;
    }

    public function setCarnumber(string $carnumber): self
    {
        $this->carnumber = $carnumber;

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

    public function getCarcolor(): ?string
    {
        return $this->carcolor;
    }

    public function setCarcolor(string $carcolor): self
    {
        $this->carcolor = $carcolor;

        return $this;
    }

    public function getCarbrand(): ?string
    {
        return $this->carbrand;
    }

    public function setCarbrand(string $carbrand): self
    {
        $this->carbrand = $carbrand;

        return $this;
    }

    public function getCarimage(): ?string
    {
        return $this->carimage;
    }

    public function setCarimage(?string $carimage): self
    {
        $this->carimage = $carimage;

        return $this;
    }

    public function getRentstatus(): ?bool
    {
        return $this->rentstatus;
    }

    public function setRentstatus(bool $rentstatus): self
    {
        $this->rentstatus = $rentstatus;

        return $this;
    }

    public function getFkAgency(): ?Agency
    {
        return $this->fkAgency;
    }

    public function setFkAgency(?Agency $fkAgency): self
    {
        $this->fkAgency = $fkAgency;

        return $this;
    }


}
