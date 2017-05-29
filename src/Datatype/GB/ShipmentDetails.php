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
 * File:        ShipmentDetails.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $NumberOfPieces
 *	@method null addNumberOfPieces($NumberOfPieces = null)
 *	@property array $Pieces
 *	@method array addPieces(array $Pieces)
 *	@method Piece addPiece(Piece $Piece)
 *	@property null $Weight
 *	(Weight of piece or shipment)
 *	@method null addWeight($Weight = null)
 *	(Weight of piece or shipment)
 *	@property null $WeightUnit
 *	(Unit of weight measurement (K:KiloGram))
 *	@method null addWeightUnit($WeightUnit = null)
 *	(Unit of weight measurement (K:KiloGram))
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
 *	@property null $LocalProductCode
 *	@method null addLocalProductCode($LocalProductCode = null)
 *	@property null $Date
 *	(Date only)
 *	@method null addDate($Date = null)
 *	(Date only)
 *	@property null $Contents
 *	(Shipment contents description)
 *	@method null addContents($Contents = null)
 *	(Shipment contents description)
 *	@property null $DoorTo
 *	(Defines the type of delivery service that applies
 *	to the shipment)
 *	@method null addDoorTo($DoorTo = null)
 *	(Defines the type of delivery service that applies
 *	to the shipment)
 *	@property null $DimensionUnit
 *	(Dimension Unit C (centimeter))
 *	@method null addDimensionUnit($DimensionUnit = null)
 *	(Dimension Unit C (centimeter))
 *	@property null $InsuredAmount
 *	(Monetary amount (with 2 decimal precision))
 *	@method null addInsuredAmount($InsuredAmount = null)
 *	(Monetary amount (with 2 decimal precision))
 *	@property null $PackageType
 *	(Package Type (EE: Dhl Express Envelope, OD:Other
 *	Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
 *	Box, DF-Dhl Flyer, YP-Your packaging))
 *	@method null addPackageType($PackageType = null)
 *	(Package Type (EE: Dhl Express Envelope, OD:Other
 *	Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
 *	Box, DF-Dhl Flyer, YP-Your packaging))
 *	@property null $IsDutiable
 *	(Boolean flag)
 *	@method null addIsDutiable($IsDutiable = null)
 *	(Boolean flag)
 *	@property null $CurrencyCode
 *	(ISO currency code)
 *	@method null addCurrencyCode($CurrencyCode = null)
 *	(ISO currency code)
 *	@property \Dhl\Datatype\GB\AdditionalProtection $AdditionalProtection
 *	@method \Dhl\Datatype\GB\AdditionalProtection addAdditionalProtection(\Dhl\Datatype\GB\AdditionalProtection $AdditionalProtection)
 *	@property null $DOSFlag
 *	(Boolean flag)
 *	@method null addDOSFlag($DOSFlag = null)
 *	(Boolean flag)
 *	@property null $CustData
 *	(CustData)
 *	@method null addCustData($CustData = null)
 *	(CustData)
 *
 * ShipmentDetails Request model for Dhl API
 */
class ShipmentDetails extends Base
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
        'NumberOfPieces' => array(
            'type' => 'integer',
            'required' => false,
            'subobject' => false,
        ), 
        'Pieces' => array(
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ), 
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
            'enumeration' => 'K,L',
        ), 
        'GlobalProductCode' => array(
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'LocalProductCode' => array(
            'type' => 'LocalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
            'pattern' => '([A-Z0-9])*',
        ), 
        'Date' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
            'pattern' => '[0-9][0-9][0-9][0-9](-)[0-9][0-9](-)[0-9][0-9]',
        ), 
        'Contents' => array(
            'type' => 'ShipmentContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipment contents description',
            'maxLength' => '90',
        ), 
        'DoorTo' => array(
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies
				to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ), 
        'DimensionUnit' => array(
            'type' => 'DimensionUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dimension Unit C (centimeter)',
            'length' => '1',
            'enumeration' => 'C,I',
        ), 
        'InsuredAmount' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: Dhl Express Envelope, OD:Other
				Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
				Box, DF-Dhl Flyer, YP-Your packaging)',
            'length' => '2',
            'enumeration' => 'BD,BP,CP,DC,DF,DM,ED,EE,FR,JB,JD,JJ,JP,OD,PA,YP',
        ), 
        'IsDutiable' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'AdditionalProtection' => array(
            'type' => 'AdditionalProtection',
            'required' => false,
            'subobject' => true,
        ), 
        'DOSFlag' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CustData' => array(
            'type' => 'CustData',
            'required' => false,
            'subobject' => false,
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ), 
    );
}
