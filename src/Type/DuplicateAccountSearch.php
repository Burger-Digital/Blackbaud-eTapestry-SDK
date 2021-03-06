<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DuplicateAccountSearch implements RequestInterface
{

    /**
     * @var int
     */
    private $accountRoleTypes;

    /**
     * @var string
     */
    private $address;

    /**
     * @var bool
     */
    private $allowEmailOnlyMatch;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * Constructor
     *
     * @var int $accountRoleTypes
     * @var string $address
     * @var bool $allowEmailOnlyMatch
     * @var string $email
     * @var string $name
     * @var string $phoneNumber
     */
    public function __construct($accountRoleTypes, $address, $allowEmailOnlyMatch, $email, $name, $phoneNumber)
    {
        $this->accountRoleTypes = $accountRoleTypes;
        $this->address = $address;
        $this->allowEmailOnlyMatch = $allowEmailOnlyMatch;
        $this->email = $email;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return int
     */
    public function getAccountRoleTypes()
    {
        return $this->accountRoleTypes;
    }

    /**
     * @param int $accountRoleTypes
     * @return DuplicateAccountSearch
     */
    public function withAccountRoleTypes($accountRoleTypes)
    {
        $new = clone $this;
        $new->accountRoleTypes = $accountRoleTypes;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return DuplicateAccountSearch
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowEmailOnlyMatch()
    {
        return $this->allowEmailOnlyMatch;
    }

    /**
     * @param bool $allowEmailOnlyMatch
     * @return DuplicateAccountSearch
     */
    public function withAllowEmailOnlyMatch($allowEmailOnlyMatch)
    {
        $new = clone $this;
        $new->allowEmailOnlyMatch = $allowEmailOnlyMatch;

        return $new;
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
     * @return DuplicateAccountSearch
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DuplicateAccountSearch
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return DuplicateAccountSearch
     */
    public function withPhoneNumber($phoneNumber)
    {
        $new = clone $this;
        $new->phoneNumber = $phoneNumber;

        return $new;
    }


}

