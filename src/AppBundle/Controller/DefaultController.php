<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
    }
    public function ubicarAction(Request $request)
    {
        return "ALEEEE";
        // replace this example code with whatever you need
//        return $this->render('default/ubicaciones.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
//        ]);
    }
}
