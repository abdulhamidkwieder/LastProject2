<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMedia
 *
 * @ORM\Table(name="user_media", indexes={@ORM\Index(name="fk_user_media_user1_idx", columns={"fk_user_id"})})
 * @ORM\Entity
 */
class UserMedia
{
    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=false)
     */
    private $media;

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
     * Set media
     *
     * @param string $media
     *
     * @return UserMedia
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     *
     * @return UserMedia
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
