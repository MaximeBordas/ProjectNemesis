<?php

namespace NemesisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NemesisBundle:Default:index.html.twig');
    }
}
