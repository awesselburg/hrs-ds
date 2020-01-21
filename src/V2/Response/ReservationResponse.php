<?php

namespace MyPortal\HRS_Api\V2\Response;

class ReservationResponse extends AbstractResponse
{
    /**
     * @var string
     */
    public $reservationId;

    /**
     * @var string
     */
    public $reservationFrameUrl;

    /**
     * @return string
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param string $reservationId
     */
    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;
    }

    /**
     * @return string
     */
    public function getReservationFrameUrl()
    {
        return $this->reservationFrameUrl;
    }

    /**
     * @param string $reservationFrameUrl
     */
    public function setReservationFrameUrl($reservationFrameUrl)
    {
        $this->reservationFrameUrl = $reservationFrameUrl;
    }
}
