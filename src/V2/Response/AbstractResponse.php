<?php

namespace MyPortal\HRS_Api\V2\Response;

use MyPortal\HRS_Api\V2\Schema\RequestInfo;

class AbstractResponse
{
    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var \MyPortal\HRS_Api\V2\Schema\RequestInfo
     */
    public $requestInfo;

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
     * @return RequestInfo
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
