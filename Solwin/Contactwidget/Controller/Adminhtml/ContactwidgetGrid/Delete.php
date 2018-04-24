<?php

namespace Solwin\Contactwidget\Controller\Adminhtml\ContactwidgetGrid;

use Magento\Framework\App\Filesystem\DirectoryList;

class Delete extends \Magento\Backend\App\Action {

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute() {
        $id = $this->getRequest()->getParam('id');
        try {
            $contactwidget = $this->_objectManager->get('Solwin\Contactwidget\Model\Contactwidget')->load($id);
            $contactwidget->delete();
            $this->messageManager->addSuccess(
                    __('Contact Deleted successfully !')
            );
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $this->_redirect('*/*/index');
    }

}
