<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Route\RouteCollection;


/**
 * Class NewsletterGroupAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
class NewsletterGroupAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Butlletins dels grups';
    protected $baseRoutePattern = 'pages/newsletter-group';
    protected $datagridValues = array(
        '_sort_by'    => 'url',
        '_sort_order' => 'asc',
    );

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

//    /**
//     * @param FormMapper $formMapper
//     */
//    protected function configureFormFields(FormMapper $formMapper)
//    {
//        $formMapper
//            ->with('General', $this->getFormMdSuccessBoxArray(6))
//            ->add(
//                'email',
//                null,
//                array(
//                    'label' => 'Email'
//                )
//            )
//            ->add(
//                'language',
//                'choice',
//                array(
//                    'label' => 'Idioma',
//                    'choices' => array(
//                        'ca' => 'català',
//                        'es' => 'español',
//                        'en' => 'english',
//                    ),
//                    'required' => true,
//                )
//            )
//            ->end()
//            ->with('Controls', $this->getFormMdSuccessBoxArray(6))
//            ->add(
//                'enabled',
//                'checkbox',
//                array(
//                    'label'    => 'Actiu',
//                    'required' => false,
//                )
//            )
//            ->end();
//    }
//
//    /**
//     * @param DatagridMapper $datagridMapper
//     */
//    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
//    {
//        $datagridMapper
//            ->add(
//                'createdAt',
//                'doctrine_orm_date',
//                array(
//                    'label'      => 'Data de creació',
//                    'field_type' => 'sonata_type_date_picker',
//                )
//            )
//            ->add(
//                'email',
//                null,
//                array(
//                    'label' => 'Email',
//                )
//            )
//            ->add(
//                'language',
//                'doctrine_orm_string',
//                array('label' => 'Idioma'),
//                'choice',
//                array(
//                    'choices' => array(
//                        'ca' => 'català',
//                        'es' => 'español',
//                        'en' => 'english',
//                    ),
//                )
//            )
//            ->add(
//                'fail',
//                null,
//                array(
//                    'label' => 'Errors'
//                )
//            )
//            ->add(
//                'enabled',
//                null,
//                array(
//                   'label' => 'Actiu'
//                )
//            );
//    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
       unset($this->listModes['mosaic']);
        $listMapper
            ->add(
                'users',
                null,
                array(
                    'label' => 'Usuaris',
                    'editable' => true,
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