<?php

class IndexController extends Core_Controller_Action
{
	public function indexAction ()
	{
		$this->view->message = "Hello Message!";
		
		// get the user if logged in
		$this->view->user = $this->getSession('user');
		
	}

}
