<?php
namespace Solwin\Contactwidget\Block\Adminhtml\Contactwidget\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('solwin_contactwidget_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Contact Information'));
    }

    protected function _prepareLayout()
    {
        
    }
}