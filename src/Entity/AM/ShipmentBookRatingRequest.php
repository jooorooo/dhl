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
 * File:        ShipmentBookRatingRequest.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\AM; 
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
 *	@property \DHL\Datatype\AM\Shipper $Shipper
 *	@method \DHL\Datatype\AM\Shipper addShipper(\DHL\Datatype\AM\Shipper $Shipper)
 *	@property \DHL\Datatype\AM\Consignee $Consignee
 *	@method \DHL\Datatype\AM\Consignee addConsignee(\DHL\Datatype\AM\Consignee $Consignee)
 *	@property \DHL\Datatype\AM\ShipmentDetails $ShipmentDetails
 *	@method \DHL\Datatype\AM\ShipmentDetails addShipmentDetails(\DHL\Datatype\AM\ShipmentDetails $ShipmentDetails)
 *	@property \DHL\Datatype\AM\SpecialService $SpecialService
 *	@method \DHL\Datatype\AM\SpecialService addSpecialService(\DHL\Datatype\AM\SpecialService $SpecialService)
 *
 * ShipmentBookRatingRequest Request model for DHL API
 */
class ShipmentBookRatingRequest extends Base
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
    protected $_serviceName = 'ShipmentBookRatingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentBookRatingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
