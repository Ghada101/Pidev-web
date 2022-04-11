<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AgencyRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;



/**
 * Agency
 * @ORM\Table(name="agency")
 * @ORM\Entity(repositoryClass=AgencyRepository::class)
 * @Vich\Uploadable
 * @UniqueEntity("nameagency")
 * @UniqueEntity("agencyphonenumber")
 */
class Agency
{
    /**
     * @var int
     * @ORM\Column(name="Id_Agency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgency;

    /**
     * @var string
     *
     * @ORM\Column(name="nameAgency", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="name agency required")
     */
    private $nameagency;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyPhoneNumber", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Phone number required")
     * @Assert\Regex("/^[0-9]{8}$/", message="Phone number must be 8 digits")
     */
    private $agencyphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyLocation", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Location required")
     */
    private $agencylocation;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyDescription", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Description required")

     */
    private $agencydescription;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfCars", type="integer", nullable=false)
     * @Assert\NotBlank(message=" number of cars required")

     */
    private $numberofcars;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfAvailableCars", type="integer", nullable=false)
     * @Assert\NotBlank(message=" number of available cars required")
     * @Assert\LessThanOrEqual(propertyPath="numberofcars", message="Number of available cars must be less than or equal to number of cars")
     */
    private $numberofavailablecars;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageAgency", type="string", length=255, nullable=true)
     */
    private $imageagency;


    /**
     * @Vich\UploadableField(mapping="Images", fileNameProperty="imageagency")
     * @var File
     */
    private $imageFile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrLike", type="integer", nullable=true)
     */
    private $nbrlike = '0';

    public function getIdAgency(): ?int
    {
        return $this->idAgency;
    }

    public function getNameagency(): ?string
    {
        return $this->nameagency;
    }

    public function setNameagency(string $nameagency): self
    {
        $this->nameagency = $nameagency;

        return $this;
    }

    public function getAgencyphonenumber(): ?string
    {
        return $this->agencyphonenumber;
    }

    public function setAgencyphonenumber(string $agencyphonenumber): self
    {
        $this->agencyphonenumber = $agencyphonenumber;

        return $this;
    }

    public function getAgencylocation(): ?string
    {
        return $this->agencylocation;
    }

    public function setAgencylocation(string $agencylocation): self
    {
        $this->agencylocation = $agencylocation;

        return $this;
    }

    public function getAgencydescription(): ?string
    {
        return $this->agencydescription;
    }

    public function setAgencydescription(string $agencydescription): self
    {
        $this->agencydescription = $agencydescription;

        return $this;
    }

    public function getNumberofcars(): ?int
    {
        return $this->numberofcars;
    }

    public function setNumberofcars(int $numberofcars): self
    {
        $this->numberofcars = $numberofcars;

        return $this;
    }

    public function getNumberofavailablecars(): ?int
    {
        return $this->numberofavailablecars;
    }

    public function setNumberofavailablecars(int $numberofavailablecars): self
    {
        $this->numberofavailablecars = $numberofavailablecars;

        return $this;
    }

    public function getImageagency(): ?string
    {
        return $this->imageagency;
    }

    public function setImageagency(?string $imageagency): self
    {
        $this->imageagency = $imageagency;

        return $this;
    }

    public function getNbrlike(): ?int
    {
        return $this->nbrlike;
    }

    public function setNbrlike(?int $nbrlike): self
    {
        $this->nbrlike = $nbrlike;

        return $this;
    }

    public function setImageFile(File $imageagency = null)
    {
        $this->imageFile = $imageagency;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageagency) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this-> imageFile;
    }

    public function __toString()
    {
return $this->nameagency;
return $this->agencyphonenumber;
return $this->agencylocation;
return $this->agencydescription;
return $this->numberofcars;
return $this->numberofavailablecars;
return $this->imageagency;
return $this->nbrlike;
return $this->idAgency;
    }



}
