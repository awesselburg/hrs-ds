<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class Document
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class ResponseError extends Object
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
     * @var RequestInfo;
     */
    public $requestInfo;
}
