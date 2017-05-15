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
 * File:        Dutiable.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $DeclaredValue
 *	(Monetary amount (with 2 decimal precision))
 *	@method null addDeclaredValue($DeclaredValue = null)
 *	(Monetary amount (with 2 decimal precision))
 *	@property null $DeclaredCurrency
 *	(ISO currency code)
 *	@method null addDeclaredCurrency($DeclaredCurrency = null)
 *	(ISO currency code)
 *	@property null $ScheduleB
 *	(Schedule B numner)
 *	@method null addScheduleB($ScheduleB = null)
 *	(Schedule B numner)
 *	@property null $ExportLicense
 *	@method null addExportLicense($ExportLicense = null)
 *	@property null $ShipperEIN
 *	@method null addShipperEIN($ShipperEIN = null)
 *	@property null $ShipperIDType
 *	@method null addShipperIDType($ShipperIDType = null)
 *	@property null $ConsigneeIDType
 *	@method null addConsigneeIDType($ConsigneeIDType = null)
 *	@property null $ImportLicense
 *	@method null addImportLicense($ImportLicense = null)
 *	@property null $ConsigneeEIN
 *	@method null addConsigneeEIN($ConsigneeEIN = null)
 *	@property null $TermsOfTrade
 *	@method null addTermsOfTrade($TermsOfTrade = null)
 *
 * Dutiable Request model for DHL API
 */
class Dutiable extends Base
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
        'DeclaredValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'DeclaredCurrency' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ExportLicense' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipperEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipperIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ConsigneeIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ImportLicense' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ConsigneeEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'TermsOfTrade' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
