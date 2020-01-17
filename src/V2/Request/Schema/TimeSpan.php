<?php

namespace MyPortal\HRS_Api\V2\Request\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class TimeSpan
 *
 * @package MyPortal\HRS_Api\V2\Request\Schema
 */
class TimeSpan extends Object
{
    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $to;

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }
}
