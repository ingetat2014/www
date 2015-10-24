<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Home controller.
 *
 */
class HomeController extends Controller {
    /*
     * Lists all Home entities.
     *
     */

    public function indexAction(Request $request) {
        //--
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        //--
        $param = $emRole->getRepository('FdrAdminBundle:Parametrage')->findOneBy(array(), array('id' => 'DESC'));
        return $this->render('FdrAdminBundle:Home:index.html.twig', array('notes'=>  $param?$param->getNotesAccueil():"Aucune note mentionné",'user' => ($this->getUser()) ? $this->getUser() : null, 'role' => ($role) ? $role : 'non'));
    }

}
