<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostType
 *
 * @ORM\Table(name="post_type")
 * @ORM\Entity
 */
class PostType
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="price", type="boolean", nullable=false)
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opening_date", type="boolean", nullable=false)
     */
    private $openingDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="closing_date", type="boolean", nullable=false)
     */
    private $closingDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="result_date", type="boolean", nullable=false)
     */
    private $resultDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PostType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param boolean $price
     *
     * @return PostType
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return boolean
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set openingDate
     *
     * @param boolean $openingDate
     *
     * @return PostType
     */
    public function setOpeningDate($openingDate)
    {
        $this->openingDate = $openingDate;

        return $this;
    }

    /**
     * Get openingDate
     *
     * @return boolean
     */
    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    /**
     * Set closingDate
     *
     * @param boolean $closingDate
     *
     * @return PostType
     */
    public function setClosingDate($closingDate)
    {
        $this->closingDate = $closingDate;

        return $this;
    }

    /**
     * Get closingDate
     *
     * @return boolean
     */
    public function getClosingDate()
    {
        return $this->closingDate;
    }

    /**
     * Set resultDate
     *
     * @param boolean $resultDate
     *
     * @return PostType
     */
    public function setResultDate($resultDate)
    {
        $this->resultDate = $resultDate;

        return $this;
    }

    /**
     * Get resultDate
     *
     * @return boolean
     */
    public function getResultDate()
    {
        return $this->resultDate;
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
