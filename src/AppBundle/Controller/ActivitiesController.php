<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivitiesController extends Controller
{
    /**
     * @Route("/activites", name="activities")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Activitie:activites_liste.html.twig');
    }

     /**
     * @Route("/activite", name="show_activitie")
     */
    public function testAction(Request $request)
    {
        return $this->render('AppBundle:Activitie:activite.html.twig');
    }
}
