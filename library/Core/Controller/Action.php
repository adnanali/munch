<?php

class Core_Controller_Action extends Zend_Controller_Action 
{
	public function setSession ($key, $value, $namespace = 'Default') {
		$session = new Zend_Session_Namespace($namespace);
		$session->$key = $value;
	}
	
	public function getSession ($key, $namespace = 'Default') {
		$session = new Zend_Session_Namespace($namespace);
		return $session->$key;
	}
	
	public function isLoggedIn () {
		if ($this->getSession('user')) {
			return true;
		}
		return false;
	}
	
	public function isLoggedAdminUser () {
		$user = $this->getSession('user');
		if ($user) {
			//if ($user->admin) {
				return true;
			//}
		}
		
		return false;
	}
}
