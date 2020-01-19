<?php

namespace MyPortal\HRS_Api\Service\V2\Search;

use MyPortal\HRS_Api\V2\Request\ListSearchRequest;
use MyPortal\HRS_Api\Service\V2\Service;
use MyPortal\HRS_Api\V2\Response\ListSearchResponse;

/**
 * Class SearchList
 *
 * @package MyPortal\HRS_Api\Service\V2\Search
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
     * @return ListSearchResponse
     */
    public function getListSearchResponse()
    {
        return $this->responseObject;
    }

    /**
     * @param ListSearchResponse $detailSearchResponse
     *
     * @throws \JsonMapper_Exception
     */
    public function setListSearchResponse($listSearchResponse)
    {
        $this->setResponse($listSearchResponse);
    }
}
