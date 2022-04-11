<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likee
 *
 * @ORM\Table(name="likee", indexes={@ORM\Index(name="fk_commentId", columns={"commentId"}), @ORM\Index(name="fk_iduser", columns={"userID"})})
 * @ORM\Entity
 */
class Likee
{
    /**
     * @var int
     *
     * @ORM\Column(name="likeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $likeid;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userID", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
     * @var \Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commentId", referencedColumnName="comment_Id")
     * })
     */
    private $commentid;

    public function getLikeid(): ?int
    {
        return $this->likeid;
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

    public function getCommentid(): ?Comment
    {
        return $this->commentid;
    }

    public function setCommentid(?Comment $commentid): self
    {
        $this->commentid = $commentid;

        return $this;
    }


}
