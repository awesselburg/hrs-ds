<?php

namespace MyPortal\HRS_Api\V2\Response;

/**
 * Class DetailSearchResponse
 *
 * @package MyPortal\HRS_Api\V2\Response
 */
class DetailSearchResponse
{
    /**
     * @var \MyPortal\HRS_Api\V2\Schema\TravelCriteria
     */
    public $searchCriteria;

    /**
     * @var string
     */
    public $accommodationId;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\DetailSearchRoom[]
     */
    public $rooms;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\NotBookableRoom
     */
    public $roomsNotBookable;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\Document[]
     */
    public $documents;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var bool
     */
    public $allGuestInfoNecessary;

    /**
     * @var bool
     */
    public $guestRemarkSupported;

    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\RequestInfo
     */
    public $requestInfo;

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
     * @return \MyPortal\HRS_Api\V2\Schema\DetailSearchRoom[]
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\DetailSearchRoom[] $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return \MyPortal\HRS_Api\V2\Schema\NotBookableRoom
     */
    public function getRoomsNotBookable()
    {
        return $this->roomsNotBookable;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\NotBookableRoom $roomsNotBookable
     */
    public function setRoomsNotBookable($roomsNotBookable)
    {
        $this->roomsNotBookable = $roomsNotBookable;
    }

    /**
     * @return \MyPortal\HRS_Api\V2\Schema\Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\Document[] $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function isAllGuestInfoNecessary()
    {
        return $this->allGuestInfoNecessary;
    }

    /**
     * @param bool $allGuestInfoNecessary
     */
    public function setAllGuestInfoNecessary($allGuestInfoNecessary)
    {
        $this->allGuestInfoNecessary = $allGuestInfoNecessary;
    }

    /**
     * @return bool
     */
    public function isGuestRemarkSupported()
    {
        return $this->guestRemarkSupported;
    }

    /**
     * @param bool $guestRemarkSupported
     */
    public function setGuestRemarkSupported($guestRemarkSupported)
    {
        $this->guestRemarkSupported = $guestRemarkSupported;
    }

    /**
     * @return int
     */
    public function getDurationMs()
    {
        return $this->durationMs;
    }

    /**
     * @param int $durationMs
     */
    public function setDurationMs($durationMs)
    {
        $this->durationMs = $durationMs;
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
}
