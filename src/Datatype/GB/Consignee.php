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
 * File:        Consignee.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $CompanyName
 *	(Name of company / business)
 *	@method null addCompanyName($CompanyName = null)
 *	(Name of company / business)
 *	@property null $SuiteDepartmentName
 *	(SuiteDepartmentName)
 *	@method null addSuiteDepartmentName($SuiteDepartmentName = null)
 *	(SuiteDepartmentName)
 *	@property array $AddressLine
 *	(Address Line)
 *	@method array addAddressLine(array $AddressLine)
 *	(Address Line)
 *	@property null $City
 *	(City name)
 *	@method null addCity($City = null)
 *	(City name)
 *	@property null $Division
 *	(Division (e.g. state, prefecture, etc.) name)
 *	@method null addDivision($Division = null)
 *	(Division (e.g. state, prefecture, etc.) name)
 *	@property null $DivisionCode
 *	(Division (e.g. state, prefecture, etc.) code)
 *	@method null addDivisionCode($DivisionCode = null)
 *	(Division (e.g. state, prefecture, etc.) code)
 *	@property null $PostalCode
 *	(Full postal/zip code for address)
 *	@method null addPostalCode($PostalCode = null)
 *	(Full postal/zip code for address)
 *	@property null $CountryCode
 *	(ISO country codes)
 *	@method null addCountryCode($CountryCode = null)
 *	(ISO country codes)
 *	@property null $CountryName
 *	(ISO country name)
 *	@method null addCountryName($CountryName = null)
 *	(ISO country name)
 *	@property null $FederalTaxId
 *	@method null addFederalTaxId($FederalTaxId = null)
 *	@property null $StateTaxId
 *	@method null addStateTaxId($StateTaxId = null)
 *	@property \DHL\Datatype\GB\Contact $Contact
 *	@method \DHL\Datatype\GB\Contact addContact(\DHL\Datatype\GB\Contact $Contact)
 *
 * Consignee Request model for DHL API
 */
class Consignee extends Base
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
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
        ), 
        'SuiteDepartmentName' => array(
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
        ), 
        'AddressLine' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
            'multivalues' => true,
        ), 
        'City' => array(
            'type' => 'City',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
        ), 
        'Division' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
        ), 
        'DivisionCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ), 
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'CountryName' => array(
            'type' => 'CountryName',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
        ), 
        'FederalTaxId' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'StateTaxId' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Contact' => array(
            'type' => 'Contact',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
