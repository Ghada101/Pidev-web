<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="book", indexes={@ORM\Index(name="fkHotelChain", columns={"idHotelChain"}), @ORM\Index(name="fkUser", columns={"idUser"}), @ORM\Index(name="fkHotel", columns={"idHotel"}), @ORM\Index(name="fkRoom", columns={"idRoom"})})
 * @ORM\Entity
 */
class Book
{
    /**
     * @var string
     *
     * @ORM\Column(name="StartDate", type="string", length=255, nullable=false)
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="endDate", type="string", length=255, nullable=false)
     */
    private $enddate;

    /**
     * @var int
     *
     * @ORM\Column(name="idBook", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbook;

    /**
     * @var \Hotelchain
     *
     * @ORM\ManyToOne(targetEntity="Hotelchain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHotelChain", referencedColumnName="id_HotelChain")
     * })
     */
    private $idhotelchain;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHotel", referencedColumnName="id_Hotel")
     * })
     */
    private $idhotel;

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRoom", referencedColumnName="id_Room")
     * })
     */
    private $idroom;

    public function getStartdate(): ?string
    {
        return $this->startdate;
    }

    public function setStartdate(string $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    public function setEnddate(string $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getIdbook(): ?int
    {
        return $this->idbook;
    }

    public function getIdhotelchain(): ?Hotelchain
    {
        return $this->idhotelchain;
    }

    public function setIdhotelchain(?Hotelchain $idhotelchain): self
    {
        $this->idhotelchain = $idhotelchain;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdhotel(): ?Hotel
    {
        return $this->idhotel;
    }

    public function setIdhotel(?Hotel $idhotel): self
    {
        $this->idhotel = $idhotel;

        return $this;
    }

    public function getIdroom(): ?Room
    {
        return $this->idroom;
    }

    public function setIdroom(?Room $idroom): self
    {
        $this->idroom = $idroom;

        return $this;
    }


}
