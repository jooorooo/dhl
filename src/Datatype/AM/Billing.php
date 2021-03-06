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
 * File:        Billing.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\AM; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $ShipperAccountNumber
 *	(Dhl Account Number)
 *	@method null addShipperAccountNumber($ShipperAccountNumber = null)
 *	(Dhl Account Number)
 *	@property null $ShippingPaymentType
 *	(payment type (S:Shipper,R:Recipient,T:Third Party,C:Credit Card))
 *	@method null addShippingPaymentType($ShippingPaymentType = null)
 *	(payment type (S:Shipper,R:Recipient,T:Third Party,C:Credit Card))
 *	@property null $BillingAccountNumber
 *	(Dhl Account Number)
 *	@method null addBillingAccountNumber($BillingAccountNumber = null)
 *	(Dhl Account Number)
 *	@property null $DutyPaymentType
 *	(Duty and tax charge payment type (S:Shipper, R:Recipient, T:Third Party/Other))
 *	@method null addDutyPaymentType($DutyPaymentType = null)
 *	(Duty and tax charge payment type (S:Shipper, R:Recipient, T:Third Party/Other))
 *	@property null $DutyAccountNumber
 *	(Dhl Account Number)
 *	@method null addDutyAccountNumber($DutyAccountNumber = null)
 *	(Dhl Account Number)
 *
 * Billing Request model for Dhl API
 */
class Billing extends Base
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
        'ShipperAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dhl Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'ShippingPaymentType' => array(
            'type' => 'PaymentType',
            'required' => false,
            'subobject' => false,
            'comment' => 'payment type (S:Shipper,R:Recipient,T:Third Party,C:Credit Card)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ), 
        'BillingAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dhl Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'DutyPaymentType' => array(
            'type' => 'DutyTaxPaymentType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Duty and tax charge payment type (S:Shipper, R:Recipient, T:Third Party/Other)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ), 
        'DutyAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dhl Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
    );
}
