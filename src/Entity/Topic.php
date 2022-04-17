<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topic
 *
 * @ORM\Table(name="topic", indexes={@ORM\Index(name="fk_useridforum", columns={"User_Id"})})
 * @ORM\Entity
 */
class Topic
{
    /**
     * @var int
     *
     * @ORM\Column(name="topic_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $topicId;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_title", type="string", length=255, nullable=false)
     */
    private $topicTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_description", type="string", length=255, nullable=false)
     */
    private $topicDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_num_subjects", type="integer", nullable=false)
     */
    private $topicNumSubjects;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topic_date", type="date", nullable=false)
     */
    private $topicDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accepttopic", type="integer", nullable=true)
     */
    private $accepttopic = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="hidetopic", type="integer", nullable=true)
     */
    private $hidetopic = '0';

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
