<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagedDynamicQueryResultsRequest StructType
 * @subpackage Structs
 */
class PagedDynamicQueryResultsRequest extends AbstractStructBase
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
     * The accountType
     * @var int|null
     */
    protected ?int $accountType = null;
    /**
     * The applicationGroup
     * @var string|null
     */
    protected ?string $applicationGroup = null;
    /**
     * The baseQuery
     * @var string|null
     */
    protected ?string $baseQuery = null;
    /**
     * The involvePrivacySettings
     * @var bool|null
     */
    protected ?bool $involvePrivacySettings = null;
    /**
     * The matchAny
     * @var bool|null
     */
    protected ?bool $matchAny = null;
    /**
     * The personaOption
     * @var string|null
     */
    protected ?string $personaOption = null;
    /**
     * The returnType
     * @var int|null
     */
    protected ?int $returnType = null;
    /**
     * The searchCriteria
     * Meta information extracted from the WSDL
     * - arrayType: tns:SearchCriteria[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\SearchCriteria[]
     */
    protected array $searchCriteria = [];
    /**
     * The sortOptions
     * Meta information extracted from the WSDL
     * - arrayType: tns:SortOption[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\SortOption[]
     */
    protected array $sortOptions = [];
    /**
     * Constructor method for PagedDynamicQueryResultsRequest
     * @uses PagedDynamicQueryResultsRequest::setClearCache()
     * @uses PagedDynamicQueryResultsRequest::setCount()
     * @uses PagedDynamicQueryResultsRequest::setStart()
     * @uses PagedDynamicQueryResultsRequest::setAccountType()
     * @uses PagedDynamicQueryResultsRequest::setApplicationGroup()
     * @uses PagedDynamicQueryResultsRequest::setBaseQuery()
     * @uses PagedDynamicQueryResultsRequest::setInvolvePrivacySettings()
     * @uses PagedDynamicQueryResultsRequest::setMatchAny()
     * @uses PagedDynamicQueryResultsRequest::setPersonaOption()
     * @uses PagedDynamicQueryResultsRequest::setReturnType()
     * @uses PagedDynamicQueryResultsRequest::setSearchCriteria()
     * @uses PagedDynamicQueryResultsRequest::setSortOptions()
     * @param bool $clearCache
     * @param int $count
     * @param int $start
     * @param int $accountType
     * @param string $applicationGroup
     * @param string $baseQuery
     * @param bool $involvePrivacySettings
     * @param bool $matchAny
     * @param string $personaOption
     * @param int $returnType
     * @param \BurgerDigital\eTapestry\StructType\SearchCriteria[] $searchCriteria
     * @param \BurgerDigital\eTapestry\StructType\SortOption[] $sortOptions
     */
    public function __construct(?bool $clearCache = null, ?int $count = null, ?int $start = null, ?int $accountType = null, ?string $applicationGroup = null, ?string $baseQuery = null, ?bool $involvePrivacySettings = null, ?bool $matchAny = null, ?string $personaOption = null, ?int $returnType = null, array $searchCriteria = [], array $sortOptions = [])
    {
        $this
            ->setClearCache($clearCache)
            ->setCount($count)
            ->setStart($start)
            ->setAccountType($accountType)
            ->setApplicationGroup($applicationGroup)
            ->setBaseQuery($baseQuery)
            ->setInvolvePrivacySettings($involvePrivacySettings)
            ->setMatchAny($matchAny)
            ->setPersonaOption($personaOption)
            ->setReturnType($returnType)
            ->setSearchCriteria($searchCriteria)
            ->setSortOptions($sortOptions);
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
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
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
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
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
     * Get accountType value
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param int $accountType
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setAccountType(?int $accountType = null): self
    {
        // validation for constraint: int
        if (!is_null($accountType) && !(is_int($accountType) || ctype_digit($accountType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get applicationGroup value
     * @return string|null
     */
    public function getApplicationGroup(): ?string
    {
        return $this->applicationGroup;
    }
    /**
     * Set applicationGroup value
     * @param string $applicationGroup
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setApplicationGroup(?string $applicationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationGroup) && !is_string($applicationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationGroup, true), gettype($applicationGroup)), __LINE__);
        }
        $this->applicationGroup = $applicationGroup;
        
        return $this;
    }
    /**
     * Get baseQuery value
     * @return string|null
     */
    public function getBaseQuery(): ?string
    {
        return $this->baseQuery;
    }
    /**
     * Set baseQuery value
     * @param string $baseQuery
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setBaseQuery(?string $baseQuery = null): self
    {
        // validation for constraint: string
        if (!is_null($baseQuery) && !is_string($baseQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseQuery, true), gettype($baseQuery)), __LINE__);
        }
        $this->baseQuery = $baseQuery;
        
        return $this;
    }
    /**
     * Get involvePrivacySettings value
     * @return bool|null
     */
    public function getInvolvePrivacySettings(): ?bool
    {
        return $this->involvePrivacySettings;
    }
    /**
     * Set involvePrivacySettings value
     * @param bool $involvePrivacySettings
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setInvolvePrivacySettings(?bool $involvePrivacySettings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($involvePrivacySettings) && !is_bool($involvePrivacySettings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($involvePrivacySettings, true), gettype($involvePrivacySettings)), __LINE__);
        }
        $this->involvePrivacySettings = $involvePrivacySettings;
        
        return $this;
    }
    /**
     * Get matchAny value
     * @return bool|null
     */
    public function getMatchAny(): ?bool
    {
        return $this->matchAny;
    }
    /**
     * Set matchAny value
     * @param bool $matchAny
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setMatchAny(?bool $matchAny = null): self
    {
        // validation for constraint: boolean
        if (!is_null($matchAny) && !is_bool($matchAny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($matchAny, true), gettype($matchAny)), __LINE__);
        }
        $this->matchAny = $matchAny;
        
        return $this;
    }
    /**
     * Get personaOption value
     * @return string|null
     */
    public function getPersonaOption(): ?string
    {
        return $this->personaOption;
    }
    /**
     * Set personaOption value
     * @param string $personaOption
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setPersonaOption(?string $personaOption = null): self
    {
        // validation for constraint: string
        if (!is_null($personaOption) && !is_string($personaOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaOption, true), gettype($personaOption)), __LINE__);
        }
        $this->personaOption = $personaOption;
        
        return $this;
    }
    /**
     * Get returnType value
     * @return int|null
     */
    public function getReturnType(): ?int
    {
        return $this->returnType;
    }
    /**
     * Set returnType value
     * @param int $returnType
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setReturnType(?int $returnType = null): self
    {
        // validation for constraint: int
        if (!is_null($returnType) && !(is_int($returnType) || ctype_digit($returnType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnType, true), gettype($returnType)), __LINE__);
        }
        $this->returnType = $returnType;
        
        return $this;
    }
    /**
     * Get searchCriteria value
     * @return \BurgerDigital\eTapestry\StructType\SearchCriteria[]
     */
    public function getSearchCriteria(): array
    {
        return $this->searchCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchCriteriaForArrayConstraintsFromSetSearchCriteria(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedDynamicQueryResultsRequestSearchCriteriaItem) {
            // validation for constraint: itemType
            if (!$pagedDynamicQueryResultsRequestSearchCriteriaItem instanceof \BurgerDigital\eTapestry\StructType\SearchCriteria) {
                $invalidValues[] = is_object($pagedDynamicQueryResultsRequestSearchCriteriaItem) ? get_class($pagedDynamicQueryResultsRequestSearchCriteriaItem) : sprintf('%s(%s)', gettype($pagedDynamicQueryResultsRequestSearchCriteriaItem), var_export($pagedDynamicQueryResultsRequestSearchCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchCriteria property can only contain items of type \BurgerDigital\eTapestry\StructType\SearchCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set searchCriteria value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\SearchCriteria[] $searchCriteria
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setSearchCriteria(array $searchCriteria = []): self
    {
        // validation for constraint: array
        if ('' !== ($searchCriteriaArrayErrorMessage = self::validateSearchCriteriaForArrayConstraintsFromSetSearchCriteria($searchCriteria))) {
            throw new InvalidArgumentException($searchCriteriaArrayErrorMessage, __LINE__);
        }
        $this->searchCriteria = $searchCriteria;
        
        return $this;
    }
    /**
     * Add item to searchCriteria value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\SearchCriteria $item
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function addToSearchCriteria(\StructType\SearchCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\SearchCriteria) {
            throw new InvalidArgumentException(sprintf('The searchCriteria property can only contain items of type \BurgerDigital\eTapestry\StructType\SearchCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get sortOptions value
     * @return \BurgerDigital\eTapestry\StructType\SortOption[]
     */
    public function getSortOptions(): array
    {
        return $this->sortOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setSortOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSortOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSortOptionsForArrayConstraintsFromSetSortOptions(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagedDynamicQueryResultsRequestSortOptionsItem) {
            // validation for constraint: itemType
            if (!$pagedDynamicQueryResultsRequestSortOptionsItem instanceof \BurgerDigital\eTapestry\StructType\SortOption) {
                $invalidValues[] = is_object($pagedDynamicQueryResultsRequestSortOptionsItem) ? get_class($pagedDynamicQueryResultsRequestSortOptionsItem) : sprintf('%s(%s)', gettype($pagedDynamicQueryResultsRequestSortOptionsItem), var_export($pagedDynamicQueryResultsRequestSortOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sortOptions property can only contain items of type \BurgerDigital\eTapestry\StructType\SortOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sortOptions value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\SortOption[] $sortOptions
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function setSortOptions(array $sortOptions = []): self
    {
        // validation for constraint: array
        if ('' !== ($sortOptionsArrayErrorMessage = self::validateSortOptionsForArrayConstraintsFromSetSortOptions($sortOptions))) {
            throw new InvalidArgumentException($sortOptionsArrayErrorMessage, __LINE__);
        }
        $this->sortOptions = $sortOptions;
        
        return $this;
    }
    /**
     * Add item to sortOptions value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\SortOption $item
     * @return \BurgerDigital\eTapestry\StructType\PagedDynamicQueryResultsRequest
     */
    public function addToSortOptions(\StructType\SortOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\SortOption) {
            throw new InvalidArgumentException(sprintf('The sortOptions property can only contain items of type \BurgerDigital\eTapestry\StructType\SortOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sortOptions[] = $item;
        
        return $this;
    }
}
