<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\LinkTrait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PositionTrait;
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
    use DescriptionTrait;
    use Image1Trait;
    use Image2Trait;
    
    private $city;
    private $category;
}
