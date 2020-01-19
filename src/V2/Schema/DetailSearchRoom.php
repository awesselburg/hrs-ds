<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class DetailSearchRoom
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class DetailSearchRoom extends Object
{
    /**
     * @var string
     */
    public $roomId;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var float
     */
    public $discount;

    /**
     * @var string
     */
    public $promotionType;

    /**
     * @var string
     */
    public $promotionDescription;

    /**
     * @var string
     */
    public $cateringType;

    /**
     * @var Payment
     */
    public $payment;

    /**
     * @var AdditionalPackage[]
     */
    public $inclusive;

    /**
     * @var AdditionalPackage[]
     */
    public $exclusive;

    /**
     * @var string[]
     */
    public $cancelConditions;

    /**
     * @var ConditionCriteria
     */
    public $conditions;

    /**
     * @var string
     */
    public $infotext;

    /**
     * @var int
     */
    public $reservationRejectionPeriod;

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
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
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
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return AdditionalPackage[]
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * @param AdditionalPackage[] $inclusive
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;
    }

    /**
     * @return AdditionalPackage[]
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }

    /**
     * @param AdditionalPackage[] $exclusive
     */
    public function setExclusive($exclusive)
    {
        $this->exclusive = $exclusive;
    }

    /**
     * @return string[]
     */
    public function getCancelConditions()
    {
        return $this->cancelConditions;
    }

    /**
     * @param string[] $cancelConditions
     */
    public function setCancelConditions($cancelConditions)
    {
        $this->cancelConditions = $cancelConditions;
    }

    /**
     * @return ConditionCriteria
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param ConditionCriteria $conditions
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
    }

    /**
     * @return string
     */
    public function getInfotext()
    {
        return $this->infotext;
    }

    /**
     * @param string $infotext
     */
    public function setInfotext($infotext)
    {
        $this->infotext = $infotext;
    }

    /**
     * @return int
     */
    public function getReservationRejectionPeriod()
    {
        return $this->reservationRejectionPeriod;
    }

    /**
     * @param int $reservationRejectionPeriod
     */
    public function setReservationRejectionPeriod($reservationRejectionPeriod)
    {
        $this->reservationRejectionPeriod = $reservationRejectionPeriod;
    }
}
