<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

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
//            ->add(
//                'type',
//                null,
//                array(
//                    'label'    => 'Tipus',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'place',
//                null,
//                array(
//                    'label'    => 'Lloc',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'summary',
//                TextareaType::class,
//                array(
//                    'label'    => 'Resum',
//                    'required' => false,
//                    'attr'     => array(
//                        'rows' => 6,
//                    )
//                )
//            )
//            ->add(
//                'description',
//                TextareaType::class,
//                array(
//                    'label'    => 'Descripció',
//                    'required' => false,
//                    'attr'     => array(
//                        'rows' => 6,
//                    )
//                )
//            )
//            ->add(
//                'links',
//                TextareaType::class,
//                array(
//                    'label'    => 'Links',
//                    'required' => false,
//                    'attr'     => array(
//                        'rows' => 6,
//                    )
//                )
//            )
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
//            ->add(
//                'expirationDate',
//                DatePickerType::class,
//                array(
//                    'label'  => 'Data Caducitat',
//                    'format' => 'd/M/y',
//                    'required' => false,
//                )
//            )
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
                    'required' => false,
                )
            )
            ->add(
                'emailSendeds',
                null,
                array(
                    'label' => 'Emails Enviats',
                    'required' => false,
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
//            ->add(
//                'smallImageName1',
//                null,
//                array(
//                    'label'    => 'Nom Imatge Petita 1',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'largeImageName',
//                null,
//                array(
//                    'label'    => 'Nom Imatge Gran',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'largeFooterImage',
//                null,
//                array(
//                    'label'    => 'Imatge Peu Gran',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'documentName1',
//                null,
//                array(
//                    'label'    => 'Nom Document 1',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'documentTitle1',
//                null,
//                array(
//                    'label'    => 'Títol Document 1',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'documentName2',
//                null,
//                array(
//                    'label'    => 'Nom Document 2',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'documentTitle2',
//                null,
//                array(
//                    'label'    => 'Títol Document 2',
//                    'required' => false,
//                )
//            )
//            ->add(
//                'smallImageName2',
//                null,
//                array(
//                    'label'    => 'Nom Imatge Petita 2',
//                    'required' => false,
//                )
//            )
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
                'name',
                null,
                array(
                    'label' => 'Nom',
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
                'status',
                null,
                array(
                    'label' => 'Estat',
                    'editable' => true,
                )
            )
            ->add(
                'emailSubscribed',
                null,
                array(
                    'label' => 'Emails Subscrits',
                    'editable' => true,
                )
            )
            ->add(
                'emailSendeds',
                null,
                array(
                    'label' => 'Emails Enviats',
                    'editable' => true,
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
                'number',
                null,
                array(
                    'label' => 'Número',
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
