<?php

namespace APP\Entity;

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
     * @ORM\Column(name="hotel_Img", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $hotelImg = 'NULL';

    /**
     * @var \Hotelchain
     *
     * @ORM\ManyToOne(targetEntity="Hotelchain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_HotelChain", referencedColumnName="id_HotelChain")
     * })
     */
    private $fkHotelchain;


}
