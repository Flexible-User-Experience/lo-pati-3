<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;

/**
 * Class NewslettersAdmin.
 *
 * @category Admin
 *
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
class NewslettersAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Page';
    protected $baseRoutePattern = 'pages/newsletter';
    protected $datagridValues = array(
        '_sort_by' => 'publishDate',
        '_sort_order' => 'desc',
    );

    /**
     * Configure route collection.
     *
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('batch');
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', $this->getFormMdSuccessBoxArray(7))
            ->add(
                'name',
                null,
                array(
                    'label' => 'Nom',
                    'required' => false,
                )
            )
            ->add(
                'newsletterDate',
                DatePickerType::class,
                array(
                    'label' => 'Data Butlletí',
                    'format' => 'd/M/y',
                )
            )
            ->add(
                'startSend',
                DatePickerType::class,
                array(
                    'label' => 'Data Inicial Envio',
                    'format' => 'd/M/y',
                    'required' => false,
                )
            )
            ->add(
                'finishSend',
                DatePickerType::class,
                array(
                    'label' => 'Data Final Envio',
                    'format' => 'd/M/y',
                    'required' => false,
                )
            )
            ->add(
                'number',
                null,
                array(
                    'label' => 'Número',
                    'required' => false,
                )
            )
            ->end()
            ->with('Controls', $this->getFormMdSuccessBoxArray(5))
            ->add(
                'status',
                null,
                array(
                    'label' => 'Estat',
                    'required' => false,
                )
            )
            ->add(
                'emailSubscribed',
                null,
                array(
                    'label' => 'Emails Subscrits',
                    'disabled' => true,
                )
            )
            ->add(
                'emailSendeds',
                null,
                array(
                    'label' => 'Emails Enviats',
                    'disabled' => true,
                )
            )
            ->add(
                'test',
                null,
                array(
                    'label' => 'Test',
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
                    'label' => 'Name',
                )
            )
            ->add(
                'newsletterDate',
                'doctrine_orm_date',
                array(
                    'label' => 'Data Butlletí',
                    'field_type' => DatePickerType::class,
                )
            )
            ->add(
                'startSend',
                'doctrine_orm_date',
                array(
                    'label' => 'Data Inicial Envio',
                    'field_type' => DatePickerType::class,
                )
            )
            ->add(
                'finishSend',
                'doctrine_orm_date',
                array(
                    'label' => 'Data Final Envio',
                    'field_type' => DatePickerType::class,
                )
            )
            ->add(
                'status',
                null,
                array(
                    'label' => 'Estat',
                )
            )
            ->add(
                'emailSubscribed',
                null,
                array(
                    'label' => 'Emails Subscrits',
                )
            )
            ->add(
                'emailSendeds',
                null,
                array(
                    'label' => 'Emails Enviats',
                )
            )
            ->add(
                'test',
                null,
                array(
                    'label' => 'Test',
                )
            )
            ->add(
                'number',
                null,
                array(
                    'label' => 'Número',
                )
            );
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add(
                'number',
                null,
                array(
                    'label' => 'Número',
                    'editable' => true,
                )
            )
            ->add(
                'newsletterDate',
                null,
                array(
                    'label' => 'Data Butlletí',
                    'format' => 'd/m/Y',
                )
            )
            ->add(
                'name',
                null,
                array(
                    'label' => 'Nom',
                    'editable' => true,
                )
            )
            ->add(
                'status',
                null,
                array(
                    'label' => 'Estat',
                    'editable' => true,
                )
            )
            ->add(
                'emailSendeds',
                null,
                array(
                    'label' => 'Emails Enviats',
                    'editable' => false,
                )
            )
            ->add(
                'test',
                null,
                array(
                    'label' => 'Test',
                    'editable' => true,
                )
            )
            ->add(
                '_action',
                'actions',
                array(
                    'label' => 'Accions',
                    'actions' => array(
                        'edit' => array('template' => '::Admin/Buttons/list__action_edit_button.html.twig'),
                        'show' => array('template' => '::Admin/Buttons/list__action_show_button.html.twig'),
                        'delete' => array('template' => '::Admin/Buttons/list__action_delete_button.html.twig'),
                    ),
                )
            );
    }
}
