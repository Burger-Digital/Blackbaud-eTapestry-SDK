<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DefinedValue StructType
 * @subpackage Structs
 */
class DefinedValue extends AbstractStructBase
{
    /**
     * The dataType
     * @var int|null
     */
    protected ?int $dataType = null;
    /**
     * The displayType
     * @var int|null
     */
    protected ?int $displayType = null;
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The fieldRef
     * @var string|null
     */
    protected ?string $fieldRef = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The valueRef
     * @var string|null
     */
    protected ?string $valueRef = null;
    /**
     * Constructor method for DefinedValue
     * @uses DefinedValue::setDataType()
     * @uses DefinedValue::setDisplayType()
     * @uses DefinedValue::setFieldName()
     * @uses DefinedValue::setFieldRef()
     * @uses DefinedValue::setValue()
     * @uses DefinedValue::setValueRef()
     * @param int $dataType
     * @param int $displayType
     * @param string $fieldName
     * @param string $fieldRef
     * @param string $value
     * @param string $valueRef
     */
    public function __construct(?int $dataType = null, ?int $displayType = null, ?string $fieldName = null, ?string $fieldRef = null, ?string $value = null, ?string $valueRef = null)
    {
        $this
            ->setDataType($dataType)
            ->setDisplayType($displayType)
            ->setFieldName($fieldName)
            ->setFieldRef($fieldRef)
            ->setValue($value)
            ->setValueRef($valueRef);
    }
    /**
     * Get dataType value
     * @return int|null
     */
    public function getDataType(): ?int
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param int $dataType
     * @return \StructType\DefinedValue
     */
    public function setDataType(?int $dataType = null): self
    {
        // validation for constraint: int
        if (!is_null($dataType) && !(is_int($dataType) || ctype_digit($dataType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dataType, true), gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
        
        return $this;
    }
    /**
     * Get displayType value
     * @return int|null
     */
    public function getDisplayType(): ?int
    {
        return $this->displayType;
    }
    /**
     * Set displayType value
     * @param int $displayType
     * @return \StructType\DefinedValue
     */
    public function setDisplayType(?int $displayType = null): self
    {
        // validation for constraint: int
        if (!is_null($displayType) && !(is_int($displayType) || ctype_digit($displayType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayType, true), gettype($displayType)), __LINE__);
        }
        $this->displayType = $displayType;
        
        return $this;
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \StructType\DefinedValue
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get fieldRef value
     * @return string|null
     */
    public function getFieldRef(): ?string
    {
        return $this->fieldRef;
    }
    /**
     * Set fieldRef value
     * @param string $fieldRef
     * @return \StructType\DefinedValue
     */
    public function setFieldRef(?string $fieldRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldRef) && !is_string($fieldRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldRef, true), gettype($fieldRef)), __LINE__);
        }
        $this->fieldRef = $fieldRef;
        
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
     * @return \StructType\DefinedValue
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
    /**
     * Get valueRef value
     * @return string|null
     */
    public function getValueRef(): ?string
    {
        return $this->valueRef;
    }
    /**
     * Set valueRef value
     * @param string $valueRef
     * @return \StructType\DefinedValue
     */
    public function setValueRef(?string $valueRef = null): self
    {
        // validation for constraint: string
        if (!is_null($valueRef) && !is_string($valueRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueRef, true), gettype($valueRef)), __LINE__);
        }
        $this->valueRef = $valueRef;
        
        return $this;
    }
}
