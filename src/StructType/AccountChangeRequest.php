<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountChangeRequest StructType
 * @subpackage Structs
 */
class AccountChangeRequest extends AbstractStructBase
{
    /**
     * The account
     * @var \BurgerDigital\eTapestry\StructType\Account|null
     */
    protected ?\StructType\Account $account = null;
    /**
     * The createChangeNote
     * @var bool|null
     */
    protected ?bool $createChangeNote = null;
    /**
     * The createFieldAndValues
     * @var bool|null
     */
    protected ?bool $createFieldAndValues = null;
    /**
     * The notificationEmail
     * @var string|null
     */
    protected ?string $notificationEmail = null;
    /**
     * The update
     * @var bool|null
     */
    protected ?bool $update = null;
    /**
     * Constructor method for AccountChangeRequest
     * @uses AccountChangeRequest::setAccount()
     * @uses AccountChangeRequest::setCreateChangeNote()
     * @uses AccountChangeRequest::setCreateFieldAndValues()
     * @uses AccountChangeRequest::setNotificationEmail()
     * @uses AccountChangeRequest::setUpdate()
     * @param \BurgerDigital\eTapestry\StructType\Account $account
     * @param bool $createChangeNote
     * @param bool $createFieldAndValues
     * @param string $notificationEmail
     * @param bool $update
     */
    public function __construct(?\StructType\Account $account = null, ?bool $createChangeNote = null, ?bool $createFieldAndValues = null, ?string $notificationEmail = null, ?bool $update = null)
    {
        $this
            ->setAccount($account)
            ->setCreateChangeNote($createChangeNote)
            ->setCreateFieldAndValues($createFieldAndValues)
            ->setNotificationEmail($notificationEmail)
            ->setUpdate($update);
    }
    /**
     * Get account value
     * @return \BurgerDigital\eTapestry\StructType\Account|null
     */
    public function getAccount(): ?\StructType\Account
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \BurgerDigital\eTapestry\StructType\Account $account
     * @return \BurgerDigital\eTapestry\StructType\AccountChangeRequest
     */
    public function setAccount(?\StructType\Account $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get createChangeNote value
     * @return bool|null
     */
    public function getCreateChangeNote(): ?bool
    {
        return $this->createChangeNote;
    }
    /**
     * Set createChangeNote value
     * @param bool $createChangeNote
     * @return \BurgerDigital\eTapestry\StructType\AccountChangeRequest
     */
    public function setCreateChangeNote(?bool $createChangeNote = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createChangeNote) && !is_bool($createChangeNote)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createChangeNote, true), gettype($createChangeNote)), __LINE__);
        }
        $this->createChangeNote = $createChangeNote;
        
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
     * @return \BurgerDigital\eTapestry\StructType\AccountChangeRequest
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
     * @return \BurgerDigital\eTapestry\StructType\AccountChangeRequest
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
     * Get update value
     * @return bool|null
     */
    public function getUpdate(): ?bool
    {
        return $this->update;
    }
    /**
     * Set update value
     * @param bool $update
     * @return \BurgerDigital\eTapestry\StructType\AccountChangeRequest
     */
    public function setUpdate(?bool $update = null): self
    {
        // validation for constraint: boolean
        if (!is_null($update) && !is_bool($update)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($update, true), gettype($update)), __LINE__);
        }
        $this->update = $update;
        
        return $this;
    }
}
