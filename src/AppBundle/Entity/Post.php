<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="fk_post_user1_idx", columns={"fk_user_id"}), @ORM\Index(name="fk_post_post_type1_idx", columns={"fk_post_type_id"})})
 * @ORM\Entity
 */
class Post
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=55, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_price", type="integer", nullable=true)
     */
    private $minPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_price", type="integer", nullable=true)
     */
    private $maxPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opening_date", type="date", nullable=true)
     */
    private $openingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closing_date", type="date", nullable=true)
     */
    private $closingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="result_date", type="date", nullable=true)
     */
    private $resultDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_user_id", type="integer", nullable=false)
     */
    private $fkUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_post_type_id", type="integer", nullable=false)
     */
    private $fkPostTypeId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Post
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set minPrice
     *
     * @param integer $minPrice
     *
     * @return Post
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * Get minPrice
     *
     * @return integer
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Set maxPrice
     *
     * @param integer $maxPrice
     *
     * @return Post
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get maxPrice
     *
     * @return integer
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Post
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set openingDate
     *
     * @param \DateTime $openingDate
     *
     * @return Post
     */
    public function setOpeningDate($openingDate)
    {
        $this->openingDate = $openingDate;

        return $this;
    }

    /**
     * Get openingDate
     *
     * @return \DateTime
     */
    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    /**
     * Set closingDate
     *
     * @param \DateTime $closingDate
     *
     * @return Post
     */
    public function setClosingDate($closingDate)
    {
        $this->closingDate = $closingDate;

        return $this;
    }

    /**
     * Get closingDate
     *
     * @return \DateTime
     */
    public function getClosingDate()
    {
        return $this->closingDate;
    }

    /**
     * Set resultDate
     *
     * @param \DateTime $resultDate
     *
     * @return Post
     */
    public function setResultDate($resultDate)
    {
        $this->resultDate = $resultDate;

        return $this;
    }

    /**
     * Get resultDate
     *
     * @return \DateTime
     */
    public function getResultDate()
    {
        return $this->resultDate;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Post
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     *
     * @return Post
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
     * Set fkPostTypeId
     *
     * @param integer $fkPostTypeId
     *
     * @return Post
     */
    public function setFkPostTypeId($fkPostTypeId)
    {
        $this->fkPostTypeId = $fkPostTypeId;

        return $this;
    }

    /**
     * Get fkPostTypeId
     *
     * @return integer
     */
    public function getFkPostTypeId()
    {
        return $this->fkPostTypeId;
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
