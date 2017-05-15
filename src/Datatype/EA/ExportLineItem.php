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
 * File:        ExportLineItem.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\EA; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $LineNumber
 *	@method null addLineNumber($LineNumber = null)
 *	@property null $Quantity
 *	(Quantity)
 *	@method null addQuantity($Quantity = null)
 *	(Quantity)
 *	@property null $QuantityUnit
 *	(Quantity unit of measure (tens, hundreds, thousands, etc.))
 *	@method null addQuantityUnit($QuantityUnit = null)
 *	(Quantity unit of measure (tens, hundreds, thousands, etc.))
 *	@property null $Description
 *	@method null addDescription($Description = null)
 *	@property null $Value
 *	(Monetary amount (with 2 decimal precision))
 *	@method null addValue($Value = null)
 *	(Monetary amount (with 2 decimal precision))
 *	@property null $IsDomestic
 *	(Boolean flag)
 *	@method null addIsDomestic($IsDomestic = null)
 *	(Boolean flag)
 *	@property null $CommodityCode
 *	(Commodity codes for shipment type)
 *	@method null addCommodityCode($CommodityCode = null)
 *	(Commodity codes for shipment type)
 *	@property null $ScheduleB
 *	(Schedule B numner)
 *	@method null addScheduleB($ScheduleB = null)
 *	(Schedule B numner)
 *	@property null $ECCN
 *	@method null addECCN($ECCN = null)
 *	@property null $Weight
 *	@method null addWeight($Weight = null)
 *	@property null $License
 *	@method null addLicense($License = null)
 *	@property null $LicenseSymbol
 *	(Export license number)
 *	@method null addLicenseSymbol($LicenseSymbol = null)
 *	(Export license number)
 *
 * ExportLineItem Request model for Dhl API
 */
class ExportLineItem extends Base
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
        'LineNumber' => array(
            'type' => 'LineNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minInclusive' => '1',
            'maxInclusive' => '200',
        ), 
        'Quantity' => array(
            'type' => 'Quantity',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity',
            'maxInclusive' => '32000',
        ), 
        'QuantityUnit' => array(
            'type' => 'QuantityUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity unit of measure (tens, hundreds, thousands, etc.)',
            'maxLength' => '8',
        ), 
        'Description' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Value' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'IsDomestic' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CommodityCode' => array(
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ECCN' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Weight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'License' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'LicenseSymbol' => array(
            'type' => 'LicenseNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export license number',
            'maxLength' => '16',
        ), 
    );
}
