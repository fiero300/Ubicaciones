<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UbicacionesController extends Controller
{

    public function indexAction()
    {
//      return $app['twig']->render('index.twig');
      return $this->render('ubicaciones.twig', array());
      
    }

}
