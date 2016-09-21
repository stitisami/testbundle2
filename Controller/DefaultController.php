<?php

namespace Stitisami\testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StitisamitestBundle:Default:index.html.twig');
    }
}
