<?php

class LoginForm extends Zend_Form {
	
	public function init() {
		$email = $this->createElement('text', 'email');
		$email->addValidator('emailaddress')
			  ->setRequired(true);
			  
		
		$this->addElement($email);
		
		
	}
}
?>