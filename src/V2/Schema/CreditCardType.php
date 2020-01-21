<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class CreditCardType
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class CreditCardType extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
