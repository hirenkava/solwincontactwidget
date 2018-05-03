<?php

namespace Solwin\Contactwidget\Controller\Adminhtml\ContactwidgetGrid;

use Magento\Framework\App\Filesystem\DirectoryList;

class Save extends \Magento\Backend\App\Action {
	 
    public function execute() {

        $data = $this->getRequest()->getParams();        
        if ($data) {
            $model = $this->_objectManager->create('Solwin\Contactwidget\Model\Contactwidget');
            $id = $this->getRequest()->getParam('id');
            if ($id) {
                $model->load($id);
            } 		
			$data['any_specific_services'] = (isset($data['any_specific_services'])) ? $data['any_specific_services'] : 0;
			$data['service'] = ($data['any_specific_services'] == 1) ? $data['service'] : '';
            $model->setData($data);
            try {
                $model->save();
                $this->messageManager->addSuccess(__('Contact has been saved.'));
                $this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $model->getId(), '_current' => true));
                    return;
                }
                $this->_redirect('*/*/index');
                return;
            } catch (\Magento\Framework\Model\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {

                $this->messageManager->addException($e, __($e->getMessage() . ' Something went wrong while saving the Contactwidget.'));
            }

            $this->_getSession()->setFormData($data);
            $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            return;
        }
        $this->_redirect('*/*/index');
    }

}
