<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\Document1Trait;
use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\Image2Trait;
use AppBundle\Entity\Traits\NameTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Page
 *
 * @category Entity
 * @package  AppBundle\Entity
 * @author   Anton Serra <aserratorta@gmail.com>
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageRepository")
 */
class Page extends AbstractBase
{
    use NameTrait;
    use DescriptionTrait;
    use Image1Trait;
    use Image2Trait;
    use Document1Trait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $summary;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $front;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $publishDate;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $visibleDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expirationDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $realizationDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(type="text", length=4000, nullable=true)
     */
    private $links;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $share;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlVimeo;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlFlickr;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $largeFooterImage;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documentName2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PageImage", mappedBy="page")
     */
    private $pageImages;

    /**
     * @var MenuLevel1
     * 
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\MenuLevel1", inversedBy="page")
     */
    private $menuLevel1;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Page
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return Page
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isFront()
    {
        return $this->front;
    }

    /**
     * @param boolean $front
     *
     * @return Page
     */
    public function setFront($front)
    {
        $this->front = $front;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param \DateTime $publishDate
     *
     * @return Page
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isVisibleDate()
    {
        return $this->visibleDate;
    }

    /**
     * @param boolean $visibleDate
     *
     * @return Page
     */
    public function setVisibleDate($visibleDate)
    {
        $this->visibleDate = $visibleDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     *
     * @return Page
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRealizationDate()
    {
        return $this->realizationDate;
    }

    /**
     * @param string $realizationDate
     *
     * @return Page
     */
    public function setRealizationDate($realizationDate)
    {
        $this->realizationDate = $realizationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     *
     * @return Page
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param string $links
     *
     * @return Page
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShare()
    {
        return $this->share;
    }

    /**
     * @param boolean $share
     *
     * @return Page
     */
    public function setShare($share)
    {
        $this->share = $share;

        return $this;
    }

    /**
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param string $video
     *
     * @return Page
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlVimeo()
    {
        return $this->urlVimeo;
    }

    /**
     * @param string $urlVimeo
     *
     * @return Page
     */
    public function setUrlVimeo($urlVimeo)
    {
        $this->urlVimeo = $urlVimeo;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlFlickr()
    {
        return $this->urlFlickr;
    }

    /**
     * @param string $urlFlickr
     *
     * @return Page
     */
    public function setUrlFlickr($urlFlickr)
    {
        $this->urlFlickr = $urlFlickr;

        return $this;
    }

    /**
     * @return string
     */
    public function getLargeFooterImage()
    {
        return $this->largeFooterImage;
    }

    /**
     * @param string $largeFooterImage
     *
     * @return Page
     */
    public function setLargeFooterImage($largeFooterImage)
    {
        $this->largeFooterImage = $largeFooterImage;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentName2()
    {
        return $this->documentName2;
    }

    /**
     * @param string $documentName2
     *
     * @return Page
     */
    public function setDocumentName2($documentName2)
    {
        $this->documentName2 = $documentName2;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     *
     * @return Page
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     *
     * @return Page
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPageImages()
    {
        return $this->pageImages;
    }

    /**
     * @param ArrayCollection $pageImages
     *
     * @return Page
     */
    public function setPageImages(ArrayCollection $pageImages)
    {
        $this->pageImages = $pageImages;

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
     * @return Page
     */
    public function setMenuLevel1($menuLevel1)
    {
        $menuLevel1->setPage($this);
        $this->menuLevel1 = $menuLevel1;
        
        return $this;
    }
}
