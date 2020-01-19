<?php

namespace MyPortal\HRS_Api\Service;

use MyPortal\HRS_Api\Client;
use MyPortal\HRS_Api\Helper\Object;

class Service
{
    const URI = '';
    const METHOD = 'POST';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Object
     */
    protected $requestObject;

    /**
     * @var Object
     */
    protected $responseObject;

    /**
     * Service constructor.
     *
     * @param Client $client
     */
    public function __construct($client)
    {
        $this->client        = $client;
        $this->requestObject = new Object();
    }

    /**
     * @return Object
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * @param Object $requestObject
     */
    public function setRequestObject($requestObject)
    {
        $this->requestObject = $requestObject;
    }
    
    /**
     * @return Object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * @param Object $responseObject
     */
    public function setResponseObject($responseObject)
    {
        $this->responseObject = $responseObject;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return \GuzzleHttp\json_encode($this->getRequestObject()->createJsonPayload());
    }
}
