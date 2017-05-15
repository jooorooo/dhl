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
 * File:        Shipper.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $ShipperID
 *	(Shipper's ID)
 *	@method null addShipperID($ShipperID = null)
 *	(Shipper's ID)
 *	@property null $CompanyName
 *	(Name of company / business)
 *	@method null addCompanyName($CompanyName = null)
 *	(Name of company / business)
 *	@property null $SuiteDepartmentName
 *	(SuiteDepartmentName)
 *	@method null addSuiteDepartmentName($SuiteDepartmentName = null)
 *	(SuiteDepartmentName)
 *	@property null $RegisteredAccount
 *	(Dhl Account Number)
 *	@method null addRegisteredAccount($RegisteredAccount = null)
 *	(Dhl Account Number)
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
 *	@property null $OriginServiceAreaCode
 *	(OriginServiceAreaCode)
 *	@method null addOriginServiceAreaCode($OriginServiceAreaCode = null)
 *	(OriginServiceAreaCode)
 *	@property null $OriginFacilityCode
 *	(OriginFacilityCode)
 *	@method null addOriginFacilityCode($OriginFacilityCode = null)
 *	(OriginFacilityCode)
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
 *	@property \Dhl\Datatype\GB\Contact $Contact
 *	@method \Dhl\Datatype\GB\Contact addContact(\Dhl\Datatype\GB\Contact $Contact)
 *
 * Shipper Request model for Dhl API
 */
class Shipper extends Base
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
        'ShipperID' => array(
            'type' => 'ShipperID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipper\'s ID',
            'maxLength' => '30',
        ), 
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ), 
        'SuiteDepartmentName' => array(
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
            'maxLength' => '35',
        ), 
        'RegisteredAccount' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dhl Account Number',
            'maxLength' => '12',
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
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ), 
        'DivisionCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
            'maxLength' => '35',
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ), 
        'OriginServiceAreaCode' => array(
            'type' => 'OriginServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginServiceAreaCode',
            'maxLength' => '3',
        ), 
        'OriginFacilityCode' => array(
            'type' => 'OriginFacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginFacilityCode',
            'maxLength' => '3',
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
            'maxLength' => '35',
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
