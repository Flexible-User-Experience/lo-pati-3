<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
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
                'name',
                null,
                array(
                    'label'    => 'Nom',
                    'required' => false,
                )
            )
            ->add(
                'type',
                null,
                array(
                    'label'    => 'Tipus',
                    'required' => false,
                )
            )
            ->add(
                'place',
                null,
                array(
                    'label'    => 'Lloc',
                    'required' => false,
                )
            )
            ->add(
                'summary',
                TextareaType::class,
                array(
                    'label'    => 'Resum',
                    'required' => false,
                    'attr'     => array(
                        'rows' => 6,
                    )
                )
            )
            ->add(
                'description',
                TextareaType::class,
                array(
                    'label'    => 'Descripció',
                    'required' => false,
                    'attr'     => array(
                        'rows' => 6,
                    )
                )
            )
            ->add(
                'links',
                TextareaType::class,
                array(
                    'label'    => 'Links',
                    'required' => false,
                    'attr'     => array(
                        'rows' => 6,
                    )
                )
            )
            ->end()
            ->with('Controls', $this->getFormMdSuccessBoxArray(5))
            ->add(
                'publishDate',
                'Sonata\CoreBundle\Form\Type\DatePickerType',
                array(
                    'label'  => 'Data Publicació',
                    'format' => 'd/M/y',
                )
            )
            ->add(
                'expirationDate',
                'Sonata\CoreBundle\Form\Type\DatePickerType',
                array(
                    'label'  => 'Data Caducitat',
                    'format' => 'd/M/y',
                    'required' => false,
                )
            )
            ->add(
                'realizationDate',
                null,
                array(
                    'label'    => 'Data Realització',
                    'required' => false,
                )
            )
            ->add(
                'video',
                null,
                array(
                    'label'    => 'Video',
                    'required' => false,
                )
            )
            ->add(
                'urlVimeo',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'urlFlickr',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'smallImageName1',
                null,
                array(
                    'label'    => 'Nom Imatge Petita 1',
                    'required' => false,
                )
            )
            ->add(
                'largeImageName',
                null,
                array(
                    'label'    => 'Nom Imatge Gran',
                    'required' => false,
                )
            )
            ->add(
                'largeFooterImage',
                null,
                array(
                    'label'    => 'Imatge Peu Gran',
                    'required' => false,
                )
            )
            ->add(
                'documentName1',
                null,
                array(
                    'label'    => 'Nom Document 1',
                    'required' => false,
                )
            )
            ->add(
                'documentTitle1',
                null,
                array(
                    'label'    => 'Títol Document 1',
                    'required' => false,
                )
            )
            ->add(
                'documentName2',
                null,
                array(
                    'label'    => 'Nom Document 2',
                    'required' => false,
                )
            )
            ->add(
                'documentTitle2',
                null,
                array(
                    'label'    => 'Títol Document 2',
                    'required' => false,
                )
            )
            ->add(
                'smallImageName2',
                null,
                array(
                    'label'    => 'Nom Imatge Petita 2',
                    'required' => false,
                )
            )
            ->add(
                'startDate',
                'Sonata\CoreBundle\Form\Type\DatePickerType',
                array(
                    'label'  => 'Data Inicial',
                    'format' => 'd/M/y',
                    'required' => false,
                )
            )
            ->add(
                'endDate',
                'Sonata\CoreBundle\Form\Type\DatePickerType',
                array(
                    'label'  => 'Data Final',
                    'format' => 'd/M/y',
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
                'name',
                null,
                array(
                    'label' => 'Name',
                )
            )
            ->add(
                'description',
                null,
                array(
                    'label' => 'Descripció',
                )
            )
            ->add(
                'summary',
                null,
                array(
                    'label' => 'Resum',
                )
            )
            ->add(
                'type',
                null,
                array(
                    'label'    => 'Tipus',
                )
            )
            ->add(
                'publishDate',
                'doctrine_orm_date',
                array(
                    'label'      => 'Data Publicació',
                    'field_type' => 'sonata_type_date_picker',
                )
            )
            ->add(
                'expirationDate',
                'doctrine_orm_date',
                array(
                    'label'      => 'Data Caducitat',
                    'field_type' => 'sonata_type_date_picker',
                )
            )
            ->add(
                'realizationDate',
                null,
                array(
                    'label'    => 'Data Realització',
                )
            )
            ->add(
                'place',
                null,
                array(
                    'label'    => 'Lloc',
                )
            )
            ->add(
                'video',
                null,
                array(
                    'label'    => 'Video',
                )
            )
            ->add(
                'startDate',
                'doctrine_orm_date',
                array(
                    'label'      => 'Data Inicial',
                    'field_type' => 'sonata_type_date_picker',
                )
            )
            ->add(
                'endDate',
                'doctrine_orm_date',
                array(
                    'label'      => 'Data Final',
                    'field_type' => 'sonata_type_date_picker',
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
                'name',
                null,
                array(
                    'label'    => 'Nom',
                    'editable' => true,
                )
            )
            ->add(
                'type',
                null,
                array(
                    'label'    => 'Tipus',
                    'editable' => true,
                )
            )
            ->add(
                'publishDate',
                null,
                array(
                    'label'  => 'Data Publicació',
                    'format' => 'd/m/Y'
                )
            )
            ->add(
                'place',
                null,
                array(
                    'label'    => 'Lloc',
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
                        'show'   => array('template' => '::Admin/Buttons/list__action_show_button.html.twig'),
                        'delete' => array('template' => '::Admin/Buttons/list__action_delete_button.html.twig'),
                    )
                )
            );
    }
}
