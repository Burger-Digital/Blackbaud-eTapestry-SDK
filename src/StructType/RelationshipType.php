<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationshipType StructType
 * @subpackage Structs
 */
class RelationshipType extends AbstractStructBase
{
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The disabled
     * @var bool|null
     */
    protected ?bool $disabled = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The role1
     * @var string|null
     */
    protected ?string $role1 = null;
    /**
     * The role2
     * @var string|null
     */
    protected ?string $role2 = null;
    /**
     * Constructor method for RelationshipType
     * @uses RelationshipType::setCreatedDate()
     * @uses RelationshipType::setDisabled()
     * @uses RelationshipType::setLastModifiedDate()
     * @uses RelationshipType::setRef()
     * @uses RelationshipType::setRole1()
     * @uses RelationshipType::setRole2()
     * @param string $createdDate
     * @param bool $disabled
     * @param string $lastModifiedDate
     * @param string $ref
     * @param string $role1
     * @param string $role2
     */
    public function __construct(?string $createdDate = null, ?bool $disabled = null, ?string $lastModifiedDate = null, ?string $ref = null, ?string $role1 = null, ?string $role2 = null)
    {
        $this
            ->setCreatedDate($createdDate)
            ->setDisabled($disabled)
            ->setLastModifiedDate($lastModifiedDate)
            ->setRef($ref)
            ->setRole1($role1)
            ->setRole2($role2);
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
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType
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
     * Get disabled value
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * Set disabled value
     * @param bool $disabled
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType
     */
    public function setDisabled(?bool $disabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        
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
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType
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
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType
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
     * Get role1 value
     * @return string|null
     */
    public function getRole1(): ?string
    {
        return $this->role1;
    }
    /**
     * Set role1 value
     * @param string $role1
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType
     */
    public function setRole1(?string $role1 = null): self
    {
        // validation for constraint: string
        if (!is_null($role1) && !is_string($role1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role1, true), gettype($role1)), __LINE__);
        }
        $this->role1 = $role1;
        
        return $this;
    }
    /**
     * Get role2 value
     * @return string|null
     */
    public function getRole2(): ?string
    {
        return $this->role2;
    }
    /**
     * Set role2 value
     * @param string $role2
     * @return \BurgerDigital\eTapestry\StructType\RelationshipType
     */
    public function setRole2(?string $role2 = null): self
    {
        // validation for constraint: string
        if (!is_null($role2) && !is_string($role2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role2, true), gettype($role2)), __LINE__);
        }
        $this->role2 = $role2;
        
        return $this;
    }
}
