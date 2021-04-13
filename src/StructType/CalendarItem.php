<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarItem StructType
 * @subpackage Structs
 */
class CalendarItem extends AbstractStructBase
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
     * The attachments
     * Meta information extracted from the WSDL
     * - arrayType: tns:Attachment[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Attachment[]
     */
    protected array $attachments = [];
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The definedValues
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\DefinedValue[]
     */
    protected array $definedValues = [];
    /**
     * The endTime
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * The invitations
     * Meta information extracted from the WSDL
     * - arrayType: tns:Invitation[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Invitation[]
     */
    protected array $invitations = [];
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The private
     * @var bool|null
     */
    protected ?bool $private = null;
    /**
     * The recurringSchedule
     * @var \BurgerDigital\eTapestry\StructType\RecurringSchedule|null
     */
    protected ?\StructType\RecurringSchedule $recurringSchedule = null;
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
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for CalendarItem
     * @uses CalendarItem::setAccountName()
     * @uses CalendarItem::setAccountRef()
     * @uses CalendarItem::setAttachments()
     * @uses CalendarItem::setCreatedDate()
     * @uses CalendarItem::setDefinedValues()
     * @uses CalendarItem::setEndTime()
     * @uses CalendarItem::setInvitations()
     * @uses CalendarItem::setLastModifiedDate()
     * @uses CalendarItem::setNote()
     * @uses CalendarItem::setPriority()
     * @uses CalendarItem::setPrivate()
     * @uses CalendarItem::setRecurringSchedule()
     * @uses CalendarItem::setRef()
     * @uses CalendarItem::setRemind()
     * @uses CalendarItem::setStartTime()
     * @uses CalendarItem::setStatus()
     * @uses CalendarItem::setTitle()
     * @uses CalendarItem::setType()
     * @param string $accountName
     * @param string $accountRef
     * @param \BurgerDigital\eTapestry\StructType\Attachment[] $attachments
     * @param string $createdDate
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $definedValues
     * @param string $endTime
     * @param \BurgerDigital\eTapestry\StructType\Invitation[] $invitations
     * @param string $lastModifiedDate
     * @param string $note
     * @param int $priority
     * @param bool $private
     * @param \BurgerDigital\eTapestry\StructType\RecurringSchedule $recurringSchedule
     * @param string $ref
     * @param bool $remind
     * @param string $startTime
     * @param int $status
     * @param string $title
     * @param int $type
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, array $attachments = [], ?string $createdDate = null, array $definedValues = [], ?string $endTime = null, array $invitations = [], ?string $lastModifiedDate = null, ?string $note = null, ?int $priority = null, ?bool $private = null, ?\StructType\RecurringSchedule $recurringSchedule = null, ?string $ref = null, ?bool $remind = null, ?string $startTime = null, ?int $status = null, ?string $title = null, ?int $type = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setAttachments($attachments)
            ->setCreatedDate($createdDate)
            ->setDefinedValues($definedValues)
            ->setEndTime($endTime)
            ->setInvitations($invitations)
            ->setLastModifiedDate($lastModifiedDate)
            ->setNote($note)
            ->setPriority($priority)
            ->setPrivate($private)
            ->setRecurringSchedule($recurringSchedule)
            ->setRef($ref)
            ->setRemind($remind)
            ->setStartTime($startTime)
            ->setStatus($status)
            ->setTitle($title)
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * Get attachments value
     * @return \BurgerDigital\eTapestry\StructType\Attachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentsForArrayConstraintsFromSetAttachments(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $calendarItemAttachmentsItem) {
            // validation for constraint: itemType
            if (!$calendarItemAttachmentsItem instanceof \BurgerDigital\eTapestry\StructType\Attachment) {
                $invalidValues[] = is_object($calendarItemAttachmentsItem) ? get_class($calendarItemAttachmentsItem) : sprintf('%s(%s)', gettype($calendarItemAttachmentsItem), var_export($calendarItemAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attachments property can only contain items of type \BurgerDigital\eTapestry\StructType\Attachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attachments value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Attachment[] $attachments
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setAttachments(array $attachments = []): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentsArrayErrorMessage = self::validateAttachmentsForArrayConstraintsFromSetAttachments($attachments))) {
            throw new InvalidArgumentException($attachmentsArrayErrorMessage, __LINE__);
        }
        $this->attachments = $attachments;
        
        return $this;
    }
    /**
     * Add item to attachments value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Attachment $item
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function addToAttachments(\StructType\Attachment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Attachment) {
            throw new InvalidArgumentException(sprintf('The attachments property can only contain items of type \BurgerDigital\eTapestry\StructType\Attachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attachments[] = $item;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * Get definedValues value
     * @return \BurgerDigital\eTapestry\StructType\DefinedValue[]
     */
    public function getDefinedValues(): array
    {
        return $this->definedValues;
    }
    /**
     * This method is responsible for validating the values passed to the setDefinedValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDefinedValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDefinedValuesForArrayConstraintsFromSetDefinedValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $calendarItemDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$calendarItemDefinedValuesItem instanceof \BurgerDigital\eTapestry\StructType\DefinedValue) {
                $invalidValues[] = is_object($calendarItemDefinedValuesItem) ? get_class($calendarItemDefinedValuesItem) : sprintf('%s(%s)', gettype($calendarItemDefinedValuesItem), var_export($calendarItemDefinedValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The definedValues property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set definedValues value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $definedValues
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setDefinedValues(array $definedValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($definedValuesArrayErrorMessage = self::validateDefinedValuesForArrayConstraintsFromSetDefinedValues($definedValues))) {
            throw new InvalidArgumentException($definedValuesArrayErrorMessage, __LINE__);
        }
        $this->definedValues = $definedValues;
        
        return $this;
    }
    /**
     * Add item to definedValues value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue $item
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function addToDefinedValues(\StructType\DefinedValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\DefinedValue) {
            throw new InvalidArgumentException(sprintf('The definedValues property can only contain items of type \BurgerDigital\eTapestry\StructType\DefinedValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->definedValues[] = $item;
        
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        
        return $this;
    }
    /**
     * Get invitations value
     * @return \BurgerDigital\eTapestry\StructType\Invitation[]
     */
    public function getInvitations(): array
    {
        return $this->invitations;
    }
    /**
     * This method is responsible for validating the values passed to the setInvitations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvitations method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvitationsForArrayConstraintsFromSetInvitations(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $calendarItemInvitationsItem) {
            // validation for constraint: itemType
            if (!$calendarItemInvitationsItem instanceof \BurgerDigital\eTapestry\StructType\Invitation) {
                $invalidValues[] = is_object($calendarItemInvitationsItem) ? get_class($calendarItemInvitationsItem) : sprintf('%s(%s)', gettype($calendarItemInvitationsItem), var_export($calendarItemInvitationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The invitations property can only contain items of type \BurgerDigital\eTapestry\StructType\Invitation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set invitations value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Invitation[] $invitations
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setInvitations(array $invitations = []): self
    {
        // validation for constraint: array
        if ('' !== ($invitationsArrayErrorMessage = self::validateInvitationsForArrayConstraintsFromSetInvitations($invitations))) {
            throw new InvalidArgumentException($invitationsArrayErrorMessage, __LINE__);
        }
        $this->invitations = $invitations;
        
        return $this;
    }
    /**
     * Add item to invitations value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Invitation $item
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function addToInvitations(\StructType\Invitation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Invitation) {
            throw new InvalidArgumentException(sprintf('The invitations property can only contain items of type \BurgerDigital\eTapestry\StructType\Invitation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->invitations[] = $item;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
        return $this;
    }
    /**
     * Get private value
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }
    /**
     * Set private value
     * @param bool $private
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setPrivate(?bool $private = null): self
    {
        // validation for constraint: boolean
        if (!is_null($private) && !is_bool($private)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($private, true), gettype($private)), __LINE__);
        }
        $this->private = $private;
        
        return $this;
    }
    /**
     * Get recurringSchedule value
     * @return \BurgerDigital\eTapestry\StructType\RecurringSchedule|null
     */
    public function getRecurringSchedule(): ?\StructType\RecurringSchedule
    {
        return $this->recurringSchedule;
    }
    /**
     * Set recurringSchedule value
     * @param \BurgerDigital\eTapestry\StructType\RecurringSchedule $recurringSchedule
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setRecurringSchedule(?\StructType\RecurringSchedule $recurringSchedule = null): self
    {
        $this->recurringSchedule = $recurringSchedule;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
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
     * @return \BurgerDigital\eTapestry\StructType\CalendarItem
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
