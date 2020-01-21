<?php

namespace MyPortal\HRS_Api\V2\Response;

/**
 * Class ListSearchResponse
 *
 * @package MyPortal\HRS_Api\V2\Response
 */
class ListSearchResponse extends AbstractResponse
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

}
