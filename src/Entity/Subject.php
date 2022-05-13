<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SubjectRepository;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vangrg\ProfanityBundle\Validator\Constraints as ProfanityAssert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Subject
 *
 * @ORM\Table(name="subject", indexes={@ORM\Index(name="fk_topic_Id", columns={"topic_Id"}), @ORM\Index(name="fk_useridsub", columns={"User_Id"})})
 * @ORM\Entity(repositoryClass=SubjectRepository::class)
 * @Vich\Uploadable
 */
class Subject
{
    /**
     * @var int
     *
     * @ORM\Column(name="subject_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups ("subject_read")
     */
    private $subjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_title", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Title is required")
     * @ProfanityAssert\ProfanityCheck
     * @Groups ("subject_read")
     */
    private $subjectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_description", type="text", length=65535, nullable=false)
     * @Assert\NotBlank(message="Description is required")
     * @ProfanityAssert\ProfanityCheck
     * @Groups ("subject_read")
     */
    private $subjectDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="subject_num_comments", type="integer", nullable=false)
     * @Groups ("subject_read")
     */
    private $subjectNumComments;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="subject_date", type="date", nullable=false)
     * @Groups ("subject_read")
     */
    private $subjectDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject_image", type="string", length=255, nullable=true)
     * @Groups ("subject_read")
     */
    private $subjectImage;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="subject_image", fileNameProperty="subjectImage")
     *
     * @var File|null
     */
    private $imageFile;
    /**
     * @var int
     *
     * @ORM\Column(name="acceptsubject", type="integer", nullable=false)
     * @Groups ("subject_read")
     */
    private $acceptsubject = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="hidesubject", type="integer", nullable=false)
     * @Groups ("subject_read")
     */
    private $hidesubject = '0';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_Id", referencedColumnName="id")
     * })
     * @Groups ("subject_read")
     */
    private $user;

    /**
     * @var \Topic
     *
     * @ORM\ManyToOne(targetEntity="Topic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_Id", referencedColumnName="topic_Id")
     * })
     * @Groups ("subject_read")
     */
    private $topic;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     */
    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;
    }

 
}
