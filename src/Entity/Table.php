<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Table
 *
 * @ORM\Table(name="table")
 * @ORM\Entity
 */
class Table
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


}
