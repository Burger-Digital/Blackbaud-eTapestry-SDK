<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account StructType
 * @subpackage Structs
 */
class Account extends AbstractStructBase
{
    /**
     * The accountCreatedDate
     * @var string|null
     */
    protected ?string $accountCreatedDate = null;
    /**
     * The accountDefinedValues
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\DefinedValue[]
     */
    protected array $accountDefinedValues = [];
    /**
     * The accountLastModifiedDate
     * @var string|null
     */
    protected ?string $accountLastModifiedDate = null;
    /**
     * The accountRoleType
     * @var int|null
     */
    protected ?int $accountRoleType = null;
    /**
     * The address
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The apartmentNumber
     * @var string|null
     */
    protected ?string $apartmentNumber = null;
    /**
     * The buildingNumber
     * @var string|null
     */
    protected ?string $buildingNumber = null;
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
     * The donorRecognitionName
     * @var string|null
     */
    protected ?string $donorRecognitionName = null;
    /**
     * The donorRecognitionType
     * @var int|null
     */
    protected ?int $donorRecognitionType = null;
    /**
     * The donorRoleRef
     * @var string|null
     */
    protected ?string $donorRoleRef = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The envelopeSalutation
     * @var string|null
     */
    protected ?string $envelopeSalutation = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The initials
     * @var string|null
     */
    protected ?string $initials = null;
    /**
     * The lastName
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The longSalutation
     * @var string|null
     */
    protected ?string $longSalutation = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nameFormat
     * @var int|null
     */
    protected ?int $nameFormat = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The oldFormattedAddress
     * @var bool|null
     */
    protected ?bool $oldFormattedAddress = null;
    /**
     * The optOutDate
     * @var string|null
     */
    protected ?string $optOutDate = null;
    /**
     * The optedOut
     * @var bool|null
     */
    protected ?bool $optedOut = null;
    /**
     * The personaCreatedDate
     * @var string|null
     */
    protected ?string $personaCreatedDate = null;
    /**
     * The personaDefinedValues
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\DefinedValue[]
     */
    protected array $personaDefinedValues = [];
    /**
     * The personaLastModifiedDate
     * @var string|null
     */
    protected ?string $personaLastModifiedDate = null;
    /**
     * The personaType
     * @var string|null
     */
    protected ?string $personaType = null;
    /**
     * The personaTypes
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $personaTypes = [];
    /**
     * The phones
     * Meta information extracted from the WSDL
     * - arrayType: tns:Phone[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\Phone[]
     */
    protected array $phones = [];
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The primaryPersona
     * @var bool|null
     */
    protected ?bool $primaryPersona = null;
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
     * The socialMediaProfiles
     * Meta information extracted from the WSDL
     * - arrayType: tns:SocialMediaProfile[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\SocialMediaProfile[]
     */
    protected array $socialMediaProfiles = [];
    /**
     * The sortName
     * @var string|null
     */
    protected ?string $sortName = null;
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
     * The streetName
     * @var string|null
     */
    protected ?string $streetName = null;
    /**
     * The suburb
     * @var string|null
     */
    protected ?string $suburb = null;
    /**
     * The suffix
     * @var string|null
     */
    protected ?string $suffix = null;
    /**
     * The teamRoleRef
     * @var string|null
     */
    protected ?string $teamRoleRef = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The tributeRoleRef
     * @var string|null
     */
    protected ?string $tributeRoleRef = null;
    /**
     * The userRoleRef
     * @var string|null
     */
    protected ?string $userRoleRef = null;
    /**
     * The webAddress
     * @var string|null
     */
    protected ?string $webAddress = null;
    /**
     * Constructor method for Account
     * @uses Account::setAccountCreatedDate()
     * @uses Account::setAccountDefinedValues()
     * @uses Account::setAccountLastModifiedDate()
     * @uses Account::setAccountRoleType()
     * @uses Account::setAddress()
     * @uses Account::setApartmentNumber()
     * @uses Account::setBuildingNumber()
     * @uses Account::setCity()
     * @uses Account::setCountry()
     * @uses Account::setCounty()
     * @uses Account::setDonorRecognitionName()
     * @uses Account::setDonorRecognitionType()
     * @uses Account::setDonorRoleRef()
     * @uses Account::setEmail()
     * @uses Account::setEnvelopeSalutation()
     * @uses Account::setFirstName()
     * @uses Account::setId()
     * @uses Account::setInitials()
     * @uses Account::setLastName()
     * @uses Account::setLongSalutation()
     * @uses Account::setMiddleName()
     * @uses Account::setName()
     * @uses Account::setNameFormat()
     * @uses Account::setNote()
     * @uses Account::setOldFormattedAddress()
     * @uses Account::setOptOutDate()
     * @uses Account::setOptedOut()
     * @uses Account::setPersonaCreatedDate()
     * @uses Account::setPersonaDefinedValues()
     * @uses Account::setPersonaLastModifiedDate()
     * @uses Account::setPersonaType()
     * @uses Account::setPersonaTypes()
     * @uses Account::setPhones()
     * @uses Account::setPostalCode()
     * @uses Account::setPrimaryPersona()
     * @uses Account::setRef()
     * @uses Account::setShortSalutation()
     * @uses Account::setSocialMediaProfiles()
     * @uses Account::setSortName()
     * @uses Account::setState()
     * @uses Account::setStickyNoteType()
     * @uses Account::setStreetName()
     * @uses Account::setSuburb()
     * @uses Account::setSuffix()
     * @uses Account::setTeamRoleRef()
     * @uses Account::setTitle()
     * @uses Account::setTributeRoleRef()
     * @uses Account::setUserRoleRef()
     * @uses Account::setWebAddress()
     * @param string $accountCreatedDate
     * @param \StructType\DefinedValue[] $accountDefinedValues
     * @param string $accountLastModifiedDate
     * @param int $accountRoleType
     * @param string $address
     * @param string $apartmentNumber
     * @param string $buildingNumber
     * @param string $city
     * @param string $country
     * @param string $county
     * @param string $donorRecognitionName
     * @param int $donorRecognitionType
     * @param string $donorRoleRef
     * @param string $email
     * @param string $envelopeSalutation
     * @param string $firstName
     * @param int $id
     * @param string $initials
     * @param string $lastName
     * @param string $longSalutation
     * @param string $middleName
     * @param string $name
     * @param int $nameFormat
     * @param string $note
     * @param bool $oldFormattedAddress
     * @param string $optOutDate
     * @param bool $optedOut
     * @param string $personaCreatedDate
     * @param \StructType\DefinedValue[] $personaDefinedValues
     * @param string $personaLastModifiedDate
     * @param string $personaType
     * @param string[] $personaTypes
     * @param \StructType\Phone[] $phones
     * @param string $postalCode
     * @param bool $primaryPersona
     * @param string $ref
     * @param string $shortSalutation
     * @param \StructType\SocialMediaProfile[] $socialMediaProfiles
     * @param string $sortName
     * @param string $state
     * @param string $stickyNoteType
     * @param string $streetName
     * @param string $suburb
     * @param string $suffix
     * @param string $teamRoleRef
     * @param string $title
     * @param string $tributeRoleRef
     * @param string $userRoleRef
     * @param string $webAddress
     */
    public function __construct(?string $accountCreatedDate = null, array $accountDefinedValues = [], ?string $accountLastModifiedDate = null, ?int $accountRoleType = null, ?string $address = null, ?string $apartmentNumber = null, ?string $buildingNumber = null, ?string $city = null, ?string $country = null, ?string $county = null, ?string $donorRecognitionName = null, ?int $donorRecognitionType = null, ?string $donorRoleRef = null, ?string $email = null, ?string $envelopeSalutation = null, ?string $firstName = null, ?int $id = null, ?string $initials = null, ?string $lastName = null, ?string $longSalutation = null, ?string $middleName = null, ?string $name = null, ?int $nameFormat = null, ?string $note = null, ?bool $oldFormattedAddress = null, ?string $optOutDate = null, ?bool $optedOut = null, ?string $personaCreatedDate = null, array $personaDefinedValues = [], ?string $personaLastModifiedDate = null, ?string $personaType = null, array $personaTypes = [], array $phones = [], ?string $postalCode = null, ?bool $primaryPersona = null, ?string $ref = null, ?string $shortSalutation = null, array $socialMediaProfiles = [], ?string $sortName = null, ?string $state = null, ?string $stickyNoteType = null, ?string $streetName = null, ?string $suburb = null, ?string $suffix = null, ?string $teamRoleRef = null, ?string $title = null, ?string $tributeRoleRef = null, ?string $userRoleRef = null, ?string $webAddress = null)
    {
        $this
            ->setAccountCreatedDate($accountCreatedDate)
            ->setAccountDefinedValues($accountDefinedValues)
            ->setAccountLastModifiedDate($accountLastModifiedDate)
            ->setAccountRoleType($accountRoleType)
            ->setAddress($address)
            ->setApartmentNumber($apartmentNumber)
            ->setBuildingNumber($buildingNumber)
            ->setCity($city)
            ->setCountry($country)
            ->setCounty($county)
            ->setDonorRecognitionName($donorRecognitionName)
            ->setDonorRecognitionType($donorRecognitionType)
            ->setDonorRoleRef($donorRoleRef)
            ->setEmail($email)
            ->setEnvelopeSalutation($envelopeSalutation)
            ->setFirstName($firstName)
            ->setId($id)
            ->setInitials($initials)
            ->setLastName($lastName)
            ->setLongSalutation($longSalutation)
            ->setMiddleName($middleName)
            ->setName($name)
            ->setNameFormat($nameFormat)
            ->setNote($note)
            ->setOldFormattedAddress($oldFormattedAddress)
            ->setOptOutDate($optOutDate)
            ->setOptedOut($optedOut)
            ->setPersonaCreatedDate($personaCreatedDate)
            ->setPersonaDefinedValues($personaDefinedValues)
            ->setPersonaLastModifiedDate($personaLastModifiedDate)
            ->setPersonaType($personaType)
            ->setPersonaTypes($personaTypes)
            ->setPhones($phones)
            ->setPostalCode($postalCode)
            ->setPrimaryPersona($primaryPersona)
            ->setRef($ref)
            ->setShortSalutation($shortSalutation)
            ->setSocialMediaProfiles($socialMediaProfiles)
            ->setSortName($sortName)
            ->setState($state)
            ->setStickyNoteType($stickyNoteType)
            ->setStreetName($streetName)
            ->setSuburb($suburb)
            ->setSuffix($suffix)
            ->setTeamRoleRef($teamRoleRef)
            ->setTitle($title)
            ->setTributeRoleRef($tributeRoleRef)
            ->setUserRoleRef($userRoleRef)
            ->setWebAddress($webAddress);
    }
    /**
     * Get accountCreatedDate value
     * @return string|null
     */
    public function getAccountCreatedDate(): ?string
    {
        return $this->accountCreatedDate;
    }
    /**
     * Set accountCreatedDate value
     * @param string $accountCreatedDate
     * @return \StructType\Account
     */
    public function setAccountCreatedDate(?string $accountCreatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCreatedDate) && !is_string($accountCreatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCreatedDate, true), gettype($accountCreatedDate)), __LINE__);
        }
        $this->accountCreatedDate = $accountCreatedDate;
        
        return $this;
    }
    /**
     * Get accountDefinedValues value
     * @return \StructType\DefinedValue[]
     */
    public function getAccountDefinedValues(): array
    {
        return $this->accountDefinedValues;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountDefinedValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountDefinedValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountDefinedValuesForArrayConstraintsFromSetAccountDefinedValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountAccountDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$accountAccountDefinedValuesItem instanceof \StructType\DefinedValue) {
                $invalidValues[] = is_object($accountAccountDefinedValuesItem) ? get_class($accountAccountDefinedValuesItem) : sprintf('%s(%s)', gettype($accountAccountDefinedValuesItem), var_export($accountAccountDefinedValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accountDefinedValues property can only contain items of type \StructType\DefinedValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accountDefinedValues value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedValue[] $accountDefinedValues
     * @return \StructType\Account
     */
    public function setAccountDefinedValues(array $accountDefinedValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($accountDefinedValuesArrayErrorMessage = self::validateAccountDefinedValuesForArrayConstraintsFromSetAccountDefinedValues($accountDefinedValues))) {
            throw new InvalidArgumentException($accountDefinedValuesArrayErrorMessage, __LINE__);
        }
        $this->accountDefinedValues = $accountDefinedValues;
        
        return $this;
    }
    /**
     * Add item to accountDefinedValues value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedValue $item
     * @return \StructType\Account
     */
    public function addToAccountDefinedValues(\StructType\DefinedValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DefinedValue) {
            throw new InvalidArgumentException(sprintf('The accountDefinedValues property can only contain items of type \StructType\DefinedValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accountDefinedValues[] = $item;
        
        return $this;
    }
    /**
     * Get accountLastModifiedDate value
     * @return string|null
     */
    public function getAccountLastModifiedDate(): ?string
    {
        return $this->accountLastModifiedDate;
    }
    /**
     * Set accountLastModifiedDate value
     * @param string $accountLastModifiedDate
     * @return \StructType\Account
     */
    public function setAccountLastModifiedDate(?string $accountLastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($accountLastModifiedDate) && !is_string($accountLastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountLastModifiedDate, true), gettype($accountLastModifiedDate)), __LINE__);
        }
        $this->accountLastModifiedDate = $accountLastModifiedDate;
        
        return $this;
    }
    /**
     * Get accountRoleType value
     * @return int|null
     */
    public function getAccountRoleType(): ?int
    {
        return $this->accountRoleType;
    }
    /**
     * Set accountRoleType value
     * @param int $accountRoleType
     * @return \StructType\Account
     */
    public function setAccountRoleType(?int $accountRoleType = null): self
    {
        // validation for constraint: int
        if (!is_null($accountRoleType) && !(is_int($accountRoleType) || ctype_digit($accountRoleType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountRoleType, true), gettype($accountRoleType)), __LINE__);
        }
        $this->accountRoleType = $accountRoleType;
        
        return $this;
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
     * @return \StructType\Account
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
     * Get apartmentNumber value
     * @return string|null
     */
    public function getApartmentNumber(): ?string
    {
        return $this->apartmentNumber;
    }
    /**
     * Set apartmentNumber value
     * @param string $apartmentNumber
     * @return \StructType\Account
     */
    public function setApartmentNumber(?string $apartmentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($apartmentNumber) && !is_string($apartmentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartmentNumber, true), gettype($apartmentNumber)), __LINE__);
        }
        $this->apartmentNumber = $apartmentNumber;
        
        return $this;
    }
    /**
     * Get buildingNumber value
     * @return string|null
     */
    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
    }
    /**
     * Set buildingNumber value
     * @param string $buildingNumber
     * @return \StructType\Account
     */
    public function setBuildingNumber(?string $buildingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($buildingNumber) && !is_string($buildingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buildingNumber, true), gettype($buildingNumber)), __LINE__);
        }
        $this->buildingNumber = $buildingNumber;
        
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get donorRecognitionName value
     * @return string|null
     */
    public function getDonorRecognitionName(): ?string
    {
        return $this->donorRecognitionName;
    }
    /**
     * Set donorRecognitionName value
     * @param string $donorRecognitionName
     * @return \StructType\Account
     */
    public function setDonorRecognitionName(?string $donorRecognitionName = null): self
    {
        // validation for constraint: string
        if (!is_null($donorRecognitionName) && !is_string($donorRecognitionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($donorRecognitionName, true), gettype($donorRecognitionName)), __LINE__);
        }
        $this->donorRecognitionName = $donorRecognitionName;
        
        return $this;
    }
    /**
     * Get donorRecognitionType value
     * @return int|null
     */
    public function getDonorRecognitionType(): ?int
    {
        return $this->donorRecognitionType;
    }
    /**
     * Set donorRecognitionType value
     * @param int $donorRecognitionType
     * @return \StructType\Account
     */
    public function setDonorRecognitionType(?int $donorRecognitionType = null): self
    {
        // validation for constraint: int
        if (!is_null($donorRecognitionType) && !(is_int($donorRecognitionType) || ctype_digit($donorRecognitionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($donorRecognitionType, true), gettype($donorRecognitionType)), __LINE__);
        }
        $this->donorRecognitionType = $donorRecognitionType;
        
        return $this;
    }
    /**
     * Get donorRoleRef value
     * @return string|null
     */
    public function getDonorRoleRef(): ?string
    {
        return $this->donorRoleRef;
    }
    /**
     * Set donorRoleRef value
     * @param string $donorRoleRef
     * @return \StructType\Account
     */
    public function setDonorRoleRef(?string $donorRoleRef = null): self
    {
        // validation for constraint: string
        if (!is_null($donorRoleRef) && !is_string($donorRoleRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($donorRoleRef, true), gettype($donorRoleRef)), __LINE__);
        }
        $this->donorRoleRef = $donorRoleRef;
        
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
     * @return \StructType\Account
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
     * Get envelopeSalutation value
     * @return string|null
     */
    public function getEnvelopeSalutation(): ?string
    {
        return $this->envelopeSalutation;
    }
    /**
     * Set envelopeSalutation value
     * @param string $envelopeSalutation
     * @return \StructType\Account
     */
    public function setEnvelopeSalutation(?string $envelopeSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($envelopeSalutation) && !is_string($envelopeSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeSalutation, true), gettype($envelopeSalutation)), __LINE__);
        }
        $this->envelopeSalutation = $envelopeSalutation;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \StructType\Account
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\Account
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get initials value
     * @return string|null
     */
    public function getInitials(): ?string
    {
        return $this->initials;
    }
    /**
     * Set initials value
     * @param string $initials
     * @return \StructType\Account
     */
    public function setInitials(?string $initials = null): self
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initials, true), gettype($initials)), __LINE__);
        }
        $this->initials = $initials;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \StructType\Account
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
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
     * @return \StructType\Account
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
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \StructType\Account
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\Account
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get nameFormat value
     * @return int|null
     */
    public function getNameFormat(): ?int
    {
        return $this->nameFormat;
    }
    /**
     * Set nameFormat value
     * @param int $nameFormat
     * @return \StructType\Account
     */
    public function setNameFormat(?int $nameFormat = null): self
    {
        // validation for constraint: int
        if (!is_null($nameFormat) && !(is_int($nameFormat) || ctype_digit($nameFormat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nameFormat, true), gettype($nameFormat)), __LINE__);
        }
        $this->nameFormat = $nameFormat;
        
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
     * @return \StructType\Account
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
     * Get oldFormattedAddress value
     * @return bool|null
     */
    public function getOldFormattedAddress(): ?bool
    {
        return $this->oldFormattedAddress;
    }
    /**
     * Set oldFormattedAddress value
     * @param bool $oldFormattedAddress
     * @return \StructType\Account
     */
    public function setOldFormattedAddress(?bool $oldFormattedAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oldFormattedAddress) && !is_bool($oldFormattedAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oldFormattedAddress, true), gettype($oldFormattedAddress)), __LINE__);
        }
        $this->oldFormattedAddress = $oldFormattedAddress;
        
        return $this;
    }
    /**
     * Get optOutDate value
     * @return string|null
     */
    public function getOptOutDate(): ?string
    {
        return $this->optOutDate;
    }
    /**
     * Set optOutDate value
     * @param string $optOutDate
     * @return \StructType\Account
     */
    public function setOptOutDate(?string $optOutDate = null): self
    {
        // validation for constraint: string
        if (!is_null($optOutDate) && !is_string($optOutDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optOutDate, true), gettype($optOutDate)), __LINE__);
        }
        $this->optOutDate = $optOutDate;
        
        return $this;
    }
    /**
     * Get optedOut value
     * @return bool|null
     */
    public function getOptedOut(): ?bool
    {
        return $this->optedOut;
    }
    /**
     * Set optedOut value
     * @param bool $optedOut
     * @return \StructType\Account
     */
    public function setOptedOut(?bool $optedOut = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optedOut) && !is_bool($optedOut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optedOut, true), gettype($optedOut)), __LINE__);
        }
        $this->optedOut = $optedOut;
        
        return $this;
    }
    /**
     * Get personaCreatedDate value
     * @return string|null
     */
    public function getPersonaCreatedDate(): ?string
    {
        return $this->personaCreatedDate;
    }
    /**
     * Set personaCreatedDate value
     * @param string $personaCreatedDate
     * @return \StructType\Account
     */
    public function setPersonaCreatedDate(?string $personaCreatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($personaCreatedDate) && !is_string($personaCreatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaCreatedDate, true), gettype($personaCreatedDate)), __LINE__);
        }
        $this->personaCreatedDate = $personaCreatedDate;
        
        return $this;
    }
    /**
     * Get personaDefinedValues value
     * @return \StructType\DefinedValue[]
     */
    public function getPersonaDefinedValues(): array
    {
        return $this->personaDefinedValues;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonaDefinedValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonaDefinedValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonaDefinedValuesForArrayConstraintsFromSetPersonaDefinedValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountPersonaDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$accountPersonaDefinedValuesItem instanceof \StructType\DefinedValue) {
                $invalidValues[] = is_object($accountPersonaDefinedValuesItem) ? get_class($accountPersonaDefinedValuesItem) : sprintf('%s(%s)', gettype($accountPersonaDefinedValuesItem), var_export($accountPersonaDefinedValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personaDefinedValues property can only contain items of type \StructType\DefinedValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personaDefinedValues value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedValue[] $personaDefinedValues
     * @return \StructType\Account
     */
    public function setPersonaDefinedValues(array $personaDefinedValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($personaDefinedValuesArrayErrorMessage = self::validatePersonaDefinedValuesForArrayConstraintsFromSetPersonaDefinedValues($personaDefinedValues))) {
            throw new InvalidArgumentException($personaDefinedValuesArrayErrorMessage, __LINE__);
        }
        $this->personaDefinedValues = $personaDefinedValues;
        
        return $this;
    }
    /**
     * Add item to personaDefinedValues value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedValue $item
     * @return \StructType\Account
     */
    public function addToPersonaDefinedValues(\StructType\DefinedValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DefinedValue) {
            throw new InvalidArgumentException(sprintf('The personaDefinedValues property can only contain items of type \StructType\DefinedValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personaDefinedValues[] = $item;
        
        return $this;
    }
    /**
     * Get personaLastModifiedDate value
     * @return string|null
     */
    public function getPersonaLastModifiedDate(): ?string
    {
        return $this->personaLastModifiedDate;
    }
    /**
     * Set personaLastModifiedDate value
     * @param string $personaLastModifiedDate
     * @return \StructType\Account
     */
    public function setPersonaLastModifiedDate(?string $personaLastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($personaLastModifiedDate) && !is_string($personaLastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaLastModifiedDate, true), gettype($personaLastModifiedDate)), __LINE__);
        }
        $this->personaLastModifiedDate = $personaLastModifiedDate;
        
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
     * @return \StructType\Account
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
     * Get personaTypes value
     * @return string[]
     */
    public function getPersonaTypes(): array
    {
        return $this->personaTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonaTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonaTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonaTypesForArrayConstraintsFromSetPersonaTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountPersonaTypesItem) {
            // validation for constraint: itemType
            if (!is_string($accountPersonaTypesItem)) {
                $invalidValues[] = is_object($accountPersonaTypesItem) ? get_class($accountPersonaTypesItem) : sprintf('%s(%s)', gettype($accountPersonaTypesItem), var_export($accountPersonaTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personaTypes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personaTypes value
     * @throws InvalidArgumentException
     * @param string[] $personaTypes
     * @return \StructType\Account
     */
    public function setPersonaTypes(array $personaTypes = []): self
    {
        // validation for constraint: array
        if ('' !== ($personaTypesArrayErrorMessage = self::validatePersonaTypesForArrayConstraintsFromSetPersonaTypes($personaTypes))) {
            throw new InvalidArgumentException($personaTypesArrayErrorMessage, __LINE__);
        }
        $this->personaTypes = $personaTypes;
        
        return $this;
    }
    /**
     * Add item to personaTypes value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Account
     */
    public function addToPersonaTypes(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The personaTypes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personaTypes[] = $item;
        
        return $this;
    }
    /**
     * Get phones value
     * @return \StructType\Phone[]
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
        foreach ($values as $accountPhonesItem) {
            // validation for constraint: itemType
            if (!$accountPhonesItem instanceof \StructType\Phone) {
                $invalidValues[] = is_object($accountPhonesItem) ? get_class($accountPhonesItem) : sprintf('%s(%s)', gettype($accountPhonesItem), var_export($accountPhonesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The phones property can only contain items of type \StructType\Phone, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set phones value
     * @throws InvalidArgumentException
     * @param \StructType\Phone[] $phones
     * @return \StructType\Account
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
     * @param \StructType\Phone $item
     * @return \StructType\Account
     */
    public function addToPhones(\StructType\Phone $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Phone) {
            throw new InvalidArgumentException(sprintf('The phones property can only contain items of type \StructType\Phone, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \StructType\Account
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
     * Get primaryPersona value
     * @return bool|null
     */
    public function getPrimaryPersona(): ?bool
    {
        return $this->primaryPersona;
    }
    /**
     * Set primaryPersona value
     * @param bool $primaryPersona
     * @return \StructType\Account
     */
    public function setPrimaryPersona(?bool $primaryPersona = null): self
    {
        // validation for constraint: boolean
        if (!is_null($primaryPersona) && !is_bool($primaryPersona)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primaryPersona, true), gettype($primaryPersona)), __LINE__);
        }
        $this->primaryPersona = $primaryPersona;
        
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get socialMediaProfiles value
     * @return \StructType\SocialMediaProfile[]
     */
    public function getSocialMediaProfiles(): array
    {
        return $this->socialMediaProfiles;
    }
    /**
     * This method is responsible for validating the values passed to the setSocialMediaProfiles method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSocialMediaProfiles method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSocialMediaProfilesForArrayConstraintsFromSetSocialMediaProfiles(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountSocialMediaProfilesItem) {
            // validation for constraint: itemType
            if (!$accountSocialMediaProfilesItem instanceof \StructType\SocialMediaProfile) {
                $invalidValues[] = is_object($accountSocialMediaProfilesItem) ? get_class($accountSocialMediaProfilesItem) : sprintf('%s(%s)', gettype($accountSocialMediaProfilesItem), var_export($accountSocialMediaProfilesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The socialMediaProfiles property can only contain items of type \StructType\SocialMediaProfile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set socialMediaProfiles value
     * @throws InvalidArgumentException
     * @param \StructType\SocialMediaProfile[] $socialMediaProfiles
     * @return \StructType\Account
     */
    public function setSocialMediaProfiles(array $socialMediaProfiles = []): self
    {
        // validation for constraint: array
        if ('' !== ($socialMediaProfilesArrayErrorMessage = self::validateSocialMediaProfilesForArrayConstraintsFromSetSocialMediaProfiles($socialMediaProfiles))) {
            throw new InvalidArgumentException($socialMediaProfilesArrayErrorMessage, __LINE__);
        }
        $this->socialMediaProfiles = $socialMediaProfiles;
        
        return $this;
    }
    /**
     * Add item to socialMediaProfiles value
     * @throws InvalidArgumentException
     * @param \StructType\SocialMediaProfile $item
     * @return \StructType\Account
     */
    public function addToSocialMediaProfiles(\StructType\SocialMediaProfile $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SocialMediaProfile) {
            throw new InvalidArgumentException(sprintf('The socialMediaProfiles property can only contain items of type \StructType\SocialMediaProfile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->socialMediaProfiles[] = $item;
        
        return $this;
    }
    /**
     * Get sortName value
     * @return string|null
     */
    public function getSortName(): ?string
    {
        return $this->sortName;
    }
    /**
     * Set sortName value
     * @param string $sortName
     * @return \StructType\Account
     */
    public function setSortName(?string $sortName = null): self
    {
        // validation for constraint: string
        if (!is_null($sortName) && !is_string($sortName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortName, true), gettype($sortName)), __LINE__);
        }
        $this->sortName = $sortName;
        
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get streetName value
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }
    /**
     * Set streetName value
     * @param string $streetName
     * @return \StructType\Account
     */
    public function setStreetName(?string $streetName = null): self
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetName, true), gettype($streetName)), __LINE__);
        }
        $this->streetName = $streetName;
        
        return $this;
    }
    /**
     * Get suburb value
     * @return string|null
     */
    public function getSuburb(): ?string
    {
        return $this->suburb;
    }
    /**
     * Set suburb value
     * @param string $suburb
     * @return \StructType\Account
     */
    public function setSuburb(?string $suburb = null): self
    {
        // validation for constraint: string
        if (!is_null($suburb) && !is_string($suburb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suburb, true), gettype($suburb)), __LINE__);
        }
        $this->suburb = $suburb;
        
        return $this;
    }
    /**
     * Get suffix value
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }
    /**
     * Set suffix value
     * @param string $suffix
     * @return \StructType\Account
     */
    public function setSuffix(?string $suffix = null): self
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suffix, true), gettype($suffix)), __LINE__);
        }
        $this->suffix = $suffix;
        
        return $this;
    }
    /**
     * Get teamRoleRef value
     * @return string|null
     */
    public function getTeamRoleRef(): ?string
    {
        return $this->teamRoleRef;
    }
    /**
     * Set teamRoleRef value
     * @param string $teamRoleRef
     * @return \StructType\Account
     */
    public function setTeamRoleRef(?string $teamRoleRef = null): self
    {
        // validation for constraint: string
        if (!is_null($teamRoleRef) && !is_string($teamRoleRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($teamRoleRef, true), gettype($teamRoleRef)), __LINE__);
        }
        $this->teamRoleRef = $teamRoleRef;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\Account
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get tributeRoleRef value
     * @return string|null
     */
    public function getTributeRoleRef(): ?string
    {
        return $this->tributeRoleRef;
    }
    /**
     * Set tributeRoleRef value
     * @param string $tributeRoleRef
     * @return \StructType\Account
     */
    public function setTributeRoleRef(?string $tributeRoleRef = null): self
    {
        // validation for constraint: string
        if (!is_null($tributeRoleRef) && !is_string($tributeRoleRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tributeRoleRef, true), gettype($tributeRoleRef)), __LINE__);
        }
        $this->tributeRoleRef = $tributeRoleRef;
        
        return $this;
    }
    /**
     * Get userRoleRef value
     * @return string|null
     */
    public function getUserRoleRef(): ?string
    {
        return $this->userRoleRef;
    }
    /**
     * Set userRoleRef value
     * @param string $userRoleRef
     * @return \StructType\Account
     */
    public function setUserRoleRef(?string $userRoleRef = null): self
    {
        // validation for constraint: string
        if (!is_null($userRoleRef) && !is_string($userRoleRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userRoleRef, true), gettype($userRoleRef)), __LINE__);
        }
        $this->userRoleRef = $userRoleRef;
        
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
     * @return \StructType\Account
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
