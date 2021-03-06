<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EcommerceRequest implements RequestInterface
{

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $account;

    /**
     * @var string
     */
    private $confirmationEmailTemplate;

    /**
     * @var string
     */
    private $confirmationSender;

    /**
     * @var string
     */
    private $confirmationSubject;

    /**
     * @var bool
     */
    private $createFieldAndValues;

    /**
     * @var string
     */
    private $failureEmail;

    /**
     * @var mixed
     */
    private $journalEntries;

    /**
     * @var string
     */
    private $notificationEmail;

    /**
     * @var string
     */
    private $notificationSubject;

    /**
     * @var bool
     */
    private $populateDataSource;

    /**
     * @var string
     */
    private $processor;

    /**
     * @var bool
     */
    private $skipProcessing;

    /**
     * @var bool
     */
    private $skipSoftErrors;

    /**
     * @var string
     */
    private $softErrorEmail;

    /**
     * @var bool
     */
    private $validateLicense;

    /**
     * Constructor
     *
     * @var \BurgerDigital\eTapestry\Type\Account $account
     * @var string $confirmationEmailTemplate
     * @var string $confirmationSender
     * @var string $confirmationSubject
     * @var bool $createFieldAndValues
     * @var string $failureEmail
     * @var mixed $journalEntries
     * @var string $notificationEmail
     * @var string $notificationSubject
     * @var bool $populateDataSource
     * @var string $processor
     * @var bool $skipProcessing
     * @var bool $skipSoftErrors
     * @var string $softErrorEmail
     * @var bool $validateLicense
     */
    public function __construct($account, $confirmationEmailTemplate, $confirmationSender, $confirmationSubject, $createFieldAndValues, $failureEmail, $journalEntries, $notificationEmail, $notificationSubject, $populateDataSource, $processor, $skipProcessing, $skipSoftErrors, $softErrorEmail, $validateLicense)
    {
        $this->account = $account;
        $this->confirmationEmailTemplate = $confirmationEmailTemplate;
        $this->confirmationSender = $confirmationSender;
        $this->confirmationSubject = $confirmationSubject;
        $this->createFieldAndValues = $createFieldAndValues;
        $this->failureEmail = $failureEmail;
        $this->journalEntries = $journalEntries;
        $this->notificationEmail = $notificationEmail;
        $this->notificationSubject = $notificationSubject;
        $this->populateDataSource = $populateDataSource;
        $this->processor = $processor;
        $this->skipProcessing = $skipProcessing;
        $this->skipSoftErrors = $skipSoftErrors;
        $this->softErrorEmail = $softErrorEmail;
        $this->validateLicense = $validateLicense;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Account $account
     * @return EcommerceRequest
     */
    public function withAccount($account)
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationEmailTemplate()
    {
        return $this->confirmationEmailTemplate;
    }

    /**
     * @param string $confirmationEmailTemplate
     * @return EcommerceRequest
     */
    public function withConfirmationEmailTemplate($confirmationEmailTemplate)
    {
        $new = clone $this;
        $new->confirmationEmailTemplate = $confirmationEmailTemplate;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationSender()
    {
        return $this->confirmationSender;
    }

    /**
     * @param string $confirmationSender
     * @return EcommerceRequest
     */
    public function withConfirmationSender($confirmationSender)
    {
        $new = clone $this;
        $new->confirmationSender = $confirmationSender;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationSubject()
    {
        return $this->confirmationSubject;
    }

    /**
     * @param string $confirmationSubject
     * @return EcommerceRequest
     */
    public function withConfirmationSubject($confirmationSubject)
    {
        $new = clone $this;
        $new->confirmationSubject = $confirmationSubject;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreateFieldAndValues()
    {
        return $this->createFieldAndValues;
    }

    /**
     * @param bool $createFieldAndValues
     * @return EcommerceRequest
     */
    public function withCreateFieldAndValues($createFieldAndValues)
    {
        $new = clone $this;
        $new->createFieldAndValues = $createFieldAndValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getFailureEmail()
    {
        return $this->failureEmail;
    }

    /**
     * @param string $failureEmail
     * @return EcommerceRequest
     */
    public function withFailureEmail($failureEmail)
    {
        $new = clone $this;
        $new->failureEmail = $failureEmail;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getJournalEntries()
    {
        return $this->journalEntries;
    }

    /**
     * @param mixed $journalEntries
     * @return EcommerceRequest
     */
    public function withJournalEntries($journalEntries)
    {
        $new = clone $this;
        $new->journalEntries = $journalEntries;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }

    /**
     * @param string $notificationEmail
     * @return EcommerceRequest
     */
    public function withNotificationEmail($notificationEmail)
    {
        $new = clone $this;
        $new->notificationEmail = $notificationEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationSubject()
    {
        return $this->notificationSubject;
    }

    /**
     * @param string $notificationSubject
     * @return EcommerceRequest
     */
    public function withNotificationSubject($notificationSubject)
    {
        $new = clone $this;
        $new->notificationSubject = $notificationSubject;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPopulateDataSource()
    {
        return $this->populateDataSource;
    }

    /**
     * @param bool $populateDataSource
     * @return EcommerceRequest
     */
    public function withPopulateDataSource($populateDataSource)
    {
        $new = clone $this;
        $new->populateDataSource = $populateDataSource;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * @param string $processor
     * @return EcommerceRequest
     */
    public function withProcessor($processor)
    {
        $new = clone $this;
        $new->processor = $processor;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSkipProcessing()
    {
        return $this->skipProcessing;
    }

    /**
     * @param bool $skipProcessing
     * @return EcommerceRequest
     */
    public function withSkipProcessing($skipProcessing)
    {
        $new = clone $this;
        $new->skipProcessing = $skipProcessing;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSkipSoftErrors()
    {
        return $this->skipSoftErrors;
    }

    /**
     * @param bool $skipSoftErrors
     * @return EcommerceRequest
     */
    public function withSkipSoftErrors($skipSoftErrors)
    {
        $new = clone $this;
        $new->skipSoftErrors = $skipSoftErrors;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoftErrorEmail()
    {
        return $this->softErrorEmail;
    }

    /**
     * @param string $softErrorEmail
     * @return EcommerceRequest
     */
    public function withSoftErrorEmail($softErrorEmail)
    {
        $new = clone $this;
        $new->softErrorEmail = $softErrorEmail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getValidateLicense()
    {
        return $this->validateLicense;
    }

    /**
     * @param bool $validateLicense
     * @return EcommerceRequest
     */
    public function withValidateLicense($validateLicense)
    {
        $new = clone $this;
        $new->validateLicense = $validateLicense;

        return $new;
    }


}

