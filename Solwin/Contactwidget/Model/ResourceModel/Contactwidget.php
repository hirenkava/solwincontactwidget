<?php
/**
 * Copyright © 2015 Contactwidget. All rights reserved.
 */
namespace Solwin\Contactwidget\Model\ResourceModel;

/**
 * Contactwidget resource
 */
class Contactwidget extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_resources;

    protected $request;
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('solwin_contact_form_data', 'id');
    }

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\App\Request\Http $request,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
        $this->request = $request;
    }

    protected function _afterLoad( \Magento\Framework\Model\AbstractModel $object ) {
        $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()
            ->get('Magento\Framework\App\ResourceConnection');
        $connection= $this->_resources->getConnection();
        return parent::_afterLoad( $object );
    }

    protected function _afterSave( \Magento\Framework\Model\AbstractModel $object ) {
        $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()
            ->get('Magento\Framework\App\ResourceConnection');
        $connection= $this->_resources->getConnection();
        $postData = $this->request->getPostValue();
        return $this;
    }
}
