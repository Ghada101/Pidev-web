<?php

namespace APP\Entity;

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


}
