<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencylove
 *
 * @ORM\Table(name="agencylove", indexes={@ORM\Index(name="fk_userid", columns={"idUser"}), @ORM\Index(name="fk_Agencyid", columns={"idAgency"})})
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

    public function getIdagencylove(): ?int
    {
        return $this->idagencylove;
    }

    public function getIdagency(): ?Agency
    {
        return $this->idagency;
    }

    public function setIdagency(?Agency $idagency): self
    {
        $this->idagency = $idagency;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
