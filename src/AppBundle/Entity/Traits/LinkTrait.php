<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Link trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
Trait LinkTrait
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url(checkDNS=true)
     */
    private $link;

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     *
     * @return LinkTrait
     */
    public function setLink($link)
    {
        $this->link = $link;
        
        return $this;
    }
}
