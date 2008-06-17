<?php

include_once dirname(__FILE__) . "/global.php";

// layout
$layout = Zend_Layout::startMvc(array (
	'layout' => 'common',
	'layoutPath' => ROOT_DIR . '/application/views/layouts',
));

$controller = Zend_Controller_Front::getInstance();

$controller->addControllerDirectory(ROOT_DIR . '/application/controllers');
$controller->addModuleDirectory(ROOT_DIR . '/application/modules');

$controller->throwExceptions(true);
$controller->dispatch();

