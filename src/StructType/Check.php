<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Check StructType
 * @subpackage Structs
 */
class Check extends AbstractStructBase
{
    /**
     * The account
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * The bank
     * @var string|null
     */
    protected ?string $bank = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The number
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The payee
     * @var string|null
     */
    protected ?string $payee = null;
    /**
     * The signator
     * @var string|null
     */
    protected ?string $signator = null;
    /**
     * Constructor method for Check
     * @uses Check::setAccount()
     * @uses Check::setBank()
     * @uses Check::setDate()
     * @uses Check::setNote()
     * @uses Check::setNumber()
     * @uses Check::setPayee()
     * @uses Check::setSignator()
     * @param string $account
     * @param string $bank
     * @param string $date
     * @param string $note
     * @param string $number
     * @param string $payee
     * @param string $signator
     */
    public function __construct(?string $account = null, ?string $bank = null, ?string $date = null, ?string $note = null, ?string $number = null, ?string $payee = null, ?string $signator = null)
    {
        $this
            ->setAccount($account)
            ->setBank($bank)
            ->setDate($date)
            ->setNote($note)
            ->setNumber($number)
            ->setPayee($payee)
            ->setSignator($signator);
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \BurgerDigital\eTapestry\StructType\Check
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get bank value
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }
    /**
     * Set bank value
     * @param string $bank
     * @return \BurgerDigital\eTapestry\StructType\Check
     */
    public function setBank(?string $bank = null): self
    {
        // validation for constraint: string
        if (!is_null($bank) && !is_string($bank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank, true), gettype($bank)), __LINE__);
        }
        $this->bank = $bank;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \BurgerDigital\eTapestry\StructType\Check
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Check
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
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \BurgerDigital\eTapestry\StructType\Check
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
    /**
     * Get payee value
     * @return string|null
     */
    public function getPayee(): ?string
    {
        return $this->payee;
    }
    /**
     * Set payee value
     * @param string $payee
     * @return \BurgerDigital\eTapestry\StructType\Check
     */
    public function setPayee(?string $payee = null): self
    {
        // validation for constraint: string
        if (!is_null($payee) && !is_string($payee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payee, true), gettype($payee)), __LINE__);
        }
        $this->payee = $payee;
        
        return $this;
    }
    /**
     * Get signator value
     * @return string|null
     */
    public function getSignator(): ?string
    {
        return $this->signator;
    }
    /**
     * Set signator value
     * @param string $signator
     * @return \BurgerDigital\eTapestry\StructType\Check
     */
    public function setSignator(?string $signator = null): self
    {
        // validation for constraint: string
        if (!is_null($signator) && !is_string($signator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signator, true), gettype($signator)), __LINE__);
        }
        $this->signator = $signator;
        
        return $this;
    }
}
