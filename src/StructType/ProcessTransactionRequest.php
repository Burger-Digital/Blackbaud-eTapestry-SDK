<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessTransactionRequest StructType
 * @subpackage Structs
 */
class ProcessTransactionRequest extends AbstractStructBase
{
    /**
     * The confirmationMessageFooter
     * @var string|null
     */
    protected ?string $confirmationMessageFooter = null;
    /**
     * The confirmationMessageHeader
     * @var string|null
     */
    protected ?string $confirmationMessageHeader = null;
    /**
     * The confirmationSender
     * @var string|null
     */
    protected ?string $confirmationSender = null;
    /**
     * The confirmationSignature
     * @var string|null
     */
    protected ?string $confirmationSignature = null;
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
     * The donorEmail
     * @var string|null
     */
    protected ?string $donorEmail = null;
    /**
     * The failureEmail
     * @var string|null
     */
    protected ?string $failureEmail = null;
    /**
     * The notificationEmail
     * @var string|null
     */
    protected ?string $notificationEmail = null;
    /**
     * The processor
     * @var string|null
     */
    protected ?string $processor = null;
    /**
     * The transaction
     * @var mixed|null
     */
    protected ?mixed $transaction = null;
    /**
     * Constructor method for ProcessTransactionRequest
     * @uses ProcessTransactionRequest::setConfirmationMessageFooter()
     * @uses ProcessTransactionRequest::setConfirmationMessageHeader()
     * @uses ProcessTransactionRequest::setConfirmationSender()
     * @uses ProcessTransactionRequest::setConfirmationSignature()
     * @uses ProcessTransactionRequest::setConfirmationSubject()
     * @uses ProcessTransactionRequest::setCreateFieldAndValues()
     * @uses ProcessTransactionRequest::setDonorEmail()
     * @uses ProcessTransactionRequest::setFailureEmail()
     * @uses ProcessTransactionRequest::setNotificationEmail()
     * @uses ProcessTransactionRequest::setProcessor()
     * @uses ProcessTransactionRequest::setTransaction()
     * @param string $confirmationMessageFooter
     * @param string $confirmationMessageHeader
     * @param string $confirmationSender
     * @param string $confirmationSignature
     * @param string $confirmationSubject
     * @param bool $createFieldAndValues
     * @param string $donorEmail
     * @param string $failureEmail
     * @param string $notificationEmail
     * @param string $processor
     * @param mixed $transaction
     */
    public function __construct(?string $confirmationMessageFooter = null, ?string $confirmationMessageHeader = null, ?string $confirmationSender = null, ?string $confirmationSignature = null, ?string $confirmationSubject = null, ?bool $createFieldAndValues = null, ?string $donorEmail = null, ?string $failureEmail = null, ?string $notificationEmail = null, ?string $processor = null, ?mixed $transaction = null)
    {
        $this
            ->setConfirmationMessageFooter($confirmationMessageFooter)
            ->setConfirmationMessageHeader($confirmationMessageHeader)
            ->setConfirmationSender($confirmationSender)
            ->setConfirmationSignature($confirmationSignature)
            ->setConfirmationSubject($confirmationSubject)
            ->setCreateFieldAndValues($createFieldAndValues)
            ->setDonorEmail($donorEmail)
            ->setFailureEmail($failureEmail)
            ->setNotificationEmail($notificationEmail)
            ->setProcessor($processor)
            ->setTransaction($transaction);
    }
    /**
     * Get confirmationMessageFooter value
     * @return string|null
     */
    public function getConfirmationMessageFooter(): ?string
    {
        return $this->confirmationMessageFooter;
    }
    /**
     * Set confirmationMessageFooter value
     * @param string $confirmationMessageFooter
     * @return \StructType\ProcessTransactionRequest
     */
    public function setConfirmationMessageFooter(?string $confirmationMessageFooter = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationMessageFooter) && !is_string($confirmationMessageFooter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationMessageFooter, true), gettype($confirmationMessageFooter)), __LINE__);
        }
        $this->confirmationMessageFooter = $confirmationMessageFooter;
        
        return $this;
    }
    /**
     * Get confirmationMessageHeader value
     * @return string|null
     */
    public function getConfirmationMessageHeader(): ?string
    {
        return $this->confirmationMessageHeader;
    }
    /**
     * Set confirmationMessageHeader value
     * @param string $confirmationMessageHeader
     * @return \StructType\ProcessTransactionRequest
     */
    public function setConfirmationMessageHeader(?string $confirmationMessageHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationMessageHeader) && !is_string($confirmationMessageHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationMessageHeader, true), gettype($confirmationMessageHeader)), __LINE__);
        }
        $this->confirmationMessageHeader = $confirmationMessageHeader;
        
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
     * @return \StructType\ProcessTransactionRequest
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
     * Get confirmationSignature value
     * @return string|null
     */
    public function getConfirmationSignature(): ?string
    {
        return $this->confirmationSignature;
    }
    /**
     * Set confirmationSignature value
     * @param string $confirmationSignature
     * @return \StructType\ProcessTransactionRequest
     */
    public function setConfirmationSignature(?string $confirmationSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationSignature) && !is_string($confirmationSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationSignature, true), gettype($confirmationSignature)), __LINE__);
        }
        $this->confirmationSignature = $confirmationSignature;
        
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
     * @return \StructType\ProcessTransactionRequest
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
     * @return \StructType\ProcessTransactionRequest
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
     * Get donorEmail value
     * @return string|null
     */
    public function getDonorEmail(): ?string
    {
        return $this->donorEmail;
    }
    /**
     * Set donorEmail value
     * @param string $donorEmail
     * @return \StructType\ProcessTransactionRequest
     */
    public function setDonorEmail(?string $donorEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($donorEmail) && !is_string($donorEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($donorEmail, true), gettype($donorEmail)), __LINE__);
        }
        $this->donorEmail = $donorEmail;
        
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
     * @return \StructType\ProcessTransactionRequest
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
     * @return \StructType\ProcessTransactionRequest
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
     * @return \StructType\ProcessTransactionRequest
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
     * Get transaction value
     * @return mixed|null
     */
    public function getTransaction(): ?mixed
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param mixed $transaction
     * @return \StructType\ProcessTransactionRequest
     */
    public function setTransaction(?mixed $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
}
