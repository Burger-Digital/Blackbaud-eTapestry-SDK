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
     * @var \BurgerDigital\eTapestry\StructType\CCP|null
     */
    protected ?\StructType\CCP $CCP = null;
    /**
     * The bond
     * @var \BurgerDigital\eTapestry\StructType\Bond|null
     */
    protected ?\StructType\Bond $bond = null;
    /**
     * The buckaroo
     * @var \BurgerDigital\eTapestry\StructType\Buckaroo|null
     */
    protected ?\StructType\Buckaroo $buckaroo = null;
    /**
     * The cash
     * @var \BurgerDigital\eTapestry\StructType\Cash|null
     */
    protected ?\StructType\Cash $cash = null;
    /**
     * The check
     * @var \BurgerDigital\eTapestry\StructType\Check|null
     */
    protected ?\StructType\Check $check = null;
    /**
     * The creditCard
     * @var \BurgerDigital\eTapestry\StructType\CreditCard|null
     */
    protected ?\StructType\CreditCard $creditCard = null;
    /**
     * The electronicFundsTransfer
     * @var \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer|null
     */
    protected ?\StructType\ElectronicFundsTransfer $electronicFundsTransfer = null;
    /**
     * The inKind
     * @var \BurgerDigital\eTapestry\StructType\InKind|null
     */
    protected ?\StructType\InKind $inKind = null;
    /**
     * The insurance
     * @var \BurgerDigital\eTapestry\StructType\Insurance|null
     */
    protected ?\StructType\Insurance $insurance = null;
    /**
     * The realEstate
     * @var \BurgerDigital\eTapestry\StructType\RealEstate|null
     */
    protected ?\StructType\RealEstate $realEstate = null;
    /**
     * The stock
     * @var \BurgerDigital\eTapestry\StructType\Stock|null
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
     * @param \BurgerDigital\eTapestry\StructType\CCP $cCP
     * @param \BurgerDigital\eTapestry\StructType\Bond $bond
     * @param \BurgerDigital\eTapestry\StructType\Buckaroo $buckaroo
     * @param \BurgerDigital\eTapestry\StructType\Cash $cash
     * @param \BurgerDigital\eTapestry\StructType\Check $check
     * @param \BurgerDigital\eTapestry\StructType\CreditCard $creditCard
     * @param \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer $electronicFundsTransfer
     * @param \BurgerDigital\eTapestry\StructType\InKind $inKind
     * @param \BurgerDigital\eTapestry\StructType\Insurance $insurance
     * @param \BurgerDigital\eTapestry\StructType\RealEstate $realEstate
     * @param \BurgerDigital\eTapestry\StructType\Stock $stock
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
     * @return \BurgerDigital\eTapestry\StructType\CCP|null
     */
    public function getCCP(): ?\StructType\CCP
    {
        return $this->CCP;
    }
    /**
     * Set CCP value
     * @param \BurgerDigital\eTapestry\StructType\CCP $cCP
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setCCP(?\StructType\CCP $cCP = null): self
    {
        $this->CCP = $cCP;
        
        return $this;
    }
    /**
     * Get bond value
     * @return \BurgerDigital\eTapestry\StructType\Bond|null
     */
    public function getBond(): ?\StructType\Bond
    {
        return $this->bond;
    }
    /**
     * Set bond value
     * @param \BurgerDigital\eTapestry\StructType\Bond $bond
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setBond(?\StructType\Bond $bond = null): self
    {
        $this->bond = $bond;
        
        return $this;
    }
    /**
     * Get buckaroo value
     * @return \BurgerDigital\eTapestry\StructType\Buckaroo|null
     */
    public function getBuckaroo(): ?\StructType\Buckaroo
    {
        return $this->buckaroo;
    }
    /**
     * Set buckaroo value
     * @param \BurgerDigital\eTapestry\StructType\Buckaroo $buckaroo
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setBuckaroo(?\StructType\Buckaroo $buckaroo = null): self
    {
        $this->buckaroo = $buckaroo;
        
        return $this;
    }
    /**
     * Get cash value
     * @return \BurgerDigital\eTapestry\StructType\Cash|null
     */
    public function getCash(): ?\StructType\Cash
    {
        return $this->cash;
    }
    /**
     * Set cash value
     * @param \BurgerDigital\eTapestry\StructType\Cash $cash
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setCash(?\StructType\Cash $cash = null): self
    {
        $this->cash = $cash;
        
        return $this;
    }
    /**
     * Get check value
     * @return \BurgerDigital\eTapestry\StructType\Check|null
     */
    public function getCheck(): ?\StructType\Check
    {
        return $this->check;
    }
    /**
     * Set check value
     * @param \BurgerDigital\eTapestry\StructType\Check $check
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setCheck(?\StructType\Check $check = null): self
    {
        $this->check = $check;
        
        return $this;
    }
    /**
     * Get creditCard value
     * @return \BurgerDigital\eTapestry\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\StructType\CreditCard
    {
        return $this->creditCard;
    }
    /**
     * Set creditCard value
     * @param \BurgerDigital\eTapestry\StructType\CreditCard $creditCard
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setCreditCard(?\StructType\CreditCard $creditCard = null): self
    {
        $this->creditCard = $creditCard;
        
        return $this;
    }
    /**
     * Get electronicFundsTransfer value
     * @return \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer|null
     */
    public function getElectronicFundsTransfer(): ?\StructType\ElectronicFundsTransfer
    {
        return $this->electronicFundsTransfer;
    }
    /**
     * Set electronicFundsTransfer value
     * @param \BurgerDigital\eTapestry\StructType\ElectronicFundsTransfer $electronicFundsTransfer
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setElectronicFundsTransfer(?\StructType\ElectronicFundsTransfer $electronicFundsTransfer = null): self
    {
        $this->electronicFundsTransfer = $electronicFundsTransfer;
        
        return $this;
    }
    /**
     * Get inKind value
     * @return \BurgerDigital\eTapestry\StructType\InKind|null
     */
    public function getInKind(): ?\StructType\InKind
    {
        return $this->inKind;
    }
    /**
     * Set inKind value
     * @param \BurgerDigital\eTapestry\StructType\InKind $inKind
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setInKind(?\StructType\InKind $inKind = null): self
    {
        $this->inKind = $inKind;
        
        return $this;
    }
    /**
     * Get insurance value
     * @return \BurgerDigital\eTapestry\StructType\Insurance|null
     */
    public function getInsurance(): ?\StructType\Insurance
    {
        return $this->insurance;
    }
    /**
     * Set insurance value
     * @param \BurgerDigital\eTapestry\StructType\Insurance $insurance
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setInsurance(?\StructType\Insurance $insurance = null): self
    {
        $this->insurance = $insurance;
        
        return $this;
    }
    /**
     * Get realEstate value
     * @return \BurgerDigital\eTapestry\StructType\RealEstate|null
     */
    public function getRealEstate(): ?\StructType\RealEstate
    {
        return $this->realEstate;
    }
    /**
     * Set realEstate value
     * @param \BurgerDigital\eTapestry\StructType\RealEstate $realEstate
     * @return \BurgerDigital\eTapestry\StructType\Valuable
     */
    public function setRealEstate(?\StructType\RealEstate $realEstate = null): self
    {
        $this->realEstate = $realEstate;
        
        return $this;
    }
    /**
     * Get stock value
     * @return \BurgerDigital\eTapestry\StructType\Stock|null
     */
    public function getStock(): ?\StructType\Stock
    {
        return $this->stock;
    }
    /**
     * Set stock value
     * @param \BurgerDigital\eTapestry\StructType\Stock $stock
     * @return \BurgerDigital\eTapestry\StructType\Valuable
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
     * @return \BurgerDigital\eTapestry\StructType\Valuable
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
