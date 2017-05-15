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
 * File:        BarCodes.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $AWBBarCode
 *	@method null addAWBBarCode($AWBBarCode = null)
 *	@property null $OriginDestnBarcode
 *	@method null addOriginDestnBarcode($OriginDestnBarcode = null)
 *	@property null $ClientIDBarCode
 *	@method null addClientIDBarCode($ClientIDBarCode = null)
 *	@property null $DhlRoutingBarCode
 *	@method null addDhlRoutingBarCode($DhlRoutingBarCode = null)
 *
 * BarCodes Request model for Dhl API
 */
class BarCodes extends Base
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
        'AWBBarCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ), 
        'OriginDestnBarcode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ), 
        'ClientIDBarCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ), 
        'DhlRoutingBarCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ), 
    );
}
