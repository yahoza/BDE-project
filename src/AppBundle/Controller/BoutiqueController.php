<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BoutiqueController extends Controller
{
	/**
     * @Route("/boutique", name="boutique")
     */
	public function indexAction()
	    {
	        return $this->render('AppBundle:Boutique:index.html.twig');
	    }

	/**
     * @Route("/boutique/produit", name="produit")
     */
	public function showAction()
	    {
	        return $this->render('AppBundle:Boutique:show.html.twig');
	    }
}