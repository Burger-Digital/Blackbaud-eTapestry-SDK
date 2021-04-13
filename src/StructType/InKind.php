<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InKind StructType
 * @subpackage Structs
 */
class InKind extends AbstractStructBase
{
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The saleDate
     * @var string|null
     */
    protected ?string $saleDate = null;
    /**
     * The saleValue
     * @var float|null
     */
    protected ?float $saleValue = null;
    /**
     * Constructor method for InKind
     * @uses InKind::setNote()
     * @uses InKind::setSaleDate()
     * @uses InKind::setSaleValue()
     * @param string $note
     * @param string $saleDate
     * @param float $saleValue
     */
    public function __construct(?string $note = null, ?string $saleDate = null, ?float $saleValue = null)
    {
        $this
            ->setNote($note)
            ->setSaleDate($saleDate)
            ->setSaleValue($saleValue);
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
     * @return \StructType\InKind
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
     * Get saleDate value
     * @return string|null
     */
    public function getSaleDate(): ?string
    {
        return $this->saleDate;
    }
    /**
     * Set saleDate value
     * @param string $saleDate
     * @return \StructType\InKind
     */
    public function setSaleDate(?string $saleDate = null): self
    {
        // validation for constraint: string
        if (!is_null($saleDate) && !is_string($saleDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleDate, true), gettype($saleDate)), __LINE__);
        }
        $this->saleDate = $saleDate;
        
        return $this;
    }
    /**
     * Get saleValue value
     * @return float|null
     */
    public function getSaleValue(): ?float
    {
        return $this->saleValue;
    }
    /**
     * Set saleValue value
     * @param float $saleValue
     * @return \StructType\InKind
     */
    public function setSaleValue(?float $saleValue = null): self
    {
        // validation for constraint: float
        if (!is_null($saleValue) && !(is_float($saleValue) || is_numeric($saleValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($saleValue, true), gettype($saleValue)), __LINE__);
        }
        $this->saleValue = $saleValue;
        
        return $this;
    }
}
