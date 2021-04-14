<?php

namespace BurgerDigital\eTapestry\Type;

class StateTaxRate
{

    /**
     * @var string
     */
    private $country;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var string
     */
    private $state;

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return StateTaxRate
     */
    public function withCountry($country)
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return StateTaxRate
     */
    public function withRate($rate)
    {
        $new = clone $this;
        $new->rate = $rate;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return StateTaxRate
     */
    public function withState($state)
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }


}

