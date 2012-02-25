<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Static wrapper class for the Symfony Yaml component.
 *
 * @package    Symfony/Components
 * @category   Yaml
 * @author     Zeebee
 * @copyright  (c) 2012 Zeebee
 * @license    BSD revised
 */
abstract class Symfony_Yaml
{
	/**
	 * Creates Symfony Yaml Parser or Dumper instances.
	 * 
	 * @param    string  the Yaml object type to create
	 * @returns  Symfony\Component\Yaml\Parser
	 * @returns  Symfony\Component\Yaml\Dumper
	 */
	static public function factory($type = 'parser')
	{
		if ($type == 'dumper')
		{
			return new Symfony\Component\Yaml\Dumper();
		}
		
		return new Symfony\Component\Yaml\Parser();		
	}

	/**
	 * Convienience method for parsing a YAML file or string into a PHP array.
	 *
	 * Optionally, any PHP code in the YAML source may also be parsed by setting
	 * the second parameter to TRUE.
	 *
	 * @param   string   path to the YAML file, or YAML string
	 * @param   boolean  should PHP parsing be enabled?
	 * @return  array    the YAML converted to a PHP array
	 * @throws  ParseException  if the YAML is not valid
	 */
	static public function parse($input, $parse_php = FALSE)
	{
		Symfony\Component\Yaml\Yaml::$enablePhpParsing = (bool) $parse_php;
		
		return Symfony\Component\Yaml\Yaml::parse($input);
	}

	/**
	 * Convenience method for dumping a PHP array to a YAML string.
	 * 
	 * @param   array    a PHP array
	 * @param   integer  the level at which switch to inline YAML
	 * @return  string   a YAML string
	 * @throws  DumpException  when trying to dump a PHP resource	 
	 */
	static public function dump($array, $inline = 2)
	{
		return Symfony\Component\Yaml\Yaml::dump($array, $inline);
	}
	
} // End Symfony_Yaml
