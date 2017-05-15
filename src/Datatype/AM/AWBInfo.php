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

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $AWBNumber
 *	(Airway bill number)
 *	@method null addAWBNumber($AWBNumber = null)
 *	(Airway bill number)
 *	@property \DHL\Datatype\AM\Status $Status
 *	@method \DHL\Datatype\AM\Status addStatus(\DHL\Datatype\AM\Status $Status)
 *	@property \DHL\Datatype\AM\ShipmentInfo $ShipmentInfo
 *	@method \DHL\Datatype\AM\ShipmentInfo addShipmentInfo(\DHL\Datatype\AM\ShipmentInfo $ShipmentInfo)
 *	@property \DHL\Datatype\AM\TrackingPieces $Pieces
 *	@method \DHL\Datatype\AM\TrackingPieces addPieces(\DHL\Datatype\AM\TrackingPieces $Pieces)
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
