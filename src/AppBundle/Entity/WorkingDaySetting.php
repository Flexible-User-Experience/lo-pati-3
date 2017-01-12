<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NameTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class WorkingDaySetting
 * 
 * @category Entity
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkingDaySettingRepository")
 */
class WorkingDaySetting extends AbstractBase
{
    use NameTrait;
    
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $weekdayNumber;

    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * @return int
     */
    public function getWeekdayNumber()
    {
        return $this->weekdayNumber;
    }

    /**
     * @param int $weekdayNumber
     *
     * @return WorkingDaySetting
     */
    public function setWeekdayNumber($weekdayNumber)
    {
        $this->weekdayNumber = $weekdayNumber;

        return $this;
    }
}
