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
 * File:        ShipmentRequest.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\GB; 
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
 *	@property null $RegionCode
 *	(RegionCode)
 *	@method null addRegionCode($RegionCode = null)
 *	(RegionCode)
 *	@property null $RequestedPickupTime
 *	@method null addRequestedPickupTime($RequestedPickupTime = null)
 *	@property null $NewShipper
 *	@method null addNewShipper($NewShipper = null)
 *	@property null $LanguageCode
 *	(ISO Language Code)
 *	@method null addLanguageCode($LanguageCode = null)
 *	(ISO Language Code)
 *	@property null $PiecesEnabled
 *	(Pieces Enabling Flag)
 *	@method null addPiecesEnabled($PiecesEnabled = null)
 *	(Pieces Enabling Flag)
 *	@property \DHL\Datatype\GB\Billing $Billing
 *	@method \DHL\Datatype\GB\Billing addBilling(\DHL\Datatype\GB\Billing $Billing)
 *	@property \DHL\Datatype\GB\Consignee $Consignee
 *	@method \DHL\Datatype\GB\Consignee addConsignee(\DHL\Datatype\GB\Consignee $Consignee)
 *	@property \DHL\Datatype\GB\Commodity $Commodity
 *	@method \DHL\Datatype\GB\Commodity addCommodity(\DHL\Datatype\GB\Commodity $Commodity)
 *	@property \DHL\Datatype\GB\Dutiable $Dutiable
 *	@method \DHL\Datatype\GB\Dutiable addDutiable(\DHL\Datatype\GB\Dutiable $Dutiable)
 *	@property \DHL\Datatype\GB\ExportDeclaration $ExportDeclaration
 *	@method \DHL\Datatype\GB\ExportDeclaration addExportDeclaration(\DHL\Datatype\GB\ExportDeclaration $ExportDeclaration)
 *	@property \DHL\Datatype\GB\Reference $Reference
 *	@method \DHL\Datatype\GB\Reference addReference(\DHL\Datatype\GB\Reference $Reference)
 *	@property \DHL\Datatype\GB\ShipmentDetails $ShipmentDetails
 *	@method \DHL\Datatype\GB\ShipmentDetails addShipmentDetails(\DHL\Datatype\GB\ShipmentDetails $ShipmentDetails)
 *	@property \DHL\Datatype\GB\Shipper $Shipper
 *	@method \DHL\Datatype\GB\Shipper addShipper(\DHL\Datatype\GB\Shipper $Shipper)
 *	@property array $SpecialService
 *	@method \DHL\Datatype\GB\SpecialService addSpecialService(\DHL\Datatype\GB\SpecialService $SpecialService)
 *	@property \DHL\Datatype\GB\Notification $Notification
 *	@method \DHL\Datatype\GB\Notification addNotification(\DHL\Datatype\GB\Notification $Notification)
 *	@property \DHL\Datatype\GB\Place $Place
 *	@method \DHL\Datatype\GB\Place addPlace(\DHL\Datatype\GB\Place $Place)
 *	@property null $EProcShip
 *	@method null addEProcShip($EProcShip = null)
 *	@property null $Airwaybill
 *	@method null addAirwaybill($Airwaybill = null)
 *	@property array $DocImages
 *	@method array addDocImages(array $DocImages)
 *	@property null $LabelImageFormat
 *	(LabelImageFormat)
 *	@method null addLabelImageFormat($LabelImageFormat = null)
 *	(LabelImageFormat)
 *	@property null $RequestArchiveDoc
 *	@method null addRequestArchiveDoc($RequestArchiveDoc = null)
 *	@property null $NumberOfArchiveDoc
 *	@method null addNumberOfArchiveDoc($NumberOfArchiveDoc = null)
 *	@property \DHL\Datatype\GB\Label $Label
 *	@method \DHL\Datatype\GB\Label addLabel(\DHL\Datatype\GB\Label $Label)
 *
 * ShipmentRequest Request model for DHL API
 */
class ShipmentRequest extends Base
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
    protected $_serviceName = 'ShipmentRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentRequest.xsd';

    /**
     * @var string
     * The schema version
     */
    protected $_schemaVersion = '1.0';

    /**
     * Display the schema version
     * @var boolean
     */
    protected $_displaySchemaVersion = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ), 
        'RequestedPickupTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ), 
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'Y,N',
        ), 
        'Billing' => array(
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'Commodity' => array(
            'type' => 'Commodity',
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
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'SpecialService' => array(
            'disableParentNode' => true,
            'multivalues' => true,
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
        'Notification' => array(
            'type' => 'Notification',
            'required' => false,
            'subobject' => true,
        ), 
        'Place' => array(
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ), 
        'EProcShip' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Airwaybill' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DocImages' => array(
            'type' => 'DocImage',
            'multivalues' => true,
            'required' => false,
            'subobject' => true,
        ), 
        'LabelImageFormat' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelImageFormat',
            'minLength' => '3',
            'maxLength' => '4',
            'enumeration' => 'PDF,ZPL2,EPL2',
        ), 
        'RequestArchiveDoc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'NumberOfArchiveDoc' => array(
            'type' => 'integer',
            'required' => false,
            'subobject' => false,
        ),
        'Label' => array(
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
