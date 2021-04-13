<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginCredentialsRequest StructType
 * @subpackage Structs
 */
class LoginCredentialsRequest extends AbstractStructBase
{
    /**
     * The account
     * @var \StructType\Account|null
     */
    protected ?\StructType\Account $account = null;
    /**
     * The confirmationLoginURL
     * @var string|null
     */
    protected ?string $confirmationLoginURL = null;
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
     * The duplicateSearchCriteria
     * Meta information extracted from the WSDL
     * - arrayType: tns:SearchCriteria[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\SearchCriteria[]
     */
    protected array $duplicateSearchCriteria = [];
    /**
     * The duplicateSearchQuery
     * @var string|null
     */
    protected ?string $duplicateSearchQuery = null;
    /**
     * The failureEmail
     * @var string|null
     */
    protected ?string $failureEmail = null;
    /**
     * The loginId
     * @var string|null
     */
    protected ?string $loginId = null;
    /**
     * The matchHasLoginIdActionType
     * @var int|null
     */
    protected ?int $matchHasLoginIdActionType = null;
    /**
     * The matchMultipleActionType
     * @var int|null
     */
    protected ?int $matchMultipleActionType = null;
    /**
     * The matchNotFoundActionType
     * @var int|null
     */
    protected ?int $matchNotFoundActionType = null;
    /**
     * The notificationEmail
     * @var string|null
     */
    protected ?string $notificationEmail = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for LoginCredentialsRequest
     * @uses LoginCredentialsRequest::setAccount()
     * @uses LoginCredentialsRequest::setConfirmationLoginURL()
     * @uses LoginCredentialsRequest::setConfirmationMessageFooter()
     * @uses LoginCredentialsRequest::setConfirmationMessageHeader()
     * @uses LoginCredentialsRequest::setConfirmationSender()
     * @uses LoginCredentialsRequest::setConfirmationSignature()
     * @uses LoginCredentialsRequest::setConfirmationSubject()
     * @uses LoginCredentialsRequest::setDuplicateSearchCriteria()
     * @uses LoginCredentialsRequest::setDuplicateSearchQuery()
     * @uses LoginCredentialsRequest::setFailureEmail()
     * @uses LoginCredentialsRequest::setLoginId()
     * @uses LoginCredentialsRequest::setMatchHasLoginIdActionType()
     * @uses LoginCredentialsRequest::setMatchMultipleActionType()
     * @uses LoginCredentialsRequest::setMatchNotFoundActionType()
     * @uses LoginCredentialsRequest::setNotificationEmail()
     * @uses LoginCredentialsRequest::setPassword()
     * @param \StructType\Account $account
     * @param string $confirmationLoginURL
     * @param string $confirmationMessageFooter
     * @param string $confirmationMessageHeader
     * @param string $confirmationSender
     * @param string $confirmationSignature
     * @param string $confirmationSubject
     * @param \StructType\SearchCriteria[] $duplicateSearchCriteria
     * @param string $duplicateSearchQuery
     * @param string $failureEmail
     * @param string $loginId
     * @param int $matchHasLoginIdActionType
     * @param int $matchMultipleActionType
     * @param int $matchNotFoundActionType
     * @param string $notificationEmail
     * @param string $password
     */
    public function __construct(?\StructType\Account $account = null, ?string $confirmationLoginURL = null, ?string $confirmationMessageFooter = null, ?string $confirmationMessageHeader = null, ?string $confirmationSender = null, ?string $confirmationSignature = null, ?string $confirmationSubject = null, array $duplicateSearchCriteria = [], ?string $duplicateSearchQuery = null, ?string $failureEmail = null, ?string $loginId = null, ?int $matchHasLoginIdActionType = null, ?int $matchMultipleActionType = null, ?int $matchNotFoundActionType = null, ?string $notificationEmail = null, ?string $password = null)
    {
        $this
            ->setAccount($account)
            ->setConfirmationLoginURL($confirmationLoginURL)
            ->setConfirmationMessageFooter($confirmationMessageFooter)
            ->setConfirmationMessageHeader($confirmationMessageHeader)
            ->setConfirmationSender($confirmationSender)
            ->setConfirmationSignature($confirmationSignature)
            ->setConfirmationSubject($confirmationSubject)
            ->setDuplicateSearchCriteria($duplicateSearchCriteria)
            ->setDuplicateSearchQuery($duplicateSearchQuery)
            ->setFailureEmail($failureEmail)
            ->setLoginId($loginId)
            ->setMatchHasLoginIdActionType($matchHasLoginIdActionType)
            ->setMatchMultipleActionType($matchMultipleActionType)
            ->setMatchNotFoundActionType($matchNotFoundActionType)
            ->setNotificationEmail($notificationEmail)
            ->setPassword($password);
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
     * @return \StructType\LoginCredentialsRequest
     */
    public function setAccount(?\StructType\Account $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get confirmationLoginURL value
     * @return string|null
     */
    public function getConfirmationLoginURL(): ?string
    {
        return $this->confirmationLoginURL;
    }
    /**
     * Set confirmationLoginURL value
     * @param string $confirmationLoginURL
     * @return \StructType\LoginCredentialsRequest
     */
    public function setConfirmationLoginURL(?string $confirmationLoginURL = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationLoginURL) && !is_string($confirmationLoginURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationLoginURL, true), gettype($confirmationLoginURL)), __LINE__);
        }
        $this->confirmationLoginURL = $confirmationLoginURL;
        
        return $this;
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
     * @return \StructType\LoginCredentialsRequest
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
     * @return \StructType\LoginCredentialsRequest
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
     * @return \StructType\LoginCredentialsRequest
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
     * @return \StructType\LoginCredentialsRequest
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
     * @return \StructType\LoginCredentialsRequest
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
     * Get duplicateSearchCriteria value
     * @return \StructType\SearchCriteria[]
     */
    public function getDuplicateSearchCriteria(): array
    {
        return $this->duplicateSearchCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setDuplicateSearchCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDuplicateSearchCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDuplicateSearchCriteriaForArrayConstraintsFromSetDuplicateSearchCriteria(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $loginCredentialsRequestDuplicateSearchCriteriaItem) {
            // validation for constraint: itemType
            if (!$loginCredentialsRequestDuplicateSearchCriteriaItem instanceof \StructType\SearchCriteria) {
                $invalidValues[] = is_object($loginCredentialsRequestDuplicateSearchCriteriaItem) ? get_class($loginCredentialsRequestDuplicateSearchCriteriaItem) : sprintf('%s(%s)', gettype($loginCredentialsRequestDuplicateSearchCriteriaItem), var_export($loginCredentialsRequestDuplicateSearchCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The duplicateSearchCriteria property can only contain items of type \StructType\SearchCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set duplicateSearchCriteria value
     * @throws InvalidArgumentException
     * @param \StructType\SearchCriteria[] $duplicateSearchCriteria
     * @return \StructType\LoginCredentialsRequest
     */
    public function setDuplicateSearchCriteria(array $duplicateSearchCriteria = []): self
    {
        // validation for constraint: array
        if ('' !== ($duplicateSearchCriteriaArrayErrorMessage = self::validateDuplicateSearchCriteriaForArrayConstraintsFromSetDuplicateSearchCriteria($duplicateSearchCriteria))) {
            throw new InvalidArgumentException($duplicateSearchCriteriaArrayErrorMessage, __LINE__);
        }
        $this->duplicateSearchCriteria = $duplicateSearchCriteria;
        
        return $this;
    }
    /**
     * Add item to duplicateSearchCriteria value
     * @throws InvalidArgumentException
     * @param \StructType\SearchCriteria $item
     * @return \StructType\LoginCredentialsRequest
     */
    public function addToDuplicateSearchCriteria(\StructType\SearchCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SearchCriteria) {
            throw new InvalidArgumentException(sprintf('The duplicateSearchCriteria property can only contain items of type \StructType\SearchCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->duplicateSearchCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get duplicateSearchQuery value
     * @return string|null
     */
    public function getDuplicateSearchQuery(): ?string
    {
        return $this->duplicateSearchQuery;
    }
    /**
     * Set duplicateSearchQuery value
     * @param string $duplicateSearchQuery
     * @return \StructType\LoginCredentialsRequest
     */
    public function setDuplicateSearchQuery(?string $duplicateSearchQuery = null): self
    {
        // validation for constraint: string
        if (!is_null($duplicateSearchQuery) && !is_string($duplicateSearchQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicateSearchQuery, true), gettype($duplicateSearchQuery)), __LINE__);
        }
        $this->duplicateSearchQuery = $duplicateSearchQuery;
        
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
     * @return \StructType\LoginCredentialsRequest
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
     * @return \StructType\LoginCredentialsRequest
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
     * Get matchHasLoginIdActionType value
     * @return int|null
     */
    public function getMatchHasLoginIdActionType(): ?int
    {
        return $this->matchHasLoginIdActionType;
    }
    /**
     * Set matchHasLoginIdActionType value
     * @param int $matchHasLoginIdActionType
     * @return \StructType\LoginCredentialsRequest
     */
    public function setMatchHasLoginIdActionType(?int $matchHasLoginIdActionType = null): self
    {
        // validation for constraint: int
        if (!is_null($matchHasLoginIdActionType) && !(is_int($matchHasLoginIdActionType) || ctype_digit($matchHasLoginIdActionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchHasLoginIdActionType, true), gettype($matchHasLoginIdActionType)), __LINE__);
        }
        $this->matchHasLoginIdActionType = $matchHasLoginIdActionType;
        
        return $this;
    }
    /**
     * Get matchMultipleActionType value
     * @return int|null
     */
    public function getMatchMultipleActionType(): ?int
    {
        return $this->matchMultipleActionType;
    }
    /**
     * Set matchMultipleActionType value
     * @param int $matchMultipleActionType
     * @return \StructType\LoginCredentialsRequest
     */
    public function setMatchMultipleActionType(?int $matchMultipleActionType = null): self
    {
        // validation for constraint: int
        if (!is_null($matchMultipleActionType) && !(is_int($matchMultipleActionType) || ctype_digit($matchMultipleActionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchMultipleActionType, true), gettype($matchMultipleActionType)), __LINE__);
        }
        $this->matchMultipleActionType = $matchMultipleActionType;
        
        return $this;
    }
    /**
     * Get matchNotFoundActionType value
     * @return int|null
     */
    public function getMatchNotFoundActionType(): ?int
    {
        return $this->matchNotFoundActionType;
    }
    /**
     * Set matchNotFoundActionType value
     * @param int $matchNotFoundActionType
     * @return \StructType\LoginCredentialsRequest
     */
    public function setMatchNotFoundActionType(?int $matchNotFoundActionType = null): self
    {
        // validation for constraint: int
        if (!is_null($matchNotFoundActionType) && !(is_int($matchNotFoundActionType) || ctype_digit($matchNotFoundActionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchNotFoundActionType, true), gettype($matchNotFoundActionType)), __LINE__);
        }
        $this->matchNotFoundActionType = $matchNotFoundActionType;
        
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
     * @return \StructType\LoginCredentialsRequest
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
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\LoginCredentialsRequest
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
