<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedExistingQueryResultsRequest StructType
 * @subpackage Structs
 */
class PagedExistingQueryResultsRequest extends AbstractStructBase
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
     * The accountType
     * @var int|null
     */
    protected ?int $accountType = null;
    /**
     * The query
     * @var string|null
     */
    protected ?string $query = null;
    /**
     * The sortOptions
     * Meta information extracted from the WSDL
     * - arrayType: tns:SortOption[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\SortOption[]
     */
    protected array $sortOptions = [];
    /**
     * Constructor method for PagedExistingQueryResultsRequest
     * @uses PagedExistingQueryResultsRequest::setClearCache()
     * @uses PagedExistingQueryResultsRequest::setCount()
     * @uses PagedExistingQueryResultsRequest::setStart()
     * @uses PagedExistingQueryResultsRequest::setAccountType()
     * @uses PagedExistingQueryResultsRequest::setQuery()
     * @uses PagedExistingQueryResultsRequest::setSortOptions()
     * @param bool $clearCache
     * @param int $count
     * @param int $start
     * @param int $accountType
     * @param string $query
     * @param \BurgerDigital\eTapestry\StructType\SortOption[] $sortOptions
     */
    public function __construct(?bool $clearCache = null, ?int $count = null, ?int $start = null, ?int $accountType = null, ?string $query = null, array $sortOptions = [])
    {
        $this
            ->setClearCache($clearCache)
            ->setCount($count)
            ->setStart($start)
            ->setAccountType($accountType)
            ->setQuery($query)
            ->setSortOptions($sortOptions);
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
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
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
     * Get accountType value
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param int $accountType
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
     */
    public function setAccountType(?int $accountType = null): self
    {
        // validation for constraint: int
        if (!is_null($accountType) && !(is_int($accountType) || ctype_digit($accountType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get query value
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }
    /**
     * Set query value
     * @param string $query
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
     */
    public function setQuery(?string $query = null): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->query = $query;
        
        return $this;
    }
    /**
     * Get sortOptions value
     * @return \BurgerDigital\eTapestry\StructType\SortOption[]
     */
    public function getSortOptions(): array
    {
        return $this->sortOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setSortOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSortOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSortOptionsForArrayConstraintsFromSetSortOptions(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedExistingQueryResultsRequestSortOptionsItem) {
            // validation for constraint: itemType
            if (!$pagedExistingQueryResultsRequestSortOptionsItem instanceof \BurgerDigital\eTapestry\StructType\SortOption) {
                $invalidValues[] = is_object($pagedExistingQueryResultsRequestSortOptionsItem) ? get_class($pagedExistingQueryResultsRequestSortOptionsItem) : sprintf('%s(%s)', gettype($pagedExistingQueryResultsRequestSortOptionsItem), var_export($pagedExistingQueryResultsRequestSortOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sortOptions property can only contain items of type \BurgerDigital\eTapestry\StructType\SortOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sortOptions value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\SortOption[] $sortOptions
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
     */
    public function setSortOptions(array $sortOptions = []): self
    {
        // validation for constraint: array
        if ('' !== ($sortOptionsArrayErrorMessage = self::validateSortOptionsForArrayConstraintsFromSetSortOptions($sortOptions))) {
            throw new InvalidArgumentException($sortOptionsArrayErrorMessage, __LINE__);
        }
        $this->sortOptions = $sortOptions;
        
        return $this;
    }
    /**
     * Add item to sortOptions value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\SortOption $item
     * @return \BurgerDigital\eTapestry\StructType\PagedExistingQueryResultsRequest
     */
    public function addToSortOptions(\StructType\SortOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\SortOption) {
            throw new InvalidArgumentException(sprintf('The sortOptions property can only contain items of type \BurgerDigital\eTapestry\StructType\SortOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sortOptions[] = $item;
        
        return $this;
    }
}
