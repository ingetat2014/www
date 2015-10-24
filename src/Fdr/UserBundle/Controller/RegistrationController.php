<?php

namespace Fdr\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends BaseController {

    public function registerAction(Request $request) {
        
          $request = $this->get('request');
          $response = parent::registerAction($request);
          return $response;
    }

}
