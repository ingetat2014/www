<?php

namespace Fdr\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FdrUserBundle extends Bundle
{
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
