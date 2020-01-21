<?php

namespace MyPortal\HRS_Api\Service\V2\Search;

use MyPortal\HRS_Api\V2\Request\DetailSearchRequest;
use MyPortal\HRS_Api\Service\v2\Service;
use MyPortal\HRS_Api\V2\Response\DetailSearchResponse;
use MyPortal\HRS_Api\V2\Schema\ResponseError;

/**
 * Class Detail
 *
 * @package MyPortal\HRS_Api\Service\V2\SearchTest
 */
class Detail extends Service
{
    const URI = 'api/v2/search/detail';

    public function __construct($client)
    {
        parent::__construct($client);
        $this->requestObject  = new DetailSearchRequest();
        $this->responseObject = new DetailSearchResponse();
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
    public function setDetailSearchRequest(DetailSearchRequest $detailSearchRequest)
    {
        $this->requestObject = $detailSearchRequest;
    }

    /**
     * @return DetailSearchResponse | ResponseError
     */
    public function getResponse()
    {
        return $this->responseObject;
    }
}
