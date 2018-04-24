<?php
namespace Solwin\Contactwidget\Block\Adminhtml;
class Contactwidget extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_contactwidget';/*block grid.php directory*/
        $this->_blockGroup = 'Solwin_Contactwidget';
        $this->_headerText = __('Manage Contactwidget');
        $this->_addButtonLabel = __('Add New Contactwidget'); 
        parent::_construct();
		
    }
}
