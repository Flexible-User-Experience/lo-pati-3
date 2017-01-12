<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Image3 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
Trait Image3Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image3Name;

    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * Get image3File
     *
     * @return File|UploadedFile
     */
    public function getImage3File()
    {
        return $this->image3File;
    }

    /**
     * Set image3File
     *
     * @param File|UploadedFile $image3File
     *
     * @return $this
     */
    public function setImage3File(File $image3File = null)
    {
        $this->image3File = $image3File;
        if ($image3File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }
    
    /**
     * Get image3Name
     *
     * @return string
     */
    public function getImage3Name()
    {
        return $this->image3Name;
    }

    /**
     * @param string $image3Name
     * 
     * @return Image3Trait
     */
    public function setImage3Name($image3Name)
    {
        $this->image3Name = $image3Name;
        
        return $this;
    }
}
