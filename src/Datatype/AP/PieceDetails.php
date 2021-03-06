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
 * File:        PieceDetails.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AP; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $AWBNumber
 *	@method null addAWBNumber($AWBNumber = null)
 *	@property null $LicensePlate
 *	(Piece ID)
 *	@method null addLicensePlate($LicensePlate = null)
 *	(Piece ID)
 *	@property null $PieceNumber
 *	@method null addPieceNumber($PieceNumber = null)
 *	@property null $ActualDepth
 *	@method null addActualDepth($ActualDepth = null)
 *	@property null $ActualWidth
 *	@method null addActualWidth($ActualWidth = null)
 *	@property null $ActualHeight
 *	@method null addActualHeight($ActualHeight = null)
 *	@property null $ActualWeight
 *	@method null addActualWeight($ActualWeight = null)
 *	@property null $Depth
 *	@method null addDepth($Depth = null)
 *	@property null $Width
 *	@method null addWidth($Width = null)
 *	@property null $Height
 *	@method null addHeight($Height = null)
 *	@property null $Weight
 *	@method null addWeight($Weight = null)
 *	@property null $PackageType
 *	(Package Type (EE: Dhl Express Envelope, OD:Other Dhl Packaging, CP:Customer-provided.Ground shipments must choose CP))
 *	@method null addPackageType($PackageType = null)
 *	(Package Type (EE: Dhl Express Envelope, OD:Other Dhl Packaging, CP:Customer-provided.Ground shipments must choose CP))
 *	@property null $DimWeight
 *	@method null addDimWeight($DimWeight = null)
 *	@property null $WeightUnit
 *	@method null addWeightUnit($WeightUnit = null)
 *	@property null $PieceContents
 *	@method null addPieceContents($PieceContents = null)
 *
 * PieceDetails Request model for Dhl API
 */
class PieceDetails extends Base
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
        'AWBNumber' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
        'LicensePlate' => array(
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'minLength' => '1',
            'maxLength' => '35',
        ), 
        'PieceNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualDepth' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualWidth' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualHeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Depth' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Width' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Height' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Weight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: Dhl Express Envelope, OD:Other Dhl Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ), 
        'DimWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PieceContents' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
