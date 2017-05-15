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
 * File:        QtdShpType.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $GlobalProductCode
 *	@method null addGlobalProductCode($GlobalProductCode = null)
 *	@property null $LocalProductCode
 *	@method null addLocalProductCode($LocalProductCode = null)
 *	@property \DHL\Datatype\AM\QtdShpExChrgType $QtdShpExChrg
 *	@method \DHL\Datatype\AM\QtdShpExChrgType addQtdShpExChrg(\DHL\Datatype\AM\QtdShpExChrgType $QtdShpExChrg)
 *
 * QtdShpType Request model for DHL API
 */
class QtdShpType extends Base
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
    protected $_xmlNodeName = 'QtdShp';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'GlobalProductCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'LocalProductCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'QtdShpExChrg' => array(
            'type' => 'QtdShpExChrgType',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
