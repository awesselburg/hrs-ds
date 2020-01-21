<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class Document
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class ResponseError extends Model
{
    /**
     * @var string
     */
    public $errorId;

    /**
     * @var string
     */
    public $errorDescription;

    /**
     * @var RequestInfo
     */
    public $requestInfo;

    /**
     * @return string
     */
    public function getErrorId()
    {
        return $this->errorId;
    }

    /**
     * @param string $errorId
     */
    public function setErrorId($errorId)
    {
        $this->errorId = $errorId;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @param string $errorDescription
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;
    }

    /**
     * @return RequestInfo
     */
    public function getRequestInfo()
    {
        return $this->requestInfo;
    }

    /**
     * @param RequestInfo $requestInfo
     */
    public function setRequestInfo($requestInfo)
    {
        $this->requestInfo = $requestInfo;
    }
}
