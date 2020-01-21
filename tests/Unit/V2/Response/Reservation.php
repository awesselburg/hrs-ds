<?php

namespace MyPortal\HRS_Api\Tests\Unit\V2\Response;

use MyPortal\HRS_Api\Tests\Unit\V2\Base;
use MyPortal\HRS_Api\V2\Response;
use MyPortal\HRS_Api;

class Reservation extends Base
{
    public function testReservation()
    {
        $client      = new HRS_Api\Client(self::$config);
        $reservation = new HRS_Api\Service\V2\Reservation($client);

        $jsonResponse = file_get_contents(__DIR__ . '../../../Data/V2/reservation.json');

        $reservation->setJsonResponse($jsonResponse);

        $response = $reservation->getResponse();

        $this->assertInstanceOf(Response\ReservationResponse::class, $response);
        $this->assertEquals('book0.048622563722031', $response->getReservationId());
        $this->assertEquals('http://www.goole.de', $response->getReservationFrameUrl());

        $this->assertDurationMs($response->getDurationMs());
        $this->assertRequestInfo($response->getRequestInfo());
    }
}
