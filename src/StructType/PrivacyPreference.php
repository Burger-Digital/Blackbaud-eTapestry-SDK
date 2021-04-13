<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrivacyPreference StructType
 * @subpackage Structs
 */
class PrivacyPreference extends AbstractStructBase
{
    /**
     * The accountDefined
     * @var bool|null
     */
    protected ?bool $accountDefined = null;
    /**
     * The applicationGroup
     * @var string|null
     */
    protected ?string $applicationGroup = null;
    /**
     * The hiddenFields
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $hiddenFields = [];
    /**
     * The personaType
     * @var string|null
     */
    protected ?string $personaType = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * Constructor method for PrivacyPreference
     * @uses PrivacyPreference::setAccountDefined()
     * @uses PrivacyPreference::setApplicationGroup()
     * @uses PrivacyPreference::setHiddenFields()
     * @uses PrivacyPreference::setPersonaType()
     * @uses PrivacyPreference::setStatus()
     * @param bool $accountDefined
     * @param string $applicationGroup
     * @param string[] $hiddenFields
     * @param string $personaType
     * @param int $status
     */
    public function __construct(?bool $accountDefined = null, ?string $applicationGroup = null, array $hiddenFields = [], ?string $personaType = null, ?int $status = null)
    {
        $this
            ->setAccountDefined($accountDefined)
            ->setApplicationGroup($applicationGroup)
            ->setHiddenFields($hiddenFields)
            ->setPersonaType($personaType)
            ->setStatus($status);
    }
    /**
     * Get accountDefined value
     * @return bool|null
     */
    public function getAccountDefined(): ?bool
    {
        return $this->accountDefined;
    }
    /**
     * Set accountDefined value
     * @param bool $accountDefined
     * @return \StructType\PrivacyPreference
     */
    public function setAccountDefined(?bool $accountDefined = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accountDefined) && !is_bool($accountDefined)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accountDefined, true), gettype($accountDefined)), __LINE__);
        }
        $this->accountDefined = $accountDefined;
        
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
     * @return \StructType\PrivacyPreference
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
     * Get hiddenFields value
     * @return string[]
     */
    public function getHiddenFields(): array
    {
        return $this->hiddenFields;
    }
    /**
     * This method is responsible for validating the values passed to the setHiddenFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHiddenFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHiddenFieldsForArrayConstraintsFromSetHiddenFields(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $privacyPreferenceHiddenFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($privacyPreferenceHiddenFieldsItem)) {
                $invalidValues[] = is_object($privacyPreferenceHiddenFieldsItem) ? get_class($privacyPreferenceHiddenFieldsItem) : sprintf('%s(%s)', gettype($privacyPreferenceHiddenFieldsItem), var_export($privacyPreferenceHiddenFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The hiddenFields property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set hiddenFields value
     * @throws InvalidArgumentException
     * @param string[] $hiddenFields
     * @return \StructType\PrivacyPreference
     */
    public function setHiddenFields(array $hiddenFields = []): self
    {
        // validation for constraint: array
        if ('' !== ($hiddenFieldsArrayErrorMessage = self::validateHiddenFieldsForArrayConstraintsFromSetHiddenFields($hiddenFields))) {
            throw new InvalidArgumentException($hiddenFieldsArrayErrorMessage, __LINE__);
        }
        $this->hiddenFields = $hiddenFields;
        
        return $this;
    }
    /**
     * Add item to hiddenFields value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\PrivacyPreference
     */
    public function addToHiddenFields(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The hiddenFields property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->hiddenFields[] = $item;
        
        return $this;
    }
    /**
     * Get personaType value
     * @return string|null
     */
    public function getPersonaType(): ?string
    {
        return $this->personaType;
    }
    /**
     * Set personaType value
     * @param string $personaType
     * @return \StructType\PrivacyPreference
     */
    public function setPersonaType(?string $personaType = null): self
    {
        // validation for constraint: string
        if (!is_null($personaType) && !is_string($personaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaType, true), gettype($personaType)), __LINE__);
        }
        $this->personaType = $personaType;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \StructType\PrivacyPreference
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
