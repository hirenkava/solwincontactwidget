<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Solwin\Contactwidget\Controller\Adminhtml\ContactwidgetGrid;

use Magento\Backend\App\Action\Context;
use Solwin\Contactwidget\Model\Contactwidget as ContactwidgetRepository;
use Magento\Framework\Controller\Result\JsonFactory;
use Solwin\Contactwidget\Api\Data\ContactwidgetInterface;

class InlineEdit extends \Magento\Backend\App\Action
{
    /** @var BlockRepository  */
    protected $blockRepository;

    /** @var JsonFactory  */
    protected $jsonFactory;

    /**
     * @param Context $context
     * @param BlockRepository $blockRepository
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        ContactwidgetRepository $blockRepository,
        JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->blockRepository = $blockRepository;
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        if ($this->getRequest()->getParam('isAjax')) {
            $postItems = $this->getRequest()->getParam('items', []);
            if (!count($postItems)) {
                $messages[] = __('Please correct the data sent.');
                $error = true;
            } else {
                foreach (array_keys($postItems) as $blockId) {
                    /** @var \Magento\Cms\Model\Block $block */
                    $block = $this->blockRepository->load($blockId);
                    try {
                        $block->setData(array_merge($block->getData(), $postItems[$blockId]));
                        $this->blockRepository->save($block);
                    } catch (\Exception $e) {
                        $messages[] = $this->getErrorWithBlockId(
                            $block,
                            __($e->getMessage())
                        );
                        $error = true;
                    }
                }
            }
        }

        return $resultJson->setData([
            'messages' => $messages,
            'error' => $error
        ]);
    }

    /**
     * Add contactwidget title to error message
     *
     * @param ContactwidgetInterface $block
     * @param string $errorText
     * @return string
     */
    protected function getErrorWithBlockId(ContactwidgetInterface $block, $errorText)
    {
        return '[Contactwidget ID: ' . $block->getId() . '] ' . $errorText;
    }
}