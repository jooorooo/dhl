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
 * File:        Email.php
 * Project:     DHL API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 *
 *	@property null $From
 *	(Email address containing '@')
 *	@method null addFrom($From = null)
 *	(Email address containing '@')
 *	@property null $To
 *	(Email address containing '@')
 *	@method null addTo($To = null)
 *	(Email address containing '@')
 *	@property null $cc
 *	(Email address containing '@')
 *	@method null addcc($cc = null)
 *	(Email address containing '@')
 *	@property null $Subject
 *	@method null addSubject($Subject = null)
 *	@property null $ReplyTo
 *	(Email address containing '@')
 *	@method null addReplyTo($ReplyTo = null)
 *	(Email address containing '@')
 *	@property null $Body
 *	(Body of an email message)
 *	@method null addBody($Body = null)
 *	(Body of an email message)
 *
 * Email Request model for DHL API
 */
class Email extends Base
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
        'From' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'To' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'cc' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'Subject' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ReplyTo' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'Body' => array(
            'type' => 'EmailBody',
            'required' => false,
            'subobject' => false,
            'comment' => 'Body of an email message',
            'maxLength' => '255',
        ), 
    );
}
