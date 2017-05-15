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
 * File:        ChargeCard.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $ChargeCardNo
 *	(Charge card number)
 *	@method null addChargeCardNo($ChargeCardNo = null)
 *	(Charge card number)
 *	@property null $ChargeCardType
 *	(Charge card issuer type)
 *	@method null addChargeCardType($ChargeCardType = null)
 *	(Charge card issuer type)
 *	@property null $ChargeCardConfNo
 *	(Charge card confirmation number)
 *	@method null addChargeCardConfNo($ChargeCardConfNo = null)
 *	(Charge card confirmation number)
 *	@property null $ChargeCardExpiryDate
 *	(Charge card expiration date)
 *	@method null addChargeCardExpiryDate($ChargeCardExpiryDate = null)
 *	(Charge card expiration date)
 *
 * ChargeCard Request model for DHL API
 */
class ChargeCard extends Base
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
        'ChargeCardNo' => array(
            'type' => 'ChargeCardNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card number',
            'minInclusive' => '1000000000000',
            'maxInclusive' => '9999999999999999',
            'pattern' => '\d{13,16}',
        ), 
        'ChargeCardType' => array(
            'type' => 'ChargeCardType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card issuer type',
            'length' => '2',
            'enumeration' => 'AM,DC,DI,MC,VI',
        ), 
        'ChargeCardConfNo' => array(
            'type' => 'ChargeCardConfNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card confirmation number',
            'pattern' => '\d{0,6}',
        ), 
        'ChargeCardExpiryDate' => array(
            'type' => 'ChargeCardExpDateValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card expiration date',
            'pattern' => '(0[1-9]|1[0-2])\d{1}[0-9]',
        ), 
    );
}
