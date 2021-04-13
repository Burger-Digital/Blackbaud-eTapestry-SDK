<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EcommerceResponse StructType
 * @subpackage Structs
 */
class EcommerceResponse extends AbstractStructBase
{
    /**
     * The accountNumber
     * @var int|null
     */
    protected ?int $accountNumber = null;
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The createdNewAccount
     * @var bool|null
     */
    protected ?bool $createdNewAccount = null;
    /**
     * The journalEntryRefs
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $journalEntryRefs = [];
    /**
     * Constructor method for EcommerceResponse
     * @uses EcommerceResponse::setAccountNumber()
     * @uses EcommerceResponse::setAccountRef()
     * @uses EcommerceResponse::setCreatedNewAccount()
     * @uses EcommerceResponse::setJournalEntryRefs()
     * @param int $accountNumber
     * @param string $accountRef
     * @param bool $createdNewAccount
     * @param string[] $journalEntryRefs
     */
    public function __construct(?int $accountNumber = null, ?string $accountRef = null, ?bool $createdNewAccount = null, array $journalEntryRefs = [])
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setAccountRef($accountRef)
            ->setCreatedNewAccount($createdNewAccount)
            ->setJournalEntryRefs($journalEntryRefs);
    }
    /**
     * Get accountNumber value
     * @return int|null
     */
    public function getAccountNumber(): ?int
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param int $accountNumber
     * @return \StructType\EcommerceResponse
     */
    public function setAccountNumber(?int $accountNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($accountNumber) && !(is_int($accountNumber) || ctype_digit($accountNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
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
     * @return \StructType\EcommerceResponse
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
     * Get createdNewAccount value
     * @return bool|null
     */
    public function getCreatedNewAccount(): ?bool
    {
        return $this->createdNewAccount;
    }
    /**
     * Set createdNewAccount value
     * @param bool $createdNewAccount
     * @return \StructType\EcommerceResponse
     */
    public function setCreatedNewAccount(?bool $createdNewAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createdNewAccount) && !is_bool($createdNewAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createdNewAccount, true), gettype($createdNewAccount)), __LINE__);
        }
        $this->createdNewAccount = $createdNewAccount;
        
        return $this;
    }
    /**
     * Get journalEntryRefs value
     * @return string[]
     */
    public function getJournalEntryRefs(): array
    {
        return $this->journalEntryRefs;
    }
    /**
     * This method is responsible for validating the values passed to the setJournalEntryRefs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJournalEntryRefs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJournalEntryRefsForArrayConstraintsFromSetJournalEntryRefs(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ecommerceResponseJournalEntryRefsItem) {
            // validation for constraint: itemType
            if (!is_string($ecommerceResponseJournalEntryRefsItem)) {
                $invalidValues[] = is_object($ecommerceResponseJournalEntryRefsItem) ? get_class($ecommerceResponseJournalEntryRefsItem) : sprintf('%s(%s)', gettype($ecommerceResponseJournalEntryRefsItem), var_export($ecommerceResponseJournalEntryRefsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The journalEntryRefs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set journalEntryRefs value
     * @throws InvalidArgumentException
     * @param string[] $journalEntryRefs
     * @return \StructType\EcommerceResponse
     */
    public function setJournalEntryRefs(array $journalEntryRefs = []): self
    {
        // validation for constraint: array
        if ('' !== ($journalEntryRefsArrayErrorMessage = self::validateJournalEntryRefsForArrayConstraintsFromSetJournalEntryRefs($journalEntryRefs))) {
            throw new InvalidArgumentException($journalEntryRefsArrayErrorMessage, __LINE__);
        }
        $this->journalEntryRefs = $journalEntryRefs;
        
        return $this;
    }
    /**
     * Add item to journalEntryRefs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\EcommerceResponse
     */
    public function addToJournalEntryRefs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The journalEntryRefs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->journalEntryRefs[] = $item;
        
        return $this;
    }
}
