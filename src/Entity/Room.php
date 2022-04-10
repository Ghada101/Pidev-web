<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;
/** 
 * Room
 *
 * @ORM\Table(name="room", indexes={@ORM\Index(name="fk_Hotel", columns={"fk_Hotel"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"nbrroom"}, message="There is already a room with this number")

 */
class Room
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Room", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRoom;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="room_Type", type="string", length=255, nullable=false)
     */
    private $roomType;

    /**
     * @var string
     *
     * @ORM\Column(name="room_capacity", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $roomCapacity;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEmpty", type="boolean", nullable=true, options={"default"="1"})
     */
    private $isempty = true;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrRoom", type="integer", nullable=false)
     * @Assert\NotBlank
     */
    private $nbrroom;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_Hotel", referencedColumnName="id_Hotel")
     * })
     * @Assert\NotBlank
     */
    private $fkHotel;

    /**
     * @ORM\Column(type="float")
     * @Assert\Positive
     * @Assert\NotBlank(message="Price required")
     */
    private $price;

 /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=false)
     */
    private $image;

    public function getIdRoom(): ?int
    {
        return $this->idRoom;
    }

    public function getRoomType(): ?string
    {
        return $this->roomType;
    }

    public function setRoomType(string $roomType): self
    {
        $this->roomType = $roomType;

        return $this;
    }

    public function getRoomCapacity(): ?string
    {
        return $this->roomCapacity;
    }

    public function setRoomCapacity(string $roomCapacity): self
    {
        $this->roomCapacity = $roomCapacity;

        return $this;
    }

    public function getIsempty(): ?bool
    {
        return $this->isempty;
    }

    public function setIsempty(bool $isempty): self
    {
        $this->isempty = $isempty;

        return $this;
    }

    public function getNbrroom(): ?int
    {
        return $this->nbrroom;
    }

    public function setNbrroom(int $nbrroom): self
    {
        $this->nbrroom = $nbrroom;

        return $this;
    }

    public function getFkHotel(): ?Hotel
    {
        return $this->fkHotel;
    }

    public function setFkHotel(?Hotel $fkHotel): self
    {
        $this->fkHotel = $fkHotel;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
