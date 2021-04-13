<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fund StructType
 * @subpackage Structs
 */
class Fund extends AbstractStructBase
{
    /**
     * The cashAccount
     * @var string|null
     */
    protected ?string $cashAccount = null;
    /**
     * The disabled
     * @var bool|null
     */
    protected ?bool $disabled = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The projectId
     * @var string|null
     */
    protected ?string $projectId = null;
    /**
     * The receivablesAccount
     * @var string|null
     */
    protected ?string $receivablesAccount = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The revenueAccount
     * @var string|null
     */
    protected ?string $revenueAccount = null;
    /**
     * The securityRights
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedFieldValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\DefinedFieldValue[]
     */
    protected array $securityRights = [];
    /**
     * Constructor method for Fund
     * @uses Fund::setCashAccount()
     * @uses Fund::setDisabled()
     * @uses Fund::setName()
     * @uses Fund::setNote()
     * @uses Fund::setProjectId()
     * @uses Fund::setReceivablesAccount()
     * @uses Fund::setRef()
     * @uses Fund::setRevenueAccount()
     * @uses Fund::setSecurityRights()
     * @param string $cashAccount
     * @param bool $disabled
     * @param string $name
     * @param string $note
     * @param string $projectId
     * @param string $receivablesAccount
     * @param string $ref
     * @param string $revenueAccount
     * @param \StructType\DefinedFieldValue[] $securityRights
     */
    public function __construct(?string $cashAccount = null, ?bool $disabled = null, ?string $name = null, ?string $note = null, ?string $projectId = null, ?string $receivablesAccount = null, ?string $ref = null, ?string $revenueAccount = null, array $securityRights = [])
    {
        $this
            ->setCashAccount($cashAccount)
            ->setDisabled($disabled)
            ->setName($name)
            ->setNote($note)
            ->setProjectId($projectId)
            ->setReceivablesAccount($receivablesAccount)
            ->setRef($ref)
            ->setRevenueAccount($revenueAccount)
            ->setSecurityRights($securityRights);
    }
    /**
     * Get cashAccount value
     * @return string|null
     */
    public function getCashAccount(): ?string
    {
        return $this->cashAccount;
    }
    /**
     * Set cashAccount value
     * @param string $cashAccount
     * @return \StructType\Fund
     */
    public function setCashAccount(?string $cashAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($cashAccount) && !is_string($cashAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashAccount, true), gettype($cashAccount)), __LINE__);
        }
        $this->cashAccount = $cashAccount;
        
        return $this;
    }
    /**
     * Get disabled value
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * Set disabled value
     * @param bool $disabled
     * @return \StructType\Fund
     */
    public function setDisabled(?bool $disabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\Fund
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \StructType\Fund
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
    /**
     * Get projectId value
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param string $projectId
     * @return \StructType\Fund
     */
    public function setProjectId(?string $projectId = null): self
    {
        // validation for constraint: string
        if (!is_null($projectId) && !is_string($projectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        
        return $this;
    }
    /**
     * Get receivablesAccount value
     * @return string|null
     */
    public function getReceivablesAccount(): ?string
    {
        return $this->receivablesAccount;
    }
    /**
     * Set receivablesAccount value
     * @param string $receivablesAccount
     * @return \StructType\Fund
     */
    public function setReceivablesAccount(?string $receivablesAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($receivablesAccount) && !is_string($receivablesAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivablesAccount, true), gettype($receivablesAccount)), __LINE__);
        }
        $this->receivablesAccount = $receivablesAccount;
        
        return $this;
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \StructType\Fund
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
    /**
     * Get revenueAccount value
     * @return string|null
     */
    public function getRevenueAccount(): ?string
    {
        return $this->revenueAccount;
    }
    /**
     * Set revenueAccount value
     * @param string $revenueAccount
     * @return \StructType\Fund
     */
    public function setRevenueAccount(?string $revenueAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($revenueAccount) && !is_string($revenueAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($revenueAccount, true), gettype($revenueAccount)), __LINE__);
        }
        $this->revenueAccount = $revenueAccount;
        
        return $this;
    }
    /**
     * Get securityRights value
     * @return \StructType\DefinedFieldValue[]
     */
    public function getSecurityRights(): array
    {
        return $this->securityRights;
    }
    /**
     * This method is responsible for validating the values passed to the setSecurityRights method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecurityRights method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecurityRightsForArrayConstraintsFromSetSecurityRights(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fundSecurityRightsItem) {
            // validation for constraint: itemType
            if (!$fundSecurityRightsItem instanceof \StructType\DefinedFieldValue) {
                $invalidValues[] = is_object($fundSecurityRightsItem) ? get_class($fundSecurityRightsItem) : sprintf('%s(%s)', gettype($fundSecurityRightsItem), var_export($fundSecurityRightsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The securityRights property can only contain items of type \StructType\DefinedFieldValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set securityRights value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedFieldValue[] $securityRights
     * @return \StructType\Fund
     */
    public function setSecurityRights(array $securityRights = []): self
    {
        // validation for constraint: array
        if ('' !== ($securityRightsArrayErrorMessage = self::validateSecurityRightsForArrayConstraintsFromSetSecurityRights($securityRights))) {
            throw new InvalidArgumentException($securityRightsArrayErrorMessage, __LINE__);
        }
        $this->securityRights = $securityRights;
        
        return $this;
    }
    /**
     * Add item to securityRights value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedFieldValue $item
     * @return \StructType\Fund
     */
    public function addToSecurityRights(\StructType\DefinedFieldValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DefinedFieldValue) {
            throw new InvalidArgumentException(sprintf('The securityRights property can only contain items of type \StructType\DefinedFieldValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->securityRights[] = $item;
        
        return $this;
    }
}
