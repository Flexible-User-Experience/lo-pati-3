<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Class ArtistAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
class ArtistAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Artist';
    protected $baseRoutePattern = 'pages/artist';
    protected $datagridValues = array(
        '_sort_by'    => 'name',
        '_sort_order' => 'asc',
    );

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add(
                'name',
                null,
                array(
                    'label'    => 'Nom',
                    'editable' => true,
                )
            )
            ->add(
                'city',
                null,
                array(
                    'label'    => 'Ciutat',
                    'editable' => true,
                )
            )
            ->add(
                'year',
                null,
                array(
                    'label'    => 'Any',
                    'editable' => true,
                )
            )
            ->add(
                'category',
                null,
                array(
                    'label'    => 'Categoria',
                    'editable' => true,
                )
            )
            ->add(
                'summary',
                null,
                array(
                    'label'    => 'Resum',
                    'editable' => true,
                )
            )
            ->add(
                'description',
                null,
                array(
                    'label'    => 'Descripció',
                    'editable' => true,
                )
            )
            ->add(
                'image1Name',
                null,
                array(
                    'label'    => 'Image 1',
                    'editable' => true,
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label'    => 'Image 2',
                    'editable' => true,
                )
            )
            ->add(
                'image3',
                null,
                array(
                    'label'    => 'Image 3',
                    'editable' => true,
                )
            )
            ->add(
                'image4',
                null,
                array(
                    'label'    => 'Image 4',
                    'editable' => true,
                )
            )
            ->add(
                'image5',
                null,
                array(
                    'label'    => 'Image 5',
                    'editable' => true,
                )
            )
            ->add(
                'link',
                null,
                array(
                    'label'    => 'Url',
                    'editable' => true,
                )
            )
            ->add(
                'document1Name',
                null,
                array(
                    'label'    => 'Image 3',
                    'editable' => true,
                )
            )
            ->add(
                '_action',
                'actions',
                array(
                    'label'   => 'Accions',
                    'actions' => array(
                        'edit'   => array('template' => '::Admin/Buttons/list__action_edit_button.html.twig'),
                    )
                )
            );
    }
}
