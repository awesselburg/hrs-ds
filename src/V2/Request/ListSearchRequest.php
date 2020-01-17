<?php

namespace MyPortal\HRS_Api\v2\Request;

use MyPortal\HRS_Api\Helper\Object;
use MyPortal\HRS_Api\V2\Request\Schema\RoomListCriteria;
use MyPortal\HRS_Api\V2\Request\Schema\TravelCriteria;

/**
 * Class ListSearchRequest
 *
 * @package MyPortal\HRS_Api\v2\Request
 */
class ListSearchRequest extends Object
{
    /**
     * @var RoomListCriteria
     */
    protected $accommodations;

    /**
     * @var TravelCriteria
     */
    protected $searchCriteria;

    /**
     * @var int
     */
    protected $timeoutMs;

    /**
     * ListSearchRequest constructor.
     */
    public function __construct()
    {
        $this->accommodations = new RoomListCriteria();
        $this->searchCriteria = new TravelCriteria();
    }

    /**
     * @return RoomListCriteria
     */
    public function getAccommodations()
    {
        return $this->accommodations;
    }

    /**
     * @param RoomListCriteria $accommodations
     */
    public function setAccommodations(RoomListCriteria $accommodations)
    {
        $this->accommodations = $accommodations;
    }

    /**
     * @return TravelCriteria
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param TravelCriteria $searchCriteria
     */
    public function setSearchCriteria(TravelCriteria $searchCriteria)
    {
        $this->searchCriteria = $searchCriteria;
    }

    /**
     * @return int
     */
    public function getTimeoutMs()
    {
        return $this->timeoutMs;
    }

    /**
     * @param int $timeoutMs
     */
    public function setTimeoutMs($timeoutMs)
    {
        $this->timeoutMs = $timeoutMs;
    }
}
