<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCategory
 *
 * @ORM\Table(name="user_category", indexes={@ORM\Index(name="fk_user_category_category_idx", columns={"fk_category_id"}), @ORM\Index(name="fk_user_category_user1_idx", columns={"fk_user_id"})})
 * @ORM\Entity
 */
class UserCategory
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
     * @ORM\Column(name="fk_user_id", type="integer", nullable=false)
     */
    private $fkUserId;

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
     * @return UserCategory
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
     * Set fkUserId
     *
     * @param integer $fkUserId
     *
     * @return UserCategory
     */
    public function setFkUserId($fkUserId)
    {
        $this->fkUserId = $fkUserId;

        return $this;
    }

    /**
     * Get fkUserId
     *
     * @return integer
     */
    public function getFkUserId()
    {
        return $this->fkUserId;
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
