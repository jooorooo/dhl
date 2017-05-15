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
 * File:        Commodity.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $CommodityCode
 *	(Commodity codes for shipment type)
 *	@method null addCommodityCode($CommodityCode = null)
 *	(Commodity codes for shipment type)
 *	@property null $CommodityName
 *	(Commodity name for shipment content)
 *	@method null addCommodityName($CommodityName = null)
 *	(Commodity name for shipment content)
 *
 * Commodity Request model for DHL API
 */
class Commodity extends Base
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
        'CommodityCode' => array(
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ), 
        'CommodityName' => array(
            'type' => 'CommodityName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity name for shipment content',
            'maxLength' => '35',
        ), 
    );
}
