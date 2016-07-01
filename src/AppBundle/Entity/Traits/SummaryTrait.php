<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Summary trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
Trait SummaryTrait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $summary;

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
     * @return SummaryTrait
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        
        return $this;
    }
    
}
