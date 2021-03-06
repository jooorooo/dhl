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
 * File:        RoutingRequest.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\AP; 
use Dhl\Entity\Base;

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
 *	@property null $RequestType
 *	@method null addRequestType($RequestType = null)
 *	@property null $Address1
 *	@method null addAddress1($Address1 = null)
 *	@property null $Address2
 *	@method null addAddress2($Address2 = null)
 *	@property null $Address3
 *	@method null addAddress3($Address3 = null)
 *	@property null $PostalCode
 *	(Full postal/zip code for address)
 *	@method null addPostalCode($PostalCode = null)
 *	(Full postal/zip code for address)
 *	@property null $City
 *	(City name)
 *	@method null addCity($City = null)
 *	(City name)
 *	@property null $Division
 *	(Division (e.g. state, prefecture, etc.) name)
 *	@method null addDivision($Division = null)
 *	(Division (e.g. state, prefecture, etc.) name)
 *	@property null $CountryCode
 *	(ISO country codes)
 *	@method null addCountryCode($CountryCode = null)
 *	(ISO country codes)
 *	@property null $CountryName
 *	(ISO country name)
 *	@method null addCountryName($CountryName = null)
 *	(ISO country name)
 *	@property null $OriginCountryCode
 *	@method null addOriginCountryCode($OriginCountryCode = null)
 *
 * RoutingRequest Request model for Dhl API
 */
class RoutingRequest extends Base
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
    protected $_serviceName = 'RoutingRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RoutingRequestAP.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RequestType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'length' => '1',
            'enumeration' => 'O,D',
        ), 
        'Address1' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Address2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Address3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PostalCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ), 
        'City' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'CountryName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ), 
        'OriginCountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
