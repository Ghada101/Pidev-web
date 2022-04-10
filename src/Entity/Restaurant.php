<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant")
 * @ORM\Entity
 */
class Restaurant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Restau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="name_Restau", type="string", length=255, nullable=false)
     */
    private $nameRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Restau", type="string", length=255, nullable=false)
     */
    private $descriptionRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_Restau", type="string", length=255, nullable=false)
     */
    private $phoneRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="location_Restau", type="string", length=255, nullable=false)
     */
    private $locationRestau;

    /**
     * @var int
     *
     * @ORM\Column(name="IdCategory", type="integer", nullable=false)
     */
    private $idcategory;

    public function getIdRestau(): ?int
    {
        return $this->idRestau;
    }

    public function getNameRestau(): ?string
    {
        return $this->nameRestau;
    }

    public function setNameRestau(string $nameRestau): self
    {
        $this->nameRestau = $nameRestau;

        return $this;
    }

    public function getDescriptionRestau(): ?string
    {
        return $this->descriptionRestau;
    }

    public function setDescriptionRestau(string $descriptionRestau): self
    {
        $this->descriptionRestau = $descriptionRestau;

        return $this;
    }

    public function getPhoneRestau(): ?string
    {
        return $this->phoneRestau;
    }

    public function setPhoneRestau(string $phoneRestau): self
    {
        $this->phoneRestau = $phoneRestau;

        return $this;
    }

    public function getLocationRestau(): ?string
    {
        return $this->locationRestau;
    }

    public function setLocationRestau(string $locationRestau): self
    {
        $this->locationRestau = $locationRestau;

        return $this;
    }

    public function getIdcategory(): ?int
    {
        return $this->idcategory;
    }

    public function setIdcategory(int $idcategory): self
    {
        $this->idcategory = $idcategory;

        return $this;
    }


}
