<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant")
 * @ORM\Entity
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
     *
     * @ORM\Column(name="name_Restau", type="string", length=255, nullable=false)
     */
    private $nameRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Restau", type="string", length=255, nullable=false)
     */
    private $descriptionRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_Restau", type="string", length=255, nullable=false)
     */
    private $phoneRestau;

    /**
     * @var string
     *
     * @ORM\Column(name="location_Restau", type="string", length=255, nullable=false)
     */
    private $locationRestau;

    /**
     * @var int
     *
     * @ORM\Column(name="IdCategory", type="integer", nullable=false)
     */
    private $idcategory;


}
