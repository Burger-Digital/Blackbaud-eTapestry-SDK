<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Invitation StructType
 * @subpackage Structs
 */
class Invitation extends AbstractStructBase
{
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The calendarItem
     * @var \BurgerDigital\eTapestry\StructType\CalendarItem|null
     */
    protected ?\StructType\CalendarItem $calendarItem = null;
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
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
     * The remind
     * @var bool|null
     */
    protected ?bool $remind = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for Invitation
     * @uses Invitation::setAccountName()
     * @uses Invitation::setAccountRef()
     * @uses Invitation::setCalendarItem()
     * @uses Invitation::setCreatedDate()
     * @uses Invitation::setDate()
     * @uses Invitation::setLastModifiedDate()
     * @uses Invitation::setRef()
     * @uses Invitation::setRemind()
     * @uses Invitation::setStatus()
     * @uses Invitation::setType()
     * @param string $accountName
     * @param string $accountRef
     * @param \BurgerDigital\eTapestry\StructType\CalendarItem $calendarItem
     * @param string $createdDate
     * @param string $date
     * @param string $lastModifiedDate
     * @param string $ref
     * @param bool $remind
     * @param int $status
     * @param int $type
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, ?\StructType\CalendarItem $calendarItem = null, ?string $createdDate = null, ?string $date = null, ?string $lastModifiedDate = null, ?string $ref = null, ?bool $remind = null, ?int $status = null, ?int $type = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setCalendarItem($calendarItem)
            ->setCreatedDate($createdDate)
            ->setDate($date)
            ->setLastModifiedDate($lastModifiedDate)
            ->setRef($ref)
            ->setRemind($remind)
            ->setStatus($status)
            ->setType($type);
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountRef value
     * @return string|null
     */
    public function getAccountRef(): ?string
    {
        return $this->accountRef;
    }
    /**
     * Set accountRef value
     * @param string $accountRef
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setAccountRef(?string $accountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRef) && !is_string($accountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRef, true), gettype($accountRef)), __LINE__);
        }
        $this->accountRef = $accountRef;
        
        return $this;
    }
    /**
     * Get calendarItem value
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem|null
     */
    public function getCalendarItem(): ?\StructType\CalendarItem
    {
        return $this->calendarItem;
    }
    /**
     * Set calendarItem value
     * @param \BurgerDigital\eTapestry\StructType\CalendarItem $calendarItem
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setCalendarItem(?\StructType\CalendarItem $calendarItem = null): self
    {
        $this->calendarItem = $calendarItem;
        
        return $this;
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
     * @return \BurgerDigital\eTapestry\StructType\Invitation
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Invitation
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
     * @return \BurgerDigital\eTapestry\StructType\Invitation
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
     * Get remind value
     * @return bool|null
     */
    public function getRemind(): ?bool
    {
        return $this->remind;
    }
    /**
     * Set remind value
     * @param bool $remind
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setRemind(?bool $remind = null): self
    {
        // validation for constraint: boolean
        if (!is_null($remind) && !is_bool($remind)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remind, true), gettype($remind)), __LINE__);
        }
        $this->remind = $remind;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \BurgerDigital\eTapestry\StructType\Invitation
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
