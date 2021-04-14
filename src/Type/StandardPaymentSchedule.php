<?php

namespace BurgerDigital\eTapestry\Type;

class StandardPaymentSchedule
{

    /**
     * @var \DateTimeInterface
     */
    private $firstInstallmentDate;

    /**
     * @var int
     */
    private $frequency;

    /**
     * @var float
     */
    private $installmentAmount;

    /**
     * @var string
     */
    private $note;

    /**
     * @var int
     */
    private $processType;

    /**
     * @var \DateTimeInterface
     */
    private $stopDate;

    /**
     * @return \DateTimeInterface
     */
    public function getFirstInstallmentDate()
    {
        return $this->firstInstallmentDate;
    }

    /**
     * @param \DateTimeInterface $firstInstallmentDate
     * @return StandardPaymentSchedule
     */
    public function withFirstInstallmentDate($firstInstallmentDate)
    {
        $new = clone $this;
        $new->firstInstallmentDate = $firstInstallmentDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param int $frequency
     * @return StandardPaymentSchedule
     */
    public function withFrequency($frequency)
    {
        $new = clone $this;
        $new->frequency = $frequency;

        return $new;
    }

    /**
     * @return float
     */
    public function getInstallmentAmount()
    {
        return $this->installmentAmount;
    }

    /**
     * @param float $installmentAmount
     * @return StandardPaymentSchedule
     */
    public function withInstallmentAmount($installmentAmount)
    {
        $new = clone $this;
        $new->installmentAmount = $installmentAmount;

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
     * @return StandardPaymentSchedule
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
    public function getProcessType()
    {
        return $this->processType;
    }

    /**
     * @param int $processType
     * @return StandardPaymentSchedule
     */
    public function withProcessType($processType)
    {
        $new = clone $this;
        $new->processType = $processType;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }

    /**
     * @param \DateTimeInterface $stopDate
     * @return StandardPaymentSchedule
     */
    public function withStopDate($stopDate)
    {
        $new = clone $this;
        $new->stopDate = $stopDate;

        return $new;
    }


}

