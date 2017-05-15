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
 *	@property null $LanguageCode
 *	(ISO Language Code)
 *	@method null addLanguageCode($LanguageCode = null)
 *	(ISO Language Code)
 *	@property null $PiecesEnabled
 *	(Pieces Enabling Flag)
 *	@method null addPiecesEnabled($PiecesEnabled = null)
 *	(Pieces Enabling Flag)
 *	@property \DHL\Datatype\AP\Billing $Billing
 *	@method \DHL\Datatype\AP\Billing addBilling(\DHL\Datatype\AP\Billing $Billing)
 *	@property \DHL\Datatype\AP\Consignee $Consignee
 *	@method \DHL\Datatype\AP\Consignee addConsignee(\DHL\Datatype\AP\Consignee $Consignee)
 *	@property \DHL\Datatype\AP\Commodity $Commodity
 *	@method \DHL\Datatype\AP\Commodity addCommodity(\DHL\Datatype\AP\Commodity $Commodity)
 *	@property \DHL\Datatype\AP\Dutiable $Dutiable
 *	@method \DHL\Datatype\AP\Dutiable addDutiable(\DHL\Datatype\AP\Dutiable $Dutiable)
 *	@property \DHL\Datatype\AP\ExportDeclaration $ExportDeclaration
 *	@method \DHL\Datatype\AP\ExportDeclaration addExportDeclaration(\DHL\Datatype\AP\ExportDeclaration $ExportDeclaration)
 *	@property \DHL\Datatype\AP\Reference $Reference
 *	@method \DHL\Datatype\AP\Reference addReference(\DHL\Datatype\AP\Reference $Reference)
 *	@property \DHL\Datatype\AP\ShipmentDetails $ShipmentDetails
 *	@method \DHL\Datatype\AP\ShipmentDetails addShipmentDetails(\DHL\Datatype\AP\ShipmentDetails $ShipmentDetails)
 *	@property \DHL\Datatype\AP\Shipper $Shipper
 *	@method \DHL\Datatype\AP\Shipper addShipper(\DHL\Datatype\AP\Shipper $Shipper)
 *	@property \DHL\Datatype\AP\SpecialService $SpecialService
 *	@method \DHL\Datatype\AP\SpecialService addSpecialService(\DHL\Datatype\AP\SpecialService $SpecialService)
 *	@property null $EProcShip
 *	@method null addEProcShip($EProcShip = null)
 *	@property null $Airwaybill
 *	@method null addAirwaybill($Airwaybill = null)
 *	@property \DHL\Datatype\AP\DocImages $DocImages
 *	@method \DHL\Datatype\AP\DocImages addDocImages(\DHL\Datatype\AP\DocImages $DocImages)
 *	@property null $LabelImageFormat
 *	(LabelImageFormat)
 *	@method null addLabelImageFormat($LabelImageFormat = null)
 *	(LabelImageFormat)
 *	@property null $RequestArchiveDoc
 *	@method null addRequestArchiveDoc($RequestArchiveDoc = null)
 *	@property \DHL\Datatype\AP\Label $Label
 *	@method \DHL\Datatype\AP\Label addLabel(\DHL\Datatype\AP\Label $Label)
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
    protected $_serviceName = 'ShipmentValidateRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateRequestAP.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
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
