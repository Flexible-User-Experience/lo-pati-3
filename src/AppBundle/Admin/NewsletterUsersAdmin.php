<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;


/**
 * Class NewsletterUsersAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wils Iglesias <wiglesias83@gmail.com>
 */
class NewsletterUsersAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Newsletter Users';
    protected $baseRoutePattern = 'pages/newsletter-users';
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

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
       unset($this->listModes['mosaic']);
        $listMapper
            ->add(
                'email',
                null,
                array(
                    'label' => 'Email',
                    'editable' => true,
                )
            )
            ->add(
                'language',
                null,
                array(
                    'label' => 'Idioma',
                    'editable' => true,
                )
            )
            ->add(
                'token',
                null,
                array(
                    'label' => 'Token',
                    'editable' => false,
                )
            )
            ->add(
                'fail',
                null,
                array(
                    'label' => 'Error',
                    'editable' => false,
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