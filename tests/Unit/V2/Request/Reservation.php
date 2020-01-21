<?php

namespace MyPortal\HRS_Api\Tests\Unit\V2\Request;

use MyPortal\HRS_Api\Tests\Unit\V2\Base;
use MyPortal\HRS_Api\V2\Request\ReservationRequest;
use MyPortal\HRS_Api\V2\Schema\AdditionalPackagesCriteria;
use MyPortal\HRS_Api\V2\Schema\CreditCardCriteria;
use MyPortal\HRS_Api\V2\Schema\GuestName;
use MyPortal\HRS_Api\V2\Schema\PersonCriteria;

class Reservation extends Base
{
    public function testReservation()
    {
        $expectedPayload = [
            'offer'                 => [
                'searchCriteria'     => [
                    'date'         => [
                        'from' => '2020-02-01',
                        'to'   => '2020-02-26',
                    ],
                    'adults'       => 2,
                    'childrenAges' => [4, 6],
                ],
                'room'               => [
                    'accommodationId' => '300',
                    'roomId'          => '500',
                    'rateId'          => 6,
                ],
                'additionalPackages' => [
                    [
                        'id'     => '200',
                        'amount' => 2,
                    ],
                    [
                        'id'     => '300',
                        'amount' => 3,
                    ],
                ],
                'totalPriceOriginal' => 499.99,
                'totalPriceModified' => 444.00,
            ],
            'personInfo'            => [
                'firstName'            => 'Hans',
                'lastName'             => 'Muster',
                'salutationCode'       => PersonCriteria::SALUTATION_CODE_MR,
                'company'              => 'MP',
                'email'                => 'example@me.com',
                'street'               => 'Street',
                'zip'                  => '56865',
                'city'                 => 'City',
                'phone'                => '64371234692',
                'countryCode'          => 'DE',
                'remark'               => 'remark',
                'additionalGuestNames' => [
                    [
                        'age'            => 28,
                        'salutationCode' => PersonCriteria::SALUTATION_CODE_MRS,
                        'firstName'      => 'First',
                        'lastName'       => 'Last',
                    ],
                ],
            ],
            'paymentMethodSelected' => ReservationRequest::PAYMENT_METHOD_SELECTED_TRANSFER,
            'creditCard'            => [
                'validThroughDateString' => '22/12',
                'holder'                 => 'Max Muster',
                'number'                 => '376492146921837',
                'type'                   => CreditCardCriteria::TYPE_DINERS,
                'validThroughDateMonth'  => '11',
                'validThroughDateYear'   => '2025',
                'cvc'                    => '432',
            ],
            'customerIp'            => '192.168.0.1',
            'sellingInfo'           => [
                'campaignId' => '888',
                'partnerId'  => 'WBG',
                'userId'     => '476329',
            ],
        ];

        $reservation = new ReservationRequest();

        $reservation->setCustomerIp('192.168.0.1');
        $reservation->setPaymentMethodSelected(ReservationRequest::PAYMENT_METHOD_SELECTED_TRANSFER);

        $offer = $reservation->getOffer();

        $searchCriteria = $offer->getSearchCriteria();
        $searchCriteria->setAdults(2);
        $searchCriteria->setChildrenAges([4, 6]);

        $date = $searchCriteria->getDate();
        $date->setFrom('2020-02-01');
        $date->setTo('2020-02-26');

        $room = $offer->getRoom();
        $room->setAccommodationId('300');
        $room->setRoomId('500');
        $room->setRateId('6');

        $additionalPackage = new AdditionalPackagesCriteria();
        $additionalPackage->setId('200');
        $additionalPackage->setAmount(2);

        $offer->addAdditionalPackage($additionalPackage);

        $additionalPackage = new AdditionalPackagesCriteria();
        $additionalPackage->setId('300');
        $additionalPackage->setAmount(3);

        $offer->addAdditionalPackage($additionalPackage);
        $offer->setTotalPriceOriginal(499.99);
        $offer->setTotalPriceModified(444.00);

        $personInfo = $reservation->getPersonInfo();
        $personInfo->setFirstName('Hans');
        $personInfo->setLastName('Muster');
        $personInfo->setSalutationCode(PersonCriteria::SALUTATION_CODE_MR);
        $personInfo->setCity('City');
        $personInfo->setCompany('MP');
        $personInfo->setEmail('example@me.com');
        $personInfo->setStreet('Street');
        $personInfo->setZip('56865');
        $personInfo->setPhone('64371234692');
        $personInfo->setCountryCode('DE');
        $personInfo->setRemark('remark');

        $additionalGuestName = new GuestName();
        $additionalGuestName->setSalutationCode(PersonCriteria::SALUTATION_CODE_MRS);
        $additionalGuestName->setFirstName('First');
        $additionalGuestName->setLastName('Last');
        $additionalGuestName->setAge('28');

        $personInfo->addAdditionalGuestName($additionalGuestName);

        $creditCard = $reservation->getCreditCard();
        $creditCard->setValidThroughDateString('22/12');
        $creditCard->setHolder('Max Muster');
        $creditCard->setNumber('376492146921837');
        $creditCard->setType(CreditCardCriteria::TYPE_DINERS);
        $creditCard->setValidThroughDateMonth('11');
        $creditCard->setValidThroughDateYear('2025');
        $creditCard->setCvc('432');

        $sellerInfo = $reservation->getSellingInfo();
        $sellerInfo->setUserId('476329');
        $sellerInfo->setPartnerId('WBG');
        $sellerInfo->setCampaignId('888');

        $this->assertEquals($expectedPayload, $reservation->createPayload());
    }
}
