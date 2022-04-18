<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="fk_subject_Id", columns={"subject_Id"}), @ORM\Index(name="fk_useridcom", columns={"User_Id"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="comment_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_description", type="text", length=65535, nullable=false)
     */
    private $commentDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="date", nullable=false)
     */
    private $commentDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nblike", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nblike = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="nbdislike", type="integer", nullable=false)
     */
    private $nbdislike;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_image", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $commentImage = 'NULL';

    /**
     * @var \Subject
     *
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subject_Id", referencedColumnName="subject_Id")
     * })
     */
    private $subject;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_Id", referencedColumnName="id")
     * })
     */
    private $user;


}
