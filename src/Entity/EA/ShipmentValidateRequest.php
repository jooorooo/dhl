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
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\EA; 
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
 *	@property \DHL\Datatype\EA\Billing $Billing
 *	@method \DHL\Datatype\EA\Billing addBilling(\DHL\Datatype\EA\Billing $Billing)
 *	@property \DHL\Datatype\EA\Consignee $Consignee
 *	@method \DHL\Datatype\EA\Consignee addConsignee(\DHL\Datatype\EA\Consignee $Consignee)
 *	@property \DHL\Datatype\EA\Commodity $Commodity
 *	@method \DHL\Datatype\EA\Commodity addCommodity(\DHL\Datatype\EA\Commodity $Commodity)
 *	@property \DHL\Datatype\EA\Dutiable $Dutiable
 *	@method \DHL\Datatype\EA\Dutiable addDutiable(\DHL\Datatype\EA\Dutiable $Dutiable)
 *	@property \DHL\Datatype\EA\ExportDeclaration $ExportDeclaration
 *	@method \DHL\Datatype\EA\ExportDeclaration addExportDeclaration(\DHL\Datatype\EA\ExportDeclaration $ExportDeclaration)
 *	@property \DHL\Datatype\EA\Reference $Reference
 *	@method \DHL\Datatype\EA\Reference addReference(\DHL\Datatype\EA\Reference $Reference)
 *	@property \DHL\Datatype\EA\ShipmentDetails $ShipmentDetails
 *	@method \DHL\Datatype\EA\ShipmentDetails addShipmentDetails(\DHL\Datatype\EA\ShipmentDetails $ShipmentDetails)
 *	@property \DHL\Datatype\EA\Shipper $Shipper
 *	@method \DHL\Datatype\EA\Shipper addShipper(\DHL\Datatype\EA\Shipper $Shipper)
 *	@property \DHL\Datatype\EA\SpecialService $SpecialService
 *	@method \DHL\Datatype\EA\SpecialService addSpecialService(\DHL\Datatype\EA\SpecialService $SpecialService)
 *	@property \DHL\Datatype\EA\Place $Place
 *	@method \DHL\Datatype\EA\Place addPlace(\DHL\Datatype\EA\Place $Place)
 *	@property null $EProcShip
 *	@method null addEProcShip($EProcShip = null)
 *	@property null $Airwaybill
 *	@method null addAirwaybill($Airwaybill = null)
 *	@property \DHL\Datatype\EA\DocImages $DocImages
 *	@method \DHL\Datatype\EA\DocImages addDocImages(\DHL\Datatype\EA\DocImages $DocImages)
 *	@property null $LabelImageFormat
 *	(LabelImageFormat)
 *	@method null addLabelImageFormat($LabelImageFormat = null)
 *	(LabelImageFormat)
 *	@property null $RequestArchiveDoc
 *	@method null addRequestArchiveDoc($RequestArchiveDoc = null)
 *	@property \DHL\Datatype\EA\Label $Label
 *	@method \DHL\Datatype\EA\Label addLabel(\DHL\Datatype\EA\Label $Label)
 *
 * ShipmentValidateRequest Request model for DHL API
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
    protected $_serviceName = 'ShipmentValidateRequestEA';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateRequestEA.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
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
