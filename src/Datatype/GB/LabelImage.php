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
 * File:        LabelImage.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $OutputFormat
 *	(OutputFormat)
 *	@method null addOutputFormat($OutputFormat = null)
 *	(OutputFormat)
 *	@property null $OutputImage
 *	(OutputImage)
 *	@method null addOutputImage($OutputImage = null)
 *	(OutputImage)
 *	@property null $OutputImageNPC
 *	@method null addOutputImageNPC($OutputImageNPC = null)
 *
 * LabelImage Request model for Dhl API
 */
class LabelImage extends Base
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
        'OutputFormat' => array(
            'type' => 'OutputFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutputFormat',
            'enumeration' => 'PDF,PL2,ZPL2,JPG,PNG,EPL2,EPLN,ZPLN',
        ), 
        'OutputImage' => array(
            'type' => 'OutputImage',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutputImage',
        ), 
        'OutputImageNPC' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
