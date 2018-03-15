<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostMedia
 *
 * @ORM\Table(name="post_media", indexes={@ORM\Index(name="fk_post_id", columns={"fk_post_id"})})
 * @ORM\Entity
 */
class PostMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_post_id", type="integer", nullable=false)
     */
    private $fkPostId;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=false)
     */
    private $media;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set fkPostId
     *
     * @param integer $fkPostId
     *
     * @return PostMedia
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
     * Set media
     *
     * @param string $media
     *
     * @return PostMedia
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
