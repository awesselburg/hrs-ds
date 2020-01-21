<?php

namespace MyPortal\HRS_Api\Tests\Unit\Service\V2\Search;

use MyPortal\HRS_Api\V2\Response;
use MyPortal\HRS_Api\V2\Schema;
use MyPortal\HRS_Api;

class SearchTest extends HRS_Api\Tests\Unit\V2\Base
{
    /**
     * @throws \JsonMapper_Exception
     */
    public function testAvailability()
    {

        $client       = new HRS_Api\Client(self::$config);
        $availability = new HRS_Api\Service\V2\Search\Availability($client);

        $jsonResponse = file_get_contents(__DIR__ . '../../../Data/V2/availability.json');

        $availability->setJsonResponse($jsonResponse);

        $response = $availability->getResponse();

        $this->assertInstanceOf(Response\AvailabilitySearchResponse::class, $response);
        $this->assertTravelCriteria($response->getSearchCriteria());

        $this->assertEquals('6-44218', $response->getAccommodationId());
        $this->assertEquals(['6-143060'], $response->getIdsOfVacantRooms());
        $this->assertInternalType('array', $response->getNotBookableRooms());

        /**
         * NotBookableRooms
         */
        $getNotBookableRoom = $response->getNotBookableRooms()[0];
        $this->assertInstanceOf(Schema\NotBookableRoom::class, $getNotBookableRoom);
        $this->assertInternalType('array', $getNotBookableRoom->getNotBookableReasonIds());
        $this->assertEquals('1234', $getNotBookableRoom->getRoomId());
        $this->assertEquals(['22', '44'], $getNotBookableRoom->getNotBookableReasonIds());

        $this->assertDurationMs($response->getDurationMs());
        $this->assertRequestInfo($response->getRequestInfo());
    }

    public function testDetailSearch()
    {
        $client = new HRS_Api\Client(self::$config);
        $detail = new HRS_Api\Service\V2\Search\Detail($client);

        $jsonResponse = file_get_contents(__DIR__ . '../../../Data/V2/search_detail.json');

        $detail->setJsonResponse($jsonResponse);

        $response = $detail->getResponse();

        $this->assertInstanceOf(Response\DetailSearchResponse::class, $response);
        $this->assertTravelCriteria($response->getSearchCriteria());
        $this->assertEquals('6-44218', $response->getAccommodationId());

        $this->assertInstanceOf(Response\DetailSearchResponse::class, $response);

        /**
         * NotBookableRooms
         */
        $getNotBookableRoom = $response->getRoomsNotBookable();
        $this->assertInstanceOf(Schema\NotBookableRoom::class, $getNotBookableRoom);
        $this->assertInternalType('array', $getNotBookableRoom->getNotBookableReasonIds());
        $this->assertEquals('1234', $getNotBookableRoom->getRoomId());
        $this->assertEquals(['22', '44'], $getNotBookableRoom->getNotBookableReasonIds());

        /**
         * DetailSearchRoom
         */
        $detailSearchRoom = $response->getRooms()[0];
        $this->assertInstanceOf(Schema\DetailSearchRoom::class, $detailSearchRoom);

        $this->assertEquals('6-143060', $detailSearchRoom->getRoomId());
        $this->assertEquals('415.00', $detailSearchRoom->getTotalPrice());
        $this->assertEquals('18.00', $detailSearchRoom->getDiscount());
        $this->assertEquals(Schema\DetailSearchRoom::PROMOTION_TYPE_EARLY_BOOKING,
            $detailSearchRoom->getPromotionType());
        $this->assertEquals('Frühbucher', $detailSearchRoom->getPromotionDescription());
        $this->assertEquals(Schema\DetailSearchRoom::CATERING_TYPE_BREAKFAST, $detailSearchRoom->getCateringType());

        /**
         * Payment
         */
        $payment = $detailSearchRoom->getPayment();
        $this->assertInstanceOf(Schema\Payment::class, $payment);

        /**
         * CreditCardPayment
         */
        $paymentOptionCreditCard = $payment->getPaymentOptionCreditCard();
        $this->assertInstanceOf(Schema\CreditCardPayment::class, $paymentOptionCreditCard);
        $this->assertEquals(true, $paymentOptionCreditCard->isGuarantee());
        $this->assertEquals(true, $paymentOptionCreditCard->isNeedCvc());
        $this->assertEquals('AMEX', $paymentOptionCreditCard->getType());
        $this->assertEquals(false, $paymentOptionCreditCard->isExternalPayment());

        /**
         * CreditCardType
         */
        $supportedCreditCardType = $paymentOptionCreditCard->getSupportedCreditCardTypes()[0];
        $this->assertEquals('AMEX', $supportedCreditCardType->getType());

        $this->assertEquals('EUR', $response->getCurrency());
        $this->assertEquals(false, $response->isAllGuestInfoNecessary());
        $this->assertEquals(true, $response->isGuestRemarkSupported());

        $this->assertDurationMs($response->getDurationMs());
        $this->assertRequestInfo($response->getRequestInfo());

        /**
         * TransferPayment
         */
        $paymentOptionTransfer = $payment->getPaymentOptionTransfer();
        $this->assertInstanceOf(Schema\TransferPayment::class, $paymentOptionTransfer);
        $this->assertEquals('TRANSFER', $paymentOptionTransfer->getType());

        /**
         * PartialPayment[]
         */
        $depositPayment = $payment->getDepositPayments()[0];
        $this->assertInstanceOf(Schema\PartialPayment::class, $depositPayment);
        $this->assertEquals('2020-01-22', $depositPayment->getDate());
        $this->assertEquals('41.5', $depositPayment->getPrice());
        $this->assertEquals('22.01.2020, Anzahlung: 41,50 EUR per Überweisung', $depositPayment->getDescription());
        $this->assertEquals(false, $depositPayment->isOnsite());

        /**
         * PartialPayment
         */
        $finalPayment = $payment->getFinalPayment();
        $this->assertInstanceOf(Schema\PartialPayment::class, $finalPayment);
        $this->assertEquals('2020-02-02', $finalPayment->getDate());
        $this->assertEquals('373.5', $finalPayment->getPrice());
        $this->assertEquals('02.02.2020, Restzahlung: 373,50 EUR per Überweisung', $finalPayment->getDescription());
        $this->assertEquals(false, $finalPayment->isOnsite());

        $this->assertEquals('Die Bankdaten werden Ihnen anschließend in der Buchungsbestätigung übermittelt.',
            $payment->getExtraPaymentInfoText());

        /**
         * AdditionalPackage inclusive
         */
        $inclusive = $detailSearchRoom->getInclusive()[0];
        $this->assertInstanceOf(Schema\AdditionalPackage::class, $inclusive);
        $this->assertEquals(false, $inclusive->getId());
        $this->assertEquals('Buchungsgebühr', $inclusive->getName());
        $this->assertEquals('15.00', $inclusive->getPrice());
        $this->assertEquals('INSURANCE', $inclusive->getType());
        $this->assertEquals(2, $inclusive->getMaxQuantity());
        $this->assertEquals('Example', $inclusive->getDescription());

        /**
         * AdditionalPackage exclusive
         */
        $exclusive = $detailSearchRoom->getExclusive()[0];
        $this->assertInstanceOf(Schema\AdditionalPackage::class, $exclusive);
        $this->assertEquals('3682588', $exclusive->getId());
        $this->assertEquals('Parkplatz', $exclusive->getName());
        $this->assertEquals('0.00', $exclusive->getPrice());
        $this->assertEquals('FIXED', $exclusive->getType());
        $this->assertEquals(false, $exclusive->getMaxQuantity());
        $this->assertEquals(false, $exclusive->getDescription());

        $this->assertEquals([], $detailSearchRoom->getCancelConditions());

        /**
         * cancelConditions
         */
        $condition = $detailSearchRoom->getConditions()[0];

        $this->assertInstanceOf(Schema\ConditionCriteria::class, $condition);
        $this->assertEquals('Example description', $condition->getDescription());
        $this->assertEquals('Example type', $condition->getType());
        $this->assertEquals(22.50, $condition->getPrice());
        $this->assertEquals('Example', $condition->getName());
        $this->assertEquals('Example value', $condition->getValue());

        $this->assertEquals('Info', $detailSearchRoom->getInfotext());
        $this->assertEquals(10, $detailSearchRoom->getReservationRejectionPeriod());
        $this->assertEquals(20, $detailSearchRoom->getRateId());
        $this->assertEquals(['One'], $detailSearchRoom->getRateDescription());

        /**
         * Document
         */
        $document = $response->getDocuments()[0];
        $this->assertInstanceOf(Schema\Document::class, $document);
        $this->assertEquals('Allgemeine Geschäftsbedingungen', $document->getDescription());
        $this->assertEquals('https://de.holidayinsider.com/document/agb/6-44218', $document->getUrl());
        $this->assertEquals('AGB', $document->getDocumentType());

        $this->assertDurationMs($response->getDurationMs());
        $this->assertRequestInfo($response->getRequestInfo());
    }

    public function testListSearch()
    {
        $client     = new HRS_Api\Client(self::$config);
        $searchList = new HRS_Api\Service\V2\Search\SearchList($client);

        $jsonResponse = file_get_contents(__DIR__ . '../../../Data/V2/search_list.json');

        $searchList->setJsonResponse($jsonResponse);

        $response = $searchList->getResponse();

        $this->assertInstanceOf(Response\ListSearchResponse::class, $response);

        /**
         * SearchResultAccommodation
         */
        $accommodation = $response->getAccommodations()[0];
        $this->assertInstanceOf(Schema\SearchResultAccommodation::class, $accommodation);
        $this->assertEquals('6-46171', $accommodation->getAccommodationId());
        $this->assertEquals(339.00, $accommodation->getBestPrice());
        $this->assertEquals(339.00, $accommodation->getBestPriceWithoutPromotion());
        $this->assertEquals('EUR', $accommodation->getCurrency());
        $this->assertEquals(Schema\SearchResultAccommodation::PROMOTION_TYPE_LAST_MINUTE,
            $accommodation->getPromotionType());
        $this->assertEquals('Frühbucher', $accommodation->getPromotionDescription());
        $this->assertEquals(3, $accommodation->getOrderNr());

        /**
         * SearchResultRoom
         */
        $room = $accommodation->getRooms()[0];
        $this->assertInstanceOf(Schema\SearchResultRoom::class, $room);
        $this->assertEquals('6-148039', $room->getRoomId());
        $this->assertEquals(339.00, $room->getPrice());
        $this->assertEquals(339.00, $room->getPriceWithoutPromotion());
        $this->assertEquals(Schema\SearchResultRoom::CATERING_TYPE_BREAKFAST, $room->getCateringType());
        $this->assertEquals(Schema\SearchResultRoom::PROMOTION_TYPE_EARLY_BOOKING, $room->getPromotionType());
        $this->assertEquals('Frühbucher', $room->getPromotionDescription());
        $this->assertEquals(2, $room->getMinPerson());
        $this->assertEquals(4, $room->getMaxPerson());
        $this->assertEquals(Schema\SearchResultRoom::RESERVATION_TYPE_REJECTABLE_BY_VENDOR,
            $room->getReservationType());
    }

    public function testExceptionSearch()
    {
        $client = new HRS_Api\Client(self::$config);
        $detail = new HRS_Api\Service\V2\Search\Detail($client);

        $jsonResponse = file_get_contents(__DIR__ . '../../../Data/V2/exception.json');

        $detail->setJsonResponse($jsonResponse, true);

        $response = $detail->getResponse();

        $this->assertInstanceOf(Schema\ResponseError::class, $response);
        $this->assertEquals('1401', $response->getErrorId());
        $this->assertEquals('Invalid value(s) for datestart / dateend. Invalid specified dates.',
            $response->getErrorDescription());

        /**
         * RequestInfo
         */
        $this->assertRequestInfo($response->getRequestInfo());
    }
}
