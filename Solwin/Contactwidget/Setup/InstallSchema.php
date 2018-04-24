<?php

/**
 * Copyright © 2015 Contactwidget. All rights reserved.
 */

namespace Solwin\Contactwidget\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface {

    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {

        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'contactwidget_contactwidget'
         */
        $table = $installer->getConnection()->newTable(
                        $installer->getTable('solwin_contact_form_data')
                )
                ->addColumn(
                        'id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'solwin_contact_form_data'
                )
                ->addColumn(
                        'name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'name'
                )
				->addColumn(
                        'email', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'email'
                )
                ->addColumn(
                        'phone_number', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'phone_number'
                )
				->addColumn(
                        'subject', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'subject'
                )
                ->addColumn(
                        'any_specific_services', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, [], 'any_specific_services'
                )
				->addColumn(
                        'service', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'service'
                )
                ->addColumn(
                        'whats_on_your_mind', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 500, [], 'whats_on_your_mind'
                )
                ->addColumn(
                        'comfortable_with', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'comfortable_with'
                )
                ->addColumn(
                        'creation_time', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT], 'Contactwidget Creation Time'
                )->addColumn(
                        'update_time', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE], 'Contactwidget Modification Time'
                )
                /* {{CedAddTableColumn}}} */
                ->setComment(
                'Solwin Contactwidget'
        );

        $installer->getConnection()->createTable($table);
        /* {{CedAddTable}} */

        $installer->endSetup();
    }

}
