<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Class MenuLevel1Admin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
class MenuLevel1Admin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Categoria';
    protected $baseRoutePattern = 'pages/menuLevel1';
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
                'position',
                null,
                array(
                    'label'    => 'Dies Posició',
                    'required' => true,
                )
            )
            ->add(
                'name',
                null,
                array(
                    'label'    => 'Nom',
                    'required' => true,
                )
            )
            ->add(
                'isArchive',
                null,
                array(
                    'label'    => 'Arxiu',
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
                'position',
                null,
                array(
                    'label' => 'Posició',
                )
            )
            ->add(
                'name',
                null,
                array(
                    'label' => 'Nom',
                )
            )
            ->add(
                'isArchive',
                null,
                array(
                    'label' => 'Arxiu',
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
                'position',
                null,
                array(
                    'label'    => 'Posició',
                    'editable' => true,
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
                'isArchive',
                null,
                array(
                    'label'    => 'Arxiu',
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
