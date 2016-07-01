<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Document1Trait;
use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\Image2Trait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\SummaryTrait;
use AppBundle\Entity\Traits\YearTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Artist
 * 
 * @category Entity
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtistRepository")
 */
class Artist extends AbstractBase
{
    use NameTrait;
    use YearTrait;
    use SummaryTrait;
    use DescriptionTrait;
    use Image1Trait;
    use Image2Trait;
    use Document1Trait;

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
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image3;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image4;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image5;

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

    /**
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param string $image3
     * 
     * @return Artist
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * @param string $image4
     * 
     * @return Artist
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * @param string $image5
     * 
     * @return Artist
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;
        
        return $this;
    }
}
