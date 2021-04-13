<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedJournalEntriesRequest StructType
 * @subpackage Structs
 */
class PagedJournalEntriesRequest extends AbstractStructBase
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
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The baseQuery
     * @var string|null
     */
    protected ?string $baseQuery = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The types
     * Meta information extracted from the WSDL
     * - arrayType: int[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var int[]
     */
    protected array $types = [];
    /**
     * Constructor method for PagedJournalEntriesRequest
     * @uses PagedJournalEntriesRequest::setClearCache()
     * @uses PagedJournalEntriesRequest::setCount()
     * @uses PagedJournalEntriesRequest::setStart()
     * @uses PagedJournalEntriesRequest::setAccountRef()
     * @uses PagedJournalEntriesRequest::setBaseQuery()
     * @uses PagedJournalEntriesRequest::setEndDate()
     * @uses PagedJournalEntriesRequest::setStartDate()
     * @uses PagedJournalEntriesRequest::setTypes()
     * @param bool $clearCache
     * @param int $count
     * @param int $start
     * @param string $accountRef
     * @param string $baseQuery
     * @param string $endDate
     * @param string $startDate
     * @param int[] $types
     */
    public function __construct(?bool $clearCache = null, ?int $count = null, ?int $start = null, ?string $accountRef = null, ?string $baseQuery = null, ?string $endDate = null, ?string $startDate = null, array $types = [])
    {
        $this
            ->setClearCache($clearCache)
            ->setCount($count)
            ->setStart($start)
            ->setAccountRef($accountRef)
            ->setBaseQuery($baseQuery)
            ->setEndDate($endDate)
            ->setStartDate($startDate)
            ->setTypes($types);
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
     * @return \StructType\PagedJournalEntriesRequest
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
     * @return \StructType\PagedJournalEntriesRequest
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
     * @return \StructType\PagedJournalEntriesRequest
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
     * Get accountRef value
     * @return string|null
     */
    public function getAccountRef(): ?string
    {
        return $this->accountRef;
    }
    /**
     * Set accountRef value
     * @param string $accountRef
     * @return \StructType\PagedJournalEntriesRequest
     */
    public function setAccountRef(?string $accountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRef) && !is_string($accountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRef, true), gettype($accountRef)), __LINE__);
        }
        $this->accountRef = $accountRef;
        
        return $this;
    }
    /**
     * Get baseQuery value
     * @return string|null
     */
    public function getBaseQuery(): ?string
    {
        return $this->baseQuery;
    }
    /**
     * Set baseQuery value
     * @param string $baseQuery
     * @return \StructType\PagedJournalEntriesRequest
     */
    public function setBaseQuery(?string $baseQuery = null): self
    {
        // validation for constraint: string
        if (!is_null($baseQuery) && !is_string($baseQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseQuery, true), gettype($baseQuery)), __LINE__);
        }
        $this->baseQuery = $baseQuery;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\PagedJournalEntriesRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\PagedJournalEntriesRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get types value
     * @return int[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * This method is responsible for validating the values passed to the setTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTypesForArrayConstraintsFromSetTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedJournalEntriesRequestTypesItem) {
            // validation for constraint: itemType
            if (!(is_int($pagedJournalEntriesRequestTypesItem) || ctype_digit($pagedJournalEntriesRequestTypesItem))) {
                $invalidValues[] = is_object($pagedJournalEntriesRequestTypesItem) ? get_class($pagedJournalEntriesRequestTypesItem) : sprintf('%s(%s)', gettype($pagedJournalEntriesRequestTypesItem), var_export($pagedJournalEntriesRequestTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The types property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set types value
     * @throws InvalidArgumentException
     * @param int[] $types
     * @return \StructType\PagedJournalEntriesRequest
     */
    public function setTypes(array $types = []): self
    {
        // validation for constraint: array
        if ('' !== ($typesArrayErrorMessage = self::validateTypesForArrayConstraintsFromSetTypes($types))) {
            throw new InvalidArgumentException($typesArrayErrorMessage, __LINE__);
        }
        $this->types = $types;
        
        return $this;
    }
    /**
     * Add item to types value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \StructType\PagedJournalEntriesRequest
     */
    public function addToTypes(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The types property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->types[] = $item;
        
        return $this;
    }
}
