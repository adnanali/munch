<?php

class AdminController extends Core_Controller_Action {
	public function init () {
		$this->_helper->actionStack('nav', 'partial');
	}
}
?>