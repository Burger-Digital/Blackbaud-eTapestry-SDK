<?php

namespace BurgerDigital\Type;

class OrderDetail
{

    /**
     * @var \BurgerDigital\Type\DiscountApplied
     */
    private $discountApplied;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var string
     */
    private $itemRef;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var float
     */
    private $unitRetailPrice;

    /**
     * @var float
     */
    private $unitShippingPrice;

    /**
     * @var float
     */
    private $unitTaxableAmount;

    /**
     * @return \BurgerDigital\eTapestry\Type\DiscountApplied
     */
    public function getDiscountApplied()
    {
        return $this->discountApplied;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DiscountApplied $discountApplied
     * @return OrderDetail
     */
    public function withDiscountApplied($discountApplied)
    {
        $new = clone $this;
        $new->discountApplied = $discountApplied;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     * @return OrderDetail
     */
    public function withItemName($itemName)
    {
        $new = clone $this;
        $new->itemName = $itemName;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemRef()
    {
        return $this->itemRef;
    }

    /**
     * @param string $itemRef
     * @return OrderDetail
     */
    public function withItemRef($itemRef)
    {
        $new = clone $this;
        $new->itemRef = $itemRef;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return OrderDetail
     */
    public function withQuantity($quantity)
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnitRetailPrice()
    {
        return $this->unitRetailPrice;
    }

    /**
     * @param float $unitRetailPrice
     * @return OrderDetail
     */
    public function withUnitRetailPrice($unitRetailPrice)
    {
        $new = clone $this;
        $new->unitRetailPrice = $unitRetailPrice;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnitShippingPrice()
    {
        return $this->unitShippingPrice;
    }

    /**
     * @param float $unitShippingPrice
     * @return OrderDetail
     */
    public function withUnitShippingPrice($unitShippingPrice)
    {
        $new = clone $this;
        $new->unitShippingPrice = $unitShippingPrice;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnitTaxableAmount()
    {
        return $this->unitTaxableAmount;
    }

    /**
     * @param float $unitTaxableAmount
     * @return OrderDetail
     */
    public function withUnitTaxableAmount($unitTaxableAmount)
    {
        $new = clone $this;
        $new->unitTaxableAmount = $unitTaxableAmount;

        return $new;
    }


}

