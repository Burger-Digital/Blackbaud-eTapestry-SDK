<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\ResultInterface;

class CalendarItem implements ResultInterface
{

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var \BurgerDigital\Type\Attachment
     */
    private $attachments;

    /**
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \BurgerDigital\Type\DefinedValue
     */
    private $definedValues;

    /**
     * @var \DateTimeInterface
     */
    private $endTime;

    /**
     * @var \BurgerDigital\Type\Invitation
     */
    private $invitations;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $note;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var bool
     */
    private $private;

    /**
     * @var \BurgerDigital\Type\RecurringSchedule
     */
    private $recurringSchedule;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var bool
     */
    private $remind;

    /**
     * @var \DateTimeInterface
     */
    private $startTime;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $type;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return CalendarItem
     */
    public function withAccountName($accountName)
    {
        $new = clone $this;
        $new->accountName = $accountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountRef()
    {
        return $this->accountRef;
    }

    /**
     * @param string $accountRef
     * @return CalendarItem
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Attachment
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Attachment $attachments
     * @return CalendarItem
     */
    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTimeInterface $createdDate
     * @return CalendarItem
     */
    public function withCreatedDate($createdDate)
    {
        $new = clone $this;
        $new->createdDate = $createdDate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedValue
     */
    public function getDefinedValues()
    {
        return $this->definedValues;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedValue $definedValues
     * @return CalendarItem
     */
    public function withDefinedValues($definedValues)
    {
        $new = clone $this;
        $new->definedValues = $definedValues;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param \DateTimeInterface $endTime
     * @return CalendarItem
     */
    public function withEndTime($endTime)
    {
        $new = clone $this;
        $new->endTime = $endTime;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Invitation
     */
    public function getInvitations()
    {
        return $this->invitations;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Invitation $invitations
     * @return CalendarItem
     */
    public function withInvitations($invitations)
    {
        $new = clone $this;
        $new->invitations = $invitations;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDate
     * @return CalendarItem
     */
    public function withLastModifiedDate($lastModifiedDate)
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return CalendarItem
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return CalendarItem
     */
    public function withPriority($priority)
    {
        $new = clone $this;
        $new->priority = $priority;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * @param bool $private
     * @return CalendarItem
     */
    public function withPrivate($private)
    {
        $new = clone $this;
        $new->private = $private;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\RecurringSchedule
     */
    public function getRecurringSchedule()
    {
        return $this->recurringSchedule;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\RecurringSchedule $recurringSchedule
     * @return CalendarItem
     */
    public function withRecurringSchedule($recurringSchedule)
    {
        $new = clone $this;
        $new->recurringSchedule = $recurringSchedule;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return CalendarItem
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRemind()
    {
        return $this->remind;
    }

    /**
     * @param bool $remind
     * @return CalendarItem
     */
    public function withRemind($remind)
    {
        $new = clone $this;
        $new->remind = $remind;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param \DateTimeInterface $startTime
     * @return CalendarItem
     */
    public function withStartTime($startTime)
    {
        $new = clone $this;
        $new->startTime = $startTime;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return CalendarItem
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return CalendarItem
     */
    public function withTitle($title)
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return CalendarItem
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

