<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="fk_HotelChain", columns={"fk_HotelChain"})})
 * @UniqueEntity(fields={"hotelName"}, message="There is already an hotel with this name")
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository")
 * @ORM\Table(name="`hotel`")
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
     * @Assert\NotBlank
     * @Assert\Length(min="4" , minMessage="Name must contain at lest 4 characters.")
     * @ORM\Column(name="hotel_Name", type="string", length=255, nullable=false)
     */
    private $hotelName;

    /**
     * @var int
     *@Assert\NotBlank
     * @Assert\Length(min="3" , minMessage="Staff must contain 3 digits.")
     * @ORM\Column(name="hotel_Staff", type="integer",  nullable=false)
     */
    private $hotelStaff;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Location", type="string", length=255, nullable=false)
     *@Assert\NotBlank
     */
    private $hotelLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="hotel_Phone", type="integer", nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min="8" , minMessage="Phone number must contain 8 digits")
     */
    private $hotelPhone;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="hotel_Description", type="string", length=255, nullable=false)
     */
    private $hotelDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_Img", type="string",nullable=false)
     */
    private $hotelImg;

    /**
     * @var \Hotelchain
     *
     * @ORM\ManyToOne(targetEntity="Hotelchain")
     * @Assert\NotBlank 
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_HotelChain", referencedColumnName="id_HotelChain")
     * })
     */
    private $fkHotelchain;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;

   

   

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

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

   
    


}
