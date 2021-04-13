<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionProcessor StructType
 * @subpackage Structs
 */
class TransactionProcessor extends AbstractStructBase
{
    /**
     * The bbpsMerchantId
     * @var string|null
     */
    protected ?string $bbpsMerchantId = null;
    /**
     * The bbpsPublicKey
     * @var string|null
     */
    protected ?string $bbpsPublicKey = null;
    /**
     * The ccSupported
     * @var bool|null
     */
    protected ?bool $ccSupported = null;
    /**
     * The default
     * @var bool|null
     */
    protected ?bool $default = null;
    /**
     * The disabled
     * @var bool|null
     */
    protected ?bool $disabled = null;
    /**
     * The eftSupported
     * @var bool|null
     */
    protected ?bool $eftSupported = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The refName
     * @var string|null
     */
    protected ?string $refName = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for TransactionProcessor
     * @uses TransactionProcessor::setBbpsMerchantId()
     * @uses TransactionProcessor::setBbpsPublicKey()
     * @uses TransactionProcessor::setCcSupported()
     * @uses TransactionProcessor::setDefault()
     * @uses TransactionProcessor::setDisabled()
     * @uses TransactionProcessor::setEftSupported()
     * @uses TransactionProcessor::setRef()
     * @uses TransactionProcessor::setRefName()
     * @uses TransactionProcessor::setType()
     * @param string $bbpsMerchantId
     * @param string $bbpsPublicKey
     * @param bool $ccSupported
     * @param bool $default
     * @param bool $disabled
     * @param bool $eftSupported
     * @param string $ref
     * @param string $refName
     * @param int $type
     */
    public function __construct(?string $bbpsMerchantId = null, ?string $bbpsPublicKey = null, ?bool $ccSupported = null, ?bool $default = null, ?bool $disabled = null, ?bool $eftSupported = null, ?string $ref = null, ?string $refName = null, ?int $type = null)
    {
        $this
            ->setBbpsMerchantId($bbpsMerchantId)
            ->setBbpsPublicKey($bbpsPublicKey)
            ->setCcSupported($ccSupported)
            ->setDefault($default)
            ->setDisabled($disabled)
            ->setEftSupported($eftSupported)
            ->setRef($ref)
            ->setRefName($refName)
            ->setType($type);
    }
    /**
     * Get bbpsMerchantId value
     * @return string|null
     */
    public function getBbpsMerchantId(): ?string
    {
        return $this->bbpsMerchantId;
    }
    /**
     * Set bbpsMerchantId value
     * @param string $bbpsMerchantId
     * @return \StructType\TransactionProcessor
     */
    public function setBbpsMerchantId(?string $bbpsMerchantId = null): self
    {
        // validation for constraint: string
        if (!is_null($bbpsMerchantId) && !is_string($bbpsMerchantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bbpsMerchantId, true), gettype($bbpsMerchantId)), __LINE__);
        }
        $this->bbpsMerchantId = $bbpsMerchantId;
        
        return $this;
    }
    /**
     * Get bbpsPublicKey value
     * @return string|null
     */
    public function getBbpsPublicKey(): ?string
    {
        return $this->bbpsPublicKey;
    }
    /**
     * Set bbpsPublicKey value
     * @param string $bbpsPublicKey
     * @return \StructType\TransactionProcessor
     */
    public function setBbpsPublicKey(?string $bbpsPublicKey = null): self
    {
        // validation for constraint: string
        if (!is_null($bbpsPublicKey) && !is_string($bbpsPublicKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bbpsPublicKey, true), gettype($bbpsPublicKey)), __LINE__);
        }
        $this->bbpsPublicKey = $bbpsPublicKey;
        
        return $this;
    }
    /**
     * Get ccSupported value
     * @return bool|null
     */
    public function getCcSupported(): ?bool
    {
        return $this->ccSupported;
    }
    /**
     * Set ccSupported value
     * @param bool $ccSupported
     * @return \StructType\TransactionProcessor
     */
    public function setCcSupported(?bool $ccSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ccSupported) && !is_bool($ccSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ccSupported, true), gettype($ccSupported)), __LINE__);
        }
        $this->ccSupported = $ccSupported;
        
        return $this;
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \StructType\TransactionProcessor
     */
    public function setDefault(?bool $default = null): self
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        $this->default = $default;
        
        return $this;
    }
    /**
     * Get disabled value
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * Set disabled value
     * @param bool $disabled
     * @return \StructType\TransactionProcessor
     */
    public function setDisabled(?bool $disabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        
        return $this;
    }
    /**
     * Get eftSupported value
     * @return bool|null
     */
    public function getEftSupported(): ?bool
    {
        return $this->eftSupported;
    }
    /**
     * Set eftSupported value
     * @param bool $eftSupported
     * @return \StructType\TransactionProcessor
     */
    public function setEftSupported(?bool $eftSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eftSupported) && !is_bool($eftSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eftSupported, true), gettype($eftSupported)), __LINE__);
        }
        $this->eftSupported = $eftSupported;
        
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
     * @return \StructType\TransactionProcessor
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
    /**
     * Get refName value
     * @return string|null
     */
    public function getRefName(): ?string
    {
        return $this->refName;
    }
    /**
     * Set refName value
     * @param string $refName
     * @return \StructType\TransactionProcessor
     */
    public function setRefName(?string $refName = null): self
    {
        // validation for constraint: string
        if (!is_null($refName) && !is_string($refName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refName, true), gettype($refName)), __LINE__);
        }
        $this->refName = $refName;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \StructType\TransactionProcessor
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
