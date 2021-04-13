<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CartItemDiscount StructType
 * @subpackage Structs
 */
class CartItemDiscount extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The promoCode
     * @var string|null
     */
    protected ?string $promoCode = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * Constructor method for CartItemDiscount
     * @uses CartItemDiscount::setAmount()
     * @uses CartItemDiscount::setPromoCode()
     * @uses CartItemDiscount::setRef()
     * @param float $amount
     * @param string $promoCode
     * @param string $ref
     */
    public function __construct(?float $amount = null, ?string $promoCode = null, ?string $ref = null)
    {
        $this
            ->setAmount($amount)
            ->setPromoCode($promoCode)
            ->setRef($ref);
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
     * @return \StructType\CartItemDiscount
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
     * @return \StructType\CartItemDiscount
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
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \StructType\CartItemDiscount
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
}
