<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class TimeSpan
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class TimeSpan extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $to;

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
