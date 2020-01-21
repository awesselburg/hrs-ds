<?php

namespace MyPortal\HRS_Api\Tests\Unit\V2;

use MyPortal\HRS_Api\V2\Schema;
use \PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    /**
     * @var array
     */
    protected static $config = [];

    /**
     * Init config
     */
    public function setUp()
    {
        if (!self::$config) {
            self::$config = [
                'X-INTERFACEID' => 'XXXX',
            ];
        }
    }

    /**
     * @param $travelCriteria Schema\TravelCriteria
     */
    public function assertTravelCriteria($travelCriteria)
    {
        $this->assertInstanceOf(Schema\TravelCriteria::class, $travelCriteria);
        $this->assertEquals(2, $travelCriteria->getAdults());
        $this->assertEquals([2, 4], $travelCriteria->getChildrenAges());
        $this->assertTimeSpan($travelCriteria->getDate());
    }

    /**
     * @param $timeSpan Schema\TimeSpan
     */
    public function assertTimeSpan($timeSpan)
    {
        $this->assertInstanceOf(Schema\TimeSpan::class, $timeSpan);
        $this->assertEquals('2020-02-16', $timeSpan->getFrom());
        $this->assertEquals('2020-02-22', $timeSpan->getTo());
    }

    /**
     * @param $durationMs int
     */
    public function assertDurationMs($durationMs)
    {
        $this->assertEquals(455, $durationMs);
    }

    /**
     * @param $requestInfo Schema\RequestInfo
     */
    public function assertRequestInfo($requestInfo)
    {
        $this->assertInstanceOf(Schema\RequestInfo::class, $requestInfo);
        $this->assertEquals('d8b4a735-7daa-43ab-a0b0-fba4fa72aab9', $requestInfo->getRequestId());
        $this->assertEquals('1579510015147', $requestInfo->getTimestamp());
        $this->assertEquals('1.433', $requestInfo->getApplicationVersion());
    }
}
