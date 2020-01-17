<?php

namespace MyPortal\HRS_Api\V2\Request\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class AccommodationDetailCriteria
 *
 * @package MyPortal\HRS_Api\V2\Request\Schema
 */
class AccommodationDetailCriteria extends Object
{
    /**
     * @var string
     */
    protected $accommodationId;

    /**
     * @var array
     */
    protected $roomIds = [];

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
     * @param $accommodationId
     */
    public function setAccommodationId($accommodationId)
    {
        $this->accommodationId = $accommodationId;
    }
}
