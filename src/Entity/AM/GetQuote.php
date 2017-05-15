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
 * File:        GetQuote.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Entity\AM; 
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
 *	@property \Dhl\Datatype\AM\DCTFrom $From
 *	@method \Dhl\Datatype\AM\DCTFrom addFrom(\Dhl\Datatype\AM\DCTFrom $From)
 *	@property \Dhl\Datatype\AM\BkgDetailsType $BkgDetails
 *	@method \Dhl\Datatype\AM\BkgDetailsType addBkgDetails(\Dhl\Datatype\AM\BkgDetailsType $BkgDetails)
 *	@property \Dhl\Datatype\AM\DCTTo $To
 *	@method \Dhl\Datatype\AM\DCTTo addTo(\Dhl\Datatype\AM\DCTTo $To)
 *	@property \Dhl\Datatype\AM\DCTDutiable $Dutiable
 *	@method \Dhl\Datatype\AM\DCTDutiable addDutiable(\Dhl\Datatype\AM\DCTDutiable $Dutiable)
 *
 * GetQuote Request model for Dhl API
 */
class GetQuote extends Base
{
    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'DCTRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'DCT-req.xsd';

    /**
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = 'GetQuote';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'From' => array(
            'type' => 'DCTFrom',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ), 
        'BkgDetails' => array(
            'type' => 'BkgDetailsType',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ), 
        'To' => array(
            'type' => 'DCTTo',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ), 
        'Dutiable' => array(
            'type' => 'DCTDutiable',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 0,
        ), 
   );
}
