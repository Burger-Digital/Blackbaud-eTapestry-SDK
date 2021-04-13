<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Declaration StructType
 * @subpackage Structs
 */
class Declaration extends AbstractStructBase
{
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
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
     * The attachments
     * Meta information extracted from the WSDL
     * - arrayType: tns:Attachment[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Attachment[]
     */
    protected array $attachments = [];
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
     * The confirmationDate
     * @var string|null
     */
    protected ?string $confirmationDate = null;
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
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
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
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The verbal
     * @var bool|null
     */
    protected ?bool $verbal = null;
    /**
     * Constructor method for Declaration
     * @uses Declaration::setAccountName()
     * @uses Declaration::setAccountRef()
     * @uses Declaration::setAddress()
     * @uses Declaration::setApartmentNumber()
     * @uses Declaration::setAttachments()
     * @uses Declaration::setBuildingNumber()
     * @uses Declaration::setCity()
     * @uses Declaration::setConfirmationDate()
     * @uses Declaration::setCountry()
     * @uses Declaration::setCounty()
     * @uses Declaration::setCreatedDate()
     * @uses Declaration::setDate()
     * @uses Declaration::setEndDate()
     * @uses Declaration::setLastModifiedDate()
     * @uses Declaration::setName()
     * @uses Declaration::setNote()
     * @uses Declaration::setPostalCode()
     * @uses Declaration::setRef()
     * @uses Declaration::setStartDate()
     * @uses Declaration::setState()
     * @uses Declaration::setStreetName()
     * @uses Declaration::setSuburb()
     * @uses Declaration::setType()
     * @uses Declaration::setVerbal()
     * @param string $accountName
     * @param string $accountRef
     * @param string $address
     * @param string $apartmentNumber
     * @param \BurgerDigital\eTapestry\StructType\Attachment[] $attachments
     * @param string $buildingNumber
     * @param string $city
     * @param string $confirmationDate
     * @param string $country
     * @param string $county
     * @param string $createdDate
     * @param string $date
     * @param string $endDate
     * @param string $lastModifiedDate
     * @param string $name
     * @param string $note
     * @param string $postalCode
     * @param string $ref
     * @param string $startDate
     * @param string $state
     * @param string $streetName
     * @param string $suburb
     * @param int $type
     * @param bool $verbal
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, ?string $address = null, ?string $apartmentNumber = null, array $attachments = [], ?string $buildingNumber = null, ?string $city = null, ?string $confirmationDate = null, ?string $country = null, ?string $county = null, ?string $createdDate = null, ?string $date = null, ?string $endDate = null, ?string $lastModifiedDate = null, ?string $name = null, ?string $note = null, ?string $postalCode = null, ?string $ref = null, ?string $startDate = null, ?string $state = null, ?string $streetName = null, ?string $suburb = null, ?int $type = null, ?bool $verbal = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setAddress($address)
            ->setApartmentNumber($apartmentNumber)
            ->setAttachments($attachments)
            ->setBuildingNumber($buildingNumber)
            ->setCity($city)
            ->setConfirmationDate($confirmationDate)
            ->setCountry($country)
            ->setCounty($county)
            ->setCreatedDate($createdDate)
            ->setDate($date)
            ->setEndDate($endDate)
            ->setLastModifiedDate($lastModifiedDate)
            ->setName($name)
            ->setNote($note)
            ->setPostalCode($postalCode)
            ->setRef($ref)
            ->setStartDate($startDate)
            ->setState($state)
            ->setStreetName($streetName)
            ->setSuburb($suburb)
            ->setType($type)
            ->setVerbal($verbal);
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * Get attachments value
     * @return \BurgerDigital\eTapestry\StructType\Attachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentsForArrayConstraintsFromSetAttachments(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $declarationAttachmentsItem) {
            // validation for constraint: itemType
            if (!$declarationAttachmentsItem instanceof \BurgerDigital\eTapestry\StructType\Attachment) {
                $invalidValues[] = is_object($declarationAttachmentsItem) ? get_class($declarationAttachmentsItem) : sprintf('%s(%s)', gettype($declarationAttachmentsItem), var_export($declarationAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attachments property can only contain items of type \BurgerDigital\eTapestry\StructType\Attachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attachments value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Attachment[] $attachments
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setAttachments(array $attachments = []): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentsArrayErrorMessage = self::validateAttachmentsForArrayConstraintsFromSetAttachments($attachments))) {
            throw new InvalidArgumentException($attachmentsArrayErrorMessage, __LINE__);
        }
        $this->attachments = $attachments;
        
        return $this;
    }
    /**
     * Add item to attachments value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Attachment $item
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function addToAttachments(\StructType\Attachment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Attachment) {
            throw new InvalidArgumentException(sprintf('The attachments property can only contain items of type \BurgerDigital\eTapestry\StructType\Attachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attachments[] = $item;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * Get confirmationDate value
     * @return string|null
     */
    public function getConfirmationDate(): ?string
    {
        return $this->confirmationDate;
    }
    /**
     * Set confirmationDate value
     * @param string $confirmationDate
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setConfirmationDate(?string $confirmationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationDate) && !is_string($confirmationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationDate, true), gettype($confirmationDate)), __LINE__);
        }
        $this->confirmationDate = $confirmationDate;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * @return \BurgerDigital\eTapestry\StructType\Declaration
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
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get verbal value
     * @return bool|null
     */
    public function getVerbal(): ?bool
    {
        return $this->verbal;
    }
    /**
     * Set verbal value
     * @param bool $verbal
     * @return \BurgerDigital\eTapestry\StructType\Declaration
     */
    public function setVerbal(?bool $verbal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($verbal) && !is_bool($verbal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verbal, true), gettype($verbal)), __LINE__);
        }
        $this->verbal = $verbal;
        
        return $this;
    }
}
