<?php

namespace BurgerDigital\eTapestry\Type;

class TransactionProcessor
{

    /**
     * @var string
     */
    private $bbpsMerchantId;

    /**
     * @var string
     */
    private $bbpsPublicKey;

    /**
     * @var bool
     */
    private $ccSupported;

    /**
     * @var bool
     */
    private $default;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var bool
     */
    private $eftSupported;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $refName;

    /**
     * @var int
     */
    private $type;

    /**
     * @return string
     */
    public function getBbpsMerchantId()
    {
        return $this->bbpsMerchantId;
    }

    /**
     * @param string $bbpsMerchantId
     * @return TransactionProcessor
     */
    public function withBbpsMerchantId($bbpsMerchantId)
    {
        $new = clone $this;
        $new->bbpsMerchantId = $bbpsMerchantId;

        return $new;
    }

    /**
     * @return string
     */
    public function getBbpsPublicKey()
    {
        return $this->bbpsPublicKey;
    }

    /**
     * @param string $bbpsPublicKey
     * @return TransactionProcessor
     */
    public function withBbpsPublicKey($bbpsPublicKey)
    {
        $new = clone $this;
        $new->bbpsPublicKey = $bbpsPublicKey;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCcSupported()
    {
        return $this->ccSupported;
    }

    /**
     * @param bool $ccSupported
     * @return TransactionProcessor
     */
    public function withCcSupported($ccSupported)
    {
        $new = clone $this;
        $new->ccSupported = $ccSupported;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param bool $default
     * @return TransactionProcessor
     */
    public function withDefault($default)
    {
        $new = clone $this;
        $new->default = $default;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     * @return TransactionProcessor
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEftSupported()
    {
        return $this->eftSupported;
    }

    /**
     * @param bool $eftSupported
     * @return TransactionProcessor
     */
    public function withEftSupported($eftSupported)
    {
        $new = clone $this;
        $new->eftSupported = $eftSupported;

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
     * @return TransactionProcessor
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return string
     */
    public function getRefName()
    {
        return $this->refName;
    }

    /**
     * @param string $refName
     * @return TransactionProcessor
     */
    public function withRefName($refName)
    {
        $new = clone $this;
        $new->refName = $refName;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return TransactionProcessor
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

