<?php
/**
 * Initialise Pimcore so Magento can access it's methods
 *
 * @category    Magepim
 * @package     Magepim_Pimcore
 * @copyright   Copyright (c) 2015 MagePim. (http://www.magepim.com)
 * @author		Richard Cleverley <richard@magepim.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


class Magepim_Pimcore_Helper_View extends Mage_Core_Helper_Abstract
{
    /**
     * Constructor
     */
    public function __construct(){
        $this->_initPimcore();
    }

    /**
     * Initialise Pimcore using config settings.
     */
    protected function _initPimcore(){
        $pathToPimcore = Mage::getStoreConfig('magepim_pimcore/pimcore/path');
        include_once($pathToPimcore."/pimcore/config/startup.php");
        include_once($pathToPimcore."/website/lib/PimcoreApp.php");
        PimcoreApp::run();
    }


    /**
     * View Helper to pass from Magento templates to Pimcore
     *
     * @param string $template
     *
     * @return string Raw HTML
     */
    public function pimcoreTemplate($template){

        return Mage::getModel('pimcore/pimcore')->pimcoreTemplate($template);
    }

    /**
     * View Helper to pass through to Pimcore actions
     *
     * @param string $action
     * @param string $controller
     * @param array $params
     *
     * @return string Raw HTML
     */
    public function pimcoreAction($action,$controller,$params)
    {
        return Mage::getModel('pimcore/pimcore')->pimcoreAction($action,$controller,$params);

    }

    /**
     * View Helper to pass through to Pimcore snippets
     *
     * @param string $snippet
     *
     * @return string Raw HTML
     */
    public function pimcoreSnippet($snippet)
    {
        return Mage::getModel('pimcore/pimcore')->pimcoreSnippet($snippet);

    }
}