<?php

namespace NemesisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NemesisController extends Controller
{

    public function indexAction()
    {
       return $this->render('NemesisBundle:Nemesis:index.html.twig');
    }
}
