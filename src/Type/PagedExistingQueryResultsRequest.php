<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PagedExistingQueryResultsRequest implements RequestInterface
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
     * @var int
     */
    private $accountType;

    /**
     * @var string
     */
    private $query;

    /**
     * @var \BurgerDigital\eTapestry\Type\SortOption
     */
    private $sortOptions;

    /**
     * Constructor
     *
     * @var bool $clearCache
     * @var int $count
     * @var int $start
     * @var int $accountType
     * @var string $query
     * @var \BurgerDigital\eTapestry\Type\SortOption $sortOptions
     */
    public function __construct($clearCache, $count, $start, $accountType, $query, $sortOptions)
    {
        $this->clearCache = $clearCache;
        $this->count = $count;
        $this->start = $start;
        $this->accountType = $accountType;
        $this->query = $query;
        $this->sortOptions = $sortOptions;
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
     * @return PagedExistingQueryResultsRequest
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
     * @return PagedExistingQueryResultsRequest
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
     * @return PagedExistingQueryResultsRequest
     */
    public function withStart($start)
    {
        $new = clone $this;
        $new->start = $start;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param int $accountType
     * @return PagedExistingQueryResultsRequest
     */
    public function withAccountType($accountType)
    {
        $new = clone $this;
        $new->accountType = $accountType;

        return $new;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return PagedExistingQueryResultsRequest
     */
    public function withQuery($query)
    {
        $new = clone $this;
        $new->query = $query;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\SortOption
     */
    public function getSortOptions()
    {
        return $this->sortOptions;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\SortOption $sortOptions
     * @return PagedExistingQueryResultsRequest
     */
    public function withSortOptions($sortOptions)
    {
        $new = clone $this;
        $new->sortOptions = $sortOptions;

        return $new;
    }


}

