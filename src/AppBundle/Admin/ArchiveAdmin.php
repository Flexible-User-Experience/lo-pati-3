<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class ArchiveAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
class ArchiveAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Arxiu';
    protected $baseRoutePattern = 'pages/archive';
    protected $datagridValues = array(
        '_sort_by'    => 'year',
        '_sort_order' => 'asc',
    );

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', $this->getFormMdSuccessBoxArray(8))
            ->add(
                'year',
                null,
                array(
                    'label'    => 'Any',
                    'required' => true,
                )
            )
            ->add(
                'image1File',
                'file',
                array(
                    'label'    => 'Imatge 1',
                    'help'     => $this->getImage1HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label'    => 'Nom Imatge 2',
                    'required' => true,
                )
            )
            ->end()
        ;
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add(
                'year',
                null,
                array(
                    'label' => 'Any',
                )
            )
            ->add(
                'image1Name',
                null,
                array(
                    'label' => 'Nom Imatge 1',
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label' => 'Nom Imatge 2',
                )
            )
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add(
                'year',
                null,
                array(
                    'label'    => 'Any',
                    'editable' => true,
                )
            )
            ->add(
                'image1Name',
                null,
                array(
                    'label'    => 'Nom Imatge 1',
                    'template' => '::Admin/Cells/list__cell_image_field.html.twig'
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label'    => 'Nom Imatge 2',
                    'template' => '::Admin/Cells/list__cell_image_field.html.twig'
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
