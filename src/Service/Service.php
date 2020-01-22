<?php

namespace MyPortal\HRS_Api\Service;

use MyPortal\HRS_Api\Client;
use MyPortal\HRS_Api\Helper\Model;

class Service
{
    const URI    = '';
    const METHOD = 'POST';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Model
     */
    protected $requestObject;

    /**
     * @var Model
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
        $this->requestObject = new Model();
    }

    /**
     * @return Model
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * @param Model $responseObject
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
    public function getJsonPayload()
    {
        return \GuzzleHttp\json_encode($this->getRequestObject()->createPayload());
    }

    /**
     * @return Model
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * @param Model $requestObject
     */
    public function setRequestObject($requestObject)
    {
        $this->requestObject = $requestObject;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return $this->getRequestObject()->createPayload();
    }
}
