<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Hotelchain
 *
 * @ORM\Table(name="hotelchain")
 * @ORM\Entity(repositoryClass="App\Repository\HotelchainRepository")
 * @ORM\Table(name="`hotelchain`")
 * @UniqueEntity(fields={"hotelchainName"}, message="There is already an hotelChain with this name")

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
     * @Assert\NotBlank
     * @Assert\Length(min="4" , minMessage="Name must contain at lest 4 characters.")
     */
    private $hotelchainName;

    /**
     * @var int
     * @Assert\NotBlank
     * @Assert\Length(min="3" , minMessage="Staff must contain 3 digits.")
     * @ORM\Column(name="hotelChain_Staff", type="integer", nullable=false)
     */
    private $hotelchainStaff;

    /**
     * @var string
     *
     * @ORM\Column(name="hotelChain_Description", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $hotelchainDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min="8" , minMessage="Phone number must contain 8 digits")
     * @Assert\Length(max="8" , maxMessage="Phone number must contain 8 digits")
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
