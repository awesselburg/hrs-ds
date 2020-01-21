<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class PartialPayment
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class PartialPayment extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $onsite;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isOnsite()
    {
        return $this->onsite;
    }

    /**
     * @param bool $onsite
     */
    public function setOnsite($onsite)
    {
        $this->onsite = $onsite;
    }
}
