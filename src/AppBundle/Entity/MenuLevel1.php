<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PositionTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MenuLevel1
 *
 * @category Entity
 * @package  AppBundle\Entity
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuLevel1Repository")
 */
class MenuLevel1 extends AbstractBase
{
    use NameTrait;
    use PositionTrait;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", options={"default"=0})
     */
    private $isArchive;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\MenuLevel2", mappedBy="menuLevel1")
     */
    private $menuLevel2items;

    /**
     * @var Page
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Page", mappedBy="menuLevel1")
     */
    private $page;
    
    /**
     *
     *
     * Methods
     *
     *
     */

    /**
     * MenuLevel1 constructor.
     */
    public function __construct()
    {
        $this->menuLevel2items = new ArrayCollection();
    }

    /**
     * @return boolean
     */
    public function getIsArchive()
    {
        return $this->isArchive;
    }

    /**
     * @param boolean $isArchive
     * 
     * @return MenuLevel1
     */
    public function setIsArchive($isArchive)
    {
        $this->isArchive = $isArchive;
        
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getMenuLevel2items()
    {
        return $this->menuLevel2items;
    }

    /**
     * @param ArrayCollection $menuLevel2items
     * 
     * @return MenuLevel1
     */
    public function setMenuLevel2items($menuLevel2items)
    {
        $this->menuLevel2items = $menuLevel2items;
        
        return $this;
    }

    /**
     * @param MenuLevel2 $menuLevel2Item
     * 
     * @return $this
     */
    public function addMenuLevel2Item($menuLevel2Item)
    {
        $menuLevel2Item->setMenuLevel1($this);
        $this->menuLevel2items->add($menuLevel2Item);
        
        return $this;
    }

    /**
     * @param $menuLevel2Item
     * 
     * @return $this
     */
    public function removeMenuLevel2Item($menuLevel2Item)
    {
        $this->menuLevel2items->removeElement($menuLevel2Item);
        
        return $this;
    }

    /**
     * @return Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param Page $page
     *
     * @return MenuLevel1
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
}
