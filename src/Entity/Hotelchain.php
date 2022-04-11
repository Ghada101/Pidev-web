<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotelchain
 *
 * @ORM\Table(name="hotelchain")
 * @ORM\Entity
 */
class Hotelchain
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_HotelChain", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHotelchain;

    /**
     * @var string
     *
     * @ORM\Column(name="hotelChain_name", type="string", length=255, nullable=false)
     */
    private $hotelchainName;

    /**
     * @var string
     *
     * @ORM\Column(name="hotelChain_Staff", type="string", length=255, nullable=false)
     */
    private $hotelchainStaff;

    /**
     * @var string
     *
     * @ORM\Column(name="hotelChain_Description", type="string", length=255, nullable=false)
     */
    private $hotelchainDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone;

    public function getIdHotelchain(): ?int
    {
        return $this->idHotelchain;
    }

    public function getHotelchainName(): ?string
    {
        return $this->hotelchainName;
    }

    public function setHotelchainName(string $hotelchainName): self
    {
        $this->hotelchainName = $hotelchainName;

        return $this;
    }

    public function getHotelchainStaff(): ?string
    {
        return $this->hotelchainStaff;
    }

    public function setHotelchainStaff(string $hotelchainStaff): self
    {
        $this->hotelchainStaff = $hotelchainStaff;

        return $this;
    }

    public function getHotelchainDescription(): ?string
    {
        return $this->hotelchainDescription;
    }

    public function setHotelchainDescription(string $hotelchainDescription): self
    {
        $this->hotelchainDescription = $hotelchainDescription;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }


}
