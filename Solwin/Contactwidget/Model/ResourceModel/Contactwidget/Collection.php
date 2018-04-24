<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Solwin\Contactwidget\Model\ResourceModel\Contactwidget;

/**
 * Contactwidget Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * ID Field Name
     *
     * @var string
     */
    protected $_idFieldName = \Solwin\Contactwidget\Model\Contactwidget::CONTACT_ID;
    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'cw_contacts_grid_collection';
    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'contacts_grid_collection';
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Solwin\Contactwidget\Model\Contactwidget', 'Solwin\Contactwidget\Model\ResourceModel\Contactwidget');
    }

    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     *
     * @return \Magento\Framework\DB\Select
     */
    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(\Zend_Db_Select::GROUP);
        return $countSelect;
    }
    /**
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     */
    protected function _toOptionArray($valueField = 'id', $labelField = 'name', $additional = [])
    {
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }
}
