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

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 *
 *	@property \DHL\Datatype\GB\ServiceArea $OriginServiceArea
 *	@method \DHL\Datatype\GB\ServiceArea addOriginServiceArea(\DHL\Datatype\GB\ServiceArea $OriginServiceArea)
 *	@property \DHL\Datatype\GB\ServiceArea $DestinationServiceArea
 *	@method \DHL\Datatype\GB\ServiceArea addDestinationServiceArea(\DHL\Datatype\GB\ServiceArea $DestinationServiceArea)
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
 *	@property \DHL\Datatype\GB\dateTime $ShipmentDate
 *	@method \DHL\Datatype\GB\dateTime addShipmentDate(\DHL\Datatype\GB\dateTime $ShipmentDate)
 *	@property array $Pieces
 *	@method array addPieces(array $Pieces)
 *	@property null $Weight
 *	@method null addWeight($Weight = null)
 *	@property null $WeightUnit
 *	@method null addWeightUnit($WeightUnit = null)
 *	@property null $EstDlvyDate
 *	@method null addEstDlvyDate($EstDlvyDate = null)
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
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'ServiceArea',
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
            'maxLength' => '12',
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
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
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
    );
}
