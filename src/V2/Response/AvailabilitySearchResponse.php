<?php

namespace MyPortal\HRS_Api\V2\Response;

use MyPortal\HRS_Api\V2\Schema\TravelCriteria;

class AvailabilitySearchResponse
{
    /**
     * @var string
     */
    public $accommodationId;

    /**
     * @var array
     */
    public $idsOfVacantRooms = [];

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\RequestInfo
     */
    public $requestInfo;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\TravelCriteria
     */
    public $searchCriteria;

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
     * @return array
     */
    public function getIdsOfVacantRooms()
    {
        return $this->idsOfVacantRooms;
    }

    /**
     * @param array $idsOfVacantRooms
     */
    public function setIdsOfVacantRooms($idsOfVacantRooms)
    {
        $this->idsOfVacantRooms = $idsOfVacantRooms;
    }

    /**
     * @return \MyPortal\HRS_Api\V2\Schema\RequestInfo
     */
    public function getRequestInfo()
    {
        return $this->requestInfo;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\RequestInfo $requestInfo
     */
    public function setRequestInfo($requestInfo)
    {
        $this->requestInfo = $requestInfo;
    }

    /**
     * @return \MyPortal\HRS_Api\V2\Schema\TravelCriteria
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\TravelCriteria $searchCriteria
     */
    public function setSearchCriteria($searchCriteria)
    {
        $this->searchCriteria = $searchCriteria;
    }
}
