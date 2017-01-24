<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NameTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletters.
 *
 * @category Entity
 *
 * @author   Anton Serra <aserratorta@gmail.com>
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewslettersRepository")
 */
class Newsletters extends AbstractBase
{
    use NameTrait;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $newsletterDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $startSend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $finishSend;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $emailSubscribed;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $emailSendeds;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $test;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;

    /**
     * Methods.
     */

    /**
     * @return \DateTime
     */
    public function getNewsletterDate()
    {
        return $this->newsletterDate;
    }

    /**
     * @param \DateTime $newsletterDate
     *
     * @return Newsletters
     */
    public function setNewsletterDate($newsletterDate)
    {
        $this->newsletterDate = $newsletterDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartSend()
    {
        return $this->startSend;
    }

    /**
     * @param \DateTime $startSend
     *
     * @return Newsletters
     */
    public function setStartSend($startSend)
    {
        $this->startSend = $startSend;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFinishSend()
    {
        return $this->finishSend;
    }

    /**
     * @param \DateTime $finishSend
     *
     * @return Newsletters
     */
    public function setFinishSend($finishSend)
    {
        $this->finishSend = $finishSend;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Newsletters
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmailSubscribed()
    {
        return $this->emailSubscribed;
    }

    /**
     * @param int $emailSubscribed
     *
     * @return Newsletters
     */
    public function setEmailSubscribed($emailSubscribed)
    {
        $this->emailSubscribed = $emailSubscribed;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmailSendeds()
    {
        return $this->emailSendeds;
    }

    /**
     * @param int $emailSendeds
     *
     * @return Newsletters
     */
    public function setEmailSendeds($emailSendeds)
    {
        $this->emailSendeds = $emailSendeds;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * @param bool $test
     *
     * @return Newsletters
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return Newsletters
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
