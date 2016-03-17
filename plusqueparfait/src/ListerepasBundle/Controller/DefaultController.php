<?php

namespace ListerepasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ListerepasBundle:Default:index.html.twig');
    }
}
