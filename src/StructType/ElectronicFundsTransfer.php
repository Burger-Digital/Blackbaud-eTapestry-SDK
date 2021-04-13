<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ElectronicFundsTransfer StructType
 * @subpackage Structs
 */
class ElectronicFundsTransfer extends AbstractStructBase
{
    /**
     * The accountNumber
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The accountType
     * @var int|null
     */
    protected ?int $accountType = null;
    /**
     * The authorizationCode
     * @var string|null
     */
    protected ?string $authorizationCode = null;
    /**
     * The bank
     * @var string|null
     */
    protected ?string $bank = null;
    /**
     * The dateOfBirth
     * @var string|null
     */
    protected ?string $dateOfBirth = null;
    /**
     * The driversLicenseNumber
     * @var string|null
     */
    protected ?string $driversLicenseNumber = null;
    /**
     * The driversLicenseState
     * @var string|null
     */
    protected ?string $driversLicenseState = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The processDate
     * @var string|null
     */
    protected ?string $processDate = null;
    /**
     * The routingNumber
     * @var string|null
     */
    protected ?string $routingNumber = null;
    /**
     * The ssn
     * @var string|null
     */
    protected ?string $ssn = null;
    /**
     * Constructor method for ElectronicFundsTransfer
     * @uses ElectronicFundsTransfer::setAccountNumber()
     * @uses ElectronicFundsTransfer::setAccountType()
     * @uses ElectronicFundsTransfer::setAuthorizationCode()
     * @uses ElectronicFundsTransfer::setBank()
     * @uses ElectronicFundsTransfer::setDateOfBirth()
     * @uses ElectronicFundsTransfer::setDriversLicenseNumber()
     * @uses ElectronicFundsTransfer::setDriversLicenseState()
     * @uses ElectronicFundsTransfer::setFirstName()
     * @uses ElectronicFundsTransfer::setLastName()
     * @uses ElectronicFundsTransfer::setMiddleName()
     * @uses ElectronicFundsTransfer::setNote()
     * @uses ElectronicFundsTransfer::setProcessDate()
     * @uses ElectronicFundsTransfer::setRoutingNumber()
     * @uses ElectronicFundsTransfer::setSsn()
     * @param string $accountNumber
     * @param int $accountType
     * @param string $authorizationCode
     * @param string $bank
     * @param string $dateOfBirth
     * @param string $driversLicenseNumber
     * @param string $driversLicenseState
     * @param string $firstName
     * @param string $lastName
     * @param string $middleName
     * @param string $note
     * @param string $processDate
     * @param string $routingNumber
     * @param string $ssn
     */
    public function __construct(?string $accountNumber = null, ?int $accountType = null, ?string $authorizationCode = null, ?string $bank = null, ?string $dateOfBirth = null, ?string $driversLicenseNumber = null, ?string $driversLicenseState = null, ?string $firstName = null, ?string $lastName = null, ?string $middleName = null, ?string $note = null, ?string $processDate = null, ?string $routingNumber = null, ?string $ssn = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setAccountType($accountType)
            ->setAuthorizationCode($authorizationCode)
            ->setBank($bank)
            ->setDateOfBirth($dateOfBirth)
            ->setDriversLicenseNumber($driversLicenseNumber)
            ->setDriversLicenseState($driversLicenseState)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setMiddleName($middleName)
            ->setNote($note)
            ->setProcessDate($processDate)
            ->setRoutingNumber($routingNumber)
            ->setSsn($ssn);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param int $accountType
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setAccountType(?int $accountType = null): self
    {
        // validation for constraint: int
        if (!is_null($accountType) && !(is_int($accountType) || ctype_digit($accountType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get authorizationCode value
     * @return string|null
     */
    public function getAuthorizationCode(): ?string
    {
        return $this->authorizationCode;
    }
    /**
     * Set authorizationCode value
     * @param string $authorizationCode
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setAuthorizationCode(?string $authorizationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizationCode) && !is_string($authorizationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationCode, true), gettype($authorizationCode)), __LINE__);
        }
        $this->authorizationCode = $authorizationCode;
        
        return $this;
    }
    /**
     * Get bank value
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }
    /**
     * Set bank value
     * @param string $bank
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setBank(?string $bank = null): self
    {
        // validation for constraint: string
        if (!is_null($bank) && !is_string($bank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank, true), gettype($bank)), __LINE__);
        }
        $this->bank = $bank;
        
        return $this;
    }
    /**
     * Get dateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }
    /**
     * Set dateOfBirth value
     * @param string $dateOfBirth
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setDateOfBirth(?string $dateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfBirth, true), gettype($dateOfBirth)), __LINE__);
        }
        $this->dateOfBirth = $dateOfBirth;
        
        return $this;
    }
    /**
     * Get driversLicenseNumber value
     * @return string|null
     */
    public function getDriversLicenseNumber(): ?string
    {
        return $this->driversLicenseNumber;
    }
    /**
     * Set driversLicenseNumber value
     * @param string $driversLicenseNumber
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setDriversLicenseNumber(?string $driversLicenseNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($driversLicenseNumber) && !is_string($driversLicenseNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driversLicenseNumber, true), gettype($driversLicenseNumber)), __LINE__);
        }
        $this->driversLicenseNumber = $driversLicenseNumber;
        
        return $this;
    }
    /**
     * Get driversLicenseState value
     * @return string|null
     */
    public function getDriversLicenseState(): ?string
    {
        return $this->driversLicenseState;
    }
    /**
     * Set driversLicenseState value
     * @param string $driversLicenseState
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setDriversLicenseState(?string $driversLicenseState = null): self
    {
        // validation for constraint: string
        if (!is_null($driversLicenseState) && !is_string($driversLicenseState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driversLicenseState, true), gettype($driversLicenseState)), __LINE__);
        }
        $this->driversLicenseState = $driversLicenseState;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
    /**
     * Get processDate value
     * @return string|null
     */
    public function getProcessDate(): ?string
    {
        return $this->processDate;
    }
    /**
     * Set processDate value
     * @param string $processDate
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setProcessDate(?string $processDate = null): self
    {
        // validation for constraint: string
        if (!is_null($processDate) && !is_string($processDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processDate, true), gettype($processDate)), __LINE__);
        }
        $this->processDate = $processDate;
        
        return $this;
    }
    /**
     * Get routingNumber value
     * @return string|null
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routingNumber;
    }
    /**
     * Set routingNumber value
     * @param string $routingNumber
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setRoutingNumber(?string $routingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($routingNumber) && !is_string($routingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingNumber, true), gettype($routingNumber)), __LINE__);
        }
        $this->routingNumber = $routingNumber;
        
        return $this;
    }
    /**
     * Get ssn value
     * @return string|null
     */
    public function getSsn(): ?string
    {
        return $this->ssn;
    }
    /**
     * Set ssn value
     * @param string $ssn
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer
     */
    public function setSsn(?string $ssn = null): self
    {
        // validation for constraint: string
        if (!is_null($ssn) && !is_string($ssn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ssn, true), gettype($ssn)), __LINE__);
        }
        $this->ssn = $ssn;
        
        return $this;
    }
}
