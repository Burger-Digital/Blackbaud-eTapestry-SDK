<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateAccountSearch StructType
 * @subpackage Structs
 */
class DuplicateAccountSearch extends AbstractStructBase
{
    /**
     * The accountRoleTypes
     * @var int|null
     */
    protected ?int $accountRoleTypes = null;
    /**
     * The address
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The allowEmailOnlyMatch
     * @var bool|null
     */
    protected ?bool $allowEmailOnlyMatch = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The phoneNumber
     * @var string|null
     */
    protected ?string $phoneNumber = null;
    /**
     * Constructor method for DuplicateAccountSearch
     * @uses DuplicateAccountSearch::setAccountRoleTypes()
     * @uses DuplicateAccountSearch::setAddress()
     * @uses DuplicateAccountSearch::setAllowEmailOnlyMatch()
     * @uses DuplicateAccountSearch::setEmail()
     * @uses DuplicateAccountSearch::setName()
     * @uses DuplicateAccountSearch::setPhoneNumber()
     * @param int $accountRoleTypes
     * @param string $address
     * @param bool $allowEmailOnlyMatch
     * @param string $email
     * @param string $name
     * @param string $phoneNumber
     */
    public function __construct(?int $accountRoleTypes = null, ?string $address = null, ?bool $allowEmailOnlyMatch = null, ?string $email = null, ?string $name = null, ?string $phoneNumber = null)
    {
        $this
            ->setAccountRoleTypes($accountRoleTypes)
            ->setAddress($address)
            ->setAllowEmailOnlyMatch($allowEmailOnlyMatch)
            ->setEmail($email)
            ->setName($name)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get accountRoleTypes value
     * @return int|null
     */
    public function getAccountRoleTypes(): ?int
    {
        return $this->accountRoleTypes;
    }
    /**
     * Set accountRoleTypes value
     * @param int $accountRoleTypes
     * @return \BurgerDigital\eTapestry\StructType\DuplicateAccountSearch
     */
    public function setAccountRoleTypes(?int $accountRoleTypes = null): self
    {
        // validation for constraint: int
        if (!is_null($accountRoleTypes) && !(is_int($accountRoleTypes) || ctype_digit($accountRoleTypes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountRoleTypes, true), gettype($accountRoleTypes)), __LINE__);
        }
        $this->accountRoleTypes = $accountRoleTypes;
        
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \BurgerDigital\eTapestry\StructType\DuplicateAccountSearch
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get allowEmailOnlyMatch value
     * @return bool|null
     */
    public function getAllowEmailOnlyMatch(): ?bool
    {
        return $this->allowEmailOnlyMatch;
    }
    /**
     * Set allowEmailOnlyMatch value
     * @param bool $allowEmailOnlyMatch
     * @return \BurgerDigital\eTapestry\StructType\DuplicateAccountSearch
     */
    public function setAllowEmailOnlyMatch(?bool $allowEmailOnlyMatch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowEmailOnlyMatch) && !is_bool($allowEmailOnlyMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowEmailOnlyMatch, true), gettype($allowEmailOnlyMatch)), __LINE__);
        }
        $this->allowEmailOnlyMatch = $allowEmailOnlyMatch;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \BurgerDigital\eTapestry\StructType\DuplicateAccountSearch
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \BurgerDigital\eTapestry\StructType\DuplicateAccountSearch
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \BurgerDigital\eTapestry\StructType\DuplicateAccountSearch
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        
        return $this;
    }
}
