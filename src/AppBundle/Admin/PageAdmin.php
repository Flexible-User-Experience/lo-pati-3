<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Class PageAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Anton Serra <aserratorta@gmail.com>
 */
class PageAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Page';
    protected $baseRoutePattern = 'pages/page';
    protected $datagridValues = array(
        '_sort_by'    => 'publishDate',
        '_sort_order' => 'desc',
    );

    /**
     * Configure route collection
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
                'type',
                null,
                array(
                    'label'    => 'Tipus',
                    'required' => false,
                )
            )
            ->add(
                'description',
                TextareaType::class,
                array(
                    'label'    => 'Descripció',
                    'required' => false,
                    'attr'     => array(
                        'rows' => 8,
                    )
                )
            )
            ->end()
            ->with('Controls', $this->getFormMdSuccessBoxArray(5))
            ->end();
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
                    'label'    => 'Nom',
                )
            )
            ->add(
                '_action',
                'actions',
                array(
                    'label'   => 'Accions',
                    'actions' => array(
//                        'edit'   => array('template' => '::Admin/Buttons/list__action_edit_button.html.twig'),
//                        'show'   => array('template' => '::Admin/Buttons/list__action_show_button.html.twig'),
//                        'pdf'    => array('template' => '::Admin/Buttons/list__action_pdf_button.html.twig'),
//                        'email'  => array('template' => '::Admin/Buttons/list__action_email_button.html.twig'),
//                        'delete' => array('template' => '::Admin/Buttons/list__action_delete_button.html.twig'),
                    )
                )
            );
    }

}
