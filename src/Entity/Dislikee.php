<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dislikee
 *
 * @ORM\Table(name="dislikee", indexes={@ORM\Index(name="fk_userrid", columns={"userID"}), @ORM\Index(name="fk_commentIdd", columns={"commentId"})})
 * @ORM\Entity
 */
class Dislikee
{
    /**
     * @var int
     *
     * @ORM\Column(name="dislikeId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dislikeid;

    /**
     * @var \Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commentId", referencedColumnName="comment_Id")
     * })
     */
    private $commentid;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userID", referencedColumnName="id")
     * })
     */
    private $userid;

    public function getDislikeid(): ?int
    {
        return $this->dislikeid;
    }

    public function getCommentid(): ?Comment
    {
        return $this->commentid;
    }

    public function setCommentid(?Comment $commentid): self
    {
        $this->commentid = $commentid;

        return $this;
    }

    public function getUserid(): ?User
    {
        return $this->userid;
    }

    public function setUserid(?User $userid): self
    {
        $this->userid = $userid;

        return $this;
    }


}
