<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
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


}
