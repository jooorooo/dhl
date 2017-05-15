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
 * File:        AdditionalProtection.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $Code
 *	(Code)
 *	@method null addCode($Code = null)
 *	(Code)
 *	@property null $Value
 *	(Value)
 *	@method null addValue($Value = null)
 *	(Value)
 *
 * AdditionalProtection Request model for DHL API
 */
class AdditionalProtection extends Base
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
        'Code' => array(
            'type' => 'Code',
            'required' => false,
            'subobject' => false,
            'comment' => 'Code',
            'length' => '2',
            'enumeration' => 'AP,NR',
        ), 
        'Value' => array(
            'type' => 'Value',
            'required' => false,
            'subobject' => false,
            'comment' => 'Value',
            'maxInclusive' => '9999999.99',
        ), 
    );
}
