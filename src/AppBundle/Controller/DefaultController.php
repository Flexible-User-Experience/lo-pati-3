<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Setting;
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
    
    /**
     * @Route("/new-setting", name="new_setting")
     */
    public function newSettingAction(Request $request)
    {
        $setting = new Setting();
        $setting->setAddress('my address');
        $setting->setTimetable('my timetable');
        $setting->setOrganizer('my organizer');
        $setting->setCollaborator('my collaborator');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($setting);
        $em->flush();
        
        // replace this example code with whatever you need
        return $this->render('default/new_settings.html.twig', array(
            
        ));
    }
}
