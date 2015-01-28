<?php

namespace EC\BuyerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ECBuyerBundle:Default:index.html.twig', array('name' => $name));
    }
}
