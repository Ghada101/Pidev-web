<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
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
     *
     * @ORM\Column(name="name_Category", type="string", length=255, nullable=false)
     */
    private $nameCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Category", type="string", length=255, nullable=false)
     */
    private $descriptionCategory;

}
