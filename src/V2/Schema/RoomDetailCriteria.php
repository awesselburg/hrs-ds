<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class RoomDetailCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class RoomDetailCriteria extends Model
{
    /**
     * @var string
     */
    public $accommodationId;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $rateId;

    /**
     * @return string
     */
    public function getAccommodationId()
    {
        return $this->accommodationId;
    }

    /**
     * @param string $accommodationId
     */
    public function setAccommodationId($accommodationId)
    {
        $this->accommodationId = $accommodationId;
    }

    /**
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @return string
     */
    public function getRateId()
    {
        return $this->rateId;
    }

    /**
     * @param string $rateId
     */
    public function setRateId($rateId)
    {
        $this->rateId = $rateId;
    }

    /**
     * @param string $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }
}
