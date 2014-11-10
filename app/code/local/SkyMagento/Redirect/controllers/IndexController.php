<?php
require_once "Mage/Cms/controllers/IndexController.php";

class SkyMagento_Redirect_IndexController extends Mage_Cms_IndexController
{
	public function noRouteAction($coreRoute = null)
    {
		$configValue = Mage::getStoreConfig('redirect/settings/status', Mage::app()->getStore());
		if($configValue)
		{
			header("HTTP/1.1 301 Moved Permanently"); 
			header("Location: ".Mage::helper('core/url')->getHomeUrl());
			exit();
		}
		return parent::noRouteAction($coreRoute = null);
    }
}