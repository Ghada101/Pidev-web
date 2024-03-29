<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentRepository;
use Vangrg\ProfanityBundle\Validator\Constraints as ProfanityAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="fk_subject_Id", columns={"subject_Id"}), @ORM\Index(name="fk_useridcom", columns={"User_Id"})})
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="comment_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"comment_read"})
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_description", type="text", length=65535, nullable=false)
     * @Assert\NotBlank(message="comment blank")
     * @ProfanityAssert\ProfanityCheck
     * @Groups({"comment_read"})
     */
    private $commentDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="date", nullable=false)
     * @Groups({"comment_read"})
     */
    private $commentDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nblike", type="integer", nullable=true)
     * @Groups({"comment_read"})
     */
    private $nblike = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nbdislike", type="integer", nullable=false)
     * @Groups({"comment_read"})
     */
    private $nbdislike = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_image", type="string", length=255, nullable=true)
     * @Groups({"comment_read"})
     */
    private $commentImage;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_Id", referencedColumnName="id")
     * })
     * @Groups({"comment_read"})
     */
    private $user;

    /**
     * @var \Subject
     *
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subject_Id", referencedColumnName="subject_Id")
     * })
     * @Groups({"comment_read"})
     */
    private $subject;

    public function getCommentId(): ?int
    {
        return $this->commentId;
    }

    public function getCommentDescription(): ?string
    {
        return $this->commentDescription;
    }

    public function setCommentDescription(string $commentDescription): self
    {
        $this->commentDescription = $commentDescription;

        return $this;
    }

    public function getCommentDate(): ?\DateTimeInterface
    {
        return $this->commentDate;
    }

    public function setCommentDate(\DateTimeInterface $commentDate): self
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    public function getNblike(): ?int
    {
        return $this->nblike;
    }

    public function setNblike(?int $nblike): self
    {
        $this->nblike = $nblike;

        return $this;
    }

    public function getNbdislike(): ?int
    {
        return $this->nbdislike;
    }

    public function setNbdislike(int $nbdislike): self
    {
        $this->nbdislike = $nbdislike;

        return $this;
    }

    public function getCommentImage(): ?string
    {
        return $this->commentImage;
    }

    public function setCommentImage(?string $commentImage): self
    {
        $this->commentImage = $commentImage;

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

    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(?Subject $subject): self
    {
        $this->subject = $subject;

        return $this;
    }


}
