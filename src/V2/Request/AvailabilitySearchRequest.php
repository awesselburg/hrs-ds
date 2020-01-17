<?php

namespace MyPortal\HRS_Api\V2\Request;

use MyPortal\HRS_Api\Helper\Object;
use MyPortal\HRS_Api\V2\Request\Schema\AccommodationDetailCriteria;
use MyPortal\HRS_Api\V2\Request\Schema\TravelCriteria;

/**
 * Class AvailabilitySearchRequest
 *
 * @package MyPortal\HRS_Api\V2\Request
 */
class AvailabilitySearchRequest extends Object
{
    /**
     * @var AccommodationDetailCriteria
     */
    protected $accommodation;

    /**
     * @var TravelCriteria
     */
    protected $searchCriteria;

    /**
     * @var int
     */
    protected $timeoutMs;

    /**
     * AvailabilitySearchRequest constructor.
     */
    public function __construct()
    {
        $this->accommodation  = new AccommodationDetailCriteria();
        $this->searchCriteria = new TravelCriteria();
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
     * @return AccommodationDetailCriteria
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * @param AccommodationDetailCriteria $accommodation
     *
     * @return $this
     */
    public function setAccommodation(AccommodationDetailCriteria $accommodation)
    {
        $this->accommodation = $accommodation;
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
