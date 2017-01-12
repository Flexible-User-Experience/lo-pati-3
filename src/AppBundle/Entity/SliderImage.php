<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\LinkTrait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PositionTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SliderImage
 * 
 * @category Entity
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SliderImageRepository")
 * @Vich\Uploadable
 */
class SliderImage extends AbstractBase
{
    use Image1Trait;
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
     * @var File
     *
     * @Vich\UploadableField(mapping="slider", fileNameProperty="image1Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image1File;

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
}
