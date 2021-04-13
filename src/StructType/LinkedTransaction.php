<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedTransaction StructType
 * @subpackage Structs
 */
class LinkedTransaction extends AbstractStructBase
{
    /**
     * The softCreditAccount
     * @var \StructType\Account|null
     */
    protected ?\StructType\Account $softCreditAccount = null;
    /**
     * The transaction
     * @var mixed|null
     */
    protected ?mixed $transaction = null;
    /**
     * The tributeAccount
     * @var \StructType\Account|null
     */
    protected ?\StructType\Account $tributeAccount = null;
    /**
     * The tributeNotificantAccount
     * @var \StructType\Account|null
     */
    protected ?\StructType\Account $tributeNotificantAccount = null;
    /**
     * The tributeNotificantRelationshipType
     * @var string|null
     */
    protected ?string $tributeNotificantRelationshipType = null;
    /**
     * Constructor method for LinkedTransaction
     * @uses LinkedTransaction::setSoftCreditAccount()
     * @uses LinkedTransaction::setTransaction()
     * @uses LinkedTransaction::setTributeAccount()
     * @uses LinkedTransaction::setTributeNotificantAccount()
     * @uses LinkedTransaction::setTributeNotificantRelationshipType()
     * @param \StructType\Account $softCreditAccount
     * @param mixed $transaction
     * @param \StructType\Account $tributeAccount
     * @param \StructType\Account $tributeNotificantAccount
     * @param string $tributeNotificantRelationshipType
     */
    public function __construct(?\StructType\Account $softCreditAccount = null, ?mixed $transaction = null, ?\StructType\Account $tributeAccount = null, ?\StructType\Account $tributeNotificantAccount = null, ?string $tributeNotificantRelationshipType = null)
    {
        $this
            ->setSoftCreditAccount($softCreditAccount)
            ->setTransaction($transaction)
            ->setTributeAccount($tributeAccount)
            ->setTributeNotificantAccount($tributeNotificantAccount)
            ->setTributeNotificantRelationshipType($tributeNotificantRelationshipType);
    }
    /**
     * Get softCreditAccount value
     * @return \StructType\Account|null
     */
    public function getSoftCreditAccount(): ?\StructType\Account
    {
        return $this->softCreditAccount;
    }
    /**
     * Set softCreditAccount value
     * @param \StructType\Account $softCreditAccount
     * @return \StructType\LinkedTransaction
     */
    public function setSoftCreditAccount(?\StructType\Account $softCreditAccount = null): self
    {
        $this->softCreditAccount = $softCreditAccount;
        
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
     * @return \StructType\LinkedTransaction
     */
    public function setTransaction(?mixed $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get tributeAccount value
     * @return \StructType\Account|null
     */
    public function getTributeAccount(): ?\StructType\Account
    {
        return $this->tributeAccount;
    }
    /**
     * Set tributeAccount value
     * @param \StructType\Account $tributeAccount
     * @return \StructType\LinkedTransaction
     */
    public function setTributeAccount(?\StructType\Account $tributeAccount = null): self
    {
        $this->tributeAccount = $tributeAccount;
        
        return $this;
    }
    /**
     * Get tributeNotificantAccount value
     * @return \StructType\Account|null
     */
    public function getTributeNotificantAccount(): ?\StructType\Account
    {
        return $this->tributeNotificantAccount;
    }
    /**
     * Set tributeNotificantAccount value
     * @param \StructType\Account $tributeNotificantAccount
     * @return \StructType\LinkedTransaction
     */
    public function setTributeNotificantAccount(?\StructType\Account $tributeNotificantAccount = null): self
    {
        $this->tributeNotificantAccount = $tributeNotificantAccount;
        
        return $this;
    }
    /**
     * Get tributeNotificantRelationshipType value
     * @return string|null
     */
    public function getTributeNotificantRelationshipType(): ?string
    {
        return $this->tributeNotificantRelationshipType;
    }
    /**
     * Set tributeNotificantRelationshipType value
     * @param string $tributeNotificantRelationshipType
     * @return \StructType\LinkedTransaction
     */
    public function setTributeNotificantRelationshipType(?string $tributeNotificantRelationshipType = null): self
    {
        // validation for constraint: string
        if (!is_null($tributeNotificantRelationshipType) && !is_string($tributeNotificantRelationshipType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tributeNotificantRelationshipType, true), gettype($tributeNotificantRelationshipType)), __LINE__);
        }
        $this->tributeNotificantRelationshipType = $tributeNotificantRelationshipType;
        
        return $this;
    }
}
