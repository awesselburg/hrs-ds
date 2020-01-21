<?php

namespace MyPortal\HRS_Api;

use \GuzzleHttp\Client as GuzzleClient;
use \Exception;
use MyPortal\HRS_Api\Exception\InvalidConfigException;

/**
 * Class Client
 *
 * @package MyPortal\HRS_Api
 */
class Client extends GuzzleClient
{
    const SERVICE_URL      = 'https://api.hrs-ds.com';
    const SERVICE_TEST_URL = 'https://testapi.hrs-ds.com';

    /**
     * Client constructor.
     *
     * @param array $config
     *
     * @throws Exception
     */
    public function __construct(array $config = [])
    {
        if (!isset($config['X-INTERFACEID'])) {
            throw new InvalidConfigException('Invalid config: no X-INTERFACEID given');
        }

        parent::__construct(array_merge($config, [
            'base_uri' => $this->getBaseUrl($config),
            'headers'  => [
                'Content-Type'  => 'application/json',
                'X-INTERFACEID' => $config['X-INTERFACEID'],
            ],
        ]));
    }

    /**
     * @param array $config
     *
     * @return string
     */
    public function getBaseUrl($config)
    {
        return (isset($config['useSandbox']) && $config['useSandbox'] === true)
            ? self::SERVICE_TEST_URL
            : self::SERVICE_URL;
    }
}
