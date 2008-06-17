<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
date_default_timezone_set('America/Toronto');

/*
 * Setup libraries & autoloaders
 */

define ('ROOT_DIR', dirname(dirname(__FILE__)));

$paths = array ( get_include_path(),
	ROOT_DIR . '/library',
	ROOT_DIR . '/application/forms',
	ROOT_DIR . '/application/models',
	ROOT_DIR . '/application/models/generated',
);


set_include_path(implode(PATH_SEPARATOR, $paths));

require 'Zend/Loader.php';
require 'Doctrine.php';

Zend_Loader::registerAutoload('Zend_Loader');

#spl_autoload_register(array('Doctrine', 'autoload'));

/*
 * Set super-global data
 */
Doctrine_Manager::connection("mysql://root@localhost/munch");

/*
 * Configure Doctrine
 */
Zend_Registry::set('doctrine_config', array(
        'data_fixtures_path'  =>  ROOT_DIR.'/application/doctrine/data/fixtures',
        'models_path'         =>  ROOT_DIR.'/application/models',
        'migrations_path'     =>  ROOT_DIR.'/application/doctrine/migrations',
        'sql_path'            =>  ROOT_DIR.'/application/doctrine/data/sql',
        'yaml_schema_path'    =>  ROOT_DIR.'/application/doctrine/schema'
        )); 

