<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoftCredit StructType
 * @subpackage Structs
 */
class SoftCredit extends AbstractStructBase
{
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The approach
     * @var string|null
     */
    protected ?string $approach = null;
    /**
     * The campaign
     * @var string|null
     */
    protected ?string $campaign = null;
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The final
     * @var bool|null
     */
    protected ?bool $final = null;
    /**
     * The fund
     * @var string|null
     */
    protected ?string $fund = null;
    /**
     * The hardCreditAccountName
     * @var string|null
     */
    protected ?string $hardCreditAccountName = null;
    /**
     * The hardCreditAccountRef
     * @var string|null
     */
    protected ?string $hardCreditAccountRef = null;
    /**
     * The hardCreditRef
     * @var string|null
     */
    protected ?string $hardCreditRef = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The letter
     * @var string|null
     */
    protected ?string $letter = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for SoftCredit
     * @uses SoftCredit::setAccountName()
     * @uses SoftCredit::setAccountRef()
     * @uses SoftCredit::setAmount()
     * @uses SoftCredit::setApproach()
     * @uses SoftCredit::setCampaign()
     * @uses SoftCredit::setCreatedDate()
     * @uses SoftCredit::setDate()
     * @uses SoftCredit::setFinal()
     * @uses SoftCredit::setFund()
     * @uses SoftCredit::setHardCreditAccountName()
     * @uses SoftCredit::setHardCreditAccountRef()
     * @uses SoftCredit::setHardCreditRef()
     * @uses SoftCredit::setLastModifiedDate()
     * @uses SoftCredit::setLetter()
     * @uses SoftCredit::setNote()
     * @uses SoftCredit::setRef()
     * @uses SoftCredit::setType()
     * @param string $accountName
     * @param string $accountRef
     * @param float $amount
     * @param string $approach
     * @param string $campaign
     * @param string $createdDate
     * @param string $date
     * @param bool $final
     * @param string $fund
     * @param string $hardCreditAccountName
     * @param string $hardCreditAccountRef
     * @param string $hardCreditRef
     * @param string $lastModifiedDate
     * @param string $letter
     * @param string $note
     * @param string $ref
     * @param int $type
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, ?float $amount = null, ?string $approach = null, ?string $campaign = null, ?string $createdDate = null, ?string $date = null, ?bool $final = null, ?string $fund = null, ?string $hardCreditAccountName = null, ?string $hardCreditAccountRef = null, ?string $hardCreditRef = null, ?string $lastModifiedDate = null, ?string $letter = null, ?string $note = null, ?string $ref = null, ?int $type = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setAmount($amount)
            ->setApproach($approach)
            ->setCampaign($campaign)
            ->setCreatedDate($createdDate)
            ->setDate($date)
            ->setFinal($final)
            ->setFund($fund)
            ->setHardCreditAccountName($hardCreditAccountName)
            ->setHardCreditAccountRef($hardCreditAccountRef)
            ->setHardCreditRef($hardCreditRef)
            ->setLastModifiedDate($lastModifiedDate)
            ->setLetter($letter)
            ->setNote($note)
            ->setRef($ref)
            ->setType($type);
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountRef value
     * @return string|null
     */
    public function getAccountRef(): ?string
    {
        return $this->accountRef;
    }
    /**
     * Set accountRef value
     * @param string $accountRef
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setAccountRef(?string $accountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRef) && !is_string($accountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRef, true), gettype($accountRef)), __LINE__);
        }
        $this->accountRef = $accountRef;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get approach value
     * @return string|null
     */
    public function getApproach(): ?string
    {
        return $this->approach;
    }
    /**
     * Set approach value
     * @param string $approach
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setApproach(?string $approach = null): self
    {
        // validation for constraint: string
        if (!is_null($approach) && !is_string($approach)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approach, true), gettype($approach)), __LINE__);
        }
        $this->approach = $approach;
        
        return $this;
    }
    /**
     * Get campaign value
     * @return string|null
     */
    public function getCampaign(): ?string
    {
        return $this->campaign;
    }
    /**
     * Set campaign value
     * @param string $campaign
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setCampaign(?string $campaign = null): self
    {
        // validation for constraint: string
        if (!is_null($campaign) && !is_string($campaign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaign, true), gettype($campaign)), __LINE__);
        }
        $this->campaign = $campaign;
        
        return $this;
    }
    /**
     * Get createdDate value
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param string $createdDate
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->createdDate = $createdDate;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get final value
     * @return bool|null
     */
    public function getFinal(): ?bool
    {
        return $this->final;
    }
    /**
     * Set final value
     * @param bool $final
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setFinal(?bool $final = null): self
    {
        // validation for constraint: boolean
        if (!is_null($final) && !is_bool($final)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($final, true), gettype($final)), __LINE__);
        }
        $this->final = $final;
        
        return $this;
    }
    /**
     * Get fund value
     * @return string|null
     */
    public function getFund(): ?string
    {
        return $this->fund;
    }
    /**
     * Set fund value
     * @param string $fund
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setFund(?string $fund = null): self
    {
        // validation for constraint: string
        if (!is_null($fund) && !is_string($fund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fund, true), gettype($fund)), __LINE__);
        }
        $this->fund = $fund;
        
        return $this;
    }
    /**
     * Get hardCreditAccountName value
     * @return string|null
     */
    public function getHardCreditAccountName(): ?string
    {
        return $this->hardCreditAccountName;
    }
    /**
     * Set hardCreditAccountName value
     * @param string $hardCreditAccountName
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setHardCreditAccountName(?string $hardCreditAccountName = null): self
    {
        // validation for constraint: string
        if (!is_null($hardCreditAccountName) && !is_string($hardCreditAccountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardCreditAccountName, true), gettype($hardCreditAccountName)), __LINE__);
        }
        $this->hardCreditAccountName = $hardCreditAccountName;
        
        return $this;
    }
    /**
     * Get hardCreditAccountRef value
     * @return string|null
     */
    public function getHardCreditAccountRef(): ?string
    {
        return $this->hardCreditAccountRef;
    }
    /**
     * Set hardCreditAccountRef value
     * @param string $hardCreditAccountRef
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setHardCreditAccountRef(?string $hardCreditAccountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($hardCreditAccountRef) && !is_string($hardCreditAccountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardCreditAccountRef, true), gettype($hardCreditAccountRef)), __LINE__);
        }
        $this->hardCreditAccountRef = $hardCreditAccountRef;
        
        return $this;
    }
    /**
     * Get hardCreditRef value
     * @return string|null
     */
    public function getHardCreditRef(): ?string
    {
        return $this->hardCreditRef;
    }
    /**
     * Set hardCreditRef value
     * @param string $hardCreditRef
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setHardCreditRef(?string $hardCreditRef = null): self
    {
        // validation for constraint: string
        if (!is_null($hardCreditRef) && !is_string($hardCreditRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardCreditRef, true), gettype($hardCreditRef)), __LINE__);
        }
        $this->hardCreditRef = $hardCreditRef;
        
        return $this;
    }
    /**
     * Get lastModifiedDate value
     * @return string|null
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->lastModifiedDate;
    }
    /**
     * Set lastModifiedDate value
     * @param string $lastModifiedDate
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setLastModifiedDate(?string $lastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedDate, true), gettype($lastModifiedDate)), __LINE__);
        }
        $this->lastModifiedDate = $lastModifiedDate;
        
        return $this;
    }
    /**
     * Get letter value
     * @return string|null
     */
    public function getLetter(): ?string
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param string $letter
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setLetter(?string $letter = null): self
    {
        // validation for constraint: string
        if (!is_null($letter) && !is_string($letter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($letter, true), gettype($letter)), __LINE__);
        }
        $this->letter = $letter;
        
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
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
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
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
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
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \BurgerDigital\eTapestry\StructType\SoftCredit
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
