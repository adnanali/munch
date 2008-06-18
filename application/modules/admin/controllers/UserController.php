<?php

class Admin_UserController extends AdminController  {

	public function indexAction() {
	
	}
	
	public function loginAction() {
		$auth = Zend_Auth::getInstance();		
		if ($auth->hasIdentity()) {
			$this->_redirect('/admin/');
		}
		
		// the login page
		$loginForm = new LoginForm(array('action' => '/admin/user/login'
									, 'method' => 'post'));
		
		$request = $this->getRequest();
		//$loginForm->persistData();
		$this->view->form = $loginForm;
		if (!$request->isPost()) {
			return;
		} else {
			//print_r ($request->getParams());
			if (!$this->view->form->isValid($request->getParams())) {
				// do further login validation here.
        		$loginForm->populate($request->getParams());
				return;
			}
		}
		
		$values = $this->view->form->getValues();
		// code will get here if form is valid
		// Let's see if the auth works eh.


		$adapter = new Core_Auth_Adapter($values['login']['email'], $values['login']['password']);		
		$adapter->setAction($this);
				
		$result = $auth->authenticate($adapter);
		
		if (!$result->isValid()) {
			die ('dying from login error, add error messages/flash messages');
			return;
		}
		
		$url = '/admin';
		if ($request->getParam('redirectTo')) {
			$url = $request->getParam('redirectTo');
		}
		$this->_redirect($url);
				
	}
	
	public function logoutAction () {
		Zend_Auth::getInstance()->clearIdentity();
		$this->setSession('user', null);
		
		$this->_redirect ('/admin/user/login');
	}
}
?>