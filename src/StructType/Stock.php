<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Stock StructType
 * @subpackage Structs
 */
class Stock extends AbstractStructBase
{
    /**
     * The brokerName
     * @var string|null
     */
    protected ?string $brokerName = null;
    /**
     * The brokerageFee
     * @var float|null
     */
    protected ?float $brokerageFee = null;
    /**
     * The company
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The numberOfShares
     * @var float|null
     */
    protected ?float $numberOfShares = null;
    /**
     * The pricePerShare
     * @var float|null
     */
    protected ?float $pricePerShare = null;
    /**
     * The saleDate
     * @var string|null
     */
    protected ?string $saleDate = null;
    /**
     * The salePricePerShare
     * @var float|null
     */
    protected ?float $salePricePerShare = null;
    /**
     * The ticker
     * @var string|null
     */
    protected ?string $ticker = null;
    /**
     * Constructor method for Stock
     * @uses Stock::setBrokerName()
     * @uses Stock::setBrokerageFee()
     * @uses Stock::setCompany()
     * @uses Stock::setNote()
     * @uses Stock::setNumberOfShares()
     * @uses Stock::setPricePerShare()
     * @uses Stock::setSaleDate()
     * @uses Stock::setSalePricePerShare()
     * @uses Stock::setTicker()
     * @param string $brokerName
     * @param float $brokerageFee
     * @param string $company
     * @param string $note
     * @param float $numberOfShares
     * @param float $pricePerShare
     * @param string $saleDate
     * @param float $salePricePerShare
     * @param string $ticker
     */
    public function __construct(?string $brokerName = null, ?float $brokerageFee = null, ?string $company = null, ?string $note = null, ?float $numberOfShares = null, ?float $pricePerShare = null, ?string $saleDate = null, ?float $salePricePerShare = null, ?string $ticker = null)
    {
        $this
            ->setBrokerName($brokerName)
            ->setBrokerageFee($brokerageFee)
            ->setCompany($company)
            ->setNote($note)
            ->setNumberOfShares($numberOfShares)
            ->setPricePerShare($pricePerShare)
            ->setSaleDate($saleDate)
            ->setSalePricePerShare($salePricePerShare)
            ->setTicker($ticker);
    }
    /**
     * Get brokerName value
     * @return string|null
     */
    public function getBrokerName(): ?string
    {
        return $this->brokerName;
    }
    /**
     * Set brokerName value
     * @param string $brokerName
     * @return \StructType\Stock
     */
    public function setBrokerName(?string $brokerName = null): self
    {
        // validation for constraint: string
        if (!is_null($brokerName) && !is_string($brokerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brokerName, true), gettype($brokerName)), __LINE__);
        }
        $this->brokerName = $brokerName;
        
        return $this;
    }
    /**
     * Get brokerageFee value
     * @return float|null
     */
    public function getBrokerageFee(): ?float
    {
        return $this->brokerageFee;
    }
    /**
     * Set brokerageFee value
     * @param float $brokerageFee
     * @return \StructType\Stock
     */
    public function setBrokerageFee(?float $brokerageFee = null): self
    {
        // validation for constraint: float
        if (!is_null($brokerageFee) && !(is_float($brokerageFee) || is_numeric($brokerageFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($brokerageFee, true), gettype($brokerageFee)), __LINE__);
        }
        $this->brokerageFee = $brokerageFee;
        
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \StructType\Stock
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        
        return $this;
    }
    /**
     * Get note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \StructType\Stock
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
    /**
     * Get numberOfShares value
     * @return float|null
     */
    public function getNumberOfShares(): ?float
    {
        return $this->numberOfShares;
    }
    /**
     * Set numberOfShares value
     * @param float $numberOfShares
     * @return \StructType\Stock
     */
    public function setNumberOfShares(?float $numberOfShares = null): self
    {
        // validation for constraint: float
        if (!is_null($numberOfShares) && !(is_float($numberOfShares) || is_numeric($numberOfShares))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($numberOfShares, true), gettype($numberOfShares)), __LINE__);
        }
        $this->numberOfShares = $numberOfShares;
        
        return $this;
    }
    /**
     * Get pricePerShare value
     * @return float|null
     */
    public function getPricePerShare(): ?float
    {
        return $this->pricePerShare;
    }
    /**
     * Set pricePerShare value
     * @param float $pricePerShare
     * @return \StructType\Stock
     */
    public function setPricePerShare(?float $pricePerShare = null): self
    {
        // validation for constraint: float
        if (!is_null($pricePerShare) && !(is_float($pricePerShare) || is_numeric($pricePerShare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pricePerShare, true), gettype($pricePerShare)), __LINE__);
        }
        $this->pricePerShare = $pricePerShare;
        
        return $this;
    }
    /**
     * Get saleDate value
     * @return string|null
     */
    public function getSaleDate(): ?string
    {
        return $this->saleDate;
    }
    /**
     * Set saleDate value
     * @param string $saleDate
     * @return \StructType\Stock
     */
    public function setSaleDate(?string $saleDate = null): self
    {
        // validation for constraint: string
        if (!is_null($saleDate) && !is_string($saleDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleDate, true), gettype($saleDate)), __LINE__);
        }
        $this->saleDate = $saleDate;
        
        return $this;
    }
    /**
     * Get salePricePerShare value
     * @return float|null
     */
    public function getSalePricePerShare(): ?float
    {
        return $this->salePricePerShare;
    }
    /**
     * Set salePricePerShare value
     * @param float $salePricePerShare
     * @return \StructType\Stock
     */
    public function setSalePricePerShare(?float $salePricePerShare = null): self
    {
        // validation for constraint: float
        if (!is_null($salePricePerShare) && !(is_float($salePricePerShare) || is_numeric($salePricePerShare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePricePerShare, true), gettype($salePricePerShare)), __LINE__);
        }
        $this->salePricePerShare = $salePricePerShare;
        
        return $this;
    }
    /**
     * Get ticker value
     * @return string|null
     */
    public function getTicker(): ?string
    {
        return $this->ticker;
    }
    /**
     * Set ticker value
     * @param string $ticker
     * @return \StructType\Stock
     */
    public function setTicker(?string $ticker = null): self
    {
        // validation for constraint: string
        if (!is_null($ticker) && !is_string($ticker)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticker, true), gettype($ticker)), __LINE__);
        }
        $this->ticker = $ticker;
        
        return $this;
    }
}
