<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Route\RouteCollection;

/**
 * Class NewsletterGroupAdmin.
 *
 * @category Admin
 *
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
class NewsletterGroupAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Butlletins dels grups';
    protected $baseRoutePattern = 'pages/newsletter-group';
    protected $datagridValues = array(
        '_sort_by' => 'url',
        '_sort_order' => 'asc',
    );

    /**
     * Configure route collection.
     *
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('show')
            ->remove('batch');
    }

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
                    'label' => 'Nom',
                )
            )
            ->end()
            ->with('Controls', $this->getFormMdSuccessBoxArray(6))
            ->add(
                'users',
                null,
                array(
                    'label' => 'Usuaris',
                    'required' => false,
                )
            )
            ->add(
                'enabled',
                'checkbox',
                array(
                    'label' => 'Actiu',
                    'required' => false,
                )
            )
            ->end();
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add(
                'users',
                null,
                array(
                    'label' => 'Usuaris',
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
                'enabled',
                null,
                array(
                   'label' => 'Actiu',
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
                    'label' => 'Actiu',
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
                    ),
                )
            );
    }
}
