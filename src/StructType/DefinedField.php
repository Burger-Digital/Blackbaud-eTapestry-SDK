<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DefinedField StructType
 * @subpackage Structs
 */
class DefinedField extends AbstractStructBase
{
    /**
     * The applicationTypes
     * Meta information extracted from the WSDL
     * - arrayType: int[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var int[]
     */
    protected array $applicationTypes = [];
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The consent
     * @var bool|null
     */
    protected ?bool $consent = null;
    /**
     * The dataType
     * @var int|null
     */
    protected ?int $dataType = null;
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
     * The displayType
     * @var int|null
     */
    protected ?int $displayType = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The required
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * The securityRights
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedFieldValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\DefinedFieldValue[]
     */
    protected array $securityRights = [];
    /**
     * The system
     * @var bool|null
     */
    protected ?bool $system = null;
    /**
     * The values
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedFieldValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\DefinedFieldValue[]
     */
    protected array $values = [];
    /**
     * Constructor method for DefinedField
     * @uses DefinedField::setApplicationTypes()
     * @uses DefinedField::setCategory()
     * @uses DefinedField::setConsent()
     * @uses DefinedField::setDataType()
     * @uses DefinedField::setDesc()
     * @uses DefinedField::setDisabled()
     * @uses DefinedField::setDisplayType()
     * @uses DefinedField::setName()
     * @uses DefinedField::setRef()
     * @uses DefinedField::setRequired()
     * @uses DefinedField::setSecurityRights()
     * @uses DefinedField::setSystem()
     * @uses DefinedField::setValues()
     * @param int[] $applicationTypes
     * @param string $category
     * @param bool $consent
     * @param int $dataType
     * @param string $desc
     * @param bool $disabled
     * @param int $displayType
     * @param string $name
     * @param string $ref
     * @param bool $required
     * @param \BurgerDigital\eTapestry\StructType\DefinedFieldValue[] $securityRights
     * @param bool $system
     * @param \BurgerDigital\eTapestry\StructType\DefinedFieldValue[] $values
     */
    public function __construct(array $applicationTypes = [], ?string $category = null, ?bool $consent = null, ?int $dataType = null, ?string $desc = null, ?bool $disabled = null, ?int $displayType = null, ?string $name = null, ?string $ref = null, ?bool $required = null, array $securityRights = [], ?bool $system = null, array $values = [])
    {
        $this
            ->setApplicationTypes($applicationTypes)
            ->setCategory($category)
            ->setConsent($consent)
            ->setDataType($dataType)
            ->setDesc($desc)
            ->setDisabled($disabled)
            ->setDisplayType($displayType)
            ->setName($name)
            ->setRef($ref)
            ->setRequired($required)
            ->setSecurityRights($securityRights)
            ->setSystem($system)
            ->setValues($values);
    }
    /**
     * Get applicationTypes value
     * @return int[]
     */
    public function getApplicationTypes(): array
    {
        return $this->applicationTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setApplicationTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicationTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicationTypesForArrayConstraintsFromSetApplicationTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $definedFieldApplicationTypesItem) {
            // validation for constraint: itemType
            if (!(is_int($definedFieldApplicationTypesItem) || ctype_digit($definedFieldApplicationTypesItem))) {
                $invalidValues[] = is_object($definedFieldApplicationTypesItem) ? get_class($definedFieldApplicationTypesItem) : sprintf('%s(%s)', gettype($definedFieldApplicationTypesItem), var_export($definedFieldApplicationTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The applicationTypes property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set applicationTypes value
     * @throws InvalidArgumentException
     * @param int[] $applicationTypes
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setApplicationTypes(array $applicationTypes = []): self
    {
        // validation for constraint: array
        if ('' !== ($applicationTypesArrayErrorMessage = self::validateApplicationTypesForArrayConstraintsFromSetApplicationTypes($applicationTypes))) {
            throw new InvalidArgumentException($applicationTypesArrayErrorMessage, __LINE__);
        }
        $this->applicationTypes = $applicationTypes;
        
        return $this;
    }
    /**
     * Add item to applicationTypes value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function addToApplicationTypes(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The applicationTypes property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->applicationTypes[] = $item;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get consent value
     * @return bool|null
     */
    public function getConsent(): ?bool
    {
        return $this->consent;
    }
    /**
     * Set consent value
     * @param bool $consent
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setConsent(?bool $consent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consent) && !is_bool($consent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consent, true), gettype($consent)), __LINE__);
        }
        $this->consent = $consent;
        
        return $this;
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
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
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
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
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
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
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
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
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
     * Get required value
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        
        return $this;
    }
    /**
     * Get securityRights value
     * @return \BurgerDigital\eTapestry\StructType\DefinedFieldValue[]
     */
    public function getSecurityRights(): array
    {
        return $this->securityRights;
    }
    /**
     * This method is responsible for validating the values passed to the setSecurityRights method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecurityRights method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecurityRightsForArrayConstraintsFromSetSecurityRights(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $definedFieldSecurityRightsItem) {
            // validation for constraint: itemType
            if (!$definedFieldSecurityRightsItem instanceof \BurgerDigital\eTapestry\StructType\DefinedFieldValue) {
                $invalidValues[] = is_object($definedFieldSecurityRightsItem) ? get_class($definedFieldSecurityRightsItem) : sprintf('%s(%s)', gettype($definedFieldSecurityRightsItem), var_export($definedFieldSecurityRightsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The securityRights property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedFieldValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set securityRights value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedFieldValue[] $securityRights
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setSecurityRights(array $securityRights = []): self
    {
        // validation for constraint: array
        if ('' !== ($securityRightsArrayErrorMessage = self::validateSecurityRightsForArrayConstraintsFromSetSecurityRights($securityRights))) {
            throw new InvalidArgumentException($securityRightsArrayErrorMessage, __LINE__);
        }
        $this->securityRights = $securityRights;
        
        return $this;
    }
    /**
     * Add item to securityRights value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedFieldValue $item
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function addToSecurityRights(\StructType\DefinedFieldValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\DefinedFieldValue) {
            throw new InvalidArgumentException(sprintf('The securityRights property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedFieldValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->securityRights[] = $item;
        
        return $this;
    }
    /**
     * Get system value
     * @return bool|null
     */
    public function getSystem(): ?bool
    {
        return $this->system;
    }
    /**
     * Set system value
     * @param bool $system
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setSystem(?bool $system = null): self
    {
        // validation for constraint: boolean
        if (!is_null($system) && !is_bool($system)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($system, true), gettype($system)), __LINE__);
        }
        $this->system = $system;
        
        return $this;
    }
    /**
     * Get values value
     * @return \BurgerDigital\eTapestry\StructType\DefinedFieldValue[]
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * This method is responsible for validating the values passed to the setValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValuesForArrayConstraintsFromSetValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $definedFieldValuesItem) {
            // validation for constraint: itemType
            if (!$definedFieldValuesItem instanceof \BurgerDigital\eTapestry\StructType\DefinedFieldValue) {
                $invalidValues[] = is_object($definedFieldValuesItem) ? get_class($definedFieldValuesItem) : sprintf('%s(%s)', gettype($definedFieldValuesItem), var_export($definedFieldValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The values property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedFieldValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set values value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedFieldValue[] $values
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function setValues(array $values = []): self
    {
        // validation for constraint: array
        if ('' !== ($valuesArrayErrorMessage = self::validateValuesForArrayConstraintsFromSetValues($values))) {
            throw new InvalidArgumentException($valuesArrayErrorMessage, __LINE__);
        }
        $this->values = $values;
        
        return $this;
    }
    /**
     * Add item to values value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedFieldValue $item
     * @return \BurgerDigital\eTapestry\StructType\DefinedField
     */
    public function addToValues(\StructType\DefinedFieldValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\DefinedFieldValue) {
            throw new InvalidArgumentException(sprintf('The values property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedFieldValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->values[] = $item;
        
        return $this;
    }
}
