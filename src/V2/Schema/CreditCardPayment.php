<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class CreditCardPayment
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class CreditCardPayment extends Model
{
    /**
     * @var bool
     */
    public $guarantee;

    /**
     * @var bool
     */
    public $needCvc;

    /**
     * @var CreditCardType[]
     */
    public $supportedCreditCardTypes = [];

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $externalPayment;

    /**
     * @return bool
     */
    public function isGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * @param bool $guarantee
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;
    }

    /**
     * @return bool
     */
    public function isNeedCvc()
    {
        return $this->needCvc;
    }

    /**
     * @param bool $needCvc
     */
    public function setNeedCvc($needCvc)
    {
        $this->needCvc = $needCvc;
    }

    /**
     * @return CreditCardType[]
     */
    public function getSupportedCreditCardTypes()
    {
        return $this->supportedCreditCardTypes;
    }

    /**
     * @param CreditCardType[] $supportedCreditCardTypes
     */
    public function setSupportedCreditCardTypes($supportedCreditCardTypes)
    {
        $this->supportedCreditCardTypes = $supportedCreditCardTypes;
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
     * @return bool
     */
    public function isExternalPayment()
    {
        return $this->externalPayment;
    }

    /**
     * @param bool $externalPayment
     */
    public function setExternalPayment($externalPayment)
    {
        $this->externalPayment = $externalPayment;
    }
}
