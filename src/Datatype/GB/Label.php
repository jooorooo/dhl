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
 * File:        Label.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $LabelTemplate
 *	(LabelTemplate)
 *	@method null addLabelTemplate($LabelTemplate = null)
 *	(LabelTemplate)
 *	@property null $Logo
 *	(Boolean flag)
 *	@method null addLogo($Logo = null)
 *	(Boolean flag)
 *	@property \Dhl\Datatype\GB\CustomerLogo $CustomerLogo
 *	@method \Dhl\Datatype\GB\CustomerLogo addCustomerLogo(\Dhl\Datatype\GB\CustomerLogo $CustomerLogo)
 *	@property null $Resolution
 *	(Resolution)
 *	@method null addResolution($Resolution = null)
 *	(Resolution)
 *
 * Label Request model for Dhl API
 */
class Label extends Base
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
        'LabelTemplate' => array(
            'type' => 'LabelTemplate',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelTemplate',
            'enumeration' => '8X4_A4_PDF,8X4_thermal,8X4_A4_TC_PDF,6X4_A4_PDF,6X4_thermal,8X4_CI_PDF,8X4_CI_thermal',
        ), 
        'Logo' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CustomerLogo' => array(
            'type' => 'CustomerLogo',
            'required' => false,
            'subobject' => true,
        ), 
        'Resolution' => array(
            'type' => 'Resolution',
            'required' => false,
            'subobject' => false,
            'comment' => 'Resolution',
            'minInclusive' => '200',
            'maxInclusive' => '300',
        ), 
    );
}
