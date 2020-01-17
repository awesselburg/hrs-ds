<?php

namespace MyPortal\HRS_Api\Service\V2\Search;

use MyPortal\HRS_Api\V2\Request\AvailabilitySearchRequest;
use MyPortal\HRS_Api\Service\V2\Service;

/**
 * Class Availability
 *
 * @package MyPortal\HRS_Api\Service\V2\Search
 */
class Availability extends Service
{
    const URI = 'api/v2/search/availability';

    public function __construct($client)
    {
        parent::__construct($client);
        $this->requestObject = new AvailabilitySearchRequest();
    }

    /**
     * @return AvailabilitySearchRequest
     */
    public function getAvailabilitySearchRequest()
    {
        return $this->requestObject;
    }

    /**
     * @param AvailabilitySearchRequest $availabilitySearchRequest
     */
    public function setAvailabilitySearchRequest($availabilitySearchRequest)
    {
        $this->requestObject = $availabilitySearchRequest;
    }
}