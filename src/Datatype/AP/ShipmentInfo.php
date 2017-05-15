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
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AP; 
use Dhl\Datatype\Base;

/**
 *
 *	@property \Dhl\Datatype\AP\OriginServiceArea $OriginServiceArea
 *	@method \Dhl\Datatype\AP\OriginServiceArea addOriginServiceArea(\Dhl\Datatype\AP\OriginServiceArea $OriginServiceArea)
 *	@property \Dhl\Datatype\AP\DestinationServiceArea $DestinationServiceArea
 *	@method \Dhl\Datatype\AP\DestinationServiceArea addDestinationServiceArea(\Dhl\Datatype\AP\DestinationServiceArea $DestinationServiceArea)
 *	@property null $ShipperName
 *	(Name)
 *	@method null addShipperName($ShipperName = null)
 *	(Name)
 *	@property null $ShipperAccountNumber
 *	(Dhl Account Number)
 *	@method null addShipperAccountNumber($ShipperAccountNumber = null)
 *	(Dhl Account Number)
 *	@property null $ConsigneeName
 *	(Name)
 *	@method null addConsigneeName($ConsigneeName = null)
 *	(Name)
 *	@property \Dhl\Datatype\AP\dateTime $ShipmentDate
 *	@method \Dhl\Datatype\AP\dateTime addShipmentDate(\Dhl\Datatype\AP\dateTime $ShipmentDate)
 *	@property \Dhl\Datatype\AP\ $Pieces
 *	@method \Dhl\Datatype\AP\ addPieces(\Dhl\Datatype\AP\ $Pieces)
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
 *	@property \Dhl\Datatype\AP\Shipper $Shipper
 *	@method \Dhl\Datatype\AP\Shipper addShipper(\Dhl\Datatype\AP\Shipper $Shipper)
 *	@property \Dhl\Datatype\AP\Consignee $Consignee
 *	@method \Dhl\Datatype\AP\Consignee addConsignee(\Dhl\Datatype\AP\Consignee $Consignee)
 *
 * ShipmentInfo Request model for Dhl API
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
            'comment' => 'Dhl Account Number',
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
