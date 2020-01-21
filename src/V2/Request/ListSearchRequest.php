<?php

namespace MyPortal\HRS_Api\v2\Request;

use MyPortal\HRS_Api\Helper\Model;
use MyPortal\HRS_Api\V2\Schema\RoomListCriteria;
use MyPortal\HRS_Api\V2\Schema\TravelCriteria;

/**
 * Class ListSearchRequest
 *
 * @package MyPortal\HRS_Api\v2\Request
 */
class ListSearchRequest extends Model
{
    /**
     * @var RoomListCriteria
     */
    public $accommodations;

    /**
     * @var TravelCriteria
     */
    public $searchCriteria;

    /**
     * @var int
     */
    public $timeoutMs;

    /**
     * @var string
     */
    public $customerIp;

    /**
     * @var bool
     */
    public $fromCacheOnly;

    /**
     * @var bool
     */
    public $async;

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

    /**
     * @return string
     */
    public function getCustomerIp()
    {
        return $this->customerIp;
    }

    /**
     * @param string $customerIp
     */
    public function setCustomerIp($customerIp)
    {
        $this->customerIp = $customerIp;
    }

    /**
     * @return bool
     */
    public function isFromCacheOnly()
    {
        return $this->fromCacheOnly;
    }

    /**
     * @param bool $fromCacheOnly
     */
    public function setFromCacheOnly($fromCacheOnly)
    {
        $this->fromCacheOnly = $fromCacheOnly;
    }

    /**
     * @return bool
     */
    public function isAsync()
    {
        return $this->async;
    }

    /**
     * @param bool $async
     */
    public function setAsync($async)
    {
        $this->async = $async;
    }
}
