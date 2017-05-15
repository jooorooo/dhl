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
 * File:        Status.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\EA; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $ActionStatus
 *	@method null addActionStatus($ActionStatus = null)
 *	@property \Dhl\Datatype\EA\Condition $Condition
 *	@method \Dhl\Datatype\EA\Condition addCondition(\Dhl\Datatype\EA\Condition $Condition)
 *
 * Status Request model for Dhl API
 */
class Status extends Base
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
        'ActionStatus' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Condition' => array(
            'type' => 'Condition',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
