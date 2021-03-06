<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PagedDefinedFieldsRequest implements RequestInterface
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
    private $applicationTypes;

    /**
     * @var string
     */
    private $categories;

    /**
     * @var bool
     */
    private $includeDisabledFields;

    /**
     * @var bool
     */
    private $includeDisabledValues;

    /**
     * @var string
     */
    private $names;

    /**
     * Constructor
     *
     * @var bool $clearCache
     * @var int $count
     * @var int $start
     * @var int $applicationTypes
     * @var string $categories
     * @var bool $includeDisabledFields
     * @var bool $includeDisabledValues
     * @var string $names
     */
    public function __construct($clearCache, $count, $start, $applicationTypes, $categories, $includeDisabledFields, $includeDisabledValues, $names)
    {
        $this->clearCache = $clearCache;
        $this->count = $count;
        $this->start = $start;
        $this->applicationTypes = $applicationTypes;
        $this->categories = $categories;
        $this->includeDisabledFields = $includeDisabledFields;
        $this->includeDisabledValues = $includeDisabledValues;
        $this->names = $names;
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
     * @return PagedDefinedFieldsRequest
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
     * @return PagedDefinedFieldsRequest
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
     * @return PagedDefinedFieldsRequest
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
    public function getApplicationTypes()
    {
        return $this->applicationTypes;
    }

    /**
     * @param int $applicationTypes
     * @return PagedDefinedFieldsRequest
     */
    public function withApplicationTypes($applicationTypes)
    {
        $new = clone $this;
        $new->applicationTypes = $applicationTypes;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param string $categories
     * @return PagedDefinedFieldsRequest
     */
    public function withCategories($categories)
    {
        $new = clone $this;
        $new->categories = $categories;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeDisabledFields()
    {
        return $this->includeDisabledFields;
    }

    /**
     * @param bool $includeDisabledFields
     * @return PagedDefinedFieldsRequest
     */
    public function withIncludeDisabledFields($includeDisabledFields)
    {
        $new = clone $this;
        $new->includeDisabledFields = $includeDisabledFields;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeDisabledValues()
    {
        return $this->includeDisabledValues;
    }

    /**
     * @param bool $includeDisabledValues
     * @return PagedDefinedFieldsRequest
     */
    public function withIncludeDisabledValues($includeDisabledValues)
    {
        $new = clone $this;
        $new->includeDisabledValues = $includeDisabledValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param string $names
     * @return PagedDefinedFieldsRequest
     */
    public function withNames($names)
    {
        $new = clone $this;
        $new->names = $names;

        return $new;
    }


}

