<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant", indexes={@ORM\Index(name="fk_category", columns={"IdCategory"})})
 * @ORM\Entity(repositoryClass="App\Repository\RestaurantRepository")
* @ORM\Table(name="`restaurant`")
 */
class Restaurant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Restau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRestau;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(min="4" , minMessage="Name must contain at lest 4 characters.")
     * @ORM\Column(name="name_Restau", type="string", length=255, nullable=false)
     */
    private $nameRestau;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="description_Restau", type="string", length=255, nullable=false)
     */
    private $descriptionRestau;

    /**
     * @var string
     * @Assert\NotBlank
     * * @Assert\Length(min="8" , minMessage="Phone number must contain 8 digits")
     * @ORM\Column(name="phone_Restau", type="string", length=255, nullable=false)
     */
    private $phoneRestau;

    /**
     * @var string
     *@Assert\NotBlank
     * @ORM\Column(name="location_Restau", type="string", length=255, nullable=false)
     */
    private $locationRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurantImg", type="string", length=255, nullable=false)
     */
    private $restaurantimg;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCategory", referencedColumnName="IdCategory")
     * })
     */
    private $idcategory;

    public function getIdRestau(): ?int
    {
        return $this->idRestau;
    }

    public function getNameRestau(): ?string
    {
        return $this->nameRestau;
    }

    public function setNameRestau(string $nameRestau): self
    {
        $this->nameRestau = $nameRestau;

        return $this;
    }

    public function getDescriptionRestau(): ?string
    {
        return $this->descriptionRestau;
    }

    public function setDescriptionRestau(string $descriptionRestau): self
    {
        $this->descriptionRestau = $descriptionRestau;

        return $this;
    }

    public function getPhoneRestau(): ?string
    {
        return $this->phoneRestau;
    }

    public function setPhoneRestau(string $phoneRestau): self
    {
        $this->phoneRestau = $phoneRestau;

        return $this;
    }

    public function getLocationRestau(): ?string
    {
        return $this->locationRestau;
    }

    public function setLocationRestau(string $locationRestau): self
    {
        $this->locationRestau = $locationRestau;

        return $this;
    }

    public function getRestaurantimg(): ?string
    {
        return $this->restaurantimg;
    }

    public function setRestaurantimg(string $restaurantimg): self
    {
        $this->restaurantimg = $restaurantimg;

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
    public function __toString()
    {
        return $this->getIdRestau();
        return $this->getNameRestau();
        return $this->getDescriptionRestau();
        return $this->getPhoneRestau();
        return $this->getLocationRestau();
        return $this->getRestaurantimg();
        return $this->getIdcategory();
      

}
}