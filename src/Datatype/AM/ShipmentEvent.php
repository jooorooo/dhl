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
 * File:        ShipmentEvent.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AM; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $Date
 *	@method null addDate($Date = null)
 *	@property null $Time
 *	@method null addTime($Time = null)
 *	@property \Dhl\Datatype\AM\ServiceEvent $ServiceEvent
 *	@method \Dhl\Datatype\AM\ServiceEvent addServiceEvent(\Dhl\Datatype\AM\ServiceEvent $ServiceEvent)
 *	@property null $Signatory
 *	@method null addSignatory($Signatory = null)
 *	@property \Dhl\Datatype\AM\EventRemarks $EventRemarks
 *	@method \Dhl\Datatype\AM\EventRemarks addEventRemarks(\Dhl\Datatype\AM\EventRemarks $EventRemarks)
 *	@property \Dhl\Datatype\AM\ServiceArea $ServiceArea
 *	@method \Dhl\Datatype\AM\ServiceArea addServiceArea(\Dhl\Datatype\AM\ServiceArea $ServiceArea)
 *
 * ShipmentEvent Request model for Dhl API
 */
class ShipmentEvent extends Base
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
        'Date' => array(
            'type' => 'date',
            'required' => false,
            'subobject' => false,
        ), 
        'Time' => array(
            'type' => 'time',
            'required' => false,
            'subobject' => false,
        ), 
        'ServiceEvent' => array(
            'type' => 'ServiceEvent',
            'required' => false,
            'subobject' => true,
        ), 
        'Signatory' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'EventRemarks' => array(
            'type' => 'EventRemarks',
            'required' => false,
            'subobject' => true,
        ), 
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
