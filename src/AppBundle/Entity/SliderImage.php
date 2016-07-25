<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\LinkTrait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PositionTrait;
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
    use PositionTrait;
    use LinkTrait;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altName;
    
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
