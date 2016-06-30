<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/settings-list", name="settings_list")
     */
    public function settingsListAction(Request $request)
    {
        $settingsList = $this->getDoctrine()->getRepository('AppBundle:Setting')->findAll();
        
        // replace this example code with whatever you need
        return $this->render('default/settings_list.html.twig', array(
            'settingsList' => $settingsList,
        ));
    }
}
