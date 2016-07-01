<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Image1 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
Trait Image1Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image1;

    /**
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param string $image1
     * 
     * @return Image1Trait
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
        
        return $this;
    }
}
