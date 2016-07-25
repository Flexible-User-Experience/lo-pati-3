<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

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
    private $image2Name;

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
    public function getImage2File()
    {
        return $this->image2File;
    }

    /**
     * @param File|UploadedFile $image2File
     *
     * @return $this
     */
    public function setImage2File(File $image2File = null)
    {
        $this->image2File = $image2File;
        if ($image2File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }
    
    /**
     * @return string
     */
    public function getImage2Name()
    {
        return $this->image2Name;
    }

    /**
     * @param string $image2
     * 
     * @return Image2Trait
     */
    public function setImage2Name($image2Name)
    {
        $this->image2Name = $image2Name;
        
        return $this;
    }
}
