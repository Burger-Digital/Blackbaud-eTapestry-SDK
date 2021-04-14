<?php

namespace BurgerDigital\eTapestry\Type;

class RealEstate
{

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $realEstateType;

    /**
     * @var \DateTimeInterface
     */
    private $saleDate;

    /**
     * @var float
     */
    private $saleValue;

    /**
     * @var string
     */
    private $size;

    /**
     * @var string
     */
    private $taxParcelNumber;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return RealEstate
     */
    public function withLocation($location)
    {
        $new = clone $this;
        $new->location = $location;

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
     * @return RealEstate
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return string
     */
    public function getRealEstateType()
    {
        return $this->realEstateType;
    }

    /**
     * @param string $realEstateType
     * @return RealEstate
     */
    public function withRealEstateType($realEstateType)
    {
        $new = clone $this;
        $new->realEstateType = $realEstateType;

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
     * @return RealEstate
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
     * @return RealEstate
     */
    public function withSaleValue($saleValue)
    {
        $new = clone $this;
        $new->saleValue = $saleValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     * @return RealEstate
     */
    public function withSize($size)
    {
        $new = clone $this;
        $new->size = $size;

        return $new;
    }

    /**
     * @return string
     */
    public function getTaxParcelNumber()
    {
        return $this->taxParcelNumber;
    }

    /**
     * @param string $taxParcelNumber
     * @return RealEstate
     */
    public function withTaxParcelNumber($taxParcelNumber)
    {
        $new = clone $this;
        $new->taxParcelNumber = $taxParcelNumber;

        return $new;
    }


}

