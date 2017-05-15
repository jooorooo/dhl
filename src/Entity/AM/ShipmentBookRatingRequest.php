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
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\AM; 
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
 *	@property \Dhl\Datatype\AM\Shipper $Shipper
 *	@method \Dhl\Datatype\AM\Shipper addShipper(\Dhl\Datatype\AM\Shipper $Shipper)
 *	@property \Dhl\Datatype\AM\Consignee $Consignee
 *	@method \Dhl\Datatype\AM\Consignee addConsignee(\Dhl\Datatype\AM\Consignee $Consignee)
 *	@property \Dhl\Datatype\AM\ShipmentDetails $ShipmentDetails
 *	@method \Dhl\Datatype\AM\ShipmentDetails addShipmentDetails(\Dhl\Datatype\AM\ShipmentDetails $ShipmentDetails)
 *	@property \Dhl\Datatype\AM\SpecialService $SpecialService
 *	@method \Dhl\Datatype\AM\SpecialService addSpecialService(\Dhl\Datatype\AM\SpecialService $SpecialService)
 *
 * ShipmentBookRatingRequest Request model for Dhl API
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
