<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PagedQueryResultsResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $count;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var int
     */
    private $pages;

    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $total;

    /**
     * @var bool
     */
    private $usedCache;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return PagedQueryResultsResponse
     */
    public function withCount($count)
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return PagedQueryResultsResponse
     */
    public function withData($data)
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }

    /**
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     * @return PagedQueryResultsResponse
     */
    public function withPages($pages)
    {
        $new = clone $this;
        $new->pages = $pages;

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
     * @return PagedQueryResultsResponse
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
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return PagedQueryResultsResponse
     */
    public function withTotal($total)
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUsedCache()
    {
        return $this->usedCache;
    }

    /**
     * @param bool $usedCache
     * @return PagedQueryResultsResponse
     */
    public function withUsedCache($usedCache)
    {
        $new = clone $this;
        $new->usedCache = $usedCache;

        return $new;
    }


}

