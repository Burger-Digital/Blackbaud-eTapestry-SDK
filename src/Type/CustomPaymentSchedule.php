<?php

namespace BurgerDigital\eTapestry\Type;

class CustomPaymentSchedule
{

    /**
     * @var float
     */
    private $installmentAmounts;

    /**
     * @var \DateTimeInterface
     */
    private $installmentDates;

    /**
     * @var string
     */
    private $note;

    /**
     * @var int
     */
    private $processType;

    /**
     * @return float
     */
    public function getInstallmentAmounts()
    {
        return $this->installmentAmounts;
    }

    /**
     * @param float $installmentAmounts
     * @return CustomPaymentSchedule
     */
    public function withInstallmentAmounts($installmentAmounts)
    {
        $new = clone $this;
        $new->installmentAmounts = $installmentAmounts;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInstallmentDates()
    {
        return $this->installmentDates;
    }

    /**
     * @param \DateTimeInterface $installmentDates
     * @return CustomPaymentSchedule
     */
    public function withInstallmentDates($installmentDates)
    {
        $new = clone $this;
        $new->installmentDates = $installmentDates;

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
     * @return CustomPaymentSchedule
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
     * @return CustomPaymentSchedule
     */
    public function withProcessType($processType)
    {
        $new = clone $this;
        $new->processType = $processType;

        return $new;
    }


}

