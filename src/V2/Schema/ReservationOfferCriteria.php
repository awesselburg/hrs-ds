<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class ReservationOfferCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class ReservationOfferCriteria extends Object
{
    /**
     * @var TravelCriteria
     */
    protected $searchCriteria;

    /**
     * @var RoomDetailCriteria
     */
    protected $room;

    /**
     * @var AdditionalPackagesCriteria[]
     */
    protected $additionalPackages = [];

    /**
     * @var float
     */
    protected $totalPriceOriginal;

    /**
     * @var float
     */
    protected $totalPriceModified;

    /**
     * ReservationOfferCriteria constructor.
     */
    public function __construct()
    {
        $this->searchCriteria     = new TravelCriteria();
        $this->room               = new RoomDetailCriteria();
        $this->additionalPackages = new AdditionalPackagesCriteria();
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
     * @return RoomDetailCriteria
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param RoomDetailCriteria $room
     */
    public function setRoom(RoomDetailCriteria $room)
    {
        $this->room = $room;
    }

    /**
     * @return AdditionalPackagesCriteria
     */
    public function getAdditionalPackages()
    {
        return $this->additionalPackages;
    }

    /**
     * @param AdditionalPackagesCriteria[] $additionalPackages
     */
    public function setAdditionalPackages(array $additionalPackages = [])
    {
        $this->additionalPackages = $additionalPackages;
    }

    /**
     * @param AdditionalPackagesCriteria $additionalPackage
     */
    public function addAdditionalPackage(AdditionalPackagesCriteria $additionalPackage)
    {
        $this->additionalPackages[] = $additionalPackage;
    }

    /**
     * @return float
     */
    public function getTotalPriceOriginal()
    {
        return $this->totalPriceOriginal;
    }

    /**
     * @param float $totalPriceOriginal
     */
    public function setTotalPriceOriginal($totalPriceOriginal)
    {
        $this->totalPriceOriginal = $totalPriceOriginal;
    }

    /**
     * @return float
     */
    public function getTotalPriceModified()
    {
        return $this->totalPriceModified;
    }

    /**
     * @param float $totalPriceModified
     */
    public function setTotalPriceModified($totalPriceModified)
    {
        $this->totalPriceModified = $totalPriceModified;
    }
}
