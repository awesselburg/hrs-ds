<?php

namespace MyPortal\HRS_Api\V2\Request\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class CreditCardCriteria
 *
 * @package MyPortal\HRS_Api\V2\Request\Schema
 */
class CreditCardCriteria extends Object
{
    /**
     * @var string
     */
    protected $validThroughDateString;

    /**
     * @var string
     */
    protected $holder;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $validThroughDateMonth;

    /**
     * @var int
     */
    protected $validThroughDateYear;

    /**
     * @var string
     */
    protected $cvc;

    /**
     * @return string
     */
    public function getValidThroughDateString()
    {
        return $this->validThroughDateString;
    }

    /**
     * @param string $validThroughDateString
     */
    public function setValidThroughDateString($validThroughDateString)
    {
        $this->validThroughDateString = $validThroughDateString;
    }

    /**
     * @return string
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @param string $holder
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getValidThroughDateMonth()
    {
        return $this->validThroughDateMonth;
    }

    /**
     * @param int $validThroughDateMonth
     */
    public function setValidThroughDateMonth($validThroughDateMonth)
    {
        $this->validThroughDateMonth = $validThroughDateMonth;
    }

    /**
     * @return int
     */
    public function getValidThroughDateYear()
    {
        return $this->validThroughDateYear;
    }

    /**
     * @param int $validThroughDateYear
     */
    public function setValidThroughDateYear($validThroughDateYear)
    {
        $this->validThroughDateYear = $validThroughDateYear;
    }

    /**
     * @return string
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * @param string $cvc
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
    }
}
