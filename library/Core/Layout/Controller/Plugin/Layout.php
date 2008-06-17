<?php

class Core_Layout_Controller_Plugin_Layout extends Zend_Layout_Controller_Plugin_Layout
{
    
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
    	$this->_moduleChange($request->getModuleName());
    }

    protected function _moduleChange($moduleName)
    {
    	//die ($this->getLayout()->getLayoutPath());
        $this->getLayout()->setLayoutPath(
            dirname(dirname(dirname(
                $this->getLayout()->getLayoutPath()
            )))
            . DIRECTORY_SEPARATOR . $moduleName . '/views/layouts'
        );
        //$this->getLayout()->setLayout($moduleName);
    }
    
}