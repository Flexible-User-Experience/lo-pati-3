<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Class ArchiveAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
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
                'image1Name',
                null,
                array(
                    'label'    => 'Imatge 1',
                    'required' => true,
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label'    => 'Imatge 2',
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
                    'label' => 'Imatge 1',
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label' => 'Imatge 2',
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
                    'label'    => 'Imatge 1',
                    'editable' => true,
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label'    => 'Imatge 2',
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
