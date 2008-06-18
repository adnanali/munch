<?php

class Core_Auth_Adapter implements Zend_Auth_Adapter_Interface {
	
	protected $username;
	protected $password;
	
	
	/**
	 * action
	 *
	 * @var Core_Controller_Action
	 */
	protected $action = null;
	
	public function __construct($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}
	
	public function setAction ($action) {
		$this->action = $action;
	}
	
	/**
	 * Enter description here...
	 *
	 * @return Zend_Auth_Result
	 */
	public function authenticate () {
		// get the user from the db
		$user = Doctrine::getTable('User')->findOneByEmail($this->username);
		//$user = Doctrine::
		
		//echo $this->username;
		if (!$user || $this->password != $user->password) {
			return new Zend_Auth_Result(false, $this->username, array("Sorry, it didn't work out"));
		}
		if ($this->action) {
			$this->action->setSession('user', $user);
		}
		return new Zend_Auth_Result(true, $this->username, array("dandy!"));		
	}
}
?>