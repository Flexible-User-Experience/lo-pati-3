<?php

namespace AppBundle\Admin;

use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

/**
 * Class BaseAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   David Romaní <david@flux.cat>
 */
abstract class AbstractBaseAdmin extends AbstractAdmin
{
    /**
     * @var UploaderHelper
     */
    protected $vus;

    /**
     * @var CacheManager
     */
    protected $lis;

    /**
     * @param string             $code
     * @param string             $class
     * @param string             $baseControllerName
     * @param UploaderHelper     $vus
     * @param CacheManager       $lis
     */
    public function __construct($code, $class, $baseControllerName, UploaderHelper $vus, CacheManager $lis)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->vus = $vus;
        $this->lis = $lis;
    }

    /**
     * @var array
     */
    protected $perPageOptions = array(25, 50, 100, 200);

    /**
     * @var int
     */
    protected $maxPerPage = 25;

    /**
     * Configure route collection
     *
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('show')
            ->remove('batch');
    }

    /**
     * Remove batch action list view first column
     *
     * @return array
     */
    public function getBatchActions()
    {
        $actions = parent::getBatchActions();
        unset($actions['delete']);

        return $actions;
    }

    /**
     * Get export formats
     *
     * @return array
     */
    public function getExportFormats()
    {
        return array(
            'csv',
            'xls',
        );
    }

    /**
     * @param string $bootstrapGrid
     * @param string $bootstrapSize
     * @param string $boxClass
     *
     * @return array
     */
    protected function getDefaultFormBoxArray($bootstrapGrid = 'md', $bootstrapSize = '6', $boxClass = 'primary')
    {
        return array(
            'class'     => 'col-' . $bootstrapGrid . '-' . $bootstrapSize,
            'box_class' => 'box box-' . $boxClass,
        );
    }

    /**
     * @param string $bootstrapColSize
     *
     * @return array
     */
    protected function getFormMdSuccessBoxArray($bootstrapColSize = '6')
    {
        return $this->getDefaultFormBoxArray('md', $bootstrapColSize, 'success');
    }

    /**
     * Get image helper form mapper with thumbnail
     *
     * @return string
     */
    protected function getImage1HelperFormMapperWithThumbnail()
    {
        return ($this->getSubject() ? $this->getSubject()->getImage1Name() ? '<img src="' . $this->lis->getBrowserPath(
                $this->vus->asset($this->getSubject(), 'image1File'),
                '480xY'
            ) . '" class="admin-preview img-responsive" alt="thumbnail"/>' : '' : '') . '<span style="width:100%;display:block;">Fins a 10MB amb format PNG, JPG or GIF. Amplada mínima 1200px.</span>';
    }

    /**
     * Get image helper form mapper with thumbnail
     *
     * @return string
     */
    protected function getImage2HelperFormMapperWithThumbnail()
    {
        return ($this->getSubject() ? $this->getSubject()->getImage2Name() ? '<img src="' . $this->lis->getBrowserPath(
                $this->vus->asset($this->getSubject(), 'image2File'),
                '480xY'
            ) . '" class="admin-preview img-responsive" alt="thumbnail"/>' : '' : '') . '<span style="width:100%;display:block;">Fins a 10MB amb format PNG, JPG or GIF. Amplada mínima 1200px.</span>';
    }

    /**
     * Get image helper form mapper with thumbnail
     *
     * @return string
     */
    protected function getImage3HelperFormMapperWithThumbnail()
    {
        return ($this->getSubject() ? $this->getSubject()->getImage3Name() ? '<img src="' . $this->lis->getBrowserPath(
                $this->vus->asset($this->getSubject(), 'image3File'),
                '480xY'
            ) . '" class="admin-preview img-responsive" alt="thumbnail"/>' : '' : '') . '<span style="width:100%;display:block;">Fins a 10MB amb format PNG, JPG or GIF. Amplada mínima 1200px.</span>';
    }

    /**
     * Get image helper form mapper with thumbnail
     *
     * @return string
     */
    protected function getImage4HelperFormMapperWithThumbnail()
    {
        return ($this->getSubject() ? $this->getSubject()->getImage4Name() ? '<img src="' . $this->lis->getBrowserPath(
                $this->vus->asset($this->getSubject(), 'image4File'),
                '480xY'
            ) . '" class="admin-preview img-responsive" alt="thumbnail"/>' : '' : '') . '<span style="width:100%;display:block;">Fins a 10MB amb format PNG, JPG or GIF. Amplada mínima 1200px.</span>';
    }

    /**
     * Get image helper form mapper with thumbnail
     *
     * @return string
     */
    protected function getImage5HelperFormMapperWithThumbnail()
    {
        return ($this->getSubject() ? $this->getSubject()->getImage5Name() ? '<img src="' . $this->lis->getBrowserPath(
                $this->vus->asset($this->getSubject(), 'image5File'),
                '480xY'
            ) . '" class="admin-preview img-responsive" alt="thumbnail"/>' : '' : '') . '<span style="width:100%;display:block;">Fins a 10MB amb format PNG, JPG or GIF. Amplada mínima 1200px.</span>';
    }
}
