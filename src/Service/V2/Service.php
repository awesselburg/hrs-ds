<?php

namespace MyPortal\HRS_Api\Service\V2;

use MyPortal\HRS_Api\Client;

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
            return $this->getClient()->request(self::METHOD, static::URI, [
                'body' => \GuzzleHttp\json_encode($this->getRequestObject()->createJsonPayload()),
            ]);
        } catch (\Exception $e) {
            die ($e->getMessage());
        }
    }
}
