<?php
/**
 * Copyright © 2015 Contactwidget. All rights reserved.
 */

namespace Solwin\Contactwidget\Model;

use Magento\Framework\Exception\ContactwidgetException;
use Solwin\Contactwidget\Api\Data\ContactwidgetInterface;

/**
 * Contactwidgettab Contactwidget model
 */
class Contactwidget extends \Magento\Framework\Model\AbstractModel implements ContactwidgetInterface
{
	
    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\Db $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init('Solwin\Contactwidget\Model\ResourceModel\Contactwidget');
    }

    /**
     * Retrieve block id
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::CONTACT_ID);
    }

    /**
     * Retrieve block identifier
     *
     * @return string
     */
    public function getName()
    {
        return (string)$this->getData(self::CONTACT_NAME);
    }

    /**
     * Retrieve block email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::CONTACT_EMAIL);
    }
	
	/**
     * Retrieve block phone number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(self::CONTACT_PHONE_NUMBER);
    }
	
	/**
     * Retrieve block subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->getData(self::CONTACT_SUBJECT);
    }
	
	/**
     * Retrieve block whats on your mind
     *
     * @return string
     */
    public function getWhatsOnYourMind()
    {
        return $this->getData(self::CONTACT_WHATS_ON_YOUR_MIND);
    }
	
	/**
     * Retrieve block any specific services
     *
     * @return string
     */
    public function getAnySpecificServices()
    {
        return $this->getData(self::CONTACT_ANY_SPECIFIC_SERVICES);
    }
	
	/**
     * Retrieve block service
     *
     * @return string
     */
    public function getService()
    {
        return $this->getData(self::CONTACT_SERVICE);
    }
	
	/**
     * Retrieve block comfortable with
     *
     * @return string
     */
    public function getComfortableWith()
    {
        return $this->getData(self::CONTACT_COMFORTABLE_WITH);
    }

    /**
     * Retrieve block creation time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve block update time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return BlockInterface
     */
    public function setId($id)
    {
        return $this->setData(self::CONTACT_ID, $id);
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setName($name)
    {
        return $this->setData(self::CONTACT_NAME, $name);
    }

    /**
     * Set email
     *
     * @param string $email
     * @return BlockInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::CONTACT_EMAIL, $email);
    }
	
	/**
     * Set phone number
     *
     * @param string $phonenumber
     * @return BlockInterface
     */
    public function setPhoneNumber($phonenumber)
    {
        return $this->setData(self::CONTACT_PHONE_NUMBER, $phonenumber);
    }
	
	/**
     * Set subject
     *
     * @param string $subject
     * @return BlockInterface
     */
    public function setSubject($subject)
    {
        return $this->setData(self::CONTACT_SUBJECT, $subject);
    }
	
	/**
     * Set whatsonyourmind
     *
     * @param string $whatsonyourmind
     * @return BlockInterface
     */
    public function setWhatsOnYourMind($whatsonyourmind)
    {
        return $this->setData(self::CONTACT_WHATS_ON_YOUR_MIND, $whatsonyourmind);
    }
	
	/**
     * Set anyspecificservices
     *
     * @param string $anyspecificservices
     * @return BlockInterface
     */
    public function setAnySpecificServices($anyspecificservices)
    {
        return $this->setData(self::CONTACT_ANY_SPECIFIC_SERVICES, $anyspecificservices);
    }
	
	/**
     * Set service
     *
     * @param string $service
     * @return BlockInterface
     */
    public function setService($service)
    {
        return $this->setData(self::CONTACT_SERVICE, $service);
    }
	
	/**
     * Set comfortablewith
     *
     * @param string $comfortablewith
     * @return BlockInterface
     */
    public function setComfortableWith($comfortablewith)
    {
        return $this->setData(self::CONTACT_COMFORTABLE_WITH, $comfortablewith);
    }

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return BlockInterface
     */
    public function setCreationTime($creationTime)
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return BlockInterface
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }
}