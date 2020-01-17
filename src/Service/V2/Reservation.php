<?php

namespace MyPortal\HRS_Api\Service\V2;

use MyPortal\HRS_Api\V2\Request\ReservationRequest;

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
        $this->requestObject = new ReservationRequest();
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
}
