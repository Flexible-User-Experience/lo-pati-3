<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PositionTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MenuLevel2
 *
 * @category Entity
 * @package  AppBundle\Entity
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuLevel2Repository")
 */
class MenuLevel2 extends AbstractBase
{
    use NameTrait;
    use PositionTrait;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", options={"default"=0})
     */
    private $isList;

    /**
     * @var MenuLevel1
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MenuLevel1", inversedBy="menuLevel2items")
     */
    private $menuLevel1;

    /**
     * @var Page
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Page", mappedBy="menuLevel2")
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
     * @return boolean
     */
    public function getIsList()
    {
        return $this->isList;
    }

    /**
     * @param boolean $isList
     * 
     * @return MenuLevel1
     */
    public function setIsList($isList)
    {
        $this->isList = $isList;
        
        return $this;
    }

    /**
     * @return MenuLevel1
     */
    public function getMenuLevel1()
    {
        return $this->menuLevel1;
    }

    /**
     * @param MenuLevel1 $menuLevel1
     * 
     * @return MenuLevel2
     */
    public function setMenuLevel1($menuLevel1)
    {
        $this->menuLevel1 = $menuLevel1;
        
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
     * @return MenuLevel2
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }
}
