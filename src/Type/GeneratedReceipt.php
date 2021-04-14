<?php

namespace BurgerDigital\Type;

class GeneratedReceipt
{

    /**
     * @var \DateTimeInterface
     */
    private $dateIssued;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $voidedNumber;

    /**
     * @return \DateTimeInterface
     */
    public function getDateIssued()
    {
        return $this->dateIssued;
    }

    /**
     * @param \DateTimeInterface $dateIssued
     * @return GeneratedReceipt
     */
    public function withDateIssued($dateIssued)
    {
        $new = clone $this;
        $new->dateIssued = $dateIssued;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return GeneratedReceipt
     */
    public function withNumber($number)
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return GeneratedReceipt
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
    public function getVoidedNumber()
    {
        return $this->voidedNumber;
    }

    /**
     * @param string $voidedNumber
     * @return GeneratedReceipt
     */
    public function withVoidedNumber($voidedNumber)
    {
        $new = clone $this;
        $new->voidedNumber = $voidedNumber;

        return $new;
    }


}

