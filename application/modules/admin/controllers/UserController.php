<?php

class Admin_UserController extends Core_Controller_Action {

	public function indexAction() {
	
	}
	
	public function loginAction() {
		// the login page
		$loginForm = new LoginForm(array('action' => '/admin/user/login'
									, 'method' => 'post'));
		
		$request = $this->getRequest();
		//$loginForm->persistData();
		if ($request->isPost()) {
			
			print_r ($request->getParams());
			if ($loginForm->isValid($request->getParams())) {
				// do further login validation here.
				
			}
			$loginForm->populate($request->getParams());
		}
									
		$this->view->form = $loginForm;
		
		
	}
}
?>