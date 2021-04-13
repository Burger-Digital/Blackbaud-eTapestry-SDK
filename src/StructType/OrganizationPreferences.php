<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationPreferences StructType
 * @subpackage Structs
 */
class OrganizationPreferences extends AbstractStructBase
{
    /**
     * The passwordMinimumLength
     * @var int|null
     */
    protected ?int $passwordMinimumLength = null;
    /**
     * The passwordRequireComplexity
     * @var bool|null
     */
    protected ?bool $passwordRequireComplexity = null;
    /**
     * Constructor method for OrganizationPreferences
     * @uses OrganizationPreferences::setPasswordMinimumLength()
     * @uses OrganizationPreferences::setPasswordRequireComplexity()
     * @param int $passwordMinimumLength
     * @param bool $passwordRequireComplexity
     */
    public function __construct(?int $passwordMinimumLength = null, ?bool $passwordRequireComplexity = null)
    {
        $this
            ->setPasswordMinimumLength($passwordMinimumLength)
            ->setPasswordRequireComplexity($passwordRequireComplexity);
    }
    /**
     * Get passwordMinimumLength value
     * @return int|null
     */
    public function getPasswordMinimumLength(): ?int
    {
        return $this->passwordMinimumLength;
    }
    /**
     * Set passwordMinimumLength value
     * @param int $passwordMinimumLength
     * @return \StructType\OrganizationPreferences
     */
    public function setPasswordMinimumLength(?int $passwordMinimumLength = null): self
    {
        // validation for constraint: int
        if (!is_null($passwordMinimumLength) && !(is_int($passwordMinimumLength) || ctype_digit($passwordMinimumLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passwordMinimumLength, true), gettype($passwordMinimumLength)), __LINE__);
        }
        $this->passwordMinimumLength = $passwordMinimumLength;
        
        return $this;
    }
    /**
     * Get passwordRequireComplexity value
     * @return bool|null
     */
    public function getPasswordRequireComplexity(): ?bool
    {
        return $this->passwordRequireComplexity;
    }
    /**
     * Set passwordRequireComplexity value
     * @param bool $passwordRequireComplexity
     * @return \StructType\OrganizationPreferences
     */
    public function setPasswordRequireComplexity(?bool $passwordRequireComplexity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($passwordRequireComplexity) && !is_bool($passwordRequireComplexity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passwordRequireComplexity, true), gettype($passwordRequireComplexity)), __LINE__);
        }
        $this->passwordRequireComplexity = $passwordRequireComplexity;
        
        return $this;
    }
}
