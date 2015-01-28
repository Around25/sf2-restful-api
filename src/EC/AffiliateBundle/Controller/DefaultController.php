<?php

namespace EC\AffiliateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ECAffiliateBundle:Default:index.html.twig', array('name' => $name));
    }
}
