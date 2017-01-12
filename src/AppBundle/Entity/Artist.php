<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Document1Trait;
use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\Image2Trait;
use AppBundle\Entity\Traits\Image3Trait;
use AppBundle\Entity\Traits\Image4Trait;
use AppBundle\Entity\Traits\Image5Trait;
use AppBundle\Entity\Traits\LinkTrait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\SummaryTrait;
use AppBundle\Entity\Traits\YearTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Artist
 * 
 * @category Entity
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtistRepository")
 * @Vich\Uploadable
 */
class Artist extends AbstractBase
{
    use NameTrait;
    use YearTrait;
    use SummaryTrait;
    use DescriptionTrait;
    use Image1Trait;
    use Image2Trait;
    use Image3Trait;
    use Image4Trait;
    use Image5Trait;
    use Document1Trait;
    use LinkTrait;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="artist", fileNameProperty="image1Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image1File;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="artist", fileNameProperty="image2Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image2File;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="artist", fileNameProperty="image3Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image3File;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="artist", fileNameProperty="image4Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image4File;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="artist", fileNameProperty="image5Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image5File;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="document_artist", fileNameProperty="document1Name")
     */
    private $document1File;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city;
    
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $category;

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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * 
     * @return Artist
     */
    public function setCity($city)
    {
        $this->city = $city;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * 
     * @return Artist
     */
    public function setCategory($category)
    {
        $this->category = $category;
        
        return $this;
    }
}
