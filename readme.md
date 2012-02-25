Symfony Components for Kohana
=============================

This module vendors some handy Symfony components for use with Kohana as an alternative
to installing via PEAR or other means. It uses Symfony's own UniversalClassLoader to
autoload classes, and provides some basic extensible wrappers for the components:

Finder Component
----------------

Finder finds files and directories via an intuitive fluent interface.

    $files = Finder::factory()
      ->files()
      ->name('*.php')
      ->depth(0)
      ->size('>= 1K')
      ->date('since 1 hour ago')
      ->in(__DIR__);

    foreach ($files as $file) {
      echo $file->getRealpath()."\n";
    }

Yaml Component
--------------

YAML implements most of the YAML 1.2 specification.

    // Parse a YAML source (file path or YAML string)
    $array = Yaml::parse($file);
    
    // Enable parsing of PHP code in the YAML source
    $array = Yaml::parse($file, TRUE);

    echo Debug::vars(Yaml::dump($array));

