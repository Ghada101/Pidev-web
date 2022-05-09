<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agency
 *
 * @ORM\Table(name="agency")
 * @ORM\Entity
 */
class Agency
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Agency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgency;

    /**
     * @var string
     *
     * @ORM\Column(name="nameAgency", type="string", length=255, nullable=false)
     */
    private $nameagency;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyPhoneNumber", type="string", length=255, nullable=false)
     */
    private $agencyphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyLocation", type="string", length=255, nullable=false)
     */
    private $agencylocation;

    /**
     * @var string
     *
     * @ORM\Column(name="agencyDescription", type="string", length=255, nullable=false)
     */
    private $agencydescription;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfCars", type="integer", nullable=false)
     */
    private $numberofcars;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfAvailableCars", type="integer", nullable=false)
     */
    private $numberofavailablecars;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageAgency", type="string", length=255, nullable=true)
     */
    private $imageagency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrLike", type="integer", nullable=true)
     */
    private $nbrlike;


}
