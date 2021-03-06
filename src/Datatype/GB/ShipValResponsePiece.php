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
 * File:        ShipValResponsePiece.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $PieceNumber
 *	(Piece Number)
 *	@method null addPieceNumber($PieceNumber = null)
 *	(Piece Number)
 *	@property null $Depth
 *	@method null addDepth($Depth = null)
 *	@property null $Width
 *	@method null addWidth($Width = null)
 *	@property null $Height
 *	@method null addHeight($Height = null)
 *	@property null $Weight
 *	(Weight of piece or shipment)
 *	@method null addWeight($Weight = null)
 *	(Weight of piece or shipment)
 *	@property null $PackageType
 *	(Package Type (EE: Dhl Express Envelope, OD:Other
 *	Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
 *	Box, DF-Dhl Flyer, YP-Your packaging))
 *	@method null addPackageType($PackageType = null)
 *	(Package Type (EE: Dhl Express Envelope, OD:Other
 *	Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
 *	Box, DF-Dhl Flyer, YP-Your packaging))
 *	@property null $DimWeight
 *	(Weight of piece or shipment)
 *	@method null addDimWeight($DimWeight = null)
 *	(Weight of piece or shipment)
 *	@property null $PieceContents
 *	(Piece contents description)
 *	@method null addPieceContents($PieceContents = null)
 *	(Piece contents description)
 *	@property null $DataIdentifier
 *	@method null addDataIdentifier($DataIdentifier = null)
 *	@property null $LicensePlate
 *	(Piece ID)
 *	@method null addLicensePlate($LicensePlate = null)
 *	(Piece ID)
 *	@property null $LicensePlateBarCode
 *	@method null addLicensePlateBarCode($LicensePlateBarCode = null)
 *
 * ShipValResponsePiece Request model for Dhl API
 */
class ShipValResponsePiece extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = 'Piece';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'PieceNumber' => array(
            'type' => 'PieceNumber',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece Number',
        ), 
        'Depth' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'Width' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'Height' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: Dhl Express Envelope, OD:Other
				Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
				Box, DF-Dhl Flyer, YP-Your packaging)',
            'length' => '2',
            'enumeration' => 'BD,BP,CP,DC,DF,DM,ED,EE,FR,JB,JD,JJ,JP,OD,PA,YP',
        ), 
        'DimWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ), 
        'PieceContents' => array(
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece contents description',
            'maxLength' => '35',
        ), 
        'DataIdentifier' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
        'LicensePlate' => array(
            'type' => 'PieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'maxLength' => '35',
        ), 
        'LicensePlateBarCode' => array(
            'type' => 'BarCode',
            'required' => true,
            'subobject' => false,
            'comment' => '',
        ), 
    );
}
