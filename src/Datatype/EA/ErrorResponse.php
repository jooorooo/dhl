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
 * File:        ErrorResponse.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\EA; 
use Dhl\Datatype\Base;

/**
 *
 *	@property \Dhl\Datatype\EA\ServiceHeader $ServiceHeader
 *	@method \Dhl\Datatype\EA\ServiceHeader addServiceHeader(\Dhl\Datatype\EA\ServiceHeader $ServiceHeader)
 *	@property \Dhl\Datatype\EA\Status $Status
 *	@method \Dhl\Datatype\EA\Status addStatus(\Dhl\Datatype\EA\Status $Status)
 *
 * ErrorResponse Request model for Dhl API
 */
class ErrorResponse extends Base
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
        'ServiceHeader' => array(
            'type' => 'ServiceHeader',
            'required' => false,
            'subobject' => true,
        ), 
        'Status' => array(
            'type' => 'Status',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
