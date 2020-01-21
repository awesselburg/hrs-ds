<?php

namespace MyPortal\HRS_Api\V2\Response;

class AvailabilitySearchResponse extends AbstractResponse
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
     * @var \MyPortal\HRS_Api\V2\Schema\TravelCriteria
     */
    public $searchCriteria;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\NotBookableRoom[]
     */
    public $notBookableRooms = [];

    /**
     * @return \MyPortal\HRS_Api\V2\Schema\NotBookableRoom[]
     */
    public function getNotBookableRooms()
    {
        return $this->notBookableRooms;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\NotBookableRoom[] $notBookableRooms
     */
    public function setNotBookableRooms($notBookableRooms)
    {
        $this->notBookableRooms = $notBookableRooms;
    }

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
