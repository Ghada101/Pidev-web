<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tablee
 *
 * @ORM\Table(name="tablee", indexes={@ORM\Index(name="fkRestau", columns={"id_Restau"})})
 * @ORM\Entity(repositoryClass="App\Repository\TableeRepository")
* @ORM\Table(name="`tablee`")
 */
class Tablee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Table", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTable;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="nbr_place", type="string", length=255, nullable=false)
     */
    private $nbrPlace;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Restau", referencedColumnName="id_Restau")
     * })
     */
    private $idRestau;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function getIdTable(): ?int
    {
        return $this->idTable;
    }

    public function getNbrPlace(): ?string
    {
        return $this->nbrPlace;
    }

    public function setNbrPlace(string $nbrPlace): self
    {
        $this->nbrPlace = $nbrPlace;

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

    public function getIdRestau(): ?Restaurant
    {
        return $this->idRestau;
    }

    public function setIdRestau(?Restaurant $idRestau): self
    {
        $this->idRestau = $idRestau;

        return $this;
    }
    public function __toString()
    {
        return $this->getIdTable();
        return $this->getNbrPlace();
        return $this->getDescription();
        return $this->getIdRestau();
       
      

}
/**
     * @return Collection<int, Book>
     */
    public function getreservation(): Collection
    {
        return $this->reservation;
    }
    public function addreservetable(Reservetable $reservetable): self
    {
        if (!$this->reservation->contains($reservetable)) {
            $this->reservation[] = $reservetable;
            $reservetable->setIdTable($this);
        }

        return $this;
    }
    public function removereservetable(Reservetable $reservetable): self
    {
        if ($this->reservation->removeElement($reservetable)) {
            // set the owning side to null (unless already changed)
            if ($reservetable->getIdTable() === $this) {
                $reservetable->setIdTable(null);
            }
        }

        return $this;
    }

}
