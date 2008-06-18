<?php

class LoginForm extends Zend_Form {
	
	public function init() {
		
		//$this->setSubForms()
		//$this->setIsArray(true);
		//$this->setElementsBelongTo('login');
		
		$form = new Zend_Form_SubForm();
		
		$email = $this->createElement('text', 'email');
		$email->addValidator('emailaddress')
			  ->setRequired(true)
			  ->setLabel('Email')
			  //->setBelongsTo('login')
			  ;
		
		$password = $this->createElement('password', "password")
						->addValidator('stringLength', false, array (6,20))
						->setRequired(true)
						->setLabel('Password')
						->setBelongsTo('test')
						;

		$submit = $this->createElement('submit', 'submit'); 
		
		$form->addElement($email)
			 ->addElement($password);
			 
		$form->addElement($submit);		
		$this->setSubForms(array('login' => $form));
	}
}
?>