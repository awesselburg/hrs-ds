<?php

namespace MyPortal\HRS_Api\V2\Request\Schema;

use MyPortal\HRS_Api\Helper\Object;

class RoomDetailCriteria extends Object
{
    /**
     * @var string
     */
    protected $accommodationId;

    /**
     * @var string
     */
    protected $roomId;

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
     * @param string $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }
}
