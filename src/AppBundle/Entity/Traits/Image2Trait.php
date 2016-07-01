<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image2 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
Trait Image2Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image2;

    /**
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param string $image2
     * 
     * @return Image2Trait
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
        
        return $this;
    }
}
