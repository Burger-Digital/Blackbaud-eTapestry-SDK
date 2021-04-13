<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneAThonList StructType
 * @subpackage Structs
 */
class PhoneAThonList extends AbstractStructBase
{
    /**
     * The currentCount
     * @var int|null
     */
    protected ?int $currentCount = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The enabled
     * @var bool|null
     */
    protected ?bool $enabled = null;
    /**
     * The initialCount
     * @var int|null
     */
    protected ?int $initialCount = null;
    /**
     * The lastGenerated
     * @var string|null
     */
    protected ?string $lastGenerated = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * Constructor method for PhoneAThonList
     * @uses PhoneAThonList::setCurrentCount()
     * @uses PhoneAThonList::setDescription()
     * @uses PhoneAThonList::setEnabled()
     * @uses PhoneAThonList::setInitialCount()
     * @uses PhoneAThonList::setLastGenerated()
     * @uses PhoneAThonList::setName()
     * @uses PhoneAThonList::setRef()
     * @param int $currentCount
     * @param string $description
     * @param bool $enabled
     * @param int $initialCount
     * @param string $lastGenerated
     * @param string $name
     * @param string $ref
     */
    public function __construct(?int $currentCount = null, ?string $description = null, ?bool $enabled = null, ?int $initialCount = null, ?string $lastGenerated = null, ?string $name = null, ?string $ref = null)
    {
        $this
            ->setCurrentCount($currentCount)
            ->setDescription($description)
            ->setEnabled($enabled)
            ->setInitialCount($initialCount)
            ->setLastGenerated($lastGenerated)
            ->setName($name)
            ->setRef($ref);
    }
    /**
     * Get currentCount value
     * @return int|null
     */
    public function getCurrentCount(): ?int
    {
        return $this->currentCount;
    }
    /**
     * Set currentCount value
     * @param int $currentCount
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
     */
    public function setCurrentCount(?int $currentCount = null): self
    {
        // validation for constraint: int
        if (!is_null($currentCount) && !(is_int($currentCount) || ctype_digit($currentCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currentCount, true), gettype($currentCount)), __LINE__);
        }
        $this->currentCount = $currentCount;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get enabled value
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Set enabled value
     * @param bool $enabled
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
     */
    public function setEnabled(?bool $enabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enabled) && !is_bool($enabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enabled, true), gettype($enabled)), __LINE__);
        }
        $this->enabled = $enabled;
        
        return $this;
    }
    /**
     * Get initialCount value
     * @return int|null
     */
    public function getInitialCount(): ?int
    {
        return $this->initialCount;
    }
    /**
     * Set initialCount value
     * @param int $initialCount
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
     */
    public function setInitialCount(?int $initialCount = null): self
    {
        // validation for constraint: int
        if (!is_null($initialCount) && !(is_int($initialCount) || ctype_digit($initialCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($initialCount, true), gettype($initialCount)), __LINE__);
        }
        $this->initialCount = $initialCount;
        
        return $this;
    }
    /**
     * Get lastGenerated value
     * @return string|null
     */
    public function getLastGenerated(): ?string
    {
        return $this->lastGenerated;
    }
    /**
     * Set lastGenerated value
     * @param string $lastGenerated
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
     */
    public function setLastGenerated(?string $lastGenerated = null): self
    {
        // validation for constraint: string
        if (!is_null($lastGenerated) && !is_string($lastGenerated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastGenerated, true), gettype($lastGenerated)), __LINE__);
        }
        $this->lastGenerated = $lastGenerated;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \BurgerDigital\eTapestry\StructType\PhoneAThonList
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
}
