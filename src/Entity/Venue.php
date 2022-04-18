<?php

namespace App\Entity;

use App\Repository\VenueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=VenueRepository::class)
 */
class Venue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank
     *  @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, max=20, minMessage="too short title" , maxMessage="too long name")
     */
    private $venueName;

    /**
     * @Assert\NotBlank
     * @Assert\Length(min=5 ,max=20, minMessage="too short address" , maxMessage="too long name")
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @Assert\NotBlank
     * @Assert\Length(min=8,max=8, minMessage="invalid number" )
     * @ORM\Column(type="integer")
     */
    private $ContactNumber;

    /**
     * @ORM\OneToMany(targetEntity=Event::class, mappedBy="venue")
     */
    private $events;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVenueName(): ?string
    {
        return $this->venueName;
    }

    public function setVenueName(string $venueName): self
    {
        $this->venueName = $venueName;

        return $this;
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

    public function getContactNumber(): ?int
    {
        return $this->ContactNumber;
    }

    public function setContactNumber(int $ContactNumber): self
    {
        $this->ContactNumber = $ContactNumber;

        return $this;
    }

    /**
     * @return Collection<int, event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(event $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
            $event->setVenue($this);
        }

        return $this;
    }

    public function removeEvent(event $event): self
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getVenue() === $this) {
                $event->setVenue(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getVenueName();
        // TODO: Implement __toString() method.
    }


}
