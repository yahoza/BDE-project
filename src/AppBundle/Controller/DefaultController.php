<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Accueil:index.html.twig');
    }


    // public function indexAction(Request $request)
    // {
    //     // replace this example code with whatever you need
    //     return $this->render('default/index.html.twig', [
    //         'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    //     ]);
    // }

    /**
     * @Route("/accueil")
     */
    public function testAction(Request $request){
        $tableau = [10, 20, 30, 40, 50];

        return $this->render('default/test.html.twig', [
            'firstName' => "Lior",
            'lastName' => "Chamla",
            'tableau' => $tableau
        ]);
    }
}
