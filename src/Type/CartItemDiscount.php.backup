<?php

namespace BurgerDigital\Type;

class CartItemDiscount
{

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $promoCode;

    /**
     * @var string
     */
    private $ref;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return CartItemDiscount
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
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @param string $promoCode
     * @return CartItemDiscount
     */
    public function withPromoCode($promoCode)
    {
        $new = clone $this;
        $new->promoCode = $promoCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return CartItemDiscount
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }


}

