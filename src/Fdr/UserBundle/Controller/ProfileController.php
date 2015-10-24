<?php

namespace Fdr\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends BaseController {

    public function showAction()
    {
          $response = parent::showAction();
          return $response;
    }
    
    public function editAction(Request $request) {
        return $this->redirect($this->generateUrl('fos_user_profile_show'));
        //$request = $this->get('request');
        $response = parent::editAction($request);
          return $response;
          /***ZJout dans fos**/
          /*
        $emRole = $this->getDoctrine()->getManager();
        $roles=($this->getUser())?$this->getUser()->getRoles():array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        if(!$role)
        {
            throw $this->createAccessDeniedException("Vous n'avez pas le droit d'accèder à cette page ");
        }
        */
          /******************/
    }
    
}
