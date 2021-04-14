<?php

namespace BurgerDigital\eTapestry\Type;

class PrivacyPreference
{

    /**
     * @var bool
     */
    private $accountDefined;

    /**
     * @var string
     */
    private $applicationGroup;

    /**
     * @var string
     */
    private $hiddenFields;

    /**
     * @var string
     */
    private $personaType;

    /**
     * @var int
     */
    private $status;

    /**
     * @return bool
     */
    public function getAccountDefined()
    {
        return $this->accountDefined;
    }

    /**
     * @param bool $accountDefined
     * @return PrivacyPreference
     */
    public function withAccountDefined($accountDefined)
    {
        $new = clone $this;
        $new->accountDefined = $accountDefined;

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
     * @return PrivacyPreference
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
    public function getHiddenFields()
    {
        return $this->hiddenFields;
    }

    /**
     * @param string $hiddenFields
     * @return PrivacyPreference
     */
    public function withHiddenFields($hiddenFields)
    {
        $new = clone $this;
        $new->hiddenFields = $hiddenFields;

        return $new;
    }

    /**
     * @return string
     */
    public function getPersonaType()
    {
        return $this->personaType;
    }

    /**
     * @param string $personaType
     * @return PrivacyPreference
     */
    public function withPersonaType($personaType)
    {
        $new = clone $this;
        $new->personaType = $personaType;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return PrivacyPreference
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

