<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject", indexes={@ORM\Index(name="fk_useridsub", columns={"User_Id"}), @ORM\Index(name="fk_topic_Id", columns={"topic_Id"})})
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
     * @ORM\Column(name="subject_image", type="string", length=255, nullable=true)
     */
    private $subjectImage;

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

    public function getSubjectId(): ?int
    {
        return $this->subjectId;
    }

    public function getSubjectTitle(): ?string
    {
        return $this->subjectTitle;
    }

    public function setSubjectTitle(string $subjectTitle): self
    {
        $this->subjectTitle = $subjectTitle;

        return $this;
    }

    public function getSubjectDescription(): ?string
    {
        return $this->subjectDescription;
    }

    public function setSubjectDescription(string $subjectDescription): self
    {
        $this->subjectDescription = $subjectDescription;

        return $this;
    }

    public function getSubjectNumComments(): ?int
    {
        return $this->subjectNumComments;
    }

    public function setSubjectNumComments(int $subjectNumComments): self
    {
        $this->subjectNumComments = $subjectNumComments;

        return $this;
    }

    public function getSubjectDate(): ?\DateTimeInterface
    {
        return $this->subjectDate;
    }

    public function setSubjectDate(\DateTimeInterface $subjectDate): self
    {
        $this->subjectDate = $subjectDate;

        return $this;
    }

    public function getSubjectImage(): ?string
    {
        return $this->subjectImage;
    }

    public function setSubjectImage(?string $subjectImage): self
    {
        $this->subjectImage = $subjectImage;

        return $this;
    }

    public function getAcceptsubject(): ?int
    {
        return $this->acceptsubject;
    }

    public function setAcceptsubject(int $acceptsubject): self
    {
        $this->acceptsubject = $acceptsubject;

        return $this;
    }

    public function getHidesubject(): ?int
    {
        return $this->hidesubject;
    }

    public function setHidesubject(int $hidesubject): self
    {
        $this->hidesubject = $hidesubject;

        return $this;
    }

    public function getTopic(): ?Topic
    {
        return $this->topic;
    }

    public function setTopic(?Topic $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
