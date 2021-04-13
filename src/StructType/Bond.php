<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bond StructType
 * @subpackage Structs
 */
class Bond extends AbstractStructBase
{
    /**
     * The actualValue
     * @var float|null
     */
    protected ?float $actualValue = null;
    /**
     * The dateCashed
     * @var string|null
     */
    protected ?string $dateCashed = null;
    /**
     * The issuingEntity
     * @var string|null
     */
    protected ?string $issuingEntity = null;
    /**
     * The maturityDate
     * @var string|null
     */
    protected ?string $maturityDate = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * Constructor method for Bond
     * @uses Bond::setActualValue()
     * @uses Bond::setDateCashed()
     * @uses Bond::setIssuingEntity()
     * @uses Bond::setMaturityDate()
     * @uses Bond::setNote()
     * @param float $actualValue
     * @param string $dateCashed
     * @param string $issuingEntity
     * @param string $maturityDate
     * @param string $note
     */
    public function __construct(?float $actualValue = null, ?string $dateCashed = null, ?string $issuingEntity = null, ?string $maturityDate = null, ?string $note = null)
    {
        $this
            ->setActualValue($actualValue)
            ->setDateCashed($dateCashed)
            ->setIssuingEntity($issuingEntity)
            ->setMaturityDate($maturityDate)
            ->setNote($note);
    }
    /**
     * Get actualValue value
     * @return float|null
     */
    public function getActualValue(): ?float
    {
        return $this->actualValue;
    }
    /**
     * Set actualValue value
     * @param float $actualValue
     * @return \BurgerDigital\eTapestry\StructType\Bond
     */
    public function setActualValue(?float $actualValue = null): self
    {
        // validation for constraint: float
        if (!is_null($actualValue) && !(is_float($actualValue) || is_numeric($actualValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualValue, true), gettype($actualValue)), __LINE__);
        }
        $this->actualValue = $actualValue;
        
        return $this;
    }
    /**
     * Get dateCashed value
     * @return string|null
     */
    public function getDateCashed(): ?string
    {
        return $this->dateCashed;
    }
    /**
     * Set dateCashed value
     * @param string $dateCashed
     * @return \BurgerDigital\eTapestry\StructType\Bond
     */
    public function setDateCashed(?string $dateCashed = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCashed) && !is_string($dateCashed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCashed, true), gettype($dateCashed)), __LINE__);
        }
        $this->dateCashed = $dateCashed;
        
        return $this;
    }
    /**
     * Get issuingEntity value
     * @return string|null
     */
    public function getIssuingEntity(): ?string
    {
        return $this->issuingEntity;
    }
    /**
     * Set issuingEntity value
     * @param string $issuingEntity
     * @return \BurgerDigital\eTapestry\StructType\Bond
     */
    public function setIssuingEntity(?string $issuingEntity = null): self
    {
        // validation for constraint: string
        if (!is_null($issuingEntity) && !is_string($issuingEntity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuingEntity, true), gettype($issuingEntity)), __LINE__);
        }
        $this->issuingEntity = $issuingEntity;
        
        return $this;
    }
    /**
     * Get maturityDate value
     * @return string|null
     */
    public function getMaturityDate(): ?string
    {
        return $this->maturityDate;
    }
    /**
     * Set maturityDate value
     * @param string $maturityDate
     * @return \BurgerDigital\eTapestry\StructType\Bond
     */
    public function setMaturityDate(?string $maturityDate = null): self
    {
        // validation for constraint: string
        if (!is_null($maturityDate) && !is_string($maturityDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maturityDate, true), gettype($maturityDate)), __LINE__);
        }
        $this->maturityDate = $maturityDate;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Bond
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
}
