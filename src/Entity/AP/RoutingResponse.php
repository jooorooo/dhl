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
 * File:        RoutingResponse.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\AP; 
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
 *	@property \DHL\Datatype\AP\Response $Response
 *	@method \DHL\Datatype\AP\Response addResponse(\DHL\Datatype\AP\Response $Response)
 *	@property null $GMTNegativeIndicator
 *	@method null addGMTNegativeIndicator($GMTNegativeIndicator = null)
 *	@property null $GMTOffset
 *	@method null addGMTOffset($GMTOffset = null)
 *	@property null $RegionCode
 *	(RegionCode)
 *	@method null addRegionCode($RegionCode = null)
 *	(RegionCode)
 *	@property \DHL\Datatype\AP\ServiceArea $ServiceArea
 *	@method \DHL\Datatype\AP\ServiceArea addServiceArea(\DHL\Datatype\AP\ServiceArea $ServiceArea)
 *
 * RoutingResponse Request model for DHL API
 */
class RoutingResponse extends Base
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
    protected $_serviceName = 'RoutingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RoutingResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ), 
        'GMTNegativeIndicator' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'GMTOffset' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EA,AM',
        ), 
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
