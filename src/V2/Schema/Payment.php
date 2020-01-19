<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class Payment
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class Payment extends Object
{
    /**
     * @var CreditCardPayment
     */
    public $paymentOptionCreditCard;

    /**
     * @var TransferPayment
     */
    public $paymentOptionTransfer;

    /**
     * @var PartialPayment[]
     */
    public $depositPayments;

    /**
     * @var PartialPayment
     */
    public $finalPayment;

    /**
     * @var string
     */
    public $extraPaymentInfoText;

    /**
     * @return CreditCardPayment
     */
    public function getPaymentOptionCreditCard()
    {
        return $this->paymentOptionCreditCard;
    }

    /**
     * @param CreditCardPayment $paymentOptionCreditCard
     */
    public function setPaymentOptionCreditCard($paymentOptionCreditCard)
    {
        $this->paymentOptionCreditCard = $paymentOptionCreditCard;
    }

    /**
     * @return TransferPayment
     */
    public function getPaymentOptionTransfer()
    {
        return $this->paymentOptionTransfer;
    }

    /**
     * @param TransferPayment $paymentOptionTransfer
     */
    public function setPaymentOptionTransfer($paymentOptionTransfer)
    {
        $this->paymentOptionTransfer = $paymentOptionTransfer;
    }

    /**
     * @return PartialPayment[]
     */
    public function getDepositPayments()
    {
        return $this->depositPayments;
    }

    /**
     * @param PartialPayment[] $depositPayments
     */
    public function setDepositPayments($depositPayments)
    {
        $this->depositPayments = $depositPayments;
    }

    /**
     * @return PartialPayment
     */
    public function getFinalPayment()
    {
        return $this->finalPayment;
    }

    /**
     * @param PartialPayment $finalPayment
     */
    public function setFinalPayment($finalPayment)
    {
        $this->finalPayment = $finalPayment;
    }

    /**
     * @return string
     */
    public function getExtraPaymentInfoText()
    {
        return $this->extraPaymentInfoText;
    }

    /**
     * @param string $extraPaymentInfoText
     */
    public function setExtraPaymentInfoText($extraPaymentInfoText)
    {
        $this->extraPaymentInfoText = $extraPaymentInfoText;
    }
}
