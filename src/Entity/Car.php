<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car", indexes={@ORM\Index(name="fk_Agency", columns={"fk_Agency"})})
 * @ORM\Entity
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Car", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NameCar", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $namecar = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="CarNumber", type="string", length=255, nullable=false)
     */
    private $carnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="CarColor", type="string", length=255, nullable=false)
     */
    private $carcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="CarBrand", type="string", length=255, nullable=false)
     */
    private $carbrand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CarImage", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $carimage = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="RentStatus", type="boolean", nullable=false)
     */
    private $rentstatus;

    /**
     * @var \Agency
     *
     * @ORM\ManyToOne(targetEntity="Agency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_Agency", referencedColumnName="Id_Agency")
     * })
     */
    private $fkAgency;


}
