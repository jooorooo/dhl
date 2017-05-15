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
 * File:        DCTTo.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $CountryCode
 *	@method null addCountryCode($CountryCode = null)
 *	@property null $Postalcode
 *	@method null addPostalcode($Postalcode = null)
 *	@property null $City
 *	@method null addCity($City = null)
 *	@property null $Suburb
 *	@method null addSuburb($Suburb = null)
 *	@property null $VatNo
 *	@method null addVatNo($VatNo = null)
 *
 * DCTTo Request model for DHL API
 */
class DCTTo extends Base
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
    protected $_xmlNodeName = 'To';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'CountryCode' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'Postalcode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'City' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Suburb' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'VatNo' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
