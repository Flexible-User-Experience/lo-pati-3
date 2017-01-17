<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class NewsletterUsers
 *
 * @category Entity
 * @package  AppBundle\Entity
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 *
 * @ORM\table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewslettersRepository")
 *
 */
class NewsletterUsers extends AbstractBase
{

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=2)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $token;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fail;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return int
     */
    public function getFail()
    {
        return $this->fail;
    }

    /**
     * @param int $fail
     *
     * @return $this
     */
    public function setFail($fail)
    {
        $this->fail = $fail;

        return $this;
    }
}
