<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room", indexes={@ORM\Index(name="fk_Hotel", columns={"fk_Hotel"})})
 * @ORM\Entity
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
     *
     * @ORM\Column(name="room_Type", type="string", length=255, nullable=false)
     */
    private $roomType;

    /**
     * @var string
     *
     * @ORM\Column(name="room_capacity", type="string", length=255, nullable=false)
     */
    private $roomCapacity;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEmpty", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isempty = true;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrRoom", type="integer", nullable=false)
     */
    private $nbrroom;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_Hotel", referencedColumnName="id_Hotel")
     * })
     */
    private $fkHotel;

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


}
