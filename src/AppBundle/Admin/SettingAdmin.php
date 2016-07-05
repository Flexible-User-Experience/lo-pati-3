<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Class SettingAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
class SettingAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Configuració';
    protected $baseRoutePattern = 'pages/setting';
    protected $datagridValues = array(
        '_sort_by'    => 'address',
        '_sort_order' => 'asc',
    );

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add(
                'address',
                null,
                array(
                    'label' => 'Adreça',
                )
            )
            ->add(
                'timetable',
                null,
                array(
                    'label' => 'Horari',
                )
            )
            ->add(
                'collaborator',
                null,
                array(
                    'label' => 'Col·laborador',
                )
            )
            ->add(
                'organizer',
                null,
                array(
                    'label' => 'Organitzador',
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
                'address',
                null,
                array(
                    'label'    => 'Adreça',
                    'editable' => true,
                )
            )
            ->add(
                'timetable',
                null,
                array(
                    'label'    => 'Horari',
                    'editable' => true,
                )
            )
            ->add(
                'organizer',
                null,
                array(
                    'label'    => 'Organitzador',
                    'editable' => true,
                )
            )
            ->add(
                'collaborator',
                null,
                array(
                    'label'    => 'Col·laborador',
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
