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
		$this->view->form = $loginForm;
		if (!$request->isPost()) {
			return;
		} else {
			print_r ($request->getParams());
			if (!$this->view->form->isValid($request->getParams())) {
				// do further login validation here.
        		$loginForm->populate($request->getParams());
				return;
			}
		}
		
		// code will get here if form is valid
									
		
		
	}
}
?>