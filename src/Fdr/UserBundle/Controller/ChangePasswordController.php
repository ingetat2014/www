<?php

namespace Fdr\UserBundle\Controller;

use FOS\UserBundle\Controller\ChangePasswordController as BaseController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ChangePasswordController extends BaseController
{
    
    public function changePasswordAction(\Symfony\Component\HttpFoundation\Request $request) {
        return parent::changePasswordAction($request);
    }
    
}
