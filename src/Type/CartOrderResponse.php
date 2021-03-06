<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CartOrderResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var bool
     */
    private $createdNewAccount;

    /**
     * @var string
     */
    private $journalEntryRefs;

    /**
     * @var string
     */
    private $responseUrl;

    /**
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param int $accountNumber
     * @return CartOrderResponse
     */
    public function withAccountNumber($accountNumber)
    {
        $new = clone $this;
        $new->accountNumber = $accountNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountRef()
    {
        return $this->accountRef;
    }

    /**
     * @param string $accountRef
     * @return CartOrderResponse
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreatedNewAccount()
    {
        return $this->createdNewAccount;
    }

    /**
     * @param bool $createdNewAccount
     * @return CartOrderResponse
     */
    public function withCreatedNewAccount($createdNewAccount)
    {
        $new = clone $this;
        $new->createdNewAccount = $createdNewAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getJournalEntryRefs()
    {
        return $this->journalEntryRefs;
    }

    /**
     * @param string $journalEntryRefs
     * @return CartOrderResponse
     */
    public function withJournalEntryRefs($journalEntryRefs)
    {
        $new = clone $this;
        $new->journalEntryRefs = $journalEntryRefs;

        return $new;
    }

    /**
     * @return string
     */
    public function getResponseUrl()
    {
        return $this->responseUrl;
    }

    /**
     * @param string $responseUrl
     * @return CartOrderResponse
     */
    public function withResponseUrl($responseUrl)
    {
        $new = clone $this;
        $new->responseUrl = $responseUrl;

        return $new;
    }


}

