<?php

namespace MyPortal\HRS_Api\V2\Request\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class SellingInfo
 *
 * @package MyPortal\HRS_Api\V2\Request\Schema
 */
class SellingInfo extends Object
{
    /**
     * @var string
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $partnerId;

    /**
     * @var string
     */
    protected $userId;

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
