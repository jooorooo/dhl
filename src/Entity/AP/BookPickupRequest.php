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
 * File:        BookPickupRequest.php
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
 *	@property null $Requestor
 *	@method null addRequestor($Requestor = null)
 *	@property \Dhl\Datatype\AP\Place $Place
 *	@method \Dhl\Datatype\AP\Place addPlace(\Dhl\Datatype\AP\Place $Place)
 *	@property null $Pickup
 *	@method null addPickup($Pickup = null)
 *	@property null $PickupContact
 *	@method null addPickupContact($PickupContact = null)
 *	@property \Dhl\Datatype\AP\ShipmentDetails $ShipmentDetails
 *	@method \Dhl\Datatype\AP\ShipmentDetails addShipmentDetails(\Dhl\Datatype\AP\ShipmentDetails $ShipmentDetails)
 *
 * BookPickupRequest Request model for Dhl API
 */
class BookPickupRequest extends Base
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
    protected $_serviceName = 'BookPickupRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'BookPickupRequestAP.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Requestor' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Place' => array(
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ), 
        'Pickup' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PickupContact' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
