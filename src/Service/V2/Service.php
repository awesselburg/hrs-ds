<?php

namespace MyPortal\HRS_Api\Service\V2;

use MyPortal\HRS_Api\Client;
use MyPortal\HRS_Api\V2\Schema\ResponseError;

/**
 * Class Service
 *
 * @package MyPortal\HRS_Api\Service\V2
 */
class Service extends \MyPortal\HRS_Api\Service\Service
{
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function call()
    {
        try {
            $response = $this->getClient()->request(self::METHOD, static::URI, [
                'body' => \GuzzleHttp\json_encode($this->getRequestObject()->createJsonPayload()),
            ]);
            $this->setResponse(json_decode($response->getBody()->getContents()));
        } catch (\Exception $e) {
            $error = new ResponseError();
            //$this->setResponse(ResponseError::class);
            //die ($e->getMessage());
        }
    }

    /**
     * @param $response
     *
     * @throws \JsonMapper_Exception
     */
    protected function setResponse($response)
    {
        $mapper        = new \JsonMapper();
        $responseClass = get_class($this->responseObject);
        $this->setResponseObject(
            $mapper->map($response, new $responseClass)
        );
    }
}
