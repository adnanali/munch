<?php
/**
 * HeadScripts helper
 *
 * @package Core_View
 * @subpackage Helper
 */
class Core_View_Helper_HeadScripts
{
    /**
     * Returns the head script links
     *
     *
     * @param string $options
     * @return string
     */
    public function headScripts ($options = null)
    {
    	$baseUrlHelper = new Core_View_Helper_BaseUrl();
    	$baseUrl = $baseUrlHelper->baseUrl();
    	
        $returnValue = '<link rel="stylesheet" href="' . $baseUrl . '/css/blueprint/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="' . $baseUrl . '/css/style.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="' . $baseUrl . '/css/blueprint/print.css" type="text/css" media="print" />
    <!--[if IE]><link rel="stylesheet" href="' . $baseUrl . '/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->';

        return $returnValue;
    }
}
?>