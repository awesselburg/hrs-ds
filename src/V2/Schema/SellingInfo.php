<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class SellingInfo
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class SellingInfo extends Model
{
    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }

    /**
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param string $partnerId
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}
