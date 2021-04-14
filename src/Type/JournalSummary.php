<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class JournalSummary implements ResultInterface
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
    private $lifetimeGivingTotal;

    /**
     * @var float
     */
    private $lifetimePledgedTotal;

    /**
     * @var int
     */
    private $lifetimeTransactionCount;

    /**
     * @var float
     */
    private $oneYearAgoGivingAmount;

    /**
     * @var float
     */
    private $oneYearAgoPledgedAmount;

    /**
     * @var int
     */
    private $oneYearAgoTransactionCount;

    /**
     * @var float
     */
    private $yearToDateGivingTotal;

    /**
     * @var float
     */
    private $yearToDatePledgedTotal;

    /**
     * @var int
     */
    private $yearToDateTransactionCount;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return JournalSummary
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
     * @return JournalSummary
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
    public function getLifetimeGivingTotal()
    {
        return $this->lifetimeGivingTotal;
    }

    /**
     * @param float $lifetimeGivingTotal
     * @return JournalSummary
     */
    public function withLifetimeGivingTotal($lifetimeGivingTotal)
    {
        $new = clone $this;
        $new->lifetimeGivingTotal = $lifetimeGivingTotal;

        return $new;
    }

    /**
     * @return float
     */
    public function getLifetimePledgedTotal()
    {
        return $this->lifetimePledgedTotal;
    }

    /**
     * @param float $lifetimePledgedTotal
     * @return JournalSummary
     */
    public function withLifetimePledgedTotal($lifetimePledgedTotal)
    {
        $new = clone $this;
        $new->lifetimePledgedTotal = $lifetimePledgedTotal;

        return $new;
    }

    /**
     * @return int
     */
    public function getLifetimeTransactionCount()
    {
        return $this->lifetimeTransactionCount;
    }

    /**
     * @param int $lifetimeTransactionCount
     * @return JournalSummary
     */
    public function withLifetimeTransactionCount($lifetimeTransactionCount)
    {
        $new = clone $this;
        $new->lifetimeTransactionCount = $lifetimeTransactionCount;

        return $new;
    }

    /**
     * @return float
     */
    public function getOneYearAgoGivingAmount()
    {
        return $this->oneYearAgoGivingAmount;
    }

    /**
     * @param float $oneYearAgoGivingAmount
     * @return JournalSummary
     */
    public function withOneYearAgoGivingAmount($oneYearAgoGivingAmount)
    {
        $new = clone $this;
        $new->oneYearAgoGivingAmount = $oneYearAgoGivingAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getOneYearAgoPledgedAmount()
    {
        return $this->oneYearAgoPledgedAmount;
    }

    /**
     * @param float $oneYearAgoPledgedAmount
     * @return JournalSummary
     */
    public function withOneYearAgoPledgedAmount($oneYearAgoPledgedAmount)
    {
        $new = clone $this;
        $new->oneYearAgoPledgedAmount = $oneYearAgoPledgedAmount;

        return $new;
    }

    /**
     * @return int
     */
    public function getOneYearAgoTransactionCount()
    {
        return $this->oneYearAgoTransactionCount;
    }

    /**
     * @param int $oneYearAgoTransactionCount
     * @return JournalSummary
     */
    public function withOneYearAgoTransactionCount($oneYearAgoTransactionCount)
    {
        $new = clone $this;
        $new->oneYearAgoTransactionCount = $oneYearAgoTransactionCount;

        return $new;
    }

    /**
     * @return float
     */
    public function getYearToDateGivingTotal()
    {
        return $this->yearToDateGivingTotal;
    }

    /**
     * @param float $yearToDateGivingTotal
     * @return JournalSummary
     */
    public function withYearToDateGivingTotal($yearToDateGivingTotal)
    {
        $new = clone $this;
        $new->yearToDateGivingTotal = $yearToDateGivingTotal;

        return $new;
    }

    /**
     * @return float
     */
    public function getYearToDatePledgedTotal()
    {
        return $this->yearToDatePledgedTotal;
    }

    /**
     * @param float $yearToDatePledgedTotal
     * @return JournalSummary
     */
    public function withYearToDatePledgedTotal($yearToDatePledgedTotal)
    {
        $new = clone $this;
        $new->yearToDatePledgedTotal = $yearToDatePledgedTotal;

        return $new;
    }

    /**
     * @return int
     */
    public function getYearToDateTransactionCount()
    {
        return $this->yearToDateTransactionCount;
    }

    /**
     * @param int $yearToDateTransactionCount
     * @return JournalSummary
     */
    public function withYearToDateTransactionCount($yearToDateTransactionCount)
    {
        $new = clone $this;
        $new->yearToDateTransactionCount = $yearToDateTransactionCount;

        return $new;
    }


}

