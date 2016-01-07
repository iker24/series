<?php

namespace uni\Bundle\SeriesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniSeriesBundle:Default:index.html.twig', array('name' => $name));
    }
}
