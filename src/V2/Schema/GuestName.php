<?php

namespace MyPortal\HRS_Api\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class GuestName
 *
 * @package MyPortal\HRS_Api\Schema
 */
class GuestName extends Object
{
    /**
     * @var string
     */
    protected $age;

    /**
     * @var string
     */
    protected $salutationCode;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

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
