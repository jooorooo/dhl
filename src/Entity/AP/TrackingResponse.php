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
 * File:        TrackingResponse.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\AP; 
use Dhl\Entity\Base;

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
 *	@property \Dhl\Datatype\AP\Response $Response
 *	@method \Dhl\Datatype\AP\Response addResponse(\Dhl\Datatype\AP\Response $Response)
 *	@property \Dhl\Datatype\AP\AWBInfo $AWBInfo
 *	@method \Dhl\Datatype\AP\AWBInfo addAWBInfo(\Dhl\Datatype\AP\AWBInfo $AWBInfo)
 *	@property \Dhl\Datatype\AP\Fault $Fault
 *	@method \Dhl\Datatype\AP\Fault addFault(\Dhl\Datatype\AP\Fault $Fault)
 *	@property null $LanguageCode
 *	(ISO Language Code)
 *	@method null addLanguageCode($LanguageCode = null)
 *	(ISO Language Code)
 *
 * TrackingResponse Request model for Dhl API
 */
class TrackingResponse extends Base
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
    protected $_serviceName = 'TrackingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'TrackingResponse.xsd';

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
        'AWBInfo' => array(
            'type' => 'AWBInfo',
            'required' => false,
            'subobject' => true,
        ), 
        'Fault' => array(
            'type' => 'Fault',
            'required' => false,
            'subobject' => true,
        ), 
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
        ), 
    );
}
