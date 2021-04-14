<?php

namespace BurgerDigital\eTapestry\Type;

class Stock
{

    /**
     * @var string
     */
    private $brokerName;

    /**
     * @var float
     */
    private $brokerageFee;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $note;

    /**
     * @var float
     */
    private $numberOfShares;

    /**
     * @var float
     */
    private $pricePerShare;

    /**
     * @var \DateTimeInterface
     */
    private $saleDate;

    /**
     * @var float
     */
    private $salePricePerShare;

    /**
     * @var string
     */
    private $ticker;

    /**
     * @return string
     */
    public function getBrokerName()
    {
        return $this->brokerName;
    }

    /**
     * @param string $brokerName
     * @return Stock
     */
    public function withBrokerName($brokerName)
    {
        $new = clone $this;
        $new->brokerName = $brokerName;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrokerageFee()
    {
        return $this->brokerageFee;
    }

    /**
     * @param float $brokerageFee
     * @return Stock
     */
    public function withBrokerageFee($brokerageFee)
    {
        $new = clone $this;
        $new->brokerageFee = $brokerageFee;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Stock
     */
    public function withCompany($company)
    {
        $new = clone $this;
        $new->company = $company;

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
     * @return Stock
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return float
     */
    public function getNumberOfShares()
    {
        return $this->numberOfShares;
    }

    /**
     * @param float $numberOfShares
     * @return Stock
     */
    public function withNumberOfShares($numberOfShares)
    {
        $new = clone $this;
        $new->numberOfShares = $numberOfShares;

        return $new;
    }

    /**
     * @return float
     */
    public function getPricePerShare()
    {
        return $this->pricePerShare;
    }

    /**
     * @param float $pricePerShare
     * @return Stock
     */
    public function withPricePerShare($pricePerShare)
    {
        $new = clone $this;
        $new->pricePerShare = $pricePerShare;

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
     * @return Stock
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
    public function getSalePricePerShare()
    {
        return $this->salePricePerShare;
    }

    /**
     * @param float $salePricePerShare
     * @return Stock
     */
    public function withSalePricePerShare($salePricePerShare)
    {
        $new = clone $this;
        $new->salePricePerShare = $salePricePerShare;

        return $new;
    }

    /**
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * @param string $ticker
     * @return Stock
     */
    public function withTicker($ticker)
    {
        $new = clone $this;
        $new->ticker = $ticker;

        return $new;
    }


}

