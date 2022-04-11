<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="fk_HotelChain", columns={"fk_HotelChain"})})
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Hotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Name", type="string", length=255, nullable=false)
     */
    private $hotelName;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Staff", type="string", length=255, nullable=false)
     */
    private $hotelStaff;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Location", type="string", length=255, nullable=false)
     */
    private $hotelLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Phone", type="string", length=255, nullable=false)
     */
    private $hotelPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Description", type="string", length=255, nullable=false)
     */
    private $hotelDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hotel_Img", type="string", length=255, nullable=true)
     */
    private $hotelImg;

    /**
     * @var \Hotelchain
     *
     * @ORM\ManyToOne(targetEntity="Hotelchain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_HotelChain", referencedColumnName="id_HotelChain")
     * })
     */
    private $fkHotelchain;

    public function getIdHotel(): ?int
    {
        return $this->idHotel;
    }

    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }

    public function setHotelName(string $hotelName): self
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    public function getHotelStaff(): ?string
    {
        return $this->hotelStaff;
    }

    public function setHotelStaff(string $hotelStaff): self
    {
        $this->hotelStaff = $hotelStaff;

        return $this;
    }

    public function getHotelLocation(): ?string
    {
        return $this->hotelLocation;
    }

    public function setHotelLocation(string $hotelLocation): self
    {
        $this->hotelLocation = $hotelLocation;

        return $this;
    }

    public function getHotelPhone(): ?string
    {
        return $this->hotelPhone;
    }

    public function setHotelPhone(string $hotelPhone): self
    {
        $this->hotelPhone = $hotelPhone;

        return $this;
    }

    public function getHotelDescription(): ?string
    {
        return $this->hotelDescription;
    }

    public function setHotelDescription(string $hotelDescription): self
    {
        $this->hotelDescription = $hotelDescription;

        return $this;
    }

    public function getHotelImg(): ?string
    {
        return $this->hotelImg;
    }

    public function setHotelImg(?string $hotelImg): self
    {
        $this->hotelImg = $hotelImg;

        return $this;
    }

    public function getFkHotelchain(): ?Hotelchain
    {
        return $this->fkHotelchain;
    }

    public function setFkHotelchain(?Hotelchain $fkHotelchain): self
    {
        $this->fkHotelchain = $fkHotelchain;

        return $this;
    }


}
