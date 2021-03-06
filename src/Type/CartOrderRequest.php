<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CartOrderRequest implements RequestInterface
{

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $account;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var bool
     */
    private $createFieldAndValues;

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var bool
     */
    private $isBuckaroo;

    /**
     * @var mixed
     */
    private $journalEntries;

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
    private $skipSoftErrors;

    /**
     * @var string
     */
    private $softErrorEmail;

    /**
     * @var string
     */
    private $statusCode;

    /**
     * @var string
     */
    private $statusMessage;

    /**
     * @var string
     */
    private $transactionNumber;

    /**
     * @var bool
     */
    private $validateLicense;

    /**
     * Constructor
     *
     * @var \BurgerDigital\eTapestry\Type\Account $account
     * @var string $amount
     * @var bool $createFieldAndValues
     * @var string $invoiceNumber
     * @var bool $isBuckaroo
     * @var mixed $journalEntries
     * @var bool $populateDataSource
     * @var string $processor
     * @var bool $skipSoftErrors
     * @var string $softErrorEmail
     * @var string $statusCode
     * @var string $statusMessage
     * @var string $transactionNumber
     * @var bool $validateLicense
     */
    public function __construct($account, $amount, $createFieldAndValues, $invoiceNumber, $isBuckaroo, $journalEntries, $populateDataSource, $processor, $skipSoftErrors, $softErrorEmail, $statusCode, $statusMessage, $transactionNumber, $validateLicense)
    {
        $this->account = $account;
        $this->amount = $amount;
        $this->createFieldAndValues = $createFieldAndValues;
        $this->invoiceNumber = $invoiceNumber;
        $this->isBuckaroo = $isBuckaroo;
        $this->journalEntries = $journalEntries;
        $this->populateDataSource = $populateDataSource;
        $this->processor = $processor;
        $this->skipSoftErrors = $skipSoftErrors;
        $this->softErrorEmail = $softErrorEmail;
        $this->statusCode = $statusCode;
        $this->statusMessage = $statusMessage;
        $this->transactionNumber = $transactionNumber;
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
     * @return CartOrderRequest
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
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return CartOrderRequest
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

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
     * @return CartOrderRequest
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
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return CartOrderRequest
     */
    public function withInvoiceNumber($invoiceNumber)
    {
        $new = clone $this;
        $new->invoiceNumber = $invoiceNumber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsBuckaroo()
    {
        return $this->isBuckaroo;
    }

    /**
     * @param bool $isBuckaroo
     * @return CartOrderRequest
     */
    public function withIsBuckaroo($isBuckaroo)
    {
        $new = clone $this;
        $new->isBuckaroo = $isBuckaroo;

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
     * @return CartOrderRequest
     */
    public function withJournalEntries($journalEntries)
    {
        $new = clone $this;
        $new->journalEntries = $journalEntries;

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
     * @return CartOrderRequest
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
     * @return CartOrderRequest
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
    public function getSkipSoftErrors()
    {
        return $this->skipSoftErrors;
    }

    /**
     * @param bool $skipSoftErrors
     * @return CartOrderRequest
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
     * @return CartOrderRequest
     */
    public function withSoftErrorEmail($softErrorEmail)
    {
        $new = clone $this;
        $new->softErrorEmail = $softErrorEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return CartOrderRequest
     */
    public function withStatusCode($statusCode)
    {
        $new = clone $this;
        $new->statusCode = $statusCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return CartOrderRequest
     */
    public function withStatusMessage($statusMessage)
    {
        $new = clone $this;
        $new->statusMessage = $statusMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransactionNumber()
    {
        return $this->transactionNumber;
    }

    /**
     * @param string $transactionNumber
     * @return CartOrderRequest
     */
    public function withTransactionNumber($transactionNumber)
    {
        $new = clone $this;
        $new->transactionNumber = $transactionNumber;

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
     * @return CartOrderRequest
     */
    public function withValidateLicense($validateLicense)
    {
        $new = clone $this;
        $new->validateLicense = $validateLicense;

        return $new;
    }


}

