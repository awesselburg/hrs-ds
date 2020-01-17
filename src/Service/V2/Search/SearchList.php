<?php

namespace MyPortal\HRS_Api\Service\V2\Search;

use MyPortal\HRS_Api\V2\Request\ListSearchRequest;
use MyPortal\HRS_Api\Service\V2\Service;

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
        $this->requestObject = new ListSearchRequest();
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
}
