<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginCredentialsResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var bool
     */
    private $createdNewAccount;

    /**
     * @var bool
     */
    private $matchedMultiples;

    /**
     * @return string
     */
    public function getAccountRef()
    {
        return $this->accountRef;
    }

    /**
     * @param string $accountRef
     * @return LoginCredentialsResponse
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreatedNewAccount()
    {
        return $this->createdNewAccount;
    }

    /**
     * @param bool $createdNewAccount
     * @return LoginCredentialsResponse
     */
    public function withCreatedNewAccount($createdNewAccount)
    {
        $new = clone $this;
        $new->createdNewAccount = $createdNewAccount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMatchedMultiples()
    {
        return $this->matchedMultiples;
    }

    /**
     * @param bool $matchedMultiples
     * @return LoginCredentialsResponse
     */
    public function withMatchedMultiples($matchedMultiples)
    {
        $new = clone $this;
        $new->matchedMultiples = $matchedMultiples;

        return $new;
    }


}

