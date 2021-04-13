<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringSchedule StructType
 * @subpackage Structs
 */
class RecurringSchedule extends AbstractStructBase
{
    /**
     * The frequency
     * @var int|null
     */
    protected ?int $frequency = null;
    /**
     * The measure
     * @var int|null
     */
    protected ?int $measure = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The stopDate
     * @var string|null
     */
    protected ?string $stopDate = null;
    /**
     * Constructor method for RecurringSchedule
     * @uses RecurringSchedule::setFrequency()
     * @uses RecurringSchedule::setMeasure()
     * @uses RecurringSchedule::setStartDate()
     * @uses RecurringSchedule::setStopDate()
     * @param int $frequency
     * @param int $measure
     * @param string $startDate
     * @param string $stopDate
     */
    public function __construct(?int $frequency = null, ?int $measure = null, ?string $startDate = null, ?string $stopDate = null)
    {
        $this
            ->setFrequency($frequency)
            ->setMeasure($measure)
            ->setStartDate($startDate)
            ->setStopDate($stopDate);
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
     * @return \BurgerDigital\eTapestry\StructType\RecurringSchedule
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
     * Get measure value
     * @return int|null
     */
    public function getMeasure(): ?int
    {
        return $this->measure;
    }
    /**
     * Set measure value
     * @param int $measure
     * @return \BurgerDigital\eTapestry\StructType\RecurringSchedule
     */
    public function setMeasure(?int $measure = null): self
    {
        // validation for constraint: int
        if (!is_null($measure) && !(is_int($measure) || ctype_digit($measure))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($measure, true), gettype($measure)), __LINE__);
        }
        $this->measure = $measure;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \BurgerDigital\eTapestry\StructType\RecurringSchedule
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
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
     * @return \BurgerDigital\eTapestry\StructType\RecurringSchedule
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
