<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostCategory
 *
 * @ORM\Table(name="post_category", indexes={@ORM\Index(name="fk_user_category_category_idx", columns={"fk_category_id"}), @ORM\Index(name="fk_post_category_post1_idx", columns={"fk_post_id"})})
 * @ORM\Entity
 */
class PostCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_category_id", type="integer", nullable=false)
     */
    private $fkCategoryId;

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
     * Set fkCategoryId
     *
     * @param integer $fkCategoryId
     *
     * @return PostCategory
     */
    public function setFkCategoryId($fkCategoryId)
    {
        $this->fkCategoryId = $fkCategoryId;

        return $this;
    }

    /**
     * Get fkCategoryId
     *
     * @return integer
     */
    public function getFkCategoryId()
    {
        return $this->fkCategoryId;
    }

    /**
     * Set fkPostId
     *
     * @param integer $fkPostId
     *
     * @return PostCategory
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
