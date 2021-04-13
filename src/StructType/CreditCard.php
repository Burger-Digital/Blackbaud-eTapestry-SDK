<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCard StructType
 * @subpackage Structs
 */
class CreditCard extends AbstractStructBase
{
    /**
     * The authorizationCode
     * @var string|null
     */
    protected ?string $authorizationCode = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The cvv2
     * @var string|null
     */
    protected ?string $cvv2 = null;
    /**
     * The expirationMonth
     * @var int|null
     */
    protected ?int $expirationMonth = null;
    /**
     * The expirationYear
     * @var int|null
     */
    protected ?int $expirationYear = null;
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
     * The nameOnCard
     * @var string|null
     */
    protected ?string $nameOnCard = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The number
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * Constructor method for CreditCard
     * @uses CreditCard::setAuthorizationCode()
     * @uses CreditCard::setCardType()
     * @uses CreditCard::setCvv2()
     * @uses CreditCard::setExpirationMonth()
     * @uses CreditCard::setExpirationYear()
     * @uses CreditCard::setFirstName()
     * @uses CreditCard::setLastName()
     * @uses CreditCard::setMiddleName()
     * @uses CreditCard::setNameOnCard()
     * @uses CreditCard::setNote()
     * @uses CreditCard::setNumber()
     * @param string $authorizationCode
     * @param string $cardType
     * @param string $cvv2
     * @param int $expirationMonth
     * @param int $expirationYear
     * @param string $firstName
     * @param string $lastName
     * @param string $middleName
     * @param string $nameOnCard
     * @param string $note
     * @param string $number
     */
    public function __construct(?string $authorizationCode = null, ?string $cardType = null, ?string $cvv2 = null, ?int $expirationMonth = null, ?int $expirationYear = null, ?string $firstName = null, ?string $lastName = null, ?string $middleName = null, ?string $nameOnCard = null, ?string $note = null, ?string $number = null)
    {
        $this
            ->setAuthorizationCode($authorizationCode)
            ->setCardType($cardType)
            ->setCvv2($cvv2)
            ->setExpirationMonth($expirationMonth)
            ->setExpirationYear($expirationYear)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setMiddleName($middleName)
            ->setNameOnCard($nameOnCard)
            ->setNote($note)
            ->setNumber($number);
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
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
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
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get cvv2 value
     * @return string|null
     */
    public function getCvv2(): ?string
    {
        return $this->cvv2;
    }
    /**
     * Set cvv2 value
     * @param string $cvv2
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
     */
    public function setCvv2(?string $cvv2 = null): self
    {
        // validation for constraint: string
        if (!is_null($cvv2) && !is_string($cvv2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvv2, true), gettype($cvv2)), __LINE__);
        }
        $this->cvv2 = $cvv2;
        
        return $this;
    }
    /**
     * Get expirationMonth value
     * @return int|null
     */
    public function getExpirationMonth(): ?int
    {
        return $this->expirationMonth;
    }
    /**
     * Set expirationMonth value
     * @param int $expirationMonth
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
     */
    public function setExpirationMonth(?int $expirationMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($expirationMonth) && !(is_int($expirationMonth) || ctype_digit($expirationMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationMonth, true), gettype($expirationMonth)), __LINE__);
        }
        $this->expirationMonth = $expirationMonth;
        
        return $this;
    }
    /**
     * Get expirationYear value
     * @return int|null
     */
    public function getExpirationYear(): ?int
    {
        return $this->expirationYear;
    }
    /**
     * Set expirationYear value
     * @param int $expirationYear
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
     */
    public function setExpirationYear(?int $expirationYear = null): self
    {
        // validation for constraint: int
        if (!is_null($expirationYear) && !(is_int($expirationYear) || ctype_digit($expirationYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationYear, true), gettype($expirationYear)), __LINE__);
        }
        $this->expirationYear = $expirationYear;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
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
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
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
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
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
     * Get nameOnCard value
     * @return string|null
     */
    public function getNameOnCard(): ?string
    {
        return $this->nameOnCard;
    }
    /**
     * Set nameOnCard value
     * @param string $nameOnCard
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
     */
    public function setNameOnCard(?string $nameOnCard = null): self
    {
        // validation for constraint: string
        if (!is_null($nameOnCard) && !is_string($nameOnCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameOnCard, true), gettype($nameOnCard)), __LINE__);
        }
        $this->nameOnCard = $nameOnCard;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
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
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \BurgerDigital\eTapestry\StructType\CreditCard
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
}
