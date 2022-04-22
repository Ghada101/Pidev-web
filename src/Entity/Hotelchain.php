<?php

namespace APP\Entity;

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


}
