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
    private $image1Name;

    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * @return File|UploadedFile
     */
    public function getImage1File()
    {
        return $this->image1File;
    }

    /**
     * @param File|UploadedFile $image1File
     *
     * @return $this
     */
    public function setImage1File(File $image1File = null)
    {
        $this->image1File = $image1File;
        if ($image1File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }
    
    /**
     * @return string
     */
    public function getImage1Name()
    {
        return $this->image1Name;
    }

    /**
     * @param string $image1Name
     * 
     * @return Image1Trait
     */
    public function setImage1Name($image1Name)
    {
        $this->image1Name = $image1Name;
        
        return $this;
    }
}
