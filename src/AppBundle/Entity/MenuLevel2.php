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
     *
     *
     * Methods
     *
     *
     */

    /**
     * PageImage constructor.
     */
    public function __construct()
    {
        $this->pageImages = new ArrayCollection();
    }

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
}
