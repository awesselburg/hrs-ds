<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class TravelCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class TravelCriteria extends Object
{
    /**
     * @var int
     */
    protected $adults = 1;

    /**
     * @var array
     */
    protected $childrenAges = [];

    /**
     * @var TimeSpan
     */
    protected $date;

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
