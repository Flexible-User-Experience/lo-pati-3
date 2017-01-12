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
            ->with('General', $this->getFormMdSuccessBoxArray(6))
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
                'summary',
                null,
                array(
                    'label'    => 'Resum',
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
                    'required' => false,
                )
            )
            ->end()
            ->with('Noms Imatges', $this->getFormMdSuccessBoxArray(3))
            ->add(
                'image1File',
                'file',
                array(
                    'label'    => 'Imatge 1',
                    'help'     => $this->getImage1HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->add(
                'image2File',
                'file',
                array(
                    'label'    => 'Imatge 2',
                    'help'     => $this->getImage2HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->add(
                'image3File',
                'file',
                array(
                    'label'    => 'Imatge 3',
                    'help'     => $this->getImage3HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->add(
                'image4File',
                'file',
                array(
                    'label'    => 'Imatge 4',
                    'help'     => $this->getImage4HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->add(
                'image5File',
                'file',
                array(
                    'label'    => 'Imatge 5',
                    'help'     => $this->getImage5HelperFormMapperWithThumbnail(),
                    'required' => false,
                )
            )
            ->end()
            ->with('Controls', $this->getFormMdSuccessBoxArray(3))
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
                'document1Name',
                null,
                array(
                    'label'    => 'Nom del Document',
                    'required' => false,
                )
            )
            ->add(
                'enabled',
                'checkbox',
                array(
                    'label'    => 'Actiu',
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
                'link',
                null,
                array(
                    'label' => 'Url',
                )
            )
            ->add(
                'enabled',
                null,
                array(
                    'label' => 'Actiu',
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
                'image1Name',
                null,
                array(
                    'label'    => 'Imatge 1',
                    'template' => '::Admin/Cells/list__cell_image1_field.html.twig'
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
