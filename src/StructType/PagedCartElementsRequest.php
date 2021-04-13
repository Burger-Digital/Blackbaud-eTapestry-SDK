<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedCartElementsRequest StructType
 * @subpackage Structs
 */
class PagedCartElementsRequest extends AbstractStructBase
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
     * The cartRef
     * @var string|null
     */
    protected ?string $cartRef = null;
    /**
     * The categoryRef
     * @var string|null
     */
    protected ?string $categoryRef = null;
    /**
     * The elementTypeMask
     * @var int|null
     */
    protected ?int $elementTypeMask = null;
    /**
     * The includeDisabledItems
     * @var bool|null
     */
    protected ?bool $includeDisabledItems = null;
    /**
     * The includeNoItemCategories
     * @var bool|null
     */
    protected ?bool $includeNoItemCategories = null;
    /**
     * The includeNonPublishableCategories
     * @var bool|null
     */
    protected ?bool $includeNonPublishableCategories = null;
    /**
     * The includeNonPublishableItems
     * @var bool|null
     */
    protected ?bool $includeNonPublishableItems = null;
    /**
     * The searchText
     * @var string|null
     */
    protected ?string $searchText = null;
    /**
     * Constructor method for PagedCartElementsRequest
     * @uses PagedCartElementsRequest::setClearCache()
     * @uses PagedCartElementsRequest::setCount()
     * @uses PagedCartElementsRequest::setStart()
     * @uses PagedCartElementsRequest::setCartRef()
     * @uses PagedCartElementsRequest::setCategoryRef()
     * @uses PagedCartElementsRequest::setElementTypeMask()
     * @uses PagedCartElementsRequest::setIncludeDisabledItems()
     * @uses PagedCartElementsRequest::setIncludeNoItemCategories()
     * @uses PagedCartElementsRequest::setIncludeNonPublishableCategories()
     * @uses PagedCartElementsRequest::setIncludeNonPublishableItems()
     * @uses PagedCartElementsRequest::setSearchText()
     * @param bool $clearCache
     * @param int $count
     * @param int $start
     * @param string $cartRef
     * @param string $categoryRef
     * @param int $elementTypeMask
     * @param bool $includeDisabledItems
     * @param bool $includeNoItemCategories
     * @param bool $includeNonPublishableCategories
     * @param bool $includeNonPublishableItems
     * @param string $searchText
     */
    public function __construct(?bool $clearCache = null, ?int $count = null, ?int $start = null, ?string $cartRef = null, ?string $categoryRef = null, ?int $elementTypeMask = null, ?bool $includeDisabledItems = null, ?bool $includeNoItemCategories = null, ?bool $includeNonPublishableCategories = null, ?bool $includeNonPublishableItems = null, ?string $searchText = null)
    {
        $this
            ->setClearCache($clearCache)
            ->setCount($count)
            ->setStart($start)
            ->setCartRef($cartRef)
            ->setCategoryRef($categoryRef)
            ->setElementTypeMask($elementTypeMask)
            ->setIncludeDisabledItems($includeDisabledItems)
            ->setIncludeNoItemCategories($includeNoItemCategories)
            ->setIncludeNonPublishableCategories($includeNonPublishableCategories)
            ->setIncludeNonPublishableItems($includeNonPublishableItems)
            ->setSearchText($searchText);
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
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
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
     * Get cartRef value
     * @return string|null
     */
    public function getCartRef(): ?string
    {
        return $this->cartRef;
    }
    /**
     * Set cartRef value
     * @param string $cartRef
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setCartRef(?string $cartRef = null): self
    {
        // validation for constraint: string
        if (!is_null($cartRef) && !is_string($cartRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cartRef, true), gettype($cartRef)), __LINE__);
        }
        $this->cartRef = $cartRef;
        
        return $this;
    }
    /**
     * Get categoryRef value
     * @return string|null
     */
    public function getCategoryRef(): ?string
    {
        return $this->categoryRef;
    }
    /**
     * Set categoryRef value
     * @param string $categoryRef
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setCategoryRef(?string $categoryRef = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryRef) && !is_string($categoryRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryRef, true), gettype($categoryRef)), __LINE__);
        }
        $this->categoryRef = $categoryRef;
        
        return $this;
    }
    /**
     * Get elementTypeMask value
     * @return int|null
     */
    public function getElementTypeMask(): ?int
    {
        return $this->elementTypeMask;
    }
    /**
     * Set elementTypeMask value
     * @param int $elementTypeMask
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setElementTypeMask(?int $elementTypeMask = null): self
    {
        // validation for constraint: int
        if (!is_null($elementTypeMask) && !(is_int($elementTypeMask) || ctype_digit($elementTypeMask))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($elementTypeMask, true), gettype($elementTypeMask)), __LINE__);
        }
        $this->elementTypeMask = $elementTypeMask;
        
        return $this;
    }
    /**
     * Get includeDisabledItems value
     * @return bool|null
     */
    public function getIncludeDisabledItems(): ?bool
    {
        return $this->includeDisabledItems;
    }
    /**
     * Set includeDisabledItems value
     * @param bool $includeDisabledItems
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setIncludeDisabledItems(?bool $includeDisabledItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeDisabledItems) && !is_bool($includeDisabledItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDisabledItems, true), gettype($includeDisabledItems)), __LINE__);
        }
        $this->includeDisabledItems = $includeDisabledItems;
        
        return $this;
    }
    /**
     * Get includeNoItemCategories value
     * @return bool|null
     */
    public function getIncludeNoItemCategories(): ?bool
    {
        return $this->includeNoItemCategories;
    }
    /**
     * Set includeNoItemCategories value
     * @param bool $includeNoItemCategories
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setIncludeNoItemCategories(?bool $includeNoItemCategories = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNoItemCategories) && !is_bool($includeNoItemCategories)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNoItemCategories, true), gettype($includeNoItemCategories)), __LINE__);
        }
        $this->includeNoItemCategories = $includeNoItemCategories;
        
        return $this;
    }
    /**
     * Get includeNonPublishableCategories value
     * @return bool|null
     */
    public function getIncludeNonPublishableCategories(): ?bool
    {
        return $this->includeNonPublishableCategories;
    }
    /**
     * Set includeNonPublishableCategories value
     * @param bool $includeNonPublishableCategories
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setIncludeNonPublishableCategories(?bool $includeNonPublishableCategories = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNonPublishableCategories) && !is_bool($includeNonPublishableCategories)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNonPublishableCategories, true), gettype($includeNonPublishableCategories)), __LINE__);
        }
        $this->includeNonPublishableCategories = $includeNonPublishableCategories;
        
        return $this;
    }
    /**
     * Get includeNonPublishableItems value
     * @return bool|null
     */
    public function getIncludeNonPublishableItems(): ?bool
    {
        return $this->includeNonPublishableItems;
    }
    /**
     * Set includeNonPublishableItems value
     * @param bool $includeNonPublishableItems
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setIncludeNonPublishableItems(?bool $includeNonPublishableItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNonPublishableItems) && !is_bool($includeNonPublishableItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNonPublishableItems, true), gettype($includeNonPublishableItems)), __LINE__);
        }
        $this->includeNonPublishableItems = $includeNonPublishableItems;
        
        return $this;
    }
    /**
     * Get searchText value
     * @return string|null
     */
    public function getSearchText(): ?string
    {
        return $this->searchText;
    }
    /**
     * Set searchText value
     * @param string $searchText
     * @return \BurgerDigital\eTapestry\StructType\PagedCartElementsRequest
     */
    public function setSearchText(?string $searchText = null): self
    {
        // validation for constraint: string
        if (!is_null($searchText) && !is_string($searchText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchText, true), gettype($searchText)), __LINE__);
        }
        $this->searchText = $searchText;
        
        return $this;
    }
}
