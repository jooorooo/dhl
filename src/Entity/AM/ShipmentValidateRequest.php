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
 * File:        ShipmentValidateRequest.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\AM; 
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
 *	@property \Dhl\Datatype\AM\Billing $Billing
 *	@method \Dhl\Datatype\AM\Billing addBilling(\Dhl\Datatype\AM\Billing $Billing)
 *	@property \Dhl\Datatype\AM\Consignee $Consignee
 *	@method \Dhl\Datatype\AM\Consignee addConsignee(\Dhl\Datatype\AM\Consignee $Consignee)
 *	@property \Dhl\Datatype\AM\Commodity $Commodity
 *	@method \Dhl\Datatype\AM\Commodity addCommodity(\Dhl\Datatype\AM\Commodity $Commodity)
 *	@property \Dhl\Datatype\AM\Dutiable $Dutiable
 *	@method \Dhl\Datatype\AM\Dutiable addDutiable(\Dhl\Datatype\AM\Dutiable $Dutiable)
 *	@property \Dhl\Datatype\AM\ExportDeclaration $ExportDeclaration
 *	@method \Dhl\Datatype\AM\ExportDeclaration addExportDeclaration(\Dhl\Datatype\AM\ExportDeclaration $ExportDeclaration)
 *	@property \Dhl\Datatype\AM\Reference $Reference
 *	@method \Dhl\Datatype\AM\Reference addReference(\Dhl\Datatype\AM\Reference $Reference)
 *	@property \Dhl\Datatype\AM\ShipmentDetails $ShipmentDetails
 *	@method \Dhl\Datatype\AM\ShipmentDetails addShipmentDetails(\Dhl\Datatype\AM\ShipmentDetails $ShipmentDetails)
 *	@property \Dhl\Datatype\AM\Shipper $Shipper
 *	@method \Dhl\Datatype\AM\Shipper addShipper(\Dhl\Datatype\AM\Shipper $Shipper)
 *	@property \Dhl\Datatype\AM\SpecialService $SpecialService
 *	@method \Dhl\Datatype\AM\SpecialService addSpecialService(\Dhl\Datatype\AM\SpecialService $SpecialService)
 *	@property \Dhl\Datatype\AM\Place $Place
 *	@method \Dhl\Datatype\AM\Place addPlace(\Dhl\Datatype\AM\Place $Place)
 *	@property null $EProcShip
 *	@method null addEProcShip($EProcShip = null)
 *	@property null $Airwaybill
 *	@method null addAirwaybill($Airwaybill = null)
 *	@property \Dhl\Datatype\AM\DocImages $DocImages
 *	@method \Dhl\Datatype\AM\DocImages addDocImages(\Dhl\Datatype\AM\DocImages $DocImages)
 *	@property null $LabelImageFormat
 *	(LabelImageFormat)
 *	@method null addLabelImageFormat($LabelImageFormat = null)
 *	(LabelImageFormat)
 *	@property null $RequestArchiveDoc
 *	@method null addRequestArchiveDoc($RequestArchiveDoc = null)
 *	@property \Dhl\Datatype\AM\Label $Label
 *	@method \Dhl\Datatype\AM\Label addLabel(\Dhl\Datatype\AM\Label $Label)
 *
 * ShipmentValidateRequest Request model for Dhl API
 */
class ShipmentValidateRequest extends Base
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
    protected $_serviceName = 'ShipmentValidateRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
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
            'type' => 'SpecialService',
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
            'type' => 'DocImages',
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
        'Label' => array(
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
