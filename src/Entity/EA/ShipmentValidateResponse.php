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
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\EA; 
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
 *	@property \Dhl\Datatype\EA\Response $Response
 *	@method \Dhl\Datatype\EA\Response addResponse(\Dhl\Datatype\EA\Response $Response)
 *	@property \Dhl\Datatype\EA\Note $Note
 *	@method \Dhl\Datatype\EA\Note addNote(\Dhl\Datatype\EA\Note $Note)
 *	@property null $AirwayBillNumber
 *	@method null addAirwayBillNumber($AirwayBillNumber = null)
 *	@property null $BillingCode
 *	@method null addBillingCode($BillingCode = null)
 *	@property null $CurrencyCode
 *	(ISO currency code)
 *	@method null addCurrencyCode($CurrencyCode = null)
 *	(ISO currency code)
 *	@property null $CourierMessage
 *	@method null addCourierMessage($CourierMessage = null)
 *	@property null $DhlRoutingCode
 *	(Routing Code Text)
 *	@method null addDhlRoutingCode($DhlRoutingCode = null)
 *	(Routing Code Text)
 *	@property null $DhlRoutingDataId
 *	@method null addDhlRoutingDataId($DhlRoutingDataId = null)
 *	@property \Dhl\Datatype\EA\DestinationServiceArea $DestinationServiceArea
 *	@method \Dhl\Datatype\EA\DestinationServiceArea addDestinationServiceArea(\Dhl\Datatype\EA\DestinationServiceArea $DestinationServiceArea)
 *	@property \Dhl\Datatype\EA\OriginServiceArea $OriginServiceArea
 *	@method \Dhl\Datatype\EA\OriginServiceArea addOriginServiceArea(\Dhl\Datatype\EA\OriginServiceArea $OriginServiceArea)
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
 *	@property \Dhl\Datatype\EA\Pieces $Pieces
 *	@method \Dhl\Datatype\EA\Pieces addPieces(\Dhl\Datatype\EA\Pieces $Pieces)
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
 *	@property null $WeightUnit
 *	(Unit of weight measurement (L:Pounds))
 *	@method null addWeightUnit($WeightUnit = null)
 *	(Unit of weight measurement (L:Pounds))
 *	@property null $ChargeableWeight
 *	@method null addChargeableWeight($ChargeableWeight = null)
 *	@property null $DimensionalWeight
 *	@method null addDimensionalWeight($DimensionalWeight = null)
 *	@property null $CountryCode
 *	(ISO country codes)
 *	@method null addCountryCode($CountryCode = null)
 *	(ISO country codes)
 *	@property \Dhl\Datatype\EA\string $Barcodes
 *	@method \Dhl\Datatype\EA\string addBarcodes(\Dhl\Datatype\EA\string $Barcodes)
 *	@property \Dhl\Datatype\EA\Piece $Piece
 *	@method \Dhl\Datatype\EA\Piece addPiece(\Dhl\Datatype\EA\Piece $Piece)
 *	@property null $Contents
 *	@method null addContents($Contents = null)
 *	@property \Dhl\Datatype\EA\Reference $Reference
 *	@method \Dhl\Datatype\EA\Reference addReference(\Dhl\Datatype\EA\Reference $Reference)
 *	@property \Dhl\Datatype\EA\Consignee $Consignee
 *	@method \Dhl\Datatype\EA\Consignee addConsignee(\Dhl\Datatype\EA\Consignee $Consignee)
 *	@property \Dhl\Datatype\EA\Shipper $Shipper
 *	@method \Dhl\Datatype\EA\Shipper addShipper(\Dhl\Datatype\EA\Shipper $Shipper)
 *	@property null $CustomerID
 *	@method null addCustomerID($CustomerID = null)
 *	@property \Dhl\Datatype\EA\ShipmentDate $ShipmentDate
 *	@method \Dhl\Datatype\EA\ShipmentDate addShipmentDate(\Dhl\Datatype\EA\ShipmentDate $ShipmentDate)
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
 *	@property \Dhl\Datatype\EA\SpecialService $SpecialService
 *	@method \Dhl\Datatype\EA\SpecialService addSpecialService(\Dhl\Datatype\EA\SpecialService $SpecialService)
 *	@property \Dhl\Datatype\EA\Billing $Billing
 *	@method \Dhl\Datatype\EA\Billing addBilling(\Dhl\Datatype\EA\Billing $Billing)
 *	@property \Dhl\Datatype\EA\Dutiable $Dutiable
 *	@method \Dhl\Datatype\EA\Dutiable addDutiable(\Dhl\Datatype\EA\Dutiable $Dutiable)
 *	@property \Dhl\Datatype\EA\ExportDeclaration $ExportDeclaration
 *	@method \Dhl\Datatype\EA\ExportDeclaration addExportDeclaration(\Dhl\Datatype\EA\ExportDeclaration $ExportDeclaration)
 *	@property null $NewShipper
 *	@method null addNewShipper($NewShipper = null)
 *	@property null $PLTStatus
 *	(PLTStatus)
 *	@method null addPLTStatus($PLTStatus = null)
 *	(PLTStatus)
 *	@property \Dhl\Datatype\EA\QtdSInAdCur $QtdSInAdCur
 *	@method \Dhl\Datatype\EA\QtdSInAdCur addQtdSInAdCur(\Dhl\Datatype\EA\QtdSInAdCur $QtdSInAdCur)
 *	@property \Dhl\Datatype\EA\LabelImage $LabelImage
 *	@method \Dhl\Datatype\EA\LabelImage addLabelImage(\Dhl\Datatype\EA\LabelImage $LabelImage)
 *	@property null $CustData
 *	(CustData)
 *	@method null addCustData($CustData = null)
 *	(CustData)
 *
 * ShipmentValidateResponse Request model for Dhl API
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
