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
 * File:        AWBInfo.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $AWBNumber
 *	(Airway bill number)
 *	@method null addAWBNumber($AWBNumber = null)
 *	(Airway bill number)
 *	@property \DHL\Datatype\EA\Status $Status
 *	@method \DHL\Datatype\EA\Status addStatus(\DHL\Datatype\EA\Status $Status)
 *	@property \DHL\Datatype\EA\ShipmentInfo $ShipmentInfo
 *	@method \DHL\Datatype\EA\ShipmentInfo addShipmentInfo(\DHL\Datatype\EA\ShipmentInfo $ShipmentInfo)
 *	@property \DHL\Datatype\EA\TrackingPieces $Pieces
 *	@method \DHL\Datatype\EA\TrackingPieces addPieces(\DHL\Datatype\EA\TrackingPieces $Pieces)
 *
 * AWBInfo Request model for DHL API
 */
class AWBInfo extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'AWBNumber' => array(
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
        ), 
        'Status' => array(
            'type' => 'Status',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentInfo' => array(
            'type' => 'ShipmentInfo',
            'required' => false,
            'subobject' => true,
        ), 
        'Pieces' => array(
            'type' => 'TrackingPieces',
            'required' => false,
            'subobject' => true,
        ), 
    );
}