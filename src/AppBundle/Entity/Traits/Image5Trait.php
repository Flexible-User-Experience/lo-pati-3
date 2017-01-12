<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Image5 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
Trait Image5Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image5Name;

    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * Get image5File
     *
     * @return File|UploadedFile
     */
    public function getImage5File()
    {
        return $this->image5File;
    }

    /**
     * Set image5File
     *
     * @param File|UploadedFile $image5File
     *
     * @return $this
     */
    public function setImage5File(File $image5File = null)
    {
        $this->image5File = $image5File;
        if ($image5File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }
    
    /**
     * Get image5Name
     *
     * @return string
     */
    public function getImage5Name()
    {
        return $this->image5Name;
    }

    /**
     * @param string $image5Name
     * 
     * @return Image5Trait
     */
    public function setImage5Name($image5Name)
    {
        $this->image5Name = $image5Name;
        
        return $this;
    }
}
