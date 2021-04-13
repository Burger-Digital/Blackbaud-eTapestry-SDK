<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Persona StructType
 * @subpackage Structs
 */
class Persona extends AbstractStructBase
{
    /**
     * The address
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The county
     * @var string|null
     */
    protected ?string $county = null;
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The definedValues
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\DefinedValue[]
     */
    protected array $definedValues = [];
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The longSalutation
     * @var string|null
     */
    protected ?string $longSalutation = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The phones
     * Meta information extracted from the WSDL
     * - arrayType: tns:Phone[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Phone[]
     */
    protected array $phones = [];
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The primary
     * @var bool|null
     */
    protected ?bool $primary = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The shortSalutation
     * @var string|null
     */
    protected ?string $shortSalutation = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The stickyNoteType
     * @var string|null
     */
    protected ?string $stickyNoteType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The webAddress
     * @var string|null
     */
    protected ?string $webAddress = null;
    /**
     * Constructor method for Persona
     * @uses Persona::setAddress()
     * @uses Persona::setCity()
     * @uses Persona::setCountry()
     * @uses Persona::setCounty()
     * @uses Persona::setCreatedDate()
     * @uses Persona::setDefinedValues()
     * @uses Persona::setEmail()
     * @uses Persona::setLastModifiedDate()
     * @uses Persona::setLongSalutation()
     * @uses Persona::setNote()
     * @uses Persona::setPhones()
     * @uses Persona::setPostalCode()
     * @uses Persona::setPrimary()
     * @uses Persona::setRef()
     * @uses Persona::setShortSalutation()
     * @uses Persona::setState()
     * @uses Persona::setStickyNoteType()
     * @uses Persona::setType()
     * @uses Persona::setWebAddress()
     * @param string $address
     * @param string $city
     * @param string $country
     * @param string $county
     * @param string $createdDate
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $definedValues
     * @param string $email
     * @param string $lastModifiedDate
     * @param string $longSalutation
     * @param string $note
     * @param \BurgerDigital\eTapestry\StructType\Phone[] $phones
     * @param string $postalCode
     * @param bool $primary
     * @param string $ref
     * @param string $shortSalutation
     * @param string $state
     * @param string $stickyNoteType
     * @param string $type
     * @param string $webAddress
     */
    public function __construct(?string $address = null, ?string $city = null, ?string $country = null, ?string $county = null, ?string $createdDate = null, array $definedValues = [], ?string $email = null, ?string $lastModifiedDate = null, ?string $longSalutation = null, ?string $note = null, array $phones = [], ?string $postalCode = null, ?bool $primary = null, ?string $ref = null, ?string $shortSalutation = null, ?string $state = null, ?string $stickyNoteType = null, ?string $type = null, ?string $webAddress = null)
    {
        $this
            ->setAddress($address)
            ->setCity($city)
            ->setCountry($country)
            ->setCounty($county)
            ->setCreatedDate($createdDate)
            ->setDefinedValues($definedValues)
            ->setEmail($email)
            ->setLastModifiedDate($lastModifiedDate)
            ->setLongSalutation($longSalutation)
            ->setNote($note)
            ->setPhones($phones)
            ->setPostalCode($postalCode)
            ->setPrimary($primary)
            ->setRef($ref)
            ->setShortSalutation($shortSalutation)
            ->setState($state)
            ->setStickyNoteType($stickyNoteType)
            ->setType($type)
            ->setWebAddress($webAddress);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get county value
     * @return string|null
     */
    public function getCounty(): ?string
    {
        return $this->county;
    }
    /**
     * Set county value
     * @param string $county
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setCounty(?string $county = null): self
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($county, true), gettype($county)), __LINE__);
        }
        $this->county = $county;
        
        return $this;
    }
    /**
     * Get createdDate value
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param string $createdDate
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->createdDate = $createdDate;
        
        return $this;
    }
    /**
     * Get definedValues value
     * @return \BurgerDigital\eTapestry\StructType\DefinedValue[]
     */
    public function getDefinedValues(): array
    {
        return $this->definedValues;
    }
    /**
     * This method is responsible for validating the values passed to the setDefinedValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDefinedValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDefinedValuesForArrayConstraintsFromSetDefinedValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $personaDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$personaDefinedValuesItem instanceof \BurgerDigital\eTapestry\StructType\DefinedValue) {
                $invalidValues[] = is_object($personaDefinedValuesItem) ? get_class($personaDefinedValuesItem) : sprintf('%s(%s)', gettype($personaDefinedValuesItem), var_export($personaDefinedValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The definedValues property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set definedValues value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $definedValues
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setDefinedValues(array $definedValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($definedValuesArrayErrorMessage = self::validateDefinedValuesForArrayConstraintsFromSetDefinedValues($definedValues))) {
            throw new InvalidArgumentException($definedValuesArrayErrorMessage, __LINE__);
        }
        $this->definedValues = $definedValues;
        
        return $this;
    }
    /**
     * Add item to definedValues value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue $item
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function addToDefinedValues(\StructType\DefinedValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\DefinedValue) {
            throw new InvalidArgumentException(sprintf('The definedValues property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->definedValues[] = $item;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get lastModifiedDate value
     * @return string|null
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->lastModifiedDate;
    }
    /**
     * Set lastModifiedDate value
     * @param string $lastModifiedDate
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setLastModifiedDate(?string $lastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedDate, true), gettype($lastModifiedDate)), __LINE__);
        }
        $this->lastModifiedDate = $lastModifiedDate;
        
        return $this;
    }
    /**
     * Get longSalutation value
     * @return string|null
     */
    public function getLongSalutation(): ?string
    {
        return $this->longSalutation;
    }
    /**
     * Set longSalutation value
     * @param string $longSalutation
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setLongSalutation(?string $longSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($longSalutation) && !is_string($longSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longSalutation, true), gettype($longSalutation)), __LINE__);
        }
        $this->longSalutation = $longSalutation;
        
        return $this;
    }
    /**
     * Get note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
    /**
     * Get phones value
     * @return \BurgerDigital\eTapestry\StructType\Phone[]
     */
    public function getPhones(): array
    {
        return $this->phones;
    }
    /**
     * This method is responsible for validating the values passed to the setPhones method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhones method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhonesForArrayConstraintsFromSetPhones(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $personaPhonesItem) {
            // validation for constraint: itemType
            if (!$personaPhonesItem instanceof \BurgerDigital\eTapestry\StructType\Phone) {
                $invalidValues[] = is_object($personaPhonesItem) ? get_class($personaPhonesItem) : sprintf('%s(%s)', gettype($personaPhonesItem), var_export($personaPhonesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The phones property can only contain items of type \BurgerDigital\eTapestry\StructType\Phone, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set phones value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Phone[] $phones
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setPhones(array $phones = []): self
    {
        // validation for constraint: array
        if ('' !== ($phonesArrayErrorMessage = self::validatePhonesForArrayConstraintsFromSetPhones($phones))) {
            throw new InvalidArgumentException($phonesArrayErrorMessage, __LINE__);
        }
        $this->phones = $phones;
        
        return $this;
    }
    /**
     * Add item to phones value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Phone $item
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function addToPhones(\StructType\Phone $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Phone) {
            throw new InvalidArgumentException(sprintf('The phones property can only contain items of type \BurgerDigital\eTapestry\StructType\Phone, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->phones[] = $item;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get primary value
     * @return bool|null
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }
    /**
     * Set primary value
     * @param bool $primary
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setPrimary(?bool $primary = null): self
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primary, true), gettype($primary)), __LINE__);
        }
        $this->primary = $primary;
        
        return $this;
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
    /**
     * Get shortSalutation value
     * @return string|null
     */
    public function getShortSalutation(): ?string
    {
        return $this->shortSalutation;
    }
    /**
     * Set shortSalutation value
     * @param string $shortSalutation
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setShortSalutation(?string $shortSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($shortSalutation) && !is_string($shortSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortSalutation, true), gettype($shortSalutation)), __LINE__);
        }
        $this->shortSalutation = $shortSalutation;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get stickyNoteType value
     * @return string|null
     */
    public function getStickyNoteType(): ?string
    {
        return $this->stickyNoteType;
    }
    /**
     * Set stickyNoteType value
     * @param string $stickyNoteType
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setStickyNoteType(?string $stickyNoteType = null): self
    {
        // validation for constraint: string
        if (!is_null($stickyNoteType) && !is_string($stickyNoteType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stickyNoteType, true), gettype($stickyNoteType)), __LINE__);
        }
        $this->stickyNoteType = $stickyNoteType;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get webAddress value
     * @return string|null
     */
    public function getWebAddress(): ?string
    {
        return $this->webAddress;
    }
    /**
     * Set webAddress value
     * @param string $webAddress
     * @return \BurgerDigital\eTapestry\StructType\Persona
     */
    public function setWebAddress(?string $webAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($webAddress) && !is_string($webAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webAddress, true), gettype($webAddress)), __LINE__);
        }
        $this->webAddress = $webAddress;
        
        return $this;
    }
}
