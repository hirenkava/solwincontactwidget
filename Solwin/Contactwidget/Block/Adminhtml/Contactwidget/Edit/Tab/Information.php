<?php

namespace Solwin\Contactwidget\Block\Adminhtml\Contactwidget\Edit\Tab;

class Information extends \Magento\Backend\Block\Widget\Form\Generic implements \Magento\Backend\Block\Widget\Tab\TabInterface {

    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    /**
     * @var \Solwin\Contactwidget\Helper\Data
     */
    protected $_dataHelper;

    /**
     * @var \Magento\Catalog\Model\CategoryFactory
     */
    protected $_contactwidget;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Store\Model\System\Store $systemStore
     * @param array $data
     */
    public function __construct(
    \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, array $data = array(), \Solwin\Contactwidget\Helper\Data $helper, \Solwin\Contactwidget\Model\Contactwidget $contactwidget
    ) {
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
        $this->_contactwidget = $contactwidget;
        $this->_dataHelper = $helper;
    }

    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm() {
        /* @var $model \Magento\Cms\Model\Page */
        $model = $this->_coreRegistry->registry('contact');
        $isElementDisabled = false;
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();

        //$form->setHtmlIdPrefix('page_');
        $htmlIdPrefix = $form->getHtmlIdPrefix();
        $fieldset = $form->addFieldset('base_fieldset', array('legend' => __('Contact Information')));

        if ($model->getId()) {           
			$fieldset->addField('id', 'hidden', ['name' => 'id']);
        }

        $fieldset->addField(
            'name', 'text', array(
                'name' => 'name',
                'class' => 'validate-alphanum-with-spaces',
                'label' => __('Name'),
                'title' => __('Name'),
                'required' => true
            )
        );
		
		$fieldset->addField(
            'email', 'text', array(
                'name' => 'email',
                'class' => 'validate-email',
                'label' => __('Email'),
                'title' => __('Email'),
                'required' => true
            )
        );
		
		$fieldset->addField(
            'phone_number', 'text', array(
                'name' => 'phone_number',
                'class' => 'validate-alphanum-with-spaces',
                'label' => __('Phone Number'),
                'title' => __('Phone Number'),
                'required' => true
            )
        );
		
		$fieldset->addField(
            'subject', 'text', array(
                'name' => 'subject',
                'class' => 'validate-alphanum-with-spaces',
                'label' => __('Subject'),
                'title' => __('Subject'),
                'required' => true
            )
        );
		
		$fieldset->addField(
            'whats_on_your_mind', 'textarea', array(
                'name' => 'whats_on_your_mind',
                'class' => 'validate-alphanum-with-spaces',
                'label' => __('Whats On Your Mind'),
                'title' => __('Whats On Your Mind'),
                'required' => true
            )
        );
		
		$fieldset->addField(
            'any_specific_services', 'checkbox', array(
                'name' => 'any_specific_services',
                'class' => 'check_services',
                'label' => __('New Service'),
                'title' => __('New Service'),
                'required' => false
            )
        )->setIsChecked($model->getAnySpecificServices());
		$serviceArr = array('1'=>'-- Please select --','New Project' => 'New Project', 'Existing Project Maintenance' => 'Existing Project Maintenance','Other'=>'Other');
        $fieldset->addField('service', 'select', array(
            'label' => 'Service',
            'name' => 'service',
            'style' => 'width:150px',
            'required' => false,
            'values' => $serviceArr
        ));
		
		$comfortableWithArr = array('phone' => 'Phone', 'email' => 'Email');
        $fieldset->addField('comfortable_with', 'select', array(
            'label' => 'Contact through',
            'class' => 'required-entry',
            'name' => 'comfortable_with',
            'style' => 'width:150px',
            'required' => true,
            'disabled' => false,
            'values' => $comfortableWithArr
        ));
        $form->setValues($model->getData());
        $this->setForm($form);


        return parent::_prepareForm();
    }

    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel() {
        return __('Information');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle() {
        return __('Information');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab() {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden() {
        return false;
    }

    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId) {
        return $this->_authorization->isAllowed($resourceId);
    }
}