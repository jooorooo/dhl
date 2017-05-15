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
 * File:        DestinationServiceArea.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\EA; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $ServiceAreaCode
 *	(Dhl service area code)
 *	@method null addServiceAreaCode($ServiceAreaCode = null)
 *	(Dhl service area code)
 *	@property null $Description
 *	@method null addDescription($Description = null)
 *	@property null $FacilityCode
 *	(Destination Facility Code)
 *	@method null addFacilityCode($FacilityCode = null)
 *	(Destination Facility Code)
 *	@property null $InboundSortCode
 *	(InBound Sort Code)
 *	@method null addInboundSortCode($InboundSortCode = null)
 *	(InBound Sort Code)
 *
 * DestinationServiceArea Request model for Dhl API
 */
class DestinationServiceArea extends Base
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
        'FacilityCode' => array(
            'type' => 'FacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Destination Facility Code',
            'length' => '3',
        ), 
        'InboundSortCode' => array(
            'type' => 'InboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'InBound Sort Code',
            'length' => '4',
        ), 
    );
}
