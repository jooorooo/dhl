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
 * File:        ShipmentValidateResponse.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 *
 *	@property null $MessageTime
 *	@method null addMessageTime($MessageTime = null)
 *	@property null $MessageReference
 *	@method null addMessageReference($MessageReference = null)
 *	@property null $SiteID
 *	@method null addSiteID($SiteID = null)
 *	@property null $Password
 *	@method null addPassword($Password = null)
 *	@property \DHL\Datatype\AP\Response $Response
 *	@method \DHL\Datatype\AP\Response addResponse(\DHL\Datatype\AP\Response $Response)
 *	@property \DHL\Datatype\AP\Note $Note
 *	@method \DHL\Datatype\AP\Note addNote(\DHL\Datatype\AP\Note $Note)
 *	@property null $AirwayBillNumber
 *	@method null addAirwayBillNumber($AirwayBillNumber = null)
 *	@property null $BillingCode
 *	@method null addBillingCode($BillingCode = null)
 *	@property null $ChargeCardConfirmationNumber
 *	@method null addChargeCardConfirmationNumber($ChargeCardConfirmationNumber = null)
 *	@property null $CurrencyCode
 *	(ISO currency code)
 *	@method null addCurrencyCode($CurrencyCode = null)
 *	(ISO currency code)
 *	@property null $CourierMessage
 *	@method null addCourierMessage($CourierMessage = null)
 *	@property null $DHLRoutingCode
 *	(Routing Code Text)
 *	@method null addDHLRoutingCode($DHLRoutingCode = null)
 *	(Routing Code Text)
 *	@property null $DHLRoutingDataId
 *	@method null addDHLRoutingDataId($DHLRoutingDataId = null)
 *	@property \DHL\Datatype\AP\DestinationServiceArea $DestinationServiceArea
 *	@method \DHL\Datatype\AP\DestinationServiceArea addDestinationServiceArea(\DHL\Datatype\AP\DestinationServiceArea $DestinationServiceArea)
 *	@property \DHL\Datatype\AP\OriginServiceArea $OriginServiceArea
 *	@method \DHL\Datatype\AP\OriginServiceArea addOriginServiceArea(\DHL\Datatype\AP\OriginServiceArea $OriginServiceArea)
 *	@property null $ProductContentCode
 *	@method null addProductContentCode($ProductContentCode = null)
 *	@property null $ProductShortName
 *	@method null addProductShortName($ProductShortName = null)
 *	@property null $InternalServiceCode
 *	(Handling feature code returned by GLS)
 *	@method null addInternalServiceCode($InternalServiceCode = null)
 *	(Handling feature code returned by GLS)
 *	@property null $DeliveryDateCode
 *	@method null addDeliveryDateCode($DeliveryDateCode = null)
 *	@property null $DeliveryTimeCode
 *	@method null addDeliveryTimeCode($DeliveryTimeCode = null)
 *	@property \DHL\Datatype\AP\Pieces $Pieces
 *	@method \DHL\Datatype\AP\Pieces addPieces(\DHL\Datatype\AP\Pieces $Pieces)
 *	@property null $PackageCharge
 *	(PackageCharge)
 *	@method null addPackageCharge($PackageCharge = null)
 *	(PackageCharge)
 *	@property null $Rated
 *	@method null addRated($Rated = null)
 *	@property null $ShippingCharge
 *	(ShippingCharge)
 *	@method null addShippingCharge($ShippingCharge = null)
 *	(ShippingCharge)
 *	@property null $WeightUnit
 *	(Unit of weight measurement (L:Pounds))
 *	@method null addWeightUnit($WeightUnit = null)
 *	(Unit of weight measurement (L:Pounds))
 *	@property null $ChargeableWeight
 *	@method null addChargeableWeight($ChargeableWeight = null)
 *	@property null $DimensionalWeight
 *	@method null addDimensionalWeight($DimensionalWeight = null)
 *	@property null $ReadyByTime
 *	@method null addReadyByTime($ReadyByTime = null)
 *	@property null $PickupCharge
 *	@method null addPickupCharge($PickupCharge = null)
 *	@property null $CallInTime
 *	@method null addCallInTime($CallInTime = null)
 *	@property null $DaysAdvanceNotice
 *	@method null addDaysAdvanceNotice($DaysAdvanceNotice = null)
 *	@property null $ConversionRate
 *	@method null addConversionRate($ConversionRate = null)
 *	@property null $CountryCode
 *	(ISO country codes)
 *	@method null addCountryCode($CountryCode = null)
 *	(ISO country codes)
 *	@property \DHL\Datatype\AP\string $Barcodes
 *	@method \DHL\Datatype\AP\string addBarcodes(\DHL\Datatype\AP\string $Barcodes)
 *	@property \DHL\Datatype\AP\Piece $Piece
 *	@method \DHL\Datatype\AP\Piece addPiece(\DHL\Datatype\AP\Piece $Piece)
 *	@property null $Contents
 *	@method null addContents($Contents = null)
 *	@property \DHL\Datatype\AP\Reference $Reference
 *	@method \DHL\Datatype\AP\Reference addReference(\DHL\Datatype\AP\Reference $Reference)
 *	@property \DHL\Datatype\AP\Consignee $Consignee
 *	@method \DHL\Datatype\AP\Consignee addConsignee(\DHL\Datatype\AP\Consignee $Consignee)
 *	@property \DHL\Datatype\AP\Shipper $Shipper
 *	@method \DHL\Datatype\AP\Shipper addShipper(\DHL\Datatype\AP\Shipper $Shipper)
 *	@property null $AccountNumber
 *	(DHL Account Number)
 *	@method null addAccountNumber($AccountNumber = null)
 *	(DHL Account Number)
 *	@property null $CustomerID
 *	@method null addCustomerID($CustomerID = null)
 *	@property \DHL\Datatype\AP\ShipmentDate $ShipmentDate
 *	@method \DHL\Datatype\AP\ShipmentDate addShipmentDate(\DHL\Datatype\AP\ShipmentDate $ShipmentDate)
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
 *	@property \DHL\Datatype\AP\SpecialService $SpecialService
 *	@method \DHL\Datatype\AP\SpecialService addSpecialService(\DHL\Datatype\AP\SpecialService $SpecialService)
 *	@property \DHL\Datatype\AP\Billing $Billing
 *	@method \DHL\Datatype\AP\Billing addBilling(\DHL\Datatype\AP\Billing $Billing)
 *	@property \DHL\Datatype\AP\Dutiable $Dutiable
 *	@method \DHL\Datatype\AP\Dutiable addDutiable(\DHL\Datatype\AP\Dutiable $Dutiable)
 *	@property \DHL\Datatype\AP\ExportDeclaration $ExportDeclaration
 *	@method \DHL\Datatype\AP\ExportDeclaration addExportDeclaration(\DHL\Datatype\AP\ExportDeclaration $ExportDeclaration)
 *	@property null $NewShipper
 *	@method null addNewShipper($NewShipper = null)
 *	@property null $PLTStatus
 *	(PLTStatus)
 *	@method null addPLTStatus($PLTStatus = null)
 *	(PLTStatus)
 *	@property \DHL\Datatype\AP\QtdSInAdCur $QtdSInAdCur
 *	@method \DHL\Datatype\AP\QtdSInAdCur addQtdSInAdCur(\DHL\Datatype\AP\QtdSInAdCur $QtdSInAdCur)
 *	@property \DHL\Datatype\AP\LabelImage $LabelImage
 *	@method \DHL\Datatype\AP\LabelImage addLabelImage(\DHL\Datatype\AP\LabelImage $LabelImage)
 *	@property null $CustData
 *	(CustData)
 *	@method null addCustData($CustData = null)
 *	(CustData)
 *
 * ShipmentValidateResponse Request model for DHL API
 */
class ShipmentValidateResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentValidateResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ), 
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ), 
        'AirwayBillNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'BillingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ChargeCardConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CurrencyCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CourierMessage' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DHLRoutingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Routing Code Text',
        ), 
        'DHLRoutingDataId' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'OriginServiceArea' => array(
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'ProductContentCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ProductShortName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'InternalServiceCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Handling feature code returned by GLS',
        ), 
        'DeliveryDateCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DeliveryTimeCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Pieces' => array(
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ), 
        'PackageCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'Rated' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShippingCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'minLength' => '0',
            'maxLength' => '1',
        ), 
        'ChargeableWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DimensionalWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PickupCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DaysAdvanceNotice' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ConversionRate' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'Barcodes' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => true,
        ), 
        'Piece' => array(
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
        ), 
        'Contents' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'AccountNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'CustomerID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentDate' => array(
            'type' => 'ShipmentDate',
            'required' => false,
            'subobject' => true,
        ), 
        'GlobalProductCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
        'Billing' => array(
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ), 
        'Dutiable' => array(
            'type' => 'Dutiable',
            'required' => false,
            'subobject' => true,
        ), 
        'ExportDeclaration' => array(
            'type' => 'ExportDeclaration',
            'required' => false,
            'subobject' => true,
        ), 
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PLTStatus' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PLTStatus',
            'length' => '1',
            'enumeration' => 'A,D,S',
        ), 
        'QtdSInAdCur' => array(
            'type' => 'QtdSInAdCur',
            'required' => false,
            'subobject' => true,
        ), 
        'LabelImage' => array(
            'type' => 'LabelImage',
            'required' => false,
            'subobject' => true,
        ), 
        'CustData' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ), 
    );
}
