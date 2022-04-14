<?php

namespace App\Entity;

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

    public function getTopicId(): ?int
    {
        return $this->topicId;
    }

    public function getTopicTitle(): ?string
    {
        return $this->topicTitle;
    }

    public function setTopicTitle(string $topicTitle): self
    {
        $this->topicTitle = $topicTitle;

        return $this;
    }

    public function getTopicDescription(): ?string
    {
        return $this->topicDescription;
    }

    public function setTopicDescription(string $topicDescription): self
    {
        $this->topicDescription = $topicDescription;

        return $this;
    }

    public function getTopicNumSubjects(): ?int
    {
        return $this->topicNumSubjects;
    }

    public function setTopicNumSubjects(int $topicNumSubjects): self
    {
        $this->topicNumSubjects = $topicNumSubjects;

        return $this;
    }

    public function getTopicDate(): ?\DateTimeInterface
    {
        return $this->topicDate;
    }

    public function setTopicDate(\DateTimeInterface $topicDate): self
    {
        $this->topicDate = $topicDate;

        return $this;
    }

    public function getAccepttopic(): ?int
    {
        return $this->accepttopic;
    }

    public function setAccepttopic(?int $accepttopic): self
    {
        $this->accepttopic = $accepttopic;

        return $this;
    }

    public function getHidetopic(): ?int
    {
        return $this->hidetopic;
    }

    public function setHidetopic(?int $hidetopic): self
    {
        $this->hidetopic = $hidetopic;

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
