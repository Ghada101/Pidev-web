<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservetable
 *
 * @ORM\Table(name="reservetable", indexes={@ORM\Index(name="fk_Table", columns={"id_Table"}), @ORM\Index(name="userfk", columns={"idUser"}), @ORM\Index(name="fkCategory", columns={"IdCategory"}), @ORM\Index(name="fk_Restau", columns={"id_Restau"})})
 * @ORM\Entity
 */
class Reservetable
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReserve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreserve;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Restau", referencedColumnName="id_Restau")
     * })
     */
    private $idRestau;

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
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCategory", referencedColumnName="IdCategory")
     * })
     */
    private $idcategory;

    /**
     * @var \Tablee
     *
     * @ORM\ManyToOne(targetEntity="Tablee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Table", referencedColumnName="id_Table")
     * })
     */
    private $idTable;


}
