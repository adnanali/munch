<?php

class Admin_UserController extends Core_Controller_Action {

	public function indexAction() {
	
	}
	
	public function loginAction() {
		// the login page
		$loginForm = new LoginForm();
		
		$this->view->form = $loginForm;
	}
}
?>