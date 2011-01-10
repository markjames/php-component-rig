<?php

require_once __DIR__.'/../src/vendor/Symfony/Component/HttpFoundation/UniversalClassLoader.php';

use Symfony\Component\HttpFoundation\UniversalClassLoader;

echo __DIR__.'/../src/Example'.PHP_EOL;
$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
  'Example' => __DIR__.'/../src'
));
$loader->register();
