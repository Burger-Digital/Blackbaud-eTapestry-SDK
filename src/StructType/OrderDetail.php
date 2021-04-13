<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDetail StructType
 * @subpackage Structs
 */
class OrderDetail extends AbstractStructBase
{
    /**
     * The discountApplied
     * @var \BurgerDigital\eTapestry\StructType\DiscountApplied|null
     */
    protected ?\StructType\DiscountApplied $discountApplied = null;
    /**
     * The itemName
     * @var string|null
     */
    protected ?string $itemName = null;
    /**
     * The itemRef
     * @var string|null
     */
    protected ?string $itemRef = null;
    /**
     * The quantity
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The unitRetailPrice
     * @var float|null
     */
    protected ?float $unitRetailPrice = null;
    /**
     * The unitShippingPrice
     * @var float|null
     */
    protected ?float $unitShippingPrice = null;
    /**
     * The unitTaxableAmount
     * @var float|null
     */
    protected ?float $unitTaxableAmount = null;
    /**
     * Constructor method for OrderDetail
     * @uses OrderDetail::setDiscountApplied()
     * @uses OrderDetail::setItemName()
     * @uses OrderDetail::setItemRef()
     * @uses OrderDetail::setQuantity()
     * @uses OrderDetail::setUnitRetailPrice()
     * @uses OrderDetail::setUnitShippingPrice()
     * @uses OrderDetail::setUnitTaxableAmount()
     * @param \BurgerDigital\eTapestry\StructType\DiscountApplied $discountApplied
     * @param string $itemName
     * @param string $itemRef
     * @param int $quantity
     * @param float $unitRetailPrice
     * @param float $unitShippingPrice
     * @param float $unitTaxableAmount
     */
    public function __construct(?\StructType\DiscountApplied $discountApplied = null, ?string $itemName = null, ?string $itemRef = null, ?int $quantity = null, ?float $unitRetailPrice = null, ?float $unitShippingPrice = null, ?float $unitTaxableAmount = null)
    {
        $this
            ->setDiscountApplied($discountApplied)
            ->setItemName($itemName)
            ->setItemRef($itemRef)
            ->setQuantity($quantity)
            ->setUnitRetailPrice($unitRetailPrice)
            ->setUnitShippingPrice($unitShippingPrice)
            ->setUnitTaxableAmount($unitTaxableAmount);
    }
    /**
     * Get discountApplied value
     * @return \BurgerDigital\eTapestry\StructType\DiscountApplied|null
     */
    public function getDiscountApplied(): ?\StructType\DiscountApplied
    {
        return $this->discountApplied;
    }
    /**
     * Set discountApplied value
     * @param \BurgerDigital\eTapestry\StructType\DiscountApplied $discountApplied
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setDiscountApplied(?\StructType\DiscountApplied $discountApplied = null): self
    {
        $this->discountApplied = $discountApplied;
        
        return $this;
    }
    /**
     * Get itemName value
     * @return string|null
     */
    public function getItemName(): ?string
    {
        return $this->itemName;
    }
    /**
     * Set itemName value
     * @param string $itemName
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setItemName(?string $itemName = null): self
    {
        // validation for constraint: string
        if (!is_null($itemName) && !is_string($itemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemName, true), gettype($itemName)), __LINE__);
        }
        $this->itemName = $itemName;
        
        return $this;
    }
    /**
     * Get itemRef value
     * @return string|null
     */
    public function getItemRef(): ?string
    {
        return $this->itemRef;
    }
    /**
     * Set itemRef value
     * @param string $itemRef
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setItemRef(?string $itemRef = null): self
    {
        // validation for constraint: string
        if (!is_null($itemRef) && !is_string($itemRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemRef, true), gettype($itemRef)), __LINE__);
        }
        $this->itemRef = $itemRef;
        
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get unitRetailPrice value
     * @return float|null
     */
    public function getUnitRetailPrice(): ?float
    {
        return $this->unitRetailPrice;
    }
    /**
     * Set unitRetailPrice value
     * @param float $unitRetailPrice
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setUnitRetailPrice(?float $unitRetailPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitRetailPrice) && !(is_float($unitRetailPrice) || is_numeric($unitRetailPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitRetailPrice, true), gettype($unitRetailPrice)), __LINE__);
        }
        $this->unitRetailPrice = $unitRetailPrice;
        
        return $this;
    }
    /**
     * Get unitShippingPrice value
     * @return float|null
     */
    public function getUnitShippingPrice(): ?float
    {
        return $this->unitShippingPrice;
    }
    /**
     * Set unitShippingPrice value
     * @param float $unitShippingPrice
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setUnitShippingPrice(?float $unitShippingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitShippingPrice) && !(is_float($unitShippingPrice) || is_numeric($unitShippingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitShippingPrice, true), gettype($unitShippingPrice)), __LINE__);
        }
        $this->unitShippingPrice = $unitShippingPrice;
        
        return $this;
    }
    /**
     * Get unitTaxableAmount value
     * @return float|null
     */
    public function getUnitTaxableAmount(): ?float
    {
        return $this->unitTaxableAmount;
    }
    /**
     * Set unitTaxableAmount value
     * @param float $unitTaxableAmount
     * @return \BurgerDigital\eTapestry\StructType\OrderDetail
     */
    public function setUnitTaxableAmount(?float $unitTaxableAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($unitTaxableAmount) && !(is_float($unitTaxableAmount) || is_numeric($unitTaxableAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitTaxableAmount, true), gettype($unitTaxableAmount)), __LINE__);
        }
        $this->unitTaxableAmount = $unitTaxableAmount;
        
        return $this;
    }
}
