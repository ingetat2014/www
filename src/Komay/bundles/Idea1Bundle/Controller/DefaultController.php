<?php

namespace Komay\bundles\Idea1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('KomaybundlesIdea1Bundle:Default:index.html.twig');
    }
}
