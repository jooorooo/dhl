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
 * File:        ServiceHeader.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl\Datatype\GB; 
use Dhl\Datatype\Base;

/**
 *
 *	@property null $MessageTime
 *	@method null addMessageTime($MessageTime = null)
 *	@property null $MessageReference
 *	(Reference to the requested Message)
 *	@method null addMessageReference($MessageReference = null)
 *	(Reference to the requested Message)
 *	@property null $SiteID
 *	(Site ID used for verifying the sender)
 *	@method null addSiteID($SiteID = null)
 *	(Site ID used for verifying the sender)
 *	@property null $Password
 *	(Password used for verifying the sender)
 *	@method null addPassword($Password = null)
 *	(Password used for verifying the sender)
 *
 * ServiceHeader Request model for Dhl API
 */
class ServiceHeader extends Base
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
        'MessageTime' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ), 
        'MessageReference' => array(
            'type' => 'MessageReference',
            'required' => false,
            'subobject' => false,
            'comment' => 'Reference to the requested Message',
            'minLength' => '28',
            'maxLength' => '32',
        ), 
        'SiteID' => array(
            'type' => 'SiteID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Site ID used for verifying the sender',
            'minLength' => '6',
            'maxLength' => '20',
        ), 
        'Password' => array(
            'type' => 'Password',
            'required' => false,
            'subobject' => false,
            'comment' => 'Password used for verifying the sender',
            'minLength' => '8',
            'maxLength' => '20',
        ), 
    );
}
