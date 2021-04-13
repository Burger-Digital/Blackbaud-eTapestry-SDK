<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SortOption StructType
 * @subpackage Structs
 */
class SortOption extends AbstractStructBase
{
    /**
     * The ascending
     * @var bool|null
     */
    protected ?bool $ascending = null;
    /**
     * The field
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * Constructor method for SortOption
     * @uses SortOption::setAscending()
     * @uses SortOption::setField()
     * @param bool $ascending
     * @param string $field
     */
    public function __construct(?bool $ascending = null, ?string $field = null)
    {
        $this
            ->setAscending($ascending)
            ->setField($field);
    }
    /**
     * Get ascending value
     * @return bool|null
     */
    public function getAscending(): ?bool
    {
        return $this->ascending;
    }
    /**
     * Set ascending value
     * @param bool $ascending
     * @return \BurgerDigital\eTapestry\StructType\SortOption
     */
    public function setAscending(?bool $ascending = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ascending) && !is_bool($ascending)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ascending, true), gettype($ascending)), __LINE__);
        }
        $this->ascending = $ascending;
        
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \BurgerDigital\eTapestry\StructType\SortOption
     */
    public function setField(?string $field = null): self
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        
        return $this;
    }
}
