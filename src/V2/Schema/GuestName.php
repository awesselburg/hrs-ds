<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class GuestName
 *
 * @package MyPortal\HRS_Api\Schema
 */
class GuestName extends Model
{
    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $salutationCode;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getSalutationCode()
    {
        return $this->salutationCode;
    }

    /**
     * @param string $salutationCode
     */
    public function setSalutationCode($salutationCode)
    {
        $this->salutationCode = $salutationCode;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
}
