<?php

namespace BurgerDigital\eTapestry\Type;

class CreditCard
{

    /**
     * @var string
     */
    private $authorizationCode;

    /**
     * @var string
     */
    private $cardType;

    /**
     * @var string
     */
    private $cvv2;

    /**
     * @var int
     */
    private $expirationMonth;

    /**
     * @var int
     */
    private $expirationYear;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $middleName;

    /**
     * @var string
     */
    private $nameOnCard;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $number;

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param string $authorizationCode
     * @return CreditCard
     */
    public function withAuthorizationCode($authorizationCode)
    {
        $new = clone $this;
        $new->authorizationCode = $authorizationCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     * @return CreditCard
     */
    public function withCardType($cardType)
    {
        $new = clone $this;
        $new->cardType = $cardType;

        return $new;
    }

    /**
     * @return string
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * @param string $cvv2
     * @return CreditCard
     */
    public function withCvv2($cvv2)
    {
        $new = clone $this;
        $new->cvv2 = $cvv2;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * @param int $expirationMonth
     * @return CreditCard
     */
    public function withExpirationMonth($expirationMonth)
    {
        $new = clone $this;
        $new->expirationMonth = $expirationMonth;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * @param int $expirationYear
     * @return CreditCard
     */
    public function withExpirationYear($expirationYear)
    {
        $new = clone $this;
        $new->expirationYear = $expirationYear;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return CreditCard
     */
    public function withFirstName($firstName)
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return CreditCard
     */
    public function withLastName($lastName)
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return CreditCard
     */
    public function withMiddleName($middleName)
    {
        $new = clone $this;
        $new->middleName = $middleName;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @param string $nameOnCard
     * @return CreditCard
     */
    public function withNameOnCard($nameOnCard)
    {
        $new = clone $this;
        $new->nameOnCard = $nameOnCard;

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
     * @return CreditCard
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
     * @return CreditCard
     */
    public function withNumber($number)
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }


}

