<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProcessTransactionRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $confirmationMessageFooter;

    /**
     * @var string
     */
    private $confirmationMessageHeader;

    /**
     * @var string
     */
    private $confirmationSender;

    /**
     * @var string
     */
    private $confirmationSignature;

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
    private $donorEmail;

    /**
     * @var string
     */
    private $failureEmail;

    /**
     * @var string
     */
    private $notificationEmail;

    /**
     * @var string
     */
    private $processor;

    /**
     * @var mixed
     */
    private $transaction;

    /**
     * Constructor
     *
     * @var string $confirmationMessageFooter
     * @var string $confirmationMessageHeader
     * @var string $confirmationSender
     * @var string $confirmationSignature
     * @var string $confirmationSubject
     * @var bool $createFieldAndValues
     * @var string $donorEmail
     * @var string $failureEmail
     * @var string $notificationEmail
     * @var string $processor
     * @var mixed $transaction
     */
    public function __construct($confirmationMessageFooter, $confirmationMessageHeader, $confirmationSender, $confirmationSignature, $confirmationSubject, $createFieldAndValues, $donorEmail, $failureEmail, $notificationEmail, $processor, $transaction)
    {
        $this->confirmationMessageFooter = $confirmationMessageFooter;
        $this->confirmationMessageHeader = $confirmationMessageHeader;
        $this->confirmationSender = $confirmationSender;
        $this->confirmationSignature = $confirmationSignature;
        $this->confirmationSubject = $confirmationSubject;
        $this->createFieldAndValues = $createFieldAndValues;
        $this->donorEmail = $donorEmail;
        $this->failureEmail = $failureEmail;
        $this->notificationEmail = $notificationEmail;
        $this->processor = $processor;
        $this->transaction = $transaction;
    }

    /**
     * @return string
     */
    public function getConfirmationMessageFooter()
    {
        return $this->confirmationMessageFooter;
    }

    /**
     * @param string $confirmationMessageFooter
     * @return ProcessTransactionRequest
     */
    public function withConfirmationMessageFooter($confirmationMessageFooter)
    {
        $new = clone $this;
        $new->confirmationMessageFooter = $confirmationMessageFooter;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationMessageHeader()
    {
        return $this->confirmationMessageHeader;
    }

    /**
     * @param string $confirmationMessageHeader
     * @return ProcessTransactionRequest
     */
    public function withConfirmationMessageHeader($confirmationMessageHeader)
    {
        $new = clone $this;
        $new->confirmationMessageHeader = $confirmationMessageHeader;

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
     * @return ProcessTransactionRequest
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
    public function getConfirmationSignature()
    {
        return $this->confirmationSignature;
    }

    /**
     * @param string $confirmationSignature
     * @return ProcessTransactionRequest
     */
    public function withConfirmationSignature($confirmationSignature)
    {
        $new = clone $this;
        $new->confirmationSignature = $confirmationSignature;

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
     * @return ProcessTransactionRequest
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
     * @return ProcessTransactionRequest
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
    public function getDonorEmail()
    {
        return $this->donorEmail;
    }

    /**
     * @param string $donorEmail
     * @return ProcessTransactionRequest
     */
    public function withDonorEmail($donorEmail)
    {
        $new = clone $this;
        $new->donorEmail = $donorEmail;

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
     * @return ProcessTransactionRequest
     */
    public function withFailureEmail($failureEmail)
    {
        $new = clone $this;
        $new->failureEmail = $failureEmail;

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
     * @return ProcessTransactionRequest
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
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * @param string $processor
     * @return ProcessTransactionRequest
     */
    public function withProcessor($processor)
    {
        $new = clone $this;
        $new->processor = $processor;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param mixed $transaction
     * @return ProcessTransactionRequest
     */
    public function withTransaction($transaction)
    {
        $new = clone $this;
        $new->transaction = $transaction;

        return $new;
    }


}

