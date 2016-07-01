<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\Image2Trait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PositionTrait;
use AppBundle\Entity\Traits\YearTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Archive
 * 
 * @category Entity
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArchiveRepository")
 */
class Archive extends AbstractBase
{
    use YearTrait;
    use Image1Trait;
    use Image2Trait;
}
