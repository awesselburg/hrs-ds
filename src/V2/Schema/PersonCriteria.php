<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Model;

/**
 * Class PersonCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class PersonCriteria extends Model
{
    const SALUTATION_CODE_MR  = 'MR';
    const SALUTATION_CODE_MRS = 'MRS';

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $salutationCode;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $street;

    /**
     * @var string
     */
    public $zip;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var GuestName[]
     */
    public $additionalGuestNames = [];

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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * @return GuestName[]
     */
    public function getAdditionalGuestNames()
    {
        return $this->additionalGuestNames;
    }

    /**
     * @param GuestName[] $additionalGuestNames
     */
    public function setAdditionalGuestNames($additionalGuestNames)
    {
        $this->additionalGuestNames = $additionalGuestNames;
    }

    /**
     * @param GuestName $additionalGuestName
     */
    public function addAdditionalGuestName(GuestName $additionalGuestName)
    {
        $this->additionalGuestNames[] = $additionalGuestName;
    }
}
