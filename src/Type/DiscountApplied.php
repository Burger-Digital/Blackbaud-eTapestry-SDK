<?php

namespace BurgerDigital\eTapestry\Type;

class DiscountApplied
{

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $discountName;

    /**
     * @var string
     */
    private $discountRef;

    /**
     * @var string
     */
    private $promoCode;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return DiscountApplied
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountName()
    {
        return $this->discountName;
    }

    /**
     * @param string $discountName
     * @return DiscountApplied
     */
    public function withDiscountName($discountName)
    {
        $new = clone $this;
        $new->discountName = $discountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountRef()
    {
        return $this->discountRef;
    }

    /**
     * @param string $discountRef
     * @return DiscountApplied
     */
    public function withDiscountRef($discountRef)
    {
        $new = clone $this;
        $new->discountRef = $discountRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @param string $promoCode
     * @return DiscountApplied
     */
    public function withPromoCode($promoCode)
    {
        $new = clone $this;
        $new->promoCode = $promoCode;

        return $new;
    }


}

