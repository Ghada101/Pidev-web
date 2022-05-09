<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
* @ORM\Table(name="`category`")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdCategory", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategory;

    /**
     * @var string
     *@Assert\NotBlank
     * @ORM\Column(name="name_Category", type="string", length=255, nullable=false)
     * @Assert\Length(min="4" , minMessage="Name must contain at lest 4 characters.")
     */
    private $nameCategory;

    /**
     * @var string
     *@Assert\NotBlank
     * @ORM\Column(name="description_Category", type="string", length=255, nullable=false)
     */
    private $descriptionCategory;

    public function getIdcategory(): ?int
    {
        return $this->idcategory;
    }

    public function getNameCategory(): ?string
    {
        return $this->nameCategory;
    }

    public function setNameCategory(string $nameCategory): self
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    public function getDescriptionCategory(): ?string
    {
        return $this->descriptionCategory;
    }

    public function setDescriptionCategory(string $descriptionCategory): self
    {
        $this->descriptionCategory = $descriptionCategory;

        return $this;
    }

    public function __toString()
    {
        return $this->getIdcategory();
        return $this->getNameCategory();
        return $this->getDescriptionCategory();
       
      

}
}
