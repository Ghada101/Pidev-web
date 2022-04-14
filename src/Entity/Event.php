<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="fk_event_fk_venue", columns={"Venue_id"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="Event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="Event_title", type="string", length=50, nullable=false)
     */
    private $eventTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="EventDate", type="string", length=50, nullable=false)
     */
    private $eventdate;

    /**
     * @var string
     *
     * @ORM\Column(name="EventTime", type="string", length=50, nullable=false)
     */
    private $eventtime;

    /**
     * @var int
     *
     * @ORM\Column(name="Event_Duration", type="integer", nullable=false)
     */
    private $eventDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="EventCategory", type="string", length=50, nullable=false)
     */
    private $eventcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="Price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var \Venue
     *
     * @ORM\ManyToOne(targetEntity="Venue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Venue_id", referencedColumnName="Venue_id")
     * })
     */
    private $venue;

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function getEventTitle(): ?string
    {
        return $this->eventTitle;
    }

    public function setEventTitle(string $eventTitle): self
    {
        $this->eventTitle = $eventTitle;

        return $this;
    }

    public function getEventdate(): ?string
    {
        return $this->eventdate;
    }

    public function setEventdate(string $eventdate): self
    {
        $this->eventdate = $eventdate;

        return $this;
    }

    public function getEventtime(): ?string
    {
        return $this->eventtime;
    }

    public function setEventtime(string $eventtime): self
    {
        $this->eventtime = $eventtime;

        return $this;
    }

    public function getEventDuration(): ?int
    {
        return $this->eventDuration;
    }

    public function setEventDuration(int $eventDuration): self
    {
        $this->eventDuration = $eventDuration;

        return $this;
    }

    public function getEventcategory(): ?string
    {
        return $this->eventcategory;
    }

    public function setEventcategory(string $eventcategory): self
    {
        $this->eventcategory = $eventcategory;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    public function setVenue(?Venue $venue): self
    {
        $this->venue = $venue;

        return $this;
    }


}
