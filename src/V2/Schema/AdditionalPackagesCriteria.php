<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class AdditionalPackagesCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class AdditionalPackagesCriteria extends Model
{
    /**
     * @var string;
     */
    public $id;

    /**
     * @var string
     */
    public $amount;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
