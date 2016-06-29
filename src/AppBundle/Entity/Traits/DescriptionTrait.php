<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description trait
 *
 * @category Trait
 * @package  AppBundle\Entity\Traits
 * @author   Anton Serra <aserratorta@gmail.com>
 */
Trait DescriptionTrait
{
    /**
     * @var string
     *
     * @ORM\Column(type="text", length=4000)
     */
    private $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
