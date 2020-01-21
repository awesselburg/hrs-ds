<?php

namespace MyPortal\HRS_Api\Service\V2;

use MyPortal\HRS_Api\V2\Request\ReservationRequest;
use MyPortal\HRS_Api\V2\Response\ReservationResponse;
use MyPortal\HRS_Api\V2\Schema\ResponseError;

/**
 * Class Reservation
 *
 * @package MyPortal\HRS_Api\Service\V2
 */
class Reservation extends Service
{
    const URI = 'api/v2/reservation';

    public function __construct($client)
    {
        parent::__construct($client);
        $this->requestObject  = new ReservationRequest();
        $this->responseObject = new ReservationResponse();
    }

    /**
     * @return ReservationRequest
     */
    public function getReservationRequest()
    {
        return $this->requestObject;
    }

    /**
     * @param ReservationRequest $reservationRequest
     */
    public function setReservationRequest($reservationRequest)
    {
        $this->requestObject = $reservationRequest;
    }

    /**
     * @return ReservationResponse
     */
    public function getReservationResponse()
    {
        return $this->responseObject;
    }

    /**
     * @return ReservationResponse | ResponseError
     */
    public function getResponse()
    {
        return $this->responseObject;
    }
}
