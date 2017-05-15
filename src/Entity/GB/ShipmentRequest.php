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
 *	@property \Dhl\Datatype\GB\Billing $Billing
 *	@method \Dhl\Datatype\GB\Billing addBilling(\Dhl\Datatype\GB\Billing $Billing)
 *	@property \Dhl\Datatype\GB\Consignee $Consignee
 *	@method \Dhl\Datatype\GB\Consignee addConsignee(\Dhl\Datatype\GB\Consignee $Consignee)
 *	@property \Dhl\Datatype\GB\Commodity $Commodity
 *	@method \Dhl\Datatype\GB\Commodity addCommodity(\Dhl\Datatype\GB\Commodity $Commodity)
 *	@property \Dhl\Datatype\GB\Dutiable $Dutiable
 *	@method \Dhl\Datatype\GB\Dutiable addDutiable(\Dhl\Datatype\GB\Dutiable $Dutiable)
 *	@property \Dhl\Datatype\GB\ExportDeclaration $ExportDeclaration
 *	@method \Dhl\Datatype\GB\ExportDeclaration addExportDeclaration(\Dhl\Datatype\GB\ExportDeclaration $ExportDeclaration)
 *	@property \Dhl\Datatype\GB\Reference $Reference
 *	@method \Dhl\Datatype\GB\Reference addReference(\Dhl\Datatype\GB\Reference $Reference)
 *	@property \Dhl\Datatype\GB\ShipmentDetails $ShipmentDetails
 *	@method \Dhl\Datatype\GB\ShipmentDetails addShipmentDetails(\Dhl\Datatype\GB\ShipmentDetails $ShipmentDetails)
 *	@property \Dhl\Datatype\GB\Shipper $Shipper
 *	@method \Dhl\Datatype\GB\Shipper addShipper(\Dhl\Datatype\GB\Shipper $Shipper)
 *	@property array $SpecialService
 *	@method \Dhl\Datatype\GB\SpecialService addSpecialService(\Dhl\Datatype\GB\SpecialService $SpecialService)
 *	@property \Dhl\Datatype\GB\Notification $Notification
 *	@method \Dhl\Datatype\GB\Notification addNotification(\Dhl\Datatype\GB\Notification $Notification)
 *	@property \Dhl\Datatype\GB\Place $Place
 *	@method \Dhl\Datatype\GB\Place addPlace(\Dhl\Datatype\GB\Place $Place)
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
 *	@property \Dhl\Datatype\GB\Label $Label
 *	@method \Dhl\Datatype\GB\Label addLabel(\Dhl\Datatype\GB\Label $Label)
 *
 * ShipmentRequest Request model for Dhl API
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
