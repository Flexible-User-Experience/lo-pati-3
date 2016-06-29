<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Setting
 * 
 * @category Entity
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 */
class Setting extends AbstractBase
{
    /**
     * @var string
     * @ORM\Column(type="text", length=4000, nullable=true)
     */
    private $address;

    /**
     * @var string
     * @ORM\Column(type="text", length=4000, nullable=true)
     */
    private $timetable;

    /**
     * @var string
     * @ORM\Column(type="text", length=4000, nullable=true)
     */
    private $organizer;

    /**
     * @var string
     * @ORM\Column(type="text", length=4000, nullable=true)
     */
    private $collaborator;

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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return Setting
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     * @param string $timetable
     *
     * @return Setting
     */
    public function setTimetable($timetable)
    {
        $this->timetable = $timetable;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param string $organizer
     *
     * @return Setting
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * @return string
     */
    public function getCollaborator()
    {
        return $this->collaborator;
    }

    /**
     * @param string $collaborator
     *
     * @return Setting
     */
    public function setCollaborator($collaborator)
    {
        $this->collaborator = $collaborator;

        return $this;
    }
}
