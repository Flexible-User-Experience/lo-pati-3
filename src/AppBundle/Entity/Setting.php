<?php

namespace AppBundle\Entity;


class Setting
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $timetable;

    /**
     * @var string
     */
    private $organizer;

    /**
     * @var string
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
