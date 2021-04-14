<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class PagedRelationshipsRequest implements RequestInterface
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
    private $otherAccountRefs;

    /**
     * Constructor
     *
     * @var bool $clearCache
     * @var int $count
     * @var int $start
     * @var string $accountRef
     * @var string $otherAccountRefs
     */
    public function __construct($clearCache, $count, $start, $accountRef, $otherAccountRefs)
    {
        $this->clearCache = $clearCache;
        $this->count = $count;
        $this->start = $start;
        $this->accountRef = $accountRef;
        $this->otherAccountRefs = $otherAccountRefs;
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
     * @return PagedRelationshipsRequest
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
     * @return PagedRelationshipsRequest
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
     * @return PagedRelationshipsRequest
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
     * @return PagedRelationshipsRequest
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
    public function getOtherAccountRefs()
    {
        return $this->otherAccountRefs;
    }

    /**
     * @param string $otherAccountRefs
     * @return PagedRelationshipsRequest
     */
    public function withOtherAccountRefs($otherAccountRefs)
    {
        $new = clone $this;
        $new->otherAccountRefs = $otherAccountRefs;

        return $new;
    }


}

