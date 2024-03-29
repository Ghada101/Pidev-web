<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * Room
 *
 * @ORM\Table(name="room", indexes={@ORM\Index(name="fk_Hotel", columns={"fk_Hotel"})})
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 * @ORM\Table(name="`room`")
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
     * @Groups ("post:read")
     */
    private $idRoom;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="room_Type", type="string", length=255, nullable=false)
     * @Groups ("post:read")
     */
    private $roomType;

    /**
     * @var string
     *
     * @ORM\Column(name="room_capacity", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Groups ("post:read")
     */
    private $roomCapacity;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEmpty", type="boolean", nullable=true, options={"default"="1"})
     * @Groups ("post:read")
     */
    private $isempty = true;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrRoom", type="integer", nullable=false)
     * @Assert\NotBlank
     * @Groups ("post:read")
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
     * @Groups ("post:read")
     */
    private $fkHotel;

    /**
     * @ORM\Column(type="float")
     * @Assert\Positive
     * @Assert\NotBlank(message="Price required")
     * @Groups ("post:read")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=false)
     * @Groups ("post:read")
     */
    private $image;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Book>
     */
    public function getBooks(): Collection
    {
        return $this->books;
    }

    public function addBook(Book $book): self
    {
        if (!$this->books->contains($book)) {
            $this->books[] = $book;
            $book->setIdRoom($this);
        }

        return $this;
    }

    public function removeBook(Book $book): self
    {
        if ($this->books->removeElement($book)) {
            // set the owning side to null (unless already changed)
            if ($book->getIdRoom() === $this) {
                $book->setIdRoom(null);
            }
        }

        return $this;
    }



}