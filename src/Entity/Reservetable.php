<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
 use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Reservetable
 *
 * @ORM\Table(name="reservetable", indexes={@ORM\Index(name="fk_Restau", columns={"id_Restau"}), @ORM\Index(name="fk_Table", columns={"id_Table"}), @ORM\Index(name="userfk", columns={"idUser"}), @ORM\Index(name="fkCategory", columns={"IdCategory"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReservetableRepository")
 * @ORM\Entity
 */
class Reservetable
{
    /**
     * @var date
     *
     * @ORM\Column(name="StartDate", type="date", nullable=false)
     * @Assert\NotBlank
     * @Assert\GreaterThan("today")
     * @Groups("post:read")
     

     */
    private $startdate;

    /**
     * @var date
     *
     * @ORM\Column(name="endDate", type="date", nullable=false)
     * @Assert\NotBlank
     * @Groups("post:read")
     * @Assert\GreaterThanOrEqual(propertyPath="startdate", message="End booking date should be greater than start date")
     * @Assert\GreaterThan("today")
     

     */
    private $enddate;
    /**
     * @var int
     *
     * @ORM\Column(name="idReserve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreserve;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Restau", referencedColumnName="id_Restau")
     * })
     */
    private $idRestau;

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
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCategory", referencedColumnName="IdCategory")
     * })
     */
    private $idcategory;

    /**
     * @var \Tablee
     *
     * @ORM\ManyToOne(targetEntity="Tablee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Table", referencedColumnName="id_Table")
     * })
     */
    private $idTable;
    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    public function setStartdate(\DateTimeInterface $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    public function setEnddate(\DateTimeInterface $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
        
    }
    public function getIdreserve(): ?int
    {
        return $this->idreserve;
    }
    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

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
    public function getIdcategory(): ?Category
    {
        return $this->idcategory;
    }
    public function setIdcategory(?Category $idcategory): self
    {
        $this->idcategory = $idcategory;

        return $this;
    }
    public function getIdTable(): ?Tablee
    {
        return $this->idTable;
    }
    public function setIdTable(?Tablee $idTable): self
    {
        $this->idTable = $idTable;

        return $this;
    }



}
