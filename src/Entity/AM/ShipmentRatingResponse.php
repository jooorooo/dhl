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
 * File:        ShipmentRatingResponse.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 *
 *	@property null $MessageTime
 *	@method null addMessageTime($MessageTime = null)
 *	@property null $MessageReference
 *	@method null addMessageReference($MessageReference = null)
 *	@property null $SiteID
 *	@method null addSiteID($SiteID = null)
 *	@property null $Password
 *	@method null addPassword($Password = null)
 *	@property \DHL\Datatype\AM\Response $Response
 *	@method \DHL\Datatype\AM\Response addResponse(\DHL\Datatype\AM\Response $Response)
 *	@property \DHL\Datatype\AM\Note $Note
 *	@method \DHL\Datatype\AM\Note addNote(\DHL\Datatype\AM\Note $Note)
 *	@property null $Rated
 *	@method null addRated($Rated = null)
 *	@property null $ShippingCharge
 *	(ShippingCharge)
 *	@method null addShippingCharge($ShippingCharge = null)
 *	(ShippingCharge)
 *	@property null $SaturdayDeliveryCharge
 *	@method null addSaturdayDeliveryCharge($SaturdayDeliveryCharge = null)
 *	@property null $ProofOfDeliveryCharge
 *	@method null addProofOfDeliveryCharge($ProofOfDeliveryCharge = null)
 *	@property null $DutyPayCharge
 *	@method null addDutyPayCharge($DutyPayCharge = null)
 *	@property null $OnForwardCharge
 *	@method null addOnForwardCharge($OnForwardCharge = null)
 *	@property null $InsuranceCharge
 *	@method null addInsuranceCharge($InsuranceCharge = null)
 *	@property null $PackageCharge
 *	(PackageCharge)
 *	@method null addPackageCharge($PackageCharge = null)
 *	(PackageCharge)
 *	@property null $ChargeableWeight
 *	@method null addChargeableWeight($ChargeableWeight = null)
 *	@property null $DimensionalWeight
 *	@method null addDimensionalWeight($DimensionalWeight = null)
 *	@property \DHL\Datatype\AM\OriginServiceArea $OriginServiceArea
 *	@method \DHL\Datatype\AM\OriginServiceArea addOriginServiceArea(\DHL\Datatype\AM\OriginServiceArea $OriginServiceArea)
 *	@property \DHL\Datatype\AM\DestinationServiceArea $DestinationServiceArea
 *	@method \DHL\Datatype\AM\DestinationServiceArea addDestinationServiceArea(\DHL\Datatype\AM\DestinationServiceArea $DestinationServiceArea)
 *	@property null $CurrencyCode
 *	(ISO currency code)
 *	@method null addCurrencyCode($CurrencyCode = null)
 *	(ISO currency code)
 *	@property null $WeightUnit
 *	(Unit of weight measurement (L:Pounds))
 *	@method null addWeightUnit($WeightUnit = null)
 *	(Unit of weight measurement (L:Pounds))
 *	@property null $CountryCode
 *	(ISO country codes)
 *	@method null addCountryCode($CountryCode = null)
 *	(ISO country codes)
 *	@property null $Surcharge
 *	@method null addSurcharge($Surcharge = null)
 *	@property null $ZoneID
 *	@method null addZoneID($ZoneID = null)
 *
 * ShipmentRatingResponse Request model for DHL API
 */
class ShipmentRatingResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentRatingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentRatingResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ), 
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ), 
        'Rated' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShippingCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'SaturdayDeliveryCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ProofOfDeliveryCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DutyPayCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OnForwardCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuranceCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PackageCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'ChargeableWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DimensionalWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OriginServiceArea' => array(
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'CurrencyCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'Surcharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ZoneID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
