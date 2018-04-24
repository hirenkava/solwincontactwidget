<?php
/**
 * Copyright © 2015 Contactwidget . All rights reserved.
 */
namespace Solwin\Contactwidget\Block;
use Magento\Framework\UrlFactory;
class BaseBlock extends \Magento\Framework\View\Element\Template
{
	/**
     * @var \Solwin\Contactwidget\Helper\Data
     */
	 protected $_devToolHelper;
	 
	 /**
     * @var \Magento\Framework\Url
     */
	 protected $_urlApp;

    /**
     * @param \Solwin\Contactwidget\Block\Context $context
	 * @param \Magento\Framework\UrlFactory $urlFactory
     */
    public function __construct( \Solwin\Contactwidget\Block\Context $context
	)
    {
        $this->_devToolHelper = $context->getContactwidgetHelper();		
        $this->_urlApp=$context->getUrlFactory()->create();
		parent::__construct($context);
	
    }
	
	/**
	 * Function for getting event details
	 * @return array
	 */
    public function getEventDetails()
    {
		return  $this->_devToolHelper->getEventDetails();
    }
	
	/**
     * Function for getting current url
	 * @return string
     */
	public function getCurrentUrl(){
		return $this->_urlApp->getCurrentUrl();
	}
	
	/**
     * Function for getting controller url for given router path
	 * @param string $routePath
	 * @return string
     */
	public function getControllerUrl($routePath){
		
		return $this->_urlApp->getUrl($routePath);
	}
	
	/**
     * Function for getting current url
	 * @param string $path
	 * @return string
     */
	public function getConfigValue($path){
		//return $this->_config->getCurrentStoreConfigValue($path);
	}
	
	/**
     * Function canShowContactwidget
	 * @return bool
     */
	public function canShowContactwidget(){
		return true;
	}
	
}
