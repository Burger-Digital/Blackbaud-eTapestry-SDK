<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityRole StructType
 * @subpackage Structs
 */
class EntityRole extends AbstractStructBase
{
    /**
     * The accountRoleType
     * @var int|null
     */
    protected ?int $accountRoleType = null;
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
     * The emailStatus
     * @var int|null
     */
    protected ?int $emailStatus = null;
    /**
     * The householdStatus
     * @var int|null
     */
    protected ?int $householdStatus = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The loginId
     * @var string|null
     */
    protected ?string $loginId = null;
    /**
     * The loyaltyRating
     * @var int|null
     */
    protected ?int $loyaltyRating = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The personas
     * Meta information extracted from the WSDL
     * - arrayType: tns:Persona[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Persona[]
     */
    protected array $personas = [];
    /**
     * The photoLinks
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $photoLinks = [];
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The sortName
     * @var string|null
     */
    protected ?string $sortName = null;
    /**
     * The teamRoleRef
     * @var string|null
     */
    protected ?string $teamRoleRef = null;
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
     * Constructor method for EntityRole
     * @uses EntityRole::setAccountRoleType()
     * @uses EntityRole::setCreatedDate()
     * @uses EntityRole::setDefinedValues()
     * @uses EntityRole::setDonorRecognitionName()
     * @uses EntityRole::setDonorRecognitionType()
     * @uses EntityRole::setDonorRoleRef()
     * @uses EntityRole::setEmailStatus()
     * @uses EntityRole::setHouseholdStatus()
     * @uses EntityRole::setId()
     * @uses EntityRole::setLastModifiedDate()
     * @uses EntityRole::setLoginId()
     * @uses EntityRole::setLoyaltyRating()
     * @uses EntityRole::setName()
     * @uses EntityRole::setPersonas()
     * @uses EntityRole::setPhotoLinks()
     * @uses EntityRole::setRef()
     * @uses EntityRole::setSortName()
     * @uses EntityRole::setTeamRoleRef()
     * @uses EntityRole::setTributeRoleRef()
     * @uses EntityRole::setUserRoleRef()
     * @param int $accountRoleType
     * @param string $createdDate
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $definedValues
     * @param string $donorRecognitionName
     * @param int $donorRecognitionType
     * @param string $donorRoleRef
     * @param int $emailStatus
     * @param int $householdStatus
     * @param int $id
     * @param string $lastModifiedDate
     * @param string $loginId
     * @param int $loyaltyRating
     * @param string $name
     * @param \BurgerDigital\eTapestry\StructType\Persona[] $personas
     * @param string[] $photoLinks
     * @param string $ref
     * @param string $sortName
     * @param string $teamRoleRef
     * @param string $tributeRoleRef
     * @param string $userRoleRef
     */
    public function __construct(?int $accountRoleType = null, ?string $createdDate = null, array $definedValues = [], ?string $donorRecognitionName = null, ?int $donorRecognitionType = null, ?string $donorRoleRef = null, ?int $emailStatus = null, ?int $householdStatus = null, ?int $id = null, ?string $lastModifiedDate = null, ?string $loginId = null, ?int $loyaltyRating = null, ?string $name = null, array $personas = [], array $photoLinks = [], ?string $ref = null, ?string $sortName = null, ?string $teamRoleRef = null, ?string $tributeRoleRef = null, ?string $userRoleRef = null)
    {
        $this
            ->setAccountRoleType($accountRoleType)
            ->setCreatedDate($createdDate)
            ->setDefinedValues($definedValues)
            ->setDonorRecognitionName($donorRecognitionName)
            ->setDonorRecognitionType($donorRecognitionType)
            ->setDonorRoleRef($donorRoleRef)
            ->setEmailStatus($emailStatus)
            ->setHouseholdStatus($householdStatus)
            ->setId($id)
            ->setLastModifiedDate($lastModifiedDate)
            ->setLoginId($loginId)
            ->setLoyaltyRating($loyaltyRating)
            ->setName($name)
            ->setPersonas($personas)
            ->setPhotoLinks($photoLinks)
            ->setRef($ref)
            ->setSortName($sortName)
            ->setTeamRoleRef($teamRoleRef)
            ->setTributeRoleRef($tributeRoleRef)
            ->setUserRoleRef($userRoleRef);
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
        foreach ($values as $entityRoleDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$entityRoleDefinedValuesItem instanceof \BurgerDigital\eTapestry\StructType\DefinedValue) {
                $invalidValues[] = is_object($entityRoleDefinedValuesItem) ? get_class($entityRoleDefinedValuesItem) : sprintf('%s(%s)', gettype($entityRoleDefinedValuesItem), var_export($entityRoleDefinedValuesItem, true));
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * Get emailStatus value
     * @return int|null
     */
    public function getEmailStatus(): ?int
    {
        return $this->emailStatus;
    }
    /**
     * Set emailStatus value
     * @param int $emailStatus
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function setEmailStatus(?int $emailStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($emailStatus) && !(is_int($emailStatus) || ctype_digit($emailStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailStatus, true), gettype($emailStatus)), __LINE__);
        }
        $this->emailStatus = $emailStatus;
        
        return $this;
    }
    /**
     * Get householdStatus value
     * @return int|null
     */
    public function getHouseholdStatus(): ?int
    {
        return $this->householdStatus;
    }
    /**
     * Set householdStatus value
     * @param int $householdStatus
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function setHouseholdStatus(?int $householdStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($householdStatus) && !(is_int($householdStatus) || ctype_digit($householdStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($householdStatus, true), gettype($householdStatus)), __LINE__);
        }
        $this->householdStatus = $householdStatus;
        
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * Get loginId value
     * @return string|null
     */
    public function getLoginId(): ?string
    {
        return $this->loginId;
    }
    /**
     * Set loginId value
     * @param string $loginId
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function setLoginId(?string $loginId = null): self
    {
        // validation for constraint: string
        if (!is_null($loginId) && !is_string($loginId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loginId, true), gettype($loginId)), __LINE__);
        }
        $this->loginId = $loginId;
        
        return $this;
    }
    /**
     * Get loyaltyRating value
     * @return int|null
     */
    public function getLoyaltyRating(): ?int
    {
        return $this->loyaltyRating;
    }
    /**
     * Set loyaltyRating value
     * @param int $loyaltyRating
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function setLoyaltyRating(?int $loyaltyRating = null): self
    {
        // validation for constraint: int
        if (!is_null($loyaltyRating) && !(is_int($loyaltyRating) || ctype_digit($loyaltyRating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($loyaltyRating, true), gettype($loyaltyRating)), __LINE__);
        }
        $this->loyaltyRating = $loyaltyRating;
        
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * Get personas value
     * @return \BurgerDigital\eTapestry\StructType\Persona[]
     */
    public function getPersonas(): array
    {
        return $this->personas;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonasForArrayConstraintsFromSetPersonas(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $entityRolePersonasItem) {
            // validation for constraint: itemType
            if (!$entityRolePersonasItem instanceof \BurgerDigital\eTapestry\StructType\Persona) {
                $invalidValues[] = is_object($entityRolePersonasItem) ? get_class($entityRolePersonasItem) : sprintf('%s(%s)', gettype($entityRolePersonasItem), var_export($entityRolePersonasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personas property can only contain items of type \BurgerDigital\eTapestry\StructType\Persona, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personas value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Persona[] $personas
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function setPersonas(array $personas = []): self
    {
        // validation for constraint: array
        if ('' !== ($personasArrayErrorMessage = self::validatePersonasForArrayConstraintsFromSetPersonas($personas))) {
            throw new InvalidArgumentException($personasArrayErrorMessage, __LINE__);
        }
        $this->personas = $personas;
        
        return $this;
    }
    /**
     * Add item to personas value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Persona $item
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function addToPersonas(\StructType\Persona $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Persona) {
            throw new InvalidArgumentException(sprintf('The personas property can only contain items of type \BurgerDigital\eTapestry\StructType\Persona, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personas[] = $item;
        
        return $this;
    }
    /**
     * Get photoLinks value
     * @return string[]
     */
    public function getPhotoLinks(): array
    {
        return $this->photoLinks;
    }
    /**
     * This method is responsible for validating the values passed to the setPhotoLinks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhotoLinks method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhotoLinksForArrayConstraintsFromSetPhotoLinks(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $entityRolePhotoLinksItem) {
            // validation for constraint: itemType
            if (!is_string($entityRolePhotoLinksItem)) {
                $invalidValues[] = is_object($entityRolePhotoLinksItem) ? get_class($entityRolePhotoLinksItem) : sprintf('%s(%s)', gettype($entityRolePhotoLinksItem), var_export($entityRolePhotoLinksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The photoLinks property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set photoLinks value
     * @throws InvalidArgumentException
     * @param string[] $photoLinks
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function setPhotoLinks(array $photoLinks = []): self
    {
        // validation for constraint: array
        if ('' !== ($photoLinksArrayErrorMessage = self::validatePhotoLinksForArrayConstraintsFromSetPhotoLinks($photoLinks))) {
            throw new InvalidArgumentException($photoLinksArrayErrorMessage, __LINE__);
        }
        $this->photoLinks = $photoLinks;
        
        return $this;
    }
    /**
     * Add item to photoLinks value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
     */
    public function addToPhotoLinks(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The photoLinks property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->photoLinks[] = $item;
        
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
     * @return \BurgerDigital\eTapestry\StructType\EntityRole
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
}
