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
 *	@property \Dhl\Datatype\EA\Billing $Billing
 *	@method \Dhl\Datatype\EA\Billing addBilling(\Dhl\Datatype\EA\Billing $Billing)
 *	@property \Dhl\Datatype\EA\Consignee $Consignee
 *	@method \Dhl\Datatype\EA\Consignee addConsignee(\Dhl\Datatype\EA\Consignee $Consignee)
 *	@property \Dhl\Datatype\EA\Commodity $Commodity
 *	@method \Dhl\Datatype\EA\Commodity addCommodity(\Dhl\Datatype\EA\Commodity $Commodity)
 *	@property \Dhl\Datatype\EA\Dutiable $Dutiable
 *	@method \Dhl\Datatype\EA\Dutiable addDutiable(\Dhl\Datatype\EA\Dutiable $Dutiable)
 *	@property \Dhl\Datatype\EA\ExportDeclaration $ExportDeclaration
 *	@method \Dhl\Datatype\EA\ExportDeclaration addExportDeclaration(\Dhl\Datatype\EA\ExportDeclaration $ExportDeclaration)
 *	@property \Dhl\Datatype\EA\Reference $Reference
 *	@method \Dhl\Datatype\EA\Reference addReference(\Dhl\Datatype\EA\Reference $Reference)
 *	@property \Dhl\Datatype\EA\ShipmentDetails $ShipmentDetails
 *	@method \Dhl\Datatype\EA\ShipmentDetails addShipmentDetails(\Dhl\Datatype\EA\ShipmentDetails $ShipmentDetails)
 *	@property \Dhl\Datatype\EA\Shipper $Shipper
 *	@method \Dhl\Datatype\EA\Shipper addShipper(\Dhl\Datatype\EA\Shipper $Shipper)
 *	@property \Dhl\Datatype\EA\SpecialService $SpecialService
 *	@method \Dhl\Datatype\EA\SpecialService addSpecialService(\Dhl\Datatype\EA\SpecialService $SpecialService)
 *	@property \Dhl\Datatype\EA\Place $Place
 *	@method \Dhl\Datatype\EA\Place addPlace(\Dhl\Datatype\EA\Place $Place)
 *	@property null $EProcShip
 *	@method null addEProcShip($EProcShip = null)
 *	@property null $Airwaybill
 *	@method null addAirwaybill($Airwaybill = null)
 *	@property \Dhl\Datatype\EA\DocImages $DocImages
 *	@method \Dhl\Datatype\EA\DocImages addDocImages(\Dhl\Datatype\EA\DocImages $DocImages)
 *	@property null $LabelImageFormat
 *	(LabelImageFormat)
 *	@method null addLabelImageFormat($LabelImageFormat = null)
 *	(LabelImageFormat)
 *	@property null $RequestArchiveDoc
 *	@method null addRequestArchiveDoc($RequestArchiveDoc = null)
 *	@property \Dhl\Datatype\EA\Label $Label
 *	@method \Dhl\Datatype\EA\Label addLabel(\Dhl\Datatype\EA\Label $Label)
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
