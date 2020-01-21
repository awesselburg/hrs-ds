<?php

namespace MyPortal\HRS_Api\V2\Request;

use MyPortal\HRS_Api\Helper\Model;
use MyPortal\HRS_Api\V2\Schema\AccommodationDetailCriteria;
use MyPortal\HRS_Api\V2\Schema\TravelCriteria;

/**
 * Class AvailabilitySearchRequest
 *
 * @package MyPortal\HRS_Api\V2\Request
 */
class AvailabilitySearchRequest extends Model
{
    /**
     * @var AccommodationDetailCriteria
     */
    public $accommodation;

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
}
