<?php

namespace MyPortal\HRS_Api\Tests\Unit;

use MyPortal\HRS_Api\Client;
use MyPortal\HRS_Api\Exception\InvalidConfigException;
use PHPUnit\Framework\TestCase;
use \Exception;

class ClientTest extends TestCase
{
    public function testInvalidConfig()
    {
        $config = [];
        try {
            new Client($config);
        } catch (Exception $e) {
            $this->assertInstanceOf(InvalidConfigException::class, $e);
            $this->assertEquals('Invalid config: no X-INTERFACEID given', $e->getMessage());
        }
    }

    public function testBaseUrl()
    {
        $config = [
            'X-INTERFACEID' => 'XXXXX',
        ];

        $client = new Client($config);

        $this->assertEquals('https://api.hrs-ds.com', $client->getBaseUrl($config));
    }

    public function testBaseUrlSandbox()
    {
        $config = [
            'useSandbox'    => true,
            'X-INTERFACEID' => 'XXXXX',
        ];

        $client = new Client($config);

        $this->assertEquals('https://testapi.hrs-ds.com', $client->getBaseUrl($config));
    }
}
