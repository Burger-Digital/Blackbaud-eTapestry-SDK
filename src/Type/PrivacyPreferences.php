<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\ResultInterface;

class PrivacyPreferences implements ResultInterface
{

    /**
     * @var \BurgerDigital\Type\PrivacyPreference
     */
    private $accountPrivacyPreference;

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var \BurgerDigital\Type\PrivacyPreference
     */
    private $personaPrivacyPreferences;

    /**
     * @return \BurgerDigital\eTapestry\Type\PrivacyPreference
     */
    public function getAccountPrivacyPreference()
    {
        return $this->accountPrivacyPreference;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\PrivacyPreference $accountPrivacyPreference
     * @return PrivacyPreferences
     */
    public function withAccountPrivacyPreference($accountPrivacyPreference)
    {
        $new = clone $this;
        $new->accountPrivacyPreference = $accountPrivacyPreference;

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
     * @return PrivacyPreferences
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\PrivacyPreference
     */
    public function getPersonaPrivacyPreferences()
    {
        return $this->personaPrivacyPreferences;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\PrivacyPreference $personaPrivacyPreferences
     * @return PrivacyPreferences
     */
    public function withPersonaPrivacyPreferences($personaPrivacyPreferences)
    {
        $new = clone $this;
        $new->personaPrivacyPreferences = $personaPrivacyPreferences;

        return $new;
    }


}

