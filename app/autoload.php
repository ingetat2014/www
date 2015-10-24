<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

// permettra à l’autoload d’importer la librarie HTML2PDF
$loader->add('Html2Pdf_', __DIR__.'/../vendor/html2pdf/lib'); //ligne à ajouter
$loader->add('Ivory\\CKEditorBundle' ,__DIR__.'/../vendor/bundles'); //ligne à ajouter ??
$loader->register();

// Change nested level max for xdebug komay
if (false !== ini_get('xdebug.max_nesting_level')) {
    ini_set('xdebug.max_nesting_level', 500);
}

return $loader;
