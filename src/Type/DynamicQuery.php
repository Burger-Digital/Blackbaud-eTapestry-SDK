<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DynamicQuery implements RequestInterface
{

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
     * @var \BurgerDigital\Type\SearchCriteria
     */
    private $searchCriteria;

    /**
     * Constructor
     *
     * @var int $accountType
     * @var string $applicationGroup
     * @var string $baseQuery
     * @var bool $involvePrivacySettings
     * @var bool $matchAny
     * @var string $personaOption
     * @var int $returnType
     * @var \BurgerDigital\eTapestry\Type\SearchCriteria $searchCriteria
     */
    public function __construct($accountType, $applicationGroup, $baseQuery, $involvePrivacySettings, $matchAny, $personaOption, $returnType, $searchCriteria)
    {
        $this->accountType = $accountType;
        $this->applicationGroup = $applicationGroup;
        $this->baseQuery = $baseQuery;
        $this->involvePrivacySettings = $involvePrivacySettings;
        $this->matchAny = $matchAny;
        $this->personaOption = $personaOption;
        $this->returnType = $returnType;
        $this->searchCriteria = $searchCriteria;
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
     * @return DynamicQuery
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
     * @return DynamicQuery
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
     * @return DynamicQuery
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
     * @return DynamicQuery
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
     * @return DynamicQuery
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
     * @return DynamicQuery
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
     * @return DynamicQuery
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
     * @return DynamicQuery
     */
    public function withSearchCriteria($searchCriteria)
    {
        $new = clone $this;
        $new->searchCriteria = $searchCriteria;

        return $new;
    }


}

