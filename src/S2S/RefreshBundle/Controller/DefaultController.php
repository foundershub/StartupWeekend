<?php

namespace S2S\RefreshBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('S2SRefreshBundle:Default:index.html.twig', array('name' => $name));
    }
}
