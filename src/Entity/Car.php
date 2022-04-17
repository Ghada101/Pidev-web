<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CarRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Car
 * @ORM\Table(name="car", indexes={@ORM\Index(name="fk_Agency", columns={"fk_Agency"})})
 * @ORM\Entity(repositoryClass=CarRepository::class)
 * @Vich\Uploadable
 * @UniqueEntity ("carnumber")
 */
class Car
{
    /**
     * @var int
     * @ORM\Column(name="id_Car", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCar;

    /**
     * @var string|null
     * @ORM\Column(name="NameCar", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Car name required")
     */
    private $namecar;

    /**
     * @var string
     * @ORM\Column(name="CarNumber", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Car Number required")
     * @Assert\Regex("/^[0-9]{3}(tunis|TUNIS)[0-9]{4}/", message="Car name must be like 111 tunis|TUNIS 2222")
     */
    private $carnumber;

    /**
     * @var string
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     * @Assert\NotBlank ( message="Car description required" )
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="CarColor", type="string", length=255, nullable=false)
     * @Assert\NotBlank ( message="Car color required" )
     */
    private $carcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="CarBrand", type="string", length=255, nullable=false)
     * @Assert\NotBlank ( message="Car brand required" )
     */
    private $carbrand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CarImage", type="string", length=255, nullable=true)
     */
    private $carimage;

    /**
     * @Vich\UploadableField(mapping="Images", fileNameProperty="carimage")
     * @var File
     */
    private $imageFile;

    /**
     * @var bool
     *
     * @ORM\Column(name="RentStatus", type="boolean", nullable=false)
     */
    private $rentstatus = '0';

    /**
     * @var \Agency
     *
     * @ORM\ManyToOne(targetEntity="Agency")
     * @ORM\JoinColumns({@ORM\JoinColumn(name="fk_Agency", referencedColumnName="Id_Agency")})
     */
    private $fkAgency;

    public function getIdCar(): ?int
    {
        return $this->idCar;
    }

    public function getNamecar(): ?string
    {
        return $this->namecar;
    }

    public function setNamecar(?string $namecar): self
    {
        $this->namecar = $namecar;

        return $this;
    }

    public function getCarnumber(): ?string
    {
        return $this->carnumber;
    }

    public function setCarnumber(string $carnumber): self
    {
        $this->carnumber = $carnumber;

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

    public function getCarcolor(): ?string
    {
        return $this->carcolor;
    }

    public function setCarcolor(string $carcolor): self
    {
        $this->carcolor = $carcolor;

        return $this;
    }

    public function getCarbrand(): ?string
    {
        return $this->carbrand;
    }

    public function setCarbrand(string $carbrand): self
    {
        $this->carbrand = $carbrand;

        return $this;
    }

    public function getCarimage(): ?string
    {
        return $this->carimage;
    }

    public function setCarimage(?string $carimage): self
    {
        $this->carimage = $carimage;

        return $this;
    }

    public function getRentstatus(): ?bool
    {
        return $this->rentstatus;
    }

    public function setRentstatus(bool $rentstatus): self
    {
        $this->rentstatus = $rentstatus;

        return $this;
    }

    public function getFkAgency(): ?Agency
    {
        return $this->fkAgency;
    }

    public function setFkAgency(?Agency $fkAgency): self
    {
        $this->fkAgency = $fkAgency;

        return $this;
    }
    public function setImageFile(File $carimage = null)
    {
        $this->imageFile = $carimage;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($carimage) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function __toString()
    {
        return $this->getNamecar();
        return $this->getCarnumber();
        return $this->getDescription();
        return $this->getCarcolor();
        return $this->getCarbrand();
        return $this->getCarimage();
        return $this->getRentstatus();
        return $this->getFkAgency();
        return $this->getIdCar();
    }


}