<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RealEstate StructType
 * @subpackage Structs
 */
class RealEstate extends AbstractStructBase
{
    /**
     * The location
     * @var string|null
     */
    protected ?string $location = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The realEstateType
     * @var string|null
     */
    protected ?string $realEstateType = null;
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
     * The size
     * @var string|null
     */
    protected ?string $size = null;
    /**
     * The taxParcelNumber
     * @var string|null
     */
    protected ?string $taxParcelNumber = null;
    /**
     * Constructor method for RealEstate
     * @uses RealEstate::setLocation()
     * @uses RealEstate::setNote()
     * @uses RealEstate::setRealEstateType()
     * @uses RealEstate::setSaleDate()
     * @uses RealEstate::setSaleValue()
     * @uses RealEstate::setSize()
     * @uses RealEstate::setTaxParcelNumber()
     * @param string $location
     * @param string $note
     * @param string $realEstateType
     * @param string $saleDate
     * @param float $saleValue
     * @param string $size
     * @param string $taxParcelNumber
     */
    public function __construct(?string $location = null, ?string $note = null, ?string $realEstateType = null, ?string $saleDate = null, ?float $saleValue = null, ?string $size = null, ?string $taxParcelNumber = null)
    {
        $this
            ->setLocation($location)
            ->setNote($note)
            ->setRealEstateType($realEstateType)
            ->setSaleDate($saleDate)
            ->setSaleValue($saleValue)
            ->setSize($size)
            ->setTaxParcelNumber($taxParcelNumber);
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\RealEstate
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
        
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
     * @return \StructType\RealEstate
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
     * Get realEstateType value
     * @return string|null
     */
    public function getRealEstateType(): ?string
    {
        return $this->realEstateType;
    }
    /**
     * Set realEstateType value
     * @param string $realEstateType
     * @return \StructType\RealEstate
     */
    public function setRealEstateType(?string $realEstateType = null): self
    {
        // validation for constraint: string
        if (!is_null($realEstateType) && !is_string($realEstateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($realEstateType, true), gettype($realEstateType)), __LINE__);
        }
        $this->realEstateType = $realEstateType;
        
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
     * @return \StructType\RealEstate
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
     * @return \StructType\RealEstate
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
    /**
     * Get size value
     * @return string|null
     */
    public function getSize(): ?string
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param string $size
     * @return \StructType\RealEstate
     */
    public function setSize(?string $size = null): self
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        
        return $this;
    }
    /**
     * Get taxParcelNumber value
     * @return string|null
     */
    public function getTaxParcelNumber(): ?string
    {
        return $this->taxParcelNumber;
    }
    /**
     * Set taxParcelNumber value
     * @param string $taxParcelNumber
     * @return \StructType\RealEstate
     */
    public function setTaxParcelNumber(?string $taxParcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($taxParcelNumber) && !is_string($taxParcelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxParcelNumber, true), gettype($taxParcelNumber)), __LINE__);
        }
        $this->taxParcelNumber = $taxParcelNumber;
        
        return $this;
    }
}
