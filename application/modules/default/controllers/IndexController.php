<?php

class IndexController extends Core_Controller_Action
{
	public function indexAction ()
	{
		$this->view->message = "Hello Message!";
	}

}
