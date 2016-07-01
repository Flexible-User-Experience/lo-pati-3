<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Year trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
Trait YearTrait
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     * 
     * @return YearTrait
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }


}
