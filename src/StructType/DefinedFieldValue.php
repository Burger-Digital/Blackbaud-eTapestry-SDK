<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DefinedFieldValue StructType
 * @subpackage Structs
 */
class DefinedFieldValue extends AbstractStructBase
{
    /**
     * The desc
     * @var string|null
     */
    protected ?string $desc = null;
    /**
     * The disabled
     * @var bool|null
     */
    protected ?bool $disabled = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for DefinedFieldValue
     * @uses DefinedFieldValue::setDesc()
     * @uses DefinedFieldValue::setDisabled()
     * @uses DefinedFieldValue::setRef()
     * @uses DefinedFieldValue::setValue()
     * @param string $desc
     * @param bool $disabled
     * @param string $ref
     * @param string $value
     */
    public function __construct(?string $desc = null, ?bool $disabled = null, ?string $ref = null, ?string $value = null)
    {
        $this
            ->setDesc($desc)
            ->setDisabled($disabled)
            ->setRef($ref)
            ->setValue($value);
    }
    /**
     * Get desc value
     * @return string|null
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param string $desc
     * @return \StructType\DefinedFieldValue
     */
    public function setDesc(?string $desc = null): self
    {
        // validation for constraint: string
        if (!is_null($desc) && !is_string($desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc, true), gettype($desc)), __LINE__);
        }
        $this->desc = $desc;
        
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
     * @return \StructType\DefinedFieldValue
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
     * @return \StructType\DefinedFieldValue
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
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \StructType\DefinedFieldValue
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
