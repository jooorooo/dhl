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
 * File:        ExportDeclaration.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $InterConsignee
 *	@method null addInterConsignee($InterConsignee = null)
 *	@property null $IsPartiesRelation
 *	(Boolean flag)
 *	@method null addIsPartiesRelation($IsPartiesRelation = null)
 *	(Boolean flag)
 *	@property null $ECCN
 *	@method null addECCN($ECCN = null)
 *	@property null $SignatureName
 *	(Signature name)
 *	@method null addSignatureName($SignatureName = null)
 *	(Signature name)
 *	@property null $SignatureTitle
 *	(Signature title)
 *	@method null addSignatureTitle($SignatureTitle = null)
 *	(Signature title)
 *	@property null $ExportReason
 *	(Export reason)
 *	@method null addExportReason($ExportReason = null)
 *	(Export reason)
 *	@property null $ExportReasonCode
 *	(Export reason code (P:Permanent, T:Temporary, R:Re-Export))
 *	@method null addExportReasonCode($ExportReasonCode = null)
 *	(Export reason code (P:Permanent, T:Temporary, R:Re-Export))
 *	@property null $SedNumber
 *	@method null addSedNumber($SedNumber = null)
 *	@property null $SedNumberType
 *	@method null addSedNumberType($SedNumberType = null)
 *	@property null $MxStateCode
 *	@method null addMxStateCode($MxStateCode = null)
 *	@property \DHL\Datatype\EA\ExportLineItem $ExportLineItem
 *	@method \DHL\Datatype\EA\ExportLineItem addExportLineItem(\DHL\Datatype\EA\ExportLineItem $ExportLineItem)
 *
 * ExportDeclaration Request model for DHL API
 */
class ExportDeclaration extends Base
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
        'InterConsignee' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'IsPartiesRelation' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'ECCN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'SignatureName' => array(
            'type' => 'SignatureName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature name',
            'maxLength' => '35',
        ), 
        'SignatureTitle' => array(
            'type' => 'SignatureTitle',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature title',
            'maxLength' => '35',
        ), 
        'ExportReason' => array(
            'type' => 'ExportReason',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason',
            'length' => '1',
        ), 
        'ExportReasonCode' => array(
            'type' => 'ExportReasonCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason code (P:Permanent, T:Temporary, R:Re-Export)',
            'length' => '1',
            'enumeration' => 'P,T,R',
        ), 
        'SedNumber' => array(
            'type' => 'SEDNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'enumeration' => 'FTSR,XTN,SAS',
        ), 
        'SedNumberType' => array(
            'type' => 'SEDNumberType',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'length' => '1',
            'enumeration' => 'F,X,S',
        ), 
        'MxStateCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ExportLineItem' => array(
            'type' => 'ExportLineItem',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
