<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentedPledge StructType
 * @subpackage Structs
 */
class SegmentedPledge extends AbstractStructBase
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
     * The arrearsAmount
     * @var float|null
     */
    protected ?float $arrearsAmount = null;
    /**
     * The consolidatedCustomSchedule
     * @var \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule|null
     */
    protected ?\StructType\CustomPaymentSchedule $consolidatedCustomSchedule = null;
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
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The nextPaymentAmount
     * @var float|null
     */
    protected ?float $nextPaymentAmount = null;
    /**
     * The nextPaymentDate
     * @var string|null
     */
    protected ?string $nextPaymentDate = null;
    /**
     * The offsettingRef
     * @var string|null
     */
    protected ?string $offsettingRef = null;
    /**
     * The outstandingBalance
     * @var float|null
     */
    protected ?float $outstandingBalance = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The segments
     * Meta information extracted from the WSDL
     * - arrayType: anyType[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var mixed[]
     */
    protected array $segments = [];
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The totalNonDeductibleAmount
     * @var float|null
     */
    protected ?float $totalNonDeductibleAmount = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The upgraded
     * @var bool|null
     */
    protected ?bool $upgraded = null;
    /**
     * Constructor method for SegmentedPledge
     * @uses SegmentedPledge::setAccountName()
     * @uses SegmentedPledge::setAccountRef()
     * @uses SegmentedPledge::setArrearsAmount()
     * @uses SegmentedPledge::setConsolidatedCustomSchedule()
     * @uses SegmentedPledge::setCreatedDate()
     * @uses SegmentedPledge::setDate()
     * @uses SegmentedPledge::setFinal()
     * @uses SegmentedPledge::setLastModifiedDate()
     * @uses SegmentedPledge::setNextPaymentAmount()
     * @uses SegmentedPledge::setNextPaymentDate()
     * @uses SegmentedPledge::setOffsettingRef()
     * @uses SegmentedPledge::setOutstandingBalance()
     * @uses SegmentedPledge::setRef()
     * @uses SegmentedPledge::setSegments()
     * @uses SegmentedPledge::setTotalAmount()
     * @uses SegmentedPledge::setTotalNonDeductibleAmount()
     * @uses SegmentedPledge::setType()
     * @uses SegmentedPledge::setUpgraded()
     * @param string $accountName
     * @param string $accountRef
     * @param float $arrearsAmount
     * @param \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule $consolidatedCustomSchedule
     * @param string $createdDate
     * @param string $date
     * @param bool $final
     * @param string $lastModifiedDate
     * @param float $nextPaymentAmount
     * @param string $nextPaymentDate
     * @param string $offsettingRef
     * @param float $outstandingBalance
     * @param string $ref
     * @param mixed[] $segments
     * @param float $totalAmount
     * @param float $totalNonDeductibleAmount
     * @param int $type
     * @param bool $upgraded
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, ?float $arrearsAmount = null, ?\StructType\CustomPaymentSchedule $consolidatedCustomSchedule = null, ?string $createdDate = null, ?string $date = null, ?bool $final = null, ?string $lastModifiedDate = null, ?float $nextPaymentAmount = null, ?string $nextPaymentDate = null, ?string $offsettingRef = null, ?float $outstandingBalance = null, ?string $ref = null, array $segments = [], ?float $totalAmount = null, ?float $totalNonDeductibleAmount = null, ?int $type = null, ?bool $upgraded = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setArrearsAmount($arrearsAmount)
            ->setConsolidatedCustomSchedule($consolidatedCustomSchedule)
            ->setCreatedDate($createdDate)
            ->setDate($date)
            ->setFinal($final)
            ->setLastModifiedDate($lastModifiedDate)
            ->setNextPaymentAmount($nextPaymentAmount)
            ->setNextPaymentDate($nextPaymentDate)
            ->setOffsettingRef($offsettingRef)
            ->setOutstandingBalance($outstandingBalance)
            ->setRef($ref)
            ->setSegments($segments)
            ->setTotalAmount($totalAmount)
            ->setTotalNonDeductibleAmount($totalNonDeductibleAmount)
            ->setType($type)
            ->setUpgraded($upgraded);
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * Get arrearsAmount value
     * @return float|null
     */
    public function getArrearsAmount(): ?float
    {
        return $this->arrearsAmount;
    }
    /**
     * Set arrearsAmount value
     * @param float $arrearsAmount
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setArrearsAmount(?float $arrearsAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($arrearsAmount) && !(is_float($arrearsAmount) || is_numeric($arrearsAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($arrearsAmount, true), gettype($arrearsAmount)), __LINE__);
        }
        $this->arrearsAmount = $arrearsAmount;
        
        return $this;
    }
    /**
     * Get consolidatedCustomSchedule value
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule|null
     */
    public function getConsolidatedCustomSchedule(): ?\StructType\CustomPaymentSchedule
    {
        return $this->consolidatedCustomSchedule;
    }
    /**
     * Set consolidatedCustomSchedule value
     * @param \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule $consolidatedCustomSchedule
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setConsolidatedCustomSchedule(?\StructType\CustomPaymentSchedule $consolidatedCustomSchedule = null): self
    {
        $this->consolidatedCustomSchedule = $consolidatedCustomSchedule;
        
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * Get nextPaymentAmount value
     * @return float|null
     */
    public function getNextPaymentAmount(): ?float
    {
        return $this->nextPaymentAmount;
    }
    /**
     * Set nextPaymentAmount value
     * @param float $nextPaymentAmount
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setNextPaymentAmount(?float $nextPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nextPaymentAmount) && !(is_float($nextPaymentAmount) || is_numeric($nextPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nextPaymentAmount, true), gettype($nextPaymentAmount)), __LINE__);
        }
        $this->nextPaymentAmount = $nextPaymentAmount;
        
        return $this;
    }
    /**
     * Get nextPaymentDate value
     * @return string|null
     */
    public function getNextPaymentDate(): ?string
    {
        return $this->nextPaymentDate;
    }
    /**
     * Set nextPaymentDate value
     * @param string $nextPaymentDate
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setNextPaymentDate(?string $nextPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($nextPaymentDate) && !is_string($nextPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextPaymentDate, true), gettype($nextPaymentDate)), __LINE__);
        }
        $this->nextPaymentDate = $nextPaymentDate;
        
        return $this;
    }
    /**
     * Get offsettingRef value
     * @return string|null
     */
    public function getOffsettingRef(): ?string
    {
        return $this->offsettingRef;
    }
    /**
     * Set offsettingRef value
     * @param string $offsettingRef
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setOffsettingRef(?string $offsettingRef = null): self
    {
        // validation for constraint: string
        if (!is_null($offsettingRef) && !is_string($offsettingRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offsettingRef, true), gettype($offsettingRef)), __LINE__);
        }
        $this->offsettingRef = $offsettingRef;
        
        return $this;
    }
    /**
     * Get outstandingBalance value
     * @return float|null
     */
    public function getOutstandingBalance(): ?float
    {
        return $this->outstandingBalance;
    }
    /**
     * Set outstandingBalance value
     * @param float $outstandingBalance
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setOutstandingBalance(?float $outstandingBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($outstandingBalance) && !(is_float($outstandingBalance) || is_numeric($outstandingBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($outstandingBalance, true), gettype($outstandingBalance)), __LINE__);
        }
        $this->outstandingBalance = $outstandingBalance;
        
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
     * Get segments value
     * @return mixed[]
     */
    public function getSegments(): array
    {
        return $this->segments;
    }
    /**
     * This method is responsible for validating the values passed to the setSegments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentsForArrayConstraintsFromSetSegments(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentedPledgeSegmentsItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($segmentedPledgeSegmentsItem) ? get_class($segmentedPledgeSegmentsItem) : sprintf('%s(%s)', gettype($segmentedPledgeSegmentsItem), var_export($segmentedPledgeSegmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The segments property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set segments value
     * @throws InvalidArgumentException
     * @param mixed[] $segments
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setSegments(array $segments = []): self
    {
        // validation for constraint: array
        if ('' !== ($segmentsArrayErrorMessage = self::validateSegmentsForArrayConstraintsFromSetSegments($segments))) {
            throw new InvalidArgumentException($segmentsArrayErrorMessage, __LINE__);
        }
        $this->segments = $segments;
        
        return $this;
    }
    /**
     * Add item to segments value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function addToSegments(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The segments property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->segments[] = $item;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get totalNonDeductibleAmount value
     * @return float|null
     */
    public function getTotalNonDeductibleAmount(): ?float
    {
        return $this->totalNonDeductibleAmount;
    }
    /**
     * Set totalNonDeductibleAmount value
     * @param float $totalNonDeductibleAmount
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setTotalNonDeductibleAmount(?float $totalNonDeductibleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalNonDeductibleAmount) && !(is_float($totalNonDeductibleAmount) || is_numeric($totalNonDeductibleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalNonDeductibleAmount, true), gettype($totalNonDeductibleAmount)), __LINE__);
        }
        $this->totalNonDeductibleAmount = $totalNonDeductibleAmount;
        
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
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
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
    /**
     * Get upgraded value
     * @return bool|null
     */
    public function getUpgraded(): ?bool
    {
        return $this->upgraded;
    }
    /**
     * Set upgraded value
     * @param bool $upgraded
     * @return \BurgerDigital\eTapestry\StructType\SegmentedPledge
     */
    public function setUpgraded(?bool $upgraded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($upgraded) && !is_bool($upgraded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($upgraded, true), gettype($upgraded)), __LINE__);
        }
        $this->upgraded = $upgraded;
        
        return $this;
    }
}
