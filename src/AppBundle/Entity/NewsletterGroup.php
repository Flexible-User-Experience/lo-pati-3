<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NameTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class NewsletterGroup.
 *
 * @category Entity
 *
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 *
 * @ORM\table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewslettersRepository")
 */
class NewsletterGroup extends AbstractBase
{
    use NameTrait;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\NewsletterUsers", mappedBy="groups")
     */
    private $users;

    /**
     * Methods.
     */

    /**
     * NewsletterGroup constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param ArrayCollection $users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Add NewsletterUsers.
     *
     * @param NewsletterUsers $user
     *
     * @return $this
     */
    public function addUser(NewsletterUsers $user)
    {
        $user->addGroup($this);
//        $this->users[] = $user;
        $this->users->add($user);

        return $this;
    }

    /**
     * Remove NewsletterUsers.
     *
     * @param NewsletterUsers $user
     *
     * @return $this
     */
    public function removeUser(NewsletterUsers $user)
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
