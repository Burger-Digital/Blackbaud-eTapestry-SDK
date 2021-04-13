<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CCP StructType
 * @subpackage Structs
 */
class CCP extends AbstractStructBase
{
    /**
     * The CCPDate
     * @var string|null
     */
    protected ?string $CCPDate = null;
    /**
     * The CCPId
     * @var string|null
     */
    protected ?string $CCPId = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * Constructor method for CCP
     * @uses CCP::setCCPDate()
     * @uses CCP::setCCPId()
     * @uses CCP::setNote()
     * @param string $cCPDate
     * @param string $cCPId
     * @param string $note
     */
    public function __construct(?string $cCPDate = null, ?string $cCPId = null, ?string $note = null)
    {
        $this
            ->setCCPDate($cCPDate)
            ->setCCPId($cCPId)
            ->setNote($note);
    }
    /**
     * Get CCPDate value
     * @return string|null
     */
    public function getCCPDate(): ?string
    {
        return $this->CCPDate;
    }
    /**
     * Set CCPDate value
     * @param string $cCPDate
     * @return \BurgerDigital\eTapestry\StructType\CCP
     */
    public function setCCPDate(?string $cCPDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cCPDate) && !is_string($cCPDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCPDate, true), gettype($cCPDate)), __LINE__);
        }
        $this->CCPDate = $cCPDate;
        
        return $this;
    }
    /**
     * Get CCPId value
     * @return string|null
     */
    public function getCCPId(): ?string
    {
        return $this->CCPId;
    }
    /**
     * Set CCPId value
     * @param string $cCPId
     * @return \BurgerDigital\eTapestry\StructType\CCP
     */
    public function setCCPId(?string $cCPId = null): self
    {
        // validation for constraint: string
        if (!is_null($cCPId) && !is_string($cCPId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCPId, true), gettype($cCPId)), __LINE__);
        }
        $this->CCPId = $cCPId;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CCP
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
