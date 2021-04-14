<?php

namespace BurgerDigital\eTapestry\Type;

class OrderInfo
{

    /**
     * @var string
     */
    private $billingAddress;

    /**
     * @var string
     */
    private $billingCity;

    /**
     * @var string
     */
    private $billingCountry;

    /**
     * @var string
     */
    private $billingEmail;

    /**
     * @var string
     */
    private $billingName;

    /**
     * @var string
     */
    private $billingPhone;

    /**
     * @var string
     */
    private $billingPostalCode;

    /**
     * @var string
     */
    private $billingState;

    /**
     * @var string
     */
    private $shippingAddress;

    /**
     * @var string
     */
    private $shippingCity;

    /**
     * @var string
     */
    private $shippingCountry;

    /**
     * @var string
     */
    private $shippingName;

    /**
     * @var string
     */
    private $shippingPostalCode;

    /**
     * @var string
     */
    private $shippingState;

    /**
     * @var int
     */
    private $shippingType;

    /**
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param string $billingAddress
     * @return OrderInfo
     */
    public function withBillingAddress($billingAddress)
    {
        $new = clone $this;
        $new->billingAddress = $billingAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * @param string $billingCity
     * @return OrderInfo
     */
    public function withBillingCity($billingCity)
    {
        $new = clone $this;
        $new->billingCity = $billingCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * @param string $billingCountry
     * @return OrderInfo
     */
    public function withBillingCountry($billingCountry)
    {
        $new = clone $this;
        $new->billingCountry = $billingCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingEmail()
    {
        return $this->billingEmail;
    }

    /**
     * @param string $billingEmail
     * @return OrderInfo
     */
    public function withBillingEmail($billingEmail)
    {
        $new = clone $this;
        $new->billingEmail = $billingEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingName()
    {
        return $this->billingName;
    }

    /**
     * @param string $billingName
     * @return OrderInfo
     */
    public function withBillingName($billingName)
    {
        $new = clone $this;
        $new->billingName = $billingName;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingPhone()
    {
        return $this->billingPhone;
    }

    /**
     * @param string $billingPhone
     * @return OrderInfo
     */
    public function withBillingPhone($billingPhone)
    {
        $new = clone $this;
        $new->billingPhone = $billingPhone;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingPostalCode()
    {
        return $this->billingPostalCode;
    }

    /**
     * @param string $billingPostalCode
     * @return OrderInfo
     */
    public function withBillingPostalCode($billingPostalCode)
    {
        $new = clone $this;
        $new->billingPostalCode = $billingPostalCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * @param string $billingState
     * @return OrderInfo
     */
    public function withBillingState($billingState)
    {
        $new = clone $this;
        $new->billingState = $billingState;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param string $shippingAddress
     * @return OrderInfo
     */
    public function withShippingAddress($shippingAddress)
    {
        $new = clone $this;
        $new->shippingAddress = $shippingAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * @param string $shippingCity
     * @return OrderInfo
     */
    public function withShippingCity($shippingCity)
    {
        $new = clone $this;
        $new->shippingCity = $shippingCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * @param string $shippingCountry
     * @return OrderInfo
     */
    public function withShippingCountry($shippingCountry)
    {
        $new = clone $this;
        $new->shippingCountry = $shippingCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingName()
    {
        return $this->shippingName;
    }

    /**
     * @param string $shippingName
     * @return OrderInfo
     */
    public function withShippingName($shippingName)
    {
        $new = clone $this;
        $new->shippingName = $shippingName;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingPostalCode()
    {
        return $this->shippingPostalCode;
    }

    /**
     * @param string $shippingPostalCode
     * @return OrderInfo
     */
    public function withShippingPostalCode($shippingPostalCode)
    {
        $new = clone $this;
        $new->shippingPostalCode = $shippingPostalCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingState()
    {
        return $this->shippingState;
    }

    /**
     * @param string $shippingState
     * @return OrderInfo
     */
    public function withShippingState($shippingState)
    {
        $new = clone $this;
        $new->shippingState = $shippingState;

        return $new;
    }

    /**
     * @return int
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }

    /**
     * @param int $shippingType
     * @return OrderInfo
     */
    public function withShippingType($shippingType)
    {
        $new = clone $this;
        $new->shippingType = $shippingType;

        return $new;
    }


}

