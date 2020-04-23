<?php

namespace Day\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlateformeBundle:Default:index.html.twig');
    }
}
