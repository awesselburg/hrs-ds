<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class AccommodationDetailCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class AccommodationDetailCriteria extends Model
{
    /**
     * @var string
     */
    public $accommodationId;

    /**
     * @var array
     */
    public $roomIds = [];

    /**
     * @return array
     */
    public function getRoomIds()
    {
        return $this->roomIds;
    }

    /**
     * @param array $roomIds
     */
    public function setRoomIds(array $roomIds = [])
    {
        $this->roomIds = $roomIds;
    }

    /**
     * @param string $roomId
     */
    public function addRoomId($roomId)
    {
        $this->roomIds[] = $roomId;
    }

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
}
