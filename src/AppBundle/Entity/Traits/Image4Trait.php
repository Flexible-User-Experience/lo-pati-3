<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Image4 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
Trait Image4Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image4Name;

    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * Get image4File
     *
     * @return File|UploadedFile
     */
    public function getImage4File()
    {
        return $this->image4File;
    }

    /**
     * Set image4File
     *
     * @param File|UploadedFile $image4File
     *
     * @return $this
     */
    public function setImage4File(File $image4File = null)
    {
        $this->image4File = $image4File;
        if ($image4File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }
    
    /**
     * Get image4Name
     *
     * @return string
     */
    public function getImage4Name()
    {
        return $this->image4Name;
    }

    /**
     * @param string $image4Name
     * 
     * @return Image4Trait
     */
    public function setImage4Name($image4Name)
    {
        $this->image4Name = $image4Name;
        
        return $this;
    }
}
