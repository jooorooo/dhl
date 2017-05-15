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
 * File:        BkgDetailsType.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $PaymentCountryCode
 *	@method null addPaymentCountryCode($PaymentCountryCode = null)
 *	@property null $Date
 *	@method null addDate($Date = null)
 *	@property null $ReadyTime
 *	@method null addReadyTime($ReadyTime = null)
 *	@property null $ReadyTimeGMTOffset
 *	@method null addReadyTimeGMTOffset($ReadyTimeGMTOffset = null)
 *	@property null $DimensionUnit
 *	@method null addDimensionUnit($DimensionUnit = null)
 *	@property null $WeightUnit
 *	@method null addWeightUnit($WeightUnit = null)
 *	@property null $NumberOfPieces
 *	@method null addNumberOfPieces($NumberOfPieces = null)
 *	@property null $ShipmentWeight
 *	@method null addShipmentWeight($ShipmentWeight = null)
 *	@property null $Volume
 *	@method null addVolume($Volume = null)
 *	@property null $MaxPieceWeight
 *	@method null addMaxPieceWeight($MaxPieceWeight = null)
 *	@property null $MaxPieceHeight
 *	@method null addMaxPieceHeight($MaxPieceHeight = null)
 *	@property null $MaxPieceDepth
 *	@method null addMaxPieceDepth($MaxPieceDepth = null)
 *	@property null $MaxPieceWidth
 *	@method null addMaxPieceWidth($MaxPieceWidth = null)
 *	@property array $Pieces
 *	@method array addPieces(array $Pieces)
 *	@property null $PaymentAccountNumber
 *	@method null addPaymentAccountNumber($PaymentAccountNumber = null)
 *	@property null $IsDutiable
 *	@method null addIsDutiable($IsDutiable = null)
 *	@property null $NetworkTypeCode
 *	@method null addNetworkTypeCode($NetworkTypeCode = null)
 *	@property \DHL\Datatype\AM\QtdShpType $QtdShp
 *	@method \DHL\Datatype\AM\QtdShpType addQtdShp(\DHL\Datatype\AM\QtdShpType $QtdShp)
 *	@property null $CODAmount
 *	@method null addCODAmount($CODAmount = null)
 *	@property null $CODCurrencyCode
 *	@method null addCODCurrencyCode($CODCurrencyCode = null)
 *	@property null $CODAccountNumber
 *	@method null addCODAccountNumber($CODAccountNumber = null)
 *	@property null $InsuredValue
 *	@method null addInsuredValue($InsuredValue = null)
 *	@property null $InsuredCurrency
 *	@method null addInsuredCurrency($InsuredCurrency = null)
 *
 * BkgDetailsType Request model for DHL API
 */
class BkgDetailsType extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = 'BkgDetails';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'PaymentCountryCode' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'Date' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'ReadyTime' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ReadyTimeGMTOffset' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'DimensionUnit' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'NumberOfPieces' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentWeight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Volume' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceWeight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceHeight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceDepth' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceWidth' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Pieces' => array(
            'type' => 'PieceType',
            'required' => false,
            'subobject' => false,
            'multivalues' => true,
        ), 
        'PaymentAccountNumber' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'IsDutiable' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'NetworkTypeCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'QtdShp' => array(
            'type' => 'QtdShpType',
            'required' => false,
            'subobject' => true,
        ), 
        'CODAmount' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'CODCurrencyCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'CODAccountNumber' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuredValue' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuredCurrency' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
