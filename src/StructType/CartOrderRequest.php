<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CartOrderRequest StructType
 * @subpackage Structs
 */
class CartOrderRequest extends AbstractStructBase
{
    /**
     * The account
     * @var \StructType\Account|null
     */
    protected ?\StructType\Account $account = null;
    /**
     * The amount
     * @var string|null
     */
    protected ?string $amount = null;
    /**
     * The createFieldAndValues
     * @var bool|null
     */
    protected ?bool $createFieldAndValues = null;
    /**
     * The invoiceNumber
     * @var string|null
     */
    protected ?string $invoiceNumber = null;
    /**
     * The isBuckaroo
     * @var bool|null
     */
    protected ?bool $isBuckaroo = null;
    /**
     * The journalEntries
     * Meta information extracted from the WSDL
     * - arrayType: anyType[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var mixed[]
     */
    protected array $journalEntries = [];
    /**
     * The populateDataSource
     * @var bool|null
     */
    protected ?bool $populateDataSource = null;
    /**
     * The processor
     * @var string|null
     */
    protected ?string $processor = null;
    /**
     * The skipSoftErrors
     * @var bool|null
     */
    protected ?bool $skipSoftErrors = null;
    /**
     * The softErrorEmail
     * @var string|null
     */
    protected ?string $softErrorEmail = null;
    /**
     * The statusCode
     * @var string|null
     */
    protected ?string $statusCode = null;
    /**
     * The statusMessage
     * @var string|null
     */
    protected ?string $statusMessage = null;
    /**
     * The transactionNumber
     * @var string|null
     */
    protected ?string $transactionNumber = null;
    /**
     * The validateLicense
     * @var bool|null
     */
    protected ?bool $validateLicense = null;
    /**
     * Constructor method for CartOrderRequest
     * @uses CartOrderRequest::setAccount()
     * @uses CartOrderRequest::setAmount()
     * @uses CartOrderRequest::setCreateFieldAndValues()
     * @uses CartOrderRequest::setInvoiceNumber()
     * @uses CartOrderRequest::setIsBuckaroo()
     * @uses CartOrderRequest::setJournalEntries()
     * @uses CartOrderRequest::setPopulateDataSource()
     * @uses CartOrderRequest::setProcessor()
     * @uses CartOrderRequest::setSkipSoftErrors()
     * @uses CartOrderRequest::setSoftErrorEmail()
     * @uses CartOrderRequest::setStatusCode()
     * @uses CartOrderRequest::setStatusMessage()
     * @uses CartOrderRequest::setTransactionNumber()
     * @uses CartOrderRequest::setValidateLicense()
     * @param \StructType\Account $account
     * @param string $amount
     * @param bool $createFieldAndValues
     * @param string $invoiceNumber
     * @param bool $isBuckaroo
     * @param mixed[] $journalEntries
     * @param bool $populateDataSource
     * @param string $processor
     * @param bool $skipSoftErrors
     * @param string $softErrorEmail
     * @param string $statusCode
     * @param string $statusMessage
     * @param string $transactionNumber
     * @param bool $validateLicense
     */
    public function __construct(?\StructType\Account $account = null, ?string $amount = null, ?bool $createFieldAndValues = null, ?string $invoiceNumber = null, ?bool $isBuckaroo = null, array $journalEntries = [], ?bool $populateDataSource = null, ?string $processor = null, ?bool $skipSoftErrors = null, ?string $softErrorEmail = null, ?string $statusCode = null, ?string $statusMessage = null, ?string $transactionNumber = null, ?bool $validateLicense = null)
    {
        $this
            ->setAccount($account)
            ->setAmount($amount)
            ->setCreateFieldAndValues($createFieldAndValues)
            ->setInvoiceNumber($invoiceNumber)
            ->setIsBuckaroo($isBuckaroo)
            ->setJournalEntries($journalEntries)
            ->setPopulateDataSource($populateDataSource)
            ->setProcessor($processor)
            ->setSkipSoftErrors($skipSoftErrors)
            ->setSoftErrorEmail($softErrorEmail)
            ->setStatusCode($statusCode)
            ->setStatusMessage($statusMessage)
            ->setTransactionNumber($transactionNumber)
            ->setValidateLicense($validateLicense);
    }
    /**
     * Get account value
     * @return \StructType\Account|null
     */
    public function getAccount(): ?\StructType\Account
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \StructType\Account $account
     * @return \StructType\CartOrderRequest
     */
    public function setAccount(?\StructType\Account $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \StructType\CartOrderRequest
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get createFieldAndValues value
     * @return bool|null
     */
    public function getCreateFieldAndValues(): ?bool
    {
        return $this->createFieldAndValues;
    }
    /**
     * Set createFieldAndValues value
     * @param bool $createFieldAndValues
     * @return \StructType\CartOrderRequest
     */
    public function setCreateFieldAndValues(?bool $createFieldAndValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createFieldAndValues) && !is_bool($createFieldAndValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createFieldAndValues, true), gettype($createFieldAndValues)), __LINE__);
        }
        $this->createFieldAndValues = $createFieldAndValues;
        
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param string $invoiceNumber
     * @return \StructType\CartOrderRequest
     */
    public function setInvoiceNumber(?string $invoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        
        return $this;
    }
    /**
     * Get isBuckaroo value
     * @return bool|null
     */
    public function getIsBuckaroo(): ?bool
    {
        return $this->isBuckaroo;
    }
    /**
     * Set isBuckaroo value
     * @param bool $isBuckaroo
     * @return \StructType\CartOrderRequest
     */
    public function setIsBuckaroo(?bool $isBuckaroo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBuckaroo) && !is_bool($isBuckaroo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBuckaroo, true), gettype($isBuckaroo)), __LINE__);
        }
        $this->isBuckaroo = $isBuckaroo;
        
        return $this;
    }
    /**
     * Get journalEntries value
     * @return mixed[]
     */
    public function getJournalEntries(): array
    {
        return $this->journalEntries;
    }
    /**
     * This method is responsible for validating the values passed to the setJournalEntries method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJournalEntries method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJournalEntriesForArrayConstraintsFromSetJournalEntries(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartOrderRequestJournalEntriesItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($cartOrderRequestJournalEntriesItem) ? get_class($cartOrderRequestJournalEntriesItem) : sprintf('%s(%s)', gettype($cartOrderRequestJournalEntriesItem), var_export($cartOrderRequestJournalEntriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The journalEntries property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set journalEntries value
     * @throws InvalidArgumentException
     * @param mixed[] $journalEntries
     * @return \StructType\CartOrderRequest
     */
    public function setJournalEntries(array $journalEntries = []): self
    {
        // validation for constraint: array
        if ('' !== ($journalEntriesArrayErrorMessage = self::validateJournalEntriesForArrayConstraintsFromSetJournalEntries($journalEntries))) {
            throw new InvalidArgumentException($journalEntriesArrayErrorMessage, __LINE__);
        }
        $this->journalEntries = $journalEntries;
        
        return $this;
    }
    /**
     * Add item to journalEntries value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \StructType\CartOrderRequest
     */
    public function addToJournalEntries(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The journalEntries property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->journalEntries[] = $item;
        
        return $this;
    }
    /**
     * Get populateDataSource value
     * @return bool|null
     */
    public function getPopulateDataSource(): ?bool
    {
        return $this->populateDataSource;
    }
    /**
     * Set populateDataSource value
     * @param bool $populateDataSource
     * @return \StructType\CartOrderRequest
     */
    public function setPopulateDataSource(?bool $populateDataSource = null): self
    {
        // validation for constraint: boolean
        if (!is_null($populateDataSource) && !is_bool($populateDataSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($populateDataSource, true), gettype($populateDataSource)), __LINE__);
        }
        $this->populateDataSource = $populateDataSource;
        
        return $this;
    }
    /**
     * Get processor value
     * @return string|null
     */
    public function getProcessor(): ?string
    {
        return $this->processor;
    }
    /**
     * Set processor value
     * @param string $processor
     * @return \StructType\CartOrderRequest
     */
    public function setProcessor(?string $processor = null): self
    {
        // validation for constraint: string
        if (!is_null($processor) && !is_string($processor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processor, true), gettype($processor)), __LINE__);
        }
        $this->processor = $processor;
        
        return $this;
    }
    /**
     * Get skipSoftErrors value
     * @return bool|null
     */
    public function getSkipSoftErrors(): ?bool
    {
        return $this->skipSoftErrors;
    }
    /**
     * Set skipSoftErrors value
     * @param bool $skipSoftErrors
     * @return \StructType\CartOrderRequest
     */
    public function setSkipSoftErrors(?bool $skipSoftErrors = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skipSoftErrors) && !is_bool($skipSoftErrors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipSoftErrors, true), gettype($skipSoftErrors)), __LINE__);
        }
        $this->skipSoftErrors = $skipSoftErrors;
        
        return $this;
    }
    /**
     * Get softErrorEmail value
     * @return string|null
     */
    public function getSoftErrorEmail(): ?string
    {
        return $this->softErrorEmail;
    }
    /**
     * Set softErrorEmail value
     * @param string $softErrorEmail
     * @return \StructType\CartOrderRequest
     */
    public function setSoftErrorEmail(?string $softErrorEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($softErrorEmail) && !is_string($softErrorEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softErrorEmail, true), gettype($softErrorEmail)), __LINE__);
        }
        $this->softErrorEmail = $softErrorEmail;
        
        return $this;
    }
    /**
     * Get statusCode value
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param string $statusCode
     * @return \StructType\CartOrderRequest
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;
        
        return $this;
    }
    /**
     * Get statusMessage value
     * @return string|null
     */
    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }
    /**
     * Set statusMessage value
     * @param string $statusMessage
     * @return \StructType\CartOrderRequest
     */
    public function setStatusMessage(?string $statusMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($statusMessage) && !is_string($statusMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusMessage, true), gettype($statusMessage)), __LINE__);
        }
        $this->statusMessage = $statusMessage;
        
        return $this;
    }
    /**
     * Get transactionNumber value
     * @return string|null
     */
    public function getTransactionNumber(): ?string
    {
        return $this->transactionNumber;
    }
    /**
     * Set transactionNumber value
     * @param string $transactionNumber
     * @return \StructType\CartOrderRequest
     */
    public function setTransactionNumber(?string $transactionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNumber) && !is_string($transactionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNumber, true), gettype($transactionNumber)), __LINE__);
        }
        $this->transactionNumber = $transactionNumber;
        
        return $this;
    }
    /**
     * Get validateLicense value
     * @return bool|null
     */
    public function getValidateLicense(): ?bool
    {
        return $this->validateLicense;
    }
    /**
     * Set validateLicense value
     * @param bool $validateLicense
     * @return \StructType\CartOrderRequest
     */
    public function setValidateLicense(?bool $validateLicense = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validateLicense) && !is_bool($validateLicense)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validateLicense, true), gettype($validateLicense)), __LINE__);
        }
        $this->validateLicense = $validateLicense;
        
        return $this;
    }
}
