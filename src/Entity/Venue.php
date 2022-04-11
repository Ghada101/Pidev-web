<?php

namespace App\Entity;

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

    public function getVenueId(): ?string
    {
        return $this->venueId;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getContactnumber(): ?int
    {
        return $this->contactnumber;
    }

    public function setContactnumber(int $contactnumber): self
    {
        $this->contactnumber = $contactnumber;

        return $this;
    }


}
