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
 * File:        ShipmentInfo.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 *
 *	@property \DHL\Datatype\AP\OriginServiceArea $OriginServiceArea
 *	@method \DHL\Datatype\AP\OriginServiceArea addOriginServiceArea(\DHL\Datatype\AP\OriginServiceArea $OriginServiceArea)
 *	@property \DHL\Datatype\AP\DestinationServiceArea $DestinationServiceArea
 *	@method \DHL\Datatype\AP\DestinationServiceArea addDestinationServiceArea(\DHL\Datatype\AP\DestinationServiceArea $DestinationServiceArea)
 *	@property null $ShipperName
 *	(Name)
 *	@method null addShipperName($ShipperName = null)
 *	(Name)
 *	@property null $ShipperAccountNumber
 *	(DHL Account Number)
 *	@method null addShipperAccountNumber($ShipperAccountNumber = null)
 *	(DHL Account Number)
 *	@property null $ConsigneeName
 *	(Name)
 *	@method null addConsigneeName($ConsigneeName = null)
 *	(Name)
 *	@property \DHL\Datatype\AP\dateTime $ShipmentDate
 *	@method \DHL\Datatype\AP\dateTime addShipmentDate(\DHL\Datatype\AP\dateTime $ShipmentDate)
 *	@property \DHL\Datatype\AP\ $Pieces
 *	@method \DHL\Datatype\AP\ addPieces(\DHL\Datatype\AP\ $Pieces)
 *	@property null $Weight
 *	@method null addWeight($Weight = null)
 *	@property null $WeightUnit
 *	@method null addWeightUnit($WeightUnit = null)
 *	@property null $EstDlvyDate
 *	@method null addEstDlvyDate($EstDlvyDate = null)
 *	@property null $EstDlvyDateUTC
 *	@method null addEstDlvyDateUTC($EstDlvyDateUTC = null)
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
 *	@property null $ShipmentDesc
 *	@method null addShipmentDesc($ShipmentDesc = null)
 *	@property null $DlvyNotificationFlag
 *	@method null addDlvyNotificationFlag($DlvyNotificationFlag = null)
 *	@property \DHL\Datatype\AP\Shipper $Shipper
 *	@method \DHL\Datatype\AP\Shipper addShipper(\DHL\Datatype\AP\Shipper $Shipper)
 *	@property \DHL\Datatype\AP\Consignee $Consignee
 *	@method \DHL\Datatype\AP\Consignee addConsignee(\DHL\Datatype\AP\Consignee $Consignee)
 *
 * ShipmentInfo Request model for DHL API
 */
class ShipmentInfo extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'OriginServiceArea' => array(
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipperName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'ShipperAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'ConsigneeName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'ShipmentDate' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => true,
        ), 
        'Pieces' => array(
            'type' => '',
            'required' => false,
            'subobject' => true,
        ), 
        'Weight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'EstDlvyDate' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ), 
        'EstDlvyDateUTC' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ), 
        'GlobalProductCode' => array(
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'ShipmentDesc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DlvyNotificationFlag' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
