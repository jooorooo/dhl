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
 * File:        Shipment.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AP; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $Weight
 *	(Weight of piece or shipment)
 *	@method null addWeight($Weight = null)
 *	(Weight of piece or shipment)
 *	@property null $WeightUnit
 *	(Unit of weight measurement (L:Pounds))
 *	@method null addWeightUnit($WeightUnit = null)
 *	(Unit of weight measurement (L:Pounds))
 *	@property \Dhl\Datatype\AP\Pieces $Pieces
 *	@method \Dhl\Datatype\AP\Pieces addPieces(\Dhl\Datatype\AP\Pieces $Pieces)
 *	@property null $DoorTo
 *	(Defines the type of delivery service that applies to the shipment)
 *	@method null addDoorTo($DoorTo = null)
 *	(Defines the type of delivery service that applies to the shipment)
 *	@property null $AirwarBillNumber
 *	(Airway bill number)
 *	@method null addAirwarBillNumber($AirwarBillNumber = null)
 *	(Airway bill number)
 *	@property null $AccountType
 *	(Account Type by method of payment ( Dhl account vs. Credit card))
 *	@method null addAccountType($AccountType = null)
 *	(Account Type by method of payment ( Dhl account vs. Credit card))
 *	@property null $ProductType
 *	@method null addProductType($ProductType = null)
 *	@property null $GlobalProductType
 *	@method null addGlobalProductType($GlobalProductType = null)
 *	@property null $LocalProductType
 *	@method null addLocalProductType($LocalProductType = null)
 *	@property \Dhl\Datatype\AP\Commodity $Commodity
 *	@method \Dhl\Datatype\AP\Commodity addCommodity(\Dhl\Datatype\AP\Commodity $Commodity)
 *	@property null $DeclaredValue
 *	(Monetary amount (with 2 decimal precision))
 *	@method null addDeclaredValue($DeclaredValue = null)
 *	(Monetary amount (with 2 decimal precision))
 *	@property null $DeclaredCurrency
 *	(ISO currency code)
 *	@method null addDeclaredCurrency($DeclaredCurrency = null)
 *	(ISO currency code)
 *	@property null $InsuredValue
 *	(Monetary amount (with 2 decimal precision))
 *	@method null addInsuredValue($InsuredValue = null)
 *	(Monetary amount (with 2 decimal precision))
 *	@property null $InsuredCurrency
 *	(ISO currency code)
 *	@method null addInsuredCurrency($InsuredCurrency = null)
 *	(ISO currency code)
 *	@property null $DimensionalUnit
 *	(Unit of weight measurement (L:Pounds))
 *	@method null addDimensionalUnit($DimensionalUnit = null)
 *	(Unit of weight measurement (L:Pounds))
 *	@property null $DimensionalWeight
 *	(Weight of piece or shipment)
 *	@method null addDimensionalWeight($DimensionalWeight = null)
 *	(Weight of piece or shipment)
 *
 * Shipment Request model for Dhl API
 */
class Shipment extends Base
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
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'Pieces' => array(
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ), 
        'DoorTo' => array(
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ), 
        'AirwarBillNumber' => array(
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
        ), 
        'AccountType' => array(
            'type' => 'AccountType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account Type by method of payment ( Dhl account vs. Credit card)',
            'enumeration' => 'D',
        ), 
        'ProductType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'GlobalProductType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LocalProductType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Commodity' => array(
            'type' => 'Commodity',
            'required' => false,
            'subobject' => true,
        ), 
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
        'InsuredValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'InsuredCurrency' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'DimensionalUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'DimensionalWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
    );
}
