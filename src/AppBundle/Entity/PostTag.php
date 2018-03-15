<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostTag
 *
 * @ORM\Table(name="post_tag", indexes={@ORM\Index(name="fk_post_tag_post1_idx", columns={"fk_post_id"}), @ORM\Index(name="fk_tag_id", columns={"fk_tag_id"})})
 * @ORM\Entity
 */
class PostTag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_tag_id", type="integer", nullable=false)
     */
    private $fkTagId;

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
     * Set fkTagId
     *
     * @param integer $fkTagId
     *
     * @return PostTag
     */
    public function setFkTagId($fkTagId)
    {
        $this->fkTagId = $fkTagId;

        return $this;
    }

    /**
     * Get fkTagId
     *
     * @return integer
     */
    public function getFkTagId()
    {
        return $this->fkTagId;
    }

    /**
     * Set fkPostId
     *
     * @param integer $fkPostId
     *
     * @return PostTag
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
