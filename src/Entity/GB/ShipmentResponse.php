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
 * File:        ShipmentResponse.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\GB; 
use Dhl\Entity\Base;

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
 *	@property \Dhl\Datatype\GB\Response $Response
 *	@method \Dhl\Datatype\GB\Response addResponse(\Dhl\Datatype\GB\Response $Response)
 *	@property null $RegionCode
 *	(RegionCode)
 *	@method null addRegionCode($RegionCode = null)
 *	(RegionCode)
 *	@property \Dhl\Datatype\GB\Note $Note
 *	@method \Dhl\Datatype\GB\Note addNote(\Dhl\Datatype\GB\Note $Note)
 *	@property null $AirwayBillNumber
 *	@method null addAirwayBillNumber($AirwayBillNumber = null)
 *	@property null $DhlRoutingCode
 *	(Routing Code Text)
 *	@method null addDhlRoutingCode($DhlRoutingCode = null)
 *	(Routing Code Text)
 *	@property null $DhlRoutingDataId
 *	@method null addDhlRoutingDataId($DhlRoutingDataId = null)
 *	@property null $BillingCode
 *	@method null addBillingCode($BillingCode = null)
 *	@property null $CurrencyCode
 *	(ISO currency code)
 *	@method null addCurrencyCode($CurrencyCode = null)
 *	(ISO currency code)
 *	@property null $CourierMessage
 *	@method null addCourierMessage($CourierMessage = null)
 *	@property \Dhl\Datatype\GB\DestinationServiceArea $DestinationServiceArea
 *	@method \Dhl\Datatype\GB\DestinationServiceArea addDestinationServiceArea(\Dhl\Datatype\GB\DestinationServiceArea $DestinationServiceArea)
 *	@property \Dhl\Datatype\GB\OriginServiceArea $OriginServiceArea
 *	@method \Dhl\Datatype\GB\OriginServiceArea addOriginServiceArea(\Dhl\Datatype\GB\OriginServiceArea $OriginServiceArea)
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
 *	@property null $InsuredAmount
 *	@method null addInsuredAmount($InsuredAmount = null)
 *	@property null $WeightUnit
 *	(Unit of weight measurement (K:KiloGram))
 *	@method null addWeightUnit($WeightUnit = null)
 *	(Unit of weight measurement (K:KiloGram))
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
 *	@property array $Pieces
 *	@method null addPieces($Piece = null)
 *	@property \Dhl\Datatype\GB\BarCodes $Barcodes
 *	@method \Dhl\Datatype\GB\BarCodes addBarcodes(\Dhl\Datatype\GB\BarCodes $Barcodes)
 *	@property null $Piece
 *	@property null $Contents
 *	@method null addContents($Contents = null)
 *	@property \Dhl\Datatype\GB\Reference $Reference
 *	@method \Dhl\Datatype\GB\Reference addReference(\Dhl\Datatype\GB\Reference $Reference)
 *	@property \Dhl\Datatype\GB\Consignee $Consignee
 *	@method \Dhl\Datatype\GB\Consignee addConsignee(\Dhl\Datatype\GB\Consignee $Consignee)
 *	@property \Dhl\Datatype\GB\Shipper $Shipper
 *	@method \Dhl\Datatype\GB\Shipper addShipper(\Dhl\Datatype\GB\Shipper $Shipper)
 *	@property null $AccountNumber
 *	(Dhl Account Number)
 *	@method null addAccountNumber($AccountNumber = null)
 *	(Dhl Account Number)
 *	@property null $CustomerID
 *	@method null addCustomerID($CustomerID = null)
 *	@property \Dhl\Datatype\GB\ShipmentDate $ShipmentDate
 *	@method \Dhl\Datatype\GB\ShipmentDate addShipmentDate(\Dhl\Datatype\GB\ShipmentDate $ShipmentDate)
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
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
 *	@property \Dhl\Datatype\GB\SpecialService $SpecialService
 *	@method \Dhl\Datatype\GB\SpecialService addSpecialService(\Dhl\Datatype\GB\SpecialService $SpecialService)
 *	@property \Dhl\Datatype\GB\Billing $Billing
 *	@method \Dhl\Datatype\GB\Billing addBilling(\Dhl\Datatype\GB\Billing $Billing)
 *	@property \Dhl\Datatype\GB\Dutiable $Dutiable
 *	@method \Dhl\Datatype\GB\Dutiable addDutiable(\Dhl\Datatype\GB\Dutiable $Dutiable)
 *	@property \Dhl\Datatype\GB\ExportDeclaration $ExportDeclaration
 *	@method \Dhl\Datatype\GB\ExportDeclaration addExportDeclaration(\Dhl\Datatype\GB\ExportDeclaration $ExportDeclaration)
 *	@property null $NewShipper
 *	@method null addNewShipper($NewShipper = null)
 *	@property null $PLTStatus
 *	(PLTStatus)
 *	@method null addPLTStatus($PLTStatus = null)
 *	(PLTStatus)
 *	@property \Dhl\Datatype\GB\QtdSInAdCur $QtdSInAdCur
 *	@method \Dhl\Datatype\GB\QtdSInAdCur addQtdSInAdCur(\Dhl\Datatype\GB\QtdSInAdCur $QtdSInAdCur)
 *	@property \Dhl\Datatype\GB\LabelImage $LabelImage
 *	@method \Dhl\Datatype\GB\LabelImage addLabelImage(\Dhl\Datatype\GB\LabelImage $LabelImage)
 *	@property null $CustData
 *	(CustData)
 *	@method null addCustData($CustData = null)
 *	(CustData)
 *
 * ShipmentResponse Request model for Dhl API
 */
class ShipmentResponse extends Base
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
    protected $_serviceName = 'ShipmentResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentResponse.xsd';

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
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
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
        'DhlRoutingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Routing Code Text',
        ), 
        'DhlRoutingDataId' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'BillingCode' => array(
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
        'InsuredAmount' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
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
        'Pieces' => array(
            'type' => 'ShipValResponsePiece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ), 
        'Barcodes' => array(
            'type' => 'BarCodes',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Piece' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
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
            'comment' => 'Dhl Account Number',
            'maxLength' => '12',
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
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
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
        'Label' => array(
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
        ),
        'DHLRoutingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'DHLRoutingDataId' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
    );
}
