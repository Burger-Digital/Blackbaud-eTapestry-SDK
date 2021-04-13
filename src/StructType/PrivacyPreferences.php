<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrivacyPreferences StructType
 * @subpackage Structs
 */
class PrivacyPreferences extends AbstractStructBase
{
    /**
     * The accountPrivacyPreference
     * @var \BurgerDigital\eTapestry\StructType\PrivacyPreference|null
     */
    protected ?\StructType\PrivacyPreference $accountPrivacyPreference = null;
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The personaPrivacyPreferences
     * Meta information extracted from the WSDL
     * - arrayType: tns:PrivacyPreference[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\PrivacyPreference[]
     */
    protected array $personaPrivacyPreferences = [];
    /**
     * Constructor method for PrivacyPreferences
     * @uses PrivacyPreferences::setAccountPrivacyPreference()
     * @uses PrivacyPreferences::setAccountRef()
     * @uses PrivacyPreferences::setPersonaPrivacyPreferences()
     * @param \BurgerDigital\eTapestry\StructType\PrivacyPreference $accountPrivacyPreference
     * @param string $accountRef
     * @param \BurgerDigital\eTapestry\StructType\PrivacyPreference[] $personaPrivacyPreferences
     */
    public function __construct(?\StructType\PrivacyPreference $accountPrivacyPreference = null, ?string $accountRef = null, array $personaPrivacyPreferences = [])
    {
        $this
            ->setAccountPrivacyPreference($accountPrivacyPreference)
            ->setAccountRef($accountRef)
            ->setPersonaPrivacyPreferences($personaPrivacyPreferences);
    }
    /**
     * Get accountPrivacyPreference value
     * @return \BurgerDigital\eTapestry\StructType\PrivacyPreference|null
     */
    public function getAccountPrivacyPreference(): ?\StructType\PrivacyPreference
    {
        return $this->accountPrivacyPreference;
    }
    /**
     * Set accountPrivacyPreference value
     * @param \BurgerDigital\eTapestry\StructType\PrivacyPreference $accountPrivacyPreference
     * @return \BurgerDigital\eTapestry\StructType\PrivacyPreferences
     */
    public function setAccountPrivacyPreference(?\StructType\PrivacyPreference $accountPrivacyPreference = null): self
    {
        $this->accountPrivacyPreference = $accountPrivacyPreference;
        
        return $this;
    }
    /**
     * Get accountRef value
     * @return string|null
     */
    public function getAccountRef(): ?string
    {
        return $this->accountRef;
    }
    /**
     * Set accountRef value
     * @param string $accountRef
     * @return \BurgerDigital\eTapestry\StructType\PrivacyPreferences
     */
    public function setAccountRef(?string $accountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRef) && !is_string($accountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRef, true), gettype($accountRef)), __LINE__);
        }
        $this->accountRef = $accountRef;
        
        return $this;
    }
    /**
     * Get personaPrivacyPreferences value
     * @return \BurgerDigital\eTapestry\StructType\PrivacyPreference[]
     */
    public function getPersonaPrivacyPreferences(): array
    {
        return $this->personaPrivacyPreferences;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonaPrivacyPreferences method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonaPrivacyPreferences method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonaPrivacyPreferencesForArrayConstraintsFromSetPersonaPrivacyPreferences(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $privacyPreferencesPersonaPrivacyPreferencesItem) {
            // validation for constraint: itemType
            if (!$privacyPreferencesPersonaPrivacyPreferencesItem instanceof \BurgerDigital\eTapestry\StructType\PrivacyPreference) {
                $invalidValues[] = is_object($privacyPreferencesPersonaPrivacyPreferencesItem) ? get_class($privacyPreferencesPersonaPrivacyPreferencesItem) : sprintf('%s(%s)', gettype($privacyPreferencesPersonaPrivacyPreferencesItem), var_export($privacyPreferencesPersonaPrivacyPreferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personaPrivacyPreferences property can only contain items of type \BurgerDigital\eTapestry\StructType\PrivacyPreference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personaPrivacyPreferences value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\PrivacyPreference[] $personaPrivacyPreferences
     * @return \BurgerDigital\eTapestry\StructType\PrivacyPreferences
     */
    public function setPersonaPrivacyPreferences(array $personaPrivacyPreferences = []): self
    {
        // validation for constraint: array
        if ('' !== ($personaPrivacyPreferencesArrayErrorMessage = self::validatePersonaPrivacyPreferencesForArrayConstraintsFromSetPersonaPrivacyPreferences($personaPrivacyPreferences))) {
            throw new InvalidArgumentException($personaPrivacyPreferencesArrayErrorMessage, __LINE__);
        }
        $this->personaPrivacyPreferences = $personaPrivacyPreferences;
        
        return $this;
    }
    /**
     * Add item to personaPrivacyPreferences value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\PrivacyPreference $item
     * @return \BurgerDigital\eTapestry\StructType\PrivacyPreferences
     */
    public function addToPersonaPrivacyPreferences(\StructType\PrivacyPreference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\PrivacyPreference) {
            throw new InvalidArgumentException(sprintf('The personaPrivacyPreferences property can only contain items of type \BurgerDigital\eTapestry\StructType\PrivacyPreference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personaPrivacyPreferences[] = $item;
        
        return $this;
    }
}
