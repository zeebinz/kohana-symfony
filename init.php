<?php defined('SYSPATH') or die('No direct script access.');

if ( ! class_exists('Symfony\Component\ClassLoader\UniversalClassLoader', FALSE)) 
{
	// Require the Symfony UniversalClassLoader
	require __DIR__.'/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';
}

// Register the autoloader
$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->register();

// Register the Symfony namespace with the autoloader
$loader->registerNamespace('Symfony', realpath(__DIR__.'/vendor'));
