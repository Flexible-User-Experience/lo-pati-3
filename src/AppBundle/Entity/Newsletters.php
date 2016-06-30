<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NameTrait;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Newsletters
 *
 * @category Entity
 * @package  AppBundle\Entity
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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $subscript;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sent;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $test;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;

    /**
     *
     *
     * Methods
     *
     *
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
    public function getSubscript()
    {
        return $this->subscript;
    }

    /**
     * @param int $subscript
     *
     * @return Newsletters
     */
    public function setSubscript($subscript)
    {
        $this->subscript = $subscript;

        return $this;
    }

    /**
     * @return int
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param int $sent
     *
     * @return Newsletters
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * @param boolean $test
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
