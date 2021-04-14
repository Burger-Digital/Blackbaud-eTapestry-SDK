<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PagedCartElementsRequest implements RequestInterface
{

    /**
     * @var bool
     */
    private $clearCache;

    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $start;

    /**
     * @var string
     */
    private $cartRef;

    /**
     * @var string
     */
    private $categoryRef;

    /**
     * @var int
     */
    private $elementTypeMask;

    /**
     * @var bool
     */
    private $includeDisabledItems;

    /**
     * @var bool
     */
    private $includeNoItemCategories;

    /**
     * @var bool
     */
    private $includeNonPublishableCategories;

    /**
     * @var bool
     */
    private $includeNonPublishableItems;

    /**
     * @var string
     */
    private $searchText;

    /**
     * Constructor
     *
     * @var bool $clearCache
     * @var int $count
     * @var int $start
     * @var string $cartRef
     * @var string $categoryRef
     * @var int $elementTypeMask
     * @var bool $includeDisabledItems
     * @var bool $includeNoItemCategories
     * @var bool $includeNonPublishableCategories
     * @var bool $includeNonPublishableItems
     * @var string $searchText
     */
    public function __construct($clearCache, $count, $start, $cartRef, $categoryRef, $elementTypeMask, $includeDisabledItems, $includeNoItemCategories, $includeNonPublishableCategories, $includeNonPublishableItems, $searchText)
    {
        $this->clearCache = $clearCache;
        $this->count = $count;
        $this->start = $start;
        $this->cartRef = $cartRef;
        $this->categoryRef = $categoryRef;
        $this->elementTypeMask = $elementTypeMask;
        $this->includeDisabledItems = $includeDisabledItems;
        $this->includeNoItemCategories = $includeNoItemCategories;
        $this->includeNonPublishableCategories = $includeNonPublishableCategories;
        $this->includeNonPublishableItems = $includeNonPublishableItems;
        $this->searchText = $searchText;
    }

    /**
     * @return bool
     */
    public function getClearCache()
    {
        return $this->clearCache;
    }

    /**
     * @param bool $clearCache
     * @return PagedCartElementsRequest
     */
    public function withClearCache($clearCache)
    {
        $new = clone $this;
        $new->clearCache = $clearCache;

        return $new;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return PagedCartElementsRequest
     */
    public function withCount($count)
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param int $start
     * @return PagedCartElementsRequest
     */
    public function withStart($start)
    {
        $new = clone $this;
        $new->start = $start;

        return $new;
    }

    /**
     * @return string
     */
    public function getCartRef()
    {
        return $this->cartRef;
    }

    /**
     * @param string $cartRef
     * @return PagedCartElementsRequest
     */
    public function withCartRef($cartRef)
    {
        $new = clone $this;
        $new->cartRef = $cartRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategoryRef()
    {
        return $this->categoryRef;
    }

    /**
     * @param string $categoryRef
     * @return PagedCartElementsRequest
     */
    public function withCategoryRef($categoryRef)
    {
        $new = clone $this;
        $new->categoryRef = $categoryRef;

        return $new;
    }

    /**
     * @return int
     */
    public function getElementTypeMask()
    {
        return $this->elementTypeMask;
    }

    /**
     * @param int $elementTypeMask
     * @return PagedCartElementsRequest
     */
    public function withElementTypeMask($elementTypeMask)
    {
        $new = clone $this;
        $new->elementTypeMask = $elementTypeMask;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeDisabledItems()
    {
        return $this->includeDisabledItems;
    }

    /**
     * @param bool $includeDisabledItems
     * @return PagedCartElementsRequest
     */
    public function withIncludeDisabledItems($includeDisabledItems)
    {
        $new = clone $this;
        $new->includeDisabledItems = $includeDisabledItems;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeNoItemCategories()
    {
        return $this->includeNoItemCategories;
    }

    /**
     * @param bool $includeNoItemCategories
     * @return PagedCartElementsRequest
     */
    public function withIncludeNoItemCategories($includeNoItemCategories)
    {
        $new = clone $this;
        $new->includeNoItemCategories = $includeNoItemCategories;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeNonPublishableCategories()
    {
        return $this->includeNonPublishableCategories;
    }

    /**
     * @param bool $includeNonPublishableCategories
     * @return PagedCartElementsRequest
     */
    public function withIncludeNonPublishableCategories($includeNonPublishableCategories)
    {
        $new = clone $this;
        $new->includeNonPublishableCategories = $includeNonPublishableCategories;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeNonPublishableItems()
    {
        return $this->includeNonPublishableItems;
    }

    /**
     * @param bool $includeNonPublishableItems
     * @return PagedCartElementsRequest
     */
    public function withIncludeNonPublishableItems($includeNonPublishableItems)
    {
        $new = clone $this;
        $new->includeNonPublishableItems = $includeNonPublishableItems;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
        return $this->searchText;
    }

    /**
     * @param string $searchText
     * @return PagedCartElementsRequest
     */
    public function withSearchText($searchText)
    {
        $new = clone $this;
        $new->searchText = $searchText;

        return $new;
    }


}

