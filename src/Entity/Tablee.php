<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablee
 *
 * @ORM\Table(name="tablee", indexes={@ORM\Index(name="fkRestau", columns={"id_Restau"})})
 * @ORM\Entity
 */
class Tablee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Table", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTable;

    /**
     * @var string
     *
     * @ORM\Column(name="nbr_place", type="string", length=255, nullable=false)
     */
    private $nbrPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Restau", referencedColumnName="id_Restau")
     * })
     */
    private $idRestau;


}
