<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneratedReceipt StructType
 * @subpackage Structs
 */
class GeneratedReceipt extends AbstractStructBase
{
    /**
     * The dateIssued
     * @var string|null
     */
    protected ?string $dateIssued = null;
    /**
     * The number
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The voidedNumber
     * @var string|null
     */
    protected ?string $voidedNumber = null;
    /**
     * Constructor method for GeneratedReceipt
     * @uses GeneratedReceipt::setDateIssued()
     * @uses GeneratedReceipt::setNumber()
     * @uses GeneratedReceipt::setStatus()
     * @uses GeneratedReceipt::setVoidedNumber()
     * @param string $dateIssued
     * @param string $number
     * @param string $status
     * @param string $voidedNumber
     */
    public function __construct(?string $dateIssued = null, ?string $number = null, ?string $status = null, ?string $voidedNumber = null)
    {
        $this
            ->setDateIssued($dateIssued)
            ->setNumber($number)
            ->setStatus($status)
            ->setVoidedNumber($voidedNumber);
    }
    /**
     * Get dateIssued value
     * @return string|null
     */
    public function getDateIssued(): ?string
    {
        return $this->dateIssued;
    }
    /**
     * Set dateIssued value
     * @param string $dateIssued
     * @return \BurgerDigital\eTapestry\StructType\GeneratedReceipt
     */
    public function setDateIssued(?string $dateIssued = null): self
    {
        // validation for constraint: string
        if (!is_null($dateIssued) && !is_string($dateIssued)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateIssued, true), gettype($dateIssued)), __LINE__);
        }
        $this->dateIssued = $dateIssued;
        
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \BurgerDigital\eTapestry\StructType\GeneratedReceipt
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \BurgerDigital\eTapestry\StructType\GeneratedReceipt
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get voidedNumber value
     * @return string|null
     */
    public function getVoidedNumber(): ?string
    {
        return $this->voidedNumber;
    }
    /**
     * Set voidedNumber value
     * @param string $voidedNumber
     * @return \BurgerDigital\eTapestry\StructType\GeneratedReceipt
     */
    public function setVoidedNumber(?string $voidedNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($voidedNumber) && !is_string($voidedNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voidedNumber, true), gettype($voidedNumber)), __LINE__);
        }
        $this->voidedNumber = $voidedNumber;
        
        return $this;
    }
}
