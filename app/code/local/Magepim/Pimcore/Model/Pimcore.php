<?php
/**
 * Access Pimcore methods
 *
 * @category    Magepim
 * @package     Magepim_Pimcore
 * @copyright   Copyright (c) 2015 MagePim. (http://www.magepim.com)
 * @author		Richard Cleverley <richard@magepim.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Magepim_Pimcore_Model_Pimcore extends Pimcore_View
{

    public function pimcoreTemplate($template)
    {
            return $this->template($template);
    }
    public function pimcoreAction($action,$controller,$params)
    {

        return $this->action($action,$controller,null,$params);
    }
    public function pimcoreSnippet($snippet)
    {

        return $this->snippet($snippet);
    }


}