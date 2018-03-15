<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="fk_comment_post1_idx", columns={"fk_post_id"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="replied_comment_id", type="integer", nullable=false)
     */
    private $repliedCommentId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="sublevel", type="string", length=10, nullable=true)
     */
    private $sublevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_post_id", type="integer", nullable=false)
     */
    private $fkPostId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set repliedCommentId
     *
     * @param integer $repliedCommentId
     *
     * @return Comment
     */
    public function setRepliedCommentId($repliedCommentId)
    {
        $this->repliedCommentId = $repliedCommentId;

        return $this;
    }

    /**
     * Get repliedCommentId
     *
     * @return integer
     */
    public function getRepliedCommentId()
    {
        return $this->repliedCommentId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set sublevel
     *
     * @param string $sublevel
     *
     * @return Comment
     */
    public function setSublevel($sublevel)
    {
        $this->sublevel = $sublevel;

        return $this;
    }

    /**
     * Get sublevel
     *
     * @return string
     */
    public function getSublevel()
    {
        return $this->sublevel;
    }

    /**
     * Set fkPostId
     *
     * @param integer $fkPostId
     *
     * @return Comment
     */
    public function setFkPostId($fkPostId)
    {
        $this->fkPostId = $fkPostId;

        return $this;
    }

    /**
     * Get fkPostId
     *
     * @return integer
     */
    public function getFkPostId()
    {
        return $this->fkPostId;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
