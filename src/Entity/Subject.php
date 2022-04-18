<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject", indexes={@ORM\Index(name="fk_topic_Id", columns={"topic_Id"}), @ORM\Index(name="fk_useridsub", columns={"User_Id"})})
 * @ORM\Entity
 */
class Subject
{
    /**
     * @var int
     *
     * @ORM\Column(name="subject_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_title", type="string", length=255, nullable=false)
     */
    private $subjectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_description", type="text", length=65535, nullable=false)
     */
    private $subjectDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="subject_num_comments", type="integer", nullable=false)
     */
    private $subjectNumComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="subject_date", type="date", nullable=false)
     */
    private $subjectDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject_image", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $subjectImage = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="acceptsubject", type="integer", nullable=false)
     */
    private $acceptsubject = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="hidesubject", type="integer", nullable=false)
     */
    private $hidesubject = '0';

    /**
     * @var \Topic
     *
     * @ORM\ManyToOne(targetEntity="Topic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_Id", referencedColumnName="topic_Id")
     * })
     */
    private $topic;

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
