<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
 use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Book
 *
 * @ORM\Table(name="book", indexes={@ORM\Index(name="fkUser", columns={"idUser"}), @ORM\Index(name="fkRoom", columns={"idRoom"}), @ORM\Index(name="fkHotelChain", columns={"idHotelChain"}), @ORM\Index(name="fkHotel", columns={"idHotel"})})
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 * @ORM\Table(name="`book`")
 */
class Book
{

    /**
     * @var date
     *
     * @ORM\Column(name="StartDate", type="date", nullable=false)
     * @Assert\NotBlank
     * @Assert\GreaterThan("today")
     * @Groups("post:read")
     

     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="endDate", type="date", nullable=false)
     * @Assert\NotBlank
     * @Groups("post:read")
     * @Assert\GreaterThanOrEqual(propertyPath="startdate", message="End booking date should be greater than start date")
     * @Assert\GreaterThan("today")


     */
    private $enddate;

    /**
     * @var int
     *
     * @ORM\Column(name="idBook", type="integer" )
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbook;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id" , nullable=true)
     * })
     */
    private $iduser;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHotel", referencedColumnName="id_Hotel", nullable=true)
     * })
     */
    private $idhotel;

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRoom", referencedColumnName="id_Room" )
     * })
     */
    private $idroom;

    /**
     * @var \Hotelchain
     *
     * @ORM\ManyToOne(targetEntity="Hotelchain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHotelChain", referencedColumnName="id_HotelChain" , nullable=true)
     * })
     */
    private $idhotelchain;

    
    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    public function setStartdate(\DateTimeInterface $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    public function setEnddate(\DateTimeInterface $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getIdbook(): ?int
    {
        return $this->idbook;
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

    public function getIdhotelchain(): ?Hotelchain
    {
        return $this->idhotelchain;
    }

    public function setIdhotelchain(?Hotelchain $idhotelchain): self
    {
        $this->idhotelchain = $idhotelchain;

        return $this;
    }

    


}
