<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        CancelPickupRequest.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 *
 *	@property null $MessageTime
 *	@method null addMessageTime($MessageTime = null)
 *	@property null $MessageReference
 *	@method null addMessageReference($MessageReference = null)
 *	@property null $SiteID
 *	@method null addSiteID($SiteID = null)
 *	@property null $Password
 *	@method null addPassword($Password = null)
 *	@property null $ConfirmationNumber
 *	@method null addConfirmationNumber($ConfirmationNumber = null)
 *	@property null $RequestorName
 *	@method null addRequestorName($RequestorName = null)
 *	@property null $Reason
 *	@method null addReason($Reason = null)
 *	@property null $PickupDate
 *	@method null addPickupDate($PickupDate = null)
 *	@property null $CountryCode
 *	(ISO country codes)
 *	@method null addCountryCode($CountryCode = null)
 *	(ISO country codes)
 *	@property null $CancelTime
 *	@method null addCancelTime($CancelTime = null)
 *
 * CancelPickupRequest Request model for DHL API
 */
class CancelPickupRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'CancelPickupRequestEA';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'CancelPickupRequestEA.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'ConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ), 
        'RequestorName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
        ), 
        'Reason' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '3',
            'minLength' => '3',
            'enumeration' => '001,002,003,004,005,006,007',
        ), 
        'PickupDate' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'maxLength' => '2',
            'minLength' => '2',
        ), 
        'CancelTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
