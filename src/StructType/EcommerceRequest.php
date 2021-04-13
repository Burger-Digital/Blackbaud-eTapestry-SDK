<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EcommerceRequest StructType
 * @subpackage Structs
 */
class EcommerceRequest extends AbstractStructBase
{
    /**
     * The account
     * @var \StructType\Account|null
     */
    protected ?\StructType\Account $account = null;
    /**
     * The confirmationEmailTemplate
     * @var string|null
     */
    protected ?string $confirmationEmailTemplate = null;
    /**
     * The confirmationSender
     * @var string|null
     */
    protected ?string $confirmationSender = null;
    /**
     * The confirmationSubject
     * @var string|null
     */
    protected ?string $confirmationSubject = null;
    /**
     * The createFieldAndValues
     * @var bool|null
     */
    protected ?bool $createFieldAndValues = null;
    /**
     * The failureEmail
     * @var string|null
     */
    protected ?string $failureEmail = null;
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
     * The notificationEmail
     * @var string|null
     */
    protected ?string $notificationEmail = null;
    /**
     * The notificationSubject
     * @var string|null
     */
    protected ?string $notificationSubject = null;
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
     * The skipProcessing
     * @var bool|null
     */
    protected ?bool $skipProcessing = null;
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
     * The validateLicense
     * @var bool|null
     */
    protected ?bool $validateLicense = null;
    /**
     * Constructor method for EcommerceRequest
     * @uses EcommerceRequest::setAccount()
     * @uses EcommerceRequest::setConfirmationEmailTemplate()
     * @uses EcommerceRequest::setConfirmationSender()
     * @uses EcommerceRequest::setConfirmationSubject()
     * @uses EcommerceRequest::setCreateFieldAndValues()
     * @uses EcommerceRequest::setFailureEmail()
     * @uses EcommerceRequest::setJournalEntries()
     * @uses EcommerceRequest::setNotificationEmail()
     * @uses EcommerceRequest::setNotificationSubject()
     * @uses EcommerceRequest::setPopulateDataSource()
     * @uses EcommerceRequest::setProcessor()
     * @uses EcommerceRequest::setSkipProcessing()
     * @uses EcommerceRequest::setSkipSoftErrors()
     * @uses EcommerceRequest::setSoftErrorEmail()
     * @uses EcommerceRequest::setValidateLicense()
     * @param \StructType\Account $account
     * @param string $confirmationEmailTemplate
     * @param string $confirmationSender
     * @param string $confirmationSubject
     * @param bool $createFieldAndValues
     * @param string $failureEmail
     * @param mixed[] $journalEntries
     * @param string $notificationEmail
     * @param string $notificationSubject
     * @param bool $populateDataSource
     * @param string $processor
     * @param bool $skipProcessing
     * @param bool $skipSoftErrors
     * @param string $softErrorEmail
     * @param bool $validateLicense
     */
    public function __construct(?\StructType\Account $account = null, ?string $confirmationEmailTemplate = null, ?string $confirmationSender = null, ?string $confirmationSubject = null, ?bool $createFieldAndValues = null, ?string $failureEmail = null, array $journalEntries = [], ?string $notificationEmail = null, ?string $notificationSubject = null, ?bool $populateDataSource = null, ?string $processor = null, ?bool $skipProcessing = null, ?bool $skipSoftErrors = null, ?string $softErrorEmail = null, ?bool $validateLicense = null)
    {
        $this
            ->setAccount($account)
            ->setConfirmationEmailTemplate($confirmationEmailTemplate)
            ->setConfirmationSender($confirmationSender)
            ->setConfirmationSubject($confirmationSubject)
            ->setCreateFieldAndValues($createFieldAndValues)
            ->setFailureEmail($failureEmail)
            ->setJournalEntries($journalEntries)
            ->setNotificationEmail($notificationEmail)
            ->setNotificationSubject($notificationSubject)
            ->setPopulateDataSource($populateDataSource)
            ->setProcessor($processor)
            ->setSkipProcessing($skipProcessing)
            ->setSkipSoftErrors($skipSoftErrors)
            ->setSoftErrorEmail($softErrorEmail)
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
     * @return \StructType\EcommerceRequest
     */
    public function setAccount(?\StructType\Account $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get confirmationEmailTemplate value
     * @return string|null
     */
    public function getConfirmationEmailTemplate(): ?string
    {
        return $this->confirmationEmailTemplate;
    }
    /**
     * Set confirmationEmailTemplate value
     * @param string $confirmationEmailTemplate
     * @return \StructType\EcommerceRequest
     */
    public function setConfirmationEmailTemplate(?string $confirmationEmailTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationEmailTemplate) && !is_string($confirmationEmailTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationEmailTemplate, true), gettype($confirmationEmailTemplate)), __LINE__);
        }
        $this->confirmationEmailTemplate = $confirmationEmailTemplate;
        
        return $this;
    }
    /**
     * Get confirmationSender value
     * @return string|null
     */
    public function getConfirmationSender(): ?string
    {
        return $this->confirmationSender;
    }
    /**
     * Set confirmationSender value
     * @param string $confirmationSender
     * @return \StructType\EcommerceRequest
     */
    public function setConfirmationSender(?string $confirmationSender = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationSender) && !is_string($confirmationSender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationSender, true), gettype($confirmationSender)), __LINE__);
        }
        $this->confirmationSender = $confirmationSender;
        
        return $this;
    }
    /**
     * Get confirmationSubject value
     * @return string|null
     */
    public function getConfirmationSubject(): ?string
    {
        return $this->confirmationSubject;
    }
    /**
     * Set confirmationSubject value
     * @param string $confirmationSubject
     * @return \StructType\EcommerceRequest
     */
    public function setConfirmationSubject(?string $confirmationSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationSubject) && !is_string($confirmationSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationSubject, true), gettype($confirmationSubject)), __LINE__);
        }
        $this->confirmationSubject = $confirmationSubject;
        
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
     * @return \StructType\EcommerceRequest
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
     * Get failureEmail value
     * @return string|null
     */
    public function getFailureEmail(): ?string
    {
        return $this->failureEmail;
    }
    /**
     * Set failureEmail value
     * @param string $failureEmail
     * @return \StructType\EcommerceRequest
     */
    public function setFailureEmail(?string $failureEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($failureEmail) && !is_string($failureEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($failureEmail, true), gettype($failureEmail)), __LINE__);
        }
        $this->failureEmail = $failureEmail;
        
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
        foreach ($values as $ecommerceRequestJournalEntriesItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($ecommerceRequestJournalEntriesItem) ? get_class($ecommerceRequestJournalEntriesItem) : sprintf('%s(%s)', gettype($ecommerceRequestJournalEntriesItem), var_export($ecommerceRequestJournalEntriesItem, true));
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
     * @return \StructType\EcommerceRequest
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
     * @return \StructType\EcommerceRequest
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
     * Get notificationEmail value
     * @return string|null
     */
    public function getNotificationEmail(): ?string
    {
        return $this->notificationEmail;
    }
    /**
     * Set notificationEmail value
     * @param string $notificationEmail
     * @return \StructType\EcommerceRequest
     */
    public function setNotificationEmail(?string $notificationEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationEmail) && !is_string($notificationEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationEmail, true), gettype($notificationEmail)), __LINE__);
        }
        $this->notificationEmail = $notificationEmail;
        
        return $this;
    }
    /**
     * Get notificationSubject value
     * @return string|null
     */
    public function getNotificationSubject(): ?string
    {
        return $this->notificationSubject;
    }
    /**
     * Set notificationSubject value
     * @param string $notificationSubject
     * @return \StructType\EcommerceRequest
     */
    public function setNotificationSubject(?string $notificationSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationSubject) && !is_string($notificationSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationSubject, true), gettype($notificationSubject)), __LINE__);
        }
        $this->notificationSubject = $notificationSubject;
        
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
     * @return \StructType\EcommerceRequest
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
     * @return \StructType\EcommerceRequest
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
     * Get skipProcessing value
     * @return bool|null
     */
    public function getSkipProcessing(): ?bool
    {
        return $this->skipProcessing;
    }
    /**
     * Set skipProcessing value
     * @param bool $skipProcessing
     * @return \StructType\EcommerceRequest
     */
    public function setSkipProcessing(?bool $skipProcessing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skipProcessing) && !is_bool($skipProcessing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipProcessing, true), gettype($skipProcessing)), __LINE__);
        }
        $this->skipProcessing = $skipProcessing;
        
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
     * @return \StructType\EcommerceRequest
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
     * @return \StructType\EcommerceRequest
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
     * @return \StructType\EcommerceRequest
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
