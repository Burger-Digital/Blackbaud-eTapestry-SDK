<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedDefinedFieldsRequest StructType
 * @subpackage Structs
 */
class PagedDefinedFieldsRequest extends AbstractStructBase
{
    /**
     * The clearCache
     * @var bool|null
     */
    protected ?bool $clearCache = null;
    /**
     * The count
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * The start
     * @var int|null
     */
    protected ?int $start = null;
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
     * The categories
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $categories = [];
    /**
     * The includeDisabledFields
     * @var bool|null
     */
    protected ?bool $includeDisabledFields = null;
    /**
     * The includeDisabledValues
     * @var bool|null
     */
    protected ?bool $includeDisabledValues = null;
    /**
     * The names
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $names = [];
    /**
     * Constructor method for PagedDefinedFieldsRequest
     * @uses PagedDefinedFieldsRequest::setClearCache()
     * @uses PagedDefinedFieldsRequest::setCount()
     * @uses PagedDefinedFieldsRequest::setStart()
     * @uses PagedDefinedFieldsRequest::setApplicationTypes()
     * @uses PagedDefinedFieldsRequest::setCategories()
     * @uses PagedDefinedFieldsRequest::setIncludeDisabledFields()
     * @uses PagedDefinedFieldsRequest::setIncludeDisabledValues()
     * @uses PagedDefinedFieldsRequest::setNames()
     * @param bool $clearCache
     * @param int $count
     * @param int $start
     * @param int[] $applicationTypes
     * @param string[] $categories
     * @param bool $includeDisabledFields
     * @param bool $includeDisabledValues
     * @param string[] $names
     */
    public function __construct(?bool $clearCache = null, ?int $count = null, ?int $start = null, array $applicationTypes = [], array $categories = [], ?bool $includeDisabledFields = null, ?bool $includeDisabledValues = null, array $names = [])
    {
        $this
            ->setClearCache($clearCache)
            ->setCount($count)
            ->setStart($start)
            ->setApplicationTypes($applicationTypes)
            ->setCategories($categories)
            ->setIncludeDisabledFields($includeDisabledFields)
            ->setIncludeDisabledValues($includeDisabledValues)
            ->setNames($names);
    }
    /**
     * Get clearCache value
     * @return bool|null
     */
    public function getClearCache(): ?bool
    {
        return $this->clearCache;
    }
    /**
     * Set clearCache value
     * @param bool $clearCache
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setClearCache(?bool $clearCache = null): self
    {
        // validation for constraint: boolean
        if (!is_null($clearCache) && !is_bool($clearCache)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($clearCache, true), gettype($clearCache)), __LINE__);
        }
        $this->clearCache = $clearCache;
        
        return $this;
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
        return $this;
    }
    /**
     * Get start value
     * @return int|null
     */
    public function getStart(): ?int
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param int $start
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setStart(?int $start = null): self
    {
        // validation for constraint: int
        if (!is_null($start) && !(is_int($start) || ctype_digit($start))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        
        return $this;
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
        foreach ($values as $pagedDefinedFieldsRequestApplicationTypesItem) {
            // validation for constraint: itemType
            if (!(is_int($pagedDefinedFieldsRequestApplicationTypesItem) || ctype_digit($pagedDefinedFieldsRequestApplicationTypesItem))) {
                $invalidValues[] = is_object($pagedDefinedFieldsRequestApplicationTypesItem) ? get_class($pagedDefinedFieldsRequestApplicationTypesItem) : sprintf('%s(%s)', gettype($pagedDefinedFieldsRequestApplicationTypesItem), var_export($pagedDefinedFieldsRequestApplicationTypesItem, true));
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
     * @return \StructType\PagedDefinedFieldsRequest
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
     * @return \StructType\PagedDefinedFieldsRequest
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
     * Get categories value
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     * This method is responsible for validating the values passed to the setCategories method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategories method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoriesForArrayConstraintsFromSetCategories(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedDefinedFieldsRequestCategoriesItem) {
            // validation for constraint: itemType
            if (!is_string($pagedDefinedFieldsRequestCategoriesItem)) {
                $invalidValues[] = is_object($pagedDefinedFieldsRequestCategoriesItem) ? get_class($pagedDefinedFieldsRequestCategoriesItem) : sprintf('%s(%s)', gettype($pagedDefinedFieldsRequestCategoriesItem), var_export($pagedDefinedFieldsRequestCategoriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The categories property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set categories value
     * @throws InvalidArgumentException
     * @param string[] $categories
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setCategories(array $categories = []): self
    {
        // validation for constraint: array
        if ('' !== ($categoriesArrayErrorMessage = self::validateCategoriesForArrayConstraintsFromSetCategories($categories))) {
            throw new InvalidArgumentException($categoriesArrayErrorMessage, __LINE__);
        }
        $this->categories = $categories;
        
        return $this;
    }
    /**
     * Add item to categories value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function addToCategories(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The categories property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->categories[] = $item;
        
        return $this;
    }
    /**
     * Get includeDisabledFields value
     * @return bool|null
     */
    public function getIncludeDisabledFields(): ?bool
    {
        return $this->includeDisabledFields;
    }
    /**
     * Set includeDisabledFields value
     * @param bool $includeDisabledFields
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setIncludeDisabledFields(?bool $includeDisabledFields = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeDisabledFields) && !is_bool($includeDisabledFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDisabledFields, true), gettype($includeDisabledFields)), __LINE__);
        }
        $this->includeDisabledFields = $includeDisabledFields;
        
        return $this;
    }
    /**
     * Get includeDisabledValues value
     * @return bool|null
     */
    public function getIncludeDisabledValues(): ?bool
    {
        return $this->includeDisabledValues;
    }
    /**
     * Set includeDisabledValues value
     * @param bool $includeDisabledValues
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setIncludeDisabledValues(?bool $includeDisabledValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeDisabledValues) && !is_bool($includeDisabledValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDisabledValues, true), gettype($includeDisabledValues)), __LINE__);
        }
        $this->includeDisabledValues = $includeDisabledValues;
        
        return $this;
    }
    /**
     * Get names value
     * @return string[]
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * This method is responsible for validating the values passed to the setNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNamesForArrayConstraintsFromSetNames(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedDefinedFieldsRequestNamesItem) {
            // validation for constraint: itemType
            if (!is_string($pagedDefinedFieldsRequestNamesItem)) {
                $invalidValues[] = is_object($pagedDefinedFieldsRequestNamesItem) ? get_class($pagedDefinedFieldsRequestNamesItem) : sprintf('%s(%s)', gettype($pagedDefinedFieldsRequestNamesItem), var_export($pagedDefinedFieldsRequestNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The names property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set names value
     * @throws InvalidArgumentException
     * @param string[] $names
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function setNames(array $names = []): self
    {
        // validation for constraint: array
        if ('' !== ($namesArrayErrorMessage = self::validateNamesForArrayConstraintsFromSetNames($names))) {
            throw new InvalidArgumentException($namesArrayErrorMessage, __LINE__);
        }
        $this->names = $names;
        
        return $this;
    }
    /**
     * Add item to names value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\PagedDefinedFieldsRequest
     */
    public function addToNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The names property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->names[] = $item;
        
        return $this;
    }
}
