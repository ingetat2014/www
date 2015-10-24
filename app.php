<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;
$loader = require_once __DIR__.'/app/bootstrap.php.cache';

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('prod', true);//etait $kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
echo "Redirection :: En maintenance";
        $request = Request::createFromGlobals();
        $serveur = $request->server->get("SERVER_NAME");
        $base = $request->server->get("BASE");
        $env = "/web/";        
         header('Location:  http://'.$serveur.$base.$env);
        exit();
//header