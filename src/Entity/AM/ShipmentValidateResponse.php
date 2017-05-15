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

namespace DHL\Entity\AM; 
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
 *	@property \DHL\Datatype\AM\Response $Response
 *	@method \DHL\Datatype\AM\Response addResponse(\DHL\Datatype\AM\Response $Response)
 *	@property \DHL\Datatype\AM\Note $Note
 *	@method \DHL\Datatype\AM\Note addNote(\DHL\Datatype\AM\Note $Note)
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
 *	@property \DHL\Datatype\AM\DestinationServiceArea $DestinationServiceArea
 *	@method \DHL\Datatype\AM\DestinationServiceArea addDestinationServiceArea(\DHL\Datatype\AM\DestinationServiceArea $DestinationServiceArea)
 *	@property \DHL\Datatype\AM\OriginServiceArea $OriginServiceArea
 *	@method \DHL\Datatype\AM\OriginServiceArea addOriginServiceArea(\DHL\Datatype\AM\OriginServiceArea $OriginServiceArea)
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
 *	@property \DHL\Datatype\AM\Pieces $Pieces
 *	@method \DHL\Datatype\AM\Pieces addPieces(\DHL\Datatype\AM\Pieces $Pieces)
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
 *	@property null $ShippingChargeInUSD
 *	@method null addShippingChargeInUSD($ShippingChargeInUSD = null)
 *	@property null $InsuredAmount
 *	@method null addInsuredAmount($InsuredAmount = null)
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
 *	@property \DHL\Datatype\AM\string $Barcodes
 *	@method \DHL\Datatype\AM\string addBarcodes(\DHL\Datatype\AM\string $Barcodes)
 *	@property \DHL\Datatype\AM\Piece $Piece
 *	@method \DHL\Datatype\AM\Piece addPiece(\DHL\Datatype\AM\Piece $Piece)
 *	@property null $Contents
 *	@method null addContents($Contents = null)
 *	@property \DHL\Datatype\AM\Reference $Reference
 *	@method \DHL\Datatype\AM\Reference addReference(\DHL\Datatype\AM\Reference $Reference)
 *	@property \DHL\Datatype\AM\Consignee $Consignee
 *	@method \DHL\Datatype\AM\Consignee addConsignee(\DHL\Datatype\AM\Consignee $Consignee)
 *	@property \DHL\Datatype\AM\Shipper $Shipper
 *	@method \DHL\Datatype\AM\Shipper addShipper(\DHL\Datatype\AM\Shipper $Shipper)
 *	@property null $AccountNumber
 *	(DHL Account Number)
 *	@method null addAccountNumber($AccountNumber = null)
 *	(DHL Account Number)
 *	@property null $CustomerID
 *	@method null addCustomerID($CustomerID = null)
 *	@property \DHL\Datatype\AM\ShipmentDate $ShipmentDate
 *	@method \DHL\Datatype\AM\ShipmentDate addShipmentDate(\DHL\Datatype\AM\ShipmentDate $ShipmentDate)
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
 *	@property \DHL\Datatype\AM\SpecialService $SpecialService
 *	@method \DHL\Datatype\AM\SpecialService addSpecialService(\DHL\Datatype\AM\SpecialService $SpecialService)
 *	@property \DHL\Datatype\AM\Billing $Billing
 *	@method \DHL\Datatype\AM\Billing addBilling(\DHL\Datatype\AM\Billing $Billing)
 *	@property \DHL\Datatype\AM\Dutiable $Dutiable
 *	@method \DHL\Datatype\AM\Dutiable addDutiable(\DHL\Datatype\AM\Dutiable $Dutiable)
 *	@property \DHL\Datatype\AM\ExportDeclaration $ExportDeclaration
 *	@method \DHL\Datatype\AM\ExportDeclaration addExportDeclaration(\DHL\Datatype\AM\ExportDeclaration $ExportDeclaration)
 *	@property null $NewShipper
 *	@method null addNewShipper($NewShipper = null)
 *	@property null $SDeliveryDt
 *	@method null addSDeliveryDt($SDeliveryDt = null)
 *	@property null $EDeliveryDt
 *	@method null addEDeliveryDt($EDeliveryDt = null)
 *	@property null $LHPOrigCd
 *	@method null addLHPOrigCd($LHPOrigCd = null)
 *	@property null $LHPDestCd
 *	@method null addLHPDestCd($LHPDestCd = null)
 *	@property null $PLTStatus
 *	(PLTStatus)
 *	@method null addPLTStatus($PLTStatus = null)
 *	(PLTStatus)
 *	@property \DHL\Datatype\AM\QtdSInAdCur $QtdSInAdCur
 *	@method \DHL\Datatype\AM\QtdSInAdCur addQtdSInAdCur(\DHL\Datatype\AM\QtdSInAdCur $QtdSInAdCur)
 *	@property \DHL\Datatype\AM\LabelImage $LabelImage
 *	@method \DHL\Datatype\AM\LabelImage addLabelImage(\DHL\Datatype\AM\LabelImage $LabelImage)
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
        'ShippingChargeInUSD' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuredAmount' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
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
        'SDeliveryDt' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '10',
        ), 
        'EDeliveryDt' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '4',
        ), 
        'LHPOrigCd' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '4',
        ), 
        'LHPDestCd' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '4',
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
    );
}
