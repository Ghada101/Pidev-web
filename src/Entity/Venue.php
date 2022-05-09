<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venue
 *
 * @ORM\Table(name="venue")
 * @ORM\Entity
 */
class Venue
{
    /**
     * @var string
     *
     * @ORM\Column(name="Venue_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $venueId;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=false)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="ContactNumber", type="integer", nullable=false)
     */
    private $contactnumber;


}
