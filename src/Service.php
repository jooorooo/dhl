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
 * File:        Service.php
 * Project:     Dhl API
 *
 * @author      Georgi Nachev (jooorooo@gmail.com)
 * @version     0.1
 */

namespace Dhl;
use Dhl\Entity\GB\ShipmentRequest;
use Dhl\Entity\GB\ShipmentResponse;
use Dhl\Client\Web as WebserviceClient;

/**
 * A service class that wraps the main calls that can be done to Dhl 
 */
class Service
{
    /**
     * Error message on last call
     * @var string
     */
    public $errorMessage = null;

    /**
     * Client to Dhl webservice
     * @var WebserviceClient
     */
    protected $_client = null;

    /**
     * Class constructor
     */ 
    public function __construct(WebserviceClient $client)
    {
        $this->_client = $client;
    }

    /**
     * Send a shipment request to Dhl
     *
     * @param ShipmentRequest $request Request to send
     *   
     * @return ShipmentResponse The Shipment response object upon success, false otherwise
     */
    public function sendShipmentRequest(ShipmentRequest $request)
    {
        // Call Dhl XML API
        try 
        {
            $xml = $this->_client->call($request);
            $response = new ShipmentResponse();
            $response->initFromXML($xml);
        }
        catch (\Exception $e) 
        {
            $this->errorMessage = $e->getMessage();
            return false;
        }
    
        return $response;
    }
}
