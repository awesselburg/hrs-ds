<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class TravelCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class TravelCriteria extends Model
{
    /**
     * @var int
     */
    public $adults = 1;

    /**
     * @var array
     */
    public $childrenAges = [];

    /**
     * @var TimeSpan
     */
    public $date;

    /**
     * TravelCriteria constructor.
     */
    public function __construct()
    {
        $this->date = new TimeSpan();
    }

    /**
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * @param int $adults
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
    }

    /**
     * @return array
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * @param array $childrenAges
     */
    public function setChildrenAges(array $childrenAges)
    {
        $this->childrenAges = $childrenAges;
    }

    /**
     * @param int $childrenAge
     */
    public function addChildrenAge($childrenAge)
    {
        $this->childrenAges[] = $childrenAge;
    }

    /**
     * @return TimeSpan
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param TimeSpan $date
     */
    public function setDate(TimeSpan $date)
    {
        $this->date = $date;
    }
}
