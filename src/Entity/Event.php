<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank
     * @Assert\Regex("/^\w+/")
     * @Assert\Length(min=5 ,max=20, minMessage="too short title" , maxMessage="too long title")
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @Assert\GreaterThan("today")
     * @ORM\Column(type="datetime")
     */
    private $EventDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EventTime;

    /**
     * @Assert\NotNull
     * @ORM\Column(type="integer")
     */
    private $Duration;

    /**
     * @Assert\NotBlank
     * @Assert\Length(min=5 ,max=20, minMessage="too short title" , maxMessage="too long title")
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @Assert\NotBlank
     * @Assert\Length(min=20,minMessage="too short description" )
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @Assert\NotNull
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Venue::class, inversedBy="events")
     * @ORM\JoinColumn(nullable=false)
     */
    private $venue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->EventDate;
    }

    public function setEventDate(\DateTimeInterface $EventDate): self
    {
        $this->EventDate = $EventDate;

        return $this;
    }

    public function getEventTime(): ?string
    {
        return $this->EventTime;
    }

    public function setEventTime(string $EventTime): self
    {
        $this->EventTime = $EventTime;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->Duration;
    }

    public function setDuration(int $Duration): self
    {
        $this->Duration = $Duration;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
