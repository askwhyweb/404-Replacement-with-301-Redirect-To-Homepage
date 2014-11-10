<?php
/**
 * SkyMagento Solutions
 *
 * @category   SkyMagento
 * @package    SkyMagento_Redirect
 * @copyright  Copyright (c) 2003-2009 SkyMagento Solutions. (http://www.SkyMagento.com)
 */ 


class SkyMagento_Redirect_Block_Info extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		
		$html = $this->_getHeaderHtml($element);
		
		$html.= $this->_getFieldHtml($element);
        
        $html .= $this->_getFooterHtml($element);

        return $html;
    }

   

	protected function _getFieldHtml($fieldset)
    {
		$content = 'This module is developed by <a href="http://www.skymagento.com/">SkyMagento.com</a> to offer client a new customized default 404 replacement with 301 permanent redirect to homepage. This should fix any SEO errors after migrating to Magento. Please note its not recomended to use this extension for life but as long as your old link structure is fully fixed in Search Engines.';
		return $content;
    }
}
