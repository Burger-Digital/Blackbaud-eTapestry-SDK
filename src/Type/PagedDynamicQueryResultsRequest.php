<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PagedDynamicQueryResultsRequest implements RequestInterface
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
    private $applicationGroup;

    /**
     * @var string
     */
    private $baseQuery;

    /**
     * @var bool
     */
    private $involvePrivacySettings;

    /**
     * @var bool
     */
    private $matchAny;

    /**
     * @var string
     */
    private $personaOption;

    /**
     * @var int
     */
    private $returnType;

    /**
     * @var \BurgerDigital\eTapestry\Type\SearchCriteria
     */
    private $searchCriteria;

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
     * @var string $applicationGroup
     * @var string $baseQuery
     * @var bool $involvePrivacySettings
     * @var bool $matchAny
     * @var string $personaOption
     * @var int $returnType
     * @var \BurgerDigital\eTapestry\Type\SearchCriteria $searchCriteria
     * @var \BurgerDigital\eTapestry\Type\SortOption $sortOptions
     */
    public function __construct($clearCache, $count, $start, $accountType, $applicationGroup, $baseQuery, $involvePrivacySettings, $matchAny, $personaOption, $returnType, $searchCriteria, $sortOptions)
    {
        $this->clearCache = $clearCache;
        $this->count = $count;
        $this->start = $start;
        $this->accountType = $accountType;
        $this->applicationGroup = $applicationGroup;
        $this->baseQuery = $baseQuery;
        $this->involvePrivacySettings = $involvePrivacySettings;
        $this->matchAny = $matchAny;
        $this->personaOption = $personaOption;
        $this->returnType = $returnType;
        $this->searchCriteria = $searchCriteria;
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
     * @return PagedDynamicQueryResultsRequest
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
     * @return PagedDynamicQueryResultsRequest
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
     * @return PagedDynamicQueryResultsRequest
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
     * @return PagedDynamicQueryResultsRequest
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
    public function getApplicationGroup()
    {
        return $this->applicationGroup;
    }

    /**
     * @param string $applicationGroup
     * @return PagedDynamicQueryResultsRequest
     */
    public function withApplicationGroup($applicationGroup)
    {
        $new = clone $this;
        $new->applicationGroup = $applicationGroup;

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
     * @return PagedDynamicQueryResultsRequest
     */
    public function withBaseQuery($baseQuery)
    {
        $new = clone $this;
        $new->baseQuery = $baseQuery;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInvolvePrivacySettings()
    {
        return $this->involvePrivacySettings;
    }

    /**
     * @param bool $involvePrivacySettings
     * @return PagedDynamicQueryResultsRequest
     */
    public function withInvolvePrivacySettings($involvePrivacySettings)
    {
        $new = clone $this;
        $new->involvePrivacySettings = $involvePrivacySettings;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMatchAny()
    {
        return $this->matchAny;
    }

    /**
     * @param bool $matchAny
     * @return PagedDynamicQueryResultsRequest
     */
    public function withMatchAny($matchAny)
    {
        $new = clone $this;
        $new->matchAny = $matchAny;

        return $new;
    }

    /**
     * @return string
     */
    public function getPersonaOption()
    {
        return $this->personaOption;
    }

    /**
     * @param string $personaOption
     * @return PagedDynamicQueryResultsRequest
     */
    public function withPersonaOption($personaOption)
    {
        $new = clone $this;
        $new->personaOption = $personaOption;

        return $new;
    }

    /**
     * @return int
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * @param int $returnType
     * @return PagedDynamicQueryResultsRequest
     */
    public function withReturnType($returnType)
    {
        $new = clone $this;
        $new->returnType = $returnType;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\SearchCriteria
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\SearchCriteria $searchCriteria
     * @return PagedDynamicQueryResultsRequest
     */
    public function withSearchCriteria($searchCriteria)
    {
        $new = clone $this;
        $new->searchCriteria = $searchCriteria;

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
     * @return PagedDynamicQueryResultsRequest
     */
    public function withSortOptions($sortOptions)
    {
        $new = clone $this;
        $new->sortOptions = $sortOptions;

        return $new;
    }


}

