<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencylove
 *
 * @ORM\Table(name="agencylove", indexes={@ORM\Index(name="fk_Agencyid", columns={"idAgency"}), @ORM\Index(name="fk_userid", columns={"idUser"})})
 * @ORM\Entity
 */
class Agencylove
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAgencyLove", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagencylove;

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


}
