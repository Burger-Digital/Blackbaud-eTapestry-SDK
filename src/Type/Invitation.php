<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Invitation implements ResultInterface
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
     * @var \BurgerDigital\eTapestry\Type\CalendarItem
     */
    private $calendarItem;

    /**
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var bool
     */
    private $remind;

    /**
     * @var int
     */
    private $status;

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
     * @return Invitation
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
     * @return Invitation
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CalendarItem
     */
    public function getCalendarItem()
    {
        return $this->calendarItem;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CalendarItem $calendarItem
     * @return Invitation
     */
    public function withCalendarItem($calendarItem)
    {
        $new = clone $this;
        $new->calendarItem = $calendarItem;

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
     * @return Invitation
     */
    public function withCreatedDate($createdDate)
    {
        $new = clone $this;
        $new->createdDate = $createdDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return Invitation
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

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
     * @return Invitation
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
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return Invitation
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
     * @return Invitation
     */
    public function withRemind($remind)
    {
        $new = clone $this;
        $new->remind = $remind;

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
     * @return Invitation
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

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
     * @return Invitation
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

