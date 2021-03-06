<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SegmentedOrder implements ResultInterface
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
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var bool
     */
    private $final;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $offsettingRef;

    /**
     * @var \BurgerDigital\eTapestry\Type\OrderInfo
     */
    private $orderInfo;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var mixed
     */
    private $segments;

    /**
     * @var float
     */
    private $totalAmount;

    /**
     * @var float
     */
    private $totalNonDeductibleAmount;

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
     * @return SegmentedOrder
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
     * @return SegmentedOrder
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

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
     * @return SegmentedOrder
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
     * @return SegmentedOrder
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * @param bool $final
     * @return SegmentedOrder
     */
    public function withFinal($final)
    {
        $new = clone $this;
        $new->final = $final;

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
     * @return SegmentedOrder
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
    public function getOffsettingRef()
    {
        return $this->offsettingRef;
    }

    /**
     * @param string $offsettingRef
     * @return SegmentedOrder
     */
    public function withOffsettingRef($offsettingRef)
    {
        $new = clone $this;
        $new->offsettingRef = $offsettingRef;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\OrderInfo
     */
    public function getOrderInfo()
    {
        return $this->orderInfo;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\OrderInfo $orderInfo
     * @return SegmentedOrder
     */
    public function withOrderInfo($orderInfo)
    {
        $new = clone $this;
        $new->orderInfo = $orderInfo;

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
     * @return SegmentedOrder
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * @param mixed $segments
     * @return SegmentedOrder
     */
    public function withSegments($segments)
    {
        $new = clone $this;
        $new->segments = $segments;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param float $totalAmount
     * @return SegmentedOrder
     */
    public function withTotalAmount($totalAmount)
    {
        $new = clone $this;
        $new->totalAmount = $totalAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalNonDeductibleAmount()
    {
        return $this->totalNonDeductibleAmount;
    }

    /**
     * @param float $totalNonDeductibleAmount
     * @return SegmentedOrder
     */
    public function withTotalNonDeductibleAmount($totalNonDeductibleAmount)
    {
        $new = clone $this;
        $new->totalNonDeductibleAmount = $totalNonDeductibleAmount;

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
     * @return SegmentedOrder
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

