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
 * File:        SpecialService.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $SpecialServiceType
 *	(Special Service codes)
 *	@method null addSpecialServiceType($SpecialServiceType = null)
 *	(Special Service codes)
 *	@property null $CommunicationAddress
 *	(Communications line number: phone number, fax number)
 *	@method null addCommunicationAddress($CommunicationAddress = null)
 *	(Communications line number: phone number, fax number)
 *	@property null $CommunicationType
 *	(Communications line type (P: phone, F: fax))
 *	@method null addCommunicationType($CommunicationType = null)
 *	(Communications line type (P: phone, F: fax))
 *	@property null $SpecialServiceDesc
 *	(Special Service Description)
 *	@method null addSpecialServiceDesc($SpecialServiceDesc = null)
 *	(Special Service Description)
 *	@property null $ChargeValue
 *	(Monetary amount (with 2 decimal precision))
 *	@method null addChargeValue($ChargeValue = null)
 *	(Monetary amount (with 2 decimal precision))
 *	@property null $CurrencyCode
 *	(ISO currency code)
 *	@method null addCurrencyCode($CurrencyCode = null)
 *	(ISO currency code)
 *	@property null $IsWaived
 *	(Boolean flag)
 *	@method null addIsWaived($IsWaived = null)
 *	(Boolean flag)
 *
 * SpecialService Request model for DHL API
 */
class SpecialService extends Base
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
        'SpecialServiceType' => array(
            'type' => 'SpecialServiceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Special Service codes',
            'maxLength' => '3',
        ), 
        'CommunicationAddress' => array(
            'type' => 'CommunicationAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line number: phone number, fax number',
            'maxLength' => '50',
        ), 
        'CommunicationType' => array(
            'type' => 'CommunicationType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line type (P: phone, F: fax)',
            'length' => '1',
            'enumeration' => 'P,F',
        ), 
        'SpecialServiceDesc' => array(
            'type' => 'SpecialServiceDesc',
            'required' => false,
            'subobject' => false,
            'comment' => 'Special Service Description',
            'maxLength' => '45',
        ), 
        'ChargeValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'IsWaived' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
    );
}
