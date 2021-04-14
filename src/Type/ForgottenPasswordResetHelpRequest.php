<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ForgottenPasswordResetHelpRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $ref;

    /**
     * Constructor
     *
     * @var string $code
     * @var string $ref
     */
    public function __construct($code, $ref)
    {
        $this->code = $code;
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return ForgottenPasswordResetHelpRequest
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return ForgottenPasswordResetHelpRequest
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }


}

