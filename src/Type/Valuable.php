<?php

namespace BurgerDigital\Type;

class Valuable
{

    /**
     * @var \BurgerDigital\Type\CCP
     */
    private $CCP;

    /**
     * @var \BurgerDigital\Type\Bond
     */
    private $bond;

    /**
     * @var \BurgerDigital\Type\Buckaroo
     */
    private $buckaroo;

    /**
     * @var \BurgerDigital\Type\Cash
     */
    private $cash;

    /**
     * @var \BurgerDigital\Type\Check
     */
    private $check;

    /**
     * @var \BurgerDigital\Type\CreditCard
     */
    private $creditCard;

    /**
     * @var \BurgerDigital\Type\ElectronicFundsTransfer
     */
    private $electronicFundsTransfer;

    /**
     * @var \BurgerDigital\Type\InKind
     */
    private $inKind;

    /**
     * @var \BurgerDigital\Type\Insurance
     */
    private $insurance;

    /**
     * @var \BurgerDigital\Type\RealEstate
     */
    private $realEstate;

    /**
     * @var \BurgerDigital\Type\Stock
     */
    private $stock;

    /**
     * @var int
     */
    private $type;

    /**
     * @return \BurgerDigital\eTapestry\Type\CCP
     */
    public function getCCP()
    {
        return $this->CCP;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CCP $CCP
     * @return Valuable
     */
    public function withCCP($CCP)
    {
        $new = clone $this;
        $new->CCP = $CCP;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Bond
     */
    public function getBond()
    {
        return $this->bond;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Bond $bond
     * @return Valuable
     */
    public function withBond($bond)
    {
        $new = clone $this;
        $new->bond = $bond;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Buckaroo
     */
    public function getBuckaroo()
    {
        return $this->buckaroo;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Buckaroo $buckaroo
     * @return Valuable
     */
    public function withBuckaroo($buckaroo)
    {
        $new = clone $this;
        $new->buckaroo = $buckaroo;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Cash
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Cash $cash
     * @return Valuable
     */
    public function withCash($cash)
    {
        $new = clone $this;
        $new->cash = $cash;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Check
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Check $check
     * @return Valuable
     */
    public function withCheck($check)
    {
        $new = clone $this;
        $new->check = $check;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CreditCard
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CreditCard $creditCard
     * @return Valuable
     */
    public function withCreditCard($creditCard)
    {
        $new = clone $this;
        $new->creditCard = $creditCard;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\ElectronicFundsTransfer
     */
    public function getElectronicFundsTransfer()
    {
        return $this->electronicFundsTransfer;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\ElectronicFundsTransfer $electronicFundsTransfer
     * @return Valuable
     */
    public function withElectronicFundsTransfer($electronicFundsTransfer)
    {
        $new = clone $this;
        $new->electronicFundsTransfer = $electronicFundsTransfer;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\InKind
     */
    public function getInKind()
    {
        return $this->inKind;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\InKind $inKind
     * @return Valuable
     */
    public function withInKind($inKind)
    {
        $new = clone $this;
        $new->inKind = $inKind;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Insurance
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Insurance $insurance
     * @return Valuable
     */
    public function withInsurance($insurance)
    {
        $new = clone $this;
        $new->insurance = $insurance;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\RealEstate
     */
    public function getRealEstate()
    {
        return $this->realEstate;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\RealEstate $realEstate
     * @return Valuable
     */
    public function withRealEstate($realEstate)
    {
        $new = clone $this;
        $new->realEstate = $realEstate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Stock $stock
     * @return Valuable
     */
    public function withStock($stock)
    {
        $new = clone $this;
        $new->stock = $stock;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Valuable
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

