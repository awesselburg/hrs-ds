<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class Payment
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class SearchResultRoom extends Object
{
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
     * @var float
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
     * @return float
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param float $promotionType
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
