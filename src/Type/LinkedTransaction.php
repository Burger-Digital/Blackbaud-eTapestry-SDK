<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LinkedTransaction implements ResultInterface
{

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $softCreditAccount;

    /**
     * @var mixed
     */
    private $transaction;

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $tributeAccount;

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $tributeNotificantAccount;

    /**
     * @var string
     */
    private $tributeNotificantRelationshipType;

    /**
     * @return \BurgerDigital\eTapestry\Type\Account
     */
    public function getSoftCreditAccount()
    {
        return $this->softCreditAccount;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Account $softCreditAccount
     * @return LinkedTransaction
     */
    public function withSoftCreditAccount($softCreditAccount)
    {
        $new = clone $this;
        $new->softCreditAccount = $softCreditAccount;

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
     * @return LinkedTransaction
     */
    public function withTransaction($transaction)
    {
        $new = clone $this;
        $new->transaction = $transaction;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Account
     */
    public function getTributeAccount()
    {
        return $this->tributeAccount;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Account $tributeAccount
     * @return LinkedTransaction
     */
    public function withTributeAccount($tributeAccount)
    {
        $new = clone $this;
        $new->tributeAccount = $tributeAccount;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Account
     */
    public function getTributeNotificantAccount()
    {
        return $this->tributeNotificantAccount;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Account $tributeNotificantAccount
     * @return LinkedTransaction
     */
    public function withTributeNotificantAccount($tributeNotificantAccount)
    {
        $new = clone $this;
        $new->tributeNotificantAccount = $tributeNotificantAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getTributeNotificantRelationshipType()
    {
        return $this->tributeNotificantRelationshipType;
    }

    /**
     * @param string $tributeNotificantRelationshipType
     * @return LinkedTransaction
     */
    public function withTributeNotificantRelationshipType($tributeNotificantRelationshipType)
    {
        $new = clone $this;
        $new->tributeNotificantRelationshipType = $tributeNotificantRelationshipType;

        return $new;
    }


}

