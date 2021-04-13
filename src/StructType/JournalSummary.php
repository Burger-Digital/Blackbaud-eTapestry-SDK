<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalSummary StructType
 * @subpackage Structs
 */
class JournalSummary extends AbstractStructBase
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
     * The lifetimeGivingTotal
     * @var float|null
     */
    protected ?float $lifetimeGivingTotal = null;
    /**
     * The lifetimePledgedTotal
     * @var float|null
     */
    protected ?float $lifetimePledgedTotal = null;
    /**
     * The lifetimeTransactionCount
     * @var int|null
     */
    protected ?int $lifetimeTransactionCount = null;
    /**
     * The oneYearAgoGivingAmount
     * @var float|null
     */
    protected ?float $oneYearAgoGivingAmount = null;
    /**
     * The oneYearAgoPledgedAmount
     * @var float|null
     */
    protected ?float $oneYearAgoPledgedAmount = null;
    /**
     * The oneYearAgoTransactionCount
     * @var int|null
     */
    protected ?int $oneYearAgoTransactionCount = null;
    /**
     * The yearToDateGivingTotal
     * @var float|null
     */
    protected ?float $yearToDateGivingTotal = null;
    /**
     * The yearToDatePledgedTotal
     * @var float|null
     */
    protected ?float $yearToDatePledgedTotal = null;
    /**
     * The yearToDateTransactionCount
     * @var int|null
     */
    protected ?int $yearToDateTransactionCount = null;
    /**
     * Constructor method for JournalSummary
     * @uses JournalSummary::setAccountName()
     * @uses JournalSummary::setAccountRef()
     * @uses JournalSummary::setLifetimeGivingTotal()
     * @uses JournalSummary::setLifetimePledgedTotal()
     * @uses JournalSummary::setLifetimeTransactionCount()
     * @uses JournalSummary::setOneYearAgoGivingAmount()
     * @uses JournalSummary::setOneYearAgoPledgedAmount()
     * @uses JournalSummary::setOneYearAgoTransactionCount()
     * @uses JournalSummary::setYearToDateGivingTotal()
     * @uses JournalSummary::setYearToDatePledgedTotal()
     * @uses JournalSummary::setYearToDateTransactionCount()
     * @param string $accountName
     * @param string $accountRef
     * @param float $lifetimeGivingTotal
     * @param float $lifetimePledgedTotal
     * @param int $lifetimeTransactionCount
     * @param float $oneYearAgoGivingAmount
     * @param float $oneYearAgoPledgedAmount
     * @param int $oneYearAgoTransactionCount
     * @param float $yearToDateGivingTotal
     * @param float $yearToDatePledgedTotal
     * @param int $yearToDateTransactionCount
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, ?float $lifetimeGivingTotal = null, ?float $lifetimePledgedTotal = null, ?int $lifetimeTransactionCount = null, ?float $oneYearAgoGivingAmount = null, ?float $oneYearAgoPledgedAmount = null, ?int $oneYearAgoTransactionCount = null, ?float $yearToDateGivingTotal = null, ?float $yearToDatePledgedTotal = null, ?int $yearToDateTransactionCount = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setLifetimeGivingTotal($lifetimeGivingTotal)
            ->setLifetimePledgedTotal($lifetimePledgedTotal)
            ->setLifetimeTransactionCount($lifetimeTransactionCount)
            ->setOneYearAgoGivingAmount($oneYearAgoGivingAmount)
            ->setOneYearAgoPledgedAmount($oneYearAgoPledgedAmount)
            ->setOneYearAgoTransactionCount($oneYearAgoTransactionCount)
            ->setYearToDateGivingTotal($yearToDateGivingTotal)
            ->setYearToDatePledgedTotal($yearToDatePledgedTotal)
            ->setYearToDateTransactionCount($yearToDateTransactionCount);
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
     * @return \StructType\JournalSummary
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
     * @return \StructType\JournalSummary
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
     * Get lifetimeGivingTotal value
     * @return float|null
     */
    public function getLifetimeGivingTotal(): ?float
    {
        return $this->lifetimeGivingTotal;
    }
    /**
     * Set lifetimeGivingTotal value
     * @param float $lifetimeGivingTotal
     * @return \StructType\JournalSummary
     */
    public function setLifetimeGivingTotal(?float $lifetimeGivingTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($lifetimeGivingTotal) && !(is_float($lifetimeGivingTotal) || is_numeric($lifetimeGivingTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lifetimeGivingTotal, true), gettype($lifetimeGivingTotal)), __LINE__);
        }
        $this->lifetimeGivingTotal = $lifetimeGivingTotal;
        
        return $this;
    }
    /**
     * Get lifetimePledgedTotal value
     * @return float|null
     */
    public function getLifetimePledgedTotal(): ?float
    {
        return $this->lifetimePledgedTotal;
    }
    /**
     * Set lifetimePledgedTotal value
     * @param float $lifetimePledgedTotal
     * @return \StructType\JournalSummary
     */
    public function setLifetimePledgedTotal(?float $lifetimePledgedTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($lifetimePledgedTotal) && !(is_float($lifetimePledgedTotal) || is_numeric($lifetimePledgedTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lifetimePledgedTotal, true), gettype($lifetimePledgedTotal)), __LINE__);
        }
        $this->lifetimePledgedTotal = $lifetimePledgedTotal;
        
        return $this;
    }
    /**
     * Get lifetimeTransactionCount value
     * @return int|null
     */
    public function getLifetimeTransactionCount(): ?int
    {
        return $this->lifetimeTransactionCount;
    }
    /**
     * Set lifetimeTransactionCount value
     * @param int $lifetimeTransactionCount
     * @return \StructType\JournalSummary
     */
    public function setLifetimeTransactionCount(?int $lifetimeTransactionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($lifetimeTransactionCount) && !(is_int($lifetimeTransactionCount) || ctype_digit($lifetimeTransactionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lifetimeTransactionCount, true), gettype($lifetimeTransactionCount)), __LINE__);
        }
        $this->lifetimeTransactionCount = $lifetimeTransactionCount;
        
        return $this;
    }
    /**
     * Get oneYearAgoGivingAmount value
     * @return float|null
     */
    public function getOneYearAgoGivingAmount(): ?float
    {
        return $this->oneYearAgoGivingAmount;
    }
    /**
     * Set oneYearAgoGivingAmount value
     * @param float $oneYearAgoGivingAmount
     * @return \StructType\JournalSummary
     */
    public function setOneYearAgoGivingAmount(?float $oneYearAgoGivingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($oneYearAgoGivingAmount) && !(is_float($oneYearAgoGivingAmount) || is_numeric($oneYearAgoGivingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oneYearAgoGivingAmount, true), gettype($oneYearAgoGivingAmount)), __LINE__);
        }
        $this->oneYearAgoGivingAmount = $oneYearAgoGivingAmount;
        
        return $this;
    }
    /**
     * Get oneYearAgoPledgedAmount value
     * @return float|null
     */
    public function getOneYearAgoPledgedAmount(): ?float
    {
        return $this->oneYearAgoPledgedAmount;
    }
    /**
     * Set oneYearAgoPledgedAmount value
     * @param float $oneYearAgoPledgedAmount
     * @return \StructType\JournalSummary
     */
    public function setOneYearAgoPledgedAmount(?float $oneYearAgoPledgedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($oneYearAgoPledgedAmount) && !(is_float($oneYearAgoPledgedAmount) || is_numeric($oneYearAgoPledgedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oneYearAgoPledgedAmount, true), gettype($oneYearAgoPledgedAmount)), __LINE__);
        }
        $this->oneYearAgoPledgedAmount = $oneYearAgoPledgedAmount;
        
        return $this;
    }
    /**
     * Get oneYearAgoTransactionCount value
     * @return int|null
     */
    public function getOneYearAgoTransactionCount(): ?int
    {
        return $this->oneYearAgoTransactionCount;
    }
    /**
     * Set oneYearAgoTransactionCount value
     * @param int $oneYearAgoTransactionCount
     * @return \StructType\JournalSummary
     */
    public function setOneYearAgoTransactionCount(?int $oneYearAgoTransactionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($oneYearAgoTransactionCount) && !(is_int($oneYearAgoTransactionCount) || ctype_digit($oneYearAgoTransactionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oneYearAgoTransactionCount, true), gettype($oneYearAgoTransactionCount)), __LINE__);
        }
        $this->oneYearAgoTransactionCount = $oneYearAgoTransactionCount;
        
        return $this;
    }
    /**
     * Get yearToDateGivingTotal value
     * @return float|null
     */
    public function getYearToDateGivingTotal(): ?float
    {
        return $this->yearToDateGivingTotal;
    }
    /**
     * Set yearToDateGivingTotal value
     * @param float $yearToDateGivingTotal
     * @return \StructType\JournalSummary
     */
    public function setYearToDateGivingTotal(?float $yearToDateGivingTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($yearToDateGivingTotal) && !(is_float($yearToDateGivingTotal) || is_numeric($yearToDateGivingTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($yearToDateGivingTotal, true), gettype($yearToDateGivingTotal)), __LINE__);
        }
        $this->yearToDateGivingTotal = $yearToDateGivingTotal;
        
        return $this;
    }
    /**
     * Get yearToDatePledgedTotal value
     * @return float|null
     */
    public function getYearToDatePledgedTotal(): ?float
    {
        return $this->yearToDatePledgedTotal;
    }
    /**
     * Set yearToDatePledgedTotal value
     * @param float $yearToDatePledgedTotal
     * @return \StructType\JournalSummary
     */
    public function setYearToDatePledgedTotal(?float $yearToDatePledgedTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($yearToDatePledgedTotal) && !(is_float($yearToDatePledgedTotal) || is_numeric($yearToDatePledgedTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($yearToDatePledgedTotal, true), gettype($yearToDatePledgedTotal)), __LINE__);
        }
        $this->yearToDatePledgedTotal = $yearToDatePledgedTotal;
        
        return $this;
    }
    /**
     * Get yearToDateTransactionCount value
     * @return int|null
     */
    public function getYearToDateTransactionCount(): ?int
    {
        return $this->yearToDateTransactionCount;
    }
    /**
     * Set yearToDateTransactionCount value
     * @param int $yearToDateTransactionCount
     * @return \StructType\JournalSummary
     */
    public function setYearToDateTransactionCount(?int $yearToDateTransactionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($yearToDateTransactionCount) && !(is_int($yearToDateTransactionCount) || ctype_digit($yearToDateTransactionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($yearToDateTransactionCount, true), gettype($yearToDateTransactionCount)), __LINE__);
        }
        $this->yearToDateTransactionCount = $yearToDateTransactionCount;
        
        return $this;
    }
}
