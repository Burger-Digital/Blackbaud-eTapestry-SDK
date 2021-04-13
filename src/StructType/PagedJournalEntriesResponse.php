<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedJournalEntriesResponse StructType
 * @subpackage Structs
 */
class PagedJournalEntriesResponse extends AbstractStructBase
{
    /**
     * The count
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - arrayType: anyType[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var mixed[]
     */
    protected array $data = [];
    /**
     * The pages
     * @var int|null
     */
    protected ?int $pages = null;
    /**
     * The start
     * @var int|null
     */
    protected ?int $start = null;
    /**
     * The total
     * @var int|null
     */
    protected ?int $total = null;
    /**
     * The usedCache
     * @var bool|null
     */
    protected ?bool $usedCache = null;
    /**
     * Constructor method for PagedJournalEntriesResponse
     * @uses PagedJournalEntriesResponse::setCount()
     * @uses PagedJournalEntriesResponse::setData()
     * @uses PagedJournalEntriesResponse::setPages()
     * @uses PagedJournalEntriesResponse::setStart()
     * @uses PagedJournalEntriesResponse::setTotal()
     * @uses PagedJournalEntriesResponse::setUsedCache()
     * @param int $count
     * @param mixed[] $data
     * @param int $pages
     * @param int $start
     * @param int $total
     * @param bool $usedCache
     */
    public function __construct(?int $count = null, array $data = [], ?int $pages = null, ?int $start = null, ?int $total = null, ?bool $usedCache = null)
    {
        $this
            ->setCount($count)
            ->setData($data)
            ->setPages($pages)
            ->setStart($start)
            ->setTotal($total)
            ->setUsedCache($usedCache);
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
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
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
     * Get data value
     * @return mixed[]
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * This method is responsible for validating the values passed to the setData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataForArrayConstraintsFromSetData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedJournalEntriesResponseDataItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($pagedJournalEntriesResponseDataItem) ? get_class($pagedJournalEntriesResponseDataItem) : sprintf('%s(%s)', gettype($pagedJournalEntriesResponseDataItem), var_export($pagedJournalEntriesResponseDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The data property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set data value
     * @throws InvalidArgumentException
     * @param mixed[] $data
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
     */
    public function setData(array $data = []): self
    {
        // validation for constraint: array
        if ('' !== ($dataArrayErrorMessage = self::validateDataForArrayConstraintsFromSetData($data))) {
            throw new InvalidArgumentException($dataArrayErrorMessage, __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Add item to data value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
     */
    public function addToData(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The data property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->data[] = $item;
        
        return $this;
    }
    /**
     * Get pages value
     * @return int|null
     */
    public function getPages(): ?int
    {
        return $this->pages;
    }
    /**
     * Set pages value
     * @param int $pages
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
     */
    public function setPages(?int $pages = null): self
    {
        // validation for constraint: int
        if (!is_null($pages) && !(is_int($pages) || ctype_digit($pages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pages, true), gettype($pages)), __LINE__);
        }
        $this->pages = $pages;
        
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
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
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
     * Get total value
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
     */
    public function setTotal(?int $total = null): self
    {
        // validation for constraint: int
        if (!is_null($total) && !(is_int($total) || ctype_digit($total))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
        
        return $this;
    }
    /**
     * Get usedCache value
     * @return bool|null
     */
    public function getUsedCache(): ?bool
    {
        return $this->usedCache;
    }
    /**
     * Set usedCache value
     * @param bool $usedCache
     * @return \BurgerDigital\eTapestry\StructType\PagedJournalEntriesResponse
     */
    public function setUsedCache(?bool $usedCache = null): self
    {
        // validation for constraint: boolean
        if (!is_null($usedCache) && !is_bool($usedCache)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($usedCache, true), gettype($usedCache)), __LINE__);
        }
        $this->usedCache = $usedCache;
        
        return $this;
    }
}
