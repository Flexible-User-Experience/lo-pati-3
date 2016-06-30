<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\NameTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class SliderImage
 * 
 * @category Entity
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SliderImageRepository")
 */
class SliderImage extends AbstractBase
{
    use NameTrait;
    use DescriptionTrait;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altName;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * @return string
     */
    public function getAltName()
    {
        return $this->altName;
    }

    /**
     * @param string $altName
     *
     * @return SliderImage
     */
    public function setAltName($altName)
    {
        $this->altName = $altName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     *
     * @return SliderImage
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param integer $position
     *
     * @return SliderImage
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return SliderImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
