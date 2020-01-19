<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class RoomListCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class RoomListCriteria extends Object
{
    /**
     * @var array
     */
    protected $accommodationIds = [];

    /**
     * @var array
     */
    protected $roomIds = [];

    /**
     * @var array
     */
    protected $regionNames = [];

    /**
     * @return array
     */
    public function getAccommodationIds()
    {
        return $this->accommodationIds;
    }

    /**
     * @param array $accommodationIds
     */
    public function setAccommodationIds($accommodationIds)
    {
        $this->accommodationIds = $accommodationIds;
    }

    /**
     * @param $accommodationId string
     */
    public function addAccommodationId($accommodationId)
    {
        $this->accommodationIds[] = $accommodationId;
    }

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
    public function setRoomIds($roomIds)
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
     * @return array
     */
    public function getRegionNames()
    {
        return $this->regionNames;
    }

    /**
     * @param array $regionNames
     */
    public function setRegionNames($regionNames)
    {
        $this->regionNames = $regionNames;
    }

    /**
     * @param array $regionName
     */
    public function addRegionName($regionName)
    {
        $this->regionNames[] = $regionName;
    }
}
