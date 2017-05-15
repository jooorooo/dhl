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
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 *
 *	@property \DHL\Datatype\GB\ServiceHeader $ServiceHeader
 *	@method \DHL\Datatype\GB\ServiceHeader addServiceHeader(\DHL\Datatype\GB\ServiceHeader $ServiceHeader)
 *	@property \DHL\Datatype\GB\Status $Status
 *	@method \DHL\Datatype\GB\Status addStatus(\DHL\Datatype\GB\Status $Status)
 *
 * ErrorResponse Request model for DHL API
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