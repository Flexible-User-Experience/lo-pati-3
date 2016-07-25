<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Document1 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
Trait Document1Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $document1Name;

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
    public function getDocument1File()
    {
        return $this->document1File;
    }

    /**
     * @param File|UploadedFile $document1File
     *
     * @return $this
     */
    public function setDocument1File(File $document1File = null)
    {
        $this->document1File = $document1File;
        if ($document1File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }


    /**
     * @return string
     */
    public function getDocument1Name()
    {
        return $this->document1Name;
    }

    /**
     * @param string $document1Name
     * 
     * @return Document1Trait
     */
    public function setDocument1Name($document1Name)
    {
        $this->document1Name = $document1Name;
        
        return $this;
    }
}
