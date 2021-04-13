<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Relationship StructType
 * @subpackage Structs
 */
class Relationship extends AbstractStructBase
{
    /**
     * The account1Name
     * @var string|null
     */
    protected ?string $account1Name = null;
    /**
     * The account1Ref
     * @var string|null
     */
    protected ?string $account1Ref = null;
    /**
     * The account2Name
     * @var string|null
     */
    protected ?string $account2Name = null;
    /**
     * The account2Ref
     * @var string|null
     */
    protected ?string $account2Ref = null;
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
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The hohAccount
     * @var int|null
     */
    protected ?int $hohAccount = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The matchingGiftAccount
     * @var int|null
     */
    protected ?int $matchingGiftAccount = null;
    /**
     * The matchingGiftTerms
     * @var string|null
     */
    protected ?string $matchingGiftTerms = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
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
     * The type
     * @var \BurgerDigital\eTapestry\StructType\RelationshipType|null
     */
    protected ?\StructType\RelationshipType $type = null;
    /**
     * Constructor method for Relationship
     * @uses Relationship::setAccount1Name()
     * @uses Relationship::setAccount1Ref()
     * @uses Relationship::setAccount2Name()
     * @uses Relationship::setAccount2Ref()
     * @uses Relationship::setCreatedDate()
     * @uses Relationship::setDefinedValues()
     * @uses Relationship::setEndDate()
     * @uses Relationship::setHohAccount()
     * @uses Relationship::setLastModifiedDate()
     * @uses Relationship::setMatchingGiftAccount()
     * @uses Relationship::setMatchingGiftTerms()
     * @uses Relationship::setNote()
     * @uses Relationship::setRef()
     * @uses Relationship::setStartDate()
     * @uses Relationship::setType()
     * @param string $account1Name
     * @param string $account1Ref
     * @param string $account2Name
     * @param string $account2Ref
     * @param string $createdDate
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $definedValues
     * @param string $endDate
     * @param int $hohAccount
     * @param string $lastModifiedDate
     * @param int $matchingGiftAccount
     * @param string $matchingGiftTerms
     * @param string $note
     * @param string $ref
     * @param string $startDate
     * @param \BurgerDigital\eTapestry\StructType\RelationshipType $type
     */
    public function __construct(?string $account1Name = null, ?string $account1Ref = null, ?string $account2Name = null, ?string $account2Ref = null, ?string $createdDate = null, array $definedValues = [], ?string $endDate = null, ?int $hohAccount = null, ?string $lastModifiedDate = null, ?int $matchingGiftAccount = null, ?string $matchingGiftTerms = null, ?string $note = null, ?string $ref = null, ?string $startDate = null, ?\StructType\RelationshipType $type = null)
    {
        $this
            ->setAccount1Name($account1Name)
            ->setAccount1Ref($account1Ref)
            ->setAccount2Name($account2Name)
            ->setAccount2Ref($account2Ref)
            ->setCreatedDate($createdDate)
            ->setDefinedValues($definedValues)
            ->setEndDate($endDate)
            ->setHohAccount($hohAccount)
            ->setLastModifiedDate($lastModifiedDate)
            ->setMatchingGiftAccount($matchingGiftAccount)
            ->setMatchingGiftTerms($matchingGiftTerms)
            ->setNote($note)
            ->setRef($ref)
            ->setStartDate($startDate)
            ->setType($type);
    }
    /**
     * Get account1Name value
     * @return string|null
     */
    public function getAccount1Name(): ?string
    {
        return $this->account1Name;
    }
    /**
     * Set account1Name value
     * @param string $account1Name
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setAccount1Name(?string $account1Name = null): self
    {
        // validation for constraint: string
        if (!is_null($account1Name) && !is_string($account1Name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account1Name, true), gettype($account1Name)), __LINE__);
        }
        $this->account1Name = $account1Name;
        
        return $this;
    }
    /**
     * Get account1Ref value
     * @return string|null
     */
    public function getAccount1Ref(): ?string
    {
        return $this->account1Ref;
    }
    /**
     * Set account1Ref value
     * @param string $account1Ref
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setAccount1Ref(?string $account1Ref = null): self
    {
        // validation for constraint: string
        if (!is_null($account1Ref) && !is_string($account1Ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account1Ref, true), gettype($account1Ref)), __LINE__);
        }
        $this->account1Ref = $account1Ref;
        
        return $this;
    }
    /**
     * Get account2Name value
     * @return string|null
     */
    public function getAccount2Name(): ?string
    {
        return $this->account2Name;
    }
    /**
     * Set account2Name value
     * @param string $account2Name
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setAccount2Name(?string $account2Name = null): self
    {
        // validation for constraint: string
        if (!is_null($account2Name) && !is_string($account2Name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account2Name, true), gettype($account2Name)), __LINE__);
        }
        $this->account2Name = $account2Name;
        
        return $this;
    }
    /**
     * Get account2Ref value
     * @return string|null
     */
    public function getAccount2Ref(): ?string
    {
        return $this->account2Ref;
    }
    /**
     * Set account2Ref value
     * @param string $account2Ref
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setAccount2Ref(?string $account2Ref = null): self
    {
        // validation for constraint: string
        if (!is_null($account2Ref) && !is_string($account2Ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account2Ref, true), gettype($account2Ref)), __LINE__);
        }
        $this->account2Ref = $account2Ref;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
        foreach ($values as $relationshipDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$relationshipDefinedValuesItem instanceof \BurgerDigital\eTapestry\StructType\DefinedValue) {
                $invalidValues[] = is_object($relationshipDefinedValuesItem) ? get_class($relationshipDefinedValuesItem) : sprintf('%s(%s)', gettype($relationshipDefinedValuesItem), var_export($relationshipDefinedValuesItem, true));
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * Get hohAccount value
     * @return int|null
     */
    public function getHohAccount(): ?int
    {
        return $this->hohAccount;
    }
    /**
     * Set hohAccount value
     * @param int $hohAccount
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setHohAccount(?int $hohAccount = null): self
    {
        // validation for constraint: int
        if (!is_null($hohAccount) && !(is_int($hohAccount) || ctype_digit($hohAccount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hohAccount, true), gettype($hohAccount)), __LINE__);
        }
        $this->hohAccount = $hohAccount;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * Get matchingGiftAccount value
     * @return int|null
     */
    public function getMatchingGiftAccount(): ?int
    {
        return $this->matchingGiftAccount;
    }
    /**
     * Set matchingGiftAccount value
     * @param int $matchingGiftAccount
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setMatchingGiftAccount(?int $matchingGiftAccount = null): self
    {
        // validation for constraint: int
        if (!is_null($matchingGiftAccount) && !(is_int($matchingGiftAccount) || ctype_digit($matchingGiftAccount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchingGiftAccount, true), gettype($matchingGiftAccount)), __LINE__);
        }
        $this->matchingGiftAccount = $matchingGiftAccount;
        
        return $this;
    }
    /**
     * Get matchingGiftTerms value
     * @return string|null
     */
    public function getMatchingGiftTerms(): ?string
    {
        return $this->matchingGiftTerms;
    }
    /**
     * Set matchingGiftTerms value
     * @param string $matchingGiftTerms
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setMatchingGiftTerms(?string $matchingGiftTerms = null): self
    {
        // validation for constraint: string
        if (!is_null($matchingGiftTerms) && !is_string($matchingGiftTerms)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchingGiftTerms, true), gettype($matchingGiftTerms)), __LINE__);
        }
        $this->matchingGiftTerms = $matchingGiftTerms;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * @return \BurgerDigital\eTapestry\StructType\Relationship
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
     * Get type value
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType|null
     */
    public function getType(): ?\StructType\RelationshipType
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param \BurgerDigital\eTapestry\StructType\RelationshipType $type
     * @return \BurgerDigital\eTapestry\StructType\Relationship
     */
    public function setType(?\StructType\RelationshipType $type = null): self
    {
        $this->type = $type;
        
        return $this;
    }
}
