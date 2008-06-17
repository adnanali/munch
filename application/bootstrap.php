<?php

include_once dirname(__FILE__) . "/global.php";

$controller = Zend_Controller_Front::getInstance();

$controller->addControllerDirectory(ROOT_DIR . '/application/controllers');
$controller->addModuleDirectory(ROOT_DIR . '/application/modules');

$controller->throwExceptions(true);

// view
$view = new Zend_View();
$view->setEncoding('UTF-8');
$view->addHelperPath(ROOT_DIR . '/library/Core/View/Helper', 'Core_View_Helper_');

$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer($view);
Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);

// layout
$layout = Zend_Layout::startMvc(array (
	'layout' => 'common',
	'layoutPath' => ROOT_DIR . '/application/views/layouts',
));


$controller->dispatch();

