<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Class ArtistAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   Wilson Iglesias <wiglesias83@gmail.com>
 */
class ArtistAdmin extends AbstractBaseAdmin
{
    protected $classnameLabel = 'Artist';
    protected $baseRoutePattern = 'pages/artist';
    protected $datagridValues = array(
        '_sort_by'    => 'name',
        '_sort_order' => 'asc',
    );

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
                    'label'    => 'nom',
                    'required' => true,
                )
            )
            ->add(
                'city',
                null,
                array(
                    'label'    => 'Ciutat',
                    'required' => true,
                )
            )
            ->add(
                'year',
                null,
                array(
                    'label'    => 'Any',
                    'required' => true,
                )
            )
            ->add(
                'category',
                null,
                array(
                    'label'    => 'Categoria',
                    'required' => true,
                )
            )
            ->add(
                'description',
                null,
                array(
                    'label'    => 'Descripció',
                    'required' => true,
                )
            )
            ->add(
                'link',
                null,
                array(
                    'label'    => 'Url',
                    'required' => true,
                )
            )
            ->add(
                'document1Name',
                null,
                array(
                    'label'    => 'Nom del Document',
                    'required' => true,
                )
            )
            ->end()
            ->with('Noms Imatges', $this->getFormMdSuccessBoxArray(5))
            ->add(
                'image1Name',
                null,
                array(
                    'label'    => 'Nom Imatge 1',
                    'required' => true,
                )
            )
            ->add(
                'image1Name',
                null,
                array(
                    'label'    => 'Nom Imatge 2',
                    'required' => true,
                )
            )
            ->add(
                'image3',
                null,
                array(
                    'label'    => 'Imatge 3',
                    'required' => true,
                )
            )
            ->add(
                'image4',
                null,
                array(
                    'label'    => 'Imatge 4',
                    'required' => true,
                )
            )
            ->add(
                'image5',
                null,
                array(
                    'label'    => 'Imatge 5',
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
                'name',
                null,
                array(
                    'label' => 'Nom',
                )
            )
            ->add(
                'city',
                null,
                array(
                    'label' => 'Ciutat',
                )
            )
            ->add(
                'year',
                null,
                array(
                    'label' => 'Any',
                )
            )
            ->add(
                'category',
                null,
                array(
                    'label' => 'Categoria',
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
                'description',
                null,
                array(
                    'label' => 'Descripció',
                )
            )
            ->add(
                'image1Name',
                null,
                array(
                    'label' => 'Nom Imatge 1',
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label' => 'Nom Imatge 2',
                )
            )
            ->add(
                'image3',
                null,
                array(
                    'label' => 'Imatge 3',
                )
            )
            ->add(
                'image4',
                null,
                array(
                    'label' => 'Imatge 4',
                )
            )
            ->add(
                'image5',
                null,
                array(
                    'label' => 'Imatge 5',
                )
            )
            ->add(
                'link',
                null,
                array(
                    'label' => 'Url',
                )
            )
            ->add(
                'document1Name',
                null,
                array(
                    'label' => 'Nom del Document',
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
                'city',
                null,
                array(
                    'label'    => 'Ciutat',
                    'editable' => true,
                )
            )
            ->add(
                'year',
                null,
                array(
                    'label'    => 'Any',
                    'editable' => true,
                )
            )
            ->add(
                'category',
                null,
                array(
                    'label'    => 'Categoria',
                    'editable' => true,
                )
            )
            ->add(
                'image1Name',
                null,
                array(
                    'label'    => 'Nom Image 1',
                    'editable' => true,
                )
            )
            ->add(
                'image2Name',
                null,
                array(
                    'label'    => 'Nom Image 2',
                    'editable' => true,
                )
            )
            ->add(
                'image3',
                null,
                array(
                    'label'    => 'Image 3',
                    'editable' => true,
                )
            )
            ->add(
                'image4',
                null,
                array(
                    'label'    => 'Image 4',
                    'editable' => true,
                )
            )
            ->add(
                'image5',
                null,
                array(
                    'label'    => 'Image 5',
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
