<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class Document
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class SearchResultAccommodation extends Object
{
    /**
     * @var string
     */
    public $accommodationId;

    /**
     * @var float
     */
    public $bestPrice;

    /**
     * @var float
     */
    public $bestPriceWithoutPromotion;

    /**
     * @var string
     */
    public $currency;

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
    public $orderNr;

    /**
     * @var SearchResultRoom[]
     */
    public $rooms;

    /**
     * @return string
     */
    public function getAccommodationId()
    {
        return $this->accommodationId;
    }

    /**
     * @param string $accommodationId
     */
    public function setAccommodationId($accommodationId)
    {
        $this->accommodationId = $accommodationId;
    }

    /**
     * @return float
     */
    public function getBestPrice()
    {
        return $this->bestPrice;
    }

    /**
     * @param float $bestPrice
     */
    public function setBestPrice($bestPrice)
    {
        $this->bestPrice = $bestPrice;
    }

    /**
     * @return float
     */
    public function getBestPriceWithoutPromotion()
    {
        return $this->bestPriceWithoutPromotion;
    }

    /**
     * @param float $bestPriceWithoutPromotion
     */
    public function setBestPriceWithoutPromotion($bestPriceWithoutPromotion)
    {
        $this->bestPriceWithoutPromotion = $bestPriceWithoutPromotion;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
    public function getOrderNr()
    {
        return $this->orderNr;
    }

    /**
     * @param int $orderNr
     */
    public function setOrderNr($orderNr)
    {
        $this->orderNr = $orderNr;
    }

    /**
     * @return SearchResultRoom[]
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param SearchResultRoom[] $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }
}
