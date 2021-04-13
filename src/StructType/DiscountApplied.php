<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountApplied StructType
 * @subpackage Structs
 */
class DiscountApplied extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The discountName
     * @var string|null
     */
    protected ?string $discountName = null;
    /**
     * The discountRef
     * @var string|null
     */
    protected ?string $discountRef = null;
    /**
     * The promoCode
     * @var string|null
     */
    protected ?string $promoCode = null;
    /**
     * Constructor method for DiscountApplied
     * @uses DiscountApplied::setAmount()
     * @uses DiscountApplied::setDiscountName()
     * @uses DiscountApplied::setDiscountRef()
     * @uses DiscountApplied::setPromoCode()
     * @param float $amount
     * @param string $discountName
     * @param string $discountRef
     * @param string $promoCode
     */
    public function __construct(?float $amount = null, ?string $discountName = null, ?string $discountRef = null, ?string $promoCode = null)
    {
        $this
            ->setAmount($amount)
            ->setDiscountName($discountName)
            ->setDiscountRef($discountRef)
            ->setPromoCode($promoCode);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \BurgerDigital\eTapestry\StructType\DiscountApplied
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get discountName value
     * @return string|null
     */
    public function getDiscountName(): ?string
    {
        return $this->discountName;
    }
    /**
     * Set discountName value
     * @param string $discountName
     * @return \BurgerDigital\eTapestry\StructType\DiscountApplied
     */
    public function setDiscountName(?string $discountName = null): self
    {
        // validation for constraint: string
        if (!is_null($discountName) && !is_string($discountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountName, true), gettype($discountName)), __LINE__);
        }
        $this->discountName = $discountName;
        
        return $this;
    }
    /**
     * Get discountRef value
     * @return string|null
     */
    public function getDiscountRef(): ?string
    {
        return $this->discountRef;
    }
    /**
     * Set discountRef value
     * @param string $discountRef
     * @return \BurgerDigital\eTapestry\StructType\DiscountApplied
     */
    public function setDiscountRef(?string $discountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($discountRef) && !is_string($discountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountRef, true), gettype($discountRef)), __LINE__);
        }
        $this->discountRef = $discountRef;
        
        return $this;
    }
    /**
     * Get promoCode value
     * @return string|null
     */
    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }
    /**
     * Set promoCode value
     * @param string $promoCode
     * @return \BurgerDigital\eTapestry\StructType\DiscountApplied
     */
    public function setPromoCode(?string $promoCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promoCode) && !is_string($promoCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promoCode, true), gettype($promoCode)), __LINE__);
        }
        $this->promoCode = $promoCode;
        
        return $this;
    }
}
