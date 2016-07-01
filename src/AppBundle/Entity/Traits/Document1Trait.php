<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document1 trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
Trait Document1Trait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $document1;

    /**
     * @return string
     */
    public function getDocument1()
    {
        return $this->document1;
    }

    /**
     * @param string $document1
     * @return Document1Trait
     */
    public function setDocument1($document1)
    {
        $this->document1 = $document1;
        return $this;
    }
}
