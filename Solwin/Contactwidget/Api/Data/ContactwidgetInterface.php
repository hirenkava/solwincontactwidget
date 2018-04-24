<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Solwin\Contactwidget\Api\Data;

/**
 * CMS block interface.
 * @api
 */
interface ContactwidgetInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const CONTACT_ID      = 'id';
    const CONTACT_NAME    = 'name';
	const CONTACT_EMAIL    = 'email';
	const CONTACT_PHONE_NUMBER    = 'phone_number';
	const CONTACT_SUBJECT    = 'subject';
	const CONTACT_WHATS_ON_YOUR_MIND    = 'whats_on_your_mind';
	const CONTACT_COMFORTABLE_WITH    = 'comfortable_with';
	const CONTACT_ANY_SPECIFIC_SERVICES    = 'any_specific_services';
	const CONTACT_SERVICE    = 'service';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get name
     *
     * @return string
     */
    public function getName();
	
	/**
     * Get email
     *
     * @return string
     */
    public function getEmail();
	
	/**
     * Get phone number
     *
     * @return string
     */
    public function getPhoneNumber();
	
	/**
     * Get subject
     *
     * @return string
     */
    public function getSubject();
	
	/**
     * Get whats on your mind
     *
     * @return string
     */
    public function getWhatsOnYourMind();
	
	/**
     * Get any specific services
     *
     * @return string
     */
    public function getAnySpecificServices();
	
	/**
     * Get service
     *
     * @return string
     */
    public function getService();
	
	/**
     * Get comfortable with
     *
     * @return string
     */
    public function getComfortableWith();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Set ID
     *
     * @param int $id
     * @return BlockInterface
     */
    public function setId($id);

    /**
     * Set name
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setName($name);
	
	/**
     * Set email
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setEmail($email);
	
	/**
     * Set phone number
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setPhoneNumber($phonenumber);
	
	/**
     * Set subject
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setSubject($subject);
	
	/**
     * Set whats on your mind
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setWhatsOnYourMind($whatsonyourmind);
	
	/**
     * Set any specific services
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setAnySpecificServices($anyspecificservices);
	
	/**
     * Set service
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setService($service);
	
	/**
     * Set comfortable with
     *
     * @param string $identifier
     * @return BlockInterface
     */
    public function setComfortableWith($comfortablewith);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return BlockInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return BlockInterface
     */
    public function setUpdateTime($updateTime);
}
