<?php

namespace MyPortal\HRS_Api\V2\Request;

use MyPortal\HRS_Api\Helper\Model;
use MyPortal\HRS_Api\V2\Schema\CreditCardCriteria;
use MyPortal\HRS_Api\V2\Schema\PersonCriteria;
use MyPortal\HRS_Api\V2\Schema\ReservationOfferCriteria;
use MyPortal\HRS_Api\V2\Schema\SellingInfo;

/**
 * Class ReservationRequest
 *
 * @package MyPortal\HRS_Api\V2\Request
 */
class ReservationRequest extends Model
{
    const PAYMENT_METHOD_SELECTED_NONE       = 'NONE';
    const PAYMENT_METHOD_SELECTED_TRANSFER   = 'TRANSFER';
    const PAYMENT_METHOD_SELECTED_CREDITCARD = 'CREDITCARD';

    /**
     * @var ReservationOfferCriteria
     */
    public $offer;

    /**
     * @var PersonCriteria
     */
    public $personInfo;

    /**
     * @var string
     */
    public $paymentMethodSelected;

    /**
     * @var CreditCardCriteria
     */
    public $creditCard;

    /**
     * @var SellingInfo
     */
    public $sellingInfo;

    /**
     * @var string
     */
    public $customerIp;

    /**
     * ReservationRequest constructor.
     */
    public function __construct()
    {
        $this->offer       = new ReservationOfferCriteria();
        $this->personInfo  = new PersonCriteria();
        $this->creditCard  = new CreditCardCriteria();
        $this->sellingInfo = new SellingInfo();
    }

    /**
     * @return ReservationOfferCriteria
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param ReservationOfferCriteria $offer
     */
    public function setOffer(ReservationOfferCriteria $offer)
    {
        $this->offer = $offer;
    }

    /**
     * @return PersonCriteria
     */
    public function getPersonInfo()
    {
        return $this->personInfo;
    }

    /**
     * @param PersonCriteria $personInfo
     */
    public function setPersonInfo(PersonCriteria $personInfo)
    {
        $this->personInfo = $personInfo;
    }

    /**
     * @return string
     */
    public function getPaymentMethodSelected()
    {
        return $this->paymentMethodSelected;
    }

    /**
     * @param string $paymentMethodSelected
     */
    public function setPaymentMethodSelected($paymentMethodSelected)
    {
        $this->paymentMethodSelected = $paymentMethodSelected;
    }

    /**
     * @return CreditCardCriteria
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param CreditCardCriteria $creditCard
     */
    public function setCreditCard(CreditCardCriteria $creditCard)
    {
        $this->creditCard = $creditCard;
    }

    /**
     * @return SellingInfo
     */
    public function getSellingInfo()
    {
        return $this->sellingInfo;
    }

    /**
     * @param SellingInfo $sellingInfo
     */
    public function setSellingInfo(SellingInfo $sellingInfo)
    {
        $this->sellingInfo = $sellingInfo;
    }

    /**
     * @return string
     */
    public function getCustomerIp()
    {
        return $this->customerIp;
    }

    /**
     * @param string $customerIp
     */
    public function setCustomerIp($customerIp)
    {
        $this->customerIp = $customerIp;
    }
}
