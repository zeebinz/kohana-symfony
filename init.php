<?php defined('SYSPATH') or die('No direct script access.');

// Register the Symfony autoloader
include __DIR__.'/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->register();

// Register the Symfony namespace
$loader->registerNamespace('Symfony', realpath(__DIR__.'/vendor'));
