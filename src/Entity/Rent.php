<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rent
 *
 * @ORM\Table(name="rent", indexes={@ORM\Index(name="fk_User", columns={"idUser"}), @ORM\Index(name="fk_Car", columns={"idCar"}), @ORM\Index(name="Agency_fk", columns={"idAgency"})})
 * @ORM\Entity
 */
class Rent
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrent;

    /**
     * @var string
     *
     * @ORM\Column(name="StartDate", type="string", length=255, nullable=false)
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="EndDate", type="string", length=255, nullable=false)
     */
    private $enddate;

    /**
     * @var \Agency
     *
     * @ORM\ManyToOne(targetEntity="Agency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgency", referencedColumnName="Id_Agency")
     * })
     */
    private $idagency;

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
     * @var \Car
     *
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCar", referencedColumnName="id_Car")
     * })
     */
    private $idcar;


}
