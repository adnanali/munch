<?php

/**
 * BaseUrl helper
 *
 * @package Core_View
 * @subpackage Helper
 */
class Core_View_Helper_BaseUrl
{
    /**
     * Returns site base url
     *
     * $file is appended to the base url for simplicity
     *
     * @param string $file
     * @return string
     */
    public function baseUrl($file = null)
    {
        return Zend_Controller_Front::getInstance()->getRequest()->getBaseUrl()
                . ($file ? ('/' . trim((string) $file, '/\\')) : '');
    }
}