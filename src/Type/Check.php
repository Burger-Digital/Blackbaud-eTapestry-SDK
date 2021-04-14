<?php

namespace BurgerDigital\Type;

class Check
{

    /**
     * @var string
     */
    private $account;

    /**
     * @var string
     */
    private $bank;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $payee;

    /**
     * @var string
     */
    private $signator;

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param string $account
     * @return Check
     */
    public function withAccount($account)
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     * @return Check
     */
    public function withBank($bank)
    {
        $new = clone $this;
        $new->bank = $bank;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return Check
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

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
     * @return Check
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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Check
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
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * @param string $payee
     * @return Check
     */
    public function withPayee($payee)
    {
        $new = clone $this;
        $new->payee = $payee;

        return $new;
    }

    /**
     * @return string
     */
    public function getSignator()
    {
        return $this->signator;
    }

    /**
     * @param string $signator
     * @return Check
     */
    public function withSignator($signator)
    {
        $new = clone $this;
        $new->signator = $signator;

        return $new;
    }


}

