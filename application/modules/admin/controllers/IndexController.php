<?php

class Admin_IndexController extends Core_Controller_Action {

	public function indexAction() {
		// if the user is logged in, then redirect to dashboard page
		
		// if the user is not logged in, then redirect to login page
		//$this->
	
	}
	
	public function navAction() {
		$baseUrl = $this->getRequest()->getBaseUrl();
		$this->view->baseUrl = $baseUrl;
		$nav = array (
			'Home' => '/admin/',
			'Login' => '/admin/user/login', 
		);
		
		$this->view->links = $nav;
	}
}
?>