<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StateTaxRate StructType
 * @subpackage Structs
 */
class StateTaxRate extends AbstractStructBase
{
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The rate
     * @var float|null
     */
    protected ?float $rate = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * Constructor method for StateTaxRate
     * @uses StateTaxRate::setCountry()
     * @uses StateTaxRate::setRate()
     * @uses StateTaxRate::setState()
     * @param string $country
     * @param float $rate
     * @param string $state
     */
    public function __construct(?string $country = null, ?float $rate = null, ?string $state = null)
    {
        $this
            ->setCountry($country)
            ->setRate($rate)
            ->setState($state);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \BurgerDigital\eTapestry\StructType\StateTaxRate
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get rate value
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @param float $rate
     * @return \BurgerDigital\eTapestry\StructType\StateTaxRate
     */
    public function setRate(?float $rate = null): self
    {
        // validation for constraint: float
        if (!is_null($rate) && !(is_float($rate) || is_numeric($rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rate, true), gettype($rate)), __LINE__);
        }
        $this->rate = $rate;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \BurgerDigital\eTapestry\StructType\StateTaxRate
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
}
