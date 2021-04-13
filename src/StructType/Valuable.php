<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Valuable StructType
 * @subpackage Structs
 */
class Valuable extends AbstractStructBase
{
    /**
     * The CCP
     * @var \StructType\CCP|null
     */
    protected ?\StructType\CCP $CCP = null;
    /**
     * The bond
     * @var \StructType\Bond|null
     */
    protected ?\StructType\Bond $bond = null;
    /**
     * The buckaroo
     * @var \StructType\Buckaroo|null
     */
    protected ?\StructType\Buckaroo $buckaroo = null;
    /**
     * The cash
     * @var \StructType\Cash|null
     */
    protected ?\StructType\Cash $cash = null;
    /**
     * The check
     * @var \StructType\Check|null
     */
    protected ?\StructType\Check $check = null;
    /**
     * The creditCard
     * @var \StructType\CreditCard|null
     */
    protected ?\StructType\CreditCard $creditCard = null;
    /**
     * The electronicFundsTransfer
     * @var \StructType\ElectronicFundsTransfer|null
     */
    protected ?\StructType\ElectronicFundsTransfer $electronicFundsTransfer = null;
    /**
     * The inKind
     * @var \StructType\InKind|null
     */
    protected ?\StructType\InKind $inKind = null;
    /**
     * The insurance
     * @var \StructType\Insurance|null
     */
    protected ?\StructType\Insurance $insurance = null;
    /**
     * The realEstate
     * @var \StructType\RealEstate|null
     */
    protected ?\StructType\RealEstate $realEstate = null;
    /**
     * The stock
     * @var \StructType\Stock|null
     */
    protected ?\StructType\Stock $stock = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for Valuable
     * @uses Valuable::setCCP()
     * @uses Valuable::setBond()
     * @uses Valuable::setBuckaroo()
     * @uses Valuable::setCash()
     * @uses Valuable::setCheck()
     * @uses Valuable::setCreditCard()
     * @uses Valuable::setElectronicFundsTransfer()
     * @uses Valuable::setInKind()
     * @uses Valuable::setInsurance()
     * @uses Valuable::setRealEstate()
     * @uses Valuable::setStock()
     * @uses Valuable::setType()
     * @param \StructType\CCP $cCP
     * @param \StructType\Bond $bond
     * @param \StructType\Buckaroo $buckaroo
     * @param \StructType\Cash $cash
     * @param \StructType\Check $check
     * @param \StructType\CreditCard $creditCard
     * @param \StructType\ElectronicFundsTransfer $electronicFundsTransfer
     * @param \StructType\InKind $inKind
     * @param \StructType\Insurance $insurance
     * @param \StructType\RealEstate $realEstate
     * @param \StructType\Stock $stock
     * @param int $type
     */
    public function __construct(?\StructType\CCP $cCP = null, ?\StructType\Bond $bond = null, ?\StructType\Buckaroo $buckaroo = null, ?\StructType\Cash $cash = null, ?\StructType\Check $check = null, ?\StructType\CreditCard $creditCard = null, ?\StructType\ElectronicFundsTransfer $electronicFundsTransfer = null, ?\StructType\InKind $inKind = null, ?\StructType\Insurance $insurance = null, ?\StructType\RealEstate $realEstate = null, ?\StructType\Stock $stock = null, ?int $type = null)
    {
        $this
            ->setCCP($cCP)
            ->setBond($bond)
            ->setBuckaroo($buckaroo)
            ->setCash($cash)
            ->setCheck($check)
            ->setCreditCard($creditCard)
            ->setElectronicFundsTransfer($electronicFundsTransfer)
            ->setInKind($inKind)
            ->setInsurance($insurance)
            ->setRealEstate($realEstate)
            ->setStock($stock)
            ->setType($type);
    }
    /**
     * Get CCP value
     * @return \StructType\CCP|null
     */
    public function getCCP(): ?\StructType\CCP
    {
        return $this->CCP;
    }
    /**
     * Set CCP value
     * @param \StructType\CCP $cCP
     * @return \StructType\Valuable
     */
    public function setCCP(?\StructType\CCP $cCP = null): self
    {
        $this->CCP = $cCP;
        
        return $this;
    }
    /**
     * Get bond value
     * @return \StructType\Bond|null
     */
    public function getBond(): ?\StructType\Bond
    {
        return $this->bond;
    }
    /**
     * Set bond value
     * @param \StructType\Bond $bond
     * @return \StructType\Valuable
     */
    public function setBond(?\StructType\Bond $bond = null): self
    {
        $this->bond = $bond;
        
        return $this;
    }
    /**
     * Get buckaroo value
     * @return \StructType\Buckaroo|null
     */
    public function getBuckaroo(): ?\StructType\Buckaroo
    {
        return $this->buckaroo;
    }
    /**
     * Set buckaroo value
     * @param \StructType\Buckaroo $buckaroo
     * @return \StructType\Valuable
     */
    public function setBuckaroo(?\StructType\Buckaroo $buckaroo = null): self
    {
        $this->buckaroo = $buckaroo;
        
        return $this;
    }
    /**
     * Get cash value
     * @return \StructType\Cash|null
     */
    public function getCash(): ?\StructType\Cash
    {
        return $this->cash;
    }
    /**
     * Set cash value
     * @param \StructType\Cash $cash
     * @return \StructType\Valuable
     */
    public function setCash(?\StructType\Cash $cash = null): self
    {
        $this->cash = $cash;
        
        return $this;
    }
    /**
     * Get check value
     * @return \StructType\Check|null
     */
    public function getCheck(): ?\StructType\Check
    {
        return $this->check;
    }
    /**
     * Set check value
     * @param \StructType\Check $check
     * @return \StructType\Valuable
     */
    public function setCheck(?\StructType\Check $check = null): self
    {
        $this->check = $check;
        
        return $this;
    }
    /**
     * Get creditCard value
     * @return \StructType\CreditCard|null
     */
    public function getCreditCard(): ?\StructType\CreditCard
    {
        return $this->creditCard;
    }
    /**
     * Set creditCard value
     * @param \StructType\CreditCard $creditCard
     * @return \StructType\Valuable
     */
    public function setCreditCard(?\StructType\CreditCard $creditCard = null): self
    {
        $this->creditCard = $creditCard;
        
        return $this;
    }
    /**
     * Get electronicFundsTransfer value
     * @return \StructType\ElectronicFundsTransfer|null
     */
    public function getElectronicFundsTransfer(): ?\StructType\ElectronicFundsTransfer
    {
        return $this->electronicFundsTransfer;
    }
    /**
     * Set electronicFundsTransfer value
     * @param \StructType\ElectronicFundsTransfer $electronicFundsTransfer
     * @return \StructType\Valuable
     */
    public function setElectronicFundsTransfer(?\StructType\ElectronicFundsTransfer $electronicFundsTransfer = null): self
    {
        $this->electronicFundsTransfer = $electronicFundsTransfer;
        
        return $this;
    }
    /**
     * Get inKind value
     * @return \StructType\InKind|null
     */
    public function getInKind(): ?\StructType\InKind
    {
        return $this->inKind;
    }
    /**
     * Set inKind value
     * @param \StructType\InKind $inKind
     * @return \StructType\Valuable
     */
    public function setInKind(?\StructType\InKind $inKind = null): self
    {
        $this->inKind = $inKind;
        
        return $this;
    }
    /**
     * Get insurance value
     * @return \StructType\Insurance|null
     */
    public function getInsurance(): ?\StructType\Insurance
    {
        return $this->insurance;
    }
    /**
     * Set insurance value
     * @param \StructType\Insurance $insurance
     * @return \StructType\Valuable
     */
    public function setInsurance(?\StructType\Insurance $insurance = null): self
    {
        $this->insurance = $insurance;
        
        return $this;
    }
    /**
     * Get realEstate value
     * @return \StructType\RealEstate|null
     */
    public function getRealEstate(): ?\StructType\RealEstate
    {
        return $this->realEstate;
    }
    /**
     * Set realEstate value
     * @param \StructType\RealEstate $realEstate
     * @return \StructType\Valuable
     */
    public function setRealEstate(?\StructType\RealEstate $realEstate = null): self
    {
        $this->realEstate = $realEstate;
        
        return $this;
    }
    /**
     * Get stock value
     * @return \StructType\Stock|null
     */
    public function getStock(): ?\StructType\Stock
    {
        return $this->stock;
    }
    /**
     * Set stock value
     * @param \StructType\Stock $stock
     * @return \StructType\Valuable
     */
    public function setStock(?\StructType\Stock $stock = null): self
    {
        $this->stock = $stock;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \StructType\Valuable
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
