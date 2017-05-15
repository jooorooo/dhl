<?php
/**
 *
 *	@property null $ActionNote
 *	@method null addActionNote($ActionNote = null)
 *	@property \DHL\Datatype\AM\Condition $Condition
 *	@method \DHL\Datatype\AM\Condition addCondition(\DHL\Datatype\AM\Condition $Condition)
 *
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
 * File:        Note.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
  Request model for DHL API
 */
class Note extends Base
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
        'ActionNote' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Condition' => array(
            'type' => 'Condition',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
