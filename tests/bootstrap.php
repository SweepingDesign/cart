<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

if ( ! is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
    echo 'Could not find "vendor/autoload.php". Did you forget to run "composer install"?'.PHP_EOL;
    exit(1);
}

$loader = require $autoloadFile;
AnnotationRegistry::registerLoader('class_exists');
$loader->add('Leaphly\Cart\Tests', __DIR__);
