<?php

/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
/**
 * Used in creating options for Yes|No config value selection
 *
 */

namespace Solwin\Contactwidget\Ui\Component\Listing\Columns;

class Services implements \Magento\Framework\Option\ArrayInterface {
    
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return [['value' => 'New Project', 'label' => __('New Project')], ['value' => 'Existing Project Maintenance', 'label' => __('Existing Project Maintenance')],['value' => 'Other', 'label' => __('Other')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray() {
        return ['Other'=>__('Other'),'Existing Project Maintenance' => __('Existing Project Maintenance'), 'New Project' => __('New Project')];
    }

}
