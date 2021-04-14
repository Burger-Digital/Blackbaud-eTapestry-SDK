<?php

namespace BurgerDigital\eTapestry\Type;

class InKind
{

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTimeInterface
     */
    private $saleDate;

    /**
     * @var float
     */
    private $saleValue;

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return InKind
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }

    /**
     * @param \DateTimeInterface $saleDate
     * @return InKind
     */
    public function withSaleDate($saleDate)
    {
        $new = clone $this;
        $new->saleDate = $saleDate;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaleValue()
    {
        return $this->saleValue;
    }

    /**
     * @param float $saleValue
     * @return InKind
     */
    public function withSaleValue($saleValue)
    {
        $new = clone $this;
        $new->saleValue = $saleValue;

        return $new;
    }


}

