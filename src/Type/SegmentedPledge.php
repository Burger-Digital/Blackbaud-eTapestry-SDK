<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SegmentedPledge implements ResultInterface
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
     * @var float
     */
    private $arrearsAmount;

    /**
     * @var \BurgerDigital\eTapestry\Type\CustomPaymentSchedule
     */
    private $consolidatedCustomSchedule;

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
     * @var float
     */
    private $nextPaymentAmount;

    /**
     * @var \DateTimeInterface
     */
    private $nextPaymentDate;

    /**
     * @var string
     */
    private $offsettingRef;

    /**
     * @var float
     */
    private $outstandingBalance;

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
     * @var bool
     */
    private $upgraded;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return SegmentedPledge
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
     * @return SegmentedPledge
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return float
     */
    public function getArrearsAmount()
    {
        return $this->arrearsAmount;
    }

    /**
     * @param float $arrearsAmount
     * @return SegmentedPledge
     */
    public function withArrearsAmount($arrearsAmount)
    {
        $new = clone $this;
        $new->arrearsAmount = $arrearsAmount;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CustomPaymentSchedule
     */
    public function getConsolidatedCustomSchedule()
    {
        return $this->consolidatedCustomSchedule;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CustomPaymentSchedule $consolidatedCustomSchedule
     * @return SegmentedPledge
     */
    public function withConsolidatedCustomSchedule($consolidatedCustomSchedule)
    {
        $new = clone $this;
        $new->consolidatedCustomSchedule = $consolidatedCustomSchedule;

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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
     */
    public function withLastModifiedDate($lastModifiedDate)
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return float
     */
    public function getNextPaymentAmount()
    {
        return $this->nextPaymentAmount;
    }

    /**
     * @param float $nextPaymentAmount
     * @return SegmentedPledge
     */
    public function withNextPaymentAmount($nextPaymentAmount)
    {
        $new = clone $this;
        $new->nextPaymentAmount = $nextPaymentAmount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getNextPaymentDate()
    {
        return $this->nextPaymentDate;
    }

    /**
     * @param \DateTimeInterface $nextPaymentDate
     * @return SegmentedPledge
     */
    public function withNextPaymentDate($nextPaymentDate)
    {
        $new = clone $this;
        $new->nextPaymentDate = $nextPaymentDate;

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
     * @return SegmentedPledge
     */
    public function withOffsettingRef($offsettingRef)
    {
        $new = clone $this;
        $new->offsettingRef = $offsettingRef;

        return $new;
    }

    /**
     * @return float
     */
    public function getOutstandingBalance()
    {
        return $this->outstandingBalance;
    }

    /**
     * @param float $outstandingBalance
     * @return SegmentedPledge
     */
    public function withOutstandingBalance($outstandingBalance)
    {
        $new = clone $this;
        $new->outstandingBalance = $outstandingBalance;

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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
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
     * @return SegmentedPledge
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpgraded()
    {
        return $this->upgraded;
    }

    /**
     * @param bool $upgraded
     * @return SegmentedPledge
     */
    public function withUpgraded($upgraded)
    {
        $new = clone $this;
        $new->upgraded = $upgraded;

        return $new;
    }


}

