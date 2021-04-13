<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DynamicQuery StructType
 * @subpackage Structs
 */
class DynamicQuery extends AbstractStructBase
{
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
     * Constructor method for DynamicQuery
     * @uses DynamicQuery::setAccountType()
     * @uses DynamicQuery::setApplicationGroup()
     * @uses DynamicQuery::setBaseQuery()
     * @uses DynamicQuery::setInvolvePrivacySettings()
     * @uses DynamicQuery::setMatchAny()
     * @uses DynamicQuery::setPersonaOption()
     * @uses DynamicQuery::setReturnType()
     * @uses DynamicQuery::setSearchCriteria()
     * @param int $accountType
     * @param string $applicationGroup
     * @param string $baseQuery
     * @param bool $involvePrivacySettings
     * @param bool $matchAny
     * @param string $personaOption
     * @param int $returnType
     * @param \BurgerDigital\eTapestry\StructType\SearchCriteria[] $searchCriteria
     */
    public function __construct(?int $accountType = null, ?string $applicationGroup = null, ?string $baseQuery = null, ?bool $involvePrivacySettings = null, ?bool $matchAny = null, ?string $personaOption = null, ?int $returnType = null, array $searchCriteria = [])
    {
        $this
            ->setAccountType($accountType)
            ->setApplicationGroup($applicationGroup)
            ->setBaseQuery($baseQuery)
            ->setInvolvePrivacySettings($involvePrivacySettings)
            ->setMatchAny($matchAny)
            ->setPersonaOption($personaOption)
            ->setReturnType($returnType)
            ->setSearchCriteria($searchCriteria);
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
        foreach ($values as $dynamicQuerySearchCriteriaItem) {
            // validation for constraint: itemType
            if (!$dynamicQuerySearchCriteriaItem instanceof \BurgerDigital\eTapestry\StructType\SearchCriteria) {
                $invalidValues[] = is_object($dynamicQuerySearchCriteriaItem) ? get_class($dynamicQuerySearchCriteriaItem) : sprintf('%s(%s)', gettype($dynamicQuerySearchCriteriaItem), var_export($dynamicQuerySearchCriteriaItem, true));
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
     * @return \BurgerDigital\eTapestry\StructType\DynamicQuery
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
}
