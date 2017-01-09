<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\Image1Trait;
use AppBundle\Entity\Traits\Image2Trait;
use AppBundle\Entity\Traits\YearTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class Archive
 * 
 * @category Entity
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 * @package  AppBundle\Entity
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArchiveRepository")
 */
class Archive extends AbstractBase
{
    use YearTrait;
    use Image1Trait;
    use Image2Trait;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="archive", fileNameProperty="image1Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image1File;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="archive", fileNameProperty="image2Name")
     * @Assert\File(
     *     maxSize="10M",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png", "image/gif"}
     * )
     * @Assert\Image(minWidth=1200)
     */
    private $image2File;
}
