<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class NotBookableRoom
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class NotBookableRoom extends Model
{
    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string[]
     */
    public $notBookableReasonIds;

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

    /**
     * @return string[]
     */
    public function getNotBookableReasonIds()
    {
        return $this->notBookableReasonIds;
    }

    /**
     * @param string[] $notBookableReasonIds
     */
    public function setNotBookableReasonIds($notBookableReasonIds)
    {
        $this->notBookableReasonIds = $notBookableReasonIds;
    }
}
