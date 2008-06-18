<?php

class Admin_PartialController extends Core_Controller_Action {
	public function navAction() {
		//$this->_helper->layout->disableLayout();
		
		$baseUrl = $this->getRequest()->getBaseUrl();
		$this->view->baseUrl = $baseUrl;
		$nav = array (
			'Home' => '/admin/',
		);
		
		if ($this->isLoggedAdminUser()) {
			$nav['Logout'] = '/admin/user/logout';
		} else {
			$nav['Login'] = '/admin/user/login';
		}
		
		$this->view->links = $nav;
		
		//$this->render('nav', 'nav');
		$this->_helper->viewRenderer('nav', 'nav');
	}	
}

?>