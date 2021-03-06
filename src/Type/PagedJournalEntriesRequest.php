<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PagedJournalEntriesRequest implements RequestInterface
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
    private $accountRef;

    /**
     * @var string
     */
    private $baseQuery;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var int
     */
    private $types;

    /**
     * Constructor
     *
     * @var bool $clearCache
     * @var int $count
     * @var int $start
     * @var string $accountRef
     * @var string $baseQuery
     * @var \DateTimeInterface $endDate
     * @var \DateTimeInterface $startDate
     * @var int $types
     */
    public function __construct($clearCache, $count, $start, $accountRef, $baseQuery, $endDate, $startDate, $types)
    {
        $this->clearCache = $clearCache;
        $this->count = $count;
        $this->start = $start;
        $this->accountRef = $accountRef;
        $this->baseQuery = $baseQuery;
        $this->endDate = $endDate;
        $this->startDate = $startDate;
        $this->types = $types;
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
     * @return PagedJournalEntriesRequest
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
     * @return PagedJournalEntriesRequest
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
     * @return PagedJournalEntriesRequest
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
    public function getAccountRef()
    {
        return $this->accountRef;
    }

    /**
     * @param string $accountRef
     * @return PagedJournalEntriesRequest
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getBaseQuery()
    {
        return $this->baseQuery;
    }

    /**
     * @param string $baseQuery
     * @return PagedJournalEntriesRequest
     */
    public function withBaseQuery($baseQuery)
    {
        $new = clone $this;
        $new->baseQuery = $baseQuery;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return PagedJournalEntriesRequest
     */
    public function withEndDate($endDate)
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return PagedJournalEntriesRequest
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param int $types
     * @return PagedJournalEntriesRequest
     */
    public function withTypes($types)
    {
        $new = clone $this;
        $new->types = $types;

        return $new;
    }


}

