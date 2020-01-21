<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class Payment
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class SearchResultRoom extends Model
{
    const PROMOTION_TYPE_LAST_MINUTE            = 'LAST_MINUTE';
    const PROMOTION_TYPE_EARLY_BOOKING          = 'EARLY_BOOKING';
    const PROMOTION_TYPE_GENERAL                = 'GENERAL';
    const CATERING_TYPE_NO_BOARD                = 'NO_BOARD';
    const CATERING_TYPE_BREAKFAST               = 'BREAKFAST';
    const CATERING_TYPE_HALF_BOARD              = 'HALF_BOARD';
    const CATERING_TYPE_THREE_QUARTER_BOARD     = 'THREE_QUARTER_BOARD';
    const CATERING_TYPE_FULL_BOARD              = 'FULL_BOARD';
    const CATERING_TYPE_TALL_INCLUSIVE          = 'ALL_INCLUSIVE';
    const RESERVATION_TYPE_STANDARD             = 'STANDARD';
    const RESERVATION_TYPE_REJECTABLE_BY_VENDOR = 'REJECTABLE_BY_VENDOR';
    const RESERVATION_TYPE_ON_REQUEST           = 'ON_REQUEST';

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var float
     */
    public $price;

    /**
     * @var float
     */
    public $priceWithoutPromotion;

    /**
     * @var string
     */
    public $cateringType;

    /**
     * @var string
     */
    public $promotionType;

    /**
     * @var string
     */
    public $promotionDescription;

    /**
     * @var int
     */
    public $minPerson;

    /**
     * @var int
     */
    public $maxPerson;

    /**
     * @var string
     */
    public $reservationType;

    /**
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @param string $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
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
     * @return float
     */
    public function getPriceWithoutPromotion()
    {
        return $this->priceWithoutPromotion;
    }

    /**
     * @param float $priceWithoutPromotion
     */
    public function setPriceWithoutPromotion($priceWithoutPromotion)
    {
        $this->priceWithoutPromotion = $priceWithoutPromotion;
    }

    /**
     * @return string
     */
    public function getCateringType()
    {
        return $this->cateringType;
    }

    /**
     * @param string $cateringType
     */
    public function setCateringType($cateringType)
    {
        $this->cateringType = $cateringType;
    }

    /**
     * @return string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return string
     */
    public function getPromotionDescription()
    {
        return $this->promotionDescription;
    }

    /**
     * @param string $promotionDescription
     */
    public function setPromotionDescription($promotionDescription)
    {
        $this->promotionDescription = $promotionDescription;
    }

    /**
     * @return int
     */
    public function getMinPerson()
    {
        return $this->minPerson;
    }

    /**
     * @param int $minPerson
     */
    public function setMinPerson($minPerson)
    {
        $this->minPerson = $minPerson;
    }

    /**
     * @return int
     */
    public function getMaxPerson()
    {
        return $this->maxPerson;
    }

    /**
     * @param int $maxPerson
     */
    public function setMaxPerson($maxPerson)
    {
        $this->maxPerson = $maxPerson;
    }

    /**
     * @return string
     */
    public function getReservationType()
    {
        return $this->reservationType;
    }

    /**
     * @param string $reservationType
     */
    public function setReservationType($reservationType)
    {
        $this->reservationType = $reservationType;
    }
}
