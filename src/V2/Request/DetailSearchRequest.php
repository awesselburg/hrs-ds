<?php

namespace MyPortal\HRS_Api\V2\Request;

use MyPortal\HRS_Api\Helper\Model;
use MyPortal\HRS_Api\V2\Schema\RoomDetailCriteria;
use MyPortal\HRS_Api\V2\Schema\TravelCriteria;

/**
 * Class DetailSearchRequest
 *
 * @package MyPortal\HRS_Api\V2\Request
 */
class DetailSearchRequest extends Model
{
    /**
     * @var bool
     */
    public $addNotBookableReasons;

    /**
     * @var RoomDetailCriteria
     */
    public $accommodation;

    /**
     * @var  TravelCriteria
     */
    public $searchCriteria;

    /**
     * @var string
     */
    public $customerIp;

    /**
     * DetailSearchRequest constructor.
     */
    public function __construct()
    {
        $this->accommodation  = new RoomDetailCriteria();
        $this->searchCriteria = new TravelCriteria();
    }

    /**
     * @return bool
     */
    public function isAddNotBookableReasons()
    {
        return $this->addNotBookableReasons;
    }

    /**
     * @param bool $addNotBookableReasons
     */
    public function setAddNotBookableReasons($addNotBookableReasons)
    {
        $this->addNotBookableReasons = $addNotBookableReasons;
    }

    /**
     * @return RoomDetailCriteria
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * @param RoomDetailCriteria $accommodation
     */
    public function setAccommodation(RoomDetailCriteria $accommodation)
    {
        $this->accommodation = $accommodation;
    }

    /**
     * @return TravelCriteria
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param TravelCriteria $searchCriteria
     */
    public function setSearchCriteria(TravelCriteria $searchCriteria)
    {
        $this->searchCriteria = $searchCriteria;
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
