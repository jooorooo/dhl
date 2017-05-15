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
 * File:        OriginServiceArea.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AM; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $ServiceAreaCode
 *	(Dhl service area code)
 *	@method null addServiceAreaCode($ServiceAreaCode = null)
 *	(Dhl service area code)
 *	@property null $Description
 *	@method null addDescription($Description = null)
 *	@property null $OutboundSortCode
 *	(OutBound Sort Code)
 *	@method null addOutboundSortCode($OutboundSortCode = null)
 *	(OutBound Sort Code)
 *
 * OriginServiceArea Request model for Dhl API
 */
class OriginServiceArea extends Base
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
        'ServiceAreaCode' => array(
            'type' => 'ServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dhl service area code',
            'length' => '3',
        ), 
        'Description' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OutboundSortCode' => array(
            'type' => 'OutboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutBound Sort Code',
            'length' => '4',
        ), 
    );
}
