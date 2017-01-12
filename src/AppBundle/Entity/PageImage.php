<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\Image1Trait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PageImage
 *
 * @category Entity
 * @package  AppBundle\Entity
 * @author   Anton Serra <aserratorta@gmail.com>
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageImageRepository")
 */
class PageImage extends AbstractBase
{
    use Image1Trait;
    
    /**
     * @var Page
     *
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="pageImages")
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
     * PageImage constructor.
     */
    public function __construct()
    {
        $this->pageImages = new ArrayCollection();
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
     * @return $this
     */
    public function setPage(Page $page)
    {
        $this->page = $page;

        return $this;
    }
}
