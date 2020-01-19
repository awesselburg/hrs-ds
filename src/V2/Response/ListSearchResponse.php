<?php

namespace MyPortal\HRS_Api\V2\Response;

/**
 * Class ListSearchResponse
 *
 * @package MyPortal\HRS_Api\V2\Response
 */
class ListSearchResponse
{
    /**
     * @var \MyPortal\HRS_Api\V2\Schema\SearchResultAccommodation[]
     */
    public $accommodations;

    /**
     * @var int
     */
    public $noOfAccommodations;

    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\RequestInfo
     */
    public $requestInfo;

    /**
     * @return \MyPortal\HRS_Api\V2\Schema\SearchResultAccommodation[]
     */
    public function getAccommodations()
    {
        return $this->accommodations;
    }

    /**
     * @param \MyPortal\HRS_Api\V2\Schema\SearchResultAccommodation[] $accommodations
     */
    public function setAccommodations($accommodations)
    {
        $this->accommodations = $accommodations;
    }

    /**
     * @return int
     */
    public function getNoOfAccommodations()
    {
        return $this->noOfAccommodations;
    }

    /**
     * @param int $noOfAccommodations
     */
    public function setNoOfAccommodations($noOfAccommodations)
    {
        $this->noOfAccommodations = $noOfAccommodations;
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
