<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCriteria StructType
 * @subpackage Structs
 */
class SearchCriteria extends AbstractStructBase
{
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The field
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The values
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $values = [];
    /**
     * Constructor method for SearchCriteria
     * @uses SearchCriteria::setAction()
     * @uses SearchCriteria::setField()
     * @uses SearchCriteria::setType()
     * @uses SearchCriteria::setValues()
     * @param string $action
     * @param string $field
     * @param string $type
     * @param string[] $values
     */
    public function __construct(?string $action = null, ?string $field = null, ?string $type = null, array $values = [])
    {
        $this
            ->setAction($action)
            ->setField($field)
            ->setType($type)
            ->setValues($values);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \StructType\SearchCriteria
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \StructType\SearchCriteria
     */
    public function setField(?string $field = null): self
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\SearchCriteria
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get values value
     * @return string[]
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
        foreach ($values as $searchCriteriaValuesItem) {
            // validation for constraint: itemType
            if (!is_string($searchCriteriaValuesItem)) {
                $invalidValues[] = is_object($searchCriteriaValuesItem) ? get_class($searchCriteriaValuesItem) : sprintf('%s(%s)', gettype($searchCriteriaValuesItem), var_export($searchCriteriaValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The values property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set values value
     * @throws InvalidArgumentException
     * @param string[] $values
     * @return \StructType\SearchCriteria
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
     * @param string $item
     * @return \StructType\SearchCriteria
     */
    public function addToValues(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The values property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->values[] = $item;
        
        return $this;
    }
}
