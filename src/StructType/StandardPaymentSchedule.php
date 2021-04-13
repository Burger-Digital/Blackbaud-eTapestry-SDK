<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StandardPaymentSchedule StructType
 * @subpackage Structs
 */
class StandardPaymentSchedule extends AbstractStructBase
{
    /**
     * The firstInstallmentDate
     * @var string|null
     */
    protected ?string $firstInstallmentDate = null;
    /**
     * The frequency
     * @var int|null
     */
    protected ?int $frequency = null;
    /**
     * The installmentAmount
     * @var float|null
     */
    protected ?float $installmentAmount = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The processType
     * @var int|null
     */
    protected ?int $processType = null;
    /**
     * The stopDate
     * @var string|null
     */
    protected ?string $stopDate = null;
    /**
     * Constructor method for StandardPaymentSchedule
     * @uses StandardPaymentSchedule::setFirstInstallmentDate()
     * @uses StandardPaymentSchedule::setFrequency()
     * @uses StandardPaymentSchedule::setInstallmentAmount()
     * @uses StandardPaymentSchedule::setNote()
     * @uses StandardPaymentSchedule::setProcessType()
     * @uses StandardPaymentSchedule::setStopDate()
     * @param string $firstInstallmentDate
     * @param int $frequency
     * @param float $installmentAmount
     * @param string $note
     * @param int $processType
     * @param string $stopDate
     */
    public function __construct(?string $firstInstallmentDate = null, ?int $frequency = null, ?float $installmentAmount = null, ?string $note = null, ?int $processType = null, ?string $stopDate = null)
    {
        $this
            ->setFirstInstallmentDate($firstInstallmentDate)
            ->setFrequency($frequency)
            ->setInstallmentAmount($installmentAmount)
            ->setNote($note)
            ->setProcessType($processType)
            ->setStopDate($stopDate);
    }
    /**
     * Get firstInstallmentDate value
     * @return string|null
     */
    public function getFirstInstallmentDate(): ?string
    {
        return $this->firstInstallmentDate;
    }
    /**
     * Set firstInstallmentDate value
     * @param string $firstInstallmentDate
     * @return \StructType\StandardPaymentSchedule
     */
    public function setFirstInstallmentDate(?string $firstInstallmentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($firstInstallmentDate) && !is_string($firstInstallmentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstInstallmentDate, true), gettype($firstInstallmentDate)), __LINE__);
        }
        $this->firstInstallmentDate = $firstInstallmentDate;
        
        return $this;
    }
    /**
     * Get frequency value
     * @return int|null
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param int $frequency
     * @return \StructType\StandardPaymentSchedule
     */
    public function setFrequency(?int $frequency = null): self
    {
        // validation for constraint: int
        if (!is_null($frequency) && !(is_int($frequency) || ctype_digit($frequency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($frequency, true), gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        
        return $this;
    }
    /**
     * Get installmentAmount value
     * @return float|null
     */
    public function getInstallmentAmount(): ?float
    {
        return $this->installmentAmount;
    }
    /**
     * Set installmentAmount value
     * @param float $installmentAmount
     * @return \StructType\StandardPaymentSchedule
     */
    public function setInstallmentAmount(?float $installmentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($installmentAmount) && !(is_float($installmentAmount) || is_numeric($installmentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($installmentAmount, true), gettype($installmentAmount)), __LINE__);
        }
        $this->installmentAmount = $installmentAmount;
        
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
     * @return \StructType\StandardPaymentSchedule
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
     * Get processType value
     * @return int|null
     */
    public function getProcessType(): ?int
    {
        return $this->processType;
    }
    /**
     * Set processType value
     * @param int $processType
     * @return \StructType\StandardPaymentSchedule
     */
    public function setProcessType(?int $processType = null): self
    {
        // validation for constraint: int
        if (!is_null($processType) && !(is_int($processType) || ctype_digit($processType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($processType, true), gettype($processType)), __LINE__);
        }
        $this->processType = $processType;
        
        return $this;
    }
    /**
     * Get stopDate value
     * @return string|null
     */
    public function getStopDate(): ?string
    {
        return $this->stopDate;
    }
    /**
     * Set stopDate value
     * @param string $stopDate
     * @return \StructType\StandardPaymentSchedule
     */
    public function setStopDate(?string $stopDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stopDate) && !is_string($stopDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stopDate, true), gettype($stopDate)), __LINE__);
        }
        $this->stopDate = $stopDate;
        
        return $this;
    }
}
