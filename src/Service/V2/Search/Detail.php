<?php

namespace MyPortal\HRS_Api\Service\V2\Search;

use MyPortal\HRS_Api\V2\Request\DetailSearchRequest;
use MyPortal\HRS_Api\Service\v2\Service;

/**
 * Class Detail
 *
 * @package MyPortal\HRS_Api\Service\V2\Search
 */
class Detail extends Service
{
    const URI = 'api/v2/search/detail';

    public function __construct($client)
    {
        parent::__construct($client);
        $this->requestObject = new DetailSearchRequest();
    }

    /**
     * @return DetailSearchRequest
     */
    public function getDetailSearchRequest()
    {
        return $this->requestObject;
    }

    /**
     * @param DetailSearchRequest $detailSearchRequest
     */
    public function setDetailSearchRequest($detailSearchRequest)
    {
        $this->requestObject = $detailSearchRequest;
    }
}
