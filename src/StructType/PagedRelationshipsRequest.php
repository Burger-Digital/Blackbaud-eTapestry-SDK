<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedRelationshipsRequest StructType
 * @subpackage Structs
 */
class PagedRelationshipsRequest extends AbstractStructBase
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
     * The otherAccountRefs
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $otherAccountRefs = [];
    /**
     * Constructor method for PagedRelationshipsRequest
     * @uses PagedRelationshipsRequest::setClearCache()
     * @uses PagedRelationshipsRequest::setCount()
     * @uses PagedRelationshipsRequest::setStart()
     * @uses PagedRelationshipsRequest::setAccountRef()
     * @uses PagedRelationshipsRequest::setOtherAccountRefs()
     * @param bool $clearCache
     * @param int $count
     * @param int $start
     * @param string $accountRef
     * @param string[] $otherAccountRefs
     */
    public function __construct(?bool $clearCache = null, ?int $count = null, ?int $start = null, ?string $accountRef = null, array $otherAccountRefs = [])
    {
        $this
            ->setClearCache($clearCache)
            ->setCount($count)
            ->setStart($start)
            ->setAccountRef($accountRef)
            ->setOtherAccountRefs($otherAccountRefs);
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
     * @return \BurgerDigital\eTapestry\StructType\PagedRelationshipsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedRelationshipsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedRelationshipsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedRelationshipsRequest
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
     * Get otherAccountRefs value
     * @return string[]
     */
    public function getOtherAccountRefs(): array
    {
        return $this->otherAccountRefs;
    }
    /**
     * This method is responsible for validating the values passed to the setOtherAccountRefs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOtherAccountRefs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOtherAccountRefsForArrayConstraintsFromSetOtherAccountRefs(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedRelationshipsRequestOtherAccountRefsItem) {
            // validation for constraint: itemType
            if (!is_string($pagedRelationshipsRequestOtherAccountRefsItem)) {
                $invalidValues[] = is_object($pagedRelationshipsRequestOtherAccountRefsItem) ? get_class($pagedRelationshipsRequestOtherAccountRefsItem) : sprintf('%s(%s)', gettype($pagedRelationshipsRequestOtherAccountRefsItem), var_export($pagedRelationshipsRequestOtherAccountRefsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The otherAccountRefs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set otherAccountRefs value
     * @throws InvalidArgumentException
     * @param string[] $otherAccountRefs
     * @return \BurgerDigital\eTapestry\StructType\PagedRelationshipsRequest
     */
    public function setOtherAccountRefs(array $otherAccountRefs = []): self
    {
        // validation for constraint: array
        if ('' !== ($otherAccountRefsArrayErrorMessage = self::validateOtherAccountRefsForArrayConstraintsFromSetOtherAccountRefs($otherAccountRefs))) {
            throw new InvalidArgumentException($otherAccountRefsArrayErrorMessage, __LINE__);
        }
        $this->otherAccountRefs = $otherAccountRefs;
        
        return $this;
    }
    /**
     * Add item to otherAccountRefs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \BurgerDigital\eTapestry\StructType\PagedRelationshipsRequest
     */
    public function addToOtherAccountRefs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The otherAccountRefs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->otherAccountRefs[] = $item;
        
        return $this;
    }
}
