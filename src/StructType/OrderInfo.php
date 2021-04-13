<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderInfo StructType
 * @subpackage Structs
 */
class OrderInfo extends AbstractStructBase
{
    /**
     * The billingAddress
     * @var string|null
     */
    protected ?string $billingAddress = null;
    /**
     * The billingCity
     * @var string|null
     */
    protected ?string $billingCity = null;
    /**
     * The billingCountry
     * @var string|null
     */
    protected ?string $billingCountry = null;
    /**
     * The billingEmail
     * @var string|null
     */
    protected ?string $billingEmail = null;
    /**
     * The billingName
     * @var string|null
     */
    protected ?string $billingName = null;
    /**
     * The billingPhone
     * @var string|null
     */
    protected ?string $billingPhone = null;
    /**
     * The billingPostalCode
     * @var string|null
     */
    protected ?string $billingPostalCode = null;
    /**
     * The billingState
     * @var string|null
     */
    protected ?string $billingState = null;
    /**
     * The shippingAddress
     * @var string|null
     */
    protected ?string $shippingAddress = null;
    /**
     * The shippingCity
     * @var string|null
     */
    protected ?string $shippingCity = null;
    /**
     * The shippingCountry
     * @var string|null
     */
    protected ?string $shippingCountry = null;
    /**
     * The shippingName
     * @var string|null
     */
    protected ?string $shippingName = null;
    /**
     * The shippingPostalCode
     * @var string|null
     */
    protected ?string $shippingPostalCode = null;
    /**
     * The shippingState
     * @var string|null
     */
    protected ?string $shippingState = null;
    /**
     * The shippingType
     * @var int|null
     */
    protected ?int $shippingType = null;
    /**
     * Constructor method for OrderInfo
     * @uses OrderInfo::setBillingAddress()
     * @uses OrderInfo::setBillingCity()
     * @uses OrderInfo::setBillingCountry()
     * @uses OrderInfo::setBillingEmail()
     * @uses OrderInfo::setBillingName()
     * @uses OrderInfo::setBillingPhone()
     * @uses OrderInfo::setBillingPostalCode()
     * @uses OrderInfo::setBillingState()
     * @uses OrderInfo::setShippingAddress()
     * @uses OrderInfo::setShippingCity()
     * @uses OrderInfo::setShippingCountry()
     * @uses OrderInfo::setShippingName()
     * @uses OrderInfo::setShippingPostalCode()
     * @uses OrderInfo::setShippingState()
     * @uses OrderInfo::setShippingType()
     * @param string $billingAddress
     * @param string $billingCity
     * @param string $billingCountry
     * @param string $billingEmail
     * @param string $billingName
     * @param string $billingPhone
     * @param string $billingPostalCode
     * @param string $billingState
     * @param string $shippingAddress
     * @param string $shippingCity
     * @param string $shippingCountry
     * @param string $shippingName
     * @param string $shippingPostalCode
     * @param string $shippingState
     * @param int $shippingType
     */
    public function __construct(?string $billingAddress = null, ?string $billingCity = null, ?string $billingCountry = null, ?string $billingEmail = null, ?string $billingName = null, ?string $billingPhone = null, ?string $billingPostalCode = null, ?string $billingState = null, ?string $shippingAddress = null, ?string $shippingCity = null, ?string $shippingCountry = null, ?string $shippingName = null, ?string $shippingPostalCode = null, ?string $shippingState = null, ?int $shippingType = null)
    {
        $this
            ->setBillingAddress($billingAddress)
            ->setBillingCity($billingCity)
            ->setBillingCountry($billingCountry)
            ->setBillingEmail($billingEmail)
            ->setBillingName($billingName)
            ->setBillingPhone($billingPhone)
            ->setBillingPostalCode($billingPostalCode)
            ->setBillingState($billingState)
            ->setShippingAddress($shippingAddress)
            ->setShippingCity($shippingCity)
            ->setShippingCountry($shippingCountry)
            ->setShippingName($shippingName)
            ->setShippingPostalCode($shippingPostalCode)
            ->setShippingState($shippingState)
            ->setShippingType($shippingType);
    }
    /**
     * Get billingAddress value
     * @return string|null
     */
    public function getBillingAddress(): ?string
    {
        return $this->billingAddress;
    }
    /**
     * Set billingAddress value
     * @param string $billingAddress
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingAddress(?string $billingAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($billingAddress) && !is_string($billingAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAddress, true), gettype($billingAddress)), __LINE__);
        }
        $this->billingAddress = $billingAddress;
        
        return $this;
    }
    /**
     * Get billingCity value
     * @return string|null
     */
    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }
    /**
     * Set billingCity value
     * @param string $billingCity
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingCity(?string $billingCity = null): self
    {
        // validation for constraint: string
        if (!is_null($billingCity) && !is_string($billingCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCity, true), gettype($billingCity)), __LINE__);
        }
        $this->billingCity = $billingCity;
        
        return $this;
    }
    /**
     * Get billingCountry value
     * @return string|null
     */
    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }
    /**
     * Set billingCountry value
     * @param string $billingCountry
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingCountry(?string $billingCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($billingCountry) && !is_string($billingCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCountry, true), gettype($billingCountry)), __LINE__);
        }
        $this->billingCountry = $billingCountry;
        
        return $this;
    }
    /**
     * Get billingEmail value
     * @return string|null
     */
    public function getBillingEmail(): ?string
    {
        return $this->billingEmail;
    }
    /**
     * Set billingEmail value
     * @param string $billingEmail
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingEmail(?string $billingEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($billingEmail) && !is_string($billingEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingEmail, true), gettype($billingEmail)), __LINE__);
        }
        $this->billingEmail = $billingEmail;
        
        return $this;
    }
    /**
     * Get billingName value
     * @return string|null
     */
    public function getBillingName(): ?string
    {
        return $this->billingName;
    }
    /**
     * Set billingName value
     * @param string $billingName
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingName(?string $billingName = null): self
    {
        // validation for constraint: string
        if (!is_null($billingName) && !is_string($billingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingName, true), gettype($billingName)), __LINE__);
        }
        $this->billingName = $billingName;
        
        return $this;
    }
    /**
     * Get billingPhone value
     * @return string|null
     */
    public function getBillingPhone(): ?string
    {
        return $this->billingPhone;
    }
    /**
     * Set billingPhone value
     * @param string $billingPhone
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingPhone(?string $billingPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($billingPhone) && !is_string($billingPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingPhone, true), gettype($billingPhone)), __LINE__);
        }
        $this->billingPhone = $billingPhone;
        
        return $this;
    }
    /**
     * Get billingPostalCode value
     * @return string|null
     */
    public function getBillingPostalCode(): ?string
    {
        return $this->billingPostalCode;
    }
    /**
     * Set billingPostalCode value
     * @param string $billingPostalCode
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingPostalCode(?string $billingPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($billingPostalCode) && !is_string($billingPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingPostalCode, true), gettype($billingPostalCode)), __LINE__);
        }
        $this->billingPostalCode = $billingPostalCode;
        
        return $this;
    }
    /**
     * Get billingState value
     * @return string|null
     */
    public function getBillingState(): ?string
    {
        return $this->billingState;
    }
    /**
     * Set billingState value
     * @param string $billingState
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setBillingState(?string $billingState = null): self
    {
        // validation for constraint: string
        if (!is_null($billingState) && !is_string($billingState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingState, true), gettype($billingState)), __LINE__);
        }
        $this->billingState = $billingState;
        
        return $this;
    }
    /**
     * Get shippingAddress value
     * @return string|null
     */
    public function getShippingAddress(): ?string
    {
        return $this->shippingAddress;
    }
    /**
     * Set shippingAddress value
     * @param string $shippingAddress
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingAddress(?string $shippingAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingAddress) && !is_string($shippingAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingAddress, true), gettype($shippingAddress)), __LINE__);
        }
        $this->shippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get shippingCity value
     * @return string|null
     */
    public function getShippingCity(): ?string
    {
        return $this->shippingCity;
    }
    /**
     * Set shippingCity value
     * @param string $shippingCity
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingCity(?string $shippingCity = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCity) && !is_string($shippingCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCity, true), gettype($shippingCity)), __LINE__);
        }
        $this->shippingCity = $shippingCity;
        
        return $this;
    }
    /**
     * Get shippingCountry value
     * @return string|null
     */
    public function getShippingCountry(): ?string
    {
        return $this->shippingCountry;
    }
    /**
     * Set shippingCountry value
     * @param string $shippingCountry
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingCountry(?string $shippingCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCountry) && !is_string($shippingCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCountry, true), gettype($shippingCountry)), __LINE__);
        }
        $this->shippingCountry = $shippingCountry;
        
        return $this;
    }
    /**
     * Get shippingName value
     * @return string|null
     */
    public function getShippingName(): ?string
    {
        return $this->shippingName;
    }
    /**
     * Set shippingName value
     * @param string $shippingName
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingName(?string $shippingName = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingName) && !is_string($shippingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingName, true), gettype($shippingName)), __LINE__);
        }
        $this->shippingName = $shippingName;
        
        return $this;
    }
    /**
     * Get shippingPostalCode value
     * @return string|null
     */
    public function getShippingPostalCode(): ?string
    {
        return $this->shippingPostalCode;
    }
    /**
     * Set shippingPostalCode value
     * @param string $shippingPostalCode
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingPostalCode(?string $shippingPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingPostalCode) && !is_string($shippingPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingPostalCode, true), gettype($shippingPostalCode)), __LINE__);
        }
        $this->shippingPostalCode = $shippingPostalCode;
        
        return $this;
    }
    /**
     * Get shippingState value
     * @return string|null
     */
    public function getShippingState(): ?string
    {
        return $this->shippingState;
    }
    /**
     * Set shippingState value
     * @param string $shippingState
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingState(?string $shippingState = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingState) && !is_string($shippingState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingState, true), gettype($shippingState)), __LINE__);
        }
        $this->shippingState = $shippingState;
        
        return $this;
    }
    /**
     * Get shippingType value
     * @return int|null
     */
    public function getShippingType(): ?int
    {
        return $this->shippingType;
    }
    /**
     * Set shippingType value
     * @param int $shippingType
     * @return \BurgerDigital\eTapestry\StructType\OrderInfo
     */
    public function setShippingType(?int $shippingType = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingType) && !(is_int($shippingType) || ctype_digit($shippingType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingType, true), gettype($shippingType)), __LINE__);
        }
        $this->shippingType = $shippingType;
        
        return $this;
    }
}
