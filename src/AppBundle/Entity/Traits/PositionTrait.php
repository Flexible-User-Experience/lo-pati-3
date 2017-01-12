<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
Trait PositionTrait
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param integer $position
     *
     * @return SliderImage
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
