<?php

namespace MyPortal\HRS_Api\Tests\Unit\V2\Request;

use MyPortal\HRS_Api\Tests\Unit\V2\Base;
use MyPortal\HRS_Api\V2\Request\AvailabilitySearchRequest;
use MyPortal\HRS_Api\V2\Request\DetailSearchRequest;
use MyPortal\HRS_Api\v2\Request\ListSearchRequest;

class SearchTest extends Base
{
    public function testAvailability()
    {
        $expectedPayload = [
            'accommodation'  => [
                'accommodationId' => '100',
                'roomIds'         => ['200', '300'],
            ],
            'searchCriteria' => [
                'date'         => [
                    'from' => '2020-02-01',
                    'to'   => '2020-02-26',
                ],
                'adults'       => 2,
                'childrenAges' => [4, 6],
            ],
            'timeoutMs'      => 100,
            'customerIp'     => '192.168.0.1',
        ];

        $availability = new AvailabilitySearchRequest();

        $availability->setTimeoutMs(100);
        $availability->setCustomerIp('192.168.0.1');

        $accommodation = $availability->getAccommodation();
        $accommodation->setAccommodationId('100');
        $accommodation->setRoomIds(['200', '300']);

        $searchCriteria = $availability->getSearchCriteria();
        $searchCriteria->setAdults(2);
        $searchCriteria->setChildrenAges([4, 6]);

        $date = $searchCriteria->getDate();
        $date->setFrom('2020-02-01');
        $date->setTo('2020-02-26');

        $this->assertEquals($expectedPayload, $availability->createPayload());
    }

    public function testListSearch()
    {
        $expectedPayload = [
            'accommodations' => [
                'accommodationIds' => ['100', '200'],
                'roomIds'          => ['400', '500'],
                'regionNames'      => ['Germany'],
            ],
            'searchCriteria' => [
                'date'         => [
                    'from' => '2020-02-01',
                    'to'   => '2020-02-26',
                ],
                'adults'       => 2,
                'childrenAges' => [4, 6],
            ],
            'timeoutMs'      => 100,
            'customerIp'     => '192.168.0.1',
            'fromCacheOnly'  => true,
            'async'          => false,
        ];

        $listSearch = new ListSearchRequest();

        $listSearch->setTimeoutMs(100);
        $listSearch->setCustomerIp('192.168.0.1');
        $listSearch->setFromCacheOnly(true);
        $listSearch->setAsync(false);

        $accommodation = $listSearch->getAccommodations();
        $accommodation->setAccommodationIds(['100', '200']);
        $accommodation->setRoomIds(['400', '500']);
        $accommodation->setRegionNames(['Germany']);

        $searchCriteria = $listSearch->getSearchCriteria();
        $searchCriteria->setAdults(2);
        $searchCriteria->setChildrenAges([4, 6]);

        $date = $searchCriteria->getDate();
        $date->setFrom('2020-02-01');
        $date->setTo('2020-02-26');

        $this->assertEquals($expectedPayload, $listSearch->createPayload());
    }

    public function testDetailSearch()
    {
        $expectedPayload = [
            'accommodation'         => [
                'accommodationId' => '300',
                'roomId'          => '500',
                'rateId'          => 6,
            ],
            'searchCriteria'        => [
                'date'         => [
                    'from' => '2020-02-01',
                    'to'   => '2020-02-26',
                ],
                'adults'       => 2,
                'childrenAges' => [4, 6],
            ],
            'addNotBookableReasons' => true,
            'customerIp'            => '192.168.0.1',
        ];

        $detailSearch = new DetailSearchRequest();
        $detailSearch->setAddNotBookableReasons(true);
        $detailSearch->setCustomerIp('192.168.0.1');

        $accommodation = $detailSearch->getAccommodation();
        $accommodation->setAccommodationId('300');
        $accommodation->setRoomId('500');
        $accommodation->setRateId(6);

        $searchCriteria = $detailSearch->getSearchCriteria();
        $searchCriteria->setAdults(2);
        $searchCriteria->setChildrenAges([4, 6]);

        $date = $searchCriteria->getDate();
        $date->setFrom('2020-02-01');
        $date->setTo('2020-02-26');

        $this->assertEquals($expectedPayload, $detailSearch->createPayload());
    }
}
