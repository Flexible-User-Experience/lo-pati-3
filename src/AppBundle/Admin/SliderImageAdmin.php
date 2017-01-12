<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class SliderImageAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
class SliderImageAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Slider';
    protected $baseRoutePattern = 'pages/slider-image';
    protected $datagridValues = array(
        '_sort_by'    => 'position',
        '_sort_order' => 'asc',
    );

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', $this->getFormMdSuccessBoxArray(6))
            ->add(
                'name',
                null,
                array(
                    'label'    => 'nom',
                    'required' => true,
                )
            )
            ->add(
                'altName',
                null,
                array(
                    'label'    => 'Alt Nom',
                    'required' => false,
                )
            )
            ->end()
            ->with('Imatges', $this->getFormMdSuccessBoxArray(3))
            ->add(
                'image1File',
                'file',
                array(
                    'label'    => 'Imatge 1',
                    'help'     => $this->getImage1HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->end()
            ->with('Controls', $this->getFormMdSuccessBoxArray(3))
            ->add(
                'link',
                null,
                array(
                    'label'    => 'Url',
                    'required' => false,
                )
            )
            ->add(
                'position',
                null,
                array(
                    'label'    => 'Posició',
                    'required' => true,
                )
            )
            ->add(
                'enabled',
                'checkbox',
                array(
                    'label'    => 'Actiu',
                    'required' => false,
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
                'name',
                null,
                array(
                    'label' => 'Nom',
                )
            )
            ->add(
                'altName',
                null,
                array(
                    'label' => 'Alt Nom',
                )
            )
            ->add(
                'link',
                null,
                array(
                    'label' => 'Url',
                )
            )
            ->add(
                'position',
                null,
                array(
                    'label' => 'Posició',
                )
            )
            ->add(
                'enabled',
                null,
                array(
                    'label' => 'Actiu',
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
                'image1Name',
                null,
                array(
                    'label'    => 'Imatge',
                    'template' => '::Admin/Cells/list__cell_image1_field.html.twig'
                )
            )
            ->add(
                'name',
                null,
                array(
                    'label'    => 'Nom',
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
                'position',
                null,
                array(
                    'label'    => 'Posició',
                    'editable' => true,
                )
            )
            ->add(
                'enabled',
                null,
                array(
                    'label'    => 'Actiu',
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
