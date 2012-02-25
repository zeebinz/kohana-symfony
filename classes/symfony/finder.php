<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Static wrapper class for the Symfony Finder component.
 *
 * @package    Symfony/Components
 * @category   Finder
 * @author     Zeebee
 * @copyright  (c) 2012 Zeebee
 * @license    BSD revised
 */
abstract class Symfony_Finder
{
	/**
	 * Creates Symfony Finder instances for chaining
	 * 
	 * @returns  Symfony\Component\Finder\Finder
	 */
	static public function factory()
	{
		return Symfony\Component\Finder\Finder::create();
	}

} // End Symfony_Finder
