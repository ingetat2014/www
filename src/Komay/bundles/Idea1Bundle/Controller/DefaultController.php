<?php

namespace Komay\bundles\Idea1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KomaybundlesIdea1Bundle:Default:index.html.twig', array('name' => $name'));
    }
}
