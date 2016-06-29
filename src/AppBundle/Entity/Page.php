<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DescriptionTrait;
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
    private $smallImageName1;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $largeImageName;

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
    private $documentName1;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documentTitle1;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documentName2;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documentTitle2;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $smallImageName2;

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
    public function getSmallImageName1()
    {
        return $this->smallImageName1;
    }

    /**
     * @param string $smallImageName1
     *
     * @return Page
     */
    public function setSmallImageName1($smallImageName1)
    {
        $this->smallImageName1 = $smallImageName1;

        return $this;
    }

    /**
     * @return string
     */
    public function getLargeImageName()
    {
        return $this->largeImageName;
    }

    /**
     * @param string $largeImageName
     *
     * @return Page
     */
    public function setLargeImageName($largeImageName)
    {
        $this->largeImageName = $largeImageName;

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
    public function getDocumentName1()
    {
        return $this->documentName1;
    }

    /**
     * @param string $documentName1
     *
     * @return Page
     */
    public function setDocumentName1($documentName1)
    {
        $this->documentName1 = $documentName1;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentTitle1()
    {
        return $this->documentTitle1;
    }

    /**
     * @param string $documentTitle1
     *
     * @return Page
     */
    public function setDocumentTitle1($documentTitle1)
    {
        $this->documentTitle1 = $documentTitle1;

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
     * @return string
     */
    public function getDocumentTitle2()
    {
        return $this->documentTitle2;
    }

    /**
     * @param string $documentTitle2
     * @return Page
     */
    public function setDocumentTitle2($documentTitle2)
    {
        $this->documentTitle2 = $documentTitle2;

        return $this;
    }

    /**
     * @return string
     */
    public function getSmallImageName2()
    {
        return $this->smallImageName2;
    }

    /**
     * @param string $smallImageName2
     *
     * @return Page
     */
    public function setSmallImageName2($smallImageName2)
    {
        $this->smallImageName2 = $smallImageName2;

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
}
