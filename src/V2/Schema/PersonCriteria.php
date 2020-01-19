<?php

namespace MyPortal\HRS_Api\V2\Schema;

use MyPortal\HRS_Api\Helper\Object;

/**
 * Class PersonCriteria
 *
 * @package MyPortal\HRS_Api\V2\Schema
 */
class PersonCriteria extends Object
{
    const SALUTATION_CODE_MR  = 'MR';
    const SALUTATION_CODE_MRS = 'MRS';

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $salutationCode;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $remark;

    /**
     * @var GuestName[]
     */
    protected $additionalGuestNames;

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
