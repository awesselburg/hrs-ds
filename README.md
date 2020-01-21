## V2

### Availability

```php
<?php

use MyPortal\HRS_Api;

require_once './vendor/autoload.php';

$config = [
    'useSandbox'    => true,
    'X-INTERFACEID' => 'YOUR_INTERFACE_ID',
];

$client = new HRS_Api\Client($config);

$availability = new HRS_Api\Service\V2\Search\Availability($client);

$availabilitySearchRequest = $availability->getAvailabilitySearchRequest();

$accommodation = $availabilitySearchRequest->getAccommodation();
$accommodation->setAccommodationId('6-44218');

/**
 * $accommodation->setRoomIds(['6-148014']);
 * OR
 * $accommodation->addRoomId('6-148014');
 */

$date = new HRS_Api\V2\Schema\TimeSpan();
$date->setFrom('2020-02-16');
$date->setTo('2020-02-22');

$searchCriteria = $availabilitySearchRequest->getSearchCriteria();

$searchCriteria->setDate($date);
$searchCriteria->setAdults(1);

/**
 * $searchCriteria->setChildrenAges([3, 6]);
 * $searchCriteria->addChildrenAge(3);
 * $searchCriteria->addChildrenAge(6);
 */

/**
 * $availabilitySearchRequest->setTimeoutMs(100);
 */

/**
 * print_r($availability->getPayload());
 */
$result = $availability->call();
$response = $availability->getResponse();

if ($response instanceof HRS_Api\V2\Response\AvailabilitySearchResponse) {
    print_r($response->getIdsOfVacantRooms());
} else {
    echo($response->getErrorDescription());
}
```

### Search list
```php
<?php

use MyPortal\HRS_Api;

require_once './vendor/autoload.php';

$config = [
    'useSandbox' => true,
    'X-INTERFACEID' => 'YOUR_INTERFACE_ID'
];

$client = new HRS_Api\Client($config);

$list              = new HRS_Api\Service\V2\Search\SearchList($client);
$listSearchRequest = $list->getListSearchRequest();

$travelCriteria = new HRS_Api\V2\Schema\TravelCriteria();

$date = new HRS_Api\V2\Schema\TimeSpan();
$date->setFrom('2020-02-16');
$date->setTo('2020-02-22');

$travelCriteria->setDate($date);

$listSearchRequest->setSearchCriteria($travelCriteria);

$roomListCriteria = new HRS_Api\V2\Schema\RoomListCriteria();

/**
 * $roomListCriteria->setAccommodationIds(['6-46161']);
 * OR
 * $roomListCriteria->addAccommodationId('6-46161');
 */

/**
 * $roomListCriteria->setRoomIds([6-148014']);
 * OR
 * $roomListCriteria->addRoomId('6-148014');
 */

$roomListCriteria->addRegionName('Deutschland');

/**
 * OR $roomListCriteria->setRegionNames(['Deutschland']);
 */

$listSearchRequest->setAccommodations($roomListCriteria);

$list->call();

$response = $list->getResponse();

if ($response instanceof MyPortal\HRS_Api\V2\Response\ListSearchResponse) {
    foreach ($response->getAccommodations() as $accommodation) {
        echo sprintf('%s %s - ', $accommodation->getBestPriceWithoutPromotion(), $accommodation->getCurrency());
    }
} else {
    echo($response->getErrorDescription());
}
```

### Search detail

```php
<?php

use MyPortal\HRS_Api;

require_once './vendor/autoload.php';

$config = [
    'useSandbox'    => true,
    'X-INTERFACEID' => 'YOUR_INTERFACE_ID',
];

$client = new HRS_Api\Client($config);

$detail              = new HRS_Api\Service\V2\Search\Detail($client);
$detailSearchRequest = $detail->getDetailSearchRequest();

$searchCriteria = $detailSearchRequest->getSearchCriteria();

$date = new HRS_Api\V2\Schema\TimeSpan();
$date->setFrom('2020-02-16');
$date->setTo('2020-02-22');
$searchCriteria->setDate($date);

$searchCriteria->setAdults(2);

/**
 * $searchCriteria->setChildrenAges([3, 6]);
 * $searchCriteria->addChildrenAge(3);
 * $searchCriteria->addChildrenAge(6);
 */

$accommodation = $detailSearchRequest->getAccommodation();
$accommodation->setAccommodationId('6-44218');
$accommodation->setRoomId('6-143060');

$detailSearchRequest->setAddNotBookableReasons(true);

$detail->call();

$response = $detail->getResponse();

if ($response instanceof MyPortal\HRS_Api\V2\Response\DetailSearchResponse) {
    foreach ($response->getRooms() as $room) {
        echo sprintf('%s %s - ', $room->getTotalPrice(), $response->getCurrency());
    }
} else {
    echo($response->getErrorDescription());
}
```

### Reservation

```php
<?php

use MyPortal\HRS_Api;

require_once './vendor/autoload.php';

$config = [
    'useSandbox'    => true,
    'X-INTERFACEID' => 'YOUR_INTERFACE_ID',
];

$client = new HRS_Api\Client($config);

$reservation = new HRS_Api\Service\V2\Reservation($client);

$reservationRequest = $reservation->getReservationRequest();

/**
 * $creditCard = $reservationRequest->getCreditCard();
 * $creditCard->setCvc('123');
 * $creditCard->setHolder('Alexander Wesselburg');
 * $creditCard->setNumber('12345678');
 * $creditCard->setValidThroughDateMonth(8);
 * $creditCard->setValidThroughDateString(16);
 * $creditCard->setValidThroughDateYear(2019);
 * $creditCard->setType('MC');
 *
 * $reservationRequest->setCreditCard($creditCard);
 */

/**
 * $sellingInfo = $reservationRequest->getSellingInfo();
 * $sellingInfo->setCampaignId('100');
 * $sellingInfo->setPartnerId('40000');
 * $sellingInfo->setUserId('2888');
 * $reservationRequest->setSellingInfo($sellingInfo);
 */

$offer = $reservationRequest->getOffer();

$offer->getRoom()->setRoomId('6-143060');
$offer->getRoom()->setAccommodationId('6-44218');

$personInfo = $reservationRequest->getPersonInfo();
$personInfo->setFirstName('Alex');
$personInfo->setLastName('Wesselburg');
$personInfo->setEmail('wesselburg@me.com');
$personInfo->setCity('Wustrow');
$personInfo->setCountryCode('DE');
$personInfo->setSalutationCode('MR');
$personInfo->setStreet('Ernst Reuter Platz 44');
$personInfo->setZip('06333');

$reservationRequest->setPaymentMethodSelected('NONE');

/**
 * $additionalPackageCriteriaOne = new HRS_Api\V2\Request\Schema\AdditionalPackagesCriteria();
 * $additionalPackageCriteriaOne->setId('77');
 * $additionalPackageCriteriaOne->setAmount('100');
 *
 * $additionalPackageCriteriaTwo = new HRS_Api\V2\Request\Schema\AdditionalPackagesCriteria();
 * $additionalPackageCriteriaTwo->setId('88');
 * $additionalPackageCriteriaTwo->setAmount('99');
 *
 * $additionalPackageCriteriaThree = new HRS_Api\V2\Request\Schema\AdditionalPackagesCriteria();
 * $additionalPackageCriteriaThree->setId('12');
 * $additionalPackageCriteriaThree->setAmount('80');
 *
 * $offer->setAdditionalPackages([$additionalPackageCriteriaOne, $additionalPackageCriteriaTwo]);
 * $offer->addAdditionalPackage($additionalPackageCriteriaThree);
 *
 */

$searchCriteria = $offer->getSearchCriteria();
$date           = new HRS_Api\V2\Schema\TimeSpan();
$date->setFrom('2020-02-16');
$date->setTo('2020-02-22');
$searchCriteria->setDate($date);
$searchCriteria->setAdults(2);

/**
 * $searchCriteria->setChildrenAges([3, 6]);
 * $searchCriteria->addChildrenAge(3);
 * $searchCriteria->addChildrenAge(6);
 */

$reservation->call();

$response = $reservation->getReservationResponse();

if ($response instanceof MyPortal\HRS_Api\V2\Response\ReservationResponse) {
    echo $response->getReservationId();
} else {
    echo($response->getErrorDescription());
}
```
