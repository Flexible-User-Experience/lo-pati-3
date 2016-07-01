<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Document1Trait;
use AppBundle\Entity\Traits\Image1Trait;
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
