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
 * File:        PieceInfo.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AM; 
use Dhl\Datatype\Base;

/**
 *
 *	@property \Dhl\Datatype\AM\PieceDetails $PieceDetails
 *	@method \Dhl\Datatype\AM\PieceDetails addPieceDetails(\Dhl\Datatype\AM\PieceDetails $PieceDetails)
 *	@property \Dhl\Datatype\AM\PieceEvent $PieceEvent
 *	@method \Dhl\Datatype\AM\PieceEvent addPieceEvent(\Dhl\Datatype\AM\PieceEvent $PieceEvent)
 *
 * PieceInfo Request model for Dhl API
 */
class PieceInfo extends Base
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
        'PieceDetails' => array(
            'type' => 'PieceDetails',
            'required' => true,
            'subobject' => true,
        ), 
        'PieceEvent' => array(
            'type' => 'PieceEvent',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
