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
 * File:        Requestor.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $AccountType
 *	(Account type)
 *	@method null addAccountType($AccountType = null)
 *	(Account type)
 *	@property null $AccountNumber
 *	(Account number)
 *	@method null addAccountNumber($AccountNumber = null)
 *	(Account number)
 *	@property null $PackageType
 *	(Package Type (EE: Dhl Express Envelope, OD:Other
 *	Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
 *	Box, DF-Dhl Flyer, YP-Your packaging))
 *	@method null addPackageType($PackageType = null)
 *	(Package Type (EE: Dhl Express Envelope, OD:Other
 *	Dhl Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
 *	Box, DF-Dhl Flyer, YP-Your packaging))
 *	@property null $Weight
 *	(Weight of piece or shipment)
 *	@method null addWeight($Weight = null)
 *	(Weight of piece or shipment)
 *	@property null $DimWeight
 *	(Weight of piece or shipment)
 *	@method null addDimWeight($DimWeight = null)
 *	(Weight of piece or shipment)
 *	@property null $Width
 *	@method null addWidth($Width = null)
 *	@property null $Height
 *	@method null addHeight($Height = null)
 *	@property null $Depth
 *	@method null addDepth($Depth = null)
 *	@property null $RequestorContents
 *	(Requestor contents description)
 *	@method null addRequestorContents($RequestorContents = null)
 *	(Requestor contents description)
 *
 * Requestor Request model for Dhl API
 */
class Requestor extends Base
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
        'AccountType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account type',
        ),
        'AccountNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account number',
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
        'Depth' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'RequestorContents' => array(
            'type' => 'RequestorContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Requestor contents description',
            'maxLength' => '35',
        ), 
    );
}
