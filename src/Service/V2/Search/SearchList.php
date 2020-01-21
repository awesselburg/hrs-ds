<?php

namespace MyPortal\HRS_Api\Service\V2\Search;

use MyPortal\HRS_Api\V2\Request\ListSearchRequest;
use MyPortal\HRS_Api\Service\V2\Service;
use MyPortal\HRS_Api\V2\Response\ListSearchResponse;
use MyPortal\HRS_Api\V2\Schema\ResponseError;

/**
 * Class SearchList
 *
 * @package MyPortal\HRS_Api\Service\V2\SearchTest
 */
class SearchList extends Service
{
    const URI = 'api/v2/search/list';

    public function __construct($client)
    {
        parent::__construct($client);
        $this->requestObject  = new ListSearchRequest();
        $this->responseObject = new ListSearchResponse();
    }

    /**
     * @return ListSearchRequest
     */
    public function getListSearchRequest()
    {
        return $this->requestObject;
    }

    /**
     * @param ListSearchRequest $listSearchRequest
     */
    public function setListSearchRequest($listSearchRequest)
    {
        $this->requestObject = $listSearchRequest;
    }

    /**
     * @return ListSearchResponse | ResponseError
     */
    public function getResponse()
    {
        return $this->responseObject;
    }
}
