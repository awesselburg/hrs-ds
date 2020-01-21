<?php

namespace MyPortal\HRS_Api\Service\V2;

use MyPortal\HRS_Api\Client;
use MyPortal\HRS_Api\V2\Response\AvailabilitySearchResponse;
use MyPortal\HRS_Api\V2\Schema\ResponseError;
use MyPortal\HRS_Api\V2\Schema\TravelCriteria;

/**
 * Class Service
 *
 * @package MyPortal\HRS_Api\Service\V2
 */
class Service extends \MyPortal\HRS_Api\Service\Service
{
    /**
     * @throws \JsonMapper_Exception
     */
    public function call()
    {
        try {
            $response = $this->getClient()->request(self::METHOD, static::URI, [
                'body' => \GuzzleHttp\json_encode($this->getRequestObject()->createPayload()),
            ]);
            $this->setJsonResponse($response->getBody()->getContents());
        } catch (\Exception $e) {
            $this->setJsonResponse($e->getResponse()->getBody(true)->getContents(), true);
        }
    }

    /**
     * @param      $response
     * @param bool $isError
     *
     * @throws \JsonMapper_Exception
     */
    public function setJsonResponse($response, $isError = false)
    {
        $mapper        = new \JsonMapper();
        $responseClass = $isError
            ? 'MyPortal\HRS_Api\V2\Schema\ResponseError'
            : get_class($this->responseObject);

        $this->setResponseObject(
            $mapper->map(json_decode($response, false), new $responseClass)
        );
    }
}
